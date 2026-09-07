<?php
/**
 * GDA Providing Services (General Duty Assistant)
 * DM Healthcare Home & Hospital Support
 */

$display_title = "GDA Providing Services";
$seo_title = "Certified GDA Providing Services at Home in Delhi NCR - DM Healthcare";
$seo_desc = "Hire certified General Duty Assistant (GDA) staffing for bedside healthcare at home across Delhi, Noida, Faridabad, Gurugram & Palwal. Hospital-trained GDA staff.";
$short_desc = "Certified and hospital-trained General Duty Assistants (GDA) providing professional bedside assistance, infection control, catheter care assistance, and patient mobilization.";
$category_name = "Home Care";

$frontend_custom_sections = '
<style>
:root {
    --primary-red: #e5252a;
    --navy-blue: #0f172a;
    --accent-blue: #0d6efd;
}

.gda-hero-box {
    background: radial-gradient(circle at top right, rgba(13, 110, 253, 0.08) 0%, transparent 60%),
                radial-gradient(circle at bottom left, rgba(229, 37, 42, 0.06) 0%, transparent 50%),
                linear-gradient(135deg, #ffffff 0%, #f0fdf4 100%);
    border-radius: 24px;
    padding: 40px 30px;
    border: 1px solid rgba(226, 232, 240, 0.9);
    box-shadow: 0 10px 30px rgba(15, 23, 42, 0.04);
    margin-bottom: 35px;
}

.gda-card {
    background: #ffffff;
    border-radius: 18px;
    padding: 24px;
    border: 1px solid #e2e8f0;
    transition: all 0.3s ease;
    height: 100%;
}
.gda-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 28px rgba(13, 110, 253, 0.1);
    border-color: rgba(13, 110, 253, 0.4);
}

.gda-icon-circle {
    width: 52px;
    height: 52px;
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.3rem;
    margin-bottom: 14px;
    background: rgba(13, 110, 253, 0.1);
    color: var(--accent-blue);
}
</style>

