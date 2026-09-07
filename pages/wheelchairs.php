<?php
/**
 * DM Healthcare - Wheelchairs on Rent & Sale
 * Modern, Bootstrap 5-Powered Medical Equipment Portal
 */

$display_title = "Wheelchairs on Rent & Sale";
$seo_title = "Wheelchair on Rent & Sale in Delhi NCR, Faridabad & Noida - DM Healthcare";
$seo_desc = "Rent or buy manual, motorized electric, recliner, commode & stair-climbing wheelchairs across Delhi NCR, Faridabad, Noida & Gurugram. Same-day delivery, 100% sanitized, starting at ₹1,000/mo.";
$short_desc = "Hospital-grade manual and electric power wheelchairs on rent & sale. Free home delivery, demonstration, and 24/7 technical support across Delhi NCR.";
$category_name = "Medical Equipment";
$full_page_override = true;
$hide_page_banner = true;

// Wheelchair Catalog Data
$wheelchairs = [
    [
        'id' => 'wc-manual-std',
        'category' => 'manual',
        'title' => 'Standard Foldable Manual Wheelchair',
        'badge' => 'Most Popular',
        'badge_class' => 'bg-danger',
        'rent_price' => '₹1,200',
        'rent_period' => '/ month',
        'buy_price' => '₹6,500',
        'image' => 'assets/images/pages/wheelchair_manual_standard.jpg',
        'features' => ['Chrome-plated heavy duty steel frame', 'Foldable & compact for car boot fit', '100 kg weight capacity & safety brakes', 'Padded armrests & swing-away footrests'],
        'ideal_for' => 'Post-surgery recovery, senior home mobility'
    ],
    [
        'id' => 'wc-manual-light',
        'category' => 'manual',
        'title' => 'Ultra-Lightweight Aluminium Wheelchair',
        'badge' => 'Easy Travel (9.5 kg)',
        'badge_class' => 'bg-primary',
        'rent_price' => '₹1,800',
        'rent_period' => '/ month',
        'buy_price' => '₹11,500',
        'image' => 'assets/images/pages/wheelchair_manual_standard.jpg',
        'features' => ['Aircraft-grade lightweight aluminium frame', 'Dual attendant handbrakes for safety', 'Quick single-pull fold mechanism', 'Breathable antibacterial cushion seat'],
        'ideal_for' => 'Frequent outdoor travel & hospital OPD visits'
    ],
    [
        'id' => 'wc-commode-std',
        'category' => 'commode',
        'title' => 'Commode Wheelchair with Removable Pot',
        'badge' => 'Hygiene Essential',
        'badge_class' => 'bg-info text-dark',
        'rent_price' => '₹1,500',
        'rent_period' => '/ month',
        'buy_price' => '₹8,500',
        'image' => 'assets/images/pages/wheelchair_recliner_commode.jpg',
        'features' => ['Waterproof padded seat with center cut-out', 'Slide-out removable commode pan with lid', 'Direct roll-over western toilet design', 'Rust-proof chrome frame with wheel locks'],
        'ideal_for' => 'Bedridden & elderly patients needing bathroom assistance'
    ],
    [
        'id' => 'wc-recliner-high',
        'category' => 'commode',
        'title' => 'High-Back Reclining Wheelchair (180°)',
        'badge' => 'Max Comfort',
        'badge_class' => 'bg-warning text-dark',
        'rent_price' => '₹2,500',
        'rent_period' => '/ month',
        'buy_price' => '₹16,000',
        'image' => 'assets/images/pages/wheelchair_recliner_commode.jpg',
        'features' => ['Hydraulic recline from 90° upright to 180° bed flat', 'Detachable headrest & neck stabilizer cushion', 'Elevating leg-rests with cushioned calf pads', 'Built-in commode pot & anti-tipper rear wheels'],
        'ideal_for' => 'Spinal injuries, paralysis, stroke rehabilitation'
    ],
    [
        'id' => 'wc-electric-power',
        'category' => 'electric',
        'title' => 'Motorized Electric Power Wheelchair',
        'badge' => 'Self-Drive',
        'badge_class' => 'bg-success',
        'rent_price' => '₹4,500',
        'rent_period' => '/ month',
        'buy_price' => '₹45,000',
        'image' => 'assets/images/pages/wheelchair_electric_motorized.jpg',
        'features' => ['360° sensitive joystick control (interchangeable)', 'Dual 250W powerful brushless motors', '20 km travel range per full charge', 'Electromagnetic auto-braking on slopes'],
        'ideal_for' => 'Independent mobility for seniors and disabled individuals'
    ],
    [
        'id' => 'wc-electric-foldable',
        'category' => 'electric',
        'title' => 'Smart Foldable Power Wheelchair',
        'badge' => 'Airline Approved',
        'badge_class' => 'bg-dark',
        'rent_price' => '₹6,000',
        'rent_period' => '/ month',
        'buy_price' => '₹68,000',
        'image' => 'assets/images/pages/wheelchair_electric_motorized.jpg',
        'features' => ['One-touch 5-second automatic fold', 'Removable lightweight Lithium-ion battery', 'Fits in any small car boot or flight cargo', 'Anti-skid polyurethane all-terrain tyres'],
        'ideal_for' => 'Independent air travel, malls, parks & daily commute'
    ],
    [
        'id' => 'wc-stair-climber',
        'category' => 'stair',
        'title' => 'Motorized Tracked Stair-Climber Wheelchair',
        'badge' => 'Stair Lift Support',
        'badge_class' => 'bg-danger',
        'rent_price' => '₹8,500',
        'rent_period' => '/ month',
        'buy_price' => '₹1,25,000',
        'image' => 'assets/images/pages/wheelchair_stair_climber.jpg',
        'features' => ['High-traction rubber track for stairs', 'Zero effort single-operator motorized climb & descend', 'Safety restraint harness & emergency auto-lock', '160 kg heavy-duty weight support'],
        'ideal_for' => 'Buildings without elevators, multi-storey residential transfers'
    ],
    [
        'id' => 'wc-paediatric',
        'category' => 'manual',
        'title' => 'Paediatric Child Wheelchair',
        'badge' => 'Child Spec',
        'badge_class' => 'bg-info text-dark',
        'rent_price' => '₹2,000',
        'rent_period' => '/ month',
        'buy_price' => '₹12,000',
        'image' => 'assets/images/pages/wheelchair_manual_standard.jpg',
        'features' => ['Compact 14-inch seat designed for children', 'Adjustable footplate height & side lateral supports', 'Vibrant cheerful frame & comfortable cushions', 'Attendant handbrakes & harness belts'],
        'ideal_for' => 'Paediatric orthopaedic recovery & cerebral palsy care'
    ]
];

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

    .wc-product-card {
        transition: transform 0.25s ease, box-shadow 0.25s ease;
        border: 1px solid #e2e8f0;
    }
    .wc-product-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 24px rgba(15, 23, 42, 0.08) !important;
        border-color: #cbd5e1;
    }
    .wc-product-img {
        height: 155px;
        object-fit: cover;
        background-color: #f1f5f9;
    }
    .wc-feature-list li {
        font-size: 0.78rem;
        line-height: 1.35;
    }
    .filter-btn.active {
        background-color: var(--dm-red) !important;
        color: #ffffff !important;
        border-color: var(--dm-red) !important;
    }
