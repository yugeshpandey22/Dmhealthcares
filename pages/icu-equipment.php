<?php
// DO NOT set $full_page_override = true;
$hide_default_welcome = true;

$frontend_custom_sections = '

<style>
:root {
    --primary-blue: #E5252A;
    --dark-blue: #0f172a;
    --light-bg: #f8fafc;
    --border-color: rgba(0,0,0,0.05);
}

body {
    font-family: "Inter", sans-serif;
}

/* Hero Section */
.icu-hero {
    background: linear-gradient(rgba(15, 23, 42, 0.85), rgba(229, 37, 42, 0.85)), url("assets/images/icu-room-bg.jpg") center/cover no-repeat;
    color: white;
    padding: 100px 0;
    position: relative;
}

/* Cards & Hover Effects */
.premium-card {
    background: white;
    border: 1px solid var(--border-color);
    border-radius: 16px;
    transition: all 0.3s ease;
    box-shadow: 0 4px 6px rgba(0,0,0,0.02);
    overflow: hidden;
}

.premium-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.08);
}

.icon-card {
    background: white;
    border: 1px solid var(--border-color);
    border-radius: 16px;
    padding: 2rem;
    transition: all 0.3s ease;
    text-align: center;
}
.icon-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.05);
}

.icon-wrapper {
    width: 70px;
    height: 70px;
    background: rgba(10, 91, 255, 0.1);
    color: var(--primary-blue);
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 28px;
    margin-bottom: 1.5rem;
}

/* Accordion Customization */
.accordion-button:not(.collapsed) {
    background-color: rgba(10, 91, 255, 0.05);
    color: var(--primary-blue);
    font-weight: bold;
}
.accordion-button:focus {
    box-shadow: none;
    border-color: rgba(0,0,0,.125);
}
</style>

<!-- 1. Hero Section -->
<section class="icu-hero">
    <div class="container text-center z-1 position-relative py-5">
        <span class="badge bg-light text-primary px-3 py-2 rounded-pill mb-4 fw-bold">Premium Medical & Healthcare</span>
        <h1 class="display-4 fw-bold mb-4">Advanced ICU Equipment for Modern Healthcare</h1>
        <p class="lead mb-5 mx-auto" style="max-width: 800px; opacity: 0.9;">High-quality ICU solutions designed for hospitals, nursing homes, and healthcare institutions. We provide state-of-the-art medical devices to ensure the best patient care.</p>
        
        <div class="d-flex justify-content-center gap-3">
            <a href="#featured-products" class="btn btn-light btn-lg text-primary fw-bold px-5 rounded-pill shadow-sm">Get a Quote</a>
            <a href="index.php#appointment" class="btn btn-outline-light btn-lg fw-bold px-5 rounded-pill">Contact Us</a>
        </div>
    </div>
</section>

