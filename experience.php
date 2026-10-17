<?php 
$page_title = "Previous Experience & Major Project Supplies - Polymer Products";
$meta_description = "Official client supply registers of certified Elastomeric Bridge Bearings for NHAI National Highways, Metro Rail Transit, and Indian Railways & ROBs across India.";
include_once 'partials/header.php'; 
?>

<style>
.exp-hero-badge {
    background: var(--theme-subtle);
    border: 1px solid var(--theme-primary);
    color: var(--theme-lighter);
    font-size: 13px;
    letter-spacing: 1px;
}
.client-register-card {
    transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1);
    border: 1px solid #e2e8f0;
    background: #ffffff;
    border-radius: 20px;
    overflow: hidden;
    position: relative;
}
.client-register-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(2, 132, 199, 0.12) !important;
    border-color: var(--theme-primary) !important;
}
.register-icon-wrap {
    width: 68px;
    height: 68px;
    border-radius: 18px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 28px;
    background: var(--theme-subtle);
    color: var(--theme-primary);
    transition: transform 0.3s ease;
}
.client-register-card:hover .register-icon-wrap {
    transform: scale(1.08) rotate(4deg);
}
.feature-box-exp {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 24px 20px;
    transition: all 0.3s ease;
}
.feature-box-exp:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 24px rgba(0,0,0,0.06);
    border-color: var(--theme-primary);
}
.exp-hero-showcase {
    perspective: 1000px;
}
.exp-hero-img-box {
    transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1);
    background: rgb(71 164 207 / 20%);
    backdrop-filter: blur(14px);
    -webkit-backdrop-filter: blur(14px);
    border: 1px solid rgba(255, 255, 255, 0.22);
    box-shadow: 0 20px 45px rgba(0, 0, 0, 0.35);
}
.exp-hero-img-box:hover {
    transform: translateY(-5px);
    border-color: rgba(147, 197, 253, 0.45) !important;
    box-shadow: 0 25px 55px rgba(2, 132, 199, 0.28) !important;
}
.exp-hero-img-box img {
    transition: transform 0.45s ease;
    filter: drop-shadow(0 15px 25px rgba(0,0,0,0.45));
}
.exp-hero-img-box:hover img {
    transform: scale(1.04);
}
</style>

<!-- ============================================================
     1. Modern Hero Banner
     ============================================================ -->
<section class="ht-about-hero position-relative d-flex align-items-center"
    style="background: linear-gradient(135deg, rgba(9, 20, 36, 0.72) 0%, rgba(14, 34, 61, 0.56) 50%, rgba(6, 13, 24, 0.68) 100%), url('assets/img/img/banner/Experience.webp') center center / cover no-repeat; padding-top: 175px; padding-bottom: 75px; margin-top: -160px; min-height: 480px;">
    
    <div class="container-fluid px-3 px-lg-5 position-relative" style="z-index: 2;">
        <div class="row align-items-center justify-content-between g-4">
            
            <!-- Left Column: Content -->
            <div class="col-lg-7 wow fadeInLeft" data-wow-delay=".2s">
                <span class="badge px-3 py-2 mb-3 rounded-pill text-uppercase exp-hero-badge">
                    <i class="fa-solid fa-award me-2"></i>Proven Supply Track Record &bull; Estd. 1978
                </span>
                <h1 class="text-white fw-bold mb-3"
                    style="font-family: 'Oswald', 'Saira-Medium', sans-serif; font-size: clamp(32px, 4.2vw, 52px); letter-spacing: -0.5px; line-height: 1.2;">
                    Previous Experience <span style="color: #93c5fd;">&amp; Major Project Supplies</span>
                </h1>
                <p class="text-light mb-4" style="font-size: 16px; line-height: 1.8; max-width: 740px; color: #ecececff !important;">
                    Extensive, verifiable supply track record of certified Elastomeric Bridge Bearings for National Highways (NHAI), Metro Rail Transit networks, and Indian Railways &amp; ROBs across India.
                </p>
                <div class="d-flex flex-wrap gap-2 pt-1">
                    <span class="badge bg-dark bg-opacity-75 border border-secondary text-light px-3 py-2 rounded-pill small">
                        <i class="fa-solid fa-road text-info me-1"></i> 127+ Highway Packages
                    </span>
                    <span class="badge bg-dark bg-opacity-75 border border-secondary text-light px-3 py-2 rounded-pill small">
                        <i class="fa-solid fa-train-subway text-success me-1"></i> 23+ Metro Packages
                    </span>
                    <span class="badge bg-dark bg-opacity-75 border border-secondary text-light px-3 py-2 rounded-pill small">
                        <i class="fa-solid fa-train text-warning me-1"></i> 46+ Railway &amp; ROB Bridges
                    </span>
                </div>
            </div>

            <!-- Right Column: Experience Showcase Image & Breadcrumb -->
            <div class="col-lg-5 text-center text-lg-end wow fadeInRight" data-wow-delay=".3s">
                <nav aria-label="breadcrumb" class="mb-3 d-none d-lg-block">
                    <ol class="breadcrumb justify-content-lg-end mb-0 bg-transparent p-0">
                        <li class="breadcrumb-item"><a href="index.php" class="text-white-50 text-decoration-none"><i class="fa-solid fa-house me-1"></i>Home</a></li>
                        <li class="breadcrumb-item active text-white fw-semibold" aria-current="page">Experience &amp; Clients</li>
                    </ol>
                </nav>

                <div class="exp-hero-showcase d-inline-block text-center">
                    <div class="exp-hero-img-box p-3 p-md-4 rounded-4 position-relative">
                        <img src="assets/img/img/banner/Experience-right.webp" alt="Major Project Supplies Track Record - Polymer Products" class="img-fluid"
                            style="max-height: 300px; width: auto; object-fit: contain;">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ============================================================
     2. Official Client Supply Registers (3 Popup Cards)
     ============================================================ -->
