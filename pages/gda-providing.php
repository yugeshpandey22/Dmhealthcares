<?php
/**
 * GDA Providing Services (General Duty Assistant)
 * DM Healthcare Home & Hospital Support
 */

$display_title = "GDA Providing Services at Home & Hospital";
$seo_title = "Certified GDA Providing Services at Home in Delhi NCR - DM Healthcare";
$seo_desc = "Hire certified, hospital-trained General Duty Assistant (GDA) staffing for bedside home & hospital care across Delhi, Noida, Faridabad, Gurugram & Palwal. 12-hr & 24-hr shifts.";
$short_desc = "Professional, police-verified General Duty Assistant (GDA) providing services for bedside hygiene, clinical vitals charting, Ryle\'s tube feeding, and mobility support.";
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

/* Hero Section */
.gda-prov-hero {
    background: radial-gradient(circle at top right, rgba(216, 0, 0, 0.08) 0%, transparent 60%),
                radial-gradient(circle at bottom left, rgba(13, 110, 253, 0.04) 0%, transparent 50%),
                linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
    border-radius: 24px;
    padding: 42px 32px;
    border: 1px solid rgba(226, 232, 240, 0.9);
    box-shadow: 0 10px 30px rgba(15, 23, 42, 0.04);
    margin-bottom: 40px;
}

/* Feature Cards */
.gda-prov-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 20px;
    padding: 26px 22px;
    height: 100%;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(0,0,0,0.02);
}
.gda-prov-card:hover {
    transform: translateY(-5px);
    border-color: #d80000;
    box-shadow: 0 15px 35px rgba(216, 0, 0, 0.08);
}

