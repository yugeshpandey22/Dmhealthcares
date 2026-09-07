<style>
    .hero-carousel-wrap {
        width: 100%;
        background: #0f172a;
        position: relative;
        overflow: hidden;
    }
    
    /* Desktop & Tablet Banner Sizing */
    .hero-banner-img {
        width: 100%;
        height: auto;
        display: block;
        object-fit: cover;
    }

    /* Mobile / Phone Optimization: preserve 100% banner graphics without cropping */
    @media (max-width: 767.98px) {
        .hero-banner-img {
            width: 100%;
            height: auto;
            aspect-ratio: 3322 / 873;
            object-fit: contain;
            background: #0f172a;
        }
        .hero-carousel-wrap .carousel-control-prev,
        .hero-carousel-wrap .carousel-control-next {
            width: 32px !important;
            height: 32px !important;
            margin: 0 6px !important;
        }
        .hero-carousel-wrap .carousel-control-prev-icon,
        .hero-carousel-wrap .carousel-control-next-icon {
            width: 14px !important;
            height: 14px !important;
        }
    }

    @media (min-width: 768px) and (max-width: 1199.98px) {
        .hero-banner-img {
            min-height: 320px;
            max-height: 440px;
            object-fit: cover;
        }
    }

    @media (min-width: 1200px) {
        .hero-banner-img {
            min-height: 380px;
            max-height: 560px;
            object-fit: cover;
        }
    }

    /* Modern Circular Carousel Controls */
    .hero-carousel-wrap .carousel-control-prev,
    .hero-carousel-wrap .carousel-control-next {
        width: 44px;
        height: 44px;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(15, 23, 42, 0.6);
        border-radius: 50%;
        backdrop-filter: blur(6px);
        margin: 0 14px;
        opacity: 0.85;
        border: 1px solid rgba(255, 255, 255, 0.15);
        transition: all 0.3s ease;
    }
    .hero-carousel-wrap .carousel-control-prev:hover,
    .hero-carousel-wrap .carousel-control-next:hover {
        background: var(--primary-color);
        border-color: var(--primary-color);
        opacity: 1;
        transform: translateY(-50%) scale(1.08);
    }
    .hero-carousel-wrap .carousel-control-prev-icon,
    .hero-carousel-wrap .carousel-control-next-icon {
        width: 18px;
        height: 18px;
    }

    /* Modern Indicators */
    .hero-carousel-wrap .carousel-indicators {
        margin-bottom: 12px;
        gap: 6px;
    }
    .hero-carousel-wrap .carousel-indicators [data-bs-target] {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        border: none;
        background-color: rgba(255, 255, 255, 0.5);
        transition: all 0.3s ease;
    }
    .hero-carousel-wrap .carousel-indicators .active {
        width: 24px;
        border-radius: 12px;
        background-color: var(--primary-color);
    }

    /* Floating Live Badge for Desktop */
    .hero-live-badge-desktop {
        position: absolute;
        top: 18px;
        left: 20px;
        z-index: 10;
        background: rgba(15, 23, 42, 0.88);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.15);
        color: #ffffff;
        border-radius: 50px;
        padding: 7px 18px;
        font-size: 0.82rem;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.3);
    }

    /* Mobile Top Notification Ribbon */
    .hero-live-ribbon-mobile {
        background: #0f172a;
        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        padding: 6px 12px;
        font-size: 0.74rem;
        color: #e2e8f0;
        font-weight: 600;
    }

    .hero-pulse-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background-color: #22c55e;
        box-shadow: 0 0 0 0 rgba(34, 197, 94, 0.7);
        animation: heroPulse 1.8s infinite;
        flex-shrink: 0;
    }
    @keyframes heroPulse {
        0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(34, 197, 94, 0.7); }
        70% { transform: scale(1); box-shadow: 0 0 0 8px rgba(34, 197, 94, 0); }
        100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(34, 197, 94, 0); }
    }

    /* Quick Trust Bar Under Banner */
    .hero-trust-bar {
        background: rgba(15, 23, 42, 0.96);
        backdrop-filter: blur(12px);
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        padding: 12px 0;
    }
    .hero-trust-pill {
        color: #f8fafc;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 0.84rem;
        font-weight: 600;
        padding: 6px 12px;
        border-radius: 30px;
        background: rgba(255, 255, 255, 0.06);
        border: 1px solid rgba(255, 255, 255, 0.08);
        transition: all 0.3s ease;
    }
    .hero-trust-pill:hover {
        background: rgba(229, 37, 42, 0.2);
        border-color: rgba(229, 37, 42, 0.5);
        color: #ffffff;
        transform: translateY(-2px);
    }
    .hero-trust-pill i {
        color: #e5252a;
        font-size: 0.95rem;
    }

    /* Mobile Quick Action Strip */
    .hero-mobile-actions {
        background: #1e293b;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        padding: 8px 12px;
    }
    .hero-mobile-btn {
        flex: 1;
        font-size: 0.78rem;
        font-weight: 700;
        padding: 8px 10px;
        border-radius: 8px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        text-decoration: none;
    }
