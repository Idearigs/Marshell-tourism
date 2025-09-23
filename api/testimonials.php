<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('Access-Control-Allow-Headers: Content-Type');

require_once '../includes/config.php';

$method = $_SERVER['REQUEST_METHOD'];
$pdo = getDBConnection();

if (!$pdo) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Database connection failed']);
    exit;
}

switch ($method) {
    case 'GET':
        handleGetTestimonials($pdo);
        break;
    case 'POST':
        handleAddTestimonial($pdo);
        break;
    case 'PUT':
        handleUpdateTestimonial($pdo);
        break;
    case 'DELETE':
        handleDeleteTestimonial($pdo);
        break;
    default:
        http_response_code(405);
        echo json_encode(['success' => false, 'message' => 'Method not allowed']);
        break;
}

function handleGetTestimonials($pdo) {
    try {
        $stmt = $pdo->prepare("SELECT * FROM testimonials ORDER BY created_at DESC");
        $stmt->execute();
        $testimonials = $stmt->fetchAll(PDO::FETCH_ASSOC);

        echo json_encode(['success' => true, 'testimonials' => $testimonials]);
    } catch (PDOException $e) {
        http_response_code(500);
        echo json_encode(['success' => false, 'message' => 'Failed to fetch testimonials']);
    }
}

function handleAddTestimonial($pdo) {
    $input = json_decode(file_get_contents('php://input'), true);

    if (!isset($input['name']) || !isset($input['position']) || !isset($input['review'])) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'Missing required fields']);
        return;
    }

    try {
        $stmt = $pdo->prepare("INSERT INTO testimonials (name, position, review, is_active) VALUES (?, ?, ?, ?)");
        $isActive = isset($input['is_active']) ? (bool)$input['is_active'] : true;

        $stmt->execute([
            trim($input['name']),
            trim($input['position']),
            trim($input['review']),
            $isActive
        ]);

        $testimonialId = $pdo->lastInsertId();

        echo json_encode([
            'success' => true,
            'message' => 'Testimonial added successfully',
            'testimonial_id' => $testimonialId
        ]);
    } catch (PDOException $e) {
        http_response_code(500);
        echo json_encode(['success' => false, 'message' => 'Failed to add testimonial']);
    }
}

function handleUpdateTestimonial($pdo) {
    $input = json_decode(file_get_contents('php://input'), true);

    if (!isset($input['id'])) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'Testimonial ID required']);
        return;
    }

    $updateFields = [];
    $updateValues = [];

    if (isset($input['name'])) {
        $updateFields[] = 'name = ?';
        $updateValues[] = trim($input['name']);
    }
    if (isset($input['position'])) {
        $updateFields[] = 'position = ?';
        $updateValues[] = trim($input['position']);
    }
    if (isset($input['review'])) {
        $updateFields[] = 'review = ?';
        $updateValues[] = trim($input['review']);
    }
    if (isset($input['is_active'])) {
        $updateFields[] = 'is_active = ?';
        $updateValues[] = (bool)$input['is_active'];
    }

    if (empty($updateFields)) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'No fields to update']);
        return;
    }

    $updateValues[] = $input['id'];

    try {
        $sql = "UPDATE testimonials SET " . implode(', ', $updateFields) . " WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute($updateValues);

        echo json_encode(['success' => true, 'message' => 'Testimonial updated successfully']);
    } catch (PDOException $e) {
        http_response_code(500);
        echo json_encode(['success' => false, 'message' => 'Failed to update testimonial']);
    }
}

function handleDeleteTestimonial($pdo) {
    $input = json_decode(file_get_contents('php://input'), true);

    if (!isset($input['id'])) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'Testimonial ID required']);
        return;
    }

    try {
        $stmt = $pdo->prepare("DELETE FROM testimonials WHERE id = ?");
        $stmt->execute([$input['id']]);

        if ($stmt->rowCount() > 0) {
            echo json_encode(['success' => true, 'message' => 'Testimonial deleted successfully']);
        } else {
            http_response_code(404);
            echo json_encode(['success' => false, 'message' => 'Testimonial not found']);
        }
    } catch (PDOException $e) {
        http_response_code(500);
        echo json_encode(['success' => false, 'message' => 'Failed to delete testimonial']);
    }
}
?>