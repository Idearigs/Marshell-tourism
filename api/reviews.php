<?php
require_once '../includes/config.php';

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit(0);
}

$method = $_SERVER['REQUEST_METHOD'];
$action = $_GET['action'] ?? '';

try {
    $pdo = getDBConnection();
    if (!$pdo) {
        throw new Exception('Database connection failed');
    }

    switch ($method) {
        case 'GET':
            handleGetRequest($pdo, $action);
            break;
        case 'POST':
            handlePostRequest($pdo, $action);
            break;
        default:
            http_response_code(405);
            echo json_encode(['error' => 'Method not allowed']);
    }
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}

function handleGetRequest($pdo, $action) {
    switch ($action) {
        case 'reviews':
            getReviews($pdo);
            break;
        case 'package_stats':
            getPackageStats($pdo);
            break;
        default:
            http_response_code(400);
            echo json_encode(['error' => 'Invalid action']);
    }
}

function handlePostRequest($pdo, $action) {
    switch ($action) {
        case 'submit_review':
            submitReview($pdo);
            break;
        case 'update_views':
            updateViews($pdo);
            break;
        default:
            http_response_code(400);
            echo json_encode(['error' => 'Invalid action']);
    }
}

function getReviews($pdo) {
    $packageSlug = $_GET['package'] ?? '';

    if (empty($packageSlug)) {
        http_response_code(400);
        echo json_encode(['error' => 'Package slug required']);
        return;
    }

    $sql = "
        SELECT r.*, tp.package_name
        FROM reviews r
        JOIN tour_packages tp ON r.package_id = tp.id
        WHERE tp.package_slug = ? AND r.is_approved = TRUE
        ORDER BY r.created_at DESC
    ";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([$packageSlug]);
    $reviews = $stmt->fetchAll();

    // Debug info
    error_log("Getting reviews for package: $packageSlug, found: " . count($reviews) . " reviews");

    echo json_encode([
        'success' => true,
        'reviews' => $reviews,
        'debug' => [
            'package_slug' => $packageSlug,
            'review_count' => count($reviews)
        ]
    ]);
}

function getPackageStats($pdo) {
    $packageSlug = $_GET['package'] ?? '';

    if (empty($packageSlug)) {
        http_response_code(400);
        echo json_encode(['error' => 'Package slug required']);
        return;
    }

    $sql = "
        SELECT
            tp.view_count,
            tp.total_rating,
            tp.review_count,
            COALESCE(AVG(r.comfort_rating), 0) as avg_comfort,
            COALESCE(AVG(r.destination_rating), 0) as avg_destination,
            COALESCE(AVG(r.accommodation_rating), 0) as avg_accommodation,
            COALESCE(AVG(r.transport_rating), 0) as avg_transport
        FROM tour_packages tp
        LEFT JOIN reviews r ON tp.id = r.package_id AND r.is_approved = TRUE
        WHERE tp.package_slug = ?
        GROUP BY tp.id
    ";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([$packageSlug]);
    $stats = $stmt->fetch();

    if (!$stats) {
        http_response_code(404);
        echo json_encode(['error' => 'Package not found']);
        return;
    }

    echo json_encode([
        'success' => true,
        'stats' => $stats
    ]);
}

