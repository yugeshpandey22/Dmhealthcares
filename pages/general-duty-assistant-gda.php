<?php
/**
 * General Duty Assistant (GDA) Full Page
 * DM Healthcare Clinical Care Support
 */

$display_title = "General Duty Assistant (GDA) at Home";
$seo_title = "General Duty Assistant (GDA) at Home in Delhi NCR - DM Healthcare";
$seo_desc = "Book certified General Duty Assistant (GDA / Nursing Aide) services at home across Delhi, Faridabad, Noida, Gurugram & Palwal. 12-hour and 24-hour hospital-standard bedside care.";
$short_desc = "Hospital-trained General Duty Assistants (GDA) providing certified bedside clinical care, hygiene, vitals tracking, bedsore prevention, and mobility support.";
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
.gda-full-hero {
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
.gda-feature-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 20px;
    padding: 26px 22px;
    height: 100%;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(0,0,0,0.02);
}
.gda-feature-card:hover {
    transform: translateY(-5px);
    border-color: #d80000;
    box-shadow: 0 15px 35px rgba(216, 0, 0, 0.08);
}

.gda-icon-circle {
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
.gda-shift-box {
    background: #ffffff;
    border-radius: 20px;
    border: 1px solid #e2e8f0;
    padding: 28px 24px;
    text-align: center;
    transition: all 0.3s ease;
    height: 100%;
}
.gda-shift-box:hover {
    border-color: #d80000;
    transform: translateY(-4px);
    box-shadow: 0 12px 28px rgba(216, 0, 0, 0.08);
}

/* Patient Condition Pill */
.condition-pill {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 18px 20px;
    display: flex;
    align-items: center;
    gap: 16px;
    transition: all 0.3s ease;
}
.condition-pill:hover {
    border-color: #d80000;
    transform: translateX(4px);
    box-shadow: 0 6px 18px rgba(216, 0, 0, 0.06);
}

/* Comparison Table */
.compare-table th {
    background: #121418;
    color: white;
    font-weight: 700;
    padding: 14px 10px;
}
.compare-table td {
    padding: 14px 10px;
}

/* Step Badges */
.gda-step-badge {
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
    <div class="gda-full-hero">
        <div class="row align-items-center g-4">
            <div class="col-lg-8">
                <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill fw-bold mb-3 shadow-sm" style="background: rgba(216, 0, 0, 0.08); border: 1px solid rgba(216, 0, 0, 0.2); color: #d80000; font-size: 0.82rem; letter-spacing: 0.8px;">
                    <i class="fa-solid fa-user-doctor"></i>
                    <span>HOSPITAL-TRAINED CLINICAL AIDES</span>
                </div>

                <h1 class="fw-bolder text-dark display-6 mb-3" style="letter-spacing: -0.5px;">
                    Hospital-Standard <span style="color: #d80000;">General Duty Assistant (GDA)</span> at Home
                </h1>

                <p class="text-muted lead fs-6 mb-4" style="line-height: 1.8;">
                    A certified General Duty Assistant (GDA / Nursing Aide) bridges the gap between basic caregiving and clinical nursing. DM Healthcare delivers hospital-trained male and female GDAs for bedside clinical assistance, bedsore management, vitals charting, Ryle\'s tube feeding, and mobility support across Faridabad, Noida, Delhi & Gurugram.
                </p>

                <div class="d-flex flex-wrap align-items-center gap-3">
                    <a href="tel:+918860600423" class="btn btn-danger rounded-pill px-4 py-3 fw-bold shadow-sm d-inline-flex align-items-center gap-2" style="background: #d80000; border-color: #d80000;">
                        <i class="fa-solid fa-phone"></i> Book GDA: +91 88606 00423
                    </a>
                    <a href="https://wa.me/918860600423?text=Hello%20DM%20Healthcare,%20I%20urgently%20need%20a%20General%20Duty%20Assistant%20(GDA)%20for%20home%20patient%20care." target="_blank" class="btn btn-outline-success rounded-pill px-4 py-3 fw-bold d-inline-flex align-items-center gap-2">
                        <i class="fa-brands fa-whatsapp fs-5"></i> WhatsApp Booking
                    </a>
                </div>
            </div>

            <div class="col-lg-4 text-center">
                <div class="bg-white p-4 rounded-4 shadow-sm border text-start">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <span class="badge rounded-pill px-3 py-1 fw-bold" style="background: #d80000; color: #ffffff; font-size: 0.75rem;">RAPID DEPLOYMENT</span>
                        <span class="text-success small fw-bold"><i class="fa-solid fa-circle-check"></i> Available 24/7</span>
                    </div>
                    <h5 class="fw-bold text-dark mb-1">30–60 Min Dispatch</h5>
                    <p class="text-muted small mb-3">Certified GDA staff ready in Faridabad, Noida, Gurugram, Delhi & Palwal.</p>
                    <ul class="list-unstyled mb-0 small text-muted">
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Male & Female Staff Options</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> 12h Day / 12h Night / 24h Live-in</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> 100% Police & Identity Verified</li>
                        <li class="mb-0"><i class="fa-solid fa-check text-success me-2"></i> Free Prompt Staff Replacement</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- 2. Core Clinical Responsibilities of a GDA -->
    <div class="mb-5">
        <div class="text-center mb-5">
            <span class="text-uppercase fw-bold small text-danger" style="color: #d80000 !important; letter-spacing: 1.2px;">Daily Clinical Protocol</span>
            <h3 class="fw-bold text-dark mt-1">What a General Duty Assistant Does at Home</h3>
            <p class="text-muted mx-auto" style="max-width: 650px;">Our GDAs are rigorously trained under hospital standards to manage bedside patient needs with aseptic safety and compassion.</p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="gda-feature-card">
                    <div class="gda-icon-circle">
                        <i class="fa-solid fa-heart-pulse"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Vitals Charting</h5>
                    <p class="text-muted small mb-0">Daily monitoring and digital logging of BP, Blood Sugar (Glucometer), SpO2 Oxygen, Pulse, and Temperature for doctor review.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="gda-feature-card">
                    <div class="gda-icon-circle">
                        <i class="fa-solid fa-bed"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Bedsore Prevention</h5>
                    <p class="text-muted small mb-0">2-hourly patient turning schedule, air-mattress management, back care massaging, skin moisture barrier application, and Grade 1 care.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="gda-feature-card">
                    <div class="gda-icon-circle">
                        <i class="fa-solid fa-utensils"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Ryle\'s Tube & Feeding</h5>
                    <p class="text-muted small mb-0">Assistance with prescribed blenderized feeding through NG / Ryle\'s tube, aspiration prevention, and oral cavity cleansing.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="gda-feature-card">
                    <div class="gda-icon-circle">
                        <i class="fa-solid fa-bath"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Bed Bath & Hygiene</h5>
                    <p class="text-muted small mb-0">Complete bed sponge bathing, grooming, hair wash, diaper changing, peri-care, and daily bed linen sanitization.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="gda-feature-card">
                    <div class="gda-icon-circle">
                        <i class="fa-solid fa-water"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Catheter Bag Drainage</h5>
                    <p class="text-muted small mb-0">Hygienic emptying and recording of Foley\'s catheter urine output, hygiene maintenance around insertion points, and leak check.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="gda-feature-card">
                    <div class="gda-icon-circle">
                        <i class="fa-solid fa-wheelchair"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Transfer & Mobility</h5>
                    <p class="text-muted small mb-0">Safe, non-injurious patient lifting from bed to wheelchair, commode chair transfers, walker walking assistance, and gentle range of motion.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="gda-feature-card">
                    <div class="gda-icon-circle">
                        <i class="fa-solid fa-pills"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Medication Timelines</h5>
                    <p class="text-muted small mb-0">Strict adherence to doctor-prescribed medicine schedules, organizing pill dispensers, and insulin time reminders.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="gda-feature-card">
                    <div class="gda-icon-circle">
                        <i class="fa-solid fa-truck-medical"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Emergency Escalation</h5>
                    <p class="text-muted small mb-0">Immediate detection of vitals abnormalities, continuous 24/7 care coordinator support, and prompt doctor/ambulance escalation.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- 3. Ideal For: Patient Conditions -->
    <div class="mb-5 p-4 p-lg-5 bg-white rounded-4 border shadow-sm">
        <div class="text-center mb-5">
            <span class="text-uppercase fw-bold small text-danger" style="color: #d80000 !important; letter-spacing: 1.2px;">Patient Care Matching</span>
            <h3 class="fw-bold text-dark mt-1">Who Benefits Most From GDA Support?</h3>
            <p class="text-muted mx-auto" style="max-width: 600px;">GDA assistants are specifically suited for non-invasive clinical support and semi-critical home care.</p>
        </div>

        <div class="row g-3">
            <div class="col-md-6">
                <div class="condition-pill">
                    <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 44px; height: 44px; background: rgba(216, 0, 0, 0.1); color: #d80000;">
                        <i class="fa-solid fa-brain"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold text-dark mb-1">Stroke & Paralysis Recovery</h6>
                        <small class="text-muted">Hemiplegia, paraplegia, passive limb exercises, and full bedside assistance.</small>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="condition-pill">
                    <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 44px; height: 44px; background: rgba(216, 0, 0, 0.1); color: #d80000;">
                        <i class="fa-solid fa-bone"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold text-dark mb-1">Post-Operative Ortho Patients</h6>
                        <small class="text-muted">Knee replacement, hip surgery, fracture immobilization, and fall prevention.</small>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="condition-pill">
                    <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 44px; height: 44px; background: rgba(216, 0, 0, 0.1); color: #d80000;">
                        <i class="fa-solid fa-person-cane"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold text-dark mb-1">Parkinson\'s & Alzheimer\'s Care</h6>
                        <small class="text-muted">Dementia supervision, memory prompt support, tremors assistance, and wandering safety.</small>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="condition-pill">
                    <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 44px; height: 44px; background: rgba(216, 0, 0, 0.1); color: #d80000;">
                        <i class="fa-solid fa-bed-pulse"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold text-dark mb-1">Long-Term Bedridden Seniors</h6>
                        <small class="text-muted">Preventing pulmonary congestion, bedsore management, and dignified daily hygiene.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 4. Comparison Table: Attendant vs GDA vs Registered Nurse -->
    <div class="my-5">
        <div class="text-center mb-4">
            <span class="text-uppercase fw-bold small text-danger" style="color: #d80000 !important; letter-spacing: 1.2px;">Caregiver Level Matrix</span>
            <h3 class="fw-bold text-dark mt-1">Patient Attendant vs GDA vs Registered Nurse</h3>
            <p class="text-muted mx-auto" style="max-width: 650px;">Understand the clinical skill differences to select the perfect caregiver for your loved one.</p>
        </div>

        <div class="table-responsive bg-white rounded-4 shadow-sm border p-3">
            <table class="table table-hover align-middle mb-0 text-center compare-table" style="font-size: 0.9rem;">
                <thead>
                    <tr>
                        <th class="text-start ps-3" style="width: 28%; border-top-left-radius: 12px;">Service / Clinical Task</th>
                        <th style="width: 24%;">Patient Attendant</th>
                        <th style="width: 24%; background: #d80000;">General Duty Assistant (GDA)</th>
                        <th style="width: 24%; border-top-right-radius: 12px;">Qualified GNM / B.Sc Nurse</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-start ps-3 fw-semibold text-dark">Bathing, Hygiene & Diaper Care</td>
                        <td><i class="fa-solid fa-circle-check text-success fs-6"></i> Full Support</td>
                        <td><i class="fa-solid fa-circle-check text-success fs-6"></i> Aseptic Hospital Protocol</td>
                        <td><i class="fa-solid fa-circle-check text-success fs-6"></i> Supervised</td>
                    </tr>
                    <tr>
                        <td class="text-start ps-3 fw-semibold text-dark">Vitals Tracking (BP, Sugar, SpO2)</td>
                        <td><i class="fa-solid fa-circle-check text-success fs-6"></i> Basic Digital</td>
                        <td><i class="fa-solid fa-circle-check text-success fs-6"></i> Detailed Clinical Charting</td>
                        <td><i class="fa-solid fa-circle-check text-success fs-6"></i> Advanced Multi-Para Monitoring</td>
                    </tr>
                    <tr>
                        <td class="text-start ps-3 fw-semibold text-dark">Bedsore Prevention & Air-Bed</td>
                        <td><i class="fa-solid fa-circle-check text-success fs-6"></i> Turning Support</td>
                        <td><i class="fa-solid fa-circle-check text-success fs-6"></i> 2-Hr Schedule & Grade 1 Care</td>
                        <td><i class="fa-solid fa-circle-check text-success fs-6"></i> Debridement & Sterile Dressing</td>
                    </tr>
                    <tr>
                        <td class="text-start ps-3 fw-semibold text-dark">Ryle\'s Tube Food Administration</td>
                        <td><span class="text-muted fw-bold">—</span></td>
                        <td><i class="fa-solid fa-circle-check text-success fs-6"></i> Tube Feeding & Flushing</td>
                        <td><i class="fa-solid fa-circle-check text-success fs-6"></i> Insertion & Aspiration Check</td>
                    </tr>
                    <tr>
                        <td class="text-start ps-3 fw-semibold text-dark">Foley\'s Catheter Bag Care</td>
                        <td><span class="text-muted fw-bold">—</span></td>
                        <td><i class="fa-solid fa-circle-check text-success fs-6"></i> Emptying, Drainage & Hygiene</td>
                        <td><i class="fa-solid fa-circle-check text-success fs-6"></i> Catheter Insertion & Bladder Wash</td>
                    </tr>
                    <tr>
                        <td class="text-start ps-3 fw-semibold text-dark">Injections (IV / IM) & IV Drips</td>
                        <td><span class="text-muted fw-bold">—</span></td>
                        <td><span class="text-muted fw-bold">—</span></td>
                        <td><i class="fa-solid fa-circle-check text-success fs-6"></i> Certified Clinical Procedure</td>
                    </tr>
                    <tr>
                        <td class="text-start ps-3 fw-semibold text-dark">Tracheostomy & Ventilator Care</td>
                        <td><span class="text-muted fw-bold">—</span></td>
                        <td><span class="text-muted fw-bold">—</span></td>
                        <td><i class="fa-solid fa-circle-check text-success fs-6"></i> ICU Trained Critical Care</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- 5. Flexible Shift Packages -->
    <div class="mb-5">
        <div class="text-center mb-5">
            <span class="text-uppercase fw-bold small text-danger" style="color: #d80000 !important; letter-spacing: 1.2px;">Flexible Shift Options</span>
            <h3 class="fw-bold text-dark mt-1">GDA Care Shift Packages</h3>
            <p class="text-muted mx-auto" style="max-width: 600px;">Tailored duty durations to support your family during day, night, or 24/7 care.</p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="gda-shift-box">
                    <span class="badge bg-danger bg-opacity-10 text-danger rounded-pill px-3 py-1 fw-bold mb-3">Day Shift</span>
                    <h5 class="fw-bold text-dark">12-Hour Day GDA</h5>
                    <p class="text-muted small mb-3">8:00 AM to 8:00 PM duty covering sponge bath, breakfast/lunch feeding, medicine charting, mobility & daytime vitals.</p>
                    <ul class="list-unstyled text-start small text-muted mb-4">
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Sponge bath & diaper care</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Ryle\'s tube & oral feeding</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Daily vitals tracking</li>
                    </ul>
                    <a href="tel:+918860600423" class="btn btn-outline-danger w-100 rounded-pill fw-bold">Book 12-Hr Day</a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="gda-shift-box border-danger" style="border-width: 2px;">
                    <span class="badge text-white rounded-pill px-3 py-1 fw-bold mb-3" style="background: #d80000;">Most Popular</span>
                    <h5 class="fw-bold text-dark">24-Hour Live-In GDA</h5>
                    <p class="text-muted small mb-3">Round-the-clock live-in companion and clinical aide residing at home for seamless 24/7 patient supervision.</p>
                    <ul class="list-unstyled text-start small text-muted mb-4">
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> 24x7 Continuous bedside support</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Night turning & diaper changes</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Prompt free staff replacement</li>
                    </ul>
                    <a href="tel:+918860600423" class="btn btn-danger w-100 rounded-pill fw-bold" style="background: #d80000; border-color: #d80000;">Book 24-Hr Live-In</a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="gda-shift-box">
                    <span class="badge bg-primary bg-opacity-10 text-primary rounded-pill px-3 py-1 fw-bold mb-3">Night Shift</span>
                    <h5 class="fw-bold text-dark">12-Hour Night GDA</h5>
                    <p class="text-muted small mb-3">8:00 PM to 8:00 AM dedicated night care preventing fall hazards, night diaper changes, and continuous vitals check.</p>
                    <ul class="list-unstyled text-start small text-muted mb-4">
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Night diaper & catheter care</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> 2-hourly night bed repositioning</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Peace of mind for family sleep</li>
                    </ul>
                    <a href="tel:+918860600423" class="btn btn-outline-dark w-100 rounded-pill fw-bold">Book 12-Hr Night</a>
                </div>
            </div>
        </div>
    </div>

    <!-- 6. 4-Step Deployment Workflow -->
    <div class="mb-5 p-4 p-lg-5 bg-white rounded-4 border shadow-sm">
        <div class="text-center mb-5">
            <span class="text-uppercase fw-bold small text-danger" style="color: #d80000 !important; letter-spacing: 1.2px;">Quick & Reliable</span>
            <h3 class="fw-bold text-dark mt-1">Our 4-Step GDA Onboarding Process</h3>
            <p class="text-muted mx-auto" style="max-width: 600px;">From first call to verified GDA deployment in under 30 to 60 minutes.</p>
        </div>

        <div class="row g-4 text-center">
            <div class="col-md-6 col-lg-3">
                <div class="gda-step-badge">1</div>
                <h6 class="fw-bold text-dark mb-2">Patient Need Assessment</h6>
                <p class="text-muted small mb-0">Our care coordinator reviews patient mobility, diet, vitals needs & shift timing.</p>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="gda-step-badge">2</div>
                <h6 class="fw-bold text-dark mb-2">GDA Profile Matching</h6>
                <p class="text-muted small mb-0">We match certified male/female GDA staff based on clinical acuity & language.</p>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="gda-step-badge">3</div>
                <h6 class="fw-bold text-dark mb-2">Rapid Doorstep Deployment</h6>
                <p class="text-muted small mb-0">GDA arrives at your doorstep with verified credentials and begins daily charting.</p>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="gda-step-badge">4</div>
                <h6 class="fw-bold text-dark mb-2">Dedicated Clinical Oversight</h6>
                <p class="text-muted small mb-0">Weekly supervisor checks, vitals review & hassle-free replacement guarantee.</p>
            </div>
        </div>
    </div>

</div>
';
?>
