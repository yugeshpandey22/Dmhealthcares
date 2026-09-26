<?php
// Condition-Specific Patient Recovery Pathways Component
$care_pathways = [
    [
        'title' => 'Post-Surgery & Ortho Recovery',
        'badge' => 'Fast Discharge Protocol',
        'icon' => 'fa-solid fa-bone',
        'color' => '#0284c7',
        'bg_light' => 'rgba(2, 132, 199, 0.08)',
        'description' => 'Specialized care for knee/hip replacement, cardiac bypass, abdominal or spine surgery recovery at home.',
        'points' => ['Aseptic surgical wound & stitch dressing', 'Pain management & IV medication support', 'Daily mobility assistance & DVT prevention', 'Preventing hospital re-admission'],
        'cta_text' => 'Post-Op Care Plan'
    ],
    [
        'title' => 'Stroke & Paralysis Rehabilitation',
        'badge' => 'Mobility & Neurological',
        'icon' => 'fa-solid fa-wheelchair',
        'color' => '#7c3aed',
        'bg_light' => 'rgba(124, 58, 237, 0.08)',
        'description' => 'Comprehensive bedside nursing, neuro-physiotherapy, and dedicated support for hemiplegic & bed-bound patients.',
        'points' => ['2-hourly patient turning (Zero Bedsores)', 'Ryle’s tube feeding & catheter drainage', 'Neuro-motor physiotherapy & limb exercises', 'Speech therapy & cognitive support'],
        'cta_text' => 'Stroke Rehab Plan'
    ],
    [
        'title' => 'Tracheostomy & Ventilator Care',
        'badge' => 'Critical Care at Home',
        'icon' => 'fa-solid fa-lungs',
        'color' => '#e5252a',
        'bg_light' => 'rgba(229, 37, 42, 0.08)',
        'description' => 'ICU trained nursing specialists for ventilated, BiPAP-dependent, or tracheostomy tube patients.',
        'points' => ['Regular sterile tracheostomy suctioning', 'BiPAP/Ventilator settings titration', 'Nebulization & chest physiotherapy', 'Continuous SpO2 & vital parameter monitoring'],
        'cta_text' => 'Home ICU Plan'
    ],
    [
        'title' => 'Elderly Dementia & Parkinson’s Care',
        'badge' => 'Compassionate Geriatric',
        'icon' => 'fa-solid fa-hands-holding-circle',
        'color' => '#059669',
        'bg_light' => 'rgba(5, 150, 105, 0.08)',
        'description' => 'Gentle, 24/7 empathetic assisted living for elderly parents with memory loss, mobility issues, or Parkinson’s tremors.',
        'points' => ['Assistance in bathing, grooming & hygiene', 'Strict medication timing & adherence', 'Fall prevention & safe home mobility', 'Emotional companionship & mental stimulation'],
        'cta_text' => 'Elderly Care Plan'
    ],
    [
        'title' => 'Palliative & Cancer Care',
        'badge' => 'Comfort & Dignity',
        'icon' => 'fa-solid fa-heart-pulse',
        'color' => '#d97706',
        'bg_light' => 'rgba(217, 119, 6, 0.08)',
        'description' => 'Compassionate symptom management, pain relief, and bedside comfort for oncology & terminal illness patients.',
        'points' => ['Doctor-guided pain & infusion therapy', 'Nutritional support & anti-emetic care', 'Advanced bedsore dressing & skin care', 'Dignified 24x7 bedside compassionate nursing'],
        'cta_text' => 'Palliative Care Plan'
    ],
    [
        'title' => 'Chronic Cardiac & Respiratory Care',
        'badge' => 'Oxygen & Cardiac Support',
        'icon' => 'fa-solid fa-heart-circle-bolt',
        'color' => '#0891b2',
        'bg_light' => 'rgba(8, 145, 178, 0.08)',
        'description' => 'Dedicated care for COPD, CHF, pulmonary fibrosis, and chronic respiratory illness requiring oxygen therapy.',
        'points' => ['High-flow oxygen & cylinder maintenance', 'Fluid balance (Intake/Output) recording', 'ECG, BP & sugar fluctuation tracking', 'Emergency doctor escalation protocol'],
        'cta_text' => 'Cardiac & Lung Care'
    ]
];
?>

