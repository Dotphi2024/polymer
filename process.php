<?php 
$page_title = "Manufacturing Process, Machinery & Plant Gallery - Polymer Products";
$meta_description = "Step-by-step manufacturing process, advanced plant machinery, and comprehensive photo gallery of Polymer Products elastomeric bridge bearings facility in Nashik.";
include_once 'partials/header.php'; 

// Array of all 49 plant and process images with metadata
$process_images = [
    ["file" => "image-1.webp", "title" => "Hydraulic Vulcanizing Press", "cat" => "presses", "desc" => "Multi-daylight hydraulic vulcanizing press with digital PLC temperature controls."],
    ["file" => "image-2.webp", "title" => "Two-Roll Mixing Mill/Rubber Mixing Mill", "cat" => "presses", "desc" => "Heavy-duty hydraulic clamping for complete elastomeric cross-linking."],
    // ["file" => "image-3.webp", "title" => "Two-Roll Rubber Mixing Mill", "cat" => "compounding", "desc" => "Water-cooled open mixing mill for precision polymer compounding."],    
    ["file" => "image-4.webp", "title" => "Hydraulic Pressure Control Panel", "cat" => "presses", "desc" => "Digital pressure and cycle timer instrumentation on main press line."],
    ["file" => "image-5.webp", "title" => "Steel Plate Shearing Station", "cat" => "steel", "desc" => "Precision guillotine shearing of IS:2062 internal steel laminates."],
    ["file" => "image-6.webp", "title" => "Grit Shot-Blasting Chamber", "cat" => "steel", "desc" => "Enclosed grit blasting achieving Sa 2.5 profile for maximum bond."],
    ["file" => "image-7.webp", "title" => "Chemlok Primer Adhesive Coating", "cat" => "steel", "desc" => "Uniform double-coat application of high-strength elastomer bonding agents."],
    ["file" => "image-8.webp", "title" => "Mould Assembly & Stacking", "cat" => "assembly", "desc" => "Alternating stacking of primed steel laminates and rubber pre-forms."],
    ["file" => "image-9.webp", "title" => "Multi-Layer Stacking Alignment", "cat" => "assembly", "desc" => "Precise registration spacers ensuring uniform internal elastomer layers."],
    ["file" => "image-10.webp", "title" => "Mould Cavity Preparation", "cat" => "assembly", "desc" => "CNC-machined heavy steel moulds checked for dimensional accuracy."],
    ["file" => "image-11.webp", "title" => "Hydraulic Curing Temperature Log", "cat" => "presses", "desc" => "Multi-zone platen heating maintained at 150°C ± 5°C throughout cure."],
    ["file" => "image-12.webp", "title" => "Finished Bearings Quality Inspection", "cat" => "qa", "desc" => "Visual examination of outer protective rubber layer and edge geometry."],
    ["file" => "image-13.webp", "title" => "Side Rubber Thickness Verification", "cat" => "qa", "desc" => "Verification of ≥4mm side cover and ≥2.5mm outer cover thickness."],
    ["file" => "image-14.webp", "title" => "De-moulding & Flash Trimming", "cat" => "finished", "desc" => "Careful de-moulding and pneumatic flash trimming of cured bearings."],
    ["file" => "image-15.webp", "title" => "Shore-A Hardness Testing", "cat" => "qa", "desc" => "Calibrated durometer testing ensuring 60 ± 5 Shore A / IRHD compliance."],
    ["file" => "image-16.webp", "title" => "Digital Dimensional Inspection", "cat" => "qa", "desc" => "High-precision digital vernier checks on plan dimensions and overall height."],
    ["file" => "image-17.webp", "title" => "Proof Load Testing Rig (1.5x)", "cat" => "qa", "desc" => "Compressive proof load verification under computerized hydraulic test frame."],
    ["file" => "image-18.webp", "title" => "Compressive Load Verification Frame", "cat" => "qa", "desc" => "In-house compression testing verifying zero de-lamination and crack resistance."],
    ["file" => "image-19.webp", "title" => "Computerized QC Test Console", "cat" => "qa", "desc" => "Real-time load vs deflection data acquisition for MTC test records."],
    ["file" => "image-20.webp", "title" => "Heavy-Duty Compression Platen", "cat" => "qa", "desc" => "Precision-ground hardened steel platen for uniform vertical load distribution."]
     
];
?>

<style>
/* Custom Scoped Styles for Process & Gallery Page */
.process-hero-badge {
    background: var(--theme-subtle);
    border: 1px solid var(--theme-primary);
    color: var(--theme-lighter);
    font-size: 13px;
    letter-spacing: 1px;
}
.process-hero-showcase {
    perspective: 1000px;
}
.process-hero-img-box {
    transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1);
    background: rgba(255, 255, 255, 0.08);
    backdrop-filter: blur(14px);
    -webkit-backdrop-filter: blur(14px);
    border: 1px solid rgba(255, 255, 255, 0.22);
    box-shadow: 0 20px 45px rgba(0, 0, 0, 0.35);
}
.process-hero-img-box:hover {
    transform: translateY(-5px);
    border-color: rgba(147, 197, 253, 0.45) !important;
    box-shadow: 0 25px 55px rgba(2, 132, 199, 0.28) !important;
}
.process-hero-img-box img {
    transition: transform 0.45s ease;
    filter: drop-shadow(0 15px 25px rgba(0,0,0,0.45));
}
.process-hero-img-box:hover img {
    transform: scale(1.04);
}
.process-step-card {
    transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1);
    border: 1px solid #e2e8f0;
    background: #ffffff;
}
.process-step-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 16px 30px rgba(0, 0, 0, 0.08) !important;
    border-color: var(--theme-primary);
}
.step-num-badge {
    background: linear-gradient(135deg, var(--theme-primary) 0%, var(--theme-hover) 100%);
    box-shadow: 0 4px 10px var(--theme-glow);
}
.gallery-filter-btn {
    padding: 8px 18px;
    font-size: 13px;
    font-weight: 600;
    border-radius: 50rem;
    border: 1px solid #e2e8f0;
    background: #ffffff;
    color: #475569;
    transition: all 0.25s ease;
    cursor: pointer;
}
.gallery-filter-btn:hover,
.gallery-filter-btn.active {
    background: var(--theme-primary);
    border-color: var(--theme-primary);
    color: #ffffff;
    box-shadow: 0 4px 12px var(--theme-glow);
}
.plant-gallery-card {
    position: relative;
    overflow: hidden;
    border-radius: 14px;
    background: #0f172a;
    transition: all 0.35s ease;
}
.plant-gallery-card img {
    transition: transform 0.5s ease;
    width: 100%;
    height: 230px;
    object-fit: cover;
}
.plant-gallery-card:hover img {
    transform: scale(1.08);
}
.plant-gallery-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, rgba(15, 23, 42, 0.1) 0%, rgba(15, 23, 42, 0.85) 75%, rgba(15, 23, 42, 0.95) 100%);
    opacity: 0;
    transition: opacity 0.3s ease;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    padding: 16px;
}
.plant-gallery-card:hover .plant-gallery-overlay {
    opacity: 1;
}
.gallery-zoom-btn {
    position: absolute;
    top: 14px;
    right: 14px;
    width: 38px;
    height: 38px;
    border-radius: 50%;
    background: var(--theme-primary);
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 12px var(--theme-glow);
    transition: transform 0.2s ease;
    text-decoration: none;
}
.gallery-zoom-btn:hover {
    transform: scale(1.15);
    color: #fff;
}
.swiper-process-container {
    padding-bottom: 50px;
}
.swiper-process-slide {
    border-radius: 16px;
    overflow: hidden;
    background: #0b192c;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    transition: transform 0.35s ease, box-shadow 0.35s ease;
}
.swiper-process-slide:hover {
    transform: translateY(-4px);
    box-shadow: 0 16px 36px rgba(0, 0, 0, 0.25);
}
.swiper-process-slide img {
    height: 350px;
    width: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.45s ease;
}
.swiper-process-slide:hover img {
    transform: scale(1.06);
}
.swiper-button-next-custom,
.swiper-button-prev-custom {
    width: 44px;
    height: 44px;
    border-radius: 50%;
    background: #ffffff;
    color: var(--theme-primary);
    box-shadow: 0 4px 14px rgba(0, 0, 0, 0.15);
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.2s ease;
    z-index: 10;
}
.swiper-button-next-custom:hover,
.swiper-button-prev-custom:hover {
    background: var(--theme-primary);
    color: #ffffff;
    border: 1px solid #fff;
    box-shadow: 0 4px 16px var(--theme-glow);
}

