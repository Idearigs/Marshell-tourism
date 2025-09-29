<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Marshall Holidays HTML Template">
    <meta name="keywords" content="Marshall Holidays HTML Template">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title> Marshall Holidays - Tours & Travels Multipurpose HTML Template </title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png">
    <!-- Google Fonts - Philosopher -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@400;700&display=swap" rel="stylesheet">
    <!-- Aos -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.css">
    <!-- Aos -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!-- Aos -->
    <link rel="stylesheet" href="assets/css/aos.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/rent-car-custom.css">
    <!-- Review System CSS -->
    <link rel="stylesheet" href="assets/css/reviews.css">

    <!-- Tour Package Gallery Fix -->
     <!-- Elfsight WhatsApp Chat | Untitled WhatsApp Chat -->
<script src="https://elfsightcdn.com/platform.js" async></script>
<div class="elfsight-app-2c3aaac6-0b9c-4362-9a19-38c17f636211" data-elfsight-app-lazy></div>
    <style>
    .package-details-swiper-wrapper .swiper-slide {
        height: 400px !important; /* Fixed height for all slides */
    }

    .package-details-swiper-wrapper .swiper-slide div {
        height: 100% !important;
        width: 100% !important;
        overflow: hidden !important;
    }

    .package-details-swiper-wrapper .swiper-slide img {
        width: 100% !important;
        height: 100% !important;
        object-fit: cover !important; /* Maintain aspect ratio while filling container */
        border-radius: 12px !important;
    }

    .package-details-active {
        height: 400px !important;
    }

    /* Mobile Layout Fix for Package Details */
    @media (max-width: 767px) {
        .package-details-top {
            flex-direction: column !important;
            align-items: flex-start !important;
            gap: 1.5rem !important;
            padding-bottom: 2rem !important;
        }

        .package-details-top > div:first-child {
            width: 100% !important;
        }

        .package-details-top > div:last-child {
            width: 100% !important;
            margin-top: 1rem !important;
        }

        /* Better spacing for mobile */
        .package-details-top .tw-gap-5 {
            flex-direction: column !important;
            align-items: flex-start !important;
            gap: 1rem !important;
        }

        .package-details-top .tw-gap-6 {
            flex-direction: column !important;
            gap: 0.75rem !important;
            margin-top: 1rem !important;
        }

        .package-details-top h2 {
            font-size: 1.5rem !important;
            line-height: 1.3 !important;
            margin-bottom: 1rem !important;
        }

        /* Rating section mobile layout */
        .package-details-top .d-flex.align-items-center.tw-gap-4 {
            flex-direction: column !important;
            align-items: flex-start !important;
            gap: 0.5rem !important;
        }

        /* Price section mobile */
        .package-details-top .tw-text-808 {
            font-size: 1.25rem !important;
            text-align: center !important;
            width: 100% !important;
            background: #f8faff !important;
            padding: 1rem !important;
            border-radius: 8px !important;
            border: 2px solid #2c5aa0 !important;
        }

        /* Badge styling */
        .bg-main-two-600.tw-rounded-3xl {
            font-size: 0.875rem !important;
            padding: 0.5rem 1rem !important;
        }
    }
    </style>
</head>

<body class="bg-neutral-50" data-package-slug="sacred-ceylon-wellness-retreat">




    <!-- Search Popup Start -->
    <div class="search_popup">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="search_wrapper">
                        <div class="search_top d-flex justify-content-between align-items-center">
                            <div class="search_logo">
                                <a href="index.html">
                                    <img src="assets/images/logo/logo.png" alt="Logo">
                                </a>
                            </div>
                            <div class="search_close">
                                <button type="button" class="search_close_btn">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="../../../../www.w3.org/2000/svg.html">
                                        <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="search_form">
                            <form action="#">
                                <div class="search_input">
                                    <input class="search-input-field" type="text" placeholder="Type here to search...">
                                    <span class="search-focus-border"></span>
                                    <button type="submit">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="../../../../www.w3.org/2000/svg.html">
                                            <path d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M19.0002 19.0002L17.2002 17.2002" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="search-popup-overlay"></div>
    <!-- Search Popup End-->




    <!--==================== mouse cursor drag start ====================-->
    <div class="mouseCursor cursor-outer d-none"></div>
     <div class="mouseCursor cursor-inner">
         <span class="inner-text-1 tw-text-lg fw-bold text-main-600">
            <span>
                <svg width="48" height="47" viewBox="0 0 48 47" fill="none" xmlns="../../../../www.w3.org/2000/svg.html">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M33.6454 16.1088L15.7477 32.4423L14.3477 30.9082L32.2453 14.5746L33.6454 16.1088Z" fill="#141616" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M31.4786 15.2755C27.8709 18.5679 27.8182 24.431 30.9057 27.8141L31.6057 28.5811L33.1398 27.1811L32.4398 26.414C30.0957 23.8454 30.1506 19.2992 32.8787 16.8096L33.6453 16.1099L32.2453 14.5758L31.4786 15.2755Z" fill="#141616" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M32.8783 16.8088C29.2706 20.1012 23.4271 19.6189 20.3397 16.2358L19.6396 15.4688L21.1738 14.0687L21.8738 14.8358C24.218 17.4045 28.7502 17.7643 31.4783 15.2747L32.2449 14.575L33.645 16.1091L32.8783 16.8088Z" fill="#141616" />
                </svg>
            </span>
            <br>
            About us
         </span>
         <span class="inner-text-2">
             <span>
                 <svg width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="../../../../www.w3.org/2000/svg.html">
                 <path
                     d="M0.132374 56.2074L6.68723 62.776C6.98521 63.0747 8.773 63.0747 9.07084 62.776L47.2086 25.4537C47.8044 24.8564 48.4004 24.5578 49.2942 24.5578C49.5922 24.5578 50.1881 24.5578 50.486 24.8564C51.6778 25.155 52.2736 26.3494 52.2736 27.5437V46.3542V46.6529H61.8082C62.404 46.6529 62.7022 46.6529 63 46.6529V0.970426C63 0.970426 63 0.970427 62.4042 0.373196C61.8083 -0.224035 62.1063 0.0747274 61.5102 0.0747274H16.8176C16.8176 0.373196 16.8176 0.671811 16.8176 1.56766V10.8234C16.8176 11.4205 16.8176 12.0177 16.8176 12.0177H35.8865C37.0783 12.0177 38.2701 12.6148 38.5679 13.8091C39.1638 15.0034 38.8659 16.1978 37.9721 17.0936L0.728355 54.1174C0.430367 54.416 0.132374 54.7146 0.132374 55.3117C-0.16547 55.9088 0.132374 55.9088 0.132374 56.2074Z"
                     fill="currentColor" />
                 </svg>
             </span>
         </span>
     </div>
    <!--==================== mouse cursor drag end ====================-->



    <!--==================== Overlay Start ====================-->
    <div class="overlay"></div>
    <!--==================== Overlay End ====================-->

    <!--==================== Sidebar Overlay End ====================-->
    <div class="side-overlay"></div>
    <!--==================== Sidebar Overlay End ====================-->

    <!-- Custom Toast Message start -->
    <div id="toast-container"></div>
    <!-- Custom Toast Message End -->

    <!-- ==================== Scroll to Top End Here ==================== -->
    <div class="progress-wrap cursor-big">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- ==================== Scroll to Top End Here ==================== -->

    <!-- Custom Cursor Start -->
    <div class="cursor"></div>
    <span class="dot"></span>
    <!-- Custom Cursor End -->

    <?php include 'includes/tour-navbar.php'; ?>
