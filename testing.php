<?php 
$page_title = "Testing & QA/QC System (NHAI & RDSO) - Polymer Products";
$meta_description = "Quality Assurance Plan (QAP), material testing protocols, 1.5x proof-load verification, and third-party inspection for elastomeric bridge bearings.";
include_once 'partials/header.php'; 

// Testing & Laboratory Showcase Images Array (High-Resolution Factory Lab Testing Photos)
$testing_slider_images = [
    [
        "file" => "assets/pp_data/Machine_Images/webp/IMG20260913164338.webp",
        "title" => "Universal Testing Machine (UTM)",
        "desc" => "Tensile strength, elongation at break, and peel bond adhesion testing."
    ],
    [
        "file" => "assets/pp_data/Machine_Images/webp/IMG20260913164426.webp",
        "title" => "Oscillating Disc Rheometer (ODR)",
        "desc" => "Computerized cure characteristics, scorch time, and compounding uniformity."
    ],
    [
        "file" => "assets/pp_data/Machine_Images/webp/IMG20260913164437.webp",
        "title" => "Computerized Rheometer QC Console",
        "desc" => "Real-time cure kinetic graph acquisition for elastomer compounding batch records."
    ],
    [
        "file" => "assets/pp_data/Machine_Images/webp/IMG20260913164521.webp",
        "title" => "ASTM D412 Specimen Punching Frame",
        "desc" => "Precision Die-C dumbbell coupon cutter for tensile test preparation."
    ],
    [
        "file" => "assets/pp_data/Machine_Images/webp/IMG20260913164548.webp",
        "title" => "Thermal Ageing Test Oven",
        "desc" => "Digital circulating air oven for 70°C / 72-hr accelerated heat resistance."
    ],
    [
        "file" => "assets/pp_data/Machine_Images/webp/IMG20260913164602.webp",
        "title" => "High-Temperature Muffle Furnace",
        "desc" => "Determining ash content and elastomer content of rubber compounds."
    ],
    [
        "file" => "assets/img/img/banner/irhd-image.png",
        "title" => "IRHD Hardness Tester (M/c)",
        "desc" => "International Rubber Hardness Degree tester per IS:3400 / ISO 48."
    ],
    [
        "file" => "assets/img/testing/goodrich-flexometer.jpg",
        "title" => "Goodrich Flexometer",
        "desc" => "Heat build-up and dynamic flexing behaviour under cyclic compression."
    ],
    [
        "file" => "assets/img/testing/rubber-density-tester.jpg",
        "title" => "Rubber Density Tester (Densimeter)",
        "desc" => "Determining specific gravity and density of elastomer compounds."
    ],
    [
        "file" => "assets/pp_data/Machine_Images/20/image-17.webp",
        "title" => "Compressive Proof Load Testing Rig",
        "desc" => "High-tonnage hydraulic frame verifying 1.5x design vertical load."
    ]
];
?>

<style>
.tpi-agency-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
}
.tpi-agency-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 14px 28px rgba(2, 132, 199, 0.10);
    border-color: var(--theme-primary);
}
.tpi-icon-box {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background: var(--theme-subtle);
    color: var(--theme-primary);
    font-size: 20px;
    flex-shrink: 0;
}
.witness-photo-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    overflow: hidden;
    transition: all 0.35s ease;
    cursor: pointer;
}
.witness-photo-card:hover {
    transform: translateY(-5px);
    border-color: var(--theme-primary);
    box-shadow: 0 16px 32px rgba(2, 132, 199, 0.14);
}
.witness-photo-wrap {
    height: 220px;
    position: relative;
    overflow: hidden;
    background: #0f172a;
}
.witness-photo-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}
.witness-photo-card:hover .witness-photo-wrap img {
    transform: scale(1.08);
}
.tpi-cert-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    transition: all 0.3s ease;
}
.tpi-cert-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 24px rgba(0,0,0,0.06);
    border-color: var(--theme-primary);
}
.testing-hero-badge {
    background: var(--theme-subtle);
    border: 1px solid var(--theme-primary);
    color: var(--theme-lighter);
    font-size: 13px;
    letter-spacing: 1px;
}
.qap-card {
    transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1);
    border: 1px solid #e2e8f0;
    background: #ffffff;
    border-radius: 20px;
}
.qap-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 16px 36px rgba(2, 132, 199, 0.10) !important;
    border-color: var(--theme-primary) !important;
}
.test-spec-table th {
    background: #0f172a;
    color: #ffffff;
    font-weight: 600;
    font-size: 15px;
    letter-spacing: 0.3px;
    padding: 14px 16px;
    vertical-align: middle;
}
.test-spec-table td {
    font-size: 15px;
    color: #1e293b;
    padding: 14px 16px;
    vertical-align: middle;
    line-height: 1.6;
}
.test-spec-table .badge {
    font-size: 13.5px;
    font-weight: 600;
    padding: 6px 12px;
    border-radius: 6px;
}
.test-spec-table tbody tr:hover {
    background-color: #f0f7ff;
}
.lab-card {
    border-radius: 16px;
    overflow: hidden;
    background: #ffffff;
    border: 1px solid #e2e8f0;
    transition: all 0.3s ease;
}
.lab-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 24px rgba(0,0,0,0.07);
    border-color: var(--theme-primary);
}
.lab-card img {
    height: 185px;
    width: 100%;
    object-fit: cover;
    background: #f1f5f9;
}

/* Slider Section Styling */
.testing-slider-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    overflow: hidden;
    transition: all 0.35s ease;
    cursor: pointer;
    box-shadow: 0 4px 12px rgba(0,0,0,0.04);
}
.testing-slider-card:hover {
    transform: translateY(-6px);
    border-color: var(--theme-primary);
    box-shadow: 0 16px 32px rgba(2, 132, 199, 0.16) !important;
}
.testing-slider-img-wrap {
    height: 260px;
    position: relative;
    overflow: hidden;
    background: #0f172a;
    border-radius: 15px;
}
.testing-slider-img-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}
.testing-slider-card:hover .testing-slider-img-wrap img {
    transform: scale(1.08);
}
.testing-slider-overlay {
    position: absolute;
    inset: 0;
    background: rgba(15, 23, 42, 0.45);
    backdrop-filter: blur(1.5px);
    opacity: 0;
    transition: opacity 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
}
.testing-slider-card:hover .testing-slider-overlay {
    opacity: 1;
}
.testing-nav-btn {
    width: 44px;
    height: 44px;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.3s ease;
    border: 1px solid #e2e8f0;
    background: #ffffff;
    color: var(--theme-primary);
    box-shadow: 0 4px 10px rgba(0,0,0,0.05);
}
.testing-nav-btn:hover {
    background: var(--theme-primary);
    color: #ffffff;
    border-color: var(--theme-primary);
    box-shadow: 0 6px 16px var(--theme-glow);
    transform: scale(1.06);
}
.testing-nav-btn.swiper-button-disabled {
    opacity: 0.35;
    cursor: not-allowed;
    pointer-events: none;
    transform: none !important;
}
.testing-hero-showcase {
    perspective: 1000px;
}
.testing-hero-img-box {
    transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1);
    background: rgba(255, 255, 255, 0.08);
    backdrop-filter: blur(14px);
    -webkit-backdrop-filter: blur(14px);
    border: 1px solid rgba(255, 255, 255, 0.22);
    box-shadow: 0 20px 45px rgba(0, 0, 0, 0.35);
}
.testing-hero-img-box:hover {
    transform: translateY(-5px);
    border-color: rgba(147, 197, 253, 0.45) !important;
    box-shadow: 0 25px 55px rgba(2, 132, 199, 0.28) !important;
}
.testing-hero-img-box img {
    transition: transform 0.45s ease;
    filter: drop-shadow(0 15px 25px rgba(0,0,0,0.45));
}
.testing-hero-img-box:hover img {
    transform: scale(1.04);
}
</style>

<!-- ============================================================
     1. Modern Hero Banner
     ============================================================ -->
