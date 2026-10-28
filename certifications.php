<?php 
$page_title = "NHAI Client Approvals & Technical Certifications - Polymer Products";
$meta_description = "Official NHAI client approval letters, RDSO Indian Railways technical approval, IRC:83 Quality Assurance Plan, and EPC contractor credentials.";
include_once 'partials/header.php'; 

// Specialized Technical & Quality Accreditations (Non-duplicate, distinct from the 8 Home page statutory certs)
$quality_approvals = [
    // [
    //     "num" => "01",
    //     "title" => "RDSO Indian Railways Technical Approval",
    //     "cat_label" => "Indian Railways Standards",
    //     "desc" => "Research Designs and Standards Organisation (RDSO) technical approval conforming to RDSO BS-131 standard for railway bridges.",
    //     "icon" => "fa-train",
    //     "doc" => "assets/pp_data/Page 01/POLYMER DETAILS/NEW_RDSO.pdf",
    //     "type" => "pdf",
    //     "badge" => "RDSO BS-131 Approved",
    //     "color" => "#dc2626"
    // ],
    [
        "num" => "01",
        "title" => "Pollution Consent (MPCB)",
        "cat_label" => "Environmental Compliance",
        "desc" => "Maharashtra Pollution Control Board (MPCB) environmental consent & green emission standard compliance.",
        "icon" => "fa-leaf",
        "doc" => "assets/pp_data/Page 01/POLYMER DETAILS/PP DETAILS/MPCB POLLUTION CERTIFICATE.pdf",
        "type" => "pdf",
        "badge" => "MPCB Approved",
        "color" => "#16a34a"
    ],
    // [
    //     "num" => "03",
    //     "title" => "Plant Model & Infrastructure Plan",
    //     "cat_label" => "Manufacturing Architecture",
    //     "desc" => "Detailed civil and structural model layout of Nashik manufacturing floor, press bays, testing laboratory, and dispatch zones.",
    //     "icon" => "fa-compass-drafting",
    //     "doc" => "assets/pp_data/Page 01/POLYMER DETAILS/PP DETAILS/POLYMER MODEL PLAN.pdf",
    //     "type" => "pdf",
    //     "badge" => "DISH Plant Architecture",
    //     "color" => "#0d9488"
    // ]
]; 

