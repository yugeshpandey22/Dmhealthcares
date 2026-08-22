<?php
// DO NOT set $full_page_override = true;
$hide_default_welcome = true;

$frontend_custom_sections = '

<style>
:root {
    --primary-color: #E5252A;
    --dark-bg: #1e293b;
    --light-bg: #f8fafc;
    --border-color: rgba(0,0,0,0.08);
}

.service-card {
    background: white;
    border: 1px solid var(--border-color);
    border-radius: 12px;
    padding: 1.5rem;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 1rem;
    height: 100%;
}
.service-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(229, 37, 42, 0.1);
    border-color: var(--primary-color);
}
.service-icon {
    width: 50px;
    height: 50px;
    background: rgba(229, 37, 42, 0.1);
    color: var(--primary-color);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    flex-shrink: 0;
}

.step-card {
    background: white;
    border-left: 4px solid var(--primary-color);
    border-radius: 8px;
    padding: 1.5rem;
    box-shadow: 0 4px 6px rgba(0,0,0,0.05);
    height: 100%;
}

.why-card {
    text-align: center;
    padding: 2rem;
    border: 1px solid var(--border-color);
    border-radius: 16px;
    background: white;
    height: 100%;
}
.why-icon {
    font-size: 2.5rem;
    color: var(--primary-color);
    margin-bottom: 1rem;
}

.testimonial-card {
    background: white;
    border: none;
    border-radius: 16px;
    padding: 2rem;
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    height: 100%;
    position: relative;
}
.quote-icon {
    position: absolute;
    top: 20px;
    right: 20px;
    font-size: 3rem;
    color: rgba(10, 91, 255, 0.1);
}
</style>

<!-- 1. Hero Section -->
<section class="py-5" style="background: linear-gradient(135deg, #f0f4ff 0%, #ffffff 100%); border-bottom: 1px solid var(--border-color);">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-7 pe-lg-5 mb-5 mb-lg-0">
                <span class="badge bg-primary px-3 py-2 rounded-pill mb-4 fw-bold shadow-sm"><i class="fa-solid fa-globe me-1"></i> Global Care For Parents</span>
                <h1 class="display-4 fw-bold mb-4 text-dark">Healthcare Services for NRI Families</h1>
                <p class="lead text-muted mb-4">Through NRI Family Care, we are solving the problems of millions of NRIs who have their family or parents living in India.</p>
                <p class="text-muted mb-5">With our NRI packages, you can be sure your family or elderly parents in India will get the best healthcare services in the comfort of their homes without disturbing your peace of mind. We are available round the clock as a helping hand to hard-working daughters and sons settled in the US, Canada, UK, UAE, Australia, and Europe.</p>
                
                <a href="#callback-form" class="btn btn-primary btn-lg fw-bold px-5 py-3 rounded-pill shadow-sm">
                    Request a Call Back
                </a>
            </div>
            <div class="col-lg-5 text-center">
                <img src="assets/images/nri-family-care.jpg" class="img-fluid rounded-4 shadow-lg w-100" style="object-fit: cover; height: 450px;" alt="NRI Parents Care">
            </div>
        </div>
    </div>
</section>

