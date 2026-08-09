<?php
// DO NOT set $full_page_override = true;
// We want to use the exact same layout as standard CMS (with Banner, Image).
// We simply assign our frontend custom design to $frontend_custom_sections so it renders full width!

$frontend_custom_sections = '

<style>
.transition-hover { transition: all 0.3s ease; }
.transition-hover:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important; }
.mobility-icon {
    width: 60px; height: 60px;
    background: rgba(253, 126, 20, 0.1); /* Orange background */
    color: #fd7e14; /* Orange icon */
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
                <span class="badge" style="background-color: rgba(253, 126, 20, 0.1); color: #fd7e14; padding: 8px 16px; border-radius: 50rem; font-weight: bold; margin-bottom: 1rem;">Safety & Independence</span>
                <h2 class="fw-bold text-dark mb-4">Safe Staircase Mobility Assistance</h2>
                <p class="text-muted mb-4 lead">Navigating stairs is one of the biggest challenges and fall risks for the elderly, disabled, or patients recovering from surgery. Our trained professionals ensure safe, stress-free movement across floors.</p>
                <p class="text-muted mb-4">Whether it is a daily requirement to move around the house or a one-time need to attend a hospital appointment, DM Healthcare provides specialized caregivers and motorized equipment to assist you.</p>
                
                <ul class="list-unstyled mb-4 text-muted">
                    <li class="mb-2"><i class="fa-solid fa-shield-cat me-2" style="color: #fd7e14;"></i> Zero risk of slips or fatal falls</li>
                    <li class="mb-2"><i class="fa-solid fa-person-walking-with-cane me-2" style="color: #fd7e14;"></i> Trained caregivers for weight-bearing support</li>
                    <li class="mb-2"><i class="fa-solid fa-wheelchair-move me-2" style="color: #fd7e14;"></i> Specialized motorized stair-climber equipment</li>
                </ul>
                
                <a href="index.php#appointment" class="btn text-white rounded-pill px-5 py-3 shadow-sm fw-bold" style="background-color: #fd7e14; border-color: #fd7e14;">
                    <i class="fa-solid fa-phone me-2"></i> Request Mobility Assistance
                </a>
            </div>
            <div class="col-lg-6 ps-lg-5 order-1 order-lg-2 mb-4 mb-lg-0">
                <img src="' . (isset($display_image) ? $display_image : '') . '" alt="Staircase Mobility Assistance" class="img-fluid rounded-4 shadow-lg w-100 border border-4" style="border-color: #fd7e14 !important;">
            </div>
        </div>
    </div>
</div>

<div class="mt-5 pt-4 border-top bg-white pb-5">
    <div class="container pt-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark mb-3">Our Mobility Solutions</h2>
            <p class="text-muted mx-auto" style="max-width: 700px;">We offer different levels of assistance depending on the patient\'s physical strength, weight, and mobility restrictions.</p>
        </div>
        
        <div class="row g-4">
            <!-- Solution 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 rounded-4 bg-light border-0 shadow-sm transition-hover" style="border-top: 4px solid #fd7e14 !important;">
                    <div class="mobility-icon">
                        <i class="fa-solid fa-hands-holding-child"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-3">Manual Caregiver Support</h5>
                    <p class="text-muted small mb-0">For patients who can walk but suffer from weakness or balance issues. Our trained caregivers provide physical support and stability while guiding them up or down the stairs step-by-step.</p>
                </div>
            </div>
            <!-- Solution 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 rounded-4 bg-light border-0 shadow-sm transition-hover" style="border-top: 4px solid #fd7e14 !important;">
                    <div class="mobility-icon">
                        <i class="fa-solid fa-truck-ramp-box"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-3">Motorized Stair Climbers</h5>
                    <p class="text-muted small mb-0">For completely wheelchair-bound patients. We provide specialized, battery-operated stair climbing machines that securely lock the wheelchair and glide it across the stairs smoothly.</p>
                </div>
            </div>
            <!-- Solution 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 rounded-4 bg-light border-0 shadow-sm transition-hover" style="border-top: 4px solid #fd7e14 !important;">
                    <div class="mobility-icon">
                        <i class="fa-solid fa-user-doctor"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-3">Post-Op & Fracture Care</h5>
                    <p class="text-muted small mb-0">Specialized assistance for patients recovering from knee or hip replacement surgeries. We follow strict orthopedic protocols to ensure no pressure is put on the healing joints.</p>
                </div>
            </div>
            <!-- Solution 4 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 rounded-4 bg-light border-0 shadow-sm transition-hover" style="border-top: 4px solid #fd7e14 !important;">
                    <div class="mobility-icon">
                        <i class="fa-solid fa-hospital"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-3">Hospital Visit Transfers</h5>
                    <p class="text-muted small mb-0">Need to take a bedridden patient to the hospital but live on the 2nd floor with no lift? Our team handles the entire transfer from bed to ambulance safely.</p>
                </div>
            </div>
            <!-- Solution 5 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 rounded-4 bg-light border-0 shadow-sm transition-hover" style="border-top: 4px solid #fd7e14 !important;">
                    <div class="mobility-icon">
                        <i class="fa-solid fa-person-cane"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-3">Dementia / Alzheimer\'s Support</h5>
                    <p class="text-muted small mb-0">Patients with cognitive decline often fear stairs or forget how to navigate them. Our caregivers use gentle coaxing and professional techniques to guide them safely.</p>
                </div>
            </div>
            <!-- Solution 6 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 rounded-4 bg-light border-0 shadow-sm transition-hover" style="border-top: 4px solid #fd7e14 !important;">
                    <div class="mobility-icon">
                        <i class="fa-solid fa-dumbbell"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-3">Staircase Physiotherapy</h5>
                    <p class="text-muted small mb-0">Our expert physiotherapists can conduct supervised training sessions to help patients regain the confidence and muscle strength required to climb stairs independently.</p>
        </div>
    </div>
</div>

<div class="mt-5 pt-4 border-top bg-white pb-5 mb-5">
    <div class="container pt-4">
        <div class="text-center mb-5">
            <span class="badge text-white px-3 py-2 rounded-pill mb-3 fw-bold shadow-sm" style="background-color: #fd7e14;">Simple & Secure Process</span>
            <h2 class="fw-bold text-dark mb-3">How Our Transfer Process Works</h2>
            <p class="text-muted mx-auto" style="max-width: 700px;">We follow a strict, standardized protocol to ensure every staircase transfer is completely safe, smooth, and comfortable for the patient.</p>
        </div>
        
        <div class="row position-relative">
            <!-- Connecting Line for Desktop -->
            <div class="d-none d-lg-block position-absolute" style="top: 25%; left: 10%; right: 10%; height: 3px; background-color: rgba(253, 126, 20, 0.2); z-index: 0;"></div>
            
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 position-relative z-1">
                <div class="text-center px-3">
                    <div class="bg-white border border-4 rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3 shadow-sm" style="width: 70px; height: 70px; border-color: #fd7e14 !important;">
                        <span class="h3 fw-bold mb-0" style="color: #fd7e14;">1</span>
                    </div>
                    <h5 class="fw-bold text-dark">Initial Assessment</h5>
                    <p class="text-muted small">We assess the patient\'s weight, medical condition, and the structure of your stairs to choose the right equipment.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 position-relative z-1">
                <div class="text-center px-3">
                    <div class="bg-white border border-4 rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3 shadow-sm" style="width: 70px; height: 70px; border-color: #fd7e14 !important;">
                        <span class="h3 fw-bold mb-0" style="color: #fd7e14;">2</span>
                    </div>
                    <h5 class="fw-bold text-dark">Equipment Setup</h5>
                    <p class="text-muted small">Our trained team arrives with the motorized stair climber or manual support gear and securely locks the patient.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 position-relative z-1">
                <div class="text-center px-3">
                    <div class="bg-white border border-4 rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3 shadow-sm" style="width: 70px; height: 70px; border-color: #fd7e14 !important;">
                        <span class="h3 fw-bold mb-0" style="color: #fd7e14;">3</span>
                    </div>
                    <h5 class="fw-bold text-dark">Guided Transfer</h5>
                    <p class="text-muted small">Using extreme caution and specialized techniques, the caregiver safely navigates the stairs without any jerks or bumps.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 position-relative z-1">
                <div class="text-center px-3">
                    <div class="bg-white border border-4 rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3 shadow-sm" style="width: 70px; height: 70px; border-color: #fd7e14 !important;">
                        <span class="h3 fw-bold mb-0" style="color: #fd7e14;">4</span>
                    </div>
                    <h5 class="fw-bold text-dark">Safe Positioning</h5>
                    <p class="text-muted small">Once the transfer is complete, the patient is safely shifted to their bed, wheelchair, or vehicle.</p>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <a href="index.php#appointment" class="btn text-white rounded-pill px-5 py-3 shadow-sm fw-bold" style="background-color: #fd7e14; border-color: #fd7e14;">
                <i class="fa-solid fa-calendar-check me-2"></i> Book a Transfer Session
            </a>
        </div>
    </div>
</div>

<div class="mt-5 pt-4 border-top bg-light pb-5 mb-5">
    <div class="container pt-4 text-center">
        <h2 class="fw-bold text-dark mb-4">Why Risk a Fall?</h2>
        <p class="text-muted mx-auto mb-5" style="max-width: 800px;">Falls on stairs are the leading cause of severe fractures and head injuries among the elderly. Do not risk your loved one\'s safety. Let our trained professionals handle it.</p>
        
        <div class="row g-4 justify-content-center">
            <div class="col-md-3 col-6">
                <h2 class="display-4 fw-bold mb-2" style="color: #fd7e14;">100%</h2>
                <p class="text-muted fw-bold">Fall Prevention</p>
            </div>
            <div class="col-md-3 col-6">
                <h2 class="display-4 fw-bold mb-2" style="color: #fd7e14;">24/7</h2>
                <p class="text-muted fw-bold">Emergency Help</p>
            </div>
            <div class="col-md-3 col-6">
                <h2 class="display-4 fw-bold mb-2" style="color: #fd7e14;">500+</h2>
                <p class="text-muted fw-bold">Safe Transfers</p>
            </div>
        </div>
    </div>
</div>
';
?>
