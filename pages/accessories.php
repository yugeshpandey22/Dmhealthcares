<?php
// DO NOT set $full_page_override = true;
$hide_default_welcome = true;

$frontend_custom_sections = '

<style>
:root {
    --primary-color: #E5252A;
    --dark-bg: #1e293b;
    --light-bg: #f8fafc;
    --border-color: rgba(0,0,0,0.05);
}

body {
    font-family: "Inter", sans-serif;
}

/* Hero Section */
.acc-hero {
    background: linear-gradient(135deg, #ffffff 0%, #fff5f5 100%);
    border-bottom: 1px solid var(--border-color);
    padding: 80px 0;
    position: relative;
    overflow: hidden;
}

/* Cards & Hover Effects */
.acc-card {
    background: white;
    border: 1px solid var(--border-color);
    border-radius: 16px;
    transition: all 0.3s ease;
    box-shadow: 0 4px 6px rgba(0,0,0,0.02);
    overflow: hidden;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.acc-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(229, 37, 42, 0.1);
    border-color: rgba(229, 37, 42, 0.2);
}

.acc-img-wrapper {
    height: 180px;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    border-bottom: 1px solid var(--border-color);
    display: flex;
    align-items: center;
    justify-content: center;
}

.feat-card {
    background: white;
    border: 1px solid var(--border-color);
    border-radius: 16px;
    padding: 2rem;
    transition: all 0.3s ease;
    text-align: center;
}

.feat-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.05);
}

/* Categories Badge */
.category-badge {
    background: rgba(10, 91, 255, 0.1);
    color: var(--primary-color);
    font-weight: 600;
    font-size: 12px;
    padding: 4px 12px;
    border-radius: 20px;
    margin-bottom: 15px;
    display: inline-block;
}
</style>

<!-- 1. Hero Section -->
<section class="acc-hero">
    <div class="container position-relative z-1 py-5">
        <div class="row align-items-center">
            <div class="col-lg-7 mb-5 mb-lg-0 pe-lg-5 text-center text-lg-start">
                <span class="badge bg-primary px-3 py-2 rounded-pill mb-4 fw-bold shadow-sm">Medical Consumables</span>
                <h1 class="display-5 fw-bold mb-4 text-dark">High-Quality Medical Accessories & Spares</h1>
                <p class="lead mb-4 text-muted" style="opacity: 0.9;">We stock genuine spare parts, disposable accessories, and medical consumables to ensure your medical equipment runs efficiently without interruption.</p>
                
                <div class="d-flex flex-wrap justify-content-center justify-content-lg-start gap-3 mt-4">
                    <a href="#inventory" class="btn btn-primary btn-lg fw-bold px-5 rounded-pill shadow-sm">
                        Browse Catalog
                    </a>
                    <a href="tel:+919319149644" class="btn btn-outline-dark btn-lg fw-bold px-5 rounded-pill">
                        Order in Bulk
                    </a>
                </div>
            </div>
            
            <div class="col-lg-5 text-center d-none d-lg-block">
                <div class="position-relative">
                    <div class="rounded-4 shadow-lg w-100 d-flex flex-column align-items-center justify-content-center bg-white border border-4 border-light" style="height: 400px;">
                        <div class="mb-4 bg-primary bg-opacity-10 p-5 rounded-circle d-flex align-items-center justify-content-center" style="width: 180px; height: 180px;">
                            <i class="fa-solid fa-box-open text-primary" style="font-size: 80px;"></i>
                        </div>
                        <span class="text-muted fw-bold text-uppercase tracking-wider">Original Spares</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. Accessories Catalog -->
