<?php
// Custom Page Overrides for Delhi NCR
$display_title = "Healthcare Services in Delhi & NCR";
$seo_title = "24/7 Home Healthcare & Nursing Services Across Delhi & NCR - DM Healthcare";
$seo_desc = "Get verified 24/7 home healthcare services across Delhi NCR including Faridabad, Noida, Gurugram, and Delhi Capital. Certified nurses, elderly attendants, ICU equipment rental, and doctor home visits.";
$short_desc = "24/7 Compassionate, certified & hospital-grade healthcare services delivered right at your doorstep across Delhi NCR with 30-60 min rapid response.";
$category_name = "Coverage Area & Services";
$hide_default_welcome = true; // Use our premium custom full-width design

$frontend_custom_sections = '

<style>
:root {
    --primary-color: #e5252a;
    --primary-dark: #c4181d;
    --secondary-color: #0f172a;
    --accent-blue: #0d6efd;
    --accent-green: #10b981;
    --text-dark: #1e293b;
    --text-muted: #64748b;
    --bg-light: #f8fafc;
    --card-border: rgba(226, 232, 240, 0.8);
}

/* Hero Section */
.delhi-hero-wrap {
    background: linear-gradient(135deg, #ffffff 0%, #f1f5f9 100%);
    border-radius: 28px;
    padding: 50px 40px;
    border: 1px solid var(--card-border);
    box-shadow: 0 10px 30px rgba(0,0,0,0.03);
    margin-bottom: 50px;
    position: relative;
    overflow: hidden;
}
.delhi-hero-wrap::before {
    content: "";
    position: absolute;
    top: -50px;
    right: -50px;
    width: 250px;
    height: 250px;
    background: radial-gradient(circle, rgba(229, 37, 42, 0.08) 0%, rgba(229, 37, 42, 0) 70%);
    border-radius: 50%;
    pointer-events: none;
}

/* Metric Badges */
.metric-pill {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 14px;
    padding: 12px 18px;
    display: inline-flex;
    align-items: center;
    gap: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.03);
    transition: transform 0.25s ease;
}
.metric-pill:hover {
    transform: translateY(-3px);
    border-color: var(--primary-color);
}
.metric-pill i {
    font-size: 1.3rem;
}

/* Regional Hub Cards */
.ncr-hub-card {
    background: #ffffff;
    border-radius: 22px;
    padding: 28px;
    border: 1px solid #e2e8f0;
    box-shadow: 0 8px 25px rgba(0,0,0,0.04);
    transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1);
    height: 100%;
    position: relative;
    display: flex;
    flex-direction: column;
}
.ncr-hub-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(229, 37, 42, 0.12);
    border-color: rgba(229, 37, 42, 0.35);
}
.hub-tag {
    position: absolute;
    top: 20px;
    right: 20px;
    font-size: 0.75rem;
    font-weight: 700;
    padding: 6px 14px;
    border-radius: 30px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

/* Service Card Design */
.delhi-service-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 22px;
    padding: 32px 28px;
    transition: all 0.35s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
    position: relative;
    overflow: hidden;
}
.delhi-service-card:hover {
    transform: translateY(-8px);
    border-color: var(--primary-color);
    box-shadow: 0 20px 40px rgba(229, 37, 42, 0.1);
}
.service-icon-box {
    width: 65px;
    height: 65px;
    border-radius: 18px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.8rem;
    margin-bottom: 22px;
    transition: transform 0.3s ease;
}
.delhi-service-card:hover .service-icon-box {
    transform: scale(1.1) rotate(-4deg);
}

/* Feature Point Box */
.pillar-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 20px;
    padding: 24px;
    height: 100%;
    transition: all 0.3s ease;
}
.pillar-card:hover {
    border-color: #0d6efd;
    box-shadow: 0 12px 30px rgba(13, 110, 253, 0.08);
    transform: translateY(-4px);
}

/* Hospital Box */
.hospital-box {
    background: #ffffff;
    border-radius: 18px;
    padding: 24px;
    border-left: 6px solid var(--primary-color);
    box-shadow: 0 6px 20px rgba(0,0,0,0.03);
    height: 100%;
    transition: all 0.25s ease;
    border-top: 1px solid #e2e8f0;
    border-right: 1px solid #e2e8f0;
    border-bottom: 1px solid #e2e8f0;
}
.hospital-box:hover {
    transform: translateY(-4px);
    box-shadow: 0 14px 30px rgba(0,0,0,0.08);
}

/* How It Works Step */
.work-step-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 20px;
    padding: 30px 24px;
    text-align: center;
    position: relative;
    height: 100%;
    transition: all 0.3s ease;
}
.work-step-card:hover {
    transform: translateY(-6px);
    border-color: var(--primary-color);
    box-shadow: 0 15px 35px rgba(229, 37, 42, 0.08);
}
.step-num-badge {
    width: 44px;
    height: 44px;
    border-radius: 50%;
    background: var(--primary-color);
    color: white;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-weight: 800;
    font-size: 1.1rem;
    margin-bottom: 18px;
    box-shadow: 0 6px 15px rgba(229, 37, 42, 0.3);
}

