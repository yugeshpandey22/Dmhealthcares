<?php
// DO NOT set $full_page_override = true;
// We assign our completely unique frontend custom design to $frontend_custom_sections!
$hide_default_welcome = true; // Hides the default "Welcome to TITLE" section from page.php

$frontend_custom_sections = '

<style>
/* Unique styling for Medical Equipment (Hospital Bed) page */
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
.feature-list-icon {
    width: 40px; height: 40px;
    background: rgba(13, 110, 253, 0.1);
    color: #0d6efd;
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    font-size: 1.2rem;
}
</style>

<!-- Intro Hero Section -->
<div class="bg-white py-5 mb-5 border-bottom">
    <div class="container py-4">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0 pe-lg-5">
                <span class="badge equip-badge px-3 py-2 rounded-pill mb-3 fw-bold shadow-sm">Available on Rent & Sale</span>
                <h1 class="fw-bold text-dark mb-4 display-5">Premium Hospital Beds for Home</h1>
                <p class="text-muted mb-4 lead">Ensure maximum comfort and rapid recovery for your loved ones. We provide high-quality, sanitized hospital beds delivered and installed directly at your home.</p>
                <p class="text-muted mb-4">Whether you need a basic manual bed for short-term recovery or a fully motorized ICU bed for long-term critical care, we have the perfect solution to meet your medical requirements.</p>
                
                <div class="d-flex flex-wrap gap-3 mb-5">
                    <div class="d-flex align-items-center me-3">
                        <i class="fa-solid fa-truck-fast text-primary fs-4 me-2"></i>
                        <span class="fw-bold text-dark">Free Delivery</span>
                    </div>
                    <div class="d-flex align-items-center me-3">
                        <i class="fa-solid fa-screwdriver-wrench text-primary fs-4 me-2"></i>
                        <span class="fw-bold text-dark">Free Installation</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-pump-medical text-primary fs-4 me-2"></i>
                        <span class="fw-bold text-dark">100% Sanitized</span>
                    </div>
                </div>
                
                <a href="index.php#appointment" class="btn btn-primary rounded-pill px-5 py-3 shadow-sm fw-bold">
                    <i class="fa-solid fa-cart-shopping me-2"></i> Inquire for Rent / Buy
                </a>
            </div>
            <div class="col-lg-6">
                <div class="position-relative">
                    <img src="assets/images/pages/hospital_bed_home.png" alt="Hospital Bed at Home" class="img-fluid rounded-4 shadow-lg w-100">
                    <!-- Accent Box -->
                    <div class="position-absolute bottom-0 end-0 bg-white p-3 rounded-4 shadow-lg mb-4 me-4 d-none d-md-block" style="border-left: 5px solid #0d6efd;">
                        <h5 class="fw-bold text-dark mb-0">Starting from</h5>
                        <h3 class="fw-bold text-primary mb-0">₹2,000 <span class="fs-6 text-muted fw-normal">/month</span></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Types of Beds Section (Inventory) -->
<div class="container py-5 mb-5 border-bottom">
    <div class="text-center mb-5">
        <h2 class="fw-bold text-dark">Hospital Beds Available on Rent - Our Inventory</h2>
        <div class="mx-auto mt-3 mb-4" style="width: 60px; height: 4px; background-color: #0d6efd; border-radius: 2px;"></div>
        <p class="text-muted mx-auto" style="max-width: 700px;">Browse all hospital bed models with current pricing. Click any item for full specifications, photos and to book delivery.</p>
    </div>
       <div class="row g-4">
';

// Inventory Array
$beds = [
    ["name" => "Basic Hospital Bed", "price" => "₹1,800/month", "tag" => ""],
    ["name" => "Basic Hospital Bed with ABS", "price" => "₹2,200/month", "tag" => "Upgraded"],
    ["name" => "Fowler Hospital Bed", "price" => "₹2,500/month", "tag" => ""],
    ["name" => "Fowler Patient Bed with ABS", "price" => "₹3,000/month", "tag" => ""],
    ["name" => "One Function Motorized Patient Bed", "price" => "₹3,990/month", "tag" => "Motorized"],
    ["name" => "Two Function Motorized Patient Bed", "price" => "₹4,590/month", "tag" => "Motorized"],
    ["name" => "Three Function Motorized Patient Bed / ICU Bed", "price" => "₹6,500/month", "tag" => "Premium"],
    ["name" => "ICU Patient Bed", "price" => "₹7,590/month", "tag" => "Critical Care"],
    ["name" => "Motorized Recliner Patient Bed", "price" => "₹3,000/month", "tag" => ""],
    ["name" => "Air Mattress", "price" => "Buy ₹1,800", "tag" => "Accessory"],
    ["name" => "Fowler Motorised Recliner Patient Bed", "price" => "₹3,500/month", "tag" => ""],
    ["name" => "Commode Hospital Bed", "price" => "₹2,500/month", "tag" => "Specialty"],
];