<div class="container py-4">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="mb-3">
        <ol class="breadcrumb mb-0 py-2 small">
            <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none text-muted"><i class="fa-solid fa-house me-1"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="index.php#services" class="text-decoration-none text-muted">Home Care</a></li>
            <li class="breadcrumb-item text-danger fw-bold" aria-current="page">GDA Providing</li>
        </ol>
    </nav>

    <!-- Hero Box -->
    <div class="gda-hero-box">
        <div class="row align-items-center g-4">
            <div class="col-lg-8">
                <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill fw-bold mb-3" style="background: rgba(13, 110, 253, 0.08); border: 1px solid rgba(13, 110, 253, 0.2); color: #0d6efd; font-size: 0.82rem;">
                    <i class="fa-solid fa-user-doctor"></i>
                    <span>HOSPITAL-TRAINED CLINICAL SUPPORT STAFF</span>
                </div>

                <h1 class="fw-bolder text-dark display-6 mb-3">
                    Certified <span style="color: var(--primary-red);">GDA Providing</span> Services at Home
                </h1>

                <p class="text-muted fs-6 mb-4" style="line-height: 1.7;">
                    A <strong>General Duty Assistant (GDA)</strong> is a clinically trained and certified healthcare worker who supports nursing staff and manages direct bedside patient care, daily medical hygiene, post-operative support, and vitals recording with hospital-level precision.
                </p>

                <div class="d-flex flex-wrap align-items-center gap-3">
                    <a href="tel:+918860600423" class="btn btn-danger rounded-pill px-4 py-2 fw-bold shadow-sm d-inline-flex align-items-center gap-2" style="background: var(--primary-red); border: none;">
                        <i class="fa-solid fa-phone"></i> Call: +91-8860600423
                    </a>
                    <a href="https://wa.me/918860600423?text=Hi%20DM%20Healthcare,%20I%20want%20to%20hire%20a%20certified%20GDA%20at%20Home." target="_blank" class="btn btn-outline-success rounded-pill px-4 py-2 fw-bold shadow-sm d-inline-flex align-items-center gap-2">
                        <i class="fa-brands fa-whatsapp fs-5"></i> Book GDA via WhatsApp
                    </a>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="bg-white p-4 rounded-4 shadow-sm border">
                    <h6 class="fw-bold text-dark mb-3"><i class="fa-solid fa-award text-primary me-2"></i> Why Choose DM Healthcare GDA?</h6>
                    <ul class="list-unstyled mb-0 small text-muted">
                        <li class="mb-2 pb-1 border-bottom"><i class="fa-solid fa-check text-primary me-2"></i> Government NSDC / Healthcare Sector Certified</li>
                        <li class="mb-2 pb-1 border-bottom"><i class="fa-solid fa-check text-primary me-2"></i> Trained in Hospital Infection Control & Safety</li>
                        <li class="mb-2 pb-1 border-bottom"><i class="fa-solid fa-check text-primary me-2"></i> Skilled in Catheter, Ryle\'s Tube & Bedpan Hygiene</li>
                        <li class="mb-0"><i class="fa-solid fa-check text-primary me-2"></i> 24x7 Direct Physician Consultation Backing</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Core GDA Clinical Roles -->
    <div class="my-5">
        <div class="text-center mb-4">
            <span class="text-uppercase fw-bold px-3 py-1 rounded-pill small" style="background: rgba(13, 110, 253, 0.08); color: #0d6efd;">Clinical Responsibilities</span>
            <h2 class="fw-bold text-dark mt-2">What Does a General Duty Assistant Do?</h2>
            <p class="text-muted mx-auto" style="max-width: 650px;">GDAs possess clinical training beyond standard domestic helpers, ensuring hospital-grade care at home.</p>
        </div>

        <div class="row g-3 g-md-4">
            <div class="col-md-4">
                <div class="gda-card">
                    <div class="gda-icon-circle"><i class="fa-solid fa-stethoscope"></i></div>
                    <h5 class="fw-bold text-dark mb-2">Vitals & Clinical Charting</h5>
                    <p class="text-muted small mb-0">Daily digital monitoring of blood pressure, pulse oximetry (SpO2), body temperature, and random blood sugar (RBS) charting for doctors.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="gda-card">
                    <div class="gda-icon-circle"><i class="fa-solid fa-pump-medical"></i></div>
                    <h5 class="fw-bold text-dark mb-2">Tube Feeding & Catheter Care</h5>
                    <p class="text-muted small mb-0">Assisting in Ryle\'s tube food delivery, emptying urine drainage bags with aseptic techniques, and maintaining catheter hygiene.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="gda-card">
                    <div class="gda-icon-circle"><i class="fa-solid fa-lungs"></i></div>
                    <h5 class="fw-bold text-dark mb-2">Oxygen & Nebulization Support</h5>
                    <p class="text-muted small mb-0">Operating oxygen concentrators, oxygen cylinders, BiPAP/CPAP mask placement, and assisting with nebulization sessions.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="gda-card">
                    <div class="gda-icon-circle"><i class="fa-solid fa-wheelchair"></i></div>
                    <h5 class="fw-bold text-dark mb-2">Safe Patient Ergonomics & Transfer</h5>
                    <p class="text-muted small mb-0">Hospital-protocol transfer of stroke or paralyzed patients from bed to wheelchair, commode chair, or walker without joint strain.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="gda-card">
                    <div class="gda-icon-circle"><i class="fa-solid fa-shield-virus"></i></div>
                    <h5 class="fw-bold text-dark mb-2">Aseptic Hygiene & Pressure Sore Care</h5>
                    <p class="text-muted small mb-0">Sterile bed sponging, diaper changing, peri-care, and strict 2-hourly turning schedule to prevent pressure ulcers/bedsores.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="gda-card">
                    <div class="gda-icon-circle"><i class="fa-solid fa-triangle-exclamation"></i></div>
                    <h5 class="fw-bold text-dark mb-2">Emergency Escalation</h5>
                    <p class="text-muted small mb-0">Trained to detect early signs of clinical deterioration (shortness of breath, sudden BP drop) and immediately alert DM Healthcare physicians.</p>
                </div>
            </div>
        </div>
    </div>
</div>
';
?>