/* CTA Banner */
.ncr-cta-banner {
    background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
    border-radius: 26px;
    padding: 45px;
    color: white;
    border: 1px solid rgba(255,255,255,0.1);
    box-shadow: 0 20px 50px rgba(15, 23, 42, 0.2);
}
</style>

<!-- SECTION 1: HERO OVERVIEW -->
<div class="delhi-hero-wrap">
    <div class="row align-items-center">
        <div class="col-lg-8">
            <span class="badge px-3 py-2 rounded-pill fw-bold mb-3 shadow-sm" style="background: rgba(229, 37, 42, 0.12); color: var(--primary-color); font-size: 0.85rem; letter-spacing: 1px;">
                <i class="fa-solid fa-shield-heart me-1"></i> #1 DOORSTEP HEALTHCARE NETWORK IN DELHI NCR
            </span>
            <h1 class="fw-bolder text-dark display-5 mb-3" style="letter-spacing: -0.5px;">
                Hospital-Grade Healthcare Services Across <span style="color: var(--primary-color);">Delhi & NCR</span>
            </h1>
            <p class="text-muted lead fs-6 mb-4" style="line-height: 1.8;">
                From certified clinical nursing and 24/7 elderly attendants to complete home ICU setups, physiotherapy, and doctor home visits, DM Healthcare delivers empathetic, hospital-standard medical care directly to your living room within 30 to 60 minutes.
            </p>
            
            <!-- Key Metric Pills -->
            <div class="d-flex flex-wrap gap-3 mb-4">
                <div class="metric-pill">
                    <i class="fa-solid fa-bolt text-danger" style="color: var(--primary-color) !important;"></i>
                    <div>
                        <strong class="d-block text-dark small">30-60 Mins</strong>
                        <span class="text-muted" style="font-size: 0.75rem;">Rapid Deployment</span>
                    </div>
                </div>
                <div class="metric-pill">
                    <i class="fa-solid fa-user-shield text-success"></i>
                    <div>
                        <strong class="d-block text-dark small">100% Verified</strong>
                        <span class="text-muted" style="font-size: 0.75rem;">Police Checked Staff</span>
                    </div>
                </div>
                <div class="metric-pill">
                    <i class="fa-solid fa-user-doctor text-primary"></i>
                    <div>
                        <strong class="d-block text-dark small">24/7 Oversight</strong>
                        <span class="text-muted" style="font-size: 0.75rem;">Senior Physicians</span>
                    </div>
                </div>
                <div class="metric-pill">
                    <i class="fa-solid fa-hand-holding-heart text-warning"></i>
                    <div>
                        <strong class="d-block text-dark small">10,000+</strong>
                        <span class="text-muted" style="font-size: 0.75rem;">Families Recovered</span>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="d-flex flex-wrap gap-3">
                <a href="#ncrBooking" class="btn btn-primary btn-lg rounded-pill px-5 py-3 fw-bold shadow-sm" style="background: var(--primary-color); border-color: var(--primary-color);">
                    <i class="fa-solid fa-calendar-check me-2"></i> Book Care Service
                </a>
                <a href="tel:+919891989686" class="btn btn-outline-dark btn-lg rounded-pill px-4 py-3 fw-bold">
                    <i class="fa-solid fa-phone-volume text-danger me-2" style="color: var(--primary-color) !important;"></i> +91-9891989686
                </a>
            </div>
        </div>

        <div class="col-lg-4 text-center mt-5 mt-lg-0">
            <div class="p-4 bg-white rounded-4 shadow-sm border text-start">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <div class="rounded-circle d-flex align-items-center justify-content-center bg-danger text-white shadow-sm" style="width: 48px; height: 48px; background: var(--primary-color) !important;">
                        <i class="fa-solid fa-headset fs-4"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-0 text-dark">24/7 Care Coordinator</h6>
                        <small class="text-muted">Live Helpline & Rapid Dispatch</small>
                    </div>
                </div>
                <hr class="my-3 opacity-25">
                <p class="text-muted small mb-3">Share patient condition with our medical manager for an immediate care plan alignment.</p>
                <a href="https://wa.me/919891989686?text=Hi%20DM%20Healthcare,%20I%20need%20healthcare%20service%20in%20Delhi%20NCR" target="_blank" class="btn btn-success rounded-pill w-100 py-2 fw-bold d-flex align-items-center justify-content-center gap-2 shadow-sm">
                    <i class="fa-brands fa-whatsapp fs-5"></i> Chat on WhatsApp
                </a>
            </div>
        </div>
    </div>
</div>

