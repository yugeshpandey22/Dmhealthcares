<?php
// DO NOT set $full_page_override = true;
$hide_default_welcome = true;

$frontend_custom_sections = '

<style>
:root {
    --primary-color: #0ea5e9; /* Light blue theme for dialysis/kidney care */
    --primary-dark: #0284c7;
    --dark-bg: #0f172a;
    --light-bg: #f0f9ff;
    --border-color: rgba(0,0,0,0.05);
}

.feature-box {
    background: white;
    border: 1px solid var(--border-color);
    border-radius: 16px;
    padding: 2.5rem;
    transition: all 0.3s ease;
    height: 100%;
}

.feature-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(14, 165, 233, 0.1);
    border-color: rgba(14, 165, 233, 0.3);
}

.step-circle {
    width: 60px;
    height: 60px;
    background: var(--primary-color);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    font-weight: bold;
    margin-bottom: 1.5rem;
    box-shadow: 0 5px 15px rgba(14, 165, 233, 0.3);
}

.timeline-item {
    position: relative;
    padding-left: 50px;
    margin-bottom: 2rem;
}

.timeline-item::before {
    content: "";
    position: absolute;
    left: 15px;
    top: 0;
    bottom: -2rem;
    width: 2px;
    background-color: #cbd5e1;
}

.timeline-item:last-child::before {
    display: none;
}

.timeline-icon {
    position: absolute;
    left: 0;
    top: 0;
    width: 32px;
    height: 32px;
    background: var(--primary-color);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.9rem;
    z-index: 1;
}
</style>

<!-- 1. Hero Section -->
<section class="py-5" style="background: linear-gradient(135deg, #e0f2fe 0%, #ffffff 100%);">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0 pe-lg-5">
                <span class="badge bg-info text-white px-3 py-2 rounded-pill mb-4 fw-bold shadow-sm" style="background-color: var(--primary-color) !important;">Expert Kidney Care</span>
                <h1 class="display-4 fw-bold mb-4 text-dark">Hemodialysis at Home</h1>
                <p class="lead mb-4 text-muted" style="opacity: 0.9;">Safe, frequent, and comfortable dialysis procedures performed in the privacy of your own bedroom. In partnership with NephroPlus.</p>
                
                <div class="d-flex flex-wrap gap-3 mt-5">
                    <a href="index.php#appointment" class="btn fw-bold px-5 py-3 rounded-pill shadow-sm text-white" style="background-color: var(--primary-color);">
                        Consult for Setup
                    </a>
                    <a href="tel:+918521179540" class="btn btn-outline-dark fw-bold px-5 py-3 rounded-pill">
                        <i class="fa-solid fa-phone me-2"></i> +91-8521179540
                    </a>
                </div>
            </div>
            
            <div class="col-lg-6 text-center">
                <div class="position-relative">
                    <div class="rounded-4 shadow-lg w-100 d-flex flex-column align-items-center justify-content-center bg-white border border-4 border-light p-4" style="height: 400px; background-image: radial-gradient(circle at 50% 50%, #f0f9ff 0%, #ffffff 100%);">
                        <div class="mb-4 p-4 rounded-circle d-flex align-items-center justify-content-center" style="width: 150px; height: 150px; background-color: rgba(14, 165, 233, 0.1);">
                            <i class="fa-solid fa-kidneys text-info" style="font-size: 80px; color: var(--primary-color) !important;"></i>
                        </div>
                        <h4 class="fw-bold text-dark">Home Hemodialysis Setup</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. What is Dialysis? -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h2 class="fw-bold text-dark mb-4">What is Dialysis?</h2>
                <div class="mx-auto mt-3 mb-5" style="width: 60px; height: 4px; background-color: var(--primary-color); border-radius: 2px;"></div>
                <p class="lead text-muted mb-4">Dialysis is a procedure to remove waste products and excess fluid from the blood when the kidneys stop working properly. It often involves diverting blood to a machine to be cleaned.</p>
                <p class="text-muted mb-0">Normally, the kidneys filter the blood, removing harmful waste products and excess fluid and turning these into urine to be passed out of the body. When kidneys fail to do this, dialysis acts as an artificial kidney to keep your body balanced.</p>
            </div>
        </div>
    </div>
</section>

