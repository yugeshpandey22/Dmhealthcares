<section class="cta-section py-5" style="background-color: #f8fafc;" id="contact">
    <div class="container py-4">
        <div class="card border-0 shadow-lg overflow-hidden" style="border-radius: 20px;">
            <div class="row g-0">
                <!-- Left Content -->
                <div class="col-lg-5 text-white p-5 d-flex flex-column justify-content-center" style="background: linear-gradient(135deg, #1E293B 0%, #0F172A 100%); position: relative;">
                    <!-- Pattern overlay -->
                    <div class="position-absolute top-0 start-0 w-100 h-100 opacity-10" style="background-image: radial-gradient(#fff 1px, transparent 1px); background-size: 20px 20px;"></div>
                    
                    <div class="position-relative z-1">
                        <span class="text-uppercase fw-bold mb-2 d-inline-block px-3 py-1 rounded-pill" style="background: rgba(229, 37, 42, 0.2); color: #FF8082; font-size: 0.75rem; letter-spacing: 1px;">24/7 Home Healthcare</span>
                        <h2 class="fw-bold mb-3 display-6">Need Professional Home Healthcare?</h2>
                        <p class="fs-5 mb-4 text-light" style="opacity: 0.9;">Our medical experts are just a call away. Get immediate assistance for your loved ones.</p>
                        
                        <div class="d-flex align-items-center mb-4 p-3 rounded" style="background: rgba(255, 255, 255, 0.08); backdrop-filter: blur(10px); border-left: 4px solid var(--primary-color);">
                            <div class="bg-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px; min-width: 50px;">
                                <i class="fa-solid fa-phone fs-4" style="color: var(--primary-color);"></i>
                            </div>
                            <div>
                                <small class="text-uppercase text-light d-block fw-semibold mb-1" style="font-size: 11px; letter-spacing: 1px;">Emergency Helpline</small>
                                <span class="fs-4 fw-bold text-white">+91-9891989686</span>
                            </div>
                        </div>

                        <div class="d-flex flex-column gap-3 mt-4">
                            <div class="d-flex align-items-center gap-3">
                                <i class="fa-solid fa-check-circle fs-5" style="color: var(--primary-color);"></i>
                                <span>Verified & Certified Caretakers</span>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <i class="fa-solid fa-check-circle fs-5" style="color: var(--primary-color);"></i>
                                <span>Affordable & Transparent Pricing</span>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <i class="fa-solid fa-check-circle fs-5" style="color: var(--primary-color);"></i>
                                <span>Immediate 30-Min Response Time</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Form Content -->
                <div class="col-lg-7 bg-white p-5">
                    <h3 class="fw-bold mb-2" style="color: var(--secondary-color);">Send an Enquiry</h3>
                    <p class="text-muted mb-4 pb-2 border-bottom">We will get back to you within 30 minutes.</p>
                    
                    <form action="backend/submit_appointment.php" method="POST" class="enquiry-form">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-light border-0" id="enqName" name="full_name" placeholder="Full Name" required>
                                    <label for="enqName">Full Name *</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="tel" class="form-control bg-light border-0" id="enqPhone" name="phone_number" placeholder="Phone Number" pattern="^[6-9][0-9]{9}$" minlength="10" maxlength="10" title="Valid 10-digit mobile number required" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);" required>
                                    <label for="enqPhone">Phone Number *</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <select class="form-select bg-light border-0" id="enqService" name="service_required" required>
                                        <option value="" selected disabled>Select Required Service...</option>
                                        <option value="patient-attendant">Patient Attendant / Caretaker</option>
                                        <option value="nursing">Home Nursing Services</option>
                                        <option value="icu-setup">ICU Setup at Home</option>
                                        <option value="physiotherapy">Physiotherapy at Home</option>
                                        <option value="medical-equipment">Medical Equipment Rent/Sale</option>
                                        <option value="other">Other Inquiry</option>
                                    </select>
                                    <label for="enqService">Required Service *</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control bg-light border-0" id="enqMessage" name="message" placeholder="Message" style="height: 120px; resize: none;"></textarea>
                                    <label for="enqMessage">How can we help you? (Optional)</label>
                                </div>
                            </div>
                            <div class="col-12 mt-4 pt-2">
                                <button type="submit" class="btn btn-primary btn-lg w-100 fw-bold shadow d-flex align-items-center justify-content-center gap-2" style="border-radius: 12px; padding: 15px;">
                                    Submit Enquiry <i class="fa-solid fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .enquiry-form .form-control,
    .enquiry-form .form-select {
        border-radius: 10px;
        transition: all 0.3s ease;
    }
    
    .enquiry-form .form-control:focus, 
    .enquiry-form .form-select:focus {
        box-shadow: 0 0 0 4px rgba(229, 37, 42, 0.15) !important;
        background-color: #fff !important;
        border: 1px solid var(--primary-color) !important;
    }

    .enquiry-form label {
        color: #64748b;
        font-weight: 500;
        font-size: 0.95rem;
    }
</style>