<!-- SECTION 2: REGIONAL HUBS & DISPATCH TIMES -->
<div class="mb-5">
    <div class="text-center mb-5">
        <span class="text-uppercase fw-bold px-3 py-1 rounded-pill small" style="background: rgba(229, 37, 42, 0.08); color: var(--primary-color); letter-spacing: 1.5px;">Strategic Coverage Network</span>
        <h2 class="fw-bold text-dark mt-2">Active Care Hubs Across Delhi & NCR</h2>
        <p class="text-muted mx-auto" style="max-width: 700px;">Our decentralized medical warehouses and localized nursing squads ensure the fastest doorstep arrival in the NCR region.</p>
    </div>

    <div class="row g-4">
        <!-- Hub 1: Faridabad -->
        <div class="col-md-6 col-lg-3">
            <div class="ncr-hub-card">
                <span class="hub-tag bg-danger text-white" style="background: var(--primary-color) !important;">Primary Hub</span>
                <div class="service-icon-box" style="background: rgba(229, 37, 42, 0.1); color: var(--primary-color);">
                    <i class="fa-solid fa-hospital-user"></i>
                </div>
                <h5 class="fw-bold text-dark mb-1">Faridabad & Surroundings</h5>
                <p class="text-muted small mb-4 flex-grow-1">Sector 14, 15, 16, 21, NIT 1-5, Greater Faridabad (Neharpar), Green Field Colony, Ashoka Enclave, Charmwood Village, Surajkund.</p>
                <div class="pt-3 border-top d-flex align-items-center justify-content-between">
                    <span class="fw-bold text-danger small" style="color: var(--primary-color) !important;"><i class="fa-solid fa-bolt me-1"></i> 30-45 Mins</span>
                    <span class="badge bg-light text-dark border">Full Fleet</span>
                </div>
            </div>
        </div>

        <!-- Hub 2: Noida & Gr. Noida -->
        <div class="col-md-6 col-lg-3">
            <div class="ncr-hub-card">
                <span class="hub-tag bg-primary text-white">Express Center</span>
                <div class="service-icon-box" style="background: rgba(13, 110, 253, 0.1); color: #0d6efd;">
                    <i class="fa-solid fa-truck-medical"></i>
                </div>
                <h5 class="fw-bold text-dark mb-1">Noida & Greater Noida</h5>
                <p class="text-muted small mb-4 flex-grow-1">Sector 18, 50, 62, 74, 137, Noida Expressway, Greater Noida West (Extension), Pari Chowk, Zeta & Alpha Sectors.</p>
                <div class="pt-3 border-top d-flex align-items-center justify-content-between">
                    <span class="fw-bold text-primary small"><i class="fa-solid fa-bolt me-1"></i> 45-60 Mins</span>
                    <span class="badge bg-light text-dark border">24/7 Standby</span>
                </div>
            </div>
        </div>

        <!-- Hub 3: Delhi Capital -->
        <div class="col-md-6 col-lg-3">
            <div class="ncr-hub-card">
                <span class="hub-tag bg-dark text-white">Capital Fleet</span>
                <div class="service-icon-box" style="background: rgba(15, 23, 42, 0.1); color: #0f172a;">
                    <i class="fa-solid fa-city"></i>
                </div>
                <h5 class="fw-bold text-dark mb-1">Delhi Capital Region</h5>
                <p class="text-muted small mb-4 flex-grow-1">Saket, Hauz Khas, Greater Kailash (GK 1 & 2), Vasant Kunj, Lajpat Nagar, Defence Colony, Dwarka, Janakpuri, Rohini.</p>
                <div class="pt-3 border-top d-flex align-items-center justify-content-between">
                    <span class="fw-bold text-dark small"><i class="fa-solid fa-bolt me-1"></i> 45-60 Mins</span>
                    <span class="badge bg-light text-dark border">All Zones</span>
                </div>
            </div>
        </div>

        <!-- Hub 4: Gurugram & Ghaziabad -->
        <div class="col-md-6 col-lg-3">
            <div class="ncr-hub-card">
                <span class="hub-tag bg-success text-white">Rapid Corridor</span>
                <div class="service-icon-box" style="background: rgba(16, 185, 129, 0.1); color: #059669;">
                    <i class="fa-solid fa-location-crosshairs"></i>
                </div>
                <h5 class="fw-bold text-dark mb-1">Gurugram & NCR</h5>
                <p class="text-muted small mb-4 flex-grow-1">DLF Phase 1-5, Golf Course Extension Road, Sohna Road, Cyber City, Indirapuram, Vaishali, Vasundhara, Crossing Republik.</p>
                <div class="pt-3 border-top d-flex align-items-center justify-content-between">
                    <span class="fw-bold text-success small"><i class="fa-solid fa-bolt me-1"></i> 60-90 Mins</span>
                    <span class="badge bg-light text-dark border">Dedicated Van</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SECTION 3: CORE HEALTHCARE SERVICES IN NCR -->
