<?php
require_once 'config.php';

function getPackageRatingData($packageSlug) {
    try {
        $pdo = getDBConnection();
        if (!$pdo) return null;

        // Get package info
        $packageStmt = $pdo->prepare("
            SELECT id, package_name
            FROM tour_packages
            WHERE package_slug = ?
        ");
        $packageStmt->execute([$packageSlug]);
        $package = $packageStmt->fetch(PDO::FETCH_ASSOC);

        if (!$package) {
            return [
                'average_rating' => 0,
                'total_reviews' => 0,
                'rating_display' => '0.0',
                'stars_html' => generateStarsHTML(0)
            ];
        }

        // Get rating statistics
        $ratingsStmt = $pdo->prepare("
            SELECT
                AVG(rating) as average_rating,
                COUNT(*) as total_reviews
            FROM reviews
            WHERE package_id = ? AND is_approved = 1
        ");
        $ratingsStmt->execute([$package['id']]);
        $stats = $ratingsStmt->fetch(PDO::FETCH_ASSOC);

        $averageRating = round($stats['average_rating'] ?? 0, 1);
        $totalReviews = $stats['total_reviews'] ?? 0;

        return [
            'average_rating' => $averageRating,
            'total_reviews' => $totalReviews,
            'rating_display' => number_format($averageRating, 1),
            'stars_html' => generateStarsHTML($averageRating)
        ];

    } catch (Exception $e) {
        error_log("Error fetching package ratings: " . $e->getMessage());
        return [
            'average_rating' => 0,
            'total_reviews' => 0,
            'rating_display' => '0.0',
            'stars_html' => generateStarsHTML(0)
        ];
    }
}

function generateStarsHTML($rating, $maxStars = 5) {
    $output = '<div class="package-stars-display">';

    for ($i = 1; $i <= $maxStars; $i++) {
        if ($i <= floor($rating)) {
            // Full star
            $output .= '<span class="package-star full">★</span>';
        } elseif ($i - 0.5 <= $rating) {
            // Half star
            $output .= '<span class="package-star half">★</span>';
        } else {
            // Empty star
            $output .= '<span class="package-star empty">★</span>';
        }
    }

    $output .= '</div>';
    return $output;
}

// Package slug mappings
function getPackageSlugFromFilename($filename) {
    $slugMap = [
        'jewels-of-ceylon-grand-tour.html' => 'jewels-of-ceylon-grand-tour',
        'ceylon-discovery-explorer.html' => 'ceylon-discovery-explorer',
        'paradise-coastal-adventure.html' => 'paradise-coastal-adventure',
        'sacred-ceylon-wellness-retreat.html' => 'sacred-ceylon-wellness-retreat',
        'buddhist-cultural-visit.html' => 'buddhist-cultural-visit',
        'cool-relaxing-visit.html' => 'cool-relaxing-visit'
    ];

    return $slugMap[$filename] ?? null;
}

// Get all package ratings for the main packages page
function getAllPackageRatings() {
    $packages = [
        'jewels-of-ceylon-grand-tour',
        'ceylon-discovery-explorer',
        'paradise-coastal-adventure',
        'sacred-ceylon-wellness-retreat',
        'buddhist-cultural-visit',
        'cool-relaxing-visit'
    ];

    $ratings = [];
    foreach ($packages as $package) {
        $ratings[$package] = getPackageRatingData($package);
    }

    return $ratings;
}
?>