</style>

<section id="home" class="hero-carousel-wrap">
    <!-- Desktop Floating Live Badge -->
    <div class="hero-live-badge-desktop d-none d-md-inline-flex">
        <span class="hero-pulse-dot"></span>
        <span>24/7 Home Care Active Across Delhi NCR &bull; Faridabad &bull; Noida &bull; Gurugram</span>
    </div>

    <!-- Mobile Top Live Status Bar -->
    <div class="hero-live-ribbon-mobile d-flex d-md-none align-items-center justify-content-center gap-2 text-center">
        <span class="hero-pulse-dot"></span>
        <span>24/7 Rapid Home Care Across Delhi NCR</span>
    </div>

    <!-- Main Banner Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000" data-bs-pause="hover" data-bs-touch="true">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/images/banner1.jpg" class="d-block hero-banner-img" alt="DM Healthcare Home Nursing & Patient Care" fetchpriority="high">
        </div>
        <div class="carousel-item">
          <img src="assets/images/banner2.jpg" class="d-block hero-banner-img" alt="DM Healthcare Medical Equipment on Rent" loading="lazy" decoding="async">
        </div>
        <div class="carousel-item">
          <img src="assets/images/banner3.jpg" class="d-block hero-banner-img" alt="DM Healthcare Critical ICU Care at Home" loading="lazy" decoding="async">
        </div>
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev" aria-label="Previous Slide">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next" aria-label="Next Slide">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- Mobile Quick Action Buttons (Directly Under Banner on Phone) -->
    <div class="hero-mobile-actions d-flex d-md-none gap-2">
        <a href="tel:+918860600423" class="hero-mobile-btn btn btn-danger text-white shadow-sm" style="background: var(--primary-color); border: none;">
            <i class="fa-solid fa-phone-volume"></i> Call 24/7
        </a>
        <a href="https://wa.me/918860600423?text=Hi%2C%20I%20need%20urgent%20home%20healthcare%20services" target="_blank" class="hero-mobile-btn btn btn-success text-white shadow-sm" style="background: #25D366; border: none;">
            <i class="fa-brands fa-whatsapp fs-6"></i> WhatsApp
        </a>
        <a href="#appointment" class="hero-mobile-btn btn btn-outline-light text-white">
            <i class="fa-regular fa-calendar-check"></i> Book Now
        </a>
    </div>

    <!-- Quick Trust Strip Under Banner -->
    <div class="hero-trust-bar">
        <div class="container">
            <!-- Desktop / Tablet Layout -->
            <div class="d-none d-md-flex flex-wrap justify-content-between align-items-center gap-2">
                <div class="hero-trust-pill">
                    <i class="fa-solid fa-truck-fast"></i>
                    <span>30-60 Min Rapid Response</span>
                </div>
                <div class="hero-trust-pill">
                    <i class="fa-solid fa-user-shield"></i>
                    <span>100% Verified Nursing Staff</span>
                </div>
                <div class="hero-trust-pill">
                    <i class="fa-solid fa-bed-pulse"></i>
                    <span>ICU Equipment Setup at Home</span>
                </div>
                <div class="hero-trust-pill">
                    <i class="fa-solid fa-stethoscope"></i>
                    <span>Doctor-Supervised Protocols</span>
                </div>
            </div>

            <!-- Mobile 2x2 Clean Grid Layout -->
            <div class="row g-2 d-flex d-md-none text-center">
                <div class="col-6">
                    <div class="hero-trust-pill w-100 justify-content-center py-2" style="font-size: 0.72rem;">
                        <i class="fa-solid fa-truck-fast"></i>
                        <span>30-60 Min Dispatch</span>
                    </div>
                </div>
                <div class="col-6">
                    <div class="hero-trust-pill w-100 justify-content-center py-2" style="font-size: 0.72rem;">
                        <i class="fa-solid fa-user-shield"></i>
                        <span>100% Verified Staff</span>
                    </div>
                </div>
                <div class="col-6">
                    <div class="hero-trust-pill w-100 justify-content-center py-2" style="font-size: 0.72rem;">
                        <i class="fa-solid fa-bed-pulse"></i>
                        <span>Home ICU Setup</span>
                    </div>
                </div>
                <div class="col-6">
                    <div class="hero-trust-pill w-100 justify-content-center py-2" style="font-size: 0.72rem;">
                        <i class="fa-solid fa-stethoscope"></i>
                        <span>Doctor Supervised</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>