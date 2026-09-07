<?php
/**
 * DM Healthcare - BiPAP, CPAP & Home Ventilator on Rent
 * Complete Respiratory Equipment & Non-Invasive Ventilation Care Portal
 */

$display_title = "BiPAP, CPAP & Ventilator on Rent at Home";
$seo_title = "BiPAP, CPAP & Home Ventilator on Rent in Delhi NCR & North India - DM Healthcare";
$seo_desc = "BiPAP, CPAP and home ventilator rental for COPD, sleep apnea, post-ICU weaning & respiratory failure across Delhi NCR, Faridabad, Noida, Gurugram. Doctor prescription calibrated setup, mask fitting & 24/7 technical support.";
$short_desc = "Doctor-calibrated BiPAP, CPAP and mechanical ventilators delivered same day with live mask fitting and 24/7 clinical support.";
$category_name = "Medical Equipment";
$full_page_override = true;

ob_start();
?>
<style>
    :root {
        --dm-red: #e5252a;
        --dm-red-dark: #c8102e;
        --dm-navy: #0f172a;
        --dm-slate: #1e293b;
        --dm-sky: #0284c7;
        --dm-gray-bg: #f8fafc;
    }
    .text-dm-red { color: var(--dm-red) !important; }
    .bg-dm-red { background-color: var(--dm-red) !important; color: #fff !important; }
    .btn-dm-red { background-color: var(--dm-red); border-color: var(--dm-red); color: #fff; }
    .btn-dm-red:hover { background-color: var(--dm-red-dark); border-color: var(--dm-red-dark); color: #fff; }
    .btn-outline-dm-red { border-color: var(--dm-red); color: var(--dm-red); }
    .btn-outline-dm-red:hover, .btn-outline-dm-red.active { background-color: var(--dm-red); border-color: var(--dm-red); color: #fff; }

    /* Hero Section */
    .bipap-hero {
        background: radial-gradient(circle at 90% 10%, rgba(229, 37, 42, 0.15) 0%, transparent 50%),
                    radial-gradient(circle at 10% 90%, rgba(2, 132, 199, 0.15) 0%, transparent 40%),
                    linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
        color: #ffffff;
    }
    .trust-pill {
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.15);
        border-radius: 50px;
        padding: 6px 14px;
        font-size: 0.8rem;
        color: #f1f5f9;
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }

    /* Equipment Cards */
    .equip-tier-card {
        background: #ffffff;
        border: 2px solid #e2e8f0;
        border-radius: 18px;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    .equip-tier-card:hover {
        border-color: var(--dm-red);
        transform: translateY(-5px);
        box-shadow: 0 16px 32px rgba(15, 23, 42, 0.1);
    }
    .equip-tier-card.featured {
        border-color: var(--dm-red);
        box-shadow: 0 10px 25px rgba(229, 37, 42, 0.12);
    }
    .featured-badge {
        position: absolute;
        top: 12px;
        right: 12px;
        background: var(--dm-red);
        color: #fff;
        font-size: 0.72rem;
        font-weight: 700;
        padding: 4px 10px;
        border-radius: 20px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    /* Inventory Cards */
    .inventory-card {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 14px;
        transition: all 0.25s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    .inventory-card:hover {
        border-color: var(--dm-red);
        box-shadow: 0 10px 20px rgba(0,0,0,0.06);
        transform: translateY(-3px);
    }

    /* Condition Box */
    .condition-pill-card {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        padding: 12px 14px;
        display: flex;
        align-items: center;
        gap: 12px;
        transition: all 0.2s ease;
    }
    .condition-pill-card:hover {
        border-color: var(--dm-red);
        background: #fffafa;
        transform: translateX(3px);
    }

    /* Comparison Table */
    .table-compare thead th {
        background-color: #0f172a;
        color: #ffffff;
        font-size: 0.9rem;
        padding: 12px 16px;
    }
    .table-compare tbody td {
        padding: 12px 16px;
        font-size: 0.88rem;
        vertical-align: middle;
    }

    /* Step Circles */
    .step-circle {
        width: 44px;
        height: 44px;
        border-radius: 50%;
        background: var(--dm-red);
        color: #ffffff;
        font-weight: 800;
        font-size: 1.1rem;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 12px;
        box-shadow: 0 4px 10px rgba(229, 37, 42, 0.25);
    }

    .testimonial-avatar {
        width: 46px;
        height: 46px;
        border-radius: 50%;
        background: #f1f5f9;
        color: var(--dm-red);
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.1rem;
        border: 2px solid #e2e8f0;
    }
</style>

<!-- 1. HERO SECTION -->
<section class="bipap-hero py-4 py-lg-5">
    <div class="container py-lg-3">
        <!-- Trust Bar Top -->
        <div class="d-flex flex-wrap gap-2 mb-3 align-items-center">
            <span class="trust-pill"><i class="fa-solid fa-certificate text-warning"></i> ISO CERTIFIED 9001:2015</span>
            <span class="trust-pill"><i class="fa-solid fa-sliders text-info"></i> Prescription Settings Calibrated</span>
            <span class="trust-pill"><i class="fa-solid fa-clock-rotate-left text-success"></i> 24/7 Technical Support</span>
            <span class="trust-pill"><i class="fa-solid fa-truck-fast text-danger"></i> Same Day Setup Available</span>
            <span class="trust-pill"><i class="fa-solid fa-award text-warning"></i> Trusted Healthcare Leader</span>
        </div>

        <div class="row align-items-center g-4">
            <div class="col-lg-7">
                <span class="badge bg-danger bg-opacity-25 text-danger px-3 py-1 rounded-pill fw-semibold mb-2 border border-danger border-opacity-50 small">
                    <i class="fa-solid fa-lungs me-1"></i> Non-Invasive Ventilation & Sleep Apnea Therapy
                </span>
                <h1 class="display-6 fw-bold text-white lh-sm mb-3">
                    BiPAP, CPAP & Ventilator on Rent <span class="text-dm-red">at Home</span>
                </h1>
                <p class="text-light fs-6 mb-3 opacity-90" style="line-height: 1.7;">
                    Respiratory equipment on rent — <strong>BiPAP, CPAP, and home ventilators</strong> — supports patients with respiratory failure, COPD, sleep apnea, post-ICU weaning, and ventilator dependency. <strong>DM Healthcare</strong> delivers, sets up, and programs respiratory machines to your doctor's precise prescription right at your home.
                </p>
                <p class="text-light opacity-75 small mb-4">
                    <i class="fa-solid fa-location-dot text-dm-red me-1"></i> Available across <strong>Delhi, Faridabad, Noida, Gurugram, Ghaziabad, Chandigarh Tricity, Ludhiana, Jalandhar, Patiala, Amritsar</strong> and 15+ North India cities. Our certified technicians program machine settings per prescription and train your family on safe operation, mask fitting, and daily maintenance.
                </p>

                <div class="d-flex flex-wrap gap-2 mb-4">
                    <a href="tel:+918860600423" class="btn btn-dm-red btn-lg rounded-pill px-4 py-2 fw-bold shadow-sm d-inline-flex align-items-center gap-2 small">
                        <i class="fa-solid fa-phone-volume"></i> Call for Price & Availability (+91 88606 00423)
                    </a>
                    <a href="https://wa.me/918860600423?text=I+need+BiPAP+CPAP+on+Rent" target="_blank" class="btn btn-success btn-lg rounded-pill px-4 py-2 fw-bold d-inline-flex align-items-center gap-2 small">
                        <i class="fa-brands fa-whatsapp"></i> WhatsApp Now
                    </a>
                </div>

                <!-- Quick Highlights -->
                <div class="row g-2 pt-2 border-top border-secondary border-opacity-50">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center gap-2 small text-light">
                            <i class="fa-solid fa-circle-check text-success"></i>
                            <span>Free Bedside Mask Fitting (S/M/L)</span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center gap-2 small text-light">
                            <i class="fa-solid fa-circle-check text-success"></i>
                            <span>Humidifier & Mask Included</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Hero Quick Booking Card -->
            <div class="col-lg-5">
                <div class="card bg-white text-dark rounded-4 p-4 shadow-lg border-0">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="badge bg-danger bg-opacity-10 text-danger rounded-pill px-3 py-1 small fw-bold">
                            Quick Consultation & Dispatch
                        </span>
                        <span class="fw-bold text-dm-red fs-6">From ₹2,500<small class="text-muted">/mo</small></span>
                    </div>

                    <h5 class="fw-bold text-dark mb-2">Request Respiratory Machine Setup</h5>
                    <p class="text-muted small mb-3">Share your doctor's prescription for instant model selection and calibrated delivery.</p>

                    <form action="backend/submit_appointment.php" method="POST">
                        <input type="hidden" name="service" value="BiPAP CPAP Ventilator Rental">
                        <div class="mb-2">
                            <input type="text" name="name" class="form-control form-control-sm rounded-2" placeholder="Patient / Attendant Name *" required>
                        </div>
                        <div class="mb-2">
                            <input type="tel" name="phone" class="form-control form-control-sm rounded-2" placeholder="10-digit Mobile Number *" pattern="[0-9]{10}" required>
                        </div>
                        <div class="mb-2">
                            <select name="model" class="form-select form-select-sm rounded-2" required>
                                <option value="BiPAP Machine (COPD / Weaning) - ₹4,000/mo">BiPAP Machine (COPD / Weaning) - From ₹4,000/mo</option>
                                <option value="CPAP Machine (Sleep Apnea) - ₹2,500/mo">CPAP Machine (Sleep Apnea) - From ₹2,500/mo</option>
                                <option value="Home Ventilator (Invasive/NIV) - ₹8,000/mo">Home Ventilator (Invasive/NIV) - From ₹8,000/mo</option>
                                <option value="BiPAP ST / AVAPS - ₹6,500/mo">BiPAP ST / AVAPS Mode - From ₹6,500/mo</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <input type="text" name="city" class="form-control form-control-sm rounded-2" placeholder="City / Area (e.g. Faridabad, Delhi NCR)" required>
                        </div>
                        <div class="mb-3">
                            <textarea name="message" rows="2" class="form-control form-control-sm rounded-2" placeholder="Prescription details (IPAP/EPAP pressure) or delivery notes..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-dm-red w-100 rounded-pill fw-bold py-2 shadow-sm">
                            <i class="fa-solid fa-paper-plane me-1"></i> Book Same-Day Bedside Setup
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. THREE CORE EQUIPMENT TIERS (BiPAP, CPAP, Ventilator) -->
<section class="py-5 bg-light border-bottom">
    <div class="container">
        <div class="text-center max-w-700 mx-auto mb-4">
            <span class="badge bg-secondary bg-opacity-10 text-secondary px-3 py-1 rounded-pill fw-semibold mb-1 small">Prescription-Calibrated</span>
            <h2 class="fw-bold text-dark mb-1">Respiratory Equipment Available on Rent</h2>
            <p class="text-muted small">All machines are programmed to your doctor's prescribed settings before delivery.</p>
        </div>

        <div class="row g-4">
            <!-- 1. BiPAP Machine -->
            <div class="col-md-4">
                <div class="equip-tier-card featured p-4 h-100 d-flex flex-column justify-content-between">
                    <span class="featured-badge">Most Prescribed</span>
                    <div>
                        <div class="d-inline-flex align-items-center justify-content-center bg-danger bg-opacity-10 text-danger rounded-circle p-3 mb-3" style="width: 54px; height: 54px;">
                            <i class="fa-solid fa-lungs fs-4"></i>
                        </div>
                        <h4 class="fw-bold text-dark mb-1">BiPAP Machine</h4>
                        <p class="text-muted small mb-2" style="line-height: 1.5;">
                            <strong>Bilevel Positive Airway Pressure</strong> — two pressure levels (IPAP/EPAP). For COPD, respiratory failure, post-ICU weaning, neuromuscular disease, obesity hypoventilation, and central sleep apnea. Available with and without backup rate (BiPAP-ST).
                        </p>
                        <ul class="list-unstyled small text-secondary mb-4">
                            <li class="mb-1"><i class="fa-solid fa-check text-success me-2"></i>Dual pressure: IPAP (Inhale) & EPAP (Exhale)</li>
                            <li class="mb-1"><i class="fa-solid fa-check text-success me-2"></i>Expiratory CO2 washout for COPD</li>
                            <li class="mb-1"><i class="fa-solid fa-check text-success me-2"></i>Includes Heated Humidifier & Mask</li>
                            <li class="mb-1"><i class="fa-solid fa-check text-success me-2"></i>SD Card / Cloud Compliance Data</li>
                        </ul>
                    </div>
                    <div>
                        <div class="d-flex justify-content-between align-items-baseline mb-3 pt-3 border-top">
                            <span class="small text-muted">Rental Starts At:</span>
                            <span class="fw-bold text-dm-red fs-5">From Rs 4,000 <small class="text-muted fs-6">/ mo</small></span>
                        </div>
                        <div class="d-grid gap-2">
                            <a href="#inventory" class="btn btn-dm-red rounded-pill fw-bold btn-sm py-2">
                                <i class="fa-solid fa-tag me-1"></i> Check Models & Price
                            </a>
                            <a href="https://wa.me/918860600423?text=I+want+to+book+BiPAP+machine+on+rent" target="_blank" class="btn btn-outline-success rounded-pill fw-bold btn-sm py-2">
                                <i class="fa-brands fa-whatsapp me-1"></i> Rent on WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2. CPAP Machine -->
            <div class="col-md-4">
                <div class="equip-tier-card p-4 h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary bg-opacity-10 text-primary rounded-circle p-3 mb-3" style="width: 54px; height: 54px;">
                            <i class="fa-solid fa-moon fs-4"></i>
                        </div>
                        <h4 class="fw-bold text-dark mb-1">CPAP Machine</h4>
                        <p class="text-muted small mb-2" style="line-height: 1.5;">
                            <strong>Continuous Positive Airway Pressure</strong> — single fixed pressure. For obstructive sleep apnea, mild respiratory insufficiency, and post-surgery airway support. Auto-adjusting CPAP (APAP) models also available.
                        </p>
                        <ul class="list-unstyled small text-secondary mb-4">
                            <li class="mb-1"><i class="fa-solid fa-check text-success me-2"></i>Constant pneumatic stent for airway</li>
                            <li class="mb-1"><i class="fa-solid fa-check text-success me-2"></i>Eliminates snoring & sleep choking</li>
                            <li class="mb-1"><i class="fa-solid fa-check text-success me-2"></i>Auto-adjusting pressure algorithms</li>
                            <li class="mb-1"><i class="fa-solid fa-check text-success me-2"></i>Whisper quiet motor (<26 dBA)</li>
                        </ul>
                    </div>
                    <div>
                        <div class="d-flex justify-content-between align-items-baseline mb-3 pt-3 border-top">
                            <span class="small text-muted">Rental Starts At:</span>
                            <span class="fw-bold text-dm-red fs-5">From Rs 2,500 <small class="text-muted fs-6">/ mo</small></span>
                        </div>
                        <div class="d-grid gap-2">
                            <a href="#inventory" class="btn btn-dm-red rounded-pill fw-bold btn-sm py-2">
                                <i class="fa-solid fa-tag me-1"></i> Check Models & Price
                            </a>
                            <a href="https://wa.me/918860600423?text=I+want+to+book+CPAP+machine+on+rent" target="_blank" class="btn btn-outline-success rounded-pill fw-bold btn-sm py-2">
                                <i class="fa-brands fa-whatsapp me-1"></i> Rent on WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3. Home Ventilator -->
            <div class="col-md-4">
                <div class="equip-tier-card p-4 h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-inline-flex align-items-center justify-content-center bg-warning bg-opacity-10 text-dark rounded-circle p-3 mb-3" style="width: 54px; height: 54px;">
                            <i class="fa-solid fa-heart-pulse fs-4"></i>
                        </div>
                        <h4 class="fw-bold text-dark mb-1">Home Ventilator</h4>
                        <p class="text-muted small mb-2" style="line-height: 1.5;">
                            <strong>For ventilator-dependent patients at home</strong>. Supports invasive (tracheostomy) and non-invasive modes. For patients with ALS, MND, high spinal injury, or those weaned to home ventilator from hospital ICU. Requires critical care nursing.
                        </p>
                        <ul class="list-unstyled small text-secondary mb-4">
                            <li class="mb-1"><i class="fa-solid fa-check text-success me-2"></i>Invasive (Trach) & Non-Invasive (Mask)</li>
                            <li class="mb-1"><i class="fa-solid fa-check text-success me-2"></i>Volume & Pressure Control Modes</li>
                            <li class="mb-1"><i class="fa-solid fa-check text-success me-2"></i>Internal Battery Backup (up to 8 hours)</li>
                            <li class="mb-1"><i class="fa-solid fa-check text-success me-2"></i>ICU Trained Nurse Support Available</li>
                        </ul>
                    </div>
                    <div>
                        <div class="d-flex justify-content-between align-items-baseline mb-3 pt-3 border-top">
                            <span class="small text-muted">Rental Starts At:</span>
                            <span class="fw-bold text-dm-red fs-5">From Rs 8,000 <small class="text-muted fs-6">/ mo</small></span>
                        </div>
                        <div class="d-grid gap-2">
                            <a href="#inventory" class="btn btn-dm-red rounded-pill fw-bold btn-sm py-2">
                                <i class="fa-solid fa-tag me-1"></i> Check Models & Price
                            </a>
                            <a href="https://wa.me/918860600423?text=I+need+Home+Ventilator+Rental+with+ICU+Care" target="_blank" class="btn btn-outline-success rounded-pill fw-bold btn-sm py-2">
                                <i class="fa-brands fa-whatsapp me-1"></i> Rent on WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. WHAT IS INCLUDED IN BIPAP / CPAP RENTAL? -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-5">
                <span class="badge bg-danger bg-opacity-10 text-danger px-3 py-1 rounded-pill fw-semibold mb-2">Complete Care Kit</span>
                <h3 class="fw-bold text-dark mb-2">What is Included in BiPAP/CPAP Rental?</h3>
                <p class="text-muted small mb-4">
                    Every rental from DM Healthcare arrives as a complete, ready-to-use clinical package with zero hidden charges. You receive everything required for hygienic, uninterrupted therapy from Day 1.
                </p>
                <div class="card bg-light border-0 rounded-4 p-3 mb-3">
                    <div class="d-flex align-items-center gap-3">
                        <i class="fa-solid fa-shield-virus fs-3 text-success"></i>
                        <div>
                            <h6 class="fw-bold text-dark mb-0 small">ISO 9001 Hospital Grade Sanitization</h6>
                            <small class="text-muted" style="font-size: 0.72rem;">Multi-level UV sterilization and new filters replaced before every delivery.</small>
                        </div>
                    </div>
                </div>
                <a href="tel:+918860600423" class="btn btn-dm-red rounded-pill px-4 py-2 fw-bold btn-sm">
                    <i class="fa-solid fa-phone me-1"></i> Order Rental Kit (+91 88606 00423)
                </a>
            </div>

            <div class="col-lg-7">
                <div class="row g-3">
                    <div class="col-sm-6">
                        <div class="p-3 border rounded-3 bg-white h-100 shadow-sm d-flex gap-2">
                            <i class="fa-solid fa-check-circle text-dm-red fs-5 mt-1"></i>
                            <div>
                                <strong class="d-block small text-dark">BiPAP / CPAP Machine</strong>
                                <small class="text-muted">High-precision prescription model calibrated to your doctor's exact settings.</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-3 border rounded-3 bg-white h-100 shadow-sm d-flex gap-2">
                            <i class="fa-solid fa-check-circle text-dm-red fs-5 mt-1"></i>
                            <div>
                                <strong class="d-block small text-dark">Medical Grade Mask</strong>
                                <small class="text-muted">Nasal or Full-Face mask as prescribed, fitted in S/M/L size for zero leakage.</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-3 border rounded-3 bg-white h-100 shadow-sm d-flex gap-2">
                            <i class="fa-solid fa-check-circle text-dm-red fs-5 mt-1"></i>
                            <div>
                                <strong class="d-block small text-dark">Headgear, Straps & Tubing</strong>
                                <small class="text-muted">Breathable 4-point headgear, chin strap, and flexible medical-grade circuit tubing.</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-3 border rounded-3 bg-white h-100 shadow-sm d-flex gap-2">
                            <i class="fa-solid fa-check-circle text-dm-red fs-5 mt-1"></i>
                            <div>
                                <strong class="d-block small text-dark">Integrated Heated Humidifier</strong>
                                <small class="text-muted">Water chamber prevents nasal dryness, throat irritation & morning congestion.</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-3 border rounded-3 bg-white h-100 shadow-sm d-flex gap-2">
                            <i class="fa-solid fa-check-circle text-dm-red fs-5 mt-1"></i>
                            <div>
                                <strong class="d-block small text-dark">Doctor Settings Calibrated</strong>
                                <strong class="small text-muted d-block fw-normal">Settings programmed per prescription (IPAP, EPAP, Ramp, Rise Time).</strong>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-3 border rounded-3 bg-white h-100 shadow-sm d-flex gap-2">
                            <i class="fa-solid fa-check-circle text-dm-red fs-5 mt-1"></i>
                            <div>
                                <strong class="d-block small text-dark">Free Setup & Mask Training</strong>
                                <small class="text-muted">Bedside demonstration and family training on daily operation and mask hygiene.</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-3 border rounded-3 bg-white h-100 shadow-sm d-flex gap-2">
                            <i class="fa-solid fa-check-circle text-dm-red fs-5 mt-1"></i>
                            <div>
                                <strong class="d-block small text-dark">Maintenance & Cleaning Kit</strong>
                                <small class="text-muted">Maintenance guide, dust filter spares, and cleaning instructions included.</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-3 border rounded-3 bg-white h-100 shadow-sm d-flex gap-2">
                            <i class="fa-solid fa-check-circle text-dm-red fs-5 mt-1"></i>
                            <div>
                                <strong class="d-block small text-dark">24/7 Technical Support</strong>
                                <small class="text-muted">Round-the-clock helpline for alarm queries, mask troubleshooting, and machine swap.</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. CONDITIONS REQUIRING BIPAP OR VENTILATOR AT HOME -->
<section class="py-5 bg-light border-top border-bottom">
    <div class="container">
        <div class="text-center max-w-700 mx-auto mb-4">
            <span class="badge bg-secondary bg-opacity-10 text-secondary px-3 py-1 rounded-pill fw-semibold mb-1 small">Clinical Indications</span>
            <h3 class="fw-bold text-dark mb-1">Conditions That Require BiPAP or Ventilator at Home</h3>
            <p class="text-muted small">Non-invasive ventilation provides immediate relief and prevents emergency ICU readmissions for these medical conditions.</p>
        </div>

        <div class="row g-3">
            <div class="col-md-6 col-lg-3">
                <div class="condition-pill-card h-100 shadow-sm">
                    <i class="fa-solid fa-lungs text-dm-red fs-4"></i>
                    <div>
                        <strong class="d-block text-dark small">COPD with Respiratory Failure</strong>
                        <small class="text-muted">Assists exhalation & washes out trapped CO2.</small>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="condition-pill-card h-100 shadow-sm">
                    <i class="fa-solid fa-hospital-user text-primary fs-4"></i>
                    <div>
                        <strong class="d-block text-dark small">Post-ICU Ventilator Weaning</strong>
                        <small class="text-muted">Stepped-down pressure support at home.</small>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="condition-pill-card h-100 shadow-sm">
                    <i class="fa-solid fa-brain text-warning fs-4"></i>
                    <div>
                        <strong class="d-block text-dark small">ALS / MND (Motor Neurone Disease)</strong>
                        <small class="text-muted">Supports weakened respiratory muscles.</small>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="condition-pill-card h-100 shadow-sm">
                    <i class="fa-solid fa-weight-scale text-success fs-4"></i>
                    <div>
                        <strong class="d-block text-dark small">Obesity Hypoventilation Syndrome</strong>
                        <small class="text-muted">Overcomes chest wall resistance & apnea.</small>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="condition-pill-card h-100 shadow-sm">
                    <i class="fa-solid fa-virus-covid text-danger fs-4"></i>
                    <div>
                        <strong class="d-block text-dark small">Post-COVID Respiratory Failure</strong>
                        <small class="text-muted">Rebuilds lung capacity during fibrosis recovery.</small>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="condition-pill-card h-100 shadow-sm">
                    <i class="fa-solid fa-heart-pulse text-danger fs-4"></i>
                    <div>
                        <strong class="d-block text-dark small">Heart Failure with Cheyne-Stokes</strong>
                        <small class="text-muted">Synchronizes irregular nocturnal breathing.</small>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="condition-pill-card h-100 shadow-sm">
                    <i class="fa-solid fa-wheelchair text-info fs-4"></i>
                    <div>
                        <strong class="d-block text-dark small">High Cervical Spinal Injury</strong>
                        <small class="text-muted">Maintains vital ventilation for quad patients.</small>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="condition-pill-card h-100 shadow-sm">
                    <i class="fa-solid fa-dna text-primary fs-4"></i>
                    <div>
                        <strong class="d-block text-dark small">Muscular Dystrophy / Neuromuscular</strong>
                        <small class="text-muted">Targeted tidal volume guarantee via AVAPS.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. WHEN TO RENT VS WHEN TO BUY MEDICAL EQUIPMENT -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="text-center max-w-700 mx-auto mb-4">
            <span class="badge bg-danger bg-opacity-10 text-danger px-3 py-1 rounded-pill fw-semibold mb-1 small">Smart Guide</span>
            <h3 class="fw-bold text-dark mb-1">When to Rent vs When to Buy Medical Equipment</h3>
            <p class="text-muted small">Use this guide to decide whether renting or buying is the smarter choice for your patient's situation and recovery outlook.</p>
        </div>

        <div class="card border-0 shadow-sm rounded-4 overflow-hidden mb-4">
            <div class="table-responsive">
                <table class="table table-bordered table-compare table-hover mb-0">
                    <thead>
                        <tr>
                            <th style="width: 25%;">Decision Factor</th>
                            <th style="width: 37.5%;">Buying</th>
                            <th style="width: 37.5%; background-color: var(--dm-red); color: #fff;">Renting from DM Healthcare</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="fw-bold text-dark">Expected use duration</td>
                            <td class="text-muted">Buy if needed for more than 24 months</td>
                            <td class="text-dark fw-semibold bg-danger bg-opacity-10">Ideal for short or uncertain recovery period</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark">Upfront cost</td>
                            <td class="text-muted">High one-time payment required (₹45,000 - ₹1,50,000+)</td>
                            <td class="text-dark fw-semibold bg-danger bg-opacity-10">Low - pay only a small monthly rental (₹2,500 - ₹8,000)</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark">Maintenance and repairs</td>
                            <td class="text-muted">Your full responsibility & out-of-pocket expense</td>
                            <td class="text-dark fw-semibold bg-danger bg-opacity-10">Included - DM Healthcare handles all servicing & repairs</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark">Technical breakdown</td>
                            <td class="text-muted">Find and pay for your own service center delays</td>
                            <td class="text-dark fw-semibold bg-danger bg-opacity-10">24/7 support - emergency replacement machine sent if needed</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark">Equipment upgrade</td>
                            <td class="text-muted">Cannot switch models easily without resale loss</td>
                            <td class="text-dark fw-semibold bg-danger bg-opacity-10">Upgrade model anytime as doctor changes prescription</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark">Post-use storage</td>
                            <td class="text-muted">You are responsible for storing or discarding it</td>
                            <td class="text-dark fw-semibold bg-danger bg-opacity-10">Simply return to DM Healthcare - zero storage hassle</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark">Hygiene assurance</td>
                            <td class="text-muted">Clean and service yourself</td>
                            <td class="text-dark fw-semibold bg-danger bg-opacity-10">ISO 9001-sanitized & brand new filters before every rental delivery</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-dark">Minimum commitment</td>
                            <td class="text-muted">Lifetime commitment of the equipment</td>
                            <td class="text-dark fw-semibold bg-danger bg-opacity-10">Flexible - from 1 week / 1 month onwards</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card bg-light border border-danger border-opacity-25 rounded-4 p-3 p-md-4">
            <div class="row align-items-center g-3">
                <div class="col-lg-9">
                    <h6 class="fw-bold text-dark mb-1"><i class="fa-solid fa-lightbulb text-warning me-2"></i>DM Healthcare Clinical Recommendation:</h6>
                    <p class="text-muted small mb-0">
                        For post-surgery recovery, post-COVID care, and uncertain-duration rehabilitation, <strong>renting is almost always more cost-effective and stress-free</strong>. For permanent or lifelong conditions where need is certain for years, buying makes financial sense. Call us at <strong>(+91) 88606 00423</strong> and our respiratory therapists will help you make the best decision.
                    </p>
                </div>
                <div class="col-lg-3 text-lg-end">
                    <a href="tel:+918860600423" class="btn btn-dm-red rounded-pill fw-bold py-2 px-3 btn-sm">
                        <i class="fa-solid fa-phone me-1"></i> Speak to Expert
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 6. WHY CHOOSE DM HEALTHCARE -->
<section class="py-5 bg-light border-top border-bottom">
    <div class="container">
        <div class="text-center max-w-700 mx-auto mb-4">
            <span class="badge bg-secondary bg-opacity-10 text-secondary px-3 py-1 rounded-pill fw-semibold mb-1 small">Clinical Trust</span>
            <h3 class="fw-bold text-dark mb-1">Why Choose DM Healthcare for Respiratory Equipment on Rent</h3>
            <p class="text-muted small">DM Healthcare is a trusted respiratory equipment provider to families across Delhi NCR and North India.</p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 rounded-4 p-3 bg-white shadow-sm text-center">
                    <div class="rounded-circle bg-danger bg-opacity-10 text-dm-red d-inline-flex align-items-center justify-content-center mx-auto mb-3" style="width: 52px; height: 52px;">
                        <i class="fa-solid fa-sliders fs-4"></i>
                    </div>
                    <h6 class="fw-bold text-dark mb-1">Prescription Setup</h6>
                    <p class="text-muted small mb-0">Machine settings calibrated exactly as prescribed by your pulmonologist or intensivist.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 rounded-4 p-3 bg-white shadow-sm text-center">
                    <div class="rounded-circle bg-primary bg-opacity-10 text-primary d-inline-flex align-items-center justify-content-center mx-auto mb-3" style="width: 52px; height: 52px;">
                        <i class="fa-solid fa-user-doctor fs-4"></i>
                    </div>
                    <h6 class="fw-bold text-dark mb-1">Clinical Expertise</h6>
                    <p class="text-muted small mb-0">Our technicians are trained in respiratory therapy equipment setup, compliance, and mask fitting.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 rounded-4 p-3 bg-white shadow-sm text-center">
                    <div class="rounded-circle bg-success bg-opacity-10 text-success d-inline-flex align-items-center justify-content-center mx-auto mb-3" style="width: 52px; height: 52px;">
                        <i class="fa-solid fa-headset fs-4"></i>
                    </div>
                    <h6 class="fw-bold text-dark mb-1">24/7 Support</h6>
                    <p class="text-muted small mb-0">Call us any time for machine alarms, mask leaks, pressure queries, or rapid replacement.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 rounded-4 p-3 bg-white shadow-sm text-center">
                    <div class="rounded-circle bg-warning bg-opacity-10 text-dark d-inline-flex align-items-center justify-content-center mx-auto mb-3" style="width: 52px; height: 52px;">
                        <i class="fa-solid fa-bed-pulse fs-4"></i>
                    </div>
                    <h6 class="fw-bold text-dark mb-1">Full ICU at Home</h6>
                    <p class="text-muted small mb-0">We also provide critical care nurses to operate ventilators, manage tracheostomy, and care for complex patients.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 7. HOW TO RENT (4-STEP PROCESS) -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="text-center max-w-700 mx-auto mb-4">
            <span class="badge bg-danger bg-opacity-10 text-danger px-3 py-1 rounded-pill fw-semibold mb-1 small">Simple 4-Step Process</span>
            <h3 class="fw-bold text-dark mb-1">How to Rent BiPAP, CPAP or Ventilator from DM Healthcare</h3>
            <p class="text-muted small">We make home respiratory equipment setup effortless, fast, and clinically accurate.</p>
        </div>

        <div class="row g-4 text-center">
            <div class="col-sm-6 col-lg-3">
                <div class="p-3">
                    <span class="step-circle">1</span>
                    <h6 class="fw-bold text-dark mb-1">Call or WhatsApp</h6>
                    <p class="small text-muted mb-0">Share your doctor's prescription with the required machine type and pressure settings.</p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="p-3">
                    <span class="step-circle">2</span>
                    <h6 class="fw-bold text-dark mb-1">Prescription Review</h6>
                    <p class="small text-muted mb-0">Our clinical team reviews the prescription and selects the exact machine model & mask type.</p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="p-3">
                    <span class="step-circle">3</span>
                    <h6 class="fw-bold text-dark mb-1">Pay & Book</h6>
                    <p class="small text-muted mb-0">Pay advance rental. Machine settings are calibrated & programmed prior to dispatch.</p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="p-3">
                    <span class="step-circle">4</span>
                    <h6 class="fw-bold text-dark mb-1">Setup & Training</h6>
                    <p class="small text-muted mb-0">Technician sets up at bedside, demonstrates mask fitting, and trains family on daily operation.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 8. COMPLETE INVENTORY & PRICING LIST -->
<section class="py-5 bg-light border-top border-bottom" id="inventory">
    <div class="container">
        <div class="d-flex flex-wrap justify-content-between align-items-end mb-4">
            <div>
                <span class="badge bg-secondary bg-opacity-10 text-secondary px-3 py-1 rounded-pill fw-semibold mb-1 small">Our Fleet</span>
                <h3 class="fw-bold text-dark mb-0">Respiratory Equipment Available on Rent - Our Inventory</h3>
                <p class="text-muted small mb-0">Browse all respiratory equipment models with transparent pricing and instant booking.</p>
            </div>
            <a href="tel:+918860600423" class="btn btn-outline-dm-red rounded-pill fw-bold btn-sm mt-2 mt-sm-0">
                <i class="fa-solid fa-phone me-1"></i> Call +91 88606 00423 for Availability
            </a>
        </div>

        <div class="row g-3">
            <!-- 1. ResMed BiPAP -->
            <div class="col-md-6 col-lg-4">
                <div class="inventory-card p-3 shadow-sm">
                    <div>
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h6 class="fw-bold text-dark mb-0">ResMed BiPAP Machine</h6>
                            <span class="badge bg-danger bg-opacity-10 text-danger small">Popular</span>
                        </div>
                        <p class="small text-muted mb-2">High-end BiLevel ventilation for COPD, Hypercapnia, and post-ICU recovery. Whisper-quiet and ultra-reliable.</p>
                        <ul class="list-unstyled small text-muted mb-3" style="font-size: 0.78rem;">
                            <li><i class="fa-solid fa-check text-success me-1"></i> IPAP up to 25 cmH2O / EPAP 4-20</li>
                            <li><i class="fa-solid fa-check text-success me-1"></i> Includes HumidAir Humidifier</li>
                        </ul>
                    </div>
                    <div class="pt-2 border-top d-flex justify-content-between align-items-center">
                        <div>
                            <span class="d-block text-muted" style="font-size: 0.72rem;">Rental Price:</span>
                            <span class="fw-bold text-dm-red fs-6">₹4,500 <small class="text-muted">/mo</small></span>
                        </div>
                        <a href="https://wa.me/918860600423?text=I+want+to+book+ResMed+BiPAP+on+Rent" target="_blank" class="btn btn-dm-red rounded-pill btn-sm px-3 fw-bold">
                            Book Delivery
                        </a>
                    </div>
                </div>
            </div>

            <!-- 2. BiPAP Nidek -->
            <div class="col-md-6 col-lg-4">
                <div class="inventory-card p-3 shadow-sm">
                    <div>
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h6 class="fw-bold text-dark mb-0">BiPAP Nidek</h6>
                            <span class="badge bg-primary bg-opacity-10 text-primary small">Economical</span>
                        </div>
                        <p class="small text-muted mb-2">Sturdy American engineering, dual-pressure bilevel support for chronic bronchitis and respiratory relief.</p>
                        <ul class="list-unstyled small text-muted mb-3" style="font-size: 0.78rem;">
                            <li><i class="fa-solid fa-check text-success me-1"></i> Accurate trigger & cycle sensitivity</li>
                            <li><i class="fa-solid fa-check text-success me-1"></i> Easy-fill heated humidifier</li>
                        </ul>
                    </div>
                    <div class="pt-2 border-top d-flex justify-content-between align-items-center">
                        <div>
                            <span class="d-block text-muted" style="font-size: 0.72rem;">Rental Price:</span>
                            <span class="fw-bold text-dm-red fs-6">₹4,000 <small class="text-muted">/mo</small></span>
                        </div>
                        <a href="https://wa.me/918860600423?text=I+want+to+book+BiPAP+Nidek+on+Rent" target="_blank" class="btn btn-dm-red rounded-pill btn-sm px-3 fw-bold">
                            Book Delivery
                        </a>
                    </div>
                </div>
            </div>

            <!-- 3. CPAP Machine (Standard / Auto) -->
            <div class="col-md-6 col-lg-4">
                <div class="inventory-card p-3 shadow-sm">
                    <div>
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h6 class="fw-bold text-dark mb-0">Auto CPAP Machine</h6>
                            <span class="badge bg-success bg-opacity-10 text-success small">Sleep Apnea</span>
                        </div>
                        <p class="small text-muted mb-2">Continuous positive airway pressure for Obstructive Sleep Apnea. Eliminates loud snoring & daytime sleepiness.</p>
                        <ul class="list-unstyled small text-muted mb-3" style="font-size: 0.78rem;">
                            <li><i class="fa-solid fa-check text-success me-1"></i> Auto-titrating pressure 4-20 cmH2O</li>
                            <li><i class="fa-solid fa-check text-success me-1"></i> Complete with Nasal / Full-face mask</li>
                        </ul>
                    </div>
                    <div class="pt-2 border-top d-flex justify-content-between align-items-center">
                        <div>
                            <span class="d-block text-muted" style="font-size: 0.72rem;">Rental Price:</span>
                            <span class="fw-bold text-dm-red fs-6">₹2,500 - ₹3,500 <small class="text-muted">/mo</small></span>
                        </div>
                        <a href="https://wa.me/918860600423?text=I+want+to+book+Auto+CPAP+Machine+on+Rent" target="_blank" class="btn btn-dm-red rounded-pill btn-sm px-3 fw-bold">
                            Book Delivery
                        </a>
                    </div>
                </div>
            </div>

            <!-- 4. Topson BiPAP SoundSleep -->
            <div class="col-md-6 col-lg-4">
                <div class="inventory-card p-3 shadow-sm">
                    <div>
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h6 class="fw-bold text-dark mb-0">Topson BiPAP SoundSleep</h6>
                            <span class="badge bg-secondary bg-opacity-10 text-secondary small">Affordable</span>
                        </div>
                        <p class="small text-muted mb-2">Reliable home bilevel non-invasive ventilator with ergonomic UI and ultra-quiet motor for smooth sleep.</p>
                        <ul class="list-unstyled small text-muted mb-3" style="font-size: 0.78rem;">
                            <li><i class="fa-solid fa-check text-success me-1"></i> S / T / ST operational modes</li>
                            <li><i class="fa-solid fa-check text-success me-1"></i> Real-time tidal volume monitoring</li>
                        </ul>
                    </div>
                    <div class="pt-2 border-top d-flex justify-content-between align-items-center">
                        <div>
                            <span class="d-block text-muted" style="font-size: 0.72rem;">Rental Price:</span>
                            <span class="fw-bold text-dm-red fs-6">₹3,500 <small class="text-muted">/mo</small></span>
                        </div>
                        <a href="https://wa.me/918860600423?text=I+want+to+book+Topson+BiPAP+on+Rent" target="_blank" class="btn btn-dm-red rounded-pill btn-sm px-3 fw-bold">
                            Book Delivery
                        </a>
                    </div>
                </div>
            </div>

            <!-- 5. ResMed Lumis 150 VPAP 4G BiPAP -->
            <div class="col-md-6 col-lg-4">
                <div class="inventory-card p-3 shadow-sm">
                    <div>
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h6 class="fw-bold text-dark mb-0">ResMed Lumis 150 VPAP 4G</h6>
                            <span class="badge bg-danger bg-opacity-10 text-danger small">Advanced ST</span>
                        </div>
                        <p class="small text-muted mb-2">State-of-the-art non-invasive ventilator with iVAPS (intelligent Volume-Assured Pressure Support) & 4G connectivity.</p>
                        <ul class="list-unstyled small text-muted mb-3" style="font-size: 0.78rem;">
                            <li><i class="fa-solid fa-check text-success me-1"></i> iVAPS + Intelligent Backup Rate (iBR)</li>
                            <li><i class="fa-solid fa-check text-success me-1"></i> Remote Doctor Monitoring Cloud</li>
                        </ul>
                    </div>
                    <div class="pt-2 border-top d-flex justify-content-between align-items-center">
                        <div>
                            <span class="d-block text-muted" style="font-size: 0.72rem;">Rental Price:</span>
                            <span class="fw-bold text-dm-red fs-6">₹7,500 <small class="text-muted">/mo</small></span>
                        </div>
                        <a href="https://wa.me/918860600423?text=I+want+to+book+ResMed+Lumis+150+VPAP+on+Rent" target="_blank" class="btn btn-dm-red rounded-pill btn-sm px-3 fw-bold">
                            Book Delivery
                        </a>
                    </div>
                </div>
            </div>

            <!-- 6. ResMed AirSense 10 CPAP -->
            <div class="col-md-6 col-lg-4">
                <div class="inventory-card p-3 shadow-sm">
                    <div>
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h6 class="fw-bold text-dark mb-0">ResMed AirSense 10 Auto CPAP</h6>
                            <span class="badge bg-primary bg-opacity-10 text-primary small">Gold Standard</span>
                        </div>
                        <p class="small text-muted mb-2">The world's most trusted AutoSet CPAP. Features AutoRamp with sleep onset detection and Climate Control.</p>
                        <ul class="list-unstyled small text-muted mb-3" style="font-size: 0.78rem;">
                            <li><i class="fa-solid fa-check text-success me-1"></i> AutoSet algorithm with EPR relief</li>
                            <li><i class="fa-solid fa-check text-success me-1"></i> Built-in HumidAir & Heated Tube</li>
                        </ul>
                    </div>
                    <div class="pt-2 border-top d-flex justify-content-between align-items-center">
                        <div>
                            <span class="d-block text-muted" style="font-size: 0.72rem;">Rental Price:</span>
                            <span class="fw-bold text-dm-red fs-6">₹5,000 <small class="text-muted">/mo</small></span>
                        </div>
                        <a href="https://wa.me/918860600423?text=I+want+to+book+ResMed+AirSense+10+on+Rent" target="_blank" class="btn btn-dm-red rounded-pill btn-sm px-3 fw-bold">
                            Book Delivery
                        </a>
                    </div>
                </div>
            </div>

            <!-- 7. ResMed Floton ST BiPAP -->
            <div class="col-md-6 col-lg-4">
                <div class="inventory-card p-3 shadow-sm">
                    <div>
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h6 class="fw-bold text-dark mb-0">ResMed Floton ST BiPAP</h6>
                            <span class="badge bg-secondary bg-opacity-10 text-secondary small">Backup Rate</span>
                        </div>
                        <p class="small text-muted mb-2">Spontaneous/Timed (ST) mode bilevel ventilator designed for patients with respiratory muscle weakness.</p>
                        <ul class="list-unstyled small text-muted mb-3" style="font-size: 0.78rem;">
                            <li><i class="fa-solid fa-check text-success me-1"></i> Backup breathing rate (BPM) control</li>
                            <li><i class="fa-solid fa-check text-success me-1"></i> Comprehensive clinical alarms</li>
                        </ul>
                    </div>
                    <div class="pt-2 border-top d-flex justify-content-between align-items-center">
                        <div>
                            <span class="d-block text-muted" style="font-size: 0.72rem;">Rental Price:</span>
                            <span class="fw-bold text-dm-red fs-6">₹5,000 <small class="text-muted">/mo</small></span>
                        </div>
                        <a href="https://wa.me/918860600423?text=I+want+to+book+ResMed+Floton+ST+on+Rent" target="_blank" class="btn btn-dm-red rounded-pill btn-sm px-3 fw-bold">
                            Book Delivery
                        </a>
                    </div>
                </div>
            </div>

            <!-- 8. Evox NoahSleep 25ST / 30ST BiPAP -->
            <div class="col-md-6 col-lg-4">
                <div class="inventory-card p-3 shadow-sm">
                    <div>
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h6 class="fw-bold text-dark mb-0">Evox NoahSleep 25ST / 30ST</h6>
                            <span class="badge bg-danger bg-opacity-10 text-danger small">Rent or Buy</span>
                        </div>
                        <p class="small text-muted mb-2">Heavy duty hospital-grade ST BiPAP machine with target tidal volume and high pressure support up to 30 cmH2O.</p>
                        <ul class="list-unstyled small text-muted mb-3" style="font-size: 0.78rem;">
                            <li><i class="fa-solid fa-check text-success me-1"></i> Buy Price: ₹65,000 (Full Warranty)</li>
                            <li><i class="fa-solid fa-check text-success me-1"></i> Rent: ₹5,500 - ₹6,000 / month</li>
                        </ul>
                    </div>
                    <div class="pt-2 border-top d-flex justify-content-between align-items-center">
                        <div>
                            <span class="d-block text-muted" style="font-size: 0.72rem;">Rent / Buy:</span>
                            <span class="fw-bold text-dm-red fs-6">₹5,500 <small class="text-muted">/mo</small></span>
                        </div>
                        <a href="https://wa.me/918860600423?text=I+want+to+inquire+about+Evox+NoahSleep+BiPAP" target="_blank" class="btn btn-dm-red rounded-pill btn-sm px-3 fw-bold">
                            Rent / Buy
                        </a>
                    </div>
                </div>
            </div>

            <!-- 9. Evox NoahSleep 25A / 5A / TWINPAP -->
            <div class="col-md-6 col-lg-4">
                <div class="inventory-card p-3 shadow-sm">
                    <div>
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h6 class="fw-bold text-dark mb-0">Evox Auto BiPAP & CPAP Series</h6>
                            <span class="badge bg-success bg-opacity-10 text-success small">Evox Fleet</span>
                        </div>
                        <p class="small text-muted mb-2">Includes NoahSleep 25A Auto BiPAP (Buy ₹51,000), NoahSleep 5A CPAP (Buy ₹45,000), and Evox TWINPAP (Buy ₹45,000).</p>
                        <ul class="list-unstyled small text-muted mb-3" style="font-size: 0.78rem;">
                            <li><i class="fa-solid fa-check text-success me-1"></i> Full digital display & heated humidifier</li>
                            <li><i class="fa-solid fa-check text-success me-1"></i> Ready for same-day delivery</li>
                        </ul>
                    </div>
                    <div class="pt-2 border-top d-flex justify-content-between align-items-center">
                        <div>
                            <span class="d-block text-muted" style="font-size: 0.72rem;">Rent / Buy:</span>
                            <span class="fw-bold text-dm-red fs-6">₹3,500 - ₹4,500 <small class="text-muted">/mo</small></span>
                        </div>
                        <a href="https://wa.me/918860600423?text=I+want+to+inquire+about+Evox+CPAP+BiPAP+series" target="_blank" class="btn btn-dm-red rounded-pill btn-sm px-3 fw-bold">
                            Rent / Buy
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 9. ALL MEDICAL EQUIPMENT ON RENT (CROSS-SERVICE) -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="text-center max-w-700 mx-auto mb-4">
            <span class="badge bg-secondary bg-opacity-10 text-secondary px-3 py-1 rounded-pill fw-semibold mb-1 small">Complete Range</span>
            <h3 class="fw-bold text-dark mb-1">All Medical Equipment on Rent</h3>
            <p class="text-muted small">DM Healthcare provides home rental for all types of medical and rehabilitation equipment. Browse our full range below.</p>
        </div>

        <div class="row g-3">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border rounded-4 p-3 shadow-sm">
                    <h6 class="fw-bold text-dark mb-1"><i class="fa-solid fa-bed text-dm-red me-2"></i>Hospital Bed on Rent</h6>
                    <p class="small text-muted mb-3">Manual Fowler, semi-electric and full-electric ICU beds for post-surgery or bedridden patients.</p>
                    <a href="patient-beds-rent" class="btn btn-outline-dm-red btn-sm rounded-pill fw-bold mt-auto">View Hospital Beds</a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border rounded-4 p-3 shadow-sm">
                    <h6 class="fw-bold text-dark mb-1"><i class="fa-solid fa-wheelchair text-primary me-2"></i>Wheelchair on Rent</h6>
                    <p class="small text-muted mb-3">Standard, recliner, commode, electric motorised and stair climber wheelchairs for mobility assistance.</p>
                    <a href="wheelchairs" class="btn btn-outline-dm-red btn-sm rounded-pill fw-bold mt-auto">View Wheelchairs</a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border rounded-4 p-3 shadow-sm">
                    <h6 class="fw-bold text-dark mb-1"><i class="fa-solid fa-lungs text-success me-2"></i>Oxygen Concentrator on Rent</h6>
                    <p class="small text-muted mb-3">1LPM to 10LPM medical oxygen concentrators (93% purity) for COPD, hypoxia and chronic care.</p>
                    <a href="oxygen-concentrator" class="btn btn-outline-dm-red btn-sm rounded-pill fw-bold mt-auto">View Concentrators</a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border rounded-4 p-3 shadow-sm">
                    <h6 class="fw-bold text-dark mb-1"><i class="fa-solid fa-gas-pump text-danger me-2"></i>Oxygen Cylinder on Rent</h6>
                    <p class="small text-muted mb-3">B-type (10L / 1,500L gas) and D-type (47L jumbo) cylinders with regulator and 30-min emergency refill.</p>
                    <a href="oxygen-cylinder" class="btn btn-outline-dm-red btn-sm rounded-pill fw-bold mt-auto">View Oxygen Cylinders</a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border rounded-4 p-3 shadow-sm bg-light border-danger">
                    <h6 class="fw-bold text-dm-red mb-1"><i class="fa-solid fa-mask-ventilator me-2"></i>BiPAP / CPAP on Rent</h6>
                    <p class="small text-muted mb-3">BiPAP, CPAP and home ventilators for sleep apnea, COPD and respiratory failure.</p>
                    <span class="badge bg-danger text-white rounded-pill px-3 py-1 small align-self-start mt-auto">Currently Viewing</span>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border rounded-4 p-3 shadow-sm">
                    <h6 class="fw-bold text-dark mb-1"><i class="fa-solid fa-heart-pulse text-warning me-2"></i>ICU Equipment on Rent</h6>
                    <p class="small text-muted mb-3">Home ventilators, multi-para patient monitors, syringe pumps, and suction machines for complete home ICU setup.</p>
                    <a href="icu-care---critical-care" class="btn btn-outline-dm-red btn-sm rounded-pill fw-bold mt-auto">View ICU Setup</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 10. HOME CARE SERVICES FOR RESPIRATORY PATIENTS -->
<section class="py-5 bg-light border-top border-bottom">
    <div class="container">
        <div class="text-center max-w-700 mx-auto mb-4">
            <span class="badge bg-danger bg-opacity-10 text-danger px-3 py-1 rounded-pill fw-semibold mb-1 small">Integrated Clinical Care</span>
            <h3 class="fw-bold text-dark mb-1">Home Care Services for Respiratory Equipment Patients</h3>
            <p class="text-muted small">BiPAP, CPAP and ventilator patients need skilled clinical support at home. DM Healthcare provides critical care nurses, COPD management, and palliative care alongside your respiratory equipment — fully coordinated.</p>
        </div>

        <div class="row g-3">
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 rounded-4 p-3 bg-white shadow-sm">
                    <h6 class="fw-bold text-dark mb-1"><i class="fa-solid fa-hospital-user text-dm-red me-2"></i>ICU Care at Home</h6>
                    <p class="small text-muted mb-3">Critical care nurses for BiPAP, CPAP and home ventilator management at the bedside 12h / 24h.</p>
                    <a href="icu-care---critical-care" class="text-dm-red fw-bold small text-decoration-none mt-auto">Explore Service <i class="fa-solid fa-arrow-right ms-1"></i></a>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 rounded-4 p-3 bg-white shadow-sm">
                    <h6 class="fw-bold text-dark mb-1"><i class="fa-solid fa-lungs text-primary me-2"></i>COPD Care at Home</h6>
                    <p class="small text-muted mb-3">Specialized respiratory disease management including BiPAP therapy support, nebulization and breathing exercises.</p>
                    <a href="patient-care-at-home" class="text-dm-red fw-bold small text-decoration-none mt-auto">Explore Service <i class="fa-solid fa-arrow-right ms-1"></i></a>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 rounded-4 p-3 bg-white shadow-sm">
                    <h6 class="fw-bold text-dark mb-1"><i class="fa-solid fa-user-nurse text-success me-2"></i>Nursing at Home</h6>
                    <p class="small text-muted mb-3">Respiratory-trained nurses for overnight monitoring, mask compliance, vitals tracking, and machine alarm management.</p>
                    <a href="nursing-care" class="text-dm-red fw-bold small text-decoration-none mt-auto">Explore Service <i class="fa-solid fa-arrow-right ms-1"></i></a>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 rounded-4 p-3 bg-white shadow-sm">
                    <h6 class="fw-bold text-dark mb-1"><i class="fa-solid fa-hand-holding-heart text-warning me-2"></i>Palliative Care at Home</h6>
                    <p class="small text-muted mb-3">Symptom management, pain relief, and comfort care for patients with advanced respiratory conditions.</p>
                    <a href="elderly-care" class="text-dm-red fw-bold small text-decoration-none mt-auto">Explore Service <i class="fa-solid fa-arrow-right ms-1"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 11. CLIENT TESTIMONIALS -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="text-center max-w-700 mx-auto mb-4">
            <span class="badge bg-secondary bg-opacity-10 text-secondary px-3 py-1 rounded-pill fw-semibold mb-1 small">Real Patient Stories</span>
            <h3 class="fw-bold text-dark mb-1">Client Testimonials</h3>
            <p class="text-muted small">Read how our respiratory equipment and home healthcare have helped families breathe with peace of mind.</p>
        </div>

        <div class="row g-3">
            <!-- 1. Narinder Pal Singh -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border rounded-4 p-3 bg-white shadow-sm">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <div class="testimonial-avatar">N</div>
                        <div>
                            <h6 class="fw-bold text-dark mb-0 small">Narinder Pal Singh</h6>
                            <small class="text-muted" style="font-size: 0.72rem;">COPD Post-ICU Weaning</small>
                        </div>
                    </div>
                    <div class="text-warning small mb-2"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                    <p class="small text-muted mb-0" style="line-height: 1.5;">
                        "My father has severe COPD and needed a BiPAP machine at home after ICU discharge. DM Healthcare provided the machine with exact prescription settings. The technician explained every setting and alarm in detail. When we had a mask leak issue, they came the next morning and fixed it. Outstanding technical support."
                    </p>
                </div>
            </div>

            <!-- 2. Savita Bhatia -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border rounded-4 p-3 bg-white shadow-sm">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <div class="testimonial-avatar">S</div>
                        <div>
                            <h6 class="fw-bold text-dark mb-0 small">Savita Bhatia</h6>
                            <small class="text-muted" style="font-size: 0.72rem;">Sleep Apnea Auto CPAP</small>
                        </div>
                    </div>
                    <div class="text-warning small mb-2"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                    <p class="small text-muted mb-0" style="line-height: 1.5;">
                        "My husband has sleep apnea and was prescribed a CPAP machine. DM Healthcare provided an auto-CPAP with humidifier at a very affordable monthly rental. The setup was done at home and they called to follow up after 2 weeks. Very professional service — recommend DM Healthcare for all respiratory equipment needs."
                    </p>
                </div>
            </div>

            <!-- 3. Amandeep Kaur -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border rounded-4 p-3 bg-white shadow-sm">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <div class="testimonial-avatar">A</div>
                        <div>
                            <h6 class="fw-bold text-dark mb-0 small">Amandeep Kaur</h6>
                            <small class="text-muted" style="font-size: 0.72rem;">ALS Home Ventilator Care</small>
                        </div>
                    </div>
                    <div class="text-warning small mb-2"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                    <p class="small text-muted mb-0" style="line-height: 1.5;">
                        "We rented a home ventilator from DM Healthcare for my mother with ALS. This is very specialized equipment and we were worried about managing it at home. DM Healthcare provided a critical care nurse along with the ventilator and trained us on alarms and emergency procedures. Exceptional care and support."
                    </p>
                </div>
            </div>

            <!-- 4. Gurjeet Singh -->
            <div class="col-md-6 col-lg-6">
                <div class="card h-100 border rounded-4 p-3 bg-white shadow-sm">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <div class="testimonial-avatar">G</div>
                        <div>
                            <h6 class="fw-bold text-dark mb-0 small">Gurjeet Singh</h6>
                            <small class="text-muted" style="font-size: 0.72rem;">Post-COVID Recovery</small>
                        </div>
                    </div>
                    <div class="text-warning small mb-2"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                    <p class="small text-muted mb-0" style="line-height: 1.5;">
                        "Rented a BiPAP machine for my father's post-COVID respiratory recovery. DM Healthcare verified prescription settings and delivered same day. The 24/7 support line was critical — we called twice with alarm questions and each time got immediate help. A company you can truly rely on."
                    </p>
                </div>
            </div>

            <!-- 5. Sundeep Malhotra -->
            <div class="col-md-6 col-lg-6">
                <div class="card h-100 border rounded-4 p-3 bg-white shadow-sm">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <div class="testimonial-avatar">S</div>
                        <div>
                            <h6 class="fw-bold text-dark mb-0 small">Sundeep Malhotra</h6>
                            <small class="text-muted" style="font-size: 0.72rem;">ICU Discharge Support</small>
                        </div>
                    </div>
                    <div class="text-warning small mb-2"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                    <p class="small text-muted mb-0" style="line-height: 1.5;">
                        "My mother was discharged from ICU on BiPAP and DM Healthcare provided both the machine and nursing support at home in Delhi NCR. The transition from ICU to home was scary but they made it manageable. The ICU nurse and equipment together cost far less than a private hospital ICU room. Excellent service."
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 12. HOME CARE KNOWLEDGE CENTRE -->
<section class="py-5 bg-light border-top border-bottom">
    <div class="container">
        <div class="text-center max-w-700 mx-auto mb-4">
            <span class="badge bg-secondary bg-opacity-10 text-secondary px-3 py-1 rounded-pill fw-semibold mb-1 small">Clinical Insights</span>
            <h3 class="fw-bold text-dark mb-1">Home Care Knowledge Centre</h3>
            <p class="text-muted small">Practical guides from our clinical team to help you make better decisions for your patient at home.</p>
        </div>

        <div class="row g-3">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border rounded-4 p-3 bg-white shadow-sm">
                    <span class="badge bg-primary bg-opacity-10 text-primary small align-self-start mb-2">Discharge Guide</span>
                    <h6 class="fw-bold text-dark mb-1">How to Set Up Home Care After Hospital Discharge</h6>
                    <p class="small text-muted mb-0">Equipment checklist, nursing needs and care plan for patients coming home after surgery or a long ICU admission.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border rounded-4 p-3 bg-white shadow-sm">
                    <span class="badge bg-danger bg-opacity-10 text-danger small align-self-start mb-2">Hospital Beds</span>
                    <h6 class="fw-bold text-dark mb-1">Manual vs Electric Patient Bed - Which to Rent?</h6>
                    <p class="small text-muted mb-0">A practical guide to choosing the right hospital bed based on patient mobility, caregiver assistance, and home setup.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border rounded-4 p-3 bg-white shadow-sm">
                    <span class="badge bg-success bg-opacity-10 text-success small align-self-start mb-2">Respiratory Therapy</span>
                    <h6 class="fw-bold text-dark mb-1">BiPAP at Home - Complete Setup and Care Guide</h6>
                    <p class="small text-muted mb-0">How BiPAP works, when it is prescribed, how to prevent mask leaks, and how to manage therapy safely at home.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border rounded-4 p-3 bg-white shadow-sm">
                    <span class="badge bg-info bg-opacity-10 text-dark small align-self-start mb-2">Oxygen Therapy</span>
                    <h6 class="fw-bold text-dark mb-1">Oxygen Concentrator vs Oxygen Cylinder</h6>
                    <p class="small text-muted mb-0">When to use a concentrator and when a cylinder is more practical — with cost, mobility, and flow rate comparison.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border rounded-4 p-3 bg-white shadow-sm">
                    <span class="badge bg-warning bg-opacity-10 text-dark small align-self-start mb-2">Checklist</span>
                    <h6 class="fw-bold text-dark mb-1">10 Things to Check Before Renting Medical Equipment</h6>
                    <p class="small text-muted mb-0">Avoid common mistakes when renting hospital beds, wheelchairs or respiratory equipment at home.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border rounded-4 p-3 bg-white shadow-sm">
                    <span class="badge bg-danger bg-opacity-10 text-danger small align-self-start mb-2">Critical Care</span>
                    <h6 class="fw-bold text-dark mb-1">ICU at Home vs Hospital ICU: Complete Guide for Families</h6>
                    <p class="small text-muted mb-0">When a loved one needs intensive medical care, understand how home ICU provides equal clinical safety at 70% lower cost.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 13. COMPREHENSIVE CLINICAL FAQS (ALL 14 QUESTIONS) -->
<section class="py-5 bg-white">
    <div class="container max-w-800">
        <div class="text-center mb-4">
            <span class="badge bg-danger bg-opacity-10 text-danger px-3 py-1 rounded-pill fw-semibold mb-1 small">Everything You Need to Know</span>
            <h3 class="fw-bold text-dark">BiPAP, CPAP & Ventilator Rental - Frequently Asked Questions</h3>
        </div>

        <div class="accordion accordion-flush shadow-sm rounded-4 overflow-hidden border" id="bipapFullFaq">
            <!-- Q1 -->
            <div class="accordion-item border-bottom">
                <h2 class="accordion-header" id="faqH1">
                    <button class="accordion-button fw-bold text-dark py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqC1">
                        Q1. What is the difference between BiPAP and CPAP?
                    </button>
                </h2>
                <div id="faqC1" class="accordion-collapse collapse show" data-bs-parent="#bipapFullFaq">
                    <div class="accordion-body text-muted small lh-base">
                        <strong>CPAP (Continuous Positive Airway Pressure)</strong> delivers a single constant pressure to keep the airway open, primarily used for Obstructive Sleep Apnea (OSA). <strong>BiPAP (Bilevel Positive Airway Pressure)</strong> delivers two distinct pressure levels: a higher pressure (IPAP) when inhaling to assist breathing, and a lower pressure (EPAP) when exhaling so the patient can breathe out easily without fighting air resistance. BiPAP is essential for COPD, high CO2 retention, and respiratory muscle weakness.
                    </div>
                </div>
            </div>

            <!-- Q2 -->
            <div class="accordion-item border-bottom">
                <h2 class="accordion-header" id="faqH2">
                    <button class="accordion-button collapsed fw-bold text-dark py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqC2">
                        Q2. How much does BiPAP machine on rent cost per month?
                    </button>
                </h2>
                <div id="faqC2" class="accordion-collapse collapse" data-bs-parent="#bipapFullFaq">
                    <div class="accordion-body text-muted small lh-base">
                        BiPAP machine rental typically starts from <strong>₹3,500 to ₹4,500 per month</strong> for standard Auto-BiPAP models (such as Nidek, Topson, or ResMed), and <strong>₹5,000 to ₹7,500 per month</strong> for advanced BiPAP ST or AVAPS models with backup respiratory rates. The rental includes the machine, heated humidifier, tubing, mask, and full technician titration support.
                    </div>
                </div>
            </div>

            <!-- Q3 -->
            <div class="accordion-item border-bottom">
                <h2 class="accordion-header" id="faqH3">
                    <button class="accordion-button collapsed fw-bold text-dark py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqC3">
                        Q3. Do I need a doctor's prescription for BiPAP or CPAP rental?
                    </button>
                </h2>
                <div id="faqC3" class="accordion-collapse collapse" data-bs-parent="#bipapFullFaq">
                    <div class="accordion-body text-muted small lh-base">
                        Yes. Because BiPAP and CPAP machines deliver pressurized air directly into the respiratory system, correct pressure settings (IPAP, EPAP, Ramp, Backup Rate) must be prescribed by a pulmonologist, intensivist, or sleep specialist based on your sleep study (PSG) or arterial blood gas (ABG) report. Our technicians calibrate the machine strictly to these prescription settings before bedside setup.
                    </div>
                </div>
            </div>

            <!-- Q4 -->
            <div class="accordion-item border-bottom">
                <h2 class="accordion-header" id="faqH4">
                    <button class="accordion-button collapsed fw-bold text-dark py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqC4">
                        Q4. Which conditions require a BiPAP machine at home?
                    </button>
                </h2>
                <div id="faqC4" class="accordion-collapse collapse" data-bs-parent="#bipapFullFaq">
                    <div class="accordion-body text-muted small lh-base">
                        BiPAP is prescribed for COPD (Chronic Obstructive Pulmonary Disease) with hypercapnia (high CO2 in blood), post-ICU extubation and weaning, Obesity Hypoventilation Syndrome (OHS), ALS / Motor Neurone Disease, Muscular Dystrophy, congestive heart failure, and complex/central sleep apnea.
                    </div>
                </div>
            </div>

            <!-- Q5 -->
            <div class="accordion-item border-bottom">
                <h2 class="accordion-header" id="faqH5">
                    <button class="accordion-button collapsed fw-bold text-dark py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqC5">
                        Q5. What is the difference between BiPAP and a ventilator?
                    </button>
                </h2>
                <div id="faqC5" class="accordion-collapse collapse" data-bs-parent="#bipapFullFaq">
                    <div class="accordion-body text-muted small lh-base">
                        A BiPAP is a non-invasive ventilation device that assists a spontaneously breathing patient through a face or nasal mask. A mechanical ventilator is an advanced life-support device that can completely take over breathing for a patient who cannot breathe independently, supporting both invasive ventilation (via tracheostomy or endotracheal tube) and non-invasive modes with dedicated battery backup and critical volume control alarms.
                    </div>
                </div>
            </div>

            <!-- Q6 -->
            <div class="accordion-item border-bottom">
                <h2 class="accordion-header" id="faqH6">
                    <button class="accordion-button collapsed fw-bold text-dark py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqC6">
                        Q6. Can a ventilator-dependent patient be managed at home?
                    </button>
                </h2>
                <div id="faqC6" class="accordion-collapse collapse" data-bs-parent="#bipapFullFaq">
                    <div class="accordion-body text-muted small lh-base">
                        Yes, absolutely. With modern portable home ventilators, multi-para monitors, suction machines, oxygen concentrators, and 24/7 critical care ICU nursing from DM Healthcare, patients with tracheostomy, ALS, MND, or spinal trauma can be safely and comfortably managed at home at a fraction of hospital ICU costs.
                    </div>
                </div>
            </div>

            <!-- Q7 -->
            <div class="accordion-item border-bottom">
                <h2 class="accordion-header" id="faqH7">
                    <button class="accordion-button collapsed fw-bold text-dark py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqC7">
                        Q7. Do you provide training on how to use BiPAP and CPAP at home?
                    </button>
                </h2>
                <div id="faqC7" class="accordion-collapse collapse" data-bs-parent="#bipapFullFaq">
                    <div class="accordion-body text-muted small lh-base">
                        Yes. Our certified respiratory technician conducts a live bedside demonstration at your home during delivery. We train the family and patient on correct mask placement, headgear strap adjustment, humidifier filling, power on/off sequences, and basic alarm management.
                    </div>
                </div>
            </div>

            <!-- Q8 -->
            <div class="accordion-item border-bottom">
                <h2 class="accordion-header" id="faqH8">
                    <button class="accordion-button collapsed fw-bold text-dark py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqC8">
                        Q8. What is included in BiPAP machine rental from DM Healthcare?
                    </button>
                </h2>
                <div id="faqC8" class="accordion-collapse collapse" data-bs-parent="#bipapFullFaq">
                    <div class="accordion-body text-muted small lh-base">
                        The rental kit includes: (1) BiPAP machine unit, (2) Heated humidifier water chamber, (3) Prescribed mask (Nasal or Full-face), (4) Headgear & chin strap, (5) Flexible circuit tubing, (6) Power adapter, (7) Extra dust filters, (8) On-site titration & training, and (9) 24/7 technical hotline support.
                    </div>
                </div>
            </div>

            <!-- Q9 -->
            <div class="accordion-item border-bottom">
                <h2 class="accordion-header" id="faqH9">
                    <button class="accordion-button collapsed fw-bold text-dark py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqC9">
                        Q9. How do I clean and maintain the BiPAP or CPAP machine at home?
                    </button>
                </h2>
                <div id="faqC9" class="accordion-collapse collapse" data-bs-parent="#bipapFullFaq">
                    <div class="accordion-body text-muted small lh-base">
                        Clean the mask cushion and humidifier chamber daily using mild soapy water or baby shampoo (avoid bleach or harsh alcohol). Rinse thoroughly and air dry away from direct sunlight. Wash the flexible tubing once a week. Use only distilled or RO water in the heated humidifier to prevent mineral scaling.
                    </div>
                </div>
            </div>

            <!-- Q10 -->
            <div class="accordion-item border-bottom">
                <h2 class="accordion-header" id="faqH10">
                    <button class="accordion-button collapsed fw-bold text-dark py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqC10">
                        Q10. What is respiratory equipment and which devices does it include?
                    </button>
                </h2>
                <div id="faqC10" class="accordion-collapse collapse" data-bs-parent="#bipapFullFaq">
                    <div class="accordion-body text-muted small lh-base">
                        Respiratory equipment comprises medical devices engineered to assist or restore pulmonary respiration and oxygenation. It includes CPAP machines, BiPAP/VPAP non-invasive ventilators, portable home mechanical ventilators, oxygen concentrators (5L/10L), medical oxygen cylinders, nebulizers, and airway suction machines.
                    </div>
                </div>
            </div>

            <!-- Q11 -->
            <div class="accordion-item border-bottom">
                <h2 class="accordion-header" id="faqH11">
                    <button class="accordion-button collapsed fw-bold text-dark py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqC11">
                        Q11. Why is non-invasive ventilation (NIV) preferred over invasive ventilation for home use?
                    </button>
                </h2>
                <div id="faqC11" class="accordion-collapse collapse" data-bs-parent="#bipapFullFaq">
                    <div class="accordion-body text-muted small lh-base">
                        Non-invasive ventilation delivers pressurized air via a mask without requiring surgical tracheal intubation. This drastically lowers the risk of ventilator-associated pneumonia (VAP), preserves normal swallowing, speech, and coughing, and enables patients to recover comfortably in their own home environment.
                    </div>
                </div>
            </div>

            <!-- Q12 -->
            <div class="accordion-item border-bottom">
                <h2 class="accordion-header" id="faqH12">
                    <button class="accordion-button collapsed fw-bold text-dark py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqC12">
                        Q12. How does a BiPAP machine help a COPD or respiratory failure patient breathe at home?
                    </button>
                </h2>
                <div id="faqC12" class="accordion-collapse collapse" data-bs-parent="#bipapFullFaq">
                    <div class="accordion-body text-muted small lh-base">
                        In COPD, inflamed airways and damaged alveoli cause carbon dioxide to get trapped. The BiPAP machine delivers a higher inspiratory positive airway pressure (IPAP) that expands tired lungs to take in oxygen, and drops down to a lower expiratory pressure (EPAP) so the patient can effortlessly exhale and blow off trapped CO2, preventing acidosis and emergency hospitalization.
                    </div>
                </div>
            </div>

            <!-- Q13 -->
            <div class="accordion-item border-bottom">
                <h2 class="accordion-header" id="faqH13">
                    <button class="accordion-button collapsed fw-bold text-dark py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqC13">
                        Q13. What is a nebulizer and how is it used alongside BiPAP or respiratory therapy?
                    </button>
                </h2>
                <div id="faqC13" class="accordion-collapse collapse" data-bs-parent="#bipapFullFaq">
                    <div class="accordion-body text-muted small lh-base">
                        A nebulizer converts liquid bronchodilators or steroid medications (e.g. Duolin, Budecort) into a fine aerosol mist for direct inhalation into bronchial passages. It is often administered 15 to 30 minutes before BiPAP sessions to open up airways and loosen chest mucus for maximum therapy efficiency.
                    </div>
                </div>
            </div>

            <!-- Q14 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqH14">
                    <button class="accordion-button collapsed fw-bold text-dark py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqC14">
                        Q14. Which cities does DM Healthcare provide BiPAP and CPAP on rent?
                    </button>
                </h2>
                <div id="faqC14" class="accordion-collapse collapse" data-bs-parent="#bipapFullFaq">
                    <div class="accordion-body text-muted small lh-base">
                        DM Healthcare provides same-day bedside setup and 24/7 support across <strong>Faridabad, Noida, Greater Noida, South Delhi, Central Delhi, West Delhi, North Delhi, Gurugram, Ghaziabad</strong>, as well as Chandigarh Tricity (Mohali, Panchkula, Zirakpur), Ludhiana, Jalandhar, Patiala, Amritsar, Ambala, Karnal, Panipat, and major cities across North India.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 14. CITY COVERAGE BAR & FINAL CTA -->
<section class="py-5 bg-dark text-white">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-8">
                <span class="badge bg-danger text-white rounded-pill px-3 py-1 small fw-bold mb-2">Doorstep Service</span>
                <h3 class="fw-bold mb-2">Respiratory Equipment on Rent — Available Across Delhi NCR & North India</h3>
                <p class="text-light opacity-75 small mb-3">
                    Same-day delivery, technician setup, and bedside mask fitting available in:
                </p>
                <div class="d-flex flex-wrap gap-2 small">
                    <span class="badge bg-secondary text-light py-2 px-3">Faridabad</span>
                    <span class="badge bg-secondary text-light py-2 px-3">Noida & Greater Noida</span>
                    <span class="badge bg-secondary text-light py-2 px-3">South & Central Delhi</span>
                    <span class="badge bg-secondary text-light py-2 px-3">Gurugram (Gurgaon)</span>
                    <span class="badge bg-secondary text-light py-2 px-3">Ghaziabad</span>
                    <span class="badge bg-secondary text-light py-2 px-3">Chandigarh</span>
                    <span class="badge bg-secondary text-light py-2 px-3">Mohali</span>
                    <span class="badge bg-secondary text-light py-2 px-3">Panchkula</span>
                    <span class="badge bg-secondary text-light py-2 px-3">Ludhiana</span>
                    <span class="badge bg-secondary text-light py-2 px-3">Jalandhar</span>
                    <span class="badge bg-secondary text-light py-2 px-3">Patiala</span>
                    <span class="badge bg-secondary text-light py-2 px-3">Amritsar</span>
                </div>
            </div>

            <div class="col-lg-4 text-lg-end">
                <div class="card bg-secondary bg-opacity-25 border border-secondary rounded-4 p-4 text-center">
                    <h6 class="text-white fw-bold mb-1">Prescription Review & Setup</h6>
                    <span class="text-dm-red fw-bold fs-4 d-block mb-3">+91 88606 00423</span>
                    <a href="tel:+918860600423" class="btn btn-dm-red rounded-pill w-100 fw-bold py-2 mb-2">
                        <i class="fa-solid fa-phone me-1"></i> Call Now (+91 88606 00423)
                    </a>
                    <a href="https://wa.me/918860600423?text=I+need+BiPAP+CPAP+on+Rent" target="_blank" class="btn btn-success rounded-pill w-100 fw-bold py-2 btn-sm">
                        <i class="fa-brands fa-whatsapp me-1"></i> WhatsApp Prescription
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$frontend_custom_sections = ob_get_clean();
