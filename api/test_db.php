<?php
require_once '../includes/config.php';

header('Content-Type: application/json');

try {
    $pdo = getDBConnection();
    if (!$pdo) {
        throw new Exception('Database connection failed');
    }

    // Test 1: Check if tour_packages table exists and has data
    $packagesStmt = $pdo->query("SELECT * FROM tour_packages");
    $packages = $packagesStmt->fetchAll();

    // Test 2: Check if reviews table exists and has data
    $reviewsStmt = $pdo->query("SELECT r.*, tp.package_slug FROM reviews r JOIN tour_packages tp ON r.package_id = tp.id");
    $reviews = $reviewsStmt->fetchAll();

    // Test 3: Check specific package
    $specificPackageStmt = $pdo->prepare("SELECT * FROM tour_packages WHERE package_slug = ?");
    $specificPackageStmt->execute(['jewels-of-ceylon-grand-tour']);
    $specificPackage = $specificPackageStmt->fetch();

    // Test 4: Check reviews for specific package
    $specificReviewsStmt = $pdo->prepare("
        SELECT r.*, tp.package_name
        FROM reviews r
        JOIN tour_packages tp ON r.package_id = tp.id
        WHERE tp.package_slug = ? AND r.is_approved = TRUE
    ");
    $specificReviewsStmt->execute(['jewels-of-ceylon-grand-tour']);
    $specificReviews = $specificReviewsStmt->fetchAll();

    echo json_encode([
        'success' => true,
        'tests' => [
            'packages_count' => count($packages),
            'packages' => $packages,
            'reviews_count' => count($reviews),
            'reviews' => $reviews,
            'specific_package' => $specificPackage,
            'specific_reviews_count' => count($specificReviews),
            'specific_reviews' => $specificReviews
        ]
    ]);

} catch (Exception $e) {
    echo json_encode([
        'success' => false,
        'error' => $e->getMessage()
    ]);
}
?>