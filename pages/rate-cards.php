<?php
/**
 * DM Healthcare - Official Service Tariff & Rate Cards
 * Ultra-Professional Medical Marketplace & Transparent Price List
 */

$display_title = "Home Healthcare Services Rate Cards & Tariff";
$seo_title = "Home Healthcare & Nursing Service Charges 2026 | DM Healthcare Rate Cards";
$seo_desc = "Official DM Healthcare rate cards and transparent price list for home nursing, ICU packages, caregivers, doctor visits, physiotherapy, and clinical procedures across Delhi NCR.";
$short_desc = "Transparent, hospital-standard home healthcare services tariff with verified staff, doctor supervision, and 24/7 emergency support across Delhi NCR.";
$category_name = "Home Care";
$hide_default_welcome = true;

$services_catalog = [
    "nursing" => [
        "title" => "Nursing Care & Shift Duties",
        "tab_label" => "Nursing Care",
        "icon" => "fa-solid fa-user-nurse",
        "color" => "#e5252a",
        "subtitle" => "Certified GNM & B.Sc nurses for hospital-level clinical care, medication and vital monitoring.",
        "items" => [
            ["name" => "Basic Nursing-12 hrs-B", "price" => "₹1,500", "unit" => "/ day (12 hrs)", "tag" => "12-Hr Shift", "desc" => "Bedside nursing care, oral medication management, hygiene and vital signs charting.", "popular" => false],
            ["name" => "Basic Nursing-12 hrs-A", "price" => "₹1,800", "unit" => "/ day (12 hrs)", "tag" => "12-Hr Shift", "desc" => "Experienced nurse for catheter care, medication charting, and surgical wound monitoring.", "popular" => false],
            ["name" => "Basic Nursing-12 hrs-C", "price" => "₹2,000", "unit" => "/ day (12 hrs)", "tag" => "12-Hr Shift", "desc" => "Senior bedside nurse for complex clinical needs, Ryle's tube feeding, and insulin protocol.", "popular" => false],
            ["name" => "Basic Nursing -24 hrs", "price" => "₹2,200", "unit" => "/ day (24 hrs)", "tag" => "24-Hr Live-in", "desc" => "24-hour residential basic nurse for continuous day & night monitoring and medication.", "popular" => true],
            ["name" => "Advanced Nursing -24 hrs", "price" => "₹2,500 - ₹2,800", "unit" => "/ day (24 hrs)", "tag" => "24-Hr High Care", "desc" => "High-dependency residential nursing care, IV infusion management & post-surgical care.", "popular" => true],
            ["name" => "Critical Nursing -24 hrs -B", "price" => "₹3,000 - ₹3,200", "unit" => "/ day (24 hrs)", "tag" => "ICU Critical Care", "desc" => "ICU-experienced B.Sc/GNM nurse for ventilator, BiPAP, tracheostomy suctioning & arterial line.", "popular" => true],
            ["name" => "Semi Nurse CAT I", "price" => "₹1,350", "unit" => "/ day (12 hrs)", "tag" => "Semi-Nursing", "desc" => "Trained clinical aide for vitals monitoring, nebulization, sponge bath and feeding.", "popular" => false],
            ["name" => "Semi Nurse CAT -II", "price" => "₹1,550", "unit" => "/ day (12 hrs)", "tag" => "Semi-Nursing", "desc" => "Semi-nursing assistant with advanced bedside skills, transfer aid and catheter bag hygiene.", "popular" => false],
            ["name" => "Semi Nurse CAT —III", "price" => "₹1,700", "unit" => "/ day (12 hrs)", "tag" => "Semi-Nursing", "desc" => "Senior clinical attendant for tracheostomy stoma cleaning and continuous patient surveillance.", "popular" => false],
            ["name" => "Advanced 24 hrs Semi Nurse", "price" => "₹2,000", "unit" => "/ day (24 hrs)", "tag" => "24-Hr Semi Nurse", "desc" => "Round-the-clock semi-nursing companion for high-dependency patients.", "popular" => false],
            ["name" => "Nursing Supervisor Visit", "price" => "₹1,000", "unit" => "/ audit visit", "tag" => "Clinical Audit", "desc" => "Senior nursing officer clinical audit, nursing care plan review and protocol compliance.", "popular" => false],
            ["name" => "Nursing Supervisor Visit-Delhi", "price" => "₹1,500", "unit" => "/ audit visit", "tag" => "Delhi NCR Audit", "desc" => "Comprehensive supervisory clinical inspection and protocol compliance audit for Delhi.", "popular" => false]
        ]
    ],
    "icu" => [
        "title" => "ICU & Critical Care Packages",
        "tab_label" => "ICU Packages",
        "icon" => "fa-solid fa-heart-pulse",
        "color" => "#d946ef",
        "subtitle" => "Hospital ICU replicated at home with ventilators, multipara monitors, and dedicated critical staff.",
        "items" => [
            ["name" => "Basic ICU package", "price" => "₹8,500", "unit" => "/ day", "tag" => "ICU at Home", "desc" => "Hospital bed, 5-para monitor, suction machine, oxygen setup, and dedicated 24h nurse.", "popular" => false],
            ["name" => "Support at Home", "price" => "₹9,500", "unit" => "/ day", "tag" => "High Dependency", "desc" => "Complete home critical support bundle with medical equipment and continuous nursing care.", "popular" => false],
            ["name" => "Critical care Package", "price" => "₹10,500", "unit" => "/ day", "tag" => "Full Critical Setup", "desc" => "Advanced ICU setup with invasive/non-invasive equipment, clinical monitoring & doctor supervision.", "popular" => true],
            ["name" => "Critical care Package- With NIV", "price" => "₹12,000", "unit" => "/ day", "tag" => "NIV Ventilator", "desc" => "Complete ICU setup including Non-Invasive Ventilator (BiPAP/CPAP) and specialist nurse.", "popular" => true],
            ["name" => "EOLC Package", "price" => "₹15,000", "unit" => "/ day", "tag" => "Palliative Care", "desc" => "End of Life Care (EOLC) comprehensive palliative package ensuring dignity, pain relief and comfort.", "popular" => false]
        ]
    ],
    "caregiver" => [
        "title" => "Caregiver, Japa Maid & Baby Care",
        "tab_label" => "Caregivers & Japa",
        "icon" => "fa-solid fa-person-cane",
        "color" => "#059669",
        "subtitle" => "Compassionate patient attendants, newborn Japa maids and child caretakers for day & night care.",
        "items" => [
            ["name" => "Basic Caregiver -12 hrs", "price" => "₹850", "unit" => "/ day (12 hrs)", "tag" => "12-Hr Attendant", "desc" => "Assistance with personal hygiene, bathing, walking, feeding and timely medication reminders.", "popular" => false],
            ["name" => "Basic Caregiver -24 hrs", "price" => "₹1,200", "unit" => "/ day (24 hrs)", "tag" => "24-Hr Live-in", "desc" => "24x7 residential attendant for continuous bedside aid, bed turning and family relief.", "popular" => true],
            ["name" => "Japa-12 hrs", "price" => "₹1,000", "unit" => "/ day (12 hrs)", "tag" => "Mother & Baby", "desc" => "Specialized newborn massage, mother postpartum recovery care, baby bath and feeding support.", "popular" => false],
            ["name" => "Japa-24 hrs", "price" => "₹1,500", "unit" => "/ day (24 hrs)", "tag" => "24-Hr Japa Maid", "desc" => "Round-the-clock traditional Japa maid for newborn care, midnight soothing and mother nutrition.", "popular" => true],
            ["name" => "Baby Care Taker -12 hrs", "price" => "₹900", "unit" => "/ day (12 hrs)", "tag" => "Day Nanny", "desc" => "Trained nanny for infant hygiene, playful engagement, diaper changes and feeding.", "popular" => false],
            ["name" => "Baby Care Taker -24 hrs", "price" => "₹1,200", "unit" => "/ day (24 hrs)", "tag" => "24-Hr Nanny", "desc" => "Full-time residential infant caretaker ensuring safe sleep, sterile bottle washing and baby safety.", "popular" => true]
        ]
    ],
    "doctor" => [
        "title" => "Doctor & Specialist Home Visits",
        "tab_label" => "Doctor Visits",
        "icon" => "fa-solid fa-user-doctor",
        "color" => "#0284c7",
        "subtitle" => "Qualified General Physicians and Critical Care Intensivists visiting your home.",
        "items" => [
            ["name" => "Doctor Visit-GP", "price" => "₹2,500", "unit" => "/ home visit", "tag" => "General Physician", "desc" => "Comprehensive physical checkup, vitals diagnosis, prescription and treatment plan at home.", "popular" => true],
            ["name" => "Doctor Visit-Critical care", "price" => "₹3,000", "unit" => "/ specialist visit", "tag" => "Critical Care MD", "desc" => "Specialist critical care physician review for ICU-at-home, ventilator and tracheostomy patients.", "popular" => false],
            ["name" => "ICU doctor Visit", "price" => "₹5,000", "unit" => "/ intensivist visit", "tag" => "Senior Intensivist", "desc" => "Senior ICU intensivist consultation, arterial blood gas review and emergency stabilization.", "popular" => false]
        ]
    ],
    "physio" => [
        "title" => "Physiotherapy & Speech-Language Therapy",
        "tab_label" => "Physio & Speech",
        "icon" => "fa-solid fa-person-walking",
        "color" => "#ea580c",
        "subtitle" => "Doorstep orthopedic rehabilitation, stroke hemiplegia gait training, chest physio, dysarthria and dysphagia swallow recovery.",
        "items" => [
            ["name" => "Physiotherapy-Basic", "price" => "₹700", "unit" => "/ session (45m)", "tag" => "Basic Physio", "desc" => "Joint mobility, muscle activation, passive stretching and basic post-fracture rehab.", "popular" => false],
            ["name" => "Physiotherapy-Advanced", "price" => "₹800", "unit" => "/ session (60m)", "tag" => "Advanced Rehab", "desc" => "Targeted post-orthopedic, stroke hemiplegia gait training, and muscle re-education.", "popular" => true],
            ["name" => "Physiotherapy-Critical", "price" => "₹1,000", "unit" => "/ session (60m)", "tag" => "Chest & ICU Physio", "desc" => "Chest physiotherapy, secretion clearance, postural drainage, and ICU mobility therapy.", "popular" => false],
            ["name" => "Physiotherapy-Critical -Delhi NCR", "price" => "₹1,500", "unit" => "/ session (60m)", "tag" => "NCR Coverage", "desc" => "Specialized critical neuro-rehabilitation and chest clearance session across Delhi NCR.", "popular" => false],
            ["name" => "Speech and Swallow Therapy", "price" => "₹1,500", "unit" => "/ session (45m)", "tag" => "Dysphagia Rehab", "desc" => "Targeted therapy for swallowing disorders, dysarthria and vocal cord strengthening post-stroke.", "popular" => false],
            ["name" => "Advanced Speech and Swallow Therapy", "price" => "₹2,000", "unit" => "/ session (60m)", "tag" => "Neuro Swallow Rehab", "desc" => "Neurological swallow coordination, electrical stimulation support and aphasia recovery.", "popular" => false],
            ["name" => "Speech and Swallow Therapy Delhi NCR", "price" => "₹2,500", "unit" => "/ session (60m)", "tag" => "NCR Specialist Visit", "desc" => "Senior speech pathologist doorstep assessment and comprehensive rehabilitation across extended Delhi NCR.", "popular" => true]
        ]
    ],
    "dietician" => [
        "title" => "Clinical Dietician Consultations",
        "tab_label" => "Dietician",
        "icon" => "fa-solid fa-apple-whole",
        "color" => "#10b981",
        "subtitle" => "Custom clinical nutrition for diabetes, hypertension, cardiac health, and tube feeding.",
        "items" => [
            ["name" => "Tele- Dietician Consult", "price" => "₹1,000", "unit" => "/ phone consult", "tag" => "Online / Phone", "desc" => "Nutritional review, caloric calculation and personalized diet chart via phone/video.", "popular" => false],
            ["name" => "Dietician Visit", "price" => "₹1,500", "unit" => "/ home visit", "tag" => "Doorstep Visit", "desc" => "Clinical dietician doorstep visit for diabetic, renal, cardiac or enteral tube feeding formulation.", "popular" => true],
            ["name" => "Dietician Visit -Delhi NCR", "price" => "₹2,500", "unit" => "/ home visit", "tag" => "Delhi NCR Reach", "desc" => "Specialist clinical nutritionist home visit and customized therapeutic menu design.", "popular" => false]
        ]
    ],
    "procedures" => [
        "title" => "Doorstep Clinical Procedures & Dressings",
        "tab_label" => "Clinical Procedures",
        "icon" => "fa-solid fa-syringe",
        "color" => "#6366f1",
        "subtitle" => "Sterile single-visit nursing interventions for injections, IV infusions, catheters and wound dressings.",
        "items" => [
            ["name" => "Short infusion -30 Mins", "price" => "₹500", "unit" => "/ procedure", "tag" => "30 Mins Drip", "desc" => "Rapid IV antibiotic, paracetamol, or electrolyte piggyback infusion.", "popular" => false],
            ["name" => "Short infusion -45 Mins", "price" => "₹800", "unit" => "/ procedure", "tag" => "45 Mins Drip", "desc" => "Controlled drip infusion, cannula check, and vital signs monitoring.", "popular" => false],
            ["name" => "Short infusion -60 Mins", "price" => "₹1,000", "unit" => "/ procedure", "tag" => "60 Mins Drip", "desc" => "Complete 1-hour IV infusion under continuous clinical nurse supervision.", "popular" => true],
            ["name" => "Long Infusion -90 mins", "price" => "₹1,200", "unit" => "/ procedure", "tag" => "90 Mins Infusion", "desc" => "Extended therapeutic infusion with flow rate regulation and safety monitoring.", "popular" => false],
            ["name" => "Long Infusion -120 mins", "price" => "₹1,500", "unit" => "/ procedure", "tag" => "120 Mins Infusion", "desc" => "2-hour complex IV administration (iron infusions, biologicals, or chemotherapy support).", "popular" => false],
            ["name" => "IM Visit", "price" => "₹300", "unit" => "/ injection visit", "tag" => "Doorstep Injection", "desc" => "Intramuscular or subcutaneous injection administration by certified nurse.", "popular" => true],
            ["name" => "vaccination @ Home", "price" => "₹500", "unit" => "/ doorstep dose", "tag" => "Vaccine Administration", "desc" => "Doorstep vaccine administration following cold-chain maintenance protocol.", "popular" => false],
            ["name" => "Basic Dressing", "price" => "₹500", "unit" => "/ wound change", "tag" => "Minor Wound", "desc" => "Sterile cleaning, antiseptic swab, and light protective bandage.", "popular" => false],
            ["name" => "Surgical Dressing", "price" => "₹800", "unit" => "/ wound change", "tag" => "Post-Surgical", "desc" => "Aseptic surgical stitch dressing change, drainage check, and sterile packing.", "popular" => true],
            ["name" => "Advanced Surgical Dressing", "price" => "₹1,200", "unit" => "/ wound change", "tag" => "Ulcer / Bedsores", "desc" => "Grade 2-4 bedsore debridement, diabetic foot ulcer dressing with specialized hydrogel/foam.", "popular" => false]
        ]
    ],
    "diagnostics" => [
        "title" => "Diagnostics, Portable X-Ray & Pharmacy",
        "tab_label" => "Diagnostics & X-Ray",
        "icon" => "fa-solid fa-x-ray",
        "color" => "#14b8a6",
        "subtitle" => "Bedside digital imaging, NABL blood tests and doorstep medicine delivery.",
        "items" => [
            ["name" => "Portable x-Ray @Home", "price" => "₹3,000", "unit" => "/ digital scan", "tag" => "Bedside X-Ray", "desc" => "High-resolution digital digital X-Ray at bedside with instant radiologist reporting.", "popular" => true],
            ["name" => "Portable x-Ray @Home-Delhi NCR", "price" => "₹5,000", "unit" => "/ digital scan", "tag" => "Delhi NCR Reach", "desc" => "Express portable digital X-Ray service across extended Delhi NCR.", "popular" => false],
            ["name" => "Labs", "price" => "On Actuals", "unit" => "/ test MRP", "tag" => "NABL Certified", "desc" => "Doorstep blood & urine sample collection with certified online reporting.", "popular" => false],
            ["name" => "Pharmacy", "price" => "On Actuals", "unit" => "/ medicine MRP", "tag" => "Genuine Medicines", "desc" => "Doctor-prescribed medicines, IV fluids and consumables delivered to your door.", "popular" => false],
            ["name" => "Pharmacy Discount", "price" => "15% OFF", "unit" => "Special Privilege", "tag" => "Patient Benefit", "desc" => "Flat 15% discount on prescribed medicines for DM Healthcare home care patients.", "popular" => true]
        ]
    ]
];