</style>

<!-- 1. Hero Section -->
<section class="py-4 py-lg-5 bg-white border-bottom">
    <div class="container py-lg-2">
        <div class="row align-items-center g-4">
            <div class="col-lg-7">
                <span class="badge bg-danger bg-opacity-10 text-danger px-3 py-1 rounded-pill fw-semibold mb-2 border border-danger border-opacity-25 small">
                    <i class="fa-solid fa-truck-fast me-1"></i> Same-Day Home Delivery Across Delhi NCR
                </span>
                <h1 class="display-6 fw-bold text-dark lh-sm mb-2">
                    Hospital-Grade <span class="text-dm-red">Wheelchairs</span> on Rent & Sale
                </h1>
                <p class="text-muted fs-6 mb-3">
                    Manual, motorized electric, recliner & commode wheelchairs delivered at your doorstep. 100% sanitized with free demonstration & 24/7 support in Faridabad, Delhi, Noida & Gurugram.
                </p>
                
                <div class="d-flex flex-wrap gap-2 mb-3">
                    <a href="tel:+918860600423" class="btn btn-dm-red rounded-pill px-3 py-2 fw-bold shadow-sm d-inline-flex align-items-center gap-2 small">
                        <i class="fa-solid fa-phone"></i> Call +91 88606 00423
                    </a>
                    <a href="https://wa.me/918860600423?text=Hello%20DM%20Healthcare,%20I%20want%20to%20rent/buy%20a%20wheelchair." target="_blank" class="btn btn-outline-success rounded-pill px-3 py-2 fw-bold d-inline-flex align-items-center gap-2 small">
                        <i class="fa-brands fa-whatsapp"></i> WhatsApp Booking
                    </a>
                    <a href="#booking-form" class="btn btn-outline-secondary rounded-pill px-3 py-2 fw-bold small">
                        Book Online
                    </a>
                </div>

                <!-- Trust Badges Bar -->
                <div class="row g-2 pt-2 border-top">
                    <div class="col-6 col-sm-4 d-flex align-items-center gap-2">
                        <i class="fa-solid fa-clock-rotate-left text-dm-red"></i>
                        <span class="small text-secondary fw-semibold">30-60 Mins Delivery</span>
                    </div>
                    <div class="col-6 col-sm-4 d-flex align-items-center gap-2">
                        <i class="fa-solid fa-shield-virus text-success"></i>
                        <span class="small text-secondary fw-semibold">100% Sanitized</span>
                    </div>
                    <div class="col-6 col-sm-4 d-flex align-items-center gap-2">
                        <i class="fa-solid fa-indian-rupee-sign text-primary"></i>
                        <span class="small text-secondary fw-semibold">From ₹1,000/Mo</span>
                    </div>
                </div>
            </div>

            <!-- Right Hero Image -->
            <div class="col-lg-5">
                <div class="position-relative">
                    <img src="assets/images/pages/wheelchair_hero_banner.jpg" alt="Wheelchair Rental Service DM Healthcare" class="img-fluid rounded-4 shadow-sm border border-2 border-white w-100" style="max-height: 320px; object-fit: cover;">
                    <div class="position-absolute bottom-0 start-0 m-2 p-2 px-3 bg-white bg-opacity-95 rounded-3 shadow-sm border">
                        <div class="d-flex align-items-center gap-2">
                            <i class="fa-solid fa-certificate text-dm-red fs-5"></i>
                            <div>
                                <h6 class="mb-0 fw-bold text-dark small">1,500+ Delivered</h6>
                                <small class="text-muted" style="font-size: 0.72rem;">Top Rated in Delhi NCR</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. Product Catalog Section -->