<section class="py-5" style="background: #f0f7ff;">
    <div class="container-fluid px-3 px-lg-5 py-3">
        
        <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".1s">
            <span class="badge px-3 py-1.5 rounded-pill font-monospace fw-bold text-uppercase mb-2"
                style="background: var(--theme-subtle); color: var(--theme-primary); font-size: 12px; letter-spacing: 1px;">
                Official Document Registers
            </span>
            <h2 class="fw-bold text-dark text-uppercase" style="font-family: 'Oswald', sans-serif; font-size: clamp(26px, 3.2vw, 36px);">
                Verified Client Supply Registers
            </h2>
            <p class="text-muted mx-auto mb-0" style="max-width: 720px; font-size: 15px; line-height: 1.7;">
                Click on any sector below to view the official, verified client supply registers, project locations, bearing dimensions, and delivered quantities in a high-resolution popup document viewer.
            </p>
        </div>

        <div class="row g-4 justify-content-center">
            
            <!-- Register 1: National Highways -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".15s">
                <div class="card h-100 p-4 client-register-card shadow-sm d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex justify-content-between align-items-start mb-4">
                            <div class="register-icon-wrap">
                                <i class="fa-solid fa-road"></i>
                            </div>
                            <span class="badge rounded-pill fw-bold px-3 py-2"
                                style="background: var(--theme-subtle); color: var(--theme-primary); font-size: 12.5px;">
                                127+ Projects
                            </span>
                        </div>

                        <h3 class="fw-bold text-dark mb-2" style="font-family: 'Oswald', sans-serif; font-size: 22px;">
                            National Highway Sector
                        </h3>
                        <p class="text-muted small mb-4" style="font-size: 14px; line-height: 1.65;">
                            Comprehensive verifiable supply records of 127 National Highways Authority of India (NHAI), State PWDs, Expressways, Elevated Corridors &amp; Major River Bridge projects across India.
                        </p>

                        <div class="bg-light rounded-3 p-3 mb-4 border" style="font-size: 13px;">
                            <div class="text-dark fw-semibold mb-1">
                                <i class="fa-solid fa-file-lines text-primary me-2"></i> Document: <span class="text-secondary">NH CLIENTS.pdf</span>
                            </div>
                            <div class="text-muted">
                                <i class="fa-solid fa-check-double text-success me-2"></i> Coverage: All Indian National Highways &amp; Expressways
                            </div>
                        </div>
                    </div>

                    <div class="border-top pt-3">
                        <button type="button" class="btn btn-primary w-100 rounded-pill py-2.5 fw-bold shadow-sm open-exp-doc-modal d-flex align-items-center justify-content-center gap-2"
                            data-doc-url="assets/pp_data/Page 08/NH CLIENTS.pdf"
                            data-doc-title="National Highway Sector - Client Supply Register (127+ Projects)"
                            data-doc-type="pdf"
                            style="background: var(--theme-primary); border-color: var(--theme-primary); font-size: 14px;">
                            <i class="fa-solid fa-file-pdf"></i>
                            <span>View NH Clients Register</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Register 2: Indian Railways & ROBs -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".35s">
                <div class="card h-100 p-4 client-register-card shadow-sm d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex justify-content-between align-items-start mb-4">
                            <div class="register-icon-wrap">
                                <i class="fa-solid fa-train"></i>
                            </div>
                            <span class="badge rounded-pill fw-bold px-3 py-2"
                                style="background: var(--theme-subtle); color: var(--theme-primary); font-size: 12.5px;">
                                46+ Lines &amp; ROBs
                            </span>
                        </div>

                        <h3 class="fw-bold text-dark mb-2" style="font-family: 'Oswald', sans-serif; font-size: 22px;">
                            Indian Railways &amp; ROBs
                        </h3>
                        <p class="text-muted small mb-4" style="font-size: 14px; line-height: 1.65;">
                            RDSO &amp; Zonal Railway approved elastomeric bearings supplied for Western Railway, Central Railway, Konkan Railway, DFCCIL Dedicated Freight Corridor, and major Road Over Bridges.
                        </p>

                        <div class="bg-light rounded-3 p-3 mb-4 border" style="font-size: 13px;">
                            <div class="text-dark fw-semibold mb-1">
                                <i class="fa-solid fa-file-lines text-primary me-2"></i> Document: <span class="text-secondary">RAILWAY clients.pdf</span>
                            </div>
                            <div class="text-muted">
                                <i class="fa-solid fa-check-double text-success me-2"></i> Coverage: Zonal Railways, DFCCIL &amp; Railway ROBs
                            </div>
                        </div>
                    </div>

                    <div class="border-top pt-3">
                        <button type="button" class="btn btn-primary w-100 rounded-pill py-2.5 fw-bold shadow-sm open-exp-doc-modal d-flex align-items-center justify-content-center gap-2"
                            data-doc-url="assets/pp_data/Page 08/RAILWAY clients.pdf"
                            data-doc-title="Indian Railways & ROB Sector - Client Supply Register (46+ Projects)"
                            data-doc-type="pdf"
                            style="background: var(--theme-primary); border-color: var(--theme-primary); font-size: 14px;">
                            <i class="fa-solid fa-file-pdf"></i>
                            <span>View Railway Clients Register</span>
                        </button>
                    </div>
                </div>
            </div>

             <!-- Register 3: Metro Rail Transit -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".25s">
                <div class="card h-100 p-4 client-register-card shadow-sm d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex justify-content-between align-items-start mb-4">
                            <div class="register-icon-wrap">
                                <i class="fa-solid fa-train-subway"></i>
                            </div>
                            <span class="badge rounded-pill fw-bold px-3 py-2"
                                style="background: var(--theme-subtle); color: var(--theme-primary); font-size: 12.5px;">
                                23+ Packages
                            </span>
                        </div>

                        <h3 class="fw-bold text-dark mb-2" style="font-family: 'Oswald', sans-serif; font-size: 22px;">
                            Metro Rail Transit Sector
                        </h3>
                        <p class="text-muted small mb-4" style="font-size: 14px; line-height: 1.65;">
                            Verified project supply track record for Mumbai Metro (Line 4 CA-10 &amp; CA-12, CA-07), Pune Metro (Pkg-1 &amp; Pkg-2), Delhi Metro Rail Corporation (DMRC), and Nagpur Metro viaducts.
                        </p>

                        <div class="bg-light rounded-3 p-3 mb-4 border" style="font-size: 13px;">
                            <div class="text-dark fw-semibold mb-1">
                                <i class="fa-solid fa-file-lines text-primary me-2"></i> Document: <span class="text-secondary">NEW METRO CLIENTS.pdf</span>
                            </div>
                            <div class="text-muted">
                                <i class="fa-solid fa-check-double text-success me-2"></i> Coverage: DMRC, Mumbai Metro, Pune &amp; Nagpur Metro
                            </div>
                        </div>
                    </div>

                    <div class="border-top pt-3">
                        <button type="button" class="btn btn-primary w-100 rounded-pill py-2.5 fw-bold shadow-sm open-exp-doc-modal d-flex align-items-center justify-content-center gap-2"
                            data-doc-url="assets/pp_data/Page 08/NEW METRO CLIENTS.pdf"
                            data-doc-title="Metro Rail Transit Sector - Client Supply Register (23+ Packages)"
                            data-doc-type="pdf"
                            style="background: var(--theme-primary); border-color: var(--theme-primary); font-size: 14px;">
                            <i class="fa-solid fa-file-pdf"></i>
                            <span>View Metro Clients Register</span>
                        </button>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- ============================================================
     3. Trust Highlights & Quality Assurance
     ============================================================ -->
