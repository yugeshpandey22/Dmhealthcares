<?php
// DO NOT set $full_page_override = true;
$hide_default_welcome = true; // Hides the default "Welcome to TITLE" section from page.php

$frontend_custom_sections = '

<style>
/* Unique styling for ICU Setup page */
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
            <!-- Details -->
            <div class="col-lg-7 mb-5 mb-lg-0 pe-lg-5 order-2 order-lg-1">
                <span class="badge bg-danger px-3 py-2 rounded-pill mb-3 fw-bold shadow-sm">Critical Care Service</span>
                <h1 class="fw-bold text-dark mb-4 display-5">Complete ICU Setup At Home</h1>
                
                <p class="text-muted mb-4 lead">Transform a room in your home into a fully functional Intensive Care Unit. We provide state-of-the-art medical equipment and highly trained ICU nurses to deliver hospital-grade critical care for your loved ones in the comfort of their home.</p>
                
                <ul class="list-unstyled mb-5">
                    <li class="mb-3 d-flex align-items-center"><i class="fa-solid fa-heart-pulse text-danger fs-5 me-3"></i> <span class="fw-bold text-dark">Continuous Monitoring:</span> <span class="text-muted ms-2">24/7 observation using multi-parameter patient monitors.</span></li>
                    <li class="mb-3 d-flex align-items-center"><i class="fa-solid fa-shield-virus text-danger fs-5 me-3"></i> <span class="fw-bold text-dark">Infection Control:</span> <span class="text-muted ms-2">Significantly lower risk of Hospital Acquired Infections (HAI).</span></li>
                    <li class="mb-3 d-flex align-items-center"><i class="fa-solid fa-indian-rupee-sign text-danger fs-5 me-3"></i> <span class="fw-bold text-dark">Cost-Effective:</span> <span class="text-muted ms-2">Save up to 50% compared to extended hospital ICU stays.</span></li>
                </ul>
                
                <div class="d-flex flex-wrap gap-3 mb-4">
                    <a href="index.php#appointment" class="btn btn-primary rounded-pill px-5 py-3 shadow-sm fw-bold">
                        <i class="fa-solid fa-clipboard-check me-2"></i> Book Setup
                    </a>
                    <a href="tel:+918000000000" class="btn btn-outline-dark rounded-pill px-5 py-3 fw-bold">
                        <i class="fa-solid fa-phone me-2"></i> Discuss Requirements
                    </a>
                </div>
            </div>
            
            <!-- Image -->
            <div class="col-lg-5 order-1 order-lg-2 mb-4 mb-lg-0">
                <div class="position-relative">
                    <div class="rounded-4 shadow-lg w-100 d-flex flex-column align-items-center justify-content-center bg-white border border-4 border-light" style="height: 450px;">
                        <div class="mb-4 bg-danger bg-opacity-10 p-5 rounded-circle d-flex align-items-center justify-content-center" style="width: 200px; height: 200px;">
                            <i class="fa-solid fa-bed-pulse text-danger" style="font-size: 80px;"></i>
                        </div>
                        <span class="text-muted fw-bold text-uppercase tracking-wider">Hospital Like Care</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Core ICU Components Section -->
<div class="container py-5 mb-5 border-bottom">
    <div class="text-center mb-5">
        <h2 class="fw-bold text-dark">What Does an ICU Setup Include?</h2>
        <div class="mx-auto mt-3 mb-4" style="width: 60px; height: 4px; background-color: #0d6efd; border-radius: 2px;"></div>
        <p class="text-muted mx-auto" style="max-width: 700px;">We customize the ICU package strictly based on the treating doctor\'s prescription. Here are the core medical devices typically included in a home ICU setup.</p>
    </div>
    
    <div class="row g-4">
        ';

        // ICU Equipment Array
        $icu_items = [
            ["name" => "Motorized ICU Bed", "icon" => "fa-bed", "features" => "3-function or 5-function fully electric beds with ABS panels and side rails to prevent falls. Includes an air mattress to prevent bedsores."],
            ["name" => "Multi-Para Monitor", "icon" => "fa-heart-pulse", "features" => "Continuously monitors critical vital signs: ECG, Heart Rate, SpO2 (Oxygen Saturation), NIBP (Blood Pressure), and Respiration Rate."],
            ["name" => "Oxygen Supply", "icon" => "fa-lungs", "features" => "10 LPM Oxygen Concentrators for continuous supply, backed up by D-Type high-pressure oxygen cylinders for emergencies or power cuts."],
            ["name" => "Respiratory Support", "icon" => "fa-mask-ventilator", "features" => "BiPAP machines, CPAP, or Portable Ventilators (depending on severity) to support patients with acute respiratory distress."],
            ["name" => "Suction Machine", "icon" => "fa-pump-medical", "features" => "Medical suction pumps to clear mucus and secretions from the patient\'s airway, keeping their breathing clear and preventing choking."],
            ["name" => "Syringe & Infusion Pumps", "icon" => "fa-syringe", "features" => "Precision medical pumps used to deliver fluids, medications, and nutrients directly into the patient\'s bloodstream at controlled rates."],
            ["name" => "DVT Pump", "icon" => "fa-shoe-prints", "features" => "Deep Vein Thrombosis pumps apply sequential compression to the legs, preventing dangerous blood clots in bedridden patients."],
            ["name" => "IV Stand & Accessories", "icon" => "fa-staff-snake", "features" => "Intravenous stands, emergency medical kits, ambu bags, and all necessary sterile disposables for comprehensive care."]
        ];
        
        foreach($icu_items as $item) {
            
            $frontend_custom_sections .= '<div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card equip-card h-100 bg-white border shadow-sm">
                    <div class="card-img-top border-bottom bg-light d-flex flex-column align-items-center justify-content-center" style="height: 160px; background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
                        <i class="fa-solid '.$item["icon"].' text-primary mb-2" style="font-size: 50px; opacity: 0.8;"></i>
                    </div>
                    <div class="card-body p-4 text-center d-flex flex-column">
                        <h6 class="fw-bold text-dark mb-3">'.$item["name"].'</h6>
                        <p class="text-muted small mb-0 mt-auto text-start">'.$item["features"].'</p>
                    </div>
                </div>
            </div>';
        }

