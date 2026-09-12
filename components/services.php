<style>
.services-section-modern {
    background: #ffffff;
    position: relative;
}
.service-card-modern {
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
.service-card-modern:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(229, 37, 42, 0.12);
    border-color: rgba(229, 37, 42, 0.4);
}
.service-icon-box {
    width: 68px;
    height: 68px;
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.8rem;
    transition: all 0.3s ease;
    margin-bottom: 18px;
}
.service-card-modern:hover .service-icon-box {
    transform: scale(1.08) rotate(3deg);
}
.service-pill-tag {
    font-size: 0.72rem;
    font-weight: 700;
    padding: 4px 12px;
    border-radius: 30px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    display: inline-block;
    margin-bottom: 12px;
}
</style>

<section class="services-section-modern py-5" id="services">
    <div class="container py-lg-4">
        <div class="text-center mb-5">
            <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill fw-bold mb-2" style="background: rgba(229, 37, 42, 0.08); border: 1px solid rgba(229, 37, 42, 0.2); color: var(--primary-color); font-size: 0.8rem; letter-spacing: 1px;">
                <i class="fa-solid fa-stethoscope"></i>
                <span>WHAT WE DO</span>
            </div>
            <h2 class="fw-bolder display-6 mb-3" style="color: var(--secondary-color);">
                Our Core <span style="color: var(--primary-color);">Healthcare Services</span>
            </h2>
            <div style="width: 60px; height: 4px; background: var(--primary-color); margin: 0 auto 16px auto; border-radius: 2px;"></div>
            <p class="text-muted fs-6 mx-auto" style="max-width: 680px;">
                Hospital-grade medical care delivered with compassion and strict clinical oversight right at your doorstep across Delhi NCR, Faridabad & Noida.
            </p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            <!-- Category 1: Home Nursing Care -->
            <div class="col">
                <div class="service-card-modern p-4">
                    <span class="service-pill-tag bg-danger bg-opacity-10 text-danger align-self-start">24/7 GNM / B.Sc</span>
                    <div class="service-icon-box" style="background: rgba(229, 37, 42, 0.1); color: var(--primary-color);">
                        <i class="fa-solid fa-user-nurse"></i>
                    </div>
                    <h4 class="fw-bold text-dark mb-2" style="font-size: 1.22rem;">Home Nursing Care</h4>
                    <p class="small text-muted mb-4 lh-base">Certified GNM & B.Sc nursing staff for post-surgical dressing, IV therapy, injections, catheter, and wound care.</p>
                    <a href="patient-care---general-nursing" class="btn btn-outline-primary rounded-pill px-4 fw-semibold w-100 mt-auto">Book Nurse</a>
                </div>
            </div>

            <!-- Category 2: Attendant & GDA Providing -->
            <div class="col">
                <div class="service-card-modern p-4">
                    <span class="service-pill-tag bg-success bg-opacity-10 text-success align-self-start">100% Verified</span>
                    <div class="service-icon-box" style="background: rgba(16, 185, 129, 0.1); color: #10b981;">
                        <i class="fa-solid fa-hand-holding-medical"></i>
                    </div>
                    <h4 class="fw-bold text-dark mb-2" style="font-size: 1.22rem;">Attendant & GDA Staff</h4>
                    <p class="small text-muted mb-3 lh-base">Hospital-trained General Duty Assistants (GDA) & attendants for 12h/24h bedside patient support & hygiene.</p>
                    <div class="d-flex flex-wrap gap-1 mb-3">
                        <a href="gda-providing" class="badge bg-light text-dark border text-decoration-none" style="font-size: 0.7rem;">GDA Staff</a>
                        <a href="attendant-providing" class="badge bg-light text-dark border text-decoration-none" style="font-size: 0.7rem;">Attendants</a>
                        <a href="patient-attendant" class="badge bg-light text-dark border text-decoration-none" style="font-size: 0.7rem;">Caregiver</a>
                    </div>
                    <a href="gda-providing" class="btn btn-outline-primary rounded-pill px-4 fw-semibold w-100 mt-auto">Book GDA / Attendant</a>
                </div>
            </div>

            <!-- Category 3: Critical & ICU Care -->
            <div class="col">
                <div class="service-card-modern p-4">
                    <span class="service-pill-tag bg-primary bg-opacity-10 text-primary align-self-start">ICU Setup at Home</span>
                    <div class="service-icon-box" style="background: rgba(13, 110, 253, 0.1); color: #0d6efd;">
                        <i class="fa-solid fa-heart-pulse"></i>
                    </div>
                    <h4 class="fw-bold text-dark mb-2" style="font-size: 1.22rem;">Critical & ICU Care</h4>
                    <p class="small text-muted mb-4 lh-base">Advanced at-home critical care setup with ventilators, BiPAP, multipara monitors, and 24/7 ICU nurses.</p>
                    <a href="icu-care---critical-care" class="btn btn-outline-primary rounded-pill px-4 fw-semibold w-100 mt-auto">Book ICU Setup</a>
                </div>
            </div>

            <!-- Category 4: Elder Care -->
            <div class="col">
                <div class="service-card-modern p-4">
                    <span class="service-pill-tag bg-purple bg-opacity-10 text-dark align-self-start" style="background: rgba(147, 51, 234, 0.1); color: #9333ea;">Senior Care</span>
                    <div class="service-icon-box" style="background: rgba(147, 51, 234, 0.1); color: #9333ea;">
                        <i class="fa-solid fa-person-cane"></i>
                    </div>
                    <h4 class="fw-bold text-dark mb-2" style="font-size: 1.22rem;">Elder Care & Assisted</h4>
                    <p class="small text-muted mb-4 lh-base">Compassionate assisted living, daily companionship, mobility help, Alzheimer's care, and medication support.</p>
                    <a href="elder-care---basic-care" class="btn btn-outline-primary rounded-pill px-4 fw-semibold w-100 mt-auto">Book Elder Care</a>
                </div>
            </div>

            <!-- Category 5: Physiotherapy -->
            <div class="col">
                <div class="service-card-modern p-4">
                    <span class="service-pill-tag bg-warning bg-opacity-10 text-dark align-self-start" style="background: rgba(245, 158, 11, 0.1); color: #d97706;">Certified Physio</span>
                    <div class="service-icon-box" style="background: rgba(245, 158, 11, 0.1); color: #f59e0b;">
                        <i class="fa-solid fa-person-walking"></i>
                    </div>
                    <h4 class="fw-bold text-dark mb-2" style="font-size: 1.22rem;">Physiotherapy at Home</h4>
                    <p class="small text-muted mb-4 lh-base">Specialist rehabilitation for stroke recovery, joint replacement rehab, back pain, and geriatric mobility.</p>
                    <a href="physiotherapist" class="btn btn-outline-primary rounded-pill px-4 fw-semibold w-100 mt-auto">Book Physiotherapy</a>
                </div>
            </div>

            <!-- Category 6: Diagnostics at Home -->
            <div class="col">
                <div class="service-card-modern p-4">
                    <span class="service-pill-tag bg-info bg-opacity-10 text-dark align-self-start" style="background: rgba(14, 165, 233, 0.1); color: #0284c7;">75-100 Tests</span>
                    <div class="service-icon-box" style="background: rgba(14, 165, 233, 0.1); color: #0284c7;">
                        <i class="fa-solid fa-microscope"></i>
                    </div>
                    <h4 class="fw-bold text-dark mb-2" style="font-size: 1.22rem;">HealthFit Total Tests</h4>
                    <p class="small text-muted mb-4 lh-base">Asian HealthFit full body checkups (75-100 tests), CBC, LFT, KFT, ECG at home, and doorstep sample collection.</p>
                    <a href="total-test" class="btn btn-outline-primary rounded-pill px-4 fw-semibold w-100 mt-auto">View Packages</a>
                </div>
            </div>

            <!-- Category 7: Medical Equipment -->
            <div class="col">
                <div class="service-card-modern p-4">
                    <span class="service-pill-tag bg-secondary bg-opacity-10 text-dark align-self-start">Equipment & Care Support</span>
                    <div class="service-icon-box" style="background: rgba(100, 116, 139, 0.1); color: #475569;">
                        <i class="fa-solid fa-wheelchair"></i>
                    </div>
                    <h4 class="fw-bold text-dark mb-2" style="font-size: 1.22rem;">Medical Equipment Services</h4>
                    <p class="small text-muted mb-4 lh-base">Hospital motorized beds, BiPAP/CPAP machines, oxygen concentrators, and electric wheelchairs with full home setup and support.</p>
                    <a href="hospital-bed" class="btn btn-outline-primary rounded-pill px-4 fw-semibold w-100 mt-auto">View Equipment</a>
                </div>
            </div>

            <!-- Category 8: Physician / Doctor Visit -->
            <div class="col">
                <div class="service-card-modern p-4">
                    <span class="service-pill-tag bg-danger bg-opacity-10 text-danger align-self-start">Specialist Doctors</span>
                    <div class="service-icon-box" style="background: rgba(229, 37, 42, 0.1); color: var(--primary-color);">
                        <i class="fa-solid fa-user-doctor"></i>
                    </div>
                    <h4 class="fw-bold text-dark mb-2" style="font-size: 1.22rem;">Doctor Consultation</h4>
                    <p class="small text-muted mb-4 lh-base">Senior general physicians & specialists visiting your home for detailed medical assessments and prescriptions.</p>
                    <a href="physician-doctor" class="btn btn-outline-primary rounded-pill px-4 fw-semibold w-100 mt-auto">Book Doctor Visit</a>
                </div>
            </div>
        </div>

        <div class="text-center mt-5 pt-2">
            <a href="#appointment" class="btn btn-primary btn-lg rounded-pill px-5 py-3 fw-bold shadow-sm d-inline-flex align-items-center gap-2">
                <span>Explore All Home Care Services</span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>
