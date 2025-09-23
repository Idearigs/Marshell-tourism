<?php
require_once 'config.php';

function getActiveTestimonials($limit = null) {
    $pdo = getDBConnection();
    if (!$pdo) {
        return [];
    }

    try {
        $sql = "SELECT * FROM testimonials WHERE is_active = TRUE ORDER BY created_at DESC";
        if ($limit) {
            $sql .= " LIMIT " . intval($limit);
        }

        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        error_log("Error fetching testimonials: " . $e->getMessage());
        return [];
    }
}

function renderTestimonialSlide($testimonial, $slideClass = '') {
    $name = htmlspecialchars($testimonial['name'] ?? '');
    $position = htmlspecialchars($testimonial['position'] ?? '');
    $review = htmlspecialchars($testimonial['review'] ?? '');

    return '
    <div class="testimonial-two-wrapper tw-rounded-xl d-flex justify-content-between position-relative z-1 background-img overflow-hidden swiper-slide" data-background-image="assets/images/testimonial/testimonial-two-bg.png" style="min-height: 400px; height: 400px;">
        <div class="testimonial-two-left ' . $slideClass . ' tw-rounded-xl tw-pt-15 tw-pb-9 tw-ps-9 tw-pe-7 d-flex flex-column justify-content-between" style="width: 80%; min-height: 360px;">
            <p class="testimonial-two-paragraph fw-medium ' . ($slideClass === 'bg-main-600' ? 'text-white' : 'text-main-600') . ' tw-mb-6 flex-grow-1 d-flex align-items-center" style="line-height: 1.6; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 6; -webkit-box-orient: vertical;">"' . $review . '"</p>
            <div class="mt-auto">
                <h6 class="tw-text-xl text-capitalize tw-mb-2 ' . ($slideClass === 'bg-main-600' ? 'text-white' : '') . '" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">' . $name . '</h6>
                <p class="' . ($slideClass === 'bg-main-600' ? 'text-white' : 'text-main-600') . ' fw-medium mb-0" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">' . $position . '</p>
            </div>
        </div>
        <div class="testimonial-two-right d-flex justify-content-between flex-column tw-pt-16 tw-pb-12 tw-pe-15" style="width: 20%; min-height: 360px;">
            <div class="icon" style="font-size: 3rem; color: #2c5aa0;">
                <i class="ph ph-quotes"></i>
            </div>
        </div>
    </div>';
}
?>