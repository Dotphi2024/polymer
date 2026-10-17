<?php 
$page_title = "Product Identification & Traceability System - Polymer Products";
$meta_description = "Complete 9-stage product identification flowchart, indelible lot marking format, inspection tags, and MTC traceability documentation for elastomeric bridge bearings.";
include_once 'partials/header.php'; 
?>

<style>
/* Page Wrapper & Overflow Containment for Mobile */
.ident-page-wrapper {
    width: 100%;
    overflow-x: hidden;
    position: relative;
}

.ident-hero-badge {
    background: var(--theme-subtle);
    border: 1px solid var(--theme-primary);
    color: var(--theme-lighter);
    font-size: 13px;
    letter-spacing: 1px;
}
.flow-step-card {
    transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1);
    border: 1px solid #e2e8f0;
    background: #ffffff;
    border-radius: 16px;
    position: relative;
    overflow: hidden;
}
.flow-step-card:hover {
    transform: translateY(-7px);
    box-shadow: 0 20px 35px rgba(15, 23, 42, 0.08) !important;
    border-color: var(--theme-primary);
}
.flow-step-card.highlight-step {
    border: 2px solid var(--theme-primary);
    background: linear-gradient(180deg, #ffffff 0%, #f0f7ff 100%);
}
.step-number-badge {
    position: absolute;
    top: 14px;
    right: 14px;
    width: 34px;
    height: 34px;
    background: #f1f5f9;
    color: #475569;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 800;
    font-size: 13px;
    border: 1px solid #cbd5e1;
    transition: all 0.3s ease;
}
.flow-step-card:hover .step-number-badge {
    background: var(--theme-primary);
    color: #ffffff;
    border-color: var(--theme-primary);
}
.flow-step-icon-box {
    width: 54px;
    height: 54px;
    border-radius: 14px;
    background: var(--theme-subtle);
    color: var(--theme-primary);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.25rem;
    transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
    border: 1px solid rgba(10, 88, 202, 0.14);
}
.flow-step-card:hover .flow-step-icon-box {
    background: linear-gradient(135deg, var(--theme-primary) 0%, var(--theme-hover) 100%);
    color: #ffffff;
    border-color: var(--theme-primary);
    transform: scale(1.08) translateY(-2px);
    box-shadow: 0 8px 18px var(--theme-glow);
}
.flow-step-card.highlight-step .flow-step-icon-box {
    background: linear-gradient(135deg, var(--theme-primary) 0%, var(--theme-hover) 100%);
    color: #ffffff;
    border-color: var(--theme-primary);
    box-shadow: 0 6px 16px var(--theme-glow);
}
.marking-box {
    background: #0f172a;
    color: #38bdf8;
    border-left: 4px solid var(--theme-primary) !important;
    font-family: 'Courier New', Courier, monospace;
    letter-spacing: 0.5px;
    word-break: break-word;
    overflow-wrap: anywhere;
}
.qc-tag-card {
    border: 2px dashed #94a3b8;
    background: #f0f7ff;
}

/* End-to-End Traceability Matrix Mobile Responsive & Custom Scrollbar */
.trace-matrix-wrap {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    border-radius: 16px;
    position: relative;
    border: 1px solid #e2e8f0;
    background: #ffffff;
    scrollbar-width: thin;
    scrollbar-color: var(--theme-primary, #3691bf) #f1f5f9;
}
.trace-matrix-wrap::-webkit-scrollbar {
    height: 8px;
}
.trace-matrix-wrap::-webkit-scrollbar-track {
    background: #f1f5f9;
    border-radius: 10px;
}
.trace-matrix-wrap::-webkit-scrollbar-thumb {
    background: var(--theme-primary, #3691bf);
    border-radius: 10px;
    border: 2px solid #f1f5f9;
}
.trace-matrix-wrap::-webkit-scrollbar-thumb:hover {
    background: #0284c7;
}

.trace-matrix-table {
    min-width: 780px;
    width: 100%;
}
.trace-matrix-table th {
    background: #0f172a;
    color: #ffffff;
    font-weight: 600;
    font-size: 13px;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    white-space: nowrap;
    padding: 14px 18px;
}
.trace-matrix-table td {
    padding: 14px 18px;
    vertical-align: middle;
}
.trace-matrix-table tbody tr {
    transition: background-color 0.2s ease;
}
.trace-matrix-table tbody tr:hover {
    background-color: #f8fafc;
}

.matrix-scroll-hint {
    background: linear-gradient(90deg, #f0f7ff 0%, #ffffff 100%);
    border: 1px dashed #bae6fd !important;
}

.flow-stepper-item {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    padding: 10px 14px;
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 13px;
    font-weight: 600;
    color: #1e293b;
    box-shadow: 0 2px 8px rgba(0,0,0,0.02);
}
.flow-stepper-num {
    width: 26px;
    height: 26px;
    border-radius: 50%;
    background: var(--theme-primary);
    color: #ffffff;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 11px;
    font-weight: 800;
    flex-shrink: 0;
}
.ident-hero-showcase {
    perspective: 1000px;
}
.ident-hero-img-box {
    transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1);
    background: rgba(255, 255, 255, 0.08);
    backdrop-filter: blur(14px);
    -webkit-backdrop-filter: blur(14px);
    border: 1px solid rgba(255, 255, 255, 0.22);
    box-shadow: 0 20px 45px rgba(0, 0, 0, 0.35);
}
.ident-hero-img-box:hover {
    transform: translateY(-5px);
    border-color: rgba(147, 197, 253, 0.45) !important;
    box-shadow: 0 25px 55px rgba(2, 132, 199, 0.28) !important;
}
.ident-hero-img-box img {
    transition: transform 0.45s ease;
    filter: drop-shadow(0 15px 25px rgba(0,0,0,0.45));
}
.ident-hero-img-box:hover img {
    transform: scale(1.04);
}

@media (max-width: 991.98px) {
    .ht-about-hero {
        padding-top: 145px !important;
        padding-bottom: 50px !important;
        margin-top: -140px !important;
        min-height: auto !important;
    }
    .flow-stepper-item {
        font-size: 12px;
        padding: 8px 11px;
    }
}

@media (max-width: 767.98px) {
    .trace-matrix-table {
        min-width: 720px;
        font-size: 12.5px;
    }
    .trace-matrix-table th {
        font-size: 12px;
        padding: 11px 14px;
    }
    .trace-matrix-table td {
        padding: 11px 14px;
    }
    .marking-box strong {
        font-size: 13px !important;
        line-height: 1.6;
    }
}

@media (max-width: 575.98px) {
    .ht-about-hero {
        padding-top: 135px !important;
        padding-bottom: 40px !important;
        margin-top: -120px !important;
    }
    .flow-stepper-item {
        width: 100%;
        justify-content: flex-start;
    }
}
</style>

<!-- ============================================================
     1. Modern Hero Banner
     ============================================================ -->
<div class="ident-page-wrapper">
<section class="ht-about-hero position-relative d-flex align-items-center"
    style="background: linear-gradient(135deg, rgba(26, 28, 31, 0.64) 0%, rgba(12, 13, 15, 0.55) 50%, rgba(19, 37, 65, 0.75) 100%), url('assets/img/img/banner/identification-banner-1.webp') center center / cover no-repeat; padding-top: 175px; padding-bottom: 75px; margin-top: -160px; min-height: 480px;">
    
    <div class="container-fluid px-3 px-lg-5 position-relative" style="z-index: 2;">
        <div class="row align-items-center justify-content-between g-4">
            
            <!-- Left Column: Content -->
            <div class="col-lg-7 wow fadeInLeft" data-wow-delay=".2s">
                <span class="badge px-3 py-2 mb-3 rounded-pill text-uppercase ident-hero-badge">
                    <i class="fa-solid fa-stamp me-2"></i>Full Field Traceability &amp; QA Architecture
                </span>
                <h1 class="text-white fw-bold mb-3"
                    style="font-family: 'Oswald', 'Saira-Medium', sans-serif; font-size: clamp(32px, 4.2vw, 52px); letter-spacing: -0.5px; line-height: 1.2;">
                    Product Identification <span style="color: var(--theme-light);">&amp; Traceability System</span>
                </h1>
                <p class="text-light mb-4" style="font-size: 16px; line-height: 1.8; max-width: 740px; color: #ecececff !important;">
                    Polymer Products enforces a strict 9-stage closed-loop identification architecture. Every single elastomeric bridge bearing is individually marked and permanently traceable to its virgin raw polymer lot, internal steel reinforcement batch, vulcanization press cure parameters, and certified NABL/IRC:83 test reports.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="#traceability-flow" class="btn btn-primary rounded-pill px-4 py-2 fw-bold text-uppercase" style="background:var(--theme-primary); border-color:var(--theme-primary); font-size:13px; letter-spacing:0.5px;">
                        <i class="fa-solid fa-diagram-project me-2"></i>9-Stage Flow Chart
                    </a>
                    <a href="#marking-standard" class="btn btn-outline-light rounded-pill px-4 py-2 fw-bold text-uppercase" style="font-size:13px; letter-spacing:0.5px;">
                        <i class="fa-solid fa-barcode me-2"></i>Marking &amp; QC Tag Format
                    </a>
                    <a href="#traceability-matrix" class="btn btn-outline-info rounded-pill px-4 py-2 fw-bold text-uppercase" style="font-size:13px; letter-spacing:0.5px;">
                        <i class="fa-solid fa-table-list me-2"></i>Traceability Matrix
                    </a>
                </div>
            </div>

            <!-- Right Column: Identification Showcase Image & Breadcrumb -->
            <div class="col-lg-5 text-center text-lg-end wow fadeInRight" data-wow-delay=".3s">
                <nav aria-label="breadcrumb" class="mb-3 d-none d-lg-block">
                    <ol class="breadcrumb justify-content-lg-end mb-0 bg-transparent p-0">
                        <li class="breadcrumb-item"><a href="index.php" class="text-white-50 text-decoration-none"><i class="fa-solid fa-house me-1"></i>Home</a></li>
                        <li class="breadcrumb-item active text-white fw-semibold" aria-current="page">Identification &amp; Traceability</li>
                    </ol>
                </nav>

                <div class="ident-hero-showcase d-inline-block text-center">
                    <div class="ident-hero-img-box p-3 p-md-4 rounded-4 position-relative">
                        <img src="assets/img/img/banner/indetification-right.png" alt="Product Identification & Traceability System - Polymer Products" class="img-fluid"
                            style="max-height: 300px; width: auto; object-fit: contain;">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ============================================================
     2. Four Key Pillars of Traceability
     ============================================================ -->
<section class="py-4 bg-light border-bottom">
    <div class="container py-2">
        <div class="row g-3 text-center">
            <div class="col-6 col-lg-3">
                <div class="p-3 bg-white rounded-3 shadow-sm border h-100">
                    <i class="fa-solid fa-layer-group text-primary fs-4 mb-2"></i>
                    <h6 class="fw-bold text-dark mb-1" style="font-size:15px;">100% Inward Tested</h6>
                    <p class="small text-muted mb-0">Raw elastomer &amp; steel shims</p>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="p-3 bg-white rounded-3 shadow-sm border h-100">
                    <i class="fa-solid fa-fingerprint text-primary fs-4 mb-2"></i>
                    <h6 class="fw-bold text-dark mb-1" style="font-size:15px;">Unique ID Numbering</h6>
                    <p class="small text-muted mb-0">Individually serialized units</p>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="p-3 bg-white rounded-3 shadow-sm border h-100">
                    <i class="fa-solid fa-stamp text-primary fs-4 mb-2"></i>
                    <h6 class="fw-bold text-dark mb-1" style="font-size:15px;">Indelible Hot Embossing</h6>
                    <p class="small text-muted mb-0">Permanent side identification</p>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="p-3 bg-white rounded-3 shadow-sm border h-100">
                    <i class="fa-solid fa-certificate text-primary fs-4 mb-2"></i>
                    <h6 class="fw-bold text-dark mb-1" style="font-size:15px;">Correlated MTC Dossier</h6>
                    <p class="small text-muted mb-0">Full proof load test correlation</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     3. Complete 9-Stage Product Identification Flow Chart
     ============================================================ -->
<section class="py-5" id="traceability-flow" style="background:#ffffff;">
    <div class="container py-4">
        
        <div class="section-title text-center mb-4">
            <span class="badge px-3 py-2 mb-2 rounded-pill text-uppercase" style="background: var(--theme-subtle); color: var(--theme-primary); font-weight:700; font-size:12px; letter-spacing:1px;">
                Official Quality Protocol
            </span>
            <h2 class="fw-bold text-dark" style="font-family:'Oswald', sans-serif; font-size:34px; letter-spacing:0.5px;">
                IDENTIFICATION 
            </h2>
            <p class="text-muted mx-auto" style="max-width:720px; font-size:15px; line-height:1.7;">
                A clear identification system helps ensure that each bearing can be traced and verified through its relevant product and manufacturing details.
            </p>
            <P class="text-muted mx-auto" style="max-width:720px; font-size:15px; line-height:1.7;">The identification format is illustrated in the chart below.
</p>
        </div>

        <!-- Visual Sequential Stepper Summary -->
        <div class="p-3 rounded-4 bg-light border mb-5 shadow-sm">
            <div class="d-flex flex-wrap align-items-center justify-content-center gap-2">
                <div class="flow-stepper-item"><span class="flow-stepper-num">01</span> Raw Material ID</div>
                <i class="fa-solid fa-chevron-right text-muted d-none d-md-inline small"></i>
                <div class="flow-stepper-item"><span class="flow-stepper-num">02</span> Batch Assignment</div>
                <i class="fa-solid fa-chevron-right text-muted d-none d-md-inline small"></i>
                <div class="flow-stepper-item"><span class="flow-stepper-num">03</span> Process Routing</div>
                <i class="fa-solid fa-chevron-right text-muted d-none d-md-inline small"></i>
                <div class="flow-stepper-item"><span class="flow-stepper-num">04</span> Shaping &amp; Moulding</div>
                <i class="fa-solid fa-chevron-right text-muted d-none d-md-inline small"></i>
                <div class="flow-stepper-item"><span class="flow-stepper-num">05</span> Product ID (Lot / Size / UID)</div>
                <i class="fa-solid fa-chevron-right text-muted d-none d-md-inline small"></i>
                <div class="flow-stepper-item"><span class="flow-stepper-num">06</span> QC &amp; Testing</div>
                <i class="fa-solid fa-chevron-right text-muted d-none d-md-inline small"></i>
                <div class="flow-stepper-item"><span class="flow-stepper-num">07</span> Packaging &amp; Labelling</div>
                <i class="fa-solid fa-chevron-right text-muted d-none d-md-inline small"></i>
                <div class="flow-stepper-item"><span class="flow-stepper-num">08</span> Inventory &amp; Storage</div>
                <i class="fa-solid fa-chevron-right text-muted d-none d-md-inline small"></i>
                <div class="flow-stepper-item"><span class="flow-stepper-num">09</span> Shipping &amp; Distribution</div>
            </div>
        </div>

        <!-- 9 Flow Steps Grid -->
        <div class="row g-4">
            
            <!-- Step 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="p-4 shadow-sm h-100 flow-step-card">
                    <span class="step-number-badge">01</span>
                    <div class="flow-step-icon-box">
                        <i class="fa-solid fa-boxes-stacked fa-xl"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2" style="font-size:18px;">Raw Material Identification</h5>
                    <p class="small text-muted mb-3" style="line-height:1.6;">
                        Rigorous inward inspection of raw natural rubber/chloroprene polymer, steel laminate plates, bonding adhesives, and curing agents against Mill Test Certificates (MTC).
                    </p>
                    <div class="p-2.5 rounded-3 bg-light border small text-secondary">
                        <i class="fa-solid fa-circle-check text-primary me-1"></i><strong>Key Output:</strong> Inward Goods Receipt Note (GRN) &amp; Lab Batch Verification.
                    </div>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="p-4 shadow-sm h-100 flow-step-card">
                    <span class="step-number-badge">02</span>
                    <div class="flow-step-icon-box">
                        <i class="fa-solid fa-barcode fa-xl"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2" style="font-size:18px;">Batch Number Assignment</h5>
                    <p class="small text-muted mb-3" style="line-height:1.6;">
                        Every weighed masterbatch of rubber compound and chemically treated steel shim lot is assigned a unique, traceable internal Batch ID code.
                    </p>
                    <div class="p-2.5 rounded-3 bg-light border small text-secondary">
                        <i class="fa-solid fa-circle-check text-primary me-1"></i><strong>Key Output:</strong> Digital Compounding Log &amp; Rheometer Cure Trace.
                    </div>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="p-4 shadow-sm h-100 flow-step-card">
                    <span class="step-number-badge">03</span>
                    <div class="flow-step-icon-box">
                        <i class="fa-solid fa-diagram-project fa-xl"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2" style="font-size:18px;">Production Process Identification</h5>
                    <p class="small text-muted mb-3" style="line-height:1.6;">
                        Routing job cards accompany the materials across two-roll mills, calender sheeting, steel shot-blasting, and Chemlok primer coating stations.
                    </p>
                    <div class="p-2.5 rounded-3 bg-light border small text-secondary">
                        <i class="fa-solid fa-circle-check text-primary me-1"></i><strong>Key Output:</strong> Stage-wise Machine &amp; Operator Routing Travel Cards.
                    </div>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="col-md-6 col-lg-4">
                <div class="p-4 shadow-sm h-100 flow-step-card">
                    <span class="step-number-badge">04</span>
                    <div class="flow-step-icon-box">
                        <i class="fa-solid fa-industry fa-xl"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2" style="font-size:18px;">Shaping &amp; Moulding</h5>
                    <p class="small text-muted mb-3" style="line-height:1.6;">
                        Elastomer layers and steel plates are precisely assembled in high-precision machined moulds and vulcanized under monitored hydraulic press pressure &amp; temperature.
                    </p>
                    <div class="p-2.5 rounded-3 bg-light border small text-secondary">
                        <i class="fa-solid fa-circle-check text-primary me-1"></i><strong>Key Output:</strong> Press Cycle Heat Log &amp; Cure Timing Data Recorder.
                    </div>
                </div>
            </div>

            <!-- Step 5 (CORE HIGHLIGHT) -->
            <div class="col-md-6 col-lg-4">
                <div class="p-4 shadow-sm h-100 flow-step-card ">
                    <span class="step-number-badge" style="background:var(--theme-primary); color:#fff; border-color:var(--theme-primary);">05</span>
                    <div class="flow-step-icon-box">
                        <i class="fa-solid fa-stamp fa-xl"></i>
                    </div>
                    <!-- <span class="badge bg-primary text-white px-2 py-1 mb-1 rounded-pill small float-end">CORE STAMP</span> -->
                    <h5 class="fw-bold text-dark mb-2" style="font-size:18px;">PRODUCT IDENTIFICATION</h5>
                    <p class="small text-muted mb-3" style="line-height:1.6;">
                        <strong>LOT NO., BEARING SIZE &amp; UNIQUE IDENTIFICATION NO.</strong><br>
                        Permanent indelible hot-embossed marking vulcanized directly onto the outer protective elastomer side layer.
                    </p>
                    <div class="p-2.5 rounded-3 bg-white border small text-primary fw-bold font-monospace">
                        PP / [SIZE] / [LOT NO.] / [UID] / [MM-YY]
                    </div>
                </div>
            </div>

            <!-- Step 6 -->
            <div class="col-md-6 col-lg-4">
                <div class="p-4 shadow-sm h-100 flow-step-card">
                    <span class="step-number-badge">06</span>
                    <div class="flow-step-icon-box">
                        <i class="fa-solid fa-vial-circle-check fa-xl"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2" style="font-size:18px;">Quality Control &amp; Testing</h5>
                    <p class="small text-muted mb-3" style="line-height:1.6;">
                        Comprehensive verification of dimensional tolerances, elastomer hardness (IRHD), compressive stiffness, shear modulus (G), and 1.5&times; design proof load testing.
                    </p>
                    <div class="p-2.5 rounded-3 bg-light border small text-secondary">
                        <i class="fa-solid fa-circle-check text-primary me-1"></i><strong>Key Output:</strong> Certified Physical Test Report &amp; QC Approval Stamp.
                    </div>
                </div>
            </div>

            <!-- Step 7 -->
            <div class="col-md-6 col-lg-4">
                <div class="p-4 shadow-sm h-100 flow-step-card">
                    <span class="step-number-badge">07</span>
                    <div class="flow-step-icon-box">
                        <i class="fa-solid fa-box-open fa-xl"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2" style="font-size:18px;">Packaging &amp; Labelling</h5>
                    <p class="small text-muted mb-3" style="line-height:1.6;">
                        High-durability waterproof polythene shrink-wrapping with heavy-duty weather-proof inspection tags, client project markers, and pallet ID barcodes affixed.
                    </p>
                    <div class="p-2.5 rounded-3 bg-light border small text-secondary">
                        <i class="fa-solid fa-circle-check text-primary me-1"></i><strong>Key Output:</strong> Inspection Verification Tag &amp; Pallet Manifest.
                    </div>
                </div>
            </div>

            <!-- Step 8 -->
            <div class="col-md-6 col-lg-4">
                <div class="p-4 shadow-sm h-100 flow-step-card">
                    <span class="step-number-badge">08</span>
                    <div class="flow-step-icon-box">
                        <i class="fa-solid fa-warehouse fa-xl"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2" style="font-size:18px;">Inventory Tracking &amp; Storage</h5>
                    <p class="small text-muted mb-3" style="line-height:1.6;">
                        Stored in dedicated covered, temperature-controlled racking bays segregated by client project code, inspection release status, and curing maturity dates.
                    </p>
                    <div class="p-2.5 rounded-3 bg-light border small text-secondary">
                        <i class="fa-solid fa-circle-check text-primary me-1"></i><strong>Key Output:</strong> ERP Warehouse Bin Location &amp; Stock Ledger Entry.
                    </div>
                </div>
            </div>

            <!-- Step 9 -->
            <div class="col-md-6 col-lg-4">
                <div class="p-4 shadow-sm h-100 flow-step-card">
                    <span class="step-number-badge">09</span>
                    <div class="flow-step-icon-box">
                        <i class="fa-solid fa-truck-fast fa-xl"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2" style="font-size:18px;">Shipping &amp; Distribution</h5>
                    <p class="small text-muted mb-3" style="line-height:1.6;">
                        Dispatch on wooden pallets with correlated Manufacturer Test Certificate (MTC), Inspection Release Note, Gate Pass, and Site Installation Instructions.
                    </p>
                    <div class="p-2.5 rounded-3 bg-light border small text-secondary">
                        <i class="fa-solid fa-circle-check text-primary me-1"></i><strong>Key Output:</strong> Final MTC Dossier, Delivery Challan &amp; Consignment Dispatch.
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- ============================================================
     4. Marking Protocol & Inspection Tag Mockup
     ============================================================ -->
<section class="py-5" id="marking-standard" style="background:#f0f7ff; border-top:1px solid #e2e8f0; border-bottom:1px solid #e2e8f0;">
    <div class="container py-4">
        
        <div class="row g-4 g-lg-5 align-items-center">
            <div class="col-lg-6">
                <span class="badge px-3 py-2 mb-2 rounded-pill text-uppercase" style="background: var(--theme-subtle); color: var(--theme-primary); font-weight:700; font-size:12px; letter-spacing:1px;">
                    INDELIBLE MARKING SPECIFICATION
                </span>
                <h2 class="fw-bold text-dark mb-3" style="font-family:'Oswald', sans-serif; font-size:30px;">Permanent Side Marking &amp; Verification Protocol</h2>
                <p class="text-secondary" style="line-height:1.8; font-size:15px;">
                    Each elastomeric bearing manufactured by <strong>Polymer Products</strong> carries an indelible identification marking on its outer side surface. This enables bridge engineers, site quality auditors, and highway authorities to instantly verify design ratings, compound lot, and manufacturing provenance decades after installation.
                </p>
                
                <div class="p-4 bg-white rounded-4 border shadow-sm mt-4">
                    <h5 class="fw-bold text-dark mb-3" style="font-size:17px;"><i class="fa-solid fa-stamp text-primary me-2"></i>Standard Indelible Marking Format</h5>
                    <div class="p-3 rounded-3 marking-box mb-3 font-monospace">
                        <strong class="d-block" style="font-size:15px;">PP / [L x W x H] / [LOT NO.] / [UID NO.] / [MM-YY] / [IRC:83]</strong>
                    </div>
                    <ul class="list-unstyled small text-secondary mb-0" style="line-height:2.1;">
                        <li><i class="fa-solid fa-circle-check text-primary me-2"></i><strong>PP:</strong> Manufacturer Identification (Polymer Products, Nashik)</li>
                        <li><i class="fa-solid fa-circle-check text-primary me-2"></i><strong>[L x W x H]:</strong> Plan Dimensions &amp; Total Thickness (e.g., 300 x 400 x 52 mm)</li>
                        <li><i class="fa-solid fa-circle-check text-primary me-2"></i><strong>[LOT NO.]:</strong> Compounding &amp; Curing batch code identifier</li>
                        <li><i class="fa-solid fa-circle-check text-primary me-2"></i><strong>[UID NO.]:</strong> Unique Serial Number for 1-to-1 test data correlation</li>
                        <li><i class="fa-solid fa-circle-check text-primary me-2"></i><strong>[MM-YY]:</strong> Month and Year of vulcanization (e.g., 10-26)</li>
                        <li><i class="fa-solid fa-circle-check text-primary me-2"></i><strong>Standard:</strong> IRC:83 (Part II) / RDSO / MoRTH compliance reference</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6">
                <!-- Inspection Tag Mockup -->
                <div class="p-4 bg-white rounded-4 border shadow-sm">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="fw-bold text-dark mb-0" style="font-size:17px;"><i class="fa-solid fa-tag text-primary me-2"></i>Inspection Verification Tag</h5>
                        <span class="badge bg-success px-3 py-1 rounded-pill"><i class="fa-solid fa-check me-1"></i>QC PASSED</span>
                    </div>
                    <div class="card p-3 bg-white border rounded-3 mb-3 qc-tag-card">
                        <div class="d-flex justify-content-between border-bottom pb-2 mb-3">
                            <span class="fw-bold text-primary" style="letter-spacing:0.5px;">POLYMER PRODUCTS (NASHIK)</span>
                            <span class="badge bg-primary text-white">ISO 9001:2027</span>
                        </div>
                        <div class="small text-muted" style="line-height:1.8;">
                            <p class="mb-1"><strong>Client / Authority:</strong> NHAI / Indian Railways / State PWD / Metro Rail</p>
                            <p class="mb-1"><strong>Project Name:</strong> National Highway Bridge / Elevated Viaduct Flyover</p>
                            <p class="mb-1"><strong>Bearing Type:</strong> Steel-Laminated Elastomeric Bearing (CR / NR)</p>
                            <p class="mb-1"><strong>Bearing Size:</strong> 350 mm &times; 450 mm &times; 68 mm</p>
                            <!-- <p class="mb-1"><strong>Proof Load Tested:</strong> Yes (1.5 &times; Design Vertical Load Verified @ 2000 kN)</p> -->
                            <p class="mb-0"><strong>Inspector Sign / Stamp:</strong> Authorized Plant QA/QC Verified</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center text-muted small">
                        <i class="fa-solid fa-circle-info text-primary me-2"></i>
                        A weather-resistant metallic or synthetic tag is affixed to every pallet dispatch and consignment pouch.
                    </div>
                </div>

                <!-- Real Image of Marking in Plant -->
                <div class="mt-4 p-3 bg-white rounded-4 border shadow-sm">
                    <img src="assets/pp_data/Machine_Images/20/image-9.webp" alt="Plant Operator applying indelible marking" class="img-fluid rounded-3 w-100" style="height:230px; object-fit:cover;">
                    <!-- <p class="text-center small text-muted mt-2 mb-0">Plant operator applying indelible hot-embossed lot markings on cured bearings</p> -->
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ============================================================
     5. End-to-End Traceability Matrix Table
     ============================================================ -->
<section class="py-5" id="traceability-matrix" style="background:#ffffff;">
    <div class="container py-4">
        
        <div class="section-title text-center mb-5">
            <span class="badge px-3 py-2 mb-2 rounded-pill text-uppercase" style="background: var(--theme-subtle); color: var(--theme-primary); font-weight:700; font-size:12px; letter-spacing:1px;">
                Complete Data Chain
            </span>
            <h2 class="fw-bold text-dark" style="font-family:'Oswald', sans-serif; font-size:32px;">
                End-to-End Traceability Matrix
            </h2>
            <p class="text-muted mx-auto" style="max-width:650px; font-size:15px;">
                How every finished bearing unit cross-references to raw chemistry and physical test data.
            </p>
        </div>

        <!-- Mobile Scroll Indicator Banner -->
        <div class="d-lg-none d-flex align-items-center justify-content-between p-2.5 mb-3 rounded-3 shadow-sm matrix-scroll-hint">
            <div class="d-flex align-items-center gap-2 text-dark" style="font-size: 13px;">
                <i class="fa-solid fa-arrows-left-right text-primary fa-fade"></i>
                <span class="fw-semibold">Swipe sideways to view full traceability matrix</span>
            </div>
            <span class="badge bg-primary text-white rounded-pill px-2.5 py-1" style="font-size: 11px;">
                <i class="fa-solid fa-hand-pointer me-1"></i> Scroll &rarr;
            </span>
        </div>

        <div class="trace-matrix-wrap shadow-sm mb-4">
            <table class="table table-hover align-middle mb-0 trace-matrix-table">
                <thead>
                    <tr>
                        <th class="py-3 px-4">Stage</th>
                        <th class="py-3">Identifier / Code</th>
                        <th class="py-3">Associated Parameter</th>
                        <th class="py-3">Record / Certificate</th>
                        <th class="py-3 text-center">Audit Retention</th>
                    </tr>
                </thead>
                <tbody class="small text-secondary">
                    <tr>
                        <td class="px-4 fw-bold text-dark"><i class="fa-solid fa-boxes-packing text-primary me-2"></i>1. Raw Material</td>
                        <td><span class="badge bg-light text-dark border">RM-LOT-YYYYMM</span></td>
                        <td>Specific Gravity, Ash Content, Polymer Purity</td>
                        <td>Mill Test Certificate (MTC / COA)</td>
                        <td class="text-center"><span class="badge bg-success">10+ Years</span></td>
                    </tr>
                    <tr>
                        <td class="px-4 fw-bold text-dark"><i class="fa-solid fa-barcode text-primary me-2"></i>2. Compounding</td>
                        <td><span class="badge bg-light text-dark border">BATCH-XXX</span></td>
                        <td>Rheometer Cure Time, Mooney Viscosity, Hardness</td>
                        <td>Compounding Batch Log &amp; Graph</td>
                        <td class="text-center"><span class="badge bg-success">10+ Years</span></td>
                    </tr>
                    <tr>
                        <td class="px-4 fw-bold text-dark"><i class="fa-solid fa-gears text-primary me-2"></i>3. Vulcanization</td>
                        <td><span class="badge bg-light text-dark border">PRESS-HEAT-XX</span></td>
                        <td>Platen Temp (&deg;C), Hydraulic Pressure, Cure Time</td>
                        <td>Digital Curing Press Chart</td>
                        <td class="text-center"><span class="badge bg-success">10+ Years</span></td>
                    </tr>
                    <tr>
                        <td class="px-4 fw-bold text-dark"><i class="fa-solid fa-stamp text-primary me-2"></i>4. Bearing Unit</td>
                        <td><span class="badge bg-primary text-white">PP/SIZE/LOT/UID</span></td>
                        <td>Indelible Side Marking &amp; Serialized UID</td>
                        <td>Finished Goods Inspection Log</td>
                        <td class="text-center"><span class="badge bg-success">Permanent</span></td>
                    </tr>
                    <tr>
                        <td class="px-4 fw-bold text-dark"><i class="fa-solid fa-vial-circle-check text-primary me-2"></i>5. QC Testing</td>
                        <td><span class="badge bg-light text-dark border">TR-REPORT-XXXX</span></td>
                        <td>Proof Load, Compressive Stiffness, Shear Modulus</td>
                        <td>Manufacturer Test Certificate (MTC)</td>
                        <td class="text-center"><span class="badge bg-success">Permanent</span></td>
                    </tr>
                    <tr>
                        <td class="px-4 fw-bold text-dark"><i class="fa-solid fa-truck-fast text-primary me-2"></i>6. Dispatch</td>
                        <td><span class="badge bg-light text-dark border">DISPATCH-NO</span></td>
                        <td>Client Name, Pier / Abutment Location, Pallet ID</td>
                        <td>Delivery Challan &amp; Release Note</td>
                        <td class="text-center"><span class="badge bg-success">10+ Years</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</section>

<!-- ============================================================
     6. CTA & MTC Verification Support
     ============================================================ -->
<section class="py-5   position-relative text-white" style="background: var(--theme-primary);">
    <div class="container py-3">
        <div class="row align-items-center justify-content-between g-4">
            <div class="col-lg-8">
                <span class="badge bg-white text-primary px-3 py-2 rounded-pill text-uppercase mb-3">
                    <i class="fa-solid fa-shield-halved me-2"></i>Quality Assurance
                </span>
                <h3 class="fw-bold text-white mb-2" style="font-family:'Oswald', sans-serif; font-size:28px;">
                    Need MTC Verification or Third-Party Inspection Support?
                </h3>
                <p class="text-light mb-0" style="font-size:15px; color:#ffffffff !important; line-height:1.7;">
                    Our quality assurance team provides instant verification of lot numbers, proof test reports, and third-party inspection (RITES / DNV / BVQI / TUV) documentation for all dispatched bearings.
                </p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="contact.php" class="btn  rounded-pill px-4 py-3 fw-bold text-uppercase" style="background: #ffffffff;   font-size:14px; color: #3691bf; letter-spacing:0.5px;">
                    <i class="fa-solid fa-file-signature me-2"></i>Request Test Certificate
                </a>
            </div>
        </div>
    </div>
</section>
</div><!-- /.ident-page-wrapper -->

<?php include_once 'partials/footer.php'; ?>
