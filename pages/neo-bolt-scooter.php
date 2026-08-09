<?php
// DO NOT set $full_page_override = true;
$hide_default_welcome = true; // Hides the default "Welcome to TITLE" section from page.php

$frontend_custom_sections = '

<style>
/* Unique styling for Neo Bolt Scooter page */
.product-hero {
    background: linear-gradient(135deg, #f8fbff 0%, #ffffff 100%);
    border-bottom: 1px solid rgba(0,0,0,0.05);
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
.spec-row {
    padding: 12px 0;
    border-bottom: 1px dashed rgba(0,0,0,0.1);
}
.spec-row:last-child {
    border-bottom: none;
}
</style>

<!-- Single Product Hero Section -->
<div class="product-hero py-5 mb-5">
    <div class="container py-4">
        <div class="row align-items-center">
            <!-- Product Image -->
            <div class="col-lg-6 mb-5 mb-lg-0 pe-lg-5">
                <div class="position-relative">
                    <div class="rounded-4 shadow-lg w-100 d-flex flex-column align-items-center justify-content-center bg-white border border-4 border-light" style="height: 450px;">
                        <!-- Using an icon since we dont have the exact neo bolt photo -->
                        <div class="mb-4 bg-primary bg-opacity-10 p-5 rounded-circle d-flex align-items-center justify-content-center" style="width: 200px; height: 200px;">
                            <i class="fa-solid fa-motorcycle text-primary" style="font-size: 90px;"></i>
                        </div>
                        <span class="text-muted fw-bold text-uppercase tracking-wider">NeoBolt Add-on Mobility Scooter</span>
                    </div>
                    <!-- Badges -->
                    <div class="position-absolute top-0 start-0 mt-4 ms-4">
                        <span class="badge bg-danger px-3 py-2 rounded-pill shadow-sm fs-6">Outdoor Mobility</span>
                    </div>
                </div>
            </div>
            
            <!-- Product Details -->
            <div class="col-lg-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="WHEELCHAIRS" class="text-decoration-none">Wheelchairs</a></li>
                        <li class="breadcrumb-item active" aria-current="page">NeoBolt Scooter</li>
                    </ol>
                </nav>
                <h1 class="fw-bold text-dark mb-3 display-5">NeoBolt Scooter cum Wheelchair</h1>
                
                <div class="d-flex align-items-center gap-3 mb-4">
                    <h2 class="fw-bold text-primary mb-0">₹4,500 <span class="fs-5 text-muted fw-normal">/month</span></h2>
                    <span class="badge bg-success bg-opacity-10 text-success border border-success px-3 py-2 rounded-pill">Available for Rent & Sale</span>
                </div>
                
                <p class="text-muted mb-4 lead">Transform your everyday wheelchair into a powerful, road-ready mobility vehicle. The NeoBolt is a motorized add-on that empowers you to independently navigate streets, uneven terrains, and steep gradients with ease and safety.</p>
                
                <ul class="list-unstyled mb-5">
                    <li class="mb-3 d-flex align-items-center"><i class="fa-solid fa-check-circle text-success fs-5 me-3"></i> <span class="fw-bold text-dark">Top Speed:</span> <span class="text-muted ms-2">25 km/h for swift travel</span></li>
                    <li class="mb-3 d-flex align-items-center"><i class="fa-solid fa-check-circle text-success fs-5 me-3"></i> <span class="fw-bold text-dark">Range:</span> <span class="text-muted ms-2">Up to 25 km on a single charge</span></li>
                    <li class="mb-3 d-flex align-items-center"><i class="fa-solid fa-check-circle text-success fs-5 me-3"></i> <span class="fw-bold text-dark">Battery:</span> <span class="text-muted ms-2">Lithium-ion with 4-hour quick charge</span></li>
                    <li class="mb-3 d-flex align-items-center"><i class="fa-solid fa-check-circle text-success fs-5 me-3"></i> <span class="fw-bold text-dark">Compatibility:</span> <span class="text-muted ms-2">Attaches easily to most standard manual wheelchairs</span></li>
                </ul>
                
                <div class="d-flex flex-column flex-sm-row gap-3">
                    <a href="index.php#appointment" class="btn btn-primary rounded-pill px-5 py-3 shadow-sm fw-bold">
                        <i class="fa-solid fa-bolt me-2"></i> Book for Rent
                    </a>
                    <a href="tel:+918000000000" class="btn btn-outline-dark rounded-pill px-5 py-3 fw-bold">
                        <i class="fa-solid fa-phone me-2"></i> Call to Discuss
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Features & Specifications -->
<div class="container py-5 mb-5 border-bottom">
    <div class="row g-5">
        <!-- Key Features -->
        <div class="col-lg-7">
            <h3 class="fw-bold text-dark mb-4">Why Choose NeoBolt?</h3>
            <p class="text-muted mb-5">The NeoBolt is designed specifically for Indian roads. It eliminates the need to transfer between a wheelchair and a car, providing unmatched independence for outdoor activities, commuting to work, or simply enjoying a ride.</p>
            
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="feature-card p-4 h-100 shadow-sm">
                        <div class="bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa-solid fa-road text-primary fs-4"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-2">All-Terrain Ready</h5>
                        <p class="text-muted small mb-0">Heavy-duty suspension system designed to handle potholes, speed breakers, and uneven paths effortlessly.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="feature-card p-4 h-100 shadow-sm">
                        <div class="bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa-solid fa-link text-primary fs-4"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-2">Quick Docking</h5>
                        <p class="text-muted small mb-0">Attach and detach the scooter from your wheelchair in seconds, completely unassisted.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="feature-card p-4 h-100 shadow-sm">
                        <div class="bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa-solid fa-shield-halved text-primary fs-4"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-2">Maximum Safety</h5>
                        <p class="text-muted small mb-0">Equipped with dual disc brakes, bright LED headlights, and a horn for safe night travel.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="feature-card p-4 h-100 shadow-sm">
                        <div class="bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa-solid fa-leaf text-primary fs-4"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-2">Eco-Friendly</h5>
                        <p class="text-muted small mb-0">100% electric, zero emissions. Saves money on fuel while protecting the environment.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Tech Specs -->
        <div class="col-lg-5">
            <div class="bg-light p-4 p-md-5 rounded-4 shadow-sm border h-100">
                <h4 class="fw-bold text-dark mb-4"><i class="fa-solid fa-gears text-secondary me-2"></i> Technical Specifications</h4>
                
                <div class="spec-row d-flex justify-content-between">
                    <span class="text-muted fw-bold">Motor Power</span>
                    <span class="text-dark">250W BLDC Hub Motor</span>
                </div>
                <div class="spec-row d-flex justify-content-between">
                    <span class="text-muted fw-bold">Battery Capacity</span>
                    <span class="text-dark">36V, 12Ah Lithium-Ion</span>
                </div>
                <div class="spec-row d-flex justify-content-between">
                    <span class="text-muted fw-bold">Max Range</span>
                    <span class="text-dark">25 Kilometers</span>
                </div>
                <div class="spec-row d-flex justify-content-between">
                    <span class="text-muted fw-bold">Top Speed</span>
                    <span class="text-dark">25 km/h</span>
                </div>
                <div class="spec-row d-flex justify-content-between">
                    <span class="text-muted fw-bold">Weight Capacity</span>
                    <span class="text-dark">Up to 110 kg</span>
                </div>
                <div class="spec-row d-flex justify-content-between">
                    <span class="text-muted fw-bold">Braking System</span>
                    <span class="text-dark">Dual Disc Brakes</span>
                </div>
                <div class="spec-row d-flex justify-content-between">
                    <span class="text-muted fw-bold">Suspension</span>
                    <span class="text-dark">Telescopic Front Fork</span>
                </div>
                <div class="spec-row d-flex justify-content-between">
                    <span class="text-muted fw-bold">Charging Time</span>
                    <span class="text-dark">4 Hours</span>
                </div>
                
                <div class="mt-4 text-center">
                    <p class="small text-muted fst-italic">*Specifications may vary slightly based on the model year.</p>
                </div>
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
            <p class="text-muted lead">A medical organisation, not a rental shop. Here is what makes the difference when you choose DM Healthcare for your equipment needs:</p>
        </div>
    </div>
    
    <div class="row g-4">
        <!-- Feature 1 -->
        <div class="col-lg-4 col-md-6">
            <div class="feature-card p-4 h-100 shadow-sm border bg-white rounded-4 transition-hover">
                <div class="bg-primary bg-opacity-10 p-3 rounded-circle text-primary d-inline-flex mb-3">
                    <i class="fa-solid fa-boxes-stacked fs-4"></i>
                </div>
                <h5 class="fw-bold text-dark mb-2">Own Equipment Inventory</h5>
                <p class="text-muted small mb-0">We own and maintain our entire stock directly - no third-party sourcing. This means better quality control, faster delivery and direct accountability to you.</p>
            </div>
        </div>
        
        <!-- Feature 2 -->
        <div class="col-lg-4 col-md-6">
            <div class="feature-card p-4 h-100 shadow-sm border bg-white rounded-4 transition-hover">
                <div class="bg-primary bg-opacity-10 p-3 rounded-circle text-primary d-inline-flex mb-3">
                    <i class="fa-solid fa-screwdriver-wrench fs-4"></i>
                </div>
                <h5 class="fw-bold text-dark mb-2">100% Maintenance by Us</h5>
                <p class="text-muted small mb-0">All servicing, maintenance and repairs during the rental period are handled by DM Healthcare at no extra cost. If the equipment has any issue, we fix or replace it promptly.</p>
            </div>
        </div>
        
        <!-- Feature 3 -->
        <div class="col-lg-4 col-md-6">
            <div class="feature-card p-4 h-100 shadow-sm border bg-white rounded-4 transition-hover">
                <div class="bg-primary bg-opacity-10 p-3 rounded-circle text-primary d-inline-flex mb-3">
                    <i class="fa-solid fa-pump-medical fs-4"></i>
                </div>
                <h5 class="fw-bold text-dark mb-2">Sanitized & Hospital Grade</h5>
                <p class="text-muted small mb-0">Every piece of equipment is thoroughly sanitized and quality-checked before delivery. Our trained technician installs it and demonstrates correct usage at your home.</p>
            </div>
        </div>
        
        <!-- Feature 4 -->
        <div class="col-lg-4 col-md-6">
            <div class="feature-card p-4 h-100 shadow-sm border bg-white rounded-4 transition-hover">
                <div class="bg-primary bg-opacity-10 p-3 rounded-circle text-primary d-inline-flex mb-3">
                    <i class="fa-solid fa-headset fs-4"></i>
                </div>
                <h5 class="fw-bold text-dark mb-2">24 x 7 After-Sales Support</h5>
                <p class="text-muted small mb-0">Our team is available 24x7 for technical support, accessory requirements, service requests or any equipment-related questions throughout your rental period.</p>
            </div>
        </div>
        
        <!-- Feature 5 -->
        <div class="col-lg-4 col-md-6">
            <div class="feature-card p-4 h-100 shadow-sm border bg-white rounded-4 transition-hover">
                <div class="bg-primary bg-opacity-10 p-3 rounded-circle text-primary d-inline-flex mb-3">
                    <i class="fa-solid fa-money-bill-transfer fs-4"></i>
                </div>
                <h5 class="fw-bold text-dark mb-2">Rent-to-Buy Option</h5>
                <p class="text-muted small mb-0">If your loved one needs the equipment long-term, we offer a rent-to-buy option. Part of the rental amount paid can be adjusted against the purchase price.</p>
            </div>
        </div>
        
        <!-- Feature 6 -->
        <div class="col-lg-4 col-md-6">
            <div class="feature-card p-4 h-100 shadow-sm border bg-white rounded-4 transition-hover">
                <div class="bg-primary bg-opacity-10 p-3 rounded-circle text-primary d-inline-flex mb-3">
                    <i class="fa-solid fa-globe fs-4"></i>
                </div>
                <h5 class="fw-bold text-dark mb-2">12+ Years of Experience</h5>
                <p class="text-muted small mb-0">ISO 9001:2015 certified. Govt. recognised healthcare startup. 1 lakh+ customers served across India and international operations - a trusted name in home healthcare.</p>
            </div>
        </div>
    </div>
</div>

<!-- How Our Wheelchairs Rental Process Works -->
<div class="bg-light py-5 mb-5 border-bottom border-top">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">How Our Wheelchairs Rental Process Works</h2>
            <div class="mx-auto mt-3 mb-4" style="width: 60px; height: 4px; background-color: #0d6efd; border-radius: 2px;"></div>
        </div>
        
        <div class="row g-4 position-relative">
            <!-- Step 1 -->
            <div class="col-lg-3 col-sm-6 text-center">
                <div class="bg-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4 shadow-sm border border-primary border-2" style="width: 80px; height: 80px;">
                    <i class="fa-solid fa-mobile-screen-button fs-3 text-primary"></i>
                </div>
                <h5 class="fw-bold text-dark">1. Share Your Requirement</h5>
                <p class="text-muted small">Call / WhatsApp / Email us or submit the form with your city, Wheelchairs type and rental duration.</p>
            </div>
            
            <!-- Step 2 -->
            <div class="col-lg-3 col-sm-6 text-center">
                <div class="bg-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4 shadow-sm border border-primary border-2" style="width: 80px; height: 80px;">
                    <i class="fa-solid fa-comments-dollar fs-3 text-primary"></i>
                </div>
                <h5 class="fw-bold text-dark">2. Get Expert Guidance & Quote</h5>
                <p class="text-muted small">Our equipment expert suggests the right model and shares rent, security deposit and delivery charges with no hidden costs.</p>
            </div>
            
            <!-- Step 3 -->
            <div class="col-lg-3 col-sm-6 text-center">
                <div class="bg-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4 shadow-sm border border-primary border-2" style="width: 80px; height: 80px;">
                    <i class="fa-solid fa-calendar-check fs-3 text-primary"></i>
                </div>
                <h5 class="fw-bold text-dark">3. Confirm Booking & Slot</h5>
                <p class="text-muted small">Once you confirm, we reserve the Wheelchairs and schedule same-day or next-day delivery as per requirement.</p>
            </div>
            
            <!-- Step 4 -->
            <div class="col-lg-3 col-sm-6 text-center">
                <div class="bg-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4 shadow-sm border border-primary border-2" style="width: 80px; height: 80px;">
                    <i class="fa-solid fa-truck-medical fs-3 text-primary"></i>
                </div>
                <h5 class="fw-bold text-dark">4. Delivery, Install & Support</h5>
                <p class="text-muted small">We sanitize, deliver and install the Wheelchairs at your home, give a full demo, and stay available for service.</p>
            </div>
        </div>
    </div>
</div>

<!-- Types of Wheelchairs Section (Inventory) -->
<div class="container py-5 mb-5 border-bottom">
    <div class="text-center mb-5">
        <h2 class="fw-bold text-dark">Find the Right Wheelchairs Near Me - Rent or Buy</h2>
        <div class="mx-auto mt-3 mb-4" style="width: 60px; height: 4px; background-color: #0d6efd; border-radius: 2px;"></div>
        <p class="text-muted mx-auto" style="max-width: 700px;">Browse our complete catalogue of wheelchairs for rent and sale. Book directly or contact us for expert advice.</p>
    </div>
    
    <div class="row g-4">
        ';

        // Massive Inventory Array (20 items)
        $wheelchairs = [
            ["name" => "Wheelchair with Small Wheels", "desc" => "Rent / Sale", "price" => "₹1,000 per Month", "icon" => "fa-wheelchair"],
            ["name" => "Wheelchair with Large Wheels", "desc" => "Rent / Sale", "price" => "₹1,000 per Month", "icon" => "fa-wheelchair"],
            ["name" => "Recliner Wheelchair", "desc" => "Rent / Sale", "price" => "₹2,000 per Month", "icon" => "fa-wheelchair"],
            ["name" => "Electric Wheelchair", "desc" => "Rent / Sale", "price" => "₹4,500 per Month", "icon" => "fa-bolt"],
            ["name" => "Commode Wheelchair", "desc" => "Rent / Sale", "price" => "₹1,500 per Month", "icon" => "fa-restroom"],
            ["name" => "Pediatric Wheelchair", "desc" => "Rent / Sale", "price" => "₹1,200 per Month", "icon" => "fa-child"],
            ["name" => "Light Weight Wheelchair", "desc" => "Rent / Sale", "price" => "₹1,500 per Month", "icon" => "fa-feather"],
            ["name" => "Stair Climbing Wheelchair", "desc" => "Rent / Sale", "price" => "₹12,000 per Month", "icon" => "fa-stairs"],
            ["name" => "Neo Bolt Scooter", "desc" => "Sale", "price" => "Buy at ₹1,09,900", "icon" => "fa-motorcycle"],
            ["name" => "Evox Electric Wheelchair 101", "desc" => "Sale", "price" => "Buy at ₹46,999", "icon" => "fa-bolt"],
            ["name" => "Evox Electric Wheelchair 102ME", "desc" => "Sale", "price" => "Buy at ₹57,000", "icon" => "fa-bolt"],
            ["name" => "Evox Battery Operated WC 103", "desc" => "Sale", "price" => "Buy at ₹60,000", "icon" => "fa-battery-full"],
            ["name" => "Evox Reclining Wheelchair 104R", "desc" => "Sale", "price" => "Buy at ₹85,000", "icon" => "fa-wheelchair"],
            ["name" => "Evox Wheelchair 107", "desc" => "Sale", "price" => "Buy at ₹87,000", "icon" => "fa-wheelchair"],
            ["name" => "Evox Electric Wheelchair 108", "desc" => "Sale", "price" => "Buy at ₹1,10,000", "icon" => "fa-bolt"],
            ["name" => "Seedee Stairclimber Wheelchair", "desc" => "Rent / Sale", "price" => "₹14,000 per Month", "icon" => "fa-stairs"],
            ["name" => "Neo Fly Wheelchair", "desc" => "Sale", "price" => "Buy at ₹89,900", "icon" => "fa-wheelchair"],
            ["name" => "Evox Wheelchair 105E", "desc" => "Sale", "price" => "Buy at ₹55,000", "icon" => "fa-wheelchair"],
            ["name" => "Evox Wheelchair 109", "desc" => "Sale", "price" => "Buy at ₹96,000", "icon" => "fa-wheelchair"],
            ["name" => "Other Medical Equipment", "desc" => "Rent / Sale", "price" => "Check Price", "icon" => "fa-stethoscope"]
        ];
        
        foreach($wheelchairs as $item) {
            $is_sale_only = (strpos($item["desc"], "Sale") !== false && strpos($item["desc"], "Rent") === false);
            $badge = $is_sale_only ? '<span class="badge bg-danger shadow-sm">Sale Only</span>' : '<span class="badge bg-success shadow-sm">Rent/Sale</span>';
            
            $frontend_custom_sections .= '<div class="col-lg-3 col-md-4 col-sm-6">
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
                    <div class="card-body p-3 text-center d-flex flex-column">
                        <h6 class="fw-bold text-dark mb-2" style="font-size: 0.95rem; line-height: 1.3;">'.$item["name"].'</h6>
                        <h5 class="fw-bold text-primary mb-3 mt-auto fs-5">'.$item["price"].'</h5>
                        
                        <a href="index.php#appointment" class="btn btn-outline-primary btn-sm rounded-pill px-3 py-2 fw-bold w-100">
                            Book Now <i class="fa-solid fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>';
        }

$frontend_custom_sections .= '
    </div>
</div>
';
?>
