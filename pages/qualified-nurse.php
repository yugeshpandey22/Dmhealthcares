<?php
/**
 * DM Healthcare - Qualified & Registered Nurse (GNM / B.Sc) at Home
 * Premium, Hospital-Grade Home Nursing Care Portal
 */

$display_title = "Qualified & Registered Nurses at Home";
$seo_title = "Hire Qualified Nurses (GNM / B.Sc) at Home in Delhi NCR - DM Healthcare";
$seo_desc = "Book certified, registered GNM and B.Sc nurses for home healthcare in Delhi NCR, Faridabad, Noida, Gurugram & Palwal. 12-hr & 24-hr shifts for ICU, post-op, and critical bedside nursing.";
$short_desc = "Hospital-standard clinical nursing delivered right at your home by council-registered, police-verified GNM & B.Sc nurses with 24/7 doctor supervision.";
$category_name = "Home Care";
$hide_default_welcome = true;

$frontend_custom_sections = '
<style>
:root {
    --dm-brand-red: #d80000;
    --dm-brand-red-dark: #b00000;
    --dm-brand-dark: #121418;
    --dm-brand-charcoal: #333333;
}

/* Hero Box */
.nurse-hero-card {
    background: radial-gradient(circle at top right, rgba(216, 0, 0, 0.08) 0%, transparent 60%),
                radial-gradient(circle at bottom left, rgba(13, 110, 253, 0.04) 0%, transparent 50%),
                linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
    border-radius: 24px;
    padding: 40px 32px;
    border: 1px solid rgba(226, 232, 240, 0.9);
    box-shadow: 0 10px 30px rgba(15, 23, 42, 0.04);
    margin-bottom: 40px;
}

.nurse-feature-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 20px;
    padding: 26px 22px;
    height: 100%;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(0,0,0,0.02);
}
.nurse-feature-card:hover {
    transform: translateY(-5px);
    border-color: #d80000;
    box-shadow: 0 15px 35px rgba(216, 0, 0, 0.08);
}

.nurse-icon-circle {
    width: 52px;
    height: 52px;
    border-radius: 16px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 1.35rem;
    margin-bottom: 16px;
    background: rgba(216, 0, 0, 0.1);
    color: #d80000;
}

.shift-badge-box {
    background: #ffffff;
    border-radius: 18px;
    border: 1px solid #e2e8f0;
    padding: 24px;
    text-align: center;
    transition: all 0.3s ease;
    height: 100%;
}
.shift-badge-box:hover {
    border-color: #d80000;
    transform: translateY(-4px);
    box-shadow: 0 12px 28px rgba(216, 0, 0, 0.08);
}
.shift-price-tag {
    font-size: 1.5rem;
    font-weight: 800;
    color: #d80000;
}
</style>

