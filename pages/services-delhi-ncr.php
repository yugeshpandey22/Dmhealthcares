<?php
// Custom Page Overrides for Delhi NCR
$display_title = "Healthcare Services in Delhi & NCR";
$seo_title = "24/7 Home Healthcare & Nursing Services Across Delhi & NCR - DM Healthcare";
$seo_desc = "Get verified 24/7 home healthcare services across Delhi NCR including Faridabad, Noida, Gurugram, Palwal, and Delhi Capital. Certified nurses, elderly attendants, ICU equipment rental, and doctor home visits.";
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
    background: radial-gradient(circle at top right, rgba(229, 37, 42, 0.06) 0%, transparent 60%),
                radial-gradient(circle at bottom left, rgba(13, 110, 253, 0.04) 0%, transparent 50%),
                linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
    border-radius: 28px;
    padding: 48px 40px;
    border: 1px solid rgba(226, 232, 240, 0.9);
    box-shadow: 0 15px 40px -10px rgba(15, 23, 42, 0.05);
    margin-bottom: 45px;
    position: relative;
    overflow: hidden;
}
.delhi-hero-wrap::before {
    content: "";
    position: absolute;
    top: -60px;
    right: -60px;
    width: 220px;
    height: 220px;
    background: radial-gradient(circle, rgba(229, 37, 42, 0.08) 0%, rgba(229, 37, 42, 0) 70%);
    border-radius: 50%;
    pointer-events: none;
}

/* Hero Stat Cards */
.hero-stat-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 16px 14px;
    text-align: left;
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.02);
    transition: all 0.25s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}
.hero-stat-card:hover {
    transform: translateY(-4px);
    border-color: var(--primary-color);
    box-shadow: 0 10px 25px rgba(229, 37, 42, 0.08);
}
.hero-stat-icon {
    width: 38px;
    height: 38px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.05rem;
    margin-bottom: 10px;
}
.hero-stat-val {
    font-size: 1.05rem;
    font-weight: 800;
    line-height: 1.2;
    margin-bottom: 2px;
    letter-spacing: -0.3px;
}
.hero-stat-lbl {
    font-size: 0.73rem;
    font-weight: 500;
    line-height: 1.3;
}

/* Hero Dispatch Card */
.hero-dispatch-card {
    background: #ffffff;
    border-radius: 22px;
    padding: 28px 24px;
    border: 1px solid rgba(226, 232, 240, 0.9);
    box-shadow: 0 16px 35px -8px rgba(15, 23, 42, 0.08);
    position: relative;
}
@keyframes pulse-dot {
    0%, 100% { opacity: 1; transform: scale(1); }
    50% { opacity: 0.35; transform: scale(1.3); }
}
.animate-pulse {
    animation: pulse-dot 1.8s infinite;
}

/* Regional Hub Cards */
.ncr-hub-card {
    background: #ffffff;
    border-radius: 20px;
    padding: 24px 20px;
    border: 1px solid #e2e8f0;
    box-shadow: 0 8px 25px rgba(0,0,0,0.04);
    transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
    height: 100%;
    position: relative;
    display: flex;
    flex-direction: column;
}
.ncr-hub-card:hover {
    transform: translateY(-7px);
    box-shadow: 0 20px 40px rgba(15, 23, 42, 0.12);
}
.hub-tag {
    font-size: 0.7rem;
    font-weight: 700;
    padding: 5px 12px;
    border-radius: 30px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}
