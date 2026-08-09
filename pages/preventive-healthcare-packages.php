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

.step-card {
    background: white;
    border: 1px solid var(--border-color);
    border-radius: 16px;
    padding: 2rem;
    height: 100%;
    position: relative;
    z-index: 1;
    transition: all 0.3s ease;
}

.step-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.08);
}

.step-number-badge {
    position: absolute;
    top: -20px;
    left: 20px;
    background: var(--primary-color);
    color: white;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    box-shadow: 0 4px 10px rgba(13, 110, 253, 0.3);
}

.service-row {
    background: white;
    border: 1px solid var(--border-color);
    border-radius: 12px;
    padding: 1.5rem;
    margin-bottom: 1rem;
    transition: all 0.2s ease;
}

.service-row:hover {
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    border-color: var(--primary-color);
}

.addon-card {
    background: white;
    border: 1px dashed var(--primary-color);
    border-radius: 12px;
    padding: 1.5rem;
    text-align: center;
    height: 100%;
}
</style>

<!-- 1. Hero Section -->
<section class="py-5" style="background: linear-gradient(135deg, #eef2ff 0%, #ffffff 100%);">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0 pe-lg-5">
                <span class="badge bg-primary px-3 py-2 rounded-pill mb-4 fw-bold shadow-sm">Top Quality & Personalised</span>
                <h1 class="display-4 fw-bold mb-4 text-dark">Preventive Healthcare Package</h1>
                <p class="lead text-muted mb-4">Choose from our multiple range of options customized according to your health needs!</p>
                <p class="text-muted mb-4">With our 12+ years of experience in the industry, our packages are designed to make healthcare services user-friendly. Just by subscribing to the package, you get hold of all your diet concerns, health consultation, preventive tests, nursing visits, and a health buddy to assist you with everything from hospital admission to insurance claims.</p>
                <div class="d-flex align-items-center gap-3 mb-5">
                    <div class="bg-white px-4 py-2 rounded-pill shadow-sm border fw-bold text-dark"><i class="fa-solid fa-star text-warning me-2"></i> 4.7+ Rating</div>
                    <div class="bg-white px-4 py-2 rounded-pill shadow-sm border fw-bold text-dark"><i class="fa-solid fa-users text-primary me-2"></i> 12+ Years Exp.</div>
                </div>
                <h4 class="fw-bold text-dark mb-4">A happier, healthier you is a click away. Subscribe now!</h4>
            </div>
            
            <!-- Appointment Form -->
            <div class="col-lg-6">
                <div class="bg-white p-5 rounded-4 shadow-lg border">
                    <h3 class="fw-bold text-dark mb-4 text-center">Make an appointment now!</h3>
                    <form action="#" method="POST">
                        <div class="mb-3">
                            <label class="form-label text-muted small fw-bold">Your Name*</label>
                            <input type="text" class="form-control form-control-lg bg-light" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-muted small fw-bold">Phone Number*</label>
                            <input type="tel" class="form-control form-control-lg bg-light" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-muted small fw-bold">City*</label>
                            <input type="text" class="form-control form-control-lg bg-light" required>
                        </div>
                        <div class="mb-4">
                            <label class="form-label text-muted small fw-bold">Brief message about your need</label>
                            <textarea class="form-control form-control-lg bg-light" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg w-100 fw-bold rounded-pill shadow-sm">Submit Request</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. How it works (Steps) -->
<section class="py-5 bg-light">
    <div class="container py-4">
        <div class="text-center mb-5">
            <span class="badge bg-secondary mb-2">Validity: 1 year</span>
            <h2 class="fw-bold text-dark">Customized healthcare package for your needs</h2>
            <div class="mx-auto mt-3 mb-4" style="width: 60px; height: 4px; background-color: var(--primary-color); border-radius: 2px;"></div>
        </div>
        
        <div class="row g-4 pt-4">
            <div class="col-lg-4">
                <div class="step-card">
                    <div class="step-number-badge">1</div>
                    <h5 class="fw-bold text-dark mt-3 mb-3">Health Checkup</h5>
                    <p class="text-muted small mb-0">Firstly, a specific comprehensive health checkup is done at your convenience.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="step-card">
                    <div class="step-number-badge">2</div>
                    <h5 class="fw-bold text-dark mt-3 mb-3">Report Sharing</h5>
                    <p class="text-muted small mb-0">Your health checkup report is shared with a family medicine doctor and an online appointment gets scheduled after that.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="step-card">
                    <div class="step-number-badge">3</div>
                    <h5 class="fw-bold text-dark mt-3 mb-3">Doctor\'s Recommendation</h5>
                    <p class="text-muted small mb-0">The family medicine doctor guides and suggests the most suitable healthcare package meeting the individual\'s unique needs.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. Package Details (Table/Rows) -->