$frontend_custom_sections .= '
    </div>
</div>

<!-- Setup Process Section -->
<div class="bg-light py-5 mb-5 border-bottom border-top">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">How We Establish ICU At Home</h2>
            <div class="mx-auto mt-3 mb-4" style="width: 60px; height: 4px; background-color: #0d6efd; border-radius: 2px;"></div>
        </div>
        
        <div class="row g-4 position-relative">
            <!-- Step 1 -->
            <div class="col-lg-3 col-sm-6 text-center">
                <div class="bg-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4 shadow-sm border border-primary border-2" style="width: 80px; height: 80px;">
                    <i class="fa-solid fa-file-medical fs-3 text-primary"></i>
                </div>
                <h5 class="fw-bold text-dark">1. Clinical Assessment</h5>
                <p class="text-muted small">We review the hospital discharge summary and consult with the primary physician to understand exact requirements.</p>
            </div>
            
            <!-- Step 2 -->
            <div class="col-lg-3 col-sm-6 text-center">
                <div class="bg-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4 shadow-sm border border-primary border-2" style="width: 80px; height: 80px;">
                    <i class="fa-solid fa-truck-medical fs-3 text-primary"></i>
                </div>
                <h5 class="fw-bold text-dark">2. Rapid Delivery</h5>
                <p class="text-muted small">All required equipment is transported to your home in sanitized vehicles on priority, often within 4-6 hours.</p>
            </div>
            
            <!-- Step 3 -->
            <div class="col-lg-3 col-sm-6 text-center">
                <div class="bg-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4 shadow-sm border border-primary border-2" style="width: 80px; height: 80px;">
                    <i class="fa-solid fa-wrench fs-3 text-primary"></i>
                </div>
                <h5 class="fw-bold text-dark">3. Installation & Testing</h5>
                <p class="text-muted small">Our technical team installs the ICU bed, calibrates monitors and ventilators, and ensures everything runs perfectly.</p>
            </div>
            
            <!-- Step 4 -->
            <div class="col-lg-3 col-sm-6 text-center">
                <div class="bg-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4 shadow-sm border border-primary border-2" style="width: 80px; height: 80px;">
                    <i class="fa-solid fa-user-nurse fs-3 text-primary"></i>
                </div>
                <h5 class="fw-bold text-dark">4. Nursing Deployment</h5>
                <p class="text-muted small">Experienced ICU-trained nurses (12 or 24-hour shifts) are deployed to monitor and administer critical care.</p>
            </div>
        </div>
    </div>
</div>

<!-- Benefits Section -->
<div class="container py-5 mb-5 border-bottom">
    <div class="row align-items-center mb-5">
        <div class="col-lg-8">
            <h2 class="fw-bold text-dark">Why Opt for Home ICU?</h2>
            <div class="mt-3 mb-4" style="width: 60px; height: 4px; background-color: #0d6efd; border-radius: 2px;"></div>
            <p class="text-muted lead">Shifting a critically ill patient home is a big decision. Here are the clear medical and psychological advantages of a home ICU:</p>
        </div>
    </div>
    
    <div class="row g-4">
        <!-- Feature 1 -->
        <div class="col-lg-4 col-md-6">
            <div class="feature-card p-4 h-100 shadow-sm border bg-white rounded-4 transition-hover">
                <div class="bg-primary bg-opacity-10 p-3 rounded-circle text-primary d-inline-flex mb-3">
                    <i class="fa-solid fa-house-chimney-medical fs-4"></i>
                </div>
                <h5 class="fw-bold text-dark mb-2">Faster Healing in Familiar Space</h5>
                <p class="text-muted small mb-0">Patients recover faster when surrounded by family members in a familiar environment. It significantly reduces ICU delirium and anxiety.</p>
            </div>
        </div>
        
        <!-- Feature 2 -->
        <div class="col-lg-4 col-md-6">
            <div class="feature-card p-4 h-100 shadow-sm border bg-white rounded-4 transition-hover">
                <div class="bg-primary bg-opacity-10 p-3 rounded-circle text-primary d-inline-flex mb-3">
                    <i class="fa-solid fa-viruses fs-4"></i>
                </div>
                <h5 class="fw-bold text-dark mb-2">Lower Infection Risk</h5>
                <p class="text-muted small mb-0">Hospitals carry superbugs. Treating patients at home drastically reduces the risk of secondary, often fatal, Hospital Acquired Infections.</p>
            </div>
        </div>
        
        <!-- Feature 3 -->
        <div class="col-lg-4 col-md-6">
            <div class="feature-card p-4 h-100 shadow-sm border bg-white rounded-4 transition-hover">
                <div class="bg-primary bg-opacity-10 p-3 rounded-circle text-primary d-inline-flex mb-3">
                    <i class="fa-solid fa-wallet fs-4"></i>
                </div>
                <h5 class="fw-bold text-dark mb-2">Financial Relief</h5>
                <p class="text-muted small mb-0">Prolonged hospital ICU stays can be financially draining. Home ICU provides the same standard of equipment and nursing at a fraction of the cost.</p>
            </div>
        </div>
    </div>
</div>


';
?>