<section class="py-5" style="background: #ffffff; border-top: 1px solid #e2e8f0;">
    <div class="container-fluid px-3 px-lg-5 py-3">
        <div class="row g-4 text-center">
            
            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay=".1s">
                <div class="feature-box-exp h-100">
                    <div class="text-primary fs-2 mb-3">
                        <i class="fa-solid fa-calendar-check"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2" style="font-family: 'Oswald', sans-serif;">50+ Years Experience</h5>
                    <p class="text-muted small mb-0">
                        Established in 1978, delivering high-performance elastomeric bearings across 4+ decades.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay=".2s">
                <div class="feature-box-exp h-100">
                    <div class="text-primary fs-2 mb-3">
                        <i class="fa-solid fa-certificate"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2" style="font-family: 'Oswald', sans-serif;">IRC &amp; MORTH Compliant</h5>
                    <p class="text-muted small mb-0">
                        Strict conformance with IRC:83 (Part II) 2018, MoRTH Section 2000, and UIC 772-2R standards.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay=".3s">
                <div class="feature-box-exp h-100">
                    <div class="text-primary fs-2 mb-3">
                        <i class="fa-solid fa-microscope"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2" style="font-family: 'Oswald', sans-serif;">RITES &amp; Third-Party Tested</h5>
                    <p class="text-muted small mb-0">
                        100% witnessed testing by RITES, RDSO, SGS, and leading government-approved testing agencies.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay=".4s">
                <div class="feature-box-exp h-100">
                    <div class="text-primary fs-2 mb-3">
                        <i class="fa-solid fa-handshake-angle"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2" style="font-family: 'Oswald', sans-serif;">Major EPC Approvals</h5>
                    <p class="text-muted small mb-0">
                        Preferred supplier to top infrastructure giants including L&amp;T, Afcons, NCC, HG Infra, and Sadbhav.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ============================================================
     4. Consultation & Qualification Banner
     ============================================================ -->
