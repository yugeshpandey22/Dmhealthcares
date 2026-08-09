<?php
// DO NOT set $full_page_override = true;
// We want to use the exact same layout as standard CMS (with Banner, Image).
// We simply assign our frontend custom design to $frontend_custom_sections so it renders full width!

$frontend_custom_sections = '

<style>
.transition-hover { transition: all 0.3s ease; }
.transition-hover:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important; }
.palliative-icon {
    width: 60px; height: 60px;
    background: rgba(13, 110, 253, 0.1);
    color: #0d6efd;
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    font-size: 1.5rem;
    margin-bottom: 15px;
}
</style>

<div class="mt-5 pt-4 border-top bg-light pb-5">
    <div class="container pt-4">
        <!-- What is Palliative Care Section -->
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="' . (isset($display_image) ? $display_image : '') . '" alt="Compassionate Palliative Care" class="img-fluid rounded-4 shadow-lg w-100 border border-4 border-white">
            </div>
            <div class="col-lg-6 ps-lg-5">
                <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill mb-3 fw-bold shadow-sm">Compassion & Dignity</span>
                <h2 class="fw-bold text-dark mb-4">What is Palliative Care?</h2>
                <p class="text-muted mb-4 lead">Palliative care is specialized medical care for people living with a serious, life-limiting illness. The focus is on providing relief from the symptoms and stress of the illness, rather than a cure.</p>
                <p class="text-muted mb-4">Our goal at DM Healthcare is to improve the quality of life for both the patient and the family by offering physical, emotional, and psychological support right in the comfort of your home.</p>
                <ul class="list-unstyled mb-0 text-muted">
                    <li class="mb-2"><i class="fa-solid fa-check text-primary me-2"></i> Focuses on comfort and pain relief</li>
                    <li class="mb-2"><i class="fa-solid fa-check text-primary me-2"></i> Emotional support for families</li>
                    <li class="mb-2"><i class="fa-solid fa-check text-primary me-2"></i> Coordinated care with your treating doctor</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="mt-5 pt-4 border-top bg-white pb-5">
    <div class="container pt-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark mb-3">Our Palliative Care Services</h2>
            <p class="text-muted mx-auto" style="max-width: 700px;">We bring a multidisciplinary approach to end-of-life care, ensuring that all physical and emotional needs are met with utmost dignity and respect.</p>
        </div>
        
        <div class="row g-4">
            <!-- Service 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 rounded-4 bg-light border-0 shadow-sm transition-hover">
                    <div class="palliative-icon">
                        <i class="fa-solid fa-capsules"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-3">Pain Management</h5>
                    <p class="text-muted small mb-0">Expert administration of analgesics, pain relief pumps, and medications to keep the patient completely comfortable and pain-free.</p>
                </div>
            </div>
            <!-- Service 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 rounded-4 bg-light border-0 shadow-sm transition-hover">
                    <div class="palliative-icon">
                        <i class="fa-solid fa-syringe"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-3">Symptom Control</h5>
                    <p class="text-muted small mb-0">Management of severe symptoms like breathlessness, nausea, fatigue, and loss of appetite through specialized nursing interventions.</p>
                </div>
            </div>
            <!-- Service 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 rounded-4 bg-light border-0 shadow-sm transition-hover">
                    <div class="palliative-icon">
                        <i class="fa-solid fa-utensils"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-3">Nutritional Support</h5>
                    <p class="text-muted small mb-0">Assistance with RT (Ryle\'s Tube) or PEG tube feeding, IV fluids, and specialized diets to maintain hydration and basic nutrition.</p>
                </div>
            </div>
            <!-- Service 4 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 rounded-4 bg-light border-0 shadow-sm transition-hover">
                    <div class="palliative-icon">
                        <i class="fa-solid fa-bandage"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-3">Wound & Bed Sore Care</h5>
                    <p class="text-muted small mb-0">Regular turning, use of alpha mattresses, and advanced dressing protocols to prevent and heal pressure ulcers in bedridden patients.</p>
                </div>
            </div>
            <!-- Service 5 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 rounded-4 bg-light border-0 shadow-sm transition-hover">
                    <div class="palliative-icon">
                        <i class="fa-solid fa-hands-holding-child"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-3">Psychological Support</h5>
                    <p class="text-muted small mb-0">Counseling and emotional support for both the patient and their family members during this difficult transition.</p>
                </div>
            </div>
            <!-- Service 6 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 rounded-4 bg-light border-0 shadow-sm transition-hover">
                    <div class="palliative-icon">
                        <i class="fa-solid fa-user-nurse"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-3">24/7 Nursing Assistance</h5>
                    <p class="text-muted small mb-0">Round-the-clock availability of compassionate, trained nurses to assist with personal hygiene, toileting, and sudden medical needs.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mt-5 pt-4 border-top bg-light pb-5 mb-5">
    <div class="container pt-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark mb-3">Who Can Benefit from Palliative Care?</h2>
            <p class="text-muted mx-auto" style="max-width: 800px;">Palliative care is appropriate at any age and at any stage in a serious illness, often provided alongside curative treatment.</p>
        </div>
        
        <div class="row g-3 justify-content-center">
            <div class="col-lg-3 col-md-4 col-6">
                <div class="card p-3 rounded-4 bg-white border-0 shadow-sm text-center border-bottom border-4 border-primary">
                    <h6 class="fw-bold text-dark mb-0 py-2">Advanced Cancer</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="card p-3 rounded-4 bg-white border-0 shadow-sm text-center border-bottom border-4 border-success">
                    <h6 class="fw-bold text-dark mb-0 py-2">Congestive Heart Failure</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="card p-3 rounded-4 bg-white border-0 shadow-sm text-center border-bottom border-4 border-warning">
                    <h6 class="fw-bold text-dark mb-0 py-2">End-Stage Kidney Disease</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="card p-3 rounded-4 bg-white border-0 shadow-sm text-center border-bottom border-4 border-danger">
                    <h6 class="fw-bold text-dark mb-0 py-2">Severe COPD</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="card p-3 rounded-4 bg-white border-0 shadow-sm text-center border-bottom border-4 border-info">
                    <h6 class="fw-bold text-dark mb-0 py-2">Alzheimer\'s & Dementia</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="card p-3 rounded-4 bg-white border-0 shadow-sm text-center border-bottom border-4 border-secondary">
                    <h6 class="fw-bold text-dark mb-0 py-2">ALS & Neurological Issues</h6>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5 pt-3">
            <a href="index.php#appointment" class="btn btn-primary rounded-pill px-5 py-3 shadow-sm fw-bold">
                <i class="fa-regular fa-calendar-check me-2"></i> Schedule a Care Assessment
            </a>
        </div>
    </div>
</div>
';
?>