// NHAI & Major Infrastructure Client Approval Letters
$client_approvals = [
    [
        "num" => "01",
        "client" => "Ashoka Buildcon Ltd.",
        "project" => "4/6 Lane National Highway Bridge Expansion & ROB Packages",
        "doc" => "assets/pp_data/Page 01/POLYMER DETAILS/NH APPROVED LETTERS/LETTER/ashoka-3.pdf",
        "icon" => "fa-road",
        "badge" => "NHAI EPC Project",
        "summary" => "Official acceptance and technical approval letter for high-tonnage elastomeric bridge bearings supplied for national expressway bridge packages."
    ],
    [
        "num" => "02",
        "client" => "GHV (India) Pvt. Ltd.",
        "project" => "National Highway Expressway Bridge Packages with Consultant QC",
        "doc" => "assets/pp_data/Page 01/POLYMER DETAILS/NH APPROVED LETTERS/LETTERS/GHV  3.10.23.pdf",
        "icon" => "fa-bridge-water",
        "badge" => "Expressway Corridor",
        "summary" => "Approved bridge bearing supplier clearance letter conforming to IRC:83 (Part II) with rigorous third-party quality control inspections."
    ],
    [
        "num" => "03",
        "client" => "HG Infra Engineering Ltd.",
        "project" => "Major Expressways, Elevated Corridors & River Bridge Bearing Supplies",
        "doc" => "assets/pp_data/Page 01/POLYMER DETAILS/NH APPROVED LETTERS/LETTERS/HG INFRA - AP.pdf",
        "icon" => "fa-road",
        "badge" => "Highway Viaduct",
        "summary" => "Official project authorization letter for design, compounding, and delivery of multi-laminated elastomeric bearings for elevated corridors."
    ],
    [
        "num" => "04",
        "client" => "Mumbai Metro Line 4 (MML4)",
        "project" => "Elevated Transit Viaduct Pier Bearings & Station Corridor Vibration Pads",
        "doc" => "assets\pp_data\Page 01\POLYMER DETAILS\NH APPROVED LETTERS\LETTERS\MILAN MML4-MUMBAI METRO LINE.pdf",
        "icon" => "fa-train-subway",
        "badge" => "Metro Rail Transit",
        "summary" => "Official Metro authority bearing approval for elevated guide-way pier caps and seismic vibration isolation pads."
    ],
    [
        "num" => "05",
        "client" => "Rajnandini Infrastructure",
        "project" => "State Highway Bridges, River Crossings & PWD Flyover Contracts",
        "doc" => "assets/pp_data/Page 01/POLYMER DETAILS/NH APPROVED LETTERS/LETTERS/RAJNANDINI.pdf",
        "icon" => "fa-bridge",
        "badge" => "PWD Highway",
        "summary" => "State Highway project engineer acceptance letter verifying compliance with proof-load (1.5x) and shear modulus acceptance parameters."
    ],
    [
        "num" => "06",
        "client" => "Shivalaya Construction Co.",
        "project" => "Highway Grade Separators, Vehicular Underpasses (VUP) & Major Flyovers",
        "doc" => "assets/pp_data/Page 01/POLYMER DETAILS/NH APPROVED LETTERS/LETTERS/SHIVALAYA LETTER.pdf",
        "icon" => "fa-city",
        "badge" => "Flyover Corridor",
        "summary" => "Official contractor approval for supply of standard and custom sized IRC:83 Type B and Type C elastomeric bearings."
    ],
    [
        "num" => "07",
        "client" => "Bharat Construction",
        "project" => "Highway Bridges, River Overpass Superstructures & Bearing Approvals",
        "doc" => "assets/pp_data/Page 01/POLYMER DETAILS/NH APPROVED LETTERS/BHARAT CONST.pdf",
        "icon" => "fa-building",
        "badge" => "Bridge Infrastructure",
        "summary" => "Quality compliance and site acceptance letter for railway overbridge (ROB) and river crossing bridge bearing installations."
    ]
];
?>

<style>
.cert-hero-badge {
    background: var(--theme-subtle);
    border: 1px solid var(--theme-primary);
    color: var(--theme-lighter);
    font-size: 13px;
    letter-spacing: 1px;
}
.approval-card-modern {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 20px;
    transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
    position: relative;
    overflow: hidden;
}
.approval-card-modern:hover {
    transform: translateY(-6px);
    box-shadow: 0 16px 36px rgba(2, 132, 199, 0.12) !important;
    border-color: var(--theme-primary) !important;
}
.approval-icon-box {
    width: 54px;
    height: 54px;
    border-radius: 14px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    background: var(--theme-subtle);
    color: var(--theme-primary);
    transition: transform 0.3s ease;
}
.approval-card-modern:hover .approval-icon-box {
    background: var(--theme-primary);
    color: #ffffff;
    transform: scale(1.08) rotate(4deg);
}
.quality-card-modern {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 18px;
    transition: all 0.35s ease;
}
.quality-card-modern:hover {
    transform: translateY(-5px);
    box-shadow: 0 14px 30px rgba(0, 0, 0, 0.06);
    border-color: var(--theme-primary) !important;
}
</style>

<!-- ============================================================
     1. Modern Hero Banner
     ============================================================ -->