<section class="py-5">
    <div class="container py-4">
        <h3 class="fw-bold text-dark mb-5 text-center">Package Inclusions (Yearly)</h3>
        
        <!-- Headers -->
        <div class="row d-none d-lg-flex mb-3 px-3">
            <div class="col-lg-6"><h6 class="fw-bold text-muted text-uppercase small mb-0">Service Details</h6></div>
            <div class="col-lg-2 text-center"><h6 class="fw-bold text-muted text-uppercase small mb-0">Quantity</h6></div>
            <div class="col-lg-2 text-center"><h6 class="fw-bold text-muted text-uppercase small mb-0">MRP</h6></div>
            <div class="col-lg-2 text-end"><h6 class="fw-bold text-muted text-uppercase small mb-0">Offered Price</h6></div>
        </div>
        
        <!-- Rows -->
        <div class="service-row">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-3 mb-lg-0">
                    <h5 class="fw-bold text-dark mb-1">Health Concierge</h5>
                    <p class="text-muted small mb-0">A dedicated healthcare professional will be appointed to you for 4-5 hours...</p>
                </div>
                <div class="col-6 col-lg-2 text-lg-center">
                    <span class="d-lg-none text-muted small d-block">Qty:</span>
                    <span class="badge bg-light text-dark border fs-6">6 Visits</span>
                </div>
                <div class="col-6 col-lg-2 text-end text-lg-center">
                    <span class="d-lg-none text-muted small d-block">MRP:</span>
                    <span class="text-muted text-decoration-line-through">₹3000</span>
                </div>
                <div class="col-12 col-lg-2 text-end mt-2 mt-lg-0">
                    <h4 class="fw-bold text-primary mb-0">₹780</h4>
                </div>
            </div>
        </div>
        
        <div class="service-row">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-3 mb-lg-0">
                    <h5 class="fw-bold text-dark mb-1">Nursing Visit</h5>
                    <p class="text-muted small mb-0">The Nursing Visit is of around 45 min - 3 hour which includes wound dressing...</p>
                </div>
                <div class="col-6 col-lg-2 text-lg-center">
                    <span class="d-lg-none text-muted small d-block">Qty:</span>
                    <span class="badge bg-light text-dark border fs-6">12 Visits</span>
                </div>
                <div class="col-6 col-lg-2 text-end text-lg-center">
                    <span class="d-lg-none text-muted small d-block">MRP:</span>
                    <span class="text-muted text-decoration-line-through">₹7200</span>
                </div>
                <div class="col-12 col-lg-2 text-end mt-2 mt-lg-0">
                    <h4 class="fw-bold text-primary mb-0">₹3120</h4>
                </div>
            </div>
        </div>
        
        <div class="service-row">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-3 mb-lg-0">
                    <h5 class="fw-bold text-dark mb-1">Doctor Visit</h5>
                    <p class="text-muted small mb-0">People who are unable to visit a hospital or prefer doctor visit at home...</p>
                </div>
                <div class="col-6 col-lg-2 text-lg-center">
                    <span class="d-lg-none text-muted small d-block">Qty:</span>
                    <span class="badge bg-light text-dark border fs-6">4 Visits</span>
                </div>
                <div class="col-6 col-lg-2 text-end text-lg-center">
                    <span class="d-lg-none text-muted small d-block">MRP:</span>
                    <span class="text-muted text-decoration-line-through">₹10000</span>
                </div>
                <div class="col-12 col-lg-2 text-end mt-2 mt-lg-0">
                    <h4 class="fw-bold text-primary mb-0">₹5200</h4>
                </div>
            </div>
        </div>
        
        <div class="service-row">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-3 mb-lg-0">
                    <h5 class="fw-bold text-dark mb-1">Doctor Teleconsultation</h5>
                    <p class="text-muted small mb-0">By booking a prior appointment, our teleconsultation services help you...</p>
                </div>
                <div class="col-6 col-lg-2 text-lg-center">
                    <span class="d-lg-none text-muted small d-block">Qty:</span>
                    <span class="badge bg-light text-dark border fs-6">8 Sessions</span>
                </div>
                <div class="col-6 col-lg-2 text-end text-lg-center">
                    <span class="d-lg-none text-muted small d-block">MRP:</span>
                    <span class="text-muted text-decoration-line-through">₹9600</span>
                </div>
                <div class="col-12 col-lg-2 text-end mt-2 mt-lg-0">
                    <h4 class="fw-bold text-primary mb-0">₹3120</h4>
                </div>
            </div>
        </div>
        
        <div class="service-row">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-3 mb-lg-0">
                    <h5 class="fw-bold text-dark mb-1">Sample Collection</h5>
                    <p class="text-muted small mb-0">Our trained technician will arrive at your doorstep to collect blood samples...</p>
                </div>
                <div class="col-6 col-lg-2 text-lg-center">
                    <span class="d-lg-none text-muted small d-block">Qty:</span>
                    <span class="badge bg-light text-dark border fs-6">2 Visits</span>
                </div>
                <div class="col-6 col-lg-2 text-end text-lg-center">
                    <span class="d-lg-none text-muted small d-block">MRP:</span>
                    <span class="text-muted text-decoration-line-through">₹1798</span>
                </div>
                <div class="col-12 col-lg-2 text-end mt-2 mt-lg-0">
                    <h4 class="fw-bold text-primary mb-0">₹1036</h4>
                </div>
            </div>
        </div>
        
        <div class="service-row">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-3 mb-lg-0">
                    <h5 class="fw-bold text-dark mb-1">Physiotherapist</h5>
                    <p class="text-muted small mb-0">Our Physiotherapists personally visit you and perform physiotherapy at home...</p>
                </div>
                <div class="col-6 col-lg-2 text-lg-center">
                    <span class="d-lg-none text-muted small d-block">Qty:</span>
                    <span class="badge bg-light text-dark border fs-6">4 Sessions</span>
                </div>
                <div class="col-6 col-lg-2 text-end text-lg-center">
                    <span class="d-lg-none text-muted small d-block">MRP:</span>
                    <span class="text-muted text-decoration-line-through">₹3400</span>
                </div>
                <div class="col-12 col-lg-2 text-end mt-2 mt-lg-0">
                    <h4 class="fw-bold text-primary mb-0">₹1560</h4>
                </div>
            </div>
        </div>
        
        <div class="service-row">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-3 mb-lg-0">
                    <h5 class="fw-bold text-dark mb-1">Dietician</h5>
                    <p class="text-muted small mb-0">Our certified and trained dietitian offers personalized health assessment...</p>
                </div>
                <div class="col-6 col-lg-2 text-lg-center">
                    <span class="d-lg-none text-muted small d-block">Qty:</span>
                    <span class="badge bg-light text-dark border fs-6">4 Sessions</span>
                </div>
                <div class="col-6 col-lg-2 text-end text-lg-center">
                    <span class="d-lg-none text-muted small d-block">MRP:</span>
                    <span class="text-muted text-decoration-line-through">₹4000</span>
                </div>
                <div class="col-12 col-lg-2 text-end mt-2 mt-lg-0">
                    <h4 class="fw-bold text-primary mb-0">₹1040</h4>
                </div>
            </div>
        </div>
        
        <!-- Total Row -->
        <div class="row align-items-center mt-4 bg-primary bg-opacity-10 rounded-4 p-4 border border-primary">
            <div class="col-lg-6 mb-3 mb-lg-0">
                <h4 class="fw-bold text-dark mb-0">Total Package Value</h4>
                <p class="text-muted small mb-0">Total Quantity: 40 Services/Visits per year</p>
            </div>
            <div class="col-6 col-lg-3 text-lg-center">
                <span class="text-muted small d-block">Total MRP</span>
                <h4 class="fw-bold text-muted text-decoration-line-through mb-0">₹38,998</h4>
            </div>
            <div class="col-6 col-lg-3 text-end">
                <span class="text-primary fw-bold small d-block">Your Offered Price</span>
                <h2 class="fw-bold text-primary mb-0">₹15,856</h2>
            </div>
        </div>
    </div>
