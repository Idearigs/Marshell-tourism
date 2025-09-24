<!-- Marshell Holidays Tour Package Navbar -->
<style>
/* Tour Package Navbar Styles - Conflict-Free */
.mh-tour-header {
    background: transparent;
    backdrop-filter: none;
    border-bottom: none;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
    transition: all 0.3s ease;
    box-shadow: none;
}

.mh-tour-header.scrolled {
    background: #E9F8FF;
    backdrop-filter: blur(10px);
    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.mh-tour-nav {
    padding: 25px 30px;
    padding-left: 30px;
}

.mh-tour-logo h3 {
    color: white;
    font-weight: 700;
    font-size: 2.2rem;
    margin: 0;
    font-family: 'Philosopher', serif;
    letter-spacing: -0.5px;
    transition: all 0.3s ease;
}

.mh-tour-header.scrolled .mh-tour-logo h3 {
    color: #2c5aa0;
}

.mh-tour-menu {
    display: flex;
    align-items: center;
    gap: 1rem;
    list-style: none;
    margin: 0;
    padding: 0;
}

.mh-tour-menu-item {
    position: relative;
}

.mh-tour-menu-link {
    color: white;
    text-decoration: none;
    font-weight: 600;
    font-size: 0.95rem;
    padding: 8px 16px;
    border-radius: 25px;
    transition: all 0.3s ease;
    font-family: 'Philosopher', serif;
}

.mh-tour-header.scrolled .mh-tour-menu-link {
    color: #2c5aa0;
}

.mh-tour-menu-link:hover {
    background: #ff6b35;
    color: white;
    transform: translateY(-2px);
}

.mh-tour-contact-btn {
    background: transparent;
    color: white;
    padding: 12px 24px;
    border-radius: 30px;
    text-decoration: none;
    font-weight: 600;
    font-size: 0.9rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-family: 'Philosopher', serif;
    border: 1px solid white;
}

.mh-tour-header.scrolled .mh-tour-contact-btn {
    background: white;
    color: #2c5aa0;
    border: 1px solid #2c5aa0;
}

.mh-tour-contact-btn:hover {
    background: #2c5aa0;
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(44, 90, 160, 0.3);
}

.mh-tour-mobile-toggle {
    display: none;
    background: none;
    border: none;
    font-size: 1.5rem;
    color: #2c5aa0;
    cursor: pointer;
}

/* Mobile Styles */
@media (max-width: 991px) {
    .mh-tour-menu {
        display: none;
    }

    .mh-tour-mobile-toggle {
        display: block;
    }
}

/* Mobile Menu */
.mh-tour-mobile-menu {
    position: fixed;
    top: 0;
    left: -100%;
    width: 280px;
    height: 100vh;
    background: white;
    z-index: 2000;
    transition: left 0.3s ease;
    box-shadow: 5px 0 15px rgba(0,0,0,0.1);
}

.mh-tour-mobile-menu.active {
    left: 0;
}

.mh-tour-mobile-header {
    padding: 20px;
    border-bottom: 1px solid #eee;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.mh-tour-mobile-close {
    background: none;
    border: none;
    font-size: 1.5rem;
    color: #2c5aa0;
    cursor: pointer;
}

.mh-tour-mobile-nav {
    padding: 20px 0;
}

.mh-tour-mobile-list {
    list-style: none;
    margin: 0;
    padding: 0;
}

.mh-tour-mobile-item {
    margin: 0;
}

.mh-tour-mobile-link {
    display: block;
    padding: 15px 20px;
    color: #2c5aa0;
    text-decoration: none;
    font-weight: 500;
    border-bottom: 1px solid #f5f5f5;
    transition: all 0.3s ease;
}

.mh-tour-mobile-link:hover {
    background: #f8faff;
    color: #1e4080;
}

.mh-tour-mobile-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.5);
    z-index: 1500;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
}

.mh-tour-mobile-overlay.active {
    opacity: 1;
    visibility: visible;
}
</style>

