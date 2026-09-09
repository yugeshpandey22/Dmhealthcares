<?php
/**
 * DM Healthcare - NeoBolt Motorized Mobility Scooter Attachment
 * Modern, Bootstrap 5-Powered Medical Mobility Portal
 */

$display_title = "NeoBolt Motorized Wheelchair Scooter";
$seo_title = "NeoBolt Wheelchair Scooter on Rent & Sale in Delhi NCR, Faridabad - DM Healthcare";
$seo_desc = "Rent or buy NeoBolt motorized wheelchair add-on scooter in Delhi NCR, Faridabad, Noida & Gurugram. 25 km/h top speed, 25 km range per charge. Free home demo available.";
$short_desc = "Convert your manual wheelchair into a powerful road-ready motorized electric scooter in 10 seconds. Hospital-grade safety, lithium-ion battery & 24/7 technical support.";
$category_name = "Medical Equipment";
$full_page_override = true;

ob_start();
?>
<style>
    :root {
        --dm-red: #e5252a;
        --dm-red-dark: #c8102e;
        --dm-navy: #0f172a;
    }
    .text-dm-red { color: var(--dm-red) !important; }
    .bg-dm-red { background-color: var(--dm-red) !important; color: #fff !important; }
    .btn-dm-red { background-color: var(--dm-red); border-color: var(--dm-red); color: #fff; }
    .btn-dm-red:hover { background-color: var(--dm-red-dark); border-color: var(--dm-red-dark); color: #fff; }
    .btn-outline-dm-red { border-color: var(--dm-red); color: var(--dm-red); }
    .btn-outline-dm-red:hover, .btn-outline-dm-red.active { background-color: var(--dm-red); border-color: var(--dm-red); color: #fff; }

    .nb-gallery-img {
        height: 180px;
        object-fit: cover;
        border-radius: 12px;
        transition: transform 0.25s ease, box-shadow 0.25s ease;
        cursor: pointer;
    }
    .nb-gallery-img:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 20px rgba(15, 23, 42, 0.12);
    }
    .nb-feature-card {
        transition: transform 0.25s ease, box-shadow 0.25s ease;
        border: 1px solid #e2e8f0;
    }
    .nb-feature-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 24px rgba(15, 23, 42, 0.08) !important;
        border-color: #cbd5e1;
    }
</style>

<!-- 1. Hero Section -->
<section class="py-4 py-lg-5 bg-white border-bottom">
    <div class="container py-lg-2">
        <div class="row align-items-center g-4">
            <div class="col-lg-7">
                <span class="badge bg-danger bg-opacity-10 text-danger px-3 py-1 rounded-pill fw-semibold mb-2 border border-danger border-opacity-25 small">
                    <i class="fa-solid fa-bolt me-1"></i> Motorized Mobility Innovation
                </span>
                <h1 class="display-6 fw-bold text-dark lh-sm mb-2">
                    <span class="text-dm-red">NeoBolt</span> Motorized Scooter Attachment
                </h1>
                <p class="text-muted fs-6 mb-3">
                    Transform your standard manual wheelchair into a powerful, road-ready motorized electric vehicle in under 10 seconds. Enjoy unmatched independence across city streets, parks, and shopping complexes.
                </p>

                <!-- Pricing Highlight Box -->
                <div class="d-inline-flex flex-wrap align-items-center gap-3 p-2 px-3 bg-light rounded-3 border mb-3">
                    <div>
                        <small class="text-muted d-block" style="font-size: 0.72rem;">Monthly Rental</small>
                        <span class="fs-5 fw-bold text-dm-red">₹4,500</span>
                        <small class="text-muted">/ month</small>
                    </div>
                    <div class="border-start ps-3">
                        <small class="text-muted d-block" style="font-size: 0.72rem;">Purchase New</small>
                        <span class="fs-6 fw-bold text-dark">₹95,000</span>
                    </div>
                    <div class="border-start ps-3">
                        <span class="badge bg-success bg-opacity-10 text-success border border-success rounded-pill px-2 py-1 small">
                            <i class="fa-solid fa-check me-1"></i> Free Home Demo
                        </span>
                    </div>
                </div>
                
                <div class="d-flex flex-wrap gap-2 mb-3">
                    <a href="tel:+918860600423" class="btn btn-dm-red rounded-pill px-3 py-2 fw-bold shadow-sm d-inline-flex align-items-center gap-2 small">
                        <i class="fa-solid fa-phone"></i> Call +91 88606 00423
                    </a>
                    <a href="https://wa.me/918860600423?text=Hello%20DM%20Healthcare,%20I%20want%20to%20know%20more%20about%20NeoBolt%20Scooter%20Rental/Sale." target="_blank" class="btn btn-outline-success rounded-pill px-3 py-2 fw-bold d-inline-flex align-items-center gap-2 small">
                        <i class="fa-brands fa-whatsapp"></i> WhatsApp Inquiry
                    </a>
                    <a href="#booking-form" class="btn btn-outline-secondary rounded-pill px-3 py-2 fw-bold small">
                        Book Free Demo
                    </a>
                </div>

                <!-- Key Stats Grid -->
                <div class="row g-2 pt-2 border-top">
                    <div class="col-6 col-sm-3 d-flex align-items-center gap-2">
                        <i class="fa-solid fa-gauge-high text-dm-red"></i>
                        <span class="small text-secondary fw-semibold">25 km/h Speed</span>
                    </div>
                    <div class="col-6 col-sm-3 d-flex align-items-center gap-2">
                        <i class="fa-solid fa-battery-full text-success"></i>
                        <span class="small text-secondary fw-semibold">25 km / Charge</span>
                    </div>
                    <div class="col-6 col-sm-3 d-flex align-items-center gap-2">
                        <i class="fa-solid fa-stopwatch text-primary"></i>
                        <span class="small text-secondary fw-semibold">10-Sec Quick Lock</span>
                    </div>
                    <div class="col-6 col-sm-3 d-flex align-items-center gap-2">
                        <i class="fa-solid fa-mountain text-warning"></i>
                        <span class="small text-secondary fw-semibold">Climbs Gradients</span>
                    </div>
                </div>
            </div>

            <!-- Right Hero Image -->
            <div class="col-lg-5">
                <div class="position-relative">
                    <img src="assets/images/pages/neobolt_hero_scooter.jpg" alt="NeoBolt Motorized Wheelchair Scooter" class="img-fluid rounded-4 shadow-sm border border-2 border-white w-100" style="max-height: 340px; object-fit: cover;">
                    <div class="position-absolute bottom-0 start-0 m-2 p-2 px-3 bg-white bg-opacity-95 rounded-3 shadow-sm border">
                        <div class="d-flex align-items-center gap-2">
                            <i class="fa-solid fa-shield-halved text-dm-red fs-5"></i>
                            <div>
                                <h6 class="mb-0 fw-bold text-dark small">ARAI Safety Certified</h6>
                                <small class="text-muted" style="font-size: 0.72rem;">Engineered for Indian Terrains</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. Photo Gallery & Showcase (4 Images) -->
<section class="py-4 py-lg-5 bg-light border-bottom">
    <div class="container">
        <div class="text-center max-w-700 mx-auto mb-3">
            <span class="badge bg-secondary bg-opacity-10 text-secondary px-3 py-1 rounded-pill fw-semibold mb-1 small">Visual Showcase</span>
            <h3 class="fw-bold text-dark mb-1">NeoBolt in Action</h3>
            <p class="text-muted small mb-0">Engineered for comfort, rapid attachment, and effortless road travel.</p>
        </div>

        <div class="row g-3 pt-2">
            <div class="col-6 col-md-3">
                <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden bg-white p-2">
                    <img src="assets/images/pages/neobolt_hero_scooter.jpg" alt="NeoBolt Outdoor Ride" class="img-fluid nb-gallery-img w-100">
                    <div class="card-body p-2 text-center">
                        <span class="fw-bold text-dark small d-block">Outdoor Ride</span>
                        <small class="text-muted" style="font-size: 0.72rem;">Effortless garden & street commute</small>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden bg-white p-2">
                    <img src="assets/images/pages/neobolt_easy_attachment.jpg" alt="NeoBolt 10-Sec Quick Lock" class="img-fluid nb-gallery-img w-100">
                    <div class="card-body p-2 text-center">
                        <span class="fw-bold text-dark small d-block">Quick-Clamp Lock</span>
                        <small class="text-muted" style="font-size: 0.72rem;">10-second single latch attach</small>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden bg-white p-2">
                    <img src="assets/images/pages/neobolt_product_closeup.jpg" alt="NeoBolt Motor & Disc Brakes" class="img-fluid nb-gallery-img w-100">
                    <div class="card-body p-2 text-center">
                        <span class="fw-bold text-dark small d-block">Motor & Disc Brakes</span>
                        <small class="text-muted" style="font-size: 0.72rem;">High-torque hub drive & safety</small>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden bg-white p-2">
                    <img src="assets/images/pages/neobolt_outdoor_mobility.jpg" alt="NeoBolt Urban Freedom" class="img-fluid nb-gallery-img w-100">
                    <div class="card-body p-2 text-center">
                        <span class="fw-bold text-dark small d-block">Urban Independence</span>
                        <small class="text-muted" style="font-size: 0.72rem;">Complete everyday freedom</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. Key Advantages (Bootstrap 5 Cards) -->
<section class="py-4 py-lg-5 bg-white border-bottom">
    <div class="container">
        <div class="text-center max-w-700 mx-auto mb-4">
            <span class="badge bg-danger bg-opacity-10 text-danger px-3 py-1 rounded-pill fw-semibold mb-1 small">Why NeoBolt?</span>
            <h3 class="fw-bold text-dark mb-1">Key Advantages & Features</h3>
            <p class="text-muted small">Specially engineered by IIT Madras incubated researchers to provide true road mobility for wheelchair users.</p>
        </div>

        <div class="row g-3">
            <div class="col-sm-6 col-lg-3">
                <div class="card h-100 rounded-3 p-3 bg-light border nb-feature-card">
                    <div class="rounded-circle bg-danger bg-opacity-10 text-dm-red d-inline-flex align-items-center justify-content-center mb-2" style="width: 44px; height: 44px;">
                        <i class="fa-solid fa-link fs-5"></i>
                    </div>
                    <h6 class="fw-bold text-dark mb-1">No Transfers Needed</h6>
                    <p class="small text-muted mb-0">No need to transfer from wheelchair to auto or scooter. Connect NeoBolt right while seated.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card h-100 rounded-3 p-3 bg-light border nb-feature-card">
                    <div class="rounded-circle bg-success bg-opacity-10 text-success d-inline-flex align-items-center justify-content-center mb-2" style="width: 44px; height: 44px;">
                        <i class="fa-solid fa-battery-charging fs-5"></i>
                    </div>
                    <h6 class="fw-bold text-dark mb-1">Lithium-ion Battery</h6>
                    <p class="small text-muted mb-0">Removable quick-swap battery charges in 4 hours from any standard home wall socket.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card h-100 rounded-3 p-3 bg-light border nb-feature-card">
                    <div class="rounded-circle bg-primary bg-opacity-10 text-primary d-inline-flex align-items-center justify-content-center mb-2" style="width: 44px; height: 44px;">
                        <i class="fa-solid fa-road fs-5"></i>
                    </div>
                    <h6 class="fw-bold text-dark mb-1">Handles Rough Terrains</h6>
                    <p class="small text-muted mb-0">Front pneumatic suspension absorbs potholes, speed breakers, and steep flyover ramps.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card h-100 rounded-3 p-3 bg-light border nb-feature-card">
                    <div class="rounded-circle bg-warning bg-opacity-10 text-dark d-inline-flex align-items-center justify-content-center mb-2" style="width: 44px; height: 44px;">
                        <i class="fa-solid fa-universal-access fs-5"></i>
                    </div>
                    <h6 class="fw-bold text-dark mb-1">Universal Fit</h6>
                    <p class="small text-muted mb-0">Compatible with most rigid and folding manual wheelchairs with adjustable clamps.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. Technical Specifications Table -->
<section class="py-4 py-lg-5 bg-light border-bottom">
    <div class="container">
        <div class="text-center max-w-700 mx-auto mb-3">
            <span class="badge bg-secondary bg-opacity-10 text-secondary px-3 py-1 rounded-pill fw-semibold mb-1 small">Technical Data</span>
            <h3 class="fw-bold text-dark mb-1">NeoBolt Specifications</h3>
        </div>

        <div class="table-responsive shadow-sm rounded-4 border bg-white max-w-900 mx-auto">
            <table class="table table-hover align-middle mb-0">
                <tbody>
                    <tr>
                        <td class="py-2 px-3 fw-bold text-dark small" style="width: 35%;"><i class="fa-solid fa-gauge text-dm-red me-2"></i> Maximum Speed</td>
                        <td class="py-2 px-3 text-muted small">Up to 25 km/h (with 3-speed selector modes: 7 km/h, 15 km/h, 25 km/h)</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-3 fw-bold text-dark small"><i class="fa-solid fa-road text-success me-2"></i> Range Per Charge</td>
                        <td class="py-2 px-3 text-muted small">Up to 25 km on flat terrain with full single charge</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-3 fw-bold text-dark small"><i class="fa-solid fa-bolt text-warning me-2"></i> Motor Type</td>
                        <td class="py-2 px-3 text-muted small">250W / 350W High-Torque Brushless Hub Motor (Front Wheel)</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-3 fw-bold text-dark small"><i class="fa-solid fa-battery-half text-primary me-2"></i> Battery System</td>
                        <td class="py-2 px-3 text-muted small">36V Lithium-ion (Quick-Release Lockable Case, 4-Hour Full Charge)</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-3 fw-bold text-dark small"><i class="fa-solid fa-circle-stop text-danger me-2"></i> Braking System</td>
                        <td class="py-2 px-3 text-muted small">Dual Mechanical Disc Brakes with Motor Cut-off Lever & Parking Lock</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-3 fw-bold text-dark small"><i class="fa-solid fa-lightbulb text-warning me-2"></i> Lights & Indicators</td>
                        <td class="py-2 px-3 text-muted small">Bright LED Headlamp, Horn, Rear Reflector, Digital LCD Instrument Console</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-3 fw-bold text-dark small"><i class="fa-solid fa-weight-hanging text-secondary me-2"></i> Weight Capacity</td>
                        <td class="py-2 px-3 text-muted small">Rider Weight up to 100 kg | Unit Weight: 15.5 kg</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-3 fw-bold text-dark small"><i class="fa-solid fa-certificate text-success me-2"></i> Safety & Warranty</td>
                        <td class="py-2 px-3 text-muted small">1-Year Comprehensive Warranty | 24/7 Roadside & Maintenance Support</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- 5. Booking & Free Demonstration Form -->
<section class="py-5 bg-white" id="booking-form">
    <div class="container">
        <div class="row g-4 align-items-center">
            <!-- Left Contact Info -->
            <div class="col-lg-5">
                <span class="badge bg-danger bg-opacity-10 text-danger px-3 py-1 rounded-pill fw-semibold mb-2">Doorstep Service</span>
                <h3 class="fw-bold text-dark mb-2">Book a Free Home Demo</h3>
                <p class="text-muted small mb-3">Our technician will visit your home with a NeoBolt unit, attach it to your existing wheelchair, and provide a full hands-on driving trial.</p>
                
                <div class="card bg-light border-0 rounded-3 p-3 mb-3">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <div class="rounded-circle bg-dm-red text-white d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                            <i class="fa-solid fa-headset fs-5"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-0 text-dark small">Talk with Mobility Specialist</h6>
                            <small class="text-muted" style="font-size: 0.72rem;">Immediate consultation & pricing</small>
                        </div>
                    </div>
                    <a href="tel:+918860600423" class="btn btn-dm-red rounded-pill fw-bold py-2 mb-2 btn-sm">
                        <i class="fa-solid fa-phone me-1"></i> Call +91 88606 00423
                    </a>
                    <a href="https://wa.me/918860600423?text=Hi%20DM%20Healthcare,%20I%20want%20to%20book%20a%20NeoBolt%20demo." target="_blank" class="btn btn-outline-success rounded-pill fw-bold py-2 btn-sm">
                        <i class="fa-brands fa-whatsapp me-1"></i> Chat on WhatsApp
                    </a>
                </div>
            </div>

            <!-- Right Form -->
            <div class="col-lg-7">
                <div class="card border-0 shadow-lg rounded-4 p-4 p-md-4 bg-white border">
                    <h5 class="fw-bold text-dark mb-3">Request NeoBolt Rental or Demo</h5>
                    
                    <form action="backend/submit_appointment.php" method="POST">
                        <input type="hidden" name="service" value="NeoBolt Motorized Scooter">
                        
                        <div class="row g-2">
                            <div class="col-md-6">
                                <label class="form-label small fw-semibold text-secondary mb-1">Full Name *</label>
                                <input type="text" name="name" class="form-control form-control-sm rounded-2" placeholder="Patient / Rider Name" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-semibold text-secondary mb-1">Phone Number *</label>
                                <input type="tel" name="phone" class="form-control form-control-sm rounded-2" placeholder="10-digit mobile number" pattern="[0-9]{10}" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-semibold text-secondary mb-1">Requirement Type *</label>
                                <select name="requirement_type" class="form-select form-select-sm rounded-2" required>
                                    <option value="Monthly Rental (₹4,500/mo)">Monthly Rental (₹4,500/mo)</option>
                                    <option value="Free Home Trial / Demo">Free Home Trial / Demo</option>
                                    <option value="Permanent Purchase (₹95,000)">Permanent Purchase (₹95,000)</option>
                                    <option value="Rent-to-Buy Option">Rent-to-Buy Option</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-semibold text-secondary mb-1">City / Location *</label>
                                <select name="city" class="form-select form-select-sm rounded-2" required>
                                    <option value="Faridabad">Faridabad</option>
                                    <option value="Noida & Greater Noida">Noida & Greater Noida</option>
                                    <option value="Delhi NCR">Delhi NCR</option>
                                    <option value="Gurugram (Gurgaon)">Gurugram (Gurgaon)</option>
                                    <option value="Ghaziabad">Ghaziabad</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label small fw-semibold text-secondary mb-1">Existing Wheelchair Model / Address</label>
                                <textarea name="message" rows="2" class="form-control form-control-sm rounded-2" placeholder="Mention your manual wheelchair brand (or if you need a wheelchair too) and complete address..."></textarea>
                            </div>
                            <div class="col-12 mt-2">
                                <button type="submit" class="btn btn-dm-red w-100 rounded-pill fw-bold py-2 shadow-sm">
                                    <i class="fa-solid fa-paper-plane me-1"></i> Submit Demo / Rental Request
                                </button>
                                <small class="text-center d-block text-muted mt-1" style="font-size: 0.72rem;">
                                    <i class="fa-solid fa-lock text-success me-1"></i> No advance payment needed before live trial demonstration.
                                </small>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 6. FAQs Section (Bootstrap 5) -->
<section class="py-4 py-lg-5 bg-light border-top">
    <div class="container max-w-800">
        <div class="text-center mb-3">
            <span class="badge bg-secondary bg-opacity-10 text-secondary px-3 py-1 rounded-pill fw-semibold mb-1 small">FAQs</span>
            <h3 class="fw-bold text-dark">Frequently Asked Questions</h3>
        </div>

        <div class="accordion accordion-flush shadow-sm rounded-3 overflow-hidden border bg-white" id="nbFaqAccordion">
            <div class="accordion-item border-bottom">
                <h2 class="accordion-header" id="faqNbOne">
                    <button class="accordion-button fw-bold text-dark py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNbOne">
                        Will NeoBolt fit my existing manual wheelchair?
                    </button>
                </h2>
                <div id="collapseNbOne" class="accordion-collapse collapse show" data-bs-parent="#nbFaqAccordion">
                    <div class="accordion-body text-muted small lh-base">
                        Yes. NeoBolt is designed with universal adjustable mounting brackets that fit 95% of standard folding and rigid manual wheelchairs. During our free home demo, our technician will calibrate and fit the clamp to your wheelchair.
                    </div>
                </div>
            </div>

            <div class="accordion-item border-bottom">
                <h2 class="accordion-header" id="faqNbTwo">
                    <button class="accordion-button collapsed fw-bold text-dark py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNbTwo">
                        How difficult is it to attach and detach by oneself?
                    </button>
                </h2>
                <div id="collapseNbTwo" class="accordion-collapse collapse" data-bs-parent="#nbFaqAccordion">
                    <div class="accordion-body text-muted small lh-base">
                        It takes only 10 to 15 seconds! You simply roll your wheelchair forward to align the center latch and push down the locking handle. No tools or external assistance are required.
                    </div>
                </div>
            </div>

            <div class="accordion-item border-bottom">
                <h2 class="accordion-header" id="faqNbThree">
                    <button class="accordion-button collapsed fw-bold text-dark py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNbThree">
                        Is it safe to ride on outdoor roads and flyovers?
                    </button>
                </h2>
                <div id="collapseNbThree" class="accordion-collapse collapse" data-bs-parent="#nbFaqAccordion">
                    <div class="accordion-body text-muted small lh-base">
                        Yes, NeoBolt is ARAI road-safety certified. It features front pneumatic suspension, dual mechanical disc brakes, an LED headlamp for night riding, and a reverse mode to maneuver tight spots safely.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="faqNbFour">
                    <button class="accordion-button collapsed fw-bold text-dark py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNbFour">
                        What maintenance and support does DM Healthcare provide?
                    </button>
                </h2>
                <div id="collapseNbFour" class="accordion-collapse collapse" data-bs-parent="#nbFaqAccordion">
                    <div class="accordion-body text-muted small lh-base">
                        For rental customers, all mechanical repairs, battery replacements, and brake tune-ups are 100% free of cost with same-day doorstep technician visits across Faridabad, Noida, and Delhi NCR.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 7. Related Medical Equipment -->
<section class="py-4 py-lg-5 bg-white border-top">
    <div class="container">
        <h5 class="fw-bold text-dark mb-3 text-center">Other Mobility Equipment on Rent</h5>
        <div class="row g-3 justify-content-center text-center">
            <div class="col-6 col-md-3">
                <a href="page.php?title=wheelchairs" class="card border rounded-3 p-3 text-decoration-none shadow-sm h-100 bg-light nb-feature-card">
                    <i class="fa-solid fa-wheelchair text-dm-red fs-4 mb-2"></i>
                    <span class="fw-bold text-dark small d-block">Manual & Electric Wheelchairs</span>
                    <small class="text-muted" style="font-size: 0.72rem;">From ₹1,200/mo</small>
                </a>
            </div>
            <div class="col-6 col-md-3">
                <a href="page.php?title=staircase-mobility-assistance" class="card border rounded-3 p-3 text-decoration-none shadow-sm h-100 bg-light nb-feature-card">
                    <i class="fa-solid fa-stairs text-primary fs-4 mb-2"></i>
                    <span class="fw-bold text-dark small d-block">Stair Climber Wheelchairs</span>
                    <small class="text-muted" style="font-size: 0.72rem;">Tracked stair lifts</small>
                </a>
            </div>
            <div class="col-6 col-md-3">
                <a href="page.php?title=hospital-beds" class="card border rounded-3 p-3 text-decoration-none shadow-sm h-100 bg-light nb-feature-card">
                    <i class="fa-solid fa-bed-pulse text-success fs-4 mb-2"></i>
                    <span class="fw-bold text-dark small d-block">ICU Hospital Beds</span>
                    <small class="text-muted" style="font-size: 0.72rem;">Motorized & Semi-fowler</small>
                </a>
            </div>
            <div class="col-6 col-md-3">
                <a href="page.php?title=patient-attendant" class="card border rounded-3 p-3 text-decoration-none shadow-sm h-100 bg-light nb-feature-card">
                    <i class="fa-solid fa-user-nurse text-warning fs-4 mb-2"></i>
                    <span class="fw-bold text-dark small d-block">Patient Attendant Care</span>
                    <small class="text-muted" style="font-size: 0.72rem;">12h / 24h shifts</small>
                </a>
            </div>
        </div>
    </div>
</section>
<?php
$frontend_custom_sections = ob_get_clean();