<section class="ht-about-hero position-relative d-flex align-items-center"
    style="background: linear-gradient(135deg, rgba(9, 20, 36, 0.60) 0%, rgba(14, 34, 61, 0.62) 50%, rgba(6, 13, 24, 0.86) 100%), url('assets/img/img/project/nhai_bridge.webp') center center / cover no-repeat; padding-top: 175px; padding-bottom: 75px; margin-top: -160px; min-height: 480px;">
    
    <div class="container-fluid px-3 px-lg-5 position-relative" style="z-index: 2;">
        <div class="row align-items-center justify-content-between g-4">
            
            <!-- Left Column: Content -->
            <div class="col-lg-7 wow fadeInLeft" data-wow-delay=".2s">
                <span class="badge px-3 py-2 mb-3 rounded-pill text-uppercase testing-hero-badge">
                    <i class="fa-solid fa-vial-circle-check me-2"></i>Quality Assurance &amp; Verification &bull; Estd. 1978
                </span>
                <h1 class="text-white fw-bold mb-3"
                    style="font-family: 'Oswald', 'Saira-Medium', sans-serif; font-size: clamp(32px, 4.2vw, 50px); letter-spacing: -0.5px; line-height: 1.2;">
                    Testing &amp; QA/QC System <span style="color: #4eb8d8ff;">(NHAI &amp; RDSO)</span>
                </h1>
                <p class="text-light mb-4" style="font-size: 16px; line-height: 1.8; max-width: 720px; color: #ffffffff !important;">
                    Comprehensive Quality Assurance Plans (QAP), raw compound laboratory testing, 1.5x proof-load verification, and stage-wise third-party inspection support.
                </p>
                <div class="d-flex flex-wrap gap-2 pt-1">
                    <a href="#testing-gallery-slider" class="btn btn-primary rounded-pill px-4 py-2.5 fw-bold text-uppercase" style="background:var(--theme-primary); border-color:var(--theme-primary); font-size:13px; letter-spacing:0.5px;">
                        <i class="fa-solid fa-images me-2"></i>Testing Photos
                    </a>
                    <a href="#qap-plans" class="btn btn-outline-light rounded-pill px-4 py-2.5 fw-bold text-uppercase" style="font-size:13px; letter-spacing:0.5px;">
                        <i class="fa-solid fa-clipboard-check me-2"></i>Approved QAP Plans
                    </a>
                    <a href="#test-parameters" class="btn btn-outline-light rounded-pill px-4 py-2.5 fw-bold text-uppercase" style="font-size:13px; letter-spacing:0.5px;">
                        <i class="fa-solid fa-table-list me-2"></i>Test Parameters
                    </a>
                    <a href="#lab-facilities" class="btn btn-outline-light rounded-pill px-4 py-2.5 fw-bold text-uppercase" style="font-size:13px; letter-spacing:0.5px;">
                        <i class="fa-solid fa-flask me-2"></i>In-House Lab
                    </a>
                    <a href="#third-party-witness" class="btn btn-outline-light rounded-pill px-4 py-2.5 fw-bold text-uppercase" style="font-size:13px; letter-spacing:0.5px;">
                        <i class="fa-solid fa-users-viewfinder me-2"></i>Third-Party Witness
                    </a>
                </div>
            </div>

            <!-- Right Column: Testing Showcase Image & Breadcrumb -->
            <div class="col-lg-5 text-center text-lg-end wow fadeInRight" data-wow-delay=".3s">
                <nav aria-label="breadcrumb" class="mb-3 d-none d-lg-block">
                    <ol class="breadcrumb justify-content-lg-end mb-0 bg-transparent p-0">
                        <li class="breadcrumb-item"><a href="index.php" class="text-white-50 text-decoration-none"><i class="fa-solid fa-house me-1"></i>Home</a></li>
                        <li class="breadcrumb-item active text-white fw-semibold" aria-current="page">Testing &amp; QA/QC</li>
                    </ol>
                </nav>

                <div class="testing-hero-showcase d-inline-block text-center">
                    <div class="testing-hero-img-box p-3 p-md-4 rounded-4 position-relative">
                        <img src="assets/img/img/banner/demo-testing.webp" alt="Proof Load & Material Testing Rig - Polymer Products" class="img-fluid"
                            style="max-height: 300px; width: auto; object-fit: contain;">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ============================================================
     2. Testing & Inspection Gallery Slider (Interactive Carousel)
     ============================================================ -->
<section class="py-5" id="testing-gallery-slider" style="background: #f0f7ff; border-bottom: 1px solid #e2e8f0;">
    <div class="container-fluid px-3 px-lg-5 py-2">
        <div class="d-flex flex-wrap align-items-end justify-content-between mb-4 gap-3">
            <div>
                <span class="badge px-3 py-1.5 rounded-pill font-monospace fw-bold text-uppercase mb-2"
                    style="background: var(--theme-subtle); color: var(--theme-primary); font-size: 12px; letter-spacing: 1px;">
                    Visual Verification
                </span>
                <h2 class="fw-bold text-dark text-uppercase mb-0" style="font-family:'Oswald', sans-serif; font-size: clamp(24px, 3vw, 34px);">
                    Laboratory Testing &amp; Inspection Showcase
                </h2>
                <p class="text-muted small mt-1 mb-0" style="max-width: 680px;">
                    Calibrated testing equipment, computerized ODR curemeters, proof load frames, UTM tensile rigs, and rubber compounding QA testing.
                </p>
            </div>

            <!-- Slider Controls -->
            <div class="d-flex align-items-center gap-2">
                <button type="button" class="testing-nav-btn testing-slider-prev" aria-label="Previous Slide">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
                <button type="button" class="testing-nav-btn testing-slider-next" aria-label="Next Slide">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>
        </div>

        <!-- Swiper Container -->
        <div class="swiper testing-swiper-container overflow-hidden pb-4">
            <div class="swiper-wrapper">
                <?php foreach ($testing_slider_images as $idx => $tImg): ?>
                <div class="swiper-slide h-auto">
                    <div class="testing-slider-card open-testing-doc-modal h-100 d-flex flex-column justify-content-between"
                        data-doc-url="<?php echo htmlspecialchars($tImg['file']); ?>"
                        data-doc-title="<?php echo htmlspecialchars($tImg['title']); ?>"
                        data-doc-type="image"
                        role="button"
                        tabindex="0">
                        <div class="testing-slider-img-wrap">
                            <img src="<?php echo htmlspecialchars($tImg['file']); ?>" alt="<?php echo htmlspecialchars($tImg['title']); ?>" loading="lazy">
                            <div class="testing-slider-overlay">
                                <span class="btn btn-light btn-sm rounded-pill fw-bold px-3 py-1.5 shadow">
                                    <i class="fa-solid fa-magnifying-glass-plus me-1 text-primary"></i> Click to View
                                </span>
                            </div>
                        </div>
                        <div class="p-3 bg-white border-top">
                            <h6 class="fw-bold text-dark mb-1 text-truncate" style="font-family:'Oswald', sans-serif; font-size:15px;" title="<?php echo htmlspecialchars($tImg['title']); ?>">
                                <?php echo htmlspecialchars($tImg['title']); ?>
                            </h6>
                            <small class="text-muted d-block text-truncate" style="font-size:12px;" title="<?php echo htmlspecialchars($tImg['desc']); ?>">
                                <?php echo htmlspecialchars($tImg['desc']); ?>
                            </small>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            
            <!-- Swiper Pagination -->
            <div class="swiper-pagination testing-slider-pagination position-relative mt-3 text-center"></div>
        </div>
    </div>
</section>

<!-- ============================================================
     3. Core Quality Assurance Plans (NHAI & RDSO)
     ============================================================ -->