$frontend_custom_sections = '
<style>
:root {
    --dm-brand-red: #e5252a;
    --dm-brand-red-dark: #c8102e;
    --dm-navy: #0f172a;
    --dm-slate: #1e293b;
    --dm-border-color: #e2e8f0;
    --dm-light-bg: #f8fafc;
}

/* Professional Medical Hero Wrapper */
.rate-hero-clean {
    background: radial-gradient(circle at 95% 10%, rgba(229, 37, 42, 0.08) 0%, transparent 45%),
                radial-gradient(circle at 5% 90%, rgba(2, 132, 199, 0.06) 0%, transparent 40%),
                linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
    border: 1px solid #e2e8f0;
    border-radius: 28px;
    padding: 44px 36px;
    margin-bottom: 35px;
    box-shadow: 0 10px 30px rgba(15, 23, 42, 0.04);
    position: relative;
    overflow: hidden;
}

.trust-badge-capsule {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 50px;
    padding: 6px 14px;
    font-size: 0.78rem;
    font-weight: 700;
    color: #334155;
    display: inline-flex;
    align-items: center;
    gap: 7px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.02);
}

/* Quick Inquiry Desk Card */
.inquiry-desk-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-top: 4px solid var(--dm-brand-red);
    border-radius: 22px;
    padding: 26px;
    box-shadow: 0 14px 32px rgba(15, 23, 42, 0.06);
    position: relative;
}

