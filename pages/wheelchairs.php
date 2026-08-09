<?php
// DO NOT set $full_page_override = true;
$hide_default_welcome = true; // Hides the default "Welcome to TITLE" section from page.php

$frontend_custom_sections = '

<style>
/* Unique styling for Medical Equipment page */
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
.equip-badge {
    background: linear-gradient(45deg, #0d6efd, #0dcaf0);
    color: white;
}
.transition-hover {
    transition: all 0.3s ease;
}
.transition-hover:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.08) !important;
}
</style>

<!-- Intro Hero Section -->
<div class="bg-white py-5 mb-5 border-bottom">
    <div class="container py-4">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0 pe-lg-5">
                <span class="badge equip-badge px-3 py-2 rounded-pill mb-3 fw-bold shadow-sm">Available on Rent & Sale</span>
                <h1 class="fw-bold text-dark mb-4 display-5">Premium Wheelchairs on Rent</h1>
                <p class="text-muted mb-4 lead">Regain your mobility and independence. We provide a wide range of lightweight, durable, and comfortable wheelchairs delivered directly to your home.</p>
                <p class="text-muted mb-4">From basic folding wheelchairs for temporary injuries to advanced motorized wheelchairs for long-term mobility, we have the right fit for every patient\'s need.</p>
                
                <div class="d-flex flex-wrap gap-3 mb-5">
                    <div class="d-flex align-items-center me-3">
                        <i class="fa-solid fa-truck-fast text-primary fs-4 me-2"></i>
                        <span class="fw-bold text-dark">Same Day Delivery</span>
                    </div>
                    <div class="d-flex align-items-center me-3">
                        <i class="fa-solid fa-pump-medical text-primary fs-4 me-2"></i>
                        <span class="fw-bold text-dark">100% Sanitized</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-wallet text-primary fs-4 me-2"></i>
                        <span class="fw-bold text-dark">Affordable Rent</span>
                    </div>
                </div>
                
                <a href="index.php#appointment" class="btn btn-primary rounded-pill px-5 py-3 shadow-sm fw-bold">
                    <i class="fa-solid fa-wheelchair me-2"></i> Book a Wheelchair
                </a>
            </div>
            <div class="col-lg-6">
                <div class="position-relative">
                    <img src="assets/images/pages/caregiver_helping.png" alt="Wheelchair Support" class="img-fluid rounded-4 shadow-lg w-100" style="height: 500px; object-fit: cover;">
                    <!-- Accent Box -->
                    <div class="position-absolute bottom-0 end-0 bg-white p-3 rounded-4 shadow-lg mb-4 me-4 d-none d-md-block" style="border-left: 5px solid #0d6efd;">
                        <h5 class="fw-bold text-dark mb-0">Starting from</h5>
                        <h3 class="fw-bold text-primary mb-0">₹1,200 <span class="fs-6 text-muted fw-normal">/month</span></h3>
                    </div>
                </div>
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

        // Massive Inventory Array
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

<!-- Why Choose DM Healthcare Section -->
<div class="container py-5 mb-5 border-bottom">
    <div class="row align-items-center mb-5">
        <div class="col-lg-8">
            <h2 class="fw-bold text-dark">Why Choose DM Healthcare for Wheelchairs?</h2>
            <div class="mt-3 mb-4" style="width: 60px; height: 4px; background-color: #0d6efd; border-radius: 2px;"></div>
            <p class="text-muted lead">A medical organisation, not a rental shop. Here is what makes the difference when you choose DM Healthcare:</p>
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
                <p class="text-muted small mb-0">We own and maintain our entire Wheelchairs stock directly - no third-party sourcing. This means better quality control, faster delivery and direct accountability to you.</p>
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