/* Magnific Popup Custom Lightbox & Navigation Arrows */
.mfp-bg {
    background: rgba(9, 20, 36, 0.95) !important;
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    z-index: 99990 !important;
}
.mfp-wrap {
    z-index: 99991 !important;
}
.mfp-container {
    padding: 0 60px !important;
}
.mfp-arrow {
    width: 54px !important;
    height: 54px !important;
    background: #ffffff !important;
    border-radius: 50% !important;
    top: 50% !important;
    transform: translateY(-50%) !important;
    opacity: 0.95 !important;
    transition: all 0.25s cubic-bezier(0.165, 0.84, 0.44, 1) !important;
    border: 2px solid var(--theme-primary, #3691bf) !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    cursor: pointer !important;
    outline: none !important;
    z-index: 99999 !important;
    color: var(--theme-primary, #3691bf) !important;
    font-size: 20px !important;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4) !important;
    margin: 0 !important;
}
.mfp-arrow:before, .mfp-arrow:after {
    display: none !important;
}
.mfp-arrow i {
    color: var(--theme-primary, #3691bf) !important;
    font-size: 20px !important;
    line-height: 1 !important;
    transition: color 0.2s ease;
}
.mfp-arrow-left {
    left: 20px !important;
    right: auto !important;
}
.mfp-arrow-right {
    right: 20px !important;
    left: auto !important;
}
.mfp-arrow:hover {
    background: var(--theme-primary, #3691bf) !important;
    border-color: #ffffff !important;
    opacity: 1 !important;
    transform: translateY(-50%) scale(1.12) !important;
    box-shadow: 0 8px 24px var(--theme-glow, rgba(54, 145, 191, 0.6)) !important;
}
.mfp-arrow:hover i {
    color: #ffffff !important;
}
.mfp-close {
    width: 44px !important;
    height: 44px !important;
    line-height: 44px !important;
    background: rgba(255, 255, 255, 0.2) !important;
    border-radius: 50% !important;
    top: 18px !important;
    right: 20px !important;
    color: #ffffff !important;
    font-size: 26px !important;
    transition: all 0.2s ease !important;
    cursor: pointer !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    padding: 0 !important;
    z-index: 99999 !important;
    border: 1.5px solid rgba(255, 255, 255, 0.35) !important;
}
.mfp-close:hover {
    background: #ef4444 !important;
    border-color: #ef4444 !important;
    color: #ffffff !important;
    transform: rotate(90deg) scale(1.1);
}
.mfp-counter {
    color: #ffffff !important;
    font-size: 13px !important;
    font-weight: 600 !important;
    padding: 6px 16px !important;
    background: rgba(15, 23, 42, 0.85) !important;
    border-radius: 20px !important;
    top: 18px !important;
    left: 20px !important;
    right: auto !important;
    border: 1px solid rgba(255, 255, 255, 0.2);
    z-index: 99999 !important;
}
.mfp-title {
    color: #ffffff !important;
    font-size: 14px !important;
    font-weight: 600 !important;
    padding: 10px 16px !important;
    background: rgba(15, 23, 42, 0.9) !important;
    border-radius: 8px !important;
    margin-top: 10px !important;
    border: 1px solid rgba(255, 255, 255, 0.12);
}
.mfp-title:empty {
    display: none !important;
}
.mfp-figure figure {
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.6);
    border-radius: 12px;
    overflow: hidden;
}
.mfp-img {
    border-radius: 8px !important;
}

/* De Mattia Flex Tester Feature Card Styles */
.de-mattia-spec-card {
    transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1);
    background: #ffffff;
    border: 1px solid #e2e8f0;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
}
.de-mattia-spec-card:hover {
    box-shadow: 0 18px 40px rgba(54, 145, 191, 0.15) !important;
    border-color: var(--theme-primary, #3691bf) !important;
}
.de-mattia-img-box {
    background: #f0f7ff !important;
    border: 1px solid #bae6fd !important;
    transition: all 0.35s ease;
}
.de-mattia-img-box:hover {
    border-color: var(--theme-primary, #3691bf) !important;
    box-shadow: 0 12px 28px rgba(54, 145, 191, 0.18) !important;
}
.de-mattia-img-box img {
    transition: transform 0.45s ease;
}
.de-mattia-img-box:hover img {
    transform: scale(1.05);
}
.de-mattia-table tr:hover {
    background-color: #f0f7ff !important;
}
</style>

<!-- ============================================================
     1. Modern Hero Banner
     ============================================================ -->
<section class="ht-about-hero position-relative d-flex align-items-center"
    style="background: linear-gradient(135deg, rgba(9, 20, 36, 0.88) 0%, rgba(14, 34, 61, 0.65) 50%, rgba(6, 13, 24, 0.65) 100%), url('assets/img/img/banner/process.webp') center center / cover no-repeat; padding-top: 175px; padding-bottom: 75px; margin-top: -160px; min-height: 480px;">
    
    <div class="container-fluid px-3 px-lg-5 position-relative" style="z-index: 2;">
        <div class="row align-items-center justify-content-between g-4">
            
            <!-- Left Column: Content -->
            <div class="col-lg-7 wow fadeInLeft" data-wow-delay=".2s">
                <span class="badge px-3 py-2 mb-3 rounded-pill text-uppercase process-hero-badge">
                    <i class="fa-solid fa-industry me-2"></i>Nashik Plant Operations &amp; Machinery
                </span>
                <h1 class="text-white fw-bold mb-3"
                    style="font-family: 'Oswald', 'Saira-Medium', sans-serif; font-size: clamp(32px, 4.5vw, 50px); letter-spacing: -0.5px; line-height: 1.2;">
                    Detailed Manufacturing Process <span style="color: var(--theme-light);">&amp; Machinery Gallery</span>
                </h1>
                <p class="text-light mb-4" style="font-size: 16px; line-height: 1.8; max-width: 740px; color: #cbd5e1 !important;">
                    Our manufacturing operations follow a systematic 9-step sequence from raw polymer compounding to high-pressure hydraulic curing, CNC moulding, and computerized QA/QC proof-load testing.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="#process-sequence" class="btn btn-primary rounded-pill px-4 py-2 fw-bold text-uppercase" style="background:var(--theme-primary); border-color:var(--theme-primary); font-size:13px; letter-spacing:0.5px;">
                        <i class="fa-solid fa-gears me-2"></i>9-Step Process
                    </a>
                    <a href="#plant-slider" class="btn btn-outline-light rounded-pill px-4 py-2 fw-bold text-uppercase" style="font-size:13px; letter-spacing:0.5px;">
                        <i class="fa-solid fa-images me-2"></i>Interactive Slider
                    </a>
                    <!-- <a href="#full-gallery" class="btn btn-outline-light rounded-pill px-4 py-2 fw-bold text-uppercase" style="font-size:13px; letter-spacing:0.5px;">
                        <i class="fa-solid fa-photo-film me-2"></i>49+ Plant Photos
                    </a> -->
                </div>
            </div>

            <!-- Right Column: Process Showcase Image & Breadcrumb -->
            <div class="col-lg-5 text-center text-lg-end wow fadeInRight" data-wow-delay=".3s">
                <nav aria-label="breadcrumb" class="mb-3 d-none d-lg-block">
                    <ol class="breadcrumb justify-content-lg-end mb-0 bg-transparent p-0">
                        <li class="breadcrumb-item"><a href="index.php" class="text-white-50 text-decoration-none"><i class="fa-solid fa-house me-1"></i>Home</a></li>
                        <li class="breadcrumb-item active text-white fw-semibold" aria-current="page">Manufacturing Process</li>
                    </ol>
                </nav>

                <div class="process-hero-showcase d-inline-block text-center">
                    <div class="process-hero-img-box p-3 p-md-4 rounded-4 position-relative">
                        <img src="assets/img/img/banner/process-right.png" alt="Manufacturing Process & Machinery - Polymer Products" class="img-fluid"
                            style="max-height: 300px; width: auto; object-fit: contain;">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ============================================================
     2. Step-by-Step Manufacturing Process Flow
     ============================================================ -->
<section class="py-5" id="process-sequence" style="background:#f0f7ff;">
    <div class="container py-4">
        <div class="section-title text-center mb-5">
            <span class="badge px-3 py-2 mb-2 rounded-pill text-uppercase" style="background: var(--theme-subtle); color: var(--theme-primary); font-weight:700; font-size:12px; letter-spacing:1px;">
                Standard Operating Procedure (SOP)
            </span>
            <h2 class="fw-bold text-dark" style="font-family:'Oswald', sans-serif; font-size:32px; letter-spacing:0.5px;">
                 Manufacturing Workflow
            </h2>
            <p class="text-muted mx-auto" style="max-width:700px; font-size:15px;">
               Explore the step-by-step manufacturing workflow followed for our bearing products, from material preparation and processing to final inspection. The workflow highlights the key stages involved in maintaining consistent quality, precision, and product reliability. 

            </p>
        </div>

        <div class="row g-4">
            <!-- Step 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="p-4 rounded-4 shadow-sm h-100 position-relative process-step-card">
                    <span class="position-absolute top-0 end-0 text-white fw-bold px-3 py-1 rounded-bottom-start rounded-top-end step-num-badge" style="font-size:12px;">Step 01</span>
                    <div class="mb-3 d-inline-flex p-3 rounded-circle" style="background: var(--theme-subtle); color: var(--theme-primary);">
                        <i class="fa-solid fa-boxes-stacked fa-2x"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2" style="font-size:17px;">Raw Material Inspection &amp; Testing</h5>
                    <p class="small text-muted mb-0" style="line-height:1.7;">
                        Incoming inspection of raw Natural Rubber (NR) / Chloroprene (CR), carbon blacks, zinc oxide, vulcanizing agents, and mild steel plates (IS:2062). NABL test certificate verification.
                    </p>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="p-4 rounded-4 shadow-sm h-100 position-relative process-step-card">
                    <span class="position-absolute top-0 end-0 text-white fw-bold px-3 py-1 rounded-bottom-start rounded-top-end step-num-badge" style="font-size:12px;">Step 02</span>
                    <div class="mb-3 d-inline-flex p-3 rounded-circle" style="background: var(--theme-subtle); color: var(--theme-primary);">
                        <i class="fa-solid fa-mortar-pestle fa-2x"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2" style="font-size:17px;">Compounding &amp; Two-Roll Mixing</h5>
                    <p class="small text-muted mb-0" style="line-height:1.7;">
                        Precision weighing of chemicals and masterbatch mixing on heavy duty Two-Roll Open Mixing Mills to achieve homogeneous dispersion, uniform rheology, and batch-to-batch consistency.
                    </p>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="p-4 rounded-4 shadow-sm h-100 position-relative process-step-card">
                    <span class="position-absolute top-0 end-0 text-white fw-bold px-3 py-1 rounded-bottom-start rounded-top-end step-num-badge" style="font-size:12px;">Step 03</span>
                    <div class="mb-3 d-inline-flex p-3 rounded-circle" style="background: var(--theme-subtle); color: var(--theme-primary);">
                        <i class="fa-solid fa-sheet-plastic fa-2x"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2" style="font-size:17px;">Calendering &amp; Pre-Form Sheeting</h5>
                    <p class="small text-muted mb-0" style="line-height:1.7;">
                        Conversion of mixed rubber compound into continuous sheets of exact specified thickness with zero porosity and controlled dimensional tolerances using multi-roll calenders.
                    </p>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="col-lg-4 col-md-6">
                <div class="p-4 rounded-4 shadow-sm h-100 position-relative process-step-card">
                    <span class="position-absolute top-0 end-0 text-white fw-bold px-3 py-1 rounded-bottom-start rounded-top-end step-num-badge" style="font-size:12px;">Step 04</span>
                    <div class="mb-3 d-inline-flex p-3 rounded-circle" style="background: var(--theme-subtle); color: var(--theme-primary);">
                        <i class="fa-solid fa-shield-halved fa-2x"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2" style="font-size:17px;">Steel Plate Shot-Blasting &amp; Priming</h5>
                    <p class="small text-muted mb-0" style="line-height:1.7;">
                        Steel laminates are sheared, edges radiused (R &ge; 2mm), grit shot-blasted to Sa 2.5 finish to remove scale/rust, chemically degreased, and coated with Chemlok adhesive bonding agents.
                    </p>
                </div>
            </div>

            <!-- Step 5 -->
            <div class="col-lg-4 col-md-6">
                <div class="p-4 rounded-4 shadow-sm h-100 position-relative process-step-card">
                    <span class="position-absolute top-0 end-0 text-white fw-bold px-3 py-1 rounded-bottom-start rounded-top-end step-num-badge" style="font-size:12px;">Step 05</span>
                    <div class="mb-3 d-inline-flex p-3 rounded-circle" style="background: var(--theme-subtle); color: var(--theme-primary);">
                        <i class="fa-solid fa-cubes-stacked fa-2x"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2" style="font-size:17px;">Assembly &amp; Mould Loading</h5>
                    <p class="small text-muted mb-0" style="line-height:1.7;">
                        Systematic alternating stacking of primed steel laminates and un-vulcanized elastomer sheets inside heavy CNC-machined steel moulds with precise registration spacers.
                    </p>
                </div>
            </div>

            <!-- Step 6 -->
            <div class="col-lg-4 col-md-6">
                <div class="p-4 rounded-4 shadow-sm h-100 position-relative process-step-card">
                    <span class="position-absolute top-0 end-0 text-white fw-bold px-3 py-1 rounded-bottom-start rounded-top-end step-num-badge" style="font-size:12px;">Step 06</span>
                    <div class="mb-3 d-inline-flex p-3 rounded-circle" style="background: var(--theme-subtle); color: var(--theme-primary);">
                        <i class="fa-solid fa-temperature-arrow-up fa-2x"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2" style="font-size:17px;">High-Pressure Hydraulic Vulcanization</h5>
                    <p class="small text-muted mb-0" style="line-height:1.7;">
                        Curing under high hydraulic clamping pressure (over 1000 kN) and controlled temperature (145&deg;C - 160&deg;C) for pre-programmed cure cycle times to ensure total molecular cross-linking and permanent bond.
                    </p>
                </div>
            </div>

            <!-- Step 7 -->
            <div class="col-lg-4 col-md-6">
                <div class="p-4 rounded-4 shadow-sm h-100 position-relative process-step-card">
                    <span class="position-absolute top-0 end-0 text-white fw-bold px-3 py-1 rounded-bottom-start rounded-top-end step-num-badge" style="font-size:12px;">Step 07</span>
                    <div class="mb-3 d-inline-flex p-3 rounded-circle" style="background: var(--theme-subtle); color: var(--theme-primary);">
                        <i class="fa-solid fa-scissors fa-2x"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2" style="font-size:17px;">De-Moulding, Trimming &amp; Finishing</h5>
                    <p class="small text-muted mb-0" style="line-height:1.7;">
                        Careful extraction of vulcanized bearings, flash trimming, edge smoothing, inspection of outer protective rubber layer (&ge; 4mm side / 2.5mm top-bottom), and initial visual check.
                    </p>
                </div>
            </div>

            <!-- Step 8 -->
            <div class="col-lg-4 col-md-6">
                <div class="p-4 rounded-4 shadow-sm h-100 position-relative process-step-card">
                    <span class="position-absolute top-0 end-0 text-white fw-bold px-3 py-1 rounded-bottom-start rounded-top-end step-num-badge" style="font-size:12px;">Step 08</span>
                    <div class="mb-3 d-inline-flex p-3 rounded-circle" style="background: var(--theme-subtle); color: var(--theme-primary);">
                        <i class="fa-solid fa-stamp fa-2x"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2" style="font-size:17px;">Marking &amp; Lot Identification</h5>
                    <p class="small text-muted mb-0" style="line-height:1.7;">
                        Hot-embossing / stenciling of unique lot number, bearing type, dimensions, manufacturer code, and production date onto each bearing for permanent field traceability.
                    </p>
                </div>
            </div>

            <!-- Step 9 -->
            <div class="col-lg-4 col-md-6">
                <div class="p-4 rounded-4 shadow-sm h-100 position-relative process-step-card">
                    <span class="position-absolute top-0 end-0 text-white fw-bold px-3 py-1 rounded-bottom-start rounded-top-end step-num-badge" style="font-size:12px;">Step 09</span>
                    <div class="mb-3 d-inline-flex p-3 rounded-circle" style="background: var(--theme-subtle); color: var(--theme-primary);">
                        <i class="fa-solid fa-circle-check fa-2x"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2" style="font-size:17px;">QA/QC Proof Load &amp; Lab Testing</h5>
                    <p class="small text-muted mb-0" style="line-height:1.7;">
                        Proof load compressive stiffness testing, shear modulus determination, dimension verification, witness inspection by client engineers, and generation of manufacturer test certificate (MTC).
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     3. Interactive Process & Machinery Swiper Slider
     ============================================================ -->
<section class="py-5 position-relative" id="plant-slider" style="background: var(--theme-primary); color:#fff;">
    <div class="container py-4">
        <div class="d-flex flex-wrap justify-content-between align-items-end mb-4 gap-3">
            <div>
                <span class="badge px-3 py-2 mb-2 rounded-pill text-uppercase" style="background: #ffffffff; border: 1px solid var(--theme-primary); color: var(--theme-primary); font-size:12px; letter-spacing:1px; font-weight:600;">
                    Live Plant Operations
                </span>
                <h2 class="text-white fw-bold mb-0" style="font-family:'Oswald', sans-serif; font-size:32px; letter-spacing:0.5px;">
                    Interactive Plant Machinery &amp; Operations Slider
                </h2>
                <p class="text-white mb-0 small mt-1" style="max-width:650px;">
                    Swipe through live high-resolution images of our Nashik manufacturing line, testing frames, and curing presses.
                </p>
            </div>
            <!-- Custom Swiper Navigation Controls -->
            <div class="d-flex align-items-center gap-2">
                <button type="button" class="swiper-button-prev-custom" id="procPrevBtn" aria-label="Previous Slide">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
                <button type="button" class="swiper-button-next-custom" id="procNextBtn" aria-label="Next Slide">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>
        </div>

        <!-- Swiper Carousel Container -->
        <div class="swiper processSwiper">
            <div class="swiper-wrapper">
                <?php 
                // Display all 20 plant process images in interactive slider
                foreach ($process_images as $img):
                ?>
                <div class="swiper-slide">
                    <div class="swiper-process-slide position-relative"> 
                        <a href="assets/pp_data/Machine_Images/20/<?php echo $img['file']; ?>" class="popup-image d-block text-decoration-none"> 
                            <img src="assets/pp_data/Machine_Images/20/<?php echo $img['file']; ?>" alt="Plant Machinery & Operations" loading="lazy" style="cursor: pointer;">
                            <span class="gallery-zoom-btn" title="View Fullscreen">
                                <i class="fa-solid fa-expand"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <?php 
                endforeach; 
                ?>
            </div>
            <div class="swiper-pagination mt-4 text-center" style="position:relative;"></div>
        </div>
    </div>
</section>

<!-- ============================================================
     4. Comprehensive 49-Photo Plant & Process Gallery Grid
     ============================================================ -->
<!-- <section class="py-5" id="full-gallery" style="background:#f0f7ff; border-top:1px solid #e2e8f0; border-bottom:1px solid #e2e8f0;">
    <div class="container py-4">
        <div class="section-title text-center mb-4">
            <span class="badge px-3 py-2 mb-2 rounded-pill text-uppercase" style="background: var(--theme-subtle); color: var(--theme-primary); font-weight:700; font-size:12px; letter-spacing:1px;">
                Complete Photographic Record
            </span>
            <h2 class="fw-bold text-dark" style="font-family:'Oswald', sans-serif; font-size:32px; letter-spacing:0.5px;">
                Complete Plant Machinery &amp; Operations Gallery (49 Photos)
            </h2>
            <p class="text-muted mx-auto" style="max-width:700px; font-size:15px;">
                Explore all verified images of our plant machinery, testing laboratory, mould inventory, and finished stock. Click any image to view in high-resolution lightbox.
            </p>
        </div>

        
        <div class="d-flex flex-wrap justify-content-center gap-2 mb-4 pb-2" id="gallery-filters">
            <button class="gallery-filter-btn active" data-filter="all">All Photos (49)</button>
            <button class="gallery-filter-btn" data-filter="presses">Hydraulic Presses</button>
            <button class="gallery-filter-btn" data-filter="compounding">Compounding &amp; Mixing</button>
            <button class="gallery-filter-btn" data-filter="steel">Steel Prep &amp; Priming</button>
            <button class="gallery-filter-btn" data-filter="assembly">Moulds &amp; Assembly</button>
            <button class="gallery-filter-btn" data-filter="qa">QA/QC &amp; Proof Testing</button>
            <button class="gallery-filter-btn" data-filter="finished">Finished Stock &amp; Dispatch</button>
        </div>

   
        <div class="row g-3" id="gallery-grid">
            <?php foreach ($process_images as $i => $img): ?>
            <div class="col-xl-3 col-lg-4 col-md-6 gallery-item" data-category="<?php echo $img['cat']; ?>">
                <div class="plant-gallery-card shadow-sm h-100">
                    <img src="assets/pp_data/Machine_Images/<?php echo $img['file']; ?>" alt="<?php echo htmlspecialchars($img['title']); ?>" loading="lazy">
                    <div class="plant-gallery-overlay">
                        <span class="badge bg-primary px-2 py-1 mb-1 align-self-start text-uppercase" style="font-size:10px;">
                            #<?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?> &bull; <?php echo strtoupper($img['cat']); ?>
                        </span>
                        <h6 class="text-white fw-bold mb-1" style="font-size:14px; line-height:1.3;"><?php echo htmlspecialchars($img['title']); ?></h6>
                        <small class="text-white-50 d-block" style="font-size:11.5px; line-height:1.4;"><?php echo htmlspecialchars($img['desc']); ?></small>
                    </div>
                    <a href="assets/pp_data/Machine_Images/<?php echo $img['file']; ?>" class="gallery-zoom-btn popup-image" title="<?php echo htmlspecialchars($img['title']) . ' - ' . htmlspecialchars($img['desc']); ?>">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section> -->

<!-- ============================================================
     5. Plant Machinery List & Technical Specifications Table
     ============================================================ -->
<section class="py-5" id="machinery" style="background:#ffffff;">
    <div class="container py-4">
        <div class="section-title text-center mb-5">
            <span class="badge px-3 py-2 mb-2 rounded-pill text-uppercase" style="background: var(--theme-subtle); color: var(--theme-primary); font-weight:700; font-size:12px; letter-spacing:1px;">
                Plant Infrastructure
            </span>
            <h2 class="fw-bold text-dark" style="font-family:'Oswald', sans-serif; font-size:32px; letter-spacing:0.5px;">
                List of Plant Machinery &amp; In-House Facilities
            </h2>
            <p class="text-muted mx-auto" style="max-width:700px; font-size:15px;">
                Our Nashik facility is equipped with heavy industrial rubber processing machinery, hydraulic curing presses, grit-blasting stations, and precision testing equipment.
            </p>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-lg-3 col-md-6">
                <div class="p-3 bg-light rounded-4 shadow-sm border h-100 text-center">
                    <a href="assets/pp_data/Machine_Images/20/image-1.webp" class="popup-image d-block mb-3 overflow-hidden rounded-3" title="Hydraulic Vulcanizing Press - High tonnage multi-daylight heated hydraulic presses with PLC digital temperature controls.">
                        <img src="assets/pp_data/Machine_Images/20/image-1.webp" alt="Hydraulic Press" class="img-fluid" style="height:170px; width:100%; object-fit:cover; transition: transform 0.3s ease; cursor: pointer;">
                    </a>
                    <h6 class="fw-bold text-dark mb-1">Hydraulic Marking/Lot Stamping Press</h6>
                    <small class="text-muted">High tonnage multi-daylight heated hydraulic presses with PLC digital temperature controls.</small>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="p-3 bg-light rounded-4 shadow-sm border h-100 text-center">
                    <a href="assets/pp_data/Machine_Images/20/image-9.webp" class="popup-image d-block mb-3 overflow-hidden rounded-3" title="Two-Roll Rubber Mixing Mill - Heavy-duty water-cooled open mixing mill for compound mastication.">
                        <img src="assets/pp_data/Machine_Images/20/image-9.webp" alt="Two-Roll Mixing Mill" class="img-fluid" style="height:170px; width:100%; object-fit:cover; transition: transform 0.3s ease; cursor: pointer;">
                    </a>
                    <h6 class="fw-bold text-dark mb-1">Two-Roll Mixing Mill/Rubber Mixing Mill</h6>
                    <small class="text-muted">Heavy-duty water-cooled open mixing mill for compound mastication and additive homogenization.</small>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="p-3 bg-light rounded-4 shadow-sm border h-100 text-center">
                    <a href="assets/pp_data/Machine_Images/20/image-4.webp" class="popup-image d-block mb-3 overflow-hidden rounded-3" title="Straighting m/c for H.r Sheet &Plates - Steel plate guillotine shearing and enclosed grit shot-blasting chamber.">
                        <img src="assets/pp_data/Machine_Images/20/image-4.webp" alt="Steel Preparation" class="img-fluid" style="height:170px; width:100%; object-fit:cover; transition: transform 0.3s ease; cursor: pointer;">
                    </a>
                    <h6 class="fw-bold text-dark mb-1">Straighting m/c for H.r Sheet & Plates</h6>
                    <small class="text-muted">Steel plate guillotine shearing, edge radiusing grinders, and enclosed grit shot-blasting chamber.</small>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="p-3 bg-light rounded-4 shadow-sm border h-100 text-center">
                    <a href="assets/pp_data/Machine_Images/20/image-16.webp" class="popup-image d-block mb-3 overflow-hidden rounded-3" title="Shearing M/c for H.R Sheet - Computerized compressive load test frame calibrated for up to 1.5x design load verification.">
                        <img src="assets/pp_data/Machine_Images/20/image-16.webp" alt="Testing Equipment" class="img-fluid" style="height:170px; width:100%; object-fit:cover; transition: transform 0.3s ease; cursor: pointer;">
                    </a>
                    <h6 class="fw-bold text-dark mb-1">Shearing M/c for H.R Sheet</h6>
                    <small class="text-muted">Computerized compressive load test frame calibrated for up to 1.5x design load verification.</small>
                </div>
            </div>
        </div>

        <!-- ============================================================
             De Mattia Flex Tester - Dedicated Machine Feature Card
             ============================================================ -->
        <div class="card border-0 rounded-4 mb-5 overflow-hidden de-mattia-spec-card" style="border-top: 4px solid var(--theme-primary, #3691bf) !important;">
            <div class="card-body p-4 p-lg-5">
                <div class="row g-4 g-lg-5 align-items-center">
                    
                    <!-- Left: High-Res Machine Image Showcase & Light Blue Background -->
                    <div class="col-lg-5">
                        <div class="position-relative rounded-4 overflow-hidden shadow-sm border text-center de-mattia-img-box p-3 p-md-4 d-flex align-items-center justify-content-center" style="min-height: 350px;">
                            <!-- Lightbox Zoom Link with Magnific Popup -->
                            <a href="assets/img/img/products/de-mettia.webp" class="popup-image d-block position-relative w-100" title="De Mattia Flex Tester (Model: IK/DMFT/01) - 300 cpm Dynamic Flex Cracking &amp; Cut Growth Resistance Testing Machine">
                                <img src="assets/img/img/products/de-mettia.webp" alt="De Mattia Flex Tester Model IK/DMFT/01" class="img-fluid" style="max-height: 310px; width: auto; max-width: 100%; object-fit: contain; cursor: pointer; filter: drop-shadow(0 10px 22px rgba(54, 145, 191, 0.15));">
                                <div class="position-absolute top-0 start-0 m-3">
                                    <span class="badge px-3 py-2 text-uppercase fw-bold rounded-pill shadow-sm" style="background: var(--theme-primary, #3691bf); color: #ffffff; font-size: 11px; letter-spacing: 0.8px;">
                                        <i class="fa-solid fa-microchip me-1.5"></i>Model: IK/DMFT/01
                                    </span>
                                </div>
                                <span class="gallery-zoom-btn" title="Click to View Fullscreen" style="bottom: 14px; right: 14px; top: auto; background: var(--theme-primary, #3691bf);">
                                    <i class="fa-solid fa-magnifying-glass-plus"></i>
                                </span>
                            </a>
                        </div>
                    </div>

                    <!-- Right: Technical Specifications Table & Application Info -->
                    <div class="col-lg-7">
                        <div class="d-flex flex-wrap align-items-center gap-2 mb-2">
                            <span class="badge px-3 py-1.5 rounded-pill text-uppercase font-monospace" style="background: var(--theme-subtle); color: var(--theme-primary); border: 1px solid var(--theme-primary); font-size: 11.5px; letter-spacing: 0.8px; font-weight: 700;">
                                <i class="fa-solid fa-vial-circle-check me-1.5"></i>Rubber Testing Apparatus
                            </span>
                            <span class="badge bg-light text-secondary border px-2.5 py-1 rounded-pill small">
                                In-House QC Laboratory
                            </span>
                        </div>

                        <h3 class="fw-bold text-dark mb-1" style="font-family: 'Oswald', sans-serif; font-size: clamp(24px, 2.5vw, 32px); letter-spacing: 0.5px;">
                            De Mattia Flex Tester
                        </h3>
                        <p class="text-muted mb-3" style="font-size: 14.5px; line-height: 1.6;">
                            Specialized dynamic flexing and fatigue endurance testing apparatus engineered to evaluate surface crack initiation and cut growth resistance of vulcanized rubber compounds in accordance with <strong>ASTM D430</strong>, <strong>ISO 132</strong>, and <strong>IS:3400 (Part 8)</strong>.
                        </p>

                        <!-- Complete Technical Specifications Grid -->
                        <div class="table-responsive rounded-3 border mb-3">
                            <table class="table table-sm table-striped align-middle mb-0 de-mattia-table" style="font-size: 13px;">
                                <tbody>
                                    <tr>
                                        <th class="ps-3 py-2 text-secondary" style="width: 42%;"><i class="fa-solid fa-fingerprint text-primary me-2"></i>Model Number / Name</th>
                                        <td class="pe-3 py-2"><span class="badge bg-dark font-monospace px-2.5 py-1">IK/DMFT/01</span></td>
                                    </tr>
                                    <tr>
                                        <th class="ps-3 py-2 text-secondary"><i class="fa-solid fa-arrows-spin text-primary me-2"></i>Flexing Frequency</th>
                                        <td class="pe-3 py-2 fw-semibold text-dark">300 cpm</td>
                                    </tr>
                                    <tr>
                                        <th class="ps-3 py-2 text-secondary"><i class="fa-solid fa-arrows-left-right-to-line text-primary me-2"></i>Maximum Opening Between Grips</th>
                                        <td class="pe-3 py-2 fw-semibold text-dark">75 mm</td>
                                    </tr>
                                    <tr>
                                        <th class="ps-3 py-2 text-secondary"><i class="fa-solid fa-arrows-left-right text-primary me-2"></i>Minimum Opening Between Grips</th>
                                        <td class="pe-3 py-2 fw-semibold text-dark">10 mm</td>
                                    </tr>
                                    <tr>
                                        <th class="ps-3 py-2 text-secondary"><i class="fa-solid fa-rotate text-primary me-2"></i>Flexing Angle</th>
                                        <td class="pe-3 py-2 fw-semibold text-dark">300 cpm</td>
                                    </tr>
                                    <tr>
                                        <th class="ps-3 py-2 text-secondary"><i class="fa-solid fa-grip text-primary me-2"></i>Grips</th>
                                        <td class="pe-3 py-2 fw-semibold text-dark">75 mm (adjustable)/ 57.15 mm (adjustable)</td>
                                    </tr>
                                    <tr>
                                        <th class="ps-3 py-2 text-secondary"><i class="fa-solid fa-bolt text-primary me-2"></i>Motor Power</th>
                                        <td class="pe-3 py-2 fw-semibold text-dark">0.5 hp</td>
                                    </tr>
                                    <tr>
                                        <th class="ps-3 py-2 text-secondary"><i class="fa-solid fa-plug text-primary me-2"></i>Voltage</th>
                                        <td class="pe-3 py-2 fw-semibold text-dark">230 v</td>
                                    </tr>
                                    <tr>
                                        <th class="ps-3 py-2 text-secondary"><i class="fa-solid fa-charging-station text-primary me-2"></i>Power Source</th>
                                        <td class="pe-3 py-2 fw-semibold text-dark">Electric</td>
                                    </tr>
                                    <tr>
                                        <th class="ps-3 py-2 text-secondary"><i class="fa-solid fa-gears text-primary me-2"></i>Motor</th>
                                        <td class="pe-3 py-2 fw-semibold text-dark">compression set apparatus</td>
                                    </tr>
                                    <tr>
                                        <th class="ps-3 py-2 text-secondary"><i class="fa-solid fa-circle-minus text-primary me-2"></i>Power</th>
                                        <td class="pe-3 py-2 text-muted">NIL</td>
                                    </tr>
                                    <tr>
                                        <th class="ps-3 py-2 text-secondary"><i class="fa-solid fa-swatchbook text-primary me-2"></i>Color</th>
                                        <td class="pe-3 py-2">
                                            <span class="badge bg-light text-dark border px-2.5 py-1 font-monospace fw-bold">
                                                GOLDEN
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Standards & Compliance Tags -->
                        <div class="d-flex flex-wrap align-items-center gap-2 pt-1">
                            <span class="small fw-bold text-secondary me-1"><i class="fa-solid fa-certificate text-primary me-1"></i>Test Compliance:</span>
                            <span class="badge bg-light text-dark border px-2 py-1 font-monospace" style="font-size: 11px;">ASTM D430</span>
                            <span class="badge bg-light text-dark border px-2 py-1 font-monospace" style="font-size: 11px;">ISO 132</span>
                            <span class="badge bg-light text-dark border px-2 py-1 font-monospace" style="font-size: 11px;">IS:3400 (Part 8)</span>
                            <span class="badge bg-light text-dark border px-2 py-1 font-monospace" style="font-size: 11px;">IRC:83 (Part II)</span>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <!-- Machineries Table -->
        <div class="p-4 bg-light rounded-4 border shadow-sm">
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-3 gap-2">
                <h5 class="fw-bold text-dark mb-0" style="font-family:'Oswald', sans-serif; font-size:20px;">
                    <i class="fa-solid fa-list-ol text-primary me-2"></i>Complete Summary of Plant Machineries
                </h5>
                <span class="badge bg-dark text-light px-3 py-2 rounded-pill small">Nashik Facility Machinery Register</span>
            </div>
            <div class="table-responsive bg-white rounded-3 border">
                <table class="table table-bordered table-striped small align-middle mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th style="width:70px;">Sr. No.</th>
                            <th>Machine Description</th>
                            <th>Quantity</th>
                            <th>Capacity / Specifications</th>
                            <th>Application &amp; Function</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="fw-bold text-center">1</td>
                            <td class="fw-semibold">Multi-Daylight Hydraulic Vulcanizing Presses</td>
                            <td><span class="badge bg-primary">4 Units</span></td>
                            <td>Up to 1200 Metric Tonnes with Digital PLC</td>
                            <td>Vulcanization &amp; Curing of Elastomeric Bearings</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-center">2</td>
                            <td class="fw-semibold">Two-Roll Rubber Mixing Mills</td>
                            <td><span class="badge bg-primary">2 Units</span></td>
                            <td>16" x 42" &amp; 14" x 36" Water Cooled</td>
                            <td>Elastomer Compounding &amp; Sheeting</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-center">3</td>
                            <td class="fw-semibold">Enclosed Shot Blasting Machine</td>
                            <td><span class="badge bg-primary">1 Unit</span></td>
                            <td>Sa 2.5 Standard Surface Anchor Profile</td>
                            <td>Steel Laminate Scale Removal &amp; Surface Prep</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-center">4</td>
                            <td class="fw-semibold">Hydraulic Guillotine Shearing Machine</td>
                            <td><span class="badge bg-primary">2 Units</span></td>
                            <td>Cuts up to 12mm thick IS:2062 Mild Steel Plates</td>
                            <td>Steel Laminate Precision Sizing</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-center">5</td>
                            <td class="fw-semibold">Precision Bearing Moulds</td>
                            <td><span class="badge bg-primary">50+ Sets</span></td>
                            <td>All Standard IRC / RDSO Geometries</td>
                            <td>Moulding &amp; Dimensional Control</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-center">6</td>
                            <td class="fw-semibold">Universal Testing Machine (UTM)-used for Tensile Test, Tear Test ,Elongation and Adhesion.</td>
                            <td><span class="badge bg-primary">1 Unit</span></td>
                            <td>Calibrated Electronic UTM with Extensometer</td>
                            <td>Tensile Strength (&ge;17 MPa) &amp; Elongation (&ge;400%)</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-center">7</td>
                            <td class="fw-semibold">Thermal Ageing Oven</td>
                            <td><span class="badge bg-primary">1 Unit</span></td>
                            <td>Air-circulated Digital Oven (up to 200°C)</td>
                            <td>70°C / 72h Thermal Ageing Resistance Tests</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-center">8</td>
                            <td class="fw-semibold">Shore A Hardness Tester and Thickness Gauges</td>
                            <td><span class="badge bg-primary">Multiple</span></td>
                            <td>Calibrated with Master Test Blocks</td>
                            <td>Routine QC &amp; Stage-Wise Inspection</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-center">9</td>
                            <td class="fw-semibold">De Mattia Flex Tester (Model: IK/DMFT/01)</td>
                            <td><span class="badge bg-primary">1 Unit</span></td>
                            <td>300 cpm &bull; 75 mm Opening &bull; 0.5 hp &bull; 230 v Electric (Golden)</td>
                            <td>Dynamic Rubber Flex Cracking &amp; Cut Growth Resistance (ASTM D430 / ISO 132)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</section>

<!-- ============================================================
     6. Technical QA & Inquiry CTA
     ============================================================ -->
<section class="py-5" style="background: var(--theme-primary); color:#cbd5e1; border-top:1px solid rgba(255,255,255,0.1);">
    <div class="container text-center py-3">
        <span class="badge px-3 py-2 mb-2 rounded-pill text-uppercase" style="background: white; border: 1px solid var(--theme-primary); color: var(--theme-primary); font-size:12px; letter-spacing:1px; font-weight:600;">
            Plant Visit &amp; Witness Inspection 
        </span>
        <h3 class="text-white fw-bold mb-2" style="font-family:'Oswald', sans-serif; font-size:28px;">
            Schedule Factory Inspection or Request Detailed QAP Documents
        </h3>
        <p class="text-white mb-4 mx-auto" style="max-width:650px; font-size:15px;">
            We welcome third-party inspection agencies (RITES, DNV, EIL, SGS, TUV) and client engineers for stage-wise witness testing at our Nashik plant.
        </p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
            <a href="testing.php" class="btn   rounded-pill px-4 py-2 fw-bold text-uppercase" style="background:var(--theme-primary); border-color:var(--theme-primary); color:#3691bf; background-color: white; font-size:13px; letter-spacing:0.5px;">
                <i class="fa-solid fa-vial-circle-check me-2"></i>Testing &amp; QA/QC System
            </a>
            <a href="contact.php" class="btn btn-outline-light rounded-pill px-4 py-2 fw-bold text-uppercase" style="font-size:13px; letter-spacing:0.5px;">
                <i class="fa-solid fa-paper-plane me-2"></i>Contact Plant Operations
            </a>
        </div>
    </div>
</section>

<!-- Page Specific JS for Swiper Slider, Gallery Filtering & Magnific Popup -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    // 1. Initialize Swiper Slider for Process Highlights
    if (typeof Swiper !== 'undefined') {
        const procSwiper = new Swiper('.processSwiper', {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '#procNextBtn',
                prevEl: '#procPrevBtn',
            },
            breakpoints: {
                576: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                992: {
                    slidesPerView: 3,
                    spaceBetween: 24,
                },
                1200: {
                    slidesPerView: 4,
                    spaceBetween: 24,
                }
            }
        });
    }

    // 2. Filter tabs for 49 Photos Gallery
    const filterButtons = document.querySelectorAll('.gallery-filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');

    filterButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            filterButtons.forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            const filterValue = this.getAttribute('data-filter');

            galleryItems.forEach(item => {
                if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });

    // 3. Initialize Magnific Popup with Gallery Next/Prev Navigation
    if (window.jQuery && typeof jQuery.fn.magnificPopup !== 'undefined') {
        // Swiper Gallery Popup with Next/Previous Navigation
        jQuery('.processSwiper').magnificPopup({
            delegate: '.swiper-slide:not(.swiper-slide-duplicate) a.popup-image',
            type: 'image',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"><i class="fa-solid fa-chevron-%dir%"></i></button>',
                tPrev: 'Previous Image (Left arrow)',
                tNext: 'Next Image (Right arrow)',
                tCounter: '<span class="mfp-counter">%curr% of %total%</span>'
            },
            image: {
                tError: '<a href="%url%">The image</a> could not be loaded.',
                titleSrc: function(item) {
                    return item.el.attr('title') || '';
                }
            },
            mainClass: 'mfp-fade',
            removalDelay: 300,
            closeOnContentClick: false,
            midClick: true
        });

        // Handle clicks on Swiper looped duplicate slides seamlessly
        jQuery(document).on('click', '.processSwiper .swiper-slide-duplicate a.popup-image', function(e) {
            e.preventDefault();
            var targetHref = jQuery(this).attr('href');
            var originalLinks = jQuery('.processSwiper .swiper-slide:not(.swiper-slide-duplicate) a.popup-image');
            var matchIdx = 0;
            originalLinks.each(function(index) {
                if (jQuery(this).attr('href') === targetHref) {
                    matchIdx = index;
                    return false;
                }
            });
            jQuery('.processSwiper').magnificPopup('open', matchIdx);
        });

        // Machinery Cards Popup Gallery with Next/Previous Navigation
        jQuery('#machinery').magnificPopup({
            delegate: 'a.popup-image',
            type: 'image',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"><i class="fa-solid fa-chevron-%dir%"></i></button>',
                tPrev: 'Previous Image (Left arrow)',
                tNext: 'Next Image (Right arrow)',
                tCounter: '<span class="mfp-counter">%curr% of %total%</span>'
            },
            image: {
                titleSrc: function(item) {
                    return item.el.attr('title') || '';
                }
            },
            mainClass: 'mfp-fade',
            removalDelay: 300
        });
    }
});
</script>

<?php include_once 'partials/footer.php'; ?>
