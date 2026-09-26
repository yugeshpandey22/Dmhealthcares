<?php
/**
 * DM Healthcare - Basic Elder Care at Home
 * Hospital-Grade Compassionate Geriatric & Senior Living Support
 */

$display_title = "Elder Care - Basic Senior Living Support";
$seo_title = "Professional Basic Elder Care Services at Home in Delhi NCR - DM Healthcare";
$seo_desc = "Compassionate, police-verified elder care attendants & senior companions for 12h/24h at home in Faridabad, Noida, Delhi & Gurugram. Mobility assistance, feeding, medication & vitals tracking.";
$short_desc = "Dedicated, compassionate care for aging parents. Certified geriatric attendants assisting with daily mobility, hygiene, timely medicines, and heartfelt companionship.";
$category_name = "Home Care";
$hide_default_welcome = true;

$frontend_custom_sections = '
<style>
:root {
    --dm-brand-red: #e5252a;
    --dm-brand-blue: #0284c7;
    --dm-dark: #0f172a;
}
.elder-hero-card {
    background: radial-gradient(circle at top right, rgba(229, 37, 42, 0.07) 0%, transparent 60%),
                radial-gradient(circle at bottom left, rgba(2, 132, 199, 0.05) 0%, transparent 50%),
                linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
    border-radius: 24px;
    padding: 36px 28px;
    border: 1px solid rgba(226, 232, 240, 0.9);
    box-shadow: 0 10px 30px rgba(15, 23, 42, 0.04);
    margin-bottom: 35px;
}
.elder-feature-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 20px;
    padding: 24px 20px;
    height: 100%;
    transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
    box-shadow: 0 4px 15px rgba(0,0,0,0.02);
}
.elder-feature-card:hover {
    transform: translateY(-6px);
    border-color: rgba(229, 37, 42, 0.4);
    box-shadow: 0 16px 35px rgba(229, 37, 42, 0.1);
}
.elder-icon-circle {
    width: 54px;
    height: 54px;
    border-radius: 16px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 1.4rem;
    margin-bottom: 16px;
    background: rgba(229, 37, 42, 0.1);
    color: var(--dm-brand-red);
}
.elder-shift-card {
    background: #ffffff;
    border-radius: 20px;
    border: 1px solid #e2e8f0;
    padding: 24px;
    transition: all 0.3s ease;
    height: 100%;
}
.elder-shift-card:hover {
    border-color: #0284c7;
    box-shadow: 0 12px 30px rgba(2, 132, 199, 0.1);
}
</style>

<!-- Hero Overview Box -->
<div class="elder-hero-card">
    <div class="d-flex flex-wrap gap-2 mb-3">
        <span class="badge rounded-pill bg-white text-dark border px-3 py-2 shadow-2xs small fw-bold">
            <i class="fa-solid fa-shield-halved text-success me-1"></i> 100% Police Verified
        </span>
        <span class="badge rounded-pill bg-white text-dark border px-3 py-2 shadow-2xs small fw-bold">
            <i class="fa-solid fa-rotate text-primary me-1"></i> Free Replacement Guarantee
        </span>
        <span class="badge rounded-pill bg-white text-dark border px-3 py-2 shadow-2xs small fw-bold">
            <i class="fa-solid fa-bolt text-danger me-1"></i> 30-60 Mins Deployment
        </span>
    </div>
    
    <h1 class="h2 fw-bolder mb-3 text-dark">Dignified, Empathetic Care for Aging Parents</h1>
    <p class="text-muted lead fs-6 mb-4" style="line-height: 1.8;">
        Aging brings physical changes and emotional needs. Our certified elder care attendants provide gentle daily living assistance, mobility support, medication management, and warm companionship so your elderly loved ones can live safely and happily in the comfort of their home.
    </p>

    <div class="d-flex flex-wrap gap-3 pt-2">
        <a href="tel:+919319149644" class="btn btn-danger rounded-pill px-4 py-3 fw-bold shadow-sm d-inline-flex align-items-center gap-2" style="background: var(--dm-brand-red); border: none;">
            <i class="fa-solid fa-phone"></i> Book Elder Care Attendant
        </a>
        <a href="https://wa.me/919319149644?text=' . urlencode('Hi DM Healthcare, I would like to inquire about Elder Care services for my parents.') . '" target="_blank" class="btn btn-outline-success rounded-pill px-4 py-3 fw-bold d-inline-flex align-items-center gap-2">
            <i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
        </a>
        <a href="rate-cards" class="btn btn-light border rounded-pill px-4 py-3 fw-bold text-secondary">
            <i class="fa-solid fa-receipt me-1"></i> View Rate Cards
        </a>
    </div>
</div>

