<?php
/**
 * Medical Support Staff Services
 * DM Healthcare Home & Hospital Healthcare Support
 */

$display_title = "Medical Support Staff Services";
$seo_title = "Verified Medical Support Staff at Home & Hospital in Delhi NCR - DM Healthcare";
$seo_desc = "Hire verified, hospital-trained medical support staff, patient attendants & GDA for home & hospital care in Faridabad, Noida, Delhi, Gurugram & Ghaziabad. 12h & 24h shifts.";
$short_desc = "Certified, police-verified medical support staff for patient bedside care, mobility assistance, medication management, vital checks, and daily living support.";
$category_name = "Home Care";
$full_page_override = true;

ob_start();
?>
<style>
:root {
    --dm-brand-red: #d80000;
    --dm-brand-red-dark: #b00000;
    --dm-brand-navy: #0f172a;
    --dm-brand-blue: #2563eb;
    --dm-card-bg: #ffffff;
}

/* Hero Section */
.staff-hero-section {
    background: radial-gradient(circle at 90% 10%, rgba(216, 0, 0, 0.08) 0%, transparent 50%),
                radial-gradient(circle at 10% 90%, rgba(37, 99, 235, 0.06) 0%, transparent 40%),
                linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
    border-radius: 28px;
    padding: 44px 32px;
    border: 1px solid #e2e8f0;
    box-shadow: 0 10px 30px rgba(15, 23, 42, 0.03);
    margin-bottom: 45px;
}

/* Category Card */
.staff-cat-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 20px;
    padding: 28px 24px;
    height: 100%;
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    box-shadow: 0 4px 15px rgba(0,0,0,0.02);
    display: flex;
    flex-direction: column;
}
.staff-cat-card:hover {
    transform: translateY(-6px);
    border-color: var(--dm-brand-red);
    box-shadow: 0 18px 36px rgba(216, 0, 0, 0.09);
}

.staff-icon-wrap {
    width: 56px;
    height: 56px;
    border-radius: 16px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 1.45rem;
    margin-bottom: 18px;
    background: rgba(216, 0, 0, 0.08);
    color: var(--dm-brand-red);
    transition: transform 0.3s ease;
}
.staff-cat-card:hover .staff-icon-wrap {
    transform: scale(1.08);
    background: var(--dm-brand-red);
    color: #ffffff;
}

/* Shift Box */
.staff-shift-box {
    background: #ffffff;
    border-radius: 20px;
    border: 1px solid #e2e8f0;
    padding: 30px 24px;
    text-align: center;
    transition: all 0.3s ease;
    height: 100%;
    position: relative;
    overflow: hidden;
}
.staff-shift-box::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: #e2e8f0;
    transition: background 0.3s ease;
}
.staff-shift-box:hover::before {
    background: var(--dm-brand-red);
}
.staff-shift-box:hover {
    transform: translateY(-5px);
    border-color: #cbd5e1;
    box-shadow: 0 16px 32px rgba(15, 23, 42, 0.08);
}

/* Duty Checklist */
.duty-check-item {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 16px 20px;
    display: flex;
    align-items: center;
    gap: 14px;
    transition: all 0.25s ease;
}
.duty-check-item:hover {
    border-color: var(--dm-brand-red);
    transform: translateX(4px);
    box-shadow: 0 4px 14px rgba(216, 0, 0, 0.06);
}

/* Verification Step Card */
.verify-step-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 20px;
    padding: 24px 20px;
    text-align: center;
    height: 100%;
    transition: all 0.3s ease;
}
.verify-step-card:hover {
    border-color: #0f172a;
    box-shadow: 0 10px 25px rgba(15, 23, 42, 0.06);
}
.verify-step-num {
    width: 44px;
    height: 44px;
    border-radius: 50%;
    background: var(--dm-brand-navy);
    color: #ffffff;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 1.1rem;
    margin-bottom: 14px;
}

/* Condition Tag */
.condition-tag-pill {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 14px;
    padding: 14px 18px;
    display: flex;
    align-items: center;
    gap: 12px;
    font-weight: 600;
    color: #1e293b;
    transition: all 0.25s ease;
}
.condition-tag-pill:hover {
    border-color: var(--dm-brand-red);
    background: #fff5f5;
    color: var(--dm-brand-red);
}

/* CTA Floating Card */
.support-form-card {
    background: #ffffff;
    border-radius: 24px;
    border: 1px solid #e2e8f0;
    box-shadow: 0 20px 45px rgba(15, 23, 42, 0.08);
}
</style>