function submitReview($pdo) {
    $input = json_decode(file_get_contents('php://input'), true);

    $requiredFields = ['package_slug', 'reviewer_name', 'reviewer_email', 'rating', 'review_text'];
    foreach ($requiredFields as $field) {
        if (empty($input[$field])) {
            http_response_code(400);
            echo json_encode(['error' => "Field $field is required"]);
            return;
        }
    }

    // Get package ID
    $packageStmt = $pdo->prepare("SELECT id FROM tour_packages WHERE package_slug = ?");
    $packageStmt->execute([$input['package_slug']]);
    $package = $packageStmt->fetch();

    if (!$package) {
        http_response_code(404);
        echo json_encode(['error' => 'Package not found']);
        return;
    }

    // Validate rating
    $rating = intval($input['rating']);
    if ($rating < 1 || $rating > 5) {
        http_response_code(400);
        echo json_encode(['error' => 'Rating must be between 1 and 5']);
        return;
    }

    // Sanitize inputs
    $reviewerName = sanitizeInput($input['reviewer_name']);
    $reviewerEmail = filter_var($input['reviewer_email'], FILTER_VALIDATE_EMAIL);
    $reviewText = sanitizeInput($input['review_text']);

    if (!$reviewerEmail) {
        http_response_code(400);
        echo json_encode(['error' => 'Invalid email address']);
        return;
    }

    // Optional detailed ratings
    $comfortRating = isset($input['comfort_rating']) ? intval($input['comfort_rating']) : 5;
    $destinationRating = isset($input['destination_rating']) ? intval($input['destination_rating']) : 5;
    $accommodationRating = isset($input['accommodation_rating']) ? intval($input['accommodation_rating']) : 5;
    $transportRating = isset($input['transport_rating']) ? intval($input['transport_rating']) : 5;

    // Validate detailed ratings
    $detailedRatings = [$comfortRating, $destinationRating, $accommodationRating, $transportRating];
    foreach ($detailedRatings as $detailRating) {
        if ($detailRating < 1 || $detailRating > 5) {
            http_response_code(400);
            echo json_encode(['error' => 'All ratings must be between 1 and 5']);
            return;
        }
    }

    try {
        $pdo->beginTransaction();

        // Insert review (auto-approved)
        $sql = "
            INSERT INTO reviews
            (package_id, reviewer_name, reviewer_email, rating, review_text,
             comfort_rating, destination_rating, accommodation_rating, transport_rating, is_approved)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
        ";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            $package['id'], $reviewerName, $reviewerEmail, $rating, $reviewText,
            $comfortRating, $destinationRating, $accommodationRating, $transportRating, 1
        ]);

        // Update package statistics
        $updateSql = "
            UPDATE tour_packages SET
                total_rating = (SELECT AVG(rating) FROM reviews WHERE package_id = ? AND is_approved = TRUE),
                review_count = (SELECT COUNT(*) FROM reviews WHERE package_id = ? AND is_approved = TRUE)
            WHERE id = ?
        ";

        $updateStmt = $pdo->prepare($updateSql);
        $updateStmt->execute([$package['id'], $package['id'], $package['id']]);

        $pdo->commit();

        echo json_encode([
            'success' => true,
            'message' => 'Review submitted successfully. It will be visible after approval.'
        ]);

    } catch (Exception $e) {
        $pdo->rollBack();
        throw $e;
    }
}

function updateViews($pdo) {
    $input = json_decode(file_get_contents('php://input'), true);

    if (empty($input['package_slug'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Package slug required']);
        return;
    }

    $packageSlug = sanitizeInput($input['package_slug']);

    try {
        $pdo->beginTransaction();

        // Get package ID
        $packageStmt = $pdo->prepare("SELECT id FROM tour_packages WHERE package_slug = ?");
        $packageStmt->execute([$packageSlug]);
        $package = $packageStmt->fetch();

        if (!$package) {
            http_response_code(404);
            echo json_encode(['error' => 'Package not found']);
            return;
        }

        // Update view count
        $updateStmt = $pdo->prepare("UPDATE tour_packages SET view_count = view_count + 1 WHERE id = ?");
        $updateStmt->execute([$package['id']]);

        // Log the view (optional for analytics)
        $visitorIP = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
        $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'unknown';

        $logStmt = $pdo->prepare("INSERT INTO page_views (package_id, visitor_ip, user_agent) VALUES (?, ?, ?)");
        $logStmt->execute([$package['id'], $visitorIP, $userAgent]);

        // Get updated view count
        $viewStmt = $pdo->prepare("SELECT view_count FROM tour_packages WHERE id = ?");
        $viewStmt->execute([$package['id']]);
        $viewData = $viewStmt->fetch();

        $pdo->commit();

        echo json_encode([
            'success' => true,
            'view_count' => $viewData['view_count']
        ]);

    } catch (Exception $e) {
        $pdo->rollBack();
        throw $e;
    }
}
?>