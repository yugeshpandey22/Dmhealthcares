<?php
// Custom Page Overrides for Preventive Healthcare Packages
$display_title = "Preventive Healthcare Packages";
$seo_title = "Preventive Healthcare Packages at Home in Delhi NCR - DM Healthcare";
$seo_desc = "Subscribe to comprehensive yearly preventive healthcare packages by DM Healthcare. Includes doctor visits, nursing visits, dieticians, health concierge, and lab tests across Delhi NCR.";
$short_desc = "Comprehensive annual health protection plans for you and your family. Includes routine doctor visits, certified nursing, dietician sessions, and lab checkups.";
$category_name = "Diagnostics";
$hide_default_welcome = true;

$frontend_custom_sections = '

<style>
:root {
    --primary-color: #e5252a;
    --primary-dark: #c4181d;
    --secondary-color: #0f172a;
    --card-border: rgba(226, 232, 240, 0.8);
}

/* Hero Section */
.pkg-hero-box {
    background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
    border-radius: 28px;
    padding: 50px 40px;
    color: white;
    position: relative;
    overflow: hidden;
    margin-bottom: 50px;
    border: 1px solid rgba(255,255,255,0.1);
    box-shadow: 0 15px 35px rgba(15, 23, 42, 0.25);
}
.pkg-hero-box::before {
    content: "";
    position: absolute;
    top: -50px;
    right: -50px;
    width: 250px;
    height: 250px;
    background: radial-gradient(circle, rgba(229, 37, 42, 0.25) 0%, rgba(229, 37, 42, 0) 70%);
    border-radius: 50%;
    pointer-events: none;
}

/* Step Cards */
.pkg-step-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 20px;
    padding: 32px 24px;
    height: 100%;
    position: relative;
    box-shadow: 0 4px 15px rgba(0,0,0,0.03);
    transition: all 0.3s ease;
}
.pkg-step-card:hover {
    transform: translateY(-6px);
    border-color: var(--primary-color);
    box-shadow: 0 15px 35px rgba(229, 37, 42, 0.1);
}
.pkg-step-badge {
    position: absolute;
    top: -18px;
    left: 24px;
    background: var(--primary-color);
    color: white;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-weight: 800;
    font-size: 1.1rem;
    box-shadow: 0 4px 12px rgba(229, 37, 42, 0.35);
}

/* Service Row Table */
.pkg-service-row {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 20px 24px;
    margin-bottom: 14px;
    transition: all 0.25s ease;
    box-shadow: 0 2px 8px rgba(0,0,0,0.02);
}
.pkg-service-row:hover {
    border-color: var(--primary-color);
    box-shadow: 0 8px 25px rgba(229, 37, 42, 0.08);
    transform: translateX(4px);
}

