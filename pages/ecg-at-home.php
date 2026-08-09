<?php
// DO NOT set $full_page_override = true;
$hide_default_welcome = true;

$frontend_custom_sections = '

<style>
:root {
    --primary-color: #ef4444; /* Red color for cardiology theme */
    --primary-dark: #b91c1c;
    --dark-bg: #1e293b;
    --light-bg: #f8fafc;
    --border-color: rgba(0,0,0,0.05);
}

body {
    font-family: "Inter", sans-serif;
}

/* Hero Section */
.ecg-hero {
    background: linear-gradient(135deg, #fff5f5 0%, #ffffff 100%);
    border-bottom: 1px solid var(--border-color);
    padding: 80px 0;
    position: relative;
    overflow: hidden;
}

/* Heartbeat Pattern */
.heartbeat-bg {
    position: absolute;
    bottom: -20px;
    left: 0;
    width: 100%;
    height: 150px;
    background: url("data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 800 150\' preserveAspectRatio=\'none\'%3E%3Cpath d=\'M0 75 L100 75 L120 40 L160 120 L200 20 L240 100 L260 75 L800 75\' fill=\'none\' stroke=\'%23ef4444\' stroke-width=\'2\' stroke-opacity=\'0.1\' /%3E%3C/svg%3E") repeat-x;
    z-index: 0;
}

/* Feature Cards */
.feat-card {
    background: white;
    border: 1px solid var(--border-color);
    border-radius: 16px;
    padding: 2.5rem 1.5rem;
    transition: all 0.3s ease;
    text-align: center;
    height: 100%;
}

.feat-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 35px rgba(239, 68, 68, 0.08);
    border-color: rgba(239, 68, 68, 0.2);
}

/* Process Steps */
.step-number {
    width: 40px;
    height: 40px;
    background: var(--primary-color);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 1.2rem;
    margin-right: 15px;
    flex-shrink: 0;
}
</style>

<!-- 1. Hero Section -->
<section class="ecg-hero">
    <div class="heartbeat-bg"></div>
    <div class="container position-relative z-1 py-5">
        <div class="row align-items-center">
            <div class="col-lg-7 mb-5 mb-lg-0 pe-lg-5">
                <span class="badge bg-danger bg-opacity-10 text-danger px-3 py-2 rounded-pill mb-4 fw-bold shadow-sm">Cardiac Care at Home</span>
                <h1 class="display-5 fw-bold mb-4 text-dark">Quick & Accurate ECG at Home</h1>
                <p class="lead mb-4 text-muted" style="opacity: 0.9;">Avoid the stress of hospital visits. Get a professional 12-lead ECG test done in the comfort of your home by our certified technicians with instant digital reports.</p>
                
                <ul class="list-unstyled mb-5">
                    <li class="mb-3 d-flex align-items-center"><i class="fa-solid fa-clock text-danger fs-5 me-3"></i> <span class="fw-bold text-dark">Fast Service:</span> <span class="text-muted ms-2">Technician reaches you within 60-90 minutes.</span></li>
                    <li class="mb-3 d-flex align-items-center"><i class="fa-solid fa-file-medical text-danger fs-5 me-3"></i> <span class="fw-bold text-dark">Instant Reports:</span> <span class="text-muted ms-2">Get your ECG report immediately after the test.</span></li>
                </ul>
                
                <div class="d-flex flex-wrap gap-3 mt-4">
                    <a href="index.php#appointment" class="btn btn-danger btn-lg fw-bold px-5 rounded-pill shadow-sm">
                        <i class="fa-solid fa-heart-circle-check me-2"></i> Book ECG Now
                    </a>
                    <a href="tel:+918521179540" class="btn btn-outline-dark btn-lg fw-bold px-5 rounded-pill">
                        <i class="fa-solid fa-phone me-2"></i> Call to Book
                    </a>
                </div>
            </div>
            
            <div class="col-lg-5 text-center">
                <div class="position-relative">
                    <div class="rounded-4 shadow-lg w-100 d-flex flex-column align-items-center justify-content-center bg-white border border-4 border-light" style="height: 400px;">
                        <div class="mb-4 bg-danger bg-opacity-10 p-5 rounded-circle d-flex align-items-center justify-content-center" style="width: 180px; height: 180px;">
                            <i class="fa-solid fa-heart-pulse text-danger" style="font-size: 80px;"></i>
                        </div>
                        <span class="text-muted fw-bold text-uppercase tracking-wider">Portable 12-Lead ECG</span>
                    </div>
                    
                    <div class="position-absolute bottom-0 start-0 translate-middle-x mb-4 ms-4 d-none d-md-block">
                        <div class="bg-white p-3 rounded-4 shadow-lg border-start border-danger border-5">
                            <h5 class="fw-bold text-dark mb-0">Affordable Pricing</h5>
                            <small class="text-muted">Starting from ₹500</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. Why Do You Need It? -->
