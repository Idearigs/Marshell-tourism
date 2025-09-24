<!DOCTYPE html>
<html lang="en" class="rent-car-page">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Rent a car in Sri Lanka with personalized trip planning. Select destinations, choose vehicles, and book your perfect Sri Lankan adventure with Marshell Holidays">
    <meta name="keywords" content="Sri Lanka car rental, trip planning, vehicle rental Ceylon, Marshell Holidays car hire, Sri Lankan road trip">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent a Car & Plan Your Trip | Marshell Holidays Sri Lanka</title>
    
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
</head>

<body>
    
    <!--========= Start Prealoader =============-->
    <div class="preloader">
        <div class="loader_34">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--========= End Prealoader ==============-->

    <!-- Custom Cursor Start -->
    <div class="cursor"></div>
    <span class="dot"></span>
    <!-- Custom Cursor End -->

    <?php include 'includes/tour-navbar.php'; ?>

    <div id="scrollSmoother-container">

        <!-- ==================== Breadcrumb Start Here ==================== -->
        <section class="breadcrumb-area background-img" data-background-image="Mainimg/img/Tangalle Beach/tanmain.jpg" style="background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('Mainimg/img/Tangalle Beach/tanmain.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; min-height: 250px; display: flex; align-items: center;">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10 col-sm-12">
                        <div class="text-center px-3">
                            <h2 class="breadcrumb-title char-animation" style="font-size: 2.5rem; color: white; text-shadow: 2px 2px 4px rgba(0,0,0,0.8); margin-bottom: 0; line-height: 1.2; font-weight: 600;">Rent a Car & Plan Your Trip</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ==================== Breadcrumb End Here ==================== -->

        <!-- ==================== Vehicle Selection Section Start ==================== -->
        <section class="rent-car-vehicle-section" id="vehicleSection">
            <div class="container">
                <div class="row align-items-center mb-5">
                    <div class="col-12">
                        <h2 class="rent-car-vehicle-title">Choose Your Perfect Vehicle</h2>
                        <p class="rent-car-vehicle-subtitle">Select the ideal car for your Sri Lankan adventure</p>
                    </div>
                </div>

                <!-- Navigation Arrows for Mobile -->
                <div class="vehicle-nav-arrows d-lg-none">
                    <button class="vehicle-nav-arrow" id="vehiclePrevBtn" onclick="scrollVehicles('left')">
                        <i class="ph ph-arrow-left"></i>
                    </button>
                    <button class="vehicle-nav-arrow" id="vehicleNextBtn" onclick="scrollVehicles('right')">
                        <i class="ph ph-arrow-right"></i>
                    </button>
                </div>

                <div class="row" id="vehicleCardsContainer">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="rent-car-vehicle-card" data-vehicle="economy">
                            <img src="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?w=300&h=200&fit=crop" alt="Economy Car" class="img-fluid" style="height: 200px; width: 100%; object-fit: cover;">
                            <h4>Economy Car</h4>
                            <p>Perfect for city tours and short trips</p>
                            <ul class="list-unstyled">
                                <li><i class="ph ph-check text-success me-2"></i>5 Seats</li>
                                <li><i class="ph ph-check text-success me-2"></i>Manual/Auto</li>
                                <li><i class="ph ph-check text-success me-2"></i>Air Conditioning</li>
                                <li><i class="ph ph-check text-success me-2"></i>Fuel Efficient</li>
                            </ul>
                            <p class="text-primary fw-bold">Request Quote</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="rent-car-vehicle-card" data-vehicle="suv">
                            <img src="https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?w=300&h=200&fit=crop" alt="SUV" class="img-fluid" style="height: 200px; width: 100%; object-fit: cover;">
                            <h4>SUV</h4>
                            <p>Ideal for families and mountain areas</p>
                            <ul class="list-unstyled">
                                <li><i class="ph ph-check text-success me-2"></i>7 Seats</li>
                                <li><i class="ph ph-check text-success me-2"></i>4WD Available</li>
                                <li><i class="ph ph-check text-success me-2"></i>Extra Luggage Space</li>
                                <li><i class="ph ph-check text-success me-2"></i>High Ground Clearance</li>
                            </ul>
                            <p class="text-primary fw-bold">Request Quote</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="rent-car-vehicle-card" data-vehicle="van">
                            <img src="https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?w=300&h=200&fit=crop" alt="Van" class="img-fluid" style="height: 200px; width: 100%; object-fit: cover;">
                            <h4>Van</h4>
                            <p>Perfect for large groups and tours</p>
                            <ul class="list-unstyled">
                                <li><i class="ph ph-check text-success me-2"></i>12 Seats</li>
                                <li><i class="ph ph-check text-success me-2"></i>Professional Driver</li>
                                <li><i class="ph ph-check text-success me-2"></i>Maximum Comfort</li>
                                <li><i class="ph ph-check text-success me-2"></i>Tour Guide Available</li>
                            </ul>
                            <p class="text-primary fw-bold">Request Quote</p>
                        </div>
                    </div>
                </div>
                
                <div class="row mt-4">
                    <div class="col-12 text-center">
                        <button class="rent-car-proceed-btn" onclick="scrollToSection('bookingSection')" id="proceedToBooking" disabled style="max-width: 400px;">
                            Complete Your Booking <i class="ph ph-arrow-down ms-2"></i>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <!-- ==================== Vehicle Selection Section End ==================== -->

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
                            
                            <form id="bookingForm">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="rent-car-form-label">First Name</label>
                                        <input type="text" class="rent-car-form-control" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="rent-car-form-label">Last Name</label>
                                        <input type="text" class="rent-car-form-control" required>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="rent-car-form-label">Email</label>
                                        <input type="email" class="rent-car-form-control" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="rent-car-form-label">Phone</label>
                                        <input type="tel" class="rent-car-form-control" required>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="rent-car-form-label">Start Date</label>
                                        <input type="date" class="rent-car-form-control" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="rent-car-form-label">Duration (days)</label>
                                        <select class="rent-car-form-control" required>
                                            <option value="">Select duration</option>
                                            <option value="1">1 Day</option>
                                            <option value="2">2 Days</option>
                                            <option value="3">3 Days</option>
                                            <option value="5">5 Days</option>
                                            <option value="7">1 Week</option>
                                            <option value="14">2 Weeks</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="mb-4">
                                    <label class="rent-car-form-label">Special Requirements</label>
                                    <textarea class="rent-car-form-control" rows="3" placeholder="Any special requests or requirements..."></textarea>
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
                    <h3 class="rent-car-footer-brand">Marshell Holidays</h3>
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
                        <p class="rent-car-footer-bottom-text mb-0">&copy; 2024 Marshell Holidays Pvt Ltd. All rights reserved.</p>
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
            economy: { name: "Economy Car", price: 35 },
            suv: { name: "SUV", price: 65 },
            van: { name: "Van", price: 85 }
        };

        let selectedVehicle = null;

        // Vehicle selection
        document.querySelectorAll('.rent-car-vehicle-card').forEach(card => {
            card.addEventListener('click', function() {
                document.querySelectorAll('.rent-car-vehicle-card').forEach(c => c.classList.remove('selected'));
                this.classList.add('selected');
                selectedVehicle = this.getAttribute('data-vehicle');
                document.getElementById('proceedToBooking').disabled = false;
                updateBookingSummary();
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