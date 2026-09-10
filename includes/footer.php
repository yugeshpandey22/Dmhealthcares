<footer class="dm-footer mt-auto">
        <!-- 1. Top Trust & Quick Contact Strip -->
        <div class="footer-top-strip py-4">
            <div class="container">
                <div class="row g-3 align-items-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="d-flex align-items-center gap-3 footer-trust-item">
                            <div class="footer-trust-icon" style="background: rgba(216, 0, 0, 0.12); color: #d80000;">
                                <i class="fa-solid fa-truck-medical fs-4"></i>
                            </div>
                            <div>
                                <h6 class="mb-0 fw-bold text-white fs-6">30–60 Mins Setup</h6>
                                <small class="text-secondary">Rapid response across Delhi NCR</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="d-flex align-items-center gap-3 footer-trust-item">
                            <div class="footer-trust-icon" style="background: rgba(216, 0, 0, 0.12); color: #d80000;">
                                <i class="fa-solid fa-user-shield fs-4"></i>
                            </div>
                            <div>
                                <h6 class="mb-0 fw-bold text-white fs-6">100% Verified Staff</h6>
                                <small class="text-secondary">Police & background verified</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="d-flex align-items-center gap-3 footer-trust-item">
                            <div class="footer-trust-icon" style="background: rgba(216, 0, 0, 0.12); color: #d80000;">
                                <i class="fa-solid fa-stethoscope fs-4"></i>
                            </div>
                            <div>
                                <h6 class="mb-0 fw-bold text-white fs-6">Doctor Supervised</h6>
                                <small class="text-secondary">Continuous clinical protocol</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-lg-end">
                        <a href="tel:+918860600423" class="btn btn-footer-call px-4 py-2 rounded-pill fw-bold shadow-sm d-inline-flex align-items-center gap-2">
                            <i class="fa-solid fa-phone-volume text-white"></i>
                            <span>24x7 Helpline: +91 88606 00423</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2. Main Footer Body -->
        <div class="footer-main-body py-5">
            <div class="container">
                <div class="row g-4 g-lg-5">
                    
                    <!-- Column 1: Brand Info & Socials (3.5 cols) -->
                    <div class="col-lg-4 col-md-6">
                        <?php $home_link = (strpos($_SERVER['HTTP_HOST'] ?? '', 'localhost') !== false || strpos($_SERVER['HTTP_HOST'] ?? '', '127.0.0.1') !== false) ? '/DmHealthcare/' : '/'; ?>
                        <a href="<?= $home_link ?>" class="d-inline-flex align-items-center bg-white rounded-3 px-3 py-2 mb-3 text-decoration-none shadow-sm footer-logo-card">
                            <img src="assets/images/logo.png" alt="DM Healthcare Logo" loading="lazy" style="height: 52px; width: auto; object-fit: contain;">
                            <div class="d-flex flex-column justify-content-center ms-2" style="line-height: 1.1;">
                                <div style="font-size: 15px; font-weight: 900; letter-spacing: 0.5px; font-family: 'Arial', sans-serif;">
                                    <span style="color: #d80000;">D</span><span style="color: #333333;">M</span> 
                                    <span style="color: #444444; margin-left: 5px;">HEALTH</span> 
                                    <span style="color: #d80000; margin-left: 5px;">CARE</span>
                                </div>
                                <div class="d-flex align-items-center w-100 my-1">
                                    <div style="flex-grow: 1; height: 1.5px; background-color: #d80000;"></div>
                                    <i class="fa-solid fa-heart-pulse mx-1" style="color: #d80000; font-size: 8px;"></i>
                                    <div style="flex-grow: 1; height: 1.5px; background-color: #333333;"></div>
                                </div>
                                <div style="font-size: 7.5px; font-weight: 700; letter-spacing: 1.8px; color: #555555; text-transform: uppercase;">
                                    Your Health, Our Priority
                                </div>
                            </div>
                        </a>

                        <p class="footer-desc-text text-secondary mb-4">
                            <strong class="text-white"><span style="color: #d80000;">DM</span> Healthcare</strong> is North India’s premier doorstep medical network providing certified nursing care, ICU setups at home, elderly companionship, and hospital-grade medical equipment rental across Delhi NCR.
                        </p>

                        <!-- Accreditation Badge -->
                        <div class="p-2 px-3 rounded-3 mb-4 d-inline-flex align-items-center gap-2 border border-secondary border-opacity-25" style="background: rgba(255,255,255,0.03);">
                            <i class="fa-solid fa-award text-danger fs-5" style="color: #d80000 !important;"></i>
                            <span class="small text-secondary fw-semibold">Govt. Registered & Police Verified Network</span>
                        </div>

                        <!-- Social Media Links -->
                        <div class="d-flex align-items-center gap-2 footer-social-wrap">
                            <a href="https://wa.me/918860600423" target="_blank" class="footer-social-btn" aria-label="WhatsApp" title="Chat on WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
                            <a href="tel:+918860600423" class="footer-social-btn" aria-label="Phone" title="Call Us"><i class="fa-solid fa-phone"></i></a>
                            <a href="#" class="footer-social-btn" aria-label="Facebook" title="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#" class="footer-social-btn" aria-label="Instagram" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#" class="footer-social-btn" aria-label="LinkedIn" title="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                        </div>
                    </div>

                    <!-- Column 2: Home Care Services (2 cols) -->
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <h6 class="footer-heading">Home Healthcare</h6>
                        <ul class="footer-links-list list-unstyled mb-0">
                            <li><a href="page.php?title=icu-care---critical-care"><i class="fa-solid fa-angle-right me-1"></i> ICU Care at Home</a></li>
                            <li><a href="page.php?title=patient-care---general-nursing"><i class="fa-solid fa-angle-right me-1"></i> 24/7 Nursing Care</a></li>
                            <li><a href="page.php?title=elder-care---basic-care"><i class="fa-solid fa-angle-right me-1"></i> Elderly Attendants</a></li>
                            <li><a href="page.php?title=physiotherapist"><i class="fa-solid fa-angle-right me-1"></i> Physiotherapy</a></li>
                            <li><a href="page.php?title=physician-doctor"><i class="fa-solid fa-angle-right me-1"></i> Doctor Home Visit</a></li>
                            <li><a href="page.php?title=palliative-care"><i class="fa-solid fa-angle-right me-1"></i> Palliative & Stroke Care</a></li>
                            <li><a href="page.php?title=live-in-care---24-hours-care"><i class="fa-solid fa-angle-right me-1"></i> 24-Hr Live-In Care</a></li>
                        </ul>
                    </div>

                    <!-- Column 3: Medical Equipment (2.5 cols) -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <h6 class="footer-heading">Equipment on Rent</h6>
                        <ul class="footer-links-list list-unstyled mb-0">
                            <li><a href="page.php?title=oxygen-concentrator"><i class="fa-solid fa-angle-right me-1"></i> Oxygen Concentrator (5L/10L)</a></li>
                            <li><a href="page.php?title=hospital-bed"><i class="fa-solid fa-angle-right me-1"></i> ICU & Motorized Beds</a></li>
                            <li><a href="page.php?title=bipap-cpap"><i class="fa-solid fa-angle-right me-1"></i> BiPAP & CPAP Machines</a></li>
                            <li><a href="page.php?title=wheelchairs"><i class="fa-solid fa-angle-right me-1"></i> Wheelchairs (Electric/Manual)</a></li>
                            <li><a href="page.php?title=neo-bolt-scooter"><i class="fa-solid fa-angle-right me-1"></i> NeoBolt Mobility Scooter</a></li>
                            <li><a href="page.php?title=oxygen-cylinder"><i class="fa-solid fa-angle-right me-1"></i> Oxygen Cylinders & Refills</a></li>
                            <li><a href="page.php?title=preventive-healthcare-packages"><i class="fa-solid fa-angle-right me-1"></i> Annual Health Packages</a></li>
                        </ul>
                    </div>

                    <!-- Column 4: Contact & Coverage Area (2.5 cols) -->
                    <div class="col-lg-3 col-md-6">
                        <h6 class="footer-heading">Care Desk & Locations</h6>
                        <div class="footer-contact-box mb-3">
                            <div class="d-flex align-items-start gap-3 mb-3">
                                <div class="footer-contact-icon" style="color: #d80000;">
                                    <i class="fa-solid fa-headset"></i>
                                </div>
                                <div>
                                    <span class="small text-secondary d-block">24/7 Helpline & Booking</span>
                                    <a href="tel:+918860600423" class="text-white fw-bold text-decoration-none fs-6 hover-brand-red">+91 88606 00423</a>
                                </div>
                            </div>

                            <div class="d-flex align-items-start gap-3 mb-3">
                                <div class="footer-contact-icon" style="color: #d80000;">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div>
                                    <span class="small text-secondary d-block">Official Email Desk</span>
                                    <a href="mailto:dmhealthcare48@gmail.com" class="text-white small text-decoration-none hover-brand-red">dmhealthcare48@gmail.com</a>
                                </div>
                            </div>

                            <div class="d-flex align-items-start gap-3 mb-3">
                                <div class="footer-contact-icon" style="color: #d80000;">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div>
                                    <span class="small text-secondary d-block">Head Office</span>
                                    <span class="text-white small lh-sm d-block">B-191, IInd Floor, Green Field Colony, Faridabad, Haryana 121003</span>
                                </div>
                            </div>
                        </div>

                        <!-- Hiring & Careers CTA Pill -->
                        <a href="page.php?title=jobs-career" class="footer-career-pill d-flex align-items-center justify-content-between text-decoration-none p-2 px-3 rounded-3 mt-2">
                            <div class="d-flex align-items-center gap-2">
                                <i class="fa-solid fa-briefcase" style="color: #d80000;"></i>
                                <span class="text-white small fw-bold">Healthcare Careers</span>
                            </div>
                            <span class="badge rounded-pill px-2 py-1" style="background: #d80000; color: #ffffff; font-size: 0.7rem;">We're Hiring</span>
                        </a>
                    </div>

                </div>

                <!-- Coverage Areas Pill Grid -->
                <div class="mt-5 pt-4 border-top border-secondary border-opacity-25">
                    <div class="row align-items-center g-3">
                        <div class="col-md-3">
                            <span class="text-white fw-bold small text-uppercase" style="letter-spacing: 0.5px;">
                                <i class="fa-solid fa-map-location-dot me-2" style="color: #d80000;"></i> Active Coverage:
                            </span>
                        </div>
                        <div class="col-md-9">
                            <div class="d-flex flex-wrap gap-2 footer-cities-wrap">
                                <span class="footer-city-tag">Faridabad</span>
                                <span class="footer-city-tag">Noida</span>
                                <span class="footer-city-tag">Greater Noida</span>
                                <span class="footer-city-tag">South Delhi</span>
                                <span class="footer-city-tag">Central Delhi</span>
                                <span class="footer-city-tag">North Delhi</span>
                                <span class="footer-city-tag">Gurugram</span>
                                <span class="footer-city-tag">Ghaziabad</span>
                                <span class="footer-city-tag">Palwal</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- 3. Medical Emergency Disclaimer Bar -->
        <div class="footer-disclaimer-bar py-2 text-center">
            <div class="container">
                <p class="mb-0 text-secondary" style="font-size: 0.78rem;">
                    <i class="fa-solid fa-triangle-exclamation me-1" style="color: #d80000;"></i>
                    <strong class="text-white">Emergency Disclaimer:</strong> <strong class="text-white"><span style="color: #d80000;">DM</span> Healthcare</strong> provides home-based clinical nursing, eldercare & equipment services. In case of life-threatening emergencies, please immediately call 112 / 102 or visit the nearest hospital emergency ICU.
                </p>
            </div>
        </div>

        <!-- 4. Bottom Copyright & Credits Strip -->
        <div class="footer-bottom-bar py-3 border-top border-secondary border-opacity-25">
            <div class="container">
                <div class="row align-items-center g-2 text-center text-md-start">
                    <div class="col-md-6">
                        <p class="mb-0 text-secondary small">
                            Copyright © <?= date("Y") ?> <a href="index.php" class="text-decoration-none"><strong style="color: #d80000; letter-spacing: 0.5px;">DM</strong> <strong class="text-white">HEALTH</strong><strong style="color: #d80000;">CARE</strong></a>. All Rights Reserved.
                        </p>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <p class="mb-0 text-secondary small">
                            Designed & Developed by <a href="https://www.mineib.com" target="_blank" rel="noopener noreferrer" class="text-white fw-bold text-decoration-none hover-brand-red" style="transition: all 0.25s ease;"><span style="color: #d80000;"><i class="fa-solid fa-code me-1"></i></span>Mineib Creative Technology</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <style>
    /* DM Healthcare Logo-Matched Brand Colors */
    :root {
        --dm-brand-red: #d80000;
        --dm-brand-red-dark: #b00000;
        --dm-brand-charcoal: #333333;
        --dm-brand-dark-bg: #121418;
        --dm-brand-dark-surface: #181b22;
        --dm-brand-dark-bottom: #0b0c0f;
    }

    /* Premium Modern Footer Styles */
    .dm-footer {
        background: var(--dm-brand-dark-bg);
        color: #94a3b8;
        font-family: 'Inter', sans-serif;
        border-top: 4px solid var(--dm-brand-red);
        position: relative;
        overflow: hidden;
    }
    .dm-footer::before {
        content: "";
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 2px;
        background: linear-gradient(90deg, #d80000 0%, #333333 50%, #d80000 100%);
    }

    /* Top Trust Strip */
    .footer-top-strip {
        background: var(--dm-brand-dark-surface);
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }
    .footer-trust-icon {
        width: 48px;
        height: 48px;
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        border: 1px solid rgba(216, 0, 0, 0.2);
    }
    .btn-footer-call {
        background: linear-gradient(135deg, #d80000 0%, #b00000 100%);
        color: #ffffff !important;
        border: none;
        font-size: 0.92rem;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(216, 0, 0, 0.35);
    }
    .btn-footer-call:hover {
        background: linear-gradient(135deg, #b00000 0%, #8b0000 100%);
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(216, 0, 0, 0.5);
    }

    /* Main Body & Typography */
    .footer-heading {
        color: #ffffff;
        font-weight: 800;
        font-size: 0.95rem;
        text-transform: uppercase;
        letter-spacing: 0.8px;
        margin-bottom: 20px;
        position: relative;
        display: inline-block;
        padding-bottom: 8px;
    }
    .footer-heading::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        width: 32px;
        height: 2.5px;
        background: var(--dm-brand-red);
        border-radius: 2px;
    }

    .footer-desc-text {
        font-size: 0.9rem;
        line-height: 1.7;
    }

    .footer-links-list li {
        margin-bottom: 11px;
    }
    .footer-links-list li a {
        color: #94a3b8;
        text-decoration: none;
        font-size: 0.9rem;
        font-weight: 500;
        transition: all 0.25s ease;
        display: inline-flex;
        align-items: center;
    }
    .footer-links-list li a i {
        font-size: 0.75rem;
        transition: transform 0.25s ease;
        color: #64748b;
    }
    .footer-links-list li a:hover {
        color: #ffffff;
        transform: translateX(4px);
    }
    .footer-links-list li a:hover i {
        color: var(--dm-brand-red);
    }

    /* Social Buttons */
    .footer-social-btn {
        width: 38px;
        height: 38px;
        border-radius: 10px;
        background: rgba(255, 255, 255, 0.05);
        color: #ffffff;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        transition: all 0.3s ease;
        border: 1px solid rgba(255, 255, 255, 0.08);
        font-size: 0.95rem;
    }
    .footer-social-btn:hover {
        background: var(--dm-brand-red);
        border-color: var(--dm-brand-red);
        color: #ffffff;
        transform: translateY(-3px);
        box-shadow: 0 6px 15px rgba(216, 0, 0, 0.4);
    }

    /* Contact Details */
    .footer-contact-icon {
        font-size: 1.1rem;
        margin-top: 2px;
    }
    .hover-brand-red:hover {
        color: var(--dm-brand-red) !important;
    }

    /* Careers Pill */
    .footer-career-pill {
        background: rgba(255, 255, 255, 0.03);
        border: 1px dashed rgba(216, 0, 0, 0.3);
        transition: all 0.3s ease;
    }
    .footer-career-pill:hover {
        background: rgba(216, 0, 0, 0.12);
        border-color: var(--dm-brand-red);
        transform: translateY(-2px);
    }

    /* City Tags */
    .footer-city-tag {
        font-size: 0.78rem;
        background: rgba(255, 255, 255, 0.04);
        border: 1px solid rgba(255, 255, 255, 0.08);
        color: #cbd5e1;
        padding: 4px 12px;
        border-radius: 50rem;
        transition: all 0.2s ease;
    }
    .footer-city-tag:hover {
        background: rgba(216, 0, 0, 0.18);
        color: #ffffff;
        border-color: var(--dm-brand-red);
    }

    /* Disclaimer & Bottom Bar */
    .footer-disclaimer-bar {
        background: #0d0e12;
        border-top: 1px solid rgba(255, 255, 255, 0.04);
    }
    .footer-bottom-bar {
        background: var(--dm-brand-dark-bottom);
    }
    </style>

    <!-- Bootstrap JS for Carousel -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
