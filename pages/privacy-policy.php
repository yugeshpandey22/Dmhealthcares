<?php
/**
 * DM Healthcare - Privacy Policy
 * Patient Confidentiality & Data Protection Policy
 */

$display_title = "Privacy Policy";
$seo_title = "Privacy Policy & Patient Data Security - DM Healthcare";
$seo_desc = "DM Healthcare Privacy Policy: How we collect, safeguard and respect patient medical data, prescriptions and contact details across Delhi NCR.";
$short_desc = "Patient data confidentiality, HIPAA & Indian IT Act compliance, and medical record privacy standards.";
$category_name = "Legal & Policies";
$full_page_override = true;
$hide_page_banner = true;

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

.legal-hero {
    background: radial-gradient(circle at 90% 10%, rgba(216, 0, 0, 0.08) 0%, transparent 50%),
                radial-gradient(circle at 10% 90%, rgba(37, 99, 235, 0.06) 0%, transparent 40%),
                linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
    border-radius: 24px;
    padding: 40px 30px;
    border: 1px solid #e2e8f0;
    box-shadow: 0 10px 30px rgba(15, 23, 42, 0.03);
    margin-bottom: 35px;
}

.legal-section-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 18px;
    padding: 30px;
    margin-bottom: 24px;
    box-shadow: 0 4px 16px rgba(15, 23, 42, 0.02);
    transition: all 0.25s ease;
}

.legal-section-card:hover {
    border-color: #cbd5e1;
    box-shadow: 0 8px 24px rgba(15, 23, 42, 0.05);
}

.legal-icon-box {
    width: 44px;
    height: 44px;
    border-radius: 12px;
    background: rgba(216, 0, 0, 0.08);
    color: var(--dm-brand-red);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
    flex-shrink: 0;
}

.legal-list li {
    position: relative;
    padding-left: 28px;
    margin-bottom: 12px;
    color: #475569;
    font-size: 0.95rem;
    line-height: 1.6;
}

.legal-list li::before {
    content: "\f058";
    font-family: "Font Awesome 6 Free";
    font-weight: 900;
    position: absolute;
    left: 0;
    top: 2px;
    color: var(--dm-brand-red);
    font-size: 0.9rem;
}

.badge-official {
    background: rgba(216, 0, 0, 0.1);
    color: var(--dm-brand-red);
    font-weight: 700;
    letter-spacing: 0.5px;
    font-size: 0.75rem;
    padding: 6px 14px;
    border-radius: 50px;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    border: 1px solid rgba(216, 0, 0, 0.2);
}
</style>

