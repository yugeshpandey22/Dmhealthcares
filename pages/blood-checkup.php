<?php
// DO NOT set $full_page_override = true;
// We want to use the exact same layout as Noida (standard CMS layout with Banner, Image, Specs).
// We simply assign our frontend custom design to $frontend_custom_sections so it renders full width!

$frontend_custom_sections = '

<link rel="stylesheet" href="assets/css/blood-checkup.css">

<div class="mt-5 pt-4 border-top">
    <!-- How it Works -->
    <div class="row align-items-center mb-5 mt-4">
        <div class="col-lg-6 mb-4 mb-lg-0">
            <h2 class="fw-bold text-dark mb-4">How Home Sample Collection Works</h2>
            <div class="d-flex align-items-start mb-4">
                <div class="feature-icon-box flex-shrink-0 me-3">1</div>
                <div>
                    <h5 class="fw-bold text-dark mb-1">Book an Appointment</h5>
                    <p class="text-muted small">Schedule a time that is convenient for you through our website or via a simple phone call.</p>
                </div>
            </div>
            <div class="d-flex align-items-start mb-4">
                <div class="feature-icon-box flex-shrink-0 me-3">2</div>
                <div>
                    <h5 class="fw-bold text-dark mb-1">Sample Collection</h5>
                    <p class="text-muted small">Our highly trained and certified phlebotomist arrives at your doorstep for a painless, hygienic blood draw.</p>
                </div>
            </div>
            <div class="d-flex align-items-start">
                <div class="feature-icon-box flex-shrink-0 me-3">3</div>
                <div>
                    <h5 class="fw-bold text-dark mb-1">Digital Reports Delivery</h5>
                    <p class="text-muted small">Your samples are processed in our NABL-accredited labs, and accurate reports are sent directly to your WhatsApp and email.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 text-center">
            <img src="assets/images/blood-checkup.jpg" alt="Blood test at home" class="img-fluid rounded-4 shadow-lg w-100">
        </div>
    </div>
</div>

<div class="mt-5 pt-4 border-top">
    <!-- Popular Tests -->
    <div class="text-center mb-5 mt-4">
        <h2 class="fw-bold text-dark mb-3">Frequently Booked Tests</h2>
        <p class="text-muted mx-auto" style="max-width: 600px;">We offer a complete range of pathological tests and comprehensive full-body health checkup packages.</p>
    </div>
    
    <div class="row g-4 mb-5 pb-4">
        <div class="col-md-4">
            <div class="test-card card h-100 p-4 rounded-4 bg-light border-0">
                <h5 class="fw-bold mb-3 text-dark">Complete Blood Count (CBC)</h5>
                <p class="text-muted small mb-4">Evaluates your overall health and detects a wide range of disorders, including anemia, infection, and leukemia.</p>
                <div class="mt-auto">
                    <span class="text-danger fw-bold"><i class="fa-solid fa-tag me-1"></i> Starting ₹399</span>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="test-card card h-100 p-4 rounded-4 bg-light border-0">
                <h5 class="fw-bold mb-3 text-dark">Lipid Profile</h5>
                <p class="text-muted small mb-4">Measures cholesterol levels and triglycerides to assess your risk of developing cardiovascular diseases.</p>
                <div class="mt-auto">
                    <span class="text-danger fw-bold"><i class="fa-solid fa-tag me-1"></i> Starting ₹499</span>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="test-card card h-100 p-4 rounded-4 bg-light border-0">
                <h5 class="fw-bold mb-3 text-dark">Thyroid Profile (T3, T4, TSH)</h5>
                <p class="text-muted small mb-4">Checks the function of the thyroid gland to diagnose disorders like hyperthyroidism and hypothyroidism.</p>
                <div class="mt-auto">
                    <span class="text-danger fw-bold"><i class="fa-solid fa-tag me-1"></i> Starting ₹549</span>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center">
        <a href="tel:+919876543210" class="btn btn-outline-danger rounded-pill px-5 py-3 fw-bold shadow-sm">
            <i class="fa-solid fa-phone me-2"></i> Call to Book Other Tests
        </a>
    </div>
</div>
';
?>
