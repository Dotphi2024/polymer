<?php
/**
 * Polymer Products - Dynamic Header Component
 * Common Header with active nav detection & SEO metadata support
 */
if (!isset($page_title) || empty($page_title)) {
    $page_title = "Polymer Products - Leading Manufacturer of Elastomeric Bridge Bearings & Seismic Solutions";
}
if (!isset($meta_description) || empty($meta_description)) {
    $meta_description = "Manufacturer and supplier of Elastomeric Bearings and Seismic Pads for bridges, highways, Indian Railways, and Metro infrastructure. ISO 9001:2027 & RDSO Approved. Manufacturing Unit: H-32, M.I.D.C. Satpur, Nashik-422007 Maharashtra, India. Established in 1978.";
}
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Polymer Products">
    <meta name="description" content="<?php echo htmlspecialchars($meta_description); ?>">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    
    <!-- Google Fonts: Saira, Saira Semi Condensed & Oswald -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Saira+Semi+Condensed:wght@400;500;600;700&family=Saira:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Favicon img -->
    <link rel="shortcut icon" href="assets/img/img/banner/favicon.ico">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="assets/css/style.css?v=1.0.3">
    <!--<< Theme Switcher CSS >>-->
    <link rel="stylesheet" href="assets/css/theme-switcher.css?v=1.0.3">
    <!--<< Layout.css >>-->
    <link rel="stylesheet" href="assets/css/layout.css?v=1.0.3">

    <style>
    
    /* CRITICAL FIX: Prevent Mobile Drawer Flash of Unstyled Content (FOUC) on hard reload */
    .ht-offcanvas {
        position: fixed !important;
        top: 0 !important;
        right: 0 !important;
        width: 380px !important;
        max-width: 100vw !important;
        height: 100% !important;
        background: #ffffff !important;
        transform: translateX(100%) !important;
        opacity: 0 !important;
        visibility: hidden !important;
        pointer-events: none !important;
        z-index: 99999 !important;
        transition: transform 0.3s cubic-bezier(0.25, 0.8, 0.25, 1), opacity 0.3s ease, visibility 0.3s ease !important;
        box-shadow: -10px 0 35px rgba(0, 0, 0, 0.15) !important;
        overflow-y: auto !important;
    }
    .ht-offcanvas.ht-offcanvas-open {
        transform: translateX(0) !important;
        opacity: 1 !important;
        visibility: visible !important;
        pointer-events: auto !important;
    }
    .ht-offcanvas-overlay {
        position: fixed !important;
        top: 0 !important;
        left: 0 !important;
        width: 100% !important;
        height: 100% !important;
        background-color: rgba(0, 0, 0, 0.5) !important;
        opacity: 0 !important;
        visibility: hidden !important;
        pointer-events: none !important;
        z-index: 99998 !important;
        transition: opacity 0.3s ease, visibility 0.3s ease !important;
    }
    .ht-offcanvas-overlay.ht-offcanvas-overlay-open {
        opacity: 1 !important;
        visibility: visible !important;
        pointer-events: auto !important;
    }
