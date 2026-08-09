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

body {
    font-family: "Inter", sans-serif;
}

/* Hero Section */
.other-hero {
    background: linear-gradient(135deg, #f0f4ff 0%, #ffffff 100%);
    border-bottom: 1px solid var(--border-color);
    padding: 80px 0;
    position: relative;
    overflow: hidden;
}

.hero-pattern {
    position: absolute;
    top: -50px;
    right: -50px;
    width: 400px;
    height: 400px;
    background: radial-gradient(circle, rgba(13, 110, 253, 0.05) 0%, transparent 70%);
    z-index: 0;
}

/* Equipment Cards */
.eq-card {
    background: white;
    border: 1px solid var(--border-color);
    border-radius: 16px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.eq-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.08);
}

.eq-img-wrapper {
    height: 180px;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    border-radius: 16px 16px 0 0;
    display: flex;
    align-items: center;
    justify-content: center;
    border-bottom: 1px solid var(--border-color);
}

.eq-icon {
    font-size: 60px;
    color: var(--primary-color);
    opacity: 0.8;
}

/* Feature Icon Cards */
.feat-card {
    background: white;
    border: 1px solid var(--border-color);
    border-radius: 16px;
    padding: 2rem;
    transition: all 0.3s ease;
}

.feat-card:hover {
    box-shadow: 0 10px 25px rgba(0,0,0,0.05);
}
</style>

<!-- 1. Hero Section -->
<section class="other-hero">
    <div class="hero-pattern"></div>
    <div class="container position-relative z-1 py-5">
        <div class="row align-items-center">
            <div class="col-lg-7 mb-5 mb-lg-0 pe-lg-5">
                <span class="badge bg-primary px-3 py-2 rounded-pill mb-4 fw-bold shadow-sm">Home Care Essentials</span>
                <h1 class="display-5 fw-bold mb-4 text-dark">Essential Medical & Mobility Equipment</h1>
                <p class="lead mb-4 text-muted" style="opacity: 0.9;">We provide a comprehensive range of everyday medical supplies, mobility aids, and home care essentials to ensure a safe, comfortable, and independent recovery at home.</p>
                
                <div class="d-flex flex-wrap gap-3 mt-5">
                    <a href="#inventory" class="btn btn-primary btn-lg fw-bold px-5 rounded-pill shadow-sm">
                        <i class="fa-solid fa-list me-2"></i> View Equipment
                    </a>
                    <a href="tel:+918521179540" class="btn btn-outline-dark btn-lg fw-bold px-5 rounded-pill">
                        <i class="fa-solid fa-phone me-2"></i> Call Us
                    </a>
                </div>
            </div>
            <div class="col-lg-5 text-center">
                <div class="position-relative">
                    <div class="rounded-4 shadow-lg w-100 d-flex flex-column align-items-center justify-content-center bg-white border border-4 border-light" style="height: 400px;">
                        <div class="mb-4 bg-primary bg-opacity-10 p-5 rounded-circle d-flex align-items-center justify-content-center" style="width: 180px; height: 180px;">
                            <i class="fa-solid fa-crutch text-primary" style="font-size: 80px;"></i>
                        </div>
                        <span class="text-muted fw-bold text-uppercase tracking-wider">Mobility & Care</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. Equipment Inventory Grid -->
<section id="inventory" class="py-5" style="background-color: var(--light-bg);">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">Our Miscellaneous Equipment Range</h2>
            <div class="mx-auto mt-3 mb-4" style="width: 60px; height: 4px; background-color: var(--primary-color); border-radius: 2px;"></div>
            <p class="text-muted mx-auto" style="max-width: 600px;">Explore our collection of reliable, high-quality medical accessories designed for patient comfort and daily care routines.</p>
        </div>

        <div class="row g-4">';

        $other_equip = [
            ["name" => "Air Mattress (Alpha Bed)", "desc" => "Medical-grade alternating pressure mattresses to prevent and treat bedsores for bedridden patients.", "icon" => "fa-mattress-fine", "type" => "Rent/Sale"],
            ["name" => "DVT Pump", "desc" => "Deep Vein Thrombosis pumps to prevent blood clots in the legs by improving circulation.", "icon" => "fa-shoe-prints", "type" => "Rent/Sale"],
            ["name" => "IV Stand", "desc" => "Adjustable stainless steel IV poles on wheels for continuous fluid or medication administration.", "icon" => "fa-staff-snake", "type" => "Sale Only"],
            ["name" => "Commode & Shower Chair", "desc" => "Sturdy, foldable commode chairs with wheels for safe bathroom use and hygiene.", "icon" => "fa-wheelchair", "type" => "Sale Only"],
            ["name" => "Walking Aids (Walkers/Sticks)", "desc" => "Lightweight aluminum folding walkers, rollators, and tripods for mobility assistance.", "icon" => "fa-crutch", "type" => "Sale Only"],
            ["name" => "Nebulizer Machine", "desc" => "Compressor nebulizers for quick and effective aerosol medication delivery for asthma or COPD.", "icon" => "fa-mask-face", "type" => "Sale Only"]
        ];

        foreach($other_equip as $item) {
            $badge_bg = ($item['type'] == 'Sale Only') ? 'bg-danger' : 'bg-success';
            
            $frontend_custom_sections .= '
            <div class="col-lg-4 col-md-6">
                <div class="eq-card">
                    <div class="position-relative">
                        <div class="eq-img-wrapper">
                            <i class="fa-solid '.$item['icon'].' eq-icon"></i>
                        </div>
                        <span class="badge '.$badge_bg.' position-absolute top-0 end-0 mt-3 me-3 shadow-sm">'.$item['type'].'</span>
                    </div>
                    <div class="p-4 d-flex flex-column flex-grow-1 text-center">
                        <h5 class="fw-bold text-dark mb-3">'.$item['name'].'</h5>
                        <p class="text-muted small mb-4 flex-grow-1">'.$item['desc'].'</p>
                        <a href="index.php#appointment" class="btn btn-outline-primary rounded-pill w-100 fw-bold">Enquire Now</a>
                    </div>
                </div>
            </div>';
        }

