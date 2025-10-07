<!-- Modern Tour Package Styles - Include this in all tour package pages -->
<style>
/* Modern Package Header Styles */
.mh-package-header {
    padding: 40px 0 60px;
    background: linear-gradient(180deg, #f8faff 0%, #ffffff 100%);
}

.mh-package-header-card {
    background: #ffffff;
    border-radius: 20px;
    padding: 40px;
    box-shadow: 0 8px 30px rgba(44, 90, 160, 0.12), 0 0 0 1px rgba(44, 90, 160, 0.06);
    border: 1px solid rgba(44, 90, 160, 0.08);
}

.mh-package-meta {
    display: flex;
    align-items: center;
    gap: 20px;
    margin-bottom: 20px;
    flex-wrap: wrap;
}

.mh-category-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);
    color: #ffffff;
    padding: 8px 20px;
    border-radius: 50px;
    font-size: 0.9rem;
    font-weight: 600;
    box-shadow: 0 4px 12px rgba(251, 191, 36, 0.25);
}

.mh-category-badge i {
    font-size: 1.1rem;
}

.mh-views-count {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: #64748b;
    font-size: 0.9rem;
}

.mh-views-count i {
    color: #2c5aa0;
    font-size: 1.1rem;
}

.mh-package-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: #1e293b;
    margin-bottom: 24px;
    font-family: 'Philosopher', serif;
    line-height: 1.2;
}

.mh-package-info {
    display: flex;
    flex-wrap: wrap;
    gap: 24px;
}

.mh-info-item {
    display: flex;
    align-items: center;
    gap: 10px;
    color: #475569;
    font-size: 0.95rem;
    padding: 10px 0;
}

.mh-info-item i {
    color: #2c5aa0;
    font-size: 1.3rem;
    flex-shrink: 0;
}

.mh-package-pricing {
    background: linear-gradient(135deg, #f8faff 0%, #eff6ff 100%);
    padding: 28px;
    border-radius: 16px;
    border: 2px solid #e0e7ff;
    text-align: center;
}

.mh-rating-box {
    margin-bottom: 24px;
    padding-bottom: 20px;
    border-bottom: 2px solid #e0e7ff;
}

.mh-rating-stars {
    display: flex;
    justify-content: center;
    gap: 4px;
    margin-bottom: 10px;
}

.mh-rating-stars i {
    color: #fbbf24;
    font-size: 1.3rem;
}

.mh-rating-score {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
}

.mh-rating-score .score {
    font-size: 1.8rem;
    font-weight: 700;
    color: #1e293b;
}

.mh-rating-score .reviews {
    color: #64748b;
    font-size: 0.9rem;
}

.mh-price-section {
    text-align: center;
}

.mh-price-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: #2c5aa0;
    margin-bottom: 6px;
    font-family: 'Philosopher', serif;
}

.mh-price-subtitle {
    color: #64748b;
    font-size: 0.9rem;
    margin: 0;
}