<section class="py-5 text-white position-relative"
    style="background: var(--theme-primary); padding: 75px 0;">
    <div class="container-fluid px-3 px-lg-5 py-3 text-center">
        <span class="badge px-3 py-2 mb-3 rounded-pill text-uppercase fw-bold"
            style="background: white; color: var(--theme-primary); font-size: 12px; letter-spacing: 1.5px;">
            Project Qualification &amp; Bidding Support
        </span>
        <h2 class="fw-bold text-white text-uppercase mx-auto mb-3"
            style="font-family: 'Saira-Medium', sans-serif; font-size: clamp(26px, 3.5vw, 38px); letter-spacing: 0.5px; max-width: 780px;">
            Need Verified Performance Certificates &amp; Inspection Reports?
        </h2>
        <p class="mx-auto mb-4" style="max-width: 680px; color: #f1f1f1ff; font-size: 15px; line-height: 1.8;">
            Our engineering sales team provides complete past supply certificates, RITES/RDSO witnessed test reports, and third-party inspection dossiers for EPC tender qualifications.
        </p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="contact.php" class="btn   rounded-pill px-5 py-3 fw-bold shadow text-uppercase"
                style="font-size: 13px; letter-spacing: 0.5px; background: white; border-color: white; color: var(--theme-primary);">
                Request Client Reference List <i class="fa-solid fa-arrow-right ms-2"></i>
            </a>
            <!-- <a href="tel:8975766459" class="btn btn-outline-light rounded-pill px-4 py-3 fw-bold"
                style="font-size: 13px; letter-spacing: 0.5px; backdrop-filter: blur(4px);">
                <i class="fa-solid fa-phone me-2"></i> Call: 8975766459
            </a> -->
        </div>
    </div>
