<?php 
$page_title = "Raw Materials & Machinery Infrastructure - Polymer Products";
$meta_description = "Complete specifications of raw materials (NR, CR, IS:2062 Steel, PTFE) and 42 manufacturing & testing machineries installed at Polymer Products, Nashik.";
include_once 'partials/header.php'; 
?>

<style>
.mat-hero-badge {
    background: var(--theme-subtle);
    border: 1px solid var(--theme-primary);
    color: var(--theme-lighter);
    font-size: 13px;
    letter-spacing: 1.5px;
    font-weight: 700;
}
.mat-spec-card {
    transition: all 0.35s ease;
    border: 1px solid #e2e8f0;
    background: #ffffff;
    border-radius: 20px;
}
.mat-spec-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 16px 35px rgba(2, 132, 199, 0.08) !important;
    border-color: var(--theme-primary);
}

/* Machinery Table Mobile Enhancements & Custom Scrollbar */
.machinery-table-wrap {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    border-radius: 16px;
    position: relative;
    border: 1px solid #e2e8f0;
    background: #ffffff;
    scrollbar-width: thin;
    scrollbar-color: var(--theme-primary, #3691bf) #f1f5f9;
}
.machinery-table-wrap::-webkit-scrollbar {
    height: 8px;
}
.machinery-table-wrap::-webkit-scrollbar-track {
    background: #f1f5f9;
    border-radius: 10px;
}
.machinery-table-wrap::-webkit-scrollbar-thumb {
    background: var(--theme-primary, #3691bf);
    border-radius: 10px;
    border: 2px solid #f1f5f9;
}
.machinery-table-wrap::-webkit-scrollbar-thumb:hover {
    background: #0284c7;
}

.machinery-table {
    min-width: 860px;
    width: 100%;
}
.machinery-table th {
    background: #0f172a;
    color: #ffffff;
    font-weight: 600;
    font-size: 13px;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    white-space: nowrap;
    padding: 13px 16px;
}
.machinery-table td {
    padding: 12px 16px;
    vertical-align: middle;
}
.machinery-table tbody tr {
    transition: background-color 0.2s ease;
}
.machinery-table tbody tr:hover {
    background-color: #f8fafc;
}

.machinery-scroll-hint {
    background: linear-gradient(90deg, #f0f7ff 0%, #ffffff 100%);
    border: 1px dashed #bae6fd !important;
}

@media (max-width: 767.98px) {
    .machinery-table {
        min-width: 780px;
        font-size: 12.5px;
    }
    .machinery-table th {
        font-size: 12px;
        padding: 10px 12px;
    }
    .machinery-table td {
        padding: 10px 12px;
    }
}

.machinery-card {
    transition: all 0.3s ease;
    border: 1px solid #e2e8f0;
    background: #ffffff;
    border-radius: 14px;
}
.machinery-card:hover {
    border-color: var(--theme-primary);
    box-shadow: 0 10px 25px rgba(15, 23, 42, 0.06);
    transform: translateY(-3px);
}
.badge-press {
    background: #e0f2fe;
    color: #0369a1;
    font-weight: 700;
}
.badge-test {
    background: #f0fdf4;
    color: #15803d;
    font-weight: 700;
}
.doc-download-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 10px;
    transition: all 0.3s ease;
}
.doc-download-card:hover {
    transform: translateY(-4px);
    border-color: var(--theme-primary);
    box-shadow: 0 12px 25px rgba(2, 132, 199, 0.10);
}
</style>

<!-- ============================================================
     1. Hero Banner
     ============================================================ -->
<section class="ht-material-hero position-relative d-flex align-items-center"
    style="background: linear-gradient(135deg, rgba(0, 0, 0, 0.5) 0%, rgba(14, 34, 61, 0.58) 50%, rgba(0, 0, 0, 0.55) 100%), url('assets/img/img/banner/material-image.webp') center center / cover no-repeat; padding-top: 175px; padding-bottom: 75px; margin-top: -160px; min-height: 460px;">
    
    <div class="container-fluid px-3 px-lg-5 position-relative" style="z-index: 2;">
        <div class="row align-items-center">
            <div class="col-lg-8 wow fadeInLeft" data-wow-delay=".2s">
                <span class="badge px-3 py-2 mb-3 rounded-pill text-uppercase mat-hero-badge">
                    <i class="fa-solid fa-flask-vial me-2"></i>IRC:83 (Part II) &amp; RDSO Standards
                </span>
                <h1 class="text-white fw-bold mb-3" style="font-family: 'Oswald', 'Saira-Medium', sans-serif; font-size: clamp(34px, 4.5vw, 54px); line-height: 1.2;">
                    Raw Materials &amp; <span style="color: #93c5fd;">List of Machinery</span>
                </h1>
                <p class="text-light mb-4" style="font-size: 16px; line-height: 1.8; max-width: 760px; color: #dfe4ebff !important;">
                    Official technical specifications for certified raw elastomer polymers (NR/CR), IS:2062 Grade E250 mild steel laminates, virgin PTFE media, and comprehensive list of 42 manufacturing &amp; testing machineries installed at our Nashik plant.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="#raw-materials" class="btn btn-primary rounded-pill px-4 py-2 fw-bold text-uppercase" style="background:var(--theme-primary); border-color:var(--theme-primary); font-size:13px; letter-spacing:0.5px;">
                        <i class="fa-solid fa-layer-group me-2"></i>Raw Material Specs
                    </a>
                    <a href="#machinery-list" class="btn btn-outline-light rounded-pill px-4 py-2 fw-bold text-uppercase" style="font-size:13px; letter-spacing:0.5px;">
                        <i class="fa-solid fa-gears me-2"></i>42  Machinery List
                    </a>
                    <!-- <a href="#official-docs" class="btn btn-outline-light rounded-pill px-4 py-2 fw-bold text-uppercase" style="font-size:13px; letter-spacing:0.5px;">
                        <i class="fa-solid fa-file-lines me-2"></i>View Documents
                    </a> -->
                </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0 text-lg-end d-none d-lg-block wow fadeInRight" data-wow-delay=".3s">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-lg-end mb-0 bg-transparent p-0">
                        <li class="breadcrumb-item"><a href="index.php" class="text-white-50 text-decoration-none"><i class="fa-solid fa-house me-1"></i>Home</a></li>
                        <li class="breadcrumb-item active text-white fw-semibold" aria-current="page">Materials &amp; Machinery</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     2. Official Page 05 Documents Access Hub
     ============================================================ -->
<section class="py-4" id="official-docs" style="background: #ffffff; border-bottom: 1px solid #e2e8f0;">
    <div class="container-fluid px-3 px-lg-5">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-10 col-12">
                <div class="p-3.5 p-md-4 doc-download-card d-flex align-items-center justify-content-between flex-wrap gap-3 shadow-sm">
                    <div class="d-flex align-items-center gap-3">
                        <div class="rounded-circle p-3 d-flex align-items-center justify-content-center text-primary flex-shrink-0"
                            style="background: var(--theme-subtle); width: 48px; height: 48px;">
                            <i class="fa-solid fa-file-lines fs-5"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold text-dark mb-0" style="font-size: 15px;">Raw Material Technical Specification</h6>
                            <small class="text-muted" style="font-size: 12.5px;">Official Specification &bull; Polymer (NR/CR), Steel &amp; PTFE Limits</small>
                        </div>
                    </div>
                    <button type="button" class="btn btn-sm btn-primary rounded-pill fw-bold px-3.5 py-2 d-inline-flex align-items-center gap-2 shadow-sm flex-shrink-0" data-bs-toggle="modal" data-bs-target="#rawMaterialModal" style="background: var(--theme-primary); border-color: var(--theme-primary); font-size: 13px;">
                        <i class="fa-solid fa-eye"></i> <span>View Document</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     3. RAW MATERIALS SECTION (From Raw Material.odt)
     ============================================================ -->
<!-- <section class="py-5" id="raw-materials" style="background: #f0f7ff;">
    <div class="container-fluid px-3 px-lg-5 py-4">

        
   <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".1s">
            <span class="badge px-3 py-1.5 rounded-pill font-monospace fw-bold text-uppercase mb-2"
                style="background: var(--theme-subtle); color: var(--theme-primary); font-size: 12px; letter-spacing: 1px;">
                Section 4: Materials Specifications
            </span>
            <h2 class="fw-bold text-dark text-uppercase mt-2" style="font-family: 'Oswald', sans-serif; font-size: 36px; letter-spacing: 0.5px;">
                Certified Raw Materials Used in Manufacturing
            </h2>
            <p class="text-muted mx-auto mb-0" style="max-width: 740px; font-size: 15px; line-height: 1.7;">
                In accordance with <strong>IRC:83 (Part II) Clause 4</strong>, <strong>RDSO</strong>, <strong>IS:2062</strong>, and <strong>UIC 772-2R</strong> standards.
            </p>
        </div> -->

        <!-- 4.1 Elastomer Raw Polymer -->
        <!-- <div class="card border-0 shadow-sm mb-5 overflow-hidden mat-spec-card">
            <div class="card-body p-4 p-md-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-7">
                        <span class="badge rounded-pill px-3 py-1.5 fw-bold text-uppercase mb-3"
                            style="background: var(--theme-subtle); color: var(--theme-primary); font-size: 12px; letter-spacing: 1px;">
                            Clause 4.1 Polymer Base
                        </span>
                        
                        <h3 class="fw-bold text-dark mb-3" style="font-family: 'Oswald', sans-serif; font-size: 28px; letter-spacing: 0.5px;">
                            4.1 Elastomeric Raw Polymer (NR / CR)
                        </h3>

                        <p class="text-secondary mb-4" style="font-size: 15px; line-height: 1.8;">
                            The elastomer used in the manufacture of Elastomeric Bearings is specified in the project documentation as either <strong>Natural Rubber (NR)</strong> or <strong>Chloroprene Rubber (CR)</strong> as the raw polymer base:
                        </p>

                        <div class="p-3.5 p-4 rounded-3 border mb-3" style="background: #f0f7ff; border-left: 4px solid var(--theme-primary) !important;">
                            <div class="d-flex align-items-center mb-1">
                                <i class="fa-solid fa-leaf me-2" style="color: var(--theme-primary); font-size:18px;"></i>
                                <h6 class="fw-bold mb-0" style="font-size: 16px; color: var(--theme-primary);">Natural Rubber (NR):</h6>
                            </div>
                            <p class="small text-muted mb-0" style="line-height: 1.7;">
                                High elasticity, low hysteresis loss, superior low-temperature performance, high tensile strength, and exceptional fatigue resistance under continuous cyclic dynamic bridge loading.
                            </p>
                        </div>

                        <div class="p-3.5 p-4 rounded-3 border" style="background: #f0f7ff; border-left: 4px solid var(--theme-primary) !important;">
                            <div class="d-flex align-items-center mb-1">
                                <i class="fa-solid fa-shield-halved me-2" style="color: var(--theme-primary); font-size:18px;"></i>
                                <h6 class="fw-bold mb-0" style="font-size: 16px; color: var(--theme-primary);">Chloroprene Rubber (CR - Neoprene):</h6>
                            </div>
                            <p class="small text-muted mb-0" style="line-height: 1.7;">
                                Excellent resistance to ozone degradation (tested in parts per hundred million pphm by volume), atmospheric weathering, chemical exposure, mineral oils, and ultraviolet radiation.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="p-4 rounded-4 border shadow-sm bg-white">
                            <div class="d-flex align-items-center mb-3">
                                <div class="p-2 rounded-circle me-2 d-flex align-items-center justify-content-center"
                                    style="width: 36px; height: 36px; background: var(--theme-subtle); color: var(--theme-primary);">
                                    <i class="fa-solid fa-list-check"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-0" style="font-family: 'Oswald', sans-serif; font-size: 18px;">
                                    IRC:83 Physical Property Limits
                                </h5>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-sm table-borderless align-middle mb-0" style="font-size: 13.5px;">
                                    <tbody>
                                        <tr class="border-bottom">
                                            <td class="text-secondary py-2">Hardness (Shore A)</td>
                                            <td class="text-end py-2"><span class="badge rounded-pill px-2.5 py-1" style="background: var(--theme-subtle); color: var(--theme-primary); font-weight: 700;">60 &plusmn; 5 IRHD</span></td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td class="text-secondary py-2">Min. Tensile Strength</td>
                                            <td class="text-end py-2"><span class="badge rounded-pill px-2.5 py-1" style="background: var(--theme-subtle); color: var(--theme-primary); font-weight: 700;">&ge; 17.0 MPa</span></td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td class="text-secondary py-2">Min. Elongation at Break</td>
                                            <td class="text-end py-2"><span class="badge rounded-pill px-2.5 py-1" style="background: var(--theme-subtle); color: var(--theme-primary); font-weight: 700;">&ge; 400%</span></td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td class="text-secondary py-2">Max Compression Set (24h/70°C)</td>
                                            <td class="text-end py-2"><span class="badge rounded-pill px-2.5 py-1" style="background: var(--theme-subtle); color: var(--theme-primary); font-weight: 700;">&le; 35%</span></td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td class="text-secondary py-2">Accelerated Ageing Drop</td>
                                            <td class="text-end py-2"><span class="badge rounded-pill px-2.5 py-1" style="background: var(--theme-subtle); color: var(--theme-primary); font-weight: 700;">&le; 15% Max Drop</span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-secondary py-2">Ozone Resistance</td>
                                            <td class="text-end py-2"><span class="badge rounded-pill px-2.5 py-1" style="background: var(--theme-subtle); color: var(--theme-primary); font-weight: 700;">No Cracks (20% Strain)</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- 4.2.5 Mild Steel Laminates -->
        <!-- <div class="card border-0 shadow-sm mb-5 overflow-hidden mat-spec-card">
            <div class="card-body p-4 p-md-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-7">
                        <span class="badge rounded-pill px-3 py-1.5 fw-bold text-uppercase mb-3"
                            style="background: var(--theme-subtle); color: var(--theme-primary); font-size: 12px; letter-spacing: 1px;">
                            Clause 4.2.5 Internal Reinforcement
                        </span>
                        
                        <h3 class="fw-bold text-dark mb-3" style="font-family: 'Oswald', sans-serif; font-size: 28px; letter-spacing: 0.5px;">
                            4.2.5 Mild Steel Laminates (IS: 2062 / IS: 1079)
                        </h3>

                        <p class="text-secondary mb-4" style="font-size: 15px; line-height: 1.8;">
                            Laminates of mild steel conforming to <strong>IS: 2062</strong> or <strong>IS: 1079</strong> or equivalent international grade shall be used as internal reinforcement plates:
                        </p>

                        <div class="p-3.5 p-4 rounded-3 border mb-4" style="background: var(--theme-subtle); border-color: var(--theme-primary) !important;">
                            <div class="d-flex align-items-center mb-1">
                                <i class="fa-solid fa-triangle-exclamation me-2" style="color: var(--theme-primary); font-size: 18px;"></i>
                                <h6 class="fw-bold mb-0" style="font-size: 15px; color: var(--theme-primary);">Mandatory Code Requirement:</h6>
                            </div>
                            <p class="small text-dark mb-0" style="line-height: 1.7; font-weight: 500;">
                                The yield stress of the steel material shall not be lesser than <strong>250 MPa</strong>. Uses of any other materials like fibreglass or similar fabric as laminates are strictly not permitted for the purpose of this Code.
                            </p>
                        </div>

                        <p class="small text-muted mb-0" style="line-height: 1.8; font-size: 13.5px;">
                            All steel plates are edge-radiused to remove burrs, grit shot-blasted to Sa 2.5 cleanliness profile, degreased, and chemically primed with Chemlok bonding systems to ensure elastomer-to-steel peel bond adhesion exceeding 7 kN/m.
                        </p>
                    </div>

                    <div class="col-lg-5">
                        <div class="rounded-4 overflow-hidden border shadow-sm p-2" style="background: #e0f2fe;">
                            <img src="assets/pp_data/Machine_Images/IMG20260913162728.jpg" alt="Steel Laminates Preparation"
                                class="img-fluid rounded-3 w-100" style="height: 270px; object-fit: cover;">
                            <p class="text-center small text-secondary mt-2 mb-1 px-2" style="font-size: 12.5px;">
                                Precision deburred IS:2062 steel laminates ready for vulcanization
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- 4.3 PTFE & Sliding Design Criteria -->
        <!-- <div class="card border-0 shadow-sm mb-4 overflow-hidden mat-spec-card">
            <div class="card-body p-4 p-md-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-7">
                        <span class="badge rounded-pill px-3 py-1.5 fw-bold text-uppercase mb-3"
                            style="background: var(--theme-subtle); color: var(--theme-primary); font-size: 12px; letter-spacing: 1px;">
                            Sliding Media &amp; Limit States
                        </span>
                        
                        <h3 class="fw-bold text-dark mb-3" style="font-family: 'Oswald', sans-serif; font-size: 28px; letter-spacing: 0.5px;">
                            Polytetrafluoroethylene (PTFE) &amp; Design Limit States
                        </h3>

                        <p class="text-secondary mb-4" style="font-size: 15px; line-height: 1.8;">
                            For free-sliding and guided elastomeric bearings, virgin dimpled <strong>Polytetrafluoroethylene (PTFE)</strong> sheets are bonded to elastomer pads and lubricated with silicone grease, sliding against mirror-finish austenitic stainless steel:
                        </p>

                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="p-3.5 p-4 rounded-3 border h-100" style="background: #f0f7ff; border-left: 4px solid var(--theme-primary) !important;">
                                    <h6 class="fw-bold mb-2" style="font-size: 14.5px; color: var(--theme-primary);">
                                        <i class="fa-solid fa-arrows-spin me-1.5"></i> Serviceability Limit State (SLS)
                                    </h6>
                                    <small class="text-muted d-block" style="font-size: 13px; line-height: 1.6;">
                                        Ensures no permanent deformation, maintainable friction (&mu; &le; 0.03), and full elastic recovery under maximum operational load combinations.
                                    </small>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="p-3.5 p-4 rounded-3 border h-100" style="background: #f0f7ff; border-left: 4px solid var(--theme-primary) !important;">
                                    <h6 class="fw-bold mb-2" style="font-size: 14.5px; color: var(--theme-primary);">
                                        <i class="fa-solid fa-shield-halved me-1.5"></i> Ultimate Limit State (ULS)
                                    </h6>
                                    <small class="text-muted d-block" style="font-size: 13px; line-height: 1.6;">
                                        Adequate safety factors against elastomer rupture, steel plate yield, internal de-bonding, and seismic sliding displacement.
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="rounded-4 overflow-hidden border shadow-sm p-2" style="background: #e0f2fe;">
                            <img src="assets/pp_data/Machine_Images/IMG20260913162430.jpg" alt="Material Testing & Inspection"
                                class="img-fluid rounded-3 w-100" style="height: 270px; object-fit: cover;">
                            <p class="text-center small text-secondary mt-2 mb-1 px-2" style="font-size: 12.5px;">
                                In-house physical &amp; chemical quality testing laboratory
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>  

    </div>
</section> -->

<!-- ============================================================
     4. COMPLETE LIST OF MACHINERY (From LIST OF MACHINERY.doc)
     ============================================================ -->
<section class="py-5" id="machinery-list" style="background: #ffffff; border-top: 1px solid #e2e8f0;">
    <div class="container-fluid px-3 px-lg-5 py-4">
        
        <div class="section-title text-center mb-5">
            <span class="badge px-3 py-1.5 rounded-pill font-monospace fw-bold text-uppercase mb-2"
                style="background: var(--theme-subtle); color: var(--theme-primary); font-size: 12px; letter-spacing: 1px;">
                Plant &amp; Testing Capabilities
            </span>
            <h2 class="fw-bold text-dark text-uppercase" style="font-family:'Oswald', sans-serif; font-size: clamp(26px, 3.2vw, 38px); letter-spacing:0.5px;">
                LIST OF MACHINERIES &amp; EQUIPMENT
            </h2>
            <p class="text-muted mx-auto" style="max-width:760px; font-size:15px; line-height:1.7;">
                Installed in our works for carrying out various manufacturing processes and standard tests on elastomeric bearings and chemical/physical properties of elastomeric compounds.
            </p>
        </div>

        <!-- Official Plant Declaration Banner -->
        <!-- <div class="p-4 rounded-4   border mb-5 d-flex align-items-center gap-3 shadow-sm" style="background:#f0f7ff; border-left: 5px solid var(--theme-primary) !important;">
            <i class="fa-solid fa-stamp fa-2x text-primary flex-shrink-0"></i>
            <div>
                <h6 class="fw-bold text-dark mb-1" style="font-size: 16px;">Third-Party Inspection &amp; Certification Compliance</h6>
                <p class="small text-muted mb-0" style="line-height: 1.6;">
                    We hereby confirm that all testing Machineries/Equipment stated below are maintained in calibrated, working condition. Testing of bridge bearings and rubber compounds is regularly witnessed by <strong>DGS&amp;D</strong>, <strong>RITES</strong>, and authorized client quality representatives.
                </p>
            </div>
        </div> -->

        <!-- Filter / Summary Row -->
        <div class="row g-3 mb-4 text-center">
            <div class="col-6 col-md-3">
                <div class="p-3 rounded-3 border" style="background:#f0f7ff;">
                    <h3 class="fw-bold text-primary mb-0" style="font-family:'Oswald', sans-serif;">20</h3>
                    <small class="text-muted">Hydraulic Presses (Up to 750T)</small>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="p-3  rounded-3 border" style="background:#f0f7ff;">
                    <h3 class="fw-bold text-primary mb-0" style="font-family:'Oswald', sans-serif;">42</h3>
                    <small class="text-muted">Total Plant Machines &amp; Lab Rigs</small>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="p-3   rounded-3 border" style="background:#f0f7ff;">
                    <h3 class="fw-bold text-primary mb-0" style="font-family:'Oswald', sans-serif;">100%</h3>
                    <small class="text-muted">In-House Physical &amp; Chemical Testing</small>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="p-3   rounded-3 border" style="background:#f0f7ff;">
                    <h3 class="fw-bold text-primary mb-0" style="font-family:'Oswald', sans-serif;">RITES</h3>
                    <small class="text-muted">Witnessed &amp; Approved Setup</small>
                </div>
            </div>
        </div>

        <!-- Mobile Scroll Indicator Banner -->
        <div class="d-lg-none d-flex align-items-center justify-content-between p-2.5 mb-3 rounded-3 shadow-sm machinery-scroll-hint">
            <div class="d-flex align-items-center gap-2 text-dark" style="font-size: 13px;">
                <i class="fa-solid fa-arrows-left-right text-primary fa-fade"></i>
                <span class="fw-semibold">Swipe sideways to view all 42 machinery specs</span>
            </div>
            <span class="badge bg-primary text-white rounded-pill px-2.5 py-1" style="font-size: 11px;">
                <i class="fa-solid fa-hand-pointer me-1"></i> Scroll &rarr;
            </span>
        </div>

        <!-- Complete 42 Item Table -->
        <div class="machinery-table-wrap shadow-sm mb-4">
            <table class="table table-hover align-middle mb-0 machinery-table">
                <thead>
                    <tr>
                        <th class="py-3 px-3" style="width: 70px;">Sr.No.</th>
                        <th class="py-3">Testing Machine / Equipment Details</th>
                        <th class="py-3">Manufacturer</th>
                        <th class="py-3">Make / Model / Year</th>
                        <th class="py-3">Type of Test / Operation Carried Out</th>
                    </tr>
                </thead>
                <tbody class="small text-secondary">
                    
                    <!-- 1 -->
                    <tr>
                        <td class="px-3 fw-bold text-dark">01</td>
                        <td>
                            <strong class="text-dark d-block">Hydraulic Press (750 Tons)</strong>
                            <span class="text-muted">Glycerine-filled test pressure gauge (0.5% accuracy). Size: 1050 &times; 1060 &times; 770 mm, Ram area: 2427.95 cm&sup2;, Ram dia: 556.00 mm, Type: Frame.</span>
                        </td>
                        <td><span class="badge badge-press">INDIMECH</span></td>
                        <td>1992</td>
                        <td><strong class="text-primary">Elastic Modulus, Shear Modulus on large size bearings, Ultimate Compression</strong></td>
                    </tr>

                    <!-- 2 -->
                    <tr>
                        <td class="px-3 fw-bold text-dark">02</td>
                        <td>
                            <strong class="text-dark d-block">Hydraulic Press (300 Tons)</strong>
                            <span class="text-muted">Size: 1000 &times; 950 &times; 420 mm, Ram area: 1583.00 cm&sup2;, Ram dia: 448.94 mm, Type: Frame.</span>
                        </td>
                        <td><span class="badge badge-press">UNIMECH</span></td>
                        <td>1997</td>
                        <td>Manufacturing of Bearings</td>
                    </tr>

                    <!-- 3 -->
                    <tr>
                        <td class="px-3 fw-bold text-dark">03</td>
                        <td>
                            <strong class="text-dark d-block">Hydraulic Press (260 Tons)</strong>
                            <span class="text-muted">Size of Test Bed: 815 &times; 810 &times; 420 mm, Ram area: 1256.64 cm&sup2;, Ram dia: 400.00 mm, Type: Frame.</span>
                        </td>
                        <td><span class="badge badge-press">UNIMECH</span></td>
                        <td>1997</td>
                        <td>Manufacturing of Bearings</td>
                    </tr>

                    <!-- 4 -->
                    <tr>
                        <td class="px-3 fw-bold text-dark">04</td>
                        <td>
                            <strong class="text-dark d-block">Hydraulic Press (132 Tons)</strong>
                            <span class="text-muted">Size: 755 &times; 610 &times; 300 mm, Ram area: 659.61 cm&sup2;, Ram dia: 289.80 mm, Type: Frame.</span>
                        </td>
                        <td><span class="badge badge-press">UNIMECH</span></td>
                        <td>1997</td>
                        <td>Manufacturing of Bearings</td>
                    </tr>

                    <!-- 5 -->
                    <tr>
                        <td class="px-3 fw-bold text-dark">05</td>
                        <td>
                            <strong class="text-dark d-block">Hydraulic Press (100 Tons)</strong>
                            <span class="text-muted">Size: 560 &times; 510 &times; 410 mm, Ram area: 491.00 cm&sup2;, Ram dia: 250.00 mm, Type: Frame.</span>
                        </td>
                        <td><span class="badge badge-press">UNIMECH</span></td>
                        <td>1999</td>
                        <td>Manufacturing of Bearings</td>
                    </tr>

                    <!-- 6 -->
                    <tr>
                        <td class="px-3 fw-bold text-dark">06</td>
                        <td>
                            <strong class="text-dark d-block">Hydraulic Press (200 Tons)</strong>
                            <span class="text-muted">Size: 660 &times; 530 &times; 380 mm, Ram area: 491.00 cm&sup2;, Ram dia: 200.00 mm, Type: Frame.</span>
                        </td>
                        <td><span class="badge badge-press">UNIMECH</span></td>
                        <td>1988</td>
                        <td>Manufacturing of Bearings</td>
                    </tr>

                    <!-- 7 -->
                    <tr>
                        <td class="px-3 fw-bold text-dark">07</td>
                        <td>
                            <strong class="text-dark d-block">Hydraulic Press (200 Tons)</strong>
                            <span class="text-muted">Size: 460 &times; 480 &times; 370 mm, Ram area: 283.53 cm&sup2;, Ram dia: 190.00 mm, Type: Pillar.</span>
                        </td>
                        <td><span class="badge badge-press">UNIMECH</span></td>
                        <td>2008</td>
                        <td>Manufacturing of Bearings</td>
                    </tr>

                    <!-- 8 -->
                    <tr>
                        <td class="px-3 fw-bold text-dark">08</td>
                        <td>
                            <strong class="text-dark d-block">Hydraulic Press (200 Tons)</strong>
                            <span class="text-muted">Size: 810 &times; 710 &times; 420 mm, Ram area: 962.11 cm&sup2;, Ram dia: 350.00 mm, Type: Frame.</span>
                        </td>
                        <td><span class="badge badge-press">UNIMECH</span></td>
                        <td>2008</td>
                        <td>Manufacturing of Bearings</td>
                    </tr>

                    <!-- 9 -->
                    <tr>
                        <td class="px-3 fw-bold text-dark">09</td>
                        <td>
                            <strong class="text-dark d-block">Hydraulic Press (200 Tons)</strong>
                            <span class="text-muted">Size: 810 &times; 720 &times; 420 mm, Ram area: 962.11 cm&sup2;, Ram dia: 350.00 mm, Type: Frame.</span>
                        </td>
                        <td><span class="badge badge-press">SARAS</span></td>
                        <td>2008</td>
                        <td>Manufacturing of Bearings</td>
                    </tr>

                    <!-- 10 -->
                    <tr>
                        <td class="px-3 fw-bold text-dark">10</td>
                        <td>
                            <strong class="text-dark d-block">Hydraulic Press (30 Tons)</strong>
                            <span class="text-muted">Size: 300 &times; 320 &times; 125 mm, Ram area: 154.00 cm&sup2;, Ram dia: 140.00 mm, Type: Pillar.</span>
                        </td>
                        <td><span class="badge badge-press">INDIMECH</span></td>
                        <td>2008</td>
                        <td>Manufacturing of Bearings</td>
                    </tr>

                    <!-- 11 -->
                    <tr>
                        <td class="px-3 fw-bold text-dark">11</td>
                        <td>
                            <strong class="text-dark d-block">Hydraulic Press (175 Tons)</strong>
                            <span class="text-muted">Size: 510 &times; 510 &times; 410 mm, Ram area: 401.15 cm&sup2;, Ram dia: 226.00 mm, Type: Frame.</span>
                        </td>
                        <td><span class="badge badge-press">SARAS</span></td>
                        <td>2008</td>
                        <td>Manufacturing of Bearings</td>
                    </tr>

                    <!-- 12 -->
                    <tr>
                        <td class="px-3 fw-bold text-dark">12</td>
                        <td>
                            <strong class="text-dark d-block">Hydraulic Press (200 Tons)</strong>
                            <span class="text-muted">Size: 810 &times; 720 &times; 400 mm, Ram area: 962.11 cm&sup2;, Ram dia: 350.00 mm, Type: Frame.</span>
                        </td>
                        <td><span class="badge badge-press">SARAS</span></td>
                        <td>2008</td>
                        <td>Manufacturing of Bearings</td>
                    </tr>

                    <!-- 13 -->
                    <tr>
                        <td class="px-3 fw-bold text-dark">13</td>
                        <td>
                            <strong class="text-dark d-block">Hydraulic Press (200 Tons)</strong>
                            <span class="text-muted">Size: 800 &times; 810 &times; 400 mm, Ram area: 962.11 cm&sup2;, Ram dia: 350.00 mm, Type: Frame.</span>
                        </td>
                        <td><span class="badge badge-press">SARAS</span></td>
                        <td>2008</td>
                        <td>Manufacturing of Bearings</td>
                    </tr>

                    <!-- 14 -->
                    <tr>
                        <td class="px-3 fw-bold text-dark">14</td>
                        <td>
                            <strong class="text-dark d-block">Hydraulic Press (50 Tons)</strong>
                            <span class="text-muted">Size: 500 &times; 480 &times; 385 mm, Ram area: 314.28 cm&sup2;, Ram dia: 200.00 mm, Type: Pillar.</span>
                        </td>
                        <td><span class="badge badge-press">DYNAMIC</span></td>
                        <td>2008</td>
                        <td>Manufacturing of Bearings</td>
                    </tr>

                    <!-- 15 -->
                    <tr>
                        <td class="px-3 fw-bold text-dark">15</td>
                        <td>
                            <strong class="text-dark d-block">Hydraulic Press (150 Tons)</strong>
                            <span class="text-muted">Size: 650 &times; 660 &times; 500 mm, Ram area: 585.58 cm&sup2;, Ram dia: 273.05 mm, Type: Pillar.</span>
                        </td>
                        <td><span class="badge badge-press">DYNAMIC</span></td>
                        <td>2022</td>
                        <td>Manufacturing of Bearings</td>
                    </tr>

                    <!-- 16 -->
                    <tr>
                        <td class="px-3 fw-bold text-dark">16</td>
                        <td>
                            <strong class="text-dark d-block">Hydraulic Press (200 Tons)</strong>
                            <span class="text-muted">Size: 750 &times; 740 &times; 500 mm, Ram area: 819.72 cm&sup2;, Ram dia: 323.06 mm, Type: Pillar.</span>
                        </td>
                        <td><span class="badge badge-press">DYNAMIC</span></td>
                        <td>2022</td>
                        <td>Manufacturing of Bearings</td>
                    </tr>

                    <!-- 17 -->
                    <tr>
                        <td class="px-3 fw-bold text-dark">17</td>
                        <td>
                            <strong class="text-dark d-block">Hydraulic Press (200 Tons)</strong>
                            <span class="text-muted">Size: 850 &times; 830 &times; 550 mm, Ram area: 819.72 cm&sup2;, Ram dia: 323.06 mm, Type: Pillar.</span>
                        </td>
                        <td><span class="badge badge-press">DYNAMIC</span></td>
                        <td>2024</td>
                        <td>Manufacturing of Bearings</td>
                    </tr>

                    <!-- 18 -->
                    <tr>
                        <td class="px-3 fw-bold text-dark">18</td>
                        <td>
                            <strong class="text-dark d-block">Hydraulic Press (200 Tons)</strong>
                            <span class="text-muted">Size: 850 &times; 830 &times; 550 mm, Ram area: 819.72 cm&sup2;, Ram dia: 323.06 mm, Type: Pillar.</span>
                        </td>
                        <td><span class="badge badge-press">DYNAMIC</span></td>
                        <td>2024</td>
                        <td>Manufacturing of Bearings</td>
                    </tr>

                    <!-- 19 -->
                    <tr>
                        <td class="px-3 fw-bold text-dark">19</td>
                        <td>
                            <strong class="text-dark d-block">Hydraulic Press (170 Tons)</strong>
                            <span class="text-muted">Size: 700 &times; 690 &times; 420 mm, Ram area: 721.25 cm&sup2;, Ram dia: 303.03 mm, Type: Frame.</span>
                        </td>
                        <td><span class="badge badge-press">DYNAMIC</span></td>
                        <td>2024</td>
                        <td>Manufacturing of Bearings</td>
                    </tr>

                    <!-- 20 -->
                    <tr>
                        <td class="px-3 fw-bold text-dark">20</td>
                        <td>
                            <strong class="text-dark d-block">Hydraulic Press (120 Tons)</strong>
                            <span class="text-muted">Size: 600 &times; 590 &times; 420 mm, Ram area: 502.92 cm&sup2;, Ram dia: 253.04 mm, Type: Frame.</span>
                        </td>
                        <td><span class="badge badge-press">DYNAMIC</span></td>
                        <td>2024</td>
                        <td>Manufacturing of Bearings</td>
                    </tr>

                    <!-- 21 -->
                    <tr>
                        <td class="px-3 fw-bold text-dark">21</td>
                        <td><strong class="text-dark">Hydraulic Jack with Glycerine Pressure Gauges</strong></td>
                        <td><span class="badge badge-test">INDIMECH</span></td>
                        <td>1992</td>
                        <td><strong class="text-primary">Shear Modulus testing on large size bearings</strong></td>
                    </tr>

                    <!-- 22 -->
                    <tr>
                        <td class="px-3 fw-bold text-dark">22</td>
                        <td><strong class="text-dark">Hydraulic Jack with Glycerine Gauges (Capacity: 80 Tons)</strong></td>
                        <td><span class="badge badge-test">DYNAMIC</span></td>
                        <td>1992</td>
                        <td><strong class="text-primary">Elastomer to Steel Bond Test</strong></td>
                    </tr>

                    <!-- 23 -->
                    <tr>
                        <td class="px-3 fw-bold text-dark">23</td>
                        <td>
                            <strong class="text-dark d-block">Tensile Tester (Capacity: 5000 N)</strong>
                            <span class="text-muted">Load Cell Amplifier with Peak Detector</span>
                        </td>
                        <td><span class="badge badge-test">Kamal Metal Industries / System &amp; Controls</span></td>
                        <td>Model-1.3D (1988), Sr.No. 104103 (2002)</td>
                        <td><strong class="text-primary">Tensile Strength, Elongation at Break, Tear Strength, Rubber-to-Metal Adhesion Test</strong></td>
                    </tr>

                    <!-- 24 -->
                    <tr>
                        <td class="px-3 fw-bold text-dark">24</td>
                        <td>
                            <strong class="text-dark d-block">Oscillating Disc Rheometer (MV-ODR)</strong>
                            <span class="text-muted">Most sophisticated testing machine for compound curing analysis</span>
                        </td>
                        <td><span class="badge badge-test">Micro Vision Ind., New Delhi</span></td>
                        <td>MV-ODR (2004)</td>
                        <td><strong class="text-primary">Determination of curing characteristics &amp; batch-to-batch quality of rubber compound</strong></td>
                    </tr>

                    <!-- 25 -->
                    <tr>
                        <td class="px-3 fw-bold text-dark">25</td>
                        <td><strong class="text-dark">Laboratory Air Ageing Oven</strong></td>
                        <td><span class="badge badge-test">Tempo Instruments &amp; Equipment</span></td>
                        <td>O/P-633 (1988)</td>
                        <td><strong class="text-primary">Accelerated Ageing, Compression Set Test, Chemical Analysis</strong></td>
                    </tr>

                    <!-- 26 -->
                    <tr>
                        <td class="px-3 fw-bold text-dark">26</td>
                        <td><strong class="text-dark">Shore A Hardness Tester</strong></td>
                        <td><span class="badge badge-test">JSE</span></td>
                        <td>Sr. 1327 (1988)</td>
                        <td><strong class="text-primary">Hardness Determination</strong></td>
                    </tr>

                    <!-- 27 -->
                    <tr>
                        <td class="px-3 fw-bold text-dark">27</td>
                        <td><strong class="text-dark">Electronic Single Pan Digital Balance (0.001 mg Accuracy)</strong></td>
                        <td><span class="badge badge-test">Contech Instruments Ltd.</span></td>
                        <td>CP-20K2 (2002)</td>
                        <td><strong class="text-primary">Chemical analysis of rubber compound, Ash Content &amp; Specific Gravity</strong></td>
                    </tr>

                    <!-- 28 -->
                    <tr>
                        <td class="px-3 fw-bold text-dark">28</td>
                        <td><strong class="text-dark">Muffle Furnace (High-Temp)</strong></td>
                        <td><span class="badge badge-test">Lab Hosp Corporation</span></td>
                        <td>LAB-HOSPLHL-15-900</td>
                        <td><strong class="text-primary">Ash Content &amp; Elastomer Content Verification</strong></td>
                    </tr>

                    <!-- 29 -->
                    <tr>
                        <td class="px-3 fw-bold text-dark">29</td>
                        <td><strong class="text-dark">Soxhlet Extraction Apparatus with Condenser</strong></td>
                        <td><span class="badge badge-test">Lab Standard</span></td>
                        <td>-</td>
                        <td><strong class="text-primary">Polymer &amp; Elastomer Content Chemical Determination</strong></td>
                    </tr>

                    <!-- 30 -->
                    <tr>
                        <td class="px-3 fw-bold text-dark">30</td>
                        <td><strong class="text-dark">Shot Blasting Equipment with Compressor</strong></td>
                        <td><span class="badge badge-press">Abrasive Blasting Machine</span></td>
                        <td>PB-150120</td>
                        <td>Finishing &amp; Sa 2.5 profiling of M.S. Plate surface for chemical bonding</td>
                    </tr>

                    <!-- 31 -->
                    <tr>
                        <td class="px-3 fw-bold text-dark">31</td>
                        <td><strong class="text-dark">Thickness Gauge (Digital Micrometer)</strong></td>
                        <td><span class="badge badge-test">Mitutoyo Mfg. Co., Ltd.</span></td>
                        <td>Sr.No. 7305</td>
                        <td>Measuring thickness of Tensile Dumbbell and Compression Set buttons</td>
                    </tr>

                    <!-- 32 -->
                    <tr>
                        <td class="px-3 fw-bold text-dark">32</td>
                        <td><strong class="text-dark">Rubber Mixing Mill (16" &times; 42")</strong></td>
                        <td><span class="badge badge-press">Modern Hydraulics</span></td>
                        <td>Heavy Duty</td>
                        <td>Rubber Compound Mastication &amp; Mixing</td>
                    </tr>

                    <!-- 33 -->
                    <tr>
                        <td class="px-3 fw-bold text-dark">33</td>
                        <td><strong class="text-dark">Rubber Mixing Mill (14" &times; 36")</strong></td>
                        <td><span class="badge badge-press">G. G. Engineering Works</span></td>
                        <td>2024</td>
                        <td>Rubber Compound Masterbatch Preparation</td>
                    </tr>

                    <!-- 34 -->
                    <tr>
                        <td class="px-3 fw-bold text-dark">34</td>
                        <td><strong class="text-dark">Precision Surface Grinder</strong></td>
                        <td><span class="badge badge-press">Magnum Engineering</span></td>
                        <td>Kulkarni Make (1997)</td>
                        <td>Tooling &amp; Mould Surface Finishing</td>
                    </tr>

                    <!-- 35 -->
                    <tr>
                        <td class="px-3 fw-bold text-dark">35</td>
                        <td><strong class="text-dark">IRHD Hardness Tester (Micro/Macro)</strong></td>
                        <td><span class="badge badge-test">Apex Enterprises</span></td>
                        <td>BAY-485 (2003)</td>
                        <td><strong class="text-primary">International Rubber Hardness Degrees (IRHD) Tester</strong></td>
                    </tr>

                    <!-- 36 -->
                    <tr>
                        <td class="px-3 fw-bold text-dark">36</td>
                        <td><strong class="text-dark">Industrial Bandsaw Machine</strong></td>
                        <td><span class="badge badge-press">Local / Plant Custom</span></td>
                        <td>Heavy Duty</td>
                        <td>Finished Bearing Sectional Cutting for Inspection</td>
                    </tr>

                    <!-- 37 -->
                    <tr>
                        <td class="px-3 fw-bold text-dark">37</td>
                        <td><strong class="text-dark">Electric Arc &amp; TIG Welding Machine</strong></td>
                        <td><span class="badge badge-press">Electro Weld</span></td>
                        <td>Standard</td>
                        <td>General Fabrication &amp; Fixture Maintenance</td>
                    </tr>

                    <!-- 38 -->
                    <tr>
                        <td class="px-3 fw-bold text-dark">38</td>
                        <td><strong class="text-dark">Hydraulic Plate Shearing Machine</strong></td>
                        <td><span class="badge badge-press">Swastik Machine Tools</span></td>
                        <td>Rajesh Make (2009)</td>
                        <td>Mild Steel Internal Plate Sizing &amp; Shearing</td>
                    </tr>

                    <!-- 39 -->
                    <tr>
                        <td class="px-3 fw-bold text-dark">39</td>
                        <td><strong class="text-dark">Dumbbell Shaped Specimen Cutting Die</strong></td>
                        <td><span class="badge badge-test">Stech Engineers</span></td>
                        <td>2024</td>
                        <td>ASTM D412 / IS:3400 Dumbbell Specimen Punching</td>
                    </tr>

                    <!-- 40 -->
                    <tr>
                        <td class="px-3 fw-bold text-dark">40</td>
                        <td><strong class="text-dark">De Mattia Flex Testing Machine</strong></td>
                        <td><span class="badge badge-test">Stech Engineers</span></td>
                        <td>2023</td>
                        <td><strong class="text-primary">Dynamic Flex Cracking &amp; Cut Growth Resistance Testing</strong></td>
                    </tr>

                    <!-- 41 -->
                    <tr>
                        <td class="px-3 fw-bold text-dark">41</td>
                        <td><strong class="text-dark">Induced Draft Cooling Tower</strong></td>
                        <td><span class="badge badge-press">Innovative</span></td>
                        <td>2019</td>
                        <td>Industrial Water Cooling for Two-Roll Mills &amp; Presses</td>
                    </tr>

                    <!-- 42 -->
                    <tr>
                        <td class="px-3 fw-bold text-dark">42</td>
                        <td><strong class="text-dark">Trouser Type Tear Specimen Cutting Die</strong></td>
                        <td><span class="badge badge-test">Stech Engineers</span></td>
                        <td>2020</td>
                        <td><strong class="text-primary">ASTM D624 Trouser Tear Resistance Specimen Preparation</strong></td>
                    </tr>

                </tbody>
            </table>
        </div>

    </div>
</section>

<!-- ============================================================
     5. Call to Action Banner
     ============================================================ -->
<section class="py-5 text-white position-relative"
    style="background: var(--theme-primary); padding: 75px 0;">
    <div class="container-fluid px-3 px-lg-5 py-3 text-center">
        <span class="badge px-3 py-2 mb-3 rounded-pill text-uppercase fw-bold"
            style="background: #ffffffff; color: var(--theme-primary); font-size: 12px; letter-spacing: 1.5px;">
            Certified Raw Materials &amp; Testing Facility
        </span>
        <h2 class="fw-bold text-white text-uppercase mx-auto mb-3"
            style="font-family: 'Oswald', 'Saira-Medium', sans-serif; font-size: clamp(26px, 3.5vw, 38px); letter-spacing: 0.5px; max-width: 780px;">
            Need Plant Audit or Material Test Certificates?
        </h2>
        <p class="mx-auto mb-4" style="max-width: 680px; color: #e2e8f0; font-size: 15px; line-height: 1.8;">
            We welcome third-party inspections and client technical audits. Complete chemical, physical, and mechanical test certificates (MTC) are furnished with every batch.
        </p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="contact.php" class="btn  rounded-pill px-5 py-3 fw-bold shadow text-uppercase"
                style="font-size: 13px; letter-spacing: 0.5px; background: white; color: var(--theme-primary); border-color: white;">
                Schedule Plant Inspection <i class="fa-solid fa-arrow-right ms-2"></i> 
            </a>
            <!-- <a href="contact.php" class="btn btn-outline-light rounded-pill px-4 py-3 fw-bold"
                style="font-size: 13px; letter-spacing: 0.5px; backdrop-filter: blur(4px);">
                <i class="fa-solid fa-envelope me-2"></i> Contact Sales
            </a> -->
        </div>
    </div>
</section>

<!-- ============================================================
     6. DOCUMENT VIEW POPUP MODALS
     ============================================================ -->

<!-- Modal 1: Raw Material Specification Document Viewer -->
<div class="modal fade" id="rawMaterialModal" tabindex="-1" aria-labelledby="rawMaterialModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-fullscreen-lg-down modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content border-0 shadow-lg rounded-4 overflow-hidden">
            <div class="modal-header bg-dark text-white border-0 py-3 px-4 d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center gap-3">
                    <div class="rounded-circle p-2 d-flex align-items-center justify-content-center text-white" style="background: var(--theme-primary); width: 40px; height: 40px;">
                        <i class="fa-solid fa-file-lines fs-6"></i>
                    </div>
                    <div>
                        <h5 class="modal-title fw-bold text-white mb-0" id="rawMaterialModalLabel" style="font-family: 'Oswald', sans-serif; letter-spacing: 0.5px;">
                            Raw Material Technical Specification Document
                        </h5>
                        <small class="text-light text-opacity-75" style="font-size: 12px;">IRC:83 (Part II) &bull; RDSO &bull; IS:2062 &bull; UIC 772-2R Standard</small>
                    </div>
                </div>
                <div>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>
            
            <div class="modal-body p-4 p-md-5" style="background: #f0f7ff;">
                <!-- Letterhead Document Container -->
                <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm border mx-auto" style="max-width: 960px;">
                    
                    <!-- Company Letterhead Header -->
                    <div class="text-center border-bottom pb-4 mb-4">
                        <h3 class="fw-bold text-dark mb-1" style="font-family: 'Oswald', sans-serif; letter-spacing: 1px; color: var(--theme-primary);">
                            POLYMER PRODUCTS
                        </h3>
                        <p class="text-muted small mb-1">
                            H-32, M.I.D.C. SATPUR
NASHIK-422007 Maharashtra, India
                        </p>
                        <span class="badge px-3 py-1.5 rounded-pill fw-bold text-uppercase" style="background: var(--theme-subtle); color: var(--theme-primary); font-size: 11.5px; letter-spacing: 1px;">
                            Official Specification Sheet &bull; 4 MATERIALS (Raw Material)
                        </span>
                    </div>

                    <!-- POINT 1: Clause 4.1 Specification -->
                    <div class="mb-4 p-4 rounded-4 border bg-white shadow-sm" style="border-left: 4px solid var(--theme-primary) !important;">
                        <div class="d-flex align-items-center justify-content-between mb-3 flex-wrap gap-2">
                            <span class="badge rounded-pill px-3 py-1.5 fw-bold text-uppercase" style="background: var(--theme-subtle); color: var(--theme-primary); font-size: 12px; letter-spacing: 0.5px;">
                                <i class="fa-solid fa-circle-check me-1.5"></i> POINT 1 &bull; 4.1 RAW MATERIAL SPECIFICATION
                            </span>
                            <span class="badge bg-light text-secondary border px-2.5 py-1 small">Section 4: Materials</span>
                        </div>

                        <!-- Complete Verbatim Text from Raw Material.odt -->
                        <div class="p-3.5 p-4 rounded-3 mb-4" style="background: #f0f9ff; border: 1px solid #bae6fd;">
                            <div class="d-flex align-items-start gap-3">
                                <i class="fa-solid fa-file-contract text-primary fs-5 mt-1"></i>
                                <div>
                                    <h6 class="fw-bold text-primary text-uppercase mb-2" style="font-size: 12.5px; letter-spacing: 0.5px;">
                                        Document Original Content (Verbatim):
                                    </h6>
                                    <p class="text-dark mb-0 fw-semibold" style="font-size: 15px; line-height: 1.8; color: #0f172a !important;">
                                        4.1 <span class="text-primary fw-bold">Natural Rubber</span> Parts per hundred million by volume Polytetrafluoroethylene Serviceability Limit State Ultimate Limit State 4 MATERIALS Raw Material The elastomer used in the manufacture of Elastomeric Bearing should be specified in the project documentation as either Natural Rubber (NR) or Chloroprene Rubber (CR) as the raw polymer.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Structured Specification Breakdown -->
                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <div class="p-3 rounded-3 border bg-light h-100" style="border-left: 3px solid var(--theme-primary) !important;">
                                    <h6 class="fw-bold mb-1" style="color: var(--theme-primary); font-size: 14px;">
                                        <i class="fa-solid fa-leaf me-1.5"></i> Natural Rubber (NR):
                                    </h6>
                                    <p class="small text-muted mb-0" style="line-height: 1.6;">
                                        High tensile strength, exceptional fatigue resistance, and low hysteresis loss under dynamic cyclic loading.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-3 rounded-3 border bg-light h-100" style="border-left: 3px solid var(--theme-primary) !important;">
                                    <h6 class="fw-bold mb-1" style="color: var(--theme-primary); font-size: 14px;">
                                        <i class="fa-solid fa-shield-halved me-1.5"></i> Chloroprene Rubber (CR - Neoprene):
                                    </h6>
                                    <p class="small text-muted mb-0" style="line-height: 1.6;">
                                        Superior resistance against weathering and ozone degradation, tested in <strong>Parts per hundred million (pphm)</strong> by volume.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Key Standards referenced in Clause 4.1 -->
                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="p-3 rounded-3 border bg-light text-center h-100">
                                    <i class="fa-solid fa-layer-group text-primary mb-1 fs-5"></i>
                                    <h6 class="fw-bold text-dark mb-1" style="font-size: 13px;">Polytetrafluoroethylene</h6>
                                    <small class="text-muted d-block" style="font-size: 11.5px; line-height: 1.4;">(PTFE) Virgin dimpled sliding interface for low friction (&mu; &le; 0.03).</small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-3 rounded-3 border bg-light text-center h-100">
                                    <i class="fa-solid fa-arrows-spin text-primary mb-1 fs-5"></i>
                                    <h6 class="fw-bold text-dark mb-1" style="font-size: 13px;">Serviceability Limit State</h6>
                                    <small class="text-muted d-block" style="font-size: 11.5px; line-height: 1.4;">(SLS) Zero permanent deformation &amp; full elastic recovery under operational service.</small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-3 rounded-3 border bg-light text-center h-100">
                                    <i class="fa-solid fa-shield-cat text-primary mb-1 fs-5"></i>
                                    <h6 class="fw-bold text-dark mb-1" style="font-size: 13px;">Ultimate Limit State</h6>
                                    <small class="text-muted d-block" style="font-size: 11.5px; line-height: 1.4;">(ULS) High safety factors preventing elastomer rupture, steel yield, &amp; seismic failure.</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- POINT 2: Clause 4.2.5 Mild Steel Laminates -->
                    <div class="mb-4 p-4 rounded-4 border bg-white shadow-sm" style="border-left: 4px solid var(--theme-primary) !important;">
                        <div class="d-flex align-items-center justify-content-between mb-3 flex-wrap gap-2">
                            <span class="badge rounded-pill px-3 py-1.5 fw-bold text-uppercase" style="background: var(--theme-subtle); color: var(--theme-primary); font-size: 12px; letter-spacing: 0.5px;">
                                <i class="fa-solid fa-circle-check me-1.5"></i> POINT 2 &bull; 4.2.5 MILD STEEL LAMINATES
                            </span>
                            <span class="badge bg-light text-secondary border px-2.5 py-1 small">IS: 2062 / IS: 1079</span>
                        </div>

                        <!-- Complete Verbatim Text from Raw Material.odt -->
                        <div class="p-3.5 p-4 rounded-3 mb-4" style="background: #f0f9ff; border: 1px solid #bae6fd;">
                            <div class="d-flex align-items-start gap-3">
                                <i class="fa-solid fa-file-contract text-primary fs-5 mt-1"></i>
                                <div>
                                    <h6 class="fw-bold text-primary text-uppercase mb-2" style="font-size: 12.5px; letter-spacing: 0.5px;">
                                        Document Original Content (Verbatim):
                                    </h6>
                                    <p class="text-dark mb-0 fw-semibold" style="font-size: 15px; line-height: 1.8; color: #0f172a !important;">
                                        4.2.5 <span class="text-primary fw-bold">Laminates</span> of mild steel conforming to IS: 2062/ IS: 1079 or equivalent international grade shall be used. The yield stress of the material shall not be lesser than 250 MPa. Uses of any other materials like fibreglass or similar fabric as laminates are not permitted for the purpose of this Code.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Highlights of Code Compliance in Single Unified Theme -->
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="p-3 rounded-3 border bg-light h-100" style="border-left: 3px solid var(--theme-primary) !important;">
                                    <div class="d-flex align-items-center mb-1 text-primary">
                                        <i class="fa-solid fa-circle-exclamation me-2"></i>
                                        <h6 class="fw-bold mb-0" style="font-size: 13.5px; color: var(--theme-primary);">Strict Code Prohibition:</h6>
                                    </div>
                                    <p class="small text-muted mb-0" style="line-height: 1.6;">
                                        Uses of any other materials like <strong>fibreglass</strong> or similar fabric as laminates are <strong>strictly not permitted</strong> for the purpose of this Code.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-3 rounded-3 border bg-light h-100" style="border-left: 3px solid var(--theme-primary) !important;">
                                    <div class="d-flex align-items-center mb-1 text-primary">
                                        <i class="fa-solid fa-circle-check me-2"></i>
                                        <h6 class="fw-bold mb-0" style="font-size: 13.5px; color: var(--theme-primary);">Yield Strength Standard:</h6>
                                    </div>
                                    <p class="small text-muted mb-0" style="line-height: 1.6;">
                                        The yield stress of the mild steel material shall not be lesser than <strong>250 MPa</strong> (IS: 2062 / IS: 1079 Grade E250).
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Footer Verification Stamp -->
                    <div class="mt-4 pt-3 border-top d-flex justify-content-between align-items-center flex-wrap gap-2 text-muted small">
                        <div>
                            <strong>Quality Control Laboratory</strong> &bull; Polymer Products, Nashik
                        </div>
                        <div class="badge rounded-pill px-3 py-1.5 fw-bold" style="background: var(--theme-subtle); color: var(--theme-primary); border: 1px solid var(--theme-primary);">
                            <i class="fa-solid fa-check-circle me-1"></i> IRC:83 &amp; RDSO Compliant
                        </div>
                    </div>

                </div>
            </div>
            
            <div class="modal-footer bg-light border-0 py-2.5 px-4">
                <button type="button" class="btn btn-secondary rounded-pill px-4" data-bs-dismiss="modal">Close Document</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal 2: Machinery & Testing Equipment List Document Viewer -->
<div class="modal fade" id="machineryModal" tabindex="-1" aria-labelledby="machineryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-fullscreen-lg-down modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content border-0 shadow-lg rounded-4 overflow-hidden">
            <div class="modal-header bg-dark text-white border-0 py-3 px-4 d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center gap-3">
                    <div class="rounded-circle p-2 d-flex align-items-center justify-content-center text-white" style="background: var(--theme-primary); width: 40px; height: 40px;">
                        <i class="fa-solid fa-gears fs-6"></i>
                    </div>
                    <div>
                        <h5 class="modal-title fw-bold text-white mb-0" id="machineryModalLabel" style="font-family: 'Oswald', sans-serif; letter-spacing: 0.5px;">
                            List of Testing Machineries &amp; Equipment
                        </h5>
                        <small class="text-light text-opacity-75" style="font-size: 12px;">Official Plant Inventory &bull; Polymer Products, Nashik</small>
                    </div>
                </div>
                <div>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>
            
            <div class="modal-body p-4 p-md-5" style="background: #f0f7ff;">
                <!-- Letterhead Document Container -->
                <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm border mx-auto" style="max-width: 1050px;">
                    
                    <!-- Company Letterhead Header -->
                    <div class="text-center border-bottom pb-4 mb-4">
                        <h3 class="fw-bold text-dark mb-1" style="font-family: 'Oswald', sans-serif; letter-spacing: 1px; color: var(--theme-primary);">
                            POLYMER PRODUCTS
                        </h3>
                        <p class="text-muted small mb-1">
                            E-6, M.I.D.C., Ambad, Nashik - 422 010 (Maharashtra, India)
                        </p>
                        <h6 class="fw-bold text-dark text-uppercase mt-2 mb-0" style="font-family: 'Oswald', sans-serif; font-size: 15px;">
                            LIST OF TESTING MACHINERIES &amp; EQUIPMENT INSTALLED IN OUR WORKS FOR CARRYING OUT VARIOUS PROCESSES &amp; TESTS ON ELASTOMERIC BEARINGS AND ELASTOMERIC COMPOUNDS
                        </h6>
                    </div>

                    <!-- Declaration Notice -->
                    <div class="p-3.5 p-3 rounded-3 border bg-light mb-4" style="border-left: 4px solid var(--theme-primary) !important;">
                        <p class="small text-muted mb-0" style="line-height: 1.6;">
                            <strong>Statutory Declaration:</strong> All testing Machineries/Equipment stated below are maintained in calibrated, certified working condition. Testing of elastomeric bridge bearings and rubber compounds is regularly witnessed by <strong>DGS&amp;D</strong>, <strong>RITES</strong>, and authorized client quality representatives.
                        </p>
                    </div>

                    <!-- Mobile Scroll Indicator inside modal -->
                    <div class="d-lg-none d-flex align-items-center justify-content-between p-2 mb-2 rounded-3 text-dark small machinery-scroll-hint">
                        <span class="d-inline-flex align-items-center gap-1.5 fw-semibold">
                            <i class="fa-solid fa-arrows-left-right text-primary fa-fade"></i> Swipe table horizontally
                        </span>
                        <span class="badge bg-primary text-white rounded-pill px-2 py-0.5" style="font-size: 11px;">
                            42 Machines
                        </span>
                    </div>

                    <!-- Table of 42 items in Document View -->
                    <div class="machinery-table-wrap shadow-sm mb-3">
                        <table class="table table-bordered table-sm align-middle text-secondary machinery-table" style="font-size: 13px;">
                            <thead class="table-dark">
                                <tr>
                                    <th class="py-2 text-center" style="width: 50px;">Sr.</th>
                                    <th class="py-2">Testing Machine / Equipment Details</th>
                                    <th class="py-2" style="width: 150px;">Manufacturer</th>
                                    <th class="py-2 text-center" style="width: 110px;">Make / Year</th>
                                    <th class="py-2">Type of Test / Operation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center fw-bold">01</td>
                                    <td><strong>Hydraulic Press (750 Tons)</strong><br><small class="text-muted">Glycerine gauge 0.5% acc. Bed: 1050 &times; 1060 &times; 770 mm, Ram: 556mm</small></td>
                                    <td>INDIMECH</td>
                                    <td class="text-center">1992</td>
                                    <td>Elastic Modulus, Shear Modulus, Ultimate Compression Test</td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold">02</td>
                                    <td><strong>Hydraulic Press (300 Tons)</strong><br><small class="text-muted">Size: 1000 &times; 950 &times; 420 mm, Ram: 448.94mm</small></td>
                                    <td>UNIMECH</td>
                                    <td class="text-center">1997</td>
                                    <td>Manufacturing of Bearings</td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold">03</td>
                                    <td><strong>Hydraulic Press (260 Tons)</strong><br><small class="text-muted">Size: 815 &times; 810 &times; 420 mm, Ram: 400.00mm</small></td>
                                    <td>UNIMECH</td>
                                    <td class="text-center">1997</td>
                                    <td>Manufacturing of Bearings</td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold">04</td>
                                    <td><strong>Hydraulic Press (132 Tons)</strong><br><small class="text-muted">Size: 755 &times; 610 &times; 300 mm, Ram: 289.80mm</small></td>
                                    <td>UNIMECH</td>
                                    <td class="text-center">1997</td>
                                    <td>Manufacturing of Bearings</td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold">05</td>
                                    <td><strong>Hydraulic Press (100 Tons)</strong><br><small class="text-muted">Size: 560 &times; 510 &times; 410 mm, Ram: 250.00mm</small></td>
                                    <td>UNIMECH</td>
                                    <td class="text-center">1999</td>
                                    <td>Manufacturing of Bearings</td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold">06</td>
                                    <td><strong>Hydraulic Press (200 Tons)</strong><br><small class="text-muted">Size: 660 &times; 530 &times; 380 mm, Ram: 200.00mm</small></td>
                                    <td>UNIMECH</td>
                                    <td class="text-center">1988</td>
                                    <td>Manufacturing of Bearings</td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold">07</td>
                                    <td><strong>Hydraulic Press (200 Tons)</strong><br><small class="text-muted">Size: 460 &times; 480 &times; 370 mm, Pillar Type</small></td>
                                    <td>UNIMECH</td>
                                    <td class="text-center">2008</td>
                                    <td>Manufacturing of Bearings</td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold">08</td>
                                    <td><strong>Hydraulic Press (200 Tons)</strong><br><small class="text-muted">Size: 810 &times; 710 &times; 420 mm, Ram: 350.00mm</small></td>
                                    <td>UNIMECH</td>
                                    <td class="text-center">2008</td>
                                    <td>Manufacturing of Bearings</td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold">09</td>
                                    <td><strong>Hydraulic Press (200 Tons)</strong><br><small class="text-muted">Size: 810 &times; 720 &times; 420 mm, Frame Type</small></td>
                                    <td>SARAS</td>
                                    <td class="text-center">2008</td>
                                    <td>Manufacturing of Bearings</td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold">10</td>
                                    <td><strong>Hydraulic Press (30 Tons)</strong><br><small class="text-muted">Size: 300 &times; 320 &times; 125 mm, Pillar Type</small></td>
                                    <td>INDIMECH</td>
                                    <td class="text-center">2008</td>
                                    <td>Manufacturing of Bearings</td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold">11</td>
                                    <td><strong>Hydraulic Press (175 Tons)</strong><br><small class="text-muted">Size: 510 &times; 510 &times; 410 mm, Frame Type</small></td>
                                    <td>SARAS</td>
                                    <td class="text-center">2008</td>
                                    <td>Manufacturing of Bearings</td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold">12</td>
                                    <td><strong>Hydraulic Press (200 Tons)</strong><br><small class="text-muted">Size: 810 &times; 720 &times; 400 mm, Frame Type</small></td>
                                    <td>SARAS</td>
                                    <td class="text-center">2008</td>
                                    <td>Manufacturing of Bearings</td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold">13</td>
                                    <td><strong>Hydraulic Press (200 Tons)</strong><br><small class="text-muted">Size: 800 &times; 810 &times; 400 mm, Frame Type</small></td>
                                    <td>SARAS</td>
                                    <td class="text-center">2008</td>
                                    <td>Manufacturing of Bearings</td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold">14</td>
                                    <td><strong>Hydraulic Press (50 Tons)</strong><br><small class="text-muted">Size: 500 &times; 480 &times; 385 mm, Pillar Type</small></td>
                                    <td>DYNAMIC</td>
                                    <td class="text-center">2008</td>
                                    <td>Manufacturing of Bearings</td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold">15</td>
                                    <td><strong>Hydraulic Press (150 Tons)</strong><br><small class="text-muted">Size: 650 &times; 660 &times; 500 mm, Pillar Type</small></td>
                                    <td>DYNAMIC</td>
                                    <td class="text-center">2022</td>
                                    <td>Manufacturing of Bearings</td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold">16</td>
                                    <td><strong>Hydraulic Press (200 Tons)</strong><br><small class="text-muted">Size: 750 &times; 740 &times; 500 mm, Pillar Type</small></td>
                                    <td>DYNAMIC</td>
                                    <td class="text-center">2022</td>
                                    <td>Manufacturing of Bearings</td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold">17</td>
                                    <td><strong>Hydraulic Press (200 Tons)</strong><br><small class="text-muted">Size: 850 &times; 830 &times; 550 mm, Pillar Type</small></td>
                                    <td>DYNAMIC</td>
                                    <td class="text-center">2024</td>
                                    <td>Manufacturing of Bearings</td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold">18</td>
                                    <td><strong>Hydraulic Press (200 Tons)</strong><br><small class="text-muted">Size: 850 &times; 830 &times; 550 mm, Pillar Type</small></td>
                                    <td>DYNAMIC</td>
                                    <td class="text-center">2024</td>
                                    <td>Manufacturing of Bearings</td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold">19</td>
                                    <td><strong>Hydraulic Press (170 Tons)</strong><br><small class="text-muted">Size: 700 &times; 690 &times; 420 mm, Frame Type</small></td>
                                    <td>DYNAMIC</td>
                                    <td class="text-center">2024</td>
                                    <td>Manufacturing of Bearings</td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold">20</td>
                                    <td><strong>Hydraulic Press (120 Tons)</strong><br><small class="text-muted">Size: 600 &times; 590 &times; 420 mm, Frame Type</small></td>
                                    <td>DYNAMIC</td>
                                    <td class="text-center">2024</td>
                                    <td>Manufacturing of Bearings</td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold">21</td>
                                    <td><strong>Hydraulic Jack with Glycerine Pressure Gauges</strong></td>
                                    <td>INDIMECH</td>
                                    <td class="text-center">1992</td>
                                    <td>Shear Modulus testing on large size bearings</td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold">22</td>
                                    <td><strong>Hydraulic Jack with Glycerine Gauges (80 Tons)</strong></td>
                                    <td>DYNAMIC</td>
                                    <td class="text-center">1992</td>
                                    <td>Elastomer to Steel Bond Test</td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold">23</td>
                                    <td><strong>Tensile Tester (Capacity: 5000 N)</strong><br><small class="text-muted">Load Cell Amplifier with Peak Detector</small></td>
                                    <td>Kamal Metal / Systems</td>
                                    <td class="text-center">1988/2002</td>
                                    <td>Tensile Strength, Elongation, Tear Strength, Peel Adhesion</td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold">24</td>
                                    <td><strong>Oscillating Disc Rheometer (MV-ODR)</strong></td>
                                    <td>Micro Vision Ind.</td>
                                    <td class="text-center">2004</td>
                                    <td>Determination of curing characteristics &amp; rubber quality</td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold">25</td>
                                    <td><strong>Laboratory Air Ageing Oven</strong></td>
                                    <td>Tempo Instruments</td>
                                    <td class="text-center">1988</td>
                                    <td>Accelerated Ageing, Compression Set Test</td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold">26</td>
                                    <td><strong>Shore A Hardness Tester</strong></td>
                                    <td>JSE</td>
                                    <td class="text-center">1988</td>
                                    <td>Hardness Determination (Shore A / IRHD)</td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold">27</td>
                                    <td><strong>Electronic Single Pan Digital Balance (0.001 mg)</strong></td>
                                    <td>Contech Instruments</td>
                                    <td class="text-center">2002</td>
                                    <td>Ash Content, Specific Gravity, Chemical analysis</td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold">28</td>
                                    <td><strong>Muffle Furnace (High-Temp)</strong></td>
                                    <td>Lab Hosp Corp.</td>
                                    <td class="text-center">Standard</td>
                                    <td>Ash Content &amp; Elastomer Content Verification</td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold">29</td>
                                    <td><strong>Soxhlet Extraction Apparatus with Condenser</strong></td>
                                    <td>Lab Standard</td>
                                    <td class="text-center">-</td>
                                    <td>Polymer &amp; Elastomer Content Chemical Determination</td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold">30</td>
                                    <td><strong>Shot Blasting Equipment with Compressor</strong></td>
                                    <td>Abrasive Blasting</td>
                                    <td class="text-center">PB-150120</td>
                                    <td>Sa 2.5 profiling of M.S. Plate surface for Chemlok bonding</td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold">31</td>
                                    <td><strong>Thickness Gauge (Digital Micrometer)</strong></td>
                                    <td>Mitutoyo Mfg. Co.</td>
                                    <td class="text-center">7305</td>
                                    <td>Measuring thickness of Dumbbells &amp; Compression buttons</td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold">32</td>
                                    <td><strong>Rubber Mixing Mill (16" &times; 42")</strong></td>
                                    <td>Modern Hydraulics</td>
                                    <td class="text-center">Heavy Duty</td>
                                    <td>Rubber Compound Mastication &amp; Mixing</td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold">33</td>
                                    <td><strong>Rubber Mixing Mill (14" &times; 36")</strong></td>
                                    <td>G. G. Engineering</td>
                                    <td class="text-center">2024</td>
                                    <td>Rubber Compound Masterbatch Preparation</td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold">34</td>
                                    <td><strong>Precision Surface Grinder</strong></td>
                                    <td>Magnum Eng. / Kulkarni</td>
                                    <td class="text-center">1997</td>
                                    <td>Tooling &amp; Mould Surface Finishing</td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold">35</td>
                                    <td><strong>IRHD Hardness Tester (Micro/Macro)</strong></td>
                                    <td>Apex Enterprises</td>
                                    <td class="text-center">2003</td>
                                    <td>International Rubber Hardness Degrees (IRHD) Tester</td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold">36</td>
                                    <td><strong>Industrial Bandsaw Machine</strong></td>
                                    <td>Local / Plant Custom</td>
                                    <td class="text-center">Heavy Duty</td>
                                    <td>Finished Bearing Sectional Cutting for Inspection</td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold">37</td>
                                    <td><strong>Electric Arc &amp; TIG Welding Machine</strong></td>
                                    <td>Electro Weld</td>
                                    <td class="text-center">Standard</td>
                                    <td>General Fabrication &amp; Fixture Maintenance</td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold">38</td>
                                    <td><strong>Hydraulic Plate Shearing Machine</strong></td>
                                    <td>Swastik Machine Tools</td>
                                    <td class="text-center">2009</td>
                                    <td>Mild Steel Internal Plate Sizing &amp; Shearing</td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold">39</td>
                                    <td><strong>Dumbbell Shaped Specimen Cutting Die</strong></td>
                                    <td>Stech Engineers</td>
                                    <td class="text-center">2024</td>
                                    <td>ASTM D412 / IS:3400 Dumbbell Specimen Punching</td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold">40</td>
                                    <td><strong>De Mattia Flex Testing Machine</strong></td>
                                    <td>Stech Engineers</td>
                                    <td class="text-center">2023</td>
                                    <td>Dynamic Flex Cracking &amp; Cut Growth Resistance</td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold">41</td>
                                    <td><strong>Induced Draft Cooling Tower</strong></td>
                                    <td>Innovative</td>
                                    <td class="text-center">2019</td>
                                    <td>Industrial Water Cooling for Two-Roll Mills &amp; Presses</td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold">42</td>
                                    <td><strong>Trouser Type Tear Specimen Cutting Die</strong></td>
                                    <td>Stech Engineers</td>
                                    <td class="text-center">2020</td>
                                    <td>ASTM D624 Trouser Tear Resistance Specimen Preparation</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Footer Stamp -->
                    <div class="mt-4 pt-3 border-top d-flex justify-content-between align-items-center flex-wrap gap-2 text-muted small">
                        <div>
                            <strong>Works &amp; Plant Administration</strong> &bull; Polymer Products, Nashik
                        </div>
                        <div class="badge bg-primary-subtle text-primary border border-primary-subtle px-3 py-1.5 rounded-pill fw-bold">
                            <i class="fa-solid fa-stamp me-1"></i> Official Machinery Record
                        </div>
                    </div>

                </div>
            </div>
            
            <div class="modal-footer bg-light border-0 py-2.5 px-4">
                <button type="button" class="btn btn-secondary rounded-pill px-4" data-bs-dismiss="modal">Close Document</button>
            </div>
        </div>
    </div>
</div>

<?php include_once 'partials/footer.php'; ?>