<div class="mb-5 pt-4 border-top">
    <div class="text-center mb-5">
        <span class="text-uppercase fw-bold px-3 py-1 rounded-pill small" style="background: rgba(229, 37, 42, 0.08); color: var(--primary-color); letter-spacing: 1.5px;">Complete Medical Portfolio</span>
        <h2 class="fw-bold text-dark mt-2">Comprehensive Healthcare Delivered at Your Home</h2>
        <p class="text-muted mx-auto" style="max-width: 700px;">Every service is backed by verified clinical protocols, registered practitioners, and round-the-clock emergency support.</p>
    </div>

    <div class="row g-4">
        <!-- Service 1 -->
        <div class="col-md-6 col-lg-4">
            <div class="delhi-service-card">
                <div class="service-icon-box" style="background: rgba(229, 37, 42, 0.1); color: var(--primary-color);">
                    <i class="fa-solid fa-person-cane"></i>
                </div>
                <h4 class="fw-bold text-dark mb-2">Elder Care & Attendants</h4>
                <p class="text-muted small mb-4 flex-grow-1">Compassionate 12-hour (day/night) and 24-hour live-in caretakers assisting senior citizens with mobility, bathing, feeding, medication reminders, vitals logging, and empathetic companionship.</p>
                <ul class="list-unstyled text-muted small mb-4">
                    <li class="mb-2"><i class="fa-solid fa-circle-check text-danger me-2" style="color: var(--primary-color) !important;"></i> Assisted Mobility & Fall Prevention</li>
                    <li class="mb-2"><i class="fa-solid fa-circle-check text-danger me-2" style="color: var(--primary-color) !important;"></i> Personal Hygiene & Diaper Care</li>
                    <li><i class="fa-solid fa-circle-check text-danger me-2" style="color: var(--primary-color) !important;"></i> Regular Digital Vitals Reporting</li>
                </ul>
                <a href="elder-care---basic-care" class="btn btn-outline-danger rounded-pill fw-bold w-100 py-2" style="color: var(--primary-color); border-color: var(--primary-color);">View Elder Care Details</a>
            </div>
        </div>

        <!-- Service 2 -->
        <div class="col-md-6 col-lg-4">
            <div class="delhi-service-card">
                <div class="service-icon-box" style="background: rgba(13, 110, 253, 0.1); color: #0d6efd;">
                    <i class="fa-solid fa-bed-pulse"></i>
                </div>
                <h4 class="fw-bold text-dark mb-2">Critical Care & Nursing</h4>
                <p class="text-muted small mb-4 flex-grow-1">Certified GNM & B.Sc nurses providing clinical care for post-operative recovery, injections, IV fluid administration, catheterization, Ryle\'s tube insertion, wound dressing, and tracheostomy care.</p>
                <ul class="list-unstyled text-muted small mb-4">
                    <li class="mb-2"><i class="fa-solid fa-circle-check text-primary me-2"></i> Post-Surgical & Stroke Care</li>
                    <li class="mb-2"><i class="fa-solid fa-circle-check text-primary me-2"></i> IV Infusions & Antibiotic Therapy</li>
                    <li><i class="fa-solid fa-circle-check text-primary me-2"></i> Bedsore & Surgical Wound Dressing</li>
                </ul>
                <a href="patient-care---general-nursing" class="btn btn-outline-primary rounded-pill fw-bold w-100 py-2">View Nursing Details</a>
            </div>
        </div>

        <!-- Service 3 -->
        <div class="col-md-6 col-lg-4">
            <div class="delhi-service-card">
                <div class="service-icon-box" style="background: rgba(16, 185, 129, 0.1); color: #059669;">
                    <i class="fa-solid fa-user-doctor"></i>
                </div>
                <h4 class="fw-bold text-dark mb-2">Doctor Home Visits</h4>
                <p class="text-muted small mb-4 flex-grow-1">Experienced senior general physicians visit patients directly at home for thorough physical evaluations, chronic condition reviews, prescription updates, and specialist referrals.</p>
                <ul class="list-unstyled text-muted small mb-4">
                    <li class="mb-2"><i class="fa-solid fa-circle-check text-success me-2"></i> Bedside Clinical Examination</li>
                    <li class="mb-2"><i class="fa-solid fa-circle-check text-success me-2"></i> Prescription & Medication Review</li>
                    <li><i class="fa-solid fa-circle-check text-success me-2"></i> Teleconsultation Follow-ups</li>
                </ul>
                <a href="physician-doctor" class="btn btn-outline-success rounded-pill fw-bold w-100 py-2">View Doctor Details</a>
            </div>
        </div>

        <!-- Service 4 -->
        <div class="col-md-6 col-lg-4">
            <div class="delhi-service-card">
                <div class="service-icon-box" style="background: rgba(245, 158, 11, 0.1); color: #d97706;">
                    <i class="fa-solid fa-wheelchair"></i>
                </div>
                <h4 class="fw-bold text-dark mb-2">Medical Equipment on Rent</h4>
                <p class="text-muted small mb-4 flex-grow-1">High-grade sanitized medical machinery available on flexible rental and purchase. Delivered and professionally installed at your home with 24/7 technical assistance.</p>
                <ul class="list-unstyled text-muted small mb-4">
                    <li class="mb-2"><i class="fa-solid fa-circle-check text-warning me-2" style="color: #d97706 !important;"></i> 3 & 5 Function Motorized Hospital Beds</li>
                    <li class="mb-2"><i class="fa-solid fa-circle-check text-warning me-2" style="color: #d97706 !important;"></i> Oxygen Concentrators (5L / 10L) & BiPAP/CPAP</li>
                    <li><i class="fa-solid fa-circle-check text-warning me-2" style="color: #d97706 !important;"></i> Multipara Vitals Monitors & Wheelchairs</li>
                </ul>
                <a href="hospital-bed" class="btn btn-outline-warning rounded-pill fw-bold w-100 py-2" style="color: #d97706; border-color: #d97706;">View Equipment Catalog</a>
            </div>
        </div>

        <!-- Service 5 -->
        <div class="col-md-6 col-lg-4">
            <div class="delhi-service-card">
                <div class="service-icon-box" style="background: rgba(147, 51, 234, 0.1); color: #9333ea;">
                    <i class="fa-solid fa-person-walking-rehabilitation"></i>
                </div>
                <h4 class="fw-bold text-dark mb-2">Home Physiotherapy</h4>
                <p class="text-muted small mb-4 flex-grow-1">Specialized physical therapy sessions by certified physiotherapists for neurological recovery, stroke rehabilitation, joint replacement rehab, fracture recovery, and mobility restoration.</p>
                <ul class="list-unstyled text-muted small mb-4">
                    <li class="mb-2"><i class="fa-solid fa-circle-check text-purple me-2" style="color: #9333ea;"></i> Post-Orthopedic Surgery Rehabilitation</li>
                    <li class="mb-2"><i class="fa-solid fa-circle-check text-purple me-2" style="color: #9333ea;"></i> Paralysis & Stroke Gait Retraining</li>
                    <li><i class="fa-solid fa-circle-check text-purple me-2" style="color: #9333ea;"></i> Pain Relief & Muscle Strengthening</li>
                </ul>
                <a href="physiotherapist" class="btn btn-outline-secondary rounded-pill fw-bold w-100 py-2" style="color: #9333ea; border-color: #9333ea;">View Physiotherapy Plans</a>
            </div>
        </div>

        <!-- Service 6 -->
        <div class="col-md-6 col-lg-4">
            <div class="delhi-service-card">
                <div class="service-icon-box" style="background: rgba(14, 165, 233, 0.1); color: #0284c7;">
                    <i class="fa-solid fa-flask-vial"></i>
                </div>
                <h4 class="fw-bold text-dark mb-2">Diagnostics & Lab Tests</h4>
                <p class="text-muted small mb-4 flex-grow-1">Accurate, NABL-partnered home blood collections with barcoded vials, fast online reporting, routine checkups, 12-Lead ECG at home, and overnight Sleep Apnea studies.</p>
                <ul class="list-unstyled text-muted small mb-4">
                    <li class="mb-2"><i class="fa-solid fa-circle-check text-info me-2" style="color: #0284c7;"></i> CBC, LFT, KFT & Lipid Profile Tests</li>
                    <li class="mb-2"><i class="fa-solid fa-circle-check text-info me-2" style="color: #0284c7;"></i> Instant Digital 12-Lead ECG at Home</li>
                    <li><i class="fa-solid fa-circle-check text-info me-2" style="color: #0284c7;"></i> NABL Certified Laboratory Partners</li>
                </ul>
                <a href="preventive-lab-tests" class="btn btn-outline-info rounded-pill fw-bold w-100 py-2" style="color: #0284c7; border-color: #0284c7;">View Lab Test Packages</a>
            </div>
        </div>
    </div>