<section class="ht-about-hero position-relative d-flex align-items-center"
    style="background: linear-gradient(135deg, rgba(9, 20, 36, 0.88) 0%, rgba(14, 34, 61, 0.65) 50%, rgba(6, 13, 24, 0.65) 100%), url('assets/img/img/banner/certificate.webp') center center / cover no-repeat; padding-top: 175px; padding-bottom: 75px; margin-top: -160px; min-height: 440px;">
    
    <div class="container-fluid px-3 px-lg-5 position-relative" style="z-index: 2;">
        <div class="row align-items-center">
            <div class="col-lg-8 wow fadeInLeft" data-wow-delay=".2s">
                <span class="badge px-3 py-2 mb-3 rounded-pill text-uppercase cert-hero-badge">
                    <i class="fa-solid fa-shield-halved me-2"></i>Infrastructure Approvals &amp; Client Letters
                </span>
                <h1 class="text-white fw-bold mb-3"
                    style="font-family: 'Saira-Medium', sans-serif; font-size: clamp(32px, 4.5vw, 50px); letter-spacing: -0.5px; line-height: 1.2;">
                    NHAI &amp; Client Approval Letters <span style="color: var(--theme-light);">&amp; Technical Credentials</span>
                </h1>
                <p class="text-light mb-4" style="font-size: 16px; line-height: 1.8; max-width: 740px; color: #cbd5e1 !important;">
                    Official verified acceptance and approval letters issued by leading EPC national highway contractors, metro transit authorities, RDSO Indian Railways, and major civil infrastructure clients.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="#client-approvals" class="btn btn-primary rounded-pill px-4 py-2 fw-bold text-uppercase" style="background:var(--theme-primary); border-color:var(--theme-primary); font-size:13px; letter-spacing:0.5px;">
                        <i class="fa-solid fa-handshake me-2"></i>NHAI Client Approvals (7)
                    </a>
                    <a href="#technical-approvals" class="btn btn-outline-light rounded-pill px-4 py-2 fw-bold text-uppercase" style="font-size:13px; letter-spacing:0.5px;">
                        <i class="fa-solid fa-train me-2"></i>Railway &amp; Technical QAP
                    </a>
                </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0 text-lg-end d-none d-lg-block wow fadeInRight" data-wow-delay=".3s">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-lg-end mb-0 bg-transparent p-0">
                        <li class="breadcrumb-item"><a href="index.php" class="text-white-50 text-decoration-none"><i class="fa-solid fa-house me-1"></i>Home</a></li>
                        <li class="breadcrumb-item active text-white fw-semibold" aria-current="page">Client Approvals</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     2. Statutory Notice Callout Banner
     ============================================================ -->
<!-- <section class="py-3" style="background: #ffffff; border-bottom: 1px solid #e2e8f0;">
    <div class="container-fluid px-3 px-lg-5">
        <div class="p-3.5 p-md-4 rounded-4 d-flex flex-wrap align-items-center justify-content-between gap-3"
            style="background: #f0f7ff; border: 1.5px dashed #cbd5e1;">
            <div class="d-flex align-items-center gap-3">
                <div class="rounded-circle d-flex align-items-center justify-content-center p-3 text-primary flex-shrink-0"
                    style="width: 48px; height: 48px; background: var(--theme-subtle);">
                    <i class="fa-solid fa-building-circle-check fs-5"></i>
                </div>
                <div>
                    <h6 class="fw-bold text-dark mb-0" style="font-size: 15px;">Primary Statutory &amp; Factory Registrations (8 Documents)</h6>
                    <small class="text-muted" style="font-size: 13px;">GST, PAN, UDYAM MSME, DISH Factory Plan, Stability, RDSO Approval Letter, ISO 9001:2027, and V-Chem Bond are showcased directly on our Home page.</small>
                </div>
            </div>
            <a href="index.php#statutory-certs" class="btn btn-sm btn-outline-primary rounded-pill fw-bold px-4 py-2">
                <i class="fa-solid fa-arrow-up-right-from-square me-1"></i> View 8 Statutory Registrations
            </a>
        </div>
    </div>
</section> -->

<!-- ============================================================
     3. NHAI & Major Infrastructure Client Approval Letters (3-Column Desktop Grid)
     ============================================================ -->
