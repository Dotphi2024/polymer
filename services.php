<?php 
$page_title = "Proposed Bearing Types & Applications - Polymer Products";
$meta_description = "Complete range of IRC:83 (Part II) 2018 & RDSO BS-131 approved elastomeric bridge bearings: Type A, Type B, Type C, Type D, Type E, Type F, Type G PTFE Sliding, Type H Guided, Type I Seismic Isolation, RDSO Bearings, POT-PTFE, Rubber Bunk, and Locators.";
include_once 'partials/header.php'; 
?>

<style>
.services-hero-badge {
    background: var(--theme-subtle);
    border: 1px solid var(--theme-primary);
    color: var(--theme-lighter);
    font-size: 13px;
    letter-spacing: 1.5px;
}
.product-item-card {
    transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1);
    border: 1px solid #e2e8f0;
    background: #ffffff;
    border-radius: 20px;
    overflow: hidden;
    scroll-margin-top: 110px;
}
.product-item-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 40px rgba(2, 132, 199, 0.12) !important;
    border-color: var(--theme-primary) !important;
}
.product-img-wrapper {
    background: linear-gradient(145deg, #f8fafc 0%, #edf2f7 100%);
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 18px;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 340px;
    transition: all 0.35s ease;
    cursor: pointer;
    position: relative;
    overflow: hidden;
}
.product-item-card:hover .product-img-wrapper {
    border-color: rgba(2, 132, 199, 0.40);
    background: linear-gradient(145deg, #f0f9ff 0%, #e0f2fe 100%);
}
.product-img-zoom {
    transition: transform 0.4s ease;
    max-height: 300px;
    width: auto;
    max-width: 100%;
    object-fit: contain;
    filter: drop-shadow(0 10px 18px rgba(0, 0, 0, 0.08));
}
.product-item-card:hover .product-img-zoom {
    transform: scale(1.04);
}
.product-img-overlay-btn {
    position: absolute;
    bottom: 12px;
    right: 12px;
    background: rgba(15, 23, 42, 0.75);
    backdrop-filter: blur(4px);
    color: #ffffff;
    padding: 5px 12px;
    border-radius: 20px;
    font-size: 11.5px;
    font-weight: 600;
    opacity: 0;
    transition: opacity 0.3s ease;
}
.product-item-card:hover .product-img-overlay-btn {
    opacity: 1;
}
.spec-box {
    background: #f0f7ff;
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    padding: 14px 16px;
    transition: all 0.25s ease;
}
.spec-box:hover {
    background: #ffffff;
    border-color: var(--theme-primary);
    box-shadow: 0 4px 12px rgba(0,0,0,0.04);
}
.bearing-nav-pill {
    font-size: 12.5px;
    font-weight: 600;
    padding: 7px 15px;
    border-radius: 50px;
    border: 1px solid #cbd5e1;
    background: #ffffff;
    color: #1e293b;
    text-decoration: none;
    transition: all 0.25s ease;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.03);
}
.bearing-nav-pill:hover,
.bearing-nav-pill:focus {
    background: var(--theme-primary);
    border-color: var(--theme-primary);
    color: #ffffff !important;
    box-shadow: 0 4px 12px var(--theme-glow);
    transform: translateY(-2px);
}
.services-hero-showcase {
    max-width: 440px;
    width: 100%;
}
.services-hero-img-box {
    transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1);
    background: rgba(24, 70, 107, 0.18);
    backdrop-filter: blur(14px);
    -webkit-backdrop-filter: blur(14px);
    border: 1px solid rgba(255, 255, 255, 0.22);
    box-shadow: 0 20px 45px rgba(0, 0, 0, 0.35);
}
.services-hero-img-box:hover {
    transform: translateY(-5px);
    border-color: rgba(147, 197, 253, 0.45) !important;
    box-shadow: 0 25px 55px rgba(2, 132, 199, 0.28) !important;
}
.services-hero-img-box img {
    transition: transform 0.45s ease;
    filter: drop-shadow(0 15px 25px rgba(0,0,0,0.45));
}
.services-hero-img-box:hover img {
    transform: scale(1.05);
}
.irc-table-box {
    background: #ffffff;
    border: 1px solid #cbd5e1;
    border-radius: 16px;
    overflow: hidden;
    transition: all 0.3s ease;
}
.irc-table-box:hover {
    border-color: var(--theme-primary);
    box-shadow: 0 12px 28px rgba(2, 132, 199, 0.10);
}
</style>

<!-- ============================================================
     1. Modern Hero Banner
     ============================================================ -->
<section class="ht-services-hero position-relative d-flex align-items-center"
    style="background: linear-gradient(135deg, rgba(9, 20, 36, 0.75) 0%, rgba(14, 34, 61, 0.65) 60%, rgba(6, 13, 24, 0.70) 100%), url('assets/img/img/banner/services-banner-1.webp') center center / cover no-repeat; padding-top: 175px; padding-bottom: 75px; margin-top: -160px; min-height: 480px;">
    
    <div class="container-fluid px-3 px-lg-5 position-relative" style="z-index: 2;">
        <div class="row align-items-center justify-content-between g-4">
            
            <!-- Left Column: Content -->
            <div class="col-lg-7 wow fadeInLeft" data-wow-delay=".2s">
                <span class="badge px-3 py-2 mb-3 rounded-pill text-uppercase fw-bold services-hero-badge">
                    <i class="fa-solid fa-layer-group me-2"></i>IRC:83-2018 (Part-II) &bull; RDSO BS-131 Approved Products
                </span>
                <h1 class="text-white fw-bold mb-3"
                    style="font-family: 'Oswald', 'Saira-Medium', sans-serif; font-size: clamp(32px, 4.2vw, 52px); line-height: 1.2; letter-spacing: -0.5px;">
                    Proposed Bearing Types <span style="color: #93c5fd;">&amp; Applications</span>
                </h1>
                <p class="text-light mb-4" style="font-size: 16px; line-height: 1.8; max-width: 720px; color: #ffffffff !important;">
                    Engineered elastomeric bridge bearings precision-manufactured to transfer high vertical loads, accommodate longitudinal &amp; transverse movements, and permit angular rotations across highway, railway, metro, and bridge infrastructure.
                </p>
                <div class="d-flex flex-wrap gap-2 pt-1 mb-3 mb-lg-0">
                    <a href="#type-a" class="badge bg-dark bg-opacity-75 border border-secondary text-light px-3 py-2 rounded-pill small text-decoration-none">
                        <i class="fa-solid fa-check text-info me-1"></i> Type A
                    </a>
                    <a href="#type-b" class="badge bg-dark bg-opacity-75 border border-secondary text-light px-3 py-2 rounded-pill small text-decoration-none">
                        <i class="fa-solid fa-check text-info me-1"></i> Type B
                    </a>
                    <a href="#type-c" class="badge bg-dark bg-opacity-75 border border-secondary text-light px-3 py-2 rounded-pill small text-decoration-none">
                        <i class="fa-solid fa-check text-info me-1"></i> Type C
                    </a>
                    <a href="#type-d" class="badge bg-dark bg-opacity-75 border border-secondary text-light px-3 py-2 rounded-pill small text-decoration-none">
                        <i class="fa-solid fa-check text-info me-1"></i> Type D
                    </a>
                    <a href="#type-e" class="badge bg-dark bg-opacity-75 border border-secondary text-light px-3 py-2 rounded-pill small text-decoration-none">
                        <i class="fa-solid fa-check text-info me-1"></i> Type E
                    </a>
                    <a href="#type-f" class="badge bg-dark bg-opacity-75 border border-secondary text-light px-3 py-2 rounded-pill small text-decoration-none">
                        <i class="fa-solid fa-check text-info me-1"></i> Type F
                    </a>
                    <a href="#type-g" class="badge bg-dark bg-opacity-75 border border-secondary text-light px-3 py-2 rounded-pill small text-decoration-none">
                        <i class="fa-solid fa-check text-info me-1"></i> Type G
                    </a>
                    <a href="#type-h" class="badge bg-dark bg-opacity-75 border border-secondary text-light px-3 py-2 rounded-pill small text-decoration-none">
                        <i class="fa-solid fa-check text-info me-1"></i> Type H
                    </a>
                    <a href="#type-i" class="badge bg-dark bg-opacity-75 border border-secondary text-light px-3 py-2 rounded-pill small text-decoration-none">
                        <i class="fa-solid fa-check text-info me-1"></i> Type I
                    </a>
                    <a href="#type-rdso" class="badge bg-dark bg-opacity-75 border border-secondary text-light px-3 py-2 rounded-pill small text-decoration-none">
                        <i class="fa-solid fa-train text-warning me-1"></i> RDSO Railway
                    </a>
                </div>
            </div>

            <!-- Right Column: Product Showcase Card & Breadcrumb -->
            <div class="col-lg-5 text-center text-lg-end wow fadeInRight" data-wow-delay=".3s">
                <nav aria-label="breadcrumb" class="mb-3 d-none d-lg-block">
                    <ol class="breadcrumb justify-content-lg-end mb-0 bg-transparent p-0">
                        <li class="breadcrumb-item"><a href="index.php" class="text-white-50 text-decoration-none"><i class="fa-solid fa-house me-1"></i>Home</a></li>
                        <li class="breadcrumb-item active text-white fw-semibold" aria-current="page">Proposed Bearing Types</li>
                    </ol>
                </nav>

                <div class="services-hero-showcase d-inline-block text-center">
                    <div class="services-hero-img-box p-3 p-md-4 rounded-4 position-relative">
                        <img src="assets/img/img/banner/Final-Elastomeric-bearing-banner-right.webp" alt="Elastomeric Bridge Bearing Showcase - Polymer Products" class="img-fluid"
                            style="max-height: 290px; width: auto; object-fit: contain;">
                        <div class="d-flex align-items-center justify-content-between gap-2 mt-3 pt-2.5 border-top border-white border-opacity-10 text-start">
                            <div>
                                <span class="badge bg-primary text-white rounded-pill px-2.5 py-1 small fw-bold mb-1">
                                    <i class="fa-solid fa-shield-check me-1"></i>IRC:83 &bull; RDSO Approved
                                </span>
                                <h6 class="text-white fw-bold mb-0 small" style="font-family: 'Oswald', sans-serif; letter-spacing: 0.3px;">
                                    Steel-Laminated Bridge Bearings (Estd. 1978)
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ============================================================
     2. Product Portfolio Range Section
     ============================================================ -->
