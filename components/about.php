<style>
    .about-wrap-modern {
        background: radial-gradient(circle at top right, rgba(229, 37, 42, 0.04) 0%, transparent 60%),
                    linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
    }
    .about-img-box {
        position: relative;
        border-radius: 28px;
        overflow: hidden;
        box-shadow: 0 20px 45px rgba(15, 23, 42, 0.12);
        border: 4px solid #ffffff;
    }
    .about-img-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        min-height: 460px;
        transition: transform 0.6s ease;
    }
    .about-img-box:hover img {
        transform: scale(1.03);
    }
    .about-floating-card {
        position: absolute;
        bottom: 25px;
        left: 20px;
        right: 20px;
        background: rgba(255, 255, 255, 0.94);
        backdrop-filter: blur(16px);
        padding: 16px 20px;
        border-radius: 20px;
        border: 1px solid rgba(226, 232, 240, 0.9);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
    }
    .about-feature-pill {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 14px;
        padding: 12px 16px;
        transition: all 0.3s ease;
    }
    .about-feature-pill:hover {
        border-color: var(--primary-color);
        box-shadow: 0 8px 20px rgba(229, 37, 42, 0.08);
        transform: translateY(-2px);
    }
</style>

<section class="about-wrap-modern py-5" id="about">
    <div class="container py-lg-4">
        <div class="row align-items-center g-5">
            <!-- Left Side: Professional Image -->
            <div class="col-lg-5">
                <div class="about-img-box">
                    <img src="https://images.unsplash.com/photo-1581594693702-fbdc51b2763b?auto=format&fit=crop&q=80&w=600" alt="DM Healthcare Verified Nurse and Caregiver" loading="lazy">
                    
                    <!-- Floating Accent Card -->
                    <div class="about-floating-card d-flex align-items-center gap-3">
                        <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 50px; height: 50px; background: rgba(229, 37, 42, 0.12); color: var(--primary-color);">
                            <i class="fa-solid fa-hospital-user fs-4"></i>
                        </div>
                        <div>
                            <div class="d-flex align-items-center gap-2">
                                <h6 class="mb-0 fw-bold text-dark">Hospital-Standard Care</h6>
                                <span class="badge bg-success rounded-pill" style="font-size: 0.65rem;">Verified</span>
                            </div>
                            <small class="text-muted">Delivered safely in the comfort of your home</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: Content -->
            <div class="col-lg-7">
                <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill fw-bold mb-3" style="background: rgba(229, 37, 42, 0.08); border: 1px solid rgba(229, 37, 42, 0.2); color: var(--primary-color); font-size: 0.8rem; letter-spacing: 1px;">
                    <i class="fa-solid fa-hand-holding-medical"></i>
                    <span>ABOUT DM HEALTHCARE</span>
                </div>
                
                <h2 class="fw-bolder display-6 mb-3" style="color: var(--secondary-color);">
                    Compassionate Healthcare <span style="color: var(--primary-color);">That Comes Home</span>
                </h2>
                
                <p class="fs-6 text-muted mb-3" style="line-height: 1.8;">
                    <strong>DM Healthcare</strong> brings ICU-trained nurses, verified caregivers, and certified medical equipment straight to your doorstep. We believe that recovery and chronic disease management are faster, safer, and more comforting when patients remain surrounded by their loved ones.
                </p>

                <!-- 3 Feature Pillars -->
                <div class="row g-3 mb-4 mt-2">
                    <div class="col-sm-6">
                        <div class="about-feature-pill d-flex align-items-center gap-3">
                            <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 40px; height: 40px; background: rgba(16, 185, 129, 0.1); color: #10b981;">
                                <i class="fa-solid fa-shield-check fs-5"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0 text-dark" style="font-size: 0.92rem;">100% Police Verified</h6>
                                <small class="text-muted" style="font-size: 0.78rem;">Rigorous background checks</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="about-feature-pill d-flex align-items-center gap-3">
                            <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 40px; height: 40px; background: rgba(13, 110, 253, 0.1); color: #0d6efd;">
                                <i class="fa-solid fa-clock-rotate-left fs-5"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0 text-dark" style="font-size: 0.92rem;">30-60 Min Response</h6>
                                <small class="text-muted" style="font-size: 0.78rem;">Across Delhi, Noida, Faridabad</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="about-feature-pill d-flex align-items-center gap-3">
                            <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 40px; height: 40px; background: rgba(245, 158, 11, 0.1); color: #f59e0b;">
                                <i class="fa-solid fa-heart-pulse fs-5"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0 text-dark" style="font-size: 0.92rem;">Doctor Supervised</h6>
                                <small class="text-muted" style="font-size: 0.78rem;">Daily vitals & treatment audits</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="about-feature-pill d-flex align-items-center gap-3">
                            <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 40px; height: 40px; background: rgba(147, 51, 234, 0.1); color: #9333ea;">
                                <i class="fa-solid fa-bed-pulse fs-5"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0 text-dark" style="font-size: 0.92rem;">ICU & Rent Support</h6>
                                <small class="text-muted" style="font-size: 0.78rem;">Beds, BiPAP, Oxygen delivered</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-wrap align-items-center gap-3 pt-2">
                    <a href="#appointment" class="btn btn-primary rounded-pill px-4 py-3 fw-bold shadow-sm d-inline-flex align-items-center gap-2">
                        <span>Book Care Assessment</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="tel:+918860600423" class="btn btn-outline-dark rounded-pill px-4 py-3 fw-semibold d-inline-flex align-items-center gap-2">
                        <i class="fa-solid fa-phone text-danger"></i>
                        <span>+91 88606 00423</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
