<section class="appointment-section py-5" style="background-color: #f4f7fa;" id="appointment">
    <div class="container py-4">
        <div class="card border-0 shadow-lg overflow-hidden" style="border-radius: 24px;">
            <div class="row g-0">
                <!-- LEFT PANEL (40%) -->
                <div class="col-lg-5 text-white position-relative d-flex flex-column" style="background: linear-gradient(135deg, #0A5BFF 0%, #0036a8 100%); padding: 3rem;">
                    
                    <!-- Background pattern (Subtle opacity) -->
                    <div class="position-absolute top-0 start-0 w-100 h-100 opacity-10" style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 24px 24px; pointer-events: none;"></div>
                    
                    <div class="position-relative z-1">
                        <h2 class="fw-bolder mb-3" style="font-size: 2.2rem; letter-spacing: -0.5px;">Book Your Appointment</h2>
                        <p class="fs-6 mb-4 text-light" style="line-height: 1.6; opacity: 0.9;">Connect with our healthcare experts and receive a callback within 30 minutes.</p>
                        
                        <div class="d-flex align-items-center mb-4 p-3 shadow-sm" style="background: rgba(255, 255, 255, 0.15); border-left: 4px solid #fff; border-radius: 16px; backdrop-filter: blur(10px);">
                            <div class="bg-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 45px; height: 45px; min-width: 45px;">
                                <i class="fa-solid fa-phone-volume fs-5" style="color: #0A5BFF;"></i>
                            </div>
                            <div>
                                <small class="d-block fw-bold text-uppercase text-light mb-1" style="font-size: 10px; letter-spacing: 1px;">Emergency Contact</small>
                                <span class="fs-5 fw-bolder text-white">+91-9891989686</span>
                            </div>
                        </div>

                        <!-- Trust Badges -->
                        <div class="d-flex flex-column gap-3 mb-4">
                            <div class="d-flex align-items-center gap-3">
                                <i class="fa-solid fa-circle-check text-white fs-5"></i>
                                <span class="fw-semibold">Certified Professionals</span>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <i class="fa-solid fa-circle-check text-white fs-5"></i>
                                <span class="fw-semibold">24/7 Support</span>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <i class="fa-solid fa-circle-check text-white fs-5"></i>
                                <span class="fw-semibold">Quick Response</span>
                            </div>
                        </div>
                    </div>

                    <!-- Small illustrative image -->
                    <div class="position-relative d-none d-lg-block mt-auto z-1">
                        <img src="assets/images/downloaded_img_13.jpg" alt="Medical Support" class="img-fluid shadow-sm" style="border-radius: 16px; height: 180px; width: 100%; object-fit: cover; border: 2px solid rgba(255,255,255,0.2);" loading="lazy">
                    </div>
                </div>

                <!-- RIGHT PANEL (60%) -->
                <div class="col-lg-7 bg-white" style="padding: 3.5rem;">
                    <h3 class="fw-bolder mb-2" style="color: #1a2b4c;">Schedule Your Consultation</h3>
                    <p class="text-muted mb-4 pb-2 border-bottom">Fill in your details and we'll contact you shortly.</p>
                    
                    <form action="backend/submit_appointment.php" method="POST" class="appointment-form-inner">
                        <div class="row g-3">
                            <!-- Full Name -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-light" id="fullName" name="full_name" placeholder="Full Name" required>
                                    <label for="fullName"><i class="fa-regular fa-user me-2 text-muted"></i>Full Name *</label>
                                </div>
                            </div>
                            
                            <!-- Phone Number -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="tel" class="form-control bg-light" id="phoneNumber" name="phone_number" placeholder="Phone Number" pattern="^[6-9][0-9]{9}$" minlength="10" maxlength="10" title="Please enter a valid 10-digit Indian phone number starting with 6, 7, 8, or 9" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);" required>
                                    <label for="phoneNumber"><i class="fa-solid fa-mobile-screen me-2 text-muted"></i>Phone Number *</label>
                                </div>
                            </div>

                            <!-- Email Address -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control bg-light" id="emailAddr" name="email" placeholder="Email Address">
                                    <label for="emailAddr"><i class="fa-regular fa-envelope me-2 text-muted"></i>Email Address</label>
                                </div>
                            </div>

                            <!-- Service -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select bg-light" id="serviceReq" name="service_required" required>
                                        <option value="" selected disabled>Select a Service...</option>
                                        <option value="nursing">Home Nursing</option>
                                        <option value="elderly">Elderly Care</option>
                                        <option value="physio">Physiotherapy</option>
                                        <option value="equipment">Medical Equipment on Rent</option>
                                    </select>
                                    <label for="serviceReq"><i class="fa-solid fa-stethoscope me-2 text-muted"></i>Service Required *</label>
                                </div>
                            </div>

                            <!-- Date -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="date" class="form-control bg-light" id="prefDate" name="pref_date" required>
                                    <label for="prefDate"><i class="fa-regular fa-calendar me-2 text-muted"></i>Preferred Date</label>
                                </div>
                            </div>

                            <!-- Time -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="time" class="form-control bg-light" id="prefTime" name="pref_time" required>
                                    <label for="prefTime"><i class="fa-regular fa-clock me-2 text-muted"></i>Preferred Time</label>
                                </div>
                            </div>

                            <!-- Message -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control bg-light" id="messageDetails" name="message" placeholder="Message" style="height: 100px; resize: none;"></textarea>
                                    <label for="messageDetails"><i class="fa-regular fa-comment-dots me-2 text-muted"></i>Message / Details</label>
                                </div>
                            </div>
                            
                            <!-- Buttons -->
                            <div class="col-12 mt-4 pt-2 d-flex flex-column flex-sm-row gap-3">
                                <button type="submit" class="btn btn-primary btn-lg fw-bold shadow-sm flex-grow-1 d-flex align-items-center justify-content-center gap-2 transition" style="border-radius: 12px; padding: 14px; background: #0A5BFF; border: none;">
                                    Submit <i class="fa-solid fa-arrow-right"></i>
                                </button>
                                <a href="tel:+919891989686" class="btn btn-outline-primary btn-lg fw-bold flex-grow-1 d-flex align-items-center justify-content-center gap-2 transition" style="border-radius: 12px; padding: 14px; border: 2px solid #0A5BFF; color: #0A5BFF;">
                                    Call Now <i class="fa-solid fa-phone"></i>
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
        transition: all 0.3s ease;
    }
    
    .appointment-form-inner .form-control:focus, 
    .appointment-form-inner .form-select:focus {
        border-color: #0A5BFF !important;
        box-shadow: 0 0 0 4px rgba(10, 91, 255, 0.15) !important;
        background-color: #fff !important;
    }

    .appointment-form-inner label {
        color: #64748b;
        font-weight: 500;
        font-size: 0.95rem;
    }

    .appointment-form-inner .btn-primary:hover {
        background: #0046d5 !important;
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(10, 91, 255, 0.25) !important;
    }
    
    .appointment-form-inner .btn-outline-primary:hover {
        background: rgba(10, 91, 255, 0.05) !important;
        transform: translateY(-2px);
    }
</style>