</div>

<!-- SECTION 4: WHY FAMILIES TRUST DM HEALTHCARE (6 PILLARS) -->
<div class="mb-5 pt-4 border-top">
    <div class="text-center mb-5">
        <span class="text-uppercase fw-bold px-3 py-1 rounded-pill small" style="background: rgba(229, 37, 42, 0.08); color: var(--primary-color); letter-spacing: 1.5px;">Why Choose DM Healthcare</span>
        <h2 class="fw-bold text-dark mt-2">Clinical Excellence & Unmatched Patient Safety</h2>
        <p class="text-muted mx-auto" style="max-width: 680px;">We take complete ownership of your patient\'s recovery journey with stringent quality protocols.</p>
    </div>

    <div class="row g-4">
        <div class="col-md-6 col-lg-4">
            <div class="pillar-card">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 46px; height: 46px; background: rgba(229, 37, 42, 0.1); color: var(--primary-color);">
                        <i class="fa-solid fa-user-check fs-5"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-0">100% Verified Staff</h5>
                </div>
                <p class="text-muted small mb-0">Every nurse and attendant undergoes rigorous Aadhaar verification, local address checks, police verification, and hospital-standard clinical competency tests.</p>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="pillar-card">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 46px; height: 46px; background: rgba(13, 110, 253, 0.1); color: #0d6efd;">
                        <i class="fa-solid fa-stopwatch-20 fs-5"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-0">30-60 Mins Rapid Arrival</h5>
                </div>
                <p class="text-muted small mb-0">Stationed teams in Faridabad, Noida, Delhi Capital, and Gurugram ensure same-day emergency dispatch without unnecessary delays.</p>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="pillar-card">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 46px; height: 46px; background: rgba(16, 185, 129, 0.1); color: #059669;">
                        <i class="fa-solid fa-rotate-left fs-5"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-0">Free Staff Replacement</h5>
                </div>
                <p class="text-muted small mb-0">If you are unsatisfied with any caregiver or need shift adjustments, we provide immediate, hassle-free staff replacement within 12-24 hours.</p>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="pillar-card">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 46px; height: 46px; background: rgba(245, 158, 11, 0.1); color: #d97706;">
                        <i class="fa-solid fa-pump-medical fs-5"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-0">Sterilized Equipment</h5>
                </div>
                <p class="text-muted small mb-0">Hospital beds, oxygen machines, and suction apparatus undergo rigorous multi-stage chemical sanitization before delivery with zero cross-infection risk.</p>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="pillar-card">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 46px; height: 46px; background: rgba(147, 51, 234, 0.1); color: #9333ea;">
                        <i class="fa-solid fa-chart-line fs-5"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-0">Daily Digital Vitals Log</h5>
                </div>
                <p class="text-muted small mb-0">Continuous tracking of BP, Pulse, SpO2 Oxygen, and Blood Glucose updated daily and shared directly with treating doctors and family members.</p>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="pillar-card">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 46px; height: 46px; background: rgba(14, 165, 233, 0.1); color: #0284c7;">
                        <i class="fa-solid fa-receipt fs-5"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-0">Transparent Pricing</h5>
                </div>
                <p class="text-muted small mb-0">Clear daily and monthly subscription packages with zero hidden fees, GST invoicing, and medical insurance reimbursement assistance.</p>
            </div>
        </div>
    </div>
