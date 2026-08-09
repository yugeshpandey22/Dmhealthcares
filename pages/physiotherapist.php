<?php
// DO NOT set $full_page_override = true;
// We assign our completely unique frontend custom design to $frontend_custom_sections!

$frontend_custom_sections = '

<style>
/* Unique styling for Physiotherapist page */
.physio-icon-box {
    width: 70px; height: 70px;
    background: #fff;
    color: #e65c00; /* Deep orange */
    border-radius: 12px;
    display: flex; align-items: center; justify-content: center;
    font-size: 2rem;
    box-shadow: 0 10px 20px rgba(230, 92, 0, 0.15);
    margin-bottom: 20px;
    transition: all 0.3s ease;
}
.physio-card:hover .physio-icon-box {
    background: #e65c00;
    color: #fff;
    transform: translateY(-5px);
}
.physio-card {
    border: none;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
}
.physio-card:hover {
    box-shadow: 0 15px 30px rgba(0,0,0,0.1);
}
.bg-physio-orange { background-color: #e65c00 !important; }
.text-physio-orange { color: #e65c00 !important; }
.text-physio-dark { color: #2c3e50 !important; }
</style>

<!-- Intro Section with Abstract Shape -->
<div class="position-relative overflow-hidden bg-light py-5 mb-5 border-top">
    <!-- Decorative background element -->
    <div class="position-absolute rounded-circle bg-physio-orange opacity-10" style="width: 500px; height: 500px; top: -200px; right: -100px; z-index: 0;"></div>
    
    <div class="container py-4 position-relative z-1">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0 order-2 order-lg-1">
                <span class="badge bg-physio-orange text-white px-3 py-2 rounded-pill mb-3 fw-bold shadow-sm">Expert Rehabilitation</span>
                <h1 class="fw-bold text-physio-dark mb-4 display-5">Restore Your Mobility<br>At Home</h1>
                <p class="text-muted mb-4 lead">Don\'t let pain or stiffness hold you back. Our certified physiotherapists bring expert rehabilitation and pain management directly to your doorstep.</p>
                <p class="text-muted mb-4">Whether you are recovering from a major surgery, a sports injury, or managing chronic arthritis, we design personalized exercise regimes to accelerate your recovery and restore your independence.</p>
                
                <div class="d-flex align-items-center mb-4">
                    <div class="me-4 text-center">
                        <h3 class="fw-bold text-physio-dark mb-0">1000+</h3>
                        <p class="text-muted small mb-0">Patients Recovered</p>
                    </div>
                    <div class="me-4 text-center">
                        <h3 class="fw-bold text-physio-dark mb-0">50+</h3>
                        <p class="text-muted small mb-0">Certified Physios</p>
                    </div>
                </div>
                
                <a href="index.php#appointment" class="btn bg-physio-orange text-white rounded-pill px-5 py-3 shadow-sm fw-bold">
                    <i class="fa-solid fa-person-walking me-2"></i> Book an Assessment
                </a>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0 position-relative">
                <img src="assets/images/pages/physiotherapist_home.png" alt="Physiotherapy at Home" class="img-fluid rounded-4 shadow-lg w-100 position-relative z-1">
                <!-- Image decorative border -->
                <div class="position-absolute w-100 h-100 bg-physio-orange rounded-4" style="top: 20px; left: 20px; z-index: 0; opacity: 0.2;"></div>
            </div>
        </div>
    </div>
</div>

<!-- Conditions We Treat (Grid Layout) -->
<div class="container py-5 mb-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold text-physio-dark">Conditions We Treat</h2>
        <div class="mx-auto mt-3 mb-4" style="width: 80px; height: 4px; background-color: #e65c00; border-radius: 2px;"></div>
        <p class="text-muted mx-auto" style="max-width: 700px;">Our physiotherapists specialize in treating a wide range of musculoskeletal, neurological, and cardiopulmonary conditions.</p>
    </div>
    
    <div class="row g-4">
        <div class="col-lg-4 col-md-6">
            <div class="card physio-card h-100 p-4 bg-white">
                <div class="physio-icon-box">
                    <i class="fa-solid fa-bone"></i>
                </div>
                <h4 class="fw-bold text-physio-dark mb-3">Orthopedic Rehab</h4>
                <p class="text-muted small mb-0">Post-operative care for knee and hip replacements, fracture recovery, and severe joint pain management.</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="card physio-card h-100 p-4 bg-white">
                <div class="physio-icon-box">
                    <i class="fa-solid fa-brain"></i>
                </div>
                <h4 class="fw-bold text-physio-dark mb-3">Neuro Physiotherapy</h4>
                <p class="text-muted small mb-0">Specialized exercises to regain motor functions after a stroke, spinal cord injury, or for Parkinson\'s patients.</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="card physio-card h-100 p-4 bg-white">
                <div class="physio-icon-box">
                    <i class="fa-solid fa-person-falling"></i>
                </div>
                <h4 class="fw-bold text-physio-dark mb-3">Sports Injuries</h4>
                <p class="text-muted small mb-0">Rapid recovery therapies for ligament tears, muscle strains, tennis elbow, and ankle sprains.</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="card physio-card h-100 p-4 bg-white">
                <div class="physio-icon-box">
                    <i class="fa-solid fa-bed"></i>
                </div>
                <h4 class="fw-bold text-physio-dark mb-3">Back & Neck Pain</h4>
                <p class="text-muted small mb-0">Targeted stretching, posture correction, and strengthening for chronic sciatica, cervical spondylosis, and slip disc.</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="card physio-card h-100 p-4 bg-white">
                <div class="physio-icon-box">
                    <i class="fa-solid fa-person-cane"></i>
                </div>
                <h4 class="fw-bold text-physio-dark mb-3">Geriatric Care</h4>
                <p class="text-muted small mb-0">Helping elderly patients improve balance, reduce fall risks, and manage severe arthritis pain effectively.</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="card physio-card h-100 p-4 bg-white">
                <div class="physio-icon-box">
                    <i class="fa-solid fa-lungs"></i>
                </div>
                <h4 class="fw-bold text-physio-dark mb-3">Cardio-Respiratory</h4>
                <p class="text-muted small mb-0">Breathing exercises and chest physiotherapy for patients with COPD, asthma, or recovering from heart surgery.</p>
            </div>
        </div>
    </div>
</div>

<!-- Split Section: Benefits & Image -->
<div class="bg-light py-5 mb-5 border-top border-bottom">
    <div class="container py-4">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <div class="position-relative">
                    <img src="assets/images/pages/physio_rehab.png" alt="Physio Rehab Massage" class="img-fluid rounded-4 shadow-lg w-100">
                    <div class="position-absolute bottom-0 start-0 translate-middle-x mb-4 ms-4 bg-white p-3 rounded-3 shadow-lg d-none d-md-block">
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-star text-warning fs-4 me-2"></i>
                            <h5 class="fw-bold text-physio-dark mb-0">Top Rated Care</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1">
                <h2 class="fw-bold text-physio-dark mb-4">Why Opt for Physiotherapy at Home?</h2>
                
                <div class="row g-4 mt-2">
                    <div class="col-sm-6">
                        <h6 class="fw-bold text-physio-dark mb-2"><i class="fa-solid fa-car-side me-2 text-physio-orange"></i> Eliminates Travel Pain</h6>
                        <p class="text-muted small mb-0">Traveling with a joint injury or severe back pain is torturous. Let the healing come to you.</p>
                    </div>
                    <div class="col-sm-6">
                        <h6 class="fw-bold text-physio-dark mb-2"><i class="fa-solid fa-eye me-2 text-physio-orange"></i> One-on-One Focus</h6>
                        <p class="text-muted small mb-0">Unlike crowded clinics, our physio focuses 100% on you for the entire duration of the session.</p>
                    </div>
                    <div class="col-sm-6">
                        <h6 class="fw-bold text-physio-dark mb-2"><i class="fa-solid fa-house-chimney me-2 text-physio-orange"></i> Home Environment</h6>
                        <p class="text-muted small mb-0">Learn how to navigate your own stairs and use your own furniture for safe daily living.</p>
                    </div>
                    <div class="col-sm-6">
                        <h6 class="fw-bold text-physio-dark mb-2"><i class="fa-solid fa-people-group me-2 text-physio-orange"></i> Family Involvement</h6>
                        <p class="text-muted small mb-0">Your family members can observe the exercises and help you practice safely between sessions.</p>
                    </div>
                </div>
                
                <div class="mt-5">
                    <a href="index.php#appointment" class="btn btn-outline-dark rounded-pill px-4 py-2 fw-bold">
                        Schedule a Session
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
';
?>
