<?php
/**
 * DM Healthcare - Advanced ICU Equipment & Critical Care Solutions
 * Comprehensive Hospital & Home ICU Medical Infrastructure Portal
 */

$display_title = "Advanced ICU Equipment & Critical Care Solutions";
$seo_title = "Advanced ICU Equipment & Hospital Critical Care Setup in Delhi NCR - DM Healthcare";
$seo_desc = "Doctor-certified ICU equipment for hospitals, clinics and home ICU setup in Delhi NCR. 5-function motorized ICU beds, mechanical ventilators, multipara patient monitors, syringe pumps & emergency defibrillators with 24/7 biomedical engineer support.";
$short_desc = "Comprehensive, certified ICU medical equipment & home setup solutions. Fast 30-60 min doorstep delivery, calibration testing, and 24/7 technical assistance across Delhi NCR.";
$category_name = "Medical Equipment";
$full_page_override = true;
$hide_default_welcome = true;

ob_start();
?>

<style>
:root {
    --dm-red: #e5252a;
    --dm-red-dark: #c8102e;
    --dm-navy: #0f172a;
    --dm-blue: #0284c7;
    --dm-slate: #1e293b;
    --dm-light-bg: #f8fafc;
    --dm-card-border: rgba(226, 232, 240, 0.9);
}