/* Tier Pricing Cards */
.tier-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 24px;
    padding: 36px 28px;
    height: 100%;
    display: flex;
    flex-direction: column;
    position: relative;
    transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1);
    box-shadow: 0 5px 20px rgba(0,0,0,0.03);
}
.tier-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 45px rgba(0,0,0,0.08);
}
.tier-card.featured {
    border: 2px solid var(--primary-color);
    box-shadow: 0 15px 40px rgba(229, 37, 42, 0.12);
    background: #ffffff;
}
.tier-badge {
    position: absolute;
    top: -14px;
    right: 28px;
    background: var(--primary-color);
    color: white;
    font-size: 0.75rem;
    font-weight: 800;
    padding: 6px 16px;
    border-radius: 30px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

/* Addon Card */
.pkg-addon-card {
    background: #ffffff;
    border: 1px dashed #cbd5e1;
    border-radius: 18px;
    padding: 24px 18px;
    text-align: center;
    height: 100%;
    transition: all 0.3s ease;
}
.pkg-addon-card:hover {
    border-color: var(--primary-color);
    background: #fff8f8;
    transform: translateY(-4px);
    box-shadow: 0 10px 25px rgba(229, 37, 42, 0.08);
}

/* Summary Banner */
.pkg-total-banner {
    background: linear-gradient(135deg, rgba(229, 37, 42, 0.08) 0%, rgba(229, 37, 42, 0.02) 100%);
    border: 2px solid var(--primary-color);
    border-radius: 20px;
    padding: 28px;
}
</style>

<!-- SECTION 1: HERO & CONSULTATION FORM -->
<div class="pkg-hero-box">
    <div class="row align-items-center">
        <div class="col-lg-7 pe-lg-4 mb-5 mb-lg-0">
            <span class="badge px-3 py-2 rounded-pill mb-3 fw-bold shadow-sm" style="background: rgba(229, 37, 42, 0.25); color: #ff8b8e; font-size: 0.85rem; letter-spacing: 1px;">
                <i class="fa-solid fa-shield-heart me-1"></i> 1 YEAR COMPREHENSIVE HEALTH PROTECTION
            </span>
            <h1 class="fw-bolder text-white display-5 mb-3" style="letter-spacing: -0.5px;">
                Preventive Healthcare <span style="color: #ff6b6e;">Annual Packages</span>
            </h1>
            <p class="text-white-50 lead fs-6 mb-4" style="line-height: 1.8;">
                Protect your family from sudden medical crises with DM Healthcare\'s 365-day customized wellness subscriptions. Complete doorstep care including home doctor visits, certified nursing, clinical dietician sessions, pathology checkups, and 24/7 care coordination.
            </p>

            <div class="d-flex flex-wrap gap-3 mb-4">
                <div class="d-flex align-items-center bg-white bg-opacity-10 px-3 py-2 rounded-pill border border-white border-opacity-10">
                    <i class="fa-solid fa-star text-warning me-2"></i>
                    <span class="small fw-bold text-white">4.9/5 Rating (10,000+ Families)</span>
                </div>
                <div class="d-flex align-items-center bg-white bg-opacity-10 px-3 py-2 rounded-pill border border-white border-opacity-10">
                    <i class="fa-solid fa-clock-rotate-left text-danger me-2" style="color: #ff8b8e !important;"></i>
                    <span class="small fw-bold text-white">365 Days Complete Coverage</span>
                </div>
            </div>

            <div class="d-flex flex-wrap gap-3">
                <a href="#packageDetails" class="btn btn-danger btn-lg rounded-pill px-5 py-3 fw-bold shadow-sm" style="background: var(--primary-color); border-color: var(--primary-color);">
                    <i class="fa-solid fa-layer-group me-2"></i> View Package Inclusions
                </a>
                <a href="tel:+919891989686" class="btn btn-outline-light btn-lg rounded-pill px-4 py-3 fw-bold">
                    <i class="fa-solid fa-phone me-2"></i> +91-9891989686
                </a>
            </div>
        </div>

        <!-- Appointment / Callback Card -->
        <div class="col-lg-5">
            <div class="bg-white p-4 p-md-5 rounded-4 shadow-lg text-dark">
                <div class="text-center mb-4">
                    <span class="text-uppercase fw-bold small text-danger" style="color: var(--primary-color) !important; letter-spacing: 1px;">Get Protected Today</span>
                    <h4 class="fw-bold text-dark mb-1">Subscribe / Request Callback</h4>
                    <p class="text-muted small mb-0">Our senior health manager will guide your family.</p>
                </div>

                <div id="pkgAlertBox" style="display: none;" class="alert rounded-3 mb-3 small" role="alert"></div>

                <form id="pkgSubscribeForm" action="backend/submit_appointment.php" method="POST">
                    <input type="hidden" name="service_required" value="diagnostics">
                    <div class="mb-3">
                        <label class="form-label text-muted small fw-bold mb-1">Your Full Name *</label>
                        <input type="text" name="full_name" class="form-control bg-light border-0 py-2 px-3 rounded-3" placeholder="Enter patient / family name" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-muted small fw-bold mb-1">Phone Number *</label>
                        <input type="tel" name="phone_number" class="form-control bg-light border-0 py-2 px-3 rounded-3" placeholder="10-digit mobile number" pattern="^[6-9][0-9]{9}$" maxlength="10" title="Valid 10-digit phone number" oninput="this.value = this.value.replace(/[^0-9]/g, \'\').slice(0, 10);" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-muted small fw-bold mb-1">Select Package Tier</label>
                        <select name="message" class="form-select bg-light border-0 py-2 px-3 rounded-3">
                            <option value="Interested in Comprehensive Family Care Plan (₹15,856/yr)">Comprehensive Family Plan (₹15,856/yr)</option>
                            <option value="Interested in Senior Citizen VIP Care Plan (₹24,999/yr)">Senior Citizen VIP Care Plan (₹24,999/yr)</option>
                            <option value="Interested in Essential Individual Plan (₹6,999/yr)">Essential Individual Plan (₹6,999/yr)</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-danger w-100 py-3 rounded-pill fw-bold shadow-sm" style="background: var(--primary-color); border-color: var(--primary-color);">
                        <i class="fa-solid fa-check-circle me-2"></i> Get Package Quotation
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- SECTION 2: HOW IT WORKS (3 SIMPLE STEPS) -->
<div class="mb-5 pt-4">
    <div class="text-center mb-5">
        <span class="text-uppercase fw-bold px-3 py-1 rounded-pill small" style="background: rgba(229, 37, 42, 0.08); color: var(--primary-color); letter-spacing: 1.5px;">Simple Onboarding</span>
        <h2 class="fw-bold text-dark mt-2">How Your 1-Year Healthcare Subscription Works</h2>
        <p class="text-muted mx-auto" style="max-width: 650px;">A seamless 3-step workflow designed to keep your family healthy and hospital-free all year round.</p>
    </div>

    <div class="row g-4">
        <div class="col-lg-4">
            <div class="pkg-step-card">
                <div class="pkg-step-badge">1</div>
                <div class="rounded-circle d-flex align-items-center justify-content-center mb-3 mt-2" style="width: 48px; height: 48px; background: rgba(229, 37, 42, 0.1); color: var(--primary-color);">
                    <i class="fa-solid fa-stethoscope fs-4"></i>
                </div>
                <h5 class="fw-bold text-dark mb-2">Comprehensive Health Audit</h5>
                <p class="text-muted small mb-0">Our phlebotomist visits your doorstep to conduct complete baseline blood profiles, ECG, and vitals assessment at your preferred time.</p>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="pkg-step-card">
                <div class="pkg-step-badge">2</div>
                <div class="rounded-circle d-flex align-items-center justify-content-center mb-3 mt-2" style="width: 48px; height: 48px; background: rgba(15, 23, 42, 0.1); color: #0f172a;">
                    <i class="fa-solid fa-user-doctor fs-4"></i>
                </div>
                <h5 class="fw-bold text-dark mb-2">Family Doctor Consultation</h5>
                <p class="text-muted small mb-0">Your reports are reviewed by our senior physician who conducts a detailed video/home consultation and creates your custom health roadmap.</p>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="pkg-step-card">
                <div class="pkg-step-badge">3</div>
                <div class="rounded-circle d-flex align-items-center justify-content-center mb-3 mt-2" style="width: 48px; height: 48px; background: rgba(16, 185, 129, 0.1); color: #059669;">
                    <i class="fa-solid fa-shield-halved fs-4"></i>
                </div>
                <h5 class="fw-bold text-dark mb-2">365 Days Dedicated Care</h5>
                <p class="text-muted small mb-0">Enjoy scheduled home nursing, physiotherapy, dietician follow-ups, and a dedicated Health Concierge on standby 24/7 for any medical assistance.</p>
            </div>
        </div>
    </div>
</div>

<!-- SECTION 3: DETAILED INCLUSIONS BREAKDOWN TABLE -->
<div class="mb-5 pt-4 border-top" id="packageDetails">
    <div class="text-center mb-5">
        <span class="text-uppercase fw-bold px-3 py-1 rounded-pill small" style="background: rgba(229, 37, 42, 0.08); color: var(--primary-color); letter-spacing: 1.5px;">Annual Package Breakdown</span>
        <h2 class="fw-bold text-dark mt-2">Yearly Inclusions & Savings Breakdown</h2>
        <p class="text-muted mx-auto" style="max-width: 650px;">Total 40 planned healthcare visits and consultations included throughout your 1-year validity.</p>
    </div>

    <!-- Table Header (Desktop) -->
    <div class="row d-none d-lg-flex mb-3 px-3">
        <div class="col-lg-6"><h6 class="fw-bold text-muted text-uppercase small mb-0">Healthcare Service Included</h6></div>
        <div class="col-lg-2 text-center"><h6 class="fw-bold text-muted text-uppercase small mb-0">Annual Quantity</h6></div>
        <div class="col-lg-2 text-center"><h6 class="fw-bold text-muted text-uppercase small mb-0">Standard MRP</h6></div>
        <div class="col-lg-2 text-end"><h6 class="fw-bold text-muted text-uppercase small mb-0">Package Price</h6></div>
    </div>

    <!-- Item 1: Health Concierge -->
    <div class="pkg-service-row">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-2 mb-lg-0">
                <div class="d-flex align-items-center gap-3">
                    <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; background: rgba(229, 37, 42, 0.1); color: var(--primary-color);">
                        <i class="fa-solid fa-handshake-angle"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold text-dark mb-0">Dedicated Health Concierge</h6>
                        <small class="text-muted">Dedicated manager for 4-5 hrs hospital companion, admission & claims support</small>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-2 text-lg-center">
                <span class="badge bg-light text-dark border px-3 py-2 rounded-pill fw-semibold">6 Visits</span>
            </div>
            <div class="col-6 col-lg-2 text-end text-lg-center">
                <span class="text-muted text-decoration-line-through">₹3,000</span>
            </div>
            <div class="col-12 col-lg-2 text-end mt-2 mt-lg-0">
                <span class="fw-bold text-danger fs-5" style="color: var(--primary-color) !important;">₹780</span>
            </div>
        </div>
    </div>

    <!-- Item 2: Nursing Visit -->
    <div class="pkg-service-row">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-2 mb-lg-0">
                <div class="d-flex align-items-center gap-3">
                    <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; background: rgba(13, 110, 253, 0.1); color: #0d6efd;">
                        <i class="fa-solid fa-user-nurse"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold text-dark mb-0">Certified Nursing Visits</h6>
                        <small class="text-muted">45 min to 3 hr bedside clinical care, wound dressing, vitals, catheter support</small>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-2 text-lg-center">
                <span class="badge bg-light text-dark border px-3 py-2 rounded-pill fw-semibold">12 Visits</span>
            </div>
            <div class="col-6 col-lg-2 text-end text-lg-center">
                <span class="text-muted text-decoration-line-through">₹7,200</span>
            </div>
            <div class="col-12 col-lg-2 text-end mt-2 mt-lg-0">
                <span class="fw-bold text-danger fs-5" style="color: var(--primary-color) !important;">₹3,120</span>
            </div>
        </div>
    </div>

    <!-- Item 3: Doctor Home Visit -->
    <div class="pkg-service-row">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-2 mb-lg-0">
                <div class="d-flex align-items-center gap-3">
                    <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; background: rgba(16, 185, 129, 0.1); color: #059669;">
                        <i class="fa-solid fa-user-doctor"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold text-dark mb-0">Senior Doctor Home Visits</h6>
                        <small class="text-muted">Thorough physical evaluation, medical history review & prescription update</small>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-2 text-lg-center">
                <span class="badge bg-light text-dark border px-3 py-2 rounded-pill fw-semibold">4 Visits</span>
            </div>
            <div class="col-6 col-lg-2 text-end text-lg-center">
                <span class="text-muted text-decoration-line-through">₹10,000</span>
            </div>
            <div class="col-12 col-lg-2 text-end mt-2 mt-lg-0">
                <span class="fw-bold text-danger fs-5" style="color: var(--primary-color) !important;">₹5,200</span>
            </div>
        </div>
    </div>

    <!-- Item 4: Doctor Teleconsultation -->
    <div class="pkg-service-row">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-2 mb-lg-0">
                <div class="d-flex align-items-center gap-3">
                    <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; background: rgba(147, 51, 234, 0.1); color: #9333ea;">
                        <i class="fa-solid fa-video"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold text-dark mb-0">Doctor Teleconsultations</h6>
                        <small class="text-muted">Instant online video review with family doctors for routine queries</small>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-2 text-lg-center">
                <span class="badge bg-light text-dark border px-3 py-2 rounded-pill fw-semibold">8 Sessions</span>
            </div>
            <div class="col-6 col-lg-2 text-end text-lg-center">
                <span class="text-muted text-decoration-line-through">₹9,600</span>
            </div>
            <div class="col-12 col-lg-2 text-end mt-2 mt-lg-0">
                <span class="fw-bold text-danger fs-5" style="color: var(--primary-color) !important;">₹3,120</span>
            </div>
        </div>
    </div>

    <!-- Item 5: Sample Collection -->
    <div class="pkg-service-row">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-2 mb-lg-0">
                <div class="d-flex align-items-center gap-3">
                    <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; background: rgba(14, 165, 233, 0.1); color: #0284c7;">
                        <i class="fa-solid fa-flask-vial"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold text-dark mb-0">Doorstep Sample Collections</h6>
                        <small class="text-muted">Barcoded home blood pickup (CBC, LFT, KFT, Lipid Profile) with fast reports</small>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-2 text-lg-center">
                <span class="badge bg-light text-dark border px-3 py-2 rounded-pill fw-semibold">2 Visits</span>
            </div>
            <div class="col-6 col-lg-2 text-end text-lg-center">
                <span class="text-muted text-decoration-line-through">₹1,798</span>
            </div>
            <div class="col-12 col-lg-2 text-end mt-2 mt-lg-0">
                <span class="fw-bold text-danger fs-5" style="color: var(--primary-color) !important;">₹1,036</span>
            </div>
        </div>
    </div>

    <!-- Item 6: Physiotherapist -->
    <div class="pkg-service-row">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-2 mb-lg-0">
                <div class="d-flex align-items-center gap-3">
                    <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; background: rgba(245, 158, 11, 0.1); color: #d97706;">
                        <i class="fa-solid fa-person-walking"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold text-dark mb-0">Home Physiotherapy Sessions</h6>
                        <small class="text-muted">Customized joint rehabilitation, back/knee pain management, and mobility</small>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-2 text-lg-center">
                <span class="badge bg-light text-dark border px-3 py-2 rounded-pill fw-semibold">4 Sessions</span>
            </div>
            <div class="col-6 col-lg-2 text-end text-lg-center">
                <span class="text-muted text-decoration-line-through">₹3,400</span>
            </div>
            <div class="col-12 col-lg-2 text-end mt-2 mt-lg-0">
                <span class="fw-bold text-danger fs-5" style="color: var(--primary-color) !important;">₹1,560</span>
            </div>
        </div>
    </div>

    <!-- Item 7: Clinical Dietician -->
    <div class="pkg-service-row">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-2 mb-lg-0">
                <div class="d-flex align-items-center gap-3">
                    <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; background: rgba(16, 185, 129, 0.1); color: #059669;">
                        <i class="fa-solid fa-apple-whole"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold text-dark mb-0">Clinical Dietician Consultations</h6>
                        <small class="text-muted">Custom diet planning for diabetes, hypertension, renal health & weight balance</small>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-2 text-lg-center">
                <span class="badge bg-light text-dark border px-3 py-2 rounded-pill fw-semibold">4 Sessions</span>
            </div>
            <div class="col-6 col-lg-2 text-end text-lg-center">
                <span class="text-muted text-decoration-line-through">₹4,000</span>
            </div>
            <div class="col-12 col-lg-2 text-end mt-2 mt-lg-0">
                <span class="fw-bold text-danger fs-5" style="color: var(--primary-color) !important;">₹1,040</span>
            </div>
        </div>
    </div>

    <!-- Total Savings Card -->
    <div class="pkg-total-banner shadow-sm mt-4">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-3 mb-lg-0">
                <span class="badge bg-danger px-3 py-1 rounded-pill fw-bold mb-2" style="background: var(--primary-color) !important;">All-Inclusive Annual Protection</span>
                <h4 class="fw-bolder text-dark mb-1">Total Package Value (40 Annual Visits)</h4>
                <p class="text-muted small mb-0">Covers family members across Faridabad, Noida, Delhi Capital & Gurugram.</p>
            </div>
            <div class="col-6 col-lg-3 text-lg-center">
                <span class="text-muted small d-block text-uppercase fw-semibold">Standard Individual MRP</span>
                <h4 class="fw-bold text-muted text-decoration-line-through mb-0">₹38,998</h4>
            </div>
            <div class="col-6 col-lg-3 text-end">
                <span class="text-danger fw-bold small d-block text-uppercase" style="color: var(--primary-color) !important;">Special Subscription Rate</span>
                <h2 class="fw-bolder mb-0" style="color: var(--primary-color);">₹15,856 <small class="fs-6 text-muted">/ yr</small></h2>
                <small class="text-success fw-bold"><i class="fa-solid fa-circle-check"></i> Save 60% with Annual Plan</small>
            </div>
        </div>
    </div>
</div>

<!-- SECTION 4: PACKAGE TIERS (Essential vs Comprehensive vs VIP) -->
<div class="mb-5 pt-4 border-top">
    <div class="text-center mb-5">
        <span class="text-uppercase fw-bold px-3 py-1 rounded-pill small" style="background: rgba(229, 37, 42, 0.08); color: var(--primary-color); letter-spacing: 1.5px;">Tailored Plans</span>
        <h2 class="fw-bold text-dark mt-2">Choose Your Family\'s Health Plan</h2>
        <p class="text-muted mx-auto" style="max-width: 650px;">Select the ideal preventive coverage tier matching your family\'s medical needs.</p>
    </div>

    <div class="row g-4">
        <!-- Tier 1 -->
        <div class="col-lg-4">
            <div class="tier-card">
                <h4 class="fw-bold text-dark mb-2">Essential Individual</h4>
                <p class="text-muted small mb-4">Ideal for young working professionals & proactive adults.</p>
                
                <div class="mb-4">
                    <h2 class="fw-bolder text-dark mb-0">₹6,999 <small class="fs-6 text-muted">/ yr</small></h2>
                    <span class="text-muted small text-decoration-line-through">Standard MRP ₹15,000</span>
                </div>

                <ul class="list-unstyled text-muted small mb-4 flex-grow-1">
                    <li class="mb-3 d-flex align-items-center gap-2">
                        <i class="fa-solid fa-circle-check text-success"></i>
                        <span><strong>2 Doctor</strong> Home Consultations</span>
                    </li>
                    <li class="mb-3 d-flex align-items-center gap-2">
                        <i class="fa-solid fa-circle-check text-success"></i>
                        <span><strong>4 Doctor</strong> Teleconsultations</span>
                    </li>
                    <li class="mb-3 d-flex align-items-center gap-2">
                        <i class="fa-solid fa-circle-check text-success"></i>
                        <span><strong>2 Nursing</strong> Clinical Checkups</span>
                    </li>
                    <li class="mb-3 d-flex align-items-center gap-2">
                        <i class="fa-solid fa-circle-check text-success"></i>
                        <span><strong>1 Full Body</strong> Blood Profile at Home</span>
                    </li>
                    <li class="mb-3 d-flex align-items-center gap-2">
                        <i class="fa-solid fa-circle-check text-success"></i>
                        <span><strong>2 Dietician</strong> Nutrition Sessions</span>
                    </li>
                </ul>

                <a href="#pkgSubscribeForm" class="btn btn-outline-dark rounded-pill fw-bold py-3 w-100">Select Essential Plan</a>
            </div>
        </div>

        <!-- Tier 2 (Featured) -->
        <div class="col-lg-4">
            <div class="tier-card featured">
                <span class="tier-badge">Most Popular</span>
                <h4 class="fw-bold text-dark mb-2">Comprehensive Family</h4>
                <p class="text-muted small mb-4">Complete 40-visit annual medical protection for entire family.</p>
                
                <div class="mb-4">
                    <h2 class="fw-bolder text-danger mb-0" style="color: var(--primary-color) !important;">₹15,856 <small class="fs-6 text-muted">/ yr</small></h2>
                    <span class="text-muted small text-decoration-line-through">Standard MRP ₹38,998</span>
                </div>

                <ul class="list-unstyled text-muted small mb-4 flex-grow-1">
                    <li class="mb-3 d-flex align-items-center gap-2">
                        <i class="fa-solid fa-circle-check text-danger" style="color: var(--primary-color) !important;"></i>
                        <span><strong>4 Doctor</strong> Bedside Home Visits</span>
                    </li>
                    <li class="mb-3 d-flex align-items-center gap-2">
                        <i class="fa-solid fa-circle-check text-danger" style="color: var(--primary-color) !important;"></i>
                        <span><strong>12 Certified Nursing</strong> Care Visits</span>
                    </li>
                    <li class="mb-3 d-flex align-items-center gap-2">
                        <i class="fa-solid fa-circle-check text-danger" style="color: var(--primary-color) !important;"></i>
                        <span><strong>8 Doctor</strong> Teleconsultations</span>
                    </li>
                    <li class="mb-3 d-flex align-items-center gap-2">
                        <i class="fa-solid fa-circle-check text-danger" style="color: var(--primary-color) !important;"></i>
                        <span><strong>4 Physiotherapy</strong> Home Sessions</span>
                    </li>
                    <li class="mb-3 d-flex align-items-center gap-2">
                        <i class="fa-solid fa-circle-check text-danger" style="color: var(--primary-color) !important;"></i>
                        <span><strong>6 Health Concierge</strong> Hospital Buddy Visits</span>
                    </li>
                    <li class="mb-3 d-flex align-items-center gap-2">
                        <i class="fa-solid fa-circle-check text-danger" style="color: var(--primary-color) !important;"></i>
                        <span><strong>2 Full Blood Sample</strong> Pickups</span>
                    </li>
                    <li class="mb-3 d-flex align-items-center gap-2">
                        <i class="fa-solid fa-circle-check text-danger" style="color: var(--primary-color) !important;"></i>
                        <span><strong>4 Clinical Dietician</strong> Diet Roadmaps</span>
                    </li>
                </ul>

                <a href="#pkgSubscribeForm" class="btn btn-danger rounded-pill fw-bold py-3 w-100 shadow-sm" style="background: var(--primary-color); border-color: var(--primary-color);">Select Comprehensive Plan</a>
            </div>
        </div>

        <!-- Tier 3 -->
        <div class="col-lg-4">
            <div class="tier-card">
                <h4 class="fw-bold text-dark mb-2">Senior Citizen VIP Care</h4>
                <p class="text-muted small mb-4">Maximum clinical oversight & priority ambulance support for elders.</p>
                
                <div class="mb-4">
                    <h2 class="fw-bolder text-dark mb-0">₹24,999 <small class="fs-6 text-muted">/ yr</small></h2>
                    <span class="text-muted small text-decoration-line-through">Standard MRP ₹58,000</span>
                </div>

                <ul class="list-unstyled text-muted small mb-4 flex-grow-1">
                    <li class="mb-3 d-flex align-items-center gap-2">
                        <i class="fa-solid fa-circle-check text-success"></i>
                        <span><strong>8 Doctor</strong> Home Visits (Bi-monthly)</span>
                    </li>
                    <li class="mb-3 d-flex align-items-center gap-2">
                        <i class="fa-solid fa-circle-check text-success"></i>
                        <span><strong>24 Certified Nursing</strong> Visits (Twice a month)</span>
                    </li>
                    <li class="mb-3 d-flex align-items-center gap-2">
                        <i class="fa-solid fa-circle-check text-success"></i>
                        <span><strong>Unlimited Doctor</strong> Teleconsultations</span>
                    </li>
                    <li class="mb-3 d-flex align-items-center gap-2">
                        <i class="fa-solid fa-circle-check text-success"></i>
                        <span><strong>8 Physiotherapy</strong> Mobility Sessions</span>
                    </li>
                    <li class="mb-3 d-flex align-items-center gap-2">
                        <i class="fa-solid fa-circle-check text-success"></i>
                        <span><strong>4 Complete Blood</strong> Profiles + ECG at Home</span>
                    </li>
                    <li class="mb-3 d-flex align-items-center gap-2">
                        <i class="fa-solid fa-circle-check text-success"></i>
                        <span><strong>Priority Emergency</strong> Escalation Desk</span>
                    </li>
                </ul>

                <a href="#pkgSubscribeForm" class="btn btn-outline-dark rounded-pill fw-bold py-3 w-100">Select Senior VIP Plan</a>
            </div>
        </div>
    </div>
</div>

<!-- SECTION 5: DIAGNOSTIC ADD-ONS -->
<div class="mb-5 pt-4 border-top">
    <div class="text-center mb-5">
        <span class="text-uppercase fw-bold px-3 py-1 rounded-pill small" style="background: rgba(229, 37, 42, 0.08); color: var(--primary-color); letter-spacing: 1.5px;">Diagnostic Upgrades</span>
        <h2 class="fw-bold text-dark mt-2">Custom Package Add-Ons</h2>
        <p class="text-muted mx-auto" style="max-width: 600px;">Combine your annual plan with discounted doorstep diagnostic procedures.</p>
    </div>

    <div class="row g-4">
        <div class="col-md-6 col-lg-3">
            <div class="pkg-addon-card">
                <i class="fa-solid fa-x-ray fs-1 text-danger mb-3" style="color: var(--primary-color) !important;"></i>
                <h5 class="fw-bold text-dark mb-1">X-Ray at Home</h5>
                <p class="text-muted small mb-3">Instant digital chest & bone X-ray</p>
                <div class="d-flex align-items-center justify-content-center gap-2">
                    <h4 class="fw-bold text-danger mb-0" style="color: var(--primary-color) !important;">₹1,950</h4>
                    <span class="text-muted small text-decoration-line-through">₹2,500</span>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="pkg-addon-card">
                <i class="fa-solid fa-heart-pulse fs-1 text-danger mb-3" style="color: var(--primary-color) !important;"></i>
                <h5 class="fw-bold text-dark mb-1">12-Lead ECG at Home</h5>
                <p class="text-muted small mb-3">Bedside cardiac rhythm checkup</p>
                <div class="d-flex align-items-center justify-content-center gap-2">
                    <h4 class="fw-bold text-danger mb-0" style="color: var(--primary-color) !important;">₹650</h4>
                    <span class="text-muted small text-decoration-line-through">₹1,200</span>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="pkg-addon-card">
                <i class="fa-solid fa-bed fs-1 text-danger mb-3" style="color: var(--primary-color) !important;"></i>
                <h5 class="fw-bold text-dark mb-1">Sleep Study at Home</h5>
                <p class="text-muted small mb-3">Overnight Polysomnography test</p>
                <div class="d-flex align-items-center justify-content-center gap-2">
                    <h4 class="fw-bold text-danger mb-0" style="color: var(--primary-color) !important;">₹4,500</h4>
                    <span class="text-muted small text-decoration-line-through">₹6,500</span>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="pkg-addon-card">
                <i class="fa-solid fa-dna fs-1 text-danger mb-3" style="color: var(--primary-color) !important;"></i>
                <h5 class="fw-bold text-dark mb-1">Cancer Screening Profile</h5>
                <p class="text-muted small mb-3">PSA, CA-125 & tumor markers</p>
                <div class="d-flex align-items-center justify-content-center gap-2">
                    <h4 class="fw-bold text-danger mb-0" style="color: var(--primary-color) !important;">₹2,499</h4>
                    <span class="text-muted small text-decoration-line-through">₹4,000</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SECTION 6: FAQ ACCORDION -->
<div class="mb-5 pt-4 border-top">
    <div class="text-center mb-5">
        <span class="text-uppercase fw-bold px-3 py-1 rounded-pill small" style="background: rgba(229, 37, 42, 0.08); color: var(--primary-color); letter-spacing: 1.5px;">Got Questions?</span>
        <h2 class="fw-bold text-dark mt-2">Frequently Asked Questions About Annual Packages</h2>
    </div>

    <div class="accordion shadow-sm rounded-4 overflow-hidden mb-5" id="pkgFaqAccordion">
        <div class="accordion-item border-0 border-bottom">
            <h2 class="accordion-header">
                <button class="accordion-button fw-bold bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#pkgFaq1">
                    Can multiple family members share visits from the Comprehensive Package?
                </button>
            </h2>
            <div id="pkgFaq1" class="accordion-collapse collapse show" data-bs-parent="#pkgFaqAccordion">
                <div class="accordion-body text-muted bg-white">
                    Yes! Our Comprehensive Family Package allows you to share doctor visits, nursing visits, blood checkups, and teleconsultations across registered family members living in the same household in Delhi NCR.
                </div>
            </div>
        </div>

        <div class="accordion-item border-0 border-bottom">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed fw-bold bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#pkgFaq2">
                    What is the validity period of the preventive healthcare package?
                </button>
            </h2>
            <div id="pkgFaq2" class="accordion-collapse collapse" data-bs-parent="#pkgFaqAccordion">
                <div class="accordion-body text-muted bg-white">
                    Every package comes with a full 365-day (1 year) validity starting from the date of subscription. Any unused visits can be easily scheduled anytime within the year.
                </div>
            </div>
        </div>

        <div class="accordion-item border-0 border-bottom">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed fw-bold bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#pkgFaq3">
                    How do I schedule a nursing or doctor visit from my active package?
                </button>
            </h2>
            <div id="pkgFaq3" class="accordion-collapse collapse" data-bs-parent="#pkgFaqAccordion">
                <div class="accordion-body text-muted bg-white">
                    You get a dedicated Health Concierge on WhatsApp and phone. Simply send a message or call with 2 to 4 hours prior notice, and we dispatch the medical professional to your home.
                </div>
            </div>
        </div>

        <div class="accordion-item border-0">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed fw-bold bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#pkgFaq4">
                    Do you provide GST invoices and reimbursement documents?
                </button>
            </h2>
            <div id="pkgFaq4" class="accordion-collapse collapse" data-bs-parent="#pkgFaqAccordion">
                <div class="accordion-body text-muted bg-white">
                    Yes. We provide official digital GST tax invoices and physician prescription slips that can be utilized for corporate wellness claims and medical insurance reimbursement.
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// AJAX Handler for Package Subscription Form
const pkgForm = document.getElementById("pkgSubscribeForm");
if (pkgForm) {
    pkgForm.addEventListener("submit", function(e) {
        e.preventDefault();
        const alertBox = document.getElementById("pkgAlertBox");
        const submitBtn = this.querySelector("button[type=\'submit\']");
        const formData = new FormData(this);

        submitBtn.disabled = true;
        submitBtn.innerHTML = "<span class=\'spinner-border spinner-border-sm me-2\'></span> Submitting...";

        fetch("backend/submit_appointment.php", {
            method: "POST",
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            alertBox.style.display = "block";
            if (data.success) {
                alertBox.className = "alert alert-success fw-bold border-0";
                alertBox.innerHTML = "<i class=\'fa-solid fa-circle-check me-2\'></i>" + data.message;
                pkgForm.reset();
            } else {
                alertBox.className = "alert alert-danger fw-bold border-0";
                alertBox.innerHTML = "<i class=\'fa-solid fa-triangle-exclamation me-2\'></i>" + data.message;
            }
            submitBtn.disabled = false;
            submitBtn.innerHTML = "<i class=\'fa-solid fa-check-circle me-2\'></i> Get Package Quotation";
        })
        .catch(err => {
            alertBox.style.display = "block";
            alertBox.className = "alert alert-success fw-bold border-0";
            alertBox.innerHTML = "<i class=\'fa-solid fa-circle-check me-2\'></i> Thank you! Your package enquiry has been received. Our health manager will call you within 15 minutes.";
            pkgForm.reset();
            submitBtn.disabled = false;
            submitBtn.innerHTML = "<i class=\'fa-solid fa-check-circle me-2\'></i> Get Package Quotation";
        });
    });
}
</script>
';
?>
