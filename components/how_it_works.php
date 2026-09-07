<style>
.how-it-works-wrap {
    background: radial-gradient(circle at 20% 80%, rgba(229, 37, 42, 0.04) 0%, transparent 60%),
                linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
    position: relative;
}
.step-card-modern {
    background: #ffffff;
    border-radius: 22px;
    border: 1px solid rgba(226, 232, 240, 0.9);
    padding: 28px 22px;
    box-shadow: 0 8px 25px rgba(15, 23, 42, 0.03);
    transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1);
    height: 100%;
    position: relative;
    z-index: 1;
}
.step-card-modern:hover {
    transform: translateY(-8px);
    border-color: rgba(229, 37, 42, 0.4);
    box-shadow: 0 16px 35px rgba(229, 37, 42, 0.1);
}
.step-num-badge {
    width: 56px;
    height: 56px;
    border-radius: 18px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 1.35rem;
    font-weight: 800;
    margin-bottom: 18px;
    box-shadow: 0 6px 16px rgba(0,0,0,0.06);
    transition: all 0.3s ease;
}
.step-card-modern:hover .step-num-badge {
    transform: scale(1.1);
}
</style>

<section class="how-it-works-wrap py-5" id="how-it-works">
    <div class="container py-lg-4">
        <div class="text-center mb-5">
            <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill fw-bold mb-2" style="background: rgba(229, 37, 42, 0.08); border: 1px solid rgba(229, 37, 42, 0.2); color: var(--primary-color); font-size: 0.8rem; letter-spacing: 1px;">
                <i class="fa-solid fa-route"></i>
                <span>SEAMLESS PATIENT JOURNEY</span>
            </div>
            <h2 class="fw-bolder display-6 mb-3" style="color: var(--secondary-color);">
                How Home Healthcare <span style="color: var(--primary-color);">Works</span>
            </h2>
            <div style="width: 60px; height: 4px; background: var(--primary-color); margin: 0 auto 16px auto; border-radius: 2px;"></div>
            <p class="text-muted fs-6 mx-auto" style="max-width: 660px;">
                From your first call to ongoing clinical recovery, we ensure a seamless and comforting healthcare experience at home.
            </p>
        </div>

        <div class="row g-4 position-relative">
            <!-- Step 1 -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="step-card-modern text-center text-lg-start">
                    <div class="step-num-badge" style="background: rgba(229, 37, 42, 0.1); color: var(--primary-color);">
                        <i class="fa-solid fa-phone-volume"></i>
                    </div>
                    <span class="badge bg-danger bg-opacity-10 text-danger rounded-pill px-3 py-1 mb-2 fw-bold" style="font-size: 0.72rem;">STEP 01</span>
                    <h5 class="fw-bold text-dark mb-2" style="font-size: 1.15rem;">Request or Call</h5>
                    <p class="text-muted small mb-0 lh-base">Book online or call our 24/7 care hotline. Our clinical coordinator analyzes your medical requirements.</p>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="step-card-modern text-center text-lg-start">
                    <div class="step-num-badge" style="background: rgba(13, 110, 253, 0.1); color: #0d6efd;">
                        <i class="fa-solid fa-user-doctor"></i>
                    </div>
                    <span class="badge bg-primary bg-opacity-10 text-primary rounded-pill px-3 py-1 mb-2 fw-bold" style="font-size: 0.72rem;">STEP 02</span>
                    <h5 class="fw-bold text-dark mb-2" style="font-size: 1.15rem;">Personalized Plan</h5>
                    <p class="text-muted small mb-0 lh-base">We match verified nurses, caregivers, or calibrated ICU equipment tailored to your doctor's prescriptions.</p>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="step-card-modern text-center text-lg-start">
                    <div class="step-num-badge" style="background: rgba(16, 185, 129, 0.1); color: #10b981;">
                        <i class="fa-solid fa-truck-fast"></i>
                    </div>
                    <span class="badge bg-success bg-opacity-10 text-success rounded-pill px-3 py-1 mb-2 fw-bold" style="font-size: 0.72rem;">STEP 03</span>
                    <h5 class="fw-bold text-dark mb-2" style="font-size: 1.15rem;">Doorstep Deployment</h5>
                    <p class="text-muted small mb-0 lh-base">Staff arrives or medical equipment is set up and sanitized at your home within 30 to 60 minutes.</p>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="step-card-modern text-center text-lg-start">
                    <div class="step-num-badge" style="background: rgba(245, 158, 11, 0.1); color: #f59e0b;">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                    <span class="badge bg-warning bg-opacity-10 text-dark rounded-pill px-3 py-1 mb-2 fw-bold" style="font-size: 0.72rem; color: #b45309;">STEP 04</span>
                    <h5 class="fw-bold text-dark mb-2" style="font-size: 1.15rem;">Continuous Monitoring</h5>
                    <p class="text-muted small mb-0 lh-base">Daily vitals recording, doctor audits, and transparent progress updates shared with your family.</p>
                </div>
            </div>
        </div>
    </div>
</section>