<section class="py-4 py-lg-5 bg-light" id="catalog">
    <div class="container">
        <div class="text-center max-w-700 mx-auto mb-3">
            <span class="badge bg-secondary bg-opacity-10 text-secondary px-3 py-1 rounded-pill fw-semibold mb-1 small">Our Inventory</span>
            <h3 class="fw-bold text-dark mb-1">Choose the Right Wheelchair</h3>
            <p class="text-muted small mb-2">Select from manual, commode, recliner, and motorized electric power wheelchairs.</p>
            
            <!-- Category Filter Buttons -->
            <div class="d-flex flex-wrap justify-content-center gap-1 mt-2">
                <button type="button" class="btn btn-outline-dm-red btn-sm rounded-pill px-3 py-1 filter-btn active" data-filter="all">All Models</button>
                <button type="button" class="btn btn-outline-dm-red btn-sm rounded-pill px-3 py-1 filter-btn" data-filter="manual">Manual & Light</button>
                <button type="button" class="btn btn-outline-dm-red btn-sm rounded-pill px-3 py-1 filter-btn" data-filter="electric">Motorized & Electric</button>
                <button type="button" class="btn btn-outline-dm-red btn-sm rounded-pill px-3 py-1 filter-btn" data-filter="commode">Recliner & Commode</button>
                <button type="button" class="btn btn-outline-dm-red btn-sm rounded-pill px-3 py-1 filter-btn" data-filter="stair">Stair Climber</button>
            </div>
        </div>

        <!-- Products Grid -->
        <div class="row g-3 pt-2" id="wheelchair-grid">
            <?php foreach($wheelchairs as $wc): ?>
            <div class="col-sm-6 col-lg-4 col-xl-3 wc-item" data-category="<?= $wc['category'] ?>">
                <div class="card h-100 rounded-3 shadow-sm wc-product-card bg-white overflow-hidden">
                    <div class="position-relative">
                        <img src="<?= $wc['image'] ?>" alt="<?= htmlspecialchars($wc['title']) ?>" class="card-img-top wc-product-img">
                        <span class="position-absolute top-0 start-0 m-2 badge <?= $wc['badge_class'] ?> rounded-pill px-2 py-1 shadow-sm" style="font-size: 0.72rem;">
                            <?= $wc['badge'] ?>
                        </span>
                    </div>
                    <div class="card-body d-flex flex-column p-3">
                        <h6 class="card-title fw-bold text-dark mb-1 text-truncate" title="<?= htmlspecialchars($wc['title']) ?>"><?= htmlspecialchars($wc['title']) ?></h6>
                        <p class="text-muted mb-2 text-truncate" style="font-size: 0.76rem;" title="<?= htmlspecialchars($wc['ideal_for']) ?>">
                            <i class="fa-solid fa-user-check me-1 text-dm-red"></i><?= htmlspecialchars($wc['ideal_for']) ?>
                        </p>
                        
                        <!-- Features (Compact 3 Items) -->
                        <ul class="list-unstyled wc-feature-list mb-2 flex-grow-1">
                            <?php foreach(array_slice($wc['features'], 0, 3) as $f): ?>
                            <li class="d-flex align-items-center gap-1 mb-1 text-secondary">
                                <i class="fa-solid fa-check text-success small"></i>
                                <span class="text-truncate"><?= htmlspecialchars($f) ?></span>
                            </li>
                            <?php endforeach; ?>
                        </ul>

                        <!-- Compact Pricing Row -->
                        <div class="bg-light p-2 px-3 rounded-2 mb-2 border d-flex justify-content-between align-items-center">
                            <div>
                                <span class="d-block text-muted" style="font-size: 0.7rem; line-height: 1;">Rent / Month</span>
                                <span class="fw-bold text-dm-red fs-6"><?= $wc['rent_price'] ?></span>
                            </div>
                            <div class="text-end border-start ps-2">
                                <span class="d-block text-muted" style="font-size: 0.7rem; line-height: 1;">Buy New</span>
                                <span class="fw-bold text-dark small"><?= $wc['buy_price'] ?></span>
                            </div>
                        </div>

                        <!-- Actions (Side by Side Compact) -->
                        <div class="d-flex gap-2">
                            <a href="https://wa.me/918860600423?text=<?= urlencode('Hi DM Healthcare, I am interested in ' . $wc['title'] . ' (' . $wc['rent_price'] . '/mo). Please share details.') ?>" target="_blank" class="btn btn-outline-success btn-sm rounded-pill fw-bold px-2 py-1 flex-fill d-flex align-items-center justify-content-center gap-1" style="font-size: 0.78rem;">
                                <i class="fa-brands fa-whatsapp"></i> Chat
                            </a>
                            <a href="#booking-form" onclick="selectModel('<?= addslashes($wc['title']) ?>')" class="btn btn-dm-red btn-sm rounded-pill fw-bold px-2 py-1 flex-fill d-flex align-items-center justify-content-center gap-1" style="font-size: 0.78rem;">
                                <i class="fa-solid fa-calendar-check"></i> Book
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 3. Comparison Matrix Section (Bootstrap Table) -->
<section class="py-5 bg-white border-top border-bottom">
    <div class="container">
        <div class="text-center max-w-700 mx-auto mb-4">
            <span class="badge bg-danger bg-opacity-10 text-danger px-3 py-1 rounded-pill fw-semibold mb-2">Guide & Specs</span>
            <h2 class="fw-bold text-dark">Wheelchair Comparison Table</h2>
            <p class="text-muted">Compare key features, weights, battery life, and prices to select the best model for your needs.</p>
        </div>

        <div class="table-responsive shadow-sm rounded-4 border">
            <table class="table table-hover align-middle mb-0 bg-white">
                <thead class="table-light">
                    <tr class="text-secondary small fw-bold">
                        <th class="py-3 px-4">Wheelchair Type</th>
                        <th class="py-3 px-3">Total Weight</th>
                        <th class="py-3 px-3">Recline Capability</th>
                        <th class="py-3 px-3">Power / Battery</th>
                        <th class="py-3 px-3">Best Recommended For</th>
                        <th class="py-3 px-4 text-end">Rent / Month</th>
                    </tr>
                </thead>
                <tbody class="divide-y">
                    <tr>
                        <td class="py-3 px-4 fw-bold text-dark"><i class="fa-solid fa-wheelchair me-2 text-danger"></i> Standard Manual</td>
                        <td class="py-3 px-3 text-muted">16-18 kg (Steel)</td>
                        <td class="py-3 px-3 text-muted">Fixed 90° Back</td>
                        <td class="py-3 px-3 text-muted">Manual Push</td>
                        <td class="py-3 px-3 text-muted">General home recovery & senior care</td>
                        <td class="py-3 px-4 text-end fw-bold text-dm-red">₹1,200</td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4 fw-bold text-dark"><i class="fa-solid fa-feather-pointed me-2 text-primary"></i> Aluminium Lightweight</td>
                        <td class="py-3 px-3 text-muted">9.5-11 kg (Alloy)</td>
                        <td class="py-3 px-3 text-muted">Half-folding back</td>
                        <td class="py-3 px-3 text-muted">Manual Push</td>
                        <td class="py-3 px-3 text-muted">Frequent car travel & doctor visits</td>
                        <td class="py-3 px-4 text-end fw-bold text-dm-red">₹1,800</td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4 fw-bold text-dark"><i class="fa-solid fa-restroom me-2 text-info"></i> Commode & Toilet Type</td>
                        <td class="py-3 px-3 text-muted">17-19 kg</td>
                        <td class="py-3 px-3 text-muted">Fixed Back</td>
                        <td class="py-3 px-3 text-muted">Manual Push</td>
                        <td class="py-3 px-3 text-muted">Bathroom assistance for bedridden patients</td>
                        <td class="py-3 px-4 text-end fw-bold text-dm-red">₹1,500</td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4 fw-bold text-dark"><i class="fa-solid fa-bed me-2 text-warning"></i> High-Back Recliner (180°)</td>
                        <td class="py-3 px-3 text-muted">22-24 kg</td>
                        <td class="py-3 px-3 text-success fw-semibold">90° to 180° Bed Flat</td>
                        <td class="py-3 px-3 text-muted">Manual Hydraulic</td>
                        <td class="py-3 px-3 text-muted">Paralysis, stroke, head/neck support</td>
                        <td class="py-3 px-4 text-end fw-bold text-dm-red">₹2,500</td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4 fw-bold text-dark"><i class="fa-solid fa-bolt me-2 text-success"></i> Motorized Power Wheelchair</td>
                        <td class="py-3 px-3 text-muted">38-42 kg</td>
                        <td class="py-3 px-3 text-muted">Semi-Recline Option</td>
                        <td class="py-3 px-3 text-success fw-semibold">20 km / Charge (Dual Motor)</td>
                        <td class="py-3 px-3 text-muted">Self-driving independent senior mobility</td>
                        <td class="py-3 px-4 text-end fw-bold text-dm-red">₹4,500</td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4 fw-bold text-dark"><i class="fa-solid fa-stairs me-2 text-danger"></i> Tracked Stair Climber</td>
                        <td class="py-3 px-3 text-muted">35-40 kg</td>
                        <td class="py-3 px-3 text-muted">Ergonomic Safety Angle</td>
                        <td class="py-3 px-3 text-success fw-semibold">Motorized Track Crawler</td>
                        <td class="py-3 px-3 text-muted">Multi-storey homes with no lift</td>
                        <td class="py-3 px-4 text-end fw-bold text-dm-red">₹8,500</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- 4. How Rental Works (4 Easy Steps) -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center max-w-700 mx-auto mb-5">
            <span class="badge bg-secondary bg-opacity-10 text-secondary px-3 py-1 rounded-pill fw-semibold mb-2">Simple 4-Step Process</span>
            <h2 class="fw-bold text-dark">How to Rent a Wheelchair</h2>
            <p class="text-muted">Fast, hassle-free doorstep rental process with no complex documentation.</p>
        </div>

        <div class="row g-4 text-center">
            <div class="col-sm-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 bg-white">
                    <div class="rounded-circle bg-danger bg-opacity-10 text-danger d-inline-flex align-items-center justify-content-center mx-auto mb-3" style="width: 60px; height: 60px;">
                        <span class="fw-bold fs-4">1</span>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Select Model</h5>
                    <p class="small text-muted mb-0">Browse our manual, electric or commode models according to patient mobility needs.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 bg-white">
                    <div class="rounded-circle bg-primary bg-opacity-10 text-primary d-inline-flex align-items-center justify-content-center mx-auto mb-3" style="width: 60px; height: 60px;">
                        <span class="fw-bold fs-4">2</span>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Call or WhatsApp</h5>
                    <p class="small text-muted mb-0">Connect with our 24/7 care team at +91 88606 00423 to confirm rental duration and address.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 bg-white">
                    <div class="rounded-circle bg-success bg-opacity-10 text-success d-inline-flex align-items-center justify-content-center mx-auto mb-3" style="width: 60px; height: 60px;">
                        <span class="fw-bold fs-4">3</span>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Same-Day Delivery</h5>
                    <p class="small text-muted mb-0">Our technician delivers 100% sanitized equipment with a free home operation demo.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 bg-white">
                    <div class="rounded-circle bg-warning bg-opacity-10 text-dark d-inline-flex align-items-center justify-content-center mx-auto mb-3" style="width: 60px; height: 60px;">
                        <span class="fw-bold fs-4">4</span>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Easy Extension / Return</h5>
                    <p class="small text-muted mb-0">Extend monthly tenure with a single message or schedule a free doorstep pickup anytime.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. Booking Form & Contact Section -->