.pulse-live-dot {
    width: 8px;
    height: 8px;
    background-color: #10b981;
    border-radius: 50%;
    display: inline-block;
    box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.7);
    animation: live-pulse 1.8s infinite;
}
@keyframes live-pulse {
    0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.7); }
    70% { transform: scale(1); box-shadow: 0 0 0 8px rgba(16, 185, 129, 0); }
    100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(16, 185, 129, 0); }
}

/* Quick Stats Bar */
.tariff-stat-card {
    background: #ffffff;
    border: 1px solid var(--dm-border-color);
    border-radius: 18px;
    padding: 16px 18px;
    box-shadow: 0 3px 10px rgba(15, 23, 42, 0.02);
    transition: all 0.25s ease;
}
.tariff-stat-card:hover {
    transform: translateY(-3px);
    border-color: var(--dm-brand-red);
    box-shadow: 0 10px 20px rgba(229, 37, 42, 0.07);
}

/* Sticky Search & Category Navigation Toolbar */
.tariff-sticky-toolbar {
    background: #ffffff;
    border: 1px solid var(--dm-border-color);
    border-radius: 22px;
    padding: 20px;
    box-shadow: 0 8px 24px rgba(15, 23, 42, 0.04);
    margin-bottom: 35px;
}

.search-input-box {
    position: relative;
    width: 100%;
}
.search-input-box i {
    position: absolute;
    left: 18px;
    top: 50%;
    transform: translateY(-50%);
    color: #94a3b8;
    font-size: 1.05rem;
}
.search-input-box input {
    width: 100%;
    padding: 12px 18px 12px 46px;
    border-radius: 50px;
    border: 1px solid #cbd5e1;
    font-size: 0.92rem;
    font-weight: 500;
    transition: all 0.2s ease;
    background: #f8fafc;
}
.search-input-box input:focus {
    background: #ffffff;
    border-color: var(--dm-brand-red);
    box-shadow: 0 0 0 4px rgba(229, 37, 42, 0.12);
    outline: none;
}