<!-- 2. Equipment Categories / Featured Products -->
<section id="featured-products" class="py-5" style="background-color: var(--light-bg);">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">Featured ICU Equipment</h2>
            <div class="mx-auto mt-3 mb-4" style="width: 60px; height: 4px; background-color: var(--primary-blue); border-radius: 2px;"></div>
            <p class="text-muted">Explore our extensive range of high-quality, certified medical equipment for critical care.</p>
        </div>

        <div class="row g-4">';

        $equipment = [
            ["name" => "ICU Bed", "desc" => "5-Function motorized ICU beds with ABS panels for maximum patient comfort.", "icon" => "fa-bed-pulse"],
            ["name" => "Patient Monitor", "desc" => "Advanced multi-parameter monitors for accurate tracking of vitals.", "icon" => "fa-desktop"],
            ["name" => "Ventilator", "desc" => "State-of-the-art respiratory ventilators for critical respiratory support.", "icon" => "fa-mask-ventilator"],
            ["name" => "Syringe Pump", "desc" => "High-precision syringe infusion pumps for accurate medication delivery.", "icon" => "fa-syringe"],
            ["name" => "Infusion Pump", "desc" => "Volumetric infusion pumps designed for safe fluid and blood delivery.", "icon" => "fa-pump-medical"],
            ["name" => "Defibrillator", "desc" => "Biphasic defibrillators with AED capabilities for emergency cardiac care.", "icon" => "fa-heart-pulse"],
            ["name" => "ECG Machine", "desc" => "12-channel digital ECG machines with advanced interpretation algorithms.", "icon" => "fa-file-waveform"],
            ["name" => "Suction Machine", "desc" => "High-vacuum portable and heavy-duty medical suction units.", "icon" => "fa-pump-soap"],
            ["name" => "Oxygen Concentrator", "desc" => "Medical-grade 5L and 10L oxygen concentrators for continuous supply.", "icon" => "fa-wind"],
            ["name" => "Multi-Parameter Monitor", "desc" => "Comprehensive monitoring for ECG, SpO2, NIBP, Respiration, and Temp.", "icon" => "fa-laptop-medical"]
        ];

        foreach($equipment as $item) {
            $frontend_custom_sections .= '
            <div class="col-lg-4 col-md-6">
                <div class="premium-card h-100 d-flex flex-column text-center">
                    <div class="bg-light p-4 border-bottom d-flex align-items-center justify-content-center" style="height: 200px;">
                        <i class="fa-solid '.$item['icon'].' text-primary" style="font-size: 80px; opacity: 0.8;"></i>
                    </div>
                    <div class="p-4 flex-grow-1 d-flex flex-column">
                        <h5 class="fw-bold text-dark mb-3">'.$item['name'].'</h5>
                        <p class="text-muted small mb-4">'.$item['desc'].'</p>
                        <a href="index.php#appointment" class="btn btn-outline-primary w-100 mt-auto rounded-pill fw-bold">Request Quote</a>
                    </div>
                </div>
            </div>';
        }

$frontend_custom_sections .= '
        </div>
    </div>
</section>

<!-- 3. Why Choose Us -->
<section class="py-5">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">Why Choose Us?</h2>
            <div class="mx-auto mt-3 mb-4" style="width: 60px; height: 4px; background-color: var(--primary-blue); border-radius: 2px;"></div>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="icon-card">
                    <div class="icon-wrapper"><i class="fa-solid fa-certificate"></i></div>
                    <h5 class="fw-bold mb-2">Certified Equipment</h5>
                    <p class="text-muted small mb-0">All our medical devices are ISO and CE certified, ensuring international standards.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="icon-card">
                    <div class="icon-wrapper"><i class="fa-solid fa-medal"></i></div>
                    <h5 class="fw-bold mb-2">Best Quality Products</h5>
                    <p class="text-muted small mb-0">We source only from top global manufacturers to guarantee durability.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="icon-card">
                    <div class="icon-wrapper"><i class="fa-solid fa-tags"></i></div>
                    <h5 class="fw-bold mb-2">Competitive Pricing</h5>
                    <p class="text-muted small mb-0">We offer the most reasonable rates without compromising on medical quality.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="icon-card">
                    <div class="icon-wrapper"><i class="fa-solid fa-truck-fast"></i></div>
                    <h5 class="fw-bold mb-2">Fast Delivery</h5>
                    <p class="text-muted small mb-0">Rapid deployment of equipment to handle emergency hospital requirements.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="icon-card">
                    <div class="icon-wrapper"><i class="fa-solid fa-headset"></i></div>
                    <h5 class="fw-bold mb-2">Expert Support</h5>
                    <p class="text-muted small mb-0">24/7 technical and maintenance support by our biomedical engineers.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="icon-card">
                    <div class="icon-wrapper"><i class="fa-solid fa-shield-halved"></i></div>
                    <h5 class="fw-bold mb-2">Warranty Available</h5>
                    <p class="text-muted small mb-0">Comprehensive warranty coverages available on all major ICU machines.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. Industries We Serve & Benefits -->
