<?php
/**
 * Asian HealthFit Blood Test Packages & Total Tests
 * DM Healthcare x Asian Labs Doorstep Diagnostics
 */

$display_title = "HealthFit Blood Test Packages";
$seo_title = "Asian HealthFit Total Test Packages at Home - 75 to 100 Tests - DM Healthcare";
$seo_desc = "Book Asian HealthFit Blood Test Packages at Home across Delhi NCR. 75 to 100 tests starting at ₹999. Includes free home sample collection and free specialist doctor consultation.";
$short_desc = "Comprehensive full-body HealthFit test packages from 75 to 100 tests. Free doorstep blood collection across Delhi, Noida, Faridabad, Gurugram & Palwal.";
$category_name = "Blood Checkup";
$full_page_override = true; // Use custom full-page design without generic nursing CMS layout

$frontend_custom_sections = '
<style>
:root {
    --primary-red: #e5252a;
    --primary-red-hover: #c8102e;
    --dark-navy: #0f172a;
    --slate-gray: #334155;
    --muted-gray: #64748b;
    --light-bg: #f8fafc;
    --card-border: rgba(226, 232, 240, 0.9);
}

/* Hero Section */
.hf-hero-wrap {
    background: radial-gradient(circle at top right, rgba(229, 37, 42, 0.08) 0%, transparent 60%),
                radial-gradient(circle at bottom left, rgba(13, 110, 253, 0.05) 0%, transparent 50%),
                linear-gradient(135deg, #ffffff 0%, #f1f5f9 100%);
    border-radius: 28px;
    padding: 45px 35px;
    border: 1px solid var(--card-border);
    box-shadow: 0 10px 30px rgba(15, 23, 42, 0.04);
    margin-bottom: 40px;
    position: relative;
    overflow: hidden;
}
@media (max-width: 768px) {
    .hf-hero-wrap { padding: 30px 20px; border-radius: 20px; }
}

.hf-pulse-dot {
    display: inline-block;
    width: 9px;
    height: 9px;
    border-radius: 50%;
    background-color: var(--primary-red);
    box-shadow: 0 0 0 0 rgba(229, 37, 42, 0.7);
    animation: hfPulse 2s infinite;
}
@keyframes hfPulse {
    0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(229, 37, 42, 0.7); }
    70% { transform: scale(1); box-shadow: 0 0 0 8px rgba(229, 37, 42, 0); }
    100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(229, 37, 42, 0); }
}

/* Metric mini cards */
.hf-stat-badge {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 14px 16px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.02);
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 12px;
}
.hf-stat-badge:hover {
    transform: translateY(-3px);
    border-color: var(--primary-red);
    box-shadow: 0 8px 20px rgba(229, 37, 42, 0.08);
}

/* Filter Nav */
.hf-filter-btn {
    border: 1.5px solid #e2e8f0;
    background: #ffffff;
    color: #475569;
    font-weight: 600;
    padding: 8px 20px;
    border-radius: 30px;
    font-size: 0.9rem;
    transition: all 0.25s ease;
    cursor: pointer;
}
.hf-filter-btn:hover, .hf-filter-btn.active {
    background: var(--primary-red);
    color: #ffffff;
    border-color: var(--primary-red);
    box-shadow: 0 4px 12px rgba(229, 37, 42, 0.25);
}

/* HealthFit Package Cards */
.hf-pkg-card {
    background: #ffffff;
    border-radius: 24px;
    border: 1px solid var(--card-border);
    box-shadow: 0 8px 25px rgba(15, 23, 42, 0.04);
    transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1);
    position: relative;
    overflow: hidden;
    height: 100%;
    display: flex;
    flex-direction: column;
}
.hf-pkg-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 18px 40px rgba(15, 23, 42, 0.1);
    border-color: rgba(229, 37, 42, 0.3);
}