/* Category Filter Tabs with Pill Badges */
.tariff-tabs-scroll-wrap {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    align-items: center;
}

.tab-filter-btn {
    border: 1px solid #cbd5e1;
    background: #ffffff;
    color: #475569;
    border-radius: 50px;
    padding: 7px 16px;
    font-weight: 700;
    font-size: 0.83rem;
    transition: all 0.2s ease;
    cursor: pointer;
    white-space: nowrap;
    display: inline-flex;
    align-items: center;
    gap: 7px;
}
.tab-filter-btn:hover {
    background: #f8fafc;
    color: #0f172a;
    border-color: #94a3b8;
    transform: translateY(-1px);
}
.tab-filter-btn.active {
    background: var(--dm-brand-red) !important;
    color: #ffffff !important;
    border-color: var(--dm-brand-red) !important;
    box-shadow: 0 4px 12px rgba(229, 37, 42, 0.25);
}

.tab-badge-num {
    background: rgba(15, 23, 42, 0.08);
    color: #475569;
    font-size: 0.72rem;
    font-weight: 800;
    padding: 2px 7px;
    border-radius: 20px;
    transition: all 0.2s ease;
}
.tab-filter-btn.active .tab-badge-num {
    background: rgba(255, 255, 255, 0.28) !important;
    color: #ffffff !important;
}