<section class="py-5" id="qap-plans" style="background:#ffffff;">
    <div class="container-fluid px-3 px-lg-5 py-3">
        
        <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay=".1s">
            <span class="badge px-3 py-1.5 rounded-pill font-monospace fw-bold text-uppercase mb-2"
                style="background: var(--theme-subtle); color: var(--theme-primary); font-size: 12px; letter-spacing: 1px;">
                Quality Assurance Framework
            </span>
            <h2 class="fw-bold text-dark text-uppercase" style="font-family:'Oswald', sans-serif; font-size: clamp(26px, 3.2vw, 36px);">
                Standardized Stage-Wise Quality Control Plans
            </h2>
            <p class="text-muted mx-auto mb-0" style="max-width:720px; font-size:15px; line-height: 1.7;">
                Click on the documents below to view the official Quality Assurance Plans (QAP) approved by National Highway authorities and Indian Railways.
            </p>
        </div>

        <div class="row g-4 mb-4 justify-content-center">
            
            <!-- NHAI QAP Card (Page 06) -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay=".15s">
                <div class="p-4 p-md-5 rounded-4 shadow-sm h-100 qap-card position-relative d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="badge px-3 py-2 fw-bold text-uppercase rounded-pill"
                                style="background: var(--theme-subtle); color: var(--theme-primary); border: 1px solid var(--theme-primary); font-size: 12.5px;">
                                <i class="fa-solid fa-road me-1.5"></i> Road &amp; Highway Bridges
                            </span>
                            <span class="badge bg-light text-secondary border px-3 py-1.5 rounded-pill small fw-semibold">
                                IRC:83 (Part II) 2018
                            </span>
                        </div>

                        <h3 class="fw-bold text-dark mb-2" style="font-family:'Oswald', sans-serif; font-size:24px;">
                            NHAI Quality Assurance Plan (QAP)
                        </h3>
                        <p class="text-secondary small mb-3" style="line-height:1.7; font-size: 14px;">
                            Structured quality control plan approved for National Highway (NHAI) and State PWD bridge projects, detailing stage-wise control points:
                        </p>
                        
                        <ul class="list-unstyled text-muted small mb-4" style="line-height:2.0; font-size: 13.5px;">
                            <li><i class="fa-solid fa-circle-check text-primary me-2"></i><strong>Stage 1:</strong> Raw polymer &amp; chemical compounding verification</li>
                            <li><i class="fa-solid fa-circle-check text-primary me-2"></i><strong>Stage 2:</strong> Steel plate tensile test, grit blasting &amp; primer bonding check</li>
                            <li><i class="fa-solid fa-circle-check text-primary me-2"></i><strong>Stage 3:</strong> Curing temperature and pressure recording log</li>
                            <li><i class="fa-solid fa-circle-check text-primary me-2"></i><strong>Stage 4:</strong> Finished bearing dimensional tolerance check</li>
                            <li><i class="fa-solid fa-circle-check text-primary me-2"></i><strong>Stage 5:</strong> Shear modulus test (G-value = 0.8 to 1.2 MPa) &amp; Proof Load test</li>
                        </ul>
                    </div>

                    <div class="p-3 bg-light rounded-3 border d-flex flex-wrap align-items-center justify-content-between gap-3 mt-auto">
                        <div>
                            <h6 class="fw-bold text-dark mb-0" style="font-size:14px;">
                                <i class="fa-solid fa-file-pdf text-danger me-1.5"></i> QAP-IRC-_2018 (R).pdf
                            </h6>
                            <small class="text-muted" style="font-size: 12px;">Standard IRC:83 Stage-Wise Format</small>
                        </div>
                        <button type="button" class="btn btn-primary btn-sm rounded-pill fw-bold px-4 py-2 open-testing-doc-modal shadow-sm d-flex align-items-center gap-1.5"
                            data-doc-url="assets/pp_data/Page 06/QAP-IRC-_2018 (R).pdf"
                            data-doc-title="NHAI & Highway Bridges Quality Assurance Plan (IRC:83-2018)"
                            data-doc-type="pdf"
                            style="background: var(--theme-primary); border-color: var(--theme-primary);">
                            <i class="fa-solid fa-eye"></i> <span>View QAP Format</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- RDSO QAP Card (Page 06) -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay=".25s">
                <div class="p-4 p-md-5 rounded-4 shadow-sm h-100 qap-card position-relative d-flex flex-column justify-content-between" style="border-top: 4px solid var(--theme-primary) !important;">
                    <div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="badge px-3 py-2 fw-bold text-uppercase rounded-pill"
                                style="background: rgba(2, 132, 199, 0.12); color: var(--theme-primary); border: 1px solid var(--theme-primary); font-size: 12.5px;">
                                <i class="fa-solid fa-train me-1.5"></i> Railway Bridges &amp; ROBs
                            </span>
                            <span class="badge bg-light text-secondary border px-3 py-1.5 rounded-pill small fw-semibold">
                                RDSO BS-131
                            </span>
                        </div>

                        <h3 class="fw-bold text-dark mb-2" style="font-family:'Oswald', sans-serif; font-size:24px;">
                            RDSO Railway Quality Plan
                        </h3>
                        <p class="text-secondary small mb-3" style="line-height:1.7; font-size: 14px;">
                            High-precision testing regime complying with Indian Railways Research Designs and Standards Organisation (RDSO) specifications:
                        </p>
                        
                        <ul class="list-unstyled text-muted small mb-4" style="line-height:2.0; font-size: 13.5px;">
                            <li><i class="fa-solid fa-circle-check text-primary me-2"></i><strong>Axle Load Verification:</strong> Designed for 25T &amp; 32.5T heavy freight loads</li>
                            <li><i class="fa-solid fa-circle-check text-primary me-2"></i><strong>Proof Load Test:</strong> 100% bearings subjected to 1.5x design vertical load</li>
                            <li><i class="fa-solid fa-circle-check text-primary me-2"></i><strong>Shear Modulus Test:</strong> Dual-bearing compression-shear test rig</li>
                            <li><i class="fa-solid fa-circle-check text-primary me-2"></i><strong>Adhesion Bond Strength:</strong> Elastomer-to-steel laminate peel test</li>
                            <li><i class="fa-solid fa-circle-check text-primary me-2"></i><strong>Witness Inspection:</strong> Stage-wise inspection by RITES / RDSO officials</li>
                        </ul>
                    </div>

                    <div class="p-3 bg-light rounded-3 border d-flex flex-wrap align-items-center justify-content-between gap-3 mt-auto">
                        <div>
                            <h6 class="fw-bold text-dark mb-0" style="font-size:14px;">
                                <i class="fa-solid fa-file-pdf text-danger me-1.5"></i> Elastomeric QAP 2018 RDSO NEW.pdf
                            </h6>
                            <small class="text-muted" style="font-size: 12px;">Indian Railways RDSO Format</small>
                        </div>
                        <button type="button" class="btn btn-primary btn-sm rounded-pill fw-bold px-4 py-2 open-testing-doc-modal shadow-sm d-flex align-items-center gap-1.5"
                            data-doc-url="assets/pp_data/Page 06/Elastomeric QAP 2018 RDSO NEW - blank format.pdf"
                            data-doc-title="RDSO Indian Railways Quality Assurance Plan (Elastomeric Bearings)"
                            data-doc-type="pdf"
                            style="background: var(--theme-primary); border-color: var(--theme-primary);">
                            <i class="fa-solid fa-eye"></i> <span>View Railway QAP</span>
                        </button>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- ============================================================
     4. Routine & Acceptance Test Parameters Table
     ============================================================ -->
