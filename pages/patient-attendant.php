<?php
// DO NOT set $full_page_override = true;
// We want to use the exact same layout as standard CMS (with Banner, Image).
// We simply assign our frontend custom design to $frontend_custom_sections so it renders full width!

$frontend_custom_sections = '

<style>
.transition-hover { transition: all 0.3s ease; }
.transition-hover:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important; }
.attendant-icon {
    width: 60px; height: 60px;
    background: rgba(13, 110, 253, 0.1); /* Blue background */
    color: #0d6efd; /* Blue icon */
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
                <span class="badge" style="background-color: rgba(13, 110, 253, 0.1); color: #0d6efd; padding: 8px 16px; border-radius: 50rem; font-weight: bold; margin-bottom: 1rem;">Daily Medical Support</span>
                <h2 class="fw-bold text-dark mb-4">Professional Medical Attendants at Home</h2>
                <p class="text-muted mb-4 lead">When a patient needs help with daily living activities but does not require intensive nursing care (like IV lines or injections), a trained Medical Attendant is the perfect solution.</p>
                <p class="text-muted mb-4">Our patient attendants act as the primary caregiver at home, assisting with personal hygiene, mobility, feeding, and basic vitals monitoring to ensure the patient recovers comfortably and safely.</p>
                
                <ul class="list-unstyled mb-4 text-muted">
                    <li class="mb-2"><i class="fa-solid fa-check-circle me-2" style="color: #0d6efd;"></i> Trained in basic life support and first-aid</li>
                    <li class="mb-2"><i class="fa-solid fa-check-circle me-2" style="color: #0d6efd;"></i> Supervised by senior nursing staff</li>
                    <li class="mb-2"><i class="fa-solid fa-check-circle me-2" style="color: #0d6efd;"></i> Empathetic, background-verified professionals</li>
                </ul>
                
                <a href="index.php#appointment" class="btn text-white rounded-pill px-5 py-3 shadow-sm fw-bold" style="background-color: #0d6efd; border-color: #0d6efd;">
                    <i class="fa-solid fa-user-plus me-2"></i> Hire a Medical Attendant
                </a>
            </div>
            <div class="col-lg-6 ps-lg-5 order-1 order-lg-2 mb-4 mb-lg-0">
                <img src="assets/images/pages/medical_attendant.png" alt="Medical Attendant Caring for Patient" class="img-fluid rounded-4 shadow-lg w-100 border border-4" style="border-color: #0d6efd !important;">
            </div>
        </div>
    </div>
</div>

<div class="mt-5 pt-4 border-top bg-white pb-5">
    <div class="container pt-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark mb-3">What Does a Medical Attendant Do?</h2>
            <p class="text-muted mx-auto" style="max-width: 700px;">Our attendants bridge the gap between family care and hospital care, handling all non-invasive medical and personal needs.</p>
        </div>
        
        <div class="row g-4">
            <!-- Duty 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 rounded-4 bg-light border-0 shadow-sm transition-hover" style="border-top: 4px solid #0d6efd !important;">
                    <div class="attendant-icon">
                        <i class="fa-solid fa-bath"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-3">Personal Hygiene Care</h5>
                    <p class="text-muted small mb-0">Assisting bedridden or weak patients with sponge baths, changing clothes, oral hygiene, and safe toileting or diaper changes.</p>
                </div>
            </div>
            <!-- Duty 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 rounded-4 bg-light border-0 shadow-sm transition-hover" style="border-top: 4px solid #0d6efd !important;">
                    <div class="attendant-icon">
                        <i class="fa-solid fa-wheelchair"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-3">Mobility & Transfers</h5>
                    <p class="text-muted small mb-0">Helping patients safely move from the bed to a wheelchair, assisting with prescribed light exercises, and preventing falls.</p>
                </div>
            </div>
            <!-- Duty 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 rounded-4 bg-light border-0 shadow-sm transition-hover" style="border-top: 4px solid #0d6efd !important;">
                    <div class="attendant-icon">
                        <i class="fa-solid fa-spoon"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-3">Feeding Assistance</h5>
                    <p class="text-muted small mb-0">Serving nutritious meals on time and assisting patients who have difficulty eating or swallowing, ensuring they stay hydrated.</p>
                </div>
            </div>
            <!-- Duty 4 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 rounded-4 bg-light border-0 shadow-sm transition-hover" style="border-top: 4px solid #0d6efd !important;">
                    <div class="attendant-icon">
                        <i class="fa-solid fa-heart-pulse"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-3">Vitals Monitoring</h5>
                    <p class="text-muted small mb-0">Regularly checking and logging blood pressure, pulse rate, oxygen levels, and temperature for the doctor\'s review.</p>
                </div>
            </div>
            <!-- Duty 5 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 rounded-4 bg-light border-0 shadow-sm transition-hover" style="border-top: 4px solid #0d6efd !important;">
                    <div class="attendant-icon">
                        <i class="fa-solid fa-pills"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-3">Medication Management</h5>
                    <p class="text-muted small mb-0">Ensuring all oral medications are taken at the correct time as prescribed by the doctor, preventing missed doses.</p>
                </div>
            </div>
            <!-- Duty 6 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 rounded-4 bg-light border-0 shadow-sm transition-hover" style="border-top: 4px solid #0d6efd !important;">
                    <div class="attendant-icon">
                        <i class="fa-solid fa-bed"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-3">Bed Sore Prevention</h5>
                    <p class="text-muted small mb-0">Regularly turning and repositioning bedridden patients every few hours to prevent the formation of painful pressure ulcers.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mt-5 pt-4 border-top bg-light pb-5 mb-5">
    <div class="container pt-4">
        <div class="row align-items-center flex-row-reverse mb-5">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <img src="assets/images/pages/caregiver_helping.png" alt="Attendant helping patient walk" class="img-fluid rounded-4 shadow-sm w-100 border border-4" style="border-color: #0d6efd !important;">
            </div>
            <div class="col-lg-7 pe-lg-5">
                <h2 class="fw-bold text-dark mb-4">Who Needs a Medical Attendant?</h2>
                <p class="text-muted mb-4">While nurses handle invasive medical procedures, attendants are crucial for daily physical support. This service is highly recommended for:</p>
                
                <div class="row g-4 mt-2">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-start">
                            <i class="fa-solid fa-crutch fs-4 me-3 mt-1" style="color: #0d6efd;"></i>
                            <div>
                                <h6 class="fw-bold text-dark mb-1">Post-Surgery Recovery</h6>
                                <p class="text-muted small mb-0">Patients recovering from joint replacements, cardiac surgeries, or spinal procedures who cannot move independently.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-start">
                            <i class="fa-solid fa-bed-pulse fs-4 me-3 mt-1" style="color: #0d6efd;"></i>
                            <div>
                                <h6 class="fw-bold text-dark mb-1">Bedridden Patients</h6>
                                <p class="text-muted small mb-0">Individuals paralyzed by strokes, severe arthritis, or extreme old age requiring 24/7 physical assistance.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-start">
                            <i class="fa-solid fa-brain fs-4 me-3 mt-1" style="color: #0d6efd;"></i>
                            <div>
                                <h6 class="fw-bold text-dark mb-1">Neurological Conditions</h6>
                                <p class="text-muted small mb-0">Patients with Parkinson\'s, Dementia, or Alzheimer\'s who need constant monitoring for their own safety.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-start">
                            <i class="fa-solid fa-house-chimney-medical fs-4 me-3 mt-1" style="color: #0d6efd;"></i>
                            <div>
                                <h6 class="fw-bold text-dark mb-1">Hospital Discharges</h6>
                                <p class="text-muted small mb-0">Patients transitioning from hospital to home who still feel weak and need help easing back into daily life.</p>
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
