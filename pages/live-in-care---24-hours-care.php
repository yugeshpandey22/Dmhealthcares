<?php
// Custom Page Overrides & Styling for Live-In Care (24 Hours Care)
// DO NOT set $full_page_override = true; (let standard layout with Banner & Header render)
$hide_default_welcome = true;

// Ensure banner is properly resolved for Live-In Care (nav item ID: 18)
if (empty($banner_image) || !file_exists($banner_image)) {
    $matches = glob('assets/images/pages/banner_18_*.*');
    if (!empty($matches)) {
        $banner_image = end($matches);
    }
}

$frontend_custom_sections = '
<style>
.livein-badge {
    background-color: rgba(229, 37, 42, 0.1);
    color: var(--primary-color, #e5252a);
    padding: 8px 18px;
    border-radius: 50rem;
    font-weight: 700;
    font-size: 0.85rem;
    letter-spacing: 0.5px;
    display: inline-flex;
    align-items: center;
}
.livein-card {
    background: #ffffff;
    border-radius: 18px;
    padding: 30px;
    height: 100%;
    box-shadow: 0 5px 20px rgba(0,0,0,0.04);
    border: 1px solid #eef2f6;
    transition: all 0.3s ease;
}
.livein-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(229, 37, 42, 0.1);
    border-color: rgba(229, 37, 42, 0.2);
}
.livein-icon {
    width: 60px;
    height: 60px;
    background: rgba(229, 37, 42, 0.08);
    color: var(--primary-color, #e5252a);
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    margin-bottom: 20px;
}
.livein-highlight-box {
    background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
    color: #ffffff;
    border-radius: 24px;
    padding: 40px;
    position: relative;
    overflow: hidden;
}
.livein-highlight-box::before {
    content: "";
    position: absolute;
    top: -50px;
    right: -50px;
    width: 200px;
    height: 200px;
    background: rgba(229, 37, 42, 0.15);
    border-radius: 50%;
}
</style>

<!-- Intro Section -->
<div class="container py-4">
    <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm border mb-5">
        <div class="row align-items-center">
            <div class="col-lg-7 mb-4 mb-lg-0">
                <span class="livein-badge mb-3">
                    <i class="fa-solid fa-clock me-2"></i> 24X7 ROUND-THE-CLOCK CARE
                </span>
                <h2 class="fw-bold text-dark display-6 mb-3">
                    Continuous, Dedicated <span style="color: var(--primary-color, #e5252a);">Live-In Care</span> at Home
                </h2>
                <p class="text-muted lead mb-4" style="font-size: 1.05rem; line-height: 1.8;">
                    When your loved one requires round-the-clock attention, DM Healthcare delivers verified, compassionate, and highly trained live-in caregivers and nurses who stay right by their side 24 hours a day.
                </p>
                <div class="row g-3">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center p-3 rounded-3 bg-light">
                            <i class="fa-solid fa-user-shield fs-4 text-primary me-3" style="color: var(--primary-color, #e5252a) !important;"></i>
                            <div>
                                <h6 class="fw-bold mb-0 text-dark">Verified Caregivers</h6>
                                <small class="text-muted">Police & BG Verified</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center p-3 rounded-3 bg-light">
                            <i class="fa-solid fa-hospital-user fs-4 text-primary me-3" style="color: var(--primary-color, #e5252a) !important;"></i>
                            <div>
                                <h6 class="fw-bold mb-0 text-dark">24/7 Clinical Backup</h6>
                                <small class="text-muted">Doctor on Call</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 ps-lg-4 text-center">
                <img src="' . (isset($display_image) ? htmlspecialchars($display_image) : 'assets/images/about.jpg') . '" alt="24 Hours Live-In Healthcare Caregiver" class="img-fluid rounded-4 shadow border border-4 border-white" style="max-height: 380px; width: 100%; object-fit: cover;">
            </div>
        </div>
    </div>
</div>

<!-- What Live-in Care Covers -->
<div class="bg-light py-5 border-top border-bottom">
    <div class="container">
        <div class="text-center mb-5">
            <span class="livein-badge mb-2">COMPLETE COVERAGE</span>
            <h2 class="fw-bold text-dark">What Our 24-Hour Live-In Care Includes</h2>
            <p class="text-muted mx-auto" style="max-width: 650px;">From daily activities of living to medical assistance, our dedicated attendant ensures seamless care day and night.</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="livein-card">
                    <div class="livein-icon">
                        <i class="fa-solid fa-bed"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Bedside Assistance & Hygiene</h5>
                    <p class="text-muted mb-0">Assistance with bathing, sponge baths, oral care, diaper changing, and bed positioning to prevent bedsores.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="livein-card">
                    <div class="livein-icon">
                        <i class="fa-solid fa-pills"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Medication & Vitals Tracking</h5>
                    <p class="text-muted mb-0">Timely administration of prescribed medicines, regular blood pressure, pulse, SpO2, and blood sugar monitoring.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="livein-card">
                    <div class="livein-icon">
                        <i class="fa-solid fa-person-walking-with-cane"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Mobility & Fall Prevention</h5>
                    <p class="text-muted mb-0">Support for walking, wheelchair transfers, passive limb movements, and 24-hour vigilant supervision to avoid falls.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="livein-card">
                    <div class="livein-icon">
                        <i class="fa-solid fa-utensils"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Diet & Meal Assistance</h5>
                    <p class="text-muted mb-0">Feeding support (oral, Ryle\'s tube, or peg tube as prescribed) adhering strictly to nutritional dietary plans.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="livein-card">
                    <div class="livein-icon">
                        <i class="fa-solid fa-moon"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Night-Time Monitoring</h5>
                    <p class="text-muted mb-0">Round-the-clock presence for night washroom trips, emergency alerts, repositioning, and calm assistance during restless hours.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="livein-card">
                    <div class="livein-icon">
                        <i class="fa-solid fa-heart"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Companionship & Emotional Support</h5>
                    <p class="text-muted mb-0">Empathetic companionship, conversations, and mental engagement that keeps elderly and recovering patients motivated.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Highlight CTA Banner -->
<div class="container py-5">
    <div class="livein-highlight-box shadow-lg">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <h3 class="fw-bold text-white mb-2">Need a 24-Hour Live-In Caregiver Today?</h3>
                <p class="text-light opacity-75 mb-0" style="font-size: 1.05rem;">We deploy trained male & female attendants across Delhi, Noida, Faridabad, Gurugram & Ghaziabad.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="tel:+918860600423" class="btn btn-danger btn-lg rounded-pill px-4 py-3 fw-bold shadow">
                    <i class="fa-solid fa-phone-volume me-2"></i> +91 8860600423
                </a>
            </div>
        </div>
    </div>
</div>
';
