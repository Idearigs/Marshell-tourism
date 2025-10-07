class ReviewSystem {
    constructor(packageSlug) {
        this.packageSlug = packageSlug;
        this.apiBase = 'api/reviews.php';
        this.init();
    }

    init() {
        this.loadReviews();
        this.loadPackageStats();
        this.updateViewCount();
        this.bindEvents();
    }

    async loadReviews() {
        try {
            const response = await fetch(`${this.apiBase}?action=reviews&package=${this.packageSlug}`);

            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }

            const data = await response.json();
            console.log('Reviews API response:', data);

            if (data.success) {
                console.log('Found', data.reviews.length, 'reviews');
                this.renderReviews(data.reviews);
            } else {
                console.error('Failed to load reviews:', data.error);
                this.renderReviews([]);
            }
        } catch (error) {
            console.error('Error loading reviews:', error);
            this.renderReviews([]);
        }
    }

    async loadPackageStats() {
        try {
            const response = await fetch(`${this.apiBase}?action=package_stats&package=${this.packageSlug}`);

            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }

            const data = await response.json();

            if (data.success) {
                this.updatePackageStats(data.stats);
            } else {
                console.error('Failed to load package stats:', data.error);
                // Set default stats
                this.updatePackageStats({
                    total_rating: 0,
                    review_count: 0,
                    view_count: 0,
                    avg_comfort: 0,
                    avg_destination: 0,
                    avg_accommodation: 0,
                    avg_transport: 0
                });
            }
        } catch (error) {
            console.error('Error loading package stats:', error);
            // Set default stats
            this.updatePackageStats({
                total_rating: 0,
                review_count: 0,
                view_count: 0,
                avg_comfort: 0,
                avg_destination: 0,
                avg_accommodation: 0,
                avg_transport: 0
            });
        }
    }

    async updateViewCount() {
        try {
            const response = await fetch(`${this.apiBase}?action=update_views`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    package_slug: this.packageSlug
                })
            });

            const data = await response.json();
            if (data.success) {
                this.updateViewDisplay(data.view_count);
            }
        } catch (error) {
            console.error('Error updating view count:', error);
        }
    }

    renderReviews(reviews) {
        const reviewContainer = document.getElementById('reviews-container');
        if (!reviewContainer) return;

        if (reviews.length === 0) {
            reviewContainer.innerHTML = `
                <div class="text-center py-4">
                    <p class="text-muted">No reviews yet. Be the first to share your experience!</p>
                </div>
            `;
            return;
        }

        const reviewsHtml = reviews.map(review => this.createReviewHtml(review)).join('');
        reviewContainer.innerHTML = reviewsHtml;
    }

    createReviewHtml(review) {
        const stars = this.generateStars(review.rating);
        const createdDate = new Date(review.created_at).toLocaleDateString();

        return `
            <div class="review-item mb-4 p-4 border rounded">
                <div class="d-flex justify-content-between align-items-start mb-2">
                    <div>
                        <h6 class="mb-1">${this.escapeHtml(review.reviewer_name)}</h6>
                        <div class="stars mb-2">${stars}</div>
                    </div>
                    <small class="text-muted">${createdDate}</small>
                </div>
                <p class="mb-3">${this.escapeHtml(review.review_text)}</p>
                <div class="row">
                    <div class="col-md-3 col-6">
                        <small class="text-muted">Comfort</small>
                        <div class="stars-small">${this.generateStars(review.comfort_rating, 'small')}</div>
                    </div>
                    <div class="col-md-3 col-6">
                        <small class="text-muted">Destination</small>
                        <div class="stars-small">${this.generateStars(review.destination_rating, 'small')}</div>
                    </div>
                    <div class="col-md-3 col-6">
                        <small class="text-muted">Accommodation</small>
                        <div class="stars-small">${this.generateStars(review.accommodation_rating, 'small')}</div>
                    </div>
                    <div class="col-md-3 col-6">
                        <small class="text-muted">Transport</small>
                        <div class="stars-small">${this.generateStars(review.transport_rating, 'small')}</div>
                    </div>
                </div>
            </div>
        `;
    }

    updatePackageStats(stats) {
        // Update overall rating
        const ratingElement = document.querySelector('.package-rating');
        if (ratingElement) {
            const totalRating = parseFloat(stats.total_rating) || 0;
            const reviewCount = parseInt(stats.review_count) || 0;

            ratingElement.innerHTML = `
                <div class="d-flex align-items-center">
                    <div class="stars me-2">${this.generateStars(Math.round(totalRating))}</div>
                    <span class="rating-number">${totalRating.toFixed(1)}</span>
                    <span class="text-muted ms-2">(${reviewCount} reviews)</span>
                </div>
            `;
        }

        // Update detailed ratings
        this.updateDetailedRating('comfort', stats.avg_comfort);
        this.updateDetailedRating('destination', stats.avg_destination);
        this.updateDetailedRating('accommodation', stats.avg_accommodation);
        this.updateDetailedRating('transport', stats.avg_transport);
    }

    updateDetailedRating(type, rating) {
        const element = document.querySelector(`[data-rating="${type}"]`);
        if (element) {
            const numRating = parseFloat(rating) || 0;
            const percentage = (numRating / 5) * 100;
            const progressBar = element.querySelector('.progress-bar');
            const ratingText = element.querySelector('.rating-text');

            if (progressBar) progressBar.style.width = `${percentage}%`;
            if (ratingText) ratingText.textContent = numRating.toFixed(1);
        }
    }

    updateViewDisplay(viewCount) {
        const viewElement = document.querySelector('.view-count');
        if (viewElement) {
            viewElement.textContent = `${viewCount.toLocaleString()} people viewed this package`;
        }
    }

    bindEvents() {
        // Review form submission
        const reviewForm = document.getElementById('review-form');
        if (reviewForm) {
            reviewForm.addEventListener('submit', (e) => this.handleReviewSubmit(e));
        }

        // Star rating interactions
        this.bindStarRatings();
    }

    bindStarRatings() {
        console.log('Binding star ratings...');
        const ratingContainers = document.querySelectorAll('.star-rating');
        console.log('Found', ratingContainers.length, 'rating containers');

        ratingContainers.forEach((container, containerIndex) => {
            const stars = container.querySelectorAll('.star');
            const input = container.querySelector('input[type="hidden"]');

            console.log(`Container ${containerIndex}: found ${stars.length} stars`);

            stars.forEach((star, starIndex) => {
                // Remove any existing event listeners
                star.replaceWith(star.cloneNode(true));
            });

            // Re-query stars after cloning
            const newStars = container.querySelectorAll('.star');

            newStars.forEach((star, starIndex) => {
                star.addEventListener('click', (e) => {
                    e.preventDefault();
                    e.stopPropagation();

                    const value = parseInt(star.getAttribute('data-value')) || (starIndex + 1);
                    console.log(`Star clicked: ${value} in container ${containerIndex}`);

                    // Set input value
                    if (input) {
                        input.value = value;
                        console.log('Input updated:', input.name, '=', value);
                    }

                    // Update visual state
                    this.updateStarVisuals(container, value);

                    return false;
                });

                star.addEventListener('mouseover', (e) => {
                    const value = parseInt(star.getAttribute('data-value')) || (starIndex + 1);
                    const currentValue = parseInt(input?.value) || 0;

                    newStars.forEach((s, i) => {
                        if (i < value) {
                            s.style.color = '#ffeb3b';
                        } else if (i >= currentValue) {
                            s.style.color = '#ddd';
                        }
                    });
                });

                star.addEventListener('mouseout', (e) => {
                    const currentValue = parseInt(input?.value) || 0;
                    this.updateStarVisuals(container, currentValue);
                });
            });
        });
    }

    updateStarVisuals(container, value) {
        const stars = container.querySelectorAll('.star');

        stars.forEach((star, index) => {
            if (index < value) {
                // Selected star
                star.classList.remove('ph-star');
                star.classList.add('ph-star-fill');
                star.style.color = '#ffc107';
            } else {
                // Unselected star
                star.classList.remove('ph-star-fill');
                star.classList.add('ph-star');
                star.style.color = '#ddd';
            }
        });
    }

    async handleReviewSubmit(e) {
        e.preventDefault();
        console.log('Form submitted');

        const form = e.target;
        const formData = new FormData(form);

        // Debug form data
        for (let [key, value] of formData.entries()) {
            console.log(key, ':', value);
        }

        const reviewData = {
            package_slug: this.packageSlug,
            reviewer_name: formData.get('reviewer_name'),
            reviewer_email: formData.get('reviewer_email'),
            rating: parseInt(formData.get('rating')),
            review_text: formData.get('review_text'),
            comfort_rating: parseInt(formData.get('comfort_rating')) || 5,
            destination_rating: parseInt(formData.get('destination_rating')) || 5,
            accommodation_rating: parseInt(formData.get('accommodation_rating')) || 5,
            transport_rating: parseInt(formData.get('transport_rating')) || 5
        };

        console.log('Review data:', reviewData);

        // Validate required fields
        if (!reviewData.rating || reviewData.rating < 1 || reviewData.rating > 5) {
            this.showMessage('Please select an overall rating (1-5 stars).', 'error');
            return;
        }

        if (!reviewData.reviewer_name || !reviewData.reviewer_email || !reviewData.review_text) {
            this.showMessage('Please fill in all required fields.', 'error');
            return;
        }

        try {
            const submitBtn = form.querySelector('button[type="submit"]');
            const originalText = submitBtn.textContent;
            submitBtn.textContent = 'Submitting...';
            submitBtn.disabled = true;

            const response = await fetch(`${this.apiBase}?action=submit_review`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(reviewData)
            });

            const data = await response.json();

            if (data.success) {
                this.showMessage('Thank you! Your review has been submitted successfully.', 'success');
                form.reset();
                this.resetAllStarRatings();

                // Reload reviews and stats to show the new review immediately
                this.loadReviews();
                this.loadPackageStats();
            } else {
                this.showMessage(data.error || 'Failed to submit review. Please try again.', 'error');
            }
        } catch (error) {
            console.error('Error submitting review:', error);
            this.showMessage('Failed to submit review. Please try again.', 'error');
        } finally {
            const submitBtn = form.querySelector('button[type="submit"]');
            submitBtn.textContent = 'Submit Review';
            submitBtn.disabled = false;
        }
    }

    resetAllStarRatings() {
        const ratingInputs = document.querySelectorAll('.star-rating');
        ratingInputs.forEach(rating => {
            const input = rating.querySelector('input[type="hidden"]');
            const stars = rating.querySelectorAll('.star');

            if (input) input.value = '';
            stars.forEach(star => star.classList.remove('active'));
        });
    }

    showMessage(message, type) {
        const messageContainer = document.getElementById('review-message');
        if (messageContainer) {
            messageContainer.innerHTML = `
                <div class="alert alert-${type === 'success' ? 'success' : 'danger'} alert-dismissible fade show">
                    ${message}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            `;
        }
    }

    generateStars(rating, size = 'normal') {
        const numRating = parseFloat(rating) || 0;
        const clampedRating = Math.max(0, Math.min(5, numRating)); // Ensure rating is between 0 and 5

        const fullStars = Math.floor(clampedRating);
        const hasHalfStar = clampedRating % 1 >= 0.5;
        const emptyStars = 5 - fullStars - (hasHalfStar ? 1 : 0);

        const starClass = size === 'small' ? 'star-sm' : 'star';

        let starsHtml = '';

        // Full stars - filled and golden
        for (let i = 0; i < fullStars; i++) {
            starsHtml += `<i class="ph-fill ph-star ${starClass}" style="color: #fbbf24;"></i>`;
        }

        // Half star
        if (hasHalfStar) {
            starsHtml += `<i class="ph ph-star-half ${starClass}" style="color: #fbbf24;"></i>`;
        }

        // Empty stars - outlined and gray
        for (let i = 0; i < emptyStars; i++) {
            starsHtml += `<i class="ph ph-star ${starClass}" style="color: #d1d5db;"></i>`;
        }

        return starsHtml;
    }

    escapeHtml(text) {
        const div = document.createElement('div');
        div.textContent = text;
        return div.innerHTML;
    }
}

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    console.log('Review system initializing...');
    const packageSlug = document.body.dataset.packageSlug;
    console.log('Package slug:', packageSlug);

    if (packageSlug) {
        try {
            window.reviewSystem = new ReviewSystem(packageSlug);
            console.log('Review system initialized successfully');
        } catch (error) {
            console.error('Error initializing review system:', error);
        }
    } else {
        console.error('No package slug found in body data attribute');
    }
});