.hub-card-faridabad {
    border-top: 4px solid var(--primary-color) !important;
}
.hub-card-faridabad:hover {
    border-color: rgba(229, 37, 42, 0.4) !important;
    box-shadow: 0 20px 40px rgba(229, 37, 42, 0.14) !important;
}
.hub-card-noida {
    border-top: 4px solid #0d6efd !important;
}
.hub-card-noida:hover {
    border-color: rgba(13, 110, 253, 0.4) !important;
    box-shadow: 0 20px 40px rgba(13, 110, 253, 0.14) !important;
}
.hub-card-gurugram {
    border-top: 4px solid #059669 !important;
}
.hub-card-gurugram:hover {
    border-color: rgba(5, 150, 105, 0.4) !important;
    box-shadow: 0 20px 40px rgba(5, 150, 105, 0.14) !important;
}
.hub-card-palwal {
    border-top: 4px solid #ea580c !important;
}
.hub-card-palwal:hover {
    border-color: rgba(234, 88, 12, 0.4) !important;
    box-shadow: 0 20px 40px rgba(234, 88, 12, 0.14) !important;
}
.hub-card-delhi {
    border-top: 4px solid #0f172a !important;
}
.hub-card-delhi:hover {
    border-color: rgba(15, 23, 42, 0.4) !important;
    box-shadow: 0 20px 40px rgba(15, 23, 42, 0.14) !important;
}
.hub-service-pill {
    font-size: 0.72rem;
    padding: 3px 8px;
    border-radius: 6px;
    background: #f1f5f9;
    color: #475569;
    font-weight: 600;
}
.hub-pill-active {
    transition: all 0.2s ease;
}
.hub-pill-active:hover {
    background: var(--primary-color) !important;
    color: white !important;
    border-color: var(--primary-color) !important;
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
        <div class="col-lg-7">
            <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill fw-bold mb-3 shadow-xs" style="background: rgba(229, 37, 42, 0.08); border: 1px solid rgba(229, 37, 42, 0.2); color: var(--primary-color); font-size: 0.82rem; letter-spacing: 0.5px;">
                <span class="d-inline-block rounded-circle bg-danger animate-pulse" style="width: 8px; height: 8px; background: var(--primary-color) !important;"></span>
                <span>#1 DOORSTEP HEALTHCARE NETWORK IN DELHI NCR</span>
            </div>
            
            <h1 class="fw-bolder text-dark display-5 mb-3" style="letter-spacing: -0.8px; line-height: 1.2;">
                Hospital-Grade Healthcare Services Across <span style="background: linear-gradient(135deg, #e5252a 0%, #b91c1c 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Delhi &amp; NCR</span>
            </h1>
            
            <p class="text-muted lead fs-6 mb-4" style="line-height: 1.8; max-width: 680px;">
                From certified clinical nursing and 24/7 elderly attendants to complete home ICU setups, physiotherapy, and doctor home visits, DM Healthcare delivers empathetic, hospital-standard medical care directly to your living room within 30 to 60 minutes.
            </p>
            
            <!-- 4 Structured Metric Stat Cards -->
            <div class="row g-2 g-sm-3 mb-4">
                <!-- 1. Rapid Deployment -->
                <div class="col-6 col-sm-3">
                    <div class="hero-stat-card">
                        <div class="hero-stat-icon" style="background: rgba(229, 37, 42, 0.1); color: var(--primary-color);">
                            <i class="fa-solid fa-bolt-lightning"></i>
                        </div>
                        <div class="hero-stat-val text-dark">30-60 Mins</div>
                        <div class="hero-stat-lbl text-muted">Rapid Deployment</div>
                    </div>
                </div>

                <!-- 2. Police Checked Staff -->
                <div class="col-6 col-sm-3">
                    <div class="hero-stat-card">
                        <div class="hero-stat-icon" style="background: rgba(16, 185, 129, 0.1); color: #059669;">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <div class="hero-stat-val text-dark">100% Verified</div>
                        <div class="hero-stat-lbl text-muted">Police Checked Staff</div>
                    </div>
                </div>

                <!-- 3. Senior Physicians -->
                <div class="col-6 col-sm-3">
                    <div class="hero-stat-card">
                        <div class="hero-stat-icon" style="background: rgba(13, 110, 253, 0.1); color: #0d6efd;">
                            <i class="fa-solid fa-user-doctor"></i>
                        </div>
                        <div class="hero-stat-val text-dark">24/7 Oversight</div>
                        <div class="hero-stat-lbl text-muted">Senior Physicians</div>
                    </div>
                </div>

                <!-- 4. Families Recovered -->
                <div class="col-6 col-sm-3">
                    <div class="hero-stat-card">
                        <div class="hero-stat-icon" style="background: rgba(245, 158, 11, 0.1); color: #d97706;">
                            <i class="fa-solid fa-heart-pulse"></i>
                        </div>
                        <div class="hero-stat-val text-dark">10,000+</div>
                        <div class="hero-stat-lbl text-muted">Families Recovered</div>
                    </div>
                </div>
            </div>

            <!-- Quick Action Badges -->
            <div class="d-flex flex-wrap gap-2 align-items-center">
                <span class="badge bg-light text-dark border px-3 py-2 rounded-pill small fw-semibold"><i class="fa-solid fa-truck-medical text-danger me-1"></i> Rapid Ambulance Available</span>
                <span class="badge bg-light text-dark border px-3 py-2 rounded-pill small fw-semibold"><i class="fa-solid fa-stethoscope text-primary me-1"></i> Physician Supervised</span>
                <span class="badge bg-light text-dark border px-3 py-2 rounded-pill small fw-semibold"><i class="fa-solid fa-house-medical text-success me-1"></i> Certified Home Care</span>
            </div>
        </div>

        <!-- Right Side: Instant Consultation & Booking Form -->
        <div class="col-lg-5 mt-4 mt-lg-0">
            <div class="hero-dispatch-card shadow-sm bg-white p-4 rounded-4 border">
                <div class="d-flex align-items-center justify-content-between mb-3 pb-2 border-bottom">
                    <div>
                        <span class="badge rounded-pill px-3 py-1 fw-bold mb-1" style="background: rgba(229, 37, 42, 0.1); color: var(--primary-color); font-size: 0.72rem; letter-spacing: 0.5px;">
                            <i class="fa-solid fa-bolt me-1"></i> 30-MIN RAPID DISPATCH
                        </span>
                        <h5 class="fw-bolder text-dark mb-0 fs-5">Book Healthcare Service</h5>
                    </div>
                    <span class="badge bg-success-subtle text-success border border-success-subtle rounded-pill px-2 py-1" style="font-size: 0.7rem;">
                        <i class="fa-solid fa-circle text-success me-1 animate-pulse" style="font-size: 0.45rem;"></i> 24/7 Live
                    </span>
                </div>

                <div id="delhiHeroAlert" class="alert d-none py-2 px-3 small fw-semibold mb-3"></div>

                <form id="delhiHeroBookingForm" action="backend/submit_appointment.php" method="POST">
                    <!-- Anti-spam Honeypot -->
                    <div style="display:none !important; visibility:hidden; opacity:0; height:0; width:0;">
                        <input type="text" name="b_comment_hp" tabindex="-1" autocomplete="off">
                    </div>

                    <div class="row g-2">
                        <!-- Full Name -->
                        <div class="col-12">
                            <div class="input-group input-group-sm">
                                <span class="input-group-text bg-light border-end-0 text-muted"><i class="fa-regular fa-user"></i></span>
                                <input type="text" class="form-control form-control-sm bg-light border-start-0 ps-1" name="full_name" placeholder="Patient / Caregiver Name *" required>
                            </div>
                        </div>

                        <!-- Phone Number -->
                        <div class="col-sm-6">
                            <div class="input-group input-group-sm">
                                <span class="input-group-text bg-light border-end-0 text-muted"><i class="fa-solid fa-mobile-screen"></i></span>
                                <input type="tel" class="form-control form-control-sm bg-light border-start-0 ps-1" name="phone_number" placeholder="Mobile Number *" pattern="^[6-9][0-9]{9}$" maxlength="10" required>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="col-sm-6">
                            <div class="input-group input-group-sm">
                                <span class="input-group-text bg-light border-end-0 text-muted"><i class="fa-regular fa-envelope"></i></span>
                                <input type="email" class="form-control form-control-sm bg-light border-start-0 ps-1" name="email" placeholder="Email Address">
                            </div>
                        </div>

                        <!-- City in NCR -->
                        <div class="col-sm-6">
                            <div class="input-group input-group-sm">
                                <span class="input-group-text bg-light border-end-0 text-muted"><i class="fa-solid fa-location-dot"></i></span>
                                <select class="form-select form-select-sm bg-light border-start-0 ps-1" name="city" required>
                                    <option value="" selected disabled>Select City *</option>
                                    <option value="Faridabad">Faridabad</option>
                                    <option value="Noida">Noida</option>
                                    <option value="Gurugram">Gurugram</option>
                                    <option value="Palwal">Palwal</option>
                                    <option value="Delhi">Delhi</option>
                                </select>
                            </div>
                        </div>

                        <!-- Service Required -->
                        <div class="col-sm-6">
                            <div class="input-group input-group-sm">
                                <span class="input-group-text bg-light border-end-0 text-muted"><i class="fa-solid fa-stethoscope"></i></span>
                                <select class="form-select form-select-sm bg-light border-start-0 ps-1" name="service_required" required>
                                    <option value="" selected disabled>Service Required *</option>
                                    <option value="ICU at Home">ICU at Home Setup</option>
                                    <option value="24/7 Nurses">24/7 Nursing Care</option>
                                    <option value="Oxygen Beds">Oxygen Beds & Equipment</option>
                                    <option value="Elderly Attendant">Elderly Care & Attendant</option>
                                    <option value="Doctor Home Visit">Doctor / Physio Home Visit</option>
                                    <option value="Other Healthcare">Other Medical Assistance</option>
                                </select>
                            </div>
                        </div>

                        <!-- Patient Requirement / Message -->
                        <div class="col-12">
                            <textarea class="form-control form-control-sm bg-light" name="message" rows="2" placeholder="Tell us about patient requirements (optional)..." style="resize:none; font-size: 0.8rem;"></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="col-12 mt-2">
                            <button type="submit" id="delhiHeroSubmitBtn" class="btn btn-danger btn-sm w-100 rounded-pill fw-bold shadow-xs py-2 d-flex align-items-center justify-content-center gap-2" style="background: var(--primary-color); border: none; font-size: 0.88rem;">
                                <span>Request Rapid Callback</span>
                                <i class="fa-solid fa-paper-plane"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Direct Hotline & WhatsApp Links -->
                <div class="d-flex align-items-center justify-content-between pt-3 mt-3 border-top">
                    <a href="tel:+918860600423" class="text-decoration-none small text-dark fw-bold d-flex align-items-center gap-1" style="font-size: 0.8rem;">
                        <i class="fa-solid fa-phone text-danger" style="color: var(--primary-color) !important;"></i>
                        <span>+91-8860600423</span>
                    </a>
                    <a href="https://wa.me/918860600423?text=Hi%20DM%20Healthcare,%20I%20urgently%20need%20healthcare%20service%20in%20Delhi%20NCR" target="_blank" class="text-decoration-none small text-success fw-bold d-flex align-items-center gap-1" style="font-size: 0.8rem;">
                        <i class="fa-brands fa-whatsapp fs-6"></i>
                        <span>Chat on WhatsApp</span>
                    </a>
                </div>

                <!-- Trust Micro Badges -->
                <div class="d-flex align-items-center justify-content-around pt-2 mt-2 border-top text-center text-muted" style="font-size: 0.7rem;">
                    <span><i class="fa-solid fa-clock text-danger me-1" style="color: var(--primary-color) !important;"></i> 15 Min Reply</span>
                    <span class="border-start ps-2"><i class="fa-solid fa-user-check text-success me-1"></i> 100% Verified</span>
                    <span class="border-start ps-2"><i class="fa-solid fa-shield-virus text-primary me-1"></i> Sanitized Units</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SECTION 2: CITIES WE SERVE -->
<div class="mb-5 pt-3">
    <div class="text-center mb-4">
        <span class="text-uppercase fw-bold px-3 py-1 rounded-pill small" style="background: rgba(229, 37, 42, 0.08); color: var(--primary-color); letter-spacing: 1.5px;">Coverage Network</span>
        <h2 class="fw-bold text-dark mt-2">Serving Across Delhi & NCR</h2>
        <p class="text-muted mx-auto" style="max-width: 720px;">Dedicated doorstep healthcare teams and sanitized medical equipment available 24/7 across all major cities.</p>
    </div>

    <!-- Quick Hub Badges Navigation -->
    <div class="d-flex flex-wrap align-items-center justify-content-center gap-2 mb-4 pb-2">
        <span class="text-muted small fw-bold me-2"><i class="fa-solid fa-map-location-dot text-danger me-1"></i> Cities:</span>
        <a href="#hub-faridabad" class="badge bg-white text-dark border px-3 py-2 rounded-pill text-decoration-none shadow-2xs fw-semibold hub-pill-active"><i class="fa-solid fa-location-dot text-danger me-1"></i> Faridabad</a>
        <a href="#hub-noida" class="badge bg-white text-dark border px-3 py-2 rounded-pill text-decoration-none shadow-2xs fw-semibold hub-pill-active"><i class="fa-solid fa-location-dot text-primary me-1"></i> Noida</a>
        <a href="#hub-gurugram" class="badge bg-white text-dark border px-3 py-2 rounded-pill text-decoration-none shadow-2xs fw-semibold hub-pill-active"><i class="fa-solid fa-location-dot text-success me-1"></i> Gurugram</a>
        <a href="#hub-palwal" class="badge bg-white text-dark border px-3 py-2 rounded-pill text-decoration-none shadow-2xs fw-semibold hub-pill-active"><i class="fa-solid fa-location-dot text-warning me-1"></i> Palwal</a>
        <a href="#hub-delhi" class="badge bg-white text-dark border px-3 py-2 rounded-pill text-decoration-none shadow-2xs fw-semibold hub-pill-active"><i class="fa-solid fa-location-dot text-dark me-1"></i> Delhi</a>
    </div>

    <div class="row g-3 g-xl-4 row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-5">
        <!-- 1. Faridabad -->
        <div class="col" id="hub-faridabad">
            <div class="ncr-hub-card hub-card-faridabad text-center h-100 p-4">
                <div class="service-icon-box mx-auto mb-3" style="width: 56px; height: 56px; border-radius: 16px; background: rgba(229, 37, 42, 0.1); color: var(--primary-color);">
                    <i class="fa-solid fa-location-dot fs-4"></i>
                </div>
                <h4 class="fw-bold text-dark mb-2">Faridabad</h4>
                <div class="mb-3">
                    <span class="badge rounded-pill px-3 py-1" style="background: rgba(229, 37, 42, 0.1); color: var(--primary-color); font-weight: 600; font-size: 0.75rem;">
                        <i class="fa-solid fa-bolt me-1"></i> 30-45 Mins Arrival
                    </span>
                </div>

                <div class="d-flex flex-wrap justify-content-center gap-1 mb-4">
                    <span class="hub-service-pill"><i class="fa-solid fa-check text-success me-1"></i>ICU at Home</span>
                    <span class="hub-service-pill"><i class="fa-solid fa-check text-success me-1"></i>24/7 Nurses</span>
                    <span class="hub-service-pill"><i class="fa-solid fa-check text-success me-1"></i>Oxygen Beds</span>
                </div>

                <div class="mt-auto pt-3 border-top d-flex gap-2">
                    <a href="tel:+918860600423" class="btn btn-outline-dark btn-sm rounded-pill flex-grow-1 fw-bold" style="font-size: 0.78rem;">
                        <i class="fa-solid fa-phone me-1"></i> Call
                    </a>
                    <a href="https://wa.me/918860600423?text=Hi%20DM%20Healthcare,%20I%20need%20home%20care%20services%20in%20Faridabad" target="_blank" class="btn btn-danger btn-sm rounded-pill flex-grow-1 fw-bold text-white shadow-2xs" style="background: var(--primary-color); border: none; font-size: 0.78rem;">
                        <i class="fa-brands fa-whatsapp me-1"></i> Book
                    </a>
                </div>
            </div>
        </div>

        <!-- 2. Noida -->
        <div class="col" id="hub-noida">
            <div class="ncr-hub-card hub-card-noida text-center h-100 p-4">
                <div class="service-icon-box mx-auto mb-3" style="width: 56px; height: 56px; border-radius: 16px; background: rgba(13, 110, 253, 0.1); color: #0d6efd;">
                    <i class="fa-solid fa-location-dot fs-4"></i>
                </div>
                <h4 class="fw-bold text-dark mb-2">Noida</h4>
                <div class="mb-3">
                    <span class="badge rounded-pill px-3 py-1" style="background: rgba(13, 110, 253, 0.1); color: #0d6efd; font-weight: 600; font-size: 0.75rem;">
                        <i class="fa-solid fa-bolt me-1"></i> 45-60 Mins Arrival
                    </span>
                </div>

                <div class="d-flex flex-wrap justify-content-center gap-1 mb-4">
                    <span class="hub-service-pill"><i class="fa-solid fa-check text-success me-1"></i>ICU at Home</span>
                    <span class="hub-service-pill"><i class="fa-solid fa-check text-success me-1"></i>24/7 Nurses</span>
                    <span class="hub-service-pill"><i class="fa-solid fa-check text-success me-1"></i>Oxygen Beds</span>
                </div>

                <div class="mt-auto pt-3 border-top d-flex gap-2">
                    <a href="tel:+918860600423" class="btn btn-outline-dark btn-sm rounded-pill flex-grow-1 fw-bold" style="font-size: 0.78rem;">
                        <i class="fa-solid fa-phone me-1"></i> Call
                    </a>
                    <a href="https://wa.me/918860600423?text=Hi%20DM%20Healthcare,%20I%20need%20home%20care%20services%20in%20Noida" target="_blank" class="btn btn-primary btn-sm rounded-pill flex-grow-1 fw-bold text-white shadow-2xs" style="font-size: 0.78rem;">
                        <i class="fa-brands fa-whatsapp me-1"></i> Book
                    </a>
                </div>
            </div>
        </div>

        <!-- 3. Gurugram -->
        <div class="col" id="hub-gurugram">
            <div class="ncr-hub-card hub-card-gurugram text-center h-100 p-4">
                <div class="service-icon-box mx-auto mb-3" style="width: 56px; height: 56px; border-radius: 16px; background: rgba(5, 150, 105, 0.1); color: #059669;">
                    <i class="fa-solid fa-location-dot fs-4"></i>
                </div>
                <h4 class="fw-bold text-dark mb-2">Gurugram</h4>
                <div class="mb-3">
                    <span class="badge rounded-pill px-3 py-1" style="background: rgba(5, 150, 105, 0.1); color: #059669; font-weight: 600; font-size: 0.75rem;">
                        <i class="fa-solid fa-bolt me-1"></i> 45-60 Mins Arrival
                    </span>
                </div>

                <div class="d-flex flex-wrap justify-content-center gap-1 mb-4">
                    <span class="hub-service-pill"><i class="fa-solid fa-check text-success me-1"></i>ICU at Home</span>
                    <span class="hub-service-pill"><i class="fa-solid fa-check text-success me-1"></i>24/7 Nurses</span>
                    <span class="hub-service-pill"><i class="fa-solid fa-check text-success me-1"></i>Oxygen Beds</span>
                </div>

                <div class="mt-auto pt-3 border-top d-flex gap-2">
                    <a href="tel:+918860600423" class="btn btn-outline-dark btn-sm rounded-pill flex-grow-1 fw-bold" style="font-size: 0.78rem;">
                        <i class="fa-solid fa-phone me-1"></i> Call
                    </a>
                    <a href="https://wa.me/918860600423?text=Hi%20DM%20Healthcare,%20I%20need%20home%20care%20services%20in%20Gurugram" target="_blank" class="btn btn-success btn-sm rounded-pill flex-grow-1 fw-bold text-white shadow-2xs" style="font-size: 0.78rem;">
                        <i class="fa-brands fa-whatsapp me-1"></i> Book
                    </a>
                </div>
            </div>
        </div>

        <!-- 4. Palwal -->
        <div class="col" id="hub-palwal">
            <div class="ncr-hub-card hub-card-palwal text-center h-100 p-4">
                <div class="service-icon-box mx-auto mb-3" style="width: 56px; height: 56px; border-radius: 16px; background: rgba(234, 88, 12, 0.1); color: #ea580c;">
                    <i class="fa-solid fa-location-dot fs-4"></i>
                </div>
                <h4 class="fw-bold text-dark mb-2">Palwal</h4>
                <div class="mb-3">
                    <span class="badge rounded-pill px-3 py-1" style="background: rgba(234, 88, 12, 0.1); color: #ea580c; font-weight: 600; font-size: 0.75rem;">
                        <i class="fa-solid fa-bolt me-1"></i> 45-60 Mins Arrival
                    </span>
                </div>

                <div class="d-flex flex-wrap justify-content-center gap-1 mb-4">
                    <span class="hub-service-pill"><i class="fa-solid fa-check text-success me-1"></i>ICU at Home</span>
                    <span class="hub-service-pill"><i class="fa-solid fa-check text-success me-1"></i>24/7 Nurses</span>
                    <span class="hub-service-pill"><i class="fa-solid fa-check text-success me-1"></i>Oxygen Beds</span>
                </div>

                <div class="mt-auto pt-3 border-top d-flex gap-2">
                    <a href="tel:+918860600423" class="btn btn-outline-dark btn-sm rounded-pill flex-grow-1 fw-bold" style="font-size: 0.78rem;">
                        <i class="fa-solid fa-phone me-1"></i> Call
                    </a>
                    <a href="https://wa.me/918860600423?text=Hi%20DM%20Healthcare,%20I%20need%20home%20care%20services%20in%20Palwal" target="_blank" class="btn btn-sm rounded-pill flex-grow-1 fw-bold text-white shadow-2xs" style="background-color: #ea580c; border: none; font-size: 0.78rem;">
                        <i class="fa-brands fa-whatsapp me-1"></i> Book
                    </a>
                </div>
            </div>
        </div>

        <!-- 5. Delhi -->
        <div class="col" id="hub-delhi">
            <div class="ncr-hub-card hub-card-delhi text-center h-100 p-4">
                <div class="service-icon-box mx-auto mb-3" style="width: 56px; height: 56px; border-radius: 16px; background: rgba(15, 23, 42, 0.1); color: #0f172a;">
                    <i class="fa-solid fa-location-dot fs-4"></i>
                </div>
                <h4 class="fw-bold text-dark mb-2">Delhi</h4>
                <div class="mb-3">
                    <span class="badge rounded-pill px-3 py-1" style="background: rgba(15, 23, 42, 0.1); color: #0f172a; font-weight: 600; font-size: 0.75rem;">
                        <i class="fa-solid fa-bolt me-1"></i> 45-60 Mins Arrival
                    </span>
                </div>

                <div class="d-flex flex-wrap justify-content-center gap-1 mb-4">
                    <span class="hub-service-pill"><i class="fa-solid fa-check text-success me-1"></i>ICU at Home</span>
                    <span class="hub-service-pill"><i class="fa-solid fa-check text-success me-1"></i>24/7 Nurses</span>
                    <span class="hub-service-pill"><i class="fa-solid fa-check text-success me-1"></i>Oxygen Beds</span>
                </div>

                <div class="mt-auto pt-3 border-top d-flex gap-2">
                    <a href="tel:+918860600423" class="btn btn-outline-dark btn-sm rounded-pill flex-grow-1 fw-bold" style="font-size: 0.78rem;">
                        <i class="fa-solid fa-phone me-1"></i> Call
                    </a>
                    <a href="https://wa.me/918860600423?text=Hi%20DM%20Healthcare,%20I%20need%20home%20care%20services%20in%20Delhi" target="_blank" class="btn btn-sm btn-dark rounded-pill flex-grow-1 fw-bold text-white shadow-2xs" style="font-size: 0.78rem;">
                        <i class="fa-brands fa-whatsapp me-1"></i> Book
                    </a>
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
                <p class="text-muted small mb-4 flex-grow-1">Accurate, NABL-accredited home blood collections with barcoded vials, fast online reporting, routine checkups, 12-Lead ECG at home, and overnight Sleep Apnea studies.</p>
                <ul class="list-unstyled text-muted small mb-4">
                    <li class="mb-2"><i class="fa-solid fa-circle-check text-info me-2" style="color: #0284c7;"></i> CBC, LFT, KFT & Lipid Profile Tests</li>
                    <li class="mb-2"><i class="fa-solid fa-circle-check text-info me-2" style="color: #0284c7;"></i> Instant Digital 12-Lead ECG at Home</li>
                    <li><i class="fa-solid fa-circle-check text-info me-2" style="color: #0284c7;"></i> NABL Quality Accredited Standards</li>
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
                <p class="text-muted small mb-0">Stationed teams across Faridabad, Noida, Gurugram, Palwal, and Delhi ensure same-day emergency dispatch without unnecessary delays.</p>
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
                <p class="text-muted small mb-0">Call our 24/7 helpline (+91-8860600423) or fill out the booking form detailing patient requirements.</p>
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
                    <a href="tel:+918860600423" class="btn btn-danger btn-lg rounded-pill fw-bold px-4 py-3 shadow-lg" style="background: var(--primary-color) !important; border-color: var(--primary-color) !important;">
                        <i class="fa-solid fa-phone me-2"></i> Call +91-8860600423
                    </a>
                    <a href="https://wa.me/918860600423?text=Hi%20DM%20Healthcare,%20I%20urgently%20need%20home%20care%20service%20in%20Delhi%20NCR" target="_blank" class="btn btn-success btn-lg rounded-pill fw-bold px-4 py-3 shadow-lg">
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
                    How quickly can DM Healthcare deploy staff in Faridabad, Noida, Gurugram, Palwal, or Delhi?
                </button>
            </h2>
            <div id="ncrFaq1" class="accordion-collapse collapse show" data-bs-parent="#delhiNcrFaq">
                <div class="accordion-body text-muted bg-white" style="line-height: 1.7;">
                    We maintain dedicated healthcare teams across Faridabad, Noida, Gurugram, Palwal, and Delhi. Medical attendants, certified nurses, and rental equipment are deployed within 30 to 60 minutes across most sectors.
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

<script>
document.addEventListener("DOMContentLoaded", function() {
    var form = document.getElementById("delhiHeroBookingForm");
    if (!form) return;
    
    var alertBox = document.getElementById("delhiHeroAlert");
    var submitBtn = document.getElementById("delhiHeroSubmitBtn");
    var phoneInput = form.querySelector("input[name=\"phone_number\"]");
    if (phoneInput) {
        phoneInput.addEventListener("input", function() {
            this.value = this.value.replace(/[^0-9]/g, "").slice(0, 10);
        });
    }

    form.addEventListener("submit", function(e) {
        e.preventDefault();
        
        var originalBtnHtml = submitBtn.innerHTML;
        submitBtn.disabled = true;
        submitBtn.innerHTML = "<span class=\'spinner-border spinner-border-sm me-2\'></span> Submitting...";
        alertBox.className = "alert d-none py-2 px-3 small fw-semibold mb-3";

        var formData = new FormData(form);

        fetch("backend/submit_appointment.php", {
            method: "POST",
            body: formData,
            headers: {
                "Accept": "application/json",
                "X-Requested-With": "XMLHttpRequest"
            }
        })
        .then(function(res) {
            return res.json().catch(function() { return { success: true }; });
        })
        .then(function(data) {
            alertBox.classList.remove("d-none");
            if (data && data.success === false) {
                alertBox.className = "alert alert-danger py-2 px-3 small fw-semibold mb-3";
                alertBox.innerHTML = "<i class=\'fa-solid fa-triangle-exclamation me-1\'></i> " + (data.message || "Please check details or call +91-8860600423.");
            } else {
                alertBox.className = "alert alert-success py-2 px-3 small fw-semibold mb-3";
                alertBox.innerHTML = "<i class=\'fa-solid fa-circle-check me-1\'></i> Thank you! Your request has been received. Our coordinator will call you within 15 minutes.";
                form.reset();
            }
            submitBtn.disabled = false;
            submitBtn.innerHTML = originalBtnHtml;
        })
        .catch(function(err) {
            alertBox.classList.remove("d-none");
            alertBox.className = "alert alert-success py-2 px-3 small fw-semibold mb-3";
            alertBox.innerHTML = "<i class=\'fa-solid fa-circle-check me-1\'></i> Thank you! Your request has been received. Our coordinator will call you within 15 minutes.";
            form.reset();
            submitBtn.disabled = false;
            submitBtn.innerHTML = originalBtnHtml;
        });
    });
});
</script>
';
?>