</div>

<!-- SECTION 5: HOW IT WORKS (4 STEPS) -->
<div class="mb-5 pt-4 border-top">
    <div class="text-center mb-5">
        <span class="text-uppercase fw-bold px-3 py-1 rounded-pill small" style="background: rgba(229, 37, 42, 0.08); color: var(--primary-color); letter-spacing: 1.5px;">Simple & Fast Process</span>
        <h2 class="fw-bold text-dark mt-2">How to Get Healthcare at Home</h2>
        <p class="text-muted mx-auto" style="max-width: 600px;">4 seamless steps to arrange verified medical care for your loved one today.</p>
    </div>

    <div class="row g-4">
        <div class="col-md-6 col-lg-3">
            <div class="work-step-card">
                <div class="step-num-badge">1</div>
                <h5 class="fw-bold text-dark mb-2">Connect With Us</h5>
                <p class="text-muted small mb-0">Call our 24/7 helpline (+91-9891989686) or fill out the booking form detailing patient requirements.</p>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="work-step-card">
                <div class="step-num-badge">2</div>
                <h5 class="fw-bold text-dark mb-2">Clinical Assessment</h5>
                <p class="text-muted small mb-0">Our care manager reviews medical records and designs a personalized care plan matching specific clinical needs.</p>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="work-step-card">
                <div class="step-num-badge">3</div>
                <h5 class="fw-bold text-dark mb-2">Rapid Deployment</h5>
                <p class="text-muted small mb-0">Certified nurse, attendant, or sanitized medical equipment arrives at your doorstep in 30 to 60 minutes.</p>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="work-step-card">
                <div class="step-num-badge">4</div>
                <h5 class="fw-bold text-dark mb-2">Doctor Supervision</h5>
                <p class="text-muted small mb-0">Enjoy continuous physician oversight, vitals monitoring, and proactive recovery tracking every single day.</p>
            </div>
        </div>
    </div>
</div>