<!-- 3. Benefits of Home Dialysis -->
<section class="py-5" style="background-color: var(--light-bg);">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">Benefits of Dialysis at Home</h2>
            <div class="mx-auto mt-3 mb-4" style="width: 60px; height: 4px; background-color: var(--primary-color); border-radius: 2px;"></div>
        </div>
        
        <div class="row g-4 justify-content-center mb-5">
            <div class="col-lg-6">
                <div class="feature-box">
                    <i class="fa-solid fa-couch fs-1 mb-4" style="color: var(--primary-color);"></i>
                    <h4 class="fw-bold text-dark mb-3">Comfort & Frequency</h4>
                    <p class="text-muted mb-0">One major advantage of dialyzing at home is that you can dialyse more frequently with comfort and ease. It becomes a little difficult to go to a hospital or center every day of the week for long hours. This is much easier when done at home.</p>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="feature-box border-info">
                    <i class="fa-solid fa-heart-pulse fs-1 mb-4 text-info" style="color: var(--primary-color) !important;"></i>
                    <h4 class="fw-bold text-dark mb-3">Better Health Outcomes</h4>
                    <p class="text-muted mb-0">Researches show that hemodialysis, when done more frequently, over longer durations and more gently (at low pump speeds and ultrafiltration rates) is much better for the body overall in terms of both short term and long term outcomes.</p>
                </div>
            </div>
        </div>
        
        <div class="alert alert-warning border-warning bg-warning bg-opacity-10 rounded-4 p-4 shadow-sm text-center d-flex align-items-center justify-content-center gap-3 mx-auto" style="max-width: 900px;">
            <i class="fa-solid fa-triangle-exclamation text-warning fs-1"></i>
            <div class="text-start">
                <h6 class="fw-bold text-dark mb-1">Doctor\'s Consent is Mandatory</h6>
                <p class="mb-0 text-muted small">It is extremely important to get your doctor\'s consent before switching to home hemodialysis. This modality, though closest to ideal, may not be suited to you. Talk to your nephrologist about this before making the switch.</p>
            </div>
        </div>
    </div>
</section>

<!-- 4. Process -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="row align-items-center">
            <div class="col-lg-5 pe-lg-5 mb-5 mb-lg-0">
                <img src="assets/images/home-dialysis.jpg" class="img-fluid rounded-4 shadow-lg mb-4" alt="Home Dialysis Process">
                <div class="d-flex align-items-center bg-light p-3 rounded-3 border">
                    <img src="assets/images/placeholder_logo.png" alt="NephroPlus Partner" style="height: 40px; object-fit: contain; filter: grayscale(100%); opacity: 0.6;" class="me-3">
                    <div>
                        <h6 class="fw-bold mb-0 text-dark">Partnered with NephroPlus</h6>
                        <small class="text-muted">For seamless home hemodialysis setups.</small>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-7">
                <h2 class="fw-bold text-dark mb-2">The Setup Process</h2>
                <div class="mt-3 mb-5" style="width: 60px; height: 4px; background-color: var(--primary-color); border-radius: 2px;"></div>
                
                <div class="timeline-item">
                    <div class="timeline-icon"><i class="fa-solid fa-file-signature"></i></div>
                    <h5 class="fw-bold text-dark mb-2">Initial Agreement</h5>
                    <p class="text-muted small mb-0">We have a tie-up with NephroPlus for dialysis at home. Initially, the agreement is signed between the client and the company.</p>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-icon"><i class="fa-solid fa-truck-medical"></i></div>
                    <h5 class="fw-bold text-dark mb-2">Equipment Procurement & Setup (3-4 Weeks)</h5>
                    <p class="text-muted small mb-0">After the agreement, the process of equipment setup starts. Procuring and installing the hemodialysis machine setup takes around 3 to 4 weeks of time.</p>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-icon"><i class="fa-solid fa-faucet-drip"></i></div>
                    <h5 class="fw-bold text-dark mb-2">Water Quality Check</h5>
                    <p class="text-muted small mb-0">Once the hemodialysis machine is installed, the mineral water level of the household is checked to ensure the smooth and safe running of the machine.</p>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-icon"><i class="fa-solid fa-check-double"></i></div>
                    <h5 class="fw-bold text-dark mb-2">Final Verification & Sessions Begin</h5>
                    <p class="text-muted small mb-0">Once everything is checked and verified by the technician, your regular home dialysis procedure sessions can safely start.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. CTA Block -->
<div class="rounded-4 shadow-lg my-5 mx-3 mx-md-5" style="background: var(--dark-bg); padding: 80px 0;">
    <div class="container text-center text-white">
        <h2 class="display-6 fw-bold mb-4">Ready to Switch to Home Dialysis?</h2>
        <p class="lead mb-5 opacity-75 mx-auto" style="max-width: 700px;">Speak with our care coordinators to understand the requirements, pricing, and how to get approval from your nephrologist.</p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
            <a href="index.php#appointment" class="btn fw-bold px-5 py-3 rounded-pill shadow-sm text-dark bg-white">
                Request a Callback
            </a>
            <a href="tel:+918521179540" class="btn btn-outline-light fw-bold px-5 py-3 rounded-pill shadow-sm">
                <i class="fa-solid fa-phone me-2"></i> Call +91-8521179540
            </a>
        </div>
    </div>
</div>

';
?>