</section>

<!-- 4. Add-ons -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <h3 class="fw-bold text-dark mb-5 text-center">Enhance your package with these Add-ons</h3>
        <div class="row justify-content-center g-4">
            <div class="col-lg-3 col-md-4">
                <div class="addon-card">
                    <i class="fa-solid fa-x-ray fs-1 text-primary mb-3"></i>
                    <h5 class="fw-bold text-dark mb-2">X-ray at Home</h5>
                    <div class="d-flex align-items-center justify-content-center gap-2">
                        <h4 class="fw-bold text-primary mb-0">₹1950</h4>
                        <span class="text-muted small text-decoration-line-through">₹2500</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="addon-card">
                    <i class="fa-solid fa-heart-pulse fs-1 text-primary mb-3"></i>
                    <h5 class="fw-bold text-dark mb-2">ECG at Home</h5>
                    <div class="d-flex align-items-center justify-content-center gap-2">
                        <h4 class="fw-bold text-primary mb-0">₹650</h4>
                        <span class="text-muted small text-decoration-line-through">₹1200</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="addon-card">
                    <i class="fa-solid fa-pager fs-1 text-primary mb-3"></i>
                    <h5 class="fw-bold text-dark mb-2">Holter Monitor</h5>
                    <p class="text-muted small mb-2">(24Hrs monitoring)</p>
                    <div class="d-flex align-items-center justify-content-center gap-2">
                        <h4 class="fw-bold text-primary mb-0">₹3000</h4>
                        <span class="text-muted small text-decoration-line-through">₹5000</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. CTA -->