<section class="py-5" id="test-parameters" style="background:#f0f7ff; border-top:1px solid #e2e8f0; border-bottom:1px solid #e2e8f0;">
    <div class="container-fluid px-3 px-lg-5 py-3">
        <div class="section-title text-center mb-4 wow fadeInUp" data-wow-delay=".1s">
            <span class="badge px-3 py-1.5 rounded-pill font-monospace fw-bold text-uppercase mb-2"
                style="background: var(--theme-subtle); color: var(--theme-primary); font-size: 12px; letter-spacing: 1px;">
                Standard Parameters
            </span>
            <h2 class="fw-bold text-dark text-uppercase" style="font-family:'Oswald', sans-serif; font-size: clamp(26px, 3.2vw, 36px);">
                Routine &amp; Acceptance Test Parameters
            </h2>
            <p class="text-muted mx-auto mb-0" style="max-width:720px; font-size:15px; line-height: 1.7;">
                Physical, mechanical, and thermal aging parameters tested according to IS:3400, ASTM, and IRC:83 specifications.
            </p>
        </div>

        <div class="table-responsive bg-white rounded-4 border shadow-sm p-3">
            <table class="table table-hover table-bordered align-middle mb-0 test-spec-table">
                <thead>
                    <tr>
                        <th style="min-width: 180px;">Test Property</th>
                        <th>Test Method / Code</th>
                        <th>Specified Requirement (Natural Rubber)</th>
                        <th>Specified Requirement (Chloroprene)</th>
                        <th>Sampling Frequency</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="fw-bold text-dark">1. Hardness (Shore A)</td>
                        <td><span class="badge bg-light text-dark border">IS: 3400 (Pt 2) / ASTM D2240</span></td>
                        <td>60 &plusmn; 5 IRHD / Shore A</td>
                        <td>60 &plusmn; 5 IRHD / Shore A</td>
                        <td><span class="badge bg-primary-subtle text-primary fw-semibold">Every Batch / 100% Bearings</span></td>
                    </tr>
                    <tr>
                        <td class="fw-bold text-dark">2. Minimum Tensile Strength</td>
                        <td><span class="badge bg-light text-dark border">IS: 3400 (Pt 1) / ASTM D412</span></td>
                        <td>&ge; 17.0 MPa (170 kg/cm&sup2;)</td>
                        <td>&ge; 17.0 MPa (170 kg/cm&sup2;)</td>
                        <td><span class="badge bg-primary-subtle text-primary fw-semibold">Every Compounded Batch</span></td>
                    </tr>
                    <tr>
                        <td class="fw-bold text-dark">3. Minimum Elongation at Break</td>
                        <td><span class="badge bg-light text-dark border">IS: 3400 (Pt 1) / ASTM D412</span></td>
                        <td>&ge; 400%</td>
                        <td>&ge; 400%</td>
                        <td><span class="badge bg-primary-subtle text-primary fw-semibold">Every Compounded Batch</span></td>
                    </tr>
                    <tr>
                        <td class="fw-bold text-dark">4. Accelerated Ageing (70°C / 72h)</td>
                        <td><span class="badge bg-light text-dark border">IS: 3400 (Pt 4) / ASTM D573</span></td>
                        <td>Tensile: -15% max | Elongation: -30% max</td>
                        <td>Tensile: -15% max | Elongation: -30% max</td>
                        <td><span class="badge bg-secondary-subtle text-secondary fw-semibold">Per Lot / Periodic</span></td>
                    </tr>
                    <tr>
                        <td class="fw-bold text-dark">5. Compression Set (24h / 70°C)</td>
                        <td><span class="badge bg-light text-dark border">IS: 3400 (Pt 10) / ASTM D395</span></td>
                        <td>&le; 35% Max</td>
                        <td>&le; 30% Max</td>
                        <td><span class="badge bg-secondary-subtle text-secondary fw-semibold">Per Lot Testing</span></td>
                    </tr>
                    <tr>
                        <td class="fw-bold text-dark">6. Ozone Resistance Test</td>
                        <td><span class="badge bg-light text-dark border">IS: 3400 (Pt 20) / ASTM D1149</span></td>
                        <td>No cracks under 20% strain (25 pphm)</td>
                        <td>No cracks under 20% strain (100 pphm)</td>
                        <td><span class="badge bg-secondary-subtle text-secondary fw-semibold">Type Test / Periodic</span></td>
                    </tr>
                    <tr>
                        <td class="fw-bold text-dark">7. Shear Modulus (G-Value)</td>
                        <td><span class="badge bg-light text-dark border">IRC:83 (Pt II) Appendix 2</span></td>
                        <td>G = 0.8 to 1.2 MPa (&plusmn; 15% tolerance)</td>
                        <td>G = 0.8 to 1.2 MPa (&plusmn; 15% tolerance)</td>
                        <td><span class="badge bg-success-subtle text-success fw-semibold">Acceptance Test (Pairs)</span></td>
                    </tr>
                    <tr>
                        <td class="fw-bold text-dark">8. Compressive Proof Load (1.5x)</td>
                        <td><span class="badge bg-light text-dark border">IRC:83 (Part II) / RDSO</span></td>
                        <td>No cracking, zero splitting, no de-lamination</td>
                        <td>No cracking, zero splitting, no de-lamination</td>
                        <td><span class="badge bg-danger-subtle text-danger fw-semibold">100% of Supplied Bearings</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</section>

<!-- ============================================================
     5. In-House Testing Laboratory & Equipment
     ============================================================ -->
<section class="py-5" id="lab-facilities" style="background:#ffffff;">
    <div class="container-fluid px-3 px-lg-5 py-3">
        <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay=".1s">
            <span class="badge px-3 py-1.5 rounded-pill font-monospace fw-bold text-uppercase mb-2"
                style="background: var(--theme-subtle); color: var(--theme-primary); font-size: 12px; letter-spacing: 1px;">
                Laboratory Infrastructure
            </span>
            <h2 class="fw-bold text-dark text-uppercase" style="font-family:'Oswald', sans-serif; font-size: clamp(26px, 3.2vw, 36px);">
                In-House Testing Equipment &amp; Facilities
            </h2>
            <p class="text-muted mx-auto mb-0" style="max-width:720px; font-size:15px; line-height: 1.7;">
                Our plant houses calibrated computerized testing machines ensuring complete verification prior to dispatch.
            </p>
        </div>

        <div class="row g-4">
            <!-- 1. Universal Testing Machine (UTM) -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".1s">
                <div class="lab-card shadow-sm h-100">
                    <img src="assets/pp_data/Machine_Images/webp/IMG20260913164338.webp" alt="Universal Testing Machine (UTM)">
                    <div class="p-3">
                        <h6 class="fw-bold text-dark mb-1" style="font-family: 'Oswald', sans-serif; font-size: 17px;">Universal Testing Machine (UTM)</h6>
                        <p class="small text-muted mb-0">Electronic UTM with extensometer for tensile strength and elongation at break testing.</p>
                    </div>
                </div>
            </div>

            <!-- 2. Thermal Ageing Oven -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".15s">
                <div class="lab-card shadow-sm h-100">
                    <img src="assets/pp_data/Machine_Images/webp/IMG20260913164548.webp" alt="Thermal Ageing Oven">
                    <div class="p-3">
                        <h6 class="fw-bold text-dark mb-1" style="font-family: 'Oswald', sans-serif; font-size: 17px;">Thermal Ageing Oven</h6>
                        <p class="small text-muted mb-0">Digital temperature-controlled circulating oven for 70°C / 72-hour thermal stability tests.</p>
                    </div>
                </div>
            </div>

            <!-- 3. Compressive Proof Load Frame -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="lab-card shadow-sm h-100">
                    <img src="assets/pp_data/Machine_Images/20/image-17.webp" alt="Compressive Proof Load Frame">
                    <div class="p-3">
                        <h6 class="fw-bold text-dark mb-1" style="font-family: 'Oswald', sans-serif; font-size: 17px;">Compressive Proof Load Frame</h6>
                        <p class="small text-muted mb-0">High-tonnage hydraulic test rig verifying 1.5x design vertical load without bulging failure.</p>
                    </div>
                </div>
            </div>

            <!-- 4. IRHD Hardness Tester -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".25s">
                <div class="lab-card shadow-sm h-100">
                    <img src="assets/img/img/banner/irhd-image.png" alt="IRHD Hardness Tester (International Rubber Hardness Degree)">
                    <div class="p-3">
                        <h6 class="fw-bold text-dark mb-1" style="font-family: 'Oswald', sans-serif; font-size: 17px;">IRHD Hardness Tester</h6>
                        <p class="small text-muted mb-0">International Rubber Hardness Degree (IRHD) tester for micro/macro hardness testing of bearing elastomers per IS:3400.</p>
                    </div>
                </div>
            </div>

            <!-- 5. Goodrich Flexometer -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="lab-card shadow-sm h-100">
                    <img src="assets/img/testing/goodrich-flexometer.jpg" alt="Goodrich Flexometer">
                    <div class="p-3">
                        <h6 class="fw-bold text-dark mb-1" style="font-family: 'Oswald', sans-serif; font-size: 17px;">Goodrich Flexometer</h6>
                        <p class="small text-muted mb-0">In-house testing of rubber compounds to evaluate heat build-up and flexing behaviour under repeated cyclic compression.</p>
                    </div>
                </div>
            </div>

            <!-- 6. Muffle Furnace -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".35s">
                <div class="lab-card shadow-sm h-100">
                    <img src="assets/pp_data/Machine_Images/webp/IMG20260913164602.webp" alt="Muffle Furnace">
                    <div class="p-3">
                        <h6 class="fw-bold text-dark mb-1" style="font-family: 'Oswald', sans-serif; font-size: 17px;">Muffle Furnace</h6>
                        <p class="small text-muted mb-0">Used for laboratory testing, such as determining ash content of rubber compounds, where applicable.</p>
                    </div>
                </div>
            </div>

            <!-- 7. Rubber Density Tester (Densimeter) -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                <div class="lab-card shadow-sm h-100">
                    <img src="assets/img/testing/rubber-density-tester.jpg" alt="Rubber Density Tester (Densimeter)">
                    <div class="p-3">
                        <h6 class="fw-bold text-dark mb-1" style="font-family: 'Oswald', sans-serif; font-size: 17px;">Rubber Density Tester (Densimeter)</h6>
                        <p class="small text-muted mb-0">Used to determine the density or specific gravity of rubber compounds and specimens.</p>
                    </div>
                </div>
            </div>

            <!-- 8. Oscillating Disc Rheometer (ODR) -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".45s">
                <div class="lab-card shadow-sm h-100">
                    <img src="assets/pp_data/Machine_Images/webp/IMG20260913164426.webp" alt="Oscillating Disc Rheometer (ODR)">
                    <div class="p-3">
                        <h6 class="fw-bold text-dark mb-1" style="font-family: 'Oswald', sans-serif; font-size: 17px;">Oscillating Disc Rheometer (ODR)</h6>
                        <p class="small text-muted mb-0">Precision rheometer evaluating scorch time, optimum cure time (Tc90), and batch-to-batch compounding consistency.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ============================================================
     6. Third-Party Witness Inspection, Accredited Agencies & Certificates
     ============================================================ -->