.text-dm-red { color: var(--dm-red) !important; }
.bg-dm-red { background-color: var(--dm-red) !important; color: #fff !important; }
.btn-dm-red { background-color: var(--dm-red); border-color: var(--dm-red); color: #fff; }
.btn-dm-red:hover { background-color: var(--dm-red-dark); border-color: var(--dm-red-dark); color: #fff; }
.btn-outline-dm-red { border-color: var(--dm-red); color: var(--dm-red); }
.btn-outline-dm-red:hover, .btn-outline-dm-red.active { background-color: var(--dm-red); border-color: var(--dm-red); color: #fff; }

/* 1. Hero Dark Medical Gradient */
.icu-hero-premium {
    background: radial-gradient(circle at 85% 15%, rgba(229, 37, 42, 0.18) 0%, transparent 55%),
                radial-gradient(circle at 10% 85%, rgba(2, 132, 199, 0.15) 0%, transparent 45%),
                linear-gradient(135deg, #0a0f1d 0%, #0f172a 50%, #1e293b 100%);
    color: #ffffff;
    position: relative;
    overflow: hidden;
}
.icu-hero-premium::before {
    content: "";
    position: absolute;
    inset: 0;
    background: url("data:image/svg+xml,%3Csvg width='40' height='40' viewBox='0 0 40 40' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23ffffff' fill-opacity='0.02' fill-rule='evenodd'%3E%3Cpath d='M0 40L40 0H20L0 20M40 40V20L20 40'/%3E%3C/g%3E%3C/svg%3E");
    opacity: 0.8;
}

.trust-badge-pill {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 6px 14px;
    background: rgba(255, 255, 255, 0.08);
    border: 1px solid rgba(255, 255, 255, 0.15);
    border-radius: 30px;
    color: #e2e8f0;
    font-size: 0.82rem;
    font-weight: 600;
}

/* 2. Equipment Cards Modern */
.icu-equip-card {
    background: #ffffff;
    border: 1px solid var(--dm-card-border);
    border-radius: 20px;
    transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1);
    box-shadow: 0 4px 20px rgba(15, 23, 42, 0.03);
    overflow: hidden;
    height: 100%;
    display: flex;
    flex-direction: column;
}
.icu-equip-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(229, 37, 42, 0.12);
    border-color: rgba(229, 37, 42, 0.35);
}
.icu-icon-holder {
    height: 120px;
    background: radial-gradient(circle at center, rgba(229, 37, 42, 0.08) 0%, rgba(248, 250, 252, 0.9) 100%);
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 3rem;
    color: var(--dm-red);
    transition: transform 0.3s ease;
    margin: 16px 16px 0;
}
.icu-equip-card:hover .icu-icon-holder {
    transform: scale(1.05);
    background: rgba(229, 37, 42, 0.12);
}

/* Category Filter Tabs */
.icu-filter-btn {
    border: 1px solid #cbd5e1;
    background: #ffffff;
    color: #475569;
    padding: 8px 18px;
    border-radius: 30px;
    font-size: 0.88rem;
    font-weight: 600;
    transition: all 0.25s ease;
    cursor: pointer;
}
.icu-filter-btn:hover, .icu-filter-btn.active {
    background: var(--dm-red);
    color: #ffffff;
    border-color: var(--dm-red);
    box-shadow: 0 4px 15px rgba(229, 37, 42, 0.25);
}

/* 3. Setup Package Box */
.setup-package-card {
    border-radius: 22px;
    background: #ffffff;
    border: 2px solid #e2e8f0;
    transition: all 0.3s ease;
}
.setup-package-card.highlight {
    border-color: var(--dm-red);
    box-shadow: 0 15px 35px rgba(229, 37, 42, 0.08);
}

/* 4. Quality Standard Badges */
.quality-box {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 18px;
    padding: 24px;
    text-align: center;
    transition: all 0.3s ease;
}
.quality-box:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 30px rgba(15, 23, 42, 0.06);
    border-color: rgba(2, 132, 199, 0.4);
}
.quality-icon-circle {
    width: 64px;
    height: 64px;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 1.6rem;
    margin-bottom: 16px;
}

/* 5. Accordion Styling */
.icu-accordion .accordion-button:not(.collapsed) {
    background-color: rgba(229, 37, 42, 0.06);
    color: var(--dm-red);
    font-weight: 700;
}
.icu-accordion .accordion-button:focus {
    box-shadow: none;
}
</style>

<!-- 1. HERO SECTION -->
<section class="icu-hero-premium py-5">
    <div class="container py-lg-3 position-relative" style="z-index: 2;">
        <div class="d-flex flex-wrap gap-2 mb-3 align-items-center">
            <span class="trust-badge-pill"><i class="fa-solid fa-certificate text-warning"></i> ISO 9001:2015 & CE Certified Devices</span>
            <span class="trust-badge-pill"><i class="fa-solid fa-truck-fast text-info"></i> 30-60 Mins Rapid Dispatch in NCR</span>
            <span class="trust-badge-pill"><i class="fa-solid fa-screwdriver-wrench text-success"></i> Free Biomedical Installation</span>
            <span class="trust-badge-pill"><i class="fa-solid fa-headset text-warning"></i> 24/7 Clinical Standby</span>
        </div>

        <div class="row align-items-center g-4">
            <div class="col-lg-7">
                <span class="badge bg-danger bg-opacity-25 text-danger px-3 py-1 rounded-pill fw-semibold mb-2 border border-danger border-opacity-50 small">
                    <i class="fa-solid fa-heart-pulse me-1"></i> Critical Care Medical Infrastructure
                </span>
                <h1 class="display-5 fw-bold text-white lh-sm mb-3">
                    Advanced <span class="text-dm-red">ICU Equipment</span> & Critical Care Setup
                </h1>
                <p class="text-light fs-6 mb-4 opacity-90" style="line-height: 1.7;">
                    Delivering hospital-grade, precision-calibrated ICU machinery for <strong>Home ICU Setups, Hospitals, Nursing Homes, and Emergency Rooms</strong> across Delhi NCR. Fully tested and backed by certified biomedical engineers and 24/7 technical response.
                </p>

                <!-- Quick Action CTA Buttons -->
                <div class="d-flex flex-wrap gap-2 mb-4">
                    <a href="#featured-products" class="btn btn-dm-red btn-lg rounded-pill px-4 py-2 fw-bold shadow-sm d-inline-flex align-items-center gap-2 small">
                        <i class="fa-solid fa-microchip"></i> Explore Equipment Catalog
                    </a>
                    <a href="tel:+919319149644" class="btn btn-outline-light btn-lg rounded-pill px-4 py-2 fw-bold d-inline-flex align-items-center gap-2 small">
                        <i class="fa-solid fa-phone-volume"></i> Emergency Hotline: +91 93191 49644
                    </a>
                    <a href="https://wa.me/919319149644?text=Hello%20DM%20Healthcare,%20I%20want%20to%20inquire%20about%20ICU%20Equipment%20and%20Home%20ICU%20Setup." target="_blank" class="btn btn-success btn-lg rounded-pill px-4 py-2 fw-bold d-inline-flex align-items-center gap-2 small">
                        <i class="fa-brands fa-whatsapp"></i> WhatsApp Inquiry
                    </a>
                </div>

                <!-- 4 Quick Key Metrics -->
                <div class="row g-3 pt-3 border-top border-secondary border-opacity-50 small text-light">
                    <div class="col-6 col-sm-3 d-flex align-items-center gap-2">
                        <i class="fa-solid fa-hospital-user text-danger fs-5"></i>
                        <div>
                            <span class="d-block fw-bold">1,800+</span>
                            <span class="opacity-75" style="font-size: 0.72rem;">ICU Setups Deployed</span>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3 d-flex align-items-center gap-2">
                        <i class="fa-solid fa-bolt-lightning text-warning fs-5"></i>
                        <div>
                            <span class="d-block fw-bold">30 Mins</span>
                            <span class="opacity-75" style="font-size: 0.72rem;">Average NCR Dispatch</span>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3 d-flex align-items-center gap-2">
                        <i class="fa-solid fa-shield-virus text-success fs-5"></i>
                        <div>
                            <span class="d-block fw-bold">100% Sterile</span>
                            <span class="opacity-75" style="font-size: 0.72rem;">Multi-Stage Sanitized</span>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3 d-flex align-items-center gap-2">
                        <i class="fa-solid fa-user-doctor text-info fs-5"></i>
                        <div>
                            <span class="d-block fw-bold">Biomedical Team</span>
                            <span class="opacity-75" style="font-size: 0.72rem;">On-Site Calibration</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Hero Quick Booking Form Box -->
            <div class="col-lg-5">
                <div class="card bg-white text-dark rounded-4 p-4 shadow-lg border-0">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="badge bg-danger bg-opacity-10 text-danger rounded-pill px-3 py-1 small fw-bold">
                            Express ICU Desk
                        </span>
                        <span class="text-success small fw-bold"><i class="fa-solid fa-circle-check me-1"></i> Ready for Immediate Dispatch</span>
                    </div>

                    <h5 class="fw-bold text-dark mb-1">Request ICU Equipment / Setup</h5>
                    <p class="text-muted small mb-3">Get custom quotation and immediate deployment across Delhi NCR.</p>

                    <form action="backend/submit_appointment.php" method="POST">
                        <input type="hidden" name="service" value="ICU Equipment & Critical Care Setup">
                        <div class="mb-2">
                            <input type="text" name="name" class="form-control form-control-sm rounded-2" placeholder="Patient / Hospital Contact Name *" required>
                        </div>
                        <div class="mb-2">
                            <input type="tel" name="phone" class="form-control form-control-sm rounded-2" placeholder="10-digit Contact Mobile Number *" pattern="[0-9]{10}" required>
                        </div>
                        <div class="mb-2">
                            <select name="requirement_type" class="form-select form-select-sm rounded-2" required>
                                <option value="Complete Home ICU Setup Package">Complete Home ICU Setup Package</option>
                                <option value="Mechanical ICU Ventilator">Mechanical ICU Ventilator</option>
                                <option value="Multi-Parameter Patient Monitor">Multi-Parameter Patient Monitor</option>
                                <option value="5-Function Motorized ICU Bed">5-Function Motorized ICU Bed</option>
                                <option value="Syringe & Infusion Pump Kit">Syringe & Infusion Pump Kit</option>
                                <option value="Biphasic Defibrillator / AED">Biphasic Defibrillator / AED</option>
                                <option value="12-Lead Digital ECG Machine">12-Lead Digital ECG Machine</option>
                                <option value="Oxygen Concentrator & Cylinder Standby">Oxygen Concentrator & Cylinder Standby</option>
                                <option value="Hospital / Nursing Home Bulk Supply">Hospital / Nursing Home Bulk Supply</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <select name="city" class="form-select form-select-sm rounded-2" required>
                                <option value="Faridabad">Faridabad (Express 30-min reach)</option>
                                <option value="Noida & Greater Noida">Noida & Greater Noida</option>
                                <option value="South & Central Delhi">South & Central Delhi</option>
                                <option value="Gurugram (Gurgaon)">Gurugram (Gurgaon)</option>
                                <option value="Ghaziabad & East Delhi">Ghaziabad & East Delhi</option>
                                <option value="Palwal & NCR Outskirts">Palwal & NCR Outskirts</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <textarea name="message" rows="2" class="form-control form-control-sm rounded-2" placeholder="Mention doctor notes, specific ventilator modes, or urgent requirements..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-dm-red w-100 rounded-pill fw-bold py-2 shadow-sm">
                            <i class="fa-solid fa-paper-plane me-1"></i> Request Immediate Setup / Quotation
                        </button>
                        <small class="text-center d-block text-muted mt-2" style="font-size: 0.72rem;">
                            <i class="fa-solid fa-lock text-success me-1"></i> Zero advance needed before on-site installation and testing.
                        </small>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. EQUIPMENT CATALOG WITH INTERACTIVE CATEGORIES -->
<section id="featured-products" class="py-5" style="background-color: var(--dm-light-bg);">
    <div class="container py-lg-3">
        <div class="text-center max-w-700 mx-auto mb-4">
            <span class="badge bg-danger bg-opacity-10 text-danger px-3 py-1 rounded-pill fw-semibold mb-2 small">Full Clinical Range</span>
            <h2 class="fw-bold text-dark mb-2">Featured ICU Equipment & Machinery</h2>
            <div class="mx-auto mb-3" style="width: 60px; height: 4px; background-color: var(--dm-red); border-radius: 2px;"></div>
            <p class="text-muted small">Explore our extensive range of high-precision, certified medical equipment designed for critical care units, step-down wards, and comprehensive home ICU setups.</p>
        </div>

        <!-- Category Filter Tabs -->
        <div class="d-flex flex-wrap justify-content-center gap-2 mb-4">
            <button class="icu-filter-btn active" onclick="filterIcuCategory('all', this)"><i class="fa-solid fa-boxes-stacked me-1"></i> All Equipment</button>
            <button class="icu-filter-btn" onclick="filterIcuCategory('respiratory', this)"><i class="fa-solid fa-lungs me-1"></i> Respiratory & Ventilators</button>
            <button class="icu-filter-btn" onclick="filterIcuCategory('monitoring', this)"><i class="fa-solid fa-heart-pulse me-1"></i> Monitors & Diagnostic</button>
            <button class="icu-filter-btn" onclick="filterIcuCategory('beds', this)"><i class="fa-solid fa-bed me-1"></i> ICU Beds & Mobility</button>
            <button class="icu-filter-btn" onclick="filterIcuCategory('pumps', this)"><i class="fa-solid fa-syringe me-1"></i> Pumps & Emergency</button>
        </div>

        <div class="row g-4" id="icuProductsGrid">
            <?php
            $icu_equipment_items = [
                [
                    "name" => "5-Function Motorized ICU Bed",
                    "category" => "beds",
                    "tag" => "Critical Care Bed",
                    "desc" => "Fully motorized 5-function electric ICU bed with remote control, Trendelenburg / Reverse Trendelenburg tilt, CPR emergency release, ABS head/foot boards, and collapsible safety side rails.",
                    "specs" => ["5-Function Electric Adjustment", "Emergency CPR Quick Release", "ABS Collapsible Guard Rails", "360° Central Locking Wheels"],
                    "icon" => "fa-bed-pulse"
                ],
                [
                    "name" => "Advanced Mechanical ICU Ventilator",
                    "category" => "respiratory",
                    "tag" => "Life Support",
                    "desc" => "State-of-the-art invasive & non-invasive medical ventilator supporting PCV, VCV, SIMV, PSV, and CPAP modes with integrated graphics screen, tidal volume monitoring, and battery backup.",
                    "specs" => ["Invasive & Non-Invasive Modes", "Real-Time Waveform Graphics", "High-Flow Oxygen Blender", "Integrated 4-Hour Battery Backup"],
                    "icon" => "fa-mask-ventilator"
                ],
                [
                    "name" => "Multi-Parameter Patient Monitor",
                    "category" => "monitoring",
                    "tag" => "Continuous Vitals",
                    "desc" => "High-resolution 12.1-inch color TFT patient monitor with real-time waveform tracking for ECG (5/12-lead), SpO2, NIBP, Respiration Rate, Temperature, and Pulse Rate with intelligent alarm system.",
                    "specs" => ["12.1\" High-Res Color TFT Display", "ECG, SpO2, NIBP, Respiration, Temp", "Arrhythmia & ST Segment Analysis", "Visual & Audio Smart Alarms"],
                    "icon" => "fa-desktop"
                ],
                [
                    "name" => "High-Precision Syringe Infusion Pump",
                    "category" => "pumps",
                    "tag" => "Medication Delivery",
                    "desc" => "Microprocessor-controlled volumetric syringe pump compatible with all standard syringe sizes (5ml - 60ml) for accurate drug delivery, anti-bolus system, and occlusion detection alarms.",
                    "specs" => ["Supports 5ml to 60ml Syringes", "Flow Rate: 0.1 to 1500 ml/h", "Anti-Bolus & Anti-Siphon Protection", "Dual CPU Micro-Accuracy"],
                    "icon" => "fa-syringe"
                ],
                [
                    "name" => "Volumetric IV Infusion Pump",
                    "category" => "pumps",
                    "tag" => "Fluid & Blood Delivery",
                    "desc" => "Automated IV fluid infusion pump with ultrasonic air-in-line sensor, double occlusion sensors, multi-infusion modes (Rate, Time, Body Weight), and rechargeable battery operation.",
                    "specs" => ["Ultrasonic Bubble & Air Detector", "Rate, Time & Body Weight Modes", "Compatible with All Standard IV Sets", "8-Hour Battery Operation"],
                    "icon" => "fa-pump-medical"
                ],
                [
                    "name" => "Biphasic Defibrillator with AED",
                    "category" => "pumps",
                    "tag" => "Cardiac Emergency",
                    "desc" => "Advanced biphasic defibrillator with manual shock mode, Automated External Defibrillator (AED) protocol, pacing capability, integrated thermal printer, and internal paddles for clinical care.",
                    "specs" => ["Biphasic Truncated Exponential Wave", "AED & Manual Synchronized Cardioversion", "External & Internal Adult/Pediatric Paddles", "High-Speed Thermal Strip Recorder"],
                    "icon" => "fa-heart-pulse"
                ],
                [
                    "name" => "12-Lead Digital ECG Machine",
                    "category" => "monitoring",
                    "tag" => "Cardiac Diagnostic",
                    "desc" => "12-channel simultaneous digital ECG recorder with Glasgow interpretation algorithm, high-resolution color touchscreen, alphanumeric keyboard, and instant thermal reporting.",
                    "specs" => ["12-Channel Simultaneous Acquisition", "Automated Clinical Interpretation", "USB & PDF Direct Export", "High-Resolution Color Touchscreen"],
                    "icon" => "fa-file-waveform"
                ],
                [
                    "name" => "High-Vacuum Medical Suction Machine",
                    "category" => "respiratory",
                    "tag" => "Airway Clearance",
                    "desc" => "Heavy-duty oil-free piston pump suction apparatus with dual glass/polycarbonate bottles (2 x 2.5L), overflow protection device, and high negative pressure capacity for tracheostomy and ICU use.",
                    "specs" => ["High Vacuum / High Flow Rate (>20L/min)", "Dual 2.5 Litre Autoclavable Jars", "Oil-Free Maintenance-Free Pump", "Anti-Bacterial Hydrophobic Filter"],
                    "icon" => "fa-pump-soap"
                ],
                [
                    "name" => "Medical-Grade Oxygen Concentrator (10L / 5L)",
                    "category" => "respiratory",
                    "tag" => "Continuous Oxygen",
                    "desc" => "Continuous 93% ± 3% pure medical oxygen supply machine with high output pressure, integrated digital purity sensor, ultra-quiet operation, and dual humidifier support for ICU stepping down.",
                    "specs" => ["High-Purity 93% ± 3% Medical O2", "Continuous 24/7 Heavy-Duty Operation", "Built-In Purity & Pressure Sensor", "Castor Wheels for Bedside Mobility"],
                    "icon" => "fa-wind"
                ],
                [
                    "name" => "Anti-Bedsore Alternating Air Mattress",
                    "category" => "beds",
                    "tag" => "Pressure Care",
                    "desc" => "Medical tubular alternating pressure air mattress with ultra-silent digital compressor pump, CPR emergency deflation valve, waterproof breathable cover, and micro-air loss ventilation to prevent bedsores.",
                    "specs" => ["Alternating Air Cell Technology", "Ultra-Quiet Auto-Pressure Pump", "Quick CPR Emergency Deflate", "Hospital-Grade Antimicrobial Cover"],
                    "icon" => "fa-mattress-pillow"
                ],
                [
                    "name" => "Medical Emergency Crash Cart Trolley",
                    "category" => "monitoring",
                    "tag" => "Emergency Ward",
                    "desc" => "Heavy-duty ABS emergency resuscitation crash cart with central lock drawers, defibrillator shelf, oxygen cylinder holder, IV pole, CPR cardiac board, and 360° smooth swivel castors.",
                    "specs" => ["ABS Molded Impact-Resistant Body", "Centralized Breakaway Key Lock", "Oxygen Tank Holder & IV Pole", "Built-In CPR Board & Defibrillator Tray"],
                    "icon" => "fa-cart-flatbed"
                ],
                [
                    "name" => "BiPAP / CPAP Non-Invasive Ventilator",
                    "category" => "respiratory",
                    "tag" => "Respiratory Support",
                    "desc" => "Dual-level positive airway pressure non-invasive ventilator with Auto-ST mode, heated humidifier, leak compensation, and smart cloud adherence reporting for COPD and sleep apnea patients.",
                    "specs" => ["Auto-ST & Spontaneous Modes", "Integrated Climate Control Humidifier", "Real-Time Leak Compensation", "Ultra-Quiet Motor (<28 dBA)"],
                    "icon" => "fa-head-side-mask"
                ]
            ];

            foreach($icu_equipment_items as $item): ?>
                <div class="col-lg-4 col-md-6 icu-item" data-category="<?= htmlspecialchars($item['category']) ?>">
                    <div class="icu-equip-card">
                        <div class="icu-icon-holder">
                            <i class="fa-solid <?= htmlspecialchars($item['icon']) ?>"></i>
                        </div>
                        <div class="p-4 d-flex flex-column flex-grow-1">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge bg-danger bg-opacity-10 text-danger rounded-pill px-3 py-1 small fw-semibold"><?= htmlspecialchars($item['tag']) ?></span>
                                <span class="text-success small fw-bold"><i class="fa-solid fa-check-circle"></i> Certified</span>
                            </div>
                            <h5 class="fw-bold text-dark mb-2"><?= htmlspecialchars($item['name']) ?></h5>
                            <p class="text-muted small mb-3 lh-base"><?= htmlspecialchars($item['desc']) ?></p>
                            
                            <ul class="list-unstyled small text-secondary mb-4" style="font-size: 0.8rem;">
                                <?php foreach($item['specs'] as $spec): ?>
                                    <li class="mb-1"><i class="fa-solid fa-circle-check text-success me-2"></i><?= htmlspecialchars($spec) ?></li>
                                <?php endforeach; ?>
                            </ul>

                            <div class="d-grid gap-2 mt-auto">
                                <a href="https://wa.me/919319149644?text=<?= urlencode("Hello DM Healthcare, I want to inquire about " . $item['name']) ?>" target="_blank" class="btn btn-success btn-sm rounded-pill fw-bold py-2">
                                    <i class="fa-brands fa-whatsapp me-1"></i> Inquire on WhatsApp
                                </a>
                                <a href="index.php#appointment" class="btn btn-outline-secondary btn-sm rounded-pill fw-semibold py-1">
                                    Request Quotation / Setup
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 3. COMPLETE HOME ICU SETUP vs HOSPITAL INFRASTRUCTURE -->
<section class="py-5 bg-white border-top border-bottom">
    <div class="container py-lg-3">
        <div class="text-center max-w-700 mx-auto mb-5">
            <span class="badge bg-danger bg-opacity-10 text-danger px-3 py-1 rounded-pill fw-semibold mb-2 small">Full Solutions</span>
            <h2 class="fw-bold text-dark mb-2">Complete Home ICU Setup Packages</h2>
            <div class="mx-auto mb-3" style="width: 60px; height: 4px; background-color: var(--dm-red); border-radius: 2px;"></div>
            <p class="text-muted small">We replicate comprehensive hospital ICU standards at the patient's home, saving up to 70% of hospitalization expenses while ensuring superior clinical hygiene and emotional comfort.</p>
        </div>

        <div class="row g-4 align-items-stretch">
            <!-- Package 1: Basic ICU Setup -->
            <div class="col-lg-4 col-md-6">
                <div class="setup-package-card p-4 h-100 d-flex flex-column">
                    <span class="badge bg-secondary bg-opacity-10 text-secondary rounded-pill px-3 py-1 align-self-start small mb-2">Step-Down Care</span>
                    <h4 class="fw-bold text-dark mb-2">Step-Down Home Care</h4>
                    <p class="small text-muted mb-3">Designed for semi-critical, post-operative, and stroke recovery patients stepping down from hospital ICU.</p>
                    <hr class="my-2 opacity-25">
                    <ul class="list-unstyled small text-secondary mb-4 flex-grow-1" style="font-size: 0.85rem; line-height: 2;">
                        <li><i class="fa-solid fa-circle-check text-success me-2"></i> 2 or 3-Function Motorized Hospital Bed</li>
                        <li><i class="fa-solid fa-circle-check text-success me-2"></i> Anti-Bedsore Alternating Air Mattress</li>
                        <li><i class="fa-solid fa-circle-check text-success me-2"></i> 5L or 10L Oxygen Concentrator Support</li>
                        <li><i class="fa-solid fa-circle-check text-success me-2"></i> High-Vacuum Suction Machine</li>
                        <li><i class="fa-solid fa-circle-check text-success me-2"></i> Multi-Parameter Vitals Monitor</li>
                        <li><i class="fa-solid fa-circle-check text-success me-2"></i> 12h / 24h Trained Nursing Attendant</li>
                    </ul>
                    <a href="https://wa.me/919319149644?text=Hello%20DM%20Healthcare,%20I%20want%20to%20inquire%20about%20Step-Down%20Home%20Care%20Setup." target="_blank" class="btn btn-outline-dm-red rounded-pill fw-bold w-100 py-2">
                        Inquire Step-Down Setup
                    </a>
                </div>
            </div>

            <!-- Package 2: Comprehensive ICU Setup (Featured) -->
            <div class="col-lg-4 col-md-6">
                <div class="setup-package-card highlight p-4 h-100 d-flex flex-column position-relative shadow-sm" style="background: #fff9f9;">
                    <div class="position-absolute top-0 end-0 m-3">
                        <span class="badge bg-danger text-white rounded-pill px-3 py-1 small shadow-sm">Most Recommended</span>
                    </div>
                    <span class="badge bg-danger bg-opacity-10 text-danger rounded-pill px-3 py-1 align-self-start small mb-2">Full Critical Care</span>
                    <h4 class="fw-bold text-dark mb-2">Advanced Home ICU Setup</h4>
                    <p class="small text-muted mb-3">Replicating a full intensive care unit for ventilator-dependent, tracheostomy, and critical coma care.</p>
                    <hr class="my-2 opacity-25">
                    <ul class="list-unstyled small text-secondary mb-4 flex-grow-1" style="font-size: 0.85rem; line-height: 2;">
                        <li><i class="fa-solid fa-circle-check text-danger me-2"></i> 5-Function Fully Motorized ICU Bed</li>
                        <li><i class="fa-solid fa-circle-check text-danger me-2"></i> Invasive / Non-Invasive ICU Ventilator</li>
                        <li><i class="fa-solid fa-circle-check text-danger me-2"></i> Multi-Para Monitor with ECG & SpO2 Alarms</li>
                        <li><i class="fa-solid fa-circle-check text-danger me-2"></i> Dual Syringe & Infusion Pumps</li>
                        <li><i class="fa-solid fa-circle-check text-danger me-2"></i> Continuous Oxygen & Emergency Cylinder Backup</li>
                        <li><i class="fa-solid fa-circle-check text-danger me-2"></i> 24x7 Critical Care GNM/B.Sc Registered Nurse</li>
                        <li><i class="fa-solid fa-circle-check text-danger me-2"></i> 24/7 Intensivist & Biomedical Supervision</li>
                    </ul>
                    <a href="https://wa.me/919319149644?text=Hello%20DM%20Healthcare,%20I%20want%20to%20inquire%20about%20Advanced%20Home%20ICU%20Setup." target="_blank" class="btn btn-dm-red rounded-pill fw-bold w-100 py-2 shadow-sm">
                        <i class="fa-brands fa-whatsapp me-1"></i> Book Advanced Home ICU
                    </a>
                </div>
            </div>

            <!-- Package 3: Hospital & Institutional Supply -->
            <div class="col-lg-4 col-md-12">
                <div class="setup-package-card p-4 h-100 d-flex flex-column">
                    <span class="badge bg-info bg-opacity-10 text-dark rounded-pill px-3 py-1 align-self-start small mb-2">Institutional Tier</span>
                    <h4 class="fw-bold text-dark mb-2">Hospitals & Nursing Homes</h4>
                    <p class="small text-muted mb-3">Turnkey ICU ward setup, expansion, and high-volume biomedical equipment procurement for institutions.</p>
                    <hr class="my-2 opacity-25">
                    <ul class="list-unstyled small text-secondary mb-4 flex-grow-1" style="font-size: 0.85rem; line-height: 2;">
                        <li><i class="fa-solid fa-circle-check text-primary me-2"></i> Bulk ICU Beds & Defibrillator Deployments</li>
                        <li><i class="fa-solid fa-circle-check text-primary me-2"></i> Central Monitoring Station Networking</li>
                        <li><i class="fa-solid fa-circle-check text-primary me-2"></i> On-Site Biomedical Engineer Staff Training</li>
                        <li><i class="fa-solid fa-circle-check text-primary me-2"></i> Annual Maintenance Contracts (AMC / CMC)</li>
                        <li><i class="fa-solid fa-circle-check text-primary me-2"></i> 24/7 Express Spare Replacement Guarantee</li>
                    </ul>
                    <a href="https://wa.me/919319149644?text=Hello%20DM%20Healthcare,%20I%20want%20to%20inquire%20about%20Hospital%20ICU%20Ward%20Bulk%20Supply." target="_blank" class="btn btn-outline-dark rounded-pill fw-bold w-100 py-2">
                        Institutional Consultation
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. WHY CHOOSE DM HEALTHCARE (ENRICHED QUALITY & ASSURANCE) -->
<section class="py-5" style="background-color: var(--dm-light-bg);">
    <div class="container py-lg-3">
        <div class="text-center max-w-700 mx-auto mb-5">
            <span class="badge bg-secondary bg-opacity-10 text-secondary px-3 py-1 rounded-pill fw-semibold mb-2 small">Why Choose Us</span>
            <h2 class="fw-bold text-dark mb-2">The DM Healthcare Medical Advantage</h2>
            <div class="mx-auto mb-3" style="width: 60px; height: 4px; background-color: var(--dm-red); border-radius: 2px;"></div>
            <p class="text-muted small">We combine world-class medical equipment with trained clinical staff and responsive technical backup.</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="quality-box h-100">
                    <div class="quality-icon-circle bg-danger bg-opacity-10 text-dm-red">
                        <i class="fa-solid fa-certificate"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">ISO & CE Certified</h5>
                    <p class="text-muted small mb-0">All ICU equipment meets strict international safety standards, with official calibration certificates issued prior to dispatch.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="quality-box h-100">
                    <div class="quality-icon-circle bg-primary bg-opacity-10 text-primary">
                        <i class="fa-solid fa-user-nurse"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Biomedical Engineers Onsite</h5>
                    <p class="text-muted small mb-0">Our professional biomedical technicians perform bedside installation, electrical earthing checks, and train family & nurses.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="quality-box h-100">
                    <div class="quality-icon-circle bg-success bg-opacity-10 text-success">
                        <i class="fa-solid fa-shield-virus"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">100% Sterile & Sanitized</h5>
                    <p class="text-muted small mb-0">Rigorous 5-step clinical disinfection protocol using medical-grade disinfectant wipes, UV-C treatment, and new sealed patient circuits.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="quality-box h-100">
                    <div class="quality-icon-circle bg-warning bg-opacity-10 text-dark">
                        <i class="fa-solid fa-truck-fast"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">30-60 Mins NCR Delivery</h5>
                    <p class="text-muted small mb-0">Emergency logistics hubs stationed across Faridabad, Noida, Delhi, and Gurugram for rapid turnaround in critical situations.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="quality-box h-100">
                    <div class="quality-icon-circle bg-info bg-opacity-10 text-info">
                        <i class="fa-solid fa-headset"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">24/7 Technical Standby</h5>
                    <p class="text-muted small mb-0">Immediate technical support and standby emergency machine replacement in case of unexpected equipment alerts or power surges.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="quality-box h-100">
                    <div class="quality-icon-circle bg-danger bg-opacity-10 text-dm-red">
                        <i class="fa-solid fa-hand-holding-dollar"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Affordable & Transparent</h5>
                    <p class="text-muted small mb-0">Transparent pricing with zero hidden charges. Flexible monthly and long-term packages designed to keep patient recovery affordable.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. INDUSTRIES WE SERVE & CLINICAL BENEFITS -->
<section class="py-5" style="background-color: var(--dm-navy); color: #ffffff;">
    <div class="container py-lg-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 pe-lg-4">
                <span class="badge bg-danger bg-opacity-25 text-danger border border-danger px-3 py-1 rounded-pill fw-semibold mb-3 small">
                    Wide Coverage
                </span>
                <h2 class="display-6 fw-bold text-white mb-3">Sectors & Facilities We Support</h2>
                <div style="width: 60px; height: 4px; background-color: var(--dm-red); border-radius: 2px; margin-bottom: 24px;"></div>
                <p class="text-light opacity-90 mb-4" style="line-height: 1.7;">
                    From single home bedrooms transformed into state-of-the-art critical care suites to large multi-specialty hospital ICU wards, DM Healthcare delivers dependable medical engineering.
                </p>

                <div class="row g-3">
                    <div class="col-sm-6">
                        <div class="p-3 rounded-3 bg-white bg-opacity-10 d-flex align-items-center gap-3">
                            <i class="fa-solid fa-house-medical text-danger fs-4"></i>
                            <span class="fw-semibold text-white">Home ICU Setups</span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-3 rounded-3 bg-white bg-opacity-10 d-flex align-items-center gap-3">
                            <i class="fa-solid fa-hospital text-info fs-4"></i>
                            <span class="fw-semibold text-white">Hospitals & Wards</span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-3 rounded-3 bg-white bg-opacity-10 d-flex align-items-center gap-3">
                            <i class="fa-solid fa-user-doctor text-success fs-4"></i>
                            <span class="fw-semibold text-white">Nursing Homes</span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-3 rounded-3 bg-white bg-opacity-10 d-flex align-items-center gap-3">
                            <i class="fa-solid fa-microscope text-warning fs-4"></i>
                            <span class="fw-semibold text-white">Diagnostic Centres</span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-3 rounded-3 bg-white bg-opacity-10 d-flex align-items-center gap-3">
                            <i class="fa-solid fa-building-columns text-primary fs-4"></i>
                            <span class="fw-semibold text-white">Medical Colleges</span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-3 rounded-3 bg-white bg-opacity-10 d-flex align-items-center gap-3">
                            <i class="fa-solid fa-truck-medical text-danger fs-4"></i>
                            <span class="fw-semibold text-white">Emergency Trauma Units</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="bg-white text-dark p-4 p-md-5 rounded-4 shadow-lg">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <span class="badge bg-success bg-opacity-10 text-success rounded-pill px-3 py-1 fw-bold small">Clinical Safety</span>
                    </div>
                    <h3 class="fw-bold text-dark mb-4">Patient & Caregiver Benefits</h3>

                    <ul class="list-unstyled mb-0">
                        <li class="mb-3 d-flex align-items-start">
                            <div class="bg-danger bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0" style="width: 44px; height: 44px;">
                                <i class="fa-solid fa-hand-holding-heart text-dm-red fs-5"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold text-dark mb-1">70% Cost Reduction vs Hospital ICU</h6>
                                <p class="text-muted small mb-0">Receive the exact same high-level clinical care in the warmth of home without hospital bed surcharges.</p>
                            </div>
                        </li>
                        <li class="mb-3 d-flex align-items-start">
                            <div class="bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0" style="width: 44px; height: 44px;">
                                <i class="fa-solid fa-shield-halved text-primary fs-5"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold text-dark mb-1">Zero Hospital-Acquired Infections</h6>
                                <p class="text-muted small mb-0">Home environments significantly lower the danger of drug-resistant hospital-acquired bacterial infections.</p>
                            </div>
                        </li>
                        <li class="mb-3 d-flex align-items-start">
                            <div class="bg-success bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0" style="width: 44px; height: 44px;">
                                <i class="fa-solid fa-bolt text-success fs-5"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold text-dark mb-1">24x7 Real-Time Vitals Tracking</h6>
                                <p class="text-muted small mb-0">Multi-parameter monitors with automated alarm limits keep doctors and family alerted to every physiological change.</p>
                            </div>
                        </li>
                        <li class="d-flex align-items-start">
                            <div class="bg-info bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0" style="width: 44px; height: 44px;">
                                <i class="fa-solid fa-heart-pulse text-info fs-5"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold text-dark mb-1">Emotional Comfort & Faster Healing</h6>
                                <p class="text-muted small mb-0">Family presence around the bedside alleviates ICU psychosis, reduces anxiety, and accelerates recovery.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 6. VERIFIED CLIENT TESTIMONIALS -->
<section class="py-5" style="background-color: var(--dm-light-bg);">
    <div class="container py-lg-3">
        <div class="text-center max-w-700 mx-auto mb-5">
            <span class="badge bg-secondary bg-opacity-10 text-secondary px-3 py-1 rounded-pill fw-semibold mb-2 small">Client Reviews</span>
            <h2 class="fw-bold text-dark mb-2">What Healthcare Providers & Families Say</h2>
            <div class="mx-auto mb-3" style="width: 60px; height: 4px; background-color: var(--dm-red); border-radius: 2px;"></div>
            <p class="text-muted small">Real feedback from doctors, hospitals, and patient families who trust DM Healthcare for critical setups.</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 rounded-4 p-4 shadow-sm bg-white h-100 d-flex flex-column">
                    <div class="d-flex text-warning mb-3">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <p class="text-muted small fst-italic mb-4 flex-grow-1" style="line-height: 1.7;">"When my father was discharged in a ventilator-dependent condition, DM Healthcare set up a full ICU suite in our Faridabad home in under 2 hours. The motorized bed, ventilator, and trained GNM nurse were absolute lifesavers."</p>
                    <div class="d-flex align-items-center border-top pt-3">
                        <div class="bg-danger text-white rounded-circle d-flex align-items-center justify-content-center fw-bold me-3 shadow-sm" style="width: 48px; height: 48px;">RS</div>
                        <div>
                            <h6 class="fw-bold mb-0 text-dark">Rajesh Sharma</h6>
                            <small class="text-muted">Sector 15, Faridabad</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card border-0 rounded-4 p-4 shadow-sm bg-white h-100 d-flex flex-column">
                    <div class="d-flex text-warning mb-3">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <p class="text-muted small fst-italic mb-4 flex-grow-1" style="line-height: 1.7;">"We procured multi-parameter monitors and syringe pumps for our nursing home's expanded emergency wing. The equipment quality is top-tier, and their biomedical team provided thorough staff training."</p>
                    <div class="d-flex align-items-center border-top pt-3">
                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center fw-bold me-3 shadow-sm" style="width: 48px; height: 48px;">Dr</div>
                        <div>
                            <h6 class="fw-bold mb-0 text-dark">Dr. A. K. Verma</h6>
                            <small class="text-muted">Medical Director, Noida</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <div class="card border-0 rounded-4 p-4 shadow-sm bg-white h-100 d-flex flex-column">
                    <div class="d-flex text-warning mb-3">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <p class="text-muted small fst-italic mb-4 flex-grow-1" style="line-height: 1.7;">"The 12-channel digital ECG machine and defibrillator supplied to our diagnostic facility have performed with zero downtime. Fast delivery, genuine CE certification, and prompt AMC support."</p>
                    <div class="d-flex align-items-center border-top pt-3">
                        <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center fw-bold me-3 shadow-sm" style="width: 48px; height: 48px;">SD</div>
                        <div>
                            <h6 class="fw-bold mb-0 text-dark">Sunrise Healthcare Labs</h6>
                            <small class="text-muted">Gurugram Center</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 7. FREQUENTLY ASKED QUESTIONS -->
<section class="py-5 bg-white">
    <div class="container max-w-800 py-lg-3">
        <div class="text-center mb-5">
            <span class="badge bg-secondary bg-opacity-10 text-secondary px-3 py-1 rounded-pill fw-semibold mb-2 small">Got Questions?</span>
            <h2 class="fw-bold text-dark">Frequently Asked Questions</h2>
            <div class="mx-auto mt-2" style="width: 60px; height: 4px; background-color: var(--dm-red); border-radius: 2px;"></div>
        </div>

        <div class="accordion accordion-flush icu-accordion shadow-sm rounded-4 overflow-hidden border" id="faqAccordion">
            <div class="accordion-item border-bottom">
                <h2 class="accordion-header" id="faq1">
                    <button class="accordion-button fw-bold py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq1">
                        Are all your ICU equipments medically certified?
                    </button>
                </h2>
                <div id="collapseFaq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text-muted small lh-base">
                        Yes, absolutely. All our medical devices are ISO 9001:2015, ISO 13485, and CE certified, strictly conforming to international clinical safety, electrical isolation, and electromagnetic compatibility protocols.
                    </div>
                </div>
            </div>
            
            <div class="accordion-item border-bottom">
                <h2 class="accordion-header" id="faq2">
                    <button class="accordion-button collapsed fw-bold py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq2">
                        Do you provide onsite installation and staff training?
                    </button>
                </h2>
                <div id="collapseFaq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text-muted small lh-base">
                        Yes. Our dedicated biomedical engineering team delivers the equipment to your doorstep, performs live calibration and sensor tests, checks power backup suitability, and provides comprehensive operational training to your family members and bedside nurses.
                    </div>
                </div>
            </div>
            
            <div class="accordion-item border-bottom">
                <h2 class="accordion-header" id="faq3">
                    <button class="accordion-button collapsed fw-bold py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq3">
                        Do you supply equipment for home ICU setups across Delhi NCR?
                    </button>
                </h2>
                <div id="collapseFaq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text-muted small lh-base">
                        Yes, we deploy comprehensive Home ICU setups including 5-function motorized beds, ICU ventilators, multipara monitors, syringe pumps, suction units, oxygen concentrators, and emergency cylinder backups across Faridabad, Noida, Gurugram, and Delhi.
                    </div>
                </div>
            </div>

            <div class="accordion-item border-bottom">
                <h2 class="accordion-header" id="faq4">
                    <button class="accordion-button collapsed fw-bold py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq4">
                        How fast can you dispatch equipment for emergency cases?
                    </button>
                </h2>
                <div id="collapseFaq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text-muted small lh-base">
                        We prioritize emergency hospital discharge and sudden critical care needs. Our rapid response dispatch vans can deliver and assemble critical equipment like ventilators, oxygen machines, and motorized ICU beds within 30 to 60 minutes locally across Delhi NCR.
                    </div>
                </div>
            </div>

            <div class="accordion-item border-bottom">
                <h2 class="accordion-header" id="faq5">
                    <button class="accordion-button collapsed fw-bold py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq5">
                        What happens if an equipment gives an alarm or technical error?
                    </button>
                </h2>
                <div id="collapseFaq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text-muted small lh-base">
                        Our 24/7 technical hotline is always active. If any device reports an anomaly, our on-call biomedical technician will guide you immediately over phone/video and dispatch an emergency replacement unit within 45-60 minutes if required.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="faq6">
                    <button class="accordion-button collapsed fw-bold py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq6">
                        Do you offer flexible packages and AMC support for institutions?
                    </button>
                </h2>
                <div id="collapseFaq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text-muted small lh-base">
                        Yes, we provide flexible equipment package options, tailored monthly plans, and comprehensive Annual Maintenance Contracts (AMC/CMC) with spare-part guarantees for hospitals, nursing homes, and clinics.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 8. RELATED MEDICAL EQUIPMENT QUICK LINKS -->
<section class="py-5 bg-light border-top">
    <div class="container">
        <h5 class="fw-bold text-dark mb-4 text-center">Related Medical Equipment & Services</h5>
        <div class="row g-3 justify-content-center text-center">
            <div class="col-6 col-md-3">
                <a href="hospital-bed" class="card border rounded-4 p-3 text-decoration-none shadow-sm h-100 bg-white icu-equip-card">
                    <i class="fa-solid fa-bed-pulse text-dm-red fs-3 mb-2"></i>
                    <span class="fw-bold text-dark small d-block">ICU & Hospital Beds</span>
                    <small class="text-muted" style="font-size: 0.72rem;">Motorized 3 & 5 Function</small>
                </a>
            </div>
            <div class="col-6 col-md-3">
                <a href="oxygen-concentrator" class="card border rounded-4 p-3 text-decoration-none shadow-sm h-100 bg-white icu-equip-card">
                    <i class="fa-solid fa-lungs text-primary fs-3 mb-2"></i>
                    <span class="fw-bold text-dark small d-block">Oxygen Concentrators</span>
                    <small class="text-muted" style="font-size: 0.72rem;">5L & 10L High Purity</small>
                </a>
            </div>
            <div class="col-6 col-md-3">
                <a href="bipap-cpap" class="card border rounded-4 p-3 text-decoration-none shadow-sm h-100 bg-white icu-equip-card">
                    <i class="fa-solid fa-mask-ventilator text-success fs-3 mb-2"></i>
                    <span class="fw-bold text-dark small d-block">BiPAP & CPAP Units</span>
                    <small class="text-muted" style="font-size: 0.72rem;">Auto-ST Non-Invasive</small>
                </a>
            </div>
            <div class="col-6 col-md-3">
                <a href="wheelchairs" class="card border rounded-4 p-3 text-decoration-none shadow-sm h-100 bg-white icu-equip-card">
                    <i class="fa-solid fa-wheelchair text-warning fs-3 mb-2"></i>
                    <span class="fw-bold text-dark small d-block">Wheelchairs & Mobility</span>
                    <small class="text-muted" style="font-size: 0.72rem;">Electric & Manual</small>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- 9. EMERGENCY CALL TO ACTION FOOTER -->
<section class="py-5" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);">
    <div class="container py-4 text-center text-white">
        <span class="badge bg-danger px-3 py-1 rounded-pill fw-bold mb-3 small">Need Urgent ICU Setup?</span>
        <h2 class="display-6 fw-bold mb-3">Speak with Our Critical Care Specialist</h2>
        <p class="lead mb-4 opacity-75 mx-auto" style="max-width: 650px;">Get in touch right away for personalized guidance, doctor coordination, and rapid equipment deployment.</p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
            <a href="tel:+919319149644" class="btn btn-dm-red btn-lg rounded-pill px-5 py-3 fw-bold shadow">
                <i class="fa-solid fa-phone me-2"></i> Call +91 93191 49644
            </a>
            <a href="https://wa.me/919319149644?text=Hello%20DM%20Healthcare,%20I%20urgently%20need%20ICU%20Equipment%20Consultation." target="_blank" class="btn btn-success btn-lg rounded-pill px-5 py-3 fw-bold shadow">
                <i class="fa-brands fa-whatsapp me-2"></i> WhatsApp Consultation
            </a>
        </div>
    </div>
</section>

<!-- Interactive Category Filter Script -->
<script>
function filterIcuCategory(category, btn) {
    document.querySelectorAll('.icu-filter-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');

    const items = document.querySelectorAll('.icu-item');
    items.forEach(item => {
        if (category === 'all' || item.getAttribute('data-category') === category) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });
}
</script>

<?php
$frontend_custom_sections = ob_get_clean();
?>