/* Right-side Nested Submenu Flyout for Desktop Navigation */
    .ht-menu-main ul li .sub-menu {
        overflow: visible !important;
    }
    .ht-menu-main ul li .sub-menu li.has-dropdown-sub {
        position: relative;
    }
    .ht-menu-main ul li .sub-menu li.has-dropdown-sub > a {
        display: flex !important;
        align-items: center;
        justify-content: space-between;
        padding-right: 18px !important;
    }
    .ht-menu-main ul li .sub-menu li.has-dropdown-sub .sub-menu-right {
        position: absolute;
        top: -8px;
        left: 100%;
        min-width: 320px;
        max-height: 520px;
        overflow-y: auto;
        background: #ffffff;
        padding: 8px 0;
        margin: 0;
        list-style: none;
        border-radius: 14px;
        box-shadow: 0 18px 40px rgba(0, 0, 0, 0.16);
        border: 1px solid #e2e8f0;
        opacity: 0;
        visibility: hidden;
        transform: translateX(12px);
        transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        z-index: 1000;
    }
    .ht-menu-main ul li .sub-menu li.has-dropdown-sub:hover > .sub-menu-right {
        opacity: 1;
        visibility: visible;
        transform: translateX(0);
    }
    .ht-menu-main ul li .sub-menu li.has-dropdown-sub .sub-menu-right li {
        display: block;
        margin: 0;
    }
    .ht-menu-main ul li .sub-menu li.has-dropdown-sub .sub-menu-right li a {
        display: flex;
        align-items: center;
        padding: 8px 18px;
        font-size: 13.5px;
        font-weight: 500;
        color: #1e293b;
        border-left: 3px solid transparent;
        transition: all 0.2s ease;
        white-space: nowrap;
    }
    .ht-menu-main ul li .sub-menu li.has-dropdown-sub .sub-menu-right li a:hover {
        color: var(--theme-primary);
        background: #f0f7ff;
        border-left: 3px solid var(--theme-primary);
        padding-left: 22px;
    }
    .sub-menu-right::-webkit-scrollbar {
        width: 6px;
    }
    .sub-menu-right::-webkit-scrollbar-thumb {
        background: #cbd5e1;
        border-radius: 4px;
    }
    </style>
</head>