<section class="py-5" id="third-party-witness" style="background: #f8fafc; border-top: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0;">
    <div class="container-fluid px-3 px-lg-5 py-3">
        
        <!-- Section Header -->
        <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay=".1s">
            <span class="badge px-3 py-1.5 rounded-pill font-monospace fw-bold text-uppercase mb-2"
                style="background: var(--theme-subtle); color: var(--theme-primary); font-size: 12px; letter-spacing: 1px;">
                Stage-Wise Quality Surveillance
            </span>
            <h2 class="fw-bold text-dark text-uppercase" style="font-family:'Oswald', sans-serif; font-size: clamp(26px, 3.2vw, 36px);">
                Third-Party Witness Inspection &amp; Accredited Agencies
            </h2>
            <p class="text-muted mx-auto mb-0" style="max-width:760px; font-size:15px; line-height: 1.8;">
                We regularly facilitate independent third-party inspection (TPI) authorities and client representatives for raw-compound sampling, dimensional verification, dual-bearing shear modulus testing, and 100% finished bearing proof-load testing at our Nashik plant.
            </p>
        </div>

        <!-- Accredited Third-Party Inspection Agencies Grid -->
        <div class="row g-4 mb-5">
            <!-- 1. RITES Ltd. -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".1s">
                <div class="tpi-agency-card p-4 h-100 shadow-sm d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="tpi-icon-box">
                                <i class="fa-solid fa-train"></i>
                            </div>
                            <span class="badge rounded-pill px-3 py-1.5 small fw-semibold" style="background: rgba(2, 132, 199, 0.12); color: var(--theme-primary);">
                                Indian Railways &amp; Metro
                            </span>
                        </div>
                        <h5 class="fw-bold text-dark mb-1" style="font-family:'Oswald', sans-serif; font-size:19px;">RITES Ltd.</h5>
                        <small class="text-primary fw-semibold d-block mb-2">Ministry of Railways &bull; QA Division</small>
                        <p class="small text-muted mb-0" style="line-height:1.7; font-size:13.5px;">
                            Stage-wise raw compounding verification, vulcanizing cycle witness, dual-bearing shear modulus testing (G = 0.8–1.2 MPa), and 100% finished proof load test witnessing for Indian Railways and Metro rail bridge projects.
                        </p>
                    </div>
                    <div class="pt-3 mt-3 border-top d-flex align-items-center text-success small fw-semibold">
                        <i class="fa-solid fa-circle-check me-1.5"></i> Regular Stage-Wise Witness
                    </div>
                </div>
            </div>

            <!-- 2. DNV GL -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".15s">
                <div class="tpi-agency-card p-4 h-100 shadow-sm d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="tpi-icon-box">
                                <i class="fa-solid fa-shield-halved"></i>
                            </div>
                            <span class="badge rounded-pill px-3 py-1.5 small fw-semibold" style="background: rgba(2, 132, 199, 0.12); color: var(--theme-primary);">
                                Global Inspection Authority
                            </span>
                        </div>
                        <h5 class="fw-bold text-dark mb-1" style="font-family:'Oswald', sans-serif; font-size:19px;">DNV (Det Norske Veritas)</h5>
                        <small class="text-primary fw-semibold d-block mb-2">Independent International Surveillance</small>
                        <p class="small text-muted mb-0" style="line-height:1.7; font-size:13.5px;">
                            Independent third-party technical surveillance, quality system compliance audits, and proof load verification ensuring complete conformity to international and national standards.
                        </p>
                    </div>
                    <div class="pt-3 mt-3 border-top d-flex align-items-center text-success small fw-semibold">
                        <i class="fa-solid fa-circle-check me-1.5"></i> Third-Party Surveillance
                    </div>
                </div>
            </div>

            <!-- 3. SGS India -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="tpi-agency-card p-4 h-100 shadow-sm d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="tpi-icon-box">
                                <i class="fa-solid fa-flask-vial"></i>
                            </div>
                            <span class="badge rounded-pill px-3 py-1.5 small fw-semibold" style="background: rgba(2, 132, 199, 0.12); color: var(--theme-primary);">
                                Material &amp; Compound QA
                            </span>
                        </div>
                        <h5 class="fw-bold text-dark mb-1" style="font-family:'Oswald', sans-serif; font-size:19px;">SGS India Pvt. Ltd.</h5>
                        <small class="text-primary fw-semibold d-block mb-2">Testing, Inspection &amp; Certification</small>
                        <p class="small text-muted mb-0" style="line-height:1.7; font-size:13.5px;">
                            Independent sampling of rubber compounds for tensile strength, elongation at break, polymer identification, ash content, and accelerated thermal ageing verification.
                        </p>
                    </div>
                    <div class="pt-3 mt-3 border-top d-flex align-items-center text-success small fw-semibold">
                        <i class="fa-solid fa-circle-check me-1.5"></i> Chemical &amp; Tensile Witness
                    </div>
                </div>
            </div>

            <!-- 4. Engineers India Limited (EIL) -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".25s">
                <div class="tpi-agency-card p-4 h-100 shadow-sm d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="tpi-icon-box">
                                <i class="fa-solid fa-industry"></i>
                            </div>
                            <span class="badge rounded-pill px-3 py-1.5 small fw-semibold" style="background: rgba(2, 132, 199, 0.12); color: var(--theme-primary);">
                                Public Sector Enterprise
                            </span>
                        </div>
                        <h5 class="fw-bold text-dark mb-1" style="font-family:'Oswald', sans-serif; font-size:19px;">Engineers India Limited (EIL)</h5>
                        <small class="text-primary fw-semibold d-block mb-2">Govt. Infrastructure Surveillance</small>
                        <p class="small text-muted mb-0" style="line-height:1.7; font-size:13.5px;">
                            Rigorous third-party quality control inspections, factory audit compliance, raw material testing verification, and bearing release certification for prestigious mega projects.
                        </p>
                    </div>
                    <div class="pt-3 mt-3 border-top d-flex align-items-center text-success small fw-semibold">
                        <i class="fa-solid fa-circle-check me-1.5"></i> Major Infrastructure Witness
                    </div>
                </div>
            </div>

            <!-- 5. TÜV Rheinland / TÜV SÜD -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="tpi-agency-card p-4 h-100 shadow-sm d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="tpi-icon-box">
                                <i class="fa-solid fa-circle-check"></i>
                            </div>
                            <span class="badge rounded-pill px-3 py-1.5 small fw-semibold" style="background: rgba(2, 132, 199, 0.12); color: var(--theme-primary);">
                                Calibration &amp; Type Testing
                            </span>
                        </div>
                        <h5 class="fw-bold text-dark mb-1" style="font-family:'Oswald', sans-serif; font-size:19px;">TÜV Rheinland / TÜV SÜD</h5>
                        <small class="text-primary fw-semibold d-block mb-2">Technical Auditing &amp; Certification</small>
                        <p class="small text-muted mb-0" style="line-height:1.7; font-size:13.5px;">
                            Calibration audits of plant testing rigs (750T hydraulic press, UTM, proof-load frames) and type testing witness verification under rigorous cyclic shear conditions.
                        </p>
                    </div>
                    <div class="pt-3 mt-3 border-top d-flex align-items-center text-success small fw-semibold">
                        <i class="fa-solid fa-circle-check me-1.5"></i> Rig Calibration &amp; Audit
                    </div>
                </div>
            </div>

            <!-- 6. Bureau Veritas (BVQI) -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".35s">
                <div class="tpi-agency-card p-4 h-100 shadow-sm d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="tpi-icon-box">
                                <i class="fa-solid fa-certificate"></i>
                            </div>
                            <span class="badge rounded-pill px-3 py-1.5 small fw-semibold" style="background: rgba(2, 132, 199, 0.12); color: var(--theme-primary);">
                                Quality Management &amp; Inspection
                            </span>
                        </div>
                        <h5 class="fw-bold text-dark mb-1" style="font-family:'Oswald', sans-serif; font-size:19px;">Bureau Veritas (BVQI)</h5>
                        <small class="text-primary fw-semibold d-block mb-2">Quality Compliance &amp; Inspection</small>
                        <p class="small text-muted mb-0" style="line-height:1.7; font-size:13.5px;">
                            Finished elastomeric bearing dimensional tolerance verification, elastomer-to-steel bond peel testing, and official inspection release notes for bridge projects.
                        </p>
                    </div>
                    <div class="pt-3 mt-3 border-top d-flex align-items-center text-success small fw-semibold">
                        <i class="fa-solid fa-circle-check me-1.5"></i> Release Note Verification
                    </div>
                </div>
            </div>
        </div>

        <!-- Factory Third-Party Witness Testing Photographs -->
        <div class="mb-5">
            <div class="d-flex flex-wrap align-items-end justify-content-between mb-4 gap-3">
                <div>
                    <span class="badge px-3 py-1.5 rounded-pill font-monospace fw-bold text-uppercase mb-2"
                        style="background: var(--theme-subtle); color: var(--theme-primary); font-size: 12px; letter-spacing: 1px;">
                        Factory Floor Verification
                    </span>
                    <h3 class="fw-bold text-dark text-uppercase mb-0" style="font-family:'Oswald', sans-serif; font-size: clamp(22px, 2.5vw, 28px);">
                         Client Witness Inspection Photos
                    </h3>
                    <p class="text-muted small mt-1 mb-0">
                        Inspecting officers and client engineers observing proof-load verification and shear testing on the 750-Ton hydraulic test rig.
                    </p>
                </div>
            </div>

            <div class="row g-3">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".1s">
                    <div class="witness-photo-card open-testing-doc-modal h-100 shadow-sm"
                        data-doc-url="assets/img/img/banner/3.webp"
                        data-doc-title="Client Engineers & Inspecting Officers Witnessing Dual-Bearing Shear Modulus Test"
                        data-doc-type="image"
                        role="button"
                        tabindex="0">
                        <div class="witness-photo-wrap">
                            <img src="assets/img/img/banner/3.webp" alt="Client Engineers & Inspecting Officers Witnessing Test" loading="lazy">
                            <div class="testing-slider-overlay">
                                <span class="btn btn-light btn-sm rounded-pill fw-bold px-3 py-1.5 shadow">
                                    <i class="fa-solid fa-magnifying-glass-plus me-1 text-primary"></i> View Photo
                                </span>
                            </div>
                        </div>
                        <div class="p-3 bg-white">
                            <span class="badge bg-primary-subtle text-primary small mb-1">Shear Modulus Test</span>
                            <h6 class="fw-bold text-dark mb-1" style="font-size:14.5px;">Client Engineers Witnessing Dual-Bearing Test</h6>
                            <small class="text-muted" style="font-size:12px;">Inspection team observing horizontal shear deflection readings</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".15s">
                    <div class="witness-photo-card open-testing-doc-modal h-100 shadow-sm"
                        data-doc-url="assets/img/img/banner/4.webp"
                        data-doc-title="Stage-Wise Inspection on 750-Ton Computerized Hydraulic Test Rig"
                        data-doc-type="image"
                        role="button"
                        tabindex="0">
                        <div class="witness-photo-wrap">
                            <img src="assets/img/img/banner/4.webp" alt="Stage-Wise Inspection on Test Rig" loading="lazy">
                            <div class="testing-slider-overlay">
                                <span class="btn btn-light btn-sm rounded-pill fw-bold px-3 py-1.5 shadow">
                                    <i class="fa-solid fa-magnifying-glass-plus me-1 text-primary"></i> View Photo
                                </span>
                            </div>
                        </div>
                        <div class="p-3 bg-white">
                            <span class="badge bg-success-subtle text-success small mb-1">1.5x Proof Load</span>
                            <h6 class="fw-bold text-dark mb-1" style="font-size:14.5px;">Stage-Wise Hydraulic Press Inspection</h6>
                            <small class="text-muted" style="font-size:12px;">Vertical proof-load verification under full hydraulic pressure</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="witness-photo-card open-testing-doc-modal h-100 shadow-sm"
                        data-doc-url="assets/img/img/banner/6.webp"
                        data-doc-title="Load & Deflection Data Logging with Project Authority Officials"
                        data-doc-type="image"
                        role="button"
                        tabindex="0">
                        <div class="witness-photo-wrap">
                            <img src="assets/img/img/banner/6.webp" alt="Load & Deflection Data Logging" loading="lazy">
                            <div class="testing-slider-overlay">
                                <span class="btn btn-light btn-sm rounded-pill fw-bold px-3 py-1.5 shadow">
                                    <i class="fa-solid fa-magnifying-glass-plus me-1 text-primary"></i> View Photo
                                </span>
                            </div>
                        </div>
                        <div class="p-3 bg-white">
                            <span class="badge bg-danger-subtle text-danger small mb-1">Pressure Verification</span>
                            <h6 class="fw-bold text-dark mb-1" style="font-size:14.5px;">Live Pressure Gauge &amp; Load Logging</h6>
                            <small class="text-muted" style="font-size:12px;">Calibrated digital pressure transducer and dial recording</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".25s">
                    <div class="witness-photo-card open-testing-doc-modal h-100 shadow-sm"
                        data-doc-url="assets/img/img/banner/5.webp"
                        data-doc-title="Deflection Dial Gauge & Platen Parallelism Inspection"
                        data-doc-type="image"
                        role="button"
                        tabindex="0">
                        <div class="witness-photo-wrap" style="height:200px;">
                            <img src="assets/img/img/banner/5.webp" alt="Deflection Dial Gauge & Platen Parallelism Inspection" loading="lazy">
                            <div class="testing-slider-overlay">
                                <span class="btn btn-light btn-sm rounded-pill fw-bold px-3 py-1.5 shadow">
                                    <i class="fa-solid fa-magnifying-glass-plus me-1 text-primary"></i> View Photo
                                </span>
                            </div>
                        </div>
                        <div class="p-3 bg-white">
                            <h6 class="fw-bold text-dark mb-1" style="font-size:14.5px;">Platen Parallelism &amp; Dial Gauge Verification</h6>
                            <small class="text-muted" style="font-size:12px;">Verifying zero bulging failure and absence of elastomer splitting</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="witness-photo-card open-testing-doc-modal h-100 shadow-sm"
                        data-doc-url="assets/img/img/banner/2.webp"
                        data-doc-title="High-Capacity 750-Ton Shear & Compressive Proof Load Testing Machine"
                        data-doc-type="image"
                        role="button"
                        tabindex="0">
                        <div class="witness-photo-wrap" style="height:200px;">
                            <img src="assets/img/img/banner/2.webp" alt="High-Capacity 750-Ton Shear & Compressive Proof Load Testing Machine" loading="lazy">
                            <div class="testing-slider-overlay">
                                <span class="btn btn-light btn-sm rounded-pill fw-bold px-3 py-1.5 shadow">
                                    <i class="fa-solid fa-magnifying-glass-plus me-1 text-primary"></i> View Photo
                                </span>
                            </div>
                        </div>
                        <div class="p-3 bg-white">
                            <h6 class="fw-bold text-dark mb-1" style="font-size:14.5px;">750-Ton Shear &amp; Compression Testing Frame</h6>
                            <small class="text-muted" style="font-size:12px;">Equipped with dual horizontal jacks for simultaneous pair shear testing</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Official Third-Party Certificates & Client Approvals -->
        <div>
            <div class="d-flex flex-wrap align-items-end justify-content-between mb-4 gap-3">
                <div>
                    <span class="badge px-3 py-1.5 rounded-pill font-monospace fw-bold text-uppercase mb-2"
                        style="background: var(--theme-subtle); color: var(--theme-primary); font-size: 12px; letter-spacing: 1px;">
                        Verified Credentials
                    </span>
                    <h3 class="fw-bold text-dark text-uppercase mb-0" style="font-family:'Oswald', sans-serif; font-size: clamp(22px, 2.5vw, 28px);">
                        Third-Party &amp; Quality Approvals / Certificates
                    </h3>
                    <p class="text-muted small mt-1 mb-0">
                        Click on any certificate to view the verified official PDF document in the secure preview viewer.
                    </p>
                </div>
            </div>

            <div class="row g-4">
                <!-- 1. RDSO Technical Approval -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".1s">
                    <div class="tpi-cert-card p-4 h-100 shadow-sm d-flex flex-column justify-content-between">
                        <div>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <span class="badge rounded-pill px-3 py-1.5 small fw-semibold" style="background: rgba(220, 38, 38, 0.12); color: #dc2626;">
                                    <i class="fa-solid fa-train me-1"></i> RDSO BS-131
                                </span>
                                <i class="fa-solid fa-file-pdf text-danger fs-4"></i>
                            </div>
                            <h5 class="fw-bold text-dark mb-2" style="font-family:'Oswald', sans-serif; font-size:18px;">
                                RDSO Technical Approval
                            </h5>
                            <p class="small text-muted mb-3" style="line-height:1.6; font-size:13px;">
                                Research Designs and Standards Organisation (Indian Railways) official approval and test compliance conforming to RDSO BS-131 specifications.
                            </p>
                        </div>
                        <button type="button" class="btn btn-outline-danger btn-sm rounded-pill w-100 fw-bold open-testing-doc-modal d-flex align-items-center justify-content-center gap-1.5"
                            data-doc-url="assets/pp_data/Page 01/POLYMER DETAILS/NEW_RDSO.pdf"
                            data-doc-title="RDSO Indian Railways Technical Approval &amp; Inspection Regime"
                            data-doc-type="pdf">
                            <i class="fa-solid fa-eye"></i> <span>View RDSO Certificate</span>
                        </button>
                    </div>
                </div>

                <!-- 2. NHAI Quality Assurance Plan (QAP) -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".15s">
                    <div class="tpi-cert-card p-4 h-100 shadow-sm d-flex flex-column justify-content-between">
                        <div>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <span class="badge rounded-pill px-3 py-1.5 small fw-semibold" style="background: rgba(2, 132, 199, 0.12); color: var(--theme-primary);">
                                    <i class="fa-solid fa-road me-1"></i> IRC:83 (Part II) 2018
                                </span>
                                <i class="fa-solid fa-file-pdf text-danger fs-4"></i>
                            </div>
                            <h5 class="fw-bold text-dark mb-2" style="font-family:'Oswald', sans-serif; font-size:18px;">
                                NHAI Quality Assurance Plan
                            </h5>
                            <p class="small text-muted mb-3" style="line-height:1.6; font-size:13px;">
                                Official stage-wise Quality Assurance Plan approved for National Highway (NHAI) bridge projects detailing routine and acceptance test witness.
                            </p>
                        </div>
                        <button type="button" class="btn btn-outline-primary btn-sm rounded-pill w-100 fw-bold open-testing-doc-modal d-flex align-items-center justify-content-center gap-1.5"
                            data-doc-url="assets/pp_data/Page 06/QAP-IRC-_2018 (R).pdf"
                            data-doc-title="NHAI Quality Assurance Plan (QAP-IRC:83-2018)"
                            data-doc-type="pdf">
                            <i class="fa-solid fa-eye"></i> <span>View NHAI QAP Format</span>
                        </button>
                    </div>
                </div>

                <!-- 3. RDSO Railway Witness Checklist Format -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="tpi-cert-card p-4 h-100 shadow-sm d-flex flex-column justify-content-between">
                        <div>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <span class="badge rounded-pill px-3 py-1.5 small fw-semibold" style="background: rgba(14, 165, 233, 0.12); color: #0284c7;">
                                    <i class="fa-solid fa-clipboard-check me-1"></i> Railway QAP Format
                                </span>
                                <i class="fa-solid fa-file-pdf text-danger fs-4"></i>
                            </div>
                            <h5 class="fw-bold text-dark mb-2" style="font-family:'Oswald', sans-serif; font-size:18px;">
                                RDSO Inspection Checklist &amp; QAP
                            </h5>
                            <p class="small text-muted mb-3" style="line-height:1.6; font-size:13px;">
                                Official Indian Railways RDSO stage-wise inspection checklist format specifying test frequency, permissible limits, and witness signatures.
                            </p>
                        </div>
                        <button type="button" class="btn btn-outline-primary btn-sm rounded-pill w-100 fw-bold open-testing-doc-modal d-flex align-items-center justify-content-center gap-1.5"
                            data-doc-url="assets/pp_data/Page 06/Elastomeric QAP 2018 RDSO NEW - blank format.pdf"
                            data-doc-title="RDSO Indian Railways Inspection &amp; Witness Format"
                            data-doc-type="pdf">
                            <i class="fa-solid fa-eye"></i> <span>View Railway Format</span>
                        </button>
                    </div>
                </div>

                <!-- 4. ISO 9001:2015 Certification -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".25s">
                    <div class="tpi-cert-card p-4 h-100 shadow-sm d-flex flex-column justify-content-between">
                        <div>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <span class="badge rounded-pill px-3 py-1.5 small fw-semibold" style="background: rgba(22, 163, 74, 0.12); color: #16a34a;">
                                    <i class="fa-solid fa-certificate me-1"></i> ISO 9001:2015
                                </span>
                                <i class="fa-solid fa-file-image text-success fs-4"></i>
                            </div>
                            <h5 class="fw-bold text-dark mb-2" style="font-family:'Oswald', sans-serif; font-size:18px;">
                                ISO 9001:2015 Certification
                            </h5>
                            <p class="small text-muted mb-3" style="line-height:1.6; font-size:13px;">
                                Accredited Quality Management System certificate for manufacturing, inspection, proof-load testing, and supply of elastomeric bridge bearings.
                            </p>
                        </div>
                        <button type="button" class="btn btn-outline-success btn-sm rounded-pill w-100 fw-bold open-testing-doc-modal d-flex align-items-center justify-content-center gap-1.5"
                            data-doc-url="assets/pp_data/Page 01/POLYMER DETAILS/ISO CERTIFICATE 2027.png"
                            data-doc-title="ISO 9001:2015 Quality Management System Certificate"
                            data-doc-type="image">
                            <i class="fa-solid fa-eye"></i> <span>View ISO Certificate</span>
                        </button>
                    </div>
                </div>

                <!-- 5. Ashoka Buildcon Witness & Client Approval -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="tpi-cert-card p-4 h-100 shadow-sm d-flex flex-column justify-content-between">
                        <div>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <span class="badge rounded-pill px-3 py-1.5 small fw-semibold" style="background: rgba(217, 119, 6, 0.12); color: #d97706;">
                                    <i class="fa-solid fa-building me-1"></i> EPC Bridge Package
                                </span>
                                <i class="fa-solid fa-file-pdf text-danger fs-4"></i>
                            </div>
                            <h5 class="fw-bold text-dark mb-2" style="font-family:'Oswald', sans-serif; font-size:18px;">
                                Ashoka Buildcon Ltd. Approval
                            </h5>
                            <p class="small text-muted mb-3" style="line-height:1.6; font-size:13px;">
                                Official project engineer witness clearance and acceptance letter for high-tonnage elastomeric bearings supplied for National Highway bridge corridors.
                            </p>
                        </div>
                        <button type="button" class="btn btn-outline-warning btn-sm rounded-pill w-100 fw-bold text-dark open-testing-doc-modal d-flex align-items-center justify-content-center gap-1.5"
                            data-doc-url="assets/pp_data/Page 01/POLYMER DETAILS/NH APPROVED LETTERS/LETTER/ashoka-3.pdf"
                            data-doc-title="Ashoka Buildcon Ltd. - Bridge Bearing Witness Approval Letter"
                            data-doc-type="pdf">
                            <i class="fa-solid fa-eye"></i> <span>View Client Clearance</span>
                        </button>
                    </div>
                </div>

                <!-- 6. GHV India Witness & Supplier Clearance -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".35s">
                    <div class="tpi-cert-card p-4 h-100 shadow-sm d-flex flex-column justify-content-between">
                        <div>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <span class="badge rounded-pill px-3 py-1.5 small fw-semibold" style="background: rgba(100, 116, 139, 0.12); color: #475569;">
                                    <i class="fa-solid fa-bridge-water me-1"></i> Expressway Corridor
                                </span>
                                <i class="fa-solid fa-file-pdf text-danger fs-4"></i>
                            </div>
                            <h5 class="fw-bold text-dark mb-2" style="font-family:'Oswald', sans-serif; font-size:18px;">
                                GHV (India) Pvt. Ltd. Approval
                            </h5>
                            <p class="small text-muted mb-3" style="line-height:1.6; font-size:13px;">
                                Approved bridge bearing supplier letter verifying compliance with IRC:83 (Part II) specifications and third-party witness inspection acceptance.
                            </p>
                        </div>
                        <button type="button" class="btn btn-outline-secondary btn-sm rounded-pill w-100 fw-bold open-testing-doc-modal d-flex align-items-center justify-content-center gap-1.5"
                            data-doc-url="assets/pp_data/Page 01/POLYMER DETAILS/NH APPROVED LETTERS/LETTERS/GHV  3.10.23.pdf"
                            data-doc-title="GHV (India) Pvt. Ltd. - Expressway Bearing Inspection Clearance"
                            data-doc-type="pdf">
                            <i class="fa-solid fa-eye"></i> <span>View Client Clearance</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Schedule Witness Support Callout -->
        <div class="mt-5 p-4 rounded-4 border shadow-sm wow fadeInUp" data-wow-delay=".2s" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h5 class="fw-bold text-white mb-2" style="font-family:'Oswald', sans-serif; font-size:21px;">
                        <i class="fa-solid fa-users-viewfinder text-primary me-2"></i>Schedule Third-Party Witness Testing or Plant Audit
                    </h5>
                    <p class="small mb-0" style="color: #cbd5e1; line-height:1.7;">
                        We arrange complete facilities for visiting inspection officers from <strong>RITES, DNV, SGS, EIL, TUV, BVQI</strong>, and client quality teams, providing computerized calibration certificates, calibrated test rigs, and complete stage-wise inspection documentation at our Nashik plant.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                    <a href="contact.php" class="btn btn-primary rounded-pill px-4 py-2.5 fw-bold text-uppercase shadow-sm"
                        style="background:var(--theme-primary); border-color:var(--theme-primary); font-size:12.5px; letter-spacing:0.5px;">
                        <i class="fa-solid fa-calendar-check me-2"></i>Request Test Witness
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ============================================================
     6. Universal Testing Document & Image Lightbox Modal Viewer
     ============================================================ -->
