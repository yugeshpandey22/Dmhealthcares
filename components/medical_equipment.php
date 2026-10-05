<style>
.equipment-card-modern {
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
.equipment-card-modern:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(229, 37, 42, 0.12);
    border-color: rgba(229, 37, 42, 0.35);
}
.equipment-img-holder {
    height: 140px;
    background: radial-gradient(circle at center, rgba(229, 37, 42, 0.04) 0%, #ffffff 100%);
    border: 1px solid #f1f5f9;
    border-radius: 18px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 12px;
    margin-bottom: 16px;
    overflow: hidden;
    transition: all 0.3s ease;
}
.equipment-img-holder img {
    max-height: 100%;
    max-width: 100%;
    object-fit: contain;
    transition: transform 0.35s ease;
}
.equipment-card-modern:hover .equipment-img-holder img {
    transform: scale(1.08);
}
</style>

<section class="medical-equipment-section py-5" style="background-color: #f8fafc;" id="equipment">
    <div class="container py-lg-4">
        <div class="row align-items-center mb-5">
            <div class="col-lg-8">
                <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill fw-bold mb-2" style="background: rgba(229, 37, 42, 0.08); border: 1px solid rgba(229, 37, 42, 0.2); color: var(--primary-color); font-size: 0.8rem; letter-spacing: 1px;">
                    <i class="fa-solid fa-truck-ramp-box"></i>
                    <span>HOME HEALTHCARE & MEDICAL EQUIPMENT ON RENT</span>
                </div>
                <h2 class="fw-bolder display-6 mb-2" style="color: var(--secondary-color);">
                    Medical Equipment <span style="color: var(--primary-color);">Available for Rent</span>
                </h2>
                <div style="width: 60px; height: 4px; background: var(--primary-color); margin-bottom: 16px; border-radius: 2px;"></div>
                <p class="text-muted fs-6 mb-0">
                    High-quality, hospital-grade sanitized medical equipment <strong>available for rent</strong> with professional doorstep delivery and installation in 30-90 minutes across Delhi NCR.
                </p>
            </div>
            <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                <a href="tel:+919319149644" class="btn btn-primary rounded-pill px-4 py-3 fw-bold shadow-sm d-inline-flex align-items-center gap-2">
                    <i class="fa-solid fa-phone"></i>
                    <span>Rent Equipment Today</span>
                </a>
            </div>
        </div>

        <div class="row g-4">
            <!-- Equipment 1 -->
            <div class="col-6 col-lg-3">
                <div class="equipment-card-modern p-4 text-center">
                    <div class="equipment-img-holder">
                        <img src="assets/images/equipment/manual_bed.jpg" alt="Hospital ICU Beds on Rent" loading="lazy">
                    </div>
                    <div class="d-flex justify-content-center gap-1 mb-2">
                        <span class="badge bg-success bg-opacity-10 text-success rounded-pill px-2 py-1 fw-bold" style="font-size: 0.72rem;"><i class="fa-solid fa-check me-1"></i>Available for Rent</span>
                    </div>
                    <span class="badge bg-danger bg-opacity-10 text-danger rounded-pill mb-2 align-self-center px-3" style="font-size: 0.72rem;">ICU & Semi-Fowler</span>
                    <h5 class="fw-bold text-dark mb-2" style="font-size: 1.15rem;">Hospital ICU Beds</h5>
                    <p class="text-muted small mb-3 lh-base">Motorized 3/5 function & manual beds on rent with air mattresses.</p>
                    <a href="hospital-bed" class="btn btn-sm btn-outline-primary rounded-pill fw-semibold w-100 mt-auto">Rent Beds</a>
                </div>
            </div>

            <!-- Equipment 2 -->
            <div class="col-6 col-lg-3">
                <div class="equipment-card-modern p-4 text-center">
                    <div class="equipment-img-holder">
                        <img src="assets/images/equipment/bipap_st.jpg" alt="Oxygen and BiPAP CPAP on Rent" loading="lazy">
                    </div>
                    <div class="d-flex justify-content-center gap-1 mb-2">
                        <span class="badge bg-success bg-opacity-10 text-success rounded-pill px-2 py-1 fw-bold" style="font-size: 0.72rem;"><i class="fa-solid fa-check me-1"></i>Available for Rent</span>
                    </div>
                    <span class="badge bg-primary bg-opacity-10 text-primary rounded-pill mb-2 align-self-center px-3" style="font-size: 0.72rem;">5L / 10L & ResMed</span>
                    <h5 class="fw-bold text-dark mb-2" style="font-size: 1.15rem;">Oxygen & BiPAP/CPAP</h5>
                    <p class="text-muted small mb-3 lh-base">High-purity oxygen concentrators, cylinders & BiPAP/CPAP on rent.</p>
                    <a href="oxygen-concentrator" class="btn btn-sm btn-outline-primary rounded-pill fw-semibold w-100 mt-auto">Rent Machines</a>
                </div>
            </div>

            <!-- Equipment 3 -->
            <div class="col-6 col-lg-3">
                <div class="equipment-card-modern p-4 text-center">
                    <div class="equipment-img-holder">
                        <img src="assets/images/equipment/commode_chair.jpg" alt="Wheelchairs and Scooters on Rent" loading="lazy">
                    </div>
                    <div class="d-flex justify-content-center gap-1 mb-2">
                        <span class="badge bg-success bg-opacity-10 text-success rounded-pill px-2 py-1 fw-bold" style="font-size: 0.72rem;"><i class="fa-solid fa-check me-1"></i>Available for Rent</span>
                    </div>
                    <span class="badge bg-success bg-opacity-10 text-success rounded-pill mb-2 align-self-center px-3" style="font-size: 0.72rem;">Manual & Motorized</span>
                    <h5 class="fw-bold text-dark mb-2" style="font-size: 1.15rem;">Wheelchairs & Scooters</h5>
                    <p class="text-muted small mb-3 lh-base">Electric wheelchairs, commode chairs & NeoBolt scooters on rent.</p>
                    <a href="wheelchairs" class="btn btn-sm btn-outline-primary rounded-pill fw-semibold w-100 mt-auto">Rent Wheelchairs</a>
                </div>
            </div>

            <!-- Equipment 4 -->
            <div class="col-6 col-lg-3">
                <div class="equipment-card-modern p-4 text-center">
                    <div class="equipment-img-holder">
                        <img src="assets/images/equipment/patient_monitor.jpg" alt="Patient Monitors on Rent" loading="lazy">
                    </div>
                    <div class="d-flex justify-content-center gap-1 mb-2">
                        <span class="badge bg-success bg-opacity-10 text-success rounded-pill px-2 py-1 fw-bold" style="font-size: 0.72rem;"><i class="fa-solid fa-check me-1"></i>Available for Rent</span>
                    </div>
                    <span class="badge bg-warning bg-opacity-10 text-dark rounded-pill mb-2 align-self-center px-3" style="font-size: 0.72rem; color: #b45309;">Multipara Vitals</span>
                    <h5 class="fw-bold text-dark mb-2" style="font-size: 1.15rem;">Patient Monitors</h5>
                    <p class="text-muted small mb-3 lh-base">5-para cardiac monitors, syringe pumps & suction apparatus on rent.</p>
                    <a href="icu-equipment" class="btn btn-sm btn-outline-primary rounded-pill fw-semibold w-100 mt-auto">Rent Monitors</a>
                </div>
            </div>
        </div>
    </div>
</section>
