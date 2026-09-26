<?php
// Transparent Rate Cards & Pricing Showcase Component for Homepage
$preview_rates = [
    [
        'title' => 'Bedside Nursing Care',
        'badge' => '12h / 24h Shifts',
        'icon' => 'fa-solid fa-user-nurse',
        'color' => '#e5252a',
        'bg_light' => 'rgba(229, 37, 42, 0.06)',
        'price' => '₹1,200',
        'unit' => '/ 12h shift',
        'monthly' => 'Monthly from ₹32,000',
        'features' => ['ICU / GNM / ANM Nurses', 'Vitals, IV/IM Drips, RT Feed', 'Doctor Clinical Oversight', 'Free Nurse Replacement'],
        'link' => 'rate-cards#nursing'
    ],
    [
        'title' => 'Patient Attendant / Caregiver',
        'badge' => 'Compassionate Care',
        'icon' => 'fa-solid fa-hands-holding-child',
        'color' => '#0284c7',
        'bg_light' => 'rgba(2, 132, 199, 0.06)',
        'price' => '₹800',
        'unit' => '/ 12h shift',
        'monthly' => 'Monthly from ₹22,000',
        'features' => ['Bed-bound Hygiene & Bathing', 'Feeding & Timely Medicines', 'Mobility & Bed-sore Prevention', '100% Police Verified'],
        'link' => 'rate-cards#caregiver'
    ],
    [
        'title' => 'Home ICU Critical Care Setup',
        'badge' => 'Hospital Grade ICU',
        'icon' => 'fa-solid fa-hospital-user',
        'color' => '#7c3aed',
        'bg_light' => 'rgba(124, 58, 237, 0.06)',
        'price' => '₹6,500',
        'unit' => '/ day complete',
        'monthly' => 'Save up to 70% vs Hospital ICU',
        'features' => ['Ventilator / BiPAP + 5-Para Monitor', '24x7 Critical Care ICU Nurse', 'Infusion Pump + Suction Machine', 'Intensivist Tele-Visits'],
        'link' => 'rate-cards#icu'
    ],
    [
        'title' => 'Doorstep Clinical Procedures',
        'badge' => 'Instant Visit',
        'icon' => 'fa-solid fa-syringe',
        'color' => '#059669',
        'bg_light' => 'rgba(5, 150, 105, 0.06)',
        'price' => '₹300',
        'unit' => '/ procedure start',
        'monthly' => 'Sterile & Safe Interventions',
        'features' => ['IM/IV Injections (₹300)', 'IV Drip Infusions (From ₹500)', 'Surgical & Bedsore Dressing (₹800)', 'Catheter & Ryle’s Tube Care'],
        'link' => 'rate-cards#procedures'
    ],
    [
        'title' => 'Physiotherapy & Rehab',
        'badge' => 'BPT / MPT Doctors',
        'icon' => 'fa-solid fa-person-walking-with-cane',
        'color' => '#d97706',
        'bg_light' => 'rgba(217, 119, 6, 0.06)',
        'price' => '₹800',
        'unit' => '/ session',
        'monthly' => '10-Session Pack ₹7,000',
        'features' => ['Paralysis / Stroke Rehab', 'Post-Op Knee/Hip Mobility', 'Chest Physio & Mucus Clearance', 'Sports & Spine Pain Relief'],
        'link' => 'rate-cards#physio'
    ],
    [
        'title' => 'Portable Bedside Digital X-Ray',
        'badge' => 'Bedside Imaging',
        'icon' => 'fa-solid fa-x-ray',
        'color' => '#0891b2',
        'bg_light' => 'rgba(8, 145, 178, 0.06)',
        'price' => '₹3,000',
        'unit' => '/ digital scan',
        'monthly' => 'Instant Radiologist Report',
        'features' => ['No need to lift bed-bound patient', 'High-Res Digital X-Ray at home', 'Same-day Radiologist Report', 'Faridabad, Noida & Delhi NCR'],
        'link' => 'rate-cards#diagnostics'
    ]
];
?>

<style>
.rate-preview-section {
    background: linear-gradient(180deg, #f8fafc 0%, #ffffff 100%);
    position: relative;
}
.rate-preview-card {
    background: #ffffff;
    border-radius: 20px;
    border: 1px solid #e2e8f0;
    box-shadow: 0 4px 20px rgba(15, 23, 42, 0.04);
    transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 100%;
    position: relative;
    overflow: hidden;
}
.rate-preview-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 16px 36px rgba(15, 23, 42, 0.1);
    border-color: #cbd5e1;
}
.rate-preview-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: var(--card-accent, #e5252a);
}
.rate-feature-list {
    list-style: none;
    padding: 0;
    margin: 1rem 0;
}
.rate-feature-list li {
    font-size: 0.85rem;
    color: #475569;
    margin-bottom: 8px;
    display: flex;
    align-items: center;
    gap: 8px;
}
.rate-feature-list li i {
    font-size: 0.8rem;
}
</style>