<section class="py-5" id="client-approvals" style="background: #ffffff;">
    <div class="container-fluid px-3 px-lg-5 py-3">
        
        <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay=".1s">
            <span class="badge px-3 py-1.5 rounded-pill font-monospace fw-bold text-uppercase mb-2"
                style="background: var(--theme-subtle); color: var(--theme-primary); font-size: 12px; letter-spacing: 1px;">
                Proven Track Record
            </span>
            <h2 class="fw-bold text-dark text-uppercase" style="font-family:'Oswald', sans-serif; font-size: clamp(26px, 3.2vw, 38px); letter-spacing: 0.5px;">
               Quality Approvals 
            </h2>
            <p class="text-muted mx-auto mb-0" style="max-width:760px; font-size:15px; line-height: 1.8;">
                View quality approval letters and credentials received from <strong>Major Project Clients</strong>, reflecting compliance with required standards and confidence in Polymer Products’ bearing quality and performance.
            </p>
        </div>

        <div class="row g-4 justify-content-center">
            <?php foreach ($client_approvals as $idx => $app): ?>
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="<?php echo (0.1 + ($idx * 0.05)); ?>s">
                <div class="approval-card-modern p-4 shadow-sm h-100 d-flex flex-column justify-content-between position-relative">
                    <span class="position-absolute top-0 end-0 m-3 badge rounded-pill fw-bold"
                        style="background: var(--theme-subtle); color: var(--theme-primary); font-size: 11px;">
                        #<?php echo $app['num']; ?>
                    </span>

                    <div>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="approval-icon-box">
                                <i class="fa-solid <?php echo $app['icon']; ?>"></i>
                            </div>
                            <span class="badge bg-primary-subtle text-primary rounded-pill px-3 py-1.5 small fw-semibold me-4" style="font-size: 11.5px;">
                                <i class="fa-solid fa-circle-check text-success me-1"></i> <?php echo $app['badge']; ?>
                            </span>
                        </div>

                        <h4 class="fw-bold text-dark mb-2" style="font-family: 'Oswald', sans-serif; font-size: 21px; letter-spacing: 0.5px; line-height: 1.3;">
                            <?php echo htmlspecialchars($app['client']); ?>
                        </h4>

                        <p class="small text-muted mb-2 fw-semibold" style="font-size: 13px; line-height: 1.5; color: #475569 !important;">
                            <i class="fa-solid fa-location-dot text-primary me-1"></i> <?php echo htmlspecialchars($app['project']); ?>
                        </p>

                        <p class="small text-secondary mb-4" style="line-height: 1.7; font-size: 13px;">
                            <?php echo htmlspecialchars($app['summary']); ?>
                        </p>
                    </div>

                    <div class="pt-3 border-top">
                        <a href="<?php echo $app['doc']; ?>" class="btn btn-outline-primary btn-sm rounded-pill w-100 fw-bold open-cert-modal d-flex align-items-center justify-content-center gap-1.5"
                            data-doc-url="<?php echo $app['doc']; ?>"
                            data-doc-title="<?php echo htmlspecialchars($app['client']) . ' - Client Approval Letter'; ?>"
                            data-doc-type="pdf"
                            style="font-size: 12.5px; padding: 8px 16px;">
                            <i class="fa-solid fa-file-pdf"></i> <span>View Approval Letter</span>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<!-- ============================================================
     4. Specialized Technical & Quality Accreditations (RDSO, QAP, Sister Concern)
     ============================================================ -->
