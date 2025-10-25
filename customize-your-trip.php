<?php
session_start();
require_once 'includes/config.php';

// Check if admin is logged in (for edit mode)
$isAdmin = isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true;

// Get database connection and fetch active locations with their gallery images
$pdo = getDBConnection();
$stmt = $pdo->prepare("SELECT DISTINCT * FROM tour_locations WHERE status = 'active' ORDER BY id ASC");
$stmt->execute();
$locations = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Fetch gallery images for each location
foreach ($locations as $key => $location) {
    $stmt = $pdo->prepare("SELECT * FROM location_images WHERE location_id = ? ORDER BY display_order ASC, id ASC");
    $stmt->execute([$location['id']]);
    $locations[$key]['gallery_images'] = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Ensure no duplicate IDs due to PHP array reference bugs
$uniqueLocations = [];
$seenIds = [];
foreach ($locations as $loc) {
    if (!in_array($loc['id'], $seenIds)) {
        $uniqueLocations[] = $loc;
        $seenIds[] = $loc['id'];
    }
}
$locations = $uniqueLocations;
?>
<!DOCTYPE html>
<html lang="en" class="rent-car-page">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Customize Your Perfect Trip with Marshall Holidays - Design your ideal wellness and relaxation journey tailored for mature travelers seeking tranquility and rejuvenation">
    <meta name="keywords" content="customize trip, mature travel, wellness travel planning, meditation retreat, relaxation tours, senior travel customization">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customize Your Perfect Trip - Marshall Holidays</title>
    
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

    <?php if ($isAdmin): ?>
    <!-- Admin Toolbar -->
    <div id="adminToolbar" style="position: fixed; top: 90px; right: 20px; z-index: 10000; background: linear-gradient(135deg, #2c5aa0 0%, #1e3a8a 100%); padding: 15px 20px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.2);">
        <div style="color: white; margin-bottom: 10px; font-weight: 600; font-size: 14px;">
            <i class="ph ph-user-gear" style="margin-right: 8px;"></i>Admin Mode
        </div>
        <div style="background: rgba(255,255,255,0.15); padding: 8px 12px; border-radius: 6px; margin-bottom: 10px;">
            <div style="color: white; font-size: 12px; margin-bottom: 5px; opacity: 0.9;">Editing Mode:</div>
            <select id="deviceModeSelector" onchange="switchDeviceMode()" style="width: 100%; padding: 6px; border-radius: 4px; border: none; font-weight: 600; color: #2c5aa0;">
                <option value="desktop">🖥️ Desktop View</option>
                <option value="mobile">📱 Mobile View</option>
            </select>
        </div>
        <button id="toggleEditMode" onclick="toggleEditMode()" style="background: white; color: #2c5aa0; border: none; padding: 10px 20px; border-radius: 8px; font-weight: 600; cursor: pointer; width: 100%; margin-bottom: 8px; transition: all 0.3s;">
            <i class="ph ph-pencil-simple" style="margin-right: 5px;"></i>
            <span id="editModeText">Enable Edit Mode</span>
        </button>
        <button onclick="toggleQuickAddLocation()" style="background: rgba(255,255,255,0.2); color: white; border: none; padding: 8px 16px; border-radius: 8px; font-weight: 500; cursor: pointer; width: 100%; font-size: 13px; margin-bottom: 8px;">
            <i class="ph ph-plus-circle" style="margin-right: 5px;"></i>Quick Add Location
        </button>
        <button onclick="window.location.href='admin/manage-locations.php'" style="background: rgba(255,255,255,0.2); color: white; border: none; padding: 8px 16px; border-radius: 8px; font-weight: 500; cursor: pointer; width: 100%; font-size: 13px;">
            <i class="ph ph-gear" style="margin-right: 5px;"></i>Full Admin Panel
        </button>
    </div>

    <!-- Quick Add Location Form -->
    <div id="quickAddForm" style="display: none; position: fixed; top: 90px; right: 280px; z-index: 10000; background: white; padding: 20px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.3); width: 320px; max-height: 80vh; overflow-y: auto;">
        <h4 style="margin: 0 0 15px 0; color: #2c5aa0; font-size: 1.1rem;">
            <i class="ph ph-map-pin-plus"></i> Quick Add Location
        </h4>
        <form id="quickAddLocationForm">
            <div style="margin-bottom: 12px;">
                <label style="display: block; margin-bottom: 5px; font-size: 13px; font-weight: 600; color: #333;">Location Name *</label>
                <input type="text" id="quickName" required style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 6px; font-size: 13px;">
            </div>
            <div style="margin-bottom: 12px;">
                <label style="display: block; margin-bottom: 5px; font-size: 13px; font-weight: 600; color: #333;">Description *</label>
                <textarea id="quickDescription" required rows="3" style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 6px; font-size: 13px; resize: vertical;"></textarea>
            </div>
            <div style="margin-bottom: 12px;">
                <label style="display: block; margin-bottom: 5px; font-size: 13px; font-weight: 600; color: #333;">Category</label>
                <select id="quickCategory" style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 6px; font-size: 13px;">
                    <option value="normal">Normal</option>
                    <option value="beach">Beach</option>
                    <option value="religious">Religious</option>
                    <option value="cultural">Cultural</option>
                    <option value="nature">Nature</option>
                    <option value="adventure">Adventure</option>
                </select>
            </div>
            <div style="margin-bottom: 15px;">
                <label style="display: block; margin-bottom: 5px; font-size: 13px; font-weight: 600; color: #333;">Image URL (optional)</label>
                <input type="url" id="quickImageUrl" placeholder="https://example.com/image.jpg" style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 6px; font-size: 13px;">
                <small style="color: #666; font-size: 11px;">Paste from Google Images</small>
            </div>
            <div style="display: flex; gap: 8px;">
                <button type="submit" style="flex: 1; background: #2c5aa0; color: white; border: none; padding: 10px; border-radius: 6px; font-weight: 600; cursor: pointer; font-size: 13px;">
                    <i class="ph ph-plus"></i> Add Location
                </button>
                <button type="button" onclick="toggleQuickAddLocation()" style="flex: 0 0 auto; background: #6b7280; color: white; border: none; padding: 10px 15px; border-radius: 6px; cursor: pointer; font-size: 13px;">
                    <i class="ph ph-x"></i>
                </button>
            </div>
        </form>
        <div id="quickAddStatus" style="margin-top: 12px; padding: 10px; border-radius: 6px; display: none; font-size: 13px;"></div>
    </div>
    <?php endif; ?>

    <div id="scrollSmoother-container">

        <!-- ==================== Hero Section Start Here ==================== -->
        <section class="hero-section" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('MissingIMG/img/Sigiriya Rock Fortress/sig1.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; min-height: 45vh; display: flex; align-items: center; position: relative;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-md-12">
                        <div class="hero-content text-center text-white">
                            <h1 class="hero-title" style="font-size: 2.8rem; font-weight: 700; margin-bottom: 2.5rem; text-shadow: 2px 2px 4px rgba(0,0,0,0.8); line-height: 1.2; color: white;">
                                Customize Your Dream Journey
                            </h1>
                            <div class="hero-buttons">
                                <a href="contact.php" class="btn btn-outline-light btn-lg" style="padding: 15px 35px; font-size: 1.1rem; font-weight: 600; border-radius: 50px; transition: all 0.3s;">
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

        <!-- ==================== Destination Selection Section Start ==================== -->
        <section id="destination-selection" class="py-5" style="padding-top: 60px !important; background-color: #ffffff;">
            <div class="container">
                <div class="row align-items-center mb-5">
                    <div class="col-12">
                        <h2 class="rent-car-map-title">Plan Your Perfect Journey</h2>
                        <p class="rent-car-map-subtitle">Select your destinations and create a personalized route through Sri Lanka</p>
                    </div>
                </div>

                <div class="row mb-5">
                    <!-- Map Container -->
                    <div class="col-lg-8 mb-4">
                        <div class="rent-car-map-container">
                            <img src="assets/images/sri-lanka-image.png" alt="Sri Lanka Map" class="rent-car-sri-lanka-map">

                            <!-- Location Pins - Dynamically Loaded from Database -->
                            <?php foreach ($locations as $location): ?>
                            <div class="rent-car-location-pin location-pin-editable"
                                 data-id="<?php echo $location['id']; ?>"
                                 data-location="<?php echo strtolower(str_replace(' ', '-', $location['name'])); ?>"
                                 data-name="<?php echo htmlspecialchars($location['name']); ?>"
                                 data-description="<?php echo htmlspecialchars($location['description']); ?>"
                                 data-category="<?php echo $location['category']; ?>"
                                 data-image="<?php echo htmlspecialchars($location['image'] ?? ''); ?>"
                                 data-gallery='<?php echo json_encode($location['gallery_images']); ?>'
                                 data-desktop-x="<?php echo $location['position_x']; ?>"
                                 data-desktop-y="<?php echo $location['position_y']; ?>"
                                 data-mobile-x="<?php echo $location['mobile_position_x'] ?? $location['position_x']; ?>"
                                 data-mobile-y="<?php echo $location['mobile_position_y'] ?? $location['position_y']; ?>"
                                 title="ID: <?php echo $location['id']; ?> - <?php echo htmlspecialchars($location['name']); ?>">
                                <i class="ph-fill <?php echo $location['icon_type']; ?>"></i>
                                <span class="location-name-label">
                                    <?php if ($isAdmin): ?><small style="opacity: 0.7;">[<?php echo $location['id']; ?>]</small> <?php endif; ?><?php echo htmlspecialchars($location['name']); ?>
                                </span>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Selected Destinations -->
                    <div class="col-lg-4">
                        <div class="d-flex flex-column">
                            <h3 class="rent-car-destinations-title">Selected Destinations</h3>
                            <div class="rent-car-destinations-container" id="selectedDestinations">
                                <p class="text-muted text-center py-5">Click on map locations to add them to your trip</p>
                            </div>
                            <div class="mt-4">
                                <button type="button" class="rent-car-proceed-btn" onclick="scrollToSection('vehicleSection')" id="proceedToVehicles" disabled>
                                    Choose Your Vehicle <i class="ph ph-arrow-down ms-2"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ==================== Destination Selection Section End ==================== -->

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
                                <p class="vehicle-card-desc">Comfortable travel for families and small groups</p>
                                <ul class="vehicle-features-list">
                                    <li><i class="ph ph-check"></i>Premium AC Seats</li>
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
                                <p class="vehicle-card-desc">Perfect for families seeking comfort and space</p>
                                <ul class="vehicle-features-list">
                                    <li><i class="ph ph-check"></i>Spacious AC Seats</li>
                                    <li><i class="ph ph-check"></i>Up to 6 Passengers</li>
                                    <li><i class="ph ph-check"></i>Professional Driver & Guide</li>
                                    <li><i class="ph ph-check"></i>Generous Luggage Capacity</li>
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
                                <p class="vehicle-card-desc">Ideal for group travel and extended tours</p>
                                <ul class="vehicle-features-list">
                                    <li><i class="ph ph-check"></i>Comfortable AC Seats</li>
                                    <li><i class="ph ph-check"></i>Up to 10 Passengers</li>
                                    <li><i class="ph ph-check"></i>Professional Driver & Guide</li>
                                    <li><i class="ph ph-check"></i>Ample Luggage Storage</li>
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
                                <p class="vehicle-card-desc">Perfect for large groups and multi-day tours</p>
                                <ul class="vehicle-features-list">
                                    <li><i class="ph ph-check"></i>Premium AC Seating</li>
                                    <li><i class="ph ph-check"></i>Up to 25+ Passengers</li>
                                    <li><i class="ph ph-check"></i>Professional Driver & Guide</li>
                                    <li><i class="ph ph-check"></i>Maximum Comfort & Space</li>
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
                    <button class="vehicle-proceed-button" onclick="scrollToSection('customizeForm')" id="proceedToCustomize" disabled>
                        Customize Your Trip <i class="ph ph-arrow-down"></i>
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
                                <input type="hidden" name="from_name" value="CUSTOMIZE YOUR TRIP BOOKING">
                                <input type="hidden" name="subject" value="CUSTOMIZE YOUR TRIP BOOKING FROM Marshallholidays.com">
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
                        <div>
                            <a href="tel:+94772585242" class="rent-car-footer-link mb-0 d-block">+94 772585242</a>
                            <a href="tel:+94711165242" class="rent-car-footer-link mb-0 d-block">+94 711165242</a>
                        </div>
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
        let selectedDestinations = [];

        // Vehicle selection
        document.querySelectorAll('.vehicle-card-inner').forEach(card => {
            card.addEventListener('click', function() {
                document.querySelectorAll('.vehicle-card-inner').forEach(c => c.classList.remove('selected'));
                this.classList.add('selected');
                selectedVehicle = this.getAttribute('data-vehicle');
                document.getElementById('proceedToCustomize').disabled = false;
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

        // Location selection functionality
        function addLocationClickListeners() {
            const locationPins = document.querySelectorAll('.location-pin-editable');

            locationPins.forEach(pin => {
                pin.addEventListener('click', function(e) {
                    // Don't add location if in edit mode
                    <?php if ($isAdmin): ?>
                    if (editModeEnabled) return;
                    <?php endif; ?>

                    const locationId = this.dataset.id;
                    const locationName = this.dataset.name;
                    const locationDescription = this.dataset.description;
                    const locationCategory = this.dataset.category;
                    const locationImage = this.dataset.image;
                    const galleryImages = JSON.parse(this.dataset.gallery || '[]');

                    // Debug: Log what was clicked
                    console.log('Clicked location:', {
                        id: locationId,
                        name: locationName,
                        currentDestinations: selectedDestinations.map(d => ({id: d.id, name: d.name}))
                    });

                    // Check if already selected (compare as string to handle any type mismatches)
                    if (selectedDestinations.find(dest => String(dest.id) === String(locationId))) {
                        showLocationNotification('Already Added', `${locationName} is already in your trip`, 'warning');
                        return;
                    }

                    // Add to selected destinations
                    const destination = {
                        id: locationId,
                        name: locationName,
                        description: locationDescription,
                        category: locationCategory,
                        image: locationImage || 'assets/images/locations/default-location.svg', // Use database image or default
                        gallery: galleryImages // Array of gallery images
                    };

                    selectedDestinations.push(destination);
                    updateDestinationsUI();

                    // Mark pin as selected
                    this.classList.add('selected');

                    showLocationNotification('Added!', `${locationName} added to your trip`, 'success');

                    // Enable proceed button if destinations selected
                    document.getElementById('proceedToVehicles').disabled = selectedDestinations.length === 0;
                });
            });
        }

        function updateDestinationsUI() {
            const container = document.getElementById('selectedDestinations');

            if (selectedDestinations.length === 0) {
                container.innerHTML = '<p class="text-muted text-center py-5">Click on map locations to add them to your trip</p>';
                return;
            }

            container.innerHTML = selectedDestinations.map((dest, index) => {
                // Use first gallery image if available, otherwise use main image
                let cardImage = dest.image;
                if (dest.gallery && dest.gallery.length > 0) {
                    cardImage = dest.gallery[0].image_url;
                }

                return `
                    <div class="rent-car-destination-card" data-destination-id="${dest.id}">
                        <div class="d-flex align-items-center">
                            <div class="destination-image-container">
                                <img src="${cardImage}" alt="${dest.name}" class="destination-image">
                                <div class="destination-number">${index + 1}</div>
                            </div>
                            <div class="destination-content">
                                <div class="destination-name">${dest.name}</div>
                                <a href="javascript:void(0)" class="read-more-link" onclick="showLocationDetails('${dest.id}')">
                                    Read More <i class="ph ph-arrow-right"></i>
                                </a>
                            </div>
                            <button class="btn-remove-destination" onclick="removeDestination('${dest.id}')" title="Remove">
                                <i class="ph ph-x"></i>
                            </button>
                        </div>
                    </div>
                `;
            }).join('');
        }

        function removeDestination(locationId) {
            selectedDestinations = selectedDestinations.filter(dest => dest.id !== locationId);
            updateDestinationsUI();

            // Remove selected class from pin
            const pin = document.querySelector(`.location-pin-editable[data-id="${locationId}"]`);
            if (pin) pin.classList.remove('selected');

            // Disable proceed button if no destinations
            document.getElementById('proceedToVehicles').disabled = selectedDestinations.length === 0;
        }

        function showLocationDetails(locationId) {
            const location = selectedDestinations.find(dest => dest.id === locationId);
            if (!location) return;

            // Determine which images to show in slideshow
            let slideshowImages = [];
            if (location.gallery && location.gallery.length > 0) {
                // Use gallery images if available
                slideshowImages = location.gallery.map(img => img.image_url);
            } else if (location.image) {
                // Fall back to single main image
                slideshowImages = [location.image];
            } else {
                // Use default placeholder
                slideshowImages = ['assets/images/locations/default-location.svg'];
            }

            // Create modal with slideshow
            const modal = document.createElement('div');
            modal.className = 'location-details-modal';
            modal.innerHTML = `
                <div class="location-details-content">
                    <button class="modal-close-btn" onclick="closeLocationDetails()">
                        <i class="ph ph-x"></i>
                    </button>

                    <!-- Image Slideshow -->
                    <div class="location-slideshow">
                        ${slideshowImages.length > 1 ? `
                            <button class="slideshow-prev" onclick="changeSlide(-1, event)">
                                <i class="ph ph-caret-left"></i>
                            </button>
                        ` : ''}

                        <div class="slideshow-images">
                            ${slideshowImages.map((imgUrl, index) => `
                                <img src="${imgUrl}"
                                     alt="${location.name}"
                                     class="location-details-image ${index === 0 ? 'active' : ''}"
                                     data-slide-index="${index}">
                            `).join('')}
                        </div>

                        ${slideshowImages.length > 1 ? `
                            <button class="slideshow-next" onclick="changeSlide(1, event)">
                                <i class="ph ph-caret-right"></i>
                            </button>

                            <!-- Slide indicators -->
                            <div class="slideshow-indicators">
                                ${slideshowImages.map((_, index) => `
                                    <span class="indicator ${index === 0 ? 'active' : ''}"
                                          onclick="goToSlide(${index}, event)"></span>
                                `).join('')}
                            </div>
                        ` : ''}
                    </div>

                    <h3 class="location-details-title">${location.name}</h3>
                    <p class="location-details-description">${location.description}</p>
                    <div class="location-details-category">
                        <i class="ph ph-tag"></i> ${location.category.charAt(0).toUpperCase() + location.category.slice(1)}
                    </div>
                </div>
            `;

            document.body.appendChild(modal);
            setTimeout(() => modal.classList.add('show'), 10);

            // Initialize slideshow index
            modal.dataset.currentSlide = '0';

            // Close modal when clicking outside the content
            modal.addEventListener('click', function(e) {
                if (e.target === modal) {
                    closeLocationDetails();
                }
            });
        }

        function closeLocationDetails() {
            const modal = document.querySelector('.location-details-modal');
            if (modal) {
                modal.classList.remove('show');
                setTimeout(() => modal.remove(), 300);
            }
        }

        function changeSlide(direction, event) {
            event.stopPropagation();
            const modal = document.querySelector('.location-details-modal');
            if (!modal) return;

            const images = modal.querySelectorAll('.location-details-image');
            const indicators = modal.querySelectorAll('.indicator');
            let currentIndex = parseInt(modal.dataset.currentSlide || '0');

            // Hide current slide
            images[currentIndex].classList.remove('active');
            if (indicators[currentIndex]) indicators[currentIndex].classList.remove('active');

            // Calculate new index
            currentIndex += direction;
            if (currentIndex < 0) currentIndex = images.length - 1;
            if (currentIndex >= images.length) currentIndex = 0;

            // Show new slide
            images[currentIndex].classList.add('active');
            if (indicators[currentIndex]) indicators[currentIndex].classList.add('active');

            modal.dataset.currentSlide = currentIndex.toString();
        }

        function goToSlide(index, event) {
            event.stopPropagation();
            const modal = document.querySelector('.location-details-modal');
            if (!modal) return;

            const images = modal.querySelectorAll('.location-details-image');
            const indicators = modal.querySelectorAll('.indicator');
            const currentIndex = parseInt(modal.dataset.currentSlide || '0');

            // Hide current slide
            images[currentIndex].classList.remove('active');
            if (indicators[currentIndex]) indicators[currentIndex].classList.remove('active');

            // Show new slide
            images[index].classList.add('active');
            if (indicators[index]) indicators[index].classList.add('active');

            modal.dataset.currentSlide = index.toString();
        }

        function showLocationNotification(title, message, type) {
            const colors = {
                success: '#10b981',
                warning: '#f59e0b',
                info: '#3b82f6'
            };

            const notif = document.createElement('div');
            notif.className = 'location-notification';
            notif.style.cssText = `
                position: fixed;
                top: 20px;
                right: 20px;
                z-index: 10001;
                background: white;
                padding: 15px 20px;
                border-radius: 10px;
                box-shadow: 0 8px 25px rgba(0,0,0,0.15);
                border-left: 4px solid ${colors[type]};
                min-width: 280px;
                animation: slideInRight 0.3s ease-out;
            `;

            notif.innerHTML = `
                <div style="display: flex; align-items: center; gap: 10px;">
                    <div style="width: 28px; height: 28px; border-radius: 50%; background: ${colors[type]}; display: flex; align-items: center; justify-content: center; color: white; font-size: 16px;">
                        ${type === 'success' ? '✓' : type === 'warning' ? '!' : 'i'}
                    </div>
                    <div>
                        <div style="font-weight: 600; color: #1f2937; margin-bottom: 2px;">${title}</div>
                        <div style="font-size: 13px; color: #6b7280;">${message}</div>
                    </div>
                </div>
            `;

            document.body.appendChild(notif);

            setTimeout(() => {
                notif.style.animation = 'slideOutRight 0.3s ease-out';
                setTimeout(() => notif.remove(), 300);
            }, 2500);
        }

        // Initialize location click listeners when page loads
        document.addEventListener('DOMContentLoaded', function() {
            addLocationClickListeners();
        });
    </script>

    <!-- Include necessary JS files -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/phosphor-icon.js"></script>
    <script src="assets/js/boostrap.bundle.min.js"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Don't load main.js on customize page to avoid errors -->
    <!-- <script src="assets/js/main.js"></script> -->

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

    <!-- Device Detection and Position Loading Script -->
    <script>
        // Detect device type
        function isMobileDevice() {
            return window.innerWidth <= 768;
        }

        // Current editing mode (for admins)
        let currentEditingMode = isMobileDevice() ? 'mobile' : 'desktop'; // Auto-detect on load

        // Load positions based on device
        function loadPositions() {
            const pins = document.querySelectorAll('.location-pin-editable');
            const isMobile = isMobileDevice();

            pins.forEach(pin => {
                // Skip if pin is being dragged
                if (pin.classList.contains('dragging')) {
                    return;
                }

                <?php if ($isAdmin): ?>
                // Admin sees based on selected mode
                const x = currentEditingMode === 'mobile' ? pin.dataset.mobileX : pin.dataset.desktopX;
                const y = currentEditingMode === 'mobile' ? pin.dataset.mobileY : pin.dataset.desktopY;
                <?php else: ?>
                // Regular users see based on their actual device
                const x = isMobile ? pin.dataset.mobileX : pin.dataset.desktopX;
                const y = isMobile ? pin.dataset.mobileY : pin.dataset.desktopY;
                <?php endif; ?>

                pin.style.left = x + '%';
                pin.style.top = y + '%';
            });
        }

        // Load positions on page load
        document.addEventListener('DOMContentLoaded', function() {
            <?php if ($isAdmin): ?>
            // Update dropdown to match current device
            const selector = document.getElementById('deviceModeSelector');
            selector.value = currentEditingMode;
            <?php endif; ?>

            loadPositions();
        });

        // Reload positions on window resize (for responsive behavior)
        let resizeTimer;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
                // Auto-switch editing mode based on window size for admins
                <?php if ($isAdmin): ?>
                const newMode = isMobileDevice() ? 'mobile' : 'desktop';
                if (currentEditingMode !== newMode) {
                    currentEditingMode = newMode;
                    document.getElementById('deviceModeSelector').value = currentEditingMode;
                }
                <?php endif; ?>
                loadPositions();
            }, 250);
        });

        <?php if ($isAdmin): ?>
        // Switch between desktop/mobile editing mode
        function switchDeviceMode() {
            const selector = document.getElementById('deviceModeSelector');
            currentEditingMode = selector.value;
            loadPositions();

            showEditNotification('Switched Mode', `Now editing ${currentEditingMode} positions`, 'info');
        }
        <?php endif; ?>
    </script>

    <?php if ($isAdmin): ?>
    <!-- Admin Edit Mode Script -->
    <script>
        let editModeEnabled = false;
        let draggedPin = null;
        let isDragging = false;

        function toggleEditMode() {
            editModeEnabled = !editModeEnabled;
            const editBtn = document.getElementById('toggleEditMode');
            const editText = document.getElementById('editModeText');
            const pins = document.querySelectorAll('.location-pin-editable');

            if (editModeEnabled) {
                // Enable edit mode
                editText.textContent = 'Disable Edit Mode';
                editBtn.style.background = '#10b981';
                editBtn.style.color = 'white';

                // Show notification
                showEditNotification('Edit Mode Enabled', 'Click and drag any location pin to reposition it. Changes are saved automatically.', 'success');

                // Make pins draggable
                pins.forEach(pin => {
                    pin.style.cursor = 'move';
                    pin.style.border = '3px dashed #fbbf24';
                    pin.style.boxShadow = '0 0 0 4px rgba(251, 191, 36, 0.2)';

                    // Show location name always in edit mode
                    const label = pin.querySelector('.location-name-label');
                    if (label) {
                        label.style.opacity = '1';
                        label.style.visibility = 'visible';
                        label.style.left = '48px';
                    }

                    pin.addEventListener('mousedown', startDrag);
                    pin.addEventListener('touchstart', startDrag, { passive: false });
                });

                // Disable location selection functionality
                pins.forEach(pin => {
                    pin.style.pointerEvents = 'none';
                    setTimeout(() => pin.style.pointerEvents = 'auto', 100);
                });

            } else {
                // Disable edit mode
                editText.textContent = 'Enable Edit Mode';
                editBtn.style.background = 'white';
                editBtn.style.color = '#2c5aa0';

                showEditNotification('Edit Mode Disabled', 'Location positioning has been locked.', 'info');

                // Remove draggable styling
                pins.forEach(pin => {
                    pin.style.cursor = 'pointer';
                    pin.style.border = '3px solid white';
                    pin.style.boxShadow = '0 4px 15px rgba(44, 90, 160, 0.3)';

                    const label = pin.querySelector('.location-name-label');
                    if (label) {
                        label.style.opacity = '';
                        label.style.visibility = '';
                        label.style.left = '';
                    }

                    pin.removeEventListener('mousedown', startDrag);
                    pin.removeEventListener('touchstart', startDrag);
                });
            }
        }

        function startDrag(e) {
            if (!editModeEnabled) return;
            e.preventDefault();
            e.stopPropagation();

            draggedPin = this;
            isDragging = true;
            draggedPin.classList.add('dragging');
            draggedPin.style.zIndex = '1000';
        }

        // Handle mouse move
        document.addEventListener('mousemove', handleDragMove);
        // Handle touch move
        document.addEventListener('touchmove', handleDragMove, { passive: false });

        function handleDragMove(e) {
            if (!isDragging || !draggedPin) return;

            e.preventDefault();

            const mapContainer = document.querySelector('.rent-car-map-container');
            const rect = mapContainer.getBoundingClientRect();

            // Get clientX and clientY from either mouse or touch event
            const clientX = e.touches ? e.touches[0].clientX : e.clientX;
            const clientY = e.touches ? e.touches[0].clientY : e.clientY;

            let x = ((clientX - rect.left) / rect.width) * 100;
            let y = ((clientY - rect.top) / rect.height) * 100;

            // Clamp values
            x = Math.max(0, Math.min(100, x));
            y = Math.max(0, Math.min(100, y));

            draggedPin.style.left = x + '%';
            draggedPin.style.top = y + '%';

            // Update data attributes
            draggedPin.dataset.posX = x.toFixed(2);
            draggedPin.dataset.posY = y.toFixed(2);
        }

        // Handle mouse up
        document.addEventListener('mouseup', handleDragEnd);
        // Handle touch end
        document.addEventListener('touchend', handleDragEnd);

        async function handleDragEnd() {
            if (!isDragging || !draggedPin) return;

            isDragging = false;
            draggedPin.classList.remove('dragging');
            draggedPin.style.zIndex = '';

            // Auto-save position
            const locationId = draggedPin.dataset.id;
            const locationName = draggedPin.dataset.name;
            const posX = parseFloat(draggedPin.style.left);
            const posY = parseFloat(draggedPin.style.top);

            // Update the data attributes
            if (currentEditingMode === 'mobile') {
                draggedPin.dataset.mobileX = posX.toFixed(2);
                draggedPin.dataset.mobileY = posY.toFixed(2);
            } else {
                draggedPin.dataset.desktopX = posX.toFixed(2);
                draggedPin.dataset.desktopY = posY.toFixed(2);
            }

            // Save to database
            try {
                const formData = new FormData();
                formData.append('id', locationId);
                formData.append('device_type', currentEditingMode);
                formData.append('position_x', posX.toFixed(2));
                formData.append('position_y', posY.toFixed(2));

                const response = await fetch('admin/api/update-position.php', {
                    method: 'POST',
                    body: formData
                });

                const result = await response.json();

                if (result.success) {
                    showEditNotification('Saved!', `${locationName} ${currentEditingMode} position: X: ${posX.toFixed(2)}%, Y: ${posY.toFixed(2)}%`, 'success');
                } else {
                    showEditNotification('Error!', result.message, 'error');
                }
            } catch (error) {
                showEditNotification('Error!', 'Failed to save position. Please try again.', 'error');
                console.error('Error:', error);
            }

            draggedPin = null;
        }

        function showEditNotification(title, message, type) {
            const existingNotif = document.querySelector('.edit-notification');
            if (existingNotif) existingNotif.remove();

            const colors = {
                success: '#10b981',
                error: '#ef4444',
                info: '#3b82f6'
            };

            const notif = document.createElement('div');
            notif.className = 'edit-notification';
            notif.style.cssText = `
                position: fixed;
                top: 20px;
                left: 50%;
                transform: translateX(-50%);
                z-index: 10001;
                background: white;
                padding: 15px 25px;
                border-radius: 12px;
                box-shadow: 0 10px 30px rgba(0,0,0,0.2);
                border-left: 4px solid ${colors[type]};
                min-width: 300px;
                max-width: 500px;
                animation: slideDown 0.3s ease-out;
            `;

            notif.innerHTML = `
                <div style="display: flex; align-items: center; gap: 12px;">
                    <div style="width: 32px; height: 32px; border-radius: 50%; background: ${colors[type]}; display: flex; align-items: center; justify-content: center; color: white; font-size: 18px; flex-shrink: 0;">
                        ${type === 'success' ? '✓' : type === 'error' ? '✕' : 'i'}
                    </div>
                    <div style="flex: 1;">
                        <div style="font-weight: 700; color: #1f2937; margin-bottom: 4px;">${title}</div>
                        <div style="font-size: 14px; color: #6b7280;">${message}</div>
                    </div>
                </div>
            `;

            document.body.appendChild(notif);

            setTimeout(() => {
                notif.style.animation = 'slideUp 0.3s ease-out';
                setTimeout(() => notif.remove(), 300);
            }, 3000);
        }

        // Add animations
        const style = document.createElement('style');
        style.textContent = `
            @keyframes slideDown {
                from { transform: translateX(-50%) translateY(-100%); opacity: 0; }
                to { transform: translateX(-50%) translateY(0); opacity: 1; }
            }
            @keyframes slideUp {
                from { transform: translateX(-50%) translateY(0); opacity: 1; }
                to { transform: translateX(-50%) translateY(-100%); opacity: 0; }
            }
            .location-pin-editable.dragging {
                transform: translate(-50%, -50%) scale(1.2);
                box-shadow: 0 8px 30px rgba(44, 90, 160, 0.6) !important;
            }
        `;
        document.head.appendChild(style);

        // Quick Add Location Functions
        function toggleQuickAddLocation() {
            const form = document.getElementById('quickAddForm');
            if (form.style.display === 'none' || !form.style.display) {
                form.style.display = 'block';
            } else {
                form.style.display = 'none';
                // Reset form
                document.getElementById('quickAddLocationForm').reset();
                document.getElementById('quickAddStatus').style.display = 'none';
            }
        }

        document.getElementById('quickAddLocationForm').addEventListener('submit', async function(e) {
            e.preventDefault();

            const name = document.getElementById('quickName').value.trim();
            const description = document.getElementById('quickDescription').value.trim();
            const category = document.getElementById('quickCategory').value;
            const imageUrl = document.getElementById('quickImageUrl').value.trim();

            // Brand new API with different parameter names
            const formData = new FormData();
            formData.append('location_name', name);  // Changed from 'name'
            formData.append('location_description', description);  // Changed from 'description'
            formData.append('location_category', category);  // Changed from 'category'
            formData.append('image_url', imageUrl);
            formData.append('position_x', '50');
            formData.append('position_y', '50');

            const statusDiv = document.getElementById('quickAddStatus');
            statusDiv.style.display = 'block';
            statusDiv.style.background = '#f3f4f6';
            statusDiv.style.color = '#666';
            statusDiv.innerHTML = '<i class="ph ph-spinner ph-spin"></i> Adding location...';

            try {
                // NEW API ENDPOINT - completely separate from location-operations.php
                const response = await fetch('admin/api/quick-add-location.php', {
                    method: 'POST',
                    body: formData
                });

                const result = await response.json();

                if (result.success) {
                    statusDiv.style.background = '#d1fae5';
                    statusDiv.style.color = '#065f46';
                    statusDiv.innerHTML = `<i class="ph ph-check-circle"></i> Location "${result.location_name}" added! Refreshing...`;

                    // Reset form
                    document.getElementById('quickAddLocationForm').reset();

                    // Reload page after 1 second to show new location
                    setTimeout(() => {
                        window.location.reload();
                    }, 1000);
                } else {
                    statusDiv.style.background = '#fee2e2';
                    statusDiv.style.color = '#991b1b';
                    statusDiv.innerHTML = `<i class="ph ph-x-circle"></i> Error: ${result.message}`;
                }
            } catch (error) {
                statusDiv.style.background = '#fee2e2';
                statusDiv.style.color = '#991b1b';
                statusDiv.innerHTML = '<i class="ph ph-x-circle"></i> Failed to add location. Please try again.';
                console.error('Error:', error);
            }
        });
    </script>
    <?php endif; ?>

</body>
</html>