<section class="py-5 bg-white" id="booking-form">
    <div class="container">
        <div class="row g-4 align-items-center">
            <!-- Left Info -->
            <div class="col-lg-5">
                <span class="badge bg-danger bg-opacity-10 text-danger px-3 py-1 rounded-pill fw-semibold mb-2">Instant Booking</span>
                <h2 class="fw-bold text-dark mb-3">Book Wheelchair for Rent or Purchase</h2>
                <p class="text-muted mb-4">Fill out the form to request instant same-day delivery in Faridabad, Noida, Delhi, or Gurugram. Our care desk will confirm your order in under 10 minutes.</p>
                
                <div class="card bg-light border-0 rounded-4 p-4 mb-3">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="rounded-circle bg-dm-red text-white d-flex align-items-center justify-content-center" style="width: 44px; height: 44px;">
                            <i class="fa-solid fa-headset fs-5"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-0 text-dark">Need Immediate Delivery?</h6>
                            <small class="text-muted">Speak with our rental manager</small>
                        </div>
                    </div>
                    <a href="tel:+918860600423" class="btn btn-dm-red rounded-pill fw-bold py-2 mb-2">
                        <i class="fa-solid fa-phone me-1"></i> Call +91 88606 00423
                    </a>
                    <a href="https://wa.me/918860600423?text=Hi%20DM%20Healthcare,%20I%20need%20a%20wheelchair%20urgently." target="_blank" class="btn btn-outline-success rounded-pill fw-bold py-2">
                        <i class="fa-brands fa-whatsapp me-1"></i> Chat on WhatsApp
                    </a>
                </div>
            </div>

            <!-- Right Form -->
            <div class="col-lg-7">
                <div class="card border-0 shadow-lg rounded-4 p-4 p-md-5 bg-white border">
                    <h4 class="fw-bold text-dark mb-3">Request Wheelchair Delivery</h4>
                    
                    <form action="backend/submit_appointment.php" method="POST" id="wheelchairBookingForm">
                        <input type="hidden" name="service" value="Wheelchair Rental & Sale">
                        
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label small fw-semibold text-secondary">Full Name *</label>
                                <input type="text" name="name" class="form-control rounded-3 py-2" placeholder="Enter patient / guardian name" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-semibold text-secondary">Phone Number *</label>
                                <input type="tel" name="phone" class="form-control rounded-3 py-2" placeholder="10-digit mobile number" pattern="[0-9]{10}" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-semibold text-secondary">Select Wheelchair Model *</label>
                                <select name="model" id="modelSelect" class="form-select rounded-3 py-2" required>
                                    <option value="">-- Choose Wheelchair --</option>
                                    <option value="Standard Manual Foldable (₹1,200/mo)">Standard Manual Foldable (₹1,200/mo)</option>
                                    <option value="Aluminium Ultra-Lightweight (₹1,800/mo)">Aluminium Ultra-Lightweight (₹1,800/mo)</option>
                                    <option value="Commode Wheelchair with Pot (₹1,500/mo)">Commode Wheelchair with Pot (₹1,500/mo)</option>
                                    <option value="High-Back Recliner 180° (₹2,500/mo)">High-Back Recliner 180° (₹2,500/mo)</option>
                                    <option value="Motorized Electric Power (₹4,500/mo)">Motorized Electric Power (₹4,500/mo)</option>
                                    <option value="Foldable Smart Power Wheelchair (₹6,000/mo)">Foldable Smart Power Wheelchair (₹6,000/mo)</option>
                                    <option value="Tracked Stair Climber (₹8,500/mo)">Tracked Stair Climber (₹8,500/mo)</option>
                                    <option value="Paediatric Child Wheelchair (₹2,000/mo)">Paediatric Child Wheelchair (₹2,000/mo)</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-semibold text-secondary">Service Requirement *</label>
                                <select name="requirement_type" class="form-select rounded-3 py-2" required>
                                    <option value="Monthly Rental">Monthly Rental</option>
                                    <option value="Purchase / Buy New">Purchase / Buy New</option>
                                    <option value="15-Day Short Rental">15-Day Short Rental</option>
                                    <option value="Rent-to-Buy Option">Rent-to-Buy Option</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-semibold text-secondary">City / Location *</label>
                                <select name="city" class="form-select rounded-3 py-2" required>
                                    <option value="Faridabad">Faridabad (30-min delivery)</option>
                                    <option value="Noida & Greater Noida">Noida & Greater Noida</option>
                                    <option value="South Delhi & Central Delhi">South Delhi & Central Delhi</option>
                                    <option value="Gurugram (Gurgaon)">Gurugram (Gurgaon)</option>
                                    <option value="Ghaziabad & East Delhi">Ghaziabad & East Delhi</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-semibold text-secondary">Preferred Delivery Date</label>
                                <input type="date" name="preferred_date" class="form-control rounded-3 py-2" value="<?= date('Y-m-d') ?>">
                            </div>
                            <div class="col-12">
                                <label class="form-label small fw-semibold text-secondary">Complete Delivery Address</label>
                                <textarea name="message" rows="2" class="form-control rounded-3" placeholder="House no., street, locality, landmark..."></textarea>
                            </div>
                            <div class="col-12 mt-3">
                                <button type="submit" class="btn btn-dm-red btn-lg w-100 rounded-pill fw-bold py-3 shadow">
                                    <i class="fa-solid fa-paper-plane me-2"></i> Submit Wheelchair Booking Request
                                </button>
                                <small class="text-center d-block text-muted mt-2">
                                    <i class="fa-solid fa-lock text-success me-1"></i> Your information is secure. No upfront advance needed before delivery.
                                </small>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 6. FAQs Accordion Section (Bootstrap 5) -->
