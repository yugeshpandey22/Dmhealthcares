<?php
// DO NOT set $full_page_override = true;
// We want to use the exact same layout as standard CMS (with Banner, Image).
// We simply assign our frontend custom design to $frontend_custom_sections so it renders full width!

$frontend_custom_sections = '

<style>
.transition-hover { transition: all 0.3s ease; }
.transition-hover:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important; }
.caretaker-icon {
    width: 60px; height: 60px;
    background: rgba(111, 66, 193, 0.1); /* Purple background */
    color: #6f42c1; /* Purple icon */
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
                <span class="badge" style="background-color: rgba(111, 66, 193, 0.1); color: #6f42c1; padding: 8px 16px; border-radius: 50rem; font-weight: bold; margin-bottom: 1rem;">Compassionate Companionship</span>
                <h2 class="fw-bold text-dark mb-4">Professional Elderly Caretakers at Home</h2>
                <p class="text-muted mb-4 lead">Aging comes with its own set of challenges. Our trained elderly caretakers provide the perfect blend of physical assistance and emotional companionship to ensure your parents live with dignity, comfort, and independence in their own home.</p>
                <p class="text-muted mb-4">We understand that leaving your loved ones in someone else\'s care is a big decision. That\'s why every DM Healthcare caretaker goes through rigorous background checks and empathy training.</p>
                
                <ul class="list-unstyled mb-4 text-muted">
                    <li class="mb-2"><i class="fa-solid fa-heart me-2" style="color: #6f42c1;"></i> Empathetic and patient caregivers</li>
                    <li class="mb-2"><i class="fa-solid fa-shield-halved me-2" style="color: #6f42c1;"></i> 100% background-verified staff</li>
                    <li class="mb-2"><i class="fa-solid fa-clock me-2" style="color: #6f42c1;"></i> Available for 12-hour or 24-hour shifts</li>
                </ul>
                
                <a href="index.php#appointment" class="btn text-white rounded-pill px-5 py-3 shadow-sm fw-bold" style="background-color: #6f42c1; border-color: #6f42c1;">
                    <i class="fa-solid fa-user-check me-2"></i> Request a Caretaker
                </a>
            </div>
            <div class="col-lg-6 ps-lg-5 order-1 order-lg-2 mb-4 mb-lg-0">
                <img src="assets/images/pages/elderly_companionship.png" alt="Elderly Caretaker" class="img-fluid rounded-4 shadow-lg w-100 border border-4" style="border-color: #6f42c1 !important;">
            </div>
        </div>
    </div>
</div>

<div class="mt-5 pt-4 border-top bg-white pb-5">
    <div class="container pt-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark mb-3">How Our Caretakers Help</h2>
            <p class="text-muted mx-auto" style="max-width: 700px;">From basic daily activities to continuous medical monitoring, our caretakers are trained to manage every aspect of senior living.</p>
        </div>
        
        <div class="row g-4">
            <!-- Service 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 rounded-4 bg-light border-0 shadow-sm transition-hover" style="border-top: 4px solid #6f42c1 !important;">
                    <div class="caretaker-icon">
                        <i class="fa-solid fa-shower"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-3">Personal Hygiene</h5>
                    <p class="text-muted small mb-0">Assistance with bathing, grooming, dressing, and oral hygiene, ensuring the patient feels fresh and maintains their dignity throughout the day.</p>
                </div>
            </div>
            <!-- Service 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 rounded-4 bg-light border-0 shadow-sm transition-hover" style="border-top: 4px solid #6f42c1 !important;">
                    <div class="caretaker-icon">
                        <i class="fa-solid fa-pills"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-3">Medication Reminders</h5>
                    <p class="text-muted small mb-0">Strict adherence to doctor-prescribed medication schedules. Our caretakers ensure the right dose is taken at the exact right time.</p>
                </div>
            </div>
            <!-- Service 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 rounded-4 bg-light border-0 shadow-sm transition-hover" style="border-top: 4px solid #6f42c1 !important;">
                    <div class="caretaker-icon">
                        <i class="fa-solid fa-person-walking-with-cane"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-3">Mobility & Fall Prevention</h5>
                    <p class="text-muted small mb-0">Providing physical support while walking, transitioning from bed to wheelchair, and escorting them to the washroom to prevent dangerous falls.</p>
                </div>
            </div>
            <!-- Service 4 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 rounded-4 bg-light border-0 shadow-sm transition-hover" style="border-top: 4px solid #6f42c1 !important;">
                    <div class="caretaker-icon">
                        <i class="fa-solid fa-utensils"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-3">Feeding Assistance</h5>
                    <p class="text-muted small mb-0">Helping with meal preparation and patiently assisting seniors with feeding, especially those who have tremors or difficulty swallowing.</p>
                </div>
            </div>
            <!-- Service 5 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 rounded-4 bg-light border-0 shadow-sm transition-hover" style="border-top: 4px solid #6f42c1 !important;">
                    <div class="caretaker-icon">
                        <i class="fa-solid fa-mug-hot"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-3">Companionship</h5>
                    <p class="text-muted small mb-0">Beyond physical help, our caretakers engage seniors in conversations, read to them, or play light games to prevent depression and loneliness.</p>
                </div>
            </div>
            <!-- Service 6 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 rounded-4 bg-light border-0 shadow-sm transition-hover" style="border-top: 4px solid #6f42c1 !important;">
                    <div class="caretaker-icon">
                        <i class="fa-solid fa-heart-pulse"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-3">Vitals Monitoring</h5>
                    <p class="text-muted small mb-0">Regularly checking and recording blood pressure, sugar levels, and temperature, keeping family members and doctors updated on their health.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mt-5 pt-4 border-top bg-light pb-5 mb-5">
    <div class="container pt-4">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <img src="assets/images/pages/elderly_bedroom.png" alt="Trained Caretakers" class="img-fluid rounded-4 shadow-sm w-100">
            </div>
            <div class="col-lg-7 ps-lg-5">
                <h2 class="fw-bold text-dark mb-4">Why DM Healthcare Caretakers?</h2>
                
                <div class="d-flex mb-4">
                    <div class="me-3 mt-1">
                        <i class="fa-solid fa-certificate fs-4" style="color: #6f42c1;"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold mb-1">Professionally Trained</h5>
                        <p class="text-muted small mb-0">Our caretakers undergo strict medical and behavioral training. They know how to handle emergencies, use BP machines, and provide basic first-aid.</p>
                    </div>
                </div>
                
                <div class="d-flex mb-4">
                    <div class="me-3 mt-1">
                        <i class="fa-solid fa-user-shield fs-4" style="color: #6f42c1;"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold mb-1">Police Verified</h5>
                        <p class="text-muted small mb-0">Safety is paramount. Every staff member is completely background-checked, KYC verified, and tracked by our central agency for your peace of mind.</p>
                    </div>
                </div>
                
                <div class="d-flex">
                    <div class="me-3 mt-1">
                        <i class="fa-solid fa-phone-volume fs-4" style="color: #6f42c1;"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold mb-1">Supervisory Support</h5>
                        <p class="text-muted small mb-0">You are not just hiring a caretaker; you get the backing of an entire medical team. Our nursing supervisors conduct regular check-ins and audits.</p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

<div class="mt-5 pt-4 border-top bg-white pb-5 mb-5">
    <div class="container pt-4">
        <div class="row align-items-center flex-row-reverse mb-5">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <img src="assets/images/pages/caregiver_helping.png" alt="Caregiver helping senior walk" class="img-fluid rounded-4 shadow-sm w-100 border border-4" style="border-color: #6f42c1 !important;">
            </div>
            <div class="col-lg-7 pe-lg-5">
                <h2 class="fw-bold text-dark mb-4">Who Needs An Elderly Caretaker at Home?</h2>
                
                <div class="row g-4 mt-2">
                    <div class="col-sm-6">
                        <h6 class="fw-bold text-dark mb-2"><i class="fa-solid fa-bed me-2" style="color: #6f42c1;"></i> Bedridden Seniors</h6>
                        <p class="text-muted small mb-0">Patients who are bed-bound require constant repositioning to prevent bedsores, sponge baths, and specialized feeding assistance.</p>
                    </div>
                    <div class="col-sm-6">
                        <h6 class="fw-bold text-dark mb-2"><i class="fa-solid fa-wheelchair me-2" style="color: #6f42c1;"></i> Limited Mobility</h6>
                        <p class="text-muted small mb-0">Seniors who use a walker or cane and need physical support while moving around the house or going to the washroom to prevent fatal falls.</p>
                    </div>
                    <div class="col-sm-6">
                        <h6 class="fw-bold text-dark mb-2"><i class="fa-solid fa-brain me-2" style="color: #6f42c1;"></i> Dementia & Alzheimer\'s</h6>
                        <p class="text-muted small mb-0">Patients suffering from cognitive decline who might wander off or forget daily routines need constant, empathetic monitoring.</p>
                    </div>
                    <div class="col-sm-6">
                        <h6 class="fw-bold text-dark mb-2"><i class="fa-solid fa-house-user me-2" style="color: #6f42c1;"></i> Seniors Living Alone</h6>
                        <p class="text-muted small mb-0">For elderly parents living alone while children are away, a caretaker provides much-needed emotional companionship and safety.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
';
?>
