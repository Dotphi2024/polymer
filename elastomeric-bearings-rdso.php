<?php 
/**
 * Elastomeric Bearings – RDSO Vendor Approval & Technical Qualification Portal
 * Polymer Products (Nashik Manufacturing Facility - Estd. 1978)
 * Conforming to Indian Railways RDSO Specification BS-S-7.5.3.1-10 (Ver 2.0),
 * IRS:B1-2001, RDSO BS-131, IRC:83-2018 (Part-II), and MoRT&H Clause 2005.
 * 
 * Styled with unified single theme color palette (Theme Primary Blue & Clean Neutrals).
 */
$page_title = "Elastomeric Bearings – RDSO Vendor Approval & Manufacturing Credentials | Polymer Products";
$meta_description = "Official RDSO Vendor Approval, ownership credentials, STR 6.2 manufacturing machinery, STR 6.3/6.4 testing laboratory, statutory accreditations & railway track record for Elastomeric Bridge Bearings manufactured by Polymer Products at Nashik.";
include_once 'partials/header.php'; 
?>

<style>
/* ============================================================
   Unified Theme Palette (Single Brand Primary Color & Neutrals)
   ============================================================ */
:root {
    --rdso-navy: #091a33;
    --rdso-blue: var(--theme-primary, #0284c7);
    --rdso-blue-dark: #0369a1;
    --rdso-subtle: #f0f7ff;
    --rdso-border: #e2e8f0;
    --rdso-border-subtle: #bae6fd;
}

.rdso-hero-badge {
    background: var(--theme-subtle, #f0f7ff);
    border: 1px solid var(--theme-primary, #0284c7);
    color: var(--theme-primary, #0284c7);
    font-size: 13px;
    letter-spacing: 1px;
}

/* Sticky Navigation Pills (Smart Hide on Scroll Down, Show on Scroll Up) */
.rdso-nav-wrapper {
    position: sticky;
    top: 80px;
    z-index: 100;
    background: rgba(255, 255, 255, 0.96);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border-bottom: 1px solid #e2e8f0;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
    transform: translateY(0);
    transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), opacity 0.25s ease;
    will-change: transform;
}

.rdso-nav-wrapper.rdso-nav-hidden {
    transform: translateY(-130%);
    opacity: 0;
    pointer-events: none;
}

.rdso-nav-pills {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    gap: 8px;
    padding: 12px 0;
    overflow: visible;
}

.rdso-pill-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 8px 16px;
    border-radius: 50px;
    font-size: 13px;
    font-weight: 600;
    color: #475569;
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    text-decoration: none;
    transition: all 0.25s ease;
    white-space: nowrap;
}

.rdso-pill-btn:hover,
.rdso-pill-btn.active {
    background: var(--theme-primary, #0284c7);
    color: #ffffff !important;
    border-color: var(--theme-primary, #0284c7);
    box-shadow: 0 4px 14px rgba(2, 132, 199, 0.25);
    transform: translateY(-2px);
}

.rdso-pill-btn i {
    font-size: 13px;
}

@media (max-width: 768px) {
    .rdso-nav-wrapper {
        top: 70px;
    }
    .rdso-nav-pills {
        gap: 6px;
        padding: 8px 0;
    }
    .rdso-pill-btn {
        padding: 6px 12px;
        font-size: 12px;
        gap: 5px;
    }
}

/* Feature Cards & Tables */
.rdso-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 20px;
    overflow: hidden;
    transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.03);
}

.rdso-card:hover {
    border-color: var(--theme-primary, #0284c7);
    box-shadow: 0 16px 36px rgba(2, 132, 199, 0.10);
    transform: translateY(-4px);
}

.rdso-section-header {
    background: linear-gradient(135deg, #091a33 0%, #0f2747 100%);
    color: #ffffff;
    padding: 18px 24px;
    border-bottom: 2px solid var(--theme-primary, #0284c7);
}

.rdso-section-header h4 {
    margin: 0;
    font-family: 'Oswald', sans-serif;
    font-size: 20px;
    letter-spacing: 0.5px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.rdso-table th,
.rdso-table td {
    padding: 14px 18px;
    vertical-align: middle;
}

.rdso-table th {
    background: #f8fafc;
    color: #334155;
    font-weight: 600;
    font-size: 13.5px;
    border-bottom: 1px solid #e2e8f0;
}

.rdso-table td {
    font-size: 14px;
    color: #475569;
    border-bottom: 1px solid #f1f5f9;
}

.rdso-table tr:last-child td {
    border-bottom: none;
}

.rdso-table tr:hover td {
    background-color: #f0f7ff;
}

/* Document Item Card */
.rdso-doc-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 14px;
    padding: 16px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 14px;
    transition: all 0.25s ease;
}

.rdso-doc-card:hover {
    border-color: var(--theme-primary, #0284c7);
    background: #f8fafc;
    transform: translateX(4px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
}

.rdso-doc-icon {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    background: #f0f7ff;
    color: var(--theme-primary, #0284c7);
    border: 1px solid #bae6fd;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    flex-shrink: 0;
}

.rdso-doc-info h6 {
    margin: 0 0 4px 0;
    font-size: 14.5px;
    font-weight: 700;
    color: #1e293b;
}

.rdso-doc-info p {
    margin: 0;
    font-size: 12px;
    color: #64748b;
}

.rdso-action-btn {
    border-radius: 50px;
    font-size: 12.5px;
    font-weight: 600;
    padding: 6px 16px;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    white-space: nowrap;
    border-color: var(--theme-primary, #0284c7);
    color: var(--theme-primary, #0284c7);
}

.rdso-action-btn:hover {
    background: var(--theme-primary, #0284c7);
    color: #ffffff;
}

/* Machine & Lab Equipment Showcase */
.rdso-equip-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    overflow: hidden;
    height: 100%;
    display: flex;
    flex-direction: column;
    transition: all 0.3s ease;
}

.rdso-equip-card:hover {
    transform: translateY(-5px);
    border-color: var(--theme-primary, #0284c7);
    box-shadow: 0 14px 28px rgba(2, 132, 199, 0.12);
}

.rdso-equip-img-wrap {
    height: 180px;
    position: relative;
    overflow: hidden;
    background: #f1f5f9;
}

.rdso-equip-img-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.45s ease;
}

.rdso-equip-card:hover .rdso-equip-img-wrap img {
    transform: scale(1.06);
}

.rdso-equip-badge {
    position: absolute;
    top: 12px;
    left: 12px;
    background: var(--theme-primary, #0284c7);
    color: #ffffff;
    font-size: 11px;
    padding: 4px 10px;
    border-radius: 20px;
    font-weight: 600;
    letter-spacing: 0.5px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
}

/* Verification Badge */
.verified-stamp {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: #f0f7ff;
    color: var(--theme-primary, #0284c7);
    border: 1px solid #bae6fd;
    padding: 5px 14px;
    border-radius: 20px;
    font-size: 12.5px;
    font-weight: 600;
}

/* Unified Theme Badges */
.theme-pill-badge {
    background: #f0f7ff;
    color: var(--theme-primary, #0284c7);
    border: 1px solid #bae6fd;
    font-size: 11.5px;
    font-weight: 600;
    padding: 4px 12px;
    border-radius: 20px;
}

.theme-solid-badge {
    background: var(--theme-primary, #0284c7);
    color: #ffffff;
    font-size: 11.5px;
    font-weight: 600;
    padding: 4px 12px;
    border-radius: 20px;
}
</style>

<!-- ============================================================
     1. Modern Hero & Breadcrumb Banner
     ============================================================ -->
<section class="ht-codes-hero position-relative d-flex align-items-center"
    style="background: linear-gradient(135deg, rgba(9, 20, 36, 0.90) 0%, rgba(14, 34, 61, 0.85) 50%, rgba(6, 13, 24, 0.88) 100%), url('assets/img/img/banner/process.webp') center center / cover no-repeat; padding-top: 175px; padding-bottom: 75px; margin-top: -160px; min-height: 480px;">
    
    <div class="container-fluid px-3 px-lg-5 position-relative" style="z-index: 2;">
        <div class="row align-items-center">
            <div class="col-lg-8 wow fadeInLeft" data-wow-delay=".2s">
                <span class="badge px-3 py-2 mb-3 rounded-pill text-uppercase rdso-hero-badge">
                    <i class="fa-solid fa-stamp me-2"></i>Indian Railways RDSO Vendor Qualification Portal
                </span>
                <h1 class="text-white fw-bold mb-3" style="font-family: 'Oswald', sans-serif; font-size: clamp(32px, 4.2vw, 54px); line-height: 1.2; letter-spacing: 0.5px;">
                    Elastomeric Bearings <br>
                    <span style="color: #93c5fd;">RDSO Technical Qualification &amp; Credentials</span>
                </h1>
                <p class="text-light mb-4" style="font-size: 16px; line-height: 1.8; max-width: 780px; color: #cbd5e1 !important;">
                    Comprehensive ownership credentials, manufacturing infrastructure under <strong>STR Clause 6.2</strong>, dedicated testing laboratory under <strong>STR Clause 6.3/6.4</strong>, and statutory approvals conforming to <strong>RDSO BS-S-7.5.3.1-10 (Ver 2.0)</strong>, <strong>IRS:B1-2001</strong>, <strong>IRC:83 (Part-II)</strong>, and <strong>MoRT&amp;H Clause 2005</strong>.
                </p>
                
                <div class="d-flex flex-wrap gap-2 pt-1">
                    <span class="badge px-3 py-2 rounded-pill small text-light" style="background: rgba(2, 132, 199, 0.18); border: 1px solid rgba(56, 189, 248, 0.4);">
                        <i class="fa-solid fa-train me-1" style="color: var(--theme-lighter, #38bdf8);"></i> RDSO Specification BS-S-7.5.3.1-10 (Ver 2.0)
                    </span>
                    <span class="badge px-3 py-2 rounded-pill small text-light" style="background: rgba(2, 132, 199, 0.18); border: 1px solid rgba(56, 189, 248, 0.4);">
                        <i class="fa-solid fa-industry me-1" style="color: var(--theme-lighter, #38bdf8);"></i> Unit: H-32, M.I.D.C. Satpur, Nashik (Estd. 1978)
                    </span>
                    <span class="badge px-3 py-2 rounded-pill small text-light" style="background: rgba(2, 132, 199, 0.18); border: 1px solid rgba(56, 189, 248, 0.4);">
                        <i class="fa-solid fa-shield-check me-1" style="color: var(--theme-lighter, #38bdf8);"></i> ISO 9001:2027 &bull; QAP Approved
                    </span>
                </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0 text-lg-end d-none d-lg-block wow fadeInRight" data-wow-delay=".3s">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-lg-end mb-3 bg-transparent p-0">
                        <li class="breadcrumb-item"><a href="index.php" class="text-white-50 text-decoration-none"><i class="fa-solid fa-house me-1"></i>Home</a></li>
                        <li class="breadcrumb-item text-white-50">Approvals</li>
                        <li class="breadcrumb-item active text-white fw-semibold" aria-current="page">RDSO Elastomeric Bearings</li>
                    </ol>
                </nav>

                <!-- <div class="p-3.5 rounded-4 text-start text-white shadow-lg border d-inline-block text-start"
                    style="background: rgba(255, 255, 255, 0.08); border-color: rgba(255, 255, 255, 0.15) !important; backdrop-filter: blur(12px); max-width: 360px;">
                    <div class="d-flex align-items-center mb-2">
                        <div class="p-2 rounded-circle me-3 d-flex align-items-center justify-content-center"
                            style="width: 44px; height: 44px; background: var(--theme-primary, #0284c7); color: #fff;">
                            <i class="fa-solid fa-train"></i>
                        </div>
                        <div>
                            <span class="small text-white-50 d-block" style="font-size: 11.5px;">RDSO Scope of Approval</span>
                            <h6 class="fw-bold text-white mb-0" style="font-size: 14.5px;">Laminated Elastomeric Bearings</h6>
                        </div>
                    </div>
                    <p class="small text-white-50 mb-0 pt-2 border-top border-secondary border-opacity-25" style="line-height: 1.5; font-size: 12px;">
                        Standard Item ID 3100417 &bull; Conforming to IRS:B1-2001 &amp; RDSO BS-131 for Indian Railways bridges, metro viaducts &amp; ROB structures.
                    </p>
                </div> -->
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     2. Sticky Horizontal Navigation Bar for Fast Section Access
     ============================================================ -->
<div class="rdso-nav-wrapper">
    <div class="container-fluid px-3 px-lg-5 py-2">
        <div class="rdso-nav-pills">
            <a href="#ownership-details" class="rdso-pill-btn active">
                <i class="fa-solid fa-id-card"></i> 1. Ownership &amp; Corporate Governance
            </a>
            <a href="#manufacturing-units" class="rdso-pill-btn">
                <i class="fa-solid fa-industry"></i> 2. Manufacturing Unit (STR 6.2)
            </a>
            <a href="#testing-facilities" class="rdso-pill-btn">
                <i class="fa-solid fa-flask-vial"></i> 3. Testing Laboratory (STR 6.3/6.4)
            </a>
            <a href="#rdso-approval" class="rdso-pill-btn">
                <i class="fa-solid fa-stamp"></i> 4. RDSO Approval &amp; QAP
            </a> 
            <a href="#statutory-licenses" class="rdso-pill-btn">
                <i class="fa-solid fa-certificate"></i> 5. Statutory Licenses &amp; ISO
            </a>
            <a href="#technical-team" class="rdso-pill-btn">
                <i class="fa-solid fa-users-gear"></i> 6. Artisans &amp; Technical Personnel
            </a>
            <a href="#executed-works" class="rdso-pill-btn">
                <i class="fa-solid fa-clipboard-check"></i> 7. Railway Supplies &amp; In-Hand
            </a>
        </div>
    </div>
</div>

<!-- ============================================================
     3. Key Performance Indicators & High-Level Capacity
     ============================================================ -->
<section class="py-4" style="background: #ffffff; border-bottom: 1px solid #e2e8f0;">
    <div class="container-fluid px-3 px-lg-5">
        <div class="row g-3 text-center">
            <div class="col-6 col-md-3">
                <div class="p-3 rounded-4 bg-light border h-100">
                    <span class="d-block fw-bold text-dark" style="font-family: 'Oswald', sans-serif; font-size: 30px; color: var(--theme-primary, #0284c7) !important;">
                        1978
                    </span>
                    <small class="text-muted fw-semibold text-uppercase" style="font-size: 11.5px; letter-spacing: 0.5px;">Year Established (Nashik)</small>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="p-3 rounded-4 bg-light border h-100">
                    <span class="d-block fw-bold text-dark" style="font-family: 'Oswald', sans-serif; font-size: 30px; color: var(--theme-primary, #0284c7) !important;">
                        20,000+
                    </span>
                    <small class="text-muted fw-semibold text-uppercase" style="font-size: 11.5px; letter-spacing: 0.5px;">Annual Production Units</small>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="p-3 rounded-4 bg-light border h-100">
                    <span class="d-block fw-bold text-dark" style="font-family: 'Oswald', sans-serif; font-size: 30px; color: var(--theme-primary, #0284c7) !important;">
                        46+
                    </span>
                    <small class="text-muted fw-semibold text-uppercase" style="font-size: 11.5px; letter-spacing: 0.5px;">Railway &amp; ROB Supplies</small>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="p-3 rounded-4 bg-light border h-100">
                    <span class="d-block fw-bold text-dark" style="font-family: 'Oswald', sans-serif; font-size: 30px; color: var(--theme-primary, #0284c7) !important;">
                        1200 MT
                    </span>
                    <small class="text-muted fw-semibold text-uppercase" style="font-size: 11.5px; letter-spacing: 0.5px;">Max Hydraulic Press Capacity</small>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     SECTION 1: OWNERSHIP & CORPORATE GOVERNANCE
     ============================================================ -->
<section class="py-5" id="ownership-details" style="background: #f8fafc;">
    <div class="container-fluid px-3 px-lg-5 py-2">
        
        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-4">
            <div>
                <span class="badge px-3 py-1.5 rounded-pill font-monospace fw-bold text-uppercase mb-1 theme-pill-badge">
                    RDSO Compliance Checklist &bull; Tab 01
                </span>
                <h2 class="fw-bold text-dark mb-0" style="font-family: 'Oswald', sans-serif; font-size: clamp(24px, 2.5vw, 34px);">
                    Ownership Details &amp; Corporate Governance
                </h2>
            </div>
            <span class="verified-stamp">
                <i class="fa-solid fa-circle-check"></i> Statutory Verified Data
            </span>
        </div>

        <div class="row g-4">
            <!-- Left Column: Ownership Table -->
            <div class="col-lg-7">
                <div class="rdso-card h-100 shadow-sm">
                    <div class="rdso-section-header">
                        <h4 class="text-white"><i class="fa-solid fa-building-circle-check  text-white"></i> Enterprise Registration &amp; Management Profile</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table rdso-table mb-0">
                            <tbody>
                                <tr>
                                    <th style="width: 32%;"><i class="fa-solid fa-briefcase text-primary me-2"></i>Name of Enterprise</th>
                                    <td>
                                        <strong class="text-dark">Polymer Products</strong><br>
                                        <small class="text-muted">Specialized Industrial Manufacturing Division of Dynamic Prestress Group</small>
                                    </td>
                                </tr>
                                <tr>
                                    <th><i class="fa-solid fa-user-tie text-primary me-2"></i>Proprietor &amp; Founder</th>
                                    <td>
                                        <strong class="text-dark">Maruti Pandurang Prabhu</strong><br>
                                        <small class="text-muted">B.Sc., L.P.R.I. (London) &bull; 48+ Years Industry Experience in Rubber &amp; Bearing Technology</small>
                                    </td>
                                </tr>
                                <tr>
                                    <th><i class="fa-solid fa-users text-primary me-2"></i>Key Technical Executives</th>
                                    <td>
                                        <strong>1. Mrs. Anita Maruti Prabhu</strong> &bull; <span class="text-muted">M.Sc. (Chemistry) – Lab Incharge</span><br>
                                        <strong>2. Chetan Maruti Prabhu</strong> &bull; <span class="text-muted">B.E. (Mechanical) – Production Incharge</span><br>
                                        <strong>3. Sunil Kotagi</strong> &bull; <span class="text-muted">B.Com – Asst. General Manager</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th><i class="fa-solid fa-calendar-check text-primary me-2"></i>Year of Establishment</th>
                                    <td>
                                        <strong class="text-dark">1978</strong> &bull; <span class="badge theme-pill-badge px-2 py-1">Continuous Operation (48 Years)</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th><i class="fa-solid fa-location-dot text-primary me-2"></i>Registered &amp; Works Address</th>
                                    <td>
                                        <strong>H-32, M.I.D.C. Satpur, Nashik – 422 007</strong>,<br>
                                        Maharashtra, India
                                    </td>
                                </tr>
                                <tr>
                                    <th><i class="fa-solid fa-envelope text-primary me-2"></i>Official Communications</th>
                                    <td>
                                        <a href="mailto:qc@polymerproducts.org" class="text-decoration-none fw-semibold" style="color: var(--theme-primary, #0284c7);">qc@polymerproducts.org</a> / 
                                        <a href="mailto:sales@polymerproducts.org" class="text-decoration-none fw-semibold" style="color: var(--theme-primary, #0284c7);">sales@polymerproducts.org</a><br>
                                        <small class="text-muted">Hotlines: +91 8975766459 &bull; 0253 235 0935</small>
                                    </td>
                                </tr>
                                <tr>
                                    <th><i class="fa-solid fa-award text-primary me-2"></i>MSME Registration (Udyam)</th>
                                    <td>
                                        <strong class="text-dark font-monospace">UDYAM-MH-23-0004940</strong> &bull; 
                                        <span class="badge theme-pill-badge px-2 py-1">Micro &amp; Small Enterprises</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th><i class="fa-solid fa-industry text-primary me-2"></i>Factory Directorate License</th>
                                    <td>
                                        <strong>Directorate of Industrial Safety &amp; Health (DISH)</strong><br>
                                        <small class="text-muted">Factory Plan Approval Cert No: Approved Industrial Plot H-32, Satpur Nashik</small>
                                    </td>
                                </tr>
                                <tr>
                                    <th><i class="fa-solid fa-shield-virus text-primary me-2"></i>Environmental Consent</th>
                                    <td>
                                        <strong>Maharashtra Pollution Control Board (MPCB)</strong> &bull; <span class="text-dark fw-semibold">Valid Consent to Operate</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th><i class="fa-solid fa-clock-rotate-left text-primary me-2"></i>Quality Audit Cycles</th>
                                    <td>
                                        <strong>Last Routine Quality Audit:</strong> Compliant &amp; Active<br>
                                        <strong>Next Recertification Cycle:</strong> Continuous 5-Year RDSO Vendor Surveillance Audit
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Right Column: Statutory Document Proofs (Interactive PDF/Image Cards) -->
            <div class="col-lg-5">
                <div class="rdso-card h-100 shadow-sm d-flex flex-column justify-content-between">
                    <div>
                        <div class="rdso-section-header">
                            <h4 class="text-white"><i class="fa-solid fa-file-shield"></i> Official Document Proofs &amp; Annexures</h4>
                        </div>
                        <div class="p-3 d-flex flex-column gap-2.5">
                            <p class="text-muted small mb-2">
                                Click below to preview verified statutory registration certificates, tax registrations, and constitutional deeds in the high-resolution document viewer:
                            </p>

                            <!-- Document 1: Udyam MSME -->
                            <div class="rdso-doc-card">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="rdso-doc-icon"><i class="fa-solid fa-file-pdf"></i></div>
                                    <div class="rdso-doc-info">
                                        <h6>Udyam Registration Certificate</h6>
                                        <p>Government of India MSME Ministry</p>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-outline-primary rdso-action-btn open-rdso-modal"
                                    data-doc-url="assets/pp_data/Page 01/POLYMER DETAILS/UDAYAM CERTIFICATE.pdf"
                                    data-doc-title="MSME Udyam Registration Certificate - Polymer Products"
                                    data-doc-type="pdf">
                                    <i class="fa-solid fa-eye"></i> View
                                </button>
                            </div>

                            <!-- Document 2: GST Certificate -->
                            <div class="rdso-doc-card">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="rdso-doc-icon"><i class="fa-solid fa-file-pdf"></i></div>
                                    <div class="rdso-doc-info">
                                        <h6>GST Registration Certificate</h6>
                                        <p>Goods &amp; Services Tax Identification (GSTIN)</p>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-outline-primary rdso-action-btn open-rdso-modal"
                                    data-doc-url="assets/pp_data/Page 01/POLYMER DETAILS/GST_CERTIFICATE-1.pdf"
                                    data-doc-title="GST Registration Certificate - Polymer Products"
                                    data-doc-type="pdf">
                                    <i class="fa-solid fa-eye"></i> View
                                </button>
                            </div>

                            <!-- Document 3: PAN Registration -->
                            <div class="rdso-doc-card">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="rdso-doc-icon"><i class="fa-solid fa-file-pdf"></i></div>
                                    <div class="rdso-doc-info">
                                        <h6>Income Tax PAN Card &amp; Entity ID</h6>
                                        <p>Income Tax Department, Govt. of India</p>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-outline-primary rdso-action-btn open-rdso-modal"
                                    data-doc-url="assets/pp_data/Page 01/POLYMER DETAILS/pan-card.pdf"
                                    data-doc-title="Permanent Account Number (PAN) Card"
                                    data-doc-type="pdf">
                                    <i class="fa-solid fa-eye"></i> View
                                </button>
                            </div>

                            <!-- Document 4: Partnership / Bond Deed -->
                            <div class="rdso-doc-card">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="rdso-doc-icon"><i class="fa-solid fa-file-pdf"></i></div>
                                    <div class="rdso-doc-info">
                                        <h6>Constitutional Enterprise Deed</h6>
                                        <p>Bond of Enterprise &amp; Polymer Entity Agreement</p>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-outline-primary rdso-action-btn open-rdso-modal"
                                    data-doc-url="assets/pp_data/Page 01/POLYMER DETAILS/PP DETAILS/BOND OF V CHEM AND POLYMER (1).pdf"
                                    data-doc-title="Constitutional Deed &amp; Entity Agreement"
                                    data-doc-type="pdf">
                                    <i class="fa-solid fa-eye"></i> View
                                </button>
                            </div>

                            <!-- Document 5: Plant Stability Certificate -->
                            <div class="rdso-doc-card">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="rdso-doc-icon"><i class="fa-solid fa-file-pdf"></i></div>
                                    <div class="rdso-doc-info">
                                        <h6>Plant Stability &amp; Structural Safety</h6>
                                        <p>Chartered Engineer Structural Certificate</p>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-outline-primary rdso-action-btn open-rdso-modal"
                                    data-doc-url="assets/pp_data/Page 01/POLYMER DETAILS/PP DETAILS/STABILITY CERTIFICATE.pdf"
                                    data-doc-title="Plant Structural Stability Certificate"
                                    data-doc-type="pdf">
                                    <i class="fa-solid fa-eye"></i> View
                                </button>
                            </div>

                        </div>
                    </div>

                    <div class="p-3 bg-light border-top text-center rounded-bottom-4">
                        <small class="text-muted">
                            <i class="fa-solid fa-lock text-primary me-1"></i> All statutory copies are verified with original plant records at Nashik.
                        </small>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ============================================================
     SECTION 2: MANUFACTURING UNITS & MACHINERY INFRASTRUCTURE (STR 6.2)
     ============================================================ -->
<section class="py-5" id="manufacturing-units" style="background: #ffffff;">
    <div class="container-fluid px-3 px-lg-5 py-2">
        
        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-4">
            <div>
                <span class="badge px-3 py-1.5 rounded-pill font-monospace fw-bold text-uppercase mb-1 theme-pill-badge">
                    Schedule of Technical Requirements &bull; STR Clause 6.2
                </span>
                <h2 class="fw-bold text-dark mb-0" style="font-family: 'Oswald', sans-serif; font-size: clamp(24px, 2.5vw, 34px);">
                    Manufacturing Units &amp; Plant Machinery Register
                </h2>
            </div>
            <span class="badge theme-solid-badge px-3 py-2">
                <i class="fa-solid fa-industry me-1"></i> Nashik Works: Unit H-32 MIDC Satpur
            </span>
        </div>

        <!-- Plant Address & Power Demand Grid -->
        <div class="row g-4 mb-4">
            <div class="col-lg-6">
                <div class="p-4 rounded-4 border bg-light h-100 shadow-sm">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="p-2.5 rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width: 44px; height: 44px;">
                            <i class="fa-solid fa-location-dot fs-5"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold text-dark mb-0" style="font-family: 'Oswald', sans-serif;">Manufacturing Plant Address</h5>
                            <small class="text-muted">Designated Industrial Zone (DISH Approved)</small>
                        </div>
                    </div>
                    <p class="text-secondary mb-3" style="font-size: 14.5px; line-height: 1.7;">
                        <strong>Polymer Products</strong><br>
                        Plot No. H-32, M.I.D.C. Industrial Area, Satpur,<br>
                        Nashik – 422 007, Maharashtra, India.<br>
                        <span class="text-muted small">Specialized multi-bay vulcanization floor, shot-blasting chamber, in-house chemical/physical testing laboratory, and dispatch staging area.</span>
                    </p>
                    <div class="d-flex gap-2">
                        <button type="button" class="btn btn-sm btn-outline-primary rounded-pill open-rdso-modal"
                            data-doc-url="assets/pp_data/Page 01/POLYMER DETAILS/PP DETAILS/PLAN APPROVAL CERTIFICATE.pdf"
                            data-doc-title="Factory Plan Approval Certificate (DISH Nashik)"
                            data-doc-type="pdf">
                            <i class="fa-solid fa-file-pdf me-1"></i> Factory Plan Approval (DISH)
                        </button>
                        <button type="button" class="btn btn-sm btn-outline-primary rounded-pill open-rdso-modal"
                            data-doc-url="assets/pp_data/Page 01/POLYMER DETAILS/PP DETAILS/POLYMER MODEL PLAN.pdf"
                            data-doc-title="Polymer Products Plant Model Layout Plan"
                            data-doc-type="pdf">
                            <i class="fa-solid fa-compass-drafting me-1"></i> Plant Floor Model
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="p-4 rounded-4 border bg-light h-100 shadow-sm">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="p-2.5 rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width: 44px; height: 44px;">
                            <i class="fa-solid fa-bolt fs-5"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold text-dark mb-0" style="font-family: 'Oswald', sans-serif;">Connected Industrial Power Demand</h5>
                            <small class="text-muted">Continuous Electric Supply &amp; Captive Generator Backup</small>
                        </div>
                    </div>
                    <div class="row g-2 mb-3">
                        <div class="col-6">
                            <div class="p-3 bg-white rounded-3 border">
                                <small class="text-muted d-block" style="font-size: 11.5px;">Connected HT Industrial Load</small>
                                <strong class="text-dark fs-5">250 kVA</strong>
                                <small class="text-primary d-block" style="font-size: 11px;">MSEDCL Dedicated Feeder</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 bg-white rounded-3 border">
                                <small class="text-muted d-block" style="font-size: 11.5px;">Standby Captive DG Set</small>
                                <strong class="text-dark fs-5">125 kVA</strong>
                                <small class="text-primary d-block" style="font-size: 11px;">100% Uninterrupted Curing</small>
                            </div>
                        </div>
                    </div>
                    <p class="small text-muted mb-0" style="line-height: 1.5;">
                        <i class="fa-solid fa-circle-info text-primary me-1"></i> Vulcanization and curing processes require strictly uninterrupted temperature cycles. Our dual-source power architecture ensures that zero batch rejections occur due to grid fluctuation.
                    </p>
                </div>
            </div>
        </div>

        <!-- STR 6.2 Machinery Table -->
        <div class="rdso-card shadow-sm mb-4">
            <div class="rdso-section-header d-flex justify-content-between align-items-center flex-wrap gap-2">
                <h4 class="text-white"><i class="fa-solid fa-gears"></i> STR Clause 6.2 — Schedule of Manufacturing Machinery</h4>
                <span class="badge theme-solid-badge">Calibrated &amp; Operational</span>
            </div>
            <div class="table-responsive">
                <table class="table rdso-table mb-0">
                    <thead>
                        <tr>
                            <th style="width: 60px;" class="text-center">Sr.</th>
                            <th style="width: 25%;">Machinery / Equipment Name</th>
                            <th style="width: 14%;">RDSO Requirement</th>
                            <th style="width: 20%;">Installed Specification</th>
                            <th>Operational Function &amp; Quality Control Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center fw-bold">01</td>
                            <td>
                                <strong class="text-dark">Multi-Daylight Hydraulic Vulcanizing Presses</strong><br>
                                <span class="badge theme-pill-badge px-2 py-0.5" style="font-size: 11px;">4 Operational Units</span>
                            </td>
                            <td>Mandatory</td>
                            <td>
                                <strong>Capacity:</strong> Up to 1200 Metric Tonnes<br>
                                <strong>Control:</strong> Microprocessor PLC Digital Controllers with Dual Heating Platens
                            </td>
                            <td>
                                High-pressure uniform hot vulcanization of multi-laminated elastomeric bearings, ensuring total elastomer crosslinking and solid fusion to brass-coated/primed steel laminates.
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center fw-bold">02</td>
                            <td>
                                <strong class="text-dark">Two-Roll Open Rubber Mixing Mills</strong><br>
                                <span class="badge theme-pill-badge px-2 py-0.5" style="font-size: 11px;">2 Heavy Units</span>
                            </td>
                            <td>Mandatory</td>
                            <td>
                                <strong>Sizes:</strong> 16" &times; 42" and 14" &times; 36"<br>
                                <strong>Cooling:</strong> Continuous chilled water circulation system
                            </td>
                            <td>
                                Mechanical mastication of raw virgin elastomer (Natural Rubber NR / Chloroprene CR) and thorough dispersion of zinc oxide, stearic acid, carbon black, and anti-ozonants.
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center fw-bold">03</td>
                            <td>
                                <strong class="text-dark">Enclosed Steel Grit Shot-Blasting Chamber</strong><br>
                                <span class="badge theme-pill-badge px-2 py-0.5" style="font-size: 11px;">1 Dedicated Unit</span>
                            </td>
                            <td>Mandatory</td>
                            <td>
                                <strong>Standard:</strong> Sa 2.5 Surface Cleanliness Profile per ISO 8501-1<br>
                                <strong>Media:</strong> High-grade chilled iron grit
                            </td>
                            <td>
                                Complete elimination of mill scale, rust, and surface contaminants from mild steel laminates (IS:2062 Gr. E250) to create a high-anchor surface profile for Chemlok chemical bonding.
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center fw-bold">04</td>
                            <td>
                                <strong class="text-dark">Hydraulic Guillotine Steel Shearing Machines</strong><br>
                                <span class="badge theme-pill-badge px-2 py-0.5" style="font-size: 11px;">2 Heavy Units</span>
                            </td>
                            <td>Mandatory</td>
                            <td>
                                <strong>Capacity:</strong> Shears up to 12mm thickness mild steel plates<br>
                                <strong>Accuracy:</strong> Precision square cut with deburring and edge-radiusing
                            </td>
                            <td>
                                Accurate sizing of inner steel laminates and outer load-plates. All cut edges are radiused and ground smooth to prevent puncture or stress concentration on internal rubber layers.
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center fw-bold">05</td>
                            <td>
                                <strong class="text-dark">Precision Bearing Mould Tooling Inventory</strong><br>
                                <span class="badge theme-pill-badge px-2 py-0.5" style="font-size: 11px;">50+ Standard Sets</span>
                            </td>
                            <td>Mandatory</td>
                            <td>
                                <strong>Sizes:</strong> Complete standard matrix for IRC:83 Type A, B, C, D, E, F &amp; Indian Railway designs
                            </td>
                            <td>
                                Heavy-gauge machined steel moulds machined with precise draft angles and side-clearance tolerances to guarantee uniform side rubber cover (&ge; 4mm) and top/bottom cover (&ge; 2.5mm).
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center fw-bold">06</td>
                            <td>
                                <strong class="text-dark">Hydraulic Marking &amp; Permanent Stamping Press</strong><br>
                                <span class="badge theme-pill-badge px-2 py-0.5" style="font-size: 11px;">1 Dedicated Unit</span>
                            </td>
                            <td>Mandatory</td>
                            <td>
                                <strong>Type:</strong> Hot-embossed vulcanized marking head with alphanumeric date/lot indexing
                            </td>
                            <td>
                                Permanent indelible embossing of manufacturer mark (POLYMER), bearing serial number, lot code, design load, and quarter/year of production on each unit for field traceability.
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Factory Machinery Photo Showcase (With popup viewer) -->
        <div class="row g-3">
            <div class="col-6 col-md-3">
                <div class="rdso-equip-card">
                    <div class="rdso-equip-img-wrap">
                        <span class="rdso-equip-badge">Vulcanizing Bay</span>
                        <img src="assets/pp_data/Machine_Images/20/image-1.webp" alt="Multi-Daylight Hydraulic Press">
                    </div>
                    <div class="p-3">
                        <h6 class="fw-bold text-dark mb-1" style="font-size: 13.5px;">Hydraulic Curing Press</h6>
                        <small class="text-muted d-block" style="font-size: 11.5px;">1200 MT Multi-Daylight with PLC digital temperature telemetry.</small>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="rdso-equip-card">
                    <div class="rdso-equip-img-wrap">
                        <span class="rdso-equip-badge">Compounding Bay</span>
                        <img src="assets/pp_data/Machine_Images/20/image-9.webp" alt="Two-Roll Rubber Mixing Mill">
                    </div>
                    <div class="p-3">
                        <h6 class="fw-bold text-dark mb-1" style="font-size: 13.5px;">Two-Roll Mixing Mill</h6>
                        <small class="text-muted d-block" style="font-size: 11.5px;">Chilled water-cooled mixing mill for elastomer homogenization.</small>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="rdso-equip-card">
                    <div class="rdso-equip-img-wrap">
                        <span class="rdso-equip-badge">Steel Sizing</span>
                        <img src="assets/pp_data/Machine_Images/20/image-16.webp" alt="Guillotine Plate Shearing">
                    </div>
                    <div class="p-3">
                        <h6 class="fw-bold text-dark mb-1" style="font-size: 13.5px;">Plate Shearing M/c</h6>
                        <small class="text-muted d-block" style="font-size: 11.5px;">Precision guillotine cutting of IS:2062 steel laminates.</small>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="rdso-equip-card">
                    <div class="rdso-equip-img-wrap">
                        <span class="rdso-equip-badge">Mould &amp; Assembly</span>
                        <img src="assets/pp_data/Machine_Images/20/image-4.webp" alt="Straightening Machine">
                    </div>
                    <div class="p-3">
                        <h6 class="fw-bold text-dark mb-1" style="font-size: 13.5px;">Straightening &amp; Prep M/c</h6>
                        <small class="text-muted d-block" style="font-size: 11.5px;">Roller plate flattening and surface preparation for assembly.</small>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ============================================================
     SECTION 3: TESTING LABORATORY & FACILITIES (STR 6.3 / 6.4)
     ============================================================ -->
<section class="py-5" id="testing-facilities" style="background: #f8fafc;">
    <div class="container-fluid px-3 px-lg-5 py-2">
        
        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-4">
            <div>
                <span class="badge px-3 py-1.5 rounded-pill font-monospace fw-bold text-uppercase mb-1 theme-pill-badge">
                    Schedule of Technical Requirements &bull; STR Clause 6.3 &amp; 6.4
                </span>
                <h2 class="fw-bold text-dark mb-0" style="font-family: 'Oswald', sans-serif; font-size: clamp(24px, 2.5vw, 34px);">
                    Laboratory Facilities &amp; Testing Machinery
                </h2>
            </div>
            <span class="verified-stamp">
                <i class="fa-solid fa-microscope"></i> In-House Calibrated Testing Lab
            </span>
        </div>

        <p class="text-muted mb-4" style="max-width: 880px; font-size: 15px; line-height: 1.7;">
            Polymer Products maintains an advanced in-house quality control and rubber testing laboratory at its Nashik plant, fully equipped to perform physical, mechanical, thermal, and chemical verification of raw elastomers, compounded batches, and finished bearings in compliance with <strong>RDSO BS-S-7.5.3.1-10</strong>, <strong>IRS:B1-2001</strong>, and <strong>IRC:83 (Part-II)</strong>.
        </p>

        <!-- Testing Equipment Grid -->
        <div class="row g-4 mb-4">
            <!-- Machine 1: UTM -->
            <div class="col-md-6 col-lg-4">
                <div class="rdso-card h-100 shadow-sm p-4 d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <span class="badge theme-solid-badge">STR 6.3.1</span>
                            <span class="text-muted small font-monospace">IS:3400 (Part 1)</span>
                        </div>
                        <h5 class="fw-bold text-dark mb-2" style="font-family: 'Oswald', sans-serif; font-size: 19px;">
                            Universal Testing Machine (UTM)
                        </h5>
                        <p class="text-secondary small mb-3" style="line-height: 1.6;">
                            Calibrated electronic UTM equipped with digital optical extensometer, motorized crosshead speed control, and high-precision load cell for determining:
                        </p>
                        <ul class="list-unstyled small text-muted mb-0 d-flex flex-column gap-1.5">
                            <li><i class="fa-solid fa-circle-check text-primary me-2"></i> Tensile Strength (&ge; 17.0 MPa)</li>
                            <li><i class="fa-solid fa-circle-check text-primary me-2"></i> Elongation at Break (&ge; 400% for NR / &ge; 350% for CR)</li>
                            <li><i class="fa-solid fa-circle-check text-primary me-2"></i> Peel Bond Adhesion (Elastomer to Steel &ge; 7 kN/m)</li>
                            <li><i class="fa-solid fa-circle-check text-primary me-2"></i> Tear Resistance (Die C Angle Tear per IS:3400 Pt 17)</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Machine 2: Rheometer ODR -->
            <div class="col-md-6 col-lg-4">
                <div class="rdso-card h-100 shadow-sm p-4 d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <span class="badge theme-solid-badge">STR 6.3.2</span>
                            <span class="text-muted small font-monospace">ASTM D2084</span>
                        </div>
                        <h5 class="fw-bold text-dark mb-2" style="font-family: 'Oswald', sans-serif; font-size: 19px;">
                            Oscillating Disc Rheometer (ODR)
                        </h5>
                        <p class="text-secondary small mb-3" style="line-height: 1.6;">
                            Computerized Rheometer recording real-time torque-vs-time vulcanization cure kinetics for every compound lot mixed:
                        </p>
                        <ul class="list-unstyled small text-muted mb-0 d-flex flex-column gap-1.5">
                            <li><i class="fa-solid fa-circle-check text-primary me-2"></i> Minimum Torque (ML) &amp; Maximum Torque (MH)</li>
                            <li><i class="fa-solid fa-circle-check text-primary me-2"></i> Scorch Time (ts2) for processing safety</li>
                            <li><i class="fa-solid fa-circle-check text-primary me-2"></i> Optimum Cure Time (tc90) for press cycle control</li>
                            <li><i class="fa-solid fa-circle-check text-primary me-2"></i> Real-time cure curve stored in batch QC records</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Machine 3: Proof Load Rig -->
            <div class="col-md-6 col-lg-4">
                <div class="rdso-card h-100 shadow-sm p-4 d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <span class="badge theme-solid-badge">STR 6.4.1</span>
                            <span class="text-muted small font-monospace">1.5x Proof Load</span>
                        </div>
                        <h5 class="fw-bold text-dark mb-2" style="font-family: 'Oswald', sans-serif; font-size: 19px;">
                            Compressive Proof Load Testing Rig
                        </h5>
                        <p class="text-secondary small mb-3" style="line-height: 1.6;">
                            High-tonnage hydraulic test rig calibrated with master pressure transducers to apply 1.5 times the maximum design vertical load:
                        </p>
                        <ul class="list-unstyled small text-muted mb-0 d-flex flex-column gap-1.5">
                            <li><i class="fa-solid fa-circle-check text-primary me-2"></i> Compressive stiffness verification under full proof-load</li>
                            <li><i class="fa-solid fa-circle-check text-primary me-2"></i> 100% visual inspection under load for edge bulging</li>
                            <li><i class="fa-solid fa-circle-check text-primary me-2"></i> Zero internal laminate delamination confirmation</li>
                            <li><i class="fa-solid fa-circle-check text-primary me-2"></i> Routine witness testing by RDSO / RITES inspecting officers</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Machine 4: Thermal Ageing Oven -->
            <div class="col-md-6 col-lg-4">
                <div class="rdso-card h-100 shadow-sm p-4 d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <span class="badge theme-solid-badge">STR 6.3.3</span>
                            <span class="text-muted small font-monospace">IS:3400 (Part 4)</span>
                        </div>
                        <h5 class="fw-bold text-dark mb-2" style="font-family: 'Oswald', sans-serif; font-size: 19px;">
                            Thermal Ageing Resistance Oven
                        </h5>
                        <p class="text-secondary small mb-3" style="line-height: 1.6;">
                            Microprocessor-controlled circulating air oven maintaining 70°C &plusmn; 1°C for 72 continuous hours:
                        </p>
                        <ul class="list-unstyled small text-muted mb-0 d-flex flex-column gap-1.5">
                            <li><i class="fa-solid fa-circle-check text-primary me-2"></i> Max Tensile Variation: Within &minus;15%</li>
                            <li><i class="fa-solid fa-circle-check text-primary me-2"></i> Max Elongation Variation: Within &minus;30%</li>
                            <li><i class="fa-solid fa-circle-check text-primary me-2"></i> Max Hardness Variation: Within +4 IRHD</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Machine 5: De Mattia Flex Tester -->
            <div class="col-md-6 col-lg-4">
                <div class="rdso-card h-100 shadow-sm p-4 d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <span class="badge theme-solid-badge">STR 6.3.4</span>
                            <span class="text-muted small font-monospace">ASTM D430 / ISO 132</span>
                        </div>
                        <h5 class="fw-bold text-dark mb-2" style="font-family: 'Oswald', sans-serif; font-size: 19px;">
                            De Mattia Dynamic Flex Tester
                        </h5>
                        <p class="text-secondary small mb-3" style="line-height: 1.6;">
                            Model IK/DMFT/01 operating at 300 cycles per minute with 75mm grip opening to evaluate fatigue endurance:
                        </p>
                        <ul class="list-unstyled small text-muted mb-0 d-flex flex-column gap-1.5">
                            <li><i class="fa-solid fa-circle-check text-primary me-2"></i> Dynamic crack initiation resistance</li>
                            <li><i class="fa-solid fa-circle-check text-primary me-2"></i> Cut growth endurance under cyclic flexure</li>
                            <li><i class="fa-solid fa-circle-check text-primary me-2"></i> Verifies bridge bearing longevity under heavy railway axle cycling</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Machine 6: Hardness & Muffle Furnace -->
            <div class="col-md-6 col-lg-4">
                <div class="rdso-card h-100 shadow-sm p-4 d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <span class="badge theme-solid-badge">STR 6.3.5</span>
                            <span class="text-muted small font-monospace">IS:3400 (Part 2 &amp; 10)</span>
                        </div>
                        <h5 class="fw-bold text-dark mb-2" style="font-family: 'Oswald', sans-serif; font-size: 19px;">
                            Hardness, Density &amp; Ash Content Lab
                        </h5>
                        <p class="text-secondary small mb-3" style="line-height: 1.6;">
                            Bench apparatus for primary compound identification and physical validation:
                        </p>
                        <ul class="list-unstyled small text-muted mb-0 d-flex flex-column gap-1.5">
                            <li><i class="fa-solid fa-circle-check text-primary me-2"></i> IRHD &amp; Shore A Hardness Testers with standard blocks</li>
                            <li><i class="fa-solid fa-circle-check text-primary me-2"></i> Rubber Densimeter for specific gravity determination</li>
                            <li><i class="fa-solid fa-circle-check text-primary me-2"></i> High-temperature muffle furnace for ash &amp; polymer content</li>
                            <li><i class="fa-solid fa-circle-check text-primary me-2"></i> Compression set jigs (IS:3400 Part 10: 24h at 70°C &le; 35%)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- External NABL & Research Testing Tie-ups -->
        <div class="p-4 rounded-4 border bg-white shadow-sm">
            <div class="row align-items-center g-4">
                <div class="col-lg-8">
                    <h5 class="fw-bold text-dark mb-2" style="font-family: 'Oswald', sans-serif;">
                        <i class="fa-solid fa-handshake text-primary me-2"></i>MoUs &amp; External NABL Testing Laboratory Tie-Ups
                    </h5>
                    <p class="text-secondary small mb-0" style="line-height: 1.7;">
                        For specialized long-term evaluations such as <strong>Ozone Resistance (ASTM D1149 / 50 pphm)</strong>, low-temperature crystallization tests (&minus;10°C / &minus;25°C), shear modulus verification on full-scale prototypes, and steel chemical spectrometer analysis, Polymer Products maintains formal testing arrangements with leading <strong>NABL-accredited metallurgical &amp; polymer testing laboratories</strong> across India.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="testing.php" class="btn btn-outline-primary rounded-pill px-4 py-2.5 fw-bold text-uppercase" style="font-size: 13px;">
                        <i class="fa-solid fa-arrow-up-right-from-square me-2"></i> Explore Complete QA/QC System
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ============================================================
     SECTION 4: RDSO VENDOR APPROVAL & QUALITY ASSURANCE PLAN
     ============================================================ -->
<section class="py-5" id="rdso-approval" style="background: #ffffff;">
    <div class="container-fluid px-3 px-lg-5 py-2">
        
        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-4">
            <div>
                <span class="badge px-3 py-1.5 rounded-pill font-monospace fw-bold text-uppercase mb-1 theme-pill-badge">
                    Indian Railways RDSO Technical Qualification
                </span>
                <h2 class="fw-bold text-dark mb-0" style="font-family: 'Oswald', sans-serif; font-size: clamp(24px, 2.5vw, 34px);">
                    RDSO Vendor Approval Credentials &amp; Standards
                </h2>
            </div>
            <span class="badge theme-solid-badge px-3 py-2">
                <i class="fa-solid fa-shield-halved me-1"></i> RDSO BS-131 &amp; IRS:B1-2001
            </span>
        </div>

        <div class="row g-4 mb-4">
            <!-- Approval Specs Grid -->
            <div class="col-lg-7">
                <div class="rdso-card h-100 shadow-sm">
                    <div class="rdso-section-header">
                        <h4 class="text-white"><i class="fa-solid fa-award"></i> Technical Specifications &amp; Approval Scope</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table rdso-table mb-0">
                            <tbody>
                                <tr>
                                    <th style="width: 35%;">Approved Product Category</th>
                                    <td>
                                        <strong class="text-dark">Elastomeric Bearings for Railway Bridges</strong><br>
                                        <span class="text-muted small">Multi-laminated steel-reinforced elastomeric bridge bearings</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Standard Item Classification</th>
                                    <td>
                                        <strong>Item ID 3100417</strong> &bull; <span class="badge theme-pill-badge font-monospace">BS-S-7.5.3.1-10 (Ver 2.0)</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Governing Technical Code</th>
                                    <td>
                                        <strong>IRS:B1-2001</strong> (Indian Railway Standard Specification for Bridge Bearings)<br>
                                        <strong>RDSO BS-131</strong> (Guidelines for Elastomeric Bearings on Railway Bridges)
                                    </td>
                                </tr>
                                <tr>
                                    <th>Harmonized Highway Standards</th>
                                    <td>
                                        <strong>IRC:83-2018 (Part-II)</strong> (Indian Roads Congress Code for Bridge Bearings)<br>
                                        <strong>MoRT&amp;H Clause 2005</strong> (Ministry of Road Transport &amp; Highways, 5th Revision)
                                    </td>
                                </tr>
                                <tr>
                                    <th>Annual Production Capacity</th>
                                    <td>
                                        <strong class="text-primary fs-6">20,000+ Bearing Units per Annum</strong><br>
                                        <small class="text-muted">Single-shift rating across 4 multi-daylight hydraulic curing presses</small>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Raw Polymer Requirement</th>
                                    <td>
                                        <strong>100% Virgin Natural Rubber (NR)</strong> or <strong>Chloroprene Rubber (CR)</strong><br>
                                        <small class="text-muted">Zero reclaimed rubber or recycled scrap permitted as per RDSO / IRC rules</small>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Internal Steel Reinforcement</th>
                                    <td>
                                        <strong>IS:2062 Gr. E250 Mild Steel Plates</strong> (Min. yield strength &ge; 250 MPa)<br>
                                        <small class="text-muted">Shot-blasted to Sa 2.5 cleanliness with Chemlok adhesive primer</small>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Quality Assurance Plan (QAP)</th>
                                    <td>
                                        <strong class="text-primary">Approved Vendor QAP Enforced</strong><br>
                                        <small class="text-muted">Stage-wise incoming raw material testing, cure logs, and proof-load certificates</small>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Direct Official PDF Viewer Card -->
            <div class="col-lg-5">
                <div class="rdso-card h-100 shadow-sm p-4 d-flex flex-column justify-content-between" style="background: linear-gradient(180deg, #ffffff 0%, #f0f7ff 100%);">
                    <div>
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="p-3 rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width: 52px; height: 52px; font-size: 24px;">
                                <i class="fa-solid fa-stamp"></i>
                            </div>
                            <div>
                                <span class="badge theme-solid-badge text-uppercase small">Verified RDSO Letter</span>
                                <h5 class="fw-bold text-dark mb-0 mt-1" style="font-family: 'Oswald', sans-serif;">Official RDSO Technical Approval</h5>
                            </div>
                        </div>

                        <p class="text-secondary small mb-4" style="line-height: 1.7;">
                            Official Research Designs and Standards Organisation (RDSO), Ministry of Railways, Government of India document approving Polymer Products' manufacturing plant, facilities, and QAP for bridge bearings conforming to RDSO standards.
                        </p>

                        <div class="bg-white rounded-3 p-3 border mb-4 shadow-2xs">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="text-muted small">Document Name:</span>
                                <strong class="text-dark small font-monospace">NEW_RDSO.pdf</strong>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="text-muted small">Authority:</span>
                                <strong class="text-dark small">RDSO / Indian Railways</strong>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-muted small">Compliance:</span>
                                <span class="badge theme-pill-badge">Verified Active</span>
                            </div>
                        </div>
                    </div>

                    <div>
                        <button type="button" class="btn btn-primary w-100 py-3 rounded-pill fw-bold shadow-sm open-rdso-modal d-flex align-items-center justify-content-center gap-2"
                            data-doc-url="assets/pp_data/Page 01/POLYMER DETAILS/NEW_RDSO.pdf"
                            data-doc-title="RDSO Indian Railways Technical Approval Certificate"
                            data-doc-type="pdf"
                            style="background: var(--theme-primary, #0284c7); border-color: var(--theme-primary, #0284c7); font-size: 14px;">
                            <i class="fa-solid fa-eye"></i>
                            <span>View Official RDSO Approval Document</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ============================================================
     SECTION 5: STATUTORY LICENSES & ISO CERTIFICATION
     ============================================================ -->
<section class="py-5" id="statutory-licenses" style="background: #f8fafc;">
    <div class="container-fluid px-3 px-lg-5 py-2">
        
        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-4">
            <div>
                <span class="badge px-3 py-1.5 rounded-pill font-monospace fw-bold text-uppercase mb-1 theme-pill-badge">
                    Statutory &amp; Quality Accreditations
                </span>
                <h2 class="fw-bold text-dark mb-0" style="font-family: 'Oswald', sans-serif; font-size: clamp(24px, 2.5vw, 34px);">
                    ISO 9001:2015 &amp; Industrial Accreditations
                </h2>
            </div>
            <span class="verified-stamp">
                <i class="fa-solid fa-certificate"></i> Certified Quality Systems
            </span>
        </div>

        <div class="row g-4">
            <!-- ISO 9001 Quality Card -->
            <div class="col-lg-6">
                <div class="rdso-card h-100 shadow-sm p-4 d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <span class="badge theme-solid-badge text-uppercase small">QMS Certified</span>
                            <span class="text-muted small">Valid Until 2027</span>
                        </div>
                        <h4 class="fw-bold text-dark mb-2" style="font-family: 'Oswald', sans-serif;">
                            ISO 9001:2015 Quality Management System
                        </h4>
                        <p class="text-secondary small mb-3" style="line-height: 1.7;">
                            Polymer Products operates an audited Quality Management System for the design, compounding, vulcanization, and testing of Elastomeric Bearings and Seismic Solutions conforming to international ISO standard benchmarks.
                        </p>
                        <div class="p-3 bg-light rounded-3 border mb-3 small">
                            <div class="d-flex justify-content-between mb-1.5">
                                <span class="text-muted">Standard:</span>
                                <strong class="text-dark">IS/ISO 9001:2015</strong>
                            </div>
                            <div class="d-flex justify-content-between mb-1.5">
                                <span class="text-muted">Accreditation:</span>
                                <strong class="text-dark">NABCB / International IAF Recognized</strong>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span class="text-muted">Scope of Certification:</span>
                                <span class="text-end fw-semibold text-primary">Manufacture of Bridge Bearings</span>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="button" class="btn btn-outline-primary w-50 rounded-pill py-2.5 fw-semibold small open-rdso-modal"
                            data-doc-url="assets/pp_data/Page 01/POLYMER DETAILS/iso-certificate.pdf"
                            data-doc-title="ISO 9001:2015 Certificate (PDF) - Polymer Products"
                            data-doc-type="pdf">
                            <i class="fa-solid fa-file-pdf me-1"></i> View ISO PDF
                        </button>
                        <button type="button" class="btn btn-outline-primary w-50 rounded-pill py-2.5 fw-semibold small open-rdso-modal"
                            data-doc-url="assets/pp_data/Page 01/POLYMER DETAILS/ISO CERTIFICATE 2027.png"
                            data-doc-title="ISO 9001:2027 Certificate Image"
                            data-doc-type="image">
                            <i class="fa-solid fa-image me-1"></i> View Image
                        </button>
                    </div>
                </div>
            </div>

            <!-- Pollution Control & Environmental Consent Card -->
            <div class="col-lg-6">
                <div class="rdso-card h-100 shadow-sm p-4 d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <span class="badge theme-solid-badge text-uppercase small">MPCB Consent</span>
                            <span class="text-muted small">Environmental Statutory</span>
                        </div>
                        <h4 class="fw-bold text-dark mb-2" style="font-family: 'Oswald', sans-serif;">
                            Pollution Control Board Consent (MPCB)
                        </h4>
                        <p class="text-secondary small mb-3" style="line-height: 1.7;">
                            Consent to Operate granted by Maharashtra Pollution Control Board (MPCB) under Section 26 of Water (Prevention &amp; Control of Pollution) Act 1974 and Section 21 of Air (Prevention &amp; Control of Pollution) Act 1981 for rubber moulding operations.
                        </p>
                        <div class="p-3 bg-light rounded-3 border mb-3 small">
                            <div class="d-flex justify-content-between mb-1.5">
                                <span class="text-muted">Granting Authority:</span>
                                <strong class="text-dark">Maharashtra Pollution Control Board</strong>
                            </div>
                            <div class="d-flex justify-content-between mb-1.5">
                                <span class="text-muted">Consent Category:</span>
                                <strong class="text-dark">Approved Green Category Industry</strong>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span class="text-muted">Compliance Status:</span>
                                <span class="badge theme-pill-badge">Valid &amp; Audited</span>
                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn btn-outline-primary w-100 rounded-pill py-2.5 fw-semibold small open-rdso-modal"
                        data-doc-url="assets/pp_data/Page 01/POLYMER DETAILS/PP DETAILS/MPCB POLLUTION CERTIFICATE.pdf"
                        data-doc-title="MPCB Pollution Consent Certificate - Polymer Products"
                        data-doc-type="pdf">
                        <i class="fa-solid fa-file-pdf me-1 text-primary"></i> View MPCB Pollution Certificate
                    </button>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ============================================================
     SECTION 6: KEY ARTISANS & TECHNICAL PERSONNEL
     ============================================================ -->
<section class="py-5" id="technical-team" style="background: #ffffff;">
    <div class="container-fluid px-3 px-lg-5 py-2">
        
        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-4">
            <div>
                <span class="badge px-3 py-1.5 rounded-pill font-monospace fw-bold text-uppercase mb-1 theme-pill-badge">
                    Technical Human Resources &amp; Artisans
                </span>
                <h2 class="fw-bold text-dark
                 mb-0" style="font-family: 'Oswald', sans-serif; font-size: clamp(24px, 2.5vw, 34px);">
                    Key Artisans &amp; Technical Governance
                </h2>
            </div>
            <a href="team.php" class="btn btn-outline-primary btn-sm rounded-pill px-3 py-1.5 fw-semibold">
                View Full Org Chart <i class="fa-solid fa-arrow-right ms-1"></i>
            </a>
        </div>

        <p class="text-muted mb-4" style="max-width: 820px; font-size: 15px; line-height: 1.7;">
            The quality of elastomeric bearings relies directly upon experienced rubber compounding masters, press operators, and testing chemists. Our plant employs senior artisans with up to 35+ years of dedicated service in elastomer moulding:
        </p>

        <!-- Technical Team & Artisans Table -->
        <div class="rdso-card shadow-sm mb-4">
            <div class="rdso-section-header">
                <h4 class="text-white"><i class="fa-solid fa-people-group"></i> Key Artisans &amp; Technical Operations Leadership</h4>
            </div>
            <div class="table-responsive">
                <table class="table rdso-table mb-0">
                    <thead>
                        <tr>
                            <th style="width: 25%;">Personnel Name</th>
                            <th style="width: 20%;">Designation / Role</th>
                            <th style="width: 22%;">Educational Qualification</th>
                            <th style="width: 15%;">Experience</th>
                            <th>Primary Responsibility in Bearing Production</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong class="text-dark">Maruti Pandurang Prabhu</strong></td>
                            <td><span class="badge theme-solid-badge">Proprietor &amp; Chief Technologist</span></td>
                            <td>B.Sc., L.P.R.I. (London)</td>
                            <td><strong>48+ Years</strong></td>
                            <td>Overall elastomer compounding formulation, rubber technology, and quality governance.</td>
                        </tr>
                        <tr>
                            <td><strong class="text-dark">Mrs. Anita Maruti Prabhu</strong></td>
                            <td><span class="badge theme-solid-badge">Lab Incharge &amp; Chief Chemist</span></td>
                            <td>M.Sc. (Chemistry)</td>
                            <td><strong>39+ Years</strong></td>
                            <td>In-house chemical analysis, raw polymer testing, and cure kinetics evaluation.</td>
                        </tr>
                        <tr>
                            <td><strong class="text-dark">Chetan Maruti Prabhu</strong></td>
                            <td><span class="badge theme-solid-badge">Production Incharge</span></td>
                            <td>B.E. (Mechanical)</td>
                            <td><strong>16+ Years</strong></td>
                            <td>Mould design, hydraulic press maintenance, steel laminate prep, and plant scheduling.</td>
                        </tr>
                        <tr>
                            <td><strong class="text-dark">Tausifkhan Pathan</strong></td>
                            <td><span class="badge theme-pill-badge">Dy. Manager Design &amp; Testing</span></td>
                            <td>B.E. (Mechanical)</td>
                            <td><strong>12+ Years</strong></td>
                            <td>Proof-load test rig operation, bearing drawing approvals, and client witness coordination.</td>
                        </tr>
                        <tr>
                            <td><strong class="text-dark">Nitin Pandey</strong></td>
                            <td><span class="badge theme-pill-badge">R&amp;D Head &amp; Quality Manager</span></td>
                            <td>Rubber Technology Specialist</td>
                            <td><strong>15+ Years</strong></td>
                            <td>QAP compliance, stage inspection, formulation optimization, and anti-ozonant testing.</td>
                        </tr>
                        <tr>
                            <td><strong class="text-dark">Labhesh Bawiskar</strong></td>
                            <td><span class="badge theme-pill-badge">Lab Chemist</span></td>
                            <td>M.Sc. (Industrial Chemistry)</td>
                            <td><strong>8+ Years</strong></td>
                            <td>UTM tensile testing, thermal ageing ovens, hardness testing, and ash content verification.</td>
                        </tr>
                        <tr>
                            <td><strong class="text-dark">Senior Master Artisans (6 Nos.)</strong></td>
                            <td><span class="badge theme-solid-badge">Press &amp; Compounding Masters</span></td>
                            <td>ITI Certified &amp; Trained Apprentices</td>
                            <td><strong>15 to 30 Years</strong></td>
                            <td>Mould alignment, steel plate priming (Chemlok), hydraulic press de-moulding, and trimming.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</section>

<!-- ============================================================
     SECTION 7: EXECUTED RAILWAY WORKS & IN-HAND PROJECTS
     ============================================================ -->
<section class="py-5" id="executed-works" style="background: #f8fafc;">
    <div class="container-fluid px-3 px-lg-5 py-2">
        
        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-4">
            <div>
                <span class="badge px-3 py-1.5 rounded-pill font-monospace fw-bold text-uppercase mb-1 theme-pill-badge">
                    Track Record &amp; Infrastructure Experience
                </span>
                <h2 class="fw-bold text-dark mb-0" style="font-family: 'Oswald', sans-serif; font-size: clamp(24px, 2.5vw, 34px);">
                    Executed Works &amp; Major Project Supplies
                </h2>
            </div>
            <a href="experience.php" class="btn btn-outline-primary btn-sm rounded-pill px-3 py-1.5 fw-semibold">
                View All Sector Registers <i class="fa-solid fa-arrow-right ms-1"></i>
            </a>
        </div>

        <div class="row g-4 mb-4">
            <!-- Register 1: Indian Railways -->
            <div class="col-lg-4">
                <div class="rdso-card h-100 shadow-sm p-4 d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="p-2.5 rounded-circle bg-light text-primary border d-flex align-items-center justify-content-center" style="width: 44px; height: 44px;">
                                <i class="fa-solid fa-train fs-5"></i>
                            </div>
                            <span class="badge theme-solid-badge font-monospace">46+ Railway Bridges</span>
                        </div>
                        <h4 class="fw-bold text-dark mb-2" style="font-family: 'Oswald', sans-serif;">
                            Indian Railways &amp; ROB Supplies
                        </h4>
                        <p class="text-secondary small mb-3" style="line-height: 1.65;">
                            Certified supply registers of laminated elastomeric bearings supplied for Zonal Railways, Dedicated Freight Corridor (DFCCIL), Konkan Railway, and Road Over Bridges (ROBs).
                        </p>
                        <div class="p-2.5 bg-light rounded-3 border small mb-3">
                            <span class="text-dark fw-semibold"><i class="fa-solid fa-file-pdf text-primary me-1"></i> RAILWAY clients.pdf</span>
                        </div>
                    </div>

                    <button type="button" class="btn btn-primary w-100 rounded-pill py-2.5 fw-bold small open-rdso-modal"
                        data-doc-url="assets/pp_data/Page 08/RAILWAY clients.pdf"
                        data-doc-title="Indian Railways &amp; ROB Sector Supply Register"
                        data-doc-type="pdf">
                        <i class="fa-solid fa-file-lines me-1"></i> View Railway Clients Register
                    </button>
                </div>
            </div>

            <!-- Register 2: National Highways -->
            <div class="col-lg-4">
                <div class="rdso-card h-100 shadow-sm p-4 d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="p-2.5 rounded-circle bg-light text-primary border d-flex align-items-center justify-content-center" style="width: 44px; height: 44px;">
                                <i class="fa-solid fa-road fs-5"></i>
                            </div>
                            <span class="badge theme-solid-badge font-monospace">127+ Highway Packages</span>
                        </div>
                        <h4 class="fw-bold text-dark mb-2" style="font-family: 'Oswald', sans-serif;">
                            National Highways (NHAI)
                        </h4>
                        <p class="text-secondary small mb-3" style="line-height: 1.65;">
                            Verified deliveries for major EPC contractors including Ashoka Buildcon, GHV India, HG Infra, Shivalaya, Rajnandini, and PWD flyovers across India.
                        </p>
                        <div class="p-2.5 bg-light rounded-3 border small mb-3">
                            <span class="text-dark fw-semibold"><i class="fa-solid fa-file-pdf text-primary me-1"></i> NH CLIENTS.pdf</span>
                        </div>
                    </div>

                    <button type="button" class="btn btn-primary w-100 rounded-pill py-2.5 fw-bold small open-rdso-modal"
                        data-doc-url="assets/pp_data/Page 08/NH CLIENTS.pdf"
                        data-doc-title="National Highway Sector Supply Register (127+ Packages)"
                        data-doc-type="pdf">
                        <i class="fa-solid fa-file-lines me-1"></i> View NHAI Clients Register
                    </button>
                </div>
            </div>

            <!-- Register 3: Metro Transit -->
            <div class="col-lg-4">
                <div class="rdso-card h-100 shadow-sm p-4 d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="p-2.5 rounded-circle bg-light text-primary border d-flex align-items-center justify-content-center" style="width: 44px; height: 44px;">
                                <i class="fa-solid fa-train-subway fs-5"></i>
                            </div>
                            <span class="badge theme-solid-badge font-monospace">23+ Metro Lines</span>
                        </div>
                        <h4 class="fw-bold text-dark mb-2" style="font-family: 'Oswald', sans-serif;">
                            Metro Rail Transit Corridors
                        </h4>
                        <p class="text-secondary small mb-3" style="line-height: 1.65;">
                            Specialized elastomeric pier bearings and track vibration damping pads for Mumbai Metro Line 4 (MML4), transit elevated guideways, and interchange bridges.
                        </p>
                        <div class="p-2.5 bg-light rounded-3 border small mb-3">
                            <span class="text-dark fw-semibold"><i class="fa-solid fa-file-pdf text-primary me-1"></i> METRO CLIENTS.pdf</span>
                        </div>
                    </div>

                    <button type="button" class="btn btn-primary w-100 rounded-pill py-2.5 fw-bold small open-rdso-modal"
                        data-doc-url="assets/pp_data/Page 08/NEW METRO CLIENTS.pdf"
                        data-doc-title="Metro Rail Transit Supply Register (23+ Packages)"
                        data-doc-type="pdf">
                        <i class="fa-solid fa-file-lines me-1"></i> View Metro Clients Register
                    </button>
                </div>
            </div>
        </div>

        <!-- In-Hand Projects & Execution Capacity -->
        <div class="p-4 rounded-4 border bg-white shadow-sm">
            <div class="row align-items-center g-4">
                <div class="col-lg-8">
                    <span class="badge theme-solid-badge font-monospace px-3 py-1 mb-2">Ongoing Production</span>
                    <h5 class="fw-bold text-dark mb-1" style="font-family: 'Oswald', sans-serif;">
                        Current In-Hand Railway &amp; Infrastructure Orders
                    </h5>
                    <p class="text-secondary small mb-0" style="line-height: 1.7;">
                        With over 20,000+ units annual capacity and dedicated inventory of mild steel laminates (IS:2062) and virgin elastomer compounds, our Nashik plant maintains fast delivery cycles (2 to 4 weeks) for urgent railway bridge replacements, ROB girder seatings, and highway expressway packages.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="contact.php" class="btn btn-primary rounded-pill px-4 py-2.5 fw-bold text-uppercase" style="font-size: 13px;">
                        <i class="fa-solid fa-paper-plane me-2"></i> Submit Railway RFQ
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ============================================================
     8. Technical QA & Inquiry CTA
     ============================================================ -->
<section class="py-5" style="background: linear-gradient(135deg, #0284c7, #0284c7 100%); color:#cbd5e1; border-top:1px solid #0284c7;">
    <div class="container text-center py-3">
        <span class="badge px-3 py-2 mb-2 rounded-pill text-uppercase" style="background: white; border: 1px solid var(--theme-primary, #0284c7); color: var(--theme-primary, #0284c7); font-size:12px; letter-spacing:1px; font-weight:600;">
            RDSO &amp; Railway Bridge Engineers
        </span>
        <h3 class="text-white fw-bold mb-2" style="font-family:'Oswald', sans-serif; font-size: clamp(24px, 3vw, 36px);">
            Schedule Factory Witness Inspection or Request QAP Documentation
        </h3>
        <p class="mx-auto mb-4" style="max-width: 720px; font-size: 15px; color: #cbd5e1;">
            We welcome inspecting officials from RDSO, RITES, Zonal Railways, NHAI, and consulting engineers to inspect our raw material registers, testing frames, and live vulcanization presses at our Nashik facility.
        </p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="contact.php" class="btn btn-primary rounded-pill px-4 py-3 fw-bold text-uppercase shadow-sm"
                style="background: var(--theme-primary, #0284c7); border-color: #ffffffff; font-size: 13.5px; letter-spacing: 0.5px;">
                <i class="fa-solid fa-calendar-check me-2"></i> Request Plant Inspection
            </a>
            <a href="tel:+91 8975766459" class="btn btn-outline-light rounded-pill px-4 py-3 fw-bold text-uppercase"
                style="font-size: 13.5px; letter-spacing: 0.5px;">
                <i class="fa-solid fa-phone me-2"></i> Call Technical Desk: 
            </a>
        </div>
    </div>
</section>

<!-- ============================================================
     9. Interactive Document Viewer Modal (PDF & Images)
     ============================================================ -->
<div class="modal fade" id="rdsoDocModal" tabindex="-1" aria-labelledby="rdsoDocModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content border-0 shadow-lg" style="border-radius: 18px; overflow: hidden;">
            <div class="modal-header bg-dark text-white px-4 py-3 border-bottom d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center gap-2">
                    <i class="fa-solid fa-file-shield text-primary fs-5" id="rdsoModalIcon"></i>
                    <h5 class="modal-title fw-bold text-white mb-0" id="rdsoDocModalLabel" style="font-family: 'Oswald', sans-serif; font-size: 18px; letter-spacing: 0.5px;">
                        Document Viewer
                    </h5>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <button type="button" class="btn btn-light btn-sm rounded-circle p-2 d-flex align-items-center justify-content-center" data-bs-dismiss="modal" aria-label="Close" style="width: 32px; height: 32px;">
                        <i class="fa-solid fa-xmark text-dark fs-6"></i>
                    </button>
                </div>
            </div>

            <div class="modal-body p-0 position-relative" style="background: #0f172a; min-height: 540px;">
                <!-- Loader -->
                <div id="rdsoModalLoader" class="position-absolute top-50 start-50 translate-middle text-center py-5">
                    <div class="spinner-border text-primary mb-2" role="status" style="width: 3rem; height: 3rem;">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <p class="text-white-50 small mb-0">Loading document preview...</p>
                </div>

                <!-- PDF Canvas Viewer Container (Protected View-Only, No Browser Context Menu) -->
                <div id="rdsoModalCanvasWrap" class="p-3" style="display: none; height: 78vh; min-height: 520px; overflow-y: auto; background: #0f172a; -webkit-overflow-scrolling: touch;" oncontextmenu="return false;"></div>

                <!-- Iframe for PDFs (Fallback) -->
                <iframe id="rdsoModalIframe" src="" style="width: 100%; height: 78vh; border: none; display: none; background: #fff;" allowfullscreen></iframe>

                <!-- Image Wrapper for JPG/PNG -->
                <div id="rdsoModalImgWrap" class="p-2 p-md-3" style="display: none; height: 78vh; min-height: 520px; overflow-y: auto; background: #0f172a; align-items: center; justify-content: center;" oncontextmenu="return false;">
                    <img id="rdsoModalImage" src="" alt="Certificate Image" style="max-height: 74vh; max-width: 95%; width: auto; height: auto; object-fit: contain; box-shadow: 0 10px 30px rgba(0,0,0,0.5); border-radius: 8px; background: #fff; margin: auto; display: block;" oncontextmenu="return false;" ondragstart="return false;">
                </div>
            </div>

            <div class="modal-footer bg-white px-4 py-3 border-top d-flex justify-content-between align-items-center">
                <span class="text-muted small">
                    <i class="fa-solid fa-circle-check text-primary me-1"></i> Verified Official Record &bull; Polymer Products (Nashik)
                </span>
                <button type="button" class="btn btn-dark btn-sm rounded-pill px-4 fw-bold" data-bs-dismiss="modal">Close Viewer</button>
            </div>
        </div>
    </div>
</div>

<!-- PDF.js Library for View-Only Protected PDF Rendering -->
<script src="assets/js/pdf.min.js"></script>
<script>
if (typeof pdfjsLib !== 'undefined') {
    pdfjsLib.GlobalWorkerOptions.workerSrc = 'assets/js/pdf.worker.min.js';
}

document.addEventListener('DOMContentLoaded', function () {
    // Modal Preview Handler (View-Only Mode)
    const modalEl = document.getElementById('rdsoDocModal');
    if (modalEl) {
        const modalTitle = document.getElementById('rdsoDocModalLabel');
        const modalIframe = document.getElementById('rdsoModalIframe');
        const modalCanvasWrap = document.getElementById('rdsoModalCanvasWrap');
        const modalImgWrap = document.getElementById('rdsoModalImgWrap');
        const modalImage = document.getElementById('rdsoModalImage');
        const modalLoader = document.getElementById('rdsoModalLoader');

        let currentRenderTasks = [];

        function cleanModal() {
            currentRenderTasks.forEach(t => { try { t.cancel(); } catch (e) {} });
            currentRenderTasks = [];

            if (modalCanvasWrap) modalCanvasWrap.innerHTML = '';
            if (modalCanvasWrap) modalCanvasWrap.style.display = 'none';
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

        modalEl.addEventListener('hidden.bs.modal', function () {
            cleanModal();
        });

        // Secure PDF Renderer via HTML5 Canvas (Eliminates Browser PDF Plugin & "Save as...")
        async function renderSecurePdf(url) {
            currentRenderTasks.forEach(t => { try { t.cancel(); } catch (e) {} });
            currentRenderTasks = [];

            modalCanvasWrap.innerHTML = '';
            modalLoader.style.display = 'block';
            modalCanvasWrap.style.display = 'none';
            modalIframe.style.display = 'none';
            modalImgWrap.style.display = 'none';

            if (typeof pdfjsLib === 'undefined') {
                modalIframe.src = url + '#toolbar=0&navpanes=0';
                modalIframe.onload = function () {
                    modalLoader.style.display = 'none';
                    modalIframe.style.display = 'block';
                };
                return;
            }

            try {
                const loadingTask = pdfjsLib.getDocument({
                    url: url,
                    cMapUrl: 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/cmaps/',
                    cMapPacked: true
                });
                const pdf = await loadingTask.promise;

                modalLoader.style.display = 'none';
                modalCanvasWrap.style.display = 'block';

                const containerWidth = Math.min(modalCanvasWrap.clientWidth || 880, 960);

                for (let pageNum = 1; pageNum <= pdf.numPages; pageNum++) {
                    const page = await pdf.getPage(pageNum);
                    const unscaledViewport = page.getViewport({ scale: 1 });
                    
                    const targetWidth = containerWidth - 28;
                    const displayScale = Math.max(targetWidth / unscaledViewport.width, 0.95);
                    const renderScale = displayScale * (window.devicePixelRatio || 1.5);
                    
                    const viewport = page.getViewport({ scale: renderScale });
                    const displayViewport = page.getViewport({ scale: displayScale });

                    const canvas = document.createElement('canvas');
                    canvas.className = 'pdf-page-canvas shadow-lg mb-3';
                    canvas.style.display = 'block';
                    canvas.style.margin = '0 auto 16px auto';
                    canvas.style.maxWidth = '100%';
                    canvas.style.width = displayViewport.width + 'px';
                    canvas.style.height = displayViewport.height + 'px';
                    canvas.style.borderRadius = '6px';
                    canvas.style.background = '#ffffff';
                    canvas.oncontextmenu = function (e) { e.preventDefault(); return false; };

                    const context = canvas.getContext('2d');
                    canvas.width = viewport.width;
                    canvas.height = viewport.height;

                    modalCanvasWrap.appendChild(canvas);

                    const renderTask = page.render({
                        canvasContext: context,
                        viewport: viewport
                    });
                    currentRenderTasks.push(renderTask);
                    await renderTask.promise;
                }
            } catch (err) {
                if (err && err.name === 'RenderingCancelledException') return;
                console.warn('PDF.js rendering fallback to iframe:', err);
                modalIframe.src = url + '#toolbar=0&navpanes=0';
                modalIframe.onload = function () {
                    modalLoader.style.display = 'none';
                    modalIframe.style.display = 'block';
                };
            }
        }

        document.querySelectorAll('.open-rdso-modal').forEach(function (btn) {
            btn.addEventListener('click', function (e) {
                e.preventDefault();

                const url = this.getAttribute('data-doc-url');
                const title = this.getAttribute('data-doc-title') || 'Document Preview';
                const type = this.getAttribute('data-doc-type') || (url.toLowerCase().match(/\.(png|jpg|jpeg|webp)$/) ? 'image' : 'pdf');

                modalTitle.textContent = title;
                modalLoader.style.display = 'block';
                modalIframe.style.display = 'none';
                modalCanvasWrap.style.display = 'none';
                modalImgWrap.style.display = 'none';

                if (typeof bootstrap !== 'undefined' && bootstrap.Modal) {
                    const bsModal = bootstrap.Modal.getOrCreateInstance(modalEl);
                    bsModal.show();
                }

                if (type === 'image') {
                    modalImage.onload = function () {
                        modalLoader.style.display = 'none';
                        modalImgWrap.style.display = 'flex';
                    };
                    modalImage.onerror = function () {
                        modalLoader.style.display = 'none';
                        modalImgWrap.innerHTML = '<div class="text-white text-center py-5">Unable to display preview. Please try again later.</div>';
                        modalImgWrap.style.display = 'flex';
                    };
                    modalImage.src = url;
                } else {
                    renderSecurePdf(url);
                }
            });
        });

        // Disable right-click context menu on modal to remove "Save as..."
        modalEl.addEventListener('contextmenu', function (e) {
            e.preventDefault();
            return false;
        }, true);

        // Disable Ctrl+S / Ctrl+P while viewing
        window.addEventListener('keydown', function (e) {
            if ((e.ctrlKey || e.metaKey) && (e.key === 's' || e.key === 'S' || e.key === 'p' || e.key === 'P')) {
                if (modalEl.classList.contains('show')) {
                    e.preventDefault();
                    return false;
                }
            }
        }, true);
    }

    // Smart Sticky Navigation: Hide on Scroll Down, Show on Scroll Up
    const navWrapper = document.querySelector('.rdso-nav-wrapper');
    if (navWrapper) {
        let lastScrollY = window.pageYOffset || document.documentElement.scrollTop;
        let isPillClicking = false;
        const scrollDelta = 8; // sensitivity threshold to prevent micro-jitter

        // Prevent hiding immediately when user clicks a navigation pill
        document.querySelectorAll('.rdso-pill-btn').forEach(btn => {
            btn.addEventListener('click', function () {
                isPillClicking = true;
                navWrapper.classList.remove('rdso-nav-hidden');
                setTimeout(() => {
                    isPillClicking = false;
                    lastScrollY = window.pageYOffset || document.documentElement.scrollTop;
                }, 800);
            });
        });

        window.addEventListener('scroll', function () {
            if (isPillClicking) return;

            const currentScrollY = window.pageYOffset || document.documentElement.scrollTop;

            // When near the top of the page, always keep the bar fully visible
            if (currentScrollY <= 380) {
                navWrapper.classList.remove('rdso-nav-hidden');
                lastScrollY = currentScrollY;
                return;
            }

            // Detect scroll direction beyond threshold
            if (Math.abs(currentScrollY - lastScrollY) > scrollDelta) {
                if (currentScrollY > lastScrollY) {
                    // Scrolling DOWN -> Hide smoothly
                    navWrapper.classList.add('rdso-nav-hidden');
                } else {
                    // Scrolling UP (top side) -> Show smoothly
                    navWrapper.classList.remove('rdso-nav-hidden');
                }
                lastScrollY = currentScrollY;
            }
        }, { passive: true });
    }

    // Active Pill Scrollspy Highlight
    const navPills = document.querySelectorAll('.rdso-pill-btn');
    const sections = Array.from(navPills).map(pill => {
        const id = pill.getAttribute('href');
        return document.querySelector(id);
    });

    window.addEventListener('scroll', function () {
        const scrollPos = window.scrollY + 180;
        sections.forEach((section, index) => {
            if (section) {
                const top = section.offsetTop;
                const height = section.offsetHeight;
                if (scrollPos >= top && scrollPos < top + height) {
                    navPills.forEach(p => p.classList.remove('active'));
                    if (navPills[index]) {
                        navPills[index].classList.add('active');
                    }
                }
            }
        });
    });
});
</script>

<?php include_once 'partials/footer.php'; ?>