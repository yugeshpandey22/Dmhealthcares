<?php
// DO NOT set $full_page_override = true;
// We want to use the exact same layout as standard CMS (with Banner, Image).
// We simply assign our frontend custom design to $frontend_custom_sections so it renders full width!

$frontend_custom_sections = '

<style>
.transition-hover { transition: all 0.3s ease; }
.transition-hover:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important; }
.facility-icon {
    width: 60px; height: 60px;
    background: rgba(32, 201, 151, 0.1); /* Teal background */
    color: #20c997; /* Teal icon */
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    font-size: 1.5rem;
    margin-bottom: 15px;
}
</style>

<div class="mt-5 pt-4 border-top bg-light pb-5">
    <div class="container pt-4">
        <!-- Intro Section -->
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 mb-4 mb-lg-0 order-2 order-lg-1">
                <span class="badge" style="background-color: rgba(32, 201, 151, 0.1); color: #20c997; padding: 8px 16px; border-radius: 50rem; font-weight: bold; margin-bottom: 1rem;">Medical-Grade Living</span>
                <h2 class="fw-bold text-dark mb-4">Hospital-Grade Assisted Living Facility</h2>
                <p class="text-muted mb-4 lead">Unlike standard retirement homes, DM Healthcare\'s Assisted Living Facility bridges the gap between independent living and intensive hospital care. We provide a safe, community-driven environment backed by <strong>24/7 clinical supervision</strong>.</p>
                <p class="text-muted mb-4">Whether recovering from a major surgery, managing a chronic illness, or needing daily living assistance, our facility is equipped with emergency infrastructure to handle all medical needs instantly.</p>
                
                <div class="row g-3 mb-4">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center bg-white p-3 rounded-3 shadow-sm">
                            <i class="fa-solid fa-user-doctor fs-3" style="color: #20c997;"></i>
                            <div class="ms-3">
                                <h6 class="mb-0 fw-bold">Doctors on Call</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center bg-white p-3 rounded-3 shadow-sm">
                            <i class="fa-solid fa-truck-medical fs-3" style="color: #20c997;"></i>
                            <div class="ms-3">
                                <h6 class="mb-0 fw-bold">ICU Backup</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 ps-lg-5 order-1 order-lg-2 mb-4 mb-lg-0">
                <img src="' . (isset($display_image) ? $display_image : '') . '" alt="Hospital Grade Assisted Living" class="img-fluid rounded-4 shadow-lg w-100 border border-4" style="border-color: #20c997 !important;">
            </div>
        </div>
    </div>
</div>

<div class="mt-5 pt-4 border-top bg-white pb-5">
    <div class="container pt-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark mb-3">Comprehensive Facility Features</h2>
            <p class="text-muted mx-auto" style="max-width: 700px;">Our facility is designed with patient safety and comfort as the highest priorities. Every feature is meticulously planned to provide a healing environment.</p>
        </div>
        
        <div class="row g-4">
            <!-- Feature 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 rounded-4 bg-light border-0 shadow-sm transition-hover" style="border-top: 4px solid #20c997 !important;">
                    <div class="facility-icon">
                        <i class="fa-solid fa-user-nurse"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-3">24/7 Nursing Staff</h5>
                    <p class="text-muted small mb-0">Qualified and experienced nurses available round-the-clock to administer medications, monitor vitals, and assist with daily activities.</p>
                </div>
            </div>
            <!-- Feature 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 rounded-4 bg-light border-0 shadow-sm transition-hover" style="border-top: 4px solid #20c997 !important;">
                    <div class="facility-icon">
                        <i class="fa-solid fa-wheelchair"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-3">Rehab & Physiotherapy</h5>
                    <p class="text-muted small mb-0">In-house, fully equipped physiotherapy center for patients recovering from strokes, fractures, or joint replacements.</p>
                </div>
            </div>
            <!-- Feature 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 rounded-4 bg-light border-0 shadow-sm transition-hover" style="border-top: 4px solid #20c997 !important;">
                    <div class="facility-icon">
                        <i class="fa-solid fa-bowl-food"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-3">Dietician-Planned Meals</h5>
                    <p class="text-muted small mb-0">Nutritious, hygienic meals customized for specific health conditions (diabetic, renal, cardiac) prepared in our specialized kitchen.</p>
                </div>
            </div>
            <!-- Feature 4 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 rounded-4 bg-light border-0 shadow-sm transition-hover" style="border-top: 4px solid #20c997 !important;">
                    <div class="facility-icon">
                        <i class="fa-solid fa-kit-medical"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-3">Emergency Infrastructure</h5>
                    <p class="text-muted small mb-0">Beds equipped with central oxygen pipelines, suction units, and emergency crash carts to handle sudden medical crises.</p>
                </div>
            </div>
            <!-- Feature 5 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 rounded-4 bg-light border-0 shadow-sm transition-hover" style="border-top: 4px solid #20c997 !important;">
                    <div class="facility-icon">
                        <i class="fa-solid fa-people-group"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-3">Community & Mental Health</h5>
                    <p class="text-muted small mb-0">Recreational activities, group therapies, and counseling sessions to ensure psychological well-being and prevent isolation.</p>
                </div>
            </div>
            <!-- Feature 6 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 rounded-4 bg-light border-0 shadow-sm transition-hover" style="border-top: 4px solid #20c997 !important;">
                    <div class="facility-icon">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-3">Safe Architecture</h5>
                    <p class="text-muted small mb-0">Anti-skid flooring, grab rails in bathrooms, wheelchair-friendly ramps, and CCTV monitoring for maximum patient safety.</p>
                </div>
            </div>
        </div>
        
        </div>
    </div>