/* Modern Booking Form Styles */
.mh-booking-form-card {
    background: linear-gradient(135deg, #ffffff 0%, #f8faff 100%);
    border-radius: 20px;
    padding: 32px 28px;
    box-shadow: 0 10px 40px rgba(44, 90, 160, 0.08);
    border: 1px solid rgba(44, 90, 160, 0.1);
    margin-bottom: 28px;
}

.mh-booking-form-header {
    text-align: center;
    margin-bottom: 28px;
    padding-bottom: 20px;
    border-bottom: 2px solid #e8f0ff;
}

.mh-booking-form-title {
    color: #2c5aa0;
    font-size: 1.75rem;
    font-weight: 700;
    margin-bottom: 6px;
    font-family: 'Philosopher', serif;
}

.mh-booking-form-subtitle {
    color: #64748b;
    font-size: 0.9rem;
    margin: 0;
}

.mh-booking-form {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.mh-form-group {
    display: flex;
    flex-direction: column;
    position: relative;
    z-index: 1;
}

.mh-form-label {
    display: flex;
    align-items: center;
    gap: 8px;
    color: #2c5aa0;
    font-size: 0.9rem;
    font-weight: 600;
    margin-bottom: 8px;
}

.mh-form-label i {
    font-size: 1.1rem;
    color: #2c5aa0;
}

.mh-form-input,
.mh-form-select {
    width: 100%;
    padding: 14px 16px;
    border: 2px solid #e2e8f0;
    border-radius: 12px;
    font-size: 0.95rem;
    color: #334155;
    background: #ffffff;
    transition: all 0.3s ease;
    font-family: inherit;
}

.mh-booking-form .mh-form-input,
.mh-booking-form .mh-form-textarea {
    pointer-events: auto;
    cursor: text;
}

.mh-form-input[type="date"] {
    position: relative;
    cursor: pointer;
}

.mh-form-input[type="date"]::-webkit-calendar-picker-indicator {
    cursor: pointer;
    position: absolute;
    right: 16px;
    top: 50%;
    transform: translateY(-50%);
    opacity: 1;
    width: 20px;
    height: 20px;
}

.mh-form-input:focus,
.mh-form-select:focus {
    outline: none;
    border-color: #2c5aa0;
    box-shadow: 0 0 0 4px rgba(44, 90, 160, 0.1);
}

.mh-form-input::placeholder {
    color: #94a3b8;
}

.mh-form-select {
    cursor: pointer;
    appearance: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 16 16'%3E%3Cpath fill='%232c5aa0' d='M8 11L3 6h10z'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 12px center;
    padding-right: 40px;
    line-height: 1.2;
    height: 50px;
    display: flex;
    align-items: center;
}

.mh-booking-submit-btn {
    width: 100%;
    background: linear-gradient(135deg, #2c5aa0 0%, #1e3a8a 100%);
    color: white;
    padding: 16px 24px;
    border: none;
    border-radius: 50px;
    font-size: 1rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    transition: all 0.3s ease;
    margin-top: 8px;
    box-shadow: 0 8px 20px rgba(44, 90, 160, 0.3);
}

.mh-booking-submit-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 30px rgba(44, 90, 160, 0.4);
    background: linear-gradient(135deg, #1e3a8a 0%, #2c5aa0 100%);
}

.mh-booking-submit-btn:active {
    transform: translateY(0);
}

.mh-booking-submit-btn i {
    font-size: 1.2rem;
    transition: transform 0.3s ease;
}

.mh-booking-submit-btn:hover i {
    transform: translateX(4px);
}

/* Modern Package Overview Styles */
.mh-overview-card {
    background: linear-gradient(135deg, #ffffff 0%, #f8faff 100%);
    border-radius: 20px;
    padding: 32px 28px;
    box-shadow: 0 8px 30px rgba(44, 90, 160, 0.1);
    border: 1px solid rgba(44, 90, 160, 0.1);
    margin-bottom: 28px;
}

.mh-overview-header {
    text-align: center;
    margin-bottom: 24px;
    padding-bottom: 20px;
    border-bottom: 2px solid #e8f0ff;
}

.mh-overview-title {
    color: #2c5aa0;
    font-size: 1.75rem;
    font-weight: 700;
    margin-bottom: 6px;
    font-family: 'Philosopher', serif;
}

.mh-overview-subtitle {
    color: #64748b;
    font-size: 0.9rem;
    margin: 0;
}

.mh-overall-rating {
    text-align: center;
    margin-bottom: 28px;
}

.mh-section-subtitle {
    color: #1e293b;
    font-size: 1.1rem;
    font-weight: 600;
    margin-bottom: 20px;
    padding-bottom: 12px;
    border-bottom: 2px solid #e8f0ff;
}

.mh-rating-grid {
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.mh-rating-item {
    background: #ffffff;
    padding: 16px;
    border-radius: 12px;
    border: 1px solid #e2e8f0;
    transition: all 0.3s ease;
}

.mh-rating-item:hover {
    border-color: #2c5aa0;
    box-shadow: 0 4px 12px rgba(44, 90, 160, 0.08);
}

.mh-rating-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 10px;
}

.mh-rating-item .rating-label {
    display: flex;
    align-items: center;
    gap: 8px;
    color: #475569;
    font-weight: 600;
    font-size: 0.95rem;
}

.mh-rating-item .rating-label i {
    color: #2c5aa0;
    font-size: 1.2rem;
}

.mh-rating-item .rating-text {
    color: #2c5aa0;
    font-weight: 700;
    font-size: 1rem;
}

.mh-progress-bar {
    height: 8px;
    background: #e2e8f0;
    border-radius: 50px;
    overflow: hidden;
}

.mh-progress-bar .progress-bar {
    height: 100%;
    background: linear-gradient(90deg, #2c5aa0 0%, #1e3a8a 100%);
    border-radius: 50px;
    transition: width 0.6s ease;
}

/* Modern Reviews Card Styles */
.mh-reviews-card {
    background: linear-gradient(135deg, #ffffff 0%, #f8faff 100%);
    border-radius: 20px;
    padding: 32px 28px;
    box-shadow: 0 8px 30px rgba(44, 90, 160, 0.1);
    border: 1px solid rgba(44, 90, 160, 0.1);
    margin-bottom: 28px;
}

.mh-reviews-header {
    text-align: center;
    margin-bottom: 24px;
    padding-bottom: 20px;
    border-bottom: 2px solid #e8f0ff;
}

.mh-reviews-title {
    color: #2c5aa0;
    font-size: 1.75rem;
    font-weight: 700;
    margin-bottom: 6px;
    font-family: 'Philosopher', serif;
}

.mh-reviews-subtitle {
    color: #64748b;
    font-size: 0.9rem;
    margin: 0;
}

.mh-loading {
    text-align: center;
    padding: 40px 20px;
    color: #64748b;
}

.mh-loading i {
    font-size: 2rem;
    color: #2c5aa0;
    margin-bottom: 10px;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}

/* Modern Review Form Styles */
.mh-review-form-card {
    background: linear-gradient(135deg, #ffffff 0%, #f8faff 100%);
    border-radius: 20px;
    padding: 32px 28px;
    box-shadow: 0 8px 30px rgba(44, 90, 160, 0.1);
    border: 1px solid rgba(44, 90, 160, 0.1);
    margin-bottom: 28px;
}

.mh-form-header {
    text-align: center;
    margin-bottom: 28px;
    padding-bottom: 20px;
    border-bottom: 2px solid #e8f0ff;
}

.mh-form-title {
    color: #2c5aa0;
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 6px;
    font-family: 'Philosopher', serif;
}

.mh-form-subtitle {
    color: #64748b;
    font-size: 0.9rem;
    margin: 0;
}

.mh-review-form {
    display: flex;
    flex-direction: column;
    gap: 20px;
    position: relative;
    z-index: 1;
}

.mh-form-textarea {
    width: 100%;
    padding: 14px 16px;
    border: 2px solid #e2e8f0;
    border-radius: 12px;
    font-size: 0.95rem;
    color: #334155;
    background: #ffffff;
    transition: all 0.3s ease;
    font-family: inherit;
    resize: vertical;
}

.mh-form-textarea:focus {
    outline: none;
    border-color: #2c5aa0;
    box-shadow: 0 0 0 4px rgba(44, 90, 160, 0.1);
}

.mh-detailed-title {
    color: #1e293b;
    font-size: 1.1rem;
    font-weight: 600;
    margin-top: 8px;
    margin-bottom: 16px;
    padding-bottom: 12px;
    border-bottom: 2px solid #e8f0ff;
}

.mh-rating-input {
    margin-bottom: 20px;
    position: relative;
    z-index: 1;
}

.mh-rating-input div[data-star-rating] {
    pointer-events: auto;
    cursor: pointer;
}

.mh-rating-label {
    display: flex;
    align-items: center;
    gap: 8px;
    color: #2c5aa0;
    font-size: 0.9rem;
    font-weight: 600;
    margin-bottom: 10px;
}

.mh-rating-label i {
    font-size: 1.1rem;
}

.mh-form-group div[data-star-rating] {
    pointer-events: auto;
    cursor: pointer;
}

.mh-submit-review-btn {
    width: 100%;
    background: linear-gradient(135deg, #2c5aa0 0%, #1e3a8a 100%);
    color: white;
    padding: 16px 24px;
    border: none;
    border-radius: 50px;
    font-size: 1rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    transition: all 0.3s ease;
    margin-top: 8px;
    box-shadow: 0 8px 20px rgba(44, 90, 160, 0.3);
}

.mh-submit-review-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 30px rgba(44, 90, 160, 0.4);
    background: linear-gradient(135deg, #1e3a8a 0%, #2c5aa0 100%);
}

.mh-submit-review-btn i {
    font-size: 1.2rem;
    transition: transform 0.3s ease;
}

.mh-submit-review-btn:hover i {
    transform: translateX(4px);
}

/* Mobile Responsive */
@media (max-width: 991px) {
    .mh-package-header-card {
        padding: 30px 24px;
    }

    .mh-package-title {
        font-size: 2rem;
    }

    .mh-package-pricing {
        margin-top: 30px;
    }
}

@media (max-width: 767px) {
    .mh-package-header {
        padding: 30px 0 40px;
    }

    .mh-package-header-card {
        padding: 24px 20px;
    }

    .mh-package-title {
        font-size: 1.75rem;
    }

    .mh-package-meta {
        flex-direction: column;
        align-items: flex-start;
        gap: 12px;
    }

    .mh-package-info {
        flex-direction: column;
        gap: 16px;
    }

    .mh-price-title {
        font-size: 1.25rem;
    }

    .mh-booking-form-card {
        padding: 24px 20px;
    }

    .mh-booking-form-title {
        font-size: 1.5rem;
    }

    .mh-form-input,
    .mh-form-select {
        padding: 12px 14px;
    }

    .mh-overview-card,
    .mh-reviews-card,
    .mh-review-form-card {
        padding: 24px 20px;
    }

    .mh-overview-title,
    .mh-reviews-title {
        font-size: 1.4rem;
    }

    .mh-form-title {
        font-size: 1.3rem;
    }

    .mh-section-subtitle,
    .mh-detailed-title {
        font-size: 1rem;
    }
}
</style>
