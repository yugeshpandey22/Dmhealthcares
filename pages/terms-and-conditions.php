<?php
/**
 * DM Healthcare - Terms and Conditions
 * Official Legal Agreement & Patient Service Terms
 */

$display_title = "Terms & Conditions";
$seo_title = "Terms & Conditions - DM Healthcare Patient Care & Equipment Rental Policy";
$seo_desc = "Official Terms and Conditions for DM Healthcare home nursing, elderly attendant, ICU setups and medical equipment rental services across Delhi NCR.";
$short_desc = "Standard terms, patient care policies, medical equipment rental agreements, and payment terms for DM Healthcare services.";
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

.legal-nav-sticky {
    position: sticky;
    top: 100px;
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 18px;
    padding: 24px;
    box-shadow: 0 4px 20px rgba(15, 23, 42, 0.03);
}

.legal-nav-link {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 10px 14px;
    border-radius: 10px;
    color: #475569;
    text-decoration: none;
    font-size: 0.88rem;
    font-weight: 600;
    transition: all 0.2s ease;
}

.legal-nav-link:hover, .legal-nav-link.active {
    background: rgba(216, 0, 0, 0.08);
    color: var(--dm-brand-red);
    padding-left: 18px;
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

.emergency-notice-box {
    background: #fff5f5;
    border: 1px solid #fed7d7;
    border-left: 5px solid #e53e3e;
    border-radius: 12px;
    padding: 20px;
}
</style>

<div class="container py-4 py-lg-5">
    
    <!-- Hero Header -->
    <div class="legal-hero">
        <div class="row align-items-center g-4">
            <div class="col-lg-8">
                <span class="badge-official mb-3">
                    <i class="fa-solid fa-scale-balanced"></i> OFFICIAL LEGAL AGREEMENT
                </span>
                <h1 class="display-6 fw-bold text-dark mb-2">Terms and Conditions</h1>
                <p class="text-secondary fs-6 mb-3">
                    Please read these terms carefully before booking home healthcare staff or renting medical equipment with <strong>DM Healthcare</strong>. By booking our services, you accept and agree to abide by these terms.
                </p>
                <div class="d-flex flex-wrap align-items-center gap-3 text-muted small">
                    <span><i class="fa-solid fa-calendar-check text-danger me-1"></i> <strong>Last Updated:</strong> October 2026</span>
                    <span>•</span>
                    <span><i class="fa-solid fa-location-dot text-danger me-1"></i> Applicable for Delhi NCR (Faridabad, Noida, Gurugram, Delhi)</span>
                </div>
            </div>
            <div class="col-lg-4 text-lg-end">
                <div class="p-3 bg-white rounded-4 border shadow-sm text-center d-inline-block w-100" style="max-width: 280px;">
                    <i class="fa-solid fa-shield-halved text-danger fs-1 mb-2" style="color: var(--dm-brand-red) !important;"></i>
                    <h6 class="fw-bold text-dark mb-1">Verified & Safe Services</h6>
                    <small class="text-muted d-block">Govt. ID & Police Verified Staff and Sanitized Equipment</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content Layout -->
    <div class="row g-4">
        
        <!-- Left Side: Table of Contents (Sticky Navigation) -->
        <div class="col-lg-4 d-none d-lg-block">
            <div class="legal-nav-sticky">
                <h6 class="fw-bold text-dark mb-3 pb-2 border-bottom">
                    <i class="fa-solid fa-list-ul me-2 text-danger"></i> Quick Navigation
                </h6>
                <nav class="d-flex flex-column gap-1">
                    <a href="#section-1" class="legal-nav-link"><i class="fa-solid fa-circle-info"></i> 1. Introduction & Acceptance</a>
                    <a href="#section-2" class="legal-nav-link"><i class="fa-solid fa-user-nurse"></i> 2. Healthcare Staff Guidelines</a>
                    <a href="#section-3" class="legal-nav-link"><i class="fa-solid fa-truck-medical"></i> 3. Medical Equipment Rental</a>
                    <a href="#section-4" class="legal-nav-link"><i class="fa-solid fa-screwdriver-wrench"></i> 4. Maintenance & Damages</a>
                    <a href="#section-5" class="legal-nav-link"><i class="fa-solid fa-file-invoice"></i> 5. Billing & Payments</a>
                    <a href="#section-6" class="legal-nav-link"><i class="fa-solid fa-arrow-rotate-left"></i> 6. Cancellation & Refunds</a>
                    <a href="#section-7" class="legal-nav-link"><i class="fa-solid fa-triangle-exclamation"></i> 7. Emergency Disclaimer</a>
                    <a href="#section-8" class="legal-nav-link"><i class="fa-solid fa-lock"></i> 8. Privacy & Confidentiality</a>
                    <a href="#section-9" class="legal-nav-link"><i class="fa-solid fa-headset"></i> 9. Contact & Grievances</a>
                </nav>

                <div class="mt-4 p-3 bg-light rounded-3 text-center border">
                    <small class="text-muted d-block mb-2">Need immediate assistance?</small>
                    <a href="tel:+919319149644" class="btn btn-sm btn-danger rounded-pill fw-bold w-100 py-2 shadow-sm" style="background: var(--dm-brand-red); border: none;">
                        <i class="fa-solid fa-phone me-1"></i> Call +91 93191 49644
                    </a>
                </div>
            </div>
        </div>

        <!-- Right Side: Full Legal Sections -->
        <div class="col-lg-8">

            <!-- Section 1 -->
            <div class="legal-section-card" id="section-1">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <div class="legal-icon-box">
                        <i class="fa-solid fa-handshake"></i>
                    </div>
                    <div>
                        <h4 class="fw-bold text-dark mb-0">1. Introduction & Scope of Agreement</h4>
                        <small class="text-muted">Legal binding terms between User and DM Healthcare</small>
                    </div>
                </div>
                <p class="text-secondary" style="font-size: 0.95rem; line-height: 1.7;">
                    Welcome to <strong>DM Healthcare</strong>. These Terms & Conditions govern your access to and use of our in-home nursing services, patient attendant care, critical ICU setup, doctor visits, physiotherapy, and medical equipment rental services across Delhi NCR (including Faridabad, Noida, Greater Noida, Gurugram, and Ghaziabad).
                </p>
                <p class="text-secondary" style="font-size: 0.95rem; line-height: 1.7;">
                    By engaging our services, making a booking through our website, phone, WhatsApp, or making an advance payment, you explicitly agree to be legally bound by these terms and conditions.
                </p>
            </div>

            <!-- Section 2 -->
            <div class="legal-section-card" id="section-2">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <div class="legal-icon-box">
                        <i class="fa-solid fa-user-nurse"></i>
                    </div>
                    <div>
                        <h4 class="fw-bold text-dark mb-0">2. Home Healthcare & Staff Guidelines</h4>
                        <small class="text-muted">Protocols for nursing staff, GDA, and caregivers</small>
                    </div>
                </div>
                <ul class="list-unstyled legal-list mb-3">
                    <li><strong>Duty Shifts:</strong> Staff is deployed for specified shifts (12-Hour Day Shift, 12-Hour Night Shift, or 24-Hour Continuous Live-In Care). 24-hour staff members must be provided basic meals and reasonable rest hours (7-8 hours).</li>
                    <li><strong>Safe & Dignified Environment:</strong> The patient's family must provide a secure, respectful, and hygienic working environment for our healthcare personnel. Any harassment, abuse, or unlawful conduct will lead to immediate service termination.</li>
                    <li><strong>Background Verification:</strong> All DM Healthcare staff members undergo government ID checks, address authentication, and criminal background checks prior to home deployment.</li>
                    <li><strong>Staff Replacement Policy:</strong> If a staff member falls ill, needs emergency leave, or is deemed unsuitable by the family, DM Healthcare will provide a suitable replacement within <strong>24 to 48 working hours</strong>.</li>
                    <li><strong>Non-Solicitation & Direct Hiring Restriction:</strong> Clients are strictly prohibited from directly hiring or privately employing any caregiver, nurse, or attendant introduced by DM Healthcare during service or within 12 months following completion of service.</li>
                </ul>
            </div>

            <!-- Section 3 -->
            <div class="legal-section-card" id="section-3">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <div class="legal-icon-box">
                        <i class="fa-solid fa-truck-medical"></i>
                    </div>
                    <div>
                        <h4 class="fw-bold text-dark mb-0">3. Medical Equipment Rental Policy</h4>
                        <small class="text-muted">Oxygen machines, hospital beds, BiPAP/CPAP & wheelchairs</small>
                    </div>
                </div>
                <ul class="list-unstyled legal-list mb-3">
                    <li><strong>Inspection Upon Handover:</strong> All rented medical devices (Oxygen Concentrators, Motorized ICU Beds, Ventilators, Suction Machines, Wheelchairs) are delivered 100% sanitized, tested, and calibrated. The customer must inspect the equipment during delivery and sign the delivery receipt.</li>
                    <li><strong>Prescription Requirement:</strong> Prescription-grade respiratory devices (BiPAP, CPAP, Oxygen Cylinders, Home Ventilators) are provided in strict accordance with the registered medical practitioner's prescription.</li>
                    <li><strong>Refundable Security Deposit:</strong> Certain high-value machinery may require a refundable security deposit, which is refunded back via bank transfer upon successful inspection and return of the equipment in good working condition.</li>
                    <li><strong>Rental Term & Renewal:</strong> Rental packages are generally calculated on a 15-day or monthly cycle. If you wish to extend the rental tenure, notice must be given at least <strong>3 days prior</strong> to the expiry of the current cycle.</li>
                </ul>
            </div>

            <!-- Section 4 -->
            <div class="legal-section-card" id="section-4">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <div class="legal-icon-box">
                        <i class="fa-solid fa-screwdriver-wrench"></i>
                    </div>
                    <div>
                        <h4 class="fw-bold text-dark mb-0">4. Maintenance, Breakdown & Damage Liability</h4>
                        <small class="text-muted">Service support and equipment care obligations</small>
                    </div>
                </div>
                <ul class="list-unstyled legal-list mb-3">
                    <li><strong>Free Breakdown Support:</strong> In case of technical or functional faults arising from normal wear-and-tear, our biomedical engineering team will repair or replace the machine at zero additional service cost.</li>
                    <li><strong>Customer Responsibility for Mishandling:</strong> Damages resulting from physical dropping, electrical voltage surge without stabilizer, water spills, unauthorized tampering, or improper usage will be charged to the customer at actual replacement/repair costs.</li>
                    <li><strong>Disinfection & Sanitization:</strong> Customers are advised to maintain hygienic surrounding conditions around the equipment to prevent infection transmission.</li>
                </ul>
            </div>

            <!-- Section 5 -->
            <div class="legal-section-card" id="section-5">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <div class="legal-icon-box">
                        <i class="fa-solid fa-file-invoice-dollar"></i>
                    </div>
                    <div>
                        <h4 class="fw-bold text-dark mb-0">5. Billing, Tariffs & Payment Terms</h4>
                        <small class="text-muted">Advance payments, modes of payment & tax compliance</small>
                    </div>
                </div>
                <ul class="list-unstyled legal-list mb-3">
                    <li><strong>Advance Payment Schedule:</strong> In-home care services and equipment rentals are billed in advance (weekly, bi-weekly, or monthly depending on the agreed agreement).</li>
                    <li><strong>Approved Payment Modes:</strong> All payments must be made directly to the official DM Healthcare business account via UPI, Net Banking, Debit/Credit Card, or official company receipts. Do not pay cash directly to field staff without an official receipt.</li>
                    <li><strong>Delayed Payment Terms:</strong> DM Healthcare reserves the right to suspend staff deployment or recall rented equipment if outstanding invoices remain unpaid past the due date.</li>
                </ul>
            </div>

            <!-- Section 6 -->
            <div class="legal-section-card" id="section-6">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <div class="legal-icon-box">
                        <i class="fa-solid fa-arrow-rotate-left"></i>
                    </div>
                    <div>
                        <h4 class="fw-bold text-dark mb-0">6. Cancellation, Returns & Refund Policy</h4>
                        <small class="text-muted">Transparent cancellation terms and refund processing</small>
                    </div>
                </div>
                <ul class="list-unstyled legal-list mb-3">
                    <li><strong>Pre-Dispatch Cancellation:</strong> If a booking is cancelled prior to equipment dispatch or staff departure, 100% of the advance amount will be refunded.</li>
                    <li><strong>Early Termination of Home Care:</strong> If the patient is admitted to a hospital or service is concluded earlier than the booked tenure, billing will be calculated for the actual days served, and the balance unused amount will be adjusted or refunded within 5–7 business days.</li>
                    <li><strong>Delivery & Sanitization Charges:</strong> Initial delivery, installation, and consumable accessory charges (such as nasal cannula, masks, tubing) are non-refundable once delivered and unsealed.</li>
                </ul>
            </div>

            <!-- Section 7 (Medical Emergency Box) -->
            <div class="legal-section-card" id="section-7">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <div class="legal-icon-box">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                    </div>
                    <div>
                        <h4 class="fw-bold text-dark mb-0">7. Medical Emergency Disclaimer</h4>
                        <small class="text-muted">Crucial healthcare and clinical limitation boundaries</small>
                    </div>
                </div>

                <div class="emergency-notice-box mb-3">
                    <h6 class="fw-bold text-danger mb-2">
                        <i class="fa-solid fa-circle-exclamation me-1"></i> CRITICAL MEDICAL ADVISORY
                    </h6>
                    <p class="small text-dark mb-0" style="line-height: 1.6;">
                        <strong>DM Healthcare</strong> provides supportive home care, nursing monitoring, and rehabilitation assistance. Our services and staff <strong>do NOT substitute full hospital emergency intensive care units (ICU)</strong>. In the event of acute clinical deterioration, severe respiratory distress, cardiac arrest, or life-threatening emergencies, family members must immediately contact government emergency services (<strong>112 / 102</strong>) or rush the patient to the nearest multi-speciality hospital emergency room.
                    </p>
                </div>

                <p class="text-secondary small mb-0" style="line-height: 1.6;">
                    DM Healthcare, its founders, physicians, and affiliated caregivers shall not be held liable for clinical disease progression, sudden natural deterioration, or outcomes arising from pre-existing comorbidities beyond standard home nursing protocols.
                </p>
            </div>

            <!-- Section 8 -->
            <div class="legal-section-card" id="section-8">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <div class="legal-icon-box">
                        <i class="fa-solid fa-lock"></i>
                    </div>
                    <div>
                        <h4 class="fw-bold text-dark mb-0">8. Patient Data Privacy & Confidentiality</h4>
                        <small class="text-muted">Strict adherence to medical data privacy</small>
                    </div>
                </div>
                <p class="text-secondary" style="font-size: 0.95rem; line-height: 1.7;">
                    We are deeply committed to protecting patient privacy. All diagnostic records, doctor prescriptions, patient addresses, and personal contact information collected during booking are stored securely and used solely for healthcare coordination. We never sell, rent, or trade patient data to third parties.
                </p>
            </div>

            <!-- Section 9 -->
            <div class="legal-section-card" id="section-9">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <div class="legal-icon-box">
                        <i class="fa-solid fa-headset"></i>
                    </div>
                    <div>
                        <h4 class="fw-bold text-dark mb-0">9. Grievance Redressal & Contact Info</h4>
                        <small class="text-muted">Reach our care desk for assistance</small>
                    </div>
                </div>
                <p class="text-secondary mb-3" style="font-size: 0.95rem;">
                    For any questions, clarifications, dispute resolution, or service feedback regarding these Terms & Conditions, please contact our support team:
                </p>
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="p-3 bg-light rounded-3 border">
                            <h6 class="fw-bold text-dark mb-1"><i class="fa-solid fa-phone text-danger me-2"></i> 24/7 Helpline</h6>
                            <a href="tel:+919319149644" class="text-dark fw-bold text-decoration-none fs-6">+91 93191 49644</a>
                            <small class="text-muted d-block mt-1">Available 24 hours daily</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 bg-light rounded-3 border">
                            <h6 class="fw-bold text-dark mb-1"><i class="fa-brands fa-whatsapp text-success me-2"></i> WhatsApp Support</h6>
                            <a href="https://wa.me/919319149644" target="_blank" class="text-success fw-bold text-decoration-none fs-6">+91 93191 49644</a>
                            <small class="text-muted d-block mt-1">Instant chat response</small>
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