</div>

<div class="mt-5 pt-4 border-top bg-light pb-5">
    <div class="container pt-4">
        <div class="text-center mb-5">
            <span class="badge text-white px-3 py-2 rounded-pill mb-3 fw-bold shadow-sm" style="background-color: #20c997;">Tailored Programs</span>
            <h2 class="fw-bold text-dark mb-3">Types of Care We Offer</h2>
            <p class="text-muted mx-auto" style="max-width: 700px;">We understand that every individual requires a different level of medical attention and independence. Choose the care program that best fits your loved one\'s needs.</p>
        </div>
        
        <div class="row g-4 justify-content-center">
            <!-- Care Type 1 -->
            <div class="col-lg-4">
                <div class="card h-100 rounded-4 bg-white border-0 shadow-sm transition-hover overflow-hidden">
                    <div style="height: 200px; background: url(\'assets/images/assisted-living-1.jpg\') center/cover;"></div>
                    <div class="p-4">
                        <h4 class="fw-bold text-dark mb-3">Short-Term Post-Op Rehab</h4>
                        <p class="text-muted small mb-4">Ideal for patients discharged from the hospital after major surgeries (orthopedic, cardiac, neurological) who need 2 to 4 weeks of aggressive physiotherapy and medical monitoring before returning home.</p>
                        <ul class="list-unstyled mb-0 small text-muted">
                            <li class="mb-2"><i class="fa-solid fa-check me-2" style="color: #20c997;"></i> Intensive daily physiotherapy</li>
                            <li class="mb-2"><i class="fa-solid fa-check me-2" style="color: #20c997;"></i> Wound and suture care</li>
                            <li class="mb-2"><i class="fa-solid fa-check me-2" style="color: #20c997;"></i> Pain management</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Care Type 2 -->
            <div class="col-lg-4">
                <div class="card h-100 rounded-4 bg-white border-0 shadow-sm transition-hover overflow-hidden">
                    <div style="height: 200px; background: url(\'assets/images/assisted-living-2.jpg\') center/cover;"></div>
                    <div class="p-4">
                        <h4 class="fw-bold text-dark mb-3">Long-Term Medical Care</h4>
                        <p class="text-muted small mb-4">A permanent residence for elderly individuals dealing with chronic illnesses (COPD, Kidney Disease, Heart Failure) who require round-the-clock nursing assistance and a highly structured medical environment.</p>
                        <ul class="list-unstyled mb-0 small text-muted">
                            <li class="mb-2"><i class="fa-solid fa-check me-2" style="color: #20c997;"></i> 24/7 nursing supervision</li>
                            <li class="mb-2"><i class="fa-solid fa-check me-2" style="color: #20c997;"></i> IV administration & oxygen support</li>
                            <li class="mb-2"><i class="fa-solid fa-check me-2" style="color: #20c997;"></i> Bed-ridden patient care</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Care Type 3 -->
            <div class="col-lg-4">
                <div class="card h-100 rounded-4 bg-white border-0 shadow-sm transition-hover overflow-hidden">
                    <div style="height: 200px; background: url(\'assets/images/assisted-living-3.jpg\') center/cover;"></div>
                    <div class="p-4">
                        <h4 class="fw-bold text-dark mb-3">Memory Care (Dementia)</h4>
                        <p class="text-muted small mb-4">A specialized, highly secure wing designed specifically for patients suffering from Alzheimer\'s and Dementia. Focuses on cognitive therapies, emotional stability, and extreme safety measures.</p>
                        <ul class="list-unstyled mb-0 small text-muted">
                            <li class="mb-2"><i class="fa-solid fa-check me-2" style="color: #20c997;"></i> Secure, anti-wandering layout</li>
                            <li class="mb-2"><i class="fa-solid fa-check me-2" style="color: #20c997;"></i> Brain-stimulating group activities</li>
                            <li class="mb-2"><i class="fa-solid fa-check me-2" style="color: #20c997;"></i> Compassionate psychological support</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mt-5 pt-4 border-top bg-white pb-5 mb-5">
    <div class="container pt-4">
        <div class="row align-items-center mb-5">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <h2 class="fw-bold text-dark mb-4">A Day at DM Healthcare</h2>
                <p class="text-muted mb-4">We believe that a structured, positive routine is the fastest path to healing and maintaining a high quality of life. Here is what a typical day looks like at our facility.</p>
                <div class="text-center text-lg-start mt-4">
                    <a href="index.php#appointment" class="btn text-white rounded-pill px-5 py-3 shadow-sm fw-bold" style="background-color: #20c997; border-color: #20c997;">
                        <i class="fa-solid fa-building me-2"></i> Schedule a Facility Tour
                    </a>
                </div>
            </div>
            <div class="col-lg-7 ps-lg-5">
                <div class="border-start border-3 border-light ms-3 ps-4 position-relative">
                    
                    <div class="position-relative mb-4">
                        <span class="position-absolute bg-white border border-3 rounded-circle" style="width: 20px; height: 20px; left: -36.5px; top: 5px; border-color: #20c997 !important;"></span>
                        <h5 class="fw-bold text-dark mb-1">Morning: Wellness & Checks</h5>
                        <p class="text-muted small">The day begins with morning vitals check, medication administration, and a customized nutritious breakfast. Patients then engage in guided light stretching or physiotherapy sessions.</p>
                    </div>
                    
                    <div class="position-relative mb-4">
                        <span class="position-absolute bg-white border border-3 rounded-circle" style="width: 20px; height: 20px; left: -36.5px; top: 5px; border-color: #20c997 !important;"></span>
                        <h5 class="fw-bold text-dark mb-1">Afternoon: Doctor Visits & Nutrition</h5>
                        <p class="text-muted small">A balanced, dietician-approved lunch is served, followed by rounds from our senior doctors. The afternoon provides quiet time for rest, reading, or supervised visitors.</p>
                    </div>
                    
                    <div class="position-relative mb-4">
                        <span class="position-absolute bg-white border border-3 rounded-circle" style="width: 20px; height: 20px; left: -36.5px; top: 5px; border-color: #20c997 !important;"></span>
                        <h5 class="fw-bold text-dark mb-1">Evening: Community & Recreation</h5>
                        <p class="text-muted small">Patients gather in common areas for evening tea and social activities like music therapy, board games, or spiritual sessions to boost mental health and reduce isolation.</p>
                    </div>
                    
                    <div class="position-relative">
                        <span class="position-absolute bg-white border border-3 rounded-circle" style="width: 20px; height: 20px; left: -36.5px; top: 5px; border-color: #20c997 !important;"></span>
                        <h5 class="fw-bold text-dark mb-1">Night: Security & Rest</h5>
                        <p class="text-muted small">After a light dinner and evening medications, patients retire to their secure, temperature-controlled rooms. Our night nursing staff remains on high alert with continuous monitoring.</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
';
?>