<section id="inventory" class="py-5" style="background-color: var(--light-bg);">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">Our Accessories Catalog</h2>
            <div class="mx-auto mt-3 mb-4" style="width: 60px; height: 4px; background-color: var(--primary-color); border-radius: 2px;"></div>
            <p class="text-muted mx-auto" style="max-width: 600px;">Explore our comprehensive range of original accessories for Respiratory, ICU, and General Home Care equipment.</p>
        </div>

        <div class="row g-4">';

        $accessories = [
            // 1-10
            [
                "category" => "Patient Care", 
                "name" => "Airmatress", 
                "price" => "₹2,500", 
                "desc" => "Medical anti-bedsore alternating pressure bubble air mattress with quiet air compressor pump.", 
                "image" => "assets/images/equipment/manual_bed.jpg"
            ],
            [
                "category" => "Patient Care", 
                "name" => "Bed Sheet", 
                "price" => "₹500", 
                "desc" => "Hospital-grade waterproof, reusable & breathable patient bed sheet for hygiene and protection.", 
                "image" => "assets/images/equipment/manual_bed.jpg"
            ],
            [
                "category" => "Hygiene Care", 
                "name" => "BED-PAN", 
                "price" => "₹200", 
                "desc" => "Contoured fracture bed-pan designed for comfort, ease of use and easy sanitization.", 
                "image" => "assets/images/pages/wheelchair_recliner_commode.jpg"
            ],
            [
                "category" => "Respiratory", 
                "name" => "Bi-Pap Mask", 
                "price" => "₹2,500", 
                "desc" => "Ergonomic silicone cushioned full-face / nasal BiPAP mask with adjustable 4-point headgear.", 
                "image" => "assets/images/equipment/bipap_st.jpg"
            ],
            [
                "category" => "Respiratory", 
                "name" => "BiPAP Connector", 
                "price" => "₹1,000", 
                "desc" => "Medical grade 22mm circuit swivel connector and oxygen enrichment adapter port.", 
                "image" => "assets/images/equipment/bipap_st.jpg"
            ],
            [
                "category" => "Diagnostics", 
                "name" => "BP Apparatus Automatic", 
                "price" => "₹2,200", 
                "desc" => "Digital automatic upper-arm blood pressure monitor with pulse rate indicator & memory storage.", 
                "image" => "assets/images/equipment/patient_monitor.jpg"
            ],
            [
                "category" => "Respiratory", 
                "name" => "C-PAP MASK", 
                "price" => "₹2,500", 
                "desc" => "Leak-free continuous positive airway pressure mask for obstructive sleep apnea therapy.", 
                "image" => "assets/images/equipment/cpap.jpg"
            ],
            [
                "category" => "Mobility & Commode", 
                "name" => "COMMOD CHAIR WITH WHEELS", 
                "price" => "₹6,850", 
                "desc" => "Mobile rolling commode chair with locking castor wheels, soft cushioned seat & removable pail.", 
                "image" => "assets/images/pages/wheelchair_recliner_commode.jpg"
            ],
            [
                "category" => "Respiratory", 
                "name" => "CPAP NOSE MASK", 
                "price" => "₹7,850", 
                "desc" => "Premium ultra-light nasal cushion mask engineered for whisper-quiet sleep and minimal facial contact.", 
                "image" => "assets/images/equipment/cpap.jpg"
            ],
            [
                "category" => "DVT Prevention", 
                "name" => "DVT Sleeves", 
                "price" => "₹2,500", 
                "desc" => "Sequential pneumatic compression calf/thigh garment sleeves for deep vein thrombosis prevention.", 
                "image" => "assets/images/equipment/dvt_pump.jpg"
            ],

            // 11-20
            [
                "category" => "Patient Care", 
                "name" => "FEEDING BAG", 
                "price" => "₹550", 
                "desc" => "Graduated enteral nutrition feeding bag with roller clamp tube for Ryle's tube / PEG feeding.", 
                "image" => "assets/images/equipment/infusion_pump.jpg"
            ],
            [
                "category" => "Oxygen Therapy", 
                "name" => "Flow Meter 10 ltrs", 
                "price" => "NA", 
                "desc" => "High-accuracy oxygen flowmeter regulator (0-10 LPM) with shatterproof humidifier chamber bottle.", 
                "image" => "assets/images/equipment/oxygen_cylinder.jpg"
            ],
            [
                "category" => "Oxygen Therapy", 
                "name" => "Flow Meter 50 ltrs", 
                "price" => "₹2,500", 
                "desc" => "Heavy-duty commercial/jumbo cylinder pressure regulator flowmeter with dual stage safety gauge.", 
                "image" => "assets/images/equipment/jumbo_cylinder.jpg"
            ],
            [
                "category" => "Mobility Support", 
                "name" => "Foldable Walker", 
                "price" => "₹1,650", 
                "desc" => "Lightweight anodized aluminum folding walking frame with one-button reciprocal folding.", 
                "image" => "assets/images/pages/wheelchair_manual_standard.jpg"
            ],
            [
                "category" => "Physiotherapy", 
                "name" => "Hand gripper", 
                "price" => "₹250", 
                "desc" => "Ergonomic resistance hand exerciser gripper for forearm, finger strengthening & stroke recovery.", 
                "image" => "assets/images/pages/physio_rehab.png"
            ],
            [
                "category" => "Mobility & Commode", 
                "name" => "Comod Chair Local", 
                "price" => "₹2,250", 
                "desc" => "Sturdy folding bedside commode chair with anti-slip rubber shoes and removable plastic pan.", 
                "image" => "assets/images/pages/wheelchair_recliner_commode.jpg"
            ],
            [
                "category" => "Patient Care", 
                "name" => "Medicine Organizer", 
                "price" => "₹250", 
                "desc" => "7-day weekly AM/PM pill box organizer with moisture-proof snap compartments.", 
                "image" => "assets/images/equipment/patient_monitor.jpg"
            ],
            [
                "category" => "Respiratory", 
                "name" => "NEBULIZATION MASK", 
                "price" => "₹150", 
                "desc" => "Soft medical aerosol nebulizer mask with medicine reservoir cup and flexible star-lumen tube.", 
                "image" => "assets/images/equipment/cpap.jpg"
            ],
            [
                "category" => "Respiratory", 
                "name" => "Nebulizer", 
                "price" => "₹1,850", 
                "desc" => "Heavy-duty piston compressor nebulizer for effective asthma, bronchitis & respiratory therapy.", 
                "image" => "assets/images/equipment/suction_machine.jpg"
            ],
            [
                "category" => "Respiratory", 
                "name" => "PORTABLE NEBULIZER", 
                "price" => "₹4,200", 
                "desc" => "Silent vibrating mesh handheld portable nebulizer with USB rechargeable battery for travel.", 
                "image" => "assets/images/equipment/suction_machine.jpg"
            ],

            // 21-30
            [
                "category" => "Diagnostics", 
                "name" => "PULSE OXIMETER", 
                "price" => "₹2,200", 
                "desc" => "Fingertip digital medical pulse oximeter with multi-directional OLED display (SpO2 & Pulse).", 
                "image" => "assets/images/equipment/patient_monitor.jpg"
            ],
            [
                "category" => "Hygiene Care", 
                "name" => "SEAT RAISER 4 INCHES", 
                "price" => "₹1,750", 
                "desc" => "Elevated 4-inch commode toilet seat raiser with side locking brackets for post-hip/knee surgery.", 
                "image" => "assets/images/pages/wheelchair_recliner_commode.jpg"
            ],
            [
                "category" => "Hygiene Care", 
                "name" => "SEAT RAISER 6 INCHES", 
                "price" => "₹1,850", 
                "desc" => "Elevated 6-inch commode toilet seat raiser with ergonomic front contour and universal fit.", 
                "image" => "assets/images/pages/wheelchair_recliner_commode.jpg"
            ],
            [
                "category" => "Patient Room", 
                "name" => "Stool", 
                "price" => "₹480", 
                "desc" => "Heavy-duty anti-slip bedside step stool / bathroom shower stool with non-skid rubber feet.", 
                "image" => "assets/images/equipment/bed_step_up.jpg"
            ],
            [
                "category" => "Suction Care", 
                "name" => "Suction Jar", 
                "price" => "₹650", 
                "desc" => "Autoclavable high-grade polycarbonate suction canister jar with overflow float valve mechanism.", 
                "image" => "assets/images/equipment/suction_machine.jpg"
            ],
            [
                "category" => "Diagnostics", 
                "name" => "SUGAR MACHINE", 
                "price" => "₹1,100", 
                "desc" => "Digital blood glucose monitoring glucometer kit with test strips and lancing device.", 
                "image" => "assets/images/equipment/patient_monitor.jpg"
            ],
            [
                "category" => "Physiotherapy", 
                "name" => "Theraband", 
                "price" => "₹150", 
                "desc" => "Professional elastic resistance exercise band for muscle strengthening, mobility & rehabilitation.", 
                "image" => "assets/images/pages/physio_rehab.png"
            ],
            [
                "category" => "Diagnostics", 
                "name" => "Thermometer Electronic", 
                "price" => "₹250", 
                "desc" => "Fast-reading digital clinical fever thermometer with fever alarm beep and auto shut-off.", 
                "image" => "assets/images/equipment/patient_monitor.jpg"
            ],
            [
                "category" => "Physiotherapy", 
                "name" => "Abdomen Ball", 
                "price" => "₹2,000", 
                "desc" => "Anti-burst physiotherapy gym Swiss ball for core stability, balance exercises & spinal rehabilitation.", 
                "image" => "assets/images/pages/physio_rehab.png"
            ],
            [
                "category" => "Ortho Support", 
                "name" => "Abduction Pillow", 
                "price" => "₹1,850", 
                "desc" => "Contoured high-density foam hip abduction wedge pillow with adjustable velcro straps.", 
                "image" => "assets/images/equipment/manual_bed.jpg"
            ],

            // 31-40
            [
                "category" => "Respiratory", 
                "name" => "AUTO C-PAP BPL", 
                "price" => "₹42,000", 
                "desc" => "BPL LifePhone Auto CPAP machine with intelligent auto-titration, heated humidifier and quiet motor.", 
                "image" => "assets/images/equipment/cpap.jpg"
            ],
            [
                "category" => "DVT Prevention", 
                "name" => "DVT PUMP CIRONA", 
                "price" => "₹28,500", 
                "desc" => "Cirona portable pneumatic deep vein thrombosis prophylaxis system with rechargeable battery.", 
                "image" => "assets/images/equipment/dvt_pump.jpg"
            ],
            [
                "category" => "Patient Room", 
                "name" => "ELECTRIC RECLINER", 
                "price" => "₹3,850", 
                "desc" => "Motorized adjustable bed backrest recliner with remote control for comfortable sitting & eating.", 
                "image" => "assets/images/equipment/manual_bed.jpg"
            ],
            [
                "category" => "Patient Room", 
                "name" => "IV Stand powder coated", 
                "price" => "₹1,500", 
                "desc" => "4-hook height-adjustable powder-coated steel IV infusion drip stand with heavy 5-caster base.", 
                "image" => "assets/images/equipment/iv_stand.jpg"
            ],
            [
                "category" => "Patient Room", 
                "name" => "IV Stand Stainless Steel", 
                "price" => "₹6,500", 
                "desc" => "Premium Grade 304 hospital surgical stainless steel heavy-duty IV drip stand with smooth glide.", 
                "image" => "assets/images/equipment/iv_stand.jpg"
            ],
            [
                "category" => "Mobility Support", 
                "name" => "Reclining Wheelchair with Commod", 
                "price" => "₹18,500", 
                "desc" => "High-back fully reclining luxury wheelchair with detachable commode, headrest & elevating legrests.", 
                "image" => "assets/images/pages/wheelchair_recliner_commode.jpg"
            ],
            [
                "category" => "Diagnostics", 
                "name" => "BP Apparatus Manual", 
                "price" => "₹1,650", 
                "desc" => "Clinical aneroid manual sphygmomanometer blood pressure dial with adult cuff and stethoscope.", 
                "image" => "assets/images/equipment/patient_monitor.jpg"
            ],
            [
                "category" => "Suction Care", 
                "name" => "Suction Machine", 
                "price" => "₹10,500", 
                "desc" => "Heavy-duty electric oil-free lubrication medical suction apparatus for tracheostomy and clinic care.", 
                "image" => "assets/images/equipment/suction_machine.jpg"
            ],
            [
                "category" => "Mobility Support", 
                "name" => "Tynor & Karma Walker", 
                "price" => "₹2,250", 
                "desc" => "Branded lightweight adult reciprocal folding mobility walker with ergonomic foam handgrips.", 
                "image" => "assets/images/pages/wheelchair_manual_standard.jpg"
            ],
            [
                "category" => "Ortho Support", 
                "name" => "TYNOR ARM SLING", 
                "price" => "₹850", 
                "desc" => "Breathable 3-layer bonded fabric arm pouch sling for fracture immobilization and shoulder support.", 
                "image" => "assets/images/pages/physio_rehab.png"
            ],

            // 41-47
            [
                "category" => "Mobility & Commode", 
                "name" => "TYNOR COMOD CHAIR", 
                "price" => "₹3,850", 
                "desc" => "Genuine Tynor height-adjustable folding commode chair with anti-corrosion chrome finish.", 
                "image" => "assets/images/pages/wheelchair_recliner_commode.jpg"
            ],
            [
                "category" => "Mobility Support", 
                "name" => "TYNOR Walking Stick", 
                "price" => "₹1,050", 
                "desc" => "Tynor premium adjustable aluminum walking cane with ergonomic handle and wide rubber tip.", 
                "image" => "assets/images/pages/wheelchair_manual_standard.jpg"
            ],
            [
                "category" => "Mobility Support", 
                "name" => "Walker", 
                "price" => "₹1,000", 
                "desc" => "Standard lightweight rehabilitation walking frame for patient stability and balance support.", 
                "image" => "assets/images/pages/wheelchair_manual_standard.jpg"
            ],
            [
                "category" => "Mobility Support", 
                "name" => "WALKING STICK", 
                "price" => "₹750", 
                "desc" => "Standard height-adjustable L-handle aluminum walking cane with non-slip safety rubber shoe.", 
                "image" => "assets/images/pages/wheelchair_manual_standard.jpg"
            ],
            [
                "category" => "Mobility Support", 
                "name" => "Wheelchair", 
                "price" => "₹7,850", 
                "desc" => "Standard foldable patient transit wheelchair with attendant handbrakes and padded upholstery.", 
                "image" => "assets/images/pages/wheelchair_manual_standard.jpg"
            ],
            [
                "category" => "Respiratory", 
                "name" => "HME Filter", 
                "price" => "₹500", 
                "desc" => "Heat & Moisture Exchanger (HME) bacterial and viral filter for ventilators and breathing circuits.", 
                "image" => "assets/images/equipment/bipap_st.jpg"
            ],
            [
                "category" => "Respiratory", 
                "name" => "Civil Connector", 
                "price" => "₹600", 
                "desc" => "Sterile flexible corrugated catheter mount civil connector with dual suction port.", 
                "image" => "assets/images/equipment/bipap_st.jpg"
            ],

            // Existing catalog items kept intact
            [
                "category" => "Suction Care", 
                "name" => "DOUBLE JAR SUCTION MACHINE", 
                "price" => "₹3,000", 
                "desc" => "High-vacuum dual jar medical suction unit with overflow safety trap for airway clearance.", 
                "image" => "assets/images/equipment/suction_machine.jpg"
            ],
            [
                "category" => "Patient Room", 
                "name" => "Cardiac Table", 
                "price" => "₹4,800", 
                "desc" => "Adjustable overbed hospital cardiac food and reading table with smooth rolling lock wheels.", 
                "image" => "assets/images/equipment/cardiac_table.jpg"
            ],
            [
                "category" => "DVT Prevention", 
                "name" => "DVT Pump", 
                "price" => "₹6,000", 
                "desc" => "Pneumatic sequential compression device for deep vein thrombosis prevention in bedridden patients.", 
                "image" => "assets/images/equipment/dvt_pump.jpg"
            ],
            [
                "category" => "Cold Chain", 
                "name" => "Medical Freezer", 
                "price" => "₹9,000", 
                "desc" => "Deep freezer / biomedical temperature storage for sensitive clinical medicines and cold packs.", 
                "image" => "assets/images/equipment/medical_freezer.jpg"
            ],
            [
                "category" => "Bed Accessories", 
                "name" => "Bed Step-up", 
                "price" => "₹500", 
                "desc" => "Heavy-duty anti-slip single/double step stool for easy and safe patient bed access.", 
                "image" => "assets/images/equipment/bed_step_up.jpg"
            ],
            [
                "category" => "Respiratory", 
                "name" => "Oxygen Nasal Cannulas", 
                "price" => "On Request", 
                "desc" => "Soft, flexible medical-grade nasal prongs for continuous comfortable oxygen delivery.", 
                "image" => "assets/images/equipment/oxygen_cylinder.jpg"
            ],
            [
                "category" => "Respiratory", 
                "name" => "Humidifier Bottles", 
                "price" => "On Request", 
                "desc" => "Replacement autoclavable humidifier bottles for oxygen concentrators and flowmeters.", 
                "image" => "assets/images/equipment/oxygen_cylinder.jpg"
            ]
        ];

        foreach($accessories as $item) {
            $price_display = isset($item['price']) ? '<div class="fw-bold text-dm-red fs-5 mb-2">'.$item['price'].'</div>' : '';
            $frontend_custom_sections .= '
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="acc-card h-100 d-flex flex-column overflow-hidden shadow-sm" style="border-radius: 16px; border: 1px solid #e2e8f0; background: #fff;">
                    <div class="position-relative" style="height: 175px; overflow: hidden; background: #fff; border-bottom: 1px solid #f1f5f9; padding: 10px;">
                        <img src="'.$item['image'].'" onerror="this.onerror=null;this.src=\'assets/images/pages/hospital_bed_home.png\';" alt="'.$item['name'].'" style="width: 100%; height: 100%; object-fit: contain;">
                        <span class="position-absolute top-0 end-0 m-2 badge bg-primary bg-opacity-10 text-primary border border-primary border-opacity-25 rounded-pill px-2 py-1 small fw-semibold" style="font-size: 0.72rem;">'.$item['category'].'</span>
                    </div>
                    <div class="p-3 d-flex flex-column flex-grow-1 text-center">
                        <h6 class="fw-bold text-dark mb-1" style="font-size: 0.95rem;">'.$item['name'].'</h6>
                        '.$price_display.'
                        <p class="text-muted small mb-3 flex-grow-1" style="font-size: 0.78rem; line-height: 1.45;">'.$item['desc'].'</p>
                        
                        <a href="https://wa.me/919319149644?text='.urlencode("Hello DM Healthcare, I want to inquire about " . $item['name'] . " (Price: " . $item['price'] . ")").'" target="_blank" class="btn btn-outline-danger rounded-pill w-100 fw-bold btn-sm py-2 mt-auto" style="border-color: var(--primary-color); color: var(--primary-color); transition: all 0.2s;">
                            <i class="fa-brands fa-whatsapp me-1"></i> Order on WhatsApp
                        </a>
                    </div>
                </div>
            </div>';
        }

