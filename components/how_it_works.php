<section class="how-it-works-section py-5 bg-light" id="how-it-works" style="position: relative;">
    <!-- Background element -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 50%; background: var(--bg-gray); z-index: 0;"></div>
    
    <div class="container py-5" style="position: relative; z-index: 1;">
        <div class="text-center mb-5">
            <span class="text-uppercase fw-bold text-secondary mb-2 d-block" style="letter-spacing: 1.5px; font-size: 0.85rem;">Simple Process</span>
            <h2 class="section-title fw-bolder mb-3" style="color: var(--primary-color); font-size: 2.5rem;">How It Works</h2>
            <div style="width: 60px; height: 4px; background: var(--secondary-color); margin: 0 auto 20px auto; border-radius: 2px;"></div>
            <p class="section-subtitle text-muted fs-6 mx-auto" style="max-width: 600px;">Experience world-class medical care in the comfort of your home. A seamless process designed for your peace of mind.</p>
        </div>

        <div class="row text-center g-4 position-relative timeline-container">
            <!-- Connecting Line for Desktop -->
            <div class="d-none d-lg-block position-absolute" style="top: 45px; left: 10%; right: 10%; height: 2px; border-top: 2px dashed rgba(19, 159, 149, 0.3); z-index: 0;"></div>

            <!-- Step 1 -->
            <div class="col-sm-6 col-lg-3 position-relative z-1">
                <div class="step-card">
                    <div class="step-icon-wrapper mx-auto mb-4 d-flex align-items-center justify-content-center bg-white shadow" style="width: 90px; height: 90px; border-radius: 50%; border: 4px solid var(--bg-gray);">
                        <i class="fa-solid fa-phone-flip fs-2" style="color: var(--primary-color);"></i>
                    </div>
                    <div class="step-content p-4 bg-white rounded-4 shadow-sm">
                        <div class="step-number mb-2 fw-bolder" style="color: var(--secondary-color); opacity: 0.5; font-size: 1.5rem;">01</div>
                        <h5 class="fw-bold mb-3 text-dark">Contact Us</h5>
                        <p class="text-muted small mb-0">Call us or book an appointment online to discuss your specific needs.</p>
                    </div>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="col-sm-6 col-lg-3 position-relative z-1">
                <div class="step-card">
                    <div class="step-icon-wrapper mx-auto mb-4 d-flex align-items-center justify-content-center bg-white shadow" style="width: 90px; height: 90px; border-radius: 50%; border: 4px solid var(--bg-gray);">
                        <i class="fa-solid fa-stethoscope fs-2" style="color: var(--primary-color);"></i>
                    </div>
                    <div class="step-content p-4 bg-white rounded-4 shadow-sm">
                        <div class="step-number mb-2 fw-bolder" style="color: var(--secondary-color); opacity: 0.5; font-size: 1.5rem;">02</div>
                        <h5 class="fw-bold mb-3 text-dark">Assessment</h5>
                        <p class="text-muted small mb-0">Our medical expert evaluates the patient's condition and environment.</p>
                    </div>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="col-sm-6 col-lg-3 position-relative z-1">
                <div class="step-card">
                    <div class="step-icon-wrapper mx-auto mb-4 d-flex align-items-center justify-content-center bg-white shadow" style="width: 90px; height: 90px; border-radius: 50%; border: 4px solid var(--bg-gray);">
                        <i class="fa-solid fa-user-nurse fs-2" style="color: var(--primary-color);"></i>
                    </div>
                    <div class="step-content p-4 bg-white rounded-4 shadow-sm">
                        <div class="step-number mb-2 fw-bolder" style="color: var(--secondary-color); opacity: 0.5; font-size: 1.5rem;">03</div>
                        <h5 class="fw-bold mb-3 text-dark">Care Delivery</h5>
                        <p class="text-muted small mb-0">We deploy the right certified staff and setup required medical equipment.</p>
                    </div>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="col-sm-6 col-lg-3 position-relative z-1">
                <div class="step-card">
                    <div class="step-icon-wrapper mx-auto mb-4 d-flex align-items-center justify-content-center bg-white shadow" style="width: 90px; height: 90px; border-radius: 50%; border: 4px solid var(--bg-gray);">
                        <i class="fa-solid fa-heart-pulse fs-2" style="color: var(--primary-color);"></i>
                    </div>
                    <div class="step-content p-4 bg-white rounded-4 shadow-sm">
                        <div class="step-number mb-2 fw-bolder" style="color: var(--secondary-color); opacity: 0.5; font-size: 1.5rem;">04</div>
                        <h5 class="fw-bold mb-3 text-dark">Recovery</h5>
                        <p class="text-muted small mb-0">Continuous monitoring ensures fast, safe, and comfortable recovery.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <style>
            .step-card {
                transition: transform 0.3s ease;
            }
            .step-card:hover {
                transform: translateY(-10px);
            }
            .step-icon-wrapper {
                transition: all 0.3s ease;
                position: relative;
                z-index: 2;
            }
            .step-card:hover .step-icon-wrapper {
                background-color: var(--primary-color) !important;
                border-color: rgba(19, 159, 149, 0.2) !important;
            }
            .step-card:hover .step-icon-wrapper i {
                color: white !important;
            }
            .step-content {
                border-top: 3px solid transparent;
                transition: all 0.3s ease;
            }
            .step-card:hover .step-content {
                border-top-color: var(--secondary-color);
                box-shadow: 0 15px 30px rgba(0,0,0,0.08) !important;
            }
        </style>
    </div>
</section>
