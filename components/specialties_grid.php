<style>
.specialties-wrap-modern {
    background: radial-gradient(circle at 80% 20%, rgba(13, 110, 253, 0.04) 0%, transparent 60%),
                linear-gradient(135deg, #f8fafc 0%, #ffffff 100%);
    position: relative;
    border-top: 1px solid #edf2f7;
    border-bottom: 1px solid #edf2f7;
}
.specialty-card-modern {
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
.specialty-card-modern:hover {
    transform: translateY(-8px);
    box-shadow: 0 18px 40px rgba(15, 23, 42, 0.1);
}
.specialty-icon-box {
    width: 52px;
    height: 52px;
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.35rem;
    flex-shrink: 0;
}
</style>

<section class="specialties-wrap-modern py-5" id="specialties">
    <div class="container py-lg-4">
        <div class="text-center mb-5">
            <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill fw-bold mb-2" style="background: rgba(229, 37, 42, 0.08); border: 1px solid rgba(229, 37, 42, 0.2); color: var(--primary-color); font-size: 0.8rem; letter-spacing: 1px;">
                <i class="fa-solid fa-heart-circle-check"></i>
                <span>SPECIALIZED MEDICAL CARE PATHWAYS</span>
            </div>
            <h2 class="fw-bolder display-6 mb-3" style="color: var(--secondary-color);">
                Tailored Medical Care for <span style="color: var(--primary-color);">Every Health Stage</span>
            </h2>
            <div style="width: 60px; height: 4px; background: var(--primary-color); margin: 0 auto 16px auto; border-radius: 2px;"></div>
            <p class="text-muted fs-6 mx-auto" style="max-width: 720px;">
                From post-hospital surgical recovery to chronic condition management, our certified medical pathways ensure dignity, comfort, and clinical accuracy at home.
            </p>
        </div>

        <div class="row g-4">
            <!-- Program 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="specialty-card-modern p-4" style="border-top: 4px solid var(--primary-color) !important;">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="specialty-icon-box" style="background: rgba(229, 37, 42, 0.1); color: var(--primary-color);">
                            <i class="fa-solid fa-heart-pulse"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-0 text-dark">Post-Surgery Recovery</h5>
                            <small class="text-muted">Cardiac & Orthopedic Post-Op</small>
                        </div>
                    </div>
                    <p class="text-muted small mb-4 lh-base">
                        Specialized care after major surgeries. Includes aseptic wound dressing, drain care, pain management, and early mobilization.
                    </p>
                    <a href="#appointment" class="btn btn-sm btn-outline-danger rounded-pill px-4 py-2 fw-bold mt-auto align-self-start">
                        Book Post-Op Care <i class="fa-solid fa-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>

            <!-- Program 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="specialty-card-modern p-4" style="border-top: 4px solid #0284c7 !important;">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="specialty-icon-box" style="background: rgba(2, 132, 199, 0.1); color: #0284c7;">
                            <i class="fa-solid fa-bed-pulse"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-0 text-dark">ICU & Critical Care</h5>
                            <small class="text-muted">Hospital-Grade Home ICU</small>
                        </div>
                    </div>
                    <p class="text-muted small mb-4 lh-base">
                        Intensive care with ventilators, BiPAP, multipara monitors, syringe infusion pumps, and certified critical care nursing staff.
                    </p>
                    <a href="icu-care---critical-care" class="btn btn-sm btn-outline-primary rounded-pill px-4 py-2 fw-bold mt-auto align-self-start">
                        Explore Critical Care <i class="fa-solid fa-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>

            <!-- Program 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="specialty-card-modern p-4" style="border-top: 4px solid #16a34a !important;">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="specialty-icon-box" style="background: rgba(22, 163, 74, 0.1); color: #16a34a;">
                            <i class="fa-solid fa-person-cane"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-0 text-dark">Elder Care & Assisted Living</h5>
                            <small class="text-muted">Dementia & Bedridden Care</small>
                        </div>
                    </div>
                    <p class="text-muted small mb-4 lh-base">
                        Daily personal hygiene, medication reminders, companionship, mobility support, and feeding assistance for seniors at home.
                    </p>
                    <a href="elder-care---basic-care" class="btn btn-sm btn-outline-success rounded-pill px-4 py-2 fw-bold mt-auto align-self-start">
                        Explore Elder Care <i class="fa-solid fa-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>

            <!-- Program 4 -->
            <div class="col-md-6 col-lg-4">
                <div class="specialty-card-modern p-4" style="border-top: 4px solid #9333ea !important;">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="specialty-icon-box" style="background: rgba(147, 51, 234, 0.1); color: #9333ea;">
                            <i class="fa-solid fa-brain"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-0 text-dark">Stroke & Neuro Rehab</h5>
                            <small class="text-muted">Paralysis & Parkinson's Rehab</small>
                        </div>
                    </div>
                    <p class="text-muted small mb-4 lh-base">
                        Evidence-based physiotherapy and neuro-rehabilitation to restore motor functions, muscle tone, balance, and independence.
                    </p>
                    <a href="physiotherapist" class="btn btn-sm btn-outline-secondary rounded-pill px-4 py-2 fw-bold mt-auto align-self-start" style="color: #9333ea; border-color: #9333ea;">
                        Learn Neuro Rehab <i class="fa-solid fa-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>

            <!-- Program 5 -->
            <div class="col-md-6 col-lg-4">
                <div class="specialty-card-modern p-4" style="border-top: 4px solid #ea580c !important;">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="specialty-icon-box" style="background: rgba(234, 88, 12, 0.1); color: #ea580c;">
                            <i class="fa-solid fa-flask-vial"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-0 text-dark">Diagnostics & Lab Tests</h5>
                            <small class="text-muted">Asian HealthFit Packages</small>
                        </div>
                    </div>
                    <p class="text-muted small mb-4 lh-base">
                        Free doorstep sample collection for 75 to 100 tests (CBC, LFT, KFT, Lipid, HbA1c), ECG at home, and same-day digital reports.
                    </p>
                    <a href="total-test" class="btn btn-sm btn-outline-warning rounded-pill px-4 py-2 fw-bold mt-auto align-self-start" style="color: #ea580c; border-color: #ea580c;">
                        View Lab Tests <i class="fa-solid fa-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>

            <!-- Program 6 -->
            <div class="col-md-6 col-lg-4">
                <div class="specialty-card-modern p-4" style="border-top: 4px solid #0d9488 !important;">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="specialty-icon-box" style="background: rgba(13, 148, 136, 0.1); color: #0d9488;">
                            <i class="fa-solid fa-hand-holding-heart"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-0 text-dark">Palliative & Oncology Care</h5>
                            <small class="text-muted">Symptom Relief & Comfort</small>
                        </div>
                    </div>
                    <p class="text-muted small mb-4 lh-base">
                        Empathetic care focusing on comfort, pain management, oxygen support, catheter care, and emotional well-being for terminal patients.
                    </p>
                    <a href="palliative-care" class="btn btn-sm btn-outline-info rounded-pill px-4 py-2 fw-bold mt-auto align-self-start" style="color: #0d9488; border-color: #0d9488;">
                        Get Palliative Care <i class="fa-solid fa-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
