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
                <span class="badge bg-danger px-3 py-2 rounded-pill mb-3 fw-bold shadow-sm">Emergency & Backup</span>
                <h1 class="fw-bold text-dark mb-4 display-5">Oxygen Cylinder on Rent</h1>
                
                <p class="text-muted mb-4 lead">Reliable medical-grade oxygen cylinders for emergencies, travel, or as a power-backup for oxygen concentrators. Available in multiple sizes to suit your specific medical requirements.</p>
                
                <ul class="list-unstyled mb-5">
                    <li class="mb-3 d-flex align-items-center"><i class="fa-solid fa-bolt text-danger fs-5 me-3"></i> <span class="fw-bold text-dark">Power Outage Backup:</span> <span class="text-muted ms-2">Crucial for patients on concentrators during electricity cuts.</span></li>
                    <li class="mb-3 d-flex align-items-center"><i class="fa-solid fa-car text-danger fs-5 me-3"></i> <span class="fw-bold text-dark">High Portability:</span> <span class="text-muted ms-2">Small cylinders are easy to carry during hospital visits or travel.</span></li>
                    <li class="mb-3 d-flex align-items-center"><i class="fa-solid fa-gauge-high text-danger fs-5 me-3"></i> <span class="fw-bold text-dark">Complete Kit:</span> <span class="text-muted ms-2">Comes with flow meter, regulator, key, and fresh mask/cannula.</span></li>
                </ul>
                
                <div class="d-flex flex-wrap gap-3 mb-4">
                    <a href="index.php#appointment" class="btn btn-primary rounded-pill px-5 py-3 shadow-sm fw-bold">
                        <i class="fa-solid fa-flask me-2"></i> Book a Cylinder
                    </a>
                    <a href="tel:+918000000000" class="btn btn-outline-dark rounded-pill px-5 py-3 fw-bold">
                        <i class="fa-solid fa-phone me-2"></i> Call for Emergency
                    </a>
                </div>
            </div>
            
            <!-- Product Image -->
            <div class="col-lg-5 order-1 order-lg-2 mb-4 mb-lg-0">
                <div class="position-relative">
                    <div class="rounded-4 shadow-lg w-100 d-flex flex-column align-items-center justify-content-center bg-white border border-4 border-light" style="height: 450px;">
                        <div class="mb-4 bg-primary bg-opacity-10 p-5 rounded-circle d-flex align-items-center justify-content-center" style="width: 200px; height: 200px;">
                            <i class="fa-solid fa-flask text-primary" style="font-size: 90px;"></i>
                        </div>
                        <span class="text-muted fw-bold text-uppercase tracking-wider">Medical Oxygen Cylinder</span>
                    </div>
                    <!-- Badges -->
                    <div class="position-absolute bottom-0 end-0 mb-4 me-4 d-none d-md-block">
                        <div class="bg-white p-3 rounded-4 shadow-lg" style="border-left: 5px solid #0d6efd;">
                            <h5 class="fw-bold text-dark mb-0">Starting from</h5>
                            <h3 class="fw-bold text-primary mb-0">₹1,500 <span class="fs-6 text-muted fw-normal">/month</span></h3>
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
        <h2 class="fw-bold text-dark">Oxygen Cylinder Sizes Available</h2>
        <div class="mx-auto mt-3 mb-4" style="width: 60px; height: 4px; background-color: #0d6efd; border-radius: 2px;"></div>
        <p class="text-muted mx-auto" style="max-width: 700px;">Whether you need a portable option for travel or a large capacity cylinder for extended backup, we have the right size ready for delivery.</p>
    </div>
    
    <div class="row justify-content-center g-4">
        ';

        // Inventory Array
        $oxygen_cylinders = [
            ["name" => "B-Type Portable Cylinder", "desc" => "Rent / Refill", "price" => "₹1,500 per Month", "icon" => "fa-flask", "capacity" => "10.2 Liters Water Capacity", "features" => "Highly portable. Lasts approx 2-4 hours at 2 LPM. Ideal for hospital visits or short backup."],
            ["name" => "D-Type Jumbo Cylinder", "desc" => "Rent / Refill", "price" => "₹2,500 per Month", "icon" => "fa-flask", "capacity" => "46.7 Liters Water Capacity", "features" => "Heavy duty. Lasts approx 12-24 hours at 2 LPM. Ideal for overnight backup or continuous use."],
            ["name" => "Aluminum Cylinder Kit", "desc" => "Sale Only", "price" => "Check Price", "icon" => "fa-weight-hanging", "capacity" => "Lightweight Medical Grade", "features" => "Extremely light, easy to carry. Rust-free aluminum body. Perfect for frequent travelers."]
        ];
        
        foreach($oxygen_cylinders as $item) {
            $is_sale_only = (strpos($item["desc"], "Sale Only") !== false);
            $badge = $is_sale_only ? '<span class="badge bg-danger shadow-sm">Sale Only</span>' : '<span class="badge bg-success shadow-sm">Rent/Refill</span>';
            
            $frontend_custom_sections .= '<div class="col-lg-4 col-md-6">
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
                        <h5 class="fw-bold text-dark mb-1">'.$item["name"].'</h5>
                        <div class="text-primary fw-bold small mb-3">'.$item["capacity"].'</div>
                        <p class="text-muted small mb-4">'.$item["features"].'</p>
                        <h4 class="fw-bold text-dark mb-4 mt-auto">'.$item["price"].'</h4>
                        
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

<!-- How Our Cylinder Rental Works -->
<div class="bg-light py-5 mb-5 border-bottom border-top">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">How Our Cylinder Rental Works</h2>
            <div class="mx-auto mt-3 mb-4" style="width: 60px; height: 4px; background-color: #0d6efd; border-radius: 2px;"></div>
        </div>
        
        <div class="row g-4 position-relative">
            <!-- Step 1 -->
            <div class="col-lg-3 col-sm-6 text-center">
                <div class="bg-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4 shadow-sm border border-primary border-2" style="width: 80px; height: 80px;">
                    <i class="fa-solid fa-mobile-screen-button fs-3 text-primary"></i>
                </div>
                <h5 class="fw-bold text-dark">1. Share Requirement</h5>
                <p class="text-muted small">Tell us if you need the cylinder for backup, travel, or continuous usage via WhatsApp or call.</p>
            </div>
            
            <!-- Step 2 -->
            <div class="col-lg-3 col-sm-6 text-center">
                <div class="bg-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4 shadow-sm border border-primary border-2" style="width: 80px; height: 80px;">
                    <i class="fa-solid fa-car-side fs-3 text-primary"></i>
                </div>
                <h5 class="fw-bold text-dark">2. Fast Delivery</h5>
                <p class="text-muted small">Since oxygen cylinders are often needed urgently, we prioritize same-day rapid delivery.</p>
            </div>
            
            <!-- Step 3 -->
            <div class="col-lg-3 col-sm-6 text-center">
                <div class="bg-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4 shadow-sm border border-primary border-2" style="width: 80px; height: 80px;">
                    <i class="fa-solid fa-wrench fs-3 text-primary"></i>
                </div>
                <h5 class="fw-bold text-dark">3. Setup & Demo</h5>
                <p class="text-muted small">We attach the flow meter and regulator, and teach you how to safely open, adjust, and close the valve.</p>
            </div>
            
            <!-- Step 4 -->
            <div class="col-lg-3 col-sm-6 text-center">
                <div class="bg-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4 shadow-sm border border-primary border-2" style="width: 80px; height: 80px;">
                    <i class="fa-solid fa-rotate fs-3 text-primary"></i>
                </div>
                <h5 class="fw-bold text-dark">4. Easy Refills</h5>
                <p class="text-muted small">When empty, simply call us. We will pick up the empty cylinder and deliver a fully refilled one.</p>
            </div>
        </div>
    </div>
</div>

<!-- Why Choose DM Healthcare Section -->
<div class="container py-5 mb-5 border-bottom">
    <div class="row align-items-center mb-5">
        <div class="col-lg-8">
            <h2 class="fw-bold text-dark">Safety & Reliability First</h2>
            <div class="mt-3 mb-4" style="width: 60px; height: 4px; background-color: #0d6efd; border-radius: 2px;"></div>
            <p class="text-muted lead">Handling oxygen cylinders requires care and proper equipment. Here is why we are trusted:</p>
        </div>
    </div>
    
    <div class="row g-4">
        <!-- Feature 1 -->
        <div class="col-lg-4 col-md-6">
            <div class="feature-card p-4 h-100 shadow-sm border bg-white rounded-4 transition-hover">
                <div class="bg-primary bg-opacity-10 p-3 rounded-circle text-primary d-inline-flex mb-3">
                    <i class="fa-solid fa-shield-halved fs-4"></i>
                </div>
                <h5 class="fw-bold text-dark mb-2">Tested Cylinders</h5>
                <p class="text-muted small mb-0">All our cylinders undergo mandatory hydrostatic stretch testing to ensure they are safe for high-pressure gas storage.</p>
            </div>
        </div>
        
        <!-- Feature 2 -->
        <div class="col-lg-4 col-md-6">
            <div class="feature-card p-4 h-100 shadow-sm border bg-white rounded-4 transition-hover">
                <div class="bg-primary bg-opacity-10 p-3 rounded-circle text-primary d-inline-flex mb-3">
                    <i class="fa-solid fa-box-open fs-4"></i>
                </div>
                <h5 class="fw-bold text-dark mb-2">Complete Accessories</h5>
                <p class="text-muted small mb-0">We don\'t just send the cylinder. We provide the complete setup: regulator, flow meter, key, and fresh oxygen mask.</p>
            </div>
        </div>
        
        <!-- Feature 3 -->
        <div class="col-lg-4 col-md-6">
            <div class="feature-card p-4 h-100 shadow-sm border bg-white rounded-4 transition-hover">
                <div class="bg-primary bg-opacity-10 p-3 rounded-circle text-primary d-inline-flex mb-3">
                    <i class="fa-solid fa-truck-medical fs-4"></i>
                </div>
                <h5 class="fw-bold text-dark mb-2">Emergency Support</h5>
                <p class="text-muted small mb-0">We understand the critical nature of oxygen. Our team is responsive to emergency requirements and refill requests.</p>
            </div>
        </div>
    </div>
</div>

<!-- Explore Other Equipment Section -->
<div class="container py-5 mb-5 bg-light rounded-4 shadow-sm border">
    <div class="text-center mb-5">
        <h2 class="fw-bold text-dark">Explore Other Medical Equipment</h2>
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
                        <i class="fa-solid fa-bed text-secondary fs-3 me-3"></i>
                        <h5 class="fw-bold text-dark mb-0">Hospital Bed on Rent</h5>
                    </div>
                    <p class="text-muted small mb-4">Manual Fowler, semi-electric and full-electric beds for post-surgery or bedridden patients.</p>
                    <a href="HOSPITAL+BED" class="text-primary text-decoration-none fw-bold small">View Details <i class="fa-solid fa-arrow-right ms-1"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
';
?>