<div id="scrollSmoother-container">
<?php
$hero_image = 'MissingIMG/img/Peradeniya Botanical Gardens/pbwide.jpg';
$hero_title = 'Sacred Ceylon Wellness Retreat';
$hero_subtitle = '7 Days 6 Nights Mindfulness & Spiritual Journey';
include 'includes/tour-hero.php';
?>
     <section class="page pt-140" id="package-details">
          <div class="container">
               <div class="row">
                    <div class="col-xl-12">
                         <div class="package-details-top d-flex justify-content-between align-items-end tw-pb-6 tw-mb-15 flex-wrap row-gap-3">
                              <div data-aos-duration="1000" data-aos-delay="200">
                                   <div class="d-flex align-items-center tw-gap-5 tw-mb-5">
                                        <div>
                                             <span class="bg-main-two-600 fw-medium tw-pt-1 tw-pb-2 tw-px-5 tw-rounded-3xl">Wellness & Mindfulness</span>
                                        </div>
                                        <div>
                                             <p><span class="text-main-two-600"><i class="ph ph-eye"></i></span> 3,421 people viewed this package</p>
                                        </div>
                                   </div>
                                   <div class="tw-mb-3">
                                        <h2 class="tw-text-13 char-animation" style="font-size: 2rem;">Sacred Ceylon Wellness Retreat</h2>
                                   </div>
                                   <div>
                                        <ul class="d-flex tw-gap-6 flex-wrap row-gap-3">
                                             <li class="d-flex align-items-center tw-gap-2"><span><img src="assets/images/icon/package-details-top-icon1.svg" alt="clock"></span> 7 Days 6 Nights</li>
                                             <li class="d-flex align-items-center tw-gap-2"><span><img src="assets/images/icon/package-details-top-icon2.svg" alt="people"></span> Seniors & Wellness Seekers</li>
                                             <li class="d-flex align-items-center tw-gap-2"><span><img src="assets/images/icon/package-details-top-icon3.svg" alt="location"></span> Buddhist Heritage & Mindfulness Journey</li>
                                        </ul>
                                   </div>
                              </div>
                              <div data-aos-duration="1000" data-aos-delay="300">
                                   <div class="d-flex align-items-center tw-gap-4 tw-mb-3">
                                        <div>
                                             <i class="text-main-two-600 ph ph-star"></i>
                                             <i class="text-main-two-600 ph ph-star"></i>
                                             <i class="text-main-two-600 ph ph-star"></i>
                                             <i class="text-main-two-600 ph ph-star"></i>
                                             <i class="text-main-two-600 ph ph-star"></i>
                                        </div>
                                        <div>
                                             <p class="mb-0">(1 Review)</p>
                                        </div>
                                   </div>
                                   <div class="d-flex align-items-center tw-gap-7">
                                        <h4 class="tw-text-808">Contact for Personalized Pricing</h4>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>

     <div class="package-details-area tw-pb-22">
          <div class="container-fluid gx-5">
               <div class="row">
                    <div class="col-xxl-12">
                        <div class="package-details-slide position-relative z-index-1" data-aos-duration="1000" data-aos-delay="200">
                            <div class="package-details-active swiper-container">
                                <div class="package-details-swiper-wrapper swiper-wrapper">


                                    <!-- slide 1 - Temple of Sacred Tooth Relic -->
                                    <div class="position-relative z-index-1 swiper-slide">
                                        <div>
                                             <img class="tw-rounded-lg" src="MissingIMG/img/Kandy/knd2.jpg" alt="Kandy Sacred Temple">
                                        </div>
                                    </div>

                                    <!-- slide 2 - Dambulla Cave Temple -->
                                    <div class="position-relative z-index-1 swiper-slide">
                                        <div>
                                             <img class="tw-rounded-lg" src="MissingIMG/img/Traditional Villages/tv1.jpg" alt="Traditional Villages">
                                        </div>
                                    </div>

                                    <!-- slide 3 - Buduruwagala Temple -->
                                    <div class="position-relative z-index-1 swiper-slide">
                                        <div>
                                             <img class="tw-rounded-lg" src="MissingIMG/img/Sri Lankan Waterfalls/sw1.jpg" alt="Sri Lankan Waterfalls">
                                        </div>
                                    </div>

                                    <!-- slide 4 - Temple of Sacred Tooth Relic Detail -->
                                    <div class="position-relative z-index-1 swiper-slide">
                                        <div>
                                             <img class="tw-rounded-lg" src="MissingIMG/img/Peradeniya Botanical Gardens/pb2.jpg" alt="Peradeniya Botanical Gardens">
                                        </div>
                                    </div>

                                    <!-- slide 5 - Dambulla Cave Temple 2 -->
                                    <div class="position-relative z-index-1 swiper-slide">
                                        <div>
                                             <img class="tw-rounded-lg" src="MissingIMG/img/Traditional Villages/tv2.jpg" alt="Traditional Village Life">
                                        </div>
                                    </div>

                                    <!-- slide 6 - Buduruwagala Temple 2 -->
                                    <div class="position-relative z-index-1 swiper-slide">
                                        <div>
                                             <img class="tw-rounded-lg" src="MissingIMG/img/Sri Lankan Waterfalls/sw2.jpg" alt="Sacred Waterfalls">
                                        </div>
                                    </div>

                                </div>
                            </div>
                              <div class="package-details-arrow-box">
                                   <button class="slider-prev">
                                        <i class="ph ph-arrow-left"></i>
                                   </button>
                                   <button class="slider-next">
                                        <i class="ph ph-arrow-right"></i>
                                   </button>
                              </div>
                        </div>
                    </div>
               </div>
          </div>
     </div>

     <section>
          <div class="container">
               <div class="row">
                    <div class="row">
                         <div class="col-xl-8">
                              <div class="tw-mb-7">
                                   <div class="tw-mb-14" data-aos-duration="1000" data-aos-delay="200">
                                        <h2 class="tw-text-10 tw-mb-4">Description:</h2>
                                        <p class="tw-text-lg tw-w-845-px">Embark on a transformative wellness journey through Sri Lanka's sacred healing traditions with our exclusive 10-day Sacred Ceylon Wellness Retreat. This meticulously designed program combines authentic Ayurvedic treatments, meditation practices, and yoga sessions in serene locations including Sigiriya, Kandy, and Bentota. Experience holistic rejuvenation with traditional herbal therapies, spiritual temple visits, and wellness cuisine while discovering inner peace in the island's most tranquil sanctuaries.</p>
                                   </div>
                                   <div class="tw-mb-14" data-aos-duration="1000" data-aos-delay="300">
                                        <h2 class="tw-text-10 tw-mb-4">Advance Facilities</h2>
                                        <p class="tw-text-lg tw-w-845-px">Leave your guidebooks at home and dive into the local cultures that make each destination so special. We’ll 
                                             connect you with our exclusive experiences. Each trip is carefully crafted to let enjoy your vacation.</p>
                                   </div>
                                   <!-- <div class="package-details-included" data-aos-duration="1000" data-aos-delay="300">
                                        <h2 class="tw-text-10 tw-mb-8">Included/Exclude</h2>
                                        <div>
                                             <ul>
                                                  <li class="float-start w-50 tw-text-lg fw-normal tw-mb-4 d-inline-flex align-items-center tw-gap-3"><span><img src="assets/images/icon/package-details-Included.svg" alt=""></span> Pick and Drop Services</li>
                                                  <li class="float-start w-50 tw-text-lg fw-normal tw-mb-4 d-inline-flex align-items-center tw-gap-3"><span><img src="assets/images/icon/package-details-Included.svg" alt=""></span> Driver Service Fee</li>
                                                  <li class="float-start w-50 tw-text-lg fw-normal tw-mb-4 d-inline-flex align-items-center tw-gap-3"><span><img src="assets/images/icon/package-details-Included.svg" alt=""></span> 1 Meal Per Day</li>
                                                  <li class="float-start w-50 tw-text-lg fw-normal tw-mb-4 d-inline-flex align-items-center tw-gap-3"><span><img src="assets/images/icon/package-details-Included.svg" alt=""></span> Food & Drinks</li>
                                                  <li class="float-start w-50 tw-text-lg fw-normal tw-mb-4 d-inline-flex align-items-center tw-gap-3"><span><img src="assets/images/icon/package-details-Included.svg" alt=""></span> Cruise Dinner & Music Event</li>
                                                  <li class="float-start w-50 tw-text-lg fw-normal tw-mb-4 d-inline-flex align-items-center tw-gap-3"><span><img src="assets/images/icon/package-details-Included.svg" alt=""></span> Room Service Fees</li>
                                                  <li class="float-start w-50 tw-text-lg fw-normal tw-mb-4 d-inline-flex align-items-center tw-gap-3"><span><img src="assets/images/icon/package-details-Included.svg" alt=""></span> Visit 7 Best Places in the City With Group</li>
                                                  <li class="float-start w-50 tw-text-lg fw-normal tw-mb-4 d-inline-flex align-items-center tw-gap-3"><span><img src="assets/images/icon/package-details-Included.svg" alt=""></span> Laundry Service</li>
                                             </ul>
                                        </div>
                                   </div> -->
                                   <!-- <div class="package-details-amenities tw-mb-26" data-aos-duration="1000" data-aos-delay="300">
                                        <h2 class="tw-text-10 tw-mb-8">Tour Amenities</h2>
                                        <div>
                                             <ul>
                                                  <li class="float-start tw-text-base fw-medium tw-mb-6 d-inline-flex align-items-center tw-gap-3"><span><img src="assets/images/icon/package-details-amenities.svg" alt=""></span> Air Conditioning</li>
                                                  <li class="float-start tw-text-base fw-medium tw-mb-6 d-inline-flex align-items-center tw-gap-3"><span><img src="assets/images/icon/package-details-amenities.svg" alt=""></span> Laundry</li>
                                                  <li class="float-start tw-text-base fw-medium tw-mb-6 d-inline-flex align-items-center tw-gap-3"><span><img src="assets/images/icon/package-details-amenities.svg" alt=""></span> Window Covering</li>
                                                  <li class="float-start tw-text-base fw-medium tw-mb-6 d-inline-flex align-items-center tw-gap-3"><span><img src="assets/images/icon/package-details-amenities.svg" alt=""></span> Microwave</li>
                                                  <li class="float-start tw-text-base fw-medium tw-mb-6 d-inline-flex align-items-center tw-gap-3"><span><img src="assets/images/icon/package-details-amenities.svg" alt=""></span> Outdoor Shower</li>
                                                  <li class="float-start tw-text-base fw-medium tw-mb-6 d-inline-flex align-items-center tw-gap-3"><span><img src="assets/images/icon/package-details-amenities.svg" alt=""></span> Refrigerator</li>
                                                  <li class="float-start tw-text-base fw-medium tw-mb-6 d-inline-flex align-items-center tw-gap-3"><span><img src="assets/images/icon/package-details-amenities.svg" alt=""></span> Central Heating</li>
                                                  <li class="float-start tw-text-base fw-medium tw-mb-6 d-inline-flex align-items-center tw-gap-3"><span><img src="assets/images/icon/package-details-amenities.svg" alt=""></span> Swimming Pool</li>
                                                  <li class="float-start tw-text-base fw-medium tw-mb-6 d-inline-flex align-items-center tw-gap-3"><span><img src="assets/images/icon/package-details-amenities.svg" alt=""></span> Alarm System</li>
                                                  <li class="float-start tw-text-base fw-medium tw-mb-6 d-inline-flex align-items-center tw-gap-3"><span><img src="assets/images/icon/package-details-amenities.svg" alt=""></span> Washer</li>
                                                  <li class="float-start tw-text-base fw-medium tw-mb-6 d-inline-flex align-items-center tw-gap-3"><span><img src="assets/images/icon/package-details-amenities.svg" alt=""></span> Wifi</li>
                                                  <li class="float-start tw-text-base fw-medium tw-mb-6 d-inline-flex align-items-center tw-gap-3"><span><img src="assets/images/icon/package-details-amenities.svg" alt=""></span> Window Coverings</li>
                                             </ul>
                                        </div>
                                   </div> -->
                                   <div class="tw-mb-16" data-aos-duration="1000" data-aos-delay="300">
                                        <h2 class="tw-text-10 tw-mb-8">Tour Plan :</h2> 
                                        <div class="package-details-rules d-flex tw-gap-12 position-relative z-1">
                                             <div>
                                                  <span class="tw-w-25 tw-h-24 lh-1 d-inline-flex align-items-center justify-content-center bg-main-600 tw-rounded-lg text-white tw-text-6 fw-bold">01</span>
                                             </div>
                                             <div>
                                                  <h6 class="tw-text-505 tw-mb-4">Days 1-2: Arrival and Mindfulness Introduction</h6>
                                                  <p class="tw-mb-20">Begin your wellness journey with a peaceful arrival in Colombo, followed by transfer to a serene retreat center. Participate in welcome meditation sessions, orientation to Buddhist principles, gentle yoga practices, and enjoy healthy traditional Sri Lankan vegetarian cuisine designed for wellness.</p>
                                             </div>
                                        </div>
                                        <div class="package-details-rules d-flex tw-gap-12 position-relative z-1">
                                             <div>
                                                  <span class="tw-w-25 tw-h-24 lh-1 d-inline-flex align-items-center justify-content-center bg-main-600 tw-rounded-lg text-white tw-text-6 fw-bold">02</span>
                                             </div>
                                             <div class="tw-mb-10">
                                                  <h6 class="tw-text-505 tw-mb-4">Days 3-4: Sacred Temple Exploration</h6>
                                                  <p class="tw-mb-9">Visit sacred Buddhist temples including the Temple of the Tooth in Kandy and ancient cave temples of Dambulla. Participate in morning chanting ceremonies, learn about Buddhist philosophy with monks, and enjoy guided meditation sessions in these spiritually significant locations.</p>
                                                  <div class="destination-details-list package-details-list tw-mb-10">
                                                       <ul>
                                                            <li class="font-heading fw-bold text-main-600 text-capitalize tw-text-lg tw-mb-5 tw-ps-2 tw-ms-5">Temple of the Tooth morning prayers</li>
                                                            <li class="font-heading fw-bold text-main-600 text-capitalize tw-text-lg tw-mb-5 tw-ps-2 tw-ms-5">Dambulla cave temple meditation</li>
                                                            <li class="font-heading fw-bold text-main-600 text-capitalize tw-text-lg tw-mb-5 tw-ps-2 tw-ms-5">Buddhist philosophy discussions</li>
                                                            <li class="font-heading fw-bold text-main-600 text-capitalize tw-text-lg tw-mb-5 tw-ps-2 tw-ms-5">Sunrise meditation sessions</li>
                                                       </ul>
                                                  </div>
                                             </div>
                                        </div>
                                        <div class="package-details-rules d-flex tw-gap-12 position-relative z-1">
                                             <div>
                                                  <span class="tw-w-25 tw-h-24 lh-1 d-inline-flex align-items-center justify-content-center bg-main-600 tw-rounded-lg text-white tw-text-6 fw-bold">03</span>
                                             </div>
                                             <div class="tw-mb-20">
                                                  <h6 class="tw-text-505 tw-mb-4">Days 5-6: Meditation Retreats and Healing</h6>
                                                  <p class="tw-mb-10">Deep immersion in meditation practices with extended silent sessions, introduction to vipassana meditation techniques, traditional Ayurvedic healing consultations, herbal spa treatments, and practice of mindful walking in peaceful temple gardens and nature reserves.</p>
                                                  <div>
                                                       <ul class="d-flex flex-column">
                                                            <li class="float-start tw-text-base fw-medium tw-mb-6 d-inline-flex align-items-center tw-gap-3"><span><img src="assets/images/icon/package-details-amenities.svg" alt=""></span> Silent meditation retreat with experienced guide</li>
                                                            <li class="float-start tw-text-base fw-medium tw-mb-6 d-inline-flex align-items-center tw-gap-3"><span><img src="assets/images/icon/package-details-amenities.svg" alt=""></span> Traditional Ayurvedic consultation and treatments</li>
                                                            <li class="float-start tw-text-base fw-medium tw-mb-6 d-inline-flex align-items-center tw-gap-3"><span><img src="assets/images/icon/package-details-amenities.svg" alt=""></span> Mindful walking in sacred temple gardens</li>   
                                                       </ul>
                                                  </div>

                                             </div>
                                        </div>
                                        <div class="package-details-rules d-flex tw-gap-12 position-relative z-1">
                                             <div>
                                                  <span class="tw-w-25 tw-h-24 lh-1 d-inline-flex align-items-center justify-content-center bg-main-600 tw-rounded-lg text-white tw-text-6 fw-bold">04</span>
                                             </div>
                                             <div>
                                                  <h6 class="tw-text-505 tw-mb-4">Days 7-8: Spiritual Healing and Departure</h6>
                                                  <p class="tw-mb-10">Complete your wellness journey with spiritual healing ceremonies, yoga and pranayama sessions, reflection and journaling workshops, and personalized wellness plan development for continuing practices at home. Peaceful departure with renewed spiritual energy and mindfulness techniques.</p>
                                                  <div>
                                                       <ul class="d-flex flex-column">
                                                            <li class="float-start tw-text-base fw-medium tw-mb-6 d-inline-flex align-items-center tw-gap-3"><span><img src="assets/images/icon/package-details-amenities.svg" alt=""></span> Spiritual healing ceremony with Buddhist monks</li>
                                                            <li class="float-start tw-text-base fw-medium tw-mb-6 d-inline-flex align-items-center tw-gap-3"><span><img src="assets/images/icon/package-details-amenities.svg" alt=""></span> Advanced yoga and pranayama breathing techniques</li>
                                                            <li class="float-start tw-text-base fw-medium tw-mb-6 d-inline-flex align-items-center tw-gap-3"><span><img src="assets/images/icon/package-details-amenities.svg" alt=""></span> Personalized wellness plan for home practice</li>   
                                                       </ul>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="package-details-faq tw-mb-26" data-aos-duration="1000" data-aos-delay="300">
                                       <h2 class="tw-text-10 tw-mb-8">Frequently Asked Questions:</h2>
                                        <div class="faq-wrapper">
                                             <div class="accordion" id="general_faqaccordion">
                                                  <div class="accordion-item faq-accordion-item">
                                                       <h2 class="accordion-header" id="order_one">
                                                            <button class="accordion-button faq-accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#order__collapse_one" aria-expanded="true" aria-controls="order__collapse_one">
                                                                 What is the best time to visit Sri Lanka?
                                                            </button>
                                                       </h2>
                                                       <div id="order__collapse_one" class="accordion-collapse collapse" aria-labelledby="order_one" data-bs-parent="#general_faqaccordion">
                                                            <div class="accordion-body faq-accordion-body">
                                                                 <p>Sri Lanka can be visited year-round, but the best time is during the dry seasons: December to March for the west and south coasts, and May to September for the east coast. The cultural triangle including Kandy, Anuradhapura, and Polonnaruwa is best visited from May to September.</p>
                                                            </div>
                                                       </div>
                                                  </div>
                                                  <div class="accordion-item faq-accordion-item">
                                                       <h2 class="accordion-header" id="order_two">
                                                            <button class="accordion-button faq-accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#order__collapse_two" aria-expanded="false" aria-controls="order__collapse_two">
                                                                 Do I need a visa to visit Sri Lanka?
                                                            </button>
                                                       </h2>
                                                       <div id="order__collapse_two" class="accordion-collapse collapse show" aria-labelledby="order_two" data-bs-parent="#general_faqaccordion">
                                                            <div class="accordion-body faq-accordion-body">
                                                                 <p>Most visitors need an Electronic Travel Authorization (ETA) or visa to enter Sri Lanka. Citizens of Singapore, Maldives, and Seychelles can visit visa-free for up to 30 days. We recommend checking the latest visa requirements before traveling and can assist with visa applications.</p>
                                                            </div>
                                                       </div>
                                                  </div>
                                                  <div class="accordion-item faq-accordion-item">
                                                       <h2 class="accordion-header" id="order_three">
                                                            <button class="accordion-button collapsed faq-accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#order__collapse_three" aria-expanded="false" aria-controls="order__collapse_three">
                                                                 What should I pack for my Sri Lanka tour?
                                                            </button>
                                                       </h2>
                                                       <div id="order__collapse_three" class="accordion-collapse collapse" aria-labelledby="order_three" data-bs-parent="#general_faqaccordion">
                                                            <div class="accordion-body faq-accordion-body">
                                                                 <p>Pack lightweight, breathable clothing, comfortable walking shoes, sunscreen, insect repellent, and a rain jacket. For temple visits, bring modest clothing covering shoulders and knees. If visiting hill country, pack warmer clothes as it can get cool, especially at night.</p>
                                                            </div>
                                                       </div>
                                                  </div>
                                                  <div class="accordion-item faq-accordion-item">
                                                       <h2 class="accordion-header" id="order_four">
                                                            <button class="accordion-button collapsed faq-accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#order__collapse_four" aria-expanded="false" aria-controls="order__collapse_four">
                                                                 Is Sri Lanka safe for tourists?
                                                            </button>
                                                       </h2>
                                                       <div id="order__collapse_four" class="accordion-collapse collapse" aria-labelledby="order_four" data-bs-parent="#general_faqaccordion">
                                                            <div class="accordion-body faq-accordion-body">
                                                                 <p>Yes, Sri Lanka is generally safe for tourists. The country has a well-developed tourism infrastructure and friendly locals. As with any destination, exercise normal precautions, stay aware of your surroundings, and follow local guidelines. Our experienced guides ensure your safety throughout the tour.</p>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <!-- Package Statistics -->
                                   <div class="package-stats" data-aos-duration="1000" data-aos-delay="300">
                                        <h3 class="tw-text-10 tw-mb-6">Package Overview</h3>
                                        <div class="package-rating text-center">
                                             <div class="stars">Loading...</div>
                                        </div>
                                        <div class="view-count"><i class="ph ph-eye"></i>Loading views...</div>

                                        <!-- Detailed Ratings -->
                                        <div class="rating-breakdown">
                                             <h6 class="tw-mb-4">Detailed Ratings</h6>
                                             <div class="rating-item" data-rating="comfort">
                                                  <span class="rating-label">Comfort</span>
                                                  <div class="progress">
                                                       <div class="progress-bar" style="width: 0%"></div>
                                                  </div>
                                                  <span class="rating-text">0.0</span>
                                             </div>
                                             <div class="rating-item" data-rating="destination">
                                                  <span class="rating-label">Destination</span>
                                                  <div class="progress">
                                                       <div class="progress-bar" style="width: 0%"></div>
                                                  </div>
                                                  <span class="rating-text">0.0</span>
                                             </div>
                                             <div class="rating-item" data-rating="accommodation">
                                                  <span class="rating-label">Accommodation</span>
                                                  <div class="progress">
                                                       <div class="progress-bar" style="width: 0%"></div>
                                                  </div>
                                                  <span class="rating-text">0.0</span>
                                             </div>
                                             <div class="rating-item" data-rating="transport">
                                                  <span class="rating-label">Transport</span>
                                                  <div class="progress">
                                                       <div class="progress-bar" style="width: 0%"></div>
                                                  </div>
                                                  <span class="rating-text">0.0</span>
                                             </div>
                                        </div>
                                   </div>

                                   <!-- Reviews Section -->
                                   <div class="review-section" data-aos-duration="1000" data-aos-delay="300">
                                        <div class="review-header">
                                             <h3 class="tw-text-10">Customer Reviews</h3>
                                        </div>
                                        <div class="review-content">
                                             <div id="reviews-container">
                                                  <div class="loading">
                                                       <i class="ph ph-spinner"></i>
                                                       <p>Loading reviews...</p>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>

                                   <!-- Review Form Section -->
                                   <div class="review-form-section" data-aos-duration="1000" data-aos-delay="300">
                                        <h4 class="tw-mb-6">Share Your Experience</h4>
                                        <div id="review-message"></div>
                                        <form id="review-form">
                                             <div class="row">
                                                  <div class="col-md-6">
                                                       <div class="form-group">
                                                            <label for="reviewer_name">Your Name *</label>
                                                            <input type="text" class="form-control" name="reviewer_name" required>
                                                       </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                       <div class="form-group">
                                                            <label for="reviewer_email">Email Address *</label>
                                                            <input type="email" class="form-control" name="reviewer_email" required>
                                                       </div>
                                                  </div>
                                             </div>

                                             <div class="form-group">
                                                  <label>Overall Rating *</label>
                                                  <div data-star-rating="rating" data-value="0"></div>
                                             </div>

                                             <div class="form-group">
                                                  <label for="review_text">Your Review *</label>
                                                  <textarea class="form-control" name="review_text" rows="4" placeholder="Share your experience with this tour package..." required></textarea>
                                             </div>

                                             <h6 class="tw-mb-4">Detailed Ratings</h6>
                                             <div class="row">
                                                  <div class="col-md-6">
                                                       <div class="rating-input-group">
                                                            <label>Comfort</label>
                                                            <div data-star-rating="comfort_rating" data-value="5"></div>
                                                       </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                       <div class="rating-input-group">
                                                            <label>Destination</label>
                                                            <div data-star-rating="destination_rating" data-value="5"></div>
                                                       </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                       <div class="rating-input-group">
                                                            <label>Accommodation</label>
                                                            <div data-star-rating="accommodation_rating" data-value="5"></div>
                                                       </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                       <div class="rating-input-group">
                                                            <label>Transport</label>
                                                            <div data-star-rating="transport_rating" data-value="5"></div>
                                                       </div>
                                                  </div>
                                             </div>

                                             <button type="submit" class="btn-submit-review">
                                                  Submit Review
                                             </button>
                                        </form>
                                   </div>
                              </div>
                         </div>
                         <div class="col-xl-4 col-lg-6">
                              <div class="package-details-siteber">
                                   <div class="bg-white tw-text-xl tw-pt-10 tw-pb-10 tw-px-10 tw-mb-7" data-aos-duration="1000" data-aos-delay="300">
                                        <h4 class="tw-text-xl tw-mb-4">Book This Tour</h4>
                                        <form action="https://api.web3forms.com/submit" method="POST" id="tourBookingForm4" class="tour-booking-form">
                                            <!-- Web3Forms Hidden Fields -->
                                            <input type="hidden" name="access_key" value="17f8248d-f761-4fdd-9239-dc733c75b854">
                                            <input type="hidden" name="from_name" value="TOUR BOOKING">
                                            <input type="hidden" name="subject" value="TOUR BOOKING - Sacred Ceylon Wellness Retreat FROM Marshallholidays.com">
                                            <input type="hidden" name="tour_package" value="Sacred Ceylon Wellness Retreat">
                                            <input type="hidden" name="redirect" value="https://web3forms.com/success">
                                            <div class="package-details-siteber-item tw-mb-4">
                                                <input type="text" name="name" class="w-100 tw-p-3 border tw-rounded" placeholder="Full Name*" required>
                                            </div>
                                            <div class="package-details-siteber-item tw-mb-4">
                                                <input type="email" name="email" class="w-100 tw-p-3 border tw-rounded" placeholder="Email Address*" required>
                                            </div>
                                            <div class="package-details-siteber-item tw-mb-4">
                                                <input type="tel" name="phone" class="w-100 tw-p-3 border tw-rounded" placeholder="Phone Number*" required>
                                            </div>
                                            <div class="package-details-siteber-item tw-mb-8">
                                                <select name="passengers" class="w-100 tw-p-3 border tw-rounded" required>
                                                    <option value="">Number of Passengers</option>
                                                    <option value="1 Person">1 Person</option>
                                                    <option value="2 People">2 People</option>
                                                    <option value="3-5 People">3-5 People</option>
                                                    <option value="6+ People">6+ People</option>
                                                </select>
                                            </div>
                                            <div class="package-details-siteber-item tw-mb-4">
                                                <label class="tw-text-sm fw-medium text-main-600 tw-mb-2 d-block">Check-in Date*</label>
                                                <input type="date" name="checkin_date" class="w-100 tw-p-3 border tw-rounded" required>
                                            </div>
                                            <div class="package-details-siteber-item tw-mb-4">
                                                <label class="tw-text-sm fw-medium text-main-600 tw-mb-2 d-block">Check-out Date*</label>
                                                <input type="date" name="checkout_date" class="w-100 tw-p-3 border tw-rounded" required>
                                            </div>
                                            <div class="package-details-siteber-btn">
                                                <button type="submit" class="bg-main-two-600 text-main-600 w-100 tw-py-5 tw-px-18 fs-15 text-uppercase fw-bold font-heading tw-gap-2 d-inline-flex align-items-center justify-content-center tw-rounded-4xl">BOOK NOW <i class="ph ph-arrow-up-right"></i></button>
                                            </div>
                                        </form>
                                   </div>
                                   <div class=" tw-rounded-xl bg-white tw-px-12 tw-pt-14 tw-pb-12 tw-mb-7" data-aos-duration="1000" data-aos-delay="300">
                                        <h6 class="tw-text-xl tw-mb-8">Book With Confidence</h6>
                                        <div>
                                             <a class="text-paragraph-color fw-medium tw-mb-4" href="#">Customer care available 24/7</a>
                                             <a class="text-paragraph-color fw-medium tw-mb-4" href="#">Hand-picked Tours & Activities</a>
                                             <a class="text-paragraph-color fw-medium tw-mb-4" href="#">Free Travel Insureance</a>
                                             <a class="text-paragraph-color fw-medium tw-mb-4" href="#">No-hassle best price guarantee</a>
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
     <section class="instagram-area">
     <div class="container">
          <div class="row">
               <div class="col-xl-12">
                    <div class="text-center tw-mb-6">
                         <h6 class="instagram-title tw-text-2xl fw-normal text-capitalize">...want to become a dontation partner & contribution...</h6>
                    </div>
               </div>
          </div>
          <div class="row row-cols-xl-6 row-cols-md-3 row-cols-sm-3 row-cols-1">
               <div class="col">
                    <div class="instagram-wrapper" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                         <div class="instagram-thumb position-relative z-1 overflow-hidden">
                              <img class="tw-rounded-lg" src="assets/images/instagram/instagram-thumb1.jpg" alt="thumb">
                              <div class="instagram-btn position-absolute z-1">
                                   <a href="#"><span><img src="assets/images/icon/instagram.svg" alt="instagram"></span></a>
                              </div>
                         </div>
                    </div>
               </div>
               <div class="col">
                    <div class="instagram-wrapper" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                         <div class="instagram-thumb position-relative z-1 overflow-hidden">
                              <img class="tw-rounded-lg" src="assets/images/instagram/instagram-thumb2.jpg" alt="thumb">
                              <div class="instagram-btn position-absolute z-1">
                                   <a href="#"><span><img src="assets/images/icon/instagram.svg" alt="instagram"></span></a>
                              </div>
                         </div>
                    </div>
               </div>
               <div class="col">
                    <div class="instagram-wrapper" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                         <div class="instagram-thumb position-relative z-1 overflow-hidden">
                              <img class="tw-rounded-lg" src="assets/images/instagram/instagram-thumb3.jpg" alt="thumb">
                              <div class="instagram-btn position-absolute z-1">
                                   <a href="#"><span><img src="assets/images/icon/instagram.svg" alt="instagram"></span></a>
                              </div>
                         </div>
                    </div>
               </div>
               <div class="col">
                    <div class="instagram-wrapper" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                         <div class="instagram-thumb position-relative z-1 overflow-hidden">
                              <img class="tw-rounded-lg" src="assets/images/instagram/instagram-thumb4.jpg" alt="thumb">
                              <div class="instagram-btn position-absolute z-1">
                                   <a href="#"><span><img src="assets/images/icon/instagram.svg" alt="instagram"></span></a>
                              </div>
                         </div>
                    </div>
               </div>
               <div class="col">
                    <div class="instagram-wrapper" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                         <div class="instagram-thumb position-relative z-1 overflow-hidden">
                              <img class="tw-rounded-lg" src="assets/images/instagram/instagram-thumb5.jpg" alt="thumb">
                              <div class="instagram-btn position-absolute z-1">
                                   <a href="#"><span><img src="assets/images/icon/instagram.svg" alt="instagram"></span></a>
                              </div>
                         </div>
                    </div>
               </div>
               <div class="col">
                    <div class="instagram-wrapper">
                         <div class="instagram-thumb position-relative z-1 overflow-hidden" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="700">
                              <img class="tw-rounded-lg" src="assets/images/instagram/instagram-thumb6.jpg" alt="thumb">
                              <div class="instagram-btn position-absolute z-1">
                                   <a href="#"><span><img src="assets/images/icon/instagram.svg" alt="instagram"></span></a>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</section>


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
                    <a href="sri-lanka-tour-packages.html" class="rent-car-footer-link">Tour Packages</a>
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
    <!-- ==================== Custom Footer End ==================== -->
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
    <!-- Custom Star Rating System -->
    <script src="assets/js/custom-stars.js"></script>
    <!-- Review System JS -->
    <script src="assets/js/reviews.js"></script>

    <!-- Tour Booking Form Submission Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tourBookingForm = document.querySelector('.tour-booking-form');
            if (tourBookingForm) {
                tourBookingForm.addEventListener('submit', async function(e) {
                    e.preventDefault();
                    const formData = new FormData(tourBookingForm);
                    const submitButton = tourBookingForm.querySelector('button[type="submit"]');
                    submitButton.disabled = true;
                    const originalHTML = submitButton.innerHTML;
                    submitButton.innerHTML = 'BOOKING... <i class="ph ph-spinner ph-spin"></i>';
                    try {
                        const response = await fetch('https://api.web3forms.com/submit', { method: 'POST', body: formData });
                        const result = await response.json();
                        if (result.success) {
                            showTourBookingAlert('Booking Confirmed!', `Thank you for booking ${formData.get('tour_package')}! We will contact you shortly to confirm your reservation and provide detailed itinerary.`, 'success');
                            tourBookingForm.reset();
                        } else {
                            showTourBookingAlert('Booking Failed!', 'There was an issue processing your booking. Please try again or contact us directly.', 'error');
                        }
                    } catch (error) {
                        showTourBookingAlert('Connection Error!', 'Network error. Please check your connection and try again.', 'error');
                        console.error('Tour booking form submission error:', error);
                    } finally {
                        submitButton.disabled = false;
                        submitButton.innerHTML = originalHTML;
                    }
                });
            }
        });

        function showTourBookingAlert(title, message, type) {
            const existingAlerts = document.querySelectorAll('.tour-booking-alert');
            existingAlerts.forEach(alert => alert.remove());
            const alertElement = document.createElement('div');
            alertElement.className = `tour-booking-alert tour-booking-alert-${type}`;
            alertElement.innerHTML = `<div class="tour-booking-alert-content"><div class="tour-booking-alert-icon">${type === 'success' ? '✓' : '✕'}</div><div class="tour-booking-alert-text"><div class="tour-booking-alert-title">${title}</div><div class="tour-booking-alert-message">${message}</div></div><button class="tour-booking-alert-close" onclick="this.parentElement.parentElement.remove()">&times;</button></div>`;
            if (!document.querySelector('#tour-booking-alert-styles')) {
                const styleElement = document.createElement('style');
                styleElement.id = 'tour-booking-alert-styles';
                styleElement.textContent = `.tour-booking-alert{position:fixed;top:20px;right:20px;z-index:10000;min-width:350px;max-width:450px;background:white;border-radius:15px;box-shadow:0 8px 30px rgba(0,0,0,0.15);overflow:hidden;animation:slideInRight 0.4s ease-out;border:1px solid #e5e7eb}.tour-booking-alert-success{border-left:6px solid #059669}.tour-booking-alert-error{border-left:6px solid #dc2626}.tour-booking-alert-content{display:flex;align-items:flex-start;padding:20px;gap:16px}.tour-booking-alert-icon{width:32px;height:32px;border-radius:50%;display:flex;align-items:center;justify-content:center;color:white;font-weight:bold;font-size:18px;flex-shrink:0}.tour-booking-alert-success .tour-booking-alert-icon{background:#059669}.tour-booking-alert-error .tour-booking-alert-icon{background:#dc2626}.tour-booking-alert-text{flex:1}.tour-booking-alert-title{font-weight:700;font-size:18px;color:#1f2937;margin-bottom:8px;line-height:1.2}.tour-booking-alert-message{font-size:14px;color:#6b7280;line-height:1.5}.tour-booking-alert-close{background:none;border:none;font-size:24px;color:#9ca3af;cursor:pointer;padding:0;width:28px;height:28px;display:flex;align-items:center;justify-content:center;flex-shrink:0;border-radius:50%;transition:all 0.2s ease}.tour-booking-alert-close:hover{color:#6b7280;background:#f3f4f6}@keyframes slideInRight{from{transform:translateX(100%);opacity:0}to{transform:translateX(0);opacity:1}}@media (max-width:640px){.tour-booking-alert{left:20px;right:20px;min-width:auto;max-width:none}}`;
                document.head.appendChild(styleElement);
            }
            document.body.appendChild(alertElement);
            setTimeout(() => { if (alertElement && alertElement.parentNode) { alertElement.style.animation = 'slideInRight 0.4s ease-out reverse'; setTimeout(() => { if (alertElement && alertElement.parentNode) { alertElement.remove(); } }, 400); } }, 7000);
        }
    </script>

    <style>
        /* Hero Section Mobile Responsive */
        .breadcrumb-title, .hero-title {
            text-align: center !important;
            max-width: 100% !important;
        }

        @media (max-width: 768px) {
            .breadcrumb-title, .hero-title {
                font-size: 1.8rem !important;
                line-height: 1.2 !important;
                padding: 0 20px !important;
                margin-bottom: 1rem !important;
            }
        }

        @media (max-width: 480px) {
            .breadcrumb-title, .hero-title {
                font-size: 1.5rem !important;
                line-height: 1.3 !important;
                padding: 0 15px !important;
                margin-bottom: 1rem !important;
            }
        }

        .breadcrumb-area, .hero-area {
            display: flex !important;
            align-items: center !important;
            min-height: 200px !important;
        }

        /* New Mobile Sidebar Styles */
        .mobile-sidebar {
            position: fixed;
            top: 0;
            left: -320px;
            width: 320px;
            height: 100vh;
            background: #ffffff;
            box-shadow: 2px 0 20px rgba(0, 0, 0, 0.1);
            z-index: 9999;
            transition: left 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            overflow-y: auto;
        }

        .mobile-sidebar.active {
            left: 0;
        }

        .mobile-sidebar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            border-bottom: 1px solid #e2e8f0;
        }

        .mobile-logo {
            color: #2c5aa0;
            font-weight: 700;
            font-size: 1.25rem;
            margin: 0;
            font-family: 'Philosopher', serif;
        }

        .mobile-close-btn {
            background: #f1f5f9;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #64748b;
            font-size: 18px;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .mobile-close-btn:hover {
            background: #e2e8f0;
            color: #334155;
        }

        .mobile-nav {
            padding: 20px 0;
        }

        .mobile-nav-list {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .mobile-nav-item {
            margin: 0;
        }

        .mobile-nav-link {
            display: block;
            padding: 15px 20px;
            color: #334155;
            text-decoration: none;
            font-weight: 500;
            font-size: 16px;
            transition: all 0.2s ease;
            border-left: 3px solid transparent;
        }

        .mobile-nav-link:hover,
        .mobile-nav-link.active {
            background: #f8faff;
            color: #2c5aa0;
            border-left-color: #2c5aa0;
        }

        .mobile-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background: rgba(0, 0, 0, 0.5);
            z-index: 9998;
            opacity: 0;
            visibility: hidden;
            transition: all 0.4s ease;
        }

        .mobile-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        /* Hide on desktop */
        @media (min-width: 992px) {
            .mobile-sidebar,
            .mobile-overlay {
                display: none;
            }
        }
    </style>

    <script>
        // New Mobile Menu Implementation
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.getElementById('mobile-menu-toggle');
            const sidebar = document.getElementById('mobile-sidebar');
            const overlay = document.getElementById('mobile-overlay');
            const closeBtn = document.getElementById('mobile-close-btn');

            console.log('New mobile menu elements:', {
                toggle: !!menuToggle,
                sidebar: !!sidebar,
                overlay: !!overlay,
                closeBtn: !!closeBtn
            });

            function openMenu() {
                console.log('Opening mobile menu');
                sidebar.classList.add('active');
                overlay.classList.add('active');
                document.body.style.overflow = 'hidden';
            }

            function closeMenu() {
                console.log('Closing mobile menu');
                sidebar.classList.remove('active');
                overlay.classList.remove('active');
                document.body.style.overflow = '';
            }

            // Toggle button click
            if (menuToggle) {
                menuToggle.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    console.log('Menu toggle clicked');
                    openMenu();
                });
            }

            // Close button click
            if (closeBtn) {
                closeBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    console.log('Close button clicked');
                    closeMenu();
                });
            }

            // Overlay click to close
            if (overlay) {
                overlay.addEventListener('click', function(e) {
                    e.preventDefault();
                    console.log('Overlay clicked');
                    closeMenu();
                });
            }

            // ESC key to close
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && sidebar.classList.contains('active')) {
                    console.log('ESC key pressed');
                    closeMenu();
                }
            });

            // Close menu when clicking on menu links
            const menuLinks = document.querySelectorAll('.mobile-nav-link');
            menuLinks.forEach(link => {
                link.addEventListener('click', function() {
                    console.log('Menu link clicked');
                    setTimeout(() => closeMenu(), 100);
                });
            });
        });
    </script>

</body>



</html>




