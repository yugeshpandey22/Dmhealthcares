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
    background: white;
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
            <!-- Details -->
            <div class="col-lg-7 mb-5 mb-lg-0 pe-lg-5 order-2 order-lg-1">
                <span class="badge bg-info text-dark px-3 py-2 rounded-pill mb-3 fw-bold shadow-sm">Premium Respiratory Support</span>
                <h1 class="fw-bold text-dark mb-4 display-5">Advanced Respiratory Equipment</h1>
                
                <p class="text-muted mb-4 lead">Breathe easier with our premium range of respiratory equipment for home care and clinical use. We provide state-of-the-art oxygen therapy and ventilation machines to manage asthma, COPD, sleep apnea, and other breathing disorders.</p>
                
                <ul class="list-unstyled mb-5">
                    <li class="mb-3 d-flex align-items-center"><i class="fa-solid fa-lungs-virus text-info fs-5 me-3"></i> <span class="fw-bold text-dark">Comprehensive Range:</span> <span class="text-muted ms-2">Oxygen Concentrators, BiPAP, CPAP, and Suction Machines.</span></li>
                    <li class="mb-3 d-flex align-items-center"><i class="fa-solid fa-shield-halved text-info fs-5 me-3"></i> <span class="fw-bold text-dark">Trusted Brands:</span> <span class="text-muted ms-2">Philips, ResMed, Nidek, and Evox.</span></li>
                    <li class="mb-3 d-flex align-items-center"><i class="fa-solid fa-truck-medical text-info fs-5 me-3"></i> <span class="fw-bold text-dark">Fast Delivery & Setup:</span> <span class="text-muted ms-2">Installation and demo provided directly at your home.</span></li>
                </ul>
                
                <div class="d-flex flex-wrap gap-3 mb-4">
                    <a href="index.php#appointment" class="btn btn-primary rounded-pill px-5 py-3 shadow-sm fw-bold">
                        <i class="fa-solid fa-cart-shopping me-2"></i> Shop Equipment
                    </a>
                    <a href="tel:+918521179540" class="btn btn-outline-dark rounded-pill px-5 py-3 fw-bold">
                        <i class="fa-solid fa-phone me-2"></i> Consult Expert
                    </a>
                </div>
            </div>
            
            <!-- Image -->
            <div class="col-lg-5 order-1 order-lg-2 mb-4 mb-lg-0">
                <div class="position-relative">
                    <div class="rounded-4 shadow-lg w-100 d-flex flex-column align-items-center justify-content-center bg-white border border-4 border-light" style="height: 450px;">
                        <div class="mb-4 bg-info bg-opacity-10 p-5 rounded-circle d-flex align-items-center justify-content-center" style="width: 200px; height: 200px;">
                            <i class="fa-solid fa-lungs text-info" style="font-size: 90px;"></i>
                        </div>
                        <span class="text-muted fw-bold text-uppercase tracking-wider">Breathe Free</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Available Inventory Section -->