<!-- 2. Services Grid -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">Our NRI Care Services</h2>
            <div class="mx-auto mt-3 mb-4" style="width: 60px; height: 4px; background-color: var(--primary-color); border-radius: 2px;"></div>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="service-card">
                    <div class="service-icon"><i class="fa-solid fa-user-doctor"></i></div>
                    <h6 class="fw-bold mb-0">Home Doctor Visits</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-card">
                    <div class="service-icon"><i class="fa-solid fa-person-walking"></i></div>
                    <h6 class="fw-bold mb-0">Home Physiotherapy</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-card">
                    <div class="service-icon"><i class="fa-solid fa-hands-holding-child"></i></div>
                    <h6 class="fw-bold mb-0">Elderly Care Services</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-card">
                    <div class="service-icon"><i class="fa-solid fa-bed-pulse"></i></div>
                    <h6 class="fw-bold mb-0">Critical Nursing Care</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-card">
                    <div class="service-icon"><i class="fa-solid fa-user-nurse"></i></div>
                    <h6 class="fw-bold mb-0">Home Nursing Visits</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-card">
                    <div class="service-icon"><i class="fa-solid fa-wheelchair"></i></div>
                    <h6 class="fw-bold mb-0">Medical Equipment (Rent/Sale)</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-card">
                    <div class="service-icon"><i class="fa-solid fa-vial"></i></div>
                    <h6 class="fw-bold mb-0">Lab Tests at Home</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-card">
                    <div class="service-icon"><i class="fa-solid fa-heart-pulse"></i></div>
                    <h6 class="fw-bold mb-0">ECG / Holter at Home</h6>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. How It Works -->
<section class="py-5" style="background-color: var(--light-bg);">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">How It Works</h2>
            <div class="mx-auto mt-3 mb-4" style="width: 60px; height: 4px; background-color: var(--primary-color); border-radius: 2px;"></div>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="step-card">
                    <div class="d-flex align-items-center mb-3">
                        <span class="badge bg-primary fs-5 me-3">1</span>
                        <h5 class="fw-bold mb-0 text-dark">Call or Book an Appointment</h5>
                    </div>
                    <p class="text-muted small mb-0">Submit your home care requirement through our online form, WhatsApp, or call us on our outside India number. Our healthcare care team will get in touch to understand the details and assist you in choosing the right care package.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="step-card">
                    <div class="d-flex align-items-center mb-3">
                        <span class="badge bg-primary fs-5 me-3">2</span>
                        <h5 class="fw-bold mb-0 text-dark">Care Assessment & Planning</h5>
                    </div>
                    <p class="text-muted small mb-0">Our care planner (a nurse) will record elderly/patient details over a call or during an initial visit to your home. Based on your inputs, we will align the best home care staff along with supporting equipment if required.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="step-card">
                    <div class="d-flex align-items-center mb-3">
                        <span class="badge bg-primary fs-5 me-3">3</span>
                        <h5 class="fw-bold mb-0 text-dark">Continuous Monitoring</h5>
                    </div>
                    <p class="text-muted small mb-0">Based on the home health care plan, we monitor routine care of your loved ones through home visits and follow-up feedback calls. Necessary changes are done in consultation with you or your family doctor if required.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="step-card">
                    <div class="d-flex align-items-center mb-3">
                        <span class="badge bg-primary fs-5 me-3">4</span>
                        <h5 class="fw-bold mb-0 text-dark">Manage Replacements</h5>
                    </div>
                    <p class="text-muted small mb-0">In cases of urgent leaves or as per your feedback, we make sure someone compassionate is there. We appoint replacements with full knowledge of their health condition and care plan.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. Callback Form & Why Choose Us -->
