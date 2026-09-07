<section class="appointment-section py-5 position-relative" style="background-color: #f8fafc;" id="appointment">
    <div class="container py-4">
        <div class="card border-0 shadow-lg overflow-hidden" style="border-radius: 24px; border: 1px solid rgba(226, 232, 240, 0.8) !important;">
            <div class="row g-0">
                <!-- LEFT PANEL (42%) -->
                <div class="col-lg-5 text-white position-relative d-flex flex-column justify-content-between p-4 p-md-5" style="background: linear-gradient(135deg, #0F172A 0%, #1E293B 100%);">
                    
                    <!-- Background subtle dots -->
                    <div class="position-absolute top-0 start-0 w-100 h-100 opacity-10" style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 24px 24px; pointer-events: none;"></div>
                    
                    <div class="position-relative z-1">
                        <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill mb-3" style="background: rgba(229, 37, 42, 0.25); color: #FF8082; font-size: 0.75rem; font-weight: 700; letter-spacing: 0.5px;">
                            <span class="spinner-grow spinner-grow-sm text-danger" style="width: 8px; height: 8px;" role="status"></span>
                            30-MIN RAPID DISPATCH
                        </div>

                        <h2 class="fw-bolder mb-3 text-white" style="font-size: clamp(1.8rem, 3vw, 2.3rem); letter-spacing: -0.5px;">
                            Book Medical Care <br><span style="color: var(--primary-color);">At Your Home</span>
                        </h2>

                        <p class="fs-6 mb-4 text-light" style="line-height: 1.6; opacity: 0.88;">
                            Connect with verified doctors, critical care nurses, and medical attendants across Delhi NCR. We respond within 30 minutes.
                        </p>
                        
                        <!-- Emergency Hotline Box -->
                        <div class="p-3 mb-4 rounded-4 shadow-sm" style="background: rgba(255, 255, 255, 0.08); border-left: 4px solid var(--primary-color); backdrop-filter: blur(10px);">
                            <div class="d-flex align-items-center">
                                <div class="bg-white rounded-circle d-flex align-items-center justify-content-center me-3 shadow-sm" style="width: 46px; height: 46px; min-width: 46px;">
                                    <i class="fa-solid fa-phone-volume fs-5" style="color: var(--primary-color);"></i>
                                </div>
                                <div>
                                    <small class="d-block fw-bold text-uppercase text-light mb-0" style="font-size: 10px; letter-spacing: 1px; opacity: 0.8;">24/7 Priority Emergency Helpline</small>
                                    <a href="tel:+918860600423" class="fs-5 fw-bolder text-white text-decoration-none hover-red">+91 88606 00423</a>
                                </div>
                            </div>
                        </div>

                        <!-- Trust Checklist -->
                        <div class="d-flex flex-column gap-3 mb-4">
                            <div class="d-flex align-items-center gap-3">
                                <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 28px; height: 28px; min-width: 28px; background: rgba(229, 37, 42, 0.2); color: #FF8082;">
                                    <i class="fa-solid fa-check fs-6"></i>
                                </div>
                                <span class="fw-semibold text-white fs-6">100% Background Verified Medical Staff</span>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 28px; height: 28px; min-width: 28px; background: rgba(229, 37, 42, 0.2); color: #FF8082;">
                                    <i class="fa-solid fa-check fs-6"></i>
                                </div>
                                <span class="fw-semibold text-white fs-6">Daily Doctor-Monitored Vitals & Logs</span>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 28px; height: 28px; min-width: 28px; background: rgba(229, 37, 42, 0.2); color: #FF8082;">
                                    <i class="fa-solid fa-check fs-6"></i>
                                </div>
                                <span class="fw-semibold text-white fs-6">Sterilized ICU & Respiratory Equipment</span>
                            </div>
                        </div>
                    </div>

                    <!-- Small illustrative footer banner -->
                    <div class="position-relative d-none d-lg-block z-1 pt-3">
                        <div class="p-3 rounded-3 d-flex align-items-center gap-3" style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.1);">
                            <img src="assets/images/downloaded_img_13.jpg" alt="Medical Team" class="rounded-3 shadow-sm" style="width: 56px; height: 56px; object-fit: cover;" loading="lazy">
                            <div>
                                <small class="text-white-50 d-block" style="font-size: 0.75rem;">Delhi NCR Network</small>
                                <span class="fw-bold text-white small">Serving Delhi, Noida, Gurugram & Faridabad</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- RIGHT PANEL (58%) -->
                <div class="col-lg-7 bg-white p-4 p-md-5">
                    <div class="mb-4">
                        <span class="badge px-3 py-1 rounded-pill fw-bold mb-2" style="background: rgba(229, 37, 42, 0.08); color: var(--primary-color); font-size: 0.75rem;">ONLINE BOOKING</span>
                        <h3 class="fw-bolder mb-1" style="color: var(--secondary-color);">Schedule Your Consultation</h3>
                        <p class="text-muted small mb-0">Fill in your requirements below and our medical team will call you within 30 minutes.</p>
                    </div>
                    
                    <form action="backend/submit_appointment.php" method="POST" class="appointment-form-inner">
                        <!-- Anti-spam Honeypot (Invisible to humans) -->
                        <div style="display:none !important; visibility:hidden; opacity:0; height:0; width:0;">
                            <input type="text" name="b_comment_hp" tabindex="-1" autocomplete="off">
                        </div>

                        <div class="row g-3">
                            <!-- Full Name -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="fullName" name="full_name" placeholder="Full Name" required>
                                    <label for="fullName"><i class="fa-regular fa-user me-2 text-muted"></i>Patient / Caller Name *</label>
                                </div>
                            </div>
                            
                            <!-- Phone Number -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="tel" class="form-control" id="phoneNumber" name="phone_number" placeholder="Phone Number" pattern="^[6-9][0-9]{9}$" minlength="10" maxlength="10" title="Please enter a valid 10-digit Indian mobile number" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);" required>
                                    <label for="phoneNumber"><i class="fa-solid fa-mobile-screen me-2 text-muted"></i>Mobile Number *</label>
                                </div>
                            </div>

                            <!-- Email Address -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="emailAddr" name="email" placeholder="Email Address">
                                    <label for="emailAddr"><i class="fa-regular fa-envelope me-2 text-muted"></i>Email Address (Optional)</label>
                                </div>
                            </div>

                            <!-- Service Required -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select" id="serviceReq" name="service_required" required>
                                        <option value="" selected disabled>Select Required Service...</option>
                                        <option value="nursing">Home Nursing (12h / 24h)</option>
                                        <option value="elderly">Elderly Care & Attendant</option>
                                        <option value="icu-care">ICU & Critical Care Setup</option>
                                        <option value="physio">Physiotherapy at Home</option>
                                        <option value="equipment">Medical Equipment on Rent</option>
                                        <option value="diagnostics">Diagnostics & Lab Tests</option>
                                        <option value="doctor-visit">Doctor Home Visit</option>
                                        <option value="other">Other Medical Assistance</option>
                                    </select>
                                    <label for="serviceReq"><i class="fa-solid fa-stethoscope me-2 text-muted"></i>Service Required *</label>
                                </div>
                            </div>

                            <!-- Preferred Date -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="date" class="form-control" id="prefDate" name="pref_date" required>
                                    <label for="prefDate"><i class="fa-regular fa-calendar me-2 text-muted"></i>Preferred Date *</label>
                                </div>
                            </div>

                            <!-- Preferred Time -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="time" class="form-control" id="prefTime" name="pref_time" required>
                                    <label for="prefTime"><i class="fa-regular fa-clock me-2 text-muted"></i>Preferred Time *</label>
                                </div>
                            </div>

                            <!-- Message / Clinical Needs -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" id="messageDetails" name="message" placeholder="Message" style="height: 100px; resize: none;"></textarea>
                                    <label for="messageDetails"><i class="fa-regular fa-comment-dots me-2 text-muted"></i>Patient Condition / Specific Requirements...</label>
                                </div>
                            </div>
                            
                            <!-- Submit & Call Buttons -->
                            <div class="col-12 mt-3 pt-2 d-flex flex-column flex-sm-row gap-3">
                                <button type="submit" class="btn btn-primary btn-lg fw-bold shadow-sm flex-grow-1 d-flex align-items-center justify-content-center gap-2 transition" style="border-radius: 12px; padding: 14px; background: var(--primary-color); border: none;">
                                    Confirm Appointment <i class="fa-solid fa-arrow-right"></i>
                                </button>
                                <a href="tel:+918860600423" class="btn btn-outline-danger btn-lg fw-bold flex-grow-1 d-flex align-items-center justify-content-center gap-2 transition" style="border-radius: 12px; padding: 14px; border: 2px solid var(--primary-color);">
                                    <i class="fa-solid fa-phone"></i> Direct Call
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .appointment-form-inner .form-control,
    .appointment-form-inner .form-select {
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        background-color: #f8fafc;
        transition: all 0.3s ease;
    }
    
    .appointment-form-inner .form-control:focus, 
    .appointment-form-inner .form-select:focus {
        border-color: var(--primary-color) !important;
        box-shadow: 0 0 0 4px rgba(229, 37, 42, 0.15) !important;
        background-color: #fff !important;
    }

    .appointment-form-inner label {
        color: #64748b;
        font-weight: 500;
        font-size: 0.92rem;
    }

    .appointment-form-inner .btn-primary:hover {
        background: var(--primary-hover) !important;
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(229, 37, 42, 0.25) !important;
    }
    
    .appointment-form-inner .btn-outline-danger:hover {
        background: var(--primary-color) !important;
        color: #fff !important;
        transform: translateY(-2px);
    }
</style>
