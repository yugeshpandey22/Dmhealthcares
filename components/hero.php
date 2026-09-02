<style>
/* Modern Hero Carousel Styling */
.hero-carousel-section {
    position: relative;
    background: #0f172a;
    overflow: hidden;
}

.hero-slide-item {
    position: relative;
    min-height: 560px;
    display: flex;
    align-items: center;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

@media (min-width: 992px) {
    .hero-slide-item {
        min-height: 620px;
    }
}

@media (max-width: 768px) {
    .hero-slide-item {
        min-height: 500px;
        padding: 40px 0;
    }
}

/* Gradient Overlay for Crisp Text Readability */
.hero-overlay-dark {
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: linear-gradient(90deg, rgba(15, 23, 42, 0.92) 0%, rgba(15, 23, 42, 0.75) 45%, rgba(15, 23, 42, 0.3) 100%);
    z-index: 1;
}

@media (max-width: 768px) {
    .hero-overlay-dark {
        background: linear-gradient(180deg, rgba(15, 23, 42, 0.94) 0%, rgba(15, 23, 42, 0.85) 100%);
    }
}

.hero-content-wrap {
    position: relative;
    z-index: 2;
    color: #ffffff;
}

/* Badge Pill */
.hero-badge-pill {
    display: inline-flex;
    align-items: center;
    background: rgba(229, 37, 42, 0.2);
    border: 1px solid rgba(229, 37, 42, 0.4);
    color: #ff8b8e;
    padding: 8px 18px;
    border-radius: 30px;
    font-size: 0.82rem;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
    backdrop-filter: blur(8px);
}

/* Hero Typography */
.hero-main-title {
    font-size: 2.3rem;
    font-weight: 800;
    line-height: 1.2;
    letter-spacing: -0.5px;
    color: #ffffff;
    margin-top: 14px;
    margin-bottom: 16px;
}

@media (min-width: 768px) {
    .hero-main-title {
        font-size: 3.2rem;
    }
}

@media (min-width: 1200px) {
    .hero-main-title {
        font-size: 3.8rem;
    }
}

.hero-desc-text {
    font-size: 1.05rem;
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.85);
    max-width: 680px;
    margin-bottom: 24px;
}

@media (min-width: 768px) {
    .hero-desc-text {
        font-size: 1.18rem;
    }
}

/* Trust Metric Tags */
.hero-trust-bar {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    margin-bottom: 30px;
}

.hero-trust-pill {
    background: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.15);
    padding: 6px 16px;
    border-radius: 20px;
    font-size: 0.85rem;
    font-weight: 600;
    color: #ffffff;
    backdrop-filter: blur(6px);
}

/* Hero Action Buttons */
.hero-btn-primary {
    background: var(--primary-color);
    border: 2px solid var(--primary-color);
    color: #ffffff;
    font-weight: 700;
    padding: 14px 32px;
    border-radius: 30px;
    font-size: 1rem;
    transition: all 0.3s ease;
    box-shadow: 0 8px 25px rgba(229, 37, 42, 0.4);
    display: inline-flex;
    align-items: center;
    gap: 8px;
    text-decoration: none;
}
.hero-btn-primary:hover {
    background: #c4181d;
    border-color: #c4181d;
    color: #ffffff;
    transform: translateY(-3px);
    box-shadow: 0 12px 30px rgba(229, 37, 42, 0.55);
}

.hero-btn-secondary {
    background: rgba(255, 255, 255, 0.12);
    border: 2px solid rgba(255, 255, 255, 0.3);
    color: #ffffff;
    font-weight: 700;
    padding: 14px 28px;
    border-radius: 30px;
    font-size: 1rem;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    text-decoration: none;
    backdrop-filter: blur(6px);
}
.hero-btn-secondary:hover {
    background: #ffffff;
    color: #0f172a;
    border-color: #ffffff;
    transform: translateY(-3px);
}

/* Custom Controls */
.hero-carousel-control {
    width: 52px;
    height: 52px;
    background: rgba(15, 23, 42, 0.65);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    top: 50%;
    transform: translateY(-50%);
    opacity: 0.85;
    transition: all 0.3s ease;
    z-index: 5;
    margin: 0 20px;
}
.hero-carousel-control:hover {
    background: var(--primary-color);
    border-color: var(--primary-color);
    opacity: 1;
    transform: translateY(-50%) scale(1.1);
}

.carousel-indicators [data-bs-target] {
    width: 32px;
    height: 5px;
    border-radius: 3px;
    background-color: rgba(255, 255, 255, 0.4);
    border: none;
    transition: all 0.3s ease;
}
.carousel-indicators .active {
    background-color: var(--primary-color);
    width: 48px;
}
</style>