<section class="rate-preview-section py-5" id="pricing-tariff">
    <div class="container py-lg-4">
        <!-- Section Header -->
        <div class="text-center mb-5">
            <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill fw-bold mb-2" style="background: rgba(229, 37, 42, 0.08); border: 1px solid rgba(229, 37, 42, 0.2); color: var(--primary-color); font-size: 0.8rem; letter-spacing: 1px;">
                <i class="fa-solid fa-receipt"></i>
                <span>100% TRANSPARENT MEDICAL TARIFF</span>
            </div>
            <h2 class="fw-bolder display-6 mb-3" style="color: var(--secondary-color);">
                Official <span style="color: var(--primary-color);">Home Healthcare Rate Cards</span>
            </h2>
            <div style="width: 60px; height: 4px; background: var(--primary-color); margin: 0 auto 16px auto; border-radius: 2px;"></div>
            <p class="text-muted fs-6 mx-auto mb-0" style="max-width: 720px;">
                Hospital-grade bedside nursing, ICU-at-home, doctor home visits, and clinical procedures with <strong>Zero Hidden Charges</strong> and flexible daily/monthly billing.
            </p>
        </div>

        <!-- Trust Badges Strip -->
        <div class="row g-2 mb-4 justify-content-center">
            <div class="col-auto">
                <span class="badge rounded-pill bg-white text-dark border px-3 py-2 shadow-sm font-monospace" style="font-size: 0.82rem;">
                    <i class="fa-solid fa-shield-halved text-success me-1"></i> No Registration Fee
                </span>
            </div>
            <div class="col-auto">
                <span class="badge rounded-pill bg-white text-dark border px-3 py-2 shadow-sm font-monospace" style="font-size: 0.82rem;">
                    <i class="fa-solid fa-rotate text-primary me-1"></i> Free Staff Replacement
                </span>
            </div>
            <div class="col-auto">
                <span class="badge rounded-pill bg-white text-dark border px-3 py-2 shadow-sm font-monospace" style="font-size: 0.82rem;">
                    <i class="fa-solid fa-file-invoice text-danger me-1"></i> GST Invoices & Insurance Support
                </span>
            </div>
            <div class="col-auto">
                <span class="badge rounded-pill bg-white text-dark border px-3 py-2 shadow-sm font-monospace" style="font-size: 0.82rem;">
                    <i class="fa-solid fa-bolt text-warning me-1"></i> 30-60 Mins Deployment
                </span>
            </div>
        </div>

        <!-- Rate Cards Grid -->
        <div class="row g-4">
            <?php foreach ($preview_rates as $card): ?>
                <div class="col-md-6 col-lg-4">
                    <div class="rate-preview-card p-4" style="--card-accent: <?= $card['color'] ?>;">
                        <div>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="d-flex align-items-center justify-content-center rounded-3" style="width: 48px; height: 48px; background: <?= $card['bg_light'] ?>; color: <?= $card['color'] ?>; font-size: 1.3rem;">
                                    <i class="<?= $card['icon'] ?>"></i>
                                </div>
                                <span class="badge rounded-pill px-2 py-1" style="background: <?= $card['bg_light'] ?>; color: <?= $card['color'] ?>; font-weight: 700; font-size: 0.72rem;">
                                    <?= $card['badge'] ?>
                                </span>
                            </div>

                            <h3 class="h5 fw-bold mb-1" style="color: var(--secondary-color);"><?= $card['title'] ?></h3>
                            <div class="d-flex align-items-baseline gap-1 my-2">
                                <span class="fs-3 fw-bolder" style="color: <?= $card['color'] ?>;"><?= $card['price'] ?></span>
                                <span class="text-muted small fw-medium"><?= $card['unit'] ?></span>
                            </div>
                            <div class="small fw-semibold text-secondary mb-3 pb-2 border-bottom">
                                <i class="fa-solid fa-tags text-muted me-1"></i> <?= $card['monthly'] ?>
                            </div>

                            <ul class="rate-feature-list">
                                <?php foreach ($card['features'] as $ft): ?>
                                    <li>
                                        <i class="fa-solid fa-circle-check" style="color: <?= $card['color'] ?>;"></i>
                                        <span><?= $ft ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <div class="pt-3 mt-2 border-top d-flex gap-2">
                            <a href="https://wa.me/919319149644?text=<?= urlencode('Hi DM Healthcare, I am interested in booking ' . $card['title'] . ' (Starts ' . $card['price'] . '). Please assist me.') ?>" target="_blank" rel="noopener" class="btn btn-outline-success flex-grow-1 fw-bold rounded-pill btn-sm py-2">
                                <i class="fa-brands fa-whatsapp me-1"></i> Book Now
                            </a>
                            <a href="rate-cards" class="btn btn-light rounded-pill btn-sm px-3 fw-bold text-secondary border">
                                Rates <i class="fa-solid fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Mega CTA Banner to Complete 51+ Rate Card -->
        <div class="mt-5 p-4 p-lg-5 rounded-4 text-white shadow-lg position-relative overflow-hidden" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 60%, #0f172a 100%); border: 1px solid rgba(255,255,255,0.1);">
            <div class="row align-items-center position-relative" style="z-index: 2;">
                <div class="col-lg-8 mb-3 mb-lg-0 text-center text-lg-start">
                    <span class="badge px-3 py-1 rounded-pill mb-2 fw-bold text-uppercase" style="background: rgba(229, 37, 42, 0.25); color: #ff8082; letter-spacing: 1px;">
                        <i class="fa-solid fa-list-check me-1"></i> Complete 2026 Medical Tariff
                    </span>
                    <h3 class="fw-bold text-white mb-2">Need Nursing, Doctor Visits, Physio or 47+ Equipment?</h3>
                    <p class="text-white-50 mb-0">
                        Check all 51+ transparent home care rates, clinical procedures, dietician plans, and equipment rentals without calling back and forth.
                    </p>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <a href="rate-cards" class="btn btn-danger btn-lg rounded-pill px-4 py-3 fw-bold shadow-sm d-inline-flex align-items-center gap-2">
                        <span>Explore Full Rate Cards</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
