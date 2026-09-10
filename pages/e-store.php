<?php
/**
 * DM Healthcare - E-Store (Medical Equipment, ICU Devices & Healthcare Supplies)
 * Complete Medical Marketplace & Online Rental/Purchase Portal
 */

$display_title = "DM Healthcare E-Store - Buy & Rent Medical Equipment Online";
$seo_title = "Medical Equipment E-Store in Delhi NCR - Buy & Rent Online | DM Healthcare";
$seo_desc = "Buy and rent certified medical equipment online in Delhi NCR. Hospital beds, oxygen concentrators, BiPAP/CPAP, wheelchairs, ICU monitors, air mattresses & medical disposables with same-day doorstep delivery.";
$short_desc = "North India's trusted online medical marketplace. Buy or rent doctor-certified hospital beds, oxygen machines, wheelchairs, and ICU devices with same-day delivery.";
$category_name = "Medical Equipment";
$full_page_override = true;

ob_start();
?>
<style>
    :root {
        --dm-red: #e5252a;
        --dm-red-dark: #c8102e;
        --dm-navy: #0f172a;
        --dm-slate: #1e293b;
        --dm-sky: #0284c7;
        --dm-emerald: #059669;
        --dm-light-bg: #f8fafc;
    }
    .text-dm-red { color: var(--dm-red) !important; }
    .bg-dm-red { background-color: var(--dm-red) !important; color: #fff !important; }
    .btn-dm-red { background-color: var(--dm-red); border-color: var(--dm-red); color: #fff; }
    .btn-dm-red:hover { background-color: var(--dm-red-dark); border-color: var(--dm-red-dark); color: #fff; }
    .btn-outline-dm-red { border-color: var(--dm-red); color: var(--dm-red); }
    .btn-outline-dm-red:hover, .btn-outline-dm-red.active { background-color: var(--dm-red); border-color: var(--dm-red); color: #fff; }

    /* E-Store Hero */
    .estore-hero {
        background: radial-gradient(circle at 90% 10%, rgba(229, 37, 42, 0.18) 0%, transparent 55%),
                    radial-gradient(circle at 10% 90%, rgba(2, 132, 199, 0.15) 0%, transparent 45%),
                    linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
        color: #ffffff;
    }
    .trust-badge-pill {
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.18);
        border-radius: 50px;
        padding: 6px 14px;
        font-size: 0.8rem;
        color: #f1f5f9;
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }

    /* Category Filter Tabs */
    .store-tab-btn {
        border: 1px solid #cbd5e1;
        background: #ffffff;
        color: #475569;
        border-radius: 50px;
        padding: 8px 18px;
        font-weight: 600;
        font-size: 0.88rem;
        transition: all 0.25s ease;
        white-space: nowrap;
    }
    .store-tab-btn:hover, .store-tab-btn.active {
        background: var(--dm-red);
        color: #ffffff;
        border-color: var(--dm-red);
        box-shadow: 0 4px 12px rgba(229, 37, 42, 0.25);
    }

    /* Product Card */
    .product-shop-card {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 18px;
        transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100%;
        position: relative;
        overflow: hidden;
    }
    .product-shop-card:hover {
        border-color: var(--dm-red);
        transform: translateY(-6px);
        box-shadow: 0 16px 32px rgba(15, 23, 42, 0.1);
    }
    .product-img-box {
        height: 190px;
        background: linear-gradient(135deg, #f8fafc 0%, #edf2f7 100%);
        border-bottom: 1px solid #f1f5f9;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
    }
    .product-img-box img {
        max-height: 170px;
        max-width: 90%;
        object-fit: contain;
        transition: transform 0.3s ease;
    }
    .product-shop-card:hover .product-img-box img {
        transform: scale(1.05);
    }
    .product-tag {
        position: absolute;
        top: 12px;
        left: 12px;
        font-size: 0.72rem;
        font-weight: 700;
        padding: 4px 10px;
        border-radius: 20px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        z-index: 2;
    }
    .product-tag-rent { background: #e0f2fe; color: #0369a1; }
    .product-tag-buy { background: #dcfce7; color: #15803d; }
    .product-tag-hot { background: #fee2e2; color: #b91c1c; }

    /* Search & Filter Header */
    .store-search-input {
        border-radius: 50px;
        padding: 12px 20px 12px 45px;
        border: 2px solid #e2e8f0;
        font-size: 0.95rem;
    }
    .store-search-input:focus {
        border-color: var(--dm-red);
        box-shadow: 0 0 0 0.25rem rgba(229, 37, 42, 0.15);
    }
    .store-search-icon {
        position: absolute;
        left: 18px;
        top: 50%;
        transform: translateY(-50%);
        color: #94a3b8;
    }

    /* Process Circles */
    .shop-step-circle {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        background: var(--dm-red);
        color: #fff;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-weight: 800;
        font-size: 1.2rem;
        margin-bottom: 12px;
        box-shadow: 0 4px 12px rgba(229, 37, 42, 0.25);
    }
</style>

<!-- 1. HERO SECTION -->
<section class="estore-hero py-4 py-lg-5">
    <div class="container py-lg-3">
        <div class="d-flex flex-wrap gap-2 mb-3 align-items-center">
            <span class="trust-badge-pill"><i class="fa-solid fa-certificate text-warning"></i> ISO 9001:2015 Certified E-Store</span>
            <span class="trust-badge-pill"><i class="fa-solid fa-truck-fast text-info"></i> Same-Day Doorstep Delivery</span>
            <span class="trust-badge-pill"><i class="fa-solid fa-shield-halved text-success"></i> 100% Genuine OEM Warranty</span>
            <span class="trust-badge-pill"><i class="fa-solid fa-handshake text-warning"></i> Rent or Buy Flexibility</span>
            <span class="trust-badge-pill"><i class="fa-solid fa-money-bill-wave text-success"></i> Cash / UPI on Delivery</span>
        </div>

        <div class="row align-items-center g-4">
            <div class="col-lg-7">
                <span class="badge bg-danger bg-opacity-25 text-danger px-3 py-1 rounded-pill fw-semibold mb-2 border border-danger border-opacity-50 small">
                    <i class="fa-solid fa-store me-1"></i> Official Medical Marketplace
                </span>
                <h1 class="display-6 fw-bold text-white lh-sm mb-3">
                    Buy & Rent Medical Equipment <span class="text-dm-red">Online</span>
                </h1>
                <p class="text-light fs-6 mb-4 opacity-90" style="line-height: 1.7;">
                    Explore North India's largest verified medical healthcare catalog. Rent or purchase <strong>Hospital Beds, Oxygen Concentrators, BiPAP/CPAP Machines, Wheelchairs, ICU Monitors, Air Mattresses, and Medical Accessories</strong> at direct hospital rates with free home installation and titration across Delhi NCR.
                </p>

                <div class="d-flex flex-wrap gap-2 mb-4">
                    <a href="#products-grid" class="btn btn-dm-red btn-lg rounded-pill px-4 py-2 fw-bold shadow-sm d-inline-flex align-items-center gap-2 small">
                        <i class="fa-solid fa-cart-shopping"></i> Explore Products Below
                    </a>
                    <a href="tel:+919319149644" class="btn btn-outline-light btn-lg rounded-pill px-4 py-2 fw-bold d-inline-flex align-items-center gap-2 small">
                        <i class="fa-solid fa-phone"></i> Order on Call (+91 93191 49644)
                    </a>
                    <a href="https://wa.me/919319149644?text=Hello%20DM%20Healthcare,%20I%20want%20to%20buy/rent%20medical%20equipment%20from%20your%20E-Store." target="_blank" class="btn btn-success btn-lg rounded-pill px-4 py-2 fw-bold d-inline-flex align-items-center gap-2 small">
                        <i class="fa-brands fa-whatsapp"></i> WhatsApp Order
                    </a>
                </div>

                <div class="d-flex flex-wrap gap-3 pt-3 border-top border-secondary border-opacity-50 small text-light">
                    <div><i class="fa-solid fa-check text-success me-1"></i> Sanitized & UV Disinfected</div>
                    <div><i class="fa-solid fa-check text-success me-1"></i> Technician Mask Fitting & Demo</div>
                    <div><i class="fa-solid fa-check text-success me-1"></i> Zero Security Deposit Options</div>
                </div>
            </div>

            <!-- Right Hero Highlights Box -->
            <div class="col-lg-5">
                <div class="card bg-white text-dark rounded-4 p-4 shadow-lg border-0">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="badge bg-danger bg-opacity-10 text-danger rounded-pill px-3 py-1 small fw-bold">
                            Quick Order Desk
                        </span>
                        <span class="text-success small fw-bold"><i class="fa-solid fa-bolt me-1"></i> Instant Dispatch</span>
                    </div>

                    <h5 class="fw-bold text-dark mb-1">Request Price Quote / Rent Machine</h5>
                    <p class="text-muted small mb-3">Submit your requirement for immediate dispatch confirmation and best seasonal offers.</p>

                    <form action="backend/submit_appointment.php" method="POST">
                        <input type="hidden" name="service" value="E-Store Medical Equipment Order">
                        <div class="mb-2">
                            <input type="text" name="name" class="form-control form-control-sm rounded-2" placeholder="Your Name *" required>
                        </div>
                        <div class="mb-2">
                            <input type="tel" name="phone" class="form-control form-control-sm rounded-2" placeholder="10-digit Mobile Number *" pattern="[0-9]{10}" required>
                        </div>
                        <div class="mb-2">
                            <select name="model" class="form-select form-select-sm rounded-2" required>
                                <option value="Oxygen Concentrator (5L / 10L)">Oxygen Concentrator (5L / 10L)</option>
                                <option value="BiPAP / CPAP Machine & Mask Kit">BiPAP / CPAP Machine & Mask Kit</option>
                                <option value="Motorized ICU Hospital Bed">Motorized ICU Hospital Bed</option>
                                <option value="Wheelchair (Manual / Electric / Commode)">Wheelchair (Manual / Electric / Commode)</option>
                                <option value="NeoBolt Motorized Scooter">NeoBolt Motorized Scooter</option>
                                <option value="Multipara Patient Monitor">Multipara Patient Monitor</option>
                                <option value="Medical Accessories & Consumables">Medical Accessories & Consumables</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <select name="city" class="form-select form-select-sm rounded-2" required>
                                <option value="Faridabad">Faridabad (30-min express reach)</option>
                                <option value="Noida & Greater Noida">Noida & Greater Noida</option>
                                <option value="South & Central Delhi">South & Central Delhi</option>
                                <option value="Gurugram (Gurgaon)">Gurugram (Gurgaon)</option>
                                <option value="Ghaziabad & East Delhi">Ghaziabad & East Delhi</option>
                                <option value="Chandigarh Tricity & North India">Chandigarh Tricity & North India</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <textarea name="message" rows="2" class="form-control form-control-sm rounded-2" placeholder="Mention whether you need Rent or Buy, specific model or doctor notes..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-dm-red w-100 rounded-pill fw-bold py-2 shadow-sm">
                            <i class="fa-solid fa-paper-plane me-1"></i> Get Price & Confirm Delivery
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. INTERACTIVE PRODUCT CATALOG & FILTER BAR -->
<section class="py-5 bg-light" id="products-grid">
    <div class="container">
        <div class="text-center max-w-700 mx-auto mb-4">
            <span class="badge bg-secondary bg-opacity-10 text-secondary px-3 py-1 rounded-pill fw-semibold mb-1 small">Verified Catalog</span>
            <h2 class="fw-bold text-dark mb-1">Browse Our Medical Equipment Catalog</h2>
            <p class="text-muted small">Filter by category or search below. All items available for same-day delivery with cash on delivery.</p>
        </div>

        <!-- Search Bar -->
        <div class="row justify-content-center mb-4">
            <div class="col-md-8 col-lg-6">
                <div class="position-relative">
                    <i class="fa-solid fa-magnifying-glass store-search-icon"></i>
                    <input type="text" id="storeSearch" class="form-control store-search-input" placeholder="Search by name (e.g. BiPAP, Oxygen, Wheelchair, Bed)..." onkeyup="filterStoreProducts()">
                </div>
            </div>
        </div>

        <!-- Category Filter Pills -->
        <div class="d-flex flex-wrap justify-content-center gap-2 mb-4 pb-2">
            <button class="store-tab-btn active" onclick="filterCategory('all', this)"><i class="fa-solid fa-grid-2 me-1"></i> All Products</button>
            <button class="store-tab-btn" onclick="filterCategory('respiratory', this)"><i class="fa-solid fa-lungs me-1"></i> Respiratory & Oxygen</button>
            <button class="store-tab-btn" onclick="filterCategory('mobility', this)"><i class="fa-solid fa-wheelchair me-1"></i> Mobility & Wheelchairs</button>
            <button class="store-tab-btn" onclick="filterCategory('beds', this)"><i class="fa-solid fa-bed me-1"></i> Hospital Beds</button>
            <button class="store-tab-btn" onclick="filterCategory('icu', this)"><i class="fa-solid fa-heart-pulse me-1"></i> ICU & Monitoring</button>
            <button class="store-tab-btn" onclick="filterCategory('wellness', this)"><i class="fa-solid fa-stethoscope me-1"></i> Diagnostics & Wellness</button>
            <button class="store-tab-btn" onclick="filterCategory('accessories', this)"><i class="fa-solid fa-boxes-stacked me-1"></i> Accessories & Masks</button>
        </div>

        <!-- Product Grid -->
        <div class="row g-4" id="productList">
            <!-- 1. Oxygen Concentrator 5L -->
            <div class="col-md-6 col-lg-4 product-item" data-category="respiratory" data-title="5 LPM Oxygen Concentrator Philips Evox">
                <div class="product-shop-card shadow-sm">
                    <span class="product-tag product-tag-hot">Top Seller</span>
                    <div class="product-img-box">
                        <img src="assets/images/pages/oxygen_concentrator_5l.jpg" alt="5 LPM Oxygen Concentrator" onerror="this.onerror=null; this.src='assets/images/pages/oxygen_concentrator_hero.jpg';">
                    </div>
                    <div class="p-4 d-flex flex-column justify-content-between flex-grow-1">
                        <div>
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <span class="badge bg-danger bg-opacity-10 text-danger small">Respiratory</span>
                                <span class="text-warning small"><i class="fa-solid fa-star"></i> 4.9 (140+)</span>
                            </div>
                            <h5 class="fw-bold text-dark mb-1">5 LPM Medical Oxygen Concentrator</h5>
                            <p class="small text-muted mb-2">93% ± 3% pure oxygen output, continuous flow for COPD, post-COVID & respiratory relief.</p>
                            <ul class="list-unstyled small text-secondary mb-3" style="font-size: 0.8rem;">
                                <li><i class="fa-solid fa-circle-check text-success me-1"></i> Inbuilt Nebulizer & Purity Indicator</li>
                                <li><i class="fa-solid fa-circle-check text-success me-1"></i> Dual Humidifier Bottle & Cannulas Included</li>
                            </ul>
                        </div>
                        <div>
                            <div class="d-flex justify-content-between align-items-baseline mb-3 pt-2 border-top">
                                <div>
                                    <span class="d-block text-muted" style="font-size: 0.72rem;">Rent / Buy:</span>
                                    <span class="fw-bold text-dm-red fs-6">Rent: ₹3,500 <small class="text-muted">/mo</small></span>
                                </div>
                                <div class="text-end">
                                    <span class="d-block text-muted" style="font-size: 0.72rem;">Buy Price:</span>
                                    <span class="fw-bold text-dark fs-6">₹32,000</span>
                                </div>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/919319149644?text=I+want+to+order+5L+Oxygen+Concentrator" target="_blank" class="btn btn-dm-red btn-sm rounded-pill fw-bold py-2">
                                    <i class="fa-brands fa-whatsapp me-1"></i> Order / Rent Now
                                </a>
                                <a href="oxygen-concentrator" class="btn btn-outline-secondary btn-sm rounded-pill py-1 small">
                                    View Full Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2. Oxygen Concentrator 10L -->
            <div class="col-md-6 col-lg-4 product-item" data-category="respiratory" data-title="10 LPM High Flow Oxygen Concentrator">
                <div class="product-shop-card shadow-sm">
                    <span class="product-tag product-tag-rent">High Flow</span>
                    <div class="product-img-box">
                        <img src="assets/images/pages/oxygen_concentrator_10l.jpg" alt="10 LPM Oxygen Concentrator" onerror="this.onerror=null; this.src='assets/images/pages/oxygen_concentrator_hero.jpg';">
                    </div>
                    <div class="p-4 d-flex flex-column justify-content-between flex-grow-1">
                        <div>
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <span class="badge bg-danger bg-opacity-10 text-danger small">High Flow O2</span>
                                <span class="text-warning small"><i class="fa-solid fa-star"></i> 5.0 (98+)</span>
                            </div>
                            <h5 class="fw-bold text-dark mb-1">10 LPM Heavy Duty Oxygen Concentrator</h5>
                            <p class="small text-muted mb-2">Dual-flow oxygen machine for severe lung conditions, ICU stepping down, and dual patient output.</p>
                            <ul class="list-unstyled small text-secondary mb-3" style="font-size: 0.8rem;">
                                <li><i class="fa-solid fa-circle-check text-success me-1"></i> High pressure outlet (20 PSI)</li>
                                <li><i class="fa-solid fa-circle-check text-success me-1"></i> Continuous 24x7 heavy duty compressor</li>
                            </ul>
                        </div>
                        <div>
                            <div class="d-flex justify-content-between align-items-baseline mb-3 pt-2 border-top">
                                <div>
                                    <span class="d-block text-muted" style="font-size: 0.72rem;">Rent / Buy:</span>
                                    <span class="fw-bold text-dm-red fs-6">Rent: ₹6,500 <small class="text-muted">/mo</small></span>
                                </div>
                                <div class="text-end">
                                    <span class="d-block text-muted" style="font-size: 0.72rem;">Buy Price:</span>
                                    <span class="fw-bold text-dark fs-6">₹62,000</span>
                                </div>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/919319149644?text=I+want+to+order+10L+Oxygen+Concentrator" target="_blank" class="btn btn-dm-red btn-sm rounded-pill fw-bold py-2">
                                    <i class="fa-brands fa-whatsapp me-1"></i> Order / Rent Now
                                </a>
                                <a href="oxygen-concentrator" class="btn btn-outline-secondary btn-sm rounded-pill py-1 small">
                                    View Full Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3. ResMed Auto CPAP AirSense 10 -->
            <div class="col-md-6 col-lg-4 product-item" data-category="respiratory" data-title="ResMed AirSense 10 Auto CPAP Machine">
                <div class="product-shop-card shadow-sm">
                    <span class="product-tag product-tag-buy">Gold Standard</span>
                    <div class="product-img-box">
                        <i class="fa-solid fa-mask-ventilator text-primary" style="font-size: 70px; opacity: 0.85;"></i>
                    </div>
                    <div class="p-4 d-flex flex-column justify-content-between flex-grow-1">
                        <div>
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <span class="badge bg-primary bg-opacity-10 text-primary small">Sleep Apnea</span>
                                <span class="text-warning small"><i class="fa-solid fa-star"></i> 4.9 (180+)</span>
                            </div>
                            <h5 class="fw-bold text-dark mb-1">ResMed AirSense 10 Auto CPAP</h5>
                            <p class="small text-muted mb-2">Automated positive airway pressure for snoring & sleep apnea with HumidAir heated humidifier.</p>
                            <ul class="list-unstyled small text-secondary mb-3" style="font-size: 0.8rem;">
                                <li><i class="fa-solid fa-circle-check text-success me-1"></i> AutoSet Algorithm & Expiratory Relief</li>
                                <li><i class="fa-solid fa-circle-check text-success me-1"></i> Free Mask Fitting + SD Card Sleep Report</li>
                            </ul>
                        </div>
                        <div>
                            <div class="d-flex justify-content-between align-items-baseline mb-3 pt-2 border-top">
                                <div>
                                    <span class="d-block text-muted" style="font-size: 0.72rem;">Rent / Buy:</span>
                                    <span class="fw-bold text-dm-red fs-6">Rent: ₹3,500 <small class="text-muted">/mo</small></span>
                                </div>
                                <div class="text-end">
                                    <span class="d-block text-muted" style="font-size: 0.72rem;">Buy Price:</span>
                                    <span class="fw-bold text-dark fs-6">₹48,000</span>
                                </div>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/919319149644?text=I+want+to+order+ResMed+Auto+CPAP" target="_blank" class="btn btn-dm-red btn-sm rounded-pill fw-bold py-2">
                                    <i class="fa-brands fa-whatsapp me-1"></i> Order / Rent Now
                                </a>
                                <a href="bipap-cpap" class="btn btn-outline-secondary btn-sm rounded-pill py-1 small">
                                    View Full Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 4. ResMed BiPAP / Lumis 150 ST -->
            <div class="col-md-6 col-lg-4 product-item" data-category="respiratory" data-title="ResMed Lumis 150 VPAP ST BiPAP Machine">
                <div class="product-shop-card shadow-sm">
                    <span class="product-tag product-tag-hot">Prescription</span>
                    <div class="product-img-box">
                        <i class="fa-solid fa-lungs text-danger" style="font-size: 70px; opacity: 0.85;"></i>
                    </div>
                    <div class="p-4 d-flex flex-column justify-content-between flex-grow-1">
                        <div>
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <span class="badge bg-danger bg-opacity-10 text-danger small">COPD / Weaning</span>
                                <span class="text-warning small"><i class="fa-solid fa-star"></i> 5.0 (110+)</span>
                            </div>
                            <h5 class="fw-bold text-dark mb-1">ResMed Lumis 150 VPAP 4G BiPAP</h5>
                            <p class="small text-muted mb-2">Bilevel NIV ventilator with iVAPS and intelligent backup rate for COPD, Hypercapnia & ALS care.</p>
                            <ul class="list-unstyled small text-secondary mb-3" style="font-size: 0.8rem;">
                                <li><i class="fa-solid fa-circle-check text-success me-1"></i> IPAP / EPAP dual pressure calibration</li>
                                <li><i class="fa-solid fa-circle-check text-success me-1"></i> Bedside Technician Titration Included</li>
                            </ul>
                        </div>
                        <div>
                            <div class="d-flex justify-content-between align-items-baseline mb-3 pt-2 border-top">
                                <div>
                                    <span class="d-block text-muted" style="font-size: 0.72rem;">Rent / Buy:</span>
                                    <span class="fw-bold text-dm-red fs-6">Rent: ₹4,500 - ₹7,500 <small class="text-muted">/mo</small></span>
                                </div>
                                <div class="text-end">
                                    <span class="d-block text-muted" style="font-size: 0.72rem;">Buy Price:</span>
                                    <span class="fw-bold text-dark fs-6">₹65,000</span>
                                </div>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/919319149644?text=I+want+to+order+ResMed+BiPAP+Machine" target="_blank" class="btn btn-dm-red btn-sm rounded-pill fw-bold py-2">
                                    <i class="fa-brands fa-whatsapp me-1"></i> Order / Rent Now
                                </a>
                                <a href="bipap-cpap" class="btn btn-outline-secondary btn-sm rounded-pill py-1 small">
                                    View Full Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 5. Motorized ICU Hospital Bed -->
            <div class="col-md-6 col-lg-4 product-item" data-category="beds" data-title="Motorized ICU Hospital Bed Electric 3 Function 5 Function">
                <div class="product-shop-card shadow-sm">
                    <span class="product-tag product-tag-rent">ICU Grade</span>
                    <div class="product-img-box">
                        <img src="assets/images/pages/hospital_bed_home.png" alt="Motorized ICU Bed" onerror="this.onerror=null; this.src='assets/images/pages/medical_equipment_bed.png';">
                    </div>
                    <div class="p-4 d-flex flex-column justify-content-between flex-grow-1">
                        <div>
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <span class="badge bg-warning bg-opacity-10 text-dark small">Hospital Beds</span>
                                <span class="text-warning small"><i class="fa-solid fa-star"></i> 4.9 (85+)</span>
                            </div>
                            <h5 class="fw-bold text-dark mb-1">Full Electric Motorized ICU Bed</h5>
                            <p class="small text-muted mb-2">Remote-controlled backrest, knee elevation, Trendelenburg tilt, and height adjustment for bedridden patients.</p>
                            <ul class="list-unstyled small text-secondary mb-3" style="font-size: 0.8rem;">
                                <li><i class="fa-solid fa-circle-check text-success me-1"></i> Collapsible Aluminum Side Railings</li>
                                <li><i class="fa-solid fa-circle-check text-success me-1"></i> Includes High-Density Medical Mattress</li>
                            </ul>
                        </div>
                        <div>
                            <div class="d-flex justify-content-between align-items-baseline mb-3 pt-2 border-top">
                                <div>
                                    <span class="d-block text-muted" style="font-size: 0.72rem;">Rent / Buy:</span>
                                    <span class="fw-bold text-dm-red fs-6">Rent: ₹4,000 - ₹6,000 <small class="text-muted">/mo</small></span>
                                </div>
                                <div class="text-end">
                                    <span class="d-block text-muted" style="font-size: 0.72rem;">Buy Price:</span>
                                    <span class="fw-bold text-dark fs-6">₹45,000</span>
                                </div>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/919319149644?text=I+want+to+order+Motorized+Hospital+Bed" target="_blank" class="btn btn-dm-red btn-sm rounded-pill fw-bold py-2">
                                    <i class="fa-brands fa-whatsapp me-1"></i> Order / Rent Now
                                </a>
                                <a href="patient-beds-rent" class="btn btn-outline-secondary btn-sm rounded-pill py-1 small">
                                    View Full Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 6. Manual Fowler & Semi-Fowler Bed -->
            <div class="col-md-6 col-lg-4 product-item" data-category="beds" data-title="Manual Fowler Hospital Bed 2 Function">
                <div class="product-shop-card shadow-sm">
                    <span class="product-tag product-tag-buy">Budget Friendly</span>
                    <div class="product-img-box">
                        <img src="assets/images/pages/medical_equipment_bed.png" alt="Manual Fowler Bed">
                    </div>
                    <div class="p-4 d-flex flex-column justify-content-between flex-grow-1">
                        <div>
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <span class="badge bg-secondary bg-opacity-10 text-secondary small">Manual Beds</span>
                                <span class="text-warning small"><i class="fa-solid fa-star"></i> 4.8 (65+)</span>
                            </div>
                            <h5 class="fw-bold text-dark mb-1">Manual Fowler Hospital Bed</h5>
                            <p class="small text-muted mb-2">Smooth dual crank handle system for effortless backrest and leg elevation during home recovery.</p>
                            <ul class="list-unstyled small text-secondary mb-3" style="font-size: 0.8rem;">
                                <li><i class="fa-solid fa-circle-check text-success me-1"></i> 360° Heavy-Duty Locking Castor Wheels</li>
                                <li><i class="fa-solid fa-circle-check text-success me-1"></i> IV Pole & Mattress Included</li>
                            </ul>
                        </div>
                        <div>
                            <div class="d-flex justify-content-between align-items-baseline mb-3 pt-2 border-top">
                                <div>
                                    <span class="d-block text-muted" style="font-size: 0.72rem;">Rent / Buy:</span>
                                    <span class="fw-bold text-dm-red fs-6">Rent: ₹2,000 <small class="text-muted">/mo</small></span>
                                </div>
                                <div class="text-end">
                                    <span class="d-block text-muted" style="font-size: 0.72rem;">Buy Price:</span>
                                    <span class="fw-bold text-dark fs-6">₹18,500</span>
                                </div>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/919319149644?text=I+want+to+order+Manual+Fowler+Bed" target="_blank" class="btn btn-dm-red btn-sm rounded-pill fw-bold py-2">
                                    <i class="fa-brands fa-whatsapp me-1"></i> Order / Rent Now
                                </a>
                                <a href="patient-beds-rent" class="btn btn-outline-secondary btn-sm rounded-pill py-1 small">
                                    View Full Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 7. NeoBolt Electric Mobility Scooter -->
            <div class="col-md-6 col-lg-4 product-item" data-category="mobility" data-title="NeoBolt Motorized Wheelchair Attachment Scooter IIT Madras">
                <div class="product-shop-card shadow-sm">
                    <span class="product-tag product-tag-hot">Innovation</span>
                    <div class="product-img-box">
                        <img src="assets/images/pages/neobolt_hero_scooter.jpg" alt="NeoBolt Scooter">
                    </div>
                    <div class="p-4 d-flex flex-column justify-content-between flex-grow-1">
                        <div>
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <span class="badge bg-primary bg-opacity-10 text-primary small">Outdoor Mobility</span>
                                <span class="text-warning small"><i class="fa-solid fa-star"></i> 5.0 (42+)</span>
                            </div>
                            <h5 class="fw-bold text-dark mb-1">NeoBolt Motorized Wheelchair Attachment</h5>
                            <p class="small text-muted mb-2">Converts standard manual wheelchairs into a 25 km/h outdoor battery-operated electric scooter.</p>
                            <ul class="list-unstyled small text-secondary mb-3" style="font-size: 0.8rem;">
                                <li><i class="fa-solid fa-circle-check text-success me-1"></i> 25 km range per charge (Li-ion battery)</li>
                                <li><i class="fa-solid fa-circle-check text-success me-1"></i> Quick 1-minute clamp attachment</li>
                            </ul>
                        </div>
                        <div>
                            <div class="d-flex justify-content-between align-items-baseline mb-3 pt-2 border-top">
                                <div>
                                    <span class="d-block text-muted" style="font-size: 0.72rem;">Rent / Buy:</span>
                                    <span class="fw-bold text-dm-red fs-6">Rent: ₹8,000 <small class="text-muted">/mo</small></span>
                                </div>
                                <div class="text-end">
                                    <span class="d-block text-muted" style="font-size: 0.72rem;">Buy Price:</span>
                                    <span class="fw-bold text-dark fs-6">₹85,000</span>
                                </div>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/919319149644?text=I+want+to+order+NeoBolt+Electric+Scooter" target="_blank" class="btn btn-dm-red btn-sm rounded-pill fw-bold py-2">
                                    <i class="fa-brands fa-whatsapp me-1"></i> Order / Rent Now
                                </a>
                                <a href="neo-bolt-scooter" class="btn btn-outline-secondary btn-sm rounded-pill py-1 small">
                                    View Full Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 8. Recliner Commode Wheelchair -->
            <div class="col-md-6 col-lg-4 product-item" data-category="mobility" data-title="Recliner Commode Wheelchair High Back">
                <div class="product-shop-card shadow-sm">
                    <span class="product-tag product-tag-buy">Comfort</span>
                    <div class="product-img-box">
                        <img src="assets/images/pages/wheelchair_recliner_commode.jpg" alt="Recliner Commode Wheelchair">
                    </div>
                    <div class="p-4 d-flex flex-column justify-content-between flex-grow-1">
                        <div>
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <span class="badge bg-secondary bg-opacity-10 text-secondary small">Recliner Mobility</span>
                                <span class="text-warning small"><i class="fa-solid fa-star"></i> 4.8 (95+)</span>
                            </div>
                            <h5 class="fw-bold text-dark mb-1">Recliner High-Back Commode Wheelchair</h5>
                            <p class="small text-muted mb-2">180° flat reclining backrest, detachable headrest, elevated footrests, and built-in toilet commode bucket.</p>
                            <ul class="list-unstyled small text-secondary mb-3" style="font-size: 0.8rem;">
                                <li><i class="fa-solid fa-circle-check text-success me-1"></i> Waterproof Leatherette Upholstery</li>
                                <li><i class="fa-solid fa-circle-check text-success me-1"></i> Heavy Duty Chrome Steel Frame</li>
                            </ul>
                        </div>
                        <div>
                            <div class="d-flex justify-content-between align-items-baseline mb-3 pt-2 border-top">
                                <div>
                                    <span class="d-block text-muted" style="font-size: 0.72rem;">Rent / Buy:</span>
                                    <span class="fw-bold text-dm-red fs-6">Rent: ₹2,000 <small class="text-muted">/mo</small></span>
                                </div>
                                <div class="text-end">
                                    <span class="d-block text-muted" style="font-size: 0.72rem;">Buy Price:</span>
                                    <span class="fw-bold text-dark fs-6">₹12,500</span>
                                </div>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/919319149644?text=I+want+to+order+Recliner+Commode+Wheelchair" target="_blank" class="btn btn-dm-red btn-sm rounded-pill fw-bold py-2">
                                    <i class="fa-brands fa-whatsapp me-1"></i> Order / Rent Now
                                </a>
                                <a href="wheelchairs" class="btn btn-outline-secondary btn-sm rounded-pill py-1 small">
                                    View Full Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 9. Electric Motorized Wheelchair -->
            <div class="col-md-6 col-lg-4 product-item" data-category="mobility" data-title="Electric Motorized Wheelchair Joystick Controlled">
                <div class="product-shop-card shadow-sm">
                    <span class="product-tag product-tag-rent">Power Mobility</span>
                    <div class="product-img-box">
                        <img src="assets/images/pages/wheelchair_electric_motorized.jpg" alt="Electric Motorized Wheelchair">
                    </div>
                    <div class="p-4 d-flex flex-column justify-content-between flex-grow-1">
                        <div>
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <span class="badge bg-primary bg-opacity-10 text-primary small">Electric Mobility</span>
                                <span class="text-warning small"><i class="fa-solid fa-star"></i> 4.9 (53+)</span>
                            </div>
                            <h5 class="fw-bold text-dark mb-1">Electric Motorized Power Wheelchair</h5>
                            <p class="small text-muted mb-2">360° sensitive joystick controller, dual 250W brushless motors, foldable lightweight frame for car trunk storage.</p>
                            <ul class="list-unstyled small text-secondary mb-3" style="font-size: 0.8rem;">
                                <li><i class="fa-solid fa-circle-check text-success me-1"></i> 15-20 km range per battery charge</li>
                                <li><i class="fa-solid fa-circle-check text-success me-1"></i> Electromagnetic Auto-Braking for Safety</li>
                            </ul>
                        </div>
                        <div>
                            <div class="d-flex justify-content-between align-items-baseline mb-3 pt-2 border-top">
                                <div>
                                    <span class="d-block text-muted" style="font-size: 0.72rem;">Rent / Buy:</span>
                                    <span class="fw-bold text-dm-red fs-6">Rent: ₹4,500 <small class="text-muted">/mo</small></span>
                                </div>
                                <div class="text-end">
                                    <span class="d-block text-muted" style="font-size: 0.72rem;">Buy Price:</span>
                                    <span class="fw-bold text-dark fs-6">₹42,000</span>
                                </div>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/919319149644?text=I+want+to+order+Electric+Motorized+Wheelchair" target="_blank" class="btn btn-dm-red btn-sm rounded-pill fw-bold py-2">
                                    <i class="fa-brands fa-whatsapp me-1"></i> Order / Rent Now
                                </a>
                                <a href="wheelchairs" class="btn btn-outline-secondary btn-sm rounded-pill py-1 small">
                                    View Full Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 10. Multi-Para Patient Monitor -->
            <div class="col-md-6 col-lg-4 product-item" data-category="icu" data-title="Multipara Patient Monitor ECG SpO2 NIBP Pulse 5 Para 7 Para">
                <div class="product-shop-card shadow-sm">
                    <span class="product-tag product-tag-rent">ICU Critical</span>
                    <div class="product-img-box">
                        <i class="fa-solid fa-heart-pulse text-danger" style="font-size: 70px; opacity: 0.85;"></i>
                    </div>
                    <div class="p-4 d-flex flex-column justify-content-between flex-grow-1">
                        <div>
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <span class="badge bg-danger bg-opacity-10 text-danger small">ICU Monitoring</span>
                                <span class="text-warning small"><i class="fa-solid fa-star"></i> 4.9 (78+)</span>
                            </div>
                            <h5 class="fw-bold text-dark mb-1">5-Para Multi-Parameter Patient Monitor</h5>
                            <p class="small text-muted mb-2">High-resolution 12.1-inch color display tracking ECG, SpO2, NIBP Blood Pressure, Respiratory Rate & Temperature.</p>
                            <ul class="list-unstyled small text-secondary mb-3" style="font-size: 0.8rem;">
                                <li><i class="fa-solid fa-circle-check text-success me-1"></i> Visual & Audible Alarms for Arrhythmia</li>
                                <li><i class="fa-solid fa-circle-check text-success me-1"></i> All Probes, Cuffs & Cables Included</li>
                            </ul>
                        </div>
                        <div>
                            <div class="d-flex justify-content-between align-items-baseline mb-3 pt-2 border-top">
                                <div>
                                    <span class="d-block text-muted" style="font-size: 0.72rem;">Rent / Buy:</span>
                                    <span class="fw-bold text-dm-red fs-6">Rent: ₹3,500 <small class="text-muted">/mo</small></span>
                                </div>
                                <div class="text-end">
                                    <span class="d-block text-muted" style="font-size: 0.72rem;">Buy Price:</span>
                                    <span class="fw-bold text-dark fs-6">₹34,000</span>
                                </div>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/919319149644?text=I+want+to+order+Multipara+Patient+Monitor" target="_blank" class="btn btn-dm-red btn-sm rounded-pill fw-bold py-2">
                                    <i class="fa-brands fa-whatsapp me-1"></i> Order / Rent Now
                                </a>
                                <a href="icu-care---critical-care" class="btn btn-outline-secondary btn-sm rounded-pill py-1 small">
                                    View Full Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 11. Anti-Bedsore Air Mattress with Compressor -->
            <div class="col-md-6 col-lg-4 product-item" data-category="beds" data-title="Anti Bedsore Air Mattress with Automatic Alternating Pressure Pump">
                <div class="product-shop-card shadow-sm">
                    <span class="product-tag product-tag-hot">Essential</span>
                    <div class="product-img-box">
                        <i class="fa-solid fa-water text-info" style="font-size: 70px; opacity: 0.85;"></i>
                    </div>
                    <div class="p-4 d-flex flex-column justify-content-between flex-grow-1">
                        <div>
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <span class="badge bg-warning bg-opacity-10 text-dark small">Bed Sore Care</span>
                                <span class="text-warning small"><i class="fa-solid fa-star"></i> 4.9 (210+)</span>
                            </div>
                            <h5 class="fw-bold text-dark mb-1">Anti-Bedsore Air Mattress & Pump</h5>
                            <p class="small text-muted mb-2">Alternating bubble/tubular pressure system that prevents and heals Stage 1-4 pressure ulcers for bedridden patients.</p>
                            <ul class="list-unstyled small text-secondary mb-3" style="font-size: 0.8rem;">
                                <li><i class="fa-solid fa-circle-check text-success me-1"></i> Ultra-Silent Automatic Air Compressor</li>
                                <li><i class="fa-solid fa-circle-check text-success me-1"></i> Medical PVC Water-Resistant Material</li>
                            </ul>
                        </div>
                        <div>
                            <div class="d-flex justify-content-between align-items-baseline mb-3 pt-2 border-top">
                                <div>
                                    <span class="d-block text-muted" style="font-size: 0.72rem;">Rent / Buy:</span>
                                    <span class="fw-bold text-dm-red fs-6">Rent: ₹800 <small class="text-muted">/mo</small></span>
                                </div>
                                <div class="text-end">
                                    <span class="d-block text-muted" style="font-size: 0.72rem;">Buy Price:</span>
                                    <span class="fw-bold text-dark fs-6">₹2,800</span>
                                </div>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/919319149644?text=I+want+to+order+Air+Mattress+with+Pump" target="_blank" class="btn btn-dm-red btn-sm rounded-pill fw-bold py-2">
                                    <i class="fa-brands fa-whatsapp me-1"></i> Order / Rent Now
                                </a>
                                <a href="patient-beds-rent" class="btn btn-outline-secondary btn-sm rounded-pill py-1 small">
                                    View Full Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 12. Oxygen Cylinder Complete Kit (10L / 47L) -->
            <div class="col-md-6 col-lg-4 product-item" data-category="respiratory" data-title="Medical Oxygen Cylinder Kit with Regulator Flowmeter Trolley 10L 47L">
                <div class="product-shop-card shadow-sm">
                    <span class="product-tag product-tag-rent">30-min Swap</span>
                    <div class="product-img-box">
                        <i class="fa-solid fa-gas-pump text-danger" style="font-size: 70px; opacity: 0.85;"></i>
                    </div>
                    <div class="p-4 d-flex flex-column justify-content-between flex-grow-1">
                        <div>
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <span class="badge bg-danger bg-opacity-10 text-danger small">Pure Medical O2</span>
                                <span class="text-warning small"><i class="fa-solid fa-star"></i> 5.0 (320+)</span>
                            </div>
                            <h5 class="fw-bold text-dark mb-1">Medical Oxygen Cylinder 10L / 47L Kit</h5>
                            <p class="small text-muted mb-2">Seamless steel cylinder pre-filled with 99.5% medical oxygen. Includes Click-Style Regulator, Flowmeter & Trolley.</p>
                            <ul class="list-unstyled small text-secondary mb-3" style="font-size: 0.8rem;">
                                <li><i class="fa-solid fa-circle-check text-success me-1"></i> 30-Minute Doorstep Refill & Empty Swap</li>
                                <li><i class="fa-solid fa-circle-check text-success me-1"></i> Hydro-Tested PESO Approved Cylinder</li>
                            </ul>
                        </div>
                        <div>
                            <div class="d-flex justify-content-between align-items-baseline mb-3 pt-2 border-top">
                                <div>
                                    <span class="d-block text-muted" style="font-size: 0.72rem;">Rent / Buy:</span>
                                    <span class="fw-bold text-dm-red fs-6">Rent: ₹2,500 <small class="text-muted">/mo</small></span>
                                </div>
                                <div class="text-end">
                                    <span class="d-block text-muted" style="font-size: 0.72rem;">Buy Price:</span>
                                    <span class="fw-bold text-dark fs-6">₹8,500</span>
                                </div>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/919319149644?text=I+need+Oxygen+Cylinder+Urgent+Delivery" target="_blank" class="btn btn-dm-red btn-sm rounded-pill fw-bold py-2">
                                    <i class="fa-brands fa-whatsapp me-1"></i> Order / Rent Now
                                </a>
                                <a href="oxygen-cylinder" class="btn btn-outline-secondary btn-sm rounded-pill py-1 small">
                                    View Full Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 13. Finger Pulse Oximeter -->
            <div class="col-md-6 col-lg-4 product-item" data-category="wellness" data-title="Finger Pulse Oximeter SpO2 Pulse Rate Monitor OLED Display">
                <div class="product-shop-card shadow-sm">
                    <span class="product-tag product-tag-buy">Retail</span>
                    <div class="product-img-box">
                        <i class="fa-solid fa-heart-pulse text-danger" style="font-size: 70px; opacity: 0.85;"></i>
                    </div>
                    <div class="p-4 d-flex flex-column justify-content-between flex-grow-1">
                        <div>
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <span class="badge bg-success bg-opacity-10 text-success small">Diagnostics</span>
                                <span class="text-warning small"><i class="fa-solid fa-star"></i> 4.8 (150+)</span>
                            </div>
                            <h5 class="fw-bold text-dark mb-1">Digital OLED Finger Pulse Oximeter</h5>
                            <p class="small text-muted mb-2">High-accuracy optical sensor displaying SpO2 blood oxygen percentage, pulse rate, and perfusion index (PI).</p>
                            <ul class="list-unstyled small text-secondary mb-3" style="font-size: 0.8rem;">
                                <li><i class="fa-solid fa-circle-check text-success me-1"></i> 4-Direction Rotating Color Display</li>
                                <li><i class="fa-solid fa-circle-check text-success me-1"></i> Auto Power Off & Low Battery Indicator</li>
                            </ul>
                        </div>
                        <div>
                            <div class="d-flex justify-content-between align-items-baseline mb-3 pt-2 border-top">
                                <div>
                                    <span class="d-block text-muted" style="font-size: 0.72rem;">Status:</span>
                                    <span class="badge bg-success text-white small">In Stock</span>
                                </div>
                                <div class="text-end">
                                    <span class="d-block text-muted" style="font-size: 0.72rem;">Buy Price:</span>
                                    <span class="fw-bold text-dm-red fs-6">₹850 <small class="text-muted text-decoration-line-through">₹1,500</small></span>
                                </div>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/919319149644?text=I+want+to+buy+Finger+Pulse+Oximeter" target="_blank" class="btn btn-dm-red btn-sm rounded-pill fw-bold py-2">
                                    <i class="fa-brands fa-whatsapp me-1"></i> Buy on WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 14. Portable Mesh Nebulizer -->
            <div class="col-md-6 col-lg-4 product-item" data-category="wellness" data-title="Portable Mesh Nebulizer Inhaler Silent Pocket Size">
                <div class="product-shop-card shadow-sm">
                    <span class="product-tag product-tag-buy">Portable</span>
                    <div class="product-img-box">
                        <i class="fa-solid fa-spray-can-sparkles text-info" style="font-size: 70px; opacity: 0.85;"></i>
                    </div>
                    <div class="p-4 d-flex flex-column justify-content-between flex-grow-1">
                        <div>
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <span class="badge bg-info bg-opacity-10 text-dark small">Inhalation Care</span>
                                <span class="text-warning small"><i class="fa-solid fa-star"></i> 4.9 (88+)</span>
                            </div>
                            <h5 class="fw-bold text-dark mb-1">Ultra-Silent Portable Mesh Nebulizer</h5>
                            <p class="small text-muted mb-2">Micro-mesh technology delivering ultrafine aerosol mist (<5μm) for asthma, bronchitis, and child medication.</p>
                            <ul class="list-unstyled small text-secondary mb-3" style="font-size: 0.8rem;">
                                <li><i class="fa-solid fa-circle-check text-success me-1"></i> Battery & USB Dual Powered, Pocket Sized</li>
                                <li><i class="fa-solid fa-circle-check text-success me-1"></i> Adult & Child Mask + Mouthpiece Included</li>
                            </ul>
                        </div>
                        <div>
                            <div class="d-flex justify-content-between align-items-baseline mb-3 pt-2 border-top">
                                <div>
                                    <span class="d-block text-muted" style="font-size: 0.72rem;">Status:</span>
                                    <span class="badge bg-success text-white small">In Stock</span>
                                </div>
                                <div class="text-end">
                                    <span class="d-block text-muted" style="font-size: 0.72rem;">Buy Price:</span>
                                    <span class="fw-bold text-dm-red fs-6">₹1,450 <small class="text-muted text-decoration-line-through">₹2,200</small></span>
                                </div>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/919319149644?text=I+want+to+buy+Portable+Mesh+Nebulizer" target="_blank" class="btn btn-dm-red btn-sm rounded-pill fw-bold py-2">
                                    <i class="fa-brands fa-whatsapp me-1"></i> Buy on WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 15. CPAP & BiPAP Masks & Tubing Accessories -->
            <div class="col-md-6 col-lg-4 product-item" data-category="accessories" data-title="CPAP BiPAP Masks Nasal Full Face ResMed Philips Tubing Headgear">
                <div class="product-shop-card shadow-sm">
                    <span class="product-tag product-tag-buy">Original Spares</span>
                    <div class="product-img-box">
                        <i class="fa-solid fa-head-side-mask text-primary" style="font-size: 70px; opacity: 0.85;"></i>
                    </div>
                    <div class="p-4 d-flex flex-column justify-content-between flex-grow-1">
                        <div>
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <span class="badge bg-primary bg-opacity-10 text-primary small">Accessories</span>
                                <span class="text-warning small"><i class="fa-solid fa-star"></i> 4.9 (135+)</span>
                            </div>
                            <h5 class="fw-bold text-dark mb-1">BiPAP / CPAP Masks (Nasal & Full-Face)</h5>
                            <p class="small text-muted mb-2">Original silicone cushion masks from ResMed, Philips, and BMC. Available in S, M, L with 4-point headgear straps.</p>
                            <ul class="list-unstyled small text-secondary mb-3" style="font-size: 0.8rem;">
                                <li><i class="fa-solid fa-circle-check text-success me-1"></i> Anti-Asphyxia Valve & Quick-Release Clips</li>
                                <li><i class="fa-solid fa-circle-check text-success me-1"></i> Universal 22mm Standard Circuit Fit</li>
                            </ul>
                        </div>
                        <div>
                            <div class="d-flex justify-content-between align-items-baseline mb-3 pt-2 border-top">
                                <div>
                                    <span class="d-block text-muted" style="font-size: 0.72rem;">Price:</span>
                                    <span class="fw-bold text-dm-red fs-6">₹1,800 - ₹3,500</span>
                                </div>
                                <div class="text-end">
                                    <span class="badge bg-success text-white small">All Sizes S/M/L</span>
                                </div>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/919319149644?text=I+need+CPAP/BiPAP+Mask+Fitting" target="_blank" class="btn btn-dm-red btn-sm rounded-pill fw-bold py-2">
                                    <i class="fa-brands fa-whatsapp me-1"></i> Order Mask Kit
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. WHY CHOOSE DM HEALTHCARE E-STORE -->
<section class="py-5 bg-white border-top border-bottom">
    <div class="container">
        <div class="text-center max-w-700 mx-auto mb-4">
            <span class="badge bg-danger bg-opacity-10 text-danger px-3 py-1 rounded-pill fw-semibold mb-1 small">E-Store Advantage</span>
            <h3 class="fw-bold text-dark mb-1">Why Buy & Rent from DM Healthcare?</h3>
            <p class="text-muted small">We are a certified healthcare provider with dedicated respiratory therapists and clinical support staff, not just a delivery platform.</p>
        </div>

        <div class="row g-4 text-center">
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 rounded-4 p-3 bg-light shadow-sm">
                    <div class="rounded-circle bg-danger bg-opacity-10 text-dm-red d-inline-flex align-items-center justify-content-center mx-auto mb-3" style="width: 52px; height: 52px;">
                        <i class="fa-solid fa-certificate fs-4"></i>
                    </div>
                    <h6 class="fw-bold text-dark mb-1">100% Genuine OEM Devices</h6>
                    <p class="text-muted small mb-0">Direct tie-ups with global leaders ResMed, Philips, Evox, Dr. Odin with authentic brand warranty.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 rounded-4 p-3 bg-light shadow-sm">
                    <div class="rounded-circle bg-primary bg-opacity-10 text-primary d-inline-flex align-items-center justify-content-center mx-auto mb-3" style="width: 52px; height: 52px;">
                        <i class="fa-solid fa-truck-ramp-box fs-4"></i>
                    </div>
                    <h6 class="fw-bold text-dark mb-1">Bedside Setup & Titration</h6>
                    <p class="text-muted small mb-0">Our clinical technicians set up the machines, conduct live mask fit tests, and train caregivers on daily maintenance.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 rounded-4 p-3 bg-light shadow-sm">
                    <div class="rounded-circle bg-success bg-opacity-10 text-success d-inline-flex align-items-center justify-content-center mx-auto mb-3" style="width: 52px; height: 52px;">
                        <i class="fa-solid fa-clock-rotate-left fs-4"></i>
                    </div>
                    <h6 class="fw-bold text-dark mb-1">Same-Day Rapid Dispatch</h6>
                    <p class="text-muted small mb-0">Emergency delivery hubs in Faridabad, Noida, Delhi, and Gurugram ensure machines reach you in 30-90 minutes.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 rounded-4 p-3 bg-light shadow-sm">
                    <div class="rounded-circle bg-warning bg-opacity-10 text-dark d-inline-flex align-items-center justify-content-center mx-auto mb-3" style="width: 52px; height: 52px;">
                        <i class="fa-solid fa-rotate fs-4"></i>
                    </div>
                    <h6 class="fw-bold text-dark mb-1">Rent-to-Buy & Upgrades</h6>
                    <p class="text-muted small mb-0">Rent during recovery, upgrade models anytime as prescriptions change, or convert rental into purchase seamlessly.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. HOW ONLINE ORDERING & RENTAL WORKS -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center max-w-700 mx-auto mb-4">
            <span class="badge bg-secondary bg-opacity-10 text-secondary px-3 py-1 rounded-pill fw-semibold mb-1 small">3 Easy Steps</span>
            <h3 class="fw-bold text-dark mb-1">How to Order or Rent Medical Equipment Online</h3>
            <p class="text-muted small">Simple, hassle-free doorstep delivery with cash / UPI on delivery.</p>
        </div>

        <div class="row g-4 text-center">
            <div class="col-md-4">
                <div class="p-3">
                    <span class="shop-step-circle">1</span>
                    <h5 class="fw-bold text-dark mb-2">Select Item or Call</h5>
                    <p class="small text-muted mb-0">Choose your equipment or share your doctor's prescription with our pulmonology & nursing desk on WhatsApp or Call (+91 93191 49644).</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-3">
                    <span class="shop-step-circle">2</span>
                    <h5 class="fw-bold text-dark mb-2">Instant Dispatch & Setup</h5>
                    <p class="small text-muted mb-0">Our certified technician arrives at your doorstep with an ISO-sanitized machine, unboxes it, and conducts live mask fitting.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-3">
                    <span class="shop-step-circle">3</span>
                    <h5 class="fw-bold text-dark mb-2">Demonstration & Payment</h5>
                    <p class="small text-muted mb-0">Technician explains machine alarms, cleaning, and daily operation. Pay conveniently via UPI, Cash, or Card upon complete satisfaction.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. DIRECT BULK / PRESCRIPTION BOOKING FORM -->
<section class="py-5 bg-white border-top border-bottom">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-5">
                <span class="badge bg-danger bg-opacity-10 text-danger px-3 py-1 rounded-pill fw-semibold mb-2">Need Clinical Assistance?</span>
                <h3 class="fw-bold text-dark mb-2">Unsure Which Model Suits Your Doctor's Prescription?</h3>
                <p class="text-muted small mb-3">
                    Our biomedical equipment specialists and respiratory coordinators review your prescription, titration requirements, and patient mobility to recommend the exact model.
                </p>
                
                <div class="card bg-light border-0 rounded-4 p-3 mb-3">
                    <div class="d-flex align-items-center gap-3">
                        <div class="rounded-circle bg-dm-red text-white d-flex align-items-center justify-content-center" style="width: 44px; height: 44px;">
                            <i class="fa-solid fa-headset fs-4"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-0 text-dark small">E-Store Helpline</h6>
                            <span class="text-dm-red fw-bold fs-6">+91 93191 49644</span>
                        </div>
                    </div>
                </div>

                <div class="d-flex gap-2">
                    <a href="tel:+919319149644" class="btn btn-dm-red rounded-pill fw-bold py-2 px-3 btn-sm">
                        <i class="fa-solid fa-phone me-1"></i> Call Now (+91 93191 49644)
                    </a>
                    <a href="https://wa.me/919319149644?text=Hi%20DM%20Healthcare,%20I%20need%20help%20selecting%20medical%20equipment%20from%20the%20E-Store." target="_blank" class="btn btn-success rounded-pill fw-bold py-2 px-3 btn-sm">
                        <i class="fa-brands fa-whatsapp me-1"></i> WhatsApp
                    </a>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="card border-0 shadow-lg rounded-4 p-4 bg-white border">
                    <h5 class="fw-bold text-dark mb-3">E-Store Quick Order & Booking Request</h5>
                    
                    <form action="backend/submit_appointment.php" method="POST">
                        <input type="hidden" name="service" value="E-Store Medical Equipment Order">
                        
                        <div class="row g-2">
                            <div class="col-md-6">
                                <label class="form-label small fw-semibold text-secondary mb-1">Your Name *</label>
                                <input type="text" name="name" class="form-control form-control-sm rounded-2" placeholder="Full Name" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-semibold text-secondary mb-1">Phone Number *</label>
                                <input type="tel" name="phone" class="form-control form-control-sm rounded-2" placeholder="10-digit mobile" pattern="[0-9]{10}" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-semibold text-secondary mb-1">Requirement Type *</label>
                                <select name="order_type" class="form-select form-select-sm rounded-2" required>
                                    <option value="Rental (Monthly / Weekly)">Rental (Monthly / Weekly)</option>
                                    <option value="Purchase (Brand New Unit)">Purchase (Brand New Unit)</option>
                                    <option value="Rental with Nurse / ICU Attendant">Rental with Nurse / ICU Attendant</option>
                                    <option value="Bulk Order for Hospital / Clinic">Bulk Order for Hospital / Clinic</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-semibold text-secondary mb-1">Delivery City *</label>
                                <select name="city" class="form-select form-select-sm rounded-2" required>
                                    <option value="Faridabad">Faridabad (30-min express reach)</option>
                                    <option value="Noida & Greater Noida">Noida & Greater Noida</option>
                                    <option value="South Delhi & Central Delhi">South Delhi & Central Delhi</option>
                                    <option value="Gurugram (Gurgaon)">Gurugram (Gurgaon)</option>
                                    <option value="Ghaziabad & East Delhi">Ghaziabad & East Delhi</option>
                                    <option value="Chandigarh Tricity & North India">Chandigarh Tricity & North India</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label small fw-semibold text-secondary mb-1">Required Equipment & Delivery Address</label>
                                <textarea name="message" rows="2" class="form-control form-control-sm rounded-2" placeholder="Mention the product you need (e.g. BiPAP Lumis 150 / 5L O2 Concentrator) and address..."></textarea>
                            </div>
                            <div class="col-12 mt-2">
                                <button type="submit" class="btn btn-dm-red w-100 rounded-pill fw-bold py-2 shadow-sm">
                                    <i class="fa-solid fa-paper-plane me-1"></i> Submit E-Store Order Request
                                </button>
                                <small class="text-center d-block text-muted mt-1" style="font-size: 0.72rem;">
                                    <i class="fa-solid fa-lock text-success me-1"></i> 100% Secure. Pay after inspection & demo at home.
                                </small>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 6. E-STORE FAQS -->
<section class="py-5 bg-light">
    <div class="container max-w-800">
        <div class="text-center mb-4">
            <span class="badge bg-secondary bg-opacity-10 text-secondary px-3 py-1 rounded-pill fw-semibold mb-1 small">Got Questions?</span>
            <h3 class="fw-bold text-dark">E-Store Frequently Asked Questions</h3>
        </div>

        <div class="accordion accordion-flush shadow-sm rounded-4 overflow-hidden border bg-white" id="estoreFaq">
            <div class="accordion-item border-bottom">
                <h2 class="accordion-header" id="efaqH1">
                    <button class="accordion-button fw-bold text-dark py-3" type="button" data-bs-toggle="collapse" data-bs-target="#efaqC1">
                        How fast can medical equipment be delivered to my home?
                    </button>
                </h2>
                <div id="efaqC1" class="accordion-collapse collapse show" data-bs-parent="#estoreFaq">
                    <div class="accordion-body text-muted small lh-base">
                        We offer <strong>same-day delivery</strong> across Delhi NCR (Faridabad, Noida, Gurugram, Delhi, Ghaziabad). Emergency life-support equipment like Oxygen Concentrators, Oxygen Cylinders, and BiPAP machines can be dispatched from our nearest hub within <strong>30 to 90 minutes</strong>.
                    </div>
                </div>
            </div>

            <div class="accordion-item border-bottom">
                <h2 class="accordion-header" id="efaqH2">
                    <button class="accordion-button collapsed fw-bold text-dark py-3" type="button" data-bs-toggle="collapse" data-bs-target="#efaqC2">
                        Can I rent equipment first and then buy if required?
                    </button>
                </h2>
                <div id="efaqC2" class="accordion-collapse collapse" data-bs-parent="#estoreFaq">
                    <div class="accordion-body text-muted small lh-base">
                        Yes! Our flexible <strong>Rent-to-Buy program</strong> allows you to rent any equipment for your initial recovery period. If your doctor later advises long-term usage, we can adjust a portion of your paid rental against the purchase price of a brand-new unit.
                    </div>
                </div>
            </div>

            <div class="accordion-item border-bottom">
                <h2 class="accordion-header" id="efaqH3">
                    <button class="accordion-button collapsed fw-bold text-dark py-3" type="button" data-bs-toggle="collapse" data-bs-target="#efaqC3">
                        Do you provide technician installation and mask fitting at home?
                    </button>
                </h2>
                <div id="efaqC3" class="accordion-collapse collapse" data-bs-parent="#estoreFaq">
                    <div class="accordion-body text-muted small lh-base">
                        Yes, 100%. Every delivery is accompanied by our trained healthcare technician who unboxes the machine, sets it up at the patient's bedside, programs your doctor's prescribed pressure settings, conducts live mask fit tests, and trains the family on daily maintenance.
                    </div>
                </div>
            </div>

            <div class="accordion-item border-bottom">
                <h2 class="accordion-header" id="efaqH4">
                    <button class="accordion-button collapsed fw-bold text-dark py-3" type="button" data-bs-toggle="collapse" data-bs-target="#efaqC4">
                        What payment methods are accepted?
                    </button>
                </h2>
                <div id="efaqC4" class="accordion-collapse collapse" data-bs-parent="#estoreFaq">
                    <div class="accordion-body text-muted small lh-base">
                        We accept Cash on Delivery (COD), UPI (Google Pay, PhonePe, Paytm), Debit & Credit Cards, and Net Banking upon delivery after you inspect and test the machine.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="efaqH5">
                    <button class="accordion-button collapsed fw-bold text-dark py-3" type="button" data-bs-toggle="collapse" data-bs-target="#efaqC5">
                        What happens if a rented machine malfunctions or alarms?
                    </button>
                </h2>
                <div id="efaqC5" class="accordion-collapse collapse" data-bs-parent="#estoreFaq">
                    <div class="accordion-body text-muted small lh-base">
                        We operate a 24/7 technical hotline (+91 93191 49644). If there is any technical issue, alarm, or malfunction, our technician provides immediate phone assistance and, if necessary, dispatches a replacement backup machine immediately at zero extra cost.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 7. CITY COVERAGE BAR -->
<section class="py-5 bg-dark text-white">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-8">
                <span class="badge bg-danger text-white rounded-pill px-3 py-1 small fw-bold mb-2">Doorstep Service Area</span>
                <h3 class="fw-bold mb-2">E-Store Express Delivery Across Delhi NCR & North India</h3>
                <p class="text-light opacity-75 small mb-3">
                    Fast delivery hubs with on-site technician installation across:
                </p>
                <div class="d-flex flex-wrap gap-2 small">
                    <span class="badge bg-secondary text-light py-2 px-3">Faridabad</span>
                    <span class="badge bg-secondary text-light py-2 px-3">Noida & Greater Noida</span>
                    <span class="badge bg-secondary text-light py-2 px-3">South & Central Delhi</span>
                    <span class="badge bg-secondary text-light py-2 px-3">Gurugram (Gurgaon)</span>
                    <span class="badge bg-secondary text-light py-2 px-3">Ghaziabad</span>
                    <span class="badge bg-secondary text-light py-2 px-3">Chandigarh Tricity</span>
                    <span class="badge bg-secondary text-light py-2 px-3">Ludhiana</span>
                    <span class="badge bg-secondary text-light py-2 px-3">Jalandhar</span>
                    <span class="badge bg-secondary text-light py-2 px-3">Patiala</span>
                    <span class="badge bg-secondary text-light py-2 px-3">Amritsar</span>
                </div>
            </div>

            <div class="col-lg-4 text-lg-end">
                <div class="card bg-secondary bg-opacity-25 border border-secondary rounded-4 p-4 text-center">
                    <h6 class="text-white fw-bold mb-1">Call for Instant Dispatch</h6>
                    <span class="text-dm-red fw-bold fs-4 d-block mb-3">+91 93191 49644</span>
                    <a href="tel:+919319149644" class="btn btn-dm-red rounded-pill w-100 fw-bold py-2 mb-2">
                        <i class="fa-solid fa-phone me-1"></i> Call E-Store Desk
                    </a>
                    <a href="https://wa.me/919319149644?text=Hi%20DM%20Healthcare,%20I%20want%20to%20order%20from%20E-Store." target="_blank" class="btn btn-success rounded-pill w-100 fw-bold py-2 btn-sm">
                        <i class="fa-brands fa-whatsapp me-1"></i> WhatsApp Order
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Category Filter & Search Script -->
<script>
function filterCategory(cat, btn) {
    document.querySelectorAll('.store-tab-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');

    const items = document.querySelectorAll('.product-item');
    items.forEach(item => {
        if (cat === 'all' || item.getAttribute('data-category') === cat) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });
}

function filterStoreProducts() {
    const input = document.getElementById('storeSearch').value.toLowerCase();
    const items = document.querySelectorAll('.product-item');

    items.forEach(item => {
        const title = (item.getAttribute('data-title') || '').toLowerCase();
        const text = item.innerText.toLowerCase();
        if (title.includes(input) || text.includes(input)) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });
}
</script>

<?php
$frontend_custom_sections = ob_get_clean();