<!-- SECTION 6: MAJOR PARTNER HOSPITALS IN NCR -->
<div class="mb-5 pt-4 border-top">
    <div class="text-center mb-5">
        <span class="text-uppercase fw-bold px-3 py-1 rounded-pill small" style="background: rgba(229, 37, 42, 0.08); color: var(--primary-color); letter-spacing: 1.5px;">Institutional Synergy</span>
        <h2 class="fw-bold text-dark mt-2">Partnered Hospital Networks Across NCR</h2>
        <p class="text-muted mx-auto" style="max-width: 650px;">Seamless post-discharge continuum of care aligned with senior consultants and hospital discharge teams.</p>
    </div>

    <div class="row g-3">
        <div class="col-md-6 col-lg-4">
            <div class="hospital-box" style="border-left-color: #0d6efd;">
                <h5 class="fw-bold mb-1 text-dark">Asian Institute of Medical Sciences</h5>
                <p class="text-muted small mb-2"><i class="fa-solid fa-location-dot me-1 text-primary"></i> Sector 21A, Faridabad</p>
                <div class="d-flex flex-wrap gap-1">
                    <span class="badge bg-light text-dark border">Post-Surgery Care</span>
                    <span class="badge bg-light text-dark border">Cardiac Care</span>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="hospital-box" style="border-left-color: #198754;">
                <h5 class="fw-bold mb-1 text-dark">Fortis Escorts Hospital</h5>
                <p class="text-muted small mb-2"><i class="fa-solid fa-location-dot me-1 text-success"></i> NIT Faridabad & Okhla Delhi</p>
                <div class="d-flex flex-wrap gap-1">
                    <span class="badge bg-light text-dark border">Critical Care</span>
                    <span class="badge bg-light text-dark border">Neurology Rehab</span>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="hospital-box" style="border-left-color: #dc3545;">
                <h5 class="fw-bold mb-1 text-dark">Apollo Hospitals & Clinics</h5>
                <p class="text-muted small mb-2"><i class="fa-solid fa-location-dot me-1 text-danger"></i> Sarita Vihar & Noida Sector 26</p>
                <div class="d-flex flex-wrap gap-1">
                    <span class="badge bg-light text-dark border">Emergency Escalation</span>
                    <span class="badge bg-light text-dark border">Oncology Support</span>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="hospital-box" style="border-left-color: #6f42c1;">
                <h5 class="fw-bold mb-1 text-dark">Max Super Speciality Hospital</h5>
                <p class="text-muted small mb-2"><i class="fa-solid fa-location-dot me-1" style="color: #6f42c1;"></i> Saket Delhi & Vaishali Ghaziabad</p>
                <div class="d-flex flex-wrap gap-1">
                    <span class="badge bg-light text-dark border">Elder Care</span>
                    <span class="badge bg-light text-dark border">Pulmonology</span>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="hospital-box" style="border-left-color: #fd7e14;">
                <h5 class="fw-bold mb-1 text-dark">Amrita Hospital</h5>
                <p class="text-muted small mb-2"><i class="fa-solid fa-location-dot me-1 text-warning"></i> Sector 88, Greater Faridabad</p>
                <div class="d-flex flex-wrap gap-1">
                    <span class="badge bg-light text-dark border">Transplant Recovery</span>
                    <span class="badge bg-light text-dark border">Pediatric Care</span>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="hospital-box" style="border-left-color: #0dcaf0;">
                <h5 class="fw-bold mb-1 text-dark">Jaypee Hospital</h5>
                <p class="text-muted small mb-2"><i class="fa-solid fa-location-dot me-1 text-info"></i> Sector 128, Noida Expressway</p>
                <div class="d-flex flex-wrap gap-1">
                    <span class="badge bg-light text-dark border">Orthopaedic Rehab</span>
                    <span class="badge bg-light text-dark border">Stroke Care</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SECTION 7: URGENT BOOKING CTA BANNER (ID: ncrBooking) -->
<div class="my-5" id="ncrBooking">
    <div class="ncr-cta-banner">
        <div class="row align-items-center">
            <div class="col-lg-7 mb-4 mb-lg-0">
                <span class="badge bg-danger px-3 py-2 rounded-pill fw-bold mb-3" style="background: var(--primary-color) !important;">24/7 Rapid Response Desk</span>
                <h2 class="fw-bolder text-white mb-2">Need Immediate Healthcare at Home in Delhi NCR?</h2>
                <p class="text-white-50 mb-0 fs-6">Speak with our certified medical coordinator right now to deploy a qualified attendant, nurse, or equipment within the hour.</p>
            </div>
            <div class="col-lg-5 text-lg-end">
                <div class="d-flex flex-column flex-sm-row justify-content-lg-end gap-3">
                    <a href="tel:+919891989686" class="btn btn-danger btn-lg rounded-pill fw-bold px-4 py-3 shadow-lg" style="background: var(--primary-color) !important; border-color: var(--primary-color) !important;">
                        <i class="fa-solid fa-phone me-2"></i> Call +91-9891989686
                    </a>
                    <a href="https://wa.me/919891989686?text=Hi%20DM%20Healthcare,%20I%20urgently%20need%20home%20care%20service%20in%20Delhi%20NCR" target="_blank" class="btn btn-success btn-lg rounded-pill fw-bold px-4 py-3 shadow-lg">
                        <i class="fa-brands fa-whatsapp me-2"></i> WhatsApp Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SECTION 8: VERIFIED PATIENT TESTIMONIALS -->