<section class="py-5">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">Who Needs an ECG at Home?</h2>
            <div class="mx-auto mt-3 mb-4" style="width: 60px; height: 4px; background-color: var(--primary-color); border-radius: 2px;"></div>
            <p class="text-muted mx-auto" style="max-width: 600px;">An Electrocardiogram (ECG) is a simple, non-invasive test that records the electrical activity of your heart. It is highly recommended for:</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="feat-card">
                    <div class="bg-danger bg-opacity-10 text-danger rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 70px; height: 70px;">
                        <i class="fa-solid fa-person-cane fs-3"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Elderly Patients</h5>
                    <p class="text-muted small mb-0">For senior citizens who find it difficult to travel to a clinic or diagnostic center.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="feat-card">
                    <div class="bg-danger bg-opacity-10 text-danger rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 70px; height: 70px;">
                        <i class="fa-solid fa-bed-pulse fs-3"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Bedridden Patients</h5>
                    <p class="text-muted small mb-0">Crucial for paralyzed or post-surgery patients who require regular cardiac monitoring.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="feat-card">
                    <div class="bg-danger bg-opacity-10 text-danger rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 70px; height: 70px;">
                        <i class="fa-solid fa-stethoscope fs-3"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Routine Checkups</h5>
                    <p class="text-muted small mb-0">For individuals with a history of hypertension, diabetes, or heart disease.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="feat-card">
                    <div class="bg-danger bg-opacity-10 text-danger rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 70px; height: 70px;">
                        <i class="fa-solid fa-kit-medical fs-3"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Chest Pain Symptoms</h5>
                    <p class="text-muted small mb-0">If you experience sudden chest pain, palpitations, or shortness of breath.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2.5 When you need ECG Screening -->
<section class="py-5">
    <div class="container py-4 border-top">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="pe-lg-5">
                    <h2 class="fw-bold text-dark">When you need ECG Screening?</h2>
                    <div class="mt-3 mb-4" style="width: 60px; height: 4px; background-color: var(--primary-color); border-radius: 2px;"></div>
                    <ul class="list-unstyled">
                        <li class="mb-4 d-flex align-items-center">
                            <div class="bg-danger bg-opacity-10 text-danger rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 45px; height: 45px; min-width: 45px;"><i class="fa-solid fa-heart-crack"></i></div>
                            <span class="fw-bold text-dark fs-5">To detect heart malfunctioning</span>
                        </li>
                        <li class="mb-4 d-flex align-items-center">
                            <div class="bg-danger bg-opacity-10 text-danger rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 45px; height: 45px; min-width: 45px;"><i class="fa-solid fa-notes-medical"></i></div>
                            <span class="fw-bold text-dark fs-5">For monitoring heart treatments</span>
                        </li>
                        <li class="mb-4 d-flex align-items-center">
                            <div class="bg-danger bg-opacity-10 text-danger rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 45px; height: 45px; min-width: 45px;"><i class="fa-solid fa-droplet-slash"></i></div>
                            <span class="fw-bold text-dark fs-5">To detect blocked arteries</span>
                        </li>
                        <li class="mb-4 d-flex align-items-center">
                            <div class="bg-danger bg-opacity-10 text-danger rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 45px; height: 45px; min-width: 45px;"><i class="fa-solid fa-heart-pulse"></i></div>
                            <span class="fw-bold text-dark fs-5">To detect heart muscles/valves damage</span>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="bg-danger bg-opacity-10 text-danger rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 45px; height: 45px; min-width: 45px;"><i class="fa-solid fa-wave-square"></i></div>
                            <span class="fw-bold text-dark fs-5">To analyse heart rate</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="bg-light rounded-4 shadow-sm p-5 h-100 d-flex flex-column justify-content-center text-center border">
                    <i class="fa-solid fa-heart-circle-exclamation text-danger mb-4" style="font-size: 70px; opacity: 0.8;"></i>
                    <h4 class="fw-bold text-dark mb-3">Don\'t Ignore the Signs</h4>
                    <p class="text-muted mb-0">Timely ECG screening can prevent severe cardiac events. Early detection is the best prevention for heart-related ailments.</p>
                </div>
            </div>
        </div>
    </div>
