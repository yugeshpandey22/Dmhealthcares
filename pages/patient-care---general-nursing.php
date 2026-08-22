<?php
// DO NOT set $full_page_override = true;
// We want to use the exact same layout as Noida (standard CMS layout with Banner, Image, Specs).
// We simply assign our frontend custom design to $frontend_custom_sections so it renders full width!

$frontend_custom_sections = '

<style>
.transition-hover { transition: all 0.3s ease; }
.transition-hover:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important; }
.nursing-feature-icon {
    width: 60px; height: 60px;
    background: rgba(229, 37, 42, 0.1);
    color: var(--primary-color);
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    font-size: 1.5rem;
    margin-bottom: 15px;
}
</style>

<div class="mt-5 pt-4 border-top">
    <!-- What is Included Section -->
    <div class="text-center mb-5 mt-4">
        <h2 class="fw-bold text-dark mb-3">Comprehensive Nursing Care at Home</h2>
        <p class="text-muted mx-auto" style="max-width: 600px;">Our certified and highly experienced nurses provide professional medical care right at your doorstep, ensuring a speedy and comfortable recovery.</p>
    </div>
    
    <div class="row g-4 mb-5 pb-4">
        <!-- Service 1 -->
        <div class="col-lg-3 col-md-6">
            <div class="card h-100 p-4 rounded-4 bg-white border-0 shadow-sm transition-hover">
                <div class="nursing-feature-icon">
                    <i class="fa-solid fa-syringe"></i>
                </div>
                <h5 class="fw-bold text-dark mb-3">IV & Injections</h5>
                <p class="text-muted small mb-0">Safe and hygienic administration of IV fluids, antibiotics, and routine injections by certified nurses.</p>
            </div>
        </div>
        <!-- Service 2 -->
        <div class="col-lg-3 col-md-6">
            <div class="card h-100 p-4 rounded-4 bg-white border-0 shadow-sm transition-hover">
                <div class="nursing-feature-icon">
                    <i class="fa-solid fa-bandage"></i>
                </div>
                <h5 class="fw-bold text-dark mb-3">Wound Dressing</h5>
                <p class="text-muted small mb-0">Professional care for post-surgical wounds, diabetic ulcers, and bedsores to prevent infections.</p>
            </div>
        </div>
        <!-- Service 3 -->
        <div class="col-lg-3 col-md-6">
            <div class="card h-100 p-4 rounded-4 bg-white border-0 shadow-sm transition-hover">
                <div class="nursing-feature-icon">
                    <i class="fa-solid fa-heart-pulse"></i>
                </div>
                <h5 class="fw-bold text-dark mb-3">Vitals Monitoring</h5>
                <p class="text-muted small mb-0">Regular monitoring of blood pressure, blood sugar, oxygen levels, and temperature for critical patients.</p>
            </div>
        </div>
        <!-- Service 4 -->
        <div class="col-lg-3 col-md-6">
            <div class="card h-100 p-4 rounded-4 bg-white border-0 shadow-sm transition-hover">
                <div class="nursing-feature-icon">
                    <i class="fa-solid fa-bed-pulse"></i>
                </div>
                <h5 class="fw-bold text-dark mb-3">Post-Surgical Care</h5>
                <p class="text-muted small mb-0">Specialized nursing care tailored for patients recovering from major surgeries at home.</p>
            </div>
        </div>
    </div>
</div>