<section class="py-5 bg-light border-top">
    <div class="container max-w-800">
        <div class="text-center mb-4">
            <span class="badge bg-secondary bg-opacity-10 text-secondary px-3 py-1 rounded-pill fw-semibold mb-2">Got Questions?</span>
            <h2 class="fw-bold text-dark">Frequently Asked Questions</h2>
        </div>

        <div class="accordion accordion-flush shadow-sm rounded-4 overflow-hidden border bg-white" id="wcFaqAccordion">
            <div class="accordion-item border-bottom">
                <h2 class="accordion-header" id="faqOne">
                    <button class="accordion-button fw-bold text-dark py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                        How fast can DM Healthcare deliver a wheelchair to my home?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#wcFaqAccordion">
                    <div class="accordion-body text-muted small lh-base">
                        We offer rapid same-day delivery within 30 to 60 minutes across Faridabad, and 60 to 90 minutes across Noida, South Delhi, Gurugram, and Ghaziabad. Our technician will deliver and adjust the footrests and brakes right at your bedside.
                    </div>
                </div>
            </div>

            <div class="accordion-item border-bottom">
                <h2 class="accordion-header" id="faqTwo">
                    <button class="accordion-button collapsed fw-bold text-dark py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                        Are the rental wheelchairs cleaned and sanitized?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#wcFaqAccordion">
                    <div class="accordion-body text-muted small lh-base">
                        Yes, 100%. Every single wheelchair undergoes medical-grade hospital sanitization, clinical wipe-down with disinfectant agents, tire scrubbing, and a 10-point mechanical inspection before dispatch to ensure zero cross-infection risk.
                    </div>
                </div>
            </div>

            <div class="accordion-item border-bottom">
                <h2 class="accordion-header" id="faqThree">
                    <button class="accordion-button collapsed fw-bold text-dark py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                        Is there a security deposit required for renting?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#wcFaqAccordion">
                    <div class="accordion-body text-muted small lh-base">
                        We require minimal refundable security deposit for motorized power wheelchairs and zero to nominal deposit for standard manual wheelchairs with basic ID verification (Aadhaar / Driving License).
                    </div>
                </div>
            </div>

            <div class="accordion-item border-bottom">
                <h2 class="accordion-header" id="faqFour">
                    <button class="accordion-button collapsed fw-bold text-dark py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                        What if the wheelchair requires service or maintenance during the rental period?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#wcFaqAccordion">
                    <div class="accordion-body text-muted small lh-base">
                        All ongoing maintenance, puncture repairs, battery checks, and technical support are 100% free of charge. If any mechanical fault occurs, our technician will visit your home within 2-4 hours to fix it or provide an instant free replacement.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="faqFive">
                    <button class="accordion-button collapsed fw-bold text-dark py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
                        Can I convert my rental into a permanent purchase (Rent-to-Buy)?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#wcFaqAccordion">
                    <div class="accordion-body text-muted small lh-base">
                        Yes! With our Rent-to-Buy scheme, up to 50% of the rent paid during your first 3 months can be adjusted against the purchase price if you decide to buy the equipment permanently.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 7. Related Medical Equipment Quick Links -->