<div class="container py-5 mb-5 border-bottom">
    <div class="text-center mb-5">
        <h2 class="fw-bold text-dark">Our Respiratory Inventory</h2>
        <div class="mx-auto mt-3 mb-4" style="width: 60px; height: 4px; background-color: #0dcaf0; border-radius: 2px;"></div>
        <p class="text-muted mx-auto" style="max-width: 700px;">Explore our highly reliable and medically certified respiratory support systems available for both rent and purchase.</p>
    </div>
    
    <div class="row justify-content-center g-4">
        ';

        // Inventory Array
        $respiratory_models = [
            ["name" => "Oxygen Concentrator (5L/10L)", "desc" => "Rent / Sale", "icon" => "fa-wind", "features" => "Provides continuous flow oxygen therapy for long-term respiratory conditions."],
            ["name" => "BiPAP Machine", "desc" => "Rent / Sale", "icon" => "fa-mask-ventilator", "features" => "Bilevel positive airway pressure for patients with COPD or complex sleep apnea."],
            ["name" => "CPAP Machine", "desc" => "Rent / Sale", "icon" => "fa-head-side-mask", "features" => "Continuous positive airway pressure specifically designed to treat Obstructive Sleep Apnea."],
            ["name" => "Suction Machine", "desc" => "Rent / Sale", "icon" => "fa-pump-medical", "features" => "Medical suction unit to clear airway secretions safely and effectively."],
            ["name" => "Pulse Oximeter", "desc" => "Sale Only", "icon" => "fa-heart-pulse", "features" => "Accurate and instant monitoring of blood oxygen saturation (SpO2) and pulse rate."],
            ["name" => "Oxygen Cylinder", "desc" => "Rent / Sale", "icon" => "fa-flask", "features" => "Emergency backup high-pressure oxygen cylinders (B-Type and D-Type) with flowmeters."]
        ];
        
        foreach($respiratory_models as $item) {
            $is_sale_only = (strpos($item["desc"], "Sale Only") !== false);
            $badge = $is_sale_only ? '<span class="badge bg-danger shadow-sm">Sale Only</span>' : '<span class="badge bg-success shadow-sm">Rent / Sale</span>';
            
            $frontend_custom_sections .= '<div class="col-lg-4 col-md-6">
                <div class="card equip-card h-100 bg-white border shadow-sm">
                    <div class="position-relative">
                        <div class="card-img-top border-bottom bg-light d-flex flex-column align-items-center justify-content-center" style="height: 180px; background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
                            <i class="fa-solid '.$item["icon"].' text-info mb-3" style="font-size: 60px; opacity: 0.8;"></i>
                            <span class="text-muted small fw-bold text-uppercase" style="letter-spacing: 1px;">Medical Grade</span>
                        </div>
                        <div class="position-absolute top-0 end-0 mt-2 me-2">
                            ' . $badge . '
                        </div>
                    </div>
                    <div class="card-body p-4 text-center d-flex flex-column">
                        <h5 class="fw-bold text-dark mb-2">'.$item["name"].'</h5>
                        <p class="text-muted small mb-4">'.$item["features"].'</p>
                        
                        <a href="index.php#appointment" class="btn btn-outline-info text-dark border-info btn-sm rounded-pill px-4 py-2 fw-bold w-100 mt-auto">
                            Enquire Now <i class="fa-solid fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>';
        }

$frontend_custom_sections .= '
    </div>
</div>

<!-- Key Benefits -->
<div class="container py-5 mb-5 border-bottom">
    <div class="row align-items-center mb-5">
        <div class="col-lg-8">
            <h2 class="fw-bold text-dark">Why Source from DM Healthcare?</h2>
            <div class="mt-3 mb-4" style="width: 60px; height: 4px; background-color: #0dcaf0; border-radius: 2px;"></div>
            <p class="text-muted lead">We don\'t just deliver boxes; we deliver complete respiratory care solutions.</p>
        </div>
    </div>
    
    <div class="row g-4">
        <div class="col-lg-4 col-md-6">
            <div class="feature-card p-4 h-100 shadow-sm border bg-white rounded-4 transition-hover">
                <div class="bg-info bg-opacity-10 p-3 rounded-circle text-info d-inline-flex mb-3">
                    <i class="fa-solid fa-clipboard-check fs-4"></i>
                </div>
                <h5 class="fw-bold text-dark mb-2">Pre-Calibrated Equipment</h5>
                <p class="text-muted small mb-0">Our devices are pre-configured according to your doctor\'s prescription for immediate and safe usage.</p>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-6">
            <div class="feature-card p-4 h-100 shadow-sm border bg-white rounded-4 transition-hover">
                <div class="bg-info bg-opacity-10 p-3 rounded-circle text-info d-inline-flex mb-3">
                    <i class="fa-solid fa-broom fs-4"></i>
                </div>
                <h5 class="fw-bold text-dark mb-2">Strict Sanitization Protocol</h5>
                <p class="text-muted small mb-0">Every rental machine undergoes rigorous hospital-grade sanitization before being dispatched to a new patient.</p>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-6">
            <div class="feature-card p-4 h-100 shadow-sm border bg-white rounded-4 transition-hover">
                <div class="bg-info bg-opacity-10 p-3 rounded-circle text-info d-inline-flex mb-3">
                    <i class="fa-solid fa-headset fs-4"></i>
                </div>
                <h5 class="fw-bold text-dark mb-2">24/7 Technical Support</h5>
                <p class="text-muted small mb-0">Experience peace of mind with our round-the-clock technical assistance for any equipment troubleshooting.</p>
            </div>
        </div>
    </div>
</div>

';
?>