$frontend_custom_sections .= '
        </div>

        <!-- Delivery & Disinfection Tariff -->
        <div class="mt-5 p-4 bg-white rounded-4 border shadow-sm">
            <h5 class="fw-bold text-dark mb-3"><i class="fa-solid fa-truck-ramp-box text-primary me-2"></i> Logistics, Freight & Hospital-Grade Disinfection</h5>
            <div class="row g-3">
                <div class="col-md-4">
                    <div class="p-3 bg-light rounded-3 border h-100">
                        <div class="small text-muted fw-semibold">Local Delivery</div>
                        <h6 class="fw-bold text-dark mb-1">Freight charges Local</h6>
                        <span class="fs-5 fw-bold text-primary">₹700</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 bg-light rounded-3 border h-100">
                        <div class="small text-muted fw-semibold">NCR Coverage</div>
                        <h6 class="fw-bold text-dark mb-1">Freight DELHI NCR</h6>
                        <span class="fs-5 fw-bold text-primary">₹3,000</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 bg-light rounded-3 border h-100">
                        <div class="small text-muted fw-semibold">Hospital Protocol</div>
                        <h6 class="fw-bold text-dark mb-1">DISINFECTION PROCESS</h6>
                        <span class="fs-5 fw-bold text-primary">₹2,500</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. Why Source From Us -->