.gda-prov-icon {
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

/* Shift Box */
.gda-prov-shift {
    background: #ffffff;
    border-radius: 20px;
    border: 1px solid #e2e8f0;
    padding: 28px 24px;
    text-align: center;
    transition: all 0.3s ease;
    height: 100%;
}
.gda-prov-shift:hover {
    border-color: #d80000;
    transform: translateY(-4px);
    box-shadow: 0 12px 28px rgba(216, 0, 0, 0.08);
}

/* Condition Pill */
.gda-condition-pill {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 18px 20px;
    display: flex;
    align-items: center;
    gap: 16px;
    transition: all 0.3s ease;
}
.gda-condition-pill:hover {
    border-color: #d80000;
    transform: translateX(4px);
    box-shadow: 0 6px 18px rgba(216, 0, 0, 0.06);
}

/* Step Badge */
.gda-prov-step {
    width: 44px;
    height: 44px;
    border-radius: 50%;
    background: #d80000;
    color: white;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-weight: 800;
    font-size: 1.15rem;
    margin-bottom: 14px;
    box-shadow: 0 4px 10px rgba(216, 0, 0, 0.3);
}
</style>

<div class="mt-4">
    
    <!-- 1. Hero Introduction Section -->
    <div class="gda-prov-hero">
        <div class="row align-items-center g-4">
            <div class="col-lg-8">
                <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill fw-bold mb-3 shadow-sm" style="background: rgba(216, 0, 0, 0.08); border: 1px solid rgba(216, 0, 0, 0.2); color: #d80000; font-size: 0.82rem; letter-spacing: 0.8px;">
                    <i class="fa-solid fa-hand-holding-medical"></i>
                    <span>CERTIFIED GDA STAFFING & DEPLOYMENT</span>
                </div>

                <h1 class="fw-bolder text-dark display-6 mb-3" style="letter-spacing: -0.5px;">
                    Certified <span style="color: #d80000;">GDA Providing Services</span> at Home & Hospital
                </h1>

                <p class="text-muted lead fs-6 mb-4" style="line-height: 1.8;">
                    Hire background-verified, hospital-certified General Duty Assistants (GDA / Nursing Aides) for direct bedside care. We deploy skilled male and female GDAs for post-surgical recovery, stroke care, bedridden patients, and critical elderly support across Faridabad, Noida, Delhi, Gurugram & Palwal.
                </p>

                <div class="d-flex flex-wrap align-items-center gap-3">
                    <a href="tel:+919319149644" class="btn btn-danger rounded-pill px-4 py-3 fw-bold shadow-sm d-inline-flex align-items-center gap-2" style="background: #d80000; border-color: #d80000;">
                        <i class="fa-solid fa-phone"></i> Call for GDA: +91 93191 49644
                    </a>
                    <a href="https://wa.me/919319149644?text=Hello%20DM%20Healthcare,%20I%20need%20GDA%20Providing%20Services%20for%20home%20patient%20care." target="_blank" class="btn btn-outline-success rounded-pill px-4 py-3 fw-bold d-inline-flex align-items-center gap-2">
                        <i class="fa-brands fa-whatsapp fs-5"></i> WhatsApp Booking
                    </a>
                </div>
            </div>

            <div class="col-lg-4 text-center">
                <div class="bg-white p-4 rounded-4 shadow-sm border text-start">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <span class="badge rounded-pill px-3 py-1 fw-bold" style="background: #d80000; color: #ffffff; font-size: 0.75rem;">EXPRESS DEPLOYMENT</span>
                        <span class="text-success small fw-bold"><i class="fa-solid fa-circle-check"></i> 24/7 Desk</span>
                    </div>
                    <h5 class="fw-bold text-dark mb-1">30–60 Min Dispatch</h5>
                    <p class="text-muted small mb-3">Verified GDA staff ready in Faridabad, Noida, Gurugram, Delhi & Palwal.</p>
                    <ul class="list-unstyled mb-0 small text-muted">
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Male & Female GDA Staff Options</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> 12h Day / 12h Night / 24h Live-in</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> 100% Police & Identity Verified</li>
                        <li class="mb-0"><i class="fa-solid fa-check text-success me-2"></i> Free Prompt Staff Replacement</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- 2. Core Clinical Roles Provided by GDA Staff -->
    <div class="mb-5">
        <div class="text-center mb-5">
            <span class="text-uppercase fw-bold small text-danger" style="color: #d80000 !important; letter-spacing: 1.2px;">Hospital-Standard Protocol</span>
            <h3 class="fw-bold text-dark mt-1">Clinical Scope of GDA Providing Services</h3>
            <p class="text-muted mx-auto" style="max-width: 650px;">Our General Duty Assistants possess formal clinical training to assist nurses and families in critical patient management.</p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="gda-prov-card">
                    <div class="gda-prov-icon">
                        <i class="fa-solid fa-heart-pulse"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Vitals & Clinical Charting</h5>
                    <p class="text-muted small mb-0">Daily digital monitoring and logging of BP, Blood Sugar (Glucometer), SpO2 Oxygen, Pulse, and Temperature for treating doctors.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="gda-prov-card">
                    <div class="gda-prov-icon">
                        <i class="fa-solid fa-bed"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Bedsore Prevention</h5>
                    <p class="text-muted small mb-0">2-hourly patient turning schedule, air-mattress management, back massaging, barrier cream application, and Grade 1 care.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="gda-prov-card">
                    <div class="gda-prov-icon">
                        <i class="fa-solid fa-utensils"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Ryle\'s Tube & Feeding</h5>
                    <p class="text-muted small mb-0">Assisting in blenderized feeding through NG / Ryle\'s tube, aspiration prevention, and oral cavity hygiene maintenance.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="gda-prov-card">
                    <div class="gda-prov-icon">
                        <i class="fa-solid fa-bath"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Bed Bath & Hygiene</h5>
                    <p class="text-muted small mb-0">Sterile bed sponge bathing, grooming, hair wash, diaper changing, peri-care, and daily bed linen disinfection.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="gda-prov-card">
                    <div class="gda-prov-icon">
                        <i class="fa-solid fa-water"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Catheter Bag Care</h5>
                    <p class="text-muted small mb-0">Aseptic emptying and recording of Foley\'s catheter urine output, hygiene maintenance around insertion points, and leak checks.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="gda-prov-card">
                    <div class="gda-prov-icon">
                        <i class="fa-solid fa-wheelchair"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Transfer & Ergonomics</h5>
                    <p class="text-muted small mb-0">Safe, non-injurious patient lifting from bed to wheelchair, commode chair transfers, walker walking, and range of motion support.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="gda-prov-card">
                    <div class="gda-prov-icon">
                        <i class="fa-solid fa-lungs"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Oxygen & Nebulization</h5>
                    <p class="text-muted small mb-0">Operating home oxygen concentrators, cylinders, BiPAP mask placement, and assisting with prescribed nebulizer sessions.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="gda-prov-card">
                    <div class="gda-prov-icon">
                        <i class="fa-solid fa-truck-medical"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Emergency Escalation</h5>
                    <p class="text-muted small mb-0">Early detection of clinical deterioration, 24/7 care coordinator supervisor backing, and prompt doctor/ambulance escalation.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- 3. Medical Conditions Benefiting from GDA Providing -->
    <div class="mb-5 p-4 p-lg-5 bg-white rounded-4 border shadow-sm">
        <div class="text-center mb-5">
            <span class="text-uppercase fw-bold small text-danger" style="color: #d80000 !important; letter-spacing: 1.2px;">Target Care Profiles</span>
            <h3 class="fw-bold text-dark mt-1">Patients Who Benefit from GDA Staffing</h3>
            <p class="text-muted mx-auto" style="max-width: 600px;">GDA assistants are trained for specialized home care support across chronic, post-op, and geriatric conditions.</p>
        </div>

        <div class="row g-3">
            <div class="col-md-6">
                <div class="gda-condition-pill">
                    <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 44px; height: 44px; background: rgba(216, 0, 0, 0.1); color: #d80000;">
                        <i class="fa-solid fa-brain"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold text-dark mb-1">Stroke, Paralysis & Brain Injury</h6>
                        <small class="text-muted">Hemiplegia, paraplegia, passive limb exercises, and complete bedside assistance.</small>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="gda-condition-pill">
                    <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 44px; height: 44px; background: rgba(216, 0, 0, 0.1); color: #d80000;">
                        <i class="fa-solid fa-bone"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold text-dark mb-1">Post-Surgical Orthopedic Care</h6>
                        <small class="text-muted">Knee replacement, hip surgery, fracture immobilization, and walker rehabilitation.</small>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="gda-condition-pill">
                    <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 44px; height: 44px; background: rgba(216, 0, 0, 0.1); color: #d80000;">
                        <i class="fa-solid fa-person-cane"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold text-dark mb-1">Parkinson\'s & Alzheimer\'s Support</h6>
                        <small class="text-muted">Dementia supervision, memory prompting, tremors assistance, and wandering safety.</small>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="gda-condition-pill">
                    <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 44px; height: 44px; background: rgba(216, 0, 0, 0.1); color: #d80000;">
                        <i class="fa-solid fa-bed-pulse"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold text-dark mb-1">Semi-Critical & Bedridden Seniors</h6>
                        <small class="text-muted">Preventing pulmonary congestion, bedsore management, and dignified daily hygiene.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 4. Flexible Shift Packages -->
    <div class="mb-5">
        <div class="text-center mb-5">
            <span class="text-uppercase fw-bold small text-danger" style="color: #d80000 !important; letter-spacing: 1.2px;">Duty Schedules</span>
            <h3 class="fw-bold text-dark mt-1">GDA Providing Duty Shift Plans</h3>
            <p class="text-muted mx-auto" style="max-width: 600px;">Flexible shifts designed to fit your family\'s routine and medical requirements.</p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="gda-prov-shift">
                    <span class="badge bg-danger bg-opacity-10 text-danger rounded-pill px-3 py-1 fw-bold mb-3">Day Shift</span>
                    <h5 class="fw-bold text-dark">12-Hour Day GDA</h5>
                    <p class="text-muted small mb-3">8:00 AM to 8:00 PM duty covering sponge bath, breakfast/lunch feeding, medicine charting, mobility & daytime vitals.</p>
                    <ul class="list-unstyled text-start small text-muted mb-4">
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Sponge bath & diaper care</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Ryle\'s tube & oral feeding</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Daily vitals tracking</li>
                    </ul>
                    <a href="tel:+919319149644" class="btn btn-outline-danger w-100 rounded-pill fw-bold">Book 12-Hr Day</a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="gda-prov-shift border-danger" style="border-width: 2px;">
                    <span class="badge text-white rounded-pill px-3 py-1 fw-bold mb-3" style="background: #d80000;">Most Popular</span>
                    <h5 class="fw-bold text-dark">24-Hour Live-In GDA</h5>
                    <p class="text-muted small mb-3">Round-the-clock live-in companion and clinical aide residing at home for seamless 24/7 patient supervision.</p>
                    <ul class="list-unstyled text-start small text-muted mb-4">
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> 24x7 Continuous bedside support</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Night turning & diaper changes</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Prompt free staff replacement</li>
                    </ul>
                    <a href="tel:+919319149644" class="btn btn-danger w-100 rounded-pill fw-bold" style="background: #d80000; border-color: #d80000;">Book 24-Hr Live-In</a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="gda-prov-shift">
                    <span class="badge bg-primary bg-opacity-10 text-primary rounded-pill px-3 py-1 fw-bold mb-3">Night Shift</span>
                    <h5 class="fw-bold text-dark">12-Hour Night GDA</h5>
                    <p class="text-muted small mb-3">8:00 PM to 8:00 AM dedicated night care preventing fall hazards, night diaper changes, and continuous vitals check.</p>
                    <ul class="list-unstyled text-start small text-muted mb-4">
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Night diaper & catheter care</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> 2-hourly night bed repositioning</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Peace of mind for family sleep</li>
                    </ul>
                    <a href="tel:+919319149644" class="btn btn-outline-dark w-100 rounded-pill fw-bold">Book 12-Hr Night</a>
                </div>
            </div>
        </div>
    </div>

    <!-- 5. 4-Step GDA Providing Workflow -->
    <div class="mb-5 p-4 p-lg-5 bg-white rounded-4 border shadow-sm">
        <div class="text-center mb-5">
            <span class="text-uppercase fw-bold small text-danger" style="color: #d80000 !important; letter-spacing: 1.2px;">Transparent & Fast</span>
            <h3 class="fw-bold text-dark mt-1">Our 4-Step GDA Providing Workflow</h3>
            <p class="text-muted mx-auto" style="max-width: 600px;">From patient requirement analysis to verified GDA arrival in under 30 to 60 minutes.</p>
        </div>

        <div class="row g-4 text-center">
            <div class="col-md-6 col-lg-3">
                <div class="gda-prov-step">1</div>
                <h6 class="fw-bold text-dark mb-2">Assessment Call</h6>
                <p class="text-muted small mb-0">Our clinical coordinator reviews patient mobility, diet, catheter, and shift needs.</p>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="gda-prov-step">2</div>
                <h6 class="fw-bold text-dark mb-2">Staff Profile Matching</h6>
                <p class="text-muted small mb-0">We match certified male/female GDA staff based on clinical acuity & language.</p>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="gda-prov-step">3</div>
                <h6 class="fw-bold text-dark mb-2">Rapid Doorstep Arrival</h6>
                <p class="text-muted small mb-0">GDA arrives with verified credentials, identity proof, and begins patient charting.</p>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="gda-prov-step">4</div>
                <h6 class="fw-bold text-dark mb-2">Supervision & Quality Check</h6>
                <p class="text-muted small mb-0">Continuous supervisor follow-up, vitals audit & free instant replacement guarantee.</p>
            </div>
        </div>
    </div>

</div>
';
?>
