<?php
// DO NOT set $full_page_override = true;
// We want to use the exact same layout as standard CMS (with Banner, Image).
// We simply assign our frontend custom design to $frontend_custom_sections so it renders full width!

$frontend_custom_sections = '

<style>
.transition-hover { transition: all 0.3s ease; }
.transition-hover:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important; }
.nurse-icon {
    width: 60px; height: 60px;
    background: rgba(13, 202, 240, 0.15); /* Cyan background */
    color: #052c65; /* Deep clinical blue icon */
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    font-size: 1.5rem;
    margin-bottom: 15px;
}
.text-clinical-blue { color: #052c65 !important; }
.bg-clinical-cyan { background-color: #0dcaf0 !important; }
</style>

<div class="mt-5 pt-4 border-top bg-light pb-5">
    <div class="container pt-4">
        <!-- Intro Section -->
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 mb-4 mb-lg-0 order-2 order-lg-1">
                <span class="badge bg-clinical-cyan text-dark px-3 py-2 rounded-pill mb-3 fw-bold shadow-sm">Hospital-Grade Care</span>
                <h2 class="fw-bold text-clinical-blue mb-4">Qualified Clinical Nurses at Home</h2>
                <p class="text-muted mb-4 lead">Skip the stressful hospital visits for routine clinical procedures. Our certified and highly experienced nurses bring ICU-standard medical care directly to your doorstep.</p>
                <p class="text-muted mb-4">From administering IV antibiotics to managing complex post-surgical wounds, our registered nurses (GNM/BSc) ensure strict infection control and precise medical execution in the comfort of your home.</p>
                
                <ul class="list-unstyled mb-4 text-muted">
                    <li class="mb-2"><i class="fa-solid fa-user-nurse me-2" style="color: #0dcaf0;"></i> Certified GNM & BSc Registered Nurses</li>
                    <li class="mb-2"><i class="fa-solid fa-virus-slash me-2" style="color: #0dcaf0;"></i> Strict adherence to sterile protocols</li>
                    <li class="mb-2"><i class="fa-solid fa-file-medical me-2" style="color: #0dcaf0;"></i> Direct coordination with your treating doctor</li>
                </ul>
                
                <a href="index.php#appointment" class="btn bg-clinical-cyan text-dark rounded-pill px-5 py-3 shadow-sm fw-bold">
                    <i class="fa-solid fa-syringe me-2"></i> Book a Nurse Visit
                </a>
            </div>
            <div class="col-lg-6 ps-lg-5 order-1 order-lg-2 mb-4 mb-lg-0">
                <img src="assets/images/pages/qualified_nurse.png" alt="Qualified Nurse at Home" class="img-fluid rounded-4 shadow-lg w-100 border border-4" style="border-color: #0dcaf0 !important;">
            </div>
        </div>
    </div>
</div>

<div class="mt-5 pt-4 border-top bg-white pb-5">
    <div class="container pt-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-clinical-blue mb-3">Clinical Procedures We Handle</h2>
            <p class="text-muted mx-auto" style="max-width: 700px;">Our nursing staff is trained to handle invasive and non-invasive medical procedures with utmost precision and care.</p>
        </div>
        
        <div class="row g-4">
            <!-- Procedure 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 rounded-4 bg-light border-0 shadow-sm transition-hover" style="border-top: 4px solid #052c65 !important;">
                    <div class="nurse-icon">
                        <i class="fa-solid fa-syringe"></i>
                    </div>
                    <h5 class="fw-bold text-clinical-blue mb-3">IV Infusion & Injections</h5>
                    <p class="text-muted small mb-0">Safe administration of IV fluids, antibiotics, IM/SC injections, and cannula insertion by expert hands.</p>
                </div>
            </div>
            <!-- Procedure 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 rounded-4 bg-light border-0 shadow-sm transition-hover" style="border-top: 4px solid #0dcaf0 !important;">
                    <div class="nurse-icon">
                        <i class="fa-solid fa-band-aid"></i>
                    </div>
                    <h5 class="fw-bold text-clinical-blue mb-3">Wound Care & Dressings</h5>
                    <p class="text-muted small mb-0">Professional cleaning and dressing of post-surgical wounds, diabetic ulcers, and severe bedsores to promote faster healing.</p>
                </div>
            </div>
            <!-- Procedure 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 rounded-4 bg-light border-0 shadow-sm transition-hover" style="border-top: 4px solid #052c65 !important;">
                    <div class="nurse-icon">
                        <i class="fa-solid fa-droplet"></i>
                    </div>
                    <h5 class="fw-bold text-clinical-blue mb-3">Urinary Catheterization</h5>
                    <p class="text-muted small mb-0">Sterile insertion, removal, and maintenance of Foley catheters or condom catheters, preventing UTIs.</p>
                </div>
            </div>
            <!-- Procedure 4 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 rounded-4 bg-light border-0 shadow-sm transition-hover" style="border-top: 4px solid #0dcaf0 !important;">
                    <div class="nurse-icon">
                        <i class="fa-solid fa-staff-snake"></i>
                    </div>
                    <h5 class="fw-bold text-clinical-blue mb-3">Ryles Tube (NG) Feeding</h5>
                    <p class="text-muted small mb-0">Insertion of Nasogastric tubes and administering liquid feeds precisely without risk of aspiration.</p>
                </div>
            </div>
            <!-- Procedure 5 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 rounded-4 bg-light border-0 shadow-sm transition-hover" style="border-top: 4px solid #052c65 !important;">
                    <div class="nurse-icon">
                        <i class="fa-solid fa-lungs"></i>
                    </div>
                    <h5 class="fw-bold text-clinical-blue mb-3">Respiratory Care</h5>
                    <p class="text-muted small mb-0">Expert management of Oxygen cylinders, BiPAP/CPAP machines, nebulization, and Tracheostomy care.</p>
                </div>
            </div>
            <!-- Procedure 6 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 rounded-4 bg-light border-0 shadow-sm transition-hover" style="border-top: 4px solid #0dcaf0 !important;">
                    <div class="nurse-icon">
                        <i class="fa-solid fa-heart-circle-check"></i>
                    </div>
                    <h5 class="fw-bold text-clinical-blue mb-3">Post-Surgical Nursing</h5>
                    <p class="text-muted small mb-0">Comprehensive monitoring of vitals, drain management, and pain management for patients just discharged from surgery.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mt-5 pt-4 border-top bg-light pb-5 mb-5">
    <div class="container pt-4">
        <div class="row align-items-center flex-row-reverse mb-5">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <img src="assets/images/pages/nurse_wound_care.png" alt="Clinical Nurse preparing equipment" class="img-fluid rounded-4 shadow-sm w-100 border border-4" style="border-color: #0dcaf0 !important;">
            </div>
            <div class="col-lg-7 pe-lg-5">
                <h2 class="fw-bold text-clinical-blue mb-4">Why Trust Our Nursing Services?</h2>
                <p class="text-muted mb-4">Infection control and clinical accuracy are our top priorities. Here is how we ensure your safety:</p>
                
                <div class="row g-4 mt-2">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-start">
                            <i class="fa-solid fa-hands-bubbles fs-4 me-3 mt-1" style="color: #0dcaf0;"></i>
                            <div>
                                <h6 class="fw-bold text-clinical-blue mb-1">100% Sterile Procedures</h6>
                                <p class="text-muted small mb-0">Nurses use fresh sterile gloves, masks, and single-use disposable kits for every procedure to prevent cross-contamination.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-start">
                            <i class="fa-solid fa-user-doctor fs-4 me-3 mt-1" style="color: #0dcaf0;"></i>
                            <div>
                                <h6 class="fw-bold text-clinical-blue mb-1">Doctor\'s Supervision</h6>
                                <p class="text-muted small mb-0">Our nurses do not work in isolation. They constantly report vitals and recovery progress to our in-house medical officers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-start">
                            <i class="fa-solid fa-graduation-cap fs-4 me-3 mt-1" style="color: #0dcaf0;"></i>
                            <div>
                                <h6 class="fw-bold text-clinical-blue mb-1">Certified Professionals</h6>
                                <p class="text-muted small mb-0">We only deploy nurses who hold valid nursing council registrations and have minimum 2 years of hospital experience.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-start">
                            <i class="fa-solid fa-clock-rotate-left fs-4 me-3 mt-1" style="color: #0dcaf0;"></i>
                            <div>
                                <h6 class="fw-bold text-clinical-blue mb-1">Flexible Care Plans</h6>
                                <p class="text-muted small mb-0">Whether you need a 1-hour visit for an injection or a 24/7 dedicated ICU nurse, we customize our shifts for you.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
';
