<?php
// Tour Hero Section
// Usage: include 'includes/tour-hero.php';
// Variables needed: $hero_image, $hero_title, $hero_subtitle (optional)

// Default values if not set
if (!isset($hero_image)) $hero_image = 'MissingIMG/img/Sigiriya Rock Fortress/sigwide.jpg';
if (!isset($hero_title)) $hero_title = 'Tour Package';
if (!isset($hero_subtitle)) $hero_subtitle = '';
?>

<style>
/* Tour Hero Section Styles - Conflict-Free */
.mh-tour-hero {
    position: relative;
    min-height: 600px;
    height: 600px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    overflow: hidden;
}

.mh-tour-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.4));
    z-index: 1;
}

.mh-tour-hero-content {
    position: relative;
    z-index: 2;
    text-align: center;
    color: #f8f9fa;
    max-width: 800px;
    padding: 0 20px;
}

.mh-tour-hero-title {
    font-size: 3.5rem;
    font-weight: 700;
    margin-bottom: 1rem;
    text-shadow: 2px 2px 8px rgba(0,0,0,0.8);
    font-family: 'Philosopher', serif;
    line-height: 1.2;
    animation: mhHeroFadeUp 1s ease-out;
    color: #ffffff;
}

.mh-tour-hero-subtitle {
    font-size: 1.3rem;
    font-weight: 400;
    margin-bottom: 2rem;
    text-shadow: 1px 1px 4px rgba(0,0,0,0.8);
    opacity: 0.95;
    line-height: 1.4;
    animation: mhHeroFadeUp 1s ease-out 0.3s both;
    color: #f8f9fa;
}

.mh-tour-hero-badge {
    display: inline-block;
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.3);
    padding: 8px 20px;
    border-radius: 25px;
    font-size: 0.9rem;
    font-weight: 500;
    margin-bottom: 1.5rem;
    animation: mhHeroFadeUp 1s ease-out 0.6s both;
}

.mh-tour-hero-actions {
    display: flex;
    gap: 1rem;
    justify-content: center;
    flex-wrap: wrap;
    animation: mhHeroFadeUp 1s ease-out 0.9s both;
}

.mh-tour-hero-btn {
    padding: 15px 30px;
    border-radius: 30px;
    text-decoration: none;
    font-weight: 600;
    font-size: 0.95rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    min-width: 160px;
    justify-content: center;
}

.mh-tour-hero-btn-primary {
    background: #ff6b35;
    color: white;
    border: 2px solid #ff6b35;
}

.mh-tour-hero-btn-primary:hover {
    background: transparent;
    color: white;
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(255, 107, 53, 0.4);
}

.mh-tour-hero-btn-secondary {
    background: transparent;
    color: white;
    border: 2px solid rgba(255, 255, 255, 0.7);
}

.mh-tour-hero-btn-secondary:hover {
    background: white;
    color: #2c5aa0;
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(255, 255, 255, 0.3);
}

/* Floating Elements */
.mh-tour-hero-float {
    position: absolute;
    z-index: 1;
}

.mh-tour-hero-float-1 {
    top: 20%;
    left: 10%;
    width: 60px;
    height: 60px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    animation: mhHeroFloat 6s ease-in-out infinite;
}

.mh-tour-hero-float-2 {
    top: 60%;
    right: 15%;
    width: 40px;
    height: 40px;
    background: rgba(255, 107, 53, 0.2);
    border-radius: 50%;
    animation: mhHeroFloat 8s ease-in-out infinite reverse;
}

.mh-tour-hero-float-3 {
    bottom: 30%;
    left: 20%;
    width: 30px;
    height: 30px;
    background: rgba(255, 255, 255, 0.15);
    border-radius: 50%;
    animation: mhHeroFloat 10s ease-in-out infinite;
}

/* Animations */
@keyframes mhHeroFadeUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes mhHeroFloat {
    0%, 100% {
        transform: translateY(0px) rotate(0deg);
    }
    50% {
        transform: translateY(-20px) rotate(180deg);
    }
}

/* Responsive Design */
@media (max-width: 768px) {
    .mh-tour-hero {
        min-height: 400px;
        height: 400px;
        background-attachment: scroll;
        background-position: center center;
    }

    .mh-tour-hero-title {
        font-size: 2.5rem;
    }

    .mh-tour-hero-subtitle {
        font-size: 1.1rem;
    }

    .mh-tour-hero-actions {
        display: none !important;
    }

    .mh-tour-hero-content {
        transform: translateY(30px);
    }
}

@media (max-width: 480px) {
    .mh-tour-hero {
        min-height: 350px;
        height: 350px;
    }

    .mh-tour-hero-title {
        font-size: 2rem;
    }

    .mh-tour-hero-subtitle {
        font-size: 1rem;
    }
}

/* Ensure consistent image sizing across different screen ratios */
@media (min-width: 1400px) {
    .mh-tour-hero {
        height: 650px;
        background-position: center center;
    }
}

@media (max-width: 1200px) and (min-width: 769px) {
    .mh-tour-hero {
        height: 550px;
        background-position: center center;
    }
}
</style>

<!-- Hero Section -->
<section class="mh-tour-hero" style="background-image: url('<?php echo htmlspecialchars($hero_image); ?>');">
    <!-- Floating Elements -->
    <div class="mh-tour-hero-float mh-tour-hero-float-1"></div>
    <div class="mh-tour-hero-float mh-tour-hero-float-2"></div>
    <div class="mh-tour-hero-float mh-tour-hero-float-3"></div>

    <!-- Hero Content -->
    <div class="mh-tour-hero-content">

        <h1 class="mh-tour-hero-title"><?php echo htmlspecialchars($hero_title); ?></h1>

        <?php if (!empty($hero_subtitle)): ?>
        <p class="mh-tour-hero-subtitle"><?php echo htmlspecialchars($hero_subtitle); ?></p>
        <?php endif; ?>

        <div class="mh-tour-hero-actions">
            <a href="#package-details" class="mh-tour-hero-btn mh-tour-hero-btn-primary">
                <i class="ph ph-info"></i>
                View Details
            </a>
            <a href="contact.html" class="mh-tour-hero-btn mh-tour-hero-btn-secondary">
                <i class="ph ph-phone"></i>
                Book Now
            </a>
        </div>
    </div>
</section>

<!-- Smooth scroll for anchor links -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});
</script>