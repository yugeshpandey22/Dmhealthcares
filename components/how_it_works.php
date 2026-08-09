<section class="how-it-works-section py-5 bg-light" id="how-it-works">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="section-title fw-bolder mb-3" style="color: #1a237e; font-size: 2.5rem;">How It Works</h2>
            <div style="width: 80px; height: 4px; background: var(--secondary-color); margin: 0 auto 20px auto; border-radius: 2px;"></div>
            <p class="section-subtitle text-muted fs-5">Experience world-class medical care in the comfort of your home. A seamless process designed for your peace of mind.</p>
        </div>

        <div class="row text-center g-4">
            <!-- Step 1 -->
            <div class="col-sm-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 hover-card" style="transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <div class="bg-light rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                        <i class="fa-solid fa-phone-flip fs-3" style="color: var(--primary-color);"></i>
                    </div>
                    <h5 class="fw-bold mb-3">1. Contact Us</h5>
                    <p class="text-muted small mb-0">Call us or book an appointment online to discuss your needs.</p>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="col-sm-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 hover-card" style="transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <div class="bg-light rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                        <i class="fa-solid fa-stethoscope fs-3" style="color: var(--primary-color);"></i>
                    </div>
                    <h5 class="fw-bold mb-3">2. Assessment</h5>
                    <p class="text-muted small mb-0">Our medical expert evaluates the patient's specific condition.</p>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="col-sm-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 hover-card" style="transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <div class="bg-light rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                        <i class="fa-solid fa-user-nurse fs-3" style="color: var(--primary-color);"></i>
                    </div>
                    <h5 class="fw-bold mb-3">3. Care Delivery</h5>
                    <p class="text-muted small mb-0">We deploy the right certified staff and medical equipment.</p>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="col-sm-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 hover-card" style="transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <div class="bg-light rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                        <i class="fa-solid fa-heart-pulse fs-3" style="color: var(--primary-color);"></i>
                    </div>
                    <h5 class="fw-bold mb-3">4. Recovery</h5>
                    <p class="text-muted small mb-0">Continuous monitoring ensures fast and safe recovery at home.</p>
                </div>
            </div>
        </div>
        
        <style>
            .hover-card {
                position: relative;
                overflow: hidden;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }
            .hover-card:hover {
                transform: translateY(-10px);
                box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important;
            }
            .hover-card::after {
                content: '';
                position: absolute;
                bottom: 0;
                left: 0;
                width: 100%;
                height: 4px;
                background: var(--primary-color);
                transform: scaleX(0);
                transform-origin: bottom right;
                transition: transform 0.4s ease-out;
            }
            .hover-card:hover::after {
                transform: scaleX(1);
                transform-origin: bottom left;
            }
        </style>
    </div>
</section>