<style>
.pathways-section {
    background: #f8fafc;
    position: relative;
}
.pathway-card {
    background: #ffffff;
    border-radius: 20px;
    border: 1px solid #e2e8f0;
    box-shadow: 0 4px 20px rgba(15, 23, 42, 0.03);
    transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}
.pathway-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 16px 36px rgba(15, 23, 42, 0.08);
    border-color: #cbd5e1;
}
.pathway-icon-box {
    width: 54px;
    height: 54px;
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.4rem;
}
.pathway-points {
    list-style: none;
    padding: 0;
    margin: 1.2rem 0;
}
.pathway-points li {
    font-size: 0.84rem;
    color: #475569;
    margin-bottom: 7px;
    display: flex;
    align-items: flex-start;
    gap: 8px;
    line-height: 1.4;
}
.pathway-points li i {
    font-size: 0.75rem;
    margin-top: 3px;
    flex-shrink: 0;
}
</style>

<section class="pathways-section py-5" id="care-pathways">
    <div class="container py-lg-4">
        <!-- Section Header -->
        <div class="text-center mb-5">
            <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill fw-bold mb-2" style="background: rgba(229, 37, 42, 0.08); border: 1px solid rgba(229, 37, 42, 0.2); color: var(--primary-color); font-size: 0.8rem; letter-spacing: 1px;">
                <i class="fa-solid fa-notes-medical"></i>
                <span>CUSTOMIZED MEDICAL PATHWAYS</span>
            </div>
            <h2 class="fw-bolder display-6 mb-3" style="color: var(--secondary-color);">
                Specialized Home Care for <span style="color: var(--primary-color);">Every Medical Condition</span>
            </h2>
            <div style="width: 60px; height: 4px; background: var(--primary-color); margin: 0 auto 16px auto; border-radius: 2px;"></div>
            <p class="text-muted fs-6 mx-auto mb-0" style="max-width: 720px;">
                Every patient is unique. Our clinical board designs customized daily care pathways matching the exact diagnosis and doctor's discharge summary.
            </p>
        </div>

        <!-- Pathways Grid -->
        <div class="row g-4">
            <?php foreach ($care_pathways as $pw): ?>
                <div class="col-md-6 col-lg-4">
                    <div class="pathway-card p-4">
                        <div>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="pathway-icon-box" style="background: <?= $pw['bg_light'] ?>; color: <?= $pw['color'] ?>;">
                                    <i class="<?= $pw['icon'] ?>"></i>
                                </div>
                                <span class="badge rounded-pill px-2 py-1" style="background: <?= $pw['bg_light'] ?>; color: <?= $pw['color'] ?>; font-weight: 700; font-size: 0.72rem;">
                                    <?= $pw['badge'] ?>
                                </span>
                            </div>

                            <h3 class="h5 fw-bold mb-2" style="color: var(--secondary-color);"><?= $pw['title'] ?></h3>
                            <p class="text-muted small mb-3"><?= $pw['description'] ?></p>

                            <ul class="pathway-points">
                                <?php foreach ($pw['points'] as $pt): ?>
                                    <li>
                                        <i class="fa-solid fa-check" style="color: <?= $pw['color'] ?>;"></i>
                                        <span><?= $pt ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <div class="pt-3 border-top">
                            <a href="https://wa.me/919999023456?text=<?= urlencode('Hi DM Healthcare, I would like to consult about ' . $pw['title'] . ' for my family member.') ?>" target="_blank" rel="noopener" class="btn btn-light w-100 rounded-pill fw-bold text-dark border py-2 d-flex align-items-center justify-content-between px-3" style="font-size: 0.85rem;">
                                <span>Consult on WhatsApp</span>
                                <i class="fa-solid fa-chevron-right text-muted small"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
