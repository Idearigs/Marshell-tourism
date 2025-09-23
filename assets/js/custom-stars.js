class CustomStarRating {
    constructor() {
        this.init();
    }

    init() {
        console.log('Custom Star Rating System Initializing...');
        this.createStarRatings();
    }

    createStarRatings() {
        const containers = document.querySelectorAll('[data-star-rating]');
        console.log('Found star rating containers:', containers.length);

        containers.forEach((container, index) => {
            this.setupStarRating(container, index);
        });
    }

    setupStarRating(container, index) {
        const inputName = container.getAttribute('data-star-rating');
        const currentValue = parseInt(container.getAttribute('data-value')) || 0;

        // Create stars HTML
        const starsHtml = `
            <div class="custom-star-container" data-container="${index}">
                ${[1, 2, 3, 4, 5].map(value => `
                    <div class="custom-star ${value <= currentValue ? 'selected' : ''}"
                         data-value="${value}"
                         data-container="${index}">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"
                                  stroke="#ddd" stroke-width="2" fill="${value <= currentValue ? '#ffc107' : 'none'}"/>
                        </svg>
                    </div>
                `).join('')}
                <input type="hidden" name="${inputName}" value="${currentValue}">
            </div>
        `;

        container.innerHTML = starsHtml;

        // Add event listeners
        this.bindStarEvents(container, index);
    }

    bindStarEvents(container, containerIndex) {
        const stars = container.querySelectorAll('.custom-star');
        const input = container.querySelector('input[type="hidden"]');

        stars.forEach(star => {
            star.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();

                const value = parseInt(star.getAttribute('data-value'));
                console.log(`Star clicked: ${value} in container ${containerIndex}`);

                // Update input
                input.value = value;

                // Update visual state
                this.updateStarVisual(container, value);

                return false;
            });

            star.addEventListener('mouseenter', () => {
                const value = parseInt(star.getAttribute('data-value'));
                this.highlightStars(container, value);
            });

            star.addEventListener('mouseleave', () => {
                const currentValue = parseInt(input.value) || 0;
                this.updateStarVisual(container, currentValue);
            });
        });
    }

    updateStarVisual(container, value) {
        const stars = container.querySelectorAll('.custom-star');

        stars.forEach((star, index) => {
            const starValue = parseInt(star.getAttribute('data-value'));
            const svg = star.querySelector('svg path');

            if (starValue <= value) {
                star.classList.add('selected');
                svg.setAttribute('fill', '#ffc107');
                svg.setAttribute('stroke', '#ffc107');
            } else {
                star.classList.remove('selected');
                svg.setAttribute('fill', 'none');
                svg.setAttribute('stroke', '#ddd');
            }
        });
    }

    highlightStars(container, value) {
        const stars = container.querySelectorAll('.custom-star');

        stars.forEach((star, index) => {
            const starValue = parseInt(star.getAttribute('data-value'));
            const svg = star.querySelector('svg path');

            if (starValue <= value) {
                svg.setAttribute('fill', '#ffeb3b');
                svg.setAttribute('stroke', '#ffeb3b');
            } else {
                const currentValue = parseInt(container.querySelector('input').value) || 0;
                if (starValue > currentValue) {
                    svg.setAttribute('fill', 'none');
                    svg.setAttribute('stroke', '#ddd');
                }
            }
        });
    }

    // Method to get rating value
    getRating(containerIndex) {
        const container = document.querySelector(`[data-container="${containerIndex}"]`);
        if (container) {
            const input = container.querySelector('input[type="hidden"]');
            return parseInt(input.value) || 0;
        }
        return 0;
    }

    // Method to set rating value
    setRating(containerIndex, value) {
        const container = document.querySelector(`[data-container="${containerIndex}"]`);
        if (container) {
            const input = container.querySelector('input[type="hidden"]');
            input.value = value;
            this.updateStarVisual(container, value);
        }
    }
}

// CSS for custom stars
const customStarCSS = `
    <style>
        .custom-star-container {
            display: inline-flex;
            gap: 5px;
            align-items: center;
            margin: 10px 0;
        }

        .custom-star {
            cursor: pointer;
            transition: transform 0.2s ease;
            display: inline-block;
        }

        .custom-star:hover {
            transform: scale(1.1);
        }

        .custom-star:active {
            transform: scale(0.95);
        }

        .custom-star svg {
            display: block;
        }

        .custom-star.selected svg path {
            fill: #ffc107;
            stroke: #ffc107;
        }

        /* Prevent any interference */
        .custom-star * {
            pointer-events: none;
        }

        .custom-star {
            pointer-events: auto;
        }
    </style>
`;

// Inject CSS
document.head.insertAdjacentHTML('beforeend', customStarCSS);

// Initialize when DOM is ready
document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM loaded, initializing custom stars...');
    window.customStarRating = new CustomStarRating();
});

// Export for manual initialization
window.CustomStarRating = CustomStarRating;