<?php
/**
 * DM Healthcare - Medical Oxygen Cylinder & Emergency Refill Service
 * Distinct, High-Conversion Emergency Mobility & Respiratory Portal
 */

$display_title = "Medical Oxygen Cylinders & 24/7 Refill";
$seo_title = "Oxygen Cylinder Services & Doorstep Refill in Delhi NCR, Faridabad - DM Healthcare";
$seo_desc = "24/7 emergency medical oxygen cylinder services & doorstep refill across Delhi NCR, Faridabad, Noida & Gurugram. 30-45 min delivery with regulator, trolley & mask.";
$short_desc = "Certified 99% pure IP grade medical oxygen cylinders (B-Type & D-Type Jumbo) with complete accessory kit and 24/7 instant refill swap service.";
$category_name = "Medical Equipment";
$full_page_override = true;

ob_start();
?>
<style>
    :root {
        --dm-red: #e5252a;
        --dm-red-dark: #c8102e;
        --dm-navy: #0f172a;
        --dm-teal: #0d9488;
    }
    .text-dm-red { color: var(--dm-red) !important; }
    .bg-dm-red { background-color: var(--dm-red) !important; color: #fff !important; }
    .btn-dm-red { background-color: var(--dm-red); border-color: var(--dm-red); color: #fff; }
    .btn-dm-red:hover { background-color: var(--dm-red-dark); border-color: var(--dm-red-dark); color: #fff; }
    .btn-outline-dm-red { border-color: var(--dm-red); color: var(--dm-red); }
    .btn-outline-dm-red:hover, .btn-outline-dm-red.active { background-color: var(--dm-red); border-color: var(--dm-red); color: #fff; }

    /* Unique Hero Dark Theme for Oxygen Emergency */
    .cyl-hero-dark {
        background: radial-gradient(circle at 80% 20%, rgba(229, 37, 42, 0.15) 0%, transparent 50%),
                    radial-gradient(circle at 10% 80%, rgba(13, 148, 136, 0.12) 0%, transparent 50%),
                    linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
        color: #ffffff;
        position: relative;
    }
    .cyl-hero-dark .badge-emergency {
        background: rgba(229, 37, 42, 0.25);
        color: #ff6b6e;
        border: 1px solid rgba(229, 37, 42, 0.4);
    }
    .cyl-kit-card {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 14px;
        transition: all 0.25s ease;
    }
    .cyl-kit-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 24px rgba(15, 23, 42, 0.08);
        border-color: var(--dm-red);
    }
    .cyl-calc-box {
        background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
        border: 2px solid #e2e8f0;
        border-radius: 20px;
    }
    .flow-pill-btn {
        border: 1px solid #cbd5e1;
        background: #ffffff;
        color: #334155;
        font-weight: 600;
        padding: 6px 14px;
        border-radius: 50px;
        font-size: 0.85rem;
        cursor: pointer;
        transition: all 0.2s ease;
    }
    .flow-pill-btn.active, .flow-pill-btn:hover {
        background: var(--dm-red);
        border-color: var(--dm-red);
        color: #ffffff;
        box-shadow: 0 4px 10px rgba(229, 37, 42, 0.25);
    }
</style>

<!-- 1. Unique Emergency Hero Section -->
<section class="cyl-hero-dark py-4 py-lg-5">
    <div class="container py-lg-3">
        <!-- Live Emergency Dispatch Banner -->
        <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill badge-emergency small fw-bold mb-3">
            <span class="spinner-grow spinner-grow-sm text-danger" role="status"></span>
            <span>24/7 Rapid Emergency Dispatch • 30-45 Mins Reach Across Delhi NCR</span>
        </div>

        <div class="row align-items-center g-4">
            <div class="col-lg-7">
                <h1 class="display-6 fw-bold text-white lh-sm mb-3">
                    Medical <span class="text-dm-red">Oxygen Cylinders</span> & Instant Doorstep Refill
                </h1>
                <p class="text-light fs-6 mb-4 opacity-90" style="line-height: 1.7;">
                    Certified <strong>99% pure IP grade</strong> compressed medical oxygen cylinders delivered with complete hospital-standard regulator, precision flowmeter, humidifier bottle, mobile trolley stand, and sterile cannula.
                </p>

                <!-- Quick Action Buttons -->
                <div class="d-flex flex-wrap gap-2 mb-4">
                    <a href="tel:+919319149644" class="btn btn-dm-red btn-lg rounded-pill px-4 py-2 fw-bold shadow-sm d-inline-flex align-items-center gap-2 small">
                        <i class="fa-solid fa-phone-volume"></i> Call +91 93191 49644
                    </a>
                    <a href="https://wa.me/919319149644?text=Hi%20DM%20Healthcare,%20I%20urgently%20need%20an%20Oxygen%20Cylinder%20or%20Refill." target="_blank" class="btn btn-outline-success btn-lg rounded-pill px-4 py-2 fw-bold d-inline-flex align-items-center gap-2 small bg-white text-success border-white">
                        <i class="fa-brands fa-whatsapp"></i> WhatsApp Refill / Booking
                    </a>
                    <a href="https://wa.me/919319149644?text=Hi%20DM%20Healthcare,%20I%20urgently%20need%20an%20Oxygen%20Cylinder%20or%20Refill." target="_blank" class="btn btn-outline-light btn-lg rounded-pill px-4 py-2 fw-bold small">
                        Request Refill
                    </a>
                </div>

                <!-- Emergency Highlights Row -->
                <div class="row g-3 pt-3 border-top border-secondary border-opacity-50">
                    <div class="col-4 d-flex align-items-center gap-2">
                        <i class="fa-solid fa-bolt-lightning text-warning fs-5"></i>
                        <div>
                            <span class="d-block text-white fw-bold small">30 Mins</span>
                            <small class="text-light opacity-75" style="font-size: 0.7rem;">Average Delivery</small>
                        </div>
                    </div>
                    <div class="col-4 d-flex align-items-center gap-2">
                        <i class="fa-solid fa-shield-check text-success fs-5"></i>
                        <div>
                            <span class="d-block text-white fw-bold small">Hydro-Tested</span>
                            <small class="text-light opacity-75" style="font-size: 0.7rem;">100% Safe Cylinders</small>
                        </div>
                    </div>
                    <div class="col-4 d-flex align-items-center gap-2">
                        <i class="fa-solid fa-repeat text-info fs-5"></i>
                        <div>
                            <span class="d-block text-white fw-bold small">Doorstep Swap</span>
                            <small class="text-light opacity-75" style="font-size: 0.7rem;">Zero Waiting Time</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Visual Banner Card -->
            <div class="col-lg-5">
                <div class="card bg-white text-dark rounded-4 p-4 shadow-lg border-0 position-relative overflow-hidden">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div>
                            <span class="badge bg-danger bg-opacity-10 text-danger rounded-pill px-3 py-1 small fw-bold mb-1">
                                Ready for Dispatch
                            </span>
                            <h5 class="fw-bold mb-0 text-dark">Complete O2 Cylinder Kit</h5>
                        </div>
                        <span class="fs-4 fw-bold text-dm-red">₹1,000<small class="fs-6 text-muted">/starting</small></span>
                    </div>

                    <img src="assets/images/pages/oxygen_concentrator_hero.jpg" alt="Medical Oxygen Cylinder Delivery Kit" class="img-fluid rounded-3 mb-3 border w-100" style="height: 180px; object-fit: cover;">

                    <div class="bg-light p-2 px-3 rounded-3 mb-3 border small text-muted">
                        <div class="d-flex justify-content-between py-1 border-bottom">
                            <span><i class="fa-solid fa-check text-success me-1"></i> O2 Cylinder 10 ltrs</span>
                            <strong class="text-dark">₹1,000 (Refill ₹700)</strong>
                        </div>
                        <div class="d-flex justify-content-between py-1">
                            <span><i class="fa-solid fa-check text-success me-1"></i> O2 Cylinder 50 ltrs</span>
                            <strong class="text-dark">₹2,000 (Refill ₹1,000)</strong>
                        </div>
                    </div>

                    <a href="tel:+919319149644" class="btn btn-dm-red w-100 rounded-pill fw-bold py-2 shadow-sm">
                        <i class="fa-solid fa-truck-fast me-1"></i> Order Instant Emergency Delivery
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. Interactive Oxygen Duration Calculator (Unique to Cylinders!) -->
<section class="py-4 py-lg-5 bg-white border-bottom">
    <div class="container">
        <div class="cyl-calc-box p-4 p-md-5 max-w-900 mx-auto shadow-sm">
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <span class="badge bg-danger bg-opacity-10 text-danger px-3 py-1 rounded-pill fw-bold mb-2 small">Interactive Calculator</span>
                    <h3 class="fw-bold text-dark mb-2">Check Cylinder Supply Duration</h3>
                    <p class="text-muted small mb-3">Select your prescribed oxygen flow rate (LPM) to see how long each cylinder size will last continuously.</p>

                    <label class="form-label small fw-bold text-secondary mb-2">Select Prescribed Flow Rate (LPM):</label>
                    <div class="d-flex flex-wrap gap-2 mb-3" id="flowPills">
                        <button type="button" class="flow-pill-btn" onclick="calcDuration(1, this)">1 LPM</button>
                        <button type="button" class="flow-pill-btn active" onclick="calcDuration(2, this)">2 LPM</button>
                        <button type="button" class="flow-pill-btn" onclick="calcDuration(3, this)">3 LPM</button>
                        <button type="button" class="flow-pill-btn" onclick="calcDuration(4, this)">4 LPM</button>
                        <button type="button" class="flow-pill-btn" onclick="calcDuration(6, this)">6 LPM</button>
                        <button type="button" class="flow-pill-btn" onclick="calcDuration(10, this)">10 LPM</button>
                    </div>
                    <small class="text-muted d-block"><i class="fa-solid fa-circle-info text-primary me-1"></i> 2 LPM is the standard resting prescription for most home patients.</small>
                </div>

                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="card bg-white border rounded-4 p-3 text-center shadow-sm h-100">
                                <span class="badge bg-secondary bg-opacity-10 text-secondary rounded-pill px-2 py-1 small mb-2">B-Type (10L)</span>
                                <h2 class="fw-bold text-dm-red mb-0" id="bTypeHours">11 - 12</h2>
                                <span class="small text-muted fw-semibold">Continuous Hours</span>
                                <small class="text-secondary d-block mt-2 pt-2 border-top" style="font-size: 0.72rem;">Portable bedside kit</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card bg-white border rounded-4 p-3 text-center shadow-sm h-100">
                                <span class="badge bg-primary bg-opacity-10 text-primary rounded-pill px-2 py-1 small mb-2">D-Type Jumbo (46.7L)</span>
                                <h2 class="fw-bold text-primary mb-0" id="dTypeHours">52 - 56</h2>
                                <span class="small text-muted fw-semibold">Continuous Hours</span>
                                <small class="text-secondary d-block mt-2 pt-2 border-top" style="font-size: 0.72rem;">High capacity backup</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. What Arrives at Your Home: Complete 6-Piece Kit -->
<section class="py-4 py-lg-5 bg-light border-bottom">
    <div class="container">
        <div class="text-center max-w-700 mx-auto mb-4">
            <span class="badge bg-secondary bg-opacity-10 text-secondary px-3 py-1 rounded-pill fw-semibold mb-1 small">Everything Included</span>
            <h3 class="fw-bold text-dark mb-1">Complete 6-Piece Oxygen Setup</h3>
            <p class="text-muted small">No need to arrange extra accessories. Our technician arrives with everything needed for immediate bedside operation.</p>
        </div>

        <div class="row g-3">
            <div class="col-6 col-md-4 col-lg-2">
                <div class="cyl-kit-card p-3 text-center h-100">
                    <div class="rounded-circle bg-danger bg-opacity-10 text-dm-red d-inline-flex align-items-center justify-content-center mb-2" style="width: 44px; height: 44px;">
                        <i class="fa-solid fa-flask fs-5"></i>
                    </div>
                    <h6 class="fw-bold text-dark mb-1 small">O2 Cylinder</h6>
                    <small class="text-muted" style="font-size: 0.72rem;">Hydro-tested full cylinder</small>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="cyl-kit-card p-3 text-center h-100">
                    <div class="rounded-circle bg-primary bg-opacity-10 text-primary d-inline-flex align-items-center justify-content-center mb-2" style="width: 44px; height: 44px;">
                        <i class="fa-solid fa-gauge-high fs-5"></i>
                    </div>
                    <h6 class="fw-bold text-dark mb-1 small">Brass Regulator</h6>
                    <small class="text-muted" style="font-size: 0.72rem;">High precision pressure gauge</small>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="cyl-kit-card p-3 text-center h-100">
                    <div class="rounded-circle bg-success bg-opacity-10 text-success d-inline-flex align-items-center justify-content-center mb-2" style="width: 44px; height: 44px;">
                        <i class="fa-solid fa-sliders fs-5"></i>
                    </div>
                    <h6 class="fw-bold text-dark mb-1 small">Flowmeter</h6>
                    <small class="text-muted" style="font-size: 0.72rem;">0.5 to 15 LPM fine adjustment</small>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="cyl-kit-card p-3 text-center h-100">
                    <div class="rounded-circle bg-info bg-opacity-10 text-info d-inline-flex align-items-center justify-content-center mb-2" style="width: 44px; height: 44px;">
                        <i class="fa-solid fa-droplet fs-5"></i>
                    </div>
                    <h6 class="fw-bold text-dark mb-1 small">Humidifier Bottle</h6>
                    <small class="text-muted" style="font-size: 0.72rem;">Moisturizes dry oxygen</small>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="cyl-kit-card p-3 text-center h-100">
                    <div class="rounded-circle bg-warning bg-opacity-10 text-dark d-inline-flex align-items-center justify-content-center mb-2" style="width: 44px; height: 44px;">
                        <i class="fa-solid fa-cart-shopping fs-5"></i>
                    </div>
                    <h6 class="fw-bold text-dark mb-1 small">Trolley Stand</h6>
                    <small class="text-muted" style="font-size: 0.72rem;">Wheeled safety cart with chain</small>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="cyl-kit-card p-3 text-center h-100">
                    <div class="rounded-circle bg-dark bg-opacity-10 text-dark d-inline-flex align-items-center justify-content-center mb-2" style="width: 44px; height: 44px;">
                        <i class="fa-solid fa-mask-face fs-5"></i>
                    </div>
                    <h6 class="fw-bold text-dark mb-1 small">Sealed Mask Kit</h6>
                    <small class="text-muted" style="font-size: 0.72rem;">Cannula & sterile mask</small>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. How 24/7 Doorstep Refill & Swap Works -->
<section class="py-4 py-lg-5 bg-white border-bottom">
    <div class="container">
        <div class="text-center max-w-700 mx-auto mb-4">
            <span class="badge bg-danger bg-opacity-10 text-danger px-3 py-1 rounded-pill fw-semibold mb-1 small">Instant Swap</span>
            <h3 class="fw-bold text-dark mb-1">How Instant Doorstep Refill Works</h3>
            <p class="text-muted small">Never run out of oxygen. When your cylinder needle drops, we swap it at your doorstep within 30-45 minutes.</p>
        </div>

        <div class="row g-3 text-center">
            <div class="col-sm-6 col-lg-3">
                <div class="card h-100 border rounded-4 p-3 bg-light">
                    <div class="rounded-circle bg-danger bg-opacity-10 text-dm-red d-inline-flex align-items-center justify-content-center mx-auto mb-2" style="width: 50px; height: 50px;">
                        <span class="fw-bold fs-5">1</span>
                    </div>
                    <h6 class="fw-bold text-dark mb-1">Call / WhatsApp</h6>
                    <p class="small text-muted mb-0">Contact our 24/7 helpline at +91 88606 00423 when pressure drops to 20 kg/cm².</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card h-100 border rounded-4 p-3 bg-light">
                    <div class="rounded-circle bg-primary bg-opacity-10 text-primary d-inline-flex align-items-center justify-content-center mx-auto mb-2" style="width: 50px; height: 50px;">
                        <span class="fw-bold fs-5">2</span>
                    </div>
                    <h6 class="fw-bold text-dark mb-1">Immediate Dispatch</h6>
                    <p class="small text-muted mb-0">Nearest delivery executive with filled certified cylinder leaves immediately.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card h-100 border rounded-4 p-3 bg-light">
                    <div class="rounded-circle bg-success bg-opacity-10 text-success d-inline-flex align-items-center justify-content-center mx-auto mb-2" style="width: 50px; height: 50px;">
                        <span class="fw-bold fs-5">3</span>
                    </div>
                    <h6 class="fw-bold text-dark mb-1">Doorstep Swap</h6>
                    <p class="small text-muted mb-0">We take your empty cylinder and install the fresh pre-tested full cylinder.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card h-100 border rounded-4 p-3 bg-light">
                    <div class="rounded-circle bg-warning bg-opacity-10 text-dark d-inline-flex align-items-center justify-content-center mx-auto mb-2" style="width: 50px; height: 50px;">
                        <span class="fw-bold fs-5">4</span>
                    </div>
                    <h6 class="fw-bold text-dark mb-1">Pressure Verification</h6>
                    <p class="small text-muted mb-0">Technician checks for zero leaks, verifies flow rate, and confirms patient comfort.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Transparent Pricing & Refill Rates Section -->
<section class="py-5 bg-white border-bottom">
    <div class="container">
        <div class="text-center max-w-700 mx-auto mb-4">
            <span class="badge bg-danger bg-opacity-10 text-danger px-3 py-1 rounded-pill fw-semibold mb-1 small">Transparent Pricing</span>
            <h3 class="fw-bold text-dark mb-1">Medical Oxygen Cylinder Pricing & Refill Rates</h3>
            <p class="text-muted small">Standard rates with zero hidden charges. High-pressure certified cylinders delivered to your doorstep.</p>
        </div>

        <div class="row g-4 justify-content-center mb-4">
            <!-- 10L Cylinder -->
            <div class="col-md-6 col-lg-5">
                <div class="card h-100 border rounded-4 shadow-sm p-4 text-center bg-light">
                    <span class="badge bg-secondary bg-opacity-10 text-dark px-3 py-1 rounded-pill fw-bold mx-auto mb-2 small">Portable Bedside Unit</span>
                    <img src="assets/images/equipment/oxygen_cylinder.jpg" class="img-fluid rounded-3 mb-3 border w-100" style="height: 180px; object-fit: contain; background: #fff;" alt="O2 Cylinder 10 ltrs">
                    <h4 class="fw-bold text-dark mb-1">O2 Cylinder 10 ltrs</h4>
                    <p class="text-muted small mb-3">Capacity: ~1,400 Litres • 11-12 hrs continuous supply at 2 LPM</p>
                    
                    <div class="p-3 bg-white rounded-3 border mb-3">
                        <div class="d-flex justify-content-between align-items-center py-2 border-bottom">
                            <span class="text-secondary fw-semibold">Equipment Setup Rate:</span>
                            <span class="fs-4 fw-bold text-dm-red">₹1,000</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center py-2">
                            <span class="text-secondary fw-semibold">Doorstep Gas Refill:</span>
                            <span class="fs-5 fw-bold text-success">₹700</span>
                        </div>
                    </div>

                    <ul class="list-unstyled text-start small text-muted mb-4 ps-2">
                        <li class="mb-1"><i class="fa-solid fa-check text-success me-2"></i> Hydro-tested IP grade cylinder</li>
                        <li class="mb-1"><i class="fa-solid fa-check text-success me-2"></i> Brass regulator & click flowmeter</li>
                        <li class="mb-1"><i class="fa-solid fa-check text-success me-2"></i> Humidifier bottle & sterile cannula</li>
                    </ul>

                    <a href="https://wa.me/919319149644?text=Hi%20DM%20Healthcare,%20I%20want%20to%20order%20O2%20Cylinder%2010%20ltrs%20(Price:%20₹1,000,%20Refill:%20₹700)." target="_blank" class="btn btn-outline-success rounded-pill fw-bold py-2 w-100">
                        <i class="fa-brands fa-whatsapp me-1"></i> Order 10L Cylinder
                    </a>
                </div>
            </div>

            <!-- 50L Cylinder -->
            <div class="col-md-6 col-lg-5">
                <div class="card h-100 border border-danger border-2 rounded-4 shadow-sm p-4 text-center bg-white position-relative">
                    <span class="badge bg-dm-red text-white px-3 py-1 rounded-pill fw-bold position-absolute top-0 start-50 translate-middle small shadow-sm">High Capacity Recommended</span>
                    <img src="assets/images/equipment/jumbo_cylinder.jpg" class="img-fluid rounded-3 mb-3 border w-100 mt-2" style="height: 180px; object-fit: contain; background: #fff;" alt="O2 Cylinder 50 ltrs">
                    <h4 class="fw-bold text-dark mb-1 mt-1">O2 Cylinder 50 ltrs</h4>
                    <p class="text-muted small mb-3">D-Type Jumbo Capacity: ~7,000 Litres • 52-56 hrs supply at 2 LPM</p>
                    
                    <div class="p-3 bg-light rounded-3 border mb-3">
                        <div class="d-flex justify-content-between align-items-center py-2 border-bottom">
                            <span class="text-secondary fw-semibold">Equipment Setup Rate:</span>
                            <span class="fs-4 fw-bold text-dm-red">₹2,000</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center py-2">
                            <span class="text-secondary fw-semibold">Doorstep Gas Refill:</span>
                            <span class="fs-5 fw-bold text-success">₹1,000</span>
                        </div>
                    </div>

                    <ul class="list-unstyled text-start small text-muted mb-4 ps-2">
                        <li class="mb-1"><i class="fa-solid fa-check text-success me-2"></i> Heavy duty trolley stand with safety chain</li>
                        <li class="mb-1"><i class="fa-solid fa-check text-success me-2"></i> High flow medical regulator</li>
                        <li class="mb-1"><i class="fa-solid fa-check text-success me-2"></i> 24/7 doorstep cylinder swap service</li>
                    </ul>

                    <a href="https://wa.me/919319149644?text=Hi%20DM%20Healthcare,%20I%20want%20to%20order%20O2%20Cylinder%2050%20ltrs%20(Price:%20₹2,000,%20Refill:%20₹1,000)." target="_blank" class="btn btn-dm-red rounded-pill fw-bold py-2 w-100 shadow-sm">
                        <i class="fa-brands fa-whatsapp me-1"></i> Order 50L Jumbo Cylinder
                    </a>
                </div>
            </div>
        </div>

        <!-- Delivery & Sanitization Information -->
        <div class="row g-3 justify-content-center">
            <div class="col-md-4">
                <div class="p-3 bg-light rounded-3 border text-center">
                    <i class="fa-solid fa-truck-ramp-box text-primary fs-5 mb-1"></i>
                    <h6 class="fw-bold text-dark mb-0 small">Freight charges Local</h6>
                    <span class="fw-bold text-dark fs-6">₹700</span>
                    <small class="text-muted d-block" style="font-size:0.75rem;">Immediate local dispatch</small>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 bg-light rounded-3 border text-center">
                    <i class="fa-solid fa-truck-fast text-warning fs-5 mb-1"></i>
                    <h6 class="fw-bold text-dark mb-0 small">Freight DELHI NCR</h6>
                    <span class="fw-bold text-dark fs-6">₹3,000</span>
                    <small class="text-muted d-block" style="font-size:0.75rem;">Extended Delhi NCR & outskirts</small>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 bg-light rounded-3 border text-center">
                    <i class="fa-solid fa-pump-medical text-success fs-5 mb-1"></i>
                    <h6 class="fw-bold text-dark mb-0 small">DISINFECTION PROCESS</h6>
                    <span class="fw-bold text-dark fs-6">₹2,500</span>
                    <small class="text-muted d-block" style="font-size:0.75rem;">Hospital-grade deep sterilization</small>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 6. FAQs Section -->
<section class="py-4 py-lg-5 bg-white border-top">
    <div class="container max-w-800">
        <div class="text-center mb-3">
            <span class="badge bg-secondary bg-opacity-10 text-secondary px-3 py-1 rounded-pill fw-semibold mb-1 small">FAQs</span>
            <h3 class="fw-bold text-dark">Frequently Asked Questions</h3>
        </div>

        <div class="accordion accordion-flush shadow-sm rounded-3 overflow-hidden border bg-white" id="cylFaqAcc">
            <div class="accordion-item border-bottom">
                <h2 class="accordion-header" id="faqCylH1">
                    <button class="accordion-button fw-bold text-dark py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqCylC1">
                        How quickly can you deliver an oxygen cylinder during an emergency?
                    </button>
                </h2>
                <div id="faqCylC1" class="accordion-collapse collapse show" data-bs-parent="#cylFaqAcc">
                    <div class="accordion-body text-muted small lh-base">
                        We have emergency mobile dispatch vans stationed in Faridabad, Noida, South Delhi, and Gurugram. We reach your home within 30 to 45 minutes of booking.
                    </div>
                </div>
            </div>

            <div class="accordion-item border-bottom">
                <h2 class="accordion-header" id="faqCylH2">
                    <button class="accordion-button collapsed fw-bold text-dark py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqCylC2">
                        How do I know when the cylinder is getting empty?
                    </button>
                </h2>
                <div id="faqCylC2" class="accordion-collapse collapse" data-bs-parent="#cylFaqAcc">
                    <div class="accordion-body text-muted small lh-base">
                        The pressure gauge on the brass regulator shows the remaining gas. A full cylinder shows 130–150 kg/cm². When the needle drops below 20 kg/cm² (red zone), contact us for an instant refill swap.
                    </div>
                </div>
            </div>

            <div class="accordion-item border-bottom">
                <h2 class="accordion-header" id="faqCylH3">
                    <button class="accordion-button collapsed fw-bold text-dark py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqCylC3">
                        Are DM Healthcare cylinders safe to keep in home bedrooms?
                    </button>
                </h2>
                <div id="faqCylC3" class="accordion-collapse collapse" data-bs-parent="#cylFaqAcc">
                    <div class="accordion-body text-muted small lh-base">
                        Yes, 100%. All our cylinders are hydro-pressure tested, fitted with safety rupture discs, and supplied with a rolling trolley cart and safety chain to keep them securely upright.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="faqCylH4">
                    <button class="accordion-button collapsed fw-bold text-dark py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqCylC4">
                        Can I use this cylinder as a backup for my oxygen concentrator?
                    </button>
                </h2>
                <div id="faqCylC4" class="accordion-collapse collapse" data-bs-parent="#cylFaqAcc">
                    <div class="accordion-body text-muted small lh-base">
                        Yes! Keeping a standby B-Type cylinder ensures zero disruption in oxygen supply during sudden power cuts or when taking the patient out for doctor appointments.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 7. Related Medical Equipment -->
<section class="py-4 py-lg-5 bg-light border-top">
    <div class="container">
        <h5 class="fw-bold text-dark mb-3 text-center">Other Critical Medical Equipment Available</h5>
        <div class="row g-3 justify-content-center text-center">
            <div class="col-6 col-md-3">
                <a href="page.php?title=oxygen-concentrator" class="card border rounded-3 p-3 text-decoration-none shadow-sm h-100 bg-white">
                    <i class="fa-solid fa-lungs text-dm-red fs-4 mb-2"></i>
                    <span class="fw-bold text-dark small d-block">Oxygen Concentrators</span>
                    <small class="text-muted" style="font-size: 0.72rem;">5L & 10L Continuous O2</small>
                </a>
            </div>
            <div class="col-6 col-md-3">
                <a href="page.php?title=bipap-cpap" class="card border rounded-3 p-3 text-decoration-none shadow-sm h-100 bg-white">
                    <i class="fa-solid fa-mask-ventilator text-primary fs-4 mb-2"></i>
                    <span class="fw-bold text-dark small d-block">BiPAP & CPAP Machines</span>
                    <small class="text-muted" style="font-size: 0.72rem;">From ₹4,500/mo</small>
                </a>
            </div>
            <div class="col-6 col-md-3">
                <a href="hospital-bed" class="card border rounded-3 p-3 text-decoration-none shadow-sm h-100 bg-white">
                    <i class="fa-solid fa-bed-pulse text-success fs-4 mb-2"></i>
                    <span class="fw-bold text-dark small d-block">ICU Hospital Beds</span>
                    <small class="text-muted" style="font-size: 0.72rem;">Motorized 3-Function</small>
                </a>
            </div>
            <div class="col-6 col-md-3">
                <a href="page.php?title=wheelchairs" class="card border rounded-3 p-3 text-decoration-none shadow-sm h-100 bg-white">
                    <i class="fa-solid fa-wheelchair text-warning fs-4 mb-2"></i>
                    <span class="fw-bold text-dark small d-block">Wheelchairs</span>
                    <small class="text-muted" style="font-size: 0.72rem;">Manual & Electric</small>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Flow Calculator Script -->
<script>
function calcDuration(lpm, btn) {
    document.querySelectorAll(".flow-pill-btn").forEach(b => b.classList.remove("active"));
    btn.classList.add("active");

    let bHours = "11 - 12";
    let dHours = "52 - 56";

    if (lpm === 1) {
        bHours = "22 - 24";
        dHours = "100 - 110";
    } else if (lpm === 2) {
        bHours = "11 - 12";
        dHours = "52 - 56";
    } else if (lpm === 3) {
        bHours = "7.5 - 8";
        dHours = "35 - 38";
    } else if (lpm === 4) {
        bHours = "5.5 - 6";
        dHours = "26 - 28";
    } else if (lpm === 6) {
        bHours = "3.5 - 4";
        dHours = "17 - 19";
    } else if (lpm === 10) {
        bHours = "2 - 2.5";
        dHours = "10 - 11";
    }

    document.getElementById("bTypeHours").innerText = bHours;
    document.getElementById("dTypeHours").innerText = dHours;
}
</script>
<?php
$frontend_custom_sections = ob_get_clean();