.hf-pkg-header {
    padding: 24px 24px 18px 24px;
    position: relative;
    border-bottom: 1px dashed #e2e8f0;
}
.hf-header-bronze { background: linear-gradient(135deg, #fffbeb 0%, #fef3c7 100%); }
.hf-header-silver { background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%); }
.hf-header-gold   { background: linear-gradient(135deg, #fff7ed 0%, #ffedd5 100%); }
.hf-header-plat-m { background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%); }
.hf-header-plat-f { background: linear-gradient(135deg, #fdf2f8 0%, #fce7f3 100%); }
.hf-header-saph-m { background: linear-gradient(135deg, #eff6ff 0%, #dbeafe 100%); }
.hf-header-saph-f { background: linear-gradient(135deg, #faf5ff 0%, #f3e8ff 100%); }

.hf-tests-pill {
    font-size: 0.82rem;
    font-weight: 800;
    padding: 5px 14px;
    border-radius: 30px;
    letter-spacing: 0.5px;
    display: inline-flex;
    align-items: center;
    gap: 5px;
}
.hf-pill-bronze { background: #d97706; color: white; }
.hf-pill-silver { background: #64748b; color: white; }
.hf-pill-gold   { background: #b45309; color: white; }
.hf-pill-plat-m { background: #059669; color: white; }
.hf-pill-plat-f { background: #db2777; color: white; }
.hf-pill-saph-m { background: #2563eb; color: white; }
.hf-pill-saph-f { background: #7c3aed; color: white; }

.hf-pkg-body {
    padding: 24px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
}

.hf-param-tag {
    display: inline-block;
    background: #f1f5f9;
    color: #334155;
    font-size: 0.74rem;
    font-weight: 600;
    padding: 4px 10px;
    border-radius: 6px;
    margin: 3px 2px;
    border: 1px solid #e2e8f0;
}

.hf-benefit-row {
    font-size: 0.85rem;
    color: #475569;
    margin-bottom: 8px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.hf-btn-whatsapp {
    background: #25d366;
    color: white !important;
    border: none;
    font-weight: 700;
    transition: all 0.25s ease;
}
.hf-btn-whatsapp:hover {
    background: #20bd5a;
    box-shadow: 0 4px 14px rgba(37, 211, 102, 0.35);
    transform: translateY(-1px);
}

.hf-btn-book {
    background: var(--primary-red);
    color: white !important;
    border: none;
    font-weight: 700;
    transition: all 0.25s ease;
}
.hf-btn-book:hover {
    background: var(--primary-red-hover);
    box-shadow: 0 4px 14px rgba(229, 37, 42, 0.35);
    transform: translateY(-1px);
}

/* Modal styling */
.modal-content {
    border-radius: 20px;
    border: none;
    box-shadow: 0 25px 50px rgba(0,0,0,0.15);
}
</style>

<div class="container py-4">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="mb-3">
        <ol class="breadcrumb mb-0 py-2 small">
            <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none text-muted"><i class="fa-solid fa-house me-1"></i> Home</a></li>
            <li class="breadcrumb-item text-muted">Diagnostics</li>
            <li class="breadcrumb-item text-danger fw-bold" aria-current="page">HealthFit Blood Test Packages</li>
        </ol>
    </nav>

    <!-- 1. HERO SECTION -->
    <div class="hf-hero-wrap">
        <div class="row align-items-center g-4">
            <div class="col-lg-8">
                <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill fw-bold mb-3 shadow-xs" style="background: rgba(229, 37, 42, 0.08); border: 1px solid rgba(229, 37, 42, 0.2); color: var(--primary-red); font-size: 0.82rem; letter-spacing: 0.5px;">
                    <span class="hf-pulse-dot"></span>
                    <span>DOORSTEP PATHOLOGY & NABL LAB TESTS</span>
                </div>

                <h1 class="fw-bolder text-dark display-6 mb-3" style="letter-spacing: -0.5px;">
                    Asian HealthFit <span style="color: var(--primary-red);">Full-Body Checkup</span> Packages
                </h1>

                <p class="text-muted fs-6 mb-4" style="line-height: 1.7; max-width: 720px;">
                    From essential metabolic screenings (75 tests) to comprehensive organ, hormonal, vitamin and cancer marker evaluations (100 tests). DM Healthcare in certified partnership with <strong>Asian Labs</strong> brings painless, hygienic doorstep sample collection directly to your living room across Delhi NCR.
                </p>

                <!-- Quick Stats Grid -->
                <div class="row g-2 g-sm-3 mb-4">
                    <div class="col-6 col-sm-3">
                        <div class="hf-stat-badge">
                            <i class="fa-solid fa-motorcycle fs-4 text-danger"></i>
                            <div>
                                <h6 class="fw-bold mb-0 text-dark" style="font-size: 0.9rem;">Free Home</h6>
                                <small class="text-muted" style="font-size: 0.75rem;">Sample Pickup</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="hf-stat-badge">
                            <i class="fa-solid fa-certificate fs-4 text-success"></i>
                            <div>
                                <h6 class="fw-bold mb-0 text-dark" style="font-size: 0.9rem;">100% NABL</h6>
                                <small class="text-muted" style="font-size: 0.75rem;">Certified Labs</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="hf-stat-badge">
                            <i class="fa-solid fa-clock fs-4 text-primary"></i>
                            <div>
                                <h6 class="fw-bold mb-0 text-dark" style="font-size: 0.9rem;">12-24 Hours</h6>
                                <small class="text-muted" style="font-size: 0.75rem;">Digital Reports</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="hf-stat-badge">
                            <i class="fa-solid fa-user-doctor fs-4 text-warning"></i>
                            <div>
                                <h6 class="fw-bold mb-0 text-dark" style="font-size: 0.9rem;">Free Doctor</h6>
                                <small class="text-muted" style="font-size: 0.75rem;">Consultation*</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-wrap align-items-center gap-3">
                    <a href="tel:+918860600423" class="btn btn-danger rounded-pill px-4 py-2 fw-bold shadow-sm d-inline-flex align-items-center gap-2" style="background: var(--primary-red); border: none;">
                        <i class="fa-solid fa-phone"></i> Call: +91-8860600423
                    </a>
                    <a href="https://wa.me/918860600423?text=Hi%20DM%20Healthcare,%20I%20want%20to%20book%20a%20HealthFit%20Blood%20Test%20Package%20at%20Home." target="_blank" class="btn btn-outline-success rounded-pill px-4 py-2 fw-bold shadow-sm d-inline-flex align-items-center gap-2">
                        <i class="fa-brands fa-whatsapp fs-5"></i> Book via WhatsApp
                    </a>
                    <span class="text-muted small fw-semibold"><i class="fa-solid fa-shield-check text-success me-1"></i> Zero Hidden Fees</span>
                </div>
            </div>

            <div class="col-lg-4 text-center">
                <div class="bg-white p-4 rounded-4 shadow-sm border text-start position-relative">
                    <span class="badge bg-danger rounded-pill px-3 py-1 mb-2 fw-bold" style="background: var(--primary-red) !important; font-size: 0.75rem;">ASIAN LABS PARTNER</span>
                    <h5 class="fw-bold text-dark mb-1">Instant Sample Collection</h5>
                    <p class="text-muted small mb-3">Trained phlebotomist dispatched to your location with ice-pack vacutainers.</p>
                    
                    <ul class="list-unstyled mb-3 small text-muted">
                        <li class="mb-2"><i class="fa-solid fa-check text-danger me-2"></i> Sterile, sealed needle sets & vacutainers</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-danger me-2"></i> Same-day early morning fasting slots</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-danger me-2"></i> Direct PDF report on WhatsApp & Email</li>
                    </ul>
                    
                    <div class="p-2 rounded-3 text-center" style="background: #f8fafc; border: 1px dashed #cbd5e1;">
                        <small class="text-muted d-block">Rapid 24/7 Diagnostics Desk</small>
                        <span class="fw-bold text-dark fs-5">+91-8860600423</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 2. FILTER TABS -->
    <div class="text-center mb-4">
        <span class="text-uppercase fw-bold px-3 py-1 rounded-pill small" style="background: rgba(229, 37, 42, 0.08); color: var(--primary-red); letter-spacing: 1.5px;">All 7 HealthFit Plans</span>
        <h2 class="fw-bold text-dark mt-2 mb-3">Choose Your HealthFit Package</h2>
        <p class="text-muted mx-auto" style="max-width: 650px;">Select from our standard or specialized packages tailored for complete organ function, nutritional levels, cancer screenings, and gender-specific requirements.</p>

        <div class="d-flex flex-wrap justify-content-center gap-2 mt-3" id="hfFilterGroup">
            <button class="hf-filter-btn active" onclick="filterPackages(\'all\', this)">All Packages (7)</button>
            <button class="hf-filter-btn" onclick="filterPackages(\'essential\', this)">Bronze & Silver (75-86 Tests)</button>
            <button class="hf-filter-btn" onclick="filterPackages(\'gold\', this)">Gold (92 Tests)</button>
            <button class="hf-filter-btn" onclick="filterPackages(\'male\', this)">For Men (Platinum & Sapphire)</button>
            <button class="hf-filter-btn" onclick="filterPackages(\'female\', this)">For Women (Platinum & Sapphire)</button>
        </div>
    </div>

    <!-- 3. PACKAGE CARDS GRID -->
    <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-3" id="hfPackagesContainer">
        
        <!-- 1. HEALTHFIT BRONZE (75 TESTS) -->
        <div class="col hf-pkg-item" data-category="essential">
            <div class="hf-pkg-card">
                <div class="hf-pkg-header hf-header-bronze">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <span class="hf-tests-pill hf-pill-bronze"><i class="fa-solid fa-vial"></i> 75 Tests</span>
                        <span class="badge bg-dark bg-opacity-75 text-white rounded-pill px-2 py-1 small">PKS321J</span>
                    </div>
                    <h4 class="fw-bold text-dark mb-1">Asian HealthFit Bronze</h4>
                    <p class="text-muted small mb-0">Essential routine health & vital organ screening</p>
                </div>
                <div class="hf-pkg-body">
                    <div class="d-flex align-items-baseline gap-2 mb-3">
                        <h2 class="fw-bold text-dark mb-0">₹999</h2>
                        <span class="text-muted text-decoration-line-through small">₹5,014</span>
                        <span class="badge bg-danger bg-opacity-10 text-danger fw-bold rounded-pill ms-auto">Save 80%</span>
                    </div>

                    <div class="mb-3">
                        <div class="hf-benefit-row"><i class="fa-solid fa-circle-check text-success"></i> Free Home Sample Collection</div>
                        <div class="hf-benefit-row"><i class="fa-solid fa-circle-check text-success"></i> PHC Specialist Doctor Consultation Free*</div>
                        <div class="hf-benefit-row"><i class="fa-solid fa-circle-check text-success"></i> Digital Report Delivery in 12-24 Hours</div>
                    </div>

                    <h6 class="fw-bold text-dark small mb-2 text-uppercase" style="letter-spacing: 0.5px;">Key Parameters Included:</h6>
                    <div class="mb-4">
                        <span class="hf-param-tag">Sugar Fasting</span>
                        <span class="hf-param-tag">TSH (Thyroid)</span>
                        <span class="hf-param-tag">Lipid Profile Screening</span>
                        <span class="hf-param-tag">LFT (Liver Function)</span>
                        <span class="hf-param-tag">KFT (Kidney Function)</span>
                        <span class="hf-param-tag">HbA1c</span>
                        <span class="hf-param-tag">Urine R/E</span>
                        <span class="hf-param-tag">CBC (Complete Blood Count)</span>
                    </div>

                    <div class="mt-auto pt-3 border-top d-flex gap-2">
                        <a href="https://wa.me/918860600423?text=Hi%20DM%20Healthcare,%20I%20want%20to%20book%20Asian%20HealthFit%20Bronze%20(75%20Tests%20at%20Rs.999,%20Code:%20PKS321J)." target="_blank" class="btn hf-btn-whatsapp btn-sm rounded-pill w-50 py-2">
                            <i class="fa-brands fa-whatsapp me-1"></i> WhatsApp
                        </a>
                        <button onclick="openBookingModal(\'Asian HealthFit Bronze (75 Tests)\', \'₹999\', \'PKS321J\')" class="btn hf-btn-book btn-sm rounded-pill w-50 py-2">
                            Book Now
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2. HEALTHFIT SILVER (86 TESTS) -->
        <div class="col hf-pkg-item" data-category="essential">
            <div class="hf-pkg-card">
                <div class="hf-pkg-header hf-header-silver">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <span class="hf-tests-pill hf-pill-silver"><i class="fa-solid fa-vial"></i> 86 Tests</span>
                        <span class="badge bg-dark bg-opacity-75 text-white rounded-pill px-2 py-1 small">PKS321K</span>
                    </div>
                    <h4 class="fw-bold text-dark mb-1">Asian HealthFit Silver</h4>
                    <p class="text-muted small mb-0">Includes Vitamin D, B12 & Iron Profile</p>
                </div>
                <div class="hf-pkg-body">
                    <div class="d-flex align-items-baseline gap-2 mb-3">
                        <h2 class="fw-bold text-dark mb-0">₹1,999</h2>
                        <span class="text-muted text-decoration-line-through small">₹9,499</span>
                        <span class="badge bg-danger bg-opacity-10 text-danger fw-bold rounded-pill ms-auto">Save 79%</span>
                    </div>

                    <div class="mb-3">
                        <div class="hf-benefit-row"><i class="fa-solid fa-circle-check text-success"></i> Free Home Sample Collection</div>
                        <div class="hf-benefit-row"><i class="fa-solid fa-circle-check text-success"></i> PHC Specialist Doctor Consultation Free*</div>
                        <div class="hf-benefit-row"><i class="fa-solid fa-circle-check text-success"></i> Bone & Muscle Health Screening</div>
                    </div>

                    <h6 class="fw-bold text-dark small mb-2 text-uppercase" style="letter-spacing: 0.5px;">Key Parameters Included:</h6>
                    <div class="mb-4">
                        <span class="hf-param-tag" style="background:#fee2e2; color:#991b1b;">Vitamin D (25-OH)</span>
                        <span class="hf-param-tag" style="background:#fee2e2; color:#991b1b;">Vitamin B12</span>
                        <span class="hf-param-tag">Iron Studies</span>
                        <span class="hf-param-tag">Thyroid Profile (T3, T4, TSH)</span>
                        <span class="hf-param-tag">Lipid Profile Screening</span>
                        <span class="hf-param-tag">LFT & KFT</span>
                        <span class="hf-param-tag">Calcium & Phosphorus</span>
                        <span class="hf-param-tag">HbA1c & Sugar Fasting</span>
                        <span class="hf-param-tag">Hemogram (CBC)</span>
                        <span class="hf-param-tag">Urine Routine & Microscopic</span>
                    </div>

                    <div class="mt-auto pt-3 border-top d-flex gap-2">
                        <a href="https://wa.me/918860600423?text=Hi%20DM%20Healthcare,%20I%20want%20to%20book%20Asian%20HealthFit%20Silver%20(86%20Tests%20at%20Rs.1999,%20Code:%20PKS321K)." target="_blank" class="btn hf-btn-whatsapp btn-sm rounded-pill w-50 py-2">
                            <i class="fa-brands fa-whatsapp me-1"></i> WhatsApp
                        </a>
                        <button onclick="openBookingModal(\'Asian HealthFit Silver (86 Tests)\', \'₹1,999\', \'PKS321K\')" class="btn hf-btn-book btn-sm rounded-pill w-50 py-2">
                            Book Now
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- 3. HEALTHFIT GOLD (92 TESTS) -->
        <div class="col hf-pkg-item" data-category="gold">
            <div class="hf-pkg-card" style="border: 2px solid #f59e0b;">
                <div class="hf-pkg-header hf-header-gold">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <span class="hf-tests-pill hf-pill-gold"><i class="fa-solid fa-crown"></i> 92 Tests (Popular)</span>
                        <span class="badge bg-dark bg-opacity-75 text-white rounded-pill px-2 py-1 small">PKS321L</span>
                    </div>
                    <h4 class="fw-bold text-dark mb-1">Asian HealthFit Gold</h4>
                    <p class="text-muted small mb-0">Detailed evaluation with Cardiac & Pancreatic markers</p>
                </div>
                <div class="hf-pkg-body">
                    <div class="d-flex align-items-baseline gap-2 mb-3">
                        <h2 class="fw-bold text-dark mb-0">₹2,999</h2>
                        <span class="text-muted text-decoration-line-through small">₹12,788</span>
                        <span class="badge bg-danger bg-opacity-10 text-danger fw-bold rounded-pill ms-auto">Save 77%</span>
                    </div>

                    <div class="mb-3">
                        <div class="hf-benefit-row"><i class="fa-solid fa-circle-check text-success"></i> Free Home Sample Collection</div>
                        <div class="hf-benefit-row"><i class="fa-solid fa-circle-check text-success"></i> PHC Specialist Doctor Consultation Free*</div>
                        <div class="hf-benefit-row"><i class="fa-solid fa-circle-check text-success"></i> Pancreatic Enzymes & Cardiac Markers</div>
                    </div>

                    <h6 class="fw-bold text-dark small mb-2 text-uppercase" style="letter-spacing: 0.5px;">Key Parameters Included:</h6>
                    <div class="mb-4">
                        <span class="hf-param-tag" style="background:#fef3c7; color:#92400e;">HS-CRP (Heart Inflammation)</span>
                        <span class="hf-param-tag" style="background:#fef3c7; color:#92400e;">Apo A1 & Apo B</span>
                        <span class="hf-param-tag" style="background:#fef3c7; color:#92400e;">Ferritin & Folate</span>
                        <span class="hf-param-tag">RA Factor (Rheumatoid)</span>
                        <span class="hf-param-tag">Amylase & Lipase</span>
                        <span class="hf-param-tag">Vitamin D & Vitamin B12</span>
                        <span class="hf-param-tag">Thyroid, LFT, KFT</span>
                        <span class="hf-param-tag">Calcium & Phosphorus</span>
                        <span class="hf-param-tag">HbA1c & Fasting Glucose</span>
                        <span class="hf-param-tag">Complete Hemogram</span>
                    </div>

                    <div class="mt-auto pt-3 border-top d-flex gap-2">
                        <a href="https://wa.me/918860600423?text=Hi%20DM%20Healthcare,%20I%20want%20to%20book%20Asian%20HealthFit%20Gold%20(92%20Tests%20at%20Rs.2999,%20Code:%20PKS321L)." target="_blank" class="btn hf-btn-whatsapp btn-sm rounded-pill w-50 py-2">
                            <i class="fa-brands fa-whatsapp me-1"></i> WhatsApp
                        </a>
                        <button onclick="openBookingModal(\'Asian HealthFit Gold (92 Tests)\', \'₹2,999\', \'PKS321L\')" class="btn hf-btn-book btn-sm rounded-pill w-50 py-2">
                            Book Now
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- 4. HEALTHFIT PLATINUM - MALE (96 TESTS) -->
        <div class="col hf-pkg-item" data-category="male">
            <div class="hf-pkg-card">
                <div class="hf-pkg-header hf-header-plat-m">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <span class="hf-tests-pill hf-pill-plat-m"><i class="fa-solid fa-mars"></i> 96 Tests (Male)</span>
                        <span class="badge bg-dark bg-opacity-75 text-white rounded-pill px-2 py-1 small">PKS321M</span>
                    </div>
                    <h4 class="fw-bold text-dark mb-1">HealthFit Platinum - Male</h4>
                    <p class="text-muted small mb-0">Includes PSA (Prostate) & CEA Cancer Marker</p>
                </div>
                <div class="hf-pkg-body">
                    <div class="d-flex align-items-baseline gap-2 mb-3">
                        <h2 class="fw-bold text-dark mb-0">₹3,999</h2>
                        <span class="text-muted text-decoration-line-through small">₹15,048</span>
                        <span class="badge bg-danger bg-opacity-10 text-danger fw-bold rounded-pill ms-auto">Save 73%</span>
                    </div>

                    <div class="mb-3">
                        <div class="hf-benefit-row"><i class="fa-solid fa-circle-check text-success"></i> Free Home Sample Collection (Blood & Urine)</div>
                        <div class="hf-benefit-row"><i class="fa-solid fa-circle-check text-success"></i> PHC Specialist Doctor Consultation Free*</div>
                        <div class="hf-benefit-row"><i class="fa-solid fa-circle-check text-success"></i> Prostate Health & GI Tumor Screening</div>
                    </div>

                    <h6 class="fw-bold text-dark small mb-2 text-uppercase" style="letter-spacing: 0.5px;">Key Parameters Included:</h6>
                    <div class="mb-4">
                        <span class="hf-param-tag" style="background:#dcfce7; color:#166534; font-weight: 700;">PSA (Prostate Specific Antigen)</span>
                        <span class="hf-param-tag" style="background:#dcfce7; color:#166534; font-weight: 700;">CEA (Tumor Marker)</span>
                        <span class="hf-param-tag">Magnesium</span>
                        <span class="hf-param-tag">Vitamin D & Vitamin B12</span>
                        <span class="hf-param-tag">Ferritin & Folate</span>
                        <span class="hf-param-tag">Apo A1 & Apo B</span>
                        <span class="hf-param-tag">HS-CRP & RA Factor</span>
                        <span class="hf-param-tag">Lipase & Amylase</span>
                        <span class="hf-param-tag">Thyroid, LFT, KFT, Lipid</span>
                        <span class="hf-param-tag">HbA1c & CBC</span>
                    </div>

                    <div class="mt-auto pt-3 border-top d-flex gap-2">
                        <a href="https://wa.me/918860600423?text=Hi%20DM%20Healthcare,%20I%20want%20to%20book%20HealthFit%20Platinum%20Male%20(96%20Tests%20at%20Rs.3999,%20Code:%20PKS321M)." target="_blank" class="btn hf-btn-whatsapp btn-sm rounded-pill w-50 py-2">
                            <i class="fa-brands fa-whatsapp me-1"></i> WhatsApp
                        </a>
                        <button onclick="openBookingModal(\'HealthFit Platinum Male (96 Tests)\', \'₹3,999\', \'PKS321M\')" class="btn hf-btn-book btn-sm rounded-pill w-50 py-2">
                            Book Now
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- 5. HEALTHFIT PLATINUM - FEMALE (95 TESTS) -->
        <div class="col hf-pkg-item" data-category="female">
            <div class="hf-pkg-card">
                <div class="hf-pkg-header hf-header-plat-f">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <span class="hf-tests-pill hf-pill-plat-f"><i class="fa-solid fa-venus"></i> 95 Tests (Female)</span>
                        <span class="badge bg-dark bg-opacity-75 text-white rounded-pill px-2 py-1 small">PKS321N</span>
                    </div>
                    <h4 class="fw-bold text-dark mb-1">HealthFit Platinum - Female</h4>
                    <p class="text-muted small mb-0">Includes CA-125 (Ovarian Marker) & CEA</p>
                </div>
                <div class="hf-pkg-body">
                    <div class="d-flex align-items-baseline gap-2 mb-3">
                        <h2 class="fw-bold text-dark mb-0">₹3,999</h2>
                        <span class="text-muted text-decoration-line-through small">₹16,326</span>
                        <span class="badge bg-danger bg-opacity-10 text-danger fw-bold rounded-pill ms-auto">Save 75%</span>
                    </div>

                    <div class="mb-3">
                        <div class="hf-benefit-row"><i class="fa-solid fa-circle-check text-success"></i> Free Home Sample Collection (Blood & Urine)</div>
                        <div class="hf-benefit-row"><i class="fa-solid fa-circle-check text-success"></i> PHC Specialist Doctor Consultation Free*</div>
                        <div class="hf-benefit-row"><i class="fa-solid fa-circle-check text-success"></i> Women Specific Health & Cancer Screening</div>
                    </div>

                    <h6 class="fw-bold text-dark small mb-2 text-uppercase" style="letter-spacing: 0.5px;">Key Parameters Included:</h6>
                    <div class="mb-4">
                        <span class="hf-param-tag" style="background:#fce7f3; color:#9d174d; font-weight: 700;">CA-125 (Ovarian Marker)</span>
                        <span class="hf-param-tag" style="background:#fce7f3; color:#9d174d; font-weight: 700;">CEA (Tumor Marker)</span>
                        <span class="hf-param-tag">Magnesium</span>
                        <span class="hf-param-tag">Vitamin D & Vitamin B12</span>
                        <span class="hf-param-tag">Ferritin & Folate</span>
                        <span class="hf-param-tag">Apo A1 & Apo B</span>
                        <span class="hf-param-tag">HS-CRP & RA Factor</span>
                        <span class="hf-param-tag">Amylase</span>
                        <span class="hf-param-tag">Thyroid Profile (T3, T4, TSH)</span>
                        <span class="hf-param-tag">LFT, KFT, Calcium, CBC</span>
                    </div>

                    <div class="mt-auto pt-3 border-top d-flex gap-2">
                        <a href="https://wa.me/918860600423?text=Hi%20DM%20Healthcare,%20I%20want%20to%20book%20HealthFit%20Platinum%20Female%20(95%20Tests%20at%20Rs.3999,%20Code:%20PKS321N)." target="_blank" class="btn hf-btn-whatsapp btn-sm rounded-pill w-50 py-2">
                            <i class="fa-brands fa-whatsapp me-1"></i> WhatsApp
                        </a>
                        <button onclick="openBookingModal(\'HealthFit Platinum Female (95 Tests)\', \'₹3,999\', \'PKS321N\')" class="btn hf-btn-book btn-sm rounded-pill w-50 py-2">
                            Book Now
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- 6. HEALTHFIT SAPPHIRE - MALE (100 TESTS) -->
        <div class="col hf-pkg-item" data-category="male">
            <div class="hf-pkg-card" style="border: 2px solid #2563eb;">
                <div class="hf-pkg-header hf-header-saph-m">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <span class="hf-tests-pill hf-pill-saph-m"><i class="fa-solid fa-gem"></i> 100 Tests (Ultimate Male)</span>
                        <span class="badge bg-dark bg-opacity-75 text-white rounded-pill px-2 py-1 small">PKS321O</span>
                    </div>
                    <h4 class="fw-bold text-dark mb-1">HealthFit Sapphire - Male</h4>
                    <p class="text-muted small mb-0">Includes Lp(a), Cortisol, IgE, PSA & CEA</p>
                </div>
                <div class="hf-pkg-body">
                    <div class="d-flex align-items-baseline gap-2 mb-3">
                        <h2 class="fw-bold text-dark mb-0">₹4,999</h2>
                        <span class="text-muted text-decoration-line-through small">₹18,559</span>
                        <span class="badge bg-danger bg-opacity-10 text-danger fw-bold rounded-pill ms-auto">Save 73%</span>
                    </div>

                    <div class="mb-3">
                        <div class="hf-benefit-row"><i class="fa-solid fa-circle-check text-success"></i> Free Home Sample Collection (Blood & Urine)</div>
                        <div class="hf-benefit-row"><i class="fa-solid fa-circle-check text-success"></i> PHC Specialist Doctor Consultation Free*</div>
                        <div class="hf-benefit-row"><i class="fa-solid fa-circle-check text-success"></i> Stress Hormone, Allergy & Cardiac Risk</div>
                    </div>

                    <h6 class="fw-bold text-dark small mb-2 text-uppercase" style="letter-spacing: 0.5px;">Key Parameters Included:</h6>
                    <div class="mb-4">
                        <span class="hf-param-tag" style="background:#dbeafe; color:#1e40af; font-weight: 700;">Lp(a) - Lipoprotein A</span>
                        <span class="hf-param-tag" style="background:#dbeafe; color:#1e40af; font-weight: 700;">Cortisol (Stress Hormone)</span>
                        <span class="hf-param-tag" style="background:#dbeafe; color:#1e40af; font-weight: 700;">Immunoglobulin IgE (Allergy)</span>
                        <span class="hf-param-tag">PSA & CEA Markers</span>
                        <span class="hf-param-tag">Vitamin D, B12, Ferritin</span>
                        <span class="hf-param-tag">Apo A1, Apo B, HS-CRP</span>
                        <span class="hf-param-tag">RA Factor & Folate</span>
                        <span class="hf-param-tag">Amylase, Lipase, Magnesium</span>
                        <span class="hf-param-tag">Full Lipid, LFT, KFT, CBC</span>
                    </div>

                    <div class="mt-auto pt-3 border-top d-flex gap-2">
                        <a href="https://wa.me/918860600423?text=Hi%20DM%20Healthcare,%20I%20want%20to%20book%20HealthFit%20Sapphire%20Male%20(100%20Tests%20at%20Rs.4999,%20Code:%20PKS321O)." target="_blank" class="btn hf-btn-whatsapp btn-sm rounded-pill w-50 py-2">
                            <i class="fa-brands fa-whatsapp me-1"></i> WhatsApp
                        </a>
                        <button onclick="openBookingModal(\'HealthFit Sapphire Male (100 Tests)\', \'₹4,999\', \'PKS321O\')" class="btn hf-btn-book btn-sm rounded-pill w-50 py-2">
                            Book Now
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- 7. HEALTHFIT SAPPHIRE - FEMALE (100 TESTS) -->
        <div class="col hf-pkg-item" data-category="female">
            <div class="hf-pkg-card" style="border: 2px solid #7c3aed;">
                <div class="hf-pkg-header hf-header-saph-f">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <span class="hf-tests-pill hf-pill-saph-f"><i class="fa-solid fa-gem"></i> 100 Tests (Ultimate Female)</span>
                        <span class="badge bg-dark bg-opacity-75 text-white rounded-pill px-2 py-1 small">PKS321P</span>
                    </div>
                    <h4 class="fw-bold text-dark mb-1">HealthFit Sapphire - Female</h4>
                    <p class="text-muted small mb-0">Includes Lp(a), Cortisol, IgE, CA-125 & CEA</p>
                </div>
                <div class="hf-pkg-body">
                    <div class="d-flex align-items-baseline gap-2 mb-3">
                        <h2 class="fw-bold text-dark mb-0">₹4,999</h2>
                        <span class="text-muted text-decoration-line-through small">₹18,949</span>
                        <span class="badge bg-danger bg-opacity-10 text-danger fw-bold rounded-pill ms-auto">Save 74%</span>
                    </div>

                    <div class="mb-3">
                        <div class="hf-benefit-row"><i class="fa-solid fa-circle-check text-success"></i> Free Home Sample Collection (Blood & Urine)</div>
                        <div class="hf-benefit-row"><i class="fa-solid fa-circle-check text-success"></i> PHC Specialist Doctor Consultation Free*</div>
                        <div class="hf-benefit-row"><i class="fa-solid fa-circle-check text-success"></i> Comprehensive Hormonal, Stress & Cancer Profile</div>
                    </div>

                    <h6 class="fw-bold text-dark small mb-2 text-uppercase" style="letter-spacing: 0.5px;">Key Parameters Included:</h6>
                    <div class="mb-4">
                        <span class="hf-param-tag" style="background:#f3e8ff; color:#6b21a8; font-weight: 700;">CA-125 (Ovarian Marker)</span>
                        <span class="hf-param-tag" style="background:#f3e8ff; color:#6b21a8; font-weight: 700;">Lp(a) - Lipoprotein A</span>
                        <span class="hf-param-tag" style="background:#f3e8ff; color:#6b21a8; font-weight: 700;">Cortisol (Stress Hormone)</span>
                        <span class="hf-param-tag" style="background:#f3e8ff; color:#6b21a8; font-weight: 700;">Immunoglobulin IgE (Allergy)</span>
                        <span class="hf-param-tag">CEA Tumor Marker</span>
                        <span class="hf-param-tag">Vitamin D, B12, Ferritin</span>
                        <span class="hf-param-tag">Apo A1, Apo B, HS-CRP</span>
                        <span class="hf-param-tag">Amylase, Lipase, Magnesium</span>
                        <span class="hf-param-tag">Full Lipid, LFT, KFT, CBC</span>
                    </div>

                    <div class="mt-auto pt-3 border-top d-flex gap-2">
                        <a href="https://wa.me/918860600423?text=Hi%20DM%20Healthcare,%20I%20want%20to%20book%20HealthFit%20Sapphire%20Female%20(100%20Tests%20at%20Rs.4999,%20Code:%20PKS321P)." target="_blank" class="btn hf-btn-whatsapp btn-sm rounded-pill w-50 py-2">
                            <i class="fa-brands fa-whatsapp me-1"></i> WhatsApp
                        </a>
                        <button onclick="openBookingModal(\'HealthFit Sapphire Female (100 Tests)\', \'₹4,999\', \'PKS321P\')" class="btn hf-btn-book btn-sm rounded-pill w-50 py-2">
                            Book Now
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- 4. COMPARISON MATRIX -->
    <div class="mt-5 pt-4">
        <div class="text-center mb-4">
            <span class="text-uppercase fw-bold px-3 py-1 rounded-pill small" style="background: rgba(229, 37, 42, 0.08); color: var(--primary-red); letter-spacing: 1.5px;">Side-By-Side Comparison</span>
            <h3 class="fw-bold text-dark mt-2">Compare Parameters Across HealthFit Packages</h3>
        </div>

        <div class="table-responsive bg-white rounded-4 shadow-sm border p-3">
            <table class="table table-hover align-middle mb-0 text-center" style="font-size: 0.88rem;">
                <thead class="table-light">
                    <tr>
                        <th class="text-start ps-3" style="width: 28%;">Test Parameter / Organ Profile</th>
                        <th style="width: 12%;">Bronze (75)<br><span class="text-danger fw-bold">₹999</span></th>
                        <th style="width: 12%;">Silver (86)<br><span class="text-danger fw-bold">₹1,999</span></th>
                        <th style="width: 12%;">Gold (92)<br><span class="text-danger fw-bold">₹2,999</span></th>
                        <th style="width: 18%;">Platinum M/F (95-96)<br><span class="text-danger fw-bold">₹3,999</span></th>
                        <th style="width: 18%;">Sapphire M/F (100)<br><span class="text-danger fw-bold">₹4,999</span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-start ps-3 fw-semibold text-dark"><i class="fa-solid fa-droplet text-danger me-2"></i> Sugar Fasting & HbA1c</td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i></td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i></td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i></td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i></td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i></td>
                    </tr>
                    <tr>
                        <td class="text-start ps-3 fw-semibold text-dark"><i class="fa-solid fa-lungs text-primary me-2"></i> CBC (Hemogram) & Urine R/E</td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i></td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i></td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i></td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i></td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i></td>
                    </tr>
                    <tr>
                        <td class="text-start ps-3 fw-semibold text-dark"><i class="fa-solid fa-virus text-warning me-2"></i> Liver Function Test (LFT)</td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i></td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i></td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i></td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i></td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i></td>
                    </tr>
                    <tr>
                        <td class="text-start ps-3 fw-semibold text-dark"><i class="fa-solid fa-filter text-info me-2"></i> Kidney Function Test (KFT)</td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i></td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i></td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i></td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i></td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i></td>
                    </tr>
                    <tr>
                        <td class="text-start ps-3 fw-semibold text-dark"><i class="fa-solid fa-heart-pulse text-danger me-2"></i> Lipid Profile (Cholesterol)</td>
                        <td>Screening</td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i></td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i></td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i></td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i></td>
                    </tr>
                    <tr>
                        <td class="text-start ps-3 fw-semibold text-dark"><i class="fa-solid fa-dna text-purple me-2"></i> Thyroid Profile (T3, T4, TSH)</td>
                        <td>TSH only</td>
                        <td>Full Profile</td>
                        <td>Full Profile</td>
                        <td>Full Profile</td>
                        <td>Full Profile</td>
                    </tr>
                    <tr>
                        <td class="text-start ps-3 fw-semibold text-dark"><i class="fa-solid fa-sun text-warning me-2"></i> Vitamin D (25-OH) & Vitamin B12</td>
                        <td><span class="text-muted">—</span></td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i></td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i></td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i></td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i></td>
                    </tr>
                    <tr>
                        <td class="text-start ps-3 fw-semibold text-dark"><i class="fa-solid fa-bone text-secondary me-2"></i> Calcium & Phosphorus</td>
                        <td><span class="text-muted">—</span></td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i></td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i></td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i></td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i></td>
                    </tr>
                    <tr>
                        <td class="text-start ps-3 fw-semibold text-dark"><i class="fa-solid fa-heart-crack text-danger me-2"></i> HS-CRP, Apo A1 & Apo B</td>
                        <td><span class="text-muted">—</span></td>
                        <td><span class="text-muted">—</span></td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i></td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i></td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i></td>
                    </tr>
                    <tr>
                        <td class="text-start ps-3 fw-semibold text-dark"><i class="fa-solid fa-capsules text-success me-2"></i> Ferritin, Folate, RA Factor</td>
                        <td><span class="text-muted">—</span></td>
                        <td>Iron Studies</td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i></td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i></td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i></td>
                    </tr>
                    <tr>
                        <td class="text-start ps-3 fw-semibold text-dark"><i class="fa-solid fa-shield-virus text-danger me-2"></i> Cancer Markers (PSA for Men / CA-125 for Women) & CEA</td>
                        <td><span class="text-muted">—</span></td>
                        <td><span class="text-muted">—</span></td>
                        <td><span class="text-muted">—</span></td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i> (PSA or CA-125 + CEA)</td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i> (PSA or CA-125 + CEA)</td>
                    </tr>
                    <tr>
                        <td class="text-start ps-3 fw-semibold text-dark"><i class="fa-solid fa-brain text-primary me-2"></i> Advanced: Lp(a), Cortisol (Stress) & IgE (Allergy)</td>
                        <td><span class="text-muted">—</span></td>
                        <td><span class="text-muted">—</span></td>
                        <td><span class="text-muted">—</span></td>
                        <td><span class="text-muted">—</span></td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i> <strong>Full Advanced</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- 5. 3-STEP EASY PROCESS -->
    <div class="row g-4 mt-5 pt-3">
        <div class="col-md-4">
            <div class="bg-white p-4 rounded-4 shadow-sm border h-100 text-center">
                <div class="rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3 fw-bold text-white shadow" style="width: 50px; height: 50px; background: var(--primary-red);">1</div>
                <h5 class="fw-bold text-dark mb-2">Book Appointment</h5>
                <p class="text-muted small mb-0">Select your package and pick your preferred morning time slot online or over a quick phone call.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="bg-white p-4 rounded-4 shadow-sm border h-100 text-center">
                <div class="rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3 fw-bold text-white shadow" style="width: 50px; height: 50px; background: var(--dark-navy);">2</div>
                <h5 class="fw-bold text-dark mb-2">Painless Home Sample Draw</h5>
                <p class="text-muted small mb-0">Certified phlebotomist arrives with sterile, pre-sealed vacutainers and ice-cool carriers for safe transit.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="bg-white p-4 rounded-4 shadow-sm border h-100 text-center">
                <div class="rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3 fw-bold text-white shadow" style="width: 50px; height: 50px; background: #10b981;">3</div>
                <h5 class="fw-bold text-dark mb-2">Reports & Free Doctor Call</h5>
                <p class="text-muted small mb-0">NABL verified digital reports delivered via WhatsApp within 12-24 hours + complimentary doctor teleconsultation.</p>
            </div>
        </div>
    </div>

    <!-- 6. FREQUENTLY ASKED QUESTIONS (SPECIFIC TO HEALTHFIT & LAB TESTS) -->
    <div class="mt-5 pt-4">
        <div class="text-center mb-4">
            <span class="text-uppercase fw-bold px-3 py-1 rounded-pill small" style="background: rgba(229, 37, 42, 0.08); color: var(--primary-red); letter-spacing: 1.5px;">Frequently Asked Questions</span>
            <h3 class="fw-bold text-dark mt-2">HealthFit Blood Test FAQs</h3>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="accordion faq-accordion" id="hfFaqAccordion">
                    <div class="accordion-item border rounded-3 mb-3 overflow-hidden shadow-xs">
                        <h2 class="accordion-header" id="hfFaqH1">
                            <button class="accordion-button fw-bold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#hfFaqC1">
                                How do I prepare for fasting in HealthFit checkups?
                            </button>
                        </h2>
                        <div id="hfFaqC1" class="accordion-collapse collapse show" data-bs-parent="#hfFaqAccordion">
                            <div class="accordion-body text-muted small lh-base">
                                An overnight fasting of 10 to 12 hours is recommended before your blood collection. You may drink plain water, but avoid tea, coffee, milk, alcohol, or heavy meals until the sample is collected.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border rounded-3 mb-3 overflow-hidden shadow-xs">
                        <h2 class="accordion-header" id="hfFaqH2">
                            <button class="accordion-button collapsed fw-bold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#hfFaqC2">
                                Is home sample collection really 100% free across Delhi NCR?
                            </button>
                        </h2>
                        <div id="hfFaqC2" class="accordion-collapse collapse" data-bs-parent="#hfFaqAccordion">
                            <div class="accordion-body text-muted small lh-base">
                                Yes! Home sample collection is completely free with all 7 Asian HealthFit packages across Faridabad, Noida, Greater Noida, Delhi, Gurugram, and Palwal. There are no convenience charges or hidden travel fees.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border rounded-3 mb-3 overflow-hidden shadow-xs">
                        <h2 class="accordion-header" id="hfFaqH3">
                            <button class="accordion-button collapsed fw-bold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#hfFaqC3">
                                How quickly do I get my test reports?
                            </button>
                        </h2>
                        <div id="hfFaqC3" class="accordion-collapse collapse" data-bs-parent="#hfFaqAccordion">
                            <div class="accordion-body text-muted small lh-base">
                                Digital reports certified by NABL pathologists are sent directly to your registered WhatsApp number and email address within 12 to 24 hours of sample pickup.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border rounded-3 mb-3 overflow-hidden shadow-xs">
                        <h2 class="accordion-header" id="hfFaqH4">
                            <button class="accordion-button collapsed fw-bold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#hfFaqC4">
                                How does the Free Specialist Doctor Consultation work?
                            </button>
                        </h2>
                        <div id="hfFaqC4" class="accordion-collapse collapse" data-bs-parent="#hfFaqAccordion">
                            <div class="accordion-body text-muted small lh-base">
                                Once your test report is generated, our team coordinates a complimentary teleconsultation with a senior PHC physician. The doctor will review your parameters, explain any abnormal values, and provide actionable lifestyle or medication advice.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border rounded-3 overflow-hidden shadow-xs">
                        <h2 class="accordion-header" id="hfFaqH5">
                            <button class="accordion-button collapsed fw-bold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#hfFaqC5">
                                Are the samples processed in certified laboratories?
                            </button>
                        </h2>
                        <div id="hfFaqC5" class="accordion-collapse collapse" data-bs-parent="#hfFaqAccordion">
                            <div class="accordion-body text-muted small lh-base">
                                Absolutely. All samples are analyzed in automated, NABL-accredited and ICMR-recognized diagnostic central laboratories (Asian Labs network) maintaining stringent multi-level quality control.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 7. EMERGENCY & QUICK CONTACT BANNER -->
    <div class="mt-5 p-4 p-md-5 rounded-4 text-white text-center position-relative overflow-hidden shadow-lg" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); border: 1px solid rgba(255,255,255,0.1);">
        <div class="position-relative" style="z-index: 2;">
            <span class="badge bg-danger rounded-pill px-3 py-2 fw-bold mb-3" style="background: var(--primary-red) !important;">24/7 Priority Diagnostics Support</span>
            <h2 class="fw-bold mb-3">Need Immediate Home Sample Collection?</h2>
            <p class="text-white-50 mx-auto mb-4" style="max-width: 620px;">Speak directly with our diagnostic care desk to book a morning slot or customize a family screening plan across Delhi NCR.</p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="tel:+918860600423" class="btn btn-danger btn-lg rounded-pill fw-bold px-4 py-3 shadow" style="background: var(--primary-red); border: none;">
                    <i class="fa-solid fa-phone me-2"></i> Call: +91-8860600423
                </a>
                <a href="https://wa.me/918860600423?text=Hi%20DM%20Healthcare,%20I%20want%20to%20book%20a%20Blood%20Test%20Package%20at%20Home." target="_blank" class="btn btn-success btn-lg rounded-pill fw-bold px-4 py-3 shadow" style="background: #25d366; border: none;">
                    <i class="fa-brands fa-whatsapp me-2"></i> WhatsApp Booking
                </a>
            </div>
        </div>
    </div>
</div>

<!-- BOOKING MODAL -->
<div class="modal fade" id="hfBookingModal" tabindex="-1" aria-labelledby="hfBookingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-4">
            <div class="modal-header border-0 pb-0">
                <div>
                    <h5 class="modal-title fw-bold text-dark" id="hfBookingModalLabel">Book Home Sample Collection</h5>
                    <small class="text-muted">100% Free Doorstep Collection • Fast 12-24h Report</small>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-3">
                <div class="p-3 rounded-3 mb-3" style="background: #f8fafc; border: 1px dashed #cbd5e1;">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <span class="text-muted small d-block">Selected Package:</span>
                            <strong class="text-dark" id="modalPkgName">Asian HealthFit Bronze</strong>
                        </div>
                        <div class="text-end">
                            <span class="badge bg-danger rounded-pill px-3 py-1 fs-6" id="modalPkgPrice" style="background: var(--primary-red) !important;">₹999</span>
                        </div>
                    </div>
                </div>

                <form id="hfQuickBookForm" onsubmit="handleHfFormSubmit(event)">
                    <input type="hidden" id="hfFormPkgCode" value="PKS321J">
                    <input type="hidden" id="hfFormPkgTitle" value="Asian HealthFit Bronze">

                    <div class="mb-3">
                        <label class="form-label small fw-bold text-dark">Patient Name *</label>
                        <input type="text" id="hfPatientName" class="form-control rounded-3" placeholder="Enter full name" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label small fw-bold text-dark">Mobile Number *</label>
                        <input type="tel" id="hfPatientPhone" class="form-control rounded-3" placeholder="10-digit mobile number" pattern="[0-9]{10}" required>
                    </div>

                    <div class="row g-2 mb-3">
                        <div class="col-6">
                            <label class="form-label small fw-bold text-dark">City / Area *</label>
                            <select id="hfPatientCity" class="form-select rounded-3" required>
                                <option value="Faridabad" selected>Faridabad</option>
                                <option value="Noida">Noida</option>
                                <option value="Delhi">Delhi Capital</option>
                                <option value="Gurugram">Gurugram</option>
                                <option value="Palwal">Palwal</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <label class="form-label small fw-bold text-dark">Preferred Slot *</label>
                            <select id="hfPatientSlot" class="form-select rounded-3" required>
                                <option value="Morning Fasting (6 AM - 9 AM)" selected>6 AM - 9 AM (Fasting)</option>
                                <option value="Mid-Morning (9 AM - 12 PM)">9 AM - 12 PM</option>
                                <option value="Afternoon (12 PM - 4 PM)">12 PM - 4 PM</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label small fw-bold text-dark">Complete Address</label>
                        <textarea id="hfPatientAddress" class="form-control rounded-3" rows="2" placeholder="House no, Sector/Colony, Landmark"></textarea>
                    </div>

                    <button type="submit" class="btn btn-danger w-100 rounded-pill py-2 fw-bold shadow-sm d-flex align-items-center justify-content-center gap-2" style="background: var(--primary-red); border: none;">
                        <i class="fa-solid fa-calendar-check"></i> Confirm & Dispatch on WhatsApp
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
function filterPackages(cat, btn) {
    document.querySelectorAll(".hf-filter-btn").forEach(b => b.classList.remove("active"));
    btn.classList.add("active");

    const items = document.querySelectorAll(".hf-pkg-item");
    items.forEach(item => {
        if (cat === "all") {
            item.style.display = "block";
        } else {
            const itemCat = item.getAttribute("data-category");
            if (itemCat === cat) {
                item.style.display = "block";
            } else {
                item.style.display = "none";
            }
        }
    });
}

function openBookingModal(pkgName, pkgPrice, pkgCode) {
    document.getElementById("modalPkgName").innerText = pkgName;
    document.getElementById("modalPkgPrice").innerText = pkgPrice;
    document.getElementById("hfFormPkgCode").value = pkgCode;
    document.getElementById("hfFormPkgTitle").value = pkgName;

    const modal = new bootstrap.Modal(document.getElementById("hfBookingModal"));
    modal.show();
}

function handleHfFormSubmit(e) {
    e.preventDefault();
    const pkg = document.getElementById("hfFormPkgTitle").value;
    const code = document.getElementById("hfFormPkgCode").value;
    const name = document.getElementById("hfPatientName").value.trim();
    const phone = document.getElementById("hfPatientPhone").value.trim();
    const city = document.getElementById("hfPatientCity").value;
    const slot = document.getElementById("hfPatientSlot").value;
    const addr = document.getElementById("hfPatientAddress").value.trim();

    const msg = "Hi DM Healthcare,%0A%0AI want to book a HealthFit Blood Test Collection:%0A" +
                "• *Package:* " + encodeURIComponent(pkg) + " (" + code + ")%0A" +
                "• *Name:* " + encodeURIComponent(name) + "%0A" +
                "• *Phone:* " + encodeURIComponent(phone) + "%0A" +
                "• *City:* " + encodeURIComponent(city) + "%0A" +
                "• *Preferred Slot:* " + encodeURIComponent(slot) + "%0A" +
                "• *Address:* " + encodeURIComponent(addr || "Will share on call") + "%0A%0APlease confirm phlebotomist visit!";

    window.open("https://wa.me/918860600423?text=" + msg, "_blank");

    // Close modal
    const modalEl = document.getElementById("hfBookingModal");
    const modalInstance = bootstrap.Modal.getInstance(modalEl);
    if (modalInstance) modalInstance.hide();
}
</script>
';
?>