<section class="py-5">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">Why Source Accessories From Us?</h2>
            <div class="mx-auto mt-3 mb-4" style="width: 60px; height: 4px; background-color: var(--primary-color); border-radius: 2px;"></div>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="feat-card h-100">
                    <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fa-solid fa-certificate fs-4"></i>
                    </div>
                    <h6 class="fw-bold mb-2">100% Genuine</h6>
                    <p class="text-muted small mb-0">We only supply OEM approved and genuine branded accessories to ensure safety.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="feat-card h-100">
                    <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fa-solid fa-shield-virus fs-4"></i>
                    </div>
                    <h6 class="fw-bold mb-2">Sterile & Safe</h6>
                    <p class="text-muted small mb-0">All disposable items come in sealed, medically sterile packaging.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="feat-card h-100">
                    <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fa-solid fa-boxes-stacked fs-4"></i>
                    </div>
                    <h6 class="fw-bold mb-2">Bulk Availability</h6>
                    <p class="text-muted small mb-0">We maintain high stock levels to support both retail and wholesale clinic demands.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="feat-card h-100">
                    <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fa-solid fa-truck-fast fs-4"></i>
                    </div>
                    <h6 class="fw-bold mb-2">Fast Dispatch</h6>
                    <p class="text-muted small mb-0">Quick local delivery for emergency requirements directly to your doorstep.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. Contact CTA Card -->