<div class="modal fade" id="testingDocModal" tabindex="-1" aria-labelledby="testingDocModalLabel" aria-hidden="true" style="z-index: 10500;">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content border-0 shadow-lg rounded-4 overflow-hidden">
            
            <div class="modal-header text-white px-4 py-3" style="background: var(--theme-primary);">
                <div class="d-flex align-items-center">
                    <div class="modal-icon-wrap me-3 p-2 bg-white bg-opacity-25 rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                        <i id="testingDocModalIcon" class="fa-solid fa-file-pdf text-white fs-5"></i>
                    </div>
                    <div>
                        <h5 class="modal-title fw-bold text-white mb-0" id="testingDocModalLabel">Testing &amp; QA Document</h5>
                        <small id="testingDocModalSub" class="text-white-50" style="font-size: 12px;">Verified Quality &amp; Laboratory Inspection &bull; Polymer Products</small>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <button type="button" class="btn-close btn-close-white ms-2" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>

            <div class="modal-body p-0 position-relative" style="background: #0b1329; min-height: 480px;">
                <div id="testingDocModalLoader" class="position-absolute top-50 start-50 translate-middle text-center py-5">
                    <div class="spinner-border text-primary mb-2" role="status" style="width: 3rem; height: 3rem;">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <p class="text-white-50 small mb-0">Loading preview...</p>
                </div>

                <!-- PDF Frame -->
                <iframe id="testingDocModalIframe" src="" style="width: 100%; height: 75vh; border: none; display: none; background: #fff;" allowfullscreen></iframe>

                <!-- Image Preview -->
                <div id="testingDocModalImgWrap" class="p-2 p-md-4 text-center" style="display: none; min-height: 480px; max-height: 80vh; overflow: auto; background: #0b1329; align-items: center; justify-content: center;">
                    <img id="testingDocModalImage" src="" alt="Testing Preview" style="max-height: 76vh; max-width: 100%; width: auto; height: auto; object-fit: contain; image-rendering: -webkit-optimize-contrast; image-rendering: auto; box-shadow: 0 15px 35px rgba(0,0,0,0.6); border-radius: 10px; margin: auto; display: block;">
                </div>
            </div>

            <div class="modal-footer bg-white px-4 py-3 border-top d-flex justify-content-between align-items-center">
                <span class="text-muted small">
                    <i class="fa-solid fa-shield-check text-success me-1"></i> Quality &amp; Laboratory Inspection &bull; Polymer Products (Estd. 1978)
                </span>
                <button type="button" class="btn btn-dark btn-sm rounded-pill px-4 fw-bold" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal & Swiper Slider Scripts with Smooth Scroll Unlock -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    // 1. Initialize Testing Images Swiper Carousel (No duplicate clones or infinite loop repeat)
    if (typeof Swiper !== 'undefined') {
        new Swiper('.testing-swiper-container', {
            slidesPerView: 1,
            spaceBetween: 24,
            loop: false,
            rewind: false,
            autoplay: false,
            pagination: {
                el: '.testing-slider-pagination',
                clickable: true,
                dynamicBullets: true,
            },
            navigation: {
                nextEl: '.testing-slider-next',
                prevEl: '.testing-slider-prev',
            },
            breakpoints: {
                576: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                992: {
                    slidesPerView: 3,
                    spaceBetween: 24
                },
                1200: {
                    slidesPerView: 4,
                    spaceBetween: 24
                }
            }
        });
    }

    // 2. Testing Document & Image Lightbox Modal Handler
    const docModalEl = document.getElementById('testingDocModal');
    if (!docModalEl) return;

    const modalTitle = document.getElementById('testingDocModalLabel');
    const modalIcon = document.getElementById('testingDocModalIcon');
    const modalIframe = document.getElementById('testingDocModalIframe');
    const modalImgWrap = document.getElementById('testingDocModalImgWrap');
    const modalImage = document.getElementById('testingDocModalImage');
    const modalLoader = document.getElementById('testingDocModalLoader');

    function getModalInstance() {
        if (typeof bootstrap !== 'undefined' && bootstrap.Modal) {
            return bootstrap.Modal.getOrCreateInstance(docModalEl);
        }
        return null;
    }

    function unlockPageScroll() {
        modalIframe.src = '';
        modalImage.src = '';
        modalLoader.style.display = 'none';
        modalIframe.style.display = 'none';
        modalImgWrap.style.display = 'none';

        document.body.classList.remove('modal-open');
        document.body.style.removeProperty('overflow');
        document.body.style.removeProperty('overflow-y');
        document.body.style.removeProperty('padding-right');
        document.documentElement.style.removeProperty('overflow');
        document.documentElement.style.removeProperty('overflow-y');

        document.querySelectorAll('.modal-backdrop').forEach(function (backdrop) {
            backdrop.remove();
        });
    }

    document.querySelectorAll('.open-testing-doc-modal').forEach(function (btn) {
        function handleOpen(e) {
            e.preventDefault();

            const url = btn.getAttribute('data-doc-url');
            const title = btn.getAttribute('data-doc-title') || 'Testing & QA Inspection';
            const type = btn.getAttribute('data-doc-type') || (url && url.toLowerCase().match(/\.(png|jpg|jpeg|webp)$/) ? 'image' : 'pdf');

            if (!url) return;

            modalTitle.textContent = title;
            modalLoader.style.display = 'block';
            modalIframe.style.display = 'none';
            modalImgWrap.style.display = 'none';
            modalIframe.src = '';
            modalImage.src = '';

            if (type === 'image') {
                modalIcon.className = 'fa-solid fa-image text-white fs-5';
                
                function revealImage() {
                    modalLoader.style.display = 'none';
                    modalImgWrap.style.display = 'flex';
                }

                modalImage.onload = revealImage;
                modalImage.onerror = function () {
                    modalLoader.style.display = 'none';
                    modalImgWrap.style.display = 'flex';
                };
                
                modalImage.src = url;
                if (modalImage.complete && modalImage.naturalWidth > 0) {
                    revealImage();
                }
            } else {
                modalIcon.className = 'fa-solid fa-file-pdf text-white fs-5';
                const cleanUrl = url.split('#')[0];
                const pdfViewerUrl = cleanUrl + '#toolbar=0&navpanes=0&scrollbar=0';

                modalIframe.onload = function () {
                    modalLoader.style.display = 'none';
                    modalIframe.style.display = 'block';
                };
                modalIframe.src = pdfViewerUrl;
                
                setTimeout(function () {
                    modalLoader.style.display = 'none';
                    modalIframe.style.display = 'block';
                }, 600);
            }

            const bsModal = getModalInstance();
            if (bsModal) {
                bsModal.show();
            } else if (typeof $ !== 'undefined') {
                $(docModalEl).modal('show');
            }
        }

        btn.addEventListener('click', handleOpen);
        btn.addEventListener('keydown', function (e) {
            if (e.key === 'Enter' || e.key === ' ') {
                handleOpen(e);
            }
        });
    });

    // Close buttons directly
    docModalEl.querySelectorAll('[data-bs-dismiss="modal"], [data-dismiss="modal"], .btn-close').forEach(function (btn) {
        btn.addEventListener('click', function () {
            const bsModal = getModalInstance();
            if (bsModal) {
                bsModal.hide();
            } else if (typeof $ !== 'undefined') {
                $(docModalEl).modal('hide');
            }
            setTimeout(unlockPageScroll, 100);
        });
    });

    docModalEl.addEventListener('hidden.bs.modal', unlockPageScroll);
    docModalEl.addEventListener('hide.bs.modal', function () {
        setTimeout(unlockPageScroll, 150);
    });
});
</script>

<?php include_once 'partials/footer.php'; ?>
