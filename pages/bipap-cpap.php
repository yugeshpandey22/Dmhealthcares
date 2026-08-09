<?php
// DO NOT set $full_page_override = true;
$hide_default_welcome = true; // Hides the default "Welcome to TITLE" section from page.php

$frontend_custom_sections = '

<style>
/* Unique styling for Equipment pages */
.product-hero {
    background: linear-gradient(135deg, #f8fbff 0%, #ffffff 100%);
    border-bottom: 1px solid rgba(0,0,0,0.05);
}
.equip-card {
    border: 1px solid rgba(0,0,0,0.05);
    border-radius: 16px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    overflow: hidden;
}
.equip-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.1) !important;
}
.feature-card {
    border: 1px solid rgba(0,0,0,0.05);
    border-radius: 16px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    background: white;
}
.feature-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.08) !important;
}
.transition-hover {
    transition: all 0.3s ease;
}
.transition-hover:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.08) !important;
}
</style>

<!-- Single Product Hero Section -->
<div class="product-hero py-5 mb-5">
    <div class="container py-4">
        <div class="row align-items-center">
            <!-- Product Details -->
            <div class="col-lg-7 mb-5 mb-lg-0 pe-lg-5 order-2 order-lg-1">
                <span class="badge bg-primary px-3 py-2 rounded-pill mb-3 fw-bold shadow-sm">Available on Rent & Sale</span>
                <h1 class="fw-bold text-dark mb-4 display-5">BiPAP & CPAP Machines on Rent</h1>
                
                <p class="text-muted mb-4 lead">Advanced non-invasive ventilation therapy at home. Our BiPAP and CPAP machines provide pressurized air to keep airways open, offering effective treatment for Sleep Apnea, COPD, and other respiratory distress conditions.</p>
                
                <ul class="list-unstyled mb-5">
                    <li class="mb-3 d-flex align-items-center"><i class="fa-solid fa-check-circle text-success fs-5 me-3"></i> <span class="fw-bold text-dark">Sleep Apnea Relief:</span> <span class="text-muted ms-2">Ensures peaceful, uninterrupted sleep by preventing airway collapse.</span></li>
                    <li class="mb-3 d-flex align-items-center"><i class="fa-solid fa-check-circle text-success fs-5 me-3"></i> <span class="fw-bold text-dark">Top Global Brands:</span> <span class="text-muted ms-2">ResMed, Philips Respironics, and BMC devices available.</span></li>
                    <li class="mb-3 d-flex align-items-center"><i class="fa-solid fa-check-circle text-success fs-5 me-3"></i> <span class="fw-bold text-dark">Humidifier Included:</span> <span class="text-muted ms-2">Comes with integrated heated humidifiers for maximum comfort.</span></li>
                </ul>
                
                <div class="d-flex flex-wrap gap-3 mb-4">
                    <a href="index.php#appointment" class="btn btn-primary rounded-pill px-5 py-3 shadow-sm fw-bold">
                        <i class="fa-solid fa-mask-ventilator me-2"></i> Book for Rent
                    </a>
                    <a href="tel:+918000000000" class="btn btn-outline-dark rounded-pill px-5 py-3 fw-bold">
                        <i class="fa-solid fa-phone me-2"></i> Free Consultation
                    </a>
                </div>
            </div>
            
            <!-- Product Image -->
            <div class="col-lg-5 order-1 order-lg-2 mb-4 mb-lg-0">
                <div class="position-relative">
                    <div class="rounded-4 shadow-lg w-100 d-flex flex-column align-items-center justify-content-center bg-white border border-4 border-light" style="height: 450px;">
                        <div class="mb-4 bg-primary bg-opacity-10 p-5 rounded-circle d-flex align-items-center justify-content-center" style="width: 200px; height: 200px;">
                            <i class="fa-solid fa-mask-ventilator text-primary" style="font-size: 90px;"></i>
                        </div>
                        <span class="text-muted fw-bold text-uppercase tracking-wider">Respiratory Support</span>
                    </div>
                    <!-- Badges -->
                    <div class="position-absolute bottom-0 end-0 mb-4 me-4 d-none d-md-block">
                        <div class="bg-white p-3 rounded-4 shadow-lg" style="border-left: 5px solid #0d6efd;">
                            <h5 class="fw-bold text-dark mb-0">Starting from</h5>
                            <h3 class="fw-bold text-primary mb-0">₹2,500 <span class="fs-6 text-muted fw-normal">/month</span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Available Models (Inventory) -->