<section id="home" class="hero-carousel-section">
    <div id="heroHomeCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5500">
        
        <!-- Carousel Indicators -->
        <div class="carousel-indicators mb-4">
            <button type="button" data-bs-target="#heroHomeCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#heroHomeCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#heroHomeCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            
            <!-- SLIDE 1: HOME HEALTHCARE & NURSING -->
            <div class="carousel-item active">
                <div class="hero-slide-item" style="background-image: url('assets/images/banner1.jpg');">
                    <div class="hero-overlay-dark"></div>
                    <div class="container py-5">
                        <div class="row align-items-center">
                            <div class="col-lg-9 col-xl-8">
                                <div class="hero-content-wrap">
                                    <span class="hero-badge-pill">
                                        <i class="fa-solid fa-shield-heart me-2"></i> 24/7 Hospital-Grade Care at Home
                                    </span>
                                    
                                    <h1 class="hero-main-title">
                                        Empathetic Home Care & <span style="color: #ff6b6e;">Nursing Support</span>
                                    </h1>
                                    
                                    <p class="hero-desc-text">
                                        Certified GNM/B.Sc nurses, verified patient caretakers, elderly attendants, and senior physician home visits deployed directly to your doorstep in 30 to 60 minutes across Delhi NCR.
                                    </p>

                                    <div class="hero-trust-bar">
                                        <div class="hero-trust-pill">
                                            <i class="fa-solid fa-star text-warning me-1"></i> 4.9/5 Rating (10,000+ Families)
                                        </div>
                                        <div class="hero-trust-pill">
                                            <i class="fa-solid fa-clock text-info me-1"></i> 30-60 Min Dispatch
                                        </div>
                                        <div class="hero-trust-pill">
                                            <i class="fa-solid fa-user-shield text-success me-1"></i> 100% Police Verified Staff
                                        </div>
                                    </div>

                                    <div class="d-flex flex-wrap gap-3">
                                        <a href="#appointment" class="hero-btn-primary">
                                            <i class="fa-solid fa-calendar-check"></i> Book Home Care
                                        </a>
                                        <a href="tel:+919891989686" class="hero-btn-secondary">
                                            <i class="fa-solid fa-phone-volume text-danger" style="color: #ff8b8e !important;"></i> +91-9891989686
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SLIDE 2: MEDICAL EQUIPMENT ON RENT -->
            <div class="carousel-item">
                <div class="hero-slide-item" style="background-image: url('assets/images/banner2.jpg');">
                    <div class="hero-overlay-dark"></div>
                    <div class="container py-5">
                        <div class="row align-items-center">
                            <div class="col-lg-9 col-xl-8">
                                <div class="hero-content-wrap">
                                    <span class="hero-badge-pill">
                                        <i class="fa-solid fa-truck-fast me-2"></i> Same-Day Delivery & Free Setup
                                    </span>
                                    
                                    <h1 class="hero-main-title">
                                        Hospital Beds, BiPAP & <span style="color: #ff6b6e;">Oxygen on Rent</span>
                                    </h1>
                                    
                                    <p class="hero-desc-text">
                                        Sanitized motorized hospital beds, 5L/10L oxygen concentrators, BiPAP/CPAP ventilation therapy, and motorized wheelchairs delivered with doorstep installation & 24/7 technical support.
                                    </p>

                                    <div class="hero-trust-bar">
                                        <div class="hero-trust-pill">
                                            <i class="fa-solid fa-bolt text-warning me-1"></i> 2-Hour Express Delivery
                                        </div>
                                        <div class="hero-trust-pill">
                                            <i class="fa-solid fa-pump-medical text-info me-1"></i> 100% Medically Sanitized
                                        </div>
                                        <div class="hero-trust-pill">
                                            <i class="fa-solid fa-tag text-success me-1"></i> Lowest Monthly Rental Rates
                                        </div>
                                    </div>

                                    <div class="d-flex flex-wrap gap-3">
                                        <a href="#equipment" class="hero-btn-primary">
                                            <i class="fa-solid fa-bed"></i> Rent Medical Equipment
                                        </a>
                                        <a href="https://wa.me/919891989686?text=Hello%20DM%20Healthcare,%20I%20need%20to%20rent%20medical%20equipment." target="_blank" class="hero-btn-secondary">
                                            <i class="fa-brands fa-whatsapp text-success"></i> WhatsApp Quick Order
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SLIDE 3: CRITICAL ICU CARE & DIAGNOSTICS -->
            <div class="carousel-item">
                <div class="hero-slide-item" style="background-image: url('assets/images/banner3.jpg');">
                    <div class="hero-overlay-dark"></div>
                    <div class="container py-5">
                        <div class="row align-items-center">
                            <div class="col-lg-9 col-xl-8">
                                <div class="hero-content-wrap">
                                    <span class="hero-badge-pill">
                                        <i class="fa-solid fa-heart-pulse me-2"></i> Advanced Critical Care & Lab Tests
                                    </span>
                                    
                                    <h1 class="hero-main-title">
                                        Complete Home ICU & <span style="color: #ff6b6e;">Preventive Packages</span>
                                    </h1>
                                    
                                    <p class="hero-desc-text">
                                        Hospital-standard ICU setup with multi-para cardiac monitors, ventilators, 24/7 critical care nurses, doorstep blood sample collections, and comprehensive annual health protection plans.
                                    </p>

                                    <div class="hero-trust-bar">
                                        <div class="hero-trust-pill">
                                            <i class="fa-solid fa-user-doctor text-warning me-1"></i> Senior Doctor Supervision
                                        </div>
                                        <div class="hero-trust-pill">
                                            <i class="fa-solid fa-flask-vial text-info me-1"></i> NABL Certified Lab Reports
                                        </div>
                                        <div class="hero-trust-pill">
                                            <i class="fa-solid fa-shield-halved text-success me-1"></i> 365 Days Health Concierge
                                        </div>
                                    </div>

                                    <div class="d-flex flex-wrap gap-3">
                                        <a href="preventive-healthcare-packages" class="hero-btn-primary">
                                            <i class="fa-solid fa-notes-medical"></i> View Health Packages
                                        </a>
                                        <a href="tel:+919891989686" class="hero-btn-secondary">
                                            <i class="fa-solid fa-phone-volume text-danger" style="color: #ff8b8e !important;"></i> Emergency ICU Care
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Custom Left/Right Carousel Controls -->
        <button class="carousel-control-prev hero-carousel-control d-none d-md-flex" type="button" data-bs-target="#heroHomeCarousel" data-bs-slide="prev">
            <i class="fa-solid fa-chevron-left text-white fs-5"></i>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next hero-carousel-control d-none d-md-flex" type="button" data-bs-target="#heroHomeCarousel" data-bs-slide="next">
            <i class="fa-solid fa-chevron-right text-white fs-5"></i>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>