<!-- What Does Basic Elder Care Include Section -->
<div class="mb-5">
    <div class="text-center mb-4">
        <span class="badge bg-danger bg-opacity-10 text-danger px-3 py-1 rounded-pill fw-bold text-uppercase" style="font-size: 0.75rem; letter-spacing: 1px;">Scope of Care</span>
        <h2 class="h3 fw-bold text-dark mt-2 mb-2">What Does Elder Care Include?</h2>
        <p class="text-muted small mx-auto" style="max-width: 600px;">Our caregivers are meticulously trained in senior empathy, fall prevention, and respectful physical assistance.</p>
    </div>
    
    <div class="row g-4">
        <div class="col-md-6 col-lg-3">
            <div class="elder-feature-card text-center">
                <div class="elder-icon-circle">
                    <i class="fa-solid fa-person-cane"></i>
                </div>
                <h5 class="fw-bold text-dark mb-2">Mobility & Fall Safety</h5>
                <p class="text-muted small mb-0">Assistance in walking, transitioning from bed to chair, wheelchair support, and fall-hazard prevention.</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="elder-feature-card text-center">
                <div class="elder-icon-circle" style="background: rgba(2, 132, 199, 0.1); color: #0284c7;">
                    <i class="fa-solid fa-pills"></i>
                </div>
                <h5 class="fw-bold text-dark mb-2">Medication Timings</h5>
                <p class="text-muted small mb-0">Strict adherence to doctor prescriptions, timely medicine reminders, and daily vital logs (BP, Sugar, SpO2).</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="elder-feature-card text-center">
                <div class="elder-icon-circle" style="background: rgba(16, 185, 129, 0.1); color: #10b981;">
                    <i class="fa-solid fa-utensils"></i>
                </div>
                <h5 class="fw-bold text-dark mb-2">Feeding & Nutrition</h5>
                <p class="text-muted small mb-0">Assistance in eating, serving doctor-recommended diabetic/cardiac diet, and maintaining adequate daily hydration.</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="elder-feature-card text-center">
                <div class="elder-icon-circle" style="background: rgba(245, 158, 11, 0.1); color: #f59e0b;">
                    <i class="fa-solid fa-shower"></i>
                </div>
                <h5 class="fw-bold text-dark mb-2">Personal Hygiene</h5>
                <p class="text-muted small mb-0">Gentle assistance in sponge/bed bath, grooming, oral hygiene, diaper change, and toileting assistance.</p>
            </div>
        </div>
    </div>
</div>

<!-- Flexible Shifts & Tariff Section -->
<div class="mb-5 p-4 rounded-4 bg-light border">
    <div class="row align-items-center mb-4">
        <div class="col-lg-8">
            <h3 class="h4 fw-bold text-dark mb-1">Flexible Care Shifts & Transparent Pricing</h3>
            <p class="text-muted small mb-0">Choose between day shifts, night monitoring, or 24-hour continuous live-in care across Delhi NCR.</p>
        </div>
        <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
            <a href="rate-cards" class="btn btn-outline-danger btn-sm rounded-pill fw-bold px-3 py-2">
                <i class="fa-solid fa-list-check me-1"></i> Full Price List
            </a>
        </div>
    </div>

    <div class="row g-3">
        <div class="col-md-4">
            <div class="elder-shift-card">
                <span class="badge bg-danger bg-opacity-10 text-danger mb-2 fw-bold px-3 py-1 rounded-pill">Day Shift</span>
                <h5 class="fw-bold text-dark mb-1">12-Hour Day Care</h5>
                <p class="text-muted small mb-3">Daily routine assistance from 8 AM to 8 PM. Feeding, walks, medicines & companionship.</p>
                <div class="fw-bold text-dark mb-3">Starts ₹800 <span class="small text-muted fw-normal">/ shift</span></div>
                <a href="tel:+919319149644" class="btn btn-outline-dark btn-sm rounded-pill w-100 fw-bold">Book Day Shift</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="elder-shift-card">
                <span class="badge bg-primary bg-opacity-10 text-primary mb-2 fw-bold px-3 py-1 rounded-pill">Night Shift</span>
                <h5 class="fw-bold text-dark mb-1">12-Hour Night Care</h5>
                <p class="text-muted small mb-3">Night safety, toileting assistance, fall prevention, and soothing night care.</p>
                <div class="fw-bold text-dark mb-3">Starts ₹800 <span class="small text-muted fw-normal">/ shift</span></div>
                <a href="tel:+919319149644" class="btn btn-outline-primary btn-sm rounded-pill w-100 fw-bold">Book Night Shift</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="elder-shift-card" style="border: 2px solid var(--dm-brand-red);">
                <span class="badge bg-danger text-white mb-2 fw-bold px-3 py-1 rounded-pill">Most Popular</span>
                <h5 class="fw-bold text-dark mb-1">24-Hour Live-in Care</h5>
                <p class="text-muted small mb-3">Dedicated full-time caregiver residing at home for 24/7 peace of mind and support.</p>
                <div class="fw-bold text-danger mb-3">Starts ₹1,200 <span class="small text-muted fw-normal">/ 24h</span></div>
                <a href="tel:+919319149644" class="btn btn-danger btn-sm rounded-pill w-100 fw-bold" style="background: var(--dm-brand-red); border: none;">Book 24-Hr Care</a>
            </div>
        </div>
    </div>
</div>
';
?>