<div class="container py-5 mb-5 border-bottom">
    <div class="text-center mb-5">
        <h2 class="fw-bold text-dark">Find the Right Machine - BiPAP & CPAP</h2>
        <div class="mx-auto mt-3 mb-4" style="width: 60px; height: 4px; background-color: #0d6efd; border-radius: 2px;"></div>
        <p class="text-muted mx-auto" style="max-width: 700px;">Choose between CPAP (Continuous Positive Airway Pressure) for sleep apnea or BiPAP (Bilevel Positive Airway Pressure) for more complex respiratory needs.</p>
    </div>
    
    <div class="row justify-content-center g-4">
        ';

        // Inventory Array
        $bipap_cpap_models = [
            ["name" => "CPAP Machine", "desc" => "Rent / Sale", "price" => "₹2,500 per Month", "icon" => "fa-head-side-mask", "features" => "Fixed pressure support. Best suited for Obstructive Sleep Apnea (OSA). Includes humidifier."],
            ["name" => "Auto CPAP (APAP)", "desc" => "Rent / Sale", "price" => "₹3,500 per Month", "icon" => "fa-head-side-mask", "features" => "Automatically adjusts pressure breath-by-breath for maximum comfort during sleep."],
            ["name" => "BiPAP / BiLevel Machine", "desc" => "Rent / Sale", "price" => "₹4,500 per Month", "icon" => "fa-mask-ventilator", "features" => "Two pressure settings (IPAP & EPAP). Ideal for COPD, high pressure needs, or severe apnea."],
            ["name" => "BiPAP AVAPS / ST", "desc" => "Rent / Sale", "price" => "₹6,000 per Month", "icon" => "fa-mask-ventilator", "features" => "Advanced ventilation with backup respiratory rate and targeted tidal volume for complex respiratory failure."]
        ];
        
        foreach($bipap_cpap_models as $item) {
            $is_sale_only = (strpos($item["desc"], "Sale Only") !== false);
            $badge = $is_sale_only ? '<span class="badge bg-danger shadow-sm">Sale Only</span>' : '<span class="badge bg-success shadow-sm">Rent/Sale</span>';
            
            $frontend_custom_sections .= '<div class="col-lg-3 col-md-6">
                <div class="card equip-card h-100 bg-white border shadow-sm">
                    <div class="position-relative">
                        <div class="card-img-top border-bottom bg-light d-flex flex-column align-items-center justify-content-center" style="height: 180px; background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
                            <i class="fa-solid '.$item["icon"].' text-primary mb-3" style="font-size: 60px; opacity: 0.8;"></i>
                            <span class="text-muted small fw-bold text-uppercase" style="letter-spacing: 1px;">'.$item["desc"].'</span>
                        </div>
                        <div class="position-absolute top-0 end-0 mt-2 me-2">
                            ' . $badge . '
                        </div>
                    </div>
                    <div class="card-body p-4 text-center d-flex flex-column">
                        <h5 class="fw-bold text-dark mb-2">'.$item["name"].'</h5>
                        <p class="text-muted small mb-4">'.$item["features"].'</p>
                        <h4 class="fw-bold text-primary mb-4 mt-auto">'.$item["price"].'</h4>
                        
                        <a href="index.php#appointment" class="btn btn-outline-primary btn-sm rounded-pill px-4 py-2 fw-bold w-100">
                            Book Now <i class="fa-solid fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>';
        }

$frontend_custom_sections .= '
    </div>
</div>

<!-- How Our Rental Process Works -->
<div class="bg-light py-5 mb-5 border-bottom border-top">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">How Our BiPAP/CPAP Rental Process Works</h2>
            <div class="mx-auto mt-3 mb-4" style="width: 60px; height: 4px; background-color: #0d6efd; border-radius: 2px;"></div>
        </div>
        
        <div class="row g-4 position-relative">
            <!-- Step 1 -->
            <div class="col-lg-3 col-sm-6 text-center">
                <div class="bg-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4 shadow-sm border border-primary border-2" style="width: 80px; height: 80px;">
                    <i class="fa-solid fa-file-prescription fs-3 text-primary"></i>
                </div>
                <h5 class="fw-bold text-dark">1. Share Prescription</h5>
                <p class="text-muted small">Share your doctor\'s prescription or sleep study report with us via WhatsApp.</p>
            </div>
            
            <!-- Step 2 -->
            <div class="col-lg-3 col-sm-6 text-center">
                <div class="bg-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4 shadow-sm border border-primary border-2" style="width: 80px; height: 80px;">
                    <i class="fa-solid fa-user-doctor fs-3 text-primary"></i>
                </div>
                <h5 class="fw-bold text-dark">2. Machine Selection</h5>
                <p class="text-muted small">Our respiratory experts help you select the exact CPAP or BiPAP model prescribed.</p>
            </div>
            
            <!-- Step 3 -->
            <div class="col-lg-3 col-sm-6 text-center">
                <div class="bg-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4 shadow-sm border border-primary border-2" style="width: 80px; height: 80px;">
                    <i class="fa-solid fa-sliders fs-3 text-primary"></i>
                </div>
                <h5 class="fw-bold text-dark">3. Calibration</h5>
                <p class="text-muted small">We pre-configure the exact IPAP/EPAP pressure settings based on your doctor\'s advice.</p>
            </div>
            
            <!-- Step 4 -->
            <div class="col-lg-3 col-sm-6 text-center">
                <div class="bg-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4 shadow-sm border border-primary border-2" style="width: 80px; height: 80px;">
                    <i class="fa-solid fa-house-chimney-medical fs-3 text-primary"></i>
                </div>
                <h5 class="fw-bold text-dark">4. Delivery & Demo</h5>
                <p class="text-muted small">We deliver to your home, set up the mask, check for leaks, and train you on daily usage.</p>
            </div>
        </div>
    </div>