<div class="mt-4">
    <!-- 1. Hero Introduction Card -->
    <div class="nurse-hero-card">
        <div class="row align-items-center g-4">
            <div class="col-lg-8">
                <span class="badge px-3 py-2 rounded-pill fw-bold mb-3 shadow-sm" style="background: rgba(216, 0, 0, 0.1); color: #d80000; font-size: 0.82rem; letter-spacing: 0.8px;">
                    <i class="fa-solid fa-user-nurse me-1"></i> COUNCIL-REGISTERED GNM & B.SC NURSES
                </span>
                <h1 class="fw-bolder text-dark display-6 mb-3" style="letter-spacing: -0.5px;">
                    Hospital-Grade <span style="color: #d80000;">Qualified Nursing Care</span> at Home
                </h1>
                <p class="text-muted lead fs-6 mb-4" style="line-height: 1.8;">
                    Get dedicated clinical care from government-registered, background-verified male & female nurses. From ICU ventilator management, IV infusions, wound debridement, and tracheostomy care to post-operative monitoring across Faridabad, Noida, Delhi & Gurugram.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="tel:+919319149644" class="btn btn-danger px-4 py-3 rounded-pill fw-bold shadow-sm d-inline-flex align-items-center gap-2" style="background: #d80000; border-color: #d80000;">
                        <i class="fa-solid fa-phone"></i> Book a Nurse: +91 93191 49644
                    </a>
                    <a href="https://wa.me/919319149644?text=Hello%20DM%20Healthcare,%20I%20need%20a%20Qualified%20Nurse%20at%20home." target="_blank" class="btn btn-outline-success px-4 py-3 rounded-pill fw-bold d-inline-flex align-items-center gap-2">
                        <i class="fa-brands fa-whatsapp"></i> WhatsApp Booking
                    </a>
                </div>
            </div>
            <div class="col-lg-4 text-lg-end">
                <div class="p-4 bg-white rounded-4 border shadow-sm text-center">
                    <div class="rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px; background: rgba(216, 0, 0, 0.1); color: #d80000;">
                        <i class="fa-solid fa-clock-rotate-left fs-3"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-1">30–60 Mins Setup</h5>
                    <p class="text-muted small mb-3">Rapid Nurse Deployment across NCR</p>
                    <span class="badge bg-success bg-opacity-10 text-success fw-bold px-3 py-2 rounded-pill w-100">
                        <i class="fa-solid fa-circle-check me-1"></i> 100% Police Verified
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- 2. Core Clinical Nursing Procedures -->
    <div class="mb-5">
        <div class="text-center mb-4">
            <span class="text-uppercase fw-bold small text-danger" style="color: #d80000 !important; letter-spacing: 1.2px;">Clinical Capabilities</span>
            <h3 class="fw-bold text-dark mt-1">Specialized Nursing Procedures at Home</h3>
            <p class="text-muted mx-auto" style="max-width: 650px;">Our qualified nursing staff is certified to perform hospital-level interventions with sterile aseptic techniques.</p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="nurse-feature-card">
                    <div class="nurse-icon-circle">
                        <i class="fa-solid fa-syringe"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">IV Drips & Injections</h5>
                    <p class="text-muted small mb-0">Safe cannulation, continuous IV infusion therapy, electrolyte balancing, and intramuscular/subcutaneous injections.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="nurse-feature-card">
                    <div class="nurse-icon-circle">
                        <i class="fa-solid fa-bandage"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Complex Wound Dressing</h5>
                    <p class="text-muted small mb-0">Sterile care for surgical incisions, diabetic foot ulcers, Grade 1-4 bedsores, and burn dressing changes.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="nurse-feature-card">
                    <div class="nurse-icon-circle">
                        <i class="fa-solid fa-lungs"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Tracheostomy & Suctioning</h5>
                    <p class="text-muted small mb-0">Endotracheal tube suctioning, inner cannula cleaning, stoma dressing, and oxygen saturation management.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="nurse-feature-card">
                    <div class="nurse-icon-circle">
                        <i class="fa-solid fa-heart-pulse"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">ICU & Critical Care</h5>
                    <p class="text-muted small mb-0">Ventilator & BiPAP monitoring, continuous multi-para vitals logging, arterial lines, and emergency doctor coordination.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="nurse-feature-card">
                    <div class="nurse-icon-circle">
                        <i class="fa-solid fa-vial"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Ryle\'s Tube & Feeding</h5>
                    <p class="text-muted small mb-0">NG tube insertion, enteral nutrition administration, aspiration prevention, and tube flushing protocol.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="nurse-feature-card">
                    <div class="nurse-icon-circle">
                        <i class="fa-solid fa-water"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Catheterization (Foley\'s)</h5>
                    <p class="text-muted small mb-0">Aseptic urinary catheter insertion, bag drainage monitoring, bladder wash, and blockage management.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="nurse-feature-card">
                    <div class="nurse-icon-circle">
                        <i class="fa-solid fa-capsules"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Medication Management</h5>
                    <p class="text-muted small mb-0">Doctor-prescribed dose calculations, timing accuracy, insulin charting, and adverse reaction tracking.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="nurse-feature-card">
                    <div class="nurse-icon-circle">
                        <i class="fa-solid fa-bed"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Post-Surgery Rehabilitation</h5>
                    <p class="text-muted small mb-0">Post-ortho, cardiac, neuro, or oncological recovery care with 2-hourly turning and pain management.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- 3. Flexible Duty Shift Packages -->
    <div class="mb-5 p-4 p-lg-5 bg-white rounded-4 border shadow-sm">
        <div class="text-center mb-5">
            <span class="text-uppercase fw-bold small text-danger" style="color: #d80000 !important; letter-spacing: 1.2px;">Custom Care Plans</span>
            <h3 class="fw-bold text-dark mt-1">Flexible Home Nursing Shifts</h3>
            <p class="text-muted mx-auto" style="max-width: 600px;">Choose a duty shift that matches your family\'s routine and patient\'s clinical acuity.</p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="shift-badge-box">
                    <span class="badge bg-danger bg-opacity-10 text-danger rounded-pill px-3 py-1 fw-bold mb-3">Day / Night Shift</span>
                    <h5 class="fw-bold text-dark">12-Hour Nursing Shift</h5>
                    <p class="text-muted small mb-3">Dedicated 12-hour continuous day (8 AM - 8 PM) or night duty for active monitoring and medication.</p>
                    <ul class="list-unstyled text-start small text-muted mb-4">
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Timely vitals charting</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> IV & wound care included</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Hygiene & feeding support</li>
                    </ul>
                    <a href="tel:+919319149644" class="btn btn-outline-danger w-100 rounded-pill fw-bold">Book 12-Hr Shift</a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="shift-badge-box border-danger" style="border-width: 2px;">
                    <span class="badge bg-danger text-white rounded-pill px-3 py-1 fw-bold mb-3">Most Prescribed</span>
                    <h5 class="fw-bold text-dark">24-Hour Live-In Nurse</h5>
                    <p class="text-muted small mb-3">Round-the-clock bedside nursing for critical ICU, tracheostomy, cancer, or paralyzed patients.</p>
                    <ul class="list-unstyled text-start small text-muted mb-4">
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> 24x7 Continuous bedside nurse</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Night emergency response</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Free replacement guarantee</li>
                    </ul>
                    <a href="tel:+919319149644" class="btn btn-danger w-100 rounded-pill fw-bold" style="background: #d80000; border-color: #d80000;">Book 24-Hr Nurse</a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="shift-badge-box">
                    <span class="badge bg-primary bg-opacity-10 text-primary rounded-pill px-3 py-1 fw-bold mb-3">On-Demand Visit</span>
                    <h5 class="fw-bold text-dark">Short Procedure Visits</h5>
                    <p class="text-muted small mb-3">Single-visit nursing support for specific procedures like IV cannula, catheter change, or dressing.</p>
                    <ul class="list-unstyled text-start small text-muted mb-4">
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> 30-45 mins doorstep visit</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Sterile consumables check</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Same-day urgent slots</li>
                    </ul>
                    <a href="tel:+919319149644" class="btn btn-outline-dark w-100 rounded-pill fw-bold">Request Procedure</a>
                </div>
            </div>
        </div>
    </div>
</div>
';
?>