<div class="my-5 p-4 p-md-5 rounded-4 text-center text-white position-relative overflow-hidden shadow-lg" style="background: radial-gradient(circle at 15% 20%, rgba(229, 37, 42, 0.22) 0%, transparent 45%), radial-gradient(circle at 85% 80%, rgba(2, 132, 199, 0.22) 0%, transparent 45%), linear-gradient(135deg, #0f172a 0%, #1e293b 100%); border: 1px solid rgba(255, 255, 255, 0.12); box-shadow: 0 20px 40px -15px rgba(15, 23, 42, 0.3) !important;">
    <span class="badge bg-danger bg-opacity-25 text-danger px-3 py-1 rounded-pill fw-semibold mb-3 border border-danger border-opacity-50 small">
        <i class="fa-solid fa-screwdriver-wrench me-1"></i> Medical Spares & Sourcing
    </span>
    <h2 class="display-6 fw-bold mb-3 text-white">Need Specific Medical Spares?</h2>
    <p class="lead mb-4 text-light opacity-90 mx-auto" style="max-width: 640px; font-size: 1.05rem; line-height: 1.65;">
        If you are looking for a specific machine part, filter, or specialized disposable, reach out to us. We will source it for you immediately.
    </p>
    <div class="d-flex flex-wrap justify-content-center gap-3 mt-4">
        <a href="tel:+919319149644" class="btn btn-danger btn-lg fw-bold px-4 py-3 rounded-pill shadow-sm d-inline-flex align-items-center gap-2" style="background-color: var(--primary-color); border-color: var(--primary-color);">
            <i class="fa-solid fa-phone"></i> +91 93191 49644
        </a>
        <a href="https://wa.me/919319149644?text=I+need+specific+medical+spares+or+disposables" target="_blank" class="btn btn-success btn-lg fw-bold px-4 py-3 rounded-pill shadow-sm d-inline-flex align-items-center gap-2">
            <i class="fa-brands fa-whatsapp fs-5"></i> Message on WhatsApp
        </a>
    </div>
</div>

<!-- 5. Home Care Rate Card Cross-Promotion Banner -->
<div class="mb-5 p-4 rounded-4 border bg-white shadow-sm">
    <div class="row align-items-center g-3">
        <div class="col-md-8">
            <span class="badge bg-danger bg-opacity-10 text-danger rounded-pill px-3 py-1 fw-bold mb-2">Home Healthcare Services</span>
            <h4 class="fw-bold text-dark mb-1">Looking for Home Nursing, Caregivers or Doctor Visits?</h4>
            <p class="text-muted small mb-0">Explore our complete official tariff with transparent per-day rates for 12h/24h nursing, ICU setups, physiotherapy, and doorstep clinical procedures.</p>
        </div>
        <div class="col-md-4 text-md-end">
            <a href="rate-cards" class="btn btn-danger rounded-pill px-4 py-2 fw-bold shadow-sm" style="background-color: var(--primary-color); border-color: var(--primary-color);">
                <i class="fa-solid fa-file-invoice-dollar me-1"></i> View Services Rate Card
            </a>
        </div>
    </div>
</div>
';
?>