/* Service Item Cards */
.rate-item-card {
    background: #ffffff;
    border: 1px solid var(--dm-border-color);
    border-radius: 18px;
    padding: 22px;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    transition: all 0.28s ease;
    position: relative;
    overflow: hidden;
}
.rate-item-card:hover {
    transform: translateY(-5px);
    border-color: var(--dm-brand-red);
    box-shadow: 0 14px 30px rgba(15, 23, 42, 0.08);
}
.rate-item-card.is-popular {
    border-color: rgba(229, 37, 42, 0.35);
    background: #ffffff;
}
.popular-flag {
    position: absolute;
    top: 0;
    right: 0;
    background: var(--dm-brand-red);
    color: #ffffff;
    font-size: 0.65rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    padding: 3px 12px;
    border-bottom-left-radius: 10px;
}

.price-main {
    font-size: 1.45rem;
    font-weight: 900;
    color: var(--dm-brand-red);
    line-height: 1;
}
.price-unit {
    font-size: 0.76rem;
    color: #64748b;
    font-weight: 600;
}

.service-badge-pill {
    font-size: 0.72rem;
    font-weight: 700;
    padding: 3px 10px;
    border-radius: 20px;
    background: #f1f5f9;
    color: #334155;
    display: inline-block;
}
</style>

<div class="container py-3">
    <!-- 1. REDESIGNED PROFESSIONAL HERO SECTION -->
    <div class="rate-hero-clean">
        <div class="row align-items-center g-4">
            <div class="col-lg-7 pe-lg-4">
                <!-- Trust Pillars Pills -->
                <div class="d-flex flex-wrap gap-2 mb-3">
                    <span class="trust-badge-capsule">
                        <i class="fa-solid fa-user-doctor text-primary"></i> Doctor-Supervised Care
                    </span>
                    <span class="trust-badge-capsule">
                        <i class="fa-solid fa-shield-halved text-success"></i> 100% Police Verified Staff
                    </span>
                    <span class="trust-badge-capsule">
                        <i class="fa-solid fa-rotate text-danger"></i> Free Replacement Guarantee
                    </span>
                </div>

                <h1 class="display-5 fw-bold text-dark mb-3" style="letter-spacing: -0.6px;">
                    Home Healthcare <span style="color: var(--dm-brand-red);">Rate Cards & Tariff</span>
                </h1>
                
                <p class="text-muted lead fs-6 mb-4" style="line-height: 1.75; font-size: 1rem;">
                    Transparent, doctor-supervised, and standardized tariff for 12-hour & 24-hour Bedside Nursing, Caregiver Attendants, ICU-at-Home Packages, Home Physician Visits, Physiotherapy, and Doorstep Clinical Procedures across Delhi NCR.
                </p>

                <div class="d-flex flex-wrap gap-3">
                    <a href="tel:+919319149644" class="btn btn-danger btn-lg rounded-pill px-4 fw-bold shadow-sm d-inline-flex align-items-center gap-2" style="background-color: var(--dm-brand-red); border-color: var(--dm-brand-red);">
                        <i class="fa-solid fa-phone"></i> Call Care Desk: +91 93191 49644
                    </a>
                    <a href="https://wa.me/919319149644?text='.urlencode("Hello DM Healthcare, I would like to inquire about your Home Healthcare Services Rate Cards.").'" target="_blank" class="btn btn-success btn-lg rounded-pill px-4 fw-bold shadow-sm d-inline-flex align-items-center gap-2">
                        <i class="fa-brands fa-whatsapp fs-5"></i> Instant WhatsApp Quote
                    </a>
                </div>
            </div>

            <!-- Right Column: Quick Tariff & Deployment Desk -->
            <div class="col-lg-5">
                <div class="inquiry-desk-card">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center gap-2">
                            <span class="pulse-live-dot"></span>
                            <span class="text-dark small fw-bold text-uppercase" style="letter-spacing: 0.5px;">Live 2026 Tariff</span>
                        </div>
                        <span class="badge bg-danger bg-opacity-10 text-danger rounded-pill px-3 py-1 small fw-bold">Instant Dispatch</span>
                    </div>

                    <h5 class="fw-bold text-dark mb-1">Instant Care Deployment Desk</h5>
                    <p class="text-muted small mb-3">Certified medical staff reachable within 30-60 mins across Faridabad, Noida, Delhi & Gurugram.</p>

                    <div class="p-3 bg-light rounded-3 border mb-3">
                        <div class="row g-2 small">
                            <div class="col-6 d-flex align-items-center">
                                <i class="fa-solid fa-circle-check text-success me-2"></i>
                                <span class="text-secondary fw-semibold">Zero hidden charges</span>
                            </div>
                            <div class="col-6 d-flex align-items-center">
                                <i class="fa-solid fa-circle-check text-success me-2"></i>
                                <span class="text-secondary fw-semibold">Free leave backup</span>
                            </div>
                            <div class="col-6 d-flex align-items-center">
                                <i class="fa-solid fa-circle-check text-success me-2"></i>
                                <span class="text-secondary fw-semibold">Daily/Monthly plans</span>
                            </div>
                            <div class="col-6 d-flex align-items-center">
                                <i class="fa-solid fa-circle-check text-success me-2"></i>
                                <span class="text-secondary fw-semibold">GST invoice support</span>
                            </div>
                        </div>
                    </div>

                    <a href="https://wa.me/919319149644?text='.urlencode("Hello DM Healthcare, I need immediate care staff deployment at my home.").'" target="_blank" class="btn btn-outline-danger w-100 rounded-pill fw-bold py-2 small d-flex align-items-center justify-content-center gap-2">
                        <i class="fa-brands fa-whatsapp fs-6"></i> Request Immediate Staff Deployment
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- 2. QUICK STATS METRICS RIBBON -->
    <div class="row g-3 mb-4">
        <div class="col-6 col-md-3">
            <div class="tariff-stat-card text-center">
                <h4 class="fw-bold text-dark mb-0">51+</h4>
                <span class="small text-muted fw-semibold" style="font-size: 0.78rem;">Standardized Services</span>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="tariff-stat-card text-center">
                <h4 class="fw-bold text-success mb-0">10,000+</h4>
                <span class="small text-muted fw-semibold" style="font-size: 0.78rem;">Happy Families in NCR</span>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="tariff-stat-card text-center">
                <h4 class="fw-bold text-danger mb-0">30–60 Min</h4>
                <span class="small text-muted fw-semibold" style="font-size: 0.78rem;">Rapid Response Reach</span>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="tariff-stat-card text-center">
                <h4 class="fw-bold text-primary mb-0">4.9 ★</h4>
                <span class="small text-muted fw-semibold" style="font-size: 0.78rem;">Doctor-Rated Care</span>
            </div>
        </div>
    </div>

    <!-- 3. SEARCH & CATEGORY FILTER TOOLBAR -->
    <div class="tariff-sticky-toolbar">
        <div class="row align-items-center g-3 mb-3">
            <div class="col-lg-8">
                <div class="search-input-box">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" id="liveTariffSearch" placeholder="Search service, procedure or rate (e.g. Basic Nursing, Japa, Doctor Visit, X-Ray, Dressing)..." onkeyup="handleLiveTariffSearch()">
                </div>
            </div>
            <div class="col-lg-4 text-lg-end">
                <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 rounded-pill px-3 py-2 fw-bold" id="totalServicesBadge">51 Services Listed</span>
            </div>
        </div>

        <div class="tariff-tabs-scroll-wrap pt-2 border-top" id="categoryTabsContainer">
            <button class="tab-filter-btn active" onclick="switchTariffCategory(\'all\', this)">
                <i class="fa-solid fa-layer-group"></i>
                <span>All Services</span>
                <span class="tab-badge-num">51</span>
            </button>';

