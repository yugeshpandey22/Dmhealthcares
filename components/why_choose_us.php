<style>
.why-us-modern-wrap {
    background: #ffffff;
    position: relative;
    border-top: 1px solid #edf2f7;
    border-bottom: 1px solid #edf2f7;
}
.why-feature-card {
    background: #ffffff;
    border-radius: 22px;
    border: 1px solid rgba(226, 232, 240, 0.9);
    padding: 24px 18px;
    text-align: center;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.02);
    transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1);
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
    overflow: hidden;
}
.why-feature-card:hover {
    transform: translateY(-8px);
    border-color: rgba(229, 37, 42, 0.4);
    box-shadow: 0 16px 35px rgba(229, 37, 42, 0.1);
}
.why-step-num {
    position: absolute;
    top: 10px;
    right: 14px;
    font-size: 1.8rem;
    font-weight: 900;
    color: #f1f5f9;
    font-style: italic;
    line-height: 1;
    pointer-events: none;
    transition: all 0.3s ease;
}
.why-feature-card:hover .why-step-num {
    color: rgba(229, 37, 42, 0.15);
}
.why-icon-bubble {
    width: 60px;
    height: 60px;
    border-radius: 18px;
    background: rgba(229, 37, 42, 0.08);
    color: var(--primary-color);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.6rem;
    margin-bottom: 16px;
    transition: all 0.3s ease;
}
.why-feature-card:hover .why-icon-bubble {
    background: var(--primary-color);
    color: #ffffff;
    transform: scale(1.1);
}
</style>

<section class="why-us-modern-wrap py-5" id="why-us">
    <div class="container py-lg-4">
        <div class="text-center mb-5">
            <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill fw-bold mb-2" style="background: rgba(229, 37, 42, 0.08); border: 1px solid rgba(229, 37, 42, 0.2); color: var(--primary-color); font-size: 0.8rem; letter-spacing: 1px;">
                <i class="fa-solid fa-shield-halved"></i>
                <span>THE DM HEALTHCARE PROMISE</span>
            </div>
            <h2 class="fw-bolder display-6 mb-3" style="color: var(--secondary-color);">
                Why Families Trust <span style="color: var(--primary-color);">DM Healthcare</span>
            </h2>
            <div style="width: 60px; height: 4px; background: var(--primary-color); margin: 0 auto 16px auto; border-radius: 2px;"></div>
            <p class="text-muted fs-6 mx-auto" style="max-width: 650px;">
                Combining hospital excellence, compassionate care, and rapid doorstep response across Delhi NCR.
            </p>
        </div>

        <div class="row g-4 justify-content-center">
            <!-- Feature 1 -->
            <div class="col-6 col-md-4 col-lg-2">
                <div class="why-feature-card">
                    <span class="why-step-num">01</span>
                    <div class="why-icon-bubble">
                        <i class="fa-solid fa-user-doctor"></i>
                    </div>
                    <h6 class="fw-bold text-dark mb-1" style="font-size: 0.95rem;">Rapid Doorstep Visits</h6>
                    <p class="text-muted small mb-0 lh-sm">Arrival in 30-60 mins across NCR</p>
                </div>
            </div>

            <!-- Feature 2 -->
            <div class="col-6 col-md-4 col-lg-2">
                <div class="why-feature-card">
                    <span class="why-step-num">02</span>
                    <div class="why-icon-bubble">
                        <i class="fa-solid fa-clipboard-user"></i>
                    </div>
                    <h6 class="fw-bold text-dark mb-1" style="font-size: 0.95rem;">Free Doctor Guidance</h6>
                    <p class="text-muted small mb-0 lh-sm">Complimentary report review</p>
                </div>
            </div>

            <!-- Feature 3 -->
            <div class="col-6 col-md-4 col-lg-2">
                <div class="why-feature-card">
                    <span class="why-step-num">03</span>
                    <div class="why-icon-bubble">
                        <i class="fa-solid fa-bullseye"></i>
                    </div>
                    <h6 class="fw-bold text-dark mb-1" style="font-size: 0.95rem;">Sterilized ICU Gear</h6>
                    <p class="text-muted small mb-0 lh-sm">Multi-stage sanitized equipment</p>
                </div>
            </div>

            <!-- Feature 4 -->
            <div class="col-6 col-md-4 col-lg-2">
                <div class="why-feature-card">
                    <span class="why-step-num">04</span>
                    <div class="why-icon-bubble">
                        <i class="fa-solid fa-city"></i>
                    </div>
                    <h6 class="fw-bold text-dark mb-1" style="font-size: 0.95rem;">Delhi NCR Network</h6>
                    <p class="text-muted small mb-0 lh-sm">Faridabad, Noida, Gurugram hubs</p>
                </div>
            </div>

            <!-- Feature 5 -->
            <div class="col-6 col-md-4 col-lg-2">
                <div class="why-feature-card">
                    <span class="why-step-num">05</span>
                    <div class="why-icon-bubble">
                        <i class="fa-solid fa-user-shield"></i>
                    </div>
                    <h6 class="fw-bold text-dark mb-1" style="font-size: 0.95rem;">100% Police Verified</h6>
                    <p class="text-muted small mb-0 lh-sm">Trusted, trained caregivers</p>
                </div>
            </div>

            <!-- Feature 6 -->
            <div class="col-6 col-md-4 col-lg-2">
                <div class="why-feature-card">
                    <span class="why-step-num">06</span>
                    <div class="why-icon-bubble">
                        <i class="fa-solid fa-heart-circle-check"></i>
                    </div>
                    <h6 class="fw-bold text-dark mb-1" style="font-size: 0.95rem;">5,000+ Happy Families</h6>
                    <p class="text-muted small mb-0 lh-sm">4.9/5 star Google rating</p>
                </div>
            </div>
        </div>
    </div>
</section>