<?php
// DO NOT set $full_page_override = true;
// We want to use the exact same layout as Noida (standard CMS layout with Banner, Image, Specs).
// We simply assign our frontend custom design to $frontend_custom_sections so it renders full width!

$frontend_custom_sections = '

<link rel="stylesheet" href="assets/css/faridabad.css">

<div class="mt-5 pt-4 border-top">
    <!-- Testimonials -->
    <h3 class="fw-bold mb-4 text-dark text-center mt-4"><i class="fa-solid fa-star text-warning"></i> What Faridabad Families Say</h3>
    <div class="row g-4 mb-5">
        <div class="col-md-6">
            <div class="card border-0 shadow-sm rounded-4 h-100 bg-white p-4 position-relative overflow-hidden" style="background-color: #f8fafd !important;">
                <div class="position-absolute opacity-10" style="top: -10px; right: 10px; font-size: 5rem;"><i class="fa-solid fa-quote-right"></i></div>
                <div class="d-flex align-items-center mb-3">
                    <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center fw-bold me-3 shadow-sm" style="width:50px; height:50px; font-size:1.2rem;">AK</div>
                    <div>
                        <h6 class="fw-bold mb-0">Amit Kumar</h6>
                        <small class="text-muted"><i class="fa-solid fa-star text-warning"></i> 5.0 (Sector 15, Faridabad)</small>
                    </div>
                </div>
                <p class="text-muted fst-italic">"DM Healthcare provided an excellent nursing attendant for my father. The staff was professional, polite, and extremely well-trained. It gave us peace of mind knowing he was in safe hands at our home in Faridabad."</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-0 shadow-sm rounded-4 h-100 bg-white p-4 position-relative overflow-hidden" style="background-color: #f8fafd !important;">
                <div class="position-absolute opacity-10" style="top: -10px; right: 10px; font-size: 5rem;"><i class="fa-solid fa-quote-right"></i></div>
                <div class="d-flex align-items-center mb-3">
                    <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center fw-bold me-3 shadow-sm" style="width:50px; height:50px; font-size:1.2rem;">PS</div>
                    <div>
                        <h6 class="fw-bold mb-0">Priya Sharma</h6>
                        <small class="text-muted"><i class="fa-solid fa-star text-warning"></i> 5.0 (NIT Faridabad)</small>
                    </div>
                </div>
                <p class="text-muted fst-italic">"We rented a BiPAP machine and an oxygen concentrator from them. The delivery was incredibly fast, and the technician explained everything perfectly. Highly recommend their services in Faridabad!"</p>
            </div>
        </div>
    </div>
</div>

<div class="mt-5 pt-4 border-top">
    <!-- Major Hospitals -->
    <h3 class="fw-bold mb-4 text-dark mt-4"><i class="fa-regular fa-hospital text-primary"></i> Major Hospitals in Faridabad</h3>
    <div class="row g-3 mb-5">
        <div class="col-md-6">
            <div class="p-4 bg-white rounded-4 shadow-sm border-start border-5 border-primary h-100 transition-hover" style="background-color: #f8fafd !important;">
                <h5 class="fw-bold mb-2">Asian Institute of Medical Sciences</h5>
                <p class="text-muted small mb-0"><i class="fa-solid fa-location-dot me-1 text-primary"></i> Sector 21A, Faridabad</p>
                <hr class="text-muted opacity-25">
                <span class="badge bg-white text-dark border me-1">Post-Surgery Care</span>
                <span class="badge bg-white text-dark border me-1">Cardiac Care</span>
            </div>
        </div>
        <div class="col-md-6">
            <div class="p-4 bg-white rounded-4 shadow-sm border-start border-5 border-success h-100 transition-hover" style="background-color: #f8fafd !important;">
                <h5 class="fw-bold mb-2">Fortis Escorts Hospital</h5>
                <p class="text-muted small mb-0"><i class="fa-solid fa-location-dot me-1 text-success"></i> NIT, Faridabad</p>
                <hr class="text-muted opacity-25">
                <span class="badge bg-white text-dark border me-1">Neurology</span>
                <span class="badge bg-white text-dark border">Elder Care</span>
            </div>
        </div>
        <div class="col-md-6">
            <div class="p-4 bg-white rounded-4 shadow-sm border-start border-5 border-info h-100 transition-hover" style="background-color: #f8fafd !important;">
                <h5 class="fw-bold mb-2">Amrita Hospital</h5>
                <p class="text-muted small mb-0"><i class="fa-solid fa-location-dot me-1 text-info"></i> Sector 88, Faridabad</p>
                <hr class="text-muted opacity-25">
                <span class="badge bg-white text-dark border me-1">Organ Transplant Care</span>
            </div>
        </div>
        <div class="col-md-6">
            <div class="p-4 bg-white rounded-4 shadow-sm border-start border-5 border-warning h-100 transition-hover" style="background-color: #f8fafd !important;">
                <h5 class="fw-bold mb-2">Metro Hospital</h5>
                <p class="text-muted small mb-0"><i class="fa-solid fa-location-dot me-1 text-warning"></i> Sector 16A, Faridabad</p>
                <hr class="text-muted opacity-25">
                <span class="badge bg-white text-dark border me-1">Orthopaedics</span>
            </div>
        </div>
    </div>
</div>

<div class="mt-5 pt-4 border-top">
    <!-- FAQs -->
    <h3 class="fw-bold mb-4 text-dark mt-4"><i class="fa-solid fa-circle-question text-primary"></i> Frequently Asked Questions in Faridabad</h3>
    <div class="accordion shadow-sm rounded-4 overflow-hidden mb-5" id="faridabadFaq">
        <div class="accordion-item border-0 border-bottom">
            <h2 class="accordion-header">
                <button class="accordion-button fw-bold bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                    Do you provide 24/7 home nursing services in all sectors of Faridabad?
                </button>
            </h2>
            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faridabadFaq">
                <div class="accordion-body text-muted bg-white">
                    Yes! We provide 24/7 nursing and attendant services across all sectors of Faridabad, including NIT, Greater Faridabad (Neharpar), and older sectors.
                </div>
            </div>
        </div>
        <div class="accordion-item border-0 border-bottom">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed fw-bold bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                    Can I rent an ICU Setup for my home in Faridabad?
                </button>
            </h2>
            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faridabadFaq">
                <div class="accordion-body text-muted bg-white">
                    Absolutely. We offer complete ICU setups including motorized beds, BiPAP/CPAP machines, oxygen concentrators, and multipara monitors on a monthly rental basis.
                </div>
            </div>
        </div>
    </div>
</div>
';
?>