<!-- All Medical Equipment Section -->
<div class="container py-5 mb-5 bg-light rounded-4 shadow-sm border">
    <div class="text-center mb-5">
        <h2 class="fw-bold text-dark">All Medical Equipment on Rent</h2>
        <div class="mx-auto mt-3 mb-4" style="width: 60px; height: 4px; background-color: #0d6efd; border-radius: 2px;"></div>
        <p class="text-muted mx-auto" style="max-width: 800px;">DM Healthcare provides home rental for all types of medical and rehabilitation equipment. Browse the full range or call us to discuss which suits your patient\'s condition.</p>
    </div>
    
    <div class="row g-4">
        <!-- Equipment 1 -->
        <div class="col-lg-4 col-md-6">
            <div class="card h-100 border shadow-sm transition-hover">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-solid fa-bed text-secondary fs-3 me-3"></i>
                        <h5 class="fw-bold text-dark mb-0">Hospital Bed on Rent</h5>
                    </div>
                    <p class="text-muted small mb-4">Manual Fowler, semi-electric and full-electric beds for post-surgery or bedridden patients</p>
                    <a href="HOSPITAL+BED" class="text-primary text-decoration-none fw-bold small">View Details <i class="fa-solid fa-arrow-right ms-1"></i></a>
                </div>
            </div>
        </div>
        
        <!-- Equipment 2 -->
        <div class="col-lg-4 col-md-6">
            <div class="card h-100 border-primary border-2 shadow-sm" style="background-color: #f8fbff;">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-solid fa-wheelchair text-primary fs-3 me-3"></i>
                        <h5 class="fw-bold text-dark mb-0">Wheelchair on Rent</h5>
                    </div>
                    <p class="text-muted small mb-4">Standard, recliner, commode and motorised wheelchairs for mobility-impaired patients</p>
                    <span class="badge bg-primary text-white w-100 py-2">Currently Viewing</span>
                </div>
            </div>
        </div>
        
        <!-- Equipment 3 -->
        <div class="col-lg-4 col-md-6">
            <div class="card h-100 border shadow-sm transition-hover">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-solid fa-lungs text-secondary fs-3 me-3"></i>
                        <h5 class="fw-bold text-dark mb-0">Oxygen Concentrator</h5>
                    </div>
                    <p class="text-muted small mb-4">1LPM to 10LPM concentrators for COPD, post-COVID and chronic respiratory conditions</p>
                    <a href="oxygen-concentrator" class="text-primary text-decoration-none fw-bold small">View Details <i class="fa-solid fa-arrow-right ms-1"></i></a>
                </div>
            </div>
        </div>
        
        <!-- Equipment 4 -->
        <div class="col-lg-4 col-md-6">
            <div class="card h-100 border shadow-sm transition-hover">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-solid fa-flask text-secondary fs-3 me-3"></i>
                        <h5 class="fw-bold text-dark mb-0">Oxygen Cylinder</h5>
                    </div>
                    <p class="text-muted small mb-4">B-type and D-type cylinders with regulator for short-term or emergency oxygen use</p>
                    <a href="oxygen-cylinder" class="text-primary text-decoration-none fw-bold small">View Details <i class="fa-solid fa-arrow-right ms-1"></i></a>
                </div>
            </div>
        </div>
        
        <!-- Equipment 5 -->
        <div class="col-lg-4 col-md-6">
            <div class="card h-100 border shadow-sm transition-hover">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-solid fa-mask-ventilator text-secondary fs-3 me-3"></i>
                        <h5 class="fw-bold text-dark mb-0">BiPAP / CPAP</h5>
                    </div>
                    <p class="text-muted small mb-4">BiPAP, CPAP and home ventilators for sleep apnea, COPD and respiratory failure</p>
                    <a href="bipap-cpap" class="text-primary text-decoration-none fw-bold small">View Details <i class="fa-solid fa-arrow-right ms-1"></i></a>
                </div>
            </div>
        </div>
        
        <!-- Equipment 6 -->
        <div class="col-lg-4 col-md-6">
            <div class="card h-100 border shadow-sm transition-hover">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-solid fa-heart-pulse text-secondary fs-3 me-3"></i>
                        <h5 class="fw-bold text-dark mb-0">ICU Equipment</h5>
                    </div>
                    <p class="text-muted small mb-4">Ventilators, multi-para monitors and suction machines for complete home ICU setup</p>
                    <a href="icu-equipment" class="text-primary text-decoration-none fw-bold small">View Details <i class="fa-solid fa-arrow-right ms-1"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
';
?>