<div class="mt-5 pt-4 border-top">
    <!-- Why Choose Us Section -->
    <div class="row align-items-center mb-5 mt-4">
        <div class="col-lg-6 mb-4 mb-lg-0">
            <img src="' . (isset($display_image) ? $display_image : '') . '" alt="Nurse caring for patient" class="img-fluid rounded-4 shadow-lg w-100">
        </div>
        <div class="col-lg-6 ps-lg-5">
            <h2 class="fw-bold text-dark mb-4">Why Trust Our Nurses?</h2>
            <p class="text-muted mb-4">When you bring a medical professional into your home, you need to know you are in safe hands. Here is why DM Healthcare is the most trusted choice for home nursing.</p>
            
            <ul class="list-unstyled mb-4">
                <li class="mb-3 d-flex align-items-center"><i class="fa-solid fa-check-double text-primary me-3 fs-5"></i> <strong>Registered & Certified:</strong> All our nurses hold valid nursing degrees (B.Sc / GNM) and registrations.</li>
                <li class="mb-3 d-flex align-items-center"><i class="fa-solid fa-check-double text-primary me-3 fs-5"></i> <strong>Hospital Experienced:</strong> Minimum 2+ years of prior experience working in reputed hospital ICUs and wards.</li>
                <li class="mb-3 d-flex align-items-center"><i class="fa-solid fa-check-double text-primary me-3 fs-5"></i> <strong>Doctor Supervised:</strong> Our nursing staff follows protocols strictly supervised by our senior doctors.</li>
                <li class="mb-3 d-flex align-items-center"><i class="fa-solid fa-check-double text-primary me-3 fs-5"></i> <strong>Compassionate Care:</strong> We believe in treating patients with the empathy and dignity they deserve.</li>
            </ul>
            
            <a href="index.php#appointment" class="btn btn-primary rounded-pill px-5 py-3 shadow-sm fw-bold mt-2">
                <i class="fa-solid fa-phone me-2"></i> Request a Nurse Now
            </a>
        </div>
    </div>
</div>

<div class="mt-5 pt-4 border-top bg-light pb-5">
    <div class="container pt-4">
        <!-- Conditions Treated Section (Inspired by Zorgers) -->
        <div class="text-center mb-5">
            <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill mb-3 fw-bold shadow-sm">Specialized Patient Care</span>
            <h2 class="fw-bold text-dark mb-3">Conditions We Treat at Home</h2>
            <p class="text-muted mx-auto" style="max-width: 700px;">Patient care at home is appropriate for a wide range of medical conditions. Our specialized nurses are trained to handle complex recovery and chronic disease management right in your comfort zone.</p>
        </div>
        
        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 rounded-4 bg-white border-0 shadow-sm transition-hover border-top border-4 border-primary">
                    <h5 class="fw-bold text-dark mb-3"><i class="fa-solid fa-bed text-primary me-2"></i> Post-Surgery Recovery</h5>
                    <p class="text-muted small mb-0">Expert post-operative care for joint replacements, cardiac surgeries, brain surgeries, and general surgical procedures to ensure a safe recovery.</p>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 rounded-4 bg-white border-0 shadow-sm transition-hover border-top border-4 border-success">
                    <h5 class="fw-bold text-dark mb-3"><i class="fa-solid fa-brain text-success me-2"></i> Stroke Rehabilitation</h5>
                    <p class="text-muted small mb-0">Comprehensive care for stroke patients, including paralysis support, positioning to prevent bedsores, and assistance with daily activities.</p>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 rounded-4 bg-white border-0 shadow-sm transition-hover border-top border-4 border-warning">
                    <h5 class="fw-bold text-dark mb-3"><i class="fa-solid fa-lungs-virus text-warning me-2"></i> Chronic Disease Management</h5>
                    <p class="text-muted small mb-0">Continuous monitoring and management of chronic conditions like COPD, CKD (Kidney Disease), Heart Failure, and Diabetes.</p>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 rounded-4 bg-white border-0 shadow-sm transition-hover border-top border-4 border-danger">
                    <h5 class="fw-bold text-dark mb-3"><i class="fa-solid fa-ribbon text-danger me-2"></i> Cancer Palliative Care</h5>
                    <p class="text-muted small mb-0">Compassionate support including chemotherapy recovery, pain management, IV infusions, and nutritional support (NG/PEG tube feeding).</p>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 rounded-4 bg-white border-0 shadow-sm transition-hover border-top border-4 border-info">
                    <h5 class="fw-bold text-dark mb-3"><i class="fa-solid fa-lungs text-info me-2"></i> ICU Step-Down Care</h5>
                    <p class="text-muted small mb-0">Critical care at home for patients transitioning from the ICU, including ventilator management and tracheostomy care by qualified critical care nurses.</p>
                </div>
            </div>
            <!-- Card 6 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 rounded-4 bg-white border-0 shadow-sm transition-hover border-top border-4 border-secondary">
                    <h5 class="fw-bold text-dark mb-3"><i class="fa-solid fa-user-clock text-secondary me-2"></i> Parkinson\'s & Dementia</h5>
                    <p class="text-muted small mb-0">Specialized cognitive and physical support for neurodegenerative conditions, ensuring patient safety and providing respite for family members.</p>
                </div>
            </div>
        </div>
    </div>
</div>
';
?>