<div class="container py-4 py-lg-5">
    
    <!-- Hero Header -->
    <div class="legal-hero">
        <div class="row align-items-center g-4">
            <div class="col-lg-8">
                <span class="badge-official mb-3">
                    <i class="fa-solid fa-user-shield"></i> PRIVACY & PATIENT DATA SECURITY
                </span>
                <h1 class="display-6 fw-bold text-dark mb-2">Privacy Policy</h1>
                <p class="text-secondary fs-6 mb-3">
                    At <strong>DM Healthcare</strong>, we prioritize the confidentiality and safety of every patient’s medical history, prescriptions, address details, and personal data.
                </p>
                <div class="d-flex flex-wrap align-items-center gap-3 text-muted small">
                    <span><i class="fa-solid fa-calendar-check text-danger me-1"></i> <strong>Effective Date:</strong> October 2026</span>
                    <span>•</span>
                    <span><i class="fa-solid fa-shield-check text-success me-1"></i> 100% Confidential Medical Records</span>
                </div>
            </div>
            <div class="col-lg-4 text-lg-end">
                <div class="p-3 bg-white rounded-4 border shadow-sm text-center d-inline-block w-100" style="max-width: 280px;">
                    <i class="fa-solid fa-lock text-success fs-1 mb-2"></i>
                    <h6 class="fw-bold text-dark mb-1">Encrypted & Secure</h6>
                    <small class="text-muted d-block">Zero sharing with third-party advertisers</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Sections -->
    <div class="row justify-content-center">
        <div class="col-lg-10">

            <!-- 1. What We Collect -->
            <div class="legal-section-card">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <div class="legal-icon-box">
                        <i class="fa-solid fa-database"></i>
                    </div>
                    <div>
                        <h4 class="fw-bold text-dark mb-0">1. Information We Collect</h4>
                        <small class="text-muted">Necessary details required for clinical care and delivery</small>
                    </div>
                </div>
                <p class="text-secondary" style="font-size: 0.95rem; line-height: 1.7;">
                    To deliver customized home healthcare, verified nurse deployment, and calibrated medical machinery, we collect:
                </p>
                <ul class="list-unstyled legal-list mb-0">
                    <li><strong>Patient Identification:</strong> Name, age, gender, contact number, and residential delivery address in Delhi NCR.</li>
                    <li><strong>Medical & Clinical Data:</strong> Doctor’s prescriptions, diagnostic test reports, current health conditions, required oxygen LPM flow, or specific nursing instructions.</li>
                    <li><strong>Booking & Communication:</strong> Appointment time preferences, phone calls, and WhatsApp chat history with our care desk for quality monitoring.</li>
                </ul>
            </div>

            <!-- 2. How We Use It -->
            <div class="legal-section-card">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <div class="legal-icon-box">
                        <i class="fa-solid fa-notes-medical"></i>
                    </div>
                    <div>
                        <h4 class="fw-bold text-dark mb-0">2. How We Use Your Information</h4>
                        <small class="text-muted">Strictly for medical service delivery and patient safety</small>
                    </div>
                </div>
                <ul class="list-unstyled legal-list mb-0">
                    <li>To dispatch certified nurses, GDA attendants, and technicians directly to your address.</li>
                    <li>To calibrate medical machines (BiPAP/CPAP, Oxygen Concentrators) according to doctor prescriptions.</li>
                    <li>To maintain accurate billing, invoicing, and service renewal notifications.</li>
                    <li>To contact family members during emergencies or routine vital sign check-ins.</li>
                </ul>
            </div>

            <!-- 3. Confidentiality & Non-Disclosure -->
            <div class="legal-section-card">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <div class="legal-icon-box">
                        <i class="fa-solid fa-shield-virus"></i>
                    </div>
                    <div>
                        <h4 class="fw-bold text-dark mb-0">3. Confidentiality & Non-Disclosure</h4>
                        <small class="text-muted">Strict zero-leakage patient privacy</small>
                    </div>
                </div>
                <p class="text-secondary" style="font-size: 0.95rem; line-height: 1.7;">
                    <strong>DM Healthcare does NOT sell, rent, trade, or distribute your personal or medical information to any marketing agencies or third parties.</strong> Medical records are only shared internally with the assigned attending nurse, supervising doctor, or biomedical technician solely on a need-to-know basis.
                </p>
            </div>

            <!-- 4. Contact Us -->
            <div class="legal-section-card">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <div class="legal-icon-box">
                        <i class="fa-solid fa-envelope-open-text"></i>
                    </div>
                    <div>
                        <h4 class="fw-bold text-dark mb-0">4. Privacy Contact & Data Inquiries</h4>
                        <small class="text-muted">Reach our patient data officer</small>
                    </div>
                </div>
                <p class="text-secondary mb-3" style="font-size: 0.95rem;">
                    If you have questions regarding your data or wish to request data updates/deletion after conclusion of services, please contact:
                </p>
                <div class="p-3 bg-light rounded-3 border">
                    <p class="mb-1 text-dark"><strong>DM Healthcare Privacy Desk</strong></p>
                    <p class="mb-1 text-secondary small"><i class="fa-solid fa-phone text-danger me-2"></i> Helpline: +91 93191 49644</p>
                    <p class="mb-0 text-secondary small"><i class="fa-brands fa-whatsapp text-success me-2"></i> WhatsApp: +91 93191 49644</p>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
$custom_content = ob_get_clean();
?>
