<?php
/**
 * General Duty Assistant (GDA) Full Page
 * DM Healthcare Clinical Care Support
 */

$display_title = "General Duty Assistant (GDA) at Home";
$seo_title = "General Duty Assistant (GDA) at Home in Delhi NCR - DM Healthcare";
$seo_desc = "Book certified General Duty Assistant (GDA) services at home across Delhi, Faridabad, Noida, Gurugram & Palwal. 12h/24h hospital-standard patient care.";
$short_desc = "Professional General Duty Assistant (GDA) staffing for bedside nursing assistance, hygiene, medication management, and mobility support.";
$category_name = "Home Care";

$frontend_custom_sections = '
<style>
:root {
    --primary-red: #e5252a;
    --navy-blue: #0f172a;
    --emerald-green: #10b981;
}

.gda-full-hero {
    background: radial-gradient(circle at top right, rgba(229, 37, 42, 0.08) 0%, transparent 60%),
                radial-gradient(circle at bottom left, rgba(16, 185, 129, 0.06) 0%, transparent 50%),
                linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
    border-radius: 24px;
    padding: 42px 32px;
    border: 1px solid rgba(226, 232, 240, 0.9);
    box-shadow: 0 10px 30px rgba(15, 23, 42, 0.04);
    margin-bottom: 35px;
}

.compare-table th {
    background: #0f172a;
    color: white;
    font-weight: 700;
}
</style>

<div class="container py-4">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="mb-3">
        <ol class="breadcrumb mb-0 py-2 small">
            <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none text-muted"><i class="fa-solid fa-house me-1"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="index.php#services" class="text-decoration-none text-muted">Home Care</a></li>
            <li class="breadcrumb-item text-danger fw-bold" aria-current="page">General Duty Assistant (GDA)</li>
        </ol>
    </nav>

    <!-- Hero Box -->
    <div class="gda-full-hero">
        <div class="row align-items-center g-4">
            <div class="col-lg-8">
                <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill fw-bold mb-3" style="background: rgba(229, 37, 42, 0.08); border: 1px solid rgba(229, 37, 42, 0.2); color: var(--primary-red); font-size: 0.82rem;">
                    <i class="fa-solid fa-hand-holding-medical"></i>
                    <span>CERTIFIED GENERAL DUTY ASSISTANTS (GDA)</span>
                </div>

                <h1 class="fw-bolder text-dark display-6 mb-3">
                    Hospital-Standard <span style="color: var(--primary-red);">General Duty Assistant (GDA)</span> at Home
                </h1>

                <p class="text-muted fs-6 mb-4" style="line-height: 1.7;">
                    A General Duty Assistant (GDA / Nursing Aide) provides high-standard clinical support for bedridden patients, stroke recovery, cancer care, and post-operative healing. DM Healthcare connects your family with skilled GDA staff for 12-hour and 24-hour shifts across Delhi NCR.
                </p>

                <div class="d-flex flex-wrap align-items-center gap-3">
                    <a href="tel:+918860600423" class="btn btn-danger rounded-pill px-4 py-2 fw-bold shadow-sm d-inline-flex align-items-center gap-2" style="background: var(--primary-red); border: none;">
                        <i class="fa-solid fa-phone"></i> Call: +91-8860600423
                    </a>
                    <a href="https://wa.me/918860600423?text=Hi%20DM%20Healthcare,%20I%20need%20a%20General%20Duty%20Assistant%20(GDA)%20at%20Home." target="_blank" class="btn btn-outline-success rounded-pill px-4 py-2 fw-bold shadow-sm d-inline-flex align-items-center gap-2">
                        <i class="fa-brands fa-whatsapp fs-5"></i> WhatsApp Booking
                    </a>
                </div>
            </div>

            <div class="col-lg-4 text-center">
                <div class="bg-white p-4 rounded-4 shadow-sm border text-start">
                    <span class="badge bg-danger rounded-pill px-3 py-1 mb-2 fw-bold" style="background: var(--primary-red) !important; font-size: 0.75rem;">RAPID DEPLOYMENT</span>
                    <h5 class="fw-bold text-dark mb-2">30-60 Min Dispatch</h5>
                    <p class="text-muted small mb-3">Dedicated care staff ready in Faridabad, Noida, Gurugram, Delhi & Palwal.</p>
                    <ul class="list-unstyled mb-0 small text-muted">
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Male & Female GDA Staff Available</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> 12h Day / 12h Night / 24h Live-in</li>
                        <li class="mb-0"><i class="fa-solid fa-check text-success me-2"></i> Free Prompt Replacement</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Comparison Table: Attendant vs GDA vs Registered Nurse -->
    <div class="my-5">
        <div class="text-center mb-4">
            <span class="text-uppercase fw-bold px-3 py-1 rounded-pill small" style="background: rgba(229, 37, 42, 0.08); color: var(--primary-red);">Role Clarity</span>
            <h2 class="fw-bold text-dark mt-2">Attendant vs GDA vs Registered Nurse</h2>
            <p class="text-muted mx-auto" style="max-width: 650px;">Understand which level of caregiver best matches your patient\'s condition.</p>
        </div>

        <div class="table-responsive bg-white rounded-4 shadow-sm border p-3">
            <table class="table table-hover align-middle mb-0 text-center compare-table" style="font-size: 0.88rem;">
                <thead>
                    <tr>
                        <th class="text-start ps-3" style="width: 28%;">Service / Medical Task</th>
                        <th style="width: 24%;">Patient Attendant</th>
                        <th style="width: 24%; background: #e5252a;">General Duty Assistant (GDA)</th>
                        <th style="width: 24%;">Certified ICU / GNM Nurse</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-start ps-3 fw-semibold text-dark">Bathing, Hygiene & Feeding</td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i> Full Support</td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i> Aseptic Protocol</td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i> Supervised</td>
                    </tr>
                    <tr>
                        <td class="text-start ps-3 fw-semibold text-dark">Vitals Tracking (BP, Sugar, SpO2)</td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i> Basic Digital</td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i> Clinical Charting</td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i> Advanced Monitoring</td>
                    </tr>
                    <tr>
                        <td class="text-start ps-3 fw-semibold text-dark">Catheter & Urine Bag Drainage</td>
                        <td><span class="text-muted">—</span></td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i> Emptying & Hygiene</td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i> Insertion & Care</td>
                    </tr>
                    <tr>
                        <td class="text-start ps-3 fw-semibold text-dark">Ryle\'s Tube Food Administration</td>
                        <td><span class="text-muted">—</span></td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i> Assisted Feeding</td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i> Insertion & Aspiration</td>
                    </tr>
                    <tr>
                        <td class="text-start ps-3 fw-semibold text-dark">Injections (IV / IM) & IV Drips</td>
                        <td><span class="text-muted">—</span></td>
                        <td><span class="text-muted">—</span></td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i> Certified Procedure</td>
                    </tr>
                    <tr>
                        <td class="text-start ps-3 fw-semibold text-dark">Tracheostomy Suction & Ventilator</td>
                        <td><span class="text-muted">—</span></td>
                        <td><span class="text-muted">—</span></td>
                        <td><i class="fa-solid fa-check text-success fs-6"></i> ICU Trained</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
';
?>
