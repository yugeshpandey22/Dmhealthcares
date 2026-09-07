<style>
.treatment-card-modern {
    border-radius: 24px;
    background: #ffffff;
    border: 1px solid rgba(226, 232, 240, 0.9);
    box-shadow: 0 8px 25px rgba(15, 23, 42, 0.04);
    transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1);
    position: relative;
    overflow: hidden;
    height: 100%;
    display: flex;
    flex-direction: column;
}
.treatment-card-modern:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 45px rgba(229, 37, 42, 0.12);
    border-color: rgba(229, 37, 42, 0.35);
}
.treatment-img-box {
    position: relative;
    height: 220px;
    overflow: hidden;
}
.treatment-img-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s ease;
}
.treatment-card-modern:hover .treatment-img-box img {
    transform: scale(1.08);
}
.treatment-img-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 16px 20px;
    background: linear-gradient(to top, rgba(15, 23, 42, 0.92) 0%, rgba(15, 23, 42, 0.4) 60%, transparent 100%);
}
</style>

<section class="specialized-section py-5" style="background-color: #ffffff;" id="treatments">
    <div class="container py-lg-4">
        <div class="text-center mb-5">
            <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill fw-bold mb-2" style="background: rgba(229, 37, 42, 0.08); border: 1px solid rgba(229, 37, 42, 0.2); color: var(--primary-color); font-size: 0.8rem; letter-spacing: 1px;">
                <i class="fa-solid fa-notes-medical"></i>
                <span>TARGETED CLINICAL CARE</span>
            </div>
            <h2 class="fw-bolder display-6 mb-3" style="color: var(--secondary-color);">
                Specialized <span style="color: var(--primary-color);">Treatments & Rehab</span>
            </h2>
            <div style="width: 60px; height: 4px; background: var(--primary-color); margin: 0 auto 16px auto; border-radius: 2px;"></div>
            <p class="text-muted fs-6 mx-auto" style="max-width: 640px;">
                Expert clinical care plans designed specifically for complex medical conditions and recovery phases.
            </p>
        </div>

        <div class="row g-4">
            <!-- Treatment 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="treatment-card-modern">
                    <div class="treatment-img-box">
                        <img src="assets/images/downloaded_img_1.jpg" alt="Orthopedic Rehab" loading="lazy">
                        <div class="treatment-img-overlay">
                            <div class="d-flex align-items-center gap-2 text-white">
                                <i class="fa-solid fa-bone fs-5" style="color: #FF8082;"></i>
                                <h5 class="mb-0 fw-bold">Orthopedic Rehab</h5>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 bg-white d-flex flex-column flex-grow-1">
                        <p class="text-muted small mb-4 lh-base">Comprehensive post-surgery care and physiotherapy to help you regain joint mobility and muscle strength after knee/hip replacements or fractures.</p>
                        <a href="#appointment" class="btn btn-outline-primary rounded-pill px-4 fw-semibold w-100 mt-auto">Book Care Plan</a>
                    </div>
                </div>
            </div>

            <!-- Treatment 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="treatment-card-modern">
                    <div class="treatment-img-box">
                        <img src="assets/images/downloaded_img_2.jpg" alt="Neurological Care" loading="lazy">
                        <div class="treatment-img-overlay">
                            <div class="d-flex align-items-center gap-2 text-white">
                                <i class="fa-solid fa-brain fs-5" style="color: #FF8082;"></i>
                                <h5 class="mb-0 fw-bold">Neurological Care</h5>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 bg-white d-flex flex-column flex-grow-1">
                        <p class="text-muted small mb-4 lh-base">Specialized home care for patients recovering from strokes, managing Parkinson's, paralysis, or dealing with Alzheimer's and Dementia.</p>
                        <a href="#appointment" class="btn btn-outline-primary rounded-pill px-4 fw-semibold w-100 mt-auto">Book Care Plan</a>
                    </div>
                </div>
            </div>

            <!-- Treatment 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="treatment-card-modern">
                    <div class="treatment-img-box">
                        <img src="assets/images/downloaded_img_3.jpg" alt="Cardiac Recovery" loading="lazy">
                        <div class="treatment-img-overlay">
                            <div class="d-flex align-items-center gap-2 text-white">
                                <i class="fa-solid fa-heart-pulse fs-5" style="color: #FF8082;"></i>
                                <h5 class="mb-0 fw-bold">Cardiac Recovery</h5>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 bg-white d-flex flex-column flex-grow-1">
                        <p class="text-muted small mb-4 lh-base">Close vitals monitoring of heart patients post-bypass or angioplasty with ECG setup, oxygen support, and doctor-guided lifestyle coaching.</p>
                        <a href="#appointment" class="btn btn-outline-primary rounded-pill px-4 fw-semibold w-100 mt-auto">Book Care Plan</a>
                    </div>
                </div>
            </div>

            <!-- Treatment 4 -->
            <div class="col-md-6 col-lg-4">
                <div class="treatment-card-modern">
                    <div class="treatment-img-box">
                        <img src="assets/images/downloaded_img_4.jpg" alt="Pulmonary Care" loading="lazy">
                        <div class="treatment-img-overlay">
                            <div class="d-flex align-items-center gap-2 text-white">
                                <i class="fa-solid fa-lungs fs-5" style="color: #FF8082;"></i>
                                <h5 class="mb-0 fw-bold">Pulmonary Care</h5>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 bg-white d-flex flex-column flex-grow-1">
                        <p class="text-muted small mb-4 lh-base">Expert respiratory therapy and home care for COPD, Asthma, Pneumonia, and post-COVID recovery with BiPAP and oxygen support.</p>
                        <a href="#appointment" class="btn btn-outline-primary rounded-pill px-4 fw-semibold w-100 mt-auto">Book Care Plan</a>
                    </div>
                </div>
            </div>

            <!-- Treatment 5 -->
            <div class="col-md-6 col-lg-4">
                <div class="treatment-card-modern">
                    <div class="treatment-img-box">
                        <img src="assets/images/downloaded_img_5.jpg" alt="Post-Surgical Care" loading="lazy">
                        <div class="treatment-img-overlay">
                            <div class="d-flex align-items-center gap-2 text-white">
                                <i class="fa-solid fa-bed-pulse fs-5" style="color: #FF8082;"></i>
                                <h5 class="mb-0 fw-bold">Post-Surgical Care</h5>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 bg-white d-flex flex-column flex-grow-1">
                        <p class="text-muted small mb-4 lh-base">Dedicated surgical wound dressing, catheter management, infection prevention, and daily monitoring for safe at-home recovery.</p>
                        <a href="#appointment" class="btn btn-outline-primary rounded-pill px-4 fw-semibold w-100 mt-auto">Book Care Plan</a>
                    </div>
                </div>
            </div>

            <!-- Treatment 6 -->
            <div class="col-md-6 col-lg-4">
                <div class="treatment-card-modern">
                    <div class="treatment-img-box">
                        <img src="assets/images/downloaded_img_6.jpg" alt="Palliative Care" loading="lazy">
                        <div class="treatment-img-overlay">
                            <div class="d-flex align-items-center gap-2 text-white">
                                <i class="fa-solid fa-hand-holding-heart fs-5" style="color: #FF8082;"></i>
                                <h5 class="mb-0 fw-bold">Palliative Care</h5>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 bg-white d-flex flex-column flex-grow-1">
                        <p class="text-muted small mb-4 lh-base">Compassionate specialized care focusing on symptom control, pain management, and emotional support for chronic and elderly patients.</p>
                        <a href="#appointment" class="btn btn-outline-primary rounded-pill px-4 fw-semibold w-100 mt-auto">Book Care Plan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