$frontend_custom_sections .= '
        </div>
    </div>
</section>

<!-- 3. Why Choose Our Care Essentials -->
<section class="py-5">
    <div class="container py-4">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6">
                <h2 class="fw-bold text-dark">Why Choose Our Care Essentials?</h2>
                <div class="mt-3 mb-4" style="width: 60px; height: 4px; background-color: var(--primary-color); border-radius: 2px;"></div>
                <p class="text-muted lead">We provide medical supplies that are durable, sanitized, and recommended by top physiotherapists and doctors.</p>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="feat-card h-100">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                            <i class="fa-solid fa-check-double text-primary fs-5"></i>
                        </div>
                        <h6 class="fw-bold mb-0">High Durability</h6>
                    </div>
                    <p class="text-muted small mb-0">Constructed from premium materials like lightweight aluminum and stainless steel to ensure longevity.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="feat-card h-100">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                            <i class="fa-solid fa-spray-can-sparkles text-primary fs-5"></i>
                        </div>
                        <h6 class="fw-bold mb-0">Hygienic & Sanitized</h6>
                    </div>
                    <p class="text-muted small mb-0">All rental equipment is thoroughly disinfected and steam-sanitized before being dispatched to you.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="feat-card h-100">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                            <i class="fa-solid fa-truck-fast text-primary fs-5"></i>
                        </div>
                        <h6 class="fw-bold mb-0">Doorstep Delivery</h6>
                    </div>
                    <p class="text-muted small mb-0">We offer fast and hassle-free delivery directly to your home so you can focus on patient recovery.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. Quick FAQ -->
<section class="py-5" style="background-color: var(--light-bg);">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">Common Questions</h2>
            <div class="mx-auto mt-3 mb-4" style="width: 60px; height: 4px; background-color: var(--primary-color); border-radius: 2px;"></div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion shadow-sm rounded-4 overflow-hidden" id="faqAccordion">
                    
                    <div class="accordion-item border-0 border-bottom">
                        <h2 class="accordion-header">
                            <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                Can I rent a commode chair or walker?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                For hygiene and safety reasons, intimate and highly personal items like Commode Chairs and standard Walkers are available for <strong>Sale Only</strong>. However, larger equipment like DVT Pumps and Air Mattresses can be rented.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 border-bottom">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                How do I setup the Air Mattress (Alpha Bed)?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                The Air Mattress comes with a quiet electric pump. Our delivery team will set it up for you on top of your existing bed and demonstrate how to operate the pressure dials.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                Do you provide home delivery for small accessories?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                Yes, we provide home delivery for all our medical equipment and mobility aids. Delivery charges may apply based on your location and the size of the equipment.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. Contact CTA -->
<section class="py-5" style="background: var(--dark-bg);">
    <div class="container py-5 text-center text-white">
        <h2 class="display-6 fw-bold mb-4">Didn\'t find what you are looking for?</h2>
        <p class="lead mb-5 opacity-75 mx-auto" style="max-width: 600px;">We stock hundreds of medical accessories and spares. Call our support team and we will source exactly what you need.</p>
        <div class="d-flex justify-content-center gap-3">
            <a href="tel:+918521179540" class="btn btn-primary btn-lg fw-bold px-5 py-3 rounded-pill shadow-sm">
                <i class="fa-solid fa-phone me-2"></i> +91-8521179540
            </a>
            <a href="https://wa.me/918521179540" target="_blank" class="btn btn-success btn-lg fw-bold px-5 py-3 rounded-pill shadow-sm">
                <i class="fa-brands fa-whatsapp me-2"></i> WhatsApp
            </a>
        </div>
    </div>
</section>

';
?>
