<!DOCTYPE html>
<html lang="en" class="rent-car-page">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Rent a car in Sri Lanka with personalized trip planning. Select destinations, choose vehicles, and book your perfect Sri Lankan adventure with Marshall Holidays">
    <meta name="keywords" content="Sri Lanka car rental, trip planning, vehicle rental Ceylon, Marshall Holidays car hire, Sri Lankan road trip">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent a Car & Plan Your Trip | Marshall Holidays Sri Lanka</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png">
    
    <!-- Google Fonts - Philosopher -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@400;700&display=swap" rel="stylesheet">

    <!-- Satoshi Font -->
    <link href="https://api.fontshare.com/v2/css?f[]=satoshi@300,400,500,600,700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- Custom Rent Car CSS -->
    <link rel="stylesheet" href="assets/css/rent-car-custom.css">
<!-- Elfsight WhatsApp Chat | Untitled WhatsApp Chat -->
<script src="https://elfsightcdn.com/platform.js" async></script>
<div class="elfsight-app-2c3aaac6-0b9c-4362-9a19-38c17f636211" data-elfsight-app-lazy></div>
    <!-- Fix conflicting navbar -->
    <style>
        /* Ensure tour navbar is properly positioned */
        .mh-tour-header {
            position: fixed !important;
            top: 0 !important;
            left: 0 !important;
            right: 0 !important;
            width: 100% !important;
            z-index: 9999 !important;
            background: transparent !important;
            transition: all 0.3s ease !important;
        }

        /* Navbar background when scrolled */
        .mh-tour-header.scrolled {
            background: #E9F8FF !important;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1) !important;
        }

        /* Mobile navbar background */
        @media (max-width: 991px) {
            .mh-tour-header {
                background: #E9F8FF !important;
            }
        }

        /* Body padding for fixed navbar */
        body {
            padding-top: 80px !important;
        }

        /* Hide any conflicting elements */
        .header:not(.mh-tour-header),
        .navbar:not(.mh-tour-navbar),
        .navigation:not(.mh-tour-navigation) {
            display: none !important;
        }

        /* Page background */
        body {
            background: #f8f9fa !important;
        }

        /* Hero section adjustments for navbar */
        .hero-section {
            margin-top: -80px !important;
            padding-top: 80px !important;
        }
    </style>
</head>