<section class="py-5" id="callback-form">
    <div class="container py-4">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-5 mb-lg-0 pe-lg-5">
                <div class="bg-white p-5 rounded-4 shadow-lg border">
                    <h3 class="fw-bold text-dark mb-4 text-center">Request a Call Back from our Experts</h3>
                    <form action="#" method="POST">
                        <div class="mb-3">
                            <label class="form-label text-muted small fw-bold">Looking For*</label>
                            <select class="form-select form-select-lg bg-light" required>
                                <option value="" disabled selected>Select Service</option>
                                <option value="doctor">Doctor Visit</option>
                                <option value="nursing">Nursing Care</option>
                                <option value="physio">Physiotherapy</option>
                                <option value="equipment">Medical Equipment</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-muted small fw-bold">Phone Number*</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light">+91</span>
                                <input type="tel" class="form-control form-control-lg bg-light" placeholder="Enter number" required>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="form-label text-muted small fw-bold">Location*</label>
                            <input type="text" class="form-control form-control-lg bg-light" placeholder="City in India" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg w-100 fw-bold rounded-pill shadow-sm">Get a Call Back</button>
                    </form>
                </div>
            </div>
            
            <div class="col-lg-7">
                <h2 class="fw-bold text-dark mb-2">Learn why NRI families choose us</h2>
                <div class="mt-3 mb-5" style="width: 60px; height: 4px; background-color: var(--primary-color); border-radius: 2px;"></div>
                
                <div class="row g-4">
                    <div class="col-md-4 col-sm-6">
                        <div class="why-card">
                            <i class="fa-solid fa-users why-icon"></i>
                            <h6 class="fw-bold text-dark mb-2">Dedicated Care Team</h6>
                            <p class="text-muted small mb-0">Support 7 days a week to help you find the best caregiver.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="why-card">
                            <i class="fa-solid fa-globe why-icon"></i>
                            <h6 class="fw-bold text-dark mb-2">1000+ NRI Families Served</h6>
                            <p class="text-muted small mb-0">Happily served in the last 12 years.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="why-card">
                            <i class="fa-solid fa-money-check-dollar why-icon"></i>
                            <h6 class="fw-bold text-dark mb-2">Manage Payrolls</h6>
                            <p class="text-muted small mb-0">We ensure attendance and payments to caregivers on time.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="why-card">
                            <i class="fa-solid fa-user-clock why-icon"></i>
                            <h6 class="fw-bold text-dark mb-2">Manage Replacements</h6>
                            <p class="text-muted small mb-0">Right replacement during the absence of a key caregiver.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="why-card">
                            <i class="fa-solid fa-truck-medical why-icon"></i>
                            <h6 class="fw-bold text-dark mb-2">Handle Emergency</h6>
                            <p class="text-muted small mb-0">Manage emergencies related to staff and patient at home.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="why-card">
                            <i class="fa-solid fa-handshake-angle why-icon"></i>
                            <h6 class="fw-bold text-dark mb-2">Handle Conflicts</h6>
                            <p class="text-muted small mb-0">Active support in ensuring quality care delivery.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. Care with Impact -->
<section class="py-5" style="background-color: var(--light-bg);">
    <div class="container py-4 text-center">
        <h2 class="fw-bold text-dark">Care with Impact</h2>
        <p class="text-muted mb-5">Dedicated towards Care</p>
        
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="bg-white p-4 border rounded-4 h-100 shadow-sm transition-hover">
                    <h4 class="fw-bold text-primary mb-2">12+ Years of Trust</h4>
                    <p class="text-muted small mb-0">Delivering reliable care since 2013</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-white p-4 border rounded-4 h-100 shadow-sm transition-hover">
                    <h4 class="fw-bold text-primary mb-2">99.9% Care Continuity</h4>
                    <p class="text-muted small mb-0">Almost 0% interruption in services</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-white p-4 border rounded-4 h-100 shadow-sm transition-hover">
                    <h4 class="fw-bold text-primary mb-2">4.8+ Star Rating</h4>
                    <p class="text-muted small mb-0">Across platforms - Google, FB, Trustpilot</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-white p-4 border rounded-4 h-100 shadow-sm transition-hover">
                    <h4 class="fw-bold text-primary mb-2">100% Verified Caregivers</h4>
                    <p class="text-muted small mb-0">Background, Adhar & Police Verified</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-white p-4 border rounded-4 h-100 shadow-sm transition-hover">
                    <h4 class="fw-bold text-primary mb-2">24 Hours TAT</h4>
                    <p class="text-muted small mb-0">For Onboarding New Home Care Case</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-white p-4 border rounded-4 h-100 shadow-sm transition-hover">
                    <h4 class="fw-bold text-primary mb-2">4 Hours Delivery</h4>
                    <p class="text-muted small mb-0">Instant Delivery of Medical Equipment</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 6. Testimonials -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">Testimonials</h2>
            <div class="mx-auto mt-3 mb-4" style="width: 60px; height: 4px; background-color: var(--primary-color); border-radius: 2px;"></div>
        </div>
        
        <div class="row justify-content-center g-4">
            <div class="col-lg-5">
                <div class="testimonial-card">
                    <i class="fa-solid fa-quote-right quote-icon"></i>
                    <p class="text-muted mb-4 fst-italic">"They provided excellent round-the-clock care for my father. Being in Canada, I was very worried, but their dedicated care team kept me constantly updated and handled every emergency smoothly."</p>
                    <div class="d-flex align-items-center">
                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center fw-bold me-3" style="width: 50px; height: 50px;">HP</div>
                        <div>
                            <h6 class="fw-bold text-dark mb-0">Mr. Harsh Pandey</h6>
                            <small class="text-muted">From Canada (Availed services for his Father)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="testimonial-card">
                    <i class="fa-solid fa-quote-right quote-icon"></i>
                    <p class="text-muted mb-4 fst-italic">"Very professional service! The app updates, video calls, and the care manager\'s prompt response made me feel like I was right there with my mother. Highly recommend their NRI packages."</p>
                    <div class="d-flex align-items-center">
                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center fw-bold me-3" style="width: 50px; height: 50px;">G</div>
                        <div>
                            <h6 class="fw-bold text-dark mb-0">Mr. Grewal</h6>
                            <small class="text-muted">From United States (Availed services for his Mother)</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 7. FAQs -->