<section class="py-5" style="background-color: var(--dark-blue); color: white;">
    <div class="container py-4">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0 pe-lg-5">
                <h2 class="fw-bold mb-4">Industries We Serve</h2>
                <div class="mt-3 mb-5" style="width: 60px; height: 4px; background-color: var(--primary-blue); border-radius: 2px;"></div>
                
                <div class="row g-3">
                    <div class="col-sm-6"><div class="d-flex align-items-center"><i class="fa-regular fa-circle-check text-primary me-3 fs-5"></i> <span class="fs-5">Hospitals</span></div></div>
                    <div class="col-sm-6"><div class="d-flex align-items-center"><i class="fa-regular fa-circle-check text-primary me-3 fs-5"></i> <span class="fs-5">Clinics</span></div></div>
                    <div class="col-sm-6"><div class="d-flex align-items-center"><i class="fa-regular fa-circle-check text-primary me-3 fs-5"></i> <span class="fs-5">Nursing Homes</span></div></div>
                    <div class="col-sm-6"><div class="d-flex align-items-center"><i class="fa-regular fa-circle-check text-primary me-3 fs-5"></i> <span class="fs-5">Diagnostic Centres</span></div></div>
                    <div class="col-sm-6"><div class="d-flex align-items-center"><i class="fa-regular fa-circle-check text-primary me-3 fs-5"></i> <span class="fs-5">Medical Colleges</span></div></div>
                    <div class="col-sm-6"><div class="d-flex align-items-center"><i class="fa-regular fa-circle-check text-primary me-3 fs-5"></i> <span class="fs-5">Emergency Care Units</span></div></div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="bg-white text-dark p-5 rounded-4 shadow-lg">
                    <h3 class="fw-bold mb-4 text-center">Customer Benefits</h3>
                    
                    <ul class="list-unstyled mb-0">
                        <li class="mb-4 d-flex">
                            <div class="bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 45px; height: 45px; min-width: 45px;"><i class="fa-solid fa-gem text-primary"></i></div>
                            <div>
                                <h6 class="fw-bold mb-1">Premium Quality</h6>
                                <p class="text-muted small mb-0">We ensure absolute best quality for critical healthcare.</p>
                            </div>
                        </li>
                        <li class="mb-4 d-flex">
                            <div class="bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 45px; height: 45px; min-width: 45px;"><i class="fa-solid fa-bolt text-primary"></i></div>
                            <div>
                                <h6 class="fw-bold mb-1">Reliable Performance</h6>
                                <p class="text-muted small mb-0">Equipments built to operate flawlessly 24/7.</p>
                            </div>
                        </li>
                        <li class="mb-4 d-flex">
                            <div class="bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 45px; height: 45px; min-width: 45px;"><i class="fa-solid fa-microchip text-primary"></i></div>
                            <div>
                                <h6 class="fw-bold mb-1">Latest Technology</h6>
                                <p class="text-muted small mb-0">Empowering hospitals with advanced medical technology.</p>
                            </div>
                        </li>
                        <li class="mb-4 d-flex">
                            <div class="bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 45px; height: 45px; min-width: 45px;"><i class="fa-solid fa-wrench text-primary"></i></div>
                            <div>
                                <h6 class="fw-bold mb-1">Easy Maintenance</h6>
                                <p class="text-muted small mb-0">Hassle-free servicing and spare parts availability.</p>
                            </div>
                        </li>
                        <li class="d-flex">
                            <div class="bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 45px; height: 45px; min-width: 45px;"><i class="fa-solid fa-handshake-angle text-primary"></i></div>
                            <div>
                                <h6 class="fw-bold mb-1">Trusted Healthcare Partner</h6>
                                <p class="text-muted small mb-0">Your reliable partner for scaling up medical infrastructure.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. Testimonials -->