foreach($services_catalog as $cat_key => $cat_data) {
    $tab_txt = htmlspecialchars($cat_data['tab_label'] ?? $cat_data['title']);
    $cnt = count($cat_data['items']);
    $frontend_custom_sections .= '
            <button class="tab-filter-btn" onclick="switchTariffCategory(\''.$cat_key.'\', this)">
                <i class="'.$cat_data['icon'].'"></i>
                <span>'.$tab_txt.'</span>
                <span class="tab-badge-num">'.$cnt.'</span>
            </button>';
}

$frontend_custom_sections .= '
        </div>
    </div>

    <!-- 4. SERVICES CATALOG DISPLAY -->
    <div id="tariffCatalogRoot">';

foreach($services_catalog as $cat_key => $cat_data) {
    $frontend_custom_sections .= '
        <div class="tariff-cat-section mb-5" data-cat-id="'.$cat_key.'">
            <div class="d-flex justify-content-between align-items-end mb-3 pb-2 border-bottom">
                <div>
                    <div class="d-flex align-items-center gap-2">
                        <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 36px; height: 36px; background: rgba(229, 37, 42, 0.08); color: var(--dm-brand-red);">
                            <i class="'.$cat_data['icon'].'"></i>
                        </div>
                        <h3 class="fw-bold text-dark mb-0 fs-4">'.$cat_data['title'].'</h3>
                    </div>
                    <p class="text-muted small mb-0 mt-1">'.$cat_data['subtitle'].'</p>
                </div>
                <span class="badge bg-light text-secondary border rounded-pill px-3 py-1 small fw-semibold">'.count($cat_data['items']).' Options</span>
            </div>

            <div class="row g-3">';

    foreach($cat_data['items'] as $item) {
        $wa_msg = urlencode("Hello DM Healthcare, I would like to book: " . $item['name'] . " (" . $item['price'] . " " . $item['unit'] . ")");
        $is_pop = !empty($item['popular']);
        $pop_class = $is_pop ? 'is-popular' : '';
        $pop_flag = $is_pop ? '<span class="popular-flag"><i class="fa-solid fa-star me-1"></i> Most Booked</span>' : '';

        $frontend_custom_sections .= '
                <div class="col-xl-4 col-md-6 tariff-card-col" data-search="'.strtolower($item['name'].' '.$item['desc'].' '.$item['price'].' '.$item['tag']).'">
                    <div class="rate-item-card '.$pop_class.' shadow-sm">
                        '.$pop_flag.'
                        <div>
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <span class="service-badge-pill">'.$item['tag'].'</span>
                            </div>

                            <h5 class="fw-bold text-dark mb-2" style="font-size: 1.05rem; line-height: 1.35;">'.$item['name'].'</h5>
                            
                            <div class="mb-3 d-flex align-items-baseline gap-1">
                                <span class="price-main">'.$item['price'].'</span>
                                <span class="price-unit">'.$item['unit'].'</span>
                            </div>

                            <p class="text-muted small mb-3" style="font-size: 0.82rem; line-height: 1.55;">
                                '.$item['desc'].'
                            </p>
                        </div>

                        <div class="pt-3 border-top d-flex gap-2">
                            <a href="https://wa.me/919319149644?text='.$wa_msg.'" target="_blank" class="btn btn-danger btn-sm rounded-pill fw-bold w-100 py-2 d-inline-flex align-items-center justify-content-center gap-1 shadow-sm" style="background-color: var(--dm-brand-red); border-color: var(--dm-brand-red);">
                                <i class="fa-brands fa-whatsapp fs-6"></i> Book on WhatsApp
                            </a>
                            <a href="tel:+919319149644" class="btn btn-outline-dark btn-sm rounded-pill px-3" title="Call to inquire">
                                <i class="fa-solid fa-phone"></i>
                            </a>
                        </div>
                    </div>
                </div>';
    }

    $frontend_custom_sections .= '
            </div>
        </div>';
}

