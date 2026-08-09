<?php
// DO NOT set $full_page_override = true;
$hide_default_welcome = true;

$frontend_custom_sections = '

<style>
:root {
    --primary-color: #0d6efd;
    --dark-bg: #1e293b;
    --light-bg: #f8fafc;
    --border-color: rgba(0,0,0,0.08);
}

.package-card {
    background: white;
    border: 1px solid var(--border-color);
    border-radius: 16px;
    padding: 2rem;
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
    position: relative;
    overflow: hidden;
}

.package-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.08);
    border-color: rgba(13, 110, 253, 0.3);
}

.discount-badge {
    position: absolute;
    top: 15px;
    right: -35px;
    background: #ef4444;
    color: white;
    padding: 5px 40px;
    font-size: 0.8rem;
    font-weight: bold;
    transform: rotate(45deg);
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

.price-block {
    background: rgba(13, 110, 253, 0.05);
    border-radius: 12px;
    padding: 15px;
    margin-bottom: 20px;
}

.param-list {
    flex-grow: 1;
    margin-bottom: 25px;
}

.param-list li {
    margin-bottom: 10px;
    font-size: 0.9rem;
    color: #4b5563;
    display: flex;
    align-items: flex-start;
}

.param-list li i {
    color: #10b981;
    margin-top: 4px;
    margin-right: 10px;
}

/* Accordion Styling */
.accordion-button:not(.collapsed) {
    background-color: rgba(13, 110, 253, 0.05);
    color: var(--primary-color);
    font-weight: bold;
}
</style>

<!-- 1. Hero Section -->
<section class="py-5" style="background: linear-gradient(135deg, #eef2ff 0%, #ffffff 100%); border-bottom: 1px solid var(--border-color);">
    <div class="container py-5 text-center">
        <span class="badge bg-primary px-3 py-2 rounded-pill mb-4 fw-bold shadow-sm">Preventive Care</span>
        <h1 class="display-4 fw-bold mb-4 text-dark">Comprehensive Health Checkup at Home</h1>
        <p class="lead text-muted mx-auto" style="max-width: 700px;">Get accurate and reliable blood tests from the comfort of your home. We partner with NABL certified labs to ensure the highest quality diagnostics.</p>
    </div>
</section>

<!-- 2. Health Packages -->
<section class="py-5" style="background-color: var(--light-bg);">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">Our Premium Health Packages</h2>
            <div class="mx-auto mt-3 mb-4" style="width: 60px; height: 4px; background-color: var(--primary-color); border-radius: 2px;"></div>
        </div>
        
        <div class="row g-4">
            <!-- 1. Good Health Package -->
            <div class="col-lg-4 col-md-6">
                <div class="package-card shadow-sm border-primary border-2">
                    <div class="discount-badge">SAVE 75%</div>
                    <h4 class="fw-bold text-dark mb-3">Good Health Package</h4>
                    
                    <div class="price-block text-center">
                        <span class="text-muted small d-block mb-1">As low as</span>
                        <div class="d-flex align-items-end justify-content-center gap-2">
                            <h2 class="fw-bold text-primary mb-0">₹450</h2>
                            <span class="text-muted text-decoration-line-through mb-1">₹1810</span>
                        </div>
                    </div>
                    
                    <h6 class="fw-bold text-dark mb-3">Test Parameters Include:</h6>
                    <ul class="list-unstyled param-list">
                        <li><i class="fa-solid fa-check-circle"></i> CBC (27 tests)</li>
                        <li><i class="fa-solid fa-check-circle"></i> Liver Function Test (12 tests)</li>
                        <li><i class="fa-solid fa-check-circle"></i> Kidney Function Test (10 tests)</li>
                        <li><i class="fa-solid fa-check-circle"></i> Urine Routine & Microscopic (23 tests)</li>
                        <li><i class="fa-solid fa-check-circle"></i> Lipid Screen (9 tests)</li>
                    </ul>
                    
                    <a href="index.php#appointment" class="btn btn-primary fw-bold rounded-pill w-100 shadow-sm py-2">Book Now</a>
                </div>
            </div>

            <!-- 2. Arthritis Screening -->
            <div class="col-lg-4 col-md-6">
                <div class="package-card shadow-sm">
                    <div class="discount-badge">SAVE 66%</div>
                    <h4 class="fw-bold text-dark mb-3">Arthritis Screening</h4>
                    
                    <div class="price-block text-center">
                        <span class="text-muted small d-block mb-1">As low as</span>
                        <div class="d-flex align-items-end justify-content-center gap-2">
                            <h2 class="fw-bold text-primary mb-0">₹450</h2>
                            <span class="text-muted text-decoration-line-through mb-1">₹1350</span>
                        </div>
                    </div>
                    
                    <h6 class="fw-bold text-dark mb-3">Test Parameters Include:</h6>
                    <ul class="list-unstyled param-list">
                        <li><i class="fa-solid fa-check-circle"></i> RA Test / Rheumatoid Arthritis Factor (1)</li>
                        <li><i class="fa-solid fa-check-circle"></i> Kidney Function Test / KFT (10)</li>
                        <li><i class="fa-solid fa-check-circle"></i> Complete Blood Count / CBC (26)</li>
                    </ul>
                    
                    <a href="index.php#appointment" class="btn btn-outline-primary fw-bold rounded-pill w-100 py-2">Book Now</a>
                </div>
            </div>

            <!-- 3. Working Women Test -->
            <div class="col-lg-4 col-md-6">
                <div class="package-card shadow-sm">
                    <div class="discount-badge">SAVE 54%</div>
                    <h4 class="fw-bold text-dark mb-3">Working Women Test</h4>
                    
                    <div class="price-block text-center">
                        <span class="text-muted small d-block mb-1">As low as</span>
                        <div class="d-flex align-items-end justify-content-center gap-2">
                            <h2 class="fw-bold text-primary mb-0">₹1033</h2>
                            <span class="text-muted text-decoration-line-through mb-1">₹2247</span>
                        </div>
                    </div>
                    
                    <h6 class="fw-bold text-dark mb-3">Test Parameters Include:</h6>
                    <ul class="list-unstyled param-list">
                        <li><i class="fa-solid fa-check-circle"></i> Lipid Profile (9)</li>
                        <li><i class="fa-solid fa-check-circle"></i> Liver Function Test / LFT (12)</li>
                        <li><i class="fa-solid fa-check-circle"></i> Thyroid Profile Total (3)</li>
                        <li><i class="fa-solid fa-check-circle"></i> HBA1C (2) & DHEAS (1)</li>
                        <li><i class="fa-solid fa-check-circle"></i> Blood Glucose Fasting (1)</li>
                    </ul>
                    
                    <a href="index.php#appointment" class="btn btn-outline-primary fw-bold rounded-pill w-100 py-2">Book Now</a>
                </div>
            </div>

            <!-- 4. PCOD Profile Test -->
            <div class="col-lg-4 col-md-6">
                <div class="package-card shadow-sm">
                    <div class="discount-badge">SAVE 53%</div>
                    <h4 class="fw-bold text-dark mb-3">PCOD Profile Test</h4>
                    
                    <div class="price-block text-center">
                        <span class="text-muted small d-block mb-1">As low as</span>
                        <div class="d-flex align-items-end justify-content-center gap-2">
                            <h2 class="fw-bold text-primary mb-0">₹2300</h2>
                            <span class="text-muted text-decoration-line-through mb-1">₹4998</span>
                        </div>
                    </div>
                    
                    <h6 class="fw-bold text-dark mb-3">Test Parameters Include:</h6>
                    <ul class="list-unstyled param-list">
                        <li><i class="fa-solid fa-check-circle"></i> Complete Blood Count (CBC)</li>
                        <li><i class="fa-solid fa-check-circle"></i> HbA1c & Glucose Fasting</li>
                        <li><i class="fa-solid fa-check-circle"></i> LH, FSH, Prolactin</li>
                        <li><i class="fa-solid fa-check-circle"></i> Testosterone Total</li>
                        <li><i class="fa-solid fa-check-circle"></i> TSH 3rd Generation</li>
                    </ul>
                    
                    <a href="index.php#appointment" class="btn btn-outline-primary fw-bold rounded-pill w-100 py-2">Book Now</a>
                </div>
            </div>

            <!-- 5. Healthy Heart Package -->
            <div class="col-lg-4 col-md-6">
                <div class="package-card shadow-sm border-danger border-2">
                    <div class="discount-badge">SAVE 53%</div>
                    <h4 class="fw-bold text-dark mb-3"><i class="fa-solid fa-heart-pulse text-danger me-2"></i>Healthy Heart Package</h4>
                    
                    <div class="price-block text-center">
                        <span class="text-muted small d-block mb-1">As low as</span>
                        <div class="d-flex align-items-end justify-content-center gap-2">
                            <h2 class="fw-bold text-danger mb-0">₹1850</h2>
                            <span class="text-muted text-decoration-line-through mb-1">₹3997</span>
                        </div>
                    </div>
                    
                    <h6 class="fw-bold text-dark mb-3">Test Parameters Include:</h6>
                    <ul class="list-unstyled param-list">
                        <li><i class="fa-solid fa-check-circle"></i> HsCRP (High Sensitivity C Reactive Protein)</li>
                        <li><i class="fa-solid fa-check-circle"></i> Kidney Function Test / KFT (10)</li>
                        <li><i class="fa-solid fa-check-circle"></i> Complete Hemogram / CBC (27)</li>
                        <li><i class="fa-solid fa-check-circle"></i> Liver Function Test / LFT (12)</li>
                        <li><i class="fa-solid fa-check-circle"></i> Lipid Profile (9)</li>
                        <li><i class="fa-solid fa-check-circle"></i> ECG at Home</li>
                    </ul>
                    
                    <a href="index.php#appointment" class="btn btn-danger fw-bold rounded-pill w-100 shadow-sm py-2">Book Now</a>
                </div>
            </div>

            <!-- 6. Thyroid Preventive Care -->
            <div class="col-lg-4 col-md-6">
                <div class="package-card shadow-sm">
                    <div class="discount-badge">SAVE 55%</div>
                    <h4 class="fw-bold text-dark mb-3">Thyroid Preventive Care</h4>
                    
                    <div class="price-block text-center">
                        <span class="text-muted small d-block mb-1">As low as</span>
                        <div class="d-flex align-items-end justify-content-center gap-2">
                            <h2 class="fw-bold text-primary mb-0">₹500</h2>
                            <span class="text-muted text-decoration-line-through mb-1">₹1122</span>
                        </div>
                    </div>
                    
                    <h6 class="fw-bold text-dark mb-3">Test Parameters Include:</h6>
                    <ul class="list-unstyled param-list">
                        <li><i class="fa-solid fa-check-circle"></i> Thyroid Profile Total (3)</li>
                        <li><i class="fa-solid fa-check-circle"></i> Lipid Profile (9)</li>
                    </ul>
                    
                    <a href="index.php#appointment" class="btn btn-outline-primary fw-bold rounded-pill w-100 py-2">Book Now</a>
                </div>
            </div>

            <!-- 7. Cancer Screening - Female -->
            <div class="col-lg-4 col-md-6">
                <div class="package-card shadow-sm">
                    <div class="discount-badge" style="background: #9333ea;">SAVE 76%</div>
                    <h4 class="fw-bold text-dark mb-3">Cancer Screening - Female</h4>
                    
                    <div class="price-block text-center">
                        <span class="text-muted small d-block mb-1">As low as</span>
                        <div class="d-flex align-items-end justify-content-center gap-2">
                            <h2 class="fw-bold text-primary mb-0" style="color: #9333ea !important;">₹800</h2>
                            <span class="text-muted text-decoration-line-through mb-1">₹3355</span>
                        </div>
                    </div>
                    
                    <h6 class="fw-bold text-dark mb-3">Test Parameters Include:</h6>
                    <ul class="list-unstyled param-list">
                        <li><i class="fa-solid fa-check-circle"></i> CA 125</li>
                        <li><i class="fa-solid fa-check-circle"></i> CA 15.3</li>
                        <li><i class="fa-solid fa-check-circle"></i> CEA</li>
                    </ul>
                    
                    <a href="index.php#appointment" class="btn btn-outline-primary fw-bold rounded-pill w-100 py-2" style="color: #9333ea; border-color: #9333ea;">Book Now</a>
                </div>
            </div>

            <!-- 8. Cancer Screening - Male -->
            <div class="col-lg-4 col-md-6">
                <div class="package-card shadow-sm">
                    <div class="discount-badge" style="background: #0ea5e9;">SAVE 75%</div>
                    <h4 class="fw-bold text-dark mb-3">Cancer Screening - Male</h4>
                    
                    <div class="price-block text-center">
                        <span class="text-muted small d-block mb-1">As low as</span>
                        <div class="d-flex align-items-end justify-content-center gap-2">
                            <h2 class="fw-bold text-primary mb-0" style="color: #0ea5e9 !important;">₹800</h2>
                            <span class="text-muted text-decoration-line-through mb-1">₹3235</span>
                        </div>
                    </div>
                    
                    <h6 class="fw-bold text-dark mb-3">Test Parameters Include:</h6>
                    <ul class="list-unstyled param-list">
                        <li><i class="fa-solid fa-check-circle"></i> CA 19.9</li>
                        <li><i class="fa-solid fa-check-circle"></i> CEA</li>
                        <li><i class="fa-solid fa-check-circle"></i> PSA</li>
                    </ul>
                    
                    <a href="index.php#appointment" class="btn btn-outline-primary fw-bold rounded-pill w-100 py-2" style="color: #0ea5e9; border-color: #0ea5e9;">Book Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. Partners & Trust -->
<section class="py-4 border-top border-bottom bg-white">
    <div class="container text-center">
        <p class="text-muted fw-bold mb-3 text-uppercase tracking-wider small">Our Fulfill Partners</p>
        <div class="d-flex flex-wrap justify-content-center gap-4 align-items-center opacity-75">
            <h5 class="mb-0 fw-bold"><i class="fa-solid fa-user-nurse text-primary me-2"></i> need-nurse-care-at-home</h5>
            <h5 class="mb-0 fw-bold"><i class="fa-solid fa-user-nurse text-primary me-2"></i> need-nurse-care-at-home</h5>
            <h5 class="mb-0 fw-bold"><i class="fa-solid fa-user-nurse text-primary me-2"></i> need-nurse-care-at-home</h5>
        </div>
    </div>
</section>

<!-- 4. FAQs -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">FAQs on Health Checkup at Home</h2>
            <div class="mx-auto mt-3 mb-4" style="width: 60px; height: 4px; background-color: var(--primary-color); border-radius: 2px;"></div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion shadow-sm rounded-4 overflow-hidden" id="faqAccordion">
                    <div class="accordion-item border-0 border-bottom">
                        <h2 class="accordion-header">
                            <button class="accordion-button fw-bold px-4 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                Q1. What is arthritis screening?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body px-4 text-muted small">
                                Arthritis screening involves specific blood tests like Rheumatoid Factor (RA) to detect joint inflammation and related autoimmune conditions early.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 border-bottom">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold px-4 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                Q2. Who is this Good Health Test Screening recommended for?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body px-4 text-muted small">
                                The Good Health Test is recommended for anyone looking for a comprehensive baseline overview of their health, including liver, kidney, and blood cell counts.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 border-bottom">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold px-4 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                Q3. What exactly is Polycystic Ovarian Syndrome (PCOS)?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body px-4 text-muted small">
                                PCOS is a hormonal disorder common among women of reproductive age, characterized by prolonged menstrual periods or excess male hormone (androgen) levels. Our PCOD profile checks the necessary hormone levels to aid in diagnosis.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 border-bottom">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold px-4 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                Q4. What is a Thyroid preventive test for?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body px-4 text-muted small">
                                It measures the levels of thyroid hormones (T3, T4) and TSH in your blood to determine how well your thyroid gland is functioning, which impacts your body\'s metabolism.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold px-4 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                Q5. Why should women consider having this test?
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body px-4 text-muted small">
                                Women have specific health needs as they balance work, life, and biological changes. Packages like the Working Women Test help monitor vital parameters like lipids, thyroid, and blood sugar, ensuring sustained health.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

';
?>