<body>
    
    <!--========= Start Prealoader =============-->

    <!--========= End Prealoader ==============-->

    <!-- Custom Cursor Start -->
    <div class="cursor"></div>
    <span class="dot"></span>
    <!-- Custom Cursor End -->

    <?php include 'includes/tour-navbar.php'; ?>

    <div id="scrollSmoother-container">

        <!-- ==================== Hero Section Start Here ==================== -->
        <section class="hero-section" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('Mainimg/img/Tangalle Beach/tanmain.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; min-height: 45vh; display: flex; align-items: center; position: relative;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-md-12">
                        <div class="hero-content text-center text-white">
                            <h1 class="hero-title" style="font-size: 2.8rem; font-weight: 700; margin-bottom: 2.5rem; text-shadow: 2px 2px 4px rgba(0,0,0,0.8); line-height: 1.2; color: white;">
                                Rent a Car & Plan Your<br>Perfect Sri Lankan Adventure
                            </h1>
                            <div class="hero-buttons">
                                <a href="contact.html" class="btn btn-outline-light btn-lg" style="padding: 15px 35px; font-size: 1.1rem; font-weight: 600; border-radius: 50px; transition: all 0.3s;">
                                    Contact Us <i class="ph ph-phone ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Scroll indicator -->
            <div class="scroll-indicator" style="position: absolute; bottom: 30px; left: 50%; transform: translateX(-50%); color: white; animation: bounce 2s infinite;">
                <i class="ph ph-arrow-down" style="font-size: 2rem;"></i>
            </div>

            <style>
                @keyframes bounce {
                    0%, 20%, 50%, 80%, 100% { transform: translateX(-50%) translateY(0); }
                    40% { transform: translateX(-50%) translateY(-10px); }
                    60% { transform: translateX(-50%) translateY(-5px); }
                }

                .hero-section .btn:hover {
                    transform: translateY(-2px);
                    box-shadow: 0 8px 25px rgba(0,0,0,0.3);
                }

                @media (max-width: 768px) {
                    .hero-title {
                        font-size: 2.2rem !important;
                    }

                    .hero-buttons .btn {
                        display: block;
                        width: 100%;
                        margin-bottom: 1rem;
                        margin-right: 0 !important;
                    }
                }
            </style>
        </section>
        <!-- ==================== Hero Section End Here ==================== -->

        <!-- ==================== New Vehicle Gallery Section Start ==================== -->
        <section class="vehicle-gallery-wrapper" id="vehicleSection">
            <div class="vehicle-gallery-container">
                <div class="vehicle-gallery-header">
                    <h2 class="vehicle-gallery-title">Choose Your Perfect Vehicle</h2>
                    <p class="vehicle-gallery-subtitle">Select the ideal car for your Sri Lankan adventure</p>
                </div>

                <div class="vehicle-gallery-with-arrows">
                    <!-- Left Arrow -->
                    <button class="scroll-arrow-btn scroll-prev" id="vehiclePrevBtn" onclick="scrollVehicles('left')">
                        <i class="ph ph-arrow-left"></i>
                    </button>

                    <div class="vehicle-gallery-grid" id="vehicleCardsContainer">
                    <!-- Vehicle Card 1 -->
                    <div class="vehicle-card-wrapper">
                        <div class="vehicle-card-inner" data-vehicle="smallcar">
                            <div class="vehicle-card-image">
                                <img src="assets/images/suzuki.jpg" alt="Small Car">
                            </div>
                            <div class="vehicle-card-content">
                                <h4 class="vehicle-card-name">Small Car</h4>
                                <p class="vehicle-card-desc">Perfect for couples and solo travelers</p>
                                <ul class="vehicle-features-list">
                                    <li><i class="ph ph-check"></i>Comfortable AC Seats</li>
                                    <li><i class="ph ph-check"></i>Up to 3 Passengers</li>
                                    <li><i class="ph ph-check"></i>Professional Driver Included</li>
                                    <li><i class="ph ph-check"></i>Ideal for City Tours</li>
                                </ul>
                                <button class="vehicle-quote-btn">Request Quote</button>
                            </div>
                        </div>
                    </div>

                    <!-- Vehicle Card 2 -->
                    <div class="vehicle-card-wrapper">
                        <div class="vehicle-card-inner" data-vehicle="sedan">
                            <div class="vehicle-card-image">
                                <img src="Mainimg/vehivle images/Toyota corolla.jpg" alt="Large Car Sedan">
                            </div>
                            <div class="vehicle-card-content">
                                <h4 class="vehicle-card-name">Large Car Sedan</h4>
                                <p class="vehicle-card-desc">Spacious comfort for small families</p>
                                <ul class="vehicle-features-list">
                                    <li><i class="ph ph-check"></i>Comfortable AC Seats</li>
                                    <li><i class="ph ph-check"></i>Up to 4 Passengers</li>
                                    <li><i class="ph ph-check"></i>Professional Driver Included</li>
                                    <li><i class="ph ph-check"></i>Extra Luggage Space</li>
                                </ul>
                                <button class="vehicle-quote-btn">Request Quote</button>
                            </div>
                        </div>
                    </div>

                    <!-- Vehicle Card 3 -->
                    <div class="vehicle-card-wrapper">
                        <div class="vehicle-card-inner" data-vehicle="suv">
                            <div class="vehicle-card-image">
                                <img src="Mainimg/vehivle images/prado.jpg" alt="SUV">
                            </div>
                            <div class="vehicle-card-content">
                                <h4 class="vehicle-card-name">SUV</h4>
                                <p class="vehicle-card-desc">Premium comfort for families</p>
                                <ul class="vehicle-features-list">
                                    <li><i class="ph ph-check"></i>Luxurious AC Seats</li>
                                    <li><i class="ph ph-check"></i>Up to 6 Passengers</li>
                                    <li><i class="ph ph-check"></i>Professional Driver Included</li>
                                    <li><i class="ph ph-check"></i>Spacious Luggage Area</li>
                                </ul>
                                <button class="vehicle-quote-btn">Request Quote</button>
                            </div>
                        </div>
                    </div>

                    <!-- Vehicle Card 4 -->
                    <div class="vehicle-card-wrapper">
                        <div class="vehicle-card-inner" data-vehicle="van">
                            <div class="vehicle-card-image">
                                <img src="Mainimg/vehivle images/KDH High roof.jpg" alt="Van">
                            </div>
                            <div class="vehicle-card-content">
                                <h4 class="vehicle-card-name">Van</h4>
                                <p class="vehicle-card-desc">Ideal for group tours</p>
                                <ul class="vehicle-features-list">
                                    <li><i class="ph ph-check"></i>Comfortable AC Seats</li>
                                    <li><i class="ph ph-check"></i>Up to 10 Passengers</li>
                                    <li><i class="ph ph-check"></i>Driver & Guide Included</li>
                                    <li><i class="ph ph-check"></i>Ample Storage Space</li>
                                </ul>
                                <button class="vehicle-quote-btn">Request Quote</button>
                            </div>
                        </div>
                    </div>

                    <!-- Vehicle Card 5 -->
                    <div class="vehicle-card-wrapper">
                        <div class="vehicle-card-inner" data-vehicle="bus">
                            <div class="vehicle-card-image">
                                <img src="Mainimg/vehivle images/Ac Bus.jpg" alt="Bus">
                            </div>
                            <div class="vehicle-card-content">
                                <h4 class="vehicle-card-name">Bus</h4>
                                <p class="vehicle-card-desc">Perfect for large groups</p>
                                <ul class="vehicle-features-list">
                                    <li><i class="ph ph-check"></i>Comfortable AC Seats</li>
                                    <li><i class="ph ph-check"></i>Up to 25+ Passengers</li>
                                    <li><i class="ph ph-check"></i>Driver & Guide Included</li>
                                    <li><i class="ph ph-check"></i>Maximum Comfort</li>
                                </ul>
                                <button class="vehicle-quote-btn">Request Quote</button>
                            </div>
                        </div>
                    </div>

                    <!-- Right Arrow -->
                    <button class="scroll-arrow-btn scroll-next" id="vehicleNextBtn" onclick="scrollVehicles('right')">
                        <i class="ph ph-arrow-right"></i>
                    </button>
                </div>

                <div class="vehicle-proceed-wrapper">
                    <button class="vehicle-proceed-button" onclick="scrollToSection('bookingSection')" id="proceedToBooking" disabled>
                        Complete Your Booking <i class="ph ph-arrow-down"></i>
                    </button>
                </div>
            </div>
        </section>

        <style>
            /* Vehicle Gallery - Complete New Styles */
            .vehicle-gallery-wrapper {
                background: #f8f9fa;
                padding: 80px 0;
            }

            .vehicle-gallery-container {
                max-width: 1400px;
                margin: 0 auto;
                padding: 0 80px;
                position: relative;
            }

            .vehicle-gallery-header {
                text-align: center;
                margin-bottom: 50px;
            }

            .vehicle-gallery-title {
                font-size: 2.5rem;
                font-weight: 700;
                color: #2c5aa0;
                margin-bottom: 10px;
            }

            .vehicle-gallery-subtitle {
                font-size: 1.1rem;
                color: #666;
            }

            .vehicle-gallery-with-arrows {
                position: relative;
                margin-bottom: 40px;
            }

            .scroll-arrow-btn {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                width: 55px;
                height: 55px;
                border-radius: 50%;
                background: #2c5aa0;
                color: white;
                border: none;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 1.4rem;
                cursor: pointer;
                transition: all 0.3s ease;
                z-index: 10;
                box-shadow: 0 2px 8px rgba(44, 90, 160, 0.3);
            }

            .scroll-arrow-btn.scroll-prev {
                left: -70px;
            }

            .scroll-arrow-btn.scroll-next {
                right: -70px;
            }

            .scroll-arrow-btn:hover {
                background: #1e4080;
                transform: translateY(-50%) scale(1.1);
            }

            .scroll-arrow-btn:active {
                transform: translateY(-50%) scale(0.95);
            }

            .scroll-arrow-btn:disabled {
                background: #ccc;
                cursor: not-allowed;
                opacity: 0.6;
            }

            .vehicle-gallery-grid {
                display: flex;
                flex-wrap: nowrap;
                overflow-x: auto;
                overflow-y: hidden;
                scroll-behavior: smooth;
                -webkit-overflow-scrolling: touch;
                scroll-snap-type: x mandatory;
                gap: 25px;
                padding: 5px 0 15px 0;
                scrollbar-width: none;
                -ms-overflow-style: none;
            }

            .vehicle-gallery-grid::-webkit-scrollbar {
                display: none;
            }

            .vehicle-card-wrapper {
                background: white;
                border-radius: 12px;
                overflow: visible;
                box-shadow: 0 4px 15px rgba(0,0,0,0.1);
                transition: all 0.3s ease;
                flex: 0 0 280px;
                min-width: 280px;
                scroll-snap-align: center;
                cursor: pointer;
            }

            .vehicle-card-wrapper:hover {
                transform: translateY(-5px);
            }

            .vehicle-card-inner {
                transition: all 0.3s ease;
                border-radius: 12px;
                height: 100%;
                background: white;
                overflow: hidden;
            }

            .vehicle-card-inner.selected {
                border: 2px solid #2c5aa0;
                box-shadow: 0 8px 25px rgba(44, 90, 160, 0.4);
                background: #f0f5ff;
            }

            .vehicle-card-image {
                width: 100%;
                height: 200px;
                overflow: hidden;
                border-radius: 12px 12px 0 0;
            }

            .vehicle-card-image img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .vehicle-card-content {
                padding: 20px;
            }

            .vehicle-card-name {
                font-size: 1.3rem;
                font-weight: 600;
                color: #333;
                margin-bottom: 8px;
            }

            .vehicle-card-desc {
                color: #2c5aa0;
                font-size: 0.95rem;
                margin-bottom: 15px;
            }

            .vehicle-features-list {
                list-style: none;
                padding: 0;
                margin: 0 0 15px 0;
            }

            .vehicle-features-list li {
                color: #666;
                font-size: 0.9rem;
                margin-bottom: 6px;
                display: flex;
                align-items: center;
                gap: 8px;
            }

            .vehicle-features-list i {
                color: #28a745;
                font-size: 1.1rem;
            }

            .vehicle-quote-btn {
                background: transparent;
                color: #2c5aa0;
                border: none;
                font-weight: 600;
                cursor: pointer;
                padding: 0;
                font-size: 1rem;
            }

            .vehicle-proceed-wrapper {
                text-align: center;
                margin-top: 60px;
            }

            .vehicle-proceed-button {
                background: #2c5aa0;
                color: white;
                border: none;
                padding: 15px 40px;
                border-radius: 50px;
                font-size: 1.1rem;
                font-weight: 600;
                cursor: pointer;
                transition: all 0.3s ease;
            }

            .vehicle-proceed-button:disabled {
                background: #ccc;
                cursor: not-allowed;
            }

            .vehicle-proceed-button:not(:disabled):hover {
                background: #1e4080;
                transform: translateY(-2px);
            }

            /* Mobile/Tablet Adjustments */
            @media (max-width: 991px) {
                .vehicle-gallery-container {
                    padding: 0 20px;
                }

                .vehicle-gallery-grid {
                    gap: 15px;
                    padding: 0 5px;
                }

                .vehicle-card-wrapper {
                    flex: 0 0 85%;
                    min-width: 85%;
                }

                .scroll-arrow-btn {
                    display: none;
                }

                .vehicle-gallery-with-arrows {
                    gap: 0;
                }
            }

            @media (max-width: 576px) {
                .vehicle-gallery-container {
                    padding: 0 15px;
                }

                .vehicle-card-wrapper {
                    flex: 0 0 90%;
                    min-width: 90%;
                }

                .vehicle-gallery-title {
                    font-size: 2rem;
                }
            }

            @media (max-width: 360px) {
                .vehicle-card-wrapper {
                    flex: 0 0 92%;
                    min-width: 92%;
                }
            }
        </style>
        <!-- ==================== New Vehicle Gallery Section End ==================== -->

        <!-- ==================== Booking Section Start ==================== -->
        <section class="rent-car-booking-section" id="bookingSection">
            <div class="container">
                <div class="row align-items-center mb-5">
                    <div class="col-12">
                        <h2 class="rent-car-booking-title">Complete Your Booking</h2>
                        <p class="rent-car-booking-subtitle">Confirm your trip details and provide your information</p>
                    </div>
                </div>
                
                <div class="row">
                    <!-- Booking Summary -->
                    <div class="col-lg-5 mb-4">
                        <div class="rent-car-booking-card">
                            <h4>Trip Summary</h4>
                            
                            
                            <div class="mb-4">
                                <h6>Vehicle</h6>
                                <div id="vehicleSummary">
                                    <p class="text-muted">No vehicle selected</p>
                                </div>
                            </div>

                            <div class="pricing-note">
                                <p class="text-muted text-center p-3" style="background-color: #f8faff; border-radius: 8px; border-left: 4px solid #2c5aa0;">
                                    <i class="ph ph-info me-2"></i>We'll send you a detailed quotation with current costs and expenses after reviewing your trip details.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Booking Form -->
                    <div class="col-lg-7">
                        <div class="rent-car-booking-card">
                            <h4>Your Information</h4>
                            
                            <form id="bookingForm" action="https://api.web3forms.com/submit" method="POST" class="car-rental-form">
                                <!-- Web3Forms Hidden Fields -->
                                <input type="hidden" name="access_key" value="17f8248d-f761-4fdd-9239-dc733c75b854">
                                <input type="hidden" name="from_name" value="CAR RENTAL BOOKING">
                                <input type="hidden" name="subject" value="CAR RENTAL BOOKING FROM Marshallholidays.com">
                                <input type="hidden" name="redirect" value="https://web3forms.com/success">
                                <input type="hidden" name="selected_vehicle" id="selectedVehicleInput" value="">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="rent-car-form-label">First Name</label>
                                        <input type="text" name="first_name" class="rent-car-form-control" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="rent-car-form-label">Last Name</label>
                                        <input type="text" name="last_name" class="rent-car-form-control" required>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="rent-car-form-label">Email</label>
                                        <input type="email" name="email" class="rent-car-form-control" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="rent-car-form-label">Phone</label>
                                        <input type="tel" name="phone" class="rent-car-form-control" required>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="rent-car-form-label">Start Date</label>
                                        <input type="date" name="start_date" class="rent-car-form-control" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="rent-car-form-label">Duration (days)</label>
                                        <select name="duration" class="rent-car-form-control" required>
                                            <option value="">Select duration</option>
                                            <option value="1 Day">1 Day</option>
                                            <option value="2 Days">2 Days</option>
                                            <option value="3 Days">3 Days</option>
                                            <option value="5 Days">5 Days</option>
                                            <option value="1 Week">1 Week</option>
                                            <option value="2 Weeks">2 Weeks</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="mb-4">
                                    <label class="rent-car-form-label">Special Requirements</label>
                                    <textarea name="special_requirements" class="rent-car-form-control" rows="3" placeholder="Any special requests or requirements..."></textarea>
                                </div>
                                
                                <button type="submit" class="rent-car-submit-btn">
                                    Book Now <i class="ph ph-check-circle ms-2"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ==================== Booking Section End ==================== -->

    </div>

    <!-- ==================== Custom Footer Start ==================== -->
    <footer class="rent-car-custom-footer">
        <div class="container">
            <div class="row">
                <!-- Brand Section -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <h3 class="rent-car-footer-brand">Marshall Holidays</h3>
                    <p class="rent-car-footer-text">Your trusted partner for authentic Sri Lankan experiences. We specialize in personalized car rentals, cultural tours, and spiritual journeys.</p>
                    <div class="d-flex flex-wrap">
                        <a href="#" class="rent-car-social-icon"><i class="ph-bold ph-facebook-logo"></i></a>
                        <a href="#" class="rent-car-social-icon"><i class="ph-bold ph-instagram-logo"></i></a>
                        <a href="#" class="rent-car-social-icon"><i class="ph-bold ph-twitter-logo"></i></a>
                        <a href="#" class="rent-car-social-icon"><i class="ph-bold ph-linkedin-logo"></i></a>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="rent-car-footer-title">Quick Links</h5>
                    <a href="index.html" class="rent-car-footer-link">Home</a>
                    <a href="about.html" class="rent-car-footer-link">About Us</a>
                    <a href="sri-lanka-tour-packages.php" class="rent-car-footer-link">Tour Packages</a>
                    <a href="rent-a-car.php" class="rent-car-footer-link">Rent a Car</a>
                    <a href="contact.html" class="rent-car-footer-link">Contact</a>
                </div>
                
                <!-- Services -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="rent-car-footer-title">Our Services</h5>
                    <a href="#" class="rent-car-footer-link">Vehicle Rentals</a>
                    <a href="#" class="rent-car-footer-link">Cultural Tours</a>
                    <a href="#" class="rent-car-footer-link">Airport Transfers</a>
                    <a href="#" class="rent-car-footer-link">Custom Itineraries</a>
                    <a href="#" class="rent-car-footer-link">Travel Planning</a>
                </div>
                
                <!-- Contact Info -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="rent-car-footer-title">Get in Touch</h5>
                    <div class="d-flex align-items-center mb-3">
                        <i class="ph ph-envelope me-3" style="color: #2c5aa0;"></i>
                        <a href="mailto:info@marshallholidays.com" class="rent-car-footer-link mb-0">info@marshallholidays.com</a>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <i class="ph ph-phone me-3" style="color: #2c5aa0;"></i>
                        <a href="tel:+94252223456" class="rent-car-footer-link mb-0">+94 25 222 3456</a>
                    </div>
                    <div class="d-flex align-items-start">
                        <i class="ph ph-map-pin me-3 mt-1" style="color: #2c5aa0;"></i>
                        <span class="rent-car-footer-link mb-0">Anuradhapura,<br>Sri Lanka</span>
                    </div>
                </div>
            </div>
            
            <!-- Footer Bottom -->
            <div class="rent-car-footer-bottom">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p class="rent-car-footer-bottom-text mb-0">&copy; 2024 Marshall Holidays Pvt Ltd. All rights reserved.</p>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <a href="#" class="rent-car-footer-link d-inline me-4">Privacy Policy</a>
                        <a href="#" class="rent-car-footer-link d-inline">Terms of Service</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ==================== Custom Footer End ==================== -->

    <!-- JavaScript for Interactive Features -->
    <script>
        const vehicles = {
            smallcar: { name: "Small Car" },
            sedan: { name: "Large Car Sedan" },
            suv: { name: "SUV" },
            van: { name: "Van" },
            bus: { name: "Bus" }
        };

        let selectedVehicle = null;

        // Vehicle selection
        document.querySelectorAll('.vehicle-card-inner').forEach(card => {
            card.addEventListener('click', function() {
                document.querySelectorAll('.vehicle-card-inner').forEach(c => c.classList.remove('selected'));
                this.classList.add('selected');
                selectedVehicle = this.getAttribute('data-vehicle');
                document.getElementById('proceedToBooking').disabled = false;
                updateBookingSummary();
                updateVehicleInput();
            });
        });

        function updateBookingSummary() {
            // Update vehicle summary
            if (selectedVehicle) {
                const vehicle = vehicles[selectedVehicle];
                document.getElementById('vehicleSummary').innerHTML = `
                    <strong>${vehicle.name}</strong><br>
                    <span style="color: #64748b; font-size: 0.9rem;">Selected vehicle for your trip</span>
                `;
            }
        }

        function updateVehicleInput() {
            // Update hidden form input with selected vehicle
            if (selectedVehicle) {
                const vehicle = vehicles[selectedVehicle];
                document.getElementById('selectedVehicleInput').value = vehicle.name;
            }
        }

        // Smooth scrolling
        function scrollToSection(sectionId) {
            document.getElementById(sectionId).scrollIntoView({
                behavior: 'smooth'
            });
        }

        // Form submission
        document.getElementById('bookingForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for your booking! We will contact you shortly to confirm your reservation.');
        });
    </script>

    <!-- Include necessary JS files -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/phosphor-icon.js"></script>
    <script src="assets/js/boostrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>

    <!-- Car Rental Form Submission Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carRentalForm = document.querySelector('.car-rental-form');

            if (carRentalForm) {
                carRentalForm.addEventListener('submit', async function(e) {
                    e.preventDefault();

                    // Get form data
                    const formData = new FormData(carRentalForm);
                    const submitButton = carRentalForm.querySelector('button[type="submit"]');

                    // Disable submit button and show loading state
                    submitButton.disabled = true;
                    const originalHTML = submitButton.innerHTML;
                    submitButton.innerHTML = 'Booking... <i class="ph ph-spinner ph-spin ms-2"></i>';

                    try {
                        // Submit form to Web3Forms
                        const response = await fetch('https://api.web3forms.com/submit', {
                            method: 'POST',
                            body: formData
                        });

                        const result = await response.json();

                        if (result.success) {
                            // Show success alert
                            showCarRentalAlert('Booking Confirmed!', `Thank you for your car rental booking! We will contact you shortly to confirm your reservation and provide pickup details for your ${formData.get('duration')} rental.`, 'success');
                            // Reset form
                            carRentalForm.reset();
                        } else {
                            // Show error alert
                            showCarRentalAlert('Booking Failed!', 'There was an issue processing your car rental booking. Please try again or contact us directly.', 'error');
                        }
                    } catch (error) {
                        // Show error alert for network issues
                        showCarRentalAlert('Connection Error!', 'Network error. Please check your connection and try again.', 'error');
                        console.error('Car rental form submission error:', error);
                    } finally {
                        // Re-enable submit button
                        submitButton.disabled = false;
                        submitButton.innerHTML = originalHTML;
                    }
                });
            }
        });

        // Car Rental Alert System
        function showCarRentalAlert(title, message, type) {
            // Remove any existing alerts
            const existingAlerts = document.querySelectorAll('.car-rental-alert');
            existingAlerts.forEach(alert => alert.remove());

            // Create alert element
            const alertElement = document.createElement('div');
            alertElement.className = `car-rental-alert car-rental-alert-${type}`;
            alertElement.innerHTML = `
                <div class="car-rental-alert-content">
                    <div class="car-rental-alert-icon">
                        ${type === 'success' ? '✓' : '✕'}
                    </div>
                    <div class="car-rental-alert-text">
                        <div class="car-rental-alert-title">${title}</div>
                        <div class="car-rental-alert-message">${message}</div>
                    </div>
                    <button class="car-rental-alert-close" onclick="this.parentElement.parentElement.remove()">&times;</button>
                </div>
            `;

            // Add alert styles if not already added
            if (!document.querySelector('#car-rental-alert-styles')) {
                const styleElement = document.createElement('style');
                styleElement.id = 'car-rental-alert-styles';
                styleElement.textContent = `
                .car-rental-alert {
                    position: fixed;
                    top: 20px;
                    right: 20px;
                    z-index: 10000;
                    min-width: 360px;
                    max-width: 460px;
                    background: white;
                    border-radius: 16px;
                    box-shadow: 0 10px 35px rgba(0,0,0,0.15);
                    overflow: hidden;
                    animation: slideInRight 0.5s ease-out;
                    border: 1px solid #e5e7eb;
                }

                .car-rental-alert-success {
                    border-left: 6px solid #10b981;
                }

                .car-rental-alert-error {
                    border-left: 6px solid #ef4444;
                }

                .car-rental-alert-content {
                    display: flex;
                    align-items: flex-start;
                    padding: 22px;
                    gap: 18px;
                }

                .car-rental-alert-icon {
                    width: 36px;
                    height: 36px;
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    color: white;
                    font-weight: bold;
                    font-size: 20px;
                    flex-shrink: 0;
                }

                .car-rental-alert-success .car-rental-alert-icon {
                    background: #10b981;
                }

                .car-rental-alert-error .car-rental-alert-icon {
                    background: #ef4444;
                }

                .car-rental-alert-text {
                    flex: 1;
                }

                .car-rental-alert-title {
                    font-weight: 700;
                    font-size: 19px;
                    color: #1f2937;
                    margin-bottom: 10px;
                    line-height: 1.2;
                }

                .car-rental-alert-message {
                    font-size: 15px;
                    color: #6b7280;
                    line-height: 1.6;
                }

                .car-rental-alert-close {
                    background: none;
                    border: none;
                    font-size: 26px;
                    color: #9ca3af;
                    cursor: pointer;
                    padding: 0;
                    width: 32px;
                    height: 32px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    flex-shrink: 0;
                    border-radius: 50%;
                    transition: all 0.3s ease;
                }

                .car-rental-alert-close:hover {
                    color: #6b7280;
                    background: #f3f4f6;
                    transform: scale(1.1);
                }

                @keyframes slideInRight {
                    from {
                        transform: translateX(100%);
                        opacity: 0;
                    }
                    to {
                        transform: translateX(0);
                        opacity: 1;
                    }
                }

                @media (max-width: 640px) {
                    .car-rental-alert {
                        left: 20px;
                        right: 20px;
                        min-width: auto;
                        max-width: none;
                    }
                }
                `;
                document.head.appendChild(styleElement);
            }

            // Add alert to page
            document.body.appendChild(alertElement);

            // Auto remove after 8 seconds
            setTimeout(() => {
                if (alertElement && alertElement.parentNode) {
                    alertElement.style.animation = 'slideInRight 0.5s ease-out reverse';
                    setTimeout(() => {
                        if (alertElement && alertElement.parentNode) {
                            alertElement.remove();
                        }
                    }, 500);
                }
            }, 8000);
        }
    </script>

    <!-- Vehicle Cards Navigation Script -->
    <script>
        function scrollVehicles(direction) {
            const container = document.getElementById('vehicleCardsContainer');
            const scrollAmount = container.offsetWidth * 0.8; // Scroll by 80% of container width

            if (direction === 'left') {
                container.scrollBy({
                    left: -scrollAmount,
                    behavior: 'smooth'
                });
            } else {
                container.scrollBy({
                    left: scrollAmount,
                    behavior: 'smooth'
                });
            }

            // Update arrow states after scroll
            setTimeout(() => {
                updateArrowStates();
            }, 300);
        }

        function updateArrowStates() {
            const container = document.getElementById('vehicleCardsContainer');
            const prevBtn = document.getElementById('vehiclePrevBtn');
            const nextBtn = document.getElementById('vehicleNextBtn');

            if (container && prevBtn && nextBtn) {
                const isAtStart = container.scrollLeft <= 0;
                const isAtEnd = container.scrollLeft >= (container.scrollWidth - container.clientWidth);

                prevBtn.disabled = isAtStart;
                nextBtn.disabled = isAtEnd;
            }
        }

        // Initialize arrow states on page load
        document.addEventListener('DOMContentLoaded', function() {
            updateArrowStates();

            // Update arrow states on scroll
            const container = document.getElementById('vehicleCardsContainer');
            if (container) {
                container.addEventListener('scroll', updateArrowStates);
            }
        });
    </script>

</body>
</html>