<section class="py-5" style="background: #f0f7ff;">
    <div class="container-fluid px-3 px-lg-5 py-3">

        <!-- Section Header -->
        <div class="text-center mb-4 wow fadeInUp" data-wow-delay=".1s">
            <span class="badge px-3 py-1.5 rounded-pill font-monospace fw-bold text-uppercase mb-2"
                style="background: var(--theme-subtle); color: var(--theme-primary); font-size: 12px; letter-spacing: 1px;">
                Manufacturing Portfolio &bull; IRC:83 (Part II) 2018
            </span>
            <h2 class="fw-bold text-dark text-uppercase" style="font-family: 'Oswald', sans-serif; font-size: clamp(28px, 3.5vw, 38px);">
                Precision Elastomeric Bridge Bearings &amp; Structural Solutions
            </h2>
            <p class="text-muted mx-auto mb-0" style="max-width: 780px; font-size: 15px; line-height: 1.7;">
                All bearings are designed and manufactured strictly per <strong>IRC:83-2018 (Part-II)</strong>, <strong>MoRTH Section 2000</strong>, <strong>RDSO BS-131</strong>, and <strong>UIC 772-2R</strong> with virgin Natural Rubber (NR) or Chloroprene Rubber (CR) and IS: 2062 internal steel laminates.
            </p>
        </div>

        <!-- Quick Jump Navigation Filter Bar -->
        <div class="d-flex flex-wrap justify-content-center gap-2 mb-4 pb-2 wow fadeInUp" data-wow-delay=".15s">
            <a href="#type-a" class="bearing-nav-pill"><i class="fa-solid fa-layer-group text-primary"></i> Type A</a>
            <a href="#type-b" class="bearing-nav-pill"><i class="fa-solid fa-shield-halved text-primary"></i> Type B</a>
            <a href="#type-c" class="bearing-nav-pill"><i class="fa-solid fa-compress text-primary"></i> Type C</a>
            <a href="#type-d" class="bearing-nav-pill"><i class="fa-solid fa-cubes text-primary"></i> Type D</a>
            <a href="#type-e" class="bearing-nav-pill"><i class="fa-solid fa-square-binary text-primary"></i> Type E</a>
            <a href="#type-f" class="bearing-nav-pill"><i class="fa-solid fa-anchor text-primary"></i> Type F</a>
            <a href="#type-g" class="bearing-nav-pill"><i class="fa-solid fa-gauge-high text-primary"></i> Type G</a>
            <a href="#type-h" class="bearing-nav-pill"><i class="fa-solid fa-arrows-left-right text-primary"></i> Type H</a>
            <a href="#type-i" class="bearing-nav-pill"><i class="fa-solid fa-wave-square text-primary"></i> Type I</a>
            <a href="#type-rdso" class="bearing-nav-pill"><i class="fa-solid fa-train text-primary"></i> Type RDSO</a>
            <a href="#pot-ptfe" class="bearing-nav-pill"><i class="fa-solid fa-circle-dot text-primary"></i> POT / PTFE</a>
            <a href="#rubber-bunk" class="bearing-nav-pill"><i class="fa-solid fa-cube text-primary"></i> Rubber Bunk</a>
            <a href="#locator" class="bearing-nav-pill"><i class="fa-solid fa-crosshairs text-primary"></i> Locator</a>
        </div>

        <!-- IRC:83 Master Classification Reference Box -->
        <div class="mb-5 wow fadeInUp" data-wow-delay=".2s">
            <div class="irc-table-box p-3 p-md-4 shadow-sm">
                <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-3">
                    <div>
                        <span class="badge px-3 py-1 rounded-pill small fw-bold text-uppercase" style="background: var(--theme-subtle); color: var(--theme-primary);">
                            <i class="fa-solid fa-table me-1"></i> Technical Reference Specification
                        </span>
                        <h4 class="fw-bold text-dark mb-0 mt-1" style="font-family:'Oswald', sans-serif; font-size:22px;">
                            IRC:83 (Part-II) Bearing Types Classification (Type A to Type I)
                        </h4>
                    </div>
                    <button type="button" class="btn btn-outline-primary btn-sm rounded-pill px-3 fw-bold open-bearing-modal-btn"
                        data-img-src="assets/img/bearings/irc83-types-table.png"
                        data-img-title="IRC:83 (Part-II) Bearing Types Classification Table (Type A to Type I)">
                        <i class="fa-solid fa-magnifying-glass-plus me-1"></i> Expand Table Diagram
                    </button>
                </div>
                <div class="text-center bg-light rounded-3 p-2 overflow-hidden open-bearing-modal-btn" 
                    role="button"
                    tabindex="0"
                    data-img-src="assets/img/bearings/irc83-types-table.png"
                    data-img-title="IRC:83 (Part-II) Bearing Types Classification Table (Type A to Type I)">
                    <img src="assets/img/bearings/irc83-types-table.png" alt="IRC:83 (Part-II) Bearing Types Classification Table (Type A to Type I)" class="img-fluid rounded" style="max-height: 260px; width: auto; object-fit: contain;">
                    <div class="small text-muted mt-2"><i class="fa-solid fa-hand-pointer text-primary me-1"></i>Click table image to view full high-resolution specifications</div>
                </div>
            </div>
        </div>

        <!-- ============================================================
             Product 01: Type A Plain Pad / Strip Bearings
             ============================================================ -->
        <div class="card border-0 rounded-4 shadow-sm mb-5 overflow-hidden product-item-card wow fadeInUp" id="type-a" data-wow-delay=".15s">
            <div class="row g-0 align-items-center">
                <div class="col-lg-6 p-4 p-md-5">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <span class="badge rounded-pill px-3 py-1.5 fw-bold text-uppercase"
                            style="background: var(--theme-subtle); color: var(--theme-primary); font-size: 12px; letter-spacing: 1px;">
                            Type A
                        </span>
                        <span class="badge bg-light text-secondary rounded-pill px-3 py-1.5 border small fw-semibold">
                            <i class="fa-solid fa-certificate text-primary me-1"></i> Solid Elastomer
                        </span>
                    </div>

                    <h3 class="fw-bold text-dark mb-3" style="font-family: 'Oswald', sans-serif; font-size: 26px;">
                        Type A: Plain Pad / Strip Bearings
                    </h3>
                    
                    <p class="text-secondary mb-4" style="font-size: 14.5px; line-height: 1.8;">
                        Plain pad and strip bearings are solid elastomeric bearings without internal reinforcing plates. They are used for simple support conditions where vertical loads, rotation and limited translational movement need to be accommodated. For seismic applications, the bearing and its associated structural connections are designed according to the required seismic force-transfer arrangement.
                    </p>

                    <!-- Technical Specs Chips -->
                    <div class="row g-3 mb-4">
                        <div class="col-sm-6">
                            <div class="spec-box h-100">
                                <div class="d-flex align-items-center mb-1">
                                    <i class="fa-solid fa-code me-2" style="color: var(--theme-primary);"></i>
                                    <h6 class="fw-bold mb-0" style="font-size: 13.5px; color: var(--theme-primary);">Design Standard</h6>
                                </div>
                                <small class="text-muted d-block" style="font-size: 12.5px;">IRC:83-2018 (Part-II), MoRTH Sec 2000</small>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="spec-box h-100">
                                <div class="d-flex align-items-center mb-1">
                                    <i class="fa-solid fa-layer-group me-2" style="color: var(--theme-primary);"></i>
                                    <h6 class="fw-bold mb-0" style="font-size: 13.5px; color: var(--theme-primary);">Polymer Grade</h6>
                                </div>
                                <small class="text-muted d-block" style="font-size: 12.5px;">High-grade Natural Rubber (NR) / CR</small>
                            </div>
                        </div>
                    </div>

                    <!-- Applications List -->
                    <h6 class="fw-bold text-dark mb-2" style="font-size: 13.5px; text-transform: uppercase; letter-spacing: 0.5px;">
                        Typical Applications:
                    </h6>
                    <ul class="list-unstyled mb-4 text-secondary" style="font-size: 14px; line-height: 1.9;">
                        <li class="d-flex align-items-start mb-1">
                            <i class="fa-solid fa-circle-check me-2 mt-1" style="color: var(--theme-primary);"></i>
                            <span>Bridge and flyover simple span supports</span>
                        </li>
                        <li class="d-flex align-items-start mb-1">
                            <i class="fa-solid fa-circle-check me-2 mt-1" style="color: var(--theme-primary);"></i>
                            <span>Simple structural support arrangements</span>
                        </li>
                        <li class="d-flex align-items-start mb-1">
                            <i class="fa-solid fa-circle-check me-2 mt-1" style="color: var(--theme-primary);"></i>
                            <span>Strip bearing applications over continuous support lines &amp; precast slabs</span>
                        </li>
                        <li class="d-flex align-items-start mb-1">
                            <i class="fa-solid fa-circle-check me-2 mt-1" style="color: var(--theme-primary);"></i>
                            <span>Locations requiring accommodation of rotation and limited movement</span>
                        </li>
                        <li class="d-flex align-items-start">
                            <i class="fa-solid fa-circle-check me-2 mt-1" style="color: var(--theme-primary);"></i>
                            <span>Structures where separate structural connections are provided for seismic force transfer</span>
                        </li>
                    </ul>

                    <a href="contact.php?product=Type-A-Plain-Pad" class="btn btn-primary rounded-pill px-4 py-2.5 fw-bold shadow-sm d-inline-flex align-items-center gap-2"
                        style="background: var(--theme-primary); border-color: var(--theme-primary); font-size: 13.5px;">
                        <span>Request Inquiry for Type A</span>
                        <i class="fa-solid fa-arrow-right" style="font-size: 12px;"></i>
                    </a>
                </div>

                <div class="col-lg-6 p-4 p-lg-5">
                    <div class="product-img-wrapper shadow-sm open-bearing-modal-btn"
                        role="button"
                        tabindex="0"
                        data-img-src="assets/pp_data/Page%2002/Bearing%20types/TYPE-A-PAD.png"
                        data-img-title="Type A: Plain Pad / Strip Bearings">
                        <img src="assets/pp_data/Page%2002/Bearing%20types/TYPE-A-PAD.png" alt="Type A Plain Pad Bearing - Polymer Products"
                            class="img-fluid product-img-zoom">
                        <span class="product-img-overlay-btn"><i class="fa-solid fa-magnifying-glass-plus me-1"></i> View</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ============================================================
             Product 02: Type B Laminated Bearings
             ============================================================ -->
        <div class="card border-0 rounded-4 shadow-sm mb-5 overflow-hidden product-item-card wow fadeInUp" id="type-b" data-wow-delay=".2s">
            <div class="row g-0 align-items-center flex-lg-row-reverse">
                <div class="col-lg-6 p-4 p-md-5">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <span class="badge rounded-pill px-3 py-1.5 fw-bold text-uppercase"
                            style="background: var(--theme-subtle); color: var(--theme-primary); font-size: 12px; letter-spacing: 1px;">
                            Type B
                        </span>
                        <span class="badge bg-light text-secondary rounded-pill px-3 py-1.5 border small fw-semibold">
                            <i class="fa-solid fa-shield-halved text-primary me-1"></i> Steel Reinforced
                        </span>
                    </div>

                    <h3 class="fw-bold text-dark mb-3" style="font-family: 'Oswald', sans-serif; font-size: 26px;">
                        Type B: Laminated Elastomeric Bearings
                    </h3>
                    
                    <p class="text-secondary mb-4" style="font-size: 14.5px; line-height: 1.8;">
                        Laminated bearings consist of alternating layers of elastomer and steel reinforcement bonded together during vulcanisation. The internal steel laminates restrain the lateral expansion of the elastomer, allowing the bearing to support vertical loads while accommodating rotation and movement.
                    </p>

                    <!-- Technical Specs Chips -->
                    <div class="row g-3 mb-4">
                        <div class="col-sm-6">
                            <div class="spec-box h-100">
                                <div class="d-flex align-items-center mb-1">
                                    <i class="fa-solid fa-shield-halved me-2" style="color: var(--theme-primary);"></i>
                                    <h6 class="fw-bold mb-0" style="font-size: 13.5px; color: var(--theme-primary);">Steel Laminates</h6>
                                </div>
                                <small class="text-muted d-block" style="font-size: 12.5px;">IS: 2062 / IS: 1079 Yield &ge; 250 MPa</small>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="spec-box h-100">
                                <div class="d-flex align-items-center mb-1">
                                    <i class="fa-solid fa-cubes me-2" style="color: var(--theme-primary);"></i>
                                    <h6 class="fw-bold mb-0" style="font-size: 13.5px; color: var(--theme-primary);">Standard Use</h6>
                                </div>
                                <small class="text-muted d-block" style="font-size: 12.5px;">Universal Highway &amp; Railway Bearings</small>
                            </div>
                        </div>
                    </div>

                    <!-- Applications List -->
                    <h6 class="fw-bold text-dark mb-2" style="font-size: 13.5px; text-transform: uppercase; letter-spacing: 0.5px;">
                        Typical Applications:
                    </h6>
                    <ul class="list-unstyled mb-4 text-secondary" style="font-size: 14px; line-height: 1.9;">
                        <li class="d-flex align-items-start mb-1">
                            <i class="fa-solid fa-circle-check me-2 mt-1" style="color: var(--theme-primary);"></i>
                            <span>Highway and road bridges</span>
                        </li>
                        <li class="d-flex align-items-start mb-1">
                            <i class="fa-solid fa-circle-check me-2 mt-1" style="color: var(--theme-primary);"></i>
                            <span>Railway bridges</span>
                        </li>
                        <li class="d-flex align-items-start mb-1">
                            <i class="fa-solid fa-circle-check me-2 mt-1" style="color: var(--theme-primary);"></i>
                            <span>Flyovers and viaducts</span>
                        </li>
                        <li class="d-flex align-items-start mb-1">
                            <i class="fa-solid fa-circle-check me-2 mt-1" style="color: var(--theme-primary);"></i>
                            <span>Metro and other elevated infrastructure</span>
                        </li>
                        <li class="d-flex align-items-start">
                            <i class="fa-solid fa-circle-check me-2 mt-1" style="color: var(--theme-primary);"></i>
                            <span>Bridge supports subjected to vertical loads, rotation and horizontal movement</span>
                        </li>
                    </ul>

                    <a href="contact.php?product=Type-B-Laminated" class="btn btn-primary rounded-pill px-4 py-2.5 fw-bold shadow-sm d-inline-flex align-items-center gap-2"
                        style="background: var(--theme-primary); border-color: var(--theme-primary); font-size: 13.5px;">
                        <span>Request Inquiry for Type B</span>
                        <i class="fa-solid fa-arrow-right" style="font-size: 12px;"></i>
                    </a>
                </div>

                <div class="col-lg-6 p-4 p-lg-5">
                    <div class="product-img-wrapper shadow-sm open-bearing-modal-btn"
                        role="button"
                        tabindex="0"
                        data-img-src="assets/img/img/banner/type-b.webp"
                        data-img-title="Type B: Laminated Elastomeric Bearings">
                        <img src="assets/img/img/banner/type-b.webp" alt="Type B Laminated Elastomeric Bearing - Polymer Products"
                            class="img-fluid product-img-zoom">
                        <span class="product-img-overlay-btn"><i class="fa-solid fa-magnifying-glass-plus me-1"></i> View</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ============================================================
             Product 03: Type C Laminated with Thicker End Laminates
             ============================================================ -->
        <div class="card border-0 rounded-4 shadow-sm mb-5 overflow-hidden product-item-card wow fadeInUp" id="type-c" data-wow-delay=".25s">
            <div class="row g-0 align-items-center">
                <div class="col-lg-6 p-4 p-md-5">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <span class="badge rounded-pill px-3 py-1.5 fw-bold text-uppercase"
                            style="background: var(--theme-subtle); color: var(--theme-primary); font-size: 12px; letter-spacing: 1px;">
                            Type C
                        </span>
                        <span class="badge bg-light text-secondary rounded-pill px-3 py-1.5 border small fw-semibold">
                            <i class="fa-solid fa-compress text-primary me-1"></i> Thicker End Laminates
                        </span>
                    </div>

                    <h3 class="fw-bold text-dark mb-3" style="font-family: 'Oswald', sans-serif; font-size: 26px;">
                        Type C: Laminated Bearings with Thicker End Laminates
                    </h3>
                    
                    <p class="text-secondary mb-4" style="font-size: 14.5px; line-height: 1.8;">
                        Type C bearings incorporate thicker end laminates on one side or both sides of the bearing. This arrangement provides improved load distribution and rotation characteristics and helps avoid back lifting of the bearing edges under high shear displacement.
                    </p>

                    <!-- Bullet Features as presented in Technical Presentation -->
                    <div class="p-3 bg-light rounded-3 border mb-4">
                        <h6 class="fw-bold text-dark mb-2" style="font-size: 13.5px; text-transform: uppercase; letter-spacing: 0.5px;">
                            Key Technical Characteristics (IRC:83):
                        </h6>
                        <ul class="list-unstyled mb-0 text-secondary" style="font-size: 14px; line-height: 1.9;">
                            <li class="d-flex align-items-start mb-1">
                                <i class="fa-solid fa-angle-right text-primary me-2 mt-1"></i>
                                <span><strong>Laminate may be on either side or on both sides.</strong></span>
                            </li>
                            <li class="d-flex align-items-start mb-1">
                                <i class="fa-solid fa-angle-right text-primary me-2 mt-1"></i>
                                <span><strong>Ensures better load distribution</strong> across the bearing plinth.</span>
                            </li>
                            <li class="d-flex align-items-start mb-1">
                                <i class="fa-solid fa-angle-right text-primary me-2 mt-1"></i>
                                <span><strong>Ensures better rotation</strong> under dynamic service loads.</span>
                            </li>
                            <li class="d-flex align-items-start">
                                <i class="fa-solid fa-angle-right text-primary me-2 mt-1"></i>
                                <span><strong>Back lifting of bearing under shear may be avoided.</strong></span>
                            </li>
                        </ul>
                    </div>

                    <a href="contact.php?product=Type-C-Thicker-End" class="btn btn-primary rounded-pill px-4 py-2.5 fw-bold shadow-sm d-inline-flex align-items-center gap-2"
                        style="background: var(--theme-primary); border-color: var(--theme-primary); font-size: 13.5px;">
                        <span>Request Inquiry for Type C</span>
                        <i class="fa-solid fa-arrow-right" style="font-size: 12px;"></i>
                    </a>
                </div>

                <div class="col-lg-6 p-4 p-lg-5">
                    <div class="product-img-wrapper shadow-sm open-bearing-modal-btn"
                        role="button"
                        tabindex="0"
                        data-img-src="assets/img/bearings/slide-type-c.png"
                        data-img-title="Type C: Laminated Bearings with Thicker End Laminates">
                        <img src="assets/img/bearings/slide-type-c.png" alt="Type C Laminated Bearing with Thicker End Laminates - Polymer Products"
                            class="img-fluid product-img-zoom">
                        <span class="product-img-overlay-btn"><i class="fa-solid fa-magnifying-glass-plus me-1"></i> View Diagram</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ============================================================
             Product 04: Type D Laminated Bearings with Thicker End Laminates Exposed
             ============================================================ -->
        <div class="card border-0 rounded-4 shadow-sm mb-5 overflow-hidden product-item-card wow fadeInUp" id="type-d" data-wow-delay=".25s">
            <div class="row g-0 align-items-center flex-lg-row-reverse">
                <div class="col-lg-6 p-4 p-md-5">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <span class="badge rounded-pill px-3 py-1.5 fw-bold text-uppercase"
                            style="background: var(--theme-subtle); color: var(--theme-primary); font-size: 12px; letter-spacing: 1px;">
                            Type D
                        </span>
                        <span class="badge bg-light text-secondary rounded-pill px-3 py-1.5 border small fw-semibold">
                            <i class="fa-solid fa-cubes text-primary me-1"></i> Exposed End Laminates
                        </span>
                    </div>

                    <h3 class="fw-bold text-dark mb-3" style="font-family: 'Oswald', sans-serif; font-size: 26px;">
                        Type D: Laminated Bearings with Thicker End Laminates Exposed
                    </h3>
                    
                    <p class="text-secondary mb-4" style="font-size: 14.5px; line-height: 1.8;">
                        Type D bearings feature thicker end laminates exposed on the bearing surface. This engineered configuration is particularly suitable for direct contact with structural steelwork, providing increased frictional resistance at the bearing-structure interface.
                    </p>

                    <!-- Bullet Features as presented in Technical Presentation -->
                    <div class="p-3 bg-light rounded-3 border mb-4">
                        <h6 class="fw-bold text-dark mb-2" style="font-size: 13.5px; text-transform: uppercase; letter-spacing: 0.5px;">
                            Key Technical Characteristics (IRC:83):
                        </h6>
                        <ul class="list-unstyled mb-0 text-secondary" style="font-size: 14px; line-height: 1.9;">
                            <li class="d-flex align-items-start mb-1">
                                <i class="fa-solid fa-angle-right text-primary me-2 mt-1"></i>
                                <span><strong>Corrosion protection is required</strong> on exposed steel surface.</span>
                            </li>
                            <li class="d-flex align-items-start mb-1">
                                <i class="fa-solid fa-angle-right text-primary me-2 mt-1"></i>
                                <span><strong>May be useful for better frictional resistance</strong> at bearing-structure interface.</span>
                            </li>
                            <li class="d-flex align-items-start mb-1">
                                <i class="fa-solid fa-angle-right text-primary me-2 mt-1"></i>
                                <span><strong>Friction, if taken into account,</strong> should be based on tested and certified value.</span>
                            </li>
                            <li class="d-flex align-items-start">
                                <i class="fa-solid fa-angle-right text-primary me-2 mt-1"></i>
                                <span><strong>Useful for contact with steel structure.</strong></span>
                            </li>
                        </ul>
                    </div>

                    <a href="contact.php?product=Type-D-Exposed-End-Laminates" class="btn btn-primary rounded-pill px-4 py-2.5 fw-bold shadow-sm d-inline-flex align-items-center gap-2"
                        style="background: var(--theme-primary); border-color: var(--theme-primary); font-size: 13.5px;">
                        <span>Request Inquiry for Type D</span>
                        <i class="fa-solid fa-arrow-right" style="font-size: 12px;"></i>
                    </a>
                </div>

                <div class="col-lg-6 p-4 p-lg-5">
                    <div class="product-img-wrapper shadow-sm open-bearing-modal-btn"
                        role="button"
                        tabindex="0"
                        data-img-src="assets/img/bearings/slide-type-d.png"
                        data-img-title="Type D: Laminated Bearings with Thicker End Laminates Exposed">
                        <img src="assets/img/bearings/slide-type-d.png" alt="Type D Laminated Bearing with Thicker End Laminates Exposed - Polymer Products"
                            class="img-fluid product-img-zoom">
                        <span class="product-img-overlay-btn"><i class="fa-solid fa-magnifying-glass-plus me-1"></i> View Diagram</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ============================================================
             Product 05: Type E Bearings with Separate Steel Plate Directly Vulcanised
             ============================================================ -->
        <div class="card border-0 rounded-4 shadow-sm mb-5 overflow-hidden product-item-card wow fadeInUp" id="type-e" data-wow-delay=".25s">
            <div class="row g-0 align-items-center">
                <div class="col-lg-6 p-4 p-md-5">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <span class="badge rounded-pill px-3 py-1.5 fw-bold text-uppercase"
                            style="background: var(--theme-subtle); color: var(--theme-primary); font-size: 12px; letter-spacing: 1px;">
                            Type E
                        </span>
                        <span class="badge bg-light text-secondary rounded-pill px-3 py-1.5 border small fw-semibold">
                            <i class="fa-solid fa-square-binary text-primary me-1"></i> Directly Vulcanised Plate
                        </span>
                    </div>

                    <h3 class="fw-bold text-dark mb-3" style="font-family: 'Oswald', sans-serif; font-size: 26px;">
                        Type E: Bearings with Separate Steel Plate Directly Vulcanised with the Bearing
                    </h3>
                    
                    <p class="text-secondary mb-4" style="font-size: 14.5px; line-height: 1.8;">
                        Type E bearings feature a separate external steel plate integrally bonded and directly vulcanised with the bearing body under high temperature and hydraulic pressure. This configuration facilitates bolted connections and structural integration while maintaining elastomer-to-steel integrity.
                    </p>

                    <!-- Bullet Features as presented in Technical Presentation -->
                    <div class="p-3 bg-light rounded-3 border mb-4">
                        <h6 class="fw-bold text-dark mb-2" style="font-size: 13.5px; text-transform: uppercase; letter-spacing: 0.5px;">
                            Key Technical Requirements (IRC:83):
                        </h6>
                        <ul class="list-unstyled mb-0 text-secondary" style="font-size: 14px; line-height: 1.9;">
                            <li class="d-flex align-items-start mb-1">
                                <i class="fa-solid fa-angle-right text-primary me-2 mt-1"></i>
                                <span><strong>Separate steel plate directly vulcanised</strong> with the bearing.</span>
                            </li>
                            <li class="d-flex align-items-start mb-1">
                                <i class="fa-solid fa-angle-right text-primary me-2 mt-1"></i>
                                <span><strong>Lifting / separation of bearing elastomer at edges</strong> from exposed steel plate should be avoided under all loading.</span>
                            </li>
                            <li class="d-flex align-items-start mb-1">
                                <i class="fa-solid fa-angle-right text-primary me-2 mt-1"></i>
                                <span>Rigid vulcanised bonding resisting longitudinal braking and tractive forces.</span>
                            </li>
                            <li class="d-flex align-items-start">
                                <i class="fa-solid fa-angle-right text-primary me-2 mt-1"></i>
                                <span>Suitable for composite steel girders, railway bridges, and precast beam supports.</span>
                            </li>
                        </ul>
                    </div>

                    <a href="contact.php?product=Type-E-Vulcanised-Plate" class="btn btn-primary rounded-pill px-4 py-2.5 fw-bold shadow-sm d-inline-flex align-items-center gap-2"
                        style="background: var(--theme-primary); border-color: var(--theme-primary); font-size: 13.5px;">
                        <span>Request Inquiry for Type E</span>
                        <i class="fa-solid fa-arrow-right" style="font-size: 12px;"></i>
                    </a>
                </div>

                <div class="col-lg-6 p-4 p-lg-5">
                    <div class="product-img-wrapper shadow-sm open-bearing-modal-btn"
                        role="button"
                        tabindex="0"
                        data-img-src="assets/img/bearings/slide-type-e.png"
                        data-img-title="Type E: Bearings with Separate Steel Plate Directly Vulcanised">
                        <img src="assets/img/bearings/slide-type-e.png" alt="Type E Bearing with Separate Steel Plate Directly Vulcanised - Polymer Products"
                            class="img-fluid product-img-zoom">
                        <span class="product-img-overlay-btn"><i class="fa-solid fa-magnifying-glass-plus me-1"></i> View Diagram</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ============================================================
             Product 06: Type F Bearings with Positive Anchorage
             ============================================================ -->
        <div class="card border-0 rounded-4 shadow-sm mb-5 overflow-hidden product-item-card wow fadeInUp" id="type-f" data-wow-delay=".3s">
            <div class="row g-0 align-items-center flex-lg-row-reverse">
                <div class="col-lg-6 p-4 p-md-5">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <span class="badge rounded-pill px-3 py-1.5 fw-bold text-uppercase"
                            style="background: var(--theme-subtle); color: var(--theme-primary); font-size: 12px; letter-spacing: 1px;">
                            Type F
                        </span>
                        <span class="badge bg-light text-secondary rounded-pill px-3 py-1.5 border small fw-semibold">
                            <i class="fa-solid fa-anchor text-primary me-1"></i> Positive Anchorage
                        </span>
                    </div>

                    <h3 class="fw-bold text-dark mb-3" style="font-family: 'Oswald', sans-serif; font-size: 26px;">
                        Type F: Bearings with Positive Anchorage
                    </h3>
                    
                    <p class="text-secondary mb-4" style="font-size: 14.5px; line-height: 1.8;">
                        Type F bearings incorporate positive anchorage through separate plates and suitable internal fastening arrangements. This provides positive location and restraint of the bearing, while the separate plate arrangement can also facilitate bearing replacement. The anchorage and fastening arrangement are designed to provide adequate positive location.
                    </p>

                    <!-- Bullet Features as presented in Technical Presentation -->
                    <div class="p-3 bg-light rounded-3 border mb-4">
                        <h6 class="fw-bold text-dark mb-2" style="font-size: 13.5px; text-transform: uppercase; letter-spacing: 0.5px;">
                            Key Technical Characteristics (IRC:83):
                        </h6>
                        <ul class="list-unstyled mb-0 text-secondary" style="font-size: 14px; line-height: 1.9;">
                            <li class="d-flex align-items-start mb-1">
                                <i class="fa-solid fa-angle-right text-primary me-2 mt-1"></i>
                                <span><strong>Separate plates provide ease of replacement</strong> and fool-proof positive anchorage.</span>
                            </li>
                            <li class="d-flex align-items-start mb-1">
                                <i class="fa-solid fa-angle-right text-primary me-2 mt-1"></i>
                                <span><strong>Plates may be connected</strong> to covered / exposed end laminates.</span>
                            </li>
                            <li class="d-flex align-items-start mb-1">
                                <i class="fa-solid fa-angle-right text-primary me-2 mt-1"></i>
                                <span><strong>Internal fastening and positive means of location</strong> to be adequately designed.</span>
                            </li>
                            <li class="d-flex align-items-start">
                                <i class="fa-solid fa-angle-right text-primary me-2 mt-1"></i>
                                <span>Prevents bearing walking and facilitates future maintenance / replacement jacking.</span>
                            </li>
                        </ul>
                    </div>

                    <a href="contact.php?product=Type-F-Positive-Anchorage" class="btn btn-primary rounded-pill px-4 py-2.5 fw-bold shadow-sm d-inline-flex align-items-center gap-2"
                        style="background: var(--theme-primary); border-color: var(--theme-primary); font-size: 13.5px;">
                        <span>Request Inquiry for Type F</span>
                        <i class="fa-solid fa-arrow-right" style="font-size: 12px;"></i>
                    </a>
                </div>

                <div class="col-lg-6 p-4 p-lg-5">
                    <div class="product-img-wrapper shadow-sm open-bearing-modal-btn"
                        role="button"
                        tabindex="0"
                        data-img-src="assets/img/bearings/slide-type-f.png"
                        data-img-title="Type F: Bearings with Positive Anchorage">
                        <img src="assets/img/bearings/slide-type-f.png" alt="Type F Bearing with Positive Anchorage - Polymer Products"
                            class="img-fluid product-img-zoom">
                        <span class="product-img-overlay-btn"><i class="fa-solid fa-magnifying-glass-plus me-1"></i> View Diagram</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ============================================================
             Product 07: Type G Bearings with PTFE Bonded to the Elastomer
             ============================================================ -->
        <div class="card border-0 rounded-4 shadow-sm mb-5 overflow-hidden product-item-card wow fadeInUp" id="type-g" data-wow-delay=".3s">
            <div class="row g-0 align-items-center">
                <div class="col-lg-6 p-4 p-md-5">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <span class="badge rounded-pill px-3 py-1.5 fw-bold text-uppercase"
                            style="background: var(--theme-subtle); color: var(--theme-primary); font-size: 12px; letter-spacing: 1px;">
                            Type G
                        </span>
                        <span class="badge bg-light text-secondary rounded-pill px-3 py-1.5 border small fw-semibold">
                            <i class="fa-solid fa-gauge-high text-primary me-1"></i> PTFE Bonded
                        </span>
                    </div>

                    <h3 class="fw-bold text-dark mb-3" style="font-family: 'Oswald', sans-serif; font-size: 26px;">
                        Type G: Bearings with PTFE Bonded to the Elastomer
                    </h3>
                    
                    <p class="text-secondary mb-4" style="font-size: 14.5px; line-height: 1.8;">
                        Type G bearings feature virgin dimpled Polytetrafluoroethylene (PTFE) bonded directly to the elastomeric bearing during precision factory vulcanisation. This creates a low-friction sliding surface allowing large translational movements while maintaining the angular rotational flexibility of the laminated elastomer.
                    </p>

                    <!-- Bullet Features as presented in Technical Presentation -->
                    <div class="p-3 bg-light rounded-3 border mb-4">
                        <h6 class="fw-bold text-dark mb-2" style="font-size: 13.5px; text-transform: uppercase; letter-spacing: 0.5px;">
                            Key Technical Considerations (IRC:83):
                        </h6>
                        <ul class="list-unstyled mb-0 text-secondary" style="font-size: 14px; line-height: 1.9;">
                            <li class="d-flex align-items-start mb-1">
                                <i class="fa-solid fa-angle-right text-primary me-2 mt-1"></i>
                                <span><strong>Bond of elastomer to PTFE is critical and vulnerable</strong> — requires strict factory surface treatment and chemical bonding agents.</span>
                            </li>
                            <li class="d-flex align-items-start mb-1">
                                <i class="fa-solid fa-angle-right text-primary me-2 mt-1"></i>
                                <span><strong>Dimpled virgin PTFE surface</strong> retains silicone lubricant for durable ultra-low coefficient of friction (&mu; &le; 0.03).</span>
                            </li>
                            <li class="d-flex align-items-start mb-1">
                                <i class="fa-solid fa-angle-right text-primary me-2 mt-1"></i>
                                <span>Available in circular and rectangular configurations for highway and railway bridge piers.</span>
                            </li>
                            <li class="d-flex align-items-start">
                                <i class="fa-solid fa-angle-right text-primary me-2 mt-1"></i>
                                <span>Accommodates large thermal displacement in continuous superstructure spans.</span>
                            </li>
                        </ul>
                    </div>

                    <a href="contact.php?product=Type-G-PTFE-Bonded" class="btn btn-primary rounded-pill px-4 py-2.5 fw-bold shadow-sm d-inline-flex align-items-center gap-2"
                        style="background: var(--theme-primary); border-color: var(--theme-primary); font-size: 13.5px;">
                        <span>Request Inquiry for Type G</span>
                        <i class="fa-solid fa-arrow-right" style="font-size: 12px;"></i>
                    </a>
                </div>

                <div class="col-lg-6 p-4 p-lg-5">
                    <div class="product-img-wrapper shadow-sm open-bearing-modal-btn"
                        role="button"
                        tabindex="0"
                        data-img-src="assets/img/bearings/slide-type-g.png"
                        data-img-title="Type G: Bearings with PTFE Bonded to the Elastomer">
                        <img src="assets/img/bearings/slide-type-g.png" alt="Type G PTFE Bonded Bearing - Polymer Products"
                            class="img-fluid product-img-zoom">
                        <span class="product-img-overlay-btn"><i class="fa-solid fa-magnifying-glass-plus me-1"></i> View Diagram</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ============================================================
             Product 08: Type H Bearings with Sliding Interface
             ============================================================ -->
        <div class="card border-0 rounded-4 shadow-sm mb-5 overflow-hidden product-item-card wow fadeInUp" id="type-h" data-wow-delay=".3s">
            <div class="row g-0 align-items-center flex-lg-row-reverse">
                <div class="col-lg-6 p-4 p-md-5">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <span class="badge rounded-pill px-3 py-1.5 fw-bold text-uppercase"
                            style="background: var(--theme-subtle); color: var(--theme-primary); font-size: 12px; letter-spacing: 1px;">
                            Type H
                        </span>
                        <span class="badge bg-light text-secondary rounded-pill px-3 py-1.5 border small fw-semibold">
                            <i class="fa-solid fa-arrows-left-right text-primary me-1"></i> Sliding Interface
                        </span>
                    </div>

                    <h3 class="fw-bold text-dark mb-3" style="font-family: 'Oswald', sans-serif; font-size: 26px;">
                        Type H: Bearings with Sliding Interface
                    </h3>
                    
                    <p class="text-secondary mb-4" style="font-size: 14.5px; line-height: 1.8;">
                        Type H bearings combine an elastomeric bearing with an engineered upper sliding interface assembly. The interface pairs a dimpled PTFE pad with an austenitic stainless steel plate, accommodating multi-directional thermal and service displacements across long bridge viaducts.
                    </p>

                    <!-- Bullet Features as presented in Technical Presentation -->
                    <div class="p-3 bg-light rounded-3 border mb-4">
                        <h6 class="fw-bold text-dark mb-2" style="font-size: 13.5px; text-transform: uppercase; letter-spacing: 0.5px;">
                            Key Technical Requirements (IRC:83):
                        </h6>
                        <ul class="list-unstyled mb-0 text-secondary" style="font-size: 14px; line-height: 1.9;">
                            <li class="d-flex align-items-start mb-1">
                                <i class="fa-solid fa-angle-right text-primary me-2 mt-1"></i>
                                <span><strong>Refer relevant Part covering sliding element</strong> for design of sliding interface.</span>
                            </li>
                            <li class="d-flex align-items-start mb-1">
                                <i class="fa-solid fa-angle-right text-primary me-2 mt-1"></i>
                                <span><strong>Other end may be of any other option as above</strong> (can be combined with Type B, C, or D base).</span>
                            </li>
                            <li class="d-flex align-items-start mb-1">
                                <i class="fa-solid fa-angle-right text-primary me-2 mt-1"></i>
                                <span>Features mirror-polished stainless steel sheet sliding over dimpled PTFE pad.</span>
                            </li>
                            <li class="d-flex align-items-start">
                                <i class="fa-solid fa-angle-right text-primary me-2 mt-1"></i>
                                <span>Accommodates extra-large thermal expansion movements on long prestressed spans.</span>
                            </li>
                        </ul>
                    </div>

                    <a href="contact.php?product=Type-H-Sliding-Interface" class="btn btn-primary rounded-pill px-4 py-2.5 fw-bold shadow-sm d-inline-flex align-items-center gap-2"
                        style="background: var(--theme-primary); border-color: var(--theme-primary); font-size: 13.5px;">
                        <span>Request Inquiry for Type H</span>
                        <i class="fa-solid fa-arrow-right" style="font-size: 12px;"></i>
                    </a>
                </div>

                <div class="col-lg-6 p-4 p-lg-5">
                    <div class="product-img-wrapper shadow-sm open-bearing-modal-btn"
                        role="button"
                        tabindex="0"
                        data-img-src="assets/img/bearings/slide-type-h.png"
                        data-img-title="Type H: Bearings with Sliding Interface">
                        <img src="assets/img/bearings/slide-type-h.png" alt="Type H Bearing with Sliding Interface - Polymer Products"
                            class="img-fluid product-img-zoom">
                        <span class="product-img-overlay-btn"><i class="fa-solid fa-magnifying-glass-plus me-1"></i> View Diagram</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ============================================================
             Product 09: Type I Bearings with Restraint Against Translation
             ============================================================ -->
        <div class="card border-0 rounded-4 shadow-sm mb-5 overflow-hidden product-item-card wow fadeInUp" id="type-i" data-wow-delay=".3s">
            <div class="row g-0 align-items-center">
                <div class="col-lg-6 p-4 p-md-5">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <span class="badge rounded-pill px-3 py-1.5 fw-bold text-uppercase"
                            style="background: var(--theme-subtle); color: var(--theme-primary); font-size: 12px; letter-spacing: 1px;">
                            Type I
                        </span>
                        <span class="badge bg-light text-secondary rounded-pill px-3 py-1.5 border small fw-semibold">
                            <i class="fa-solid fa-wave-square text-primary me-1"></i> Restraint Against Translation
                        </span>
                    </div>

                    <h3 class="fw-bold text-dark mb-3" style="font-family: 'Oswald', sans-serif; font-size: 26px;">
                        Type I: Bearings with Restraint Against Translation to Simulate Support Condition
                    </h3>
                    
                    <p class="text-secondary mb-4" style="font-size: 14.5px; line-height: 1.8;">
                        Type I bearings incorporate mechanical restraints against translation to simulate fixed or guided support conditions in structural bridge analysis. The restraint may be configured as a central high-strength shear pin or external side guide restraints, designed in strict conformity with IRC codes.
                    </p>

                    <!-- Bullet Features as presented in Technical Presentation -->
                    <div class="p-3 bg-light rounded-3 border mb-4">
                        <h6 class="fw-bold text-dark mb-2" style="font-size: 13.5px; text-transform: uppercase; letter-spacing: 0.5px;">
                            Key Technical Provisions (IRC:83):
                        </h6>
                        <ul class="list-unstyled mb-0 text-secondary" style="font-size: 14px; line-height: 1.9;">
                            <li class="d-flex align-items-start mb-1">
                                <i class="fa-solid fa-angle-right text-primary me-2 mt-1"></i>
                                <span><strong>a) Typical detail of restraint in form of central pin.</strong></span>
                            </li>
                            <li class="d-flex align-items-start mb-1">
                                <i class="fa-solid fa-angle-right text-primary me-2 mt-1"></i>
                                <span><strong>b) Typical detail of side restraint.</strong></span>
                            </li>
                            <li class="d-flex align-items-start mb-1">
                                <i class="fa-solid fa-angle-right text-primary me-2 mt-1"></i>
                                <span><strong>Restraints shall be designed based on relevant Part or other relevant IRC code.</strong></span>
                            </li>
                            <li class="d-flex align-items-start">
                                <i class="fa-solid fa-angle-right text-primary me-2 mt-1"></i>
                                <span>Positively restrains lateral or longitudinal seismic and wind force transfer to piers.</span>
                            </li>
                        </ul>
                    </div>

                    <a href="contact.php?product=Type-I-Restrained-Bearing" class="btn btn-primary rounded-pill px-4 py-2.5 fw-bold shadow-sm d-inline-flex align-items-center gap-2"
                        style="background: var(--theme-primary); border-color: var(--theme-primary); font-size: 13.5px;">
                        <span>Request Inquiry for Type I</span>
                        <i class="fa-solid fa-arrow-right" style="font-size: 12px;"></i>
                    </a>
                </div>

                <div class="col-lg-6 p-4 p-lg-5">
                    <div class="product-img-wrapper shadow-sm open-bearing-modal-btn"
                        role="button"
                        tabindex="0"
                        data-img-src="assets/img/bearings/slide-type-i.png"
                        data-img-title="Type I: Bearings with Restraint Against Translation (Central Pin / Side Restraint)">
                        <img src="assets/img/bearings/slide-type-i.png" alt="Type I Restrained Bearing - Polymer Products"
                            class="img-fluid product-img-zoom">
                        <span class="product-img-overlay-btn"><i class="fa-solid fa-magnifying-glass-plus me-1"></i> View Diagram</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ============================================================
             Product 10: Type RDSO Indian Railways Heavy Axle Bearings
             ============================================================ -->
        <div class="card border-0 rounded-4 shadow-sm mb-5 overflow-hidden product-item-card wow fadeInUp" id="type-rdso" data-wow-delay=".35s">
            <div class="row g-0 align-items-center flex-lg-row-reverse">
                <div class="col-lg-6 p-4 p-md-5">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <span class="badge rounded-pill px-3 py-1.5 fw-bold text-uppercase"
                            style="background: rgba(2, 132, 199, 0.12); color: var(--theme-primary); border: 1px solid var(--theme-primary); font-size: 12px; letter-spacing: 1px;">
                            Type RDSO
                        </span>
                        <span class="badge bg-light text-secondary rounded-pill px-3 py-1.5 border small fw-semibold">
                            <i class="fa-solid fa-train text-primary me-1"></i> Indian Railways BS-131
                        </span>
                    </div>

                    <h3 class="fw-bold text-dark mb-3" style="font-family: 'Oswald', sans-serif; font-size: 26px;">
                        Type RDSO: Indian Railways Heavy Axle Bearings
                    </h3>
                    
                    <p class="text-secondary mb-4" style="font-size: 14.5px; line-height: 1.8;">
                        Type RDSO bearings are strictly designed and manufactured in compliance with Indian Railways Research Designs and Standards Organisation specification <strong>RDSO BS-131</strong>. Formulated with 100% virgin chloroprene rubber and heavy internal steel laminates, every bearing undergoes 100% proof load testing at 1.5x design vertical load to withstand heavy 25T &amp; 32.5T freight train impacts.
                    </p>

                    <!-- Technical Specs Chips -->
                    <div class="row g-3 mb-4">
                        <div class="col-sm-6">
                            <div class="spec-box h-100">
                                <div class="d-flex align-items-center mb-1">
                                    <i class="fa-solid fa-weight-hanging me-2" style="color: var(--theme-primary);"></i>
                                    <h6 class="fw-bold mb-0" style="font-size: 13.5px; color: var(--theme-primary);">Axle Load Capacity</h6>
                                </div>
                                <small class="text-muted d-block" style="font-size: 12.5px;">Engineered for 25T &amp; 32.5T Heavy Freight &amp; DFC</small>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="spec-box h-100">
                                <div class="d-flex align-items-center mb-1">
                                    <i class="fa-solid fa-certificate me-2" style="color: var(--theme-primary);"></i>
                                    <h6 class="fw-bold mb-0" style="font-size: 13.5px; color: var(--theme-primary);">Approval Status</h6>
                                </div>
                                <small class="text-muted d-block" style="font-size: 12.5px;">RDSO Approved Vendor &bull; RITES Stage Witness</small>
                            </div>
                        </div>
                    </div>

                    <!-- Applications List -->
                    <h6 class="fw-bold text-dark mb-2" style="font-size: 13.5px; text-transform: uppercase; letter-spacing: 0.5px;">
                        Typical Applications:
                    </h6>
                    <ul class="list-unstyled mb-4 text-secondary" style="font-size: 14px; line-height: 1.9;">
                        <li class="d-flex align-items-start mb-1">
                            <i class="fa-solid fa-circle-check me-2 mt-1" style="color: var(--theme-primary);"></i>
                            <span>Indian Railways steel plate girder and open web truss bridge spans</span>
                        </li>
                        <li class="d-flex align-items-start mb-1">
                            <i class="fa-solid fa-circle-check me-2 mt-1" style="color: var(--theme-primary);"></i>
                            <span>Railway Over Bridges (ROBs) and Railway Under Bridges (RUBs)</span>
                        </li>
                        <li class="d-flex align-items-start mb-1">
                            <i class="fa-solid fa-circle-check me-2 mt-1" style="color: var(--theme-primary);"></i>
                            <span>Dedicated Freight Corridor (Western &amp; Eastern DFC) heavy haul tracks</span>
                        </li>
                        <li class="d-flex align-items-start">
                            <i class="fa-solid fa-circle-check me-2 mt-1" style="color: var(--theme-primary);"></i>
                            <span>Prestressed concrete (PSC) girder and composite railway bridge superstructures</span>
                        </li>
                    </ul>

                    <a href="contact.php?product=Type-RDSO-Railway" class="btn btn-primary rounded-pill px-4 py-2.5 fw-bold shadow-sm d-inline-flex align-items-center gap-2"
                        style="background: var(--theme-primary); border-color: var(--theme-primary); font-size: 13.5px;">
                        <span>Request Inquiry for RDSO Bearings</span>
                        <i class="fa-solid fa-arrow-right" style="font-size: 12px;"></i>
                    </a>
                </div>

                <div class="col-lg-6 p-4 p-lg-5">
                    <div class="product-img-wrapper shadow-sm open-bearing-modal-btn"
                        role="button"
                        tabindex="0"
                        data-img-src="assets/img/bearings/type-rdso.jpg"
                        data-img-title="Type RDSO: Indian Railways Heavy Axle Bearings">
                        <img src="assets/img/bearings/type-rdso.jpg" alt="Type RDSO Railway Heavy Axle Bearing - Polymer Products"
                            class="img-fluid product-img-zoom">
                        <span class="product-img-overlay-btn"><i class="fa-solid fa-magnifying-glass-plus me-1"></i> View</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ============================================================
             Product 11: POT / PTFE Bearings (Fixed, Guided & Free Sliding)
             ============================================================ -->
        <div class="card border-0 rounded-4 shadow-sm mb-5 overflow-hidden product-item-card wow fadeInUp" id="pot-ptfe" data-wow-delay=".35s">
            <div class="row g-0 align-items-center">
                <div class="col-lg-6 p-4 p-md-5">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <span class="badge rounded-pill px-3 py-1.5 fw-bold text-uppercase"
                            style="background: var(--theme-subtle); color: var(--theme-primary); font-size: 12px; letter-spacing: 1px;">
                            POT / PTFE
                        </span>
                        <span class="badge bg-light text-secondary rounded-pill px-3 py-1.5 border small fw-semibold">
                            <i class="fa-solid fa-circle-dot text-primary me-1"></i> High Load Capacity
                        </span>
                    </div>

                    <h3 class="fw-bold text-dark mb-3" style="font-family: 'Oswald', sans-serif; font-size: 26px;">
                        POT / PTFE PAD Bearings (Fixed, Guided &amp; Free)
                    </h3>
                    
                    <p class="text-secondary mb-4" style="font-size: 14.5px; line-height: 1.8;">
                        POT-PTFE bearings are engineered for exceptional vertical load capacities ranging from 1,000 kN to over 50,000 kN. The bearing confines an elastomeric disc within a heavy machined steel pot cylinder, causing it to act as an incompressible hydraulic fluid permitting multi-directional rotation. For sliding requirements, an integrated dimpled PTFE disc pairs with mirror-polished austenitic stainless steel.
                    </p>

                    <!-- Technical Specs Chips -->
                    <div class="row g-3 mb-4">
                        <div class="col-sm-6">
                            <div class="spec-box h-100">
                                <div class="d-flex align-items-center mb-1">
                                    <i class="fa-solid fa-weight-scale me-2" style="color: var(--theme-primary);"></i>
                                    <h6 class="fw-bold mb-0" style="font-size: 13.5px; color: var(--theme-primary);">Vertical Capacity</h6>
                                </div>
                                <small class="text-muted d-block" style="font-size: 12.5px;">1,000 kN to 50,000+ kN Ultra-Heavy Duty</small>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="spec-box h-100">
                                <div class="d-flex align-items-center mb-1">
                                    <i class="fa-solid fa-book-bookmark me-2" style="color: var(--theme-primary);"></i>
                                    <h6 class="fw-bold mb-0" style="font-size: 13.5px; color: var(--theme-primary);">Governing Code</h6>
                                </div>
                                <small class="text-muted d-block" style="font-size: 12.5px;">IRC:83 (Part III) 2018 &bull; MoRTH Sec 2000</small>
                            </div>
                        </div>
                    </div>

                    <!-- Applications List -->
                    <h6 class="fw-bold text-dark mb-2" style="font-size: 13.5px; text-transform: uppercase; letter-spacing: 0.5px;">
                        Typical Applications:
                    </h6>
                    <ul class="list-unstyled mb-4 text-secondary" style="font-size: 14px; line-height: 1.9;">
                        <li class="d-flex align-items-start mb-1">
                            <i class="fa-solid fa-circle-check me-2 mt-1" style="color: var(--theme-primary);"></i>
                            <span>Long-span bridges, cable-stayed structures, and major sea/river viaducts</span>
                        </li>
                        <li class="d-flex align-items-start mb-1">
                            <i class="fa-solid fa-circle-check me-2 mt-1" style="color: var(--theme-primary);"></i>
                            <span>Heavy railway bridges requiring high vertical reactions with compact footprint</span>
                        </li>
                        <li class="d-flex align-items-start mb-1">
                            <i class="fa-solid fa-circle-check me-2 mt-1" style="color: var(--theme-primary);"></i>
                            <span>Flyovers and elevated highway bents subjected to multi-rotational demands</span>
                        </li>
                        <li class="d-flex align-items-start">
                            <i class="fa-solid fa-circle-check me-2 mt-1" style="color: var(--theme-primary);"></i>
                            <span>Heavy industrial gantry tracks, port container cranes, and offshore bridges</span>
                        </li>
                    </ul>

                    <a href="contact.php?product=POT-PTFE-Bearings" class="btn btn-primary rounded-pill px-4 py-2.5 fw-bold shadow-sm d-inline-flex align-items-center gap-2"
                        style="background: var(--theme-primary); border-color: var(--theme-primary); font-size: 13.5px;">
                        <span>Request Inquiry for POT-PTFE</span>
                        <i class="fa-solid fa-arrow-right" style="font-size: 12px;"></i>
                    </a>
                </div>

                <div class="col-lg-6 p-4 p-lg-5">
                    <div class="product-img-wrapper shadow-sm open-bearing-modal-btn"
                        role="button"
                        tabindex="0"
                        data-img-src="assets/img/bearings/pot-ptfe.jpg"
                        data-img-title="POT / PTFE PAD Bearings">
                        <img src="assets/img/bearings/pot-ptfe.jpg" alt="POT PTFE Bridge Bearing Assembly - Polymer Products"
                            class="img-fluid product-img-zoom">
                        <span class="product-img-overlay-btn"><i class="fa-solid fa-magnifying-glass-plus me-1"></i> View</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ============================================================
             Product 12: Rubber Bunk (Buffer & End Bunk Shock Absorber Pads)
             ============================================================ -->
        <div class="card border-0 rounded-4 shadow-sm mb-5 overflow-hidden product-item-card wow fadeInUp" id="rubber-bunk" data-wow-delay=".4s">
            <div class="row g-0 align-items-center flex-lg-row-reverse">
                <div class="col-lg-6 p-4 p-md-5">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <span class="badge rounded-pill px-3 py-1.5 fw-bold text-uppercase"
                            style="background: var(--theme-subtle); color: var(--theme-primary); font-size: 12px; letter-spacing: 1px;">
                            Rubber Bunk
                        </span>
                        <span class="badge bg-light text-secondary rounded-pill px-3 py-1.5 border small fw-semibold">
                            <i class="fa-solid fa-cube text-primary me-1"></i> Buffer &amp; Shock Absorber
                        </span>
                    </div>

                    <h3 class="fw-bold text-dark mb-3" style="font-family: 'Oswald', sans-serif; font-size: 26px;">
                        Rubber Bunk: Buffer &amp; End Bunk Shock Absorber Pads
                    </h3>
                    
                    <p class="text-secondary mb-4" style="font-size: 14.5px; line-height: 1.8;">
                        Rubber Bunk pads are heavy-duty moulded elastomeric buffer blocks designed to absorb high dynamic impact energy at bridge abutments, expansion gap ends, pier caps, and retaining walls. Manufactured from tough abrasion and ozone-resistant rubber compounds, they protect concrete substructures from damage during temperature extremes and braking surges.
                    </p>

                    <!-- Technical Specs Chips -->
                    <div class="row g-3 mb-4">
                        <div class="col-sm-6">
                            <div class="spec-box h-100">
                                <div class="d-flex align-items-center mb-1">
                                    <i class="fa-solid fa-shield me-2" style="color: var(--theme-primary);"></i>
                                    <h6 class="fw-bold mb-0" style="font-size: 13.5px; color: var(--theme-primary);">Energy Absorption</h6>
                                </div>
                                <small class="text-muted d-block" style="font-size: 12.5px;">High damping impact dissipation</small>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="spec-box h-100">
                                <div class="d-flex align-items-center mb-1">
                                    <i class="fa-solid fa-cubes-stacked me-2" style="color: var(--theme-primary);"></i>
                                    <h6 class="fw-bold mb-0" style="font-size: 13.5px; color: var(--theme-primary);">Elastomer Type</h6>
                                </div>
                                <small class="text-muted d-block" style="font-size: 12.5px;">Weather &amp; UV resistant vulcanized block</small>
                            </div>
                        </div>
                    </div>

                    <!-- Applications List -->
                    <h6 class="fw-bold text-dark mb-2" style="font-size: 13.5px; text-transform: uppercase; letter-spacing: 0.5px;">
                        Typical Applications:
                    </h6>
                    <ul class="list-unstyled mb-4 text-secondary" style="font-size: 14px; line-height: 1.9;">
                        <li class="d-flex align-items-start mb-1">
                            <i class="fa-solid fa-circle-check me-2 mt-1" style="color: var(--theme-primary);"></i>
                            <span>Bridge abutment expansion gap cushioning and deck end buffer protection</span>
                        </li>
                        <li class="d-flex align-items-start mb-1">
                            <i class="fa-solid fa-circle-check me-2 mt-1" style="color: var(--theme-primary);"></i>
                            <span>Ballast wall and pier cap anti-collision impact dampening blocks</span>
                        </li>
                        <li class="d-flex align-items-start mb-1">
                            <i class="fa-solid fa-circle-check me-2 mt-1" style="color: var(--theme-primary);"></i>
                            <span>Railway track buffer stops and railway terminal shock-absorbing blocks</span>
                        </li>
                        <li class="d-flex align-items-start">
                            <i class="fa-solid fa-circle-check me-2 mt-1" style="color: var(--theme-primary);"></i>
                            <span>Heavy gantry end-stops and industrial equipment shock isolation pads</span>
                        </li>
                    </ul>

                    <a href="contact.php?product=Rubber-Bunk-Buffer-Pad" class="btn btn-primary rounded-pill px-4 py-2.5 fw-bold shadow-sm d-inline-flex align-items-center gap-2"
                        style="background: var(--theme-primary); border-color: var(--theme-primary); font-size: 13.5px;">
                        <span>Request Inquiry for Rubber Bunk</span>
                        <i class="fa-solid fa-arrow-right" style="font-size: 12px;"></i>
                    </a>
                </div>

                <div class="col-lg-6 p-4 p-lg-5">
                    <div class="product-img-wrapper shadow-sm open-bearing-modal-btn"
                        role="button"
                        tabindex="0"
                        data-img-src="assets/img/bearings/rubber-bunk.jpg"
                        data-img-title="Rubber Bunk: Buffer & End Bunk Shock Absorber Pads">
                        <img src="assets/img/bearings/rubber-bunk.jpg" alt="Rubber Bunk Buffer Shock Absorber Pad - Polymer Products"
                            class="img-fluid product-img-zoom">
                        <span class="product-img-overlay-btn"><i class="fa-solid fa-magnifying-glass-plus me-1"></i> View</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ============================================================
             Product 13: Seismic Locator (Guide Pins & Lateral Restraints)
             ============================================================ -->
        <div class="card border-0 rounded-4 shadow-sm mb-4 overflow-hidden product-item-card wow fadeInUp" id="locator" data-wow-delay=".45s">
            <div class="row g-0 align-items-center">
                <div class="col-lg-6 p-4 p-md-5">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <span class="badge rounded-pill px-3 py-1.5 fw-bold text-uppercase"
                            style="background: var(--theme-subtle); color: var(--theme-primary); font-size: 12px; letter-spacing: 1px;">
                            Locator
                        </span>
                        <span class="badge bg-light text-secondary rounded-pill px-3 py-1.5 border small fw-semibold">
                            <i class="fa-solid fa-crosshairs text-primary me-1"></i> Seismic Restraint &bull; Guide Pin
                        </span>
                    </div>

                    <h3 class="fw-bold text-dark mb-3" style="font-family: 'Oswald', sans-serif; font-size: 26px;">
                        Locator: Seismic Guide Pins &amp; Lateral Restraints
                    </h3>
                    
                    <p class="text-secondary mb-4" style="font-size: 14.5px; line-height: 1.8;">
                        Seismic Locators and Shear Key Restraints consist of precision-machined high-strength alloy pins encased in durable elastomeric cushioning sleeves anchored to heavy steel socket bases. They transfer high horizontal earthquake and wind shear forces directly from the bridge superstructure to the pier cap while dampening vibrations and eliminating metallic chatter.
                    </p>

                    <!-- Technical Specs Chips -->
                    <div class="row g-3 mb-4">
                        <div class="col-sm-6">
                            <div class="spec-box h-100">
                                <div class="d-flex align-items-center mb-1">
                                    <i class="fa-solid fa-crosshairs me-2" style="color: var(--theme-primary);"></i>
                                    <h6 class="fw-bold mb-0" style="font-size: 13.5px; color: var(--theme-primary);">Shear Key Design</h6>
                                </div>
                                <small class="text-muted d-block" style="font-size: 12.5px;">High-strength alloy steel shear pin</small>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="spec-box h-100">
                                <div class="d-flex align-items-center mb-1">
                                    <i class="fa-solid fa-shield-halved me-2" style="color: var(--theme-primary);"></i>
                                    <h6 class="fw-bold mb-0" style="font-size: 13.5px; color: var(--theme-primary);">Damping Sleeve</h6>
                                </div>
                                <small class="text-muted d-block" style="font-size: 12.5px;">Elastomeric ring cushions dynamic impact</small>
                            </div>
                        </div>
                    </div>

                    <!-- Applications List -->
                    <h6 class="fw-bold text-dark mb-2" style="font-size: 13.5px; text-transform: uppercase; letter-spacing: 0.5px;">
                        Typical Applications:
                    </h6>
                    <ul class="list-unstyled mb-4 text-secondary" style="font-size: 14px; line-height: 1.9;">
                        <li class="d-flex align-items-start mb-1">
                            <i class="fa-solid fa-circle-check me-2 mt-1" style="color: var(--theme-primary);"></i>
                            <span>Seismic shear key restraints on highway and railway bridge pier caps</span>
                        </li>
                        <li class="d-flex align-items-start mb-1">
                            <i class="fa-solid fa-circle-check me-2 mt-1" style="color: var(--theme-primary);"></i>
                            <span>Transverse and longitudinal locator pin systems for continuous decks</span>
                        </li>
                        <li class="d-flex align-items-start mb-1">
                            <i class="fa-solid fa-circle-check me-2 mt-1" style="color: var(--theme-primary);"></i>
                            <span>Deck unseating prevention and earthquake displacement control</span>
                        </li>
                        <li class="d-flex align-items-start">
                            <i class="fa-solid fa-circle-check me-2 mt-1" style="color: var(--theme-primary);"></i>
                            <span>Metro elevated viaducts and critical transit flyovers</span>
                        </li>
                    </ul>

                    <a href="contact.php?product=Seismic-Locator" class="btn btn-primary rounded-pill px-4 py-2.5 fw-bold shadow-sm d-inline-flex align-items-center gap-2"
                        style="background: var(--theme-primary); border-color: var(--theme-primary); font-size: 13.5px;">
                        <span>Request Inquiry for Locator</span>
                        <i class="fa-solid fa-arrow-right" style="font-size: 12px;"></i>
                    </a>
                </div>

                <div class="col-lg-6 p-4 p-lg-5">
                    <div class="product-img-wrapper shadow-sm open-bearing-modal-btn"
                        role="button"
                        tabindex="0"
                        data-img-src="assets/img/bearings/locator.jpg"
                        data-img-title="Locator: Seismic Guide Pins & Lateral Restraints">
                        <img src="assets/img/bearings/locator.jpg" alt="Seismic Locator Guide Pin Restraint - Polymer Products"
                            class="img-fluid product-img-zoom">
                        <span class="product-img-overlay-btn"><i class="fa-solid fa-magnifying-glass-plus me-1"></i> View</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ============================================================
     3. Engineering Consultation & Inquiry Banner
     ============================================================ -->