</section>

<!-- ============================================================
     5. Reusable Document Viewer Modal
     ============================================================ -->
<div class="modal fade" id="experienceDocModal" tabindex="-1" aria-labelledby="experienceDocModalLabel" aria-hidden="true" style="z-index: 99999;">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content border-0 shadow-lg overflow-hidden" style="border-radius: 16px;">
            
            <div class="modal-header px-4 py-3" style="background: linear-gradient(135deg, #091424 0%, #152744 100%); border-bottom: 2px solid var(--theme-primary);">
                <div class="d-flex align-items-center gap-3">
                    <div class="rounded-circle p-2 d-flex align-items-center justify-content-center" style="background: rgba(2, 132, 199, 0.2); width: 42px; height: 42px;">
                        <i id="expDocModalIcon" class="fa-solid fa-file-pdf text-white fs-5"></i>
                    </div>
                    <div>
                        <h5 class="modal-title fw-bold text-white mb-0" id="experienceDocModalLabel">Official Supply Register</h5>
                        <small class="text-white-50" style="font-size: 12px;">Verified Past Project Supply Record &bull; Polymer Products</small>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <button type="button" class="btn-close btn-close-white ms-2" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>

            <div class="modal-body p-0 position-relative" style="background: #0f172a; min-height: 540px;">
                <div id="expDocModalLoader" class="position-absolute top-50 start-50 translate-middle text-center py-5">
                    <div class="spinner-border text-primary mb-2" role="status" style="width: 3rem; height: 3rem;">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <p class="text-white-50 small mb-0">Loading document register preview...</p>
                </div>

                <iframe id="expDocModalIframe" src="" style="width: 100%; height: 75vh; border: none; display: none; background: #fff;" allowfullscreen></iframe>
            </div>

            <div class="modal-footer bg-white px-4 py-3 border-top d-flex justify-content-between align-items-center">
                <span class="text-muted small">
                    <i class="fa-solid fa-shield-check text-success me-1"></i> Verified Project Supply Register &bull; Polymer Products (Estd. 1978)
                </span>
                <button type="button" class="btn btn-dark btn-sm rounded-pill px-4 fw-bold" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Script with Smooth Scroll Unlock -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const docModalEl = document.getElementById('experienceDocModal');
    if (!docModalEl) return;

    const modalTitle = document.getElementById('experienceDocModalLabel');
    const modalIframe = document.getElementById('expDocModalIframe');
    const modalLoader = document.getElementById('expDocModalLoader');

    function getModalInstance() {
        if (typeof bootstrap !== 'undefined' && bootstrap.Modal) {
            return bootstrap.Modal.getOrCreateInstance(docModalEl);
        }
        return null;
    }

    function unlockPageScroll() {
        modalIframe.src = '';
        modalLoader.style.display = 'none';
        modalIframe.style.display = 'none';

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

    document.querySelectorAll('.open-exp-doc-modal').forEach(function (btn) {
        btn.addEventListener('click', function (e) {
            e.preventDefault();

            const url = this.getAttribute('data-doc-url');
            const title = this.getAttribute('data-doc-title') || 'Official Supply Register';

            if (!url) return;

            modalTitle.textContent = title;
            modalLoader.style.display = 'block';
            modalIframe.style.display = 'none';
            modalIframe.src = '';

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

            const bsModal = getModalInstance();
            if (bsModal) {
                bsModal.show();
            } else if (typeof $ !== 'undefined') {
                $(docModalEl).modal('show');
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