</div>

<!-- Why Choose DM Healthcare Section -->
<div class="container py-5 mb-5 border-bottom">
    <div class="row align-items-center mb-5">
        <div class="col-lg-8">
            <h2 class="fw-bold text-dark">Why Choose DM Healthcare?</h2>
            <div class="mt-3 mb-4" style="width: 60px; height: 4px; background-color: #0d6efd; border-radius: 2px;"></div>
            <p class="text-muted lead">Respiratory care requires precision and hygiene. Here is why patients trust us for BiPAP and CPAP therapy:</p>
        </div>
    </div>
    
    <div class="row g-4">
        <!-- Feature 1 -->
        <div class="col-lg-4 col-md-6">
            <div class="feature-card p-4 h-100 shadow-sm border bg-white rounded-4 transition-hover">
                <div class="bg-primary bg-opacity-10 p-3 rounded-circle text-primary d-inline-flex mb-3">
                    <i class="fa-solid fa-mask fs-4"></i>
                </div>
                <h5 class="fw-bold text-dark mb-2">New Masks Only</h5>
                <p class="text-muted small mb-0">For absolute hygiene, masks (Nasal/Full Face) and tubings are always sold brand new to every patient. We never rent used masks.</p>
            </div>
        </div>
        
        <!-- Feature 2 -->
        <div class="col-lg-4 col-md-6">
            <div class="feature-card p-4 h-100 shadow-sm border bg-white rounded-4 transition-hover">
                <div class="bg-primary bg-opacity-10 p-3 rounded-circle text-primary d-inline-flex mb-3">
                    <i class="fa-solid fa-stethoscope fs-4"></i>
                </div>
                <h5 class="fw-bold text-dark mb-2">Expert Calibration</h5>
                <p class="text-muted small mb-0">Our technicians are trained to properly calibrate the machines to your doctor\'s exact pressure settings before delivery.</p>
            </div>
        </div>
        
        <!-- Feature 3 -->
        <div class="col-lg-4 col-md-6">
            <div class="feature-card p-4 h-100 shadow-sm border bg-white rounded-4 transition-hover">
                <div class="bg-primary bg-opacity-10 p-3 rounded-circle text-primary d-inline-flex mb-3">
                    <i class="fa-solid fa-screwdriver-wrench fs-4"></i>
                </div>
                <h5 class="fw-bold text-dark mb-2">Data Retrieval Support</h5>
                <p class="text-muted small mb-0">We assist in retrieving sleep data from the SD card so you can share progress reports with your pulmonologist easily.</p>
            </div>
        </div>
    </div>
</div>

<!-- Explore Other Equipment Section -->
<div class="container py-5 mb-5 bg-light rounded-4 shadow-sm border">
    <div class="text-center mb-5">
        <h2 class="fw-bold text-dark">Explore Other Respiratory Equipment</h2>
        <div class="mx-auto mt-3 mb-4" style="width: 60px; height: 4px; background-color: #0d6efd; border-radius: 2px;"></div>
    </div>
    
    <div class="row justify-content-center g-4">
        <!-- Equipment 1 -->
        <div class="col-lg-4 col-md-6">
            <div class="card h-100 border shadow-sm transition-hover">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-solid fa-lungs text-secondary fs-3 me-3"></i>
                        <h5 class="fw-bold text-dark mb-0">Oxygen Concentrator</h5>
                    </div>
                    <p class="text-muted small mb-4">Electric machines that produce oxygen continuously. Best for long-term home therapy.</p>
                    <a href="OXYGEN+CONCENTRATOR" class="text-primary text-decoration-none fw-bold small">View Details <i class="fa-solid fa-arrow-right ms-1"></i></a>
                </div>
            </div>
        </div>
        
        <!-- Equipment 2 -->
        <div class="col-lg-4 col-md-6">
            <div class="card h-100 border shadow-sm transition-hover">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-solid fa-flask text-secondary fs-3 me-3"></i>
                        <h5 class="fw-bold text-dark mb-0">Oxygen Cylinder</h5>
                    </div>
                    <p class="text-muted small mb-4">Portable B-Type and D-Type high-pressure oxygen cylinders for emergency backup.</p>
                    <a href="OXYGEN+CYLINDER" class="text-primary text-decoration-none fw-bold small">View Details <i class="fa-solid fa-arrow-right ms-1"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
';
?>