<section class="py-5 text-white position-relative"
    style="background: var(--theme-primary); padding: 75px 0;">
    <div class="container-fluid px-3 px-lg-5 py-3 text-center">
        <span class="badge px-3 py-2 mb-3 rounded-pill text-uppercase fw-bold"
            style="background: #ffffffff; color: var(--theme-primary); font-size: 12px; letter-spacing: 1.5px;">
            Custom Engineering &amp; Sizing
        </span>
        <h2 class="fw-bold text-white text-uppercase mx-auto mb-3"
            style="font-family: 'Saira-Medium', sans-serif; font-size: clamp(26px, 3.5vw, 38px); letter-spacing: 0.5px; max-width: 780px;">
            Require Custom Sized Bearings for Your Project?
        </h2>
        <p class="mx-auto mb-4" style="max-width: 720px; color: #ecececff; font-size: 15px; line-height: 1.8;">
            We manufacture custom bearing dimensions, vertical load ratings up to 50,000+ kN, and elastomer layer configurations conforming to your project's approved GAD and structural bridge design drawings.
        </p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="contact.php" class="btn rounded-pill px-5 py-3 fw-bold shadow text-uppercase"
                style="font-size: 13px; letter-spacing: 0.5px; background: #f7f7f7ff; color: var(--theme-primary); border-color: white;">
                Send Bearing Schedule / Drawings <i class="fa-solid fa-arrow-right ms-2"></i>
            </a>
            <a href="testing.php" class="btn btn-outline-light rounded-pill px-4 py-3 fw-bold text-uppercase"
                style="font-size: 13px; letter-spacing: 0.5px; backdrop-filter: blur(4px);">
                <i class="fa-solid fa-vial-circle-check me-2"></i> View Testing &amp; QA/QC System
            </a>
        </div>
    </div>