<section class="py-5 bg-white border-top">
    <div class="container">
        <h5 class="fw-bold text-dark mb-4 text-center">Other Hospital Equipment Available for Rent</h5>
        <div class="row g-3 justify-content-center text-center">
            <div class="col-6 col-md-3">
                <a href="page.php?title=hospital-beds" class="card border rounded-4 p-3 text-decoration-none shadow-sm h-100 wc-product-card bg-light">
                    <i class="fa-solid fa-bed-pulse text-dm-red fs-3 mb-2"></i>
                    <span class="fw-bold text-dark small d-block">ICU & Hospital Beds</span>
                    <small class="text-muted">From ₹2,500/mo</small>
                </a>
            </div>
            <div class="col-6 col-md-3">
                <a href="page.php?title=oxygen-concentrator" class="card border rounded-4 p-3 text-decoration-none shadow-sm h-100 wc-product-card bg-light">
                    <i class="fa-solid fa-lungs text-primary fs-3 mb-2"></i>
                    <span class="fw-bold text-dark small d-block">Oxygen Concentrators</span>
                    <small class="text-muted">5L & 10L Machines</small>
                </a>
            </div>
            <div class="col-6 col-md-3">
                <a href="page.php?title=bipap-cpap" class="card border rounded-4 p-3 text-decoration-none shadow-sm h-100 wc-product-card bg-light">
                    <i class="fa-solid fa-mask-ventilator text-success fs-3 mb-2"></i>
                    <span class="fw-bold text-dark small d-block">BiPAP & CPAP Machines</span>
                    <small class="text-muted">Auto Titrating</small>
                </a>
            </div>
            <div class="col-6 col-md-3">
                <a href="page.php?title=patient-attendant" class="card border rounded-4 p-3 text-decoration-none shadow-sm h-100 wc-product-card bg-light">
                    <i class="fa-solid fa-user-nurse text-warning fs-3 mb-2"></i>
                    <span class="fw-bold text-dark small d-block">Patient Attendant Care</span>
                    <small class="text-muted">12h / 24h Shifts</small>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Filter Script & Model Selector -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Filter Buttons
    const filterBtns = document.querySelectorAll(".filter-btn");
    const items = document.querySelectorAll(".wc-item");

    filterBtns.forEach(btn => {
        btn.addEventListener("click", function() {
            filterBtns.forEach(b => b.classList.remove("active"));
            this.classList.add("active");

            const filter = this.getAttribute("data-filter");
            items.forEach(item => {
                if (filter === "all" || item.getAttribute("data-category") === filter) {
                    item.style.display = "block";
                } else {
                    item.style.display = "none";
                }
            });
        });
    });
});

function selectModel(modelName) {
    const select = document.getElementById("modelSelect");
    if (!select) return;
    for (let i = 0; i < select.options.length; i++) {
        if (select.options[i].value.indexOf(modelName) !== -1 || select.options[i].text.indexOf(modelName) !== -1) {
            select.selectedIndex = i;
            break;
        }
    }
}
</script>
<?php
$frontend_custom_sections = ob_get_clean();