$frontend_custom_sections .= '
    </div>

    <!-- 5. 4-STEP SERVICE & STAFF VERIFICATION ASSURANCE -->
    <div class="my-5 p-4 p-md-5 rounded-4 border bg-white shadow-sm">
        <div class="text-center mb-4">
            <span class="badge bg-danger bg-opacity-10 text-danger rounded-pill px-3 py-1 fw-bold mb-2">Patient Safety Standard</span>
            <h3 class="fw-bold text-dark">Our 4-Point Staff Verification Guarantee</h3>
            <p class="text-muted small mx-auto" style="max-width: 600px;">When you invite care staff into your home, safety and clinical competence are paramount.</p>
        </div>

        <div class="row g-3">
            <div class="col-md-3 col-sm-6">
                <div class="p-3 bg-light rounded-3 border h-100 text-center">
                    <div class="rounded-circle d-inline-flex align-items-center justify-content-center mb-2" style="width: 44px; height: 44px; background: rgba(229, 37, 42, 0.1); color: var(--dm-brand-red);">
                        <i class="fa-solid fa-id-card fs-5"></i>
                    </div>
                    <h6 class="fw-bold text-dark mb-1">100% Police Verified</h6>
                    <p class="text-muted small mb-0" style="font-size: 0.78rem;">Aadhaar verified and local police background clearance for all male/female attendants.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="p-3 bg-light rounded-3 border h-100 text-center">
                    <div class="rounded-circle d-inline-flex align-items-center justify-content-center mb-2" style="width: 44px; height: 44px; background: rgba(5, 150, 105, 0.1); color: #059669;">
                        <i class="fa-solid fa-graduation-cap fs-5"></i>
                    </div>
                    <h6 class="fw-bold text-dark mb-1">Council Registered</h6>
                    <p class="text-muted small mb-0" style="font-size: 0.78rem;">GNM & B.Sc Nursing council registered degrees validated before patient deployment.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="p-3 bg-light rounded-3 border h-100 text-center">
                    <div class="rounded-circle d-inline-flex align-items-center justify-content-center mb-2" style="width: 44px; height: 44px; background: rgba(2, 132, 199, 0.1); color: #0284c7;">
                        <i class="fa-solid fa-user-doctor fs-5"></i>
                    </div>
                    <h6 class="fw-bold text-dark mb-1">Doctor Supervised</h6>
                    <p class="text-muted small mb-0" style="font-size: 0.78rem;">Continuous clinical oversight with regular nursing supervisor home audits.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="p-3 bg-light rounded-3 border h-100 text-center">
                    <div class="rounded-circle d-inline-flex align-items-center justify-content-center mb-2" style="width: 44px; height: 44px; background: rgba(217, 70, 239, 0.1); color: #d946ef;">
                        <i class="fa-solid fa-arrows-rotate fs-5"></i>
                    </div>
                    <h6 class="fw-bold text-dark mb-1">Free Replacement</h6>
                    <p class="text-muted small mb-0" style="font-size: 0.78rem;">Zero downtime backup arrangement if staff takes leave or in case of incompatibility.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- 6. FREQUENTLY ASKED QUESTIONS -->
    <div class="my-5 p-4 p-md-5 bg-white rounded-4 border shadow-sm">
        <div class="text-center mb-4">
            <span class="badge bg-danger bg-opacity-10 text-danger rounded-pill px-3 py-1 fw-bold mb-2">Transparent Policies</span>
            <h3 class="fw-bold text-dark">Frequently Asked Questions (Pricing & Shifts)</h3>
            <p class="text-muted small mx-auto" style="max-width: 600px;">Everything you need to know about our home healthcare deployment, payment terms, and shift schedules.</p>
        </div>

        <div class="accordion accordion-flush" id="tariffFaqAccordion">
            <div class="accordion-item border rounded-3 mb-2">
                <h2 class="accordion-header" id="faqHeading1">
                    <button class="accordion-button collapsed fw-bold text-dark rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="false" aria-controls="faqCollapse1">
                        <i class="fa-solid fa-clock text-danger me-2"></i> What are the standard 12-hour and 24-hour shift timings?
                    </button>
                </h2>
                <div id="faqCollapse1" class="accordion-collapse collapse" aria-labelledby="faqHeading1" data-bs-parent="#tariffFaqAccordion">
                    <div class="accordion-body text-muted small">
                        For 12-hour shifts, standard daytime duty is <strong>8:00 AM to 8:00 PM</strong> and nighttime duty is <strong>8:00 PM to 8:00 AM</strong>. For 24-hour live-in care, a dedicated caregiver/nurse resides at the patient\'s home round-the-clock with scheduled personal rest periods.
                    </div>
                </div>
            </div>

            <div class="accordion-item border rounded-3 mb-2">
                <h2 class="accordion-header" id="faqHeading2">
                    <button class="accordion-button collapsed fw-bold text-dark rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                        <i class="fa-solid fa-rotate text-danger me-2"></i> What happens if a staff member takes leave or is not compatible?
                    </button>
                </h2>
                <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#tariffFaqAccordion">
                    <div class="accordion-body text-muted small">
                        We provide a <strong>100% Free Replacement Guarantee</strong>. If your assigned nurse or attendant takes leave or you request a change for any reason, our care coordination team arranges a verified backup replacement with zero downtime.
                    </div>
                </div>
            </div>

            <div class="accordion-item border rounded-3 mb-2">
                <h2 class="accordion-header" id="faqHeading3">
                    <button class="accordion-button collapsed fw-bold text-dark rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                        <i class="fa-solid fa-shield-halved text-danger me-2"></i> How are the staff verified and supervised?
                    </button>
                </h2>
                <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#tariffFaqAccordion">
                    <div class="accordion-body text-muted small">
                        Every medical staff member undergoes a thorough 4-step verification: Aadhaar/ID check, police background verification, nursing council certificate validation, and medical fitness tests. In addition, our senior nursing supervisors conduct weekly audits.
                    </div>
                </div>
            </div>

            <div class="accordion-item border rounded-3 mb-2">
                <h2 class="accordion-header" id="faqHeading4">
                    <button class="accordion-button collapsed fw-bold text-dark rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                        <i class="fa-solid fa-bolt text-danger me-2"></i> How quickly can a nurse or caregiver be deployed?
                    </button>
                </h2>
                <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#tariffFaqAccordion">
                    <div class="accordion-body text-muted small">
                        In most parts of Faridabad, Noida, South Delhi, and Gurugram, we deploy certified nurses and caregivers within <strong>2 to 4 hours</strong> of request confirmation.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 7. DIRECT APPOINTMENT CALLBACK DESK -->
    <div class="my-5 p-4 p-md-5 rounded-4 text-white position-relative overflow-hidden shadow-lg" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);">
        <div class="row align-items-center g-4">
            <div class="col-lg-8">
                <span class="badge bg-danger px-3 py-1 rounded-pill fw-bold mb-2">Speak to a Care Coordinator</span>
                <h3 class="fw-bold text-white mb-2">Need a Customized Care Package or Monthly Discount?</h3>
                <p class="text-white-50 small mb-0" style="line-height: 1.6;">
                    For long-term patient care (15+ days or monthly packages), we offer customized tariff discounts, free clinical supervisor visits, and complimentary medical consumables kit.
                </p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="tel:+919319149644" class="btn btn-danger btn-lg rounded-pill px-4 fw-bold shadow-sm" style="background-color: var(--dm-brand-red); border-color: var(--dm-brand-red);">
                    <i class="fa-solid fa-headset me-2"></i> Call Now: 93191 49644
                </a>
            </div>
        </div>
    </div>