<!-- Mobile Menu -->
<div id="mh-tour-mobile-menu" class="mh-tour-mobile-menu">
    <div class="mh-tour-mobile-header">
        <h4 style="color: #2c5aa0; font-weight: 700; margin: 0;">Marshell Holidays</h4>
        <button id="mh-tour-mobile-close" class="mh-tour-mobile-close">
            <i class="ph ph-x"></i>
        </button>
    </div>
    <nav class="mh-tour-mobile-nav">
        <ul class="mh-tour-mobile-list">
            <li class="mh-tour-mobile-item">
                <a href="index.php" class="mh-tour-mobile-link">Home</a>
            </li>
            <li class="mh-tour-mobile-item">
                <a href="sri-lanka-tour-packages.php" class="mh-tour-mobile-link">Tour Packages</a>
            </li>
            <li class="mh-tour-mobile-item">
                <a href="customize-your-trip.php" class="mh-tour-mobile-link">Customize Your Trip</a>
            </li>
            <li class="mh-tour-mobile-item">
                <a href="rent-a-car.php" class="mh-tour-mobile-link">Rent a Car</a>
            </li>
            <li class="mh-tour-mobile-item">
                <a href="about.php" class="mh-tour-mobile-link">About</a>
            </li>
            <li class="mh-tour-mobile-item">
                <a href="contact.html" class="mh-tour-mobile-link">Contact</a>
            </li>
        </ul>
    </nav>
</div>
<div id="mh-tour-mobile-overlay" class="mh-tour-mobile-overlay"></div>

<!-- Main Header -->
<header class="mh-tour-header">
    <div class="container-fluid">
        <nav class="mh-tour-nav d-flex align-items-center justify-content-between">
            <!-- Logo -->
            <div class="mh-tour-logo">
                <a href="index.php" style="text-decoration: none;">
                    <h3>Marshell Holidays</h3>
                </a>
            </div>

            <!-- Desktop Menu -->
            <ul class="mh-tour-menu d-none d-lg-flex">
                <li class="mh-tour-menu-item">
                    <a href="index.php" class="mh-tour-menu-link">Home</a>
                </li>
                <li class="mh-tour-menu-item">
                    <a href="sri-lanka-tour-packages.php" class="mh-tour-menu-link">Tour Packages</a>
                </li>
                <li class="mh-tour-menu-item">
                    <a href="customize-your-trip.php" class="mh-tour-menu-link">Customize Your Trip</a>
                </li>
                <li class="mh-tour-menu-item">
                    <a href="rent-a-car.php" class="mh-tour-menu-link">Rent a Car</a>
                </li>
                <li class="mh-tour-menu-item">
                    <a href="about.php" class="mh-tour-menu-link">About</a>
                </li>
                <li class="mh-tour-menu-item">
                    <a href="contact.html" class="mh-tour-menu-link">Contact</a>
                </li>
            </ul>

            <!-- Right Side -->
            <div class="d-flex align-items-center gap-3">
                <a href="contact.html" class="mh-tour-contact-btn d-none d-lg-flex">
                    Contact Us <i class="ph ph-arrow-up-right"></i>
                </a>
                <button id="mh-tour-mobile-toggle" class="mh-tour-mobile-toggle d-lg-none">
                    <i class="ph ph-list"></i>
                </button>
            </div>
        </nav>
    </div>
</header>

<!-- JavaScript for Mobile Menu -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const mobileToggle = document.getElementById('mh-tour-mobile-toggle');
    const mobileMenu = document.getElementById('mh-tour-mobile-menu');
    const mobileClose = document.getElementById('mh-tour-mobile-close');
    const mobileOverlay = document.getElementById('mh-tour-mobile-overlay');

    function openMobileMenu() {
        mobileMenu.classList.add('active');
        mobileOverlay.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeMobileMenu() {
        mobileMenu.classList.remove('active');
        mobileOverlay.classList.remove('active');
        document.body.style.overflow = '';
    }

    if (mobileToggle) {
        mobileToggle.addEventListener('click', openMobileMenu);
    }

    if (mobileClose) {
        mobileClose.addEventListener('click', closeMobileMenu);
    }

    if (mobileOverlay) {
        mobileOverlay.addEventListener('click', closeMobileMenu);
    }

    // Close on escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeMobileMenu();
        }
    });

    // Navbar scroll effect
    function handleNavbarScroll() {
        const header = document.querySelector('.mh-tour-header');
        if (!header) return;

        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    }

    // Add scroll event listener
    window.addEventListener('scroll', handleNavbarScroll);

    // Initial check
    handleNavbarScroll();
});
</script>

<!-- Add padding to body to account for fixed header -->
<style>
body { padding-top: 90px; }
</style>