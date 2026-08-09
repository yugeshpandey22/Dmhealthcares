<?php
// DO NOT set $full_page_override = true;
// We assign our completely unique frontend custom design to $frontend_custom_sections!

$frontend_custom_sections = '

<style>
/* Unique styling for Physician page */
.doctor-hero-bg {
    background: url(\'assets/images/pages/physician_visit.png\') center/cover no-repeat;
    position: relative;
    padding: 100px 0;
    margin-top: 2rem;
    border-radius: 1rem;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}
.doctor-hero-overlay {
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: linear-gradient(90deg, rgba(20, 108, 67, 0.9) 0%, rgba(20, 108, 67, 0.4) 100%);
    border-radius: 1rem;
}
.doctor-feature-icon {
    width: 80px; height: 80px;
    background: #fff;
    color: #198754;
    border: 3px solid #198754;
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    font-size: 2rem;
    margin: 0 auto 20px;
    box-shadow: 0 5px 15px rgba(25, 135, 84, 0.2);
}
.zig-zag-image {
    border-radius: 20px;
    box-shadow: -15px 15px 0px rgba(25, 135, 84, 0.1);
}
.zig-zag-image-reverse {
    border-radius: 20px;
    box-shadow: 15px 15px 0px rgba(25, 135, 84, 0.1);
}
</style>

<!-- Hero Section with Overlay -->
<div class="container mb-5 pb-5">
    <div class="doctor-hero-bg">
        <div class="doctor-hero-overlay"></div>
        <div class="container position-relative z-1">
            <div class="row">
                <div class="col-lg-7 text-white p-4 p-md-5">
                    <span class="badge bg-white text-success px-3 py-2 rounded-pill mb-3 fw-bold shadow-sm">Expert Medical Consultation</span>
                    <h1 class="fw-bold display-5 mb-4">Physician Visits at Home</h1>
                    <p class="lead mb-4 opacity-75">Skip the crowded waiting rooms and travel hassle. Our highly qualified and experienced physicians bring complete medical diagnosis and treatment right to your living room.</p>
                    <div class="d-flex gap-3 mt-4">
                        <a href="index.php#appointment" class="btn btn-light text-success rounded-pill px-5 py-3 shadow-sm fw-bold">
                            <i class="fa-solid fa-stethoscope me-2"></i> Book Doctor Visit
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 3-Column Feature Highlight (Different from cards) -->
<div class="bg-light py-5 mb-5 border-top border-bottom">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">Why Choose Home Consultations?</h2>
            <div class="mx-auto mt-3 mb-4" style="width: 60px; height: 4px; background-color: #198754; border-radius: 2px;"></div>
        </div>
        
        <div class="row g-5 text-center">
            <div class="col-md-4">
                <div class="doctor-feature-icon">
                    <i class="fa-solid fa-house-chimney-medical"></i>
                </div>
                <h4 class="fw-bold text-dark mb-3">Total Comfort</h4>
                <p class="text-muted">Particularly beneficial for elderly or severely ill patients who find it physically exhausting to travel to a clinic or hospital.</p>
            </div>
            <div class="col-md-4">
                <div class="doctor-feature-icon">
                    <i class="fa-solid fa-shield-virus"></i>
                </div>
                <h4 class="fw-bold text-dark mb-3">Zero Infection Risk</h4>
                <p class="text-muted">By staying at home, you avoid exposure to other contagious diseases commonly found in crowded hospital waiting areas.</p>
            </div>
            <div class="col-md-4">
                <div class="doctor-feature-icon">
                    <i class="fa-solid fa-user-doctor"></i>
                </div>
                <h4 class="fw-bold text-dark mb-3">Undivided Attention</h4>
                <p class="text-muted">Our doctors are not rushing to see the next patient in line. You get their complete, undivided attention in a relaxed environment.</p>
            </div>
        </div>
    </div>
</div>

<!-- Zig-Zag Service Sections -->
<div class="container py-5 mb-5">
    
    <!-- Section 1 -->
    <div class="row align-items-center mb-5 pb-5">
        <div class="col-lg-6 mb-4 mb-lg-0">
            <img src="assets/images/pages/doctor_checkup.png" alt="Doctor Checkup" class="img-fluid zig-zag-image w-100">
        </div>
        <div class="col-lg-5 offset-lg-1">
            <div class="d-flex align-items-center mb-3">
                <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                    <i class="fa-solid fa-notes-medical fs-5"></i>
                </div>
                <h3 class="fw-bold text-dark mb-0">General Illness & Diagnostics</h3>
            </div>
            <p class="text-muted mb-4">Whether it is a sudden high fever, severe cold, body aches, or digestive issues, our physicians can accurately diagnose the problem at home.</p>
            <ul class="list-unstyled text-muted border-start border-success border-3 ps-3">
                <li class="mb-2">Comprehensive physical examination</li>
                <li class="mb-2">Vitals check (BP, Sugar, SPO2, Heart Rate)</li>
                <li class="mb-2">Immediate prescription and initial dosage</li>
                <li>Recommendation for lab tests if required</li>
            </ul>
        </div>
    </div>

    <!-- Section 2 (Reverse) -->
    <div class="row align-items-center flex-row-reverse mb-5 pb-3">
        <div class="col-lg-6 mb-4 mb-lg-0">
            <img src="assets/images/pages/doctor_prescription.png" alt="Doctor Prescription" class="img-fluid zig-zag-image-reverse w-100">
        </div>
        <div class="col-lg-5 me-lg-auto">
            <div class="d-flex align-items-center mb-3">
                <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                    <i class="fa-solid fa-file-prescription fs-5"></i>
                </div>
                <h3 class="fw-bold text-dark mb-0">Chronic Disease Management</h3>
            </div>
            <p class="text-muted mb-4">For patients suffering from long-term conditions like Diabetes, Hypertension, or Thyroid issues, regular medical reviews are critical.</p>
            <ul class="list-unstyled text-muted border-start border-success border-3 ps-3">
                <li class="mb-2">Regular medicine review and adjustments</li>
                <li class="mb-2">Dietary and lifestyle counseling</li>
                <li class="mb-2">Preventive care for elderly patients</li>
                <li>Post-hospitalization follow-ups</li>
            </ul>
        </div>
    </div>

</div>

<!-- How It Works (Timeline) -->
<div class="bg-light py-5 mb-5 border-top border-bottom">
    <div class="container py-4">
        <div class="text-center mb-5">
            <span class="badge bg-success bg-opacity-10 text-success px-3 py-2 rounded-pill mb-3 fw-bold shadow-sm">Simple Process</span>
            <h2 class="fw-bold text-dark">How Our Home Consultations Work</h2>
            <div class="mx-auto mt-3" style="width: 60px; height: 4px; background-color: #198754; border-radius: 2px;"></div>
        </div>
        
        <div class="row position-relative mt-5">
            <!-- Connecting Line for Desktop -->
            <div class="d-none d-lg-block position-absolute" style="top: 35px; left: 10%; right: 10%; height: 3px; background-color: rgba(25, 135, 84, 0.2); z-index: 0;"></div>
            
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 position-relative z-1">
                <div class="text-center px-2">
                    <div class="bg-white text-success border border-3 rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3 shadow-sm" style="width: 70px; height: 70px; border-color: #198754 !important;">
                        <i class="fa-solid fa-phone fs-3"></i>
                    </div>
                    <h5 class="fw-bold text-dark mt-4">1. Book a Visit</h5>
                    <p class="text-muted small">Call our helpline or book online. Share the patient\'s basic symptoms with our coordinator.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 position-relative z-1">
                <div class="text-center px-2">
                    <div class="bg-white text-success border border-3 rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3 shadow-sm" style="width: 70px; height: 70px; border-color: #198754 !important;">
                        <i class="fa-solid fa-truck-medical fs-3"></i>
                    </div>
                    <h5 class="fw-bold text-dark mt-4">2. Doctor Arrives</h5>
                    <p class="text-muted small">A qualified physician arrives at your doorstep at the scheduled time fully equipped.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 position-relative z-1">
                <div class="text-center px-2">
                    <div class="bg-white text-success border border-3 rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3 shadow-sm" style="width: 70px; height: 70px; border-color: #198754 !important;">
                        <i class="fa-solid fa-stethoscope fs-3"></i>
                    </div>
                    <h5 class="fw-bold text-dark mt-4">3. Consultation</h5>
                    <p class="text-muted small">The doctor conducts a thorough physical examination and reviews previous medical history.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 position-relative z-1">
                <div class="text-center px-2">
                    <div class="bg-white text-success border border-3 rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3 shadow-sm" style="width: 70px; height: 70px; border-color: #198754 !important;">
                        <i class="fa-solid fa-file-signature fs-3"></i>
                    </div>
                    <h5 class="fw-bold text-dark mt-4">4. Prescription</h5>
                    <p class="text-muted small">You receive an immediate diagnosis, prescription, and a clear follow-up care plan.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- When to Call Section -->
<div class="container py-5 mb-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold text-dark">Home Visit vs. Hospital ER</h2>
        <p class="text-muted mx-auto" style="max-width: 700px;">It is important to know when a home doctor visit is appropriate and when you should rush to a hospital Emergency Room.</p>
    </div>
    
    <div class="row g-4 justify-content-center">
        <!-- Call Home Doctor -->
        <div class="col-lg-5">
            <div class="card h-100 border-0 shadow-lg rounded-4 overflow-hidden">
                <div class="card-header border-0 py-4 text-center" style="background-color: #198754;">
                    <i class="fa-solid fa-house-medical text-white fs-1 mb-2"></i>
                    <h4 class="fw-bold text-white mb-0">Call a Home Doctor</h4>
                </div>
                <div class="card-body p-4 bg-light">
                    <p class="text-muted mb-4 fw-bold">Suitable for Non-Emergency & Routine Care:</p>
                    <ul class="list-unstyled text-muted">
                        <li class="mb-3"><i class="fa-solid fa-check text-success me-2"></i> High fever, persistent cough, or flu</li>
                        <li class="mb-3"><i class="fa-solid fa-check text-success me-2"></i> Severe body aches or joint pain</li>
                        <li class="mb-3"><i class="fa-solid fa-check text-success me-2"></i> Mild stomach pain, vomiting, or diarrhea</li>
                        <li class="mb-3"><i class="fa-solid fa-check text-success me-2"></i> Routine checkups for diabetic/BP patients</li>
                        <li class="mb-3"><i class="fa-solid fa-check text-success me-2"></i> General weakness or dizziness</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- Go to Hospital ER -->
        <div class="col-lg-5">
            <div class="card h-100 border-0 shadow-lg rounded-4 overflow-hidden">
                <div class="card-header border-0 py-4 text-center bg-danger">
                    <i class="fa-solid fa-truck-fast text-white fs-1 mb-2"></i>
                    <h4 class="fw-bold text-white mb-0">Rush to Hospital ER</h4>
                </div>
                <div class="card-body p-4 bg-light">
                    <p class="text-muted mb-4 fw-bold">Do NOT wait for a home visit for emergencies:</p>
                    <ul class="list-unstyled text-muted">
                        <li class="mb-3"><i class="fa-solid fa-xmark text-danger me-2"></i> Severe chest pain or suspected heart attack</li>
                        <li class="mb-3"><i class="fa-solid fa-xmark text-danger me-2"></i> Difficulty breathing or sudden breathlessness</li>
                        <li class="mb-3"><i class="fa-solid fa-xmark text-danger me-2"></i> Sudden paralysis, stroke, or loss of speech</li>
                        <li class="mb-3"><i class="fa-solid fa-xmark text-danger me-2"></i> Major accidents, severe bleeding, or deep cuts</li>
                        <li class="mb-3"><i class="fa-solid fa-xmark text-danger me-2"></i> Unconsciousness or severe seizures</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
';
?>