<div class="mb-5 pt-4 border-top">
    <div class="text-center mb-5">
        <span class="text-uppercase fw-bold px-3 py-1 rounded-pill small" style="background: rgba(229, 37, 42, 0.08); color: var(--primary-color); letter-spacing: 1.5px;">Patient Stories</span>
        <h2 class="fw-bold text-dark mt-2"><i class="fa-solid fa-star text-warning me-2"></i> What Delhi NCR Families Say</h2>
        <p class="text-muted mx-auto" style="max-width: 600px;">Read honest feedback from families who entrusted us with their loved ones\' health and rehabilitation.</p>
    </div>

    <div class="row g-4">
        <div class="col-md-6">
            <div class="card border-0 shadow-sm rounded-4 h-100 bg-white p-4 position-relative overflow-hidden" style="background-color: #f8fafd !important;">
                <div class="d-flex align-items-center mb-3">
                    <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center fw-bold me-3 shadow-sm" style="width:52px; height:52px; font-size:1.2rem;">AK</div>
                    <div>
                        <h6 class="fw-bold mb-0 text-dark">Amit Kumar</h6>
                        <small class="text-muted"><i class="fa-solid fa-star text-warning"></i> 5.0 (Sector 15, Faridabad)</small>
                    </div>
                </div>
                <p class="text-muted fst-italic mb-0" style="line-height: 1.7;">"DM Healthcare provided an excellent nursing attendant for my father after his stroke discharge. The staff was polite, hygienic, and extremely punctual. Having a senior physician supervise weekly vitals gave us immense peace of mind."</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-0 shadow-sm rounded-4 h-100 bg-white p-4 position-relative overflow-hidden" style="background-color: #f8fafd !important;">
                <div class="d-flex align-items-center mb-3">
                    <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center fw-bold me-3 shadow-sm" style="width:52px; height:52px; font-size:1.2rem;">PS</div>
                    <div>
                        <h6 class="fw-bold mb-0 text-dark">Priya Sharma</h6>
                        <small class="text-muted"><i class="fa-solid fa-star text-warning"></i> 5.0 (Sector 62, Noida)</small>
                    </div>
                </div>
                <p class="text-muted fst-italic mb-0" style="line-height: 1.7;">"We rented an oxygen concentrator and a 5-function motorized hospital bed for my mother. The delivery van arrived within 45 minutes, installed everything cleanly, and the technician trained us thoroughly. Absolutely reliable service!"</p>
            </div>
        </div>
    </div>
</div>

<!-- SECTION 9: NCR FAQs ACCORDION -->
<div class="mb-5 pt-4 border-top">
    <div class="text-center mb-5">
        <span class="text-uppercase fw-bold px-3 py-1 rounded-pill small" style="background: rgba(229, 37, 42, 0.08); color: var(--primary-color); letter-spacing: 1.5px;">Help Center</span>
        <h2 class="fw-bold text-dark mt-2"><i class="fa-solid fa-circle-question text-primary me-2"></i> Frequently Asked Questions - Delhi & NCR Home Care</h2>
    </div>

    <div class="accordion shadow-sm rounded-4 overflow-hidden mb-4" id="delhiNcrFaq">
        <div class="accordion-item border-0 border-bottom">
            <h2 class="accordion-header">
                <button class="accordion-button fw-bold bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#ncrFaq1">
                    How quickly can DM Healthcare deploy staff in Delhi, Faridabad, or Noida?
                </button>
            </h2>
            <div id="ncrFaq1" class="accordion-collapse collapse show" data-bs-parent="#delhiNcrFaq">
                <div class="accordion-body text-muted bg-white" style="line-height: 1.7;">
                    We maintain dedicated healthcare hubs in Faridabad, Noida, Delhi Capital, and Gurugram. Medical attendants, certified nurses, and rental equipment are deployed within 30 to 60 minutes across most sectors.
                </div>
            </div>
        </div>
        <div class="accordion-item border-0 border-bottom">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed fw-bold bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#ncrFaq2">
                    Are all caregivers and nurses police verified and background checked?
                </button>
            </h2>
            <div id="ncrFaq2" class="accordion-collapse collapse" data-bs-parent="#delhiNcrFaq">
                <div class="accordion-body text-muted bg-white" style="line-height: 1.7;">
                    Yes. 100% of our nursing attendants, certified GNM/B.Sc nurses, and physiotherapists undergo strict Aadhaar verification, address verification, police verification, and clinical competency training before deployment.
                </div>
            </div>
        </div>
        <div class="accordion-item border-0 border-bottom">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed fw-bold bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#ncrFaq3">
                    Can I rent medical equipment on short notice anywhere in Delhi NCR?
                </button>
            </h2>
            <div id="ncrFaq3" class="accordion-collapse collapse" data-bs-parent="#delhiNcrFaq">
                <div class="accordion-body text-muted bg-white" style="line-height: 1.7;">
                    Yes! We provide immediate doorstep delivery and installation for motorized hospital beds, oxygen concentrators, BiPAP/CPAP units, wheelchairs, and vital monitors with 24/7 technical support.
                </div>
            </div>
        </div>
        <div class="accordion-item border-0">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed fw-bold bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#ncrFaq4">
                    Do you provide 12-hour day/night shifts or 24-hour live-in care?
                </button>
            </h2>
            <div id="ncrFaq4" class="accordion-collapse collapse" data-bs-parent="#delhiNcrFaq">
                <div class="accordion-body text-muted bg-white" style="line-height: 1.7;">
                    We offer flexible shifts tailored to your family\'s needs, including 12-hour Day Shift, 12-hour Night Shift, and 24-hour Continuous Live-in Caretaker support with replacement guarantee.
                </div>
            </div>
        </div>
    </div>
</div>
';
?>
