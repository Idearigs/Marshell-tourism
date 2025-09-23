<?php
require_once '../includes/config.php';

header('Content-Type: application/json');

try {
    $pdo = getDBConnection();
    if (!$pdo) {
        throw new Exception('Database connection failed');
    }

    // Approve Minuka's review (ID: 4)
    $stmt = $pdo->prepare("UPDATE reviews SET is_approved = TRUE WHERE id = 4");
    $stmt->execute();

    // Update package statistics
    $updateStmt = $pdo->prepare("
        UPDATE tour_packages SET
            total_rating = (SELECT AVG(rating) FROM reviews WHERE package_id = 1 AND is_approved = TRUE),
            review_count = (SELECT COUNT(*) FROM reviews WHERE package_id = 1 AND is_approved = TRUE)
        WHERE id = 1
    ");
    $updateStmt->execute();

    echo json_encode([
        'success' => true,
        'message' => 'Review approved and package stats updated'
    ]);

} catch (Exception $e) {
    echo json_encode([
        'success' => false,
        'error' => $e->getMessage()
    ]);
}
?>