<!-- <section class="py-5" id="technical-approvals" style="background: #f0f7ff; border-top: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0;">
    <div class="container-fluid px-3 px-lg-5 py-3">
        
        <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay=".1s">
            <span class="badge px-3 py-1.5 rounded-pill font-monospace fw-bold text-uppercase mb-2"
                style="background: var(--theme-subtle); color: var(--theme-primary); font-size: 12px; letter-spacing: 1px;">
                Technical Standards &amp; Corporate Synergy
            </span>
            <h2 class="fw-bold text-dark text-uppercase" style="font-family:'Oswald', sans-serif; font-size: clamp(26px, 3.2vw, 38px); letter-spacing: 0.5px;">
                Technical Approvals &amp; Corporate Credentials
            </h2>
            <p class="text-muted mx-auto mb-0" style="max-width:760px; font-size:15px; line-height: 1.8;">
                Railway standard approvals, Quality Assurance Plans (QAP), and corporate affiliation letters.
            </p>
        </div>

        <div class="row g-4 justify-content-center">
            <?php foreach ($quality_approvals as $idx => $q): ?>
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="<?php echo (0.1 + ($idx * 0.05)); ?>s">
                <div class="quality-card-modern p-4 shadow-sm h-100 d-flex flex-column justify-content-between position-relative">
                    <span class="position-absolute top-0 end-0 m-3 badge rounded-pill fw-bold"
                        style="background: var(--theme-subtle); color: var(--theme-primary); font-size: 11px;">
                        #0<?php echo $q['num']; ?>
                    </span>

                    <div>
                        <div class="approval-icon-box mb-3">
                            <i class="fa-solid <?php echo $q['icon']; ?>"></i>
                        </div>
                        <span class="badge bg-light text-muted border px-2.5 py-1 small mb-2 d-inline-block" style="font-size: 11px;">
                            <?php echo $q['cat_label']; ?>
                        </span>
                        <h5 class="fw-bold text-dark mb-2" style="font-family: 'Oswald', sans-serif; font-size: 19px; line-height: 1.3;">
                            <?php echo htmlspecialchars($q['title']); ?>
                        </h5>
                        <p class="small text-muted mb-4" style="line-height: 1.7; font-size: 13px;">
                            <?php echo htmlspecialchars($q['desc']); ?>
                        </p>
                    </div>

                    <div class="pt-3 border-top d-flex align-items-center justify-content-between flex-wrap gap-2">
                        <span class="badge bg-secondary-subtle text-secondary small" style="font-size: 11px;">
                            <?php echo $q['badge']; ?>
                        </span>
                        <a href="<?php echo $q['doc']; ?>" class="btn btn-outline-primary btn-sm rounded-pill fw-bold px-3 open-cert-modal d-inline-flex align-items-center gap-1.5"
                            data-doc-url="<?php echo $q['doc']; ?>"
                            data-doc-title="<?php echo htmlspecialchars($q['title']); ?>"
                            data-doc-type="<?php echo $q['type']; ?>"
                            style="font-size: 12px;">
                            <i class="fa-solid <?php echo ($q['type'] === 'image' ? 'fa-image' : 'fa-file-pdf'); ?>"></i> <span>View Document</span>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section> -->

<!-- ============================================================
     5. Universal Document & Image Lightbox Modal Viewer
     ============================================================ -->