<section class="py-5" style="background-color: var(--light-bg);">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">What Our Clients Say</h2>
            <div class="mx-auto mt-3 mb-4" style="width: 60px; height: 4px; background-color: var(--primary-blue); border-radius: 2px;"></div>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="premium-card p-4">
                    <div class="d-flex text-warning mb-3">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <p class="text-muted fst-italic mb-4">"The ICU ventilators and monitors we procured are of top-notch quality. Their technical team provided excellent installation and training to our staff."</p>
                    <div class="d-flex align-items-center">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center text-white fw-bold me-3" style="width: 50px; height: 50px;">CH</div>
                        <div>
                            <h6 class="fw-bold mb-0">City Hospital</h6>
                            <small class="text-muted">Procurement Head</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="premium-card p-4">
                    <div class="d-flex text-warning mb-3">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <p class="text-muted fst-italic mb-4">"Very competitive pricing and incredibly fast delivery. We set up an entire new ICU wing with their beds and syringe pumps seamlessly."</p>
                    <div class="d-flex align-items-center">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center text-white fw-bold me-3" style="width: 50px; height: 50px;">AN</div>
                        <div>
                            <h6 class="fw-bold mb-0">Apollo Nursing Home</h6>
                            <small class="text-muted">Medical Director</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="premium-card p-4">
                    <div class="d-flex text-warning mb-3">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <p class="text-muted fst-italic mb-4">"Trusted partner for our diagnostic centre. Their ECG machines and Defibrillators are extremely reliable and easy to maintain."</p>
                    <div class="d-flex align-items-center">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center text-white fw-bold me-3" style="width: 50px; height: 50px;">SD</div>
                        <div>
                            <h6 class="fw-bold mb-0">Sunrise Diagnostics</h6>
                            <small class="text-muted">Chief Administrator</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 6. FAQ Section -->
<section class="py-5">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">Frequently Asked Questions</h2>
            <div class="mx-auto mt-3 mb-4" style="width: 60px; height: 4px; background-color: var(--primary-blue); border-radius: 2px;"></div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion shadow-sm rounded-4 overflow-hidden" id="faqAccordion">
                    
                    <div class="accordion-item border-0 border-bottom">
                        <h2 class="accordion-header">
                            <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                Are all your ICU equipments medically certified?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                Yes, absolutely. All our medical devices are ISO and CE certified, meeting strict international healthcare standards for safety and reliability.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 border-bottom">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                Do you provide installation and staff training?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                Yes, our biomedical engineering team provides complete onsite installation and comprehensive training to your nursing and medical staff.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 border-bottom">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                What is the standard warranty on ICU equipment?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                Warranty periods vary by manufacturer and equipment type, typically ranging from 1 to 3 years. We also offer Annual Maintenance Contracts (AMC).
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 border-bottom">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                Do you supply equipment for home ICU setups?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                Yes, we offer tailored ICU setups for home care, providing hospital-grade equipment directly to patients homes along with technical support.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 border-bottom">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                How fast can you deliver equipment for emergencies?
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                We prioritize emergency requirements and can often dispatch critical equipment like ventilators and oxygen concentrators within a few hours locally.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                                Do you offer financing or rental options for hospitals?
                            </button>
                        </h2>
                        <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                Yes, we provide flexible procurement options including direct purchase, bulk order discounts, and rental options for select high-value equipment.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- 7. Contact CTA -->
<section class="py-5" style="background: linear-gradient(135deg, var(--primary-blue), #0036a8);">
    <div class="container py-5 text-center text-white">
        <h2 class="display-5 fw-bold mb-4">Need ICU Equipment for Your Hospital?</h2>
        <p class="lead mb-5 opacity-75 mx-auto" style="max-width: 600px;">Get in touch with our experts today for a customized quotation and comprehensive medical infrastructure support.</p>
        <a href="index.php#appointment" class="btn btn-light btn-lg text-primary fw-bold px-5 py-3 rounded-pill shadow">Get Free Consultation</a>
    </div>
</section>

';
?>
