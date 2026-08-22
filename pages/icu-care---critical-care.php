<?php
// DO NOT set $full_page_override = true;
$hide_default_welcome = true; // Hides the default "Welcome to TITLE" section from page.php

$frontend_custom_sections = '

<style>
/* HDU Inspired Theme */
.hdu-hero {
    background: linear-gradient(135deg, #1E293B 0%, #0F172A 100%);
    color: white;
    padding: 80px 0;
    position: relative;
    overflow: hidden;
}
.hdu-hero::after {
    content: "";
    position: absolute;
    bottom: 0; left: 0; right: 0;
    height: 50px;
    background: #f8f9fa;
    clip-path: polygon(0 100%, 100% 100%, 100% 0);
}
.hdu-trust-badge {
    background: rgba(229, 37, 42, 0.15);
    border: 1px solid rgba(229, 37, 42, 0.3);
    padding: 8px 20px;
    border-radius: 50px;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 30px;
    color: #FF8082;
}
.hdu-callback-card {
    background: white;
    border-radius: 16px;
    padding: 30px;
    box-shadow: 0 20px 40px rgba(0,0,0,0.2);
    color: #333;
}
.hdu-feature-card {
    background: white;
    border-radius: 12px;
    padding: 30px;
    height: 100%;
    box-shadow: 0 5px 20px rgba(0,0,0,0.05);
    border: 1px solid #eef2f6;
    transition: all 0.3s ease;
}
.hdu-feature-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(229, 37, 42, 0.12);
    border-color: var(--primary-color);
}
.hdu-icon-box {
    width: 60px;
    height: 60px;
    background: rgba(229, 37, 42, 0.1);
    color: var(--primary-color);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    margin-bottom: 20px;
}
</style>

<!-- Hero Section -->
<div class="hdu-hero">
    <div class="container position-relative z-1">
        <div class="row align-items-center">
            <div class="col-lg-7 mb-5 mb-lg-0">
                <div class="hdu-trust-badge">
                    <i class="fa-solid fa-star text-warning"></i> Trusted by 1000+ Families for ICU Care at Home
                </div>
                <h1 class="display-4 fw-bold mb-4">Complete Home ICU Setup</h1>
                <p class="lead mb-4 opacity-75" style="max-width: 600px;">
                    We provide ICU beds, ventilators, monitors, and trained medical staff for critical care in the comfort of your home.
                </p>
                <div class="d-flex gap-3">
                    <a href="tel:+919891989686" class="btn btn-primary btn-lg fw-bold px-4 rounded-pill">
                        <i class="fa-solid fa-phone me-2"></i> Call Us Now
                    </a>
                </div>
            </div>
            
            <div class="col-lg-5">
                <div class="hdu-callback-card">
                    <h4 class="fw-bold text-dark mb-2">Get in Touch with Us Now!</h4>
                    <p class="text-success fw-bold small mb-4"><i class="fa-solid fa-clock me-1"></i> Callback in 10 minutes</p>
                    
                    <form action="index.php#appointment" method="GET">
                        <div class="mb-3">
                            <label class="form-label text-muted small fw-bold">Patient Name</label>
                            <input type="text" class="form-control form-control-lg bg-light border-0" placeholder="Enter name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-muted small fw-bold">Mobile Number</label>
                            <input type="text" class="form-control form-control-lg bg-light border-0" placeholder="10-digit number">
                        </div>
                        <div class="mb-4">
                            <label class="form-label text-muted small fw-bold">Requirement</label>
                            <select class="form-select form-select-lg bg-light border-0">
                                <option>Full ICU Setup</option>
                                <option>Ventilator Only</option>
                                <option>ICU Nurse Only</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg w-100 fw-bold">Request Callback</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Transforming Homes Section -->
<div class="py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mb-5 pb-3">
            <h2 class="fw-bold text-dark mb-3 display-6">Transforming Homes into Fully Equipped ICU Units</h2>
            <div class="mx-auto mt-3 mb-4" style="width: 60px; height: 4px; background-color: var(--primary-color); border-radius: 2px;"></div>
            <p class="text-muted mx-auto" style="max-width: 800px;">
                We bring hospital-grade precision and comprehensive medical care directly to your living room. Here is what our ICU setup includes:
            </p>
        </div>
        
        <div class="row g-4 justify-content-center">
            <!-- Feature 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="hdu-feature-card">
                    <div class="hdu-icon-wrapper">
                        <div class="hdu-icon-box">
                            <i class="fa-solid fa-bed-pulse"></i>
                        </div>
                    </div>
                    <h5 class="fw-bold text-dark mb-3">Comprehensive Equipment</h5>
                    <p class="text-muted small mb-0 lh-lg">We provide essential medical equipment, including ventilators, cardiac monitors, oxygen concentrators, and infusion pumps, ensuring a fully functional ICU at home.</p>
                </div>
            </div>
            
            <!-- Feature 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="hdu-feature-card">
                    <div class="hdu-icon-wrapper">
                        <div class="hdu-icon-box">
                            <i class="fa-solid fa-user-nurse"></i>
                        </div>
                    </div>
                    <h5 class="fw-bold text-dark mb-3">Skilled Medical Personnel</h5>
                    <p class="text-muted small mb-0 lh-lg">Our trained medical professionals, including critical-care nurses and respiratory therapists, deliver 24/7 care to ensure patient safety and well-being.</p>
                </div>
            </div>
            
            <!-- Feature 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="hdu-feature-card">
                    <div class="hdu-icon-wrapper">
                        <div class="hdu-icon-box">
                            <i class="fa-solid fa-user-doctor"></i>
                        </div>
                    </div>
                    <h5 class="fw-bold text-dark mb-3">Doctor Oversight</h5>
                    <p class="text-muted small mb-0 lh-lg">We coordinate with experienced physicians who supervise treatment plans and monitor the patient\'s progress continuously.</p>
                </div>
            </div>
            
            <!-- Feature 4 -->
            <div class="col-lg-4 col-md-6">
                <div class="hdu-feature-card">
                    <div class="hdu-icon-wrapper">
                        <div class="hdu-icon-box">
                            <i class="fa-solid fa-heart-circle-check"></i>
                        </div>
                    </div>
                    <h5 class="fw-bold text-dark mb-3">Tailored for Critical Needs</h5>
                    <p class="text-muted small mb-0 lh-lg">We assist patients with chronic critical illnesses who require long-term intensive care but are stable enough to be treated at home.</p>
                </div>
            </div>
            
            <!-- Feature 5 -->
            <div class="col-lg-4 col-md-6">
                <div class="hdu-feature-card">
                    <div class="hdu-icon-wrapper">
                        <div class="hdu-icon-box">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                    </div>
                    <h5 class="fw-bold text-dark mb-3">Enhanced Benefits</h5>
                    <p class="text-muted small mb-0 lh-lg">We help reduce the risk of hospital-acquired infections, provide a more comfortable recovery environment, and offer a cost-effective alternative to extended hospital stays.</p>
                </div>
            </div>
        </div>
    </div>
</div>

';
?>