</div>

<script>
function switchTariffCategory(catId, btn) {
    document.querySelectorAll(".tab-filter-btn").forEach(b => b.classList.remove("active"));
    btn.classList.add("active");

    const sections = document.querySelectorAll(".tariff-cat-section");
    sections.forEach(sec => {
        if (catId === "all" || sec.getAttribute("data-cat-id") === catId) {
            sec.style.display = "block";
        } else {
            sec.style.display = "none";
        }
    });
}

function handleLiveTariffSearch() {
    const query = document.getElementById("liveTariffSearch").value.toLowerCase().trim();
    const cols = document.querySelectorAll(".tariff-card-col");
    const sections = document.querySelectorAll(".tariff-cat-section");

    let visibleCount = 0;

    cols.forEach(col => {
        const text = col.getAttribute("data-search");
        if (!query || text.includes(query)) {
            col.style.display = "block";
            visibleCount++;
        } else {
            col.style.display = "none";
        }
    });

    sections.forEach(sec => {
        const hasVisibleCols = Array.from(sec.querySelectorAll(".tariff-card-col")).some(c => c.style.display !== "none");
        sec.style.display = hasVisibleCols ? "block" : "none";
    });

    const badge = document.getElementById("totalServicesBadge");
    if (query) {
        badge.innerText = visibleCount + " Services Found";
    } else {
        badge.innerText = "51 Services Listed";
    }
}
</script>
';