<!-- 3. How We Perform ECG Test at Home? -->
<section class="py-5" style="background-color: var(--light-bg);">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark mb-4">How We Perform ECG Test at Home?</h2>
            <div class="mx-auto mt-3 mb-5" style="width: 60px; height: 4px; background-color: var(--primary-color); border-radius: 2px;"></div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0 pe-lg-5">
                <div class="d-flex align-items-start mb-4">
                    <div class="step-number">1</div>
                    <div>
                        <p class="text-muted small mb-0 mt-2">Once you complete ECG Test booking with us, we give you the tentative time slot for our technician visit at your place to conduct the test.</p>
                    </div>
                </div>
                <div class="d-flex align-items-start mb-4">
                    <div class="step-number">2</div>
                    <div>
                        <p class="text-muted small mb-0 mt-2">Our technician will bring the ECG machine along with him; You need to lie flat on your back on a comfortable table or even bed and restrict your movements.</p>
                    </div>
                </div>
                <div class="d-flex align-items-start mb-4">
                    <div class="step-number">3</div>
                    <div>
                        <p class="text-muted small mb-0 mt-2">Technician will put small adhesive patches, called electrodes which he/she will attach to your arms, legs, and chest.</p>
                    </div>
                </div>
                <div class="d-flex align-items-start mb-4">
                    <div class="step-number">4</div>
                    <div>
                        <p class="text-muted small mb-0 mt-2">The attached electrodes connnect to the ECG machine which reads the heart rate and the electrical pulses and represent it into a wave like format.</p>
                    </div>
                </div>
                <div class="d-flex align-items-start mb-4">
                    <div class="step-number">5</div>
                    <div>
                        <p class="text-muted small mb-0 mt-2">The technician might also ask you to hold breath for a few seconds to conduct the procedure.</p>
                    </div>
                </div>
                <div class="d-flex align-items-start">
                    <div class="step-number">6</div>
                    <div>
                        <p class="text-muted small mb-0 mt-2">It is adviced to stay calm and still during the ECG test as the movement can interfere with the final results.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="bg-white rounded-4 shadow-sm p-2">
                    <img src="assets/images/downloaded_img_2.jpg" class="img-fluid rounded-3 w-100" alt="ECG Technician at Home" style="object-fit: cover; height: 500px;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. Care with Impact -->
<section class="py-5">
    <div class="container py-4 text-center">
        <h2 class="fw-bold text-dark">Care with Impact</h2>
        <p class="text-muted mb-5">Dedicated towards Care</p>
        
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="bg-white p-4 border rounded-4 h-100 shadow-sm feat-card">
                    <h4 class="fw-bold text-danger mb-2">12+ Years of Trust</h4>
                    <p class="text-muted small mb-0">Delivering reliable care since 2013</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-white p-4 border rounded-4 h-100 shadow-sm feat-card">
                    <h4 class="fw-bold text-danger mb-2">99.9% Care Continuity</h4>
                    <p class="text-muted small mb-0">Almost 0% interruption in services</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-white p-4 border rounded-4 h-100 shadow-sm feat-card">
                    <h4 class="fw-bold text-danger mb-2">4.8+ Star Rating</h4>
                    <p class="text-muted small mb-0">Across platforms - Google, FB, Trustpilot</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-white p-4 border rounded-4 h-100 shadow-sm feat-card">
                    <h4 class="fw-bold text-danger mb-2">100% Verified Caregivers</h4>
                    <p class="text-muted small mb-0">Background, Adhar & Police Verified</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-white p-4 border rounded-4 h-100 shadow-sm feat-card">
                    <h4 class="fw-bold text-danger mb-2">24 Hours TAT</h4>
                    <p class="text-muted small mb-0">For Onboarding New Home Care Case</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-white p-4 border rounded-4 h-100 shadow-sm feat-card">
                    <h4 class="fw-bold text-danger mb-2">4 Hours Delivery</h4>
                    <p class="text-muted small mb-0">Instant Delivery of Medical Equipment</p>
                </div>
            </div>
        </div>
    </div>
</section>



';
?>