<section class="py-5" style="background-color: var(--light-bg);">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">FAQs on Home Care Services</h2>
            <div class="mx-auto mt-3 mb-4" style="width: 60px; height: 4px; background-color: var(--primary-color); border-radius: 2px;"></div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion shadow-sm rounded-4 overflow-hidden" id="faqAccordionNRI">
                    <div class="accordion-item border-0 border-bottom">
                        <h2 class="accordion-header">
                            <button class="accordion-button fw-bold px-4 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqNRI1">
                                Q1. What is the mode of payment?
                            </button>
                        </h2>
                        <div id="faqNRI1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordionNRI">
                            <div class="accordion-body px-4 text-muted small">
                                We accept online international bank transfers, PayPal, Credit/Debit cards, and UPI for easy transactions from anywhere in the world.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 border-bottom">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold px-4 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqNRI2">
                                Q2. What is the mode of communication?
                            </button>
                        </h2>
                        <div id="faqNRI2" class="accordion-collapse collapse" data-bs-parent="#faqAccordionNRI">
                            <div class="accordion-body px-4 text-muted small">
                                Our primary modes of communication are WhatsApp groups (with the care manager, doctor, and family), Email reports, and scheduled video calls.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 border-bottom">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold px-4 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqNRI3">
                                Q3. How can I trust the Nurse/Caregiver coming to my parent\'s house?
                            </button>
                        </h2>
                        <div id="faqNRI3" class="accordion-collapse collapse" data-bs-parent="#faqAccordionNRI">
                            <div class="accordion-body px-4 text-muted small">
                                All our staff undergo a rigorous 100% background, Aadhaar, and Police verification process before deployment to ensure complete safety and trust.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 border-bottom">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold px-4 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqNRI4">
                                Q4. Can the caregiver handle acute emergencies?
                            </button>
                        </h2>
                        <div id="faqNRI4" class="accordion-collapse collapse" data-bs-parent="#faqAccordionNRI">
                            <div class="accordion-body px-4 text-muted small">
                                Yes, our caregivers are trained to handle initial emergencies. Moreover, our backend team immediately arranges ambulance dispatch and hospital coordination during acute emergencies.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold px-4 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faqNRI5">
                                Q5. In case of any unfortunate incident what support is provided from your end?
                            </button>
                        </h2>
                        <div id="faqNRI5" class="accordion-collapse collapse" data-bs-parent="#faqAccordionNRI">
                            <div class="accordion-body px-4 text-muted small">
                                Our dedicated care manager will be physically present to assist with hospital formalities, coordination with doctors, and continuously keep you informed on the phone.
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
