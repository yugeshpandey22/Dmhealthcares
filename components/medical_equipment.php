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
.equipment-icon-holder {
    height: 130px;
    background: radial-gradient(circle at center, rgba(229, 37, 42, 0.08) 0%, rgba(248, 250, 252, 0.8) 100%);
    border-radius: 18px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 3rem;
    color: var(--primary-color);
    transition: all 0.3s ease;
    margin-bottom: 16px;
}
.equipment-card-modern:hover .equipment-icon-holder {
    transform: scale(1.04);
    background: rgba(229, 37, 42, 0.12);
}
</style>

<section class="medical-equipment-section py-5" style="background-color: #f8fafc;" id="equipment">
    <div class="container py-lg-4">
        <div class="row align-items-center mb-5">
            <div class="col-lg-8">
                <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill fw-bold mb-2" style="background: rgba(229, 37, 42, 0.08); border: 1px solid rgba(229, 37, 42, 0.2); color: var(--primary-color); font-size: 0.8rem; letter-spacing: 1px;">
                    <i class="fa-solid fa-truck-ramp-box"></i>
                    <span>RENT & PURCHASE WITH SAME-DAY SETUP</span>
                </div>
                <h2 class="fw-bolder display-6 mb-2" style="color: var(--secondary-color);">
                    Medical Equipment <span style="color: var(--primary-color);">On Rent & Sale</span>
                </h2>
                <div style="width: 60px; height: 4px; background: var(--primary-color); margin-bottom: 16px; border-radius: 2px;"></div>
                <p class="text-muted fs-6 mb-0">
                    High-quality, hospital-grade sanitized medical equipment delivered and professionally installed in 30-90 minutes across Delhi NCR.
                </p>
            </div>
            <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                <a href="tel:+919319149644" class="btn btn-primary rounded-pill px-4 py-3 fw-bold shadow-sm d-inline-flex align-items-center gap-2">
                    <i class="fa-solid fa-phone"></i>
                    <span>Rent Equipment Now</span>
                </a>
            </div>
        </div>

        <div class="row g-4">
            <!-- Equipment 1 -->
            <div class="col-6 col-lg-3">
                <div class="equipment-card-modern p-4 text-center">
                    <div class="equipment-icon-holder">
                        <i class="fa-solid fa-bed"></i>
                    </div>
                    <span class="badge bg-danger bg-opacity-10 text-danger rounded-pill mb-2 align-self-center px-3" style="font-size: 0.72rem;">ICU & Semi-Fowler</span>
                    <h5 class="fw-bold text-dark mb-2" style="font-size: 1.15rem;">Hospital ICU Beds</h5>
                    <p class="text-muted small mb-3 lh-base">Motorized 3/5 function & manual beds with anti-bedsore air mattresses.</p>
                    <a href="hospital-bed" class="btn btn-sm btn-outline-primary rounded-pill fw-semibold w-100 mt-auto">View Beds</a>
                </div>
            </div>

            <!-- Equipment 2 -->
            <div class="col-6 col-lg-3">
                <div class="equipment-card-modern p-4 text-center">
                    <div class="equipment-icon-holder">
                        <i class="fa-solid fa-lungs"></i>
                    </div>
                    <span class="badge bg-primary bg-opacity-10 text-primary rounded-pill mb-2 align-self-center px-3" style="font-size: 0.72rem;">5L / 10L & ResMed</span>
                    <h5 class="fw-bold text-dark mb-2" style="font-size: 1.15rem;">Oxygen & BiPAP/CPAP</h5>
                    <p class="text-muted small mb-3 lh-base">High-purity oxygen concentrators, cylinders, BiPAP/CPAP & ventilators.</p>
                    <a href="oxygen-concentrator" class="btn btn-sm btn-outline-primary rounded-pill fw-semibold w-100 mt-auto">View Machines</a>
                </div>
            </div>

            <!-- Equipment 3 -->
            <div class="col-6 col-lg-3">
                <div class="equipment-card-modern p-4 text-center">
                    <div class="equipment-icon-holder">
                        <i class="fa-solid fa-wheelchair"></i>
                    </div>
                    <span class="badge bg-success bg-opacity-10 text-success rounded-pill mb-2 align-self-center px-3" style="font-size: 0.72rem;">Manual & Motorized</span>
                    <h5 class="fw-bold text-dark mb-2" style="font-size: 1.15rem;">Wheelchairs & Scooters</h5>
                    <p class="text-muted small mb-3 lh-base">Electric wheelchairs, commode chairs, NeoBolt scooters & walkers.</p>
                    <a href="wheelchairs" class="btn btn-sm btn-outline-primary rounded-pill fw-semibold w-100 mt-auto">View Wheelchairs</a>
                </div>
            </div>

            <!-- Equipment 4 -->
            <div class="col-6 col-lg-3">
                <div class="equipment-card-modern p-4 text-center">
                    <div class="equipment-icon-holder">
                        <i class="fa-solid fa-heart-circle-bolt"></i>
                    </div>
                    <span class="badge bg-warning bg-opacity-10 text-dark rounded-pill mb-2 align-self-center px-3" style="font-size: 0.72rem; color: #b45309;">Multipara Vitals</span>
                    <h5 class="fw-bold text-dark mb-2" style="font-size: 1.15rem;">Patient Monitors</h5>
                    <p class="text-muted small mb-3 lh-base">5-para cardiac monitors, syringe infusion pumps & suction apparatus.</p>
                    <a href="icu-equipment" class="btn btn-sm btn-outline-primary rounded-pill fw-semibold w-100 mt-auto">View Monitors</a>
                </div>
            </div>
        </div>
    </div>
</section>
