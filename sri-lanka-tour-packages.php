<?php
require_once 'includes/package-ratings.php';
$packageRatings = getAllPackageRatings();
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Discover our authentic Sri Lankan tour packages featuring meditation retreats, Buddhist cultural visits, and peaceful wellness experiences">
    <meta name="keywords" content="Sri Lanka tour packages, Buddhist cultural tours, meditation retreats Sri Lanka, wellness travel Ceylon, peaceful Sri Lankan holidays">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Sri Lanka Tour Packages - Meditation & Cultural Experiences | Marshall Holidays</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png">
    <!-- Aos -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.css">
    <!-- Aos -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!-- Aos -->
    <link rel="stylesheet" href="assets/css/aos.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
     <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@400;700&display=swap" rel="stylesheet">
    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- Custom Rent Car CSS -->
    <link rel="stylesheet" href="assets/css/rent-car-custom.css">
    <!-- Elfsight WhatsApp Chat | Untitled WhatsApp Chat -->
<script src="https://elfsightcdn.com/platform.js" async></script>
<div class="elfsight-app-2c3aaac6-0b9c-4362-9a19-38c17f636211" data-elfsight-app-lazy></div>
    <!-- Package Stars CSS -->
    <style>
        .package-stars-display {
            display: inline-flex;
            align-items: center;
            gap: 2px;
        }
        .package-star {
            font-size: 14px;
            line-height: 1;
        }
        .package-star.full {
            color: #ffc107;
        }
        .package-star.half {
            background: linear-gradient(90deg, #ffc107 50%, #ddd 50%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            color: #ffc107;
        }
        .package-star.empty {
            color: #ddd;
        }
        .rating-info {
            display: flex;
            align-items: center;
            gap: 6px;
        }
        .rating-number {
            font-weight: 600;
            color: #2c5aa0;
        }
        .review-count {
            color: #64748b;
            font-size: 0.9rem;
        }

        /* Tour Package Card Image Standardization */
        .service-two-thumb {
            height: 200px !important;
            overflow: hidden !important;
        }

        .service-two-thumb img {
            width: 100% !important;
            height: 100% !important;
            object-fit: cover !important;
            border-radius: 12px !important;
        }

        .service-two-wrapper {
            min-height: 600px !important;
            display: flex !important;
            flex-direction: column !important;
        }

        .service-two-content {
            flex: 1 !important;
            display: flex !important;
            flex-direction: column !important;
        }

        .service-two-paragraph {
            flex: 1 !important;
            overflow: hidden !important;
            display: -webkit-box !important;
            -webkit-line-clamp: 3 !important;
            -webkit-box-orient: vertical !important;
            min-height: 72px !important;
        }

        .service-two-wrap {
            margin-top: auto !important;
        }
    </style>
</head>

<body class="bg-neutral-50">



<?php include 'includes/tour-navbar.php'; ?>
<div id="scrollSmoother-container">
     <!-- ==================== Breadcrumb Start Here ==================== -->
        <section class="breadcrumb-area background-img" data-background-image="MissingIMG/img/Sigiriya Rock Fortress/sigwide.jpg" style="background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('MissingIMG/img/Sigiriya Rock Fortress/sigwide.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; min-height: 350px; display: flex; align-items: center; justify-content: center; margin-top: 40px;">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10 col-sm-12">
                        <div class="text-center px-3">
                            <h2 class="breadcrumb-title char-animation" style="font-size: 2.5rem; color: white; text-shadow: 2px 2px 4px rgba(0,0,0,0.8); margin-bottom: 0; margin-top: 50px; line-height: 1.2; font-weight: 600;">Marshall Holidays Tour Packages</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <style>
            .breadcrumb-title {
                word-wrap: break-word;
                overflow-wrap: break-word;
                white-space: normal;
            }

            @media (max-width: 768px) {
                .breadcrumb-area {
                    min-height: 300px !important;
                }

                .breadcrumb-title {
                    font-size: 2rem !important;
                }
            }

            @media (max-width: 480px) {
                .breadcrumb-area {
                    min-height: 280px !important;
                }

                .breadcrumb-title {
                    font-size: 1.8rem !important;
                }
            }

            @media (max-width: 360px) {
                .breadcrumb-title {
                    font-size: 1.6rem !important;
                }
            }
        </style>
        <!-- ==================== Breadcrumb End Here ==================== -->
     <section class="package-ip-area pt-140">
          <div class="container">
               <div class="row justify-content-between align-items-end tw-mb-16">
                    <div class="col-xl-7 col-lg-8">
                         <div data-aos-duration="1000" data-aos-delay="200">
                              <div class="tw-mb-6">
                                   <p class="font-heading text-main-600 fw-bold text-capitalize">Showing <span class="text-main-two-600">6</span> Peaceful Sri Lankan Experiences</p>
                              </div>
                              <div class="d-flex align-items-center tw-gap-5 flex-wrap">
                                   <div class="package-ip-left-nice-select nice-select" id="duration-filter"><span class="current">Duration</span>
                                        <ul class="list">
                                             <li class="option" data-value="all">All Durations</li>
                                             <li class="option" data-value="7">7 Days</li>
                                             <li class="option" data-value="14">14 Days</li>
                                        </ul>
                                   </div>
                                   <div class="package-ip-left-nice-select nice-select" id="type-filter"><span class="current">Tour Type</span>
                                        <ul class="list">
                                             <li class="option" data-value="all">All Types</li>
                                             <li class="option" data-value="cultural">Cultural</li>
                                             <li class="option" data-value="wellness">Wellness</li>
                                             <li class="option" data-value="adventure">Adventure</li>
                                             <li class="option" data-value="coastal">Coastal</li>
                                        </ul>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                         <div class="d-flex align-items-center justify-content-end tw-gap-2" data-aos-duration="1000" data-aos-delay="300">
                              <div>
                                   <p class="d-flex align-items-center tw-gap-4 fw-medium text-black">Sort by: <span><img src="assets/images/icon/package-updown.svg" alt="package"></span></p>
                              </div>
                              <div>
                                   <div class="package-ip-right-nice-select nice-select" id="sort-filter"><span class="current">Featured</span>
                                        <ul class="list">
                                             <li class="option" data-value="featured">Featured</li>
                                             <li class="option" data-value="duration-asc">Duration (Short to Long)</li>
                                             <li class="option" data-value="duration-desc">Duration (Long to Short)</li>
                                             <li class="option" data-value="name-asc">Name (A-Z)</li>
                                        </ul>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
               <div class="row g-5 tw-pb-8">
                    <!-- Package 1: JEWELS OF CEYLON GRAND TOUR -->
                    <div class="col-xl-4 col-lg-6 col-md-6 d-flex package-card" data-duration="14" data-type="cultural" data-name="JEWELS OF CEYLON GRAND TOUR">
                         <div class="service-two-wrapper bg-white tw-p-6 tw-rounded-xl d-flex flex-column h-100 w-100">
                              <div class="service-two-thumb tw-mb-5">
                                   <a href="jewels-of-ceylon-grand-tour.php"><img class="tw-rounded-xl w-100" src="MissingIMG/img/Sigiriya Rock Fortress/sigmain.jpg" alt="Jewels of Ceylon Grand Tour"></a>
                              </div>
                              <div class="service-two-content tw-px-4 d-flex flex-column flex-grow-1">
                                   <span class="service-two-location tw-mb-3 d-block"><i class="ph ph-map-pin"></i> Sri Lanka</span>
                                   <h4 class="tw-text-6 fw-normal text-capitalize tw-mb-4 tw-mt-2"><a class="hover-text-secondary" href="jewels-of-ceylon-grand-tour.php">JEWELS OF CEYLON GRAND TOUR</a></h4>
                                   <p class="service-two-paragraph tw-mb-6 tw-leading-relaxed">14 Days/13 Nights cultural odyssey exploring ancient kingdoms, UNESCO sites, wildlife sanctuaries, hill country tea estates, and pristine beaches.</p>
                                   <div class="flex-grow-1"></div>
                                   <div class="service-two-wrap tw-rounded-xl tw-py-5 tw-px-6">
                                        <div class="service-two-star d-flex tw-gap-6 tw-pb-4 tw-mb-6">
                                             <div class="rating-info">
                                                  <?php echo $packageRatings['jewels-of-ceylon-grand-tour']['stars_html']; ?>
                                                  <span class="rating-number"><?php echo $packageRatings['jewels-of-ceylon-grand-tour']['rating_display']; ?></span>
                                                  <span class="review-count">(<?php echo $packageRatings['jewels-of-ceylon-grand-tour']['total_reviews']; ?>)</span>
                                             </div>
                                             <span class="text-main-600 fw-medium">14 Days / 13 Nights</span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                                             <div class="service-two-price">
                                                  <h6>Contact Us</h6>
                                                  <p>/ For Best Rates</p>
                                             </div>
                                             <div>
                                                  <a class="font-heading tw-text-sm text-uppercase text-main-600 fw-bold hover-text-secondary" href="jewels-of-ceylon-grand-tour.php">EXPLORE MORE <i class="tw-text-base ph ph-arrow-up-right"></i></a>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <!-- Package 2: CEYLON DISCOVERY EXPLORER -->
                    <div class="col-xl-4 col-lg-6 col-md-6 d-flex package-card" data-duration="14" data-type="cultural" data-name="CEYLON DISCOVERY EXPLORER">
                         <div class="service-two-wrapper bg-white tw-p-6 tw-rounded-xl d-flex flex-column h-100 w-100">
                              <div class="service-two-thumb tw-mb-5">
                                   <a href="ceylon-discovery-explorer.php"><img class="tw-rounded-xl w-100" src="MissingIMG/img/Kandy/knd2.jpg" alt="Ceylon Discovery Explorer"></a>
                              </div>
                              <div class="service-two-content tw-px-4 d-flex flex-column flex-grow-1">
                                   <span class="service-two-location tw-mb-3 d-block"><i class="ph ph-map-pin"></i> Sri Lanka</span>
                                   <h4 class="tw-text-6 fw-normal text-capitalize tw-mb-4 tw-mt-2"><a class="hover-text-secondary" href="ceylon-discovery-explorer.php">CEYLON DISCOVERY EXPLORER</a></h4>
                                   <p class="service-two-paragraph tw-mb-6 tw-leading-relaxed">14 Days/13 Nights comprehensive journey through Buddhist temples, ancient cities, safari adventures, mountain railways, and colonial heritage.</p>
                                   <div class="flex-grow-1"></div>
                                   <div class="service-two-wrap tw-rounded-xl tw-py-5 tw-px-6">
                                        <div class="service-two-star d-flex tw-gap-6 tw-pb-4 tw-mb-6">
                                             <div class="rating-info">
                                                  <?php echo $packageRatings['ceylon-discovery-explorer']['stars_html']; ?>
                                                  <span class="rating-number"><?php echo $packageRatings['ceylon-discovery-explorer']['rating_display']; ?></span>
                                                  <span class="review-count">(<?php echo $packageRatings['ceylon-discovery-explorer']['total_reviews']; ?>)</span>
                                             </div>
                                             <span class="text-main-600 fw-medium">14 Days / 13 Nights</span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                                             <div class="service-two-price">
                                                  <h6>Contact Us</h6>
                                                  <p>/ For Rates</p>
                                             </div>
                                             <div>
                                                  <a class="font-heading tw-text-sm text-uppercase text-main-600 fw-bold hover-text-secondary" href="ceylon-discovery-explorer.php">EXPLORE MORE <i class="tw-text-base ph ph-arrow-up-right"></i></a>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <!-- Package 3: PARADISE COASTAL ADVENTURE -->
                    <div class="col-xl-4 col-lg-6 col-md-6 d-flex package-card" data-duration="7" data-type="coastal" data-name="PARADISE COASTAL ADVENTURE">
                         <div class="service-two-wrapper bg-white tw-p-6 tw-rounded-xl d-flex flex-column h-100 w-100">
                              <div class="service-two-thumb tw-mb-5">
                                   <a href="paradise-coastal-adventure.php"><img class="tw-rounded-xl w-100" src="MissingIMG/img/Galle Fort/gl1.jpg" alt="Paradise Coastal Adventure"></a>
                              </div>
                              <div class="service-two-content tw-px-4 d-flex flex-column flex-grow-1">
                                   <span class="service-two-location tw-mb-3 d-block"><i class="ph ph-map-pin"></i> Sri Lanka</span>
                                   <h4 class="tw-text-6 fw-normal text-capitalize tw-mb-4 tw-mt-2"><a class="hover-text-secondary" href="paradise-coastal-adventure.php">PARADISE COASTAL ADVENTURE</a></h4>
                                   <p class="service-two-paragraph tw-mb-6 tw-leading-relaxed">7 Days/6 Nights coastal discovery featuring whale watching, beach relaxation, historic Galle Fort, and vibrant marine ecosystems.</p>
                                   <div class="flex-grow-1"></div>
                                   <div class="service-two-wrap tw-rounded-xl tw-py-5 tw-px-6">
                                        <div class="service-two-star d-flex tw-gap-6 tw-pb-4 tw-mb-6">
                                             <div class="rating-info">
                                                  <?php echo $packageRatings['paradise-coastal-adventure']['stars_html']; ?>
                                                  <span class="rating-number"><?php echo $packageRatings['paradise-coastal-adventure']['rating_display']; ?></span>
                                                  <span class="review-count">(<?php echo $packageRatings['paradise-coastal-adventure']['total_reviews']; ?>)</span>
                                             </div>
                                             <span class="text-main-600 fw-medium">7 Days / 6 Nights</span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                                             <div class="service-two-price">
                                                  <h6>Contact Us</h6>
                                                  <p>/ For Rates</p>
                                             </div>
                                             <div>
                                                  <a class="font-heading tw-text-sm text-uppercase text-main-600 fw-bold hover-text-secondary" href="paradise-coastal-adventure.php">EXPLORE MORE <i class="tw-text-base ph ph-arrow-up-right"></i></a>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <!-- Package 4: SACRED CEYLON WELLNESS RETREAT -->
                    <div class="col-xl-4 col-lg-6 col-md-6 d-flex package-card" data-duration="7" data-type="wellness" data-name="SACRED CEYLON WELLNESS RETREAT">
                         <div class="service-two-wrapper bg-white tw-p-6 tw-rounded-xl d-flex flex-column h-100 w-100">
                              <div class="service-two-thumb tw-mb-5">
                                   <a href="sacred-ceylon-wellness-retreat.php"><img class="tw-rounded-xl w-100" src="MissingIMG/img/Peradeniya Botanical Gardens/pb2.jpg" alt="Sacred Ceylon Wellness Retreat"></a>
                              </div>
                              <div class="service-two-content tw-px-4 d-flex flex-column flex-grow-1">
                                   <span class="service-two-location tw-mb-3 d-block"><i class="ph ph-map-pin"></i> Sri Lanka</span>
                                   <h4 class="tw-text-6 fw-normal text-capitalize tw-mb-4 tw-mt-2"><a class="hover-text-secondary" href="sacred-ceylon-wellness-retreat.php">SACRED CEYLON WELLNESS RETREAT</a></h4>
                                   <p class="service-two-paragraph tw-mb-6 tw-leading-relaxed">7 Days/6 Nights spiritual journey combining Ayurvedic wellness, meditation practices, temple visits, and traditional healing therapies.</p>
                                   <div class="flex-grow-1"></div>
                                   <div class="service-two-wrap tw-rounded-xl tw-py-5 tw-px-6">
                                        <div class="service-two-star d-flex tw-gap-6 tw-pb-4 tw-mb-6">
                                             <div class="rating-info">
                                                  <?php echo $packageRatings['sacred-ceylon-wellness-retreat']['stars_html']; ?>
                                                  <span class="rating-number"><?php echo $packageRatings['sacred-ceylon-wellness-retreat']['rating_display']; ?></span>
                                                  <span class="review-count">(<?php echo $packageRatings['sacred-ceylon-wellness-retreat']['total_reviews']; ?>)</span>
                                             </div>
                                             <span class="text-main-600 fw-medium">7 Days / 6 Nights</span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                                             <div class="service-two-price">
                                                  <h6>Contact Us</h6>
                                                  <p>/ For Rates</p>
                                             </div>
                                             <div>
                                                  <a class="font-heading tw-text-sm text-uppercase text-main-600 fw-bold hover-text-secondary" href="sacred-ceylon-wellness-retreat.php">EXPLORE MORE <i class="tw-text-base ph ph-arrow-up-right"></i></a>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <!-- Package 5: Buddhist Cultural Visit (7 Days/6 Nights) -->
                    <div class="col-xl-4 col-lg-6 col-md-6 d-flex package-card" data-duration="7" data-type="cultural" data-name="Buddhist Cultural Visit">
                         <div class="service-two-wrapper bg-white tw-p-6 tw-rounded-xl d-flex flex-column h-100 w-100">
                              <div class="service-two-thumb tw-mb-5">
                                   <a href="buddhist-cultural-visit.php"><img class="tw-rounded-xl w-100" src="MissingIMG/img/Kandy/knd3.jpg" alt="Buddhist Cultural Visit"></a>
                              </div>
                              <div class="service-two-content tw-px-4 d-flex flex-column flex-grow-1">
                                   <span class="service-two-location tw-mb-3 d-block"><i class="ph ph-map-pin"></i> Ancient Sites & Buddhist Heritage, Sri Lanka</span>
                                   <h4 class="tw-text-6 fw-normal text-capitalize tw-mb-4 tw-mt-2"><a class="hover-text-secondary" href="buddhist-cultural-visit.php">Buddhist Cultural Visit</a></h4>
                                   <p class="service-two-paragraph tw-mb-6 tw-leading-relaxed">7 Days/6 Nights Buddhist pilgrimage visiting Anuradhapura, Sigiriya, Kandy Temple of Tooth, and historic Colombo with spiritual experiences.</p>
                                   <div class="flex-grow-1"></div>
                                   <div class="service-two-wrap tw-rounded-xl tw-py-5 tw-px-6">
                                        <div class="service-two-star d-flex tw-gap-6 tw-pb-4 tw-mb-6">
                                             <div class="rating-info">
                                                  <?php echo $packageRatings['buddhist-cultural-visit']['stars_html']; ?>
                                                  <span class="rating-number"><?php echo $packageRatings['buddhist-cultural-visit']['rating_display']; ?></span>
                                                  <span class="review-count">(<?php echo $packageRatings['buddhist-cultural-visit']['total_reviews']; ?>)</span>
                                             </div>
                                             <span class="text-main-600 fw-medium">7 Days / 6 Nights</span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                                             <div class="service-two-price">
                                                  <h6>Contact Us</h6>
                                                  <p>/ For Rates</p>
                                             </div>
                                             <div>
                                                  <a class="font-heading tw-text-sm text-uppercase text-main-600 fw-bold hover-text-secondary" href="buddhist-cultural-visit.php">EXPLORE MORE <i class="tw-text-base ph ph-arrow-up-right"></i></a>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <!-- Package 6: Cool Relaxing Visit (7 Days) -->
                    <div class="col-xl-4 col-lg-6 col-md-6 d-flex package-card" data-duration="7" data-type="adventure" data-name="Cool Relaxing Visit">
                         <div class="service-two-wrapper bg-white tw-p-6 tw-rounded-xl d-flex flex-column h-100 w-100">
                              <div class="service-two-thumb tw-mb-5">
                                   <a href="cool-relaxing-visit.php"><img class="tw-rounded-xl w-100" src="MissingIMG/img/Ella/ninearch.jpg" alt="Cool Relaxing Visit"></a>
                              </div>
                              <div class="service-two-content tw-px-4 d-flex flex-column flex-grow-1">
                                   <span class="service-two-location tw-mb-3 d-block"><i class="ph ph-map-pin"></i> Hill Country & Coastal, Sri Lanka</span>
                                   <h4 class="tw-text-6 fw-normal text-capitalize tw-mb-4 tw-mt-2"><a class="hover-text-secondary" href="cool-relaxing-visit.php">Cool Relaxing Visit</a></h4>
                                   <p class="service-two-paragraph tw-mb-6 tw-leading-relaxed">7 Days relaxing journey through Kandy Temple, cool Nuwara Eliya hill station, Nine Arch Bridge Ella, and historic Galle Fort.</p>
                                   <div class="flex-grow-1"></div>
                                   <div class="service-two-wrap tw-rounded-xl tw-py-5 tw-px-6">
                                        <div class="service-two-star d-flex tw-gap-6 tw-pb-4 tw-mb-6">
                                             <div class="rating-info">
                                                  <?php echo $packageRatings['cool-relaxing-visit']['stars_html']; ?>
                                                  <span class="rating-number"><?php echo $packageRatings['cool-relaxing-visit']['rating_display']; ?></span>
                                                  <span class="review-count">(<?php echo $packageRatings['cool-relaxing-visit']['total_reviews']; ?>)</span>
                                             </div>
                                             <span class="text-main-600 fw-medium">7 Days / 6 Nights</span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                                             <div class="service-two-price">
                                                  <h6>Contact Us</h6>
                                                  <p>/ For Rates</p>
                                             </div>
                                             <div>
                                                  <a class="font-heading tw-text-sm text-uppercase text-main-600 fw-bold hover-text-secondary" href="cool-relaxing-visit.php">EXPLORE MORE <i class="tw-text-base ph ph-arrow-up-right"></i></a>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>


     <section class="cta-area py-140 background-img position-relative z-1" data-background-image="assets/images/cta/cta-bg.jpg">
     <div class="container">
          <div class="row justify-content-center tw-pb-20">
               <div class="col-xl-10">
                    <div class="section-wrapper text-center position-relative z-1" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                         <h2 class="section-title fw-normal tw-mb-7 char-animation text-white char-animation"> <span class="text-main-600">Let's Capture</span> Beauty of the World</h2>
                         <div class="gallery-button d-flex justify-content-center">
                              <a class="primary-btn bg-main-two-600 text-main-600 tw-py-4 tw-px-8 fs-15 text-capitalize fw-bold font-heading tw-gap-2 d-inline-flex align-items-center tw-rounded-4xl" href="contact.html">Booking Today <i class="ph ph-arrow-up-right"></i></a> 
                         </div>
                         <div class="gallery-shape">
                              <img class="gallery-shape-1 position-absolute start-0 z-n1" src="assets/images/gallery/gallery-shape1.png" alt="shape">
                              <img class="gallery-shape-2 position-absolute end-0 z-n1" src="assets/images/gallery/gallery-shape2.png" alt="shape">
                         </div>
                    </div>
               </div>
          </div>
     </div>
     <div class="cta-bg-shape position-absolute start-0 z-n1">
          <img src="assets/images/cta/cta-bg-shape.png" alt="shape">
     </div>
</section>


     <!-- ==================== Footer Start Here ==================== -->
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
                    <a href="index.php" class="rent-car-footer-link">Home</a>
                    <a href="about.html" class="rent-car-footer-link">About Us</a>
                    <a href="sri-lanka-tour-packages.php" class="rent-car-footer-link">Tour Packages</a>
                    <a href="rent-a-car.html" class="rent-car-footer-link">Rent a Car</a>
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
<!-- ==================== Footer End Here ==================== -->
</div>

    <!-- Jquery js -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <!-- phosphor Js -->
    <script src="assets/js/phosphor-icon.js"></script>
    <!-- Bootstrap Bundle Js -->
    <script src="assets/js/boostrap.bundle.min.js"></script>
    <!-- appear Js -->
    <script src="assets/js/appear.min.js"></script>
    <!-- Nice Select Js -->
    <script src="assets/js/nice-select.js"></script>
    <!-- swiper bundle Js -->
    <script src="assets/js/swiper-bundle.js"></script>
    <!-- slick slider Js -->
    <script src="assets/js/slick.js"></script>
    <!-- counter Js -->
    <script src="assets/js/purecounter.js"></script>
    <!-- knob Js -->
    <script src="assets/js/jquery-knob.js"></script>
    <!-- wow js -->
    <script src="assets/js/gsap.min.js"></script>
    <!-- Aos js -->
    <script src="assets/js/aos.js"></script>
    <!-- isotope js -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- imagesloaded js -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- wow js -->
    <script src="assets/js/wow.js"></script>
    <!-- range-slider js -->
    <script src="assets/js/range-slider.js"></script>
    <!-- SplitText -->
    <script src="assets/js/SplitText.min.js"></script>
    <!-- Scroll Trigger -->
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <!-- ScrollSmoother -->
    <script src="assets/js/ScrollSmoother.min.js"></script>
    <!-- custom GSAP -->
    <script src="assets/js/custom-gsap.js"></script>
    <!-- main js -->
    <script src="assets/js/main.js"></script>

    <!-- Package Filter JavaScript -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        let currentFilters = {
            duration: 'all',
            type: 'all',
            sort: 'featured'
        };

        const packages = document.querySelectorAll('.package-card');
        const resultCount = document.querySelector('.text-main-two-600');

        // Wait for nice-select to initialize, then add our event listeners
        setTimeout(function() {
            initializeFilters();
        }, 500);

        function initializeFilters() {
            // Duration filter - use document click delegation
            document.addEventListener('click', function(e) {
                if (e.target.closest('#duration-filter .option')) {
                    const option = e.target.closest('.option');
                    currentFilters.duration = option.getAttribute('data-value');
                    setTimeout(function() {
                        applyFilters();
                    }, 100);
                }
            });

            // Type filter - use document click delegation
            document.addEventListener('click', function(e) {
                if (e.target.closest('#type-filter .option')) {
                    const option = e.target.closest('.option');
                    currentFilters.type = option.getAttribute('data-value');
                    setTimeout(function() {
                        applyFilters();
                    }, 100);
                }
            });

            // Sort filter - use document click delegation
            document.addEventListener('click', function(e) {
                if (e.target.closest('#sort-filter .option')) {
                    const option = e.target.closest('.option');
                    currentFilters.sort = option.getAttribute('data-value');
                    setTimeout(function() {
                        applyFilters();
                    }, 100);
                }
            });
        }

        function applyFilters() {
            let visiblePackages = [];
            console.log('Applying filters:', currentFilters); // Debug log

            const container = document.querySelector('.row.g-5.tw-pb-8');
            const allPackagesArray = Array.from(packages);

            // First, hide all packages
            packages.forEach(package => {
                package.style.display = 'none';
                package.style.opacity = '0';
            });

            // Filter packages
            allPackagesArray.forEach(package => {
                const duration = package.getAttribute('data-duration');
                const type = package.getAttribute('data-type');
                let isVisible = true;

                // Apply duration filter
                if (currentFilters.duration !== 'all' && duration !== currentFilters.duration) {
                    isVisible = false;
                }

                // Apply type filter
                if (currentFilters.type !== 'all' && type !== currentFilters.type) {
                    isVisible = false;
                }

                if (isVisible) {
                    visiblePackages.push(package);
                }
            });

            // Apply sorting first
            applySorting(visiblePackages);

            // Then show the filtered packages
            visiblePackages.forEach(package => {
                package.style.display = 'flex';
                package.style.opacity = '1';
                package.style.transition = 'opacity 0.3s ease';
            });

            // Update result count
            if (resultCount) {
                resultCount.textContent = visiblePackages.length;
            }

            console.log('Visible packages:', visiblePackages.length); // Debug log
        }

        function applySorting(visiblePackages) {
            const container = document.querySelector('.row.g-5.tw-pb-8');
            if (!container) return;

            // Sort the visible packages
            visiblePackages.sort((a, b) => {
                switch (currentFilters.sort) {
                    case 'duration-asc':
                        return parseInt(a.getAttribute('data-duration')) - parseInt(b.getAttribute('data-duration'));
                    case 'duration-desc':
                        return parseInt(b.getAttribute('data-duration')) - parseInt(a.getAttribute('data-duration'));
                    case 'name-asc':
                        return a.getAttribute('data-name').localeCompare(b.getAttribute('data-name'));
                    case 'featured':
                    default:
                        // Keep original order for featured
                        return 0;
                }
            });

            // Create a document fragment to avoid multiple DOM manipulations
            const fragment = document.createDocumentFragment();

            // Remove all packages from container first
            const allPackages = Array.from(container.children);
            allPackages.forEach(package => {
                if (package.classList.contains('package-card')) {
                    container.removeChild(package);
                }
            });

            // Add packages back in the correct order
            const allPackagesArray = Array.from(packages);

            // First add visible packages in sorted order
            visiblePackages.forEach(package => {
                fragment.appendChild(package);
            });

            // Then add hidden packages to maintain DOM structure
            allPackagesArray.forEach(package => {
                if (!visiblePackages.includes(package)) {
                    fragment.appendChild(package);
                }
            });

            container.appendChild(fragment);
        }

        // Alternative method - monitor for changes in the dropdown text
        const observer = new MutationObserver(function(mutations) {
            mutations.forEach(function(mutation) {
                if (mutation.target.classList.contains('current')) {
                    const parentSelect = mutation.target.closest('.nice-select');
                    if (parentSelect) {
                        const newText = mutation.target.textContent.trim();

                        if (parentSelect.id === 'duration-filter') {
                            switch(newText) {
                                case 'All Durations': currentFilters.duration = 'all'; break;
                                case '7 Days': currentFilters.duration = '7'; break;
                                case '14 Days': currentFilters.duration = '14'; break;
                            }
                            applyFilters();
                        } else if (parentSelect.id === 'type-filter') {
                            switch(newText) {
                                case 'All Types': currentFilters.type = 'all'; break;
                                case 'Cultural': currentFilters.type = 'cultural'; break;
                                case 'Wellness': currentFilters.type = 'wellness'; break;
                                case 'Adventure': currentFilters.type = 'adventure'; break;
                                case 'Coastal': currentFilters.type = 'coastal'; break;
                            }
                            applyFilters();
                        } else if (parentSelect.id === 'sort-filter') {
                            switch(newText) {
                                case 'Featured': currentFilters.sort = 'featured'; break;
                                case 'Duration (Short to Long)': currentFilters.sort = 'duration-asc'; break;
                                case 'Duration (Long to Short)': currentFilters.sort = 'duration-desc'; break;
                                case 'Name (A-Z)': currentFilters.sort = 'name-asc'; break;
                            }
                            applyFilters();
                        }
                    }
                }
            });
        });

        // Start observing for text changes in dropdown current elements
        setTimeout(function() {
            const currentElements = document.querySelectorAll('.nice-select .current');
            currentElements.forEach(element => {
                observer.observe(element, { childList: true, characterData: true, subtree: true });
            });
        }, 1000);
    });
    </script>

    <style>
        /* Page-specific styling - keeping only necessary styles */
        .breadcrumb-title {
            text-align: center !important;
            max-width: 100% !important;
        }

        /* Mobile-only modifications */
        @media (max-width: 768px) {
            .breadcrumb-title {
                font-size: 1.8rem !important;
                line-height: 0.9 !important;
                padding: 0 20px !important;
                margin-bottom: 1rem !important;
            }

            .breadcrumb-title .title-line-1,
            .breadcrumb-title .title-line-2 {
                display: block !important;
                text-align: center !important;
            }

            .breadcrumb-title .title-line-1 {
                margin-bottom: -0.2rem !important;
            }

            .breadcrumb-title .title-line-2 {
                margin-top: -0.2rem !important;
            }

            .breadcrumb-title br {
                line-height: 0.5 !important;
            }
        }

        @media (max-width: 480px) {
            .breadcrumb-title {
                font-size: 1.5rem !important;
                line-height: 0.8 !important;
                padding: 0 15px !important;
                margin-bottom: 1rem !important;
            }

            .breadcrumb-title .title-line-1 {
                margin-bottom: -0.3rem !important;
            }

            .breadcrumb-title .title-line-2 {
                margin-top: -0.3rem !important;
            }
        }

        /* Ensure breadcrumb area is properly centered */
        .breadcrumb-area {
            display: flex !important;
            align-items: center !important;
            min-height: 200px !important;
        }

        .breadcrumb-area .container-fluid {
            width: 100% !important;
        }

        .breadcrumb-area .row {
            width: 100% !important;
            margin: 0 !important;
        }

        .breadcrumb-area .col-lg-8 {
            max-width: 100% !important;
            padding: 0 15px !important;
        }

        /* Mobile Filter Options - Make them smaller */
        @media (max-width: 768px) {
            .package-ip-left-nice-select,
            .package-ip-right-nice-select {
                min-width: auto !important;
                padding: 8px 12px !important;
                font-size: 14px !important;
                height: auto !important;
                margin: 5px !important;
            }

            .package-ip-left-nice-select .current,
            .package-ip-right-nice-select .current {
                font-size: 14px !important;
                padding: 0 !important;
                line-height: 1.4 !important;
            }

            .d-flex.align-items-center.tw-gap-5 {
                gap: 8px !important;
                flex-wrap: wrap !important;
            }

            .d-flex.align-items-center.justify-content-end.tw-gap-2 {
                gap: 8px !important;
                flex-wrap: wrap !important;
                justify-content: center !important;
            }

            .font-heading.text-main-600.fw-bold {
                font-size: 16px !important;
                margin-bottom: 15px !important;
            }

            .d-flex.align-items-center.tw-gap-4.fw-medium.text-black {
                font-size: 14px !important;
                gap: 8px !important;
            }
        }

        @media (max-width: 480px) {
            .package-ip-left-nice-select,
            .package-ip-right-nice-select {
                min-width: auto !important;
                padding: 6px 10px !important;
                font-size: 13px !important;
                margin: 3px !important;
                width: auto !important;
                flex: 1 1 45% !important;
            }

            .package-ip-left-nice-select .current,
            .package-ip-right-nice-select .current {
                font-size: 13px !important;
            }

            .d-flex.align-items-center.tw-gap-5 {
                gap: 5px !important;
            }

            .d-flex.align-items-center.justify-content-end.tw-gap-2 {
                gap: 5px !important;
                justify-content: center !important;
            }

            .font-heading.text-main-600.fw-bold {
                font-size: 15px !important;
                text-align: center !important;
            }

            .d-flex.align-items-center.tw-gap-4.fw-medium.text-black {
                font-size: 13px !important;
                gap: 5px !important;
            }
        }
    </style>

</body>


</html>