<div class="container py-4">

    <!-- 1. Hero Section -->
    <div class="staff-hero-section">
        <div class="row align-items-center g-4">
            <div class="col-lg-7">
                <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill mb-3" style="background: rgba(216, 0, 0, 0.08); color: var(--dm-brand-red); font-size: 0.8rem; font-weight: 700; letter-spacing: 0.5px;">
                    <i class="fa-solid fa-shield-halved"></i> 100% POLICE VERIFIED & HOSPITAL-TRAINED
                </div>
                <h1 class="fw-bolder display-6 mb-3" style="color: var(--dm-brand-navy); line-height: 1.25;">
                    Reliable Medical & Care <span style="color: var(--dm-brand-red);">Support Staff</span> at Home
                </h1>
                <p class="text-secondary fs-6 mb-4" style="line-height: 1.7; max-width: 620px;">
                    Get experienced male and female patient care attendants, General Duty Assistants (GDA), and nursing aides for bedside care, hygiene, mobility, and recovery support across Delhi NCR. 
                </p>
                <div class="d-flex flex-wrap gap-3 align-items-center">
                    <a href="tel:+919319149644" class="btn btn-primary rounded-pill px-4 py-3 fw-bold d-inline-flex align-items-center gap-2 shadow-sm" style="background: var(--dm-brand-red); border: none;">
                        <i class="fa-solid fa-phone-volume"></i> Speak with Care Coordinator
                    </a>
                    <a href="https://wa.me/919319149644?text=Hello%20DM%20Healthcare,%20I%20need%20medical%20support%20staff%20at%20home." target="_blank" class="btn btn-outline-success rounded-pill px-4 py-3 fw-bold d-inline-flex align-items-center gap-2">
                        <i class="fa-brands fa-whatsapp fs-5"></i> WhatsApp Booking
                    </a>
                </div>

                <!-- Trust Badges -->
                <div class="row g-3 mt-4 pt-3 border-top">
                    <div class="col-sm-4 col-6">
                        <div class="d-flex align-items-center gap-2">
                            <i class="fa-solid fa-clock-rotate-left text-danger fs-5"></i>
                            <div>
                                <strong class="d-block text-dark small" style="font-size: 0.85rem;">30-60 Min</strong>
                                <span class="text-muted" style="font-size: 0.75rem;">Fast Deployment</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-6">
                        <div class="d-flex align-items-center gap-2">
                            <i class="fa-solid fa-user-check text-success fs-5"></i>
                            <div>
                                <strong class="d-block text-dark small" style="font-size: 0.85rem;">100% Verified</strong>
                                <span class="text-muted" style="font-size: 0.75rem;">Police & ID Checked</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-12">
                        <div class="d-flex align-items-center gap-2">
                            <i class="fa-solid fa-arrows-rotate text-primary fs-5"></i>
                            <div>
                                <strong class="d-block text-dark small" style="font-size: 0.85rem;">Zero Hassle</strong>
                                <span class="text-muted" style="font-size: 0.75rem;">Free Fast Replacement</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Hero Image Banner -->
            <div class="col-lg-5 text-center">
                <div class="position-relative d-inline-block">
                    <img src="assets/images/about.jpg" alt="Medical Support Staff DM Healthcare" class="img-fluid rounded-4 shadow-lg" style="max-height: 380px; object-fit: cover; border: 4px solid #ffffff;">
                    <div class="position-absolute bottom-0 start-0 m-3 p-3 bg-white rounded-3 shadow-sm text-start border d-none d-sm-block" style="max-width: 220px;">
                        <span class="badge bg-danger rounded-pill mb-1" style="font-size: 0.7rem;">24/7 Availability</span>
                        <div class="fw-bold text-dark small">12h Day / Night & 24h Live-in Staffing</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 2. Types of Medical Support Staff We Provide -->
    <div class="mb-5">
        <div class="text-center mb-4">
            <span class="text-danger fw-bold text-uppercase small" style="letter-spacing: 1px;">Tailored Healthcare Staffing</span>
            <h2 class="fw-bolder display-6 mt-1 text-dark">Specialized Support Staff Roles</h2>
            <div style="width: 50px; height: 3px; background: var(--dm-brand-red); margin: 12px auto 0;"></div>
            <p class="text-muted mt-2 mx-auto" style="max-width: 650px;">
                Whether you need dedicated elderly companion care, post-operative bedside help, or hospital assistance, our trained staff match your precise clinical needs.
            </p>
        </div>

        <div class="row g-4">
            <!-- Role 1: General Duty Assistant (GDA) -->
            <div class="col-lg-4 col-md-6">
                <div class="staff-cat-card">
                    <div class="staff-icon-wrap">
                        <i class="fa-solid fa-hospital-user"></i>
                    </div>
                    <span class="badge bg-danger bg-opacity-10 text-danger rounded-pill align-self-start mb-2 px-3 py-1" style="font-size: 0.72rem;">Clinical Support</span>
                    <h4 class="fw-bold text-dark mb-2" style="font-size: 1.25rem;">General Duty Assistant (GDA)</h4>
                    <p class="text-muted small mb-3 flex-grow-1" style="line-height: 1.6;">
                        Hospital-certified caregivers proficient in vital charting (BP, Sugar, Pulse, SPO2), oral medication administration, bed sore prevention, and tube feeding assistance.
                    </p>
                    <ul class="list-unstyled small text-secondary mb-4">
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i>Daily vitals & medication tracking</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i>Ryle's tube & catheter monitoring</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i>Infection control protocols</li>
                    </ul>
                    <a href="page.php?title=gda-providing" class="btn btn-outline-danger rounded-pill fw-semibold w-100 btn-sm py-2">View GDA Services</a>
                </div>
            </div>

            <!-- Role 2: Patient Care Attendants (Male & Female) -->
            <div class="col-lg-4 col-md-6">
                <div class="staff-cat-card">
                    <div class="staff-icon-wrap" style="background: rgba(37, 99, 235, 0.08); color: var(--dm-brand-blue);">
                        <i class="fa-solid fa-hand-holding-heart"></i>
                    </div>
                    <span class="badge bg-primary bg-opacity-10 text-primary rounded-pill align-self-start mb-2 px-3 py-1" style="font-size: 0.72rem;">Bedside Hygiene</span>
                    <h4 class="fw-bold text-dark mb-2" style="font-size: 1.25rem;">Patient Care Attendants</h4>
                    <p class="text-muted small mb-3 flex-grow-1" style="line-height: 1.6;">
                        Compassionate male and female attendants who assist bedridden, post-operative, or mobility-impaired patients with sponge bathing, toileting, diaper changing, and feeding.
                    </p>
                    <ul class="list-unstyled small text-secondary mb-4">
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i>Personal hygiene & sponge baths</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i>Wheelchair & walking assistance</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i>Diet & nutrition feeding support</li>
                    </ul>
                    <a href="page.php?title=patient-attendant" class="btn btn-outline-primary rounded-pill fw-semibold w-100 btn-sm py-2">View Attendant Services</a>
                </div>
            </div>

            <!-- Role 3: Senior & Elderly Caretakers -->
            <div class="col-lg-4 col-md-6">
                <div class="staff-cat-card">
                    <div class="staff-icon-wrap" style="background: rgba(16, 185, 129, 0.08); color: #10b981;">
                        <i class="fa-solid fa-person-cane"></i>
                    </div>
                    <span class="badge bg-success bg-opacity-10 text-success rounded-pill align-self-start mb-2 px-3 py-1" style="font-size: 0.72rem;">Elderly Companion</span>
                    <h4 class="fw-bold text-dark mb-2" style="font-size: 1.25rem;">Elderly Care Companions</h4>
                    <p class="text-muted small mb-3 flex-grow-1" style="line-height: 1.6;">
                        Dedicated caregivers focused on senior citizens living alone or needing assistance with mobility, fall prevention, cognitive stimulation, and accompaniment for doctor visits.
                    </p>
                    <ul class="list-unstyled small text-secondary mb-4">
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i>Fall prevention & mobility aid</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i>Medication schedule reminders</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i>Emotional companionship & walks</li>
                    </ul>
                    <a href="page.php?title=elder-care---basic-care" class="btn btn-outline-success rounded-pill fw-semibold w-100 btn-sm py-2">View Elder Care</a>
                </div>
            </div>

            <!-- Role 4: Post-Surgical & Recovery Staff -->
            <div class="col-lg-4 col-md-6">
                <div class="staff-cat-card">
                    <div class="staff-icon-wrap" style="background: rgba(245, 158, 11, 0.08); color: #f59e0b;">
                        <i class="fa-solid fa-crutch"></i>
                    </div>
                    <span class="badge bg-warning bg-opacity-10 text-dark rounded-pill align-self-start mb-2 px-3 py-1" style="font-size: 0.72rem;">Post-Op Recovery</span>
                    <h4 class="fw-bold text-dark mb-2" style="font-size: 1.25rem;">Post-Surgery Recovery Aides</h4>
                    <p class="text-muted small mb-3 flex-grow-1" style="line-height: 1.6;">
                        Trained attendants who assist patients following orthopedic replacements, cardiac procedures, or abdominal surgeries to facilitate rapid and safe recovery at home.
                    </p>
                    <ul class="list-unstyled small text-secondary mb-4">
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i>Safe bed-to-chair transfers</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i>Post-op posture & mobility support</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i>Assistance with prescribed physiotherapy</li>
                    </ul>
                    <a href="tel:+919319149644" class="btn btn-outline-warning rounded-pill fw-semibold w-100 btn-sm py-2 text-dark">Book Post-Op Staff</a>
                </div>
            </div>

            <!-- Role 5: Hospital Bedside Attendant Support -->
            <div class="col-lg-4 col-md-6">
                <div class="staff-cat-card">
                    <div class="staff-icon-wrap" style="background: rgba(147, 51, 234, 0.08); color: #9333ea;">
                        <i class="fa-solid fa-bed-pulse"></i>
                    </div>
                    <span class="badge bg-primary bg-opacity-10 text-primary rounded-pill align-self-start mb-2 px-3 py-1" style="font-size: 0.72rem;">Hospital Relief</span>
                    <h4 class="fw-bold text-dark mb-2" style="font-size: 1.25rem;">Hospital Bedside Attendants</h4>
                    <p class="text-muted small mb-3 flex-grow-1" style="line-height: 1.6;">
                        Reliable attendant staffing for hospital rooms and wards to relieve family members, provide 24-hour constant patient surveillance, and alert nursing staff during emergencies.
                    </p>
                    <ul class="list-unstyled small text-secondary mb-4">
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i>Constant hospital room presence</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i>Relief for working family members</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i>Coordination with on-duty nurses</li>
                    </ul>
                    <a href="tel:+919319149644" class="btn btn-outline-primary rounded-pill fw-semibold w-100 btn-sm py-2">Book Hospital Attendant</a>
                </div>
            </div>

            <!-- Role 6: Semi-Nursing & Critical Aides -->
            <div class="col-lg-4 col-md-6">
                <div class="staff-cat-card">
                    <div class="staff-icon-wrap" style="background: rgba(225, 29, 72, 0.08); color: #e11d48;">
                        <i class="fa-solid fa-user-nurse"></i>
                    </div>
                    <span class="badge bg-danger bg-opacity-10 text-danger rounded-pill align-self-start mb-2 px-3 py-1" style="font-size: 0.72rem;">Specialized Aides</span>
                    <h4 class="fw-bold text-dark mb-2" style="font-size: 1.25rem;">Semi-Nursing & ICU Aides</h4>
                    <p class="text-muted small mb-3 flex-grow-1" style="line-height: 1.6;">
                        High-skill attendants working under doctor and head nurse supervision for patients with tracheostomy, bipap support, suction requirements, or stroke paralysis.
                    </p>
                    <ul class="list-unstyled small text-secondary mb-4">
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i>Nebulization & oxygen mask hygiene</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i>Anti-bedsore air mattress management</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i>Positioning & physical transfers</li>
                    </ul>
                    <a href="page.php?title=icu-care---critical-care" class="btn btn-outline-danger rounded-pill fw-semibold w-100 btn-sm py-2">View ICU Support</a>
                </div>
            </div>
        </div>
    </div>

    <!-- 3. Key Duties & Responsibilities Grid -->
    <div class="card border-0 rounded-4 p-4 p-md-5 mb-5" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); color: #ffffff;">
        <div class="row align-items-center mb-4">
            <div class="col-lg-8">
                <span class="badge bg-danger px-3 py-1 rounded-pill fw-semibold mb-2">Comprehensive Daily Care</span>
                <h3 class="fw-bold text-white mb-1">What Our Support Staff Take Care Of</h3>
                <p class="text-light opacity-75 small mb-0">From early morning hygiene to late night medication tracking, our staff manage full bedside assistance.</p>
            </div>
            <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                <a href="#bookingForm" class="btn btn-danger rounded-pill px-4 py-2 fw-bold" style="background: var(--dm-brand-red); border: none;">Book Staff Online</a>
            </div>
        </div>

        <div class="row g-3">
            <div class="col-md-4 col-sm-6">
                <div class="p-3 rounded-3" style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.1);">
                    <div class="d-flex align-items-center gap-2 mb-2 text-warning">
                        <i class="fa-solid fa-soap fs-5"></i>
                        <strong class="text-white">Hygiene & Grooming</strong>
                    </div>
                    <p class="small text-light opacity-75 mb-0">Bed sponge baths, oral hygiene, hair grooming, diaper changing, and linen changes.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="p-3 rounded-3" style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.1);">
                    <div class="d-flex align-items-center gap-2 mb-2 text-info">
                        <i class="fa-solid fa-utensils fs-5"></i>
                        <strong class="text-white">Feeding & Diet</strong>
                    </div>
                    <p class="small text-light opacity-75 mb-0">Assisted oral feeding, preparation of light prescribed diets, water intake reminders.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="p-3 rounded-3" style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.1);">
                    <div class="d-flex align-items-center gap-2 mb-2 text-success">
                        <i class="fa-solid fa-pills fs-5"></i>
                        <strong class="text-white">Medication Reminders</strong>
                    </div>
                    <p class="small text-light opacity-75 mb-0">Administering prescribed oral medicines on time and maintaining medical logs.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="p-3 rounded-3" style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.1);">
                    <div class="d-flex align-items-center gap-2 mb-2 text-danger">
                        <i class="fa-solid fa-heart-pulse fs-5"></i>
                        <strong class="text-white">Vitals Charting</strong>
                    </div>
                    <p class="small text-light opacity-75 mb-0">Regular monitoring of Blood Pressure, Pulse, Oxygen saturation (SPO2) and Sugar.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="p-3 rounded-3" style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.1);">
                    <div class="d-flex align-items-center gap-2 mb-2 text-primary">
                        <i class="fa-solid fa-wheelchair fs-5"></i>
                        <strong class="text-white">Mobility & Transfers</strong>
                    </div>
                    <p class="small text-light opacity-75 mb-0">Assisting with walking, wheelchair transfers, bed turning to avoid painful bedsores.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="p-3 rounded-3" style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.1);">
                    <div class="d-flex align-items-center gap-2 mb-2 text-light">
                        <i class="fa-solid fa-comments fs-5"></i>
                        <strong class="text-white">Family Updates</strong>
                    </div>
                    <p class="small text-light opacity-75 mb-0">Daily progress reporting to family members and immediate escalation if vitals fluctuate.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- 4. Flexible Shift Options -->
    <div class="mb-5">
        <div class="text-center mb-4">
            <span class="text-danger fw-bold text-uppercase small" style="letter-spacing: 1px;">Flexible Scheduling</span>
            <h2 class="fw-bolder display-6 mt-1 text-dark">Shift & Deployment Plans</h2>
            <div style="width: 50px; height: 3px; background: var(--dm-brand-red); margin: 12px auto 0;"></div>
            <p class="text-muted mt-2 mx-auto" style="max-width: 600px;">
                Choose the exact shift timing that fits your family routine and medical advice.
            </p>
        </div>

        <div class="row g-4">
            <!-- Shift 1: 12-Hour Day Shift -->
            <div class="col-lg-4">
                <div class="staff-shift-box">
                    <span class="badge bg-warning bg-opacity-10 text-dark rounded-pill px-3 py-1 mb-3" style="font-size: 0.78rem;">8:00 AM – 8:00 PM</span>
                    <h4 class="fw-bold text-dark mb-2">12-Hour Day Shift</h4>
                    <p class="text-muted small mb-4">Ideal for patients who need daytime mobility support, meal assistance, exercise, and medicine management while family is at work.</p>
                    <ul class="list-unstyled small text-start text-secondary mb-4 ps-3">
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i>Morning hygiene & sponge bath</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i>Breakfast, lunch & evening snacks</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i>Doctor appointment escort</li>
                    </ul>
                    <a href="tel:+919319149644" class="btn btn-outline-dark rounded-pill fw-bold w-100 py-2 btn-sm">Book 12-Hr Day Staff</a>
                </div>
            </div>

            <!-- Shift 2: 12-Hour Night Shift -->
            <div class="col-lg-4">
                <div class="staff-shift-box">
                    <span class="badge bg-primary bg-opacity-10 text-primary rounded-pill px-3 py-1 mb-3" style="font-size: 0.78rem;">8:00 PM – 8:00 AM</span>
                    <h4 class="fw-bold text-dark mb-2">12-Hour Night Shift</h4>
                    <p class="text-muted small mb-4">Guarantees safe sleep, frequent nighttime bathroom assistance, position turning for bedridden patients, and emergency vigilance.</p>
                    <ul class="list-unstyled small text-start text-secondary mb-4 ps-3">
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i>Night diaper change & toileting</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i>Fall prevention during midnight walking</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i>Peace of mind for sleeping family</li>
                    </ul>
                    <a href="tel:+919319149644" class="btn btn-outline-primary rounded-pill fw-bold w-100 py-2 btn-sm">Book 12-Hr Night Staff</a>
                </div>
            </div>

            <!-- Shift 3: 24-Hour Live-in Shift -->
            <div class="col-lg-4">
                <div class="staff-shift-box" style="border: 2px solid var(--dm-brand-red); box-shadow: 0 10px 30px rgba(216, 0, 0, 0.08);">
                    <span class="badge bg-danger rounded-pill px-3 py-1 mb-3" style="font-size: 0.78rem;">Most Recommended</span>
                    <h4 class="fw-bold text-dark mb-2">24-Hour Live-In Care</h4>
                    <p class="text-muted small mb-4">A dedicated resident support aide staying at your home 24/7 for continuous round-the-clock bedside medical and personal assistance.</p>
                    <ul class="list-unstyled small text-start text-secondary mb-4 ps-3">
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i>Round-the-clock uninterrupted care</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i>Full support for high-dependency patients</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i>Free replacement on aide's leave days</li>
                    </ul>
                    <a href="tel:+919319149644" class="btn btn-danger rounded-pill fw-bold w-100 py-2 btn-sm" style="background: var(--dm-brand-red); border: none;">Book 24-Hr Live-In Aide</a>
                </div>
            </div>
        </div>
    </div>

    <!-- 5. 4-Step Verification & Quality Assurance -->
    <div class="mb-5 py-4 px-3 bg-light rounded-4 border">
        <div class="text-center mb-4">
            <span class="text-danger fw-bold text-uppercase small" style="letter-spacing: 1px;">Safety & Trust</span>
            <h3 class="fw-bolder text-dark">Our 4-Step Staff Verification Standard</h3>
            <p class="text-muted small mx-auto" style="max-width: 600px;">We take the safety of your loved ones seriously with strict screening and continuous supervision.</p>
        </div>

        <div class="row g-3">
            <div class="col-md-3 col-sm-6">
                <div class="verify-step-card">
                    <div class="verify-step-num">1</div>
                    <h6 class="fw-bold text-dark mb-2">Police & ID Check</h6>
                    <p class="text-muted small mb-0">Aadhaar authentication, permanent address validation, and police background clearance records.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="verify-step-card">
                    <div class="verify-step-num">2</div>
                    <h6 class="fw-bold text-dark mb-2">Clinical Skill Test</h6>
                    <p class="text-muted small mb-0">Hands-on assessment on vitals recording, patient transfer techniques, and emergency response.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="verify-step-card">
                    <div class="verify-step-num">3</div>
                    <h6 class="fw-bold text-dark mb-2">Medical Fitness</h6>
                    <p class="text-muted small mb-0">Screening for infectious health conditions and physical stamina prior to home deployment.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="verify-step-card">
                    <div class="verify-step-num">4</div>
                    <h6 class="fw-bold text-dark mb-2">Doctor Audits</h6>
                    <p class="text-muted small mb-0">Ongoing supervisory audits by senior care coordinators with guaranteed free replacement.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- 6. Patients & Conditions We Support -->
    <div class="mb-5">
        <div class="text-center mb-4">
            <span class="text-danger fw-bold text-uppercase small" style="letter-spacing: 1px;">Clinical Scope</span>
            <h3 class="fw-bolder text-dark">Conditions & Patient Profiles Supported</h3>
            <div style="width: 50px; height: 3px; background: var(--dm-brand-red); margin: 12px auto 0;"></div>
        </div>

        <div class="row g-3">
            <div class="col-md-4 col-sm-6">
                <div class="condition-tag-pill">
                    <i class="fa-solid fa-brain text-danger fs-5"></i>
                    <span>Stroke & Paralysis Patients</span>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="condition-tag-pill">
                    <i class="fa-solid fa-bone text-primary fs-5"></i>
                    <span>Post-Orthopedic / Hip Surgeries</span>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="condition-tag-pill">
                    <i class="fa-solid fa-head-side-virus text-warning fs-5"></i>
                    <span>Alzheimer's & Dementia Care</span>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="condition-tag-pill">
                    <i class="fa-solid fa-bed text-info fs-5"></i>
                    <span>Bedridden & Frail Senior Citizens</span>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="condition-tag-pill">
                    <i class="fa-solid fa-lungs text-success fs-5"></i>
                    <span>COPD & Chronic Respiratory Care</span>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="condition-tag-pill">
                    <i class="fa-solid fa-ribbon text-purple fs-5" style="color: #9333ea;"></i>
                    <span>Palliative & Oncology Support</span>
                </div>
            </div>
        </div>
    </div>

    <!-- 7. Booking & Direct Request Form -->
    <div class="row align-items-center g-4 mb-5" id="bookingForm">
        <div class="col-lg-5">
            <div class="pe-lg-3">
                <span class="badge bg-danger bg-opacity-10 text-danger px-3 py-1 rounded-pill fw-bold mb-2 small">Direct Booking</span>
                <h2 class="fw-bolder text-dark mb-3">Hire Support Staff Within 30-60 Minutes</h2>
                <p class="text-secondary small mb-4" style="line-height: 1.7;">
                    Tell us about your patient's condition and preferred shift timing. Our senior care coordinator will call you right away to finalize the profile and dispatch verified staff.
                </p>

                <div class="d-flex flex-column gap-3 mb-4">
                    <div class="d-flex align-items-center gap-3">
                        <div class="rounded-circle d-flex align-items-center justify-content-center bg-danger bg-opacity-10 text-danger" style="width: 44px; height: 44px;">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div>
                            <small class="text-muted d-block">24/7 Priority Desk</small>
                            <a href="tel:+919319149644" class="fw-bold text-dark text-decoration-none fs-6">+91 93191 49644</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <div class="rounded-circle d-flex align-items-center justify-content-center bg-success bg-opacity-10 text-success" style="width: 44px; height: 44px;">
                            <i class="fa-brands fa-whatsapp fs-5"></i>
                        </div>
                        <div>
                            <small class="text-muted d-block">WhatsApp Helpline</small>
                            <a href="https://wa.me/919319149644?text=Hi%20DM%20Healthcare,%20I%20need%20support%20staff%20information." target="_blank" class="fw-bold text-success text-decoration-none fs-6">Chat on WhatsApp</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-7">
            <div class="support-form-card p-4 p-md-5">
                <h4 class="fw-bold text-dark mb-3">Request Staff Deployment</h4>
                <form action="backend/submit_appointment.php" method="POST">
                    <input type="hidden" name="service_required" value="Support Staff Services">
                    
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label small fw-semibold text-secondary">Patient / Family Name *</label>
                            <input type="text" name="full_name" class="form-control rounded-3 py-2" placeholder="Full Name" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label small fw-semibold text-secondary">Phone Number *</label>
                            <input type="tel" name="phone_number" class="form-control rounded-3 py-2" placeholder="10-digit mobile number" pattern="[0-9]{10}" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label small fw-semibold text-secondary">Required Staff Type *</label>
                            <select name="message_staff_type" class="form-select rounded-3 py-2" required>
                                <option value="Patient Care Attendant (Female)">Patient Care Attendant (Female)</option>
                                <option value="Patient Care Attendant (Male)">Patient Care Attendant (Male)</option>
                                <option value="General Duty Assistant (GDA)">General Duty Assistant (GDA)</option>
                                <option value="Elderly Companion Caregiver">Elderly Companion Caregiver</option>
                                <option value="Hospital Bedside Attendant">Hospital Bedside Attendant</option>
                                <option value="Semi-Nursing / ICU Aide">Semi-Nursing / ICU Aide</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label small fw-semibold text-secondary">Shift Duration *</label>
                            <select name="pref_time" class="form-select rounded-3 py-2" required>
                                <option value="12 Hours Day (8 AM - 8 PM)">12 Hours Day (8 AM - 8 PM)</option>
                                <option value="12 Hours Night (8 PM - 8 AM)">12 Hours Night (8 PM - 8 AM)</option>
                                <option value="24 Hours Live-In Care">24 Hours Live-In Care</option>
                                <option value="Short-Term (7-15 Days)">Short-Term (7-15 Days)</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label small fw-semibold text-secondary">City / Location *</label>
                            <select name="city" class="form-select rounded-3 py-2" required>
                                <option value="Faridabad">Faridabad (30-min delivery)</option>
                                <option value="Noida & Greater Noida">Noida & Greater Noida</option>
                                <option value="South & Central Delhi">South & Central Delhi</option>
                                <option value="Gurugram (Gurgaon)">Gurugram (Gurgaon)</option>
                                <option value="Ghaziabad & East Delhi">Ghaziabad & East Delhi</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label small fw-semibold text-secondary">Start Date</label>
                            <input type="date" name="pref_date" class="form-control rounded-3 py-2" value="<?= date('Y-m-d') ?>">
                        </div>
                        <div class="col-12">
                            <label class="form-label small fw-semibold text-secondary">Patient Condition & Requirements</label>
                            <textarea name="message" rows="2" class="form-control rounded-3" placeholder="Mention patient age, mobility status, medical history, address..."></textarea>
                        </div>
                        <div class="col-12 mt-3">
                            <button type="submit" class="btn btn-primary btn-lg w-100 rounded-pill fw-bold py-3 shadow" style="background: var(--dm-brand-red); border: none;">
                                <i class="fa-solid fa-paper-plane me-2"></i> Confirm Staff Request
                            </button>
                            <small class="text-center d-block text-muted mt-2" style="font-size: 0.78rem;">
                                <i class="fa-solid fa-lock text-success me-1"></i> 100% Confidential. No advance required before staff introduction.
                            </small>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- 8. Frequently Asked Questions (FAQs) -->
    <div class="mb-5">
        <div class="text-center mb-4">
            <span class="text-danger fw-bold text-uppercase small" style="letter-spacing: 1px;">Got Questions?</span>
            <h3 class="fw-bolder text-dark">Frequently Asked Questions</h3>
            <div style="width: 50px; height: 3px; background: var(--dm-brand-red); margin: 12px auto 0;"></div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="accordion" id="staffFaqAccordion">
                    <div class="accordion-item mb-3 border rounded-3 shadow-sm overflow-hidden">
                        <h2 class="accordion-header" id="sFaq1">
                            <button class="accordion-button fw-bold text-dark py-3" type="button" data-bs-toggle="collapse" data-bs-target="#scollapse1" aria-expanded="true" aria-controls="scollapse1">
                                How quickly can support staff be assigned to our home?
                            </button>
                        </h2>
                        <div id="scollapse1" class="accordion-collapse collapse show" aria-labelledby="sFaq1" data-bs-parent="#staffFaqAccordion">
                            <div class="accordion-body text-secondary small lh-base">
                                Across Delhi NCR (Faridabad, Noida, Delhi, Gurugram, Ghaziabad), we can dispatch verified support staff to your home or hospital room within <strong>30 to 60 minutes</strong> for emergencies. For 24-hour live-in assignments, deployment is confirmed on the same day.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-3 border rounded-3 shadow-sm overflow-hidden">
                        <h2 class="accordion-header" id="sFaq2">
                            <button class="accordion-button fw-bold text-dark py-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#scollapse2" aria-expanded="false" aria-controls="scollapse2">
                                What if we are not satisfied with the assigned caregiver?
                            </button>
                        </h2>
                        <div id="scollapse2" class="accordion-collapse collapse" aria-labelledby="sFaq2" data-bs-parent="#staffFaqAccordion">
                            <div class="accordion-body text-secondary small lh-base">
                                We offer a <strong>100% Free & Prompt Replacement Guarantee</strong>. If you feel the caregiver is not matching your patient's preferences or medical needs, simply notify our care manager and we will arrange a replacement caregiver immediately at no extra cost.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-3 border rounded-3 shadow-sm overflow-hidden">
                        <h2 class="accordion-header" id="sFaq3">
                            <button class="accordion-button fw-bold text-dark py-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#scollapse3" aria-expanded="false" aria-controls="scollapse3">
                                Can we choose between male and female attendants?
                            </button>
                        </h2>
                        <div id="scollapse3" class="accordion-collapse collapse" aria-labelledby="sFaq3" data-bs-parent="#staffFaqAccordion">
                            <div class="accordion-body text-secondary small lh-base">
                                Yes. We maintain an active network of certified male and female patient attendants and GDAs so you can choose the gender that ensures maximum personal comfort and dignity for your patient.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-3 border rounded-3 shadow-sm overflow-hidden">
                        <h2 class="accordion-header" id="sFaq4">
                            <button class="accordion-button fw-bold text-dark py-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#scollapse4" aria-expanded="false" aria-controls="scollapse4">
                                Are background checks and police verification completed?
                            </button>
                        </h2>
                        <div id="scollapse4" class="accordion-collapse collapse" aria-labelledby="sFaq4" data-bs-parent="#staffFaqAccordion">
                            <div class="accordion-body text-secondary small lh-base">
                                Yes, every support staff member is verified with government ID proofs, permanent address verification, and local police verification before being deployed to any home or hospital.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php
$custom_content = ob_get_clean();
?>
