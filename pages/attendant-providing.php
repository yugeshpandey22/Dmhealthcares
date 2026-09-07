<?php
/**
 * Attendant Providing Services at Home
 * DM Healthcare Home Care Solutions
 */

$display_title = "Patient Attendant Providing Services";
$seo_title = "Certified Patient Attendant Providing Services at Home in Delhi NCR - DM Healthcare";
$seo_desc = "Hire certified, police-verified male and female patient attendants for 12-hour and 24-hour home healthcare across Delhi, Faridabad, Noida, Gurugram & Palwal. 30-60 min rapid dispatch.";
$short_desc = "Compassionate, background-checked patient attendants providing personalized bedside assistance, mobility, feeding, hygiene, and vitals tracking at home.";
$category_name = "Home Care";

$frontend_custom_sections = '
<style>
:root {
    --primary-red: #e5252a;
    --primary-dark: #c4181d;
    --navy-blue: #0f172a;
    --light-bg: #f8fafc;
}

.att-hero-box {
    background: radial-gradient(circle at top right, rgba(229, 37, 42, 0.08) 0%, transparent 60%),
                radial-gradient(circle at bottom left, rgba(13, 110, 253, 0.05) 0%, transparent 50%),
                linear-gradient(135deg, #ffffff 0%, #f1f5f9 100%);
    border-radius: 24px;
    padding: 40px 30px;
    border: 1px solid rgba(226, 232, 240, 0.9);
    box-shadow: 0 10px 30px rgba(15, 23, 42, 0.04);
    margin-bottom: 35px;
}

.att-feature-card {
    background: #ffffff;
    border-radius: 18px;
    padding: 24px;
    border: 1px solid #e2e8f0;
    transition: all 0.3s ease;
    height: 100%;
}
.att-feature-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 28px rgba(229, 37, 42, 0.08);
    border-color: rgba(229, 37, 42, 0.3);
}

.att-icon-circle {
    width: 54px;
    height: 54px;
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.4rem;
    margin-bottom: 16px;
    background: rgba(229, 37, 42, 0.1);
    color: var(--primary-red);
}

.shift-card {
    border-radius: 20px;
    border: 2px solid #e2e8f0;
    background: #ffffff;
    padding: 28px;
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}
.shift-card:hover {
    border-color: var(--primary-red);
    box-shadow: 0 10px 30px rgba(15, 23, 42, 0.08);
}
.shift-card.popular {
    border-color: var(--primary-red);
    position: relative;
}
.shift-badge {
    position: absolute;
    top: -12px;
    right: 20px;
    background: var(--primary-red);
    color: white;
    font-size: 0.75rem;
    font-weight: 800;
    padding: 4px 12px;
    border-radius: 20px;
    text-transform: uppercase;
}
</style>