<div class="rounded-4 shadow-lg my-5 mx-3 mx-md-5 text-center" style="background: var(--dark-bg); padding: 60px 0;">
    <div class="container text-white">
        <p class="badge bg-success px-3 py-2 fs-6 mb-4">Total Savings: ₹23,142</p>
        <h2 class="display-6 fw-bold mb-3">Total Amount: ₹38,998</h2>
        <h1 class="display-4 fw-bold text-warning mb-5">Offered Price: ₹15,856</h1>
        
        <div class="d-flex flex-wrap justify-content-center gap-3">
            <button class="btn btn-primary btn-lg fw-bold px-5 py-3 rounded-pill shadow-sm">
                Buy Now
            </button>
            <a href="tel:+918725024124" class="btn btn-outline-light btn-lg fw-bold px-5 py-3 rounded-pill shadow-sm">
                <i class="fa-solid fa-phone me-2"></i> Call (+91) 8725024124
            </a>
        </div>
    </div>
</div>

<!-- 6. FAQs -->
<section class="py-5 bg-light">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">FAQs on Preventive Healthcare Packages</h2>
            <div class="mx-auto mt-3 mb-4" style="width: 60px; height: 4px; background-color: var(--primary-color); border-radius: 2px;"></div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion shadow-sm rounded-4 overflow-hidden" id="faqAccordionPkg">
                    <div class="accordion-item border-0 border-bottom">
                        <h2 class="accordion-header">
                            <button class="accordion-button fw-bold px-4 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqP1">
                                Q1. What is the procedure to be followed after I have booked my package?
                            </button>
                        </h2>
                        <div id="faqP1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordionPkg">
                            <div class="accordion-body px-4 text-muted small">
                                Once you purchase the package, our team will contact you to schedule your initial health checkup, followed by the doctor consultation to chart out your year-long plan.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 border-bottom">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold px-4 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqP2">
                                Q2. Do I need to book an appointment to schedule the nursing/doctor visits?
                            </button>
                        </h2>
                        <div id="faqP2" class="accordion-collapse collapse" data-bs-parent="#faqAccordionPkg">
                            <div class="accordion-body px-4 text-muted small">
                                Yes, you just need to inform your dedicated Health Concierge in advance, and they will schedule the nursing or doctor visits according to your convenience.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 border-bottom">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold px-4 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqP3">
                                Q3. What is the validity of the package?
                            </button>
                        </h2>
                        <div id="faqP3" class="accordion-collapse collapse" data-bs-parent="#faqAccordionPkg">
                            <div class="accordion-body px-4 text-muted small">
                                The package is valid for 1 year (12 months) from the date of purchase. All included services and visits must be utilized within this period.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 border-bottom">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold px-4 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqP4">
                                Q4. What is the payment mode?
                            </button>
                        </h2>
                        <div id="faqP4" class="accordion-collapse collapse" data-bs-parent="#faqAccordionPkg">
                            <div class="accordion-body px-4 text-muted small">
                                You can pay securely online via Credit/Debit Cards, Net Banking, UPI, or wallets at the time of booking.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 border-bottom">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold px-4 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqP5">
                                Q5. What is the cancellation policy?
                            </button>
                        </h2>
                        <div id="faqP5" class="accordion-collapse collapse" data-bs-parent="#faqAccordionPkg">
                            <div class="accordion-body px-4 text-muted small">
                                Cancellations are permitted within 7 days of purchase if no services have been availed. For detailed terms, please speak to our support team.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold px-4 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqP6">
                                Q6. What is Healthbuddy?
                            </button>
                        </h2>
                        <div id="faqP6" class="accordion-collapse collapse" data-bs-parent="#faqAccordionPkg">
                            <div class="accordion-body px-4 text-muted small">
                                A Healthbuddy is your dedicated healthcare assistant who helps you with everything from booking appointments, arranging hospital admissions, to navigating insurance claims.
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
