<?php
// Why DM Healthcare vs Local Brokers Comparison Matrix Component
$comparison_points = [
    [
        'aspect' => 'Staff Verification & Police Checks',
        'dm' => '100% Aadhaar, Police Verified & GNM/BSc Certified Nurses',
        'others' => 'Unverified strangers, raw helpers without background checks',
        'dm_good' => true,
        'icon' => 'fa-solid fa-user-shield'
    ],
    [
        'aspect' => 'Clinical & Doctor Oversight',
        'dm' => 'Continuous MBBS/MD Physician clinical governance & care logs',
        'others' => 'Zero medical supervision; no doctor backup during emergencies',
        'dm_good' => true,
        'icon' => 'fa-solid fa-user-doctor'
    ],
    [
        'aspect' => 'Staff Replacement Guarantee',
        'dm' => 'Free instant replacement within 2 hours if staff is on leave',
        'others' => 'No replacement support; brokers stop taking calls after payment',
        'dm_good' => true,
        'icon' => 'fa-solid fa-rotate'
    ],
    [
        'aspect' => 'Medical Equipment Quality',
        'dm' => 'Hospital-grade, 100% sanitized, calibrated ICU devices',
        'others' => 'Unserviced second-hand equipment prone to breakdowns',
        'dm_good' => true,
        'icon' => 'fa-solid fa-pump-medical'
    ],
    [
        'aspect' => 'Billing & Insurance Transparency',
        'dm' => '100% Transparent Tariff, GST Tax Invoices & Insurance Reimbursement Support',
        'others' => 'Hidden commissions, sudden rate hikes and cash-only demands',
        'dm_good' => true,
        'icon' => 'fa-solid fa-file-invoice-dollar'
    ],
    [
        'aspect' => 'Dedicated Care Manager',
        'dm' => '24x7 Dedicated Care Coordinator assigned to your family',
        'others' => 'No single point of contact; unattended complaints',
        'dm_good' => true,
        'icon' => 'fa-solid fa-headset'
    ]
];
?>

<style>
.comparison-section {
    background: #ffffff;
    position: relative;
}
.comparison-table-wrap {
    background: #ffffff;
    border-radius: 24px;
    border: 1px solid #e2e8f0;
    box-shadow: 0 10px 30px rgba(15, 23, 42, 0.05);
    overflow: hidden;
}
.dm-col-header {
    background: linear-gradient(135deg, #e5252a 0%, #b91c1c 100%);
    color: #ffffff;
}
.comparison-row {
    transition: background-color 0.2s ease;
    border-bottom: 1px solid #f1f5f9;
}
.comparison-row:last-child {
    border-bottom: none;
}
.comparison-row:hover {
    background-color: #f8fafc;
}
</style>

<section class="comparison-section py-5" id="why-dm-vs-others">
    <div class="container py-lg-4">
        <!-- Section Header -->
        <div class="text-center mb-5">
            <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill fw-bold mb-2" style="background: rgba(229, 37, 42, 0.08); border: 1px solid rgba(229, 37, 42, 0.2); color: var(--primary-color); font-size: 0.8rem; letter-spacing: 1px;">
                <i class="fa-solid fa-scale-balanced"></i>
                <span>PATIENT SAFETY & CLINICAL ASSURANCE</span>
            </div>
            <h2 class="fw-bolder display-6 mb-3" style="color: var(--secondary-color);">
                Why Families Trust <span style="color: var(--primary-color);">DM Healthcare</span> Over Local Agents
            </h2>
            <div style="width: 60px; height: 4px; background: var(--primary-color); margin: 0 auto 16px auto; border-radius: 2px;"></div>
            <p class="text-muted fs-6 mx-auto mb-0" style="max-width: 700px;">
                Your family's safety and patient recovery demand verified healthcare professionals, not untrained helpers from freelance brokers.
            </p>
        </div>

        <!-- Comparison Table Container -->
        <div class="comparison-table-wrap">
            <div class="table-responsive">
                <table class="table mb-0 align-middle">
                    <thead>
                        <tr>
                            <th class="py-4 px-4 bg-light text-secondary fw-bold" style="width: 32%; font-size: 0.95rem;">
                                <i class="fa-solid fa-list-check me-2 text-muted"></i> Medical Standard / Feature
                            </th>
                            <th class="py-4 px-4 dm-col-header text-center" style="width: 38%; font-size: 1.05rem;">
                                <div class="d-inline-flex align-items-center gap-2">
                                    <i class="fa-solid fa-circle-check text-white"></i>
                                    <span class="fw-bolder">DM Healthcare Advantage</span>
                                </div>
                                <div class="small fw-normal text-white-50 mt-1">Hospital-Regulated Clinical Protocol</div>
                            </th>
                            <th class="py-4 px-4 bg-light text-muted text-center" style="width: 30%; font-size: 0.95rem;">
                                <span class="fw-bold text-secondary">Unverified Local Agents / Brokers</span>
                                <div class="small text-muted mt-1">Unregulated Third-Party Sourcing</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($comparison_points as $cp): ?>
                            <tr class="comparison-row">
                                <td class="py-3 px-4 fw-bold text-dark" style="font-size: 0.92rem;">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="d-flex align-items-center justify-content-center rounded-circle flex-shrink-0" style="width: 36px; height: 36px; background: rgba(229, 37, 42, 0.08); color: var(--primary-color);">
                                            <i class="<?= $cp['icon'] ?> fs-6"></i>
                                        </div>
                                        <span><?= $cp['aspect'] ?></span>
                                    </div>
                                </td>
                                <td class="py-3 px-4" style="background: rgba(229, 37, 42, 0.02);">
                                    <div class="d-flex align-items-start gap-2">
                                        <i class="fa-solid fa-circle-check text-success fs-5 mt-1 flex-shrink-0"></i>
                                        <span class="fw-semibold text-dark" style="font-size: 0.92rem;"><?= $cp['dm'] ?></span>
                                    </div>
                                </td>
                                <td class="py-3 px-4 text-center">
                                    <div class="d-flex align-items-start justify-content-center gap-2">
                                        <i class="fa-solid fa-circle-xmark text-danger fs-5 mt-1 flex-shrink-0"></i>
                                        <span class="text-muted small" style="font-size: 0.88rem;"><?= $cp['others'] ?></span>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