</section>

<!-- ============================================================
     4. Bearing Image & Diagram Lightbox Modal Viewer
     ============================================================ -->
<div class="modal fade" id="bearingImgModal" tabindex="-1" aria-labelledby="bearingImgModalLabel" aria-hidden="true" style="z-index: 10550;">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg rounded-4 overflow-hidden">
            <div class="modal-header text-white px-4 py-3" style="background: var(--theme-primary);">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-layer-group text-white me-2 fs-5"></i>
                    <div>
                        <h5 class="modal-title fw-bold text-white mb-0" id="bearingImgModalLabel">Bearing Technical Diagram</h5>
                        <small class="text-white-50" style="font-size: 12px;">IRC:83-2018 (Part-II) &bull; Polymer Products</small>
                    </div>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-2 p-md-4 text-center" style="background: #0f172a; min-height: 380px; max-height: 80vh; overflow: auto; display: flex; align-items: center; justify-content: center;">
                <img id="bearingImgModalTarget" src="" alt="Bearing Diagram" style="max-height: 75vh; max-width: 100%; width: auto; height: auto; object-fit: contain; border-radius: 8px; box-shadow: 0 10px 30px rgba(0,0,0,0.5);">
            </div>
            <div class="modal-footer bg-white px-4 py-2.5 border-top d-flex justify-content-between align-items-center">
                <span class="text-muted small">
                    <i class="fa-solid fa-shield-check text-success me-1"></i> IRC:83 / RDSO Approved Standard Bearing Specifications
                </span>
                <button type="button" class="btn btn-dark btn-sm rounded-pill px-4 fw-bold" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const modalEl = document.getElementById('bearingImgModal');
    if (!modalEl) return;

    const modalTitle = document.getElementById('bearingImgModalLabel');
    const modalImg = document.getElementById('bearingImgModalTarget');

    function unlockScroll() {
        modalImg.src = '';
        document.body.classList.remove('modal-open');
        document.body.style.removeProperty('overflow');
        document.body.style.removeProperty('overflow-y');
        document.body.style.removeProperty('padding-right');
        document.documentElement.style.removeProperty('overflow');
        document.documentElement.style.removeProperty('overflow-y');
        document.querySelectorAll('.modal-backdrop').forEach(function(b) { b.remove(); });
    }

    document.querySelectorAll('.open-bearing-modal-btn').forEach(function (btn) {
        function triggerModal(e) {
            e.preventDefault();
            const src = btn.getAttribute('data-img-src');
            const title = btn.getAttribute('data-img-title') || 'Bearing Technical Diagram';
            if (!src) return;

            modalTitle.textContent = title;
            modalImg.src = src;

            if (typeof bootstrap !== 'undefined' && bootstrap.Modal) {
                bootstrap.Modal.getOrCreateInstance(modalEl).show();
            } else if (typeof $ !== 'undefined') {
                $(modalEl).modal('show');
            }
        }

        btn.addEventListener('click', triggerModal);
        btn.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ' ') triggerModal(e);
        });
    });

    modalEl.querySelectorAll('[data-bs-dismiss="modal"]').forEach(function(btn) {
        btn.addEventListener('click', function() {
            if (typeof bootstrap !== 'undefined' && bootstrap.Modal) {
                bootstrap.Modal.getOrCreateInstance(modalEl).hide();
            } else if (typeof $ !== 'undefined') {
                $(modalEl).modal('hide');
            }
            setTimeout(unlockScroll, 250);
        });
    });

    modalEl.addEventListener('hidden.bs.modal', unlockScroll);
});
</script>

<?php include_once 'partials/footer.php'; ?>