<div class="modal fade" id="certificateModal" tabindex="-1" aria-labelledby="certificateModalLabel" aria-hidden="true" style="z-index: 10500;">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content border-0 shadow-lg rounded-4 overflow-hidden">
            <div class="modal-header text-white px-4 py-3" style="background: var(--theme-primary);">
                <div class="d-flex align-items-center">
                    <div class="modal-icon-wrap me-3 p-2 bg-white bg-opacity-25 rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                        <i id="certModalIcon" class="fa-solid fa-file-pdf text-white fs-5"></i>
                    </div>
                    <div>
                        <h5 class="modal-title fw-bold text-white mb-0" id="certificateModalLabel">Document Viewer</h5>
                        <small id="certModalSub" class="text-white-50" style="font-size: 12px;">Verified NHAI Client Approval &amp; Quality Credential</small>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <button type="button" class="btn-close btn-close-white ms-2" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>

            <div class="modal-body p-0 position-relative" style="background: #0f172a; min-height: 520px;">
                <div id="certModalLoader" class="position-absolute top-50 start-50 translate-middle text-center py-5">
                    <div class="spinner-border text-primary mb-2" role="status" style="width: 3rem; height: 3rem;">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <p class="text-white-50 small mb-0">Loading document preview...</p>
                </div>

                <iframe id="certModalIframe" src="" style="width: 100%; height: 75vh; border: none; display: none; background: #fff;" allowfullscreen></iframe>

                <div id="certModalImgWrap" class="p-2 p-md-3" style="display: none; height: 75vh; min-height: 520px; overflow-y: auto; background: #0f172a; align-items: center; justify-content: center;">
                    <img id="certModalImage" src="" alt="Certificate Image" style="max-height: 72vh; max-width: 95%; width: auto; height: auto; object-fit: contain; box-shadow: 0 10px 30px rgba(0,0,0,0.5); border-radius: 8px; background: #fff; margin: auto; display: block;">
                </div>
            </div>

            <div class="modal-footer bg-white px-4 py-3 border-top d-flex justify-content-between align-items-center">
                <span class="text-muted small">
                    <i class="fa-solid fa-shield-check text-success me-1"></i> Official Certified Document &bull; Polymer Products
                </span>
                <button type="button" class="btn btn-dark btn-sm rounded-pill px-4 fw-bold" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Script with Smooth Scroll Unlock -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const certModalEl = document.getElementById('certificateModal');
    if (!certModalEl) return;

    const modalTitle = document.getElementById('certificateModalLabel');
    const modalIcon = document.getElementById('certModalIcon');
    const modalIframe = document.getElementById('certModalIframe');
    const modalImgWrap = document.getElementById('certModalImgWrap');
    const modalImage = document.getElementById('certModalImage');
    const modalLoader = document.getElementById('certModalLoader');

    function getModalInstance() {
        if (typeof bootstrap !== 'undefined' && bootstrap.Modal) {
            return bootstrap.Modal.getOrCreateInstance(certModalEl);
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

    document.querySelectorAll('.open-cert-modal').forEach(function (btn) {
        btn.addEventListener('click', function (e) {
            e.preventDefault();

            const url = this.getAttribute('data-doc-url') || this.getAttribute('href');
            const title = this.getAttribute('data-doc-title') || 'Certificate & Approval Document';
            const type = this.getAttribute('data-doc-type') || (url.toLowerCase().match(/\.(png|jpg|jpeg|webp)$/) ? 'image' : 'pdf');

            if (!url) return;

            modalTitle.textContent = title;
            modalLoader.style.display = 'block';
            modalIframe.style.display = 'none';
            modalImgWrap.style.display = 'none';
            modalIframe.src = '';
            modalImage.src = '';

            if (type === 'image') {
                modalIcon.className = 'fa-solid fa-image text-white fs-5';
                modalImage.onload = function () {
                    modalLoader.style.display = 'none';
                    modalImgWrap.style.display = 'flex';
                };
                modalImage.onerror = function () {
                    modalLoader.style.display = 'none';
                    modalImgWrap.innerHTML = '<div class="p-4 text-center text-white"><i class="fa-solid fa-triangle-exclamation fa-2x mb-2 text-warning"></i><p>Unable to preview image directly.</p></div>';
                    modalImgWrap.style.display = 'flex';
                };
                modalImage.src = url;
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
                $(certModalEl).modal('show');
            }
        });
    });

    // Close buttons directly
    certModalEl.querySelectorAll('[data-bs-dismiss="modal"], [data-dismiss="modal"], .btn-close').forEach(function (btn) {
        btn.addEventListener('click', function () {
            const bsModal = getModalInstance();
            if (bsModal) {
                bsModal.hide();
            } else if (typeof $ !== 'undefined') {
                $(certModalEl).modal('hide');
            }
            setTimeout(unlockPageScroll, 100);
        });
    });

    certModalEl.addEventListener('hidden.bs.modal', unlockPageScroll);
    certModalEl.addEventListener('hide.bs.modal', function () {
        setTimeout(unlockPageScroll, 150);
    });
});
</script>

<?php include_once 'partials/footer.php'; ?>