foreach($beds as $bed) {
    $tag_html = '';
    if ($bed["tag"]) {
        $tag_html = '<div class="position-absolute top-0 end-0 mt-2 me-2">
                        <span class="badge bg-primary shadow-sm">'.$bed["tag"].'</span>
                      </div>';
    }
    
    $frontend_custom_sections .= '<div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card equip-card h-100 bg-white border shadow-sm">
            <div class="position-relative">
                <img src="assets/images/pages/hospital_bed_home.png" class="card-img-top border-bottom" alt="'.$bed["name"].'" style="height: 180px; object-fit: cover;">
                ' . $tag_html . '
            </div>
            <div class="card-body p-3 text-center d-flex flex-column">
                <h6 class="fw-bold text-dark mb-2">'.$bed["name"].'</h6>
                <h5 class="fw-bold text-primary mb-3 mt-auto">'.$bed["price"].'</h5>
                
                <a href="index.php#appointment" class="btn btn-outline-primary btn-sm rounded-pill px-3 fw-bold w-100">
                    View Details <i class="fa-solid fa-arrow-right ms-1"></i>
                </a>
            </div>
        </div>
    </div>';
}

$frontend_custom_sections .= '
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
            <div class="card h-100 border-primary border-2 shadow-sm" style="background-color: #f8fbff;">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-solid fa-bed text-primary fs-3 me-3"></i>
                        <h5 class="fw-bold text-dark mb-0">Hospital Bed on Rent</h5>
                    </div>
                    <p class="text-muted small mb-4">Manual Fowler, semi-electric and full-electric beds for post-surgery or bedridden patients</p>
                    <span class="badge bg-primary text-white w-100 py-2">Currently Viewing</span>
                </div>
            </div>
        </div>
        
        <!-- Equipment 2 -->
        <div class="col-lg-4 col-md-6">
            <div class="card h-100 border shadow-sm transition-hover">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-solid fa-wheelchair text-secondary fs-3 me-3"></i>
                        <h5 class="fw-bold text-dark mb-0">Wheelchair on Rent</h5>
                    </div>
                    <p class="text-muted small mb-4">Standard, recliner, commode and motorised wheelchairs for mobility-impaired patients</p>
                    <a href="wheelchair" class="text-primary text-decoration-none fw-bold small">View Details <i class="fa-solid fa-arrow-right ms-1"></i></a>
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

$frontend_custom_sections .= '
<!-- Features & Why Necessary Section -->
<div class="bg-white py-5 mb-5 border-top">
    <div class="container py-4">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <img src="assets/images/pages/medical_equipment_bed.png" alt="Hospital Bed Remote" class="img-fluid rounded-4 shadow-sm w-100 border border-4 border-light">
            </div>
            <div class="col-lg-7 pe-lg-5">
                <h2 class="fw-bold text-dark mb-4">Why is a Hospital Bed Necessary at Home?</h2>
                <p class="text-muted mb-5">Using a standard home bed for a recovering or bedridden patient can lead to complications like bedsores and makes it extremely difficult for caregivers to provide assistance.</p>
                
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="d-flex align-items-start">
                            <div class="feature-list-icon me-3 flex-shrink-0">
                                <i class="fa-solid fa-shield-halved"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold text-dark mb-1">Fall Prevention</h6>
                                <p class="text-muted small mb-0">Sturdy collapsible side rails ensure that patients, especially those with dementia or weakness, do not roll off the bed.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-start">
                            <div class="feature-list-icon me-3 flex-shrink-0">
                                <i class="fa-solid fa-user-nurse"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold text-dark mb-1">Caregiver Convenience</h6>
                                <p class="text-muted small mb-0">Height adjustment allows caregivers and nurses to change diapers and clean the patient without hurting their own back.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-start">
                            <div class="feature-list-icon me-3 flex-shrink-0">
                                <i class="fa-solid fa-lungs"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold text-dark mb-1">Better Breathing & Feeding</h6>
                                <p class="text-muted small mb-0">Raising the backrest allows the patient to sit up comfortably while eating or breathing via oxygen support.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-start">
                            <div class="feature-list-icon me-3 flex-shrink-0">
                                <i class="fa-solid fa-bed-pulse"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold text-dark mb-1">Bedsore Prevention</h6>
                                <p class="text-muted small mb-0">When combined with our specialized air mattresses, hospital beds drastically reduce the risk of painful pressure ulcers.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
';
?>
