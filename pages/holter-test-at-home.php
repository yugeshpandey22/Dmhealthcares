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
.holter-hero {
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
<section class="holter-hero">
    <div class="heartbeat-bg"></div>
    <div class="container position-relative z-1 py-5">
        <div class="row align-items-center">
            <div class="col-lg-7 mb-5 mb-lg-0 pe-lg-5">
                <span class="badge bg-danger bg-opacity-10 text-danger px-3 py-2 rounded-pill mb-4 fw-bold shadow-sm">Continuous Cardiac Monitoring</span>
                <h1 class="display-5 fw-bold mb-4 text-dark">Holter Monitor Test at Home</h1>
                <p class="lead mb-4 text-muted" style="opacity: 0.9;">Monitor your heart\'s activity continuously for 24 to 72 hours from the comfort of your home. A Holter monitor helps detect irregular heartbeats that a standard ECG might miss.</p>
                
                <ul class="list-unstyled mb-5">
                    <li class="mb-3 d-flex align-items-center"><i class="fa-solid fa-house-chimney-medical text-danger fs-5 me-3"></i> <span class="fw-bold text-dark">Home Setup:</span> <span class="text-muted ms-2">Technician attaches the device at your home.</span></li>
                    <li class="mb-3 d-flex align-items-center"><i class="fa-solid fa-stopwatch text-danger fs-5 me-3"></i> <span class="fw-bold text-dark">24/7 Tracking:</span> <span class="text-muted ms-2">Continuous recording while you do daily activities.</span></li>
                </ul>
                
                <div class="d-flex flex-wrap gap-3 mt-4">
                    <a href="index.php#appointment" class="btn btn-danger btn-lg fw-bold px-5 rounded-pill shadow-sm">
                        Book Home Visit
                    </a>
                    <a href="tel:+918521179540" class="btn btn-outline-dark btn-lg fw-bold px-5 rounded-pill">
                        Call for Details
                    </a>
                </div>
            </div>
            
            <div class="col-lg-5 text-center">
                <div class="position-relative">
                    <div class="rounded-4 shadow-lg w-100 d-flex flex-column align-items-center justify-content-center bg-white border border-4 border-light" style="height: 400px;">
                        <div class="mb-4 bg-danger bg-opacity-10 p-5 rounded-circle d-flex align-items-center justify-content-center" style="width: 180px; height: 180px;">
                            <i class="fa-solid fa-pager text-danger" style="font-size: 80px;"></i>
                        </div>
                        <span class="text-muted fw-bold text-uppercase tracking-wider">Portable Holter Device</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. When Do You Need a Holter Test? -->
<section class="py-5">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">Why is a Holter Test Prescribed?</h2>
            <div class="mx-auto mt-3 mb-4" style="width: 60px; height: 4px; background-color: var(--primary-color); border-radius: 2px;"></div>
            <p class="text-muted mx-auto" style="max-width: 600px;">Sometimes an ECG doesn\'t give the complete picture if symptoms are unpredictable. A Holter test is required for:</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="feat-card">
                    <div class="bg-danger bg-opacity-10 text-danger rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 70px; height: 70px;">
                        <i class="fa-solid fa-heart-circle-exclamation fs-3"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Palpitations</h5>
                    <p class="text-muted small mb-0">To catch irregular or sudden rapid heartbeats that come and go.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="feat-card">
                    <div class="bg-danger bg-opacity-10 text-danger rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 70px; height: 70px;">
                        <i class="fa-solid fa-dizzy fs-3"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Unexplained Fainting</h5>
                    <p class="text-muted small mb-0">To find out if dizziness or fainting (syncope) is caused by a heart rhythm problem.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="feat-card">
                    <div class="bg-danger bg-opacity-10 text-danger rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 70px; height: 70px;">
                        <i class="fa-solid fa-heart-crack fs-3"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Arrhythmia Detection</h5>
                    <p class="text-muted small mb-0">To diagnose conditions like Atrial Fibrillation (AFib) which can cause strokes.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="feat-card">
                    <div class="bg-danger bg-opacity-10 text-danger rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 70px; height: 70px;">
                        <i class="fa-solid fa-pills fs-3"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Medication Check</h5>
                    <p class="text-muted small mb-0">To assess if current heart medications or pacemakers are working effectively.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. The Process (How it Works) -->
<section class="py-5" style="background-color: var(--light-bg);">
    <div class="container py-4">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0 pe-lg-5">
                <h2 class="fw-bold text-dark mb-4">How It Works</h2>
                <div class="mt-3 mb-5" style="width: 60px; height: 4px; background-color: var(--primary-color); border-radius: 2px;"></div>
                
                <div class="d-flex align-items-start mb-4">
                    <div class="step-number">1</div>
                    <div>
                        <h5 class="fw-bold text-dark mb-1">Device Setup at Home</h5>
                        <p class="text-muted small">Our technician will visit your home, attach the small electrodes to your chest, and connect them to the Holter device (size of a small phone).</p>
                    </div>
                </div>
                
                <div class="d-flex align-items-start mb-4">
                    <div class="step-number">2</div>
                    <div>
                        <h5 class="fw-bold text-dark mb-1">Wear for 24-72 Hours</h5>
                        <p class="text-muted small">You will wear the device under your clothes and carry on with your normal daily activities (except bathing). You\'ll be asked to keep a brief diary of your activities and any symptoms.</p>
                    </div>
                </div>
                
                <div class="d-flex align-items-start mb-4">
                    <div class="step-number">3</div>
                    <div>
                        <h5 class="fw-bold text-dark mb-1">Device Removal</h5>
                        <p class="text-muted small">After the prescribed period, the technician will return to safely remove the device and collect your symptom diary.</p>
                    </div>
                </div>
                
                <div class="d-flex align-items-start">
                    <div class="step-number">4</div>
                    <div>
                        <h5 class="fw-bold text-dark mb-1">Detailed Analysis & Report</h5>
                        <p class="text-muted small">The continuous data is analyzed by a cardiologist, and a detailed comprehensive report is sent to you and your doctor.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="bg-white rounded-4 shadow-sm p-5 h-100 d-flex flex-column justify-content-center border">
                    <h4 class="fw-bold text-dark mb-4 border-bottom pb-3"><i class="fa-solid fa-list-check text-danger me-2"></i> Preparation Tips</h4>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-3 d-flex"><i class="fa-solid fa-check text-success me-3 mt-1"></i> <span class="text-muted">Take a bath before the technician arrives, as you cannot shower while wearing the device.</span></li>
                        <li class="mb-3 d-flex"><i class="fa-solid fa-check text-success me-3 mt-1"></i> <span class="text-muted">Wear loose, comfortable clothing (like a button-down shirt) for easy access to the chest.</span></li>
                        <li class="mb-3 d-flex"><i class="fa-solid fa-check text-success me-3 mt-1"></i> <span class="text-muted">Men may need to have small patches of chest hair shaved for the electrodes to stick properly.</span></li>
                        <li class="d-flex"><i class="fa-solid fa-check text-success me-3 mt-1"></i> <span class="text-muted">Continue taking your regular medications unless instructed otherwise by your doctor.</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. Contact Block -->
<div class="rounded-4 shadow-lg my-5" style="background: var(--dark-bg); padding: 80px 0;">
    <div class="container text-center text-white">
        <h2 class="display-6 fw-bold mb-4">Book Your Holter Monitor Test</h2>
        <p class="lead mb-5 opacity-75 mx-auto" style="max-width: 600px;">Get a comprehensive cardiac evaluation without stepping out of your home. Call us today to schedule your Holter test.</p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
            <a href="index.php#appointment" class="btn btn-danger btn-lg fw-bold px-5 py-3 rounded-pill shadow-sm">
                Book Online
            </a>
            <a href="tel:+918521179540" class="btn btn-outline-light btn-lg fw-bold px-5 py-3 rounded-pill shadow-sm">
                <i class="fa-solid fa-phone me-2"></i> +91-8521179540
            </a>
        </div>
    </div>
</div>

';
?>