<body class="body-color">
    <!-- Preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div><!-- Preloader area end -->

    <!-- Mouse Cursor -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    
    <!-- Scroll Up Start -->
    <button id="back-top" class="back-to-top">
        <i class="fa-solid fa-arrow-up"></i>
    </button><!-- Scroll Up End -->

    <!-- Header Start -->
    <header class="ht-header-area header-1">
        <!-- ht-top-header area start -->
        <div class="ht-top-header"
            style="background:var(--theme-primary); border-bottom:1px solid rgba(255,255,255,0.15); padding:8px 0;">
            <div class="container-fluid px-3 ">
                <div class="row align-items-center g-2">
                    <div class="col-lg-6 col-md-6 text-center text-md-start">
                        <p class="mb-0 text-white small" style="font-size:13px; font-family:'Saira-Medium', sans-serif;">
                            <i class="fa-solid fa-location-dot text-white me-2"></i>H-32, M.I.D.C. SATPUR, NASHIK-422007 Maharashtra, India
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-6 text-center text-md-end">
                        <ul class="right list-inline mb-0 small" style="font-size:13px; font-family:'Saira-Medium', sans-serif;">
                            <!-- <li class="list-inline-item me-3 d-none d-sm-inline-block text-white">
                                <i class="fa-solid fa-clock text-white me-1"></i>Sunday to Friday: 10:00 AM to 6:30 PM
                            </li> -->
                            <li class="list-inline-item d-none d-sm-inline-block">
                                <i class="fa-solid fa-envelope text-white me-1"></i>
                                <a href="mailto:sales@polymerproducts.org" class="text-white text-decoration-none">sales@polymerproducts.org</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- ht-main-header area start -->
        <div class="ht-main-header header-1" id="header-sticky">
            <div class="container-fluid px-3 ">
                <div class="ht-menu-wrapper d-flex align-items-center justify-content-between py-2">
                    <!-- Brand Logo -->
                    <div class="ht-menu-left d-flex align-items-center">
                        <div class="ht-menu-logo">
                            <a href="index.php" class="d-flex align-items-center text-decoration-none logo-anim">
                                <img src="assets/img/img/banner/polymer-logo-3.png" alt="Polymer Products"
                                    class="header-logo-img"
                                    style="height: 65px; width: auto; object-fit: contain;">
                            </a>
                        </div>
                    </div>

                    <!-- Right Side: Navigation Menu + CTA Button & Mobile Hamburger -->
                    <div class="ht-menu-right d-flex align-items-center gap-3 gap-xxl-4 ms-auto">
                        <!-- Desktop Navigation Menu -->
                        <div class="ht-menu-main d-none d-xl-block">
                            <nav class="ht-mobile-menu-active">
                                <ul class="d-flex align-items-center mb-0 list-unstyled" style="gap: 0rem;">
                                    <li class="<?php echo ($current_page == 'index.php' || $current_page == '' || $current_page == 'index.html') ? 'active' : ''; ?>">
                                        <a href="index.php" class="fw-semibold nav-link-item">Home</a>
                                    </li>
                                    
                                    <li class="has-dropdown <?php echo in_array($current_page, ['about.php', 'about.html']) ? 'active' : ''; ?>">
                                        <a href="about.php" class="fw-semibold nav-link-item">
                                            About Us <i class="fa-solid fa-chevron-down dropdown-icon"></i>
                                        </a>
                                        <ul class="sub-menu">
                                            <li><a href="about.php">Company Overview</a></li>
                                            <li><a href="certifications.php">Statutory & Quality Approvals</a></li>
                                             
                                            <!-- <li><a href="team.php">Our Technical Team</a></li> -->
                                             <!-- <li><a href="about.php#bearing-types">Bearing Types & Applications</a></li> -->
                                        </ul>
                                    </li>
                                    
                                    <li class="has-dropdown <?php echo in_array($current_page, ['services.php', 'services.html', 'material-used.php', 'material-used.html', 'application-codes.php', 'application-codes.html']) ? 'active' : ''; ?>">
                                        <a href="services.php" class="fw-semibold nav-link-item">
                                            Products   <i class="fa-solid fa-chevron-down dropdown-icon"></i>
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="has-dropdown-sub">
                                                <a href="services.php">
                                                    <span>Proposed Bearing Types &amp; Applications</span>
                                                    <i class="fa-solid fa-chevron-right ms-2" style="font-size: 11px;"></i>
                                                </a>
                                                <ul class="sub-menu-right shadow-lg">
                                                    <li><a href="services.php#type-a"><i class="fa-solid fa-layer-group text-primary me-2"></i>Type A: Plain Pad / Strip</a></li>
                                                    <li><a href="services.php#type-b"><i class="fa-solid fa-shield-halved text-primary me-2"></i>Type B: Laminated Bearing</a></li>
                                                    <li><a href="services.php#type-c"><i class="fa-solid fa-compress text-primary me-2"></i>Type C: Thicker End Laminates</a></li>
                                                    <li><a href="services.php#type-d"><i class="fa-solid fa-cubes text-primary me-2"></i>Type D: Top Outer Steel Plate</a></li>
                                                    <li><a href="services.php#type-e"><i class="fa-solid fa-square-binary text-primary me-2"></i>Type E: Both Outer Steel Plates</a></li>
                                                    <li><a href="services.php#type-f"><i class="fa-solid fa-anchor text-primary me-2"></i>Type F: Positive Anchorage</a></li>
                                                    <li><a href="services.php#type-g"><i class="fa-solid fa-gauge-high text-primary me-2"></i>Type G: PTFE Sliding Bearing</a></li>
                                                    <li><a href="services.php#type-h"><i class="fa-solid fa-arrows-left-right text-primary me-2"></i>Type H: Guided Restraints</a></li>
                                                    <li><a href="services.php#type-i"><i class="fa-solid fa-wave-square text-primary me-2"></i>Type I: Seismic Isolation</a></li>
                                                    <li><a href="services.php#type-rdso"><i class="fa-solid fa-train text-primary me-2"></i>Type RDSO: Railway Heavy Axle</a></li>
                                                    <li><a href="services.php#elastomeric-bearings"><i class="fa-solid fa-circle-dot text-primary me-2"></i>Elastomeric Bearings</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="material-used.php">Raw Materials Used</a></li>
                                            <li><a href="application-codes.php">Application Codes & Standards</a></li>
                                        </ul>
                                    </li>
                                    
                                    <li class="has-dropdown <?php echo in_array($current_page, ['process.php', 'process.html', 'identification.php', 'identification.html']) ? 'active' : ''; ?>">
                                        <a href="process.php" class="fw-semibold nav-link-item">
                                            Manufacturing & QC <i class="fa-solid fa-chevron-down dropdown-icon"></i>
                                        </a>
                                        <ul class="sub-menu">
                                            <li><a href="process.php">Detailed Process Flow</a></li>
                                            <li><a href="process.php#machinery">List of Machinery</a></li>
                                            <!-- <li><a href="testing.php">Testing & QA/QC System (NHAI/RDSO)</a></li> -->
                                            <li><a href="identification.php">Product Identification System</a></li>
                                        </ul>
                                    </li>
                                    
                                    <li class="<?php echo in_array($current_page, ['testing.php', 'testing.html']) ? 'active' : ''; ?>">
                                        <a href="testing.php" class="fw-semibold nav-link-item">Testing &amp; QA/QC</a>
                                    </li>

                                    <li class="<?php echo in_array($current_page, ['experience.php', 'experience.html']) ? 'active' : ''; ?>">
                                        <a href="experience.php" class="fw-semibold nav-link-item">Experience & Supplies</a>
                                    </li>
                                    
                                    <li class="<?php echo in_array($current_page, ['storage-handling.php', 'storage-handling.html']) ? 'active' : ''; ?>">
                                        <a href="storage-handling.php" class="fw-semibold nav-link-item">Storage & Installation</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        <!-- Desktop CTA -->
                        <a href="contact.php"
                            class="header-contact-btn ht-btn-anim d-none d-xl-inline-flex align-items-center text-uppercase"
                            style="font-family: 'Saira-Medium', sans-serif !important; letter-spacing: 0.5px; font-weight: 600;">
                            <span class="btn-text">Contact Us</span>
                            <svg class="btn-icon ms-2" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="display: inline-block; vertical-align: middle;">
                                <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>

                        

                        <!-- Mobile & Tablet Navigation Toggle -->
                        <button class="ht-menu-btn d-xl-none offcanvas-toggle custom-mobile-nav-toggle btn border-0 d-flex align-items-center gap-2"
                            aria-label="Toggle Navigation Menu"
                            type="button">
                            <span class="nav-toggle-bars">
                                <span class="bar bar-top"></span>
                                <span class="bar bar-mid"></span>
                                <span class="bar bar-bot"></span>
                            </span>
                            <span class="nav-toggle-text d-none d-sm-inline-block">Menu</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Offcanvas Navigation Drawer (Mobile & Tablet) -->
    <div class="ht-offcanvas">
        <div class="ht-offcanvas-wrapper">
            <!-- Offcanvas Header -->
            <div class="ht-offcanvas-header mb-4 pb-3 border-bottom d-flex justify-content-between align-items-center">
                <a href="index.php" class="d-flex align-items-center text-decoration-none">
                    <img src="assets/img/img/banner/polymer-logo-new.webp" alt="Polymer Products"
                        style="height: 46px; width: auto; object-fit: contain;">
                </a>
                <button type="button" class="ht-offcanvas-toggle-close btn btn-light rounded-circle p-2 d-flex align-items-center justify-content-center"
                    style="width: 36px; height: 36px;" aria-label="Close Navigation">
                    <i class="fa-solid fa-xmark text-dark fs-5"></i>
                </button>
            </div>

            <!-- Offcanvas Navigation Links (Cloned dynamically by main.js with fallback) -->
            <div class="ht-offcanvas-menu mb-4">
                <nav class="mobile-nav">
                    <ul class="list-unstyled mb-0">
                        <li><a href="index.php">Home</a></li>
                        <li class="has-dropdown">
                            <a href="about.php">About Us</a>
                            <ul class="sub-menu">
                                <li><a href="about.php">Company Overview</a></li>
                                <li><a href="certifications.php">Statutory &amp; Quality Approvals</a></li>
                                <li><a href="about.php#sister-concern">Sister Concern (Dynamic Prestress)</a></li>
                                <li><a href="team.php">Our Technical Team</a></li>
                                <li><a href="about.php#bearing-types">Bearing Types &amp; Applications</a></li>
                            </ul>
                        </li>
                        <li class="has-dropdown">
                            <a href="services.php">Products & Specs</a>
                            <ul class="sub-menu">
                                <li class="has-dropdown">
                                    <a href="services.php" class="fw-bold text-primary">Proposed Bearing Types &amp; Applications</a>
                                    <ul class="sub-menu ps-3">
                                        <li><a href="services.php#type-a">&bull; Type A (Plain Pad / Strip)</a></li>
                                        <li><a href="services.php#type-b">&bull; Type B (Laminated)</a></li>
                                        <li><a href="services.php#type-c">&bull; Type C (Thicker End Laminates)</a></li>
                                        <li><a href="services.php#type-d">&bull; Type D (Top Steel Plate)</a></li>
                                        <li><a href="services.php#type-e">&bull; Type E (Both Outer Steel Plates)</a></li>
                                        <li><a href="services.php#type-f">&bull; Type F (Positive Anchorage)</a></li>
                                        <li><a href="services.php#type-g">&bull; Type G (PTFE Sliding)</a></li>
                                        <li><a href="services.php#type-h">&bull; Type H (Guided Restraint)</a></li>
                                        <li><a href="services.php#type-i">&bull; Type I (Seismic Isolation)</a></li>
                                        <li><a href="services.php#type-rdso">&bull; Type RDSO (Railway Heavy Axle)</a></li>
                                        <li><a href="services.php#elastomeric-bearings">&bull; Elastomeric Bearings</a></li>
                                    </ul>
                                </li>
                                <li><a href="material-used.php">Raw Materials Used</a></li>
                                <li><a href="application-codes.php">Application Codes & Standards</a></li>
                            </ul>
                        </li>
                        <li class="has-dropdown">
                            <a href="process.php">Manufacturing & QC</a>
                            <ul class="sub-menu">
                                <li><a href="process.php">Detailed Process Flow</a></li>
                                <li><a href="process.php#machinery">List of Machinery</a></li>
                                <!-- <li><a href="testing.php">Testing & QA/QC System (NHAI/RDSO)</a></li> -->
                                <li><a href="identification.php">Product Identification System</a></li>
                            </ul>
                        </li>
                        <li><a href="testing.php">Testing &amp; QA/QC System</a></li>
                        <li><a href="experience.php">Experience & Supplies</a></li>
                        <li><a href="storage-handling.php">Storage & Installation</a></li>
                        <li><a href="application-codes.php">Application Standards</a></li>
                    </ul>
                </nav>
            </div>

            <!-- Offcanvas Direct Action Button -->
            <div class="mb-4">
                <a href="contact.php"
                    class="btn btn-primary w-100 py-3 rounded-pill text-white fw-bold text-uppercase d-flex align-items-center justify-content-center shadow-sm"
                    style="background: var(--theme-primary); border-color: var(--theme-primary); font-family: 'Saira-Medium', sans-serif !important; font-size: 14px; letter-spacing: 0.5px;">
                    <i class="fa-solid fa-paper-plane me-2"></i> Request Technical RFQ
                </a>
            </div>

            <!-- Offcanvas Plant Quick Contact Info -->
            <div class="ht-offcanvas-info p-3 rounded-3" style="background: #f0f7ff; border: 1px solid #e2e8f0;">
                <h6 class="fw-bold text-dark mb-1" style="font-family: 'Saira-Medium', sans-serif; font-size: 14px;">
                    <i class="fa-solid fa-industry text-primary me-2"></i>Manufacturing Unit
                </h6>
                <p class="small text-muted mb-2" style="font-size: 12.5px; line-height: 1.5;">
                    <strong>H-32, M.I.D.C. SATPUR</strong><br>
                    NASHIK-422007 Maharashtra, India<br>
                    <span class="text-dark fw-semibold">Year of Establishment: 1978</span>
                </p>
                <div class="d-flex flex-column gap-1 small" style="font-size: 12.5px;">
                    <div>
                        <i class="fa-solid fa-clock text-warning me-2"></i>
                        <span class="text-secondary fw-semibold">Sunday to Friday: 10:00 AM to 6:30 PM</span>
                    </div>
                    <div>
                        <i class="fa-solid fa-phone text-success me-2"></i>
                        <a href="tel:8975766459" class="text-dark fw-bold text-decoration-none">+91 8975766459</a>
                    </div>
                    <div>
                        <i class="fa-solid fa-envelope text-primary me-2"></i>
                        <a href="mailto:sales@polymerproducts.org" class="text-muted text-decoration-none">sales@polymerproducts.org</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ht-offcanvas-overlay"></div>