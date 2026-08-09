<?php
// DO NOT set $full_page_override = true;
$hide_default_welcome = true;

$frontend_custom_sections = '

<style>
:root {
    --primary-color: #0d6efd; /* Blue */
    --primary-dark: #0036a8;
    --dark-bg: #1e293b;
    --light-bg: #f8fafc;
    --border-color: rgba(0,0,0,0.05);
}

body {
    font-family: "Inter", sans-serif;
}

/* Common Components */
.feat-card, .price-card, .type-card {
    background: white;
    border: 1px solid var(--border-color);
    border-radius: 16px;
    padding: 2rem;
    transition: all 0.3s ease;
    height: 100%;
}

.feat-card:hover, .price-card:hover, .type-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.08);
}

.icon-box {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(13, 110, 253, 0.1);
    color: var(--primary-color);
    font-size: 24px;
    margin-bottom: 1.5rem;
}

/* Step Numbers */
.step-num {
    width: 45px;
    height: 45px;
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
<section class="py-5 bg-light" style="background: linear-gradient(135deg, #f0f4ff 0%, #ffffff 100%);">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-7 pe-lg-5 mb-5 mb-lg-0">
                <span class="badge bg-primary px-3 py-2 rounded-pill mb-4 fw-bold shadow-sm">Home Sleep Diagnostics</span>
                <h1 class="display-5 fw-bold mb-4 text-dark">Sleep Study / Polysomnography Test at Home</h1>
                <p class="lead mb-4 text-muted" style="opacity: 0.9;">Sleep Tests at home are the most convenient and accurate way to diagnose sleep disorders. Quality sleep is critical — poor sleep raises your risk of heart disease, stroke, obesity, and dementia.</p>
                <p class="text-muted mb-5">We bring clinically accurate Sleep Study (Polysomnography) right to your bedroom — with a certified technician setup, expert doctor-interpreted report delivered in 24 hours, and pricing starting from ₹2,000. We work with India\'s most trusted sleep specialists and are recommended by leading doctors.</p>
                
                <div class="d-flex flex-wrap gap-3">
                    <a href="index.php#appointment" class="btn btn-primary btn-lg fw-bold px-5 rounded-pill shadow-sm">
                        Free Consultation
                    </a>
                    <a href="https://wa.me/918725024124" target="_blank" class="btn btn-success btn-lg fw-bold px-5 rounded-pill shadow-sm">
                        <i class="fa-brands fa-whatsapp me-2"></i> WhatsApp Us
                    </a>
                </div>
            </div>
            <div class="col-lg-5 text-center">
                <div class="bg-white rounded-4 shadow-lg p-5 border">
                    <i class="fa-solid fa-bed text-primary mb-4" style="font-size: 80px;"></i>
                    <h4 class="fw-bold text-dark">Sleep Peacefully</h4>
                    <p class="text-muted small">Hospital-grade diagnostics in the comfort of your own bedroom.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. Symptoms -->
<section class="py-5">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">Do You Have These Sleep Apnea Symptoms?</h2>
            <div class="mx-auto mt-3 mb-4" style="width: 60px; height: 4px; background-color: var(--primary-color); border-radius: 2px;"></div>
            <p class="text-muted mx-auto" style="max-width: 700px;">If you or your loved one experiences any of these signs, a home sleep study is strongly recommended.</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="feat-card">
                    <div class="icon-box"><i class="fa-solid fa-volume-high"></i></div>
                    <h5 class="fw-bold mb-2">Loud Snoring or Gasping</h5>
                    <p class="text-muted small mb-0">Your sleep partner reports loud snoring, snorting, or gasping — the most common sign of obstructive sleep apnea.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feat-card">
                    <div class="icon-box"><i class="fa-solid fa-lungs"></i></div>
                    <h5 class="fw-bold mb-2">Pauses in Breathing</h5>
                    <p class="text-muted small mb-0">Temporarily stopping breathing during sleep — the hallmark symptom that needs immediate diagnosis.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feat-card">
                    <div class="icon-box"><i class="fa-solid fa-bed-pulse"></i></div>
                    <h5 class="fw-bold mb-2">Excessive Daytime Sleepiness</h5>
                    <p class="text-muted small mb-0">Feeling very drowsy or fatigued during the day despite sleeping enough hours at night.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feat-card">
                    <div class="icon-box"><i class="fa-solid fa-heart-pulse"></i></div>
                    <h5 class="fw-bold mb-2">Heart or BP Conditions</h5>
                    <p class="text-muted small mb-0">People with heart failure, atrial fibrillation, or high blood pressure have significantly higher sleep apnea risk.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feat-card">
                    <div class="icon-box"><i class="fa-solid fa-face-frown"></i></div>
                    <h5 class="fw-bold mb-2">Depression or Mood Changes</h5>
                    <p class="text-muted small mb-0">Untreated sleep apnea can trigger or worsen depression, anxiety, and irritability over time.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feat-card">
                    <div class="icon-box"><i class="fa-solid fa-moon"></i></div>
                    <h5 class="fw-bold mb-2">Insomnia / Restless Sleep</h5>
                    <p class="text-muted small mb-0">Difficulty falling asleep, staying asleep, or waking up frequently through the night.</p>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <a href="tel:+918725024124" class="btn btn-outline-primary fw-bold px-4 rounded-pill">
                <i class="fa-solid fa-phone me-2"></i> Book Sleep Test — (+91) 8725024124
            </a>
        </div>
    </div>
</section>

<!-- 3. Types of Sleep Study -->
<section class="py-5" style="background-color: var(--light-bg);">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">Types of Sleep Study We Offer</h2>
            <div class="mx-auto mt-3 mb-4" style="width: 60px; height: 4px; background-color: var(--primary-color); border-radius: 2px;"></div>
            <p class="text-muted mx-auto" style="max-width: 600px;">Choose the right test based on your doctor\'s advice and symptoms. Our team will guide you.</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="type-card text-center d-flex flex-column">
                    <span class="badge bg-secondary mb-3 mx-auto">Level 3 — Most Common</span>
                    <h4 class="fw-bold text-dark mb-3">Home Sleep Apnea Test (HSAT)</h4>
                    <p class="text-muted small mb-4 flex-grow-1">Portable device worn overnight at home. Monitors airflow, breathing effort, oxygen saturation, and heart rate. Ideal for patients with suspected obstructive sleep apnea (OSA) referred by a doctor.</p>
                    <h5 class="fw-bold text-primary mb-0">₹2,000 – ₹4,500</h5>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="type-card text-center d-flex flex-column border-primary border-2 shadow">
                    <span class="badge bg-primary mb-3 mx-auto">Level 2 — Full Study / Most Popular</span>
                    <h4 class="fw-bold text-dark mb-3">Ambulatory PSG at Home</h4>
                    <p class="text-muted small mb-4 flex-grow-1">Hospital-grade full Polysomnography at home. Measures brain waves (EEG), eye movement, muscle tone, heart rate, oxygen levels, body position, and breathing — every parameter a sleep lab captures.</p>
                    <h5 class="fw-bold text-primary mb-0">₹4,500 – ₹7,000</h5>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="type-card text-center d-flex flex-column">
                    <span class="badge bg-secondary mb-3 mx-auto">Titration Study</span>
                    <h4 class="fw-bold text-dark mb-3">CPAP / BiPAP Titration</h4>
                    <p class="text-muted small mb-4 flex-grow-1">For patients already diagnosed with sleep apnea who need their CPAP or BiPAP pressure settings calibrated for maximum therapy effectiveness. Includes overnight pressure adjustment and compliance data.</p>
                    <h5 class="fw-bold text-primary mb-0">₹5,000 – ₹9,000</h5>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. How We Work -->
<section class="py-5">
    <div class="container py-4">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-5 mb-lg-0 pe-lg-5">
                <h2 class="fw-bold text-dark">How We Work</h2>
                <div class="mt-3 mb-4" style="width: 60px; height: 4px; background-color: var(--primary-color); border-radius: 2px;"></div>
                <p class="text-muted lead mb-5">Book to report in 4 simple steps — all done at your home.</p>
                <a href="tel:+918725024124" class="btn btn-primary fw-bold px-4 rounded-pill shadow-sm d-none d-lg-inline-block">
                    Book Your Sleep Test — (+91) 8725024124
                </a>
            </div>
            
            <div class="col-lg-7">
                <div class="d-flex align-items-start mb-4">
                    <div class="step-num">1</div>
                    <div>
                        <h5 class="fw-bold text-dark mb-2">Book & Schedule</h5>
                        <p class="text-muted small mb-0">Book via the online form or call us. Choose your preferred evening time slot. Advance payment confirms your booking instantly.</p>
                    </div>
                </div>
                <div class="d-flex align-items-start mb-4">
                    <div class="step-num">2</div>
                    <div>
                        <h5 class="fw-bold text-dark mb-2">Test Setup at Home</h5>
                        <p class="text-muted small mb-0">Our certified technician visits your home, explains the procedure clearly, sets up all equipment, and leaves you to sleep normally in your own bed.</p>
                    </div>
                </div>
                <div class="d-flex align-items-start mb-4">
                    <div class="step-num">3</div>
                    <div>
                        <h5 class="fw-bold text-dark mb-2">Equipment Collection</h5>
                        <p class="text-muted small mb-0">Next morning the technician returns to collect all the equipment and retrieve the overnight sleep data recorded by the device.</p>
                    </div>
                </div>
                <div class="d-flex align-items-start">
                    <div class="step-num">4</div>
                    <div>
                        <h5 class="fw-bold text-dark mb-2">Report & Results</h5>
                        <p class="text-muted small mb-0">Your detailed report, interpreted by a qualified sleep specialist, is delivered to your email & WhatsApp within 24 hours of the test.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. Pricing & Benefits -->
<section class="py-5" style="background-color: var(--dark-bg);">
    <div class="container py-4">
        <div class="text-center mb-5 text-white">
            <h2 class="fw-bold">Sleep Test Pricing at Home</h2>
            <div class="mx-auto mt-3 mb-4" style="width: 60px; height: 4px; background-color: var(--primary-color); border-radius: 2px;"></div>
            <p class="opacity-75 mx-auto" style="max-width: 600px;">Transparent, all-inclusive pricing. No hidden charges. Final cost confirmed at time of booking.</p>
        </div>
        
        <div class="row g-4 justify-content-center mb-5">
            <div class="col-lg-4 col-md-6">
                <div class="price-card text-center d-flex flex-column">
                    <h5 class="fw-bold text-dark mb-3">Basic Home Sleep Test</h5>
                    <h3 class="fw-bold text-primary mb-1">₹2,000</h3>
                    <p class="text-muted small mb-4 border-bottom pb-3">to ₹4,500</p>
                    <ul class="list-unstyled text-muted small text-start mb-4 flex-grow-1">
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Level 3 HSAT device</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Oxygen & airflow monitoring</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> AHI severity score</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Technician setup at home</li>
                        <li class="mb-0"><i class="fa-solid fa-check text-success me-2"></i> Digital report in 24–48 hrs</li>
                    </ul>
                    <a href="index.php#appointment" class="btn btn-outline-primary rounded-pill fw-bold w-100">Book Now</a>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="price-card text-center d-flex flex-column border-primary border-3 shadow-lg position-relative" style="transform: scale(1.05); z-index: 2;">
                    <div class="position-absolute top-0 start-50 translate-middle">
                        <span class="badge bg-primary px-3 py-2 rounded-pill">Most Recommended</span>
                    </div>
                    <h5 class="fw-bold text-dark mb-3 mt-2">Advanced PSG at Home</h5>
                    <h3 class="fw-bold text-primary mb-1">₹4,500</h3>
                    <p class="text-muted small mb-4 border-bottom pb-3">to ₹7,000</p>
                    <ul class="list-unstyled text-muted small text-start mb-4 flex-grow-1">
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Full Level 2 Polysomnography</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> EEG, EOG, EMG, SpO2</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Sleep stage analysis</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Expert doctor interpretation</li>
                        <li class="mb-0"><i class="fa-solid fa-check text-success me-2"></i> Report in 24 hrs</li>
                    </ul>
                    <a href="index.php#appointment" class="btn btn-primary rounded-pill fw-bold w-100 shadow-sm">Book Now</a>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="price-card text-center d-flex flex-column">
                    <h5 class="fw-bold text-dark mb-3">CPAP / BiPAP Titration</h5>
                    <h3 class="fw-bold text-primary mb-1">₹5,000</h3>
                    <p class="text-muted small mb-4 border-bottom pb-3">to ₹9,000</p>
                    <ul class="list-unstyled text-muted small text-start mb-4 flex-grow-1">
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Pressure calibration study</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> For diagnosed OSA patients</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> CPAP/BiPAP equipment support</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Compliance data report</li>
                        <li class="mb-0"><i class="fa-solid fa-check text-success me-2"></i> Follow-up guidance included</li>
                    </ul>
                    <a href="index.php#appointment" class="btn btn-outline-primary rounded-pill fw-bold w-100">Book Now</a>
                </div>
            </div>
        </div>
        
        <p class="text-center text-white opacity-75 small mb-0"><i class="fa-solid fa-circle-info me-2"></i> Prices are indicative and vary by location and test type. Call (+91) 8725024124 for an exact quote.</p>
    </div>
</section>

<!-- 6. Benefits & Trust -->
<section class="py-5 bg-light">
    <div class="container py-4">
        <div class="row align-items-center mb-5">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <h2 class="fw-bold text-dark">Benefits of Sleep Study Test at Home</h2>
                <div class="mt-3 mb-4" style="width: 60px; height: 4px; background-color: var(--primary-color); border-radius: 2px;"></div>
            </div>
            <div class="col-lg-7">
                <div class="row g-3">
                    <div class="col-md-6"><div class="d-flex align-items-center bg-white p-3 rounded-3 shadow-sm border"><i class="fa-solid fa-couch text-primary me-3 fs-4"></i> <div><h6 class="fw-bold mb-0">Comfort</h6><small class="text-muted">Performed in your own bed</small></div></div></div>
                    <div class="col-md-6"><div class="d-flex align-items-center bg-white p-3 rounded-3 shadow-sm border"><i class="fa-solid fa-location-dot text-primary me-3 fs-4"></i> <div><h6 class="fw-bold mb-0">Convenience</h6><small class="text-muted">Easily accessible</small></div></div></div>
                    <div class="col-md-6"><div class="d-flex align-items-center bg-white p-3 rounded-3 shadow-sm border"><i class="fa-solid fa-tags text-primary me-3 fs-4"></i> <div><h6 class="fw-bold mb-0">Affordability</h6><small class="text-muted">More affordable than lab tests</small></div></div></div>
                    <div class="col-md-6"><div class="d-flex align-items-center bg-white p-3 rounded-3 shadow-sm border"><i class="fa-solid fa-shield text-primary me-3 fs-4"></i> <div><h6 class="fw-bold mb-0">Non-Invasive</h6><small class="text-muted">Zero risk involved</small></div></div></div>
                    <div class="col-md-6"><div class="d-flex align-items-center bg-white p-3 rounded-3 shadow-sm border"><i class="fa-solid fa-clock text-primary me-3 fs-4"></i> <div><h6 class="fw-bold mb-0">Flexible</h6><small class="text-muted">Choose your own timing slot</small></div></div></div>
                </div>
            </div>
        </div>
        
        <div class="mt-5 pt-5 border-top">
            <div class="text-center mb-5">
                <h2 class="fw-bold text-dark">Why Families Trust Us for Sleep Study</h2>
                <div class="mx-auto mt-3 mb-4" style="width: 60px; height: 4px; background-color: var(--primary-color); border-radius: 2px;"></div>
                <p class="text-muted mx-auto" style="max-width: 600px;">We are not just a booking platform — we are a clinical team delivering hospital-grade sleep studies at your doorstep.</p>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="feat-card">
                        <h6 class="fw-bold text-primary mb-2"><i class="fa-solid fa-user-doctor me-2"></i> Certified Technicians</h6>
                        <p class="text-muted small mb-0">Our technicians are trained and certified in polysomnography setup, ensuring accurate data capture.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feat-card">
                        <h6 class="fw-bold text-primary mb-2"><i class="fa-solid fa-file-medical me-2"></i> Report by Specialists</h6>
                        <p class="text-muted small mb-0">Every report is interpreted by qualified sleep medicine doctors — not raw data dumps.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feat-card">
                        <h6 class="fw-bold text-primary mb-2"><i class="fa-solid fa-laptop-medical me-2"></i> Hospital-Grade Equipment</h6>
                        <p class="text-muted small mb-0">We use the same diagnostic equipment found in top sleep labs, ensuring AASM compliance.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feat-card">
                        <h6 class="fw-bold text-primary mb-2"><i class="fa-solid fa-bed me-2"></i> Natural Sleep Environment</h6>
                        <p class="text-muted small mb-0">Sleeping in your own bed often produces more accurate results than a hospital setting.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feat-card">
                        <h6 class="fw-bold text-primary mb-2"><i class="fa-solid fa-calendar-check me-2"></i> Fast Booking</h6>
                        <p class="text-muted small mb-0">No long waiting lists. Book your sleep test at a time that suits your schedule, including weekends.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feat-card">
                        <h6 class="fw-bold text-primary mb-2"><i class="fa-solid fa-certificate me-2"></i> 12+ Years Experience</h6>
                        <p class="text-muted small mb-0">ISO certified healthcare provider with 10,000+ sleep studies completed successfully across India.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 7. Report Details & Final CTA -->
<div class="rounded-4 shadow-lg my-5 mx-3 mx-md-5" style="background: white; border: 1px solid var(--border-color);">
    <div class="row g-0">
        <div class="col-lg-6 p-5">
            <h3 class="fw-bold text-dark mb-4">What Your Sleep Study Report Covers</h3>
            <p class="text-muted small mb-4">A comprehensive clinical report prepared by a qualified sleep specialist, delivered digitally within 24 hours.</p>
            <ul class="list-unstyled text-muted small">
                <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-primary me-3 mt-1"></i> <span><strong>AHI (Apnea-Hypopnea Index)</strong> — your sleep apnea severity score</span></li>
                <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-primary me-3 mt-1"></i> <span><strong>Blood Oxygen Saturation (SpO2)</strong> levels across the entire night</span></li>
                <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-primary me-3 mt-1"></i> <span><strong>Sleep stages:</strong> Light, Deep (N3), and REM sleep cycle analysis</span></li>
                <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-primary me-3 mt-1"></i> <span><strong>Heart rate patterns</strong> and irregular rhythms during sleep</span></li>
                <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-primary me-3 mt-1"></i> <span><strong>Body position</strong> and movement frequency through the night</span></li>
                <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-primary me-3 mt-1"></i> <span><strong>Snoring intensity</strong>, duration, and frequency analysis</span></li>
                <li class="mb-0 d-flex align-items-start"><i class="fa-solid fa-check text-primary me-3 mt-1"></i> <span>Doctor\'s interpretation with diagnosis and treatment recommendations</span></li>
            </ul>
        </div>
        <div class="col-lg-6 p-5 bg-primary rounded-end-lg-4 text-white d-flex flex-column justify-content-center text-center position-relative overflow-hidden" style="border-radius: 0 1rem 1rem 0;">
            <!-- Adjust border radius for mobile stacking -->
            <style>
                @media (max-width: 991px) {
                    .rounded-end-lg-4 {
                        border-radius: 0 0 1rem 1rem !important;
                    }
                }
            </style>
            <div class="position-absolute top-0 end-0 opacity-10 p-4">
                <i class="fa-solid fa-file-waveform" style="font-size: 150px;"></i>
            </div>
            <div class="position-relative z-1">
                <div class="bg-white text-primary fw-bold px-3 py-1 rounded-pill d-inline-block mb-3">Report in 24 Hours</div>
                <h3 class="fw-bold mb-3">Get Clinically Accurate Results Fast</h3>
                <p class="opacity-75 mb-4">Delivered to your email & WhatsApp. Share directly with your physician for next steps.</p>
                <a href="tel:+918725024124" class="btn btn-light btn-lg fw-bold px-5 py-3 rounded-pill shadow-sm text-primary">
                    <i class="fa-solid fa-phone me-2"></i> Book Sleep Test
                </a>
            </div>
        </div>
    </div>
</div>

';
?>