<div class="container py-4">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="mb-3">
        <ol class="breadcrumb mb-0 py-2 small">
            <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none text-muted"><i class="fa-solid fa-house me-1"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="index.php#services" class="text-decoration-none text-muted">Home Care</a></li>
            <li class="breadcrumb-item text-danger fw-bold" aria-current="page">Attendant Providing</li>
        </ol>
    </nav>

    <!-- Hero Banner & Intro -->
    <div class="att-hero-box">
        <div class="row align-items-center g-4">
            <div class="col-lg-8">
                <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill fw-bold mb-3" style="background: rgba(229, 37, 42, 0.08); border: 1px solid rgba(229, 37, 42, 0.2); color: var(--primary-red); font-size: 0.82rem;">
                    <i class="fa-solid fa-user-shield"></i>
                    <span>POLICE VERIFIED & TRAINED MALE/FEMALE CAREGIVERS</span>
                </div>

                <h1 class="fw-bolder text-dark display-6 mb-3">
                    Professional <span style="color: var(--primary-red);">Patient Attendant Providing</span> Services
                </h1>

                <p class="text-muted fs-6 mb-4" style="line-height: 1.7;">
                    When your loved ones need dedicated bedside support for daily routine tasks, mobility, post-operative recovery, or elderly companionship, DM Healthcare delivers certified and trustworthy medical attendants right to your home across Delhi NCR within <strong>30 to 60 minutes</strong>.
                </p>

                <div class="d-flex flex-wrap align-items-center gap-3">
                    <a href="tel:+918860600423" class="btn btn-danger rounded-pill px-4 py-2 fw-bold shadow-sm d-inline-flex align-items-center gap-2" style="background: var(--primary-red); border: none;">
                        <i class="fa-solid fa-phone"></i> Call: +91-8860600423
                    </a>
                    <a href="https://wa.me/918860600423?text=Hi%20DM%20Healthcare,%20I%20need%20a%20Patient%20Attendant%20at%20Home." target="_blank" class="btn btn-outline-success rounded-pill px-4 py-2 fw-bold shadow-sm d-inline-flex align-items-center gap-2">
                        <i class="fa-brands fa-whatsapp fs-5"></i> WhatsApp Enquiry
                    </a>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="bg-white p-4 rounded-4 shadow-sm border">
                    <h6 class="fw-bold text-dark mb-3"><i class="fa-solid fa-circle-check text-success me-2"></i> Quality Assurance</h6>
                    <ul class="list-unstyled mb-0 small text-muted">
                        <li class="mb-2 pb-1 border-bottom"><i class="fa-solid fa-check text-danger me-2"></i> 100% Background & Police Checked</li>
                        <li class="mb-2 pb-1 border-bottom"><i class="fa-solid fa-check text-danger me-2"></i> Flexible 12-Hour Day / Night & 24-Hour Live-in</li>
                        <li class="mb-2 pb-1 border-bottom"><i class="fa-solid fa-check text-danger me-2"></i> Free Immediate Replacement Guarantee</li>
                        <li class="mb-0"><i class="fa-solid fa-check text-danger me-2"></i> Daily Physician & Nursing Supervisor Oversight</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Shifts & Plans -->
    <div class="my-5">
        <div class="text-center mb-4">
            <span class="text-uppercase fw-bold px-3 py-1 rounded-pill small" style="background: rgba(229, 37, 42, 0.08); color: var(--primary-red);">Shift Options</span>
            <h2 class="fw-bold text-dark mt-2">Flexible Attendant Care Shifts</h2>
            <p class="text-muted mx-auto" style="max-width: 600px;">Choose a care schedule that fits your patient\'s routine and family needs.</p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="shift-card">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="fw-bold text-dark mb-0">12-Hour Day Shift</h4>
                        <span class="badge bg-light text-dark border">Day Care</span>
                    </div>
                    <p class="text-muted small mb-4">Assists patient from morning to evening with bathing, sponge, feeding, mobility, and medication reminders.</p>
                    <ul class="list-unstyled small text-muted mb-4">
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Routine hygiene & grooming</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Timely meals & fruit feeds</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Wheelchair & walking support</li>
                    </ul>
                    <a href="tel:+918860600423" class="btn btn-outline-danger rounded-pill fw-bold w-100 mt-auto py-2">Book 12h Day Shift</a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="shift-card popular">
                    <span class="shift-badge">Most Popular</span>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="fw-bold text-dark mb-0">24-Hour Live-in</h4>
                        <span class="badge bg-danger text-white">Full-Time</span>
                    </div>
                    <p class="text-muted small mb-4">Round-the-clock dedicated live-in attendant staying with the patient for uninterrupted day and night care.</p>
                    <ul class="list-unstyled small text-muted mb-4">
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> 24/7 Bedside attention</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Night diaper change & position turning</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Bed sore prevention & safety</li>
                    </ul>
                    <a href="tel:+918860600423" class="btn btn-danger rounded-pill fw-bold w-100 mt-auto py-2" style="background: var(--primary-red); border: none;">Book 24h Live-in</a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="shift-card">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="fw-bold text-dark mb-0">12-Hour Night Shift</h4>
                        <span class="badge bg-light text-dark border">Night Care</span>
                    </div>
                    <p class="text-muted small mb-4">Ensures patient safety during night hours, assistance with urination, hydration, and emergency alert.</p>
                    <ul class="list-unstyled small text-muted mb-4">
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Fall prevention during night</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Bedpan / urinal assistance</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Peaceful night sleep for family</li>
                    </ul>
                    <a href="tel:+918860600423" class="btn btn-outline-danger rounded-pill fw-bold w-100 mt-auto py-2">Book 12h Night Shift</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Key Duties Grid -->
    <div class="my-5">
        <div class="text-center mb-4">
            <h2 class="fw-bold text-dark">What Our Patient Attendants Do</h2>
            <p class="text-muted">Comprehensive, non-invasive personal and medical assistance.</p>
        </div>

        <div class="row g-3 g-md-4">
            <div class="col-md-4">
                <div class="att-feature-card">
                    <div class="att-icon-circle"><i class="fa-solid fa-shower"></i></div>
                    <h5 class="fw-bold text-dark mb-2">Personal Hygiene & Bathing</h5>
                    <p class="text-muted small mb-0">Bed sponge baths, assisted showering, mouth care, nail clipping, and clothing change to keep the patient fresh.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="att-feature-card">
                    <div class="att-icon-circle"><i class="fa-solid fa-utensils"></i></div>
                    <h5 class="fw-bold text-dark mb-2">Diet & Meal Assistance</h5>
                    <p class="text-muted small mb-0">Preparing light nutritious meals, helping with oral feeding, fluid intake, and managing Ryle\'s tube feeds under supervision.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="att-feature-card">
                    <div class="att-icon-circle"><i class="fa-solid fa-person-walking-with-cane"></i></div>
                    <h5 class="fw-bold text-dark mb-2">Mobility & Transfer</h5>
                    <p class="text-muted small mb-0">Safe transfer from bed to wheelchair, walking support, passive limb exercises, and preventing accidental falls.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="att-feature-card">
                    <div class="att-icon-circle"><i class="fa-solid fa-bed"></i></div>
                    <h5 class="fw-bold text-dark mb-2">Bedsore Prevention</h5>
                    <p class="text-muted small mb-0">Regular 2-hour position turning, air mattress maintenance, skin moisturization, and powdering for bedridden patients.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="att-feature-card">
                    <div class="att-icon-circle"><i class="fa-solid fa-pills"></i></div>
                    <h5 class="fw-bold text-dark mb-2">Medication Reminders</h5>
                    <p class="text-muted small mb-0">Giving prescribed oral medicines strictly on time and maintaining a written log of all daily dosages.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="att-feature-card">
                    <div class="att-icon-circle"><i class="fa-solid fa-heart-pulse"></i></div>
                    <h5 class="fw-bold text-dark mb-2">Basic Vitals Monitoring</h5>
                    <p class="text-muted small mb-0">Recording blood pressure, pulse, temperature, and blood sugar levels with digital devices and alerting the family.</p>
                </div>
            </div>
        </div>
    </div>
</div>
';
?>
