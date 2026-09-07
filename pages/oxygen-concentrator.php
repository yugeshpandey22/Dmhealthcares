<?php
/**
 * DM Healthcare - Oxygen Concentrators on Rent & Sale
 * Modern, Bootstrap 5-Powered Medical Equipment Portal
 */

$display_title = "Oxygen Concentrators on Rent & Sale";
$seo_title = "Oxygen Concentrator on Rent & Sale in Delhi NCR, Faridabad & Noida - DM Healthcare";
$seo_desc = "Rent or buy 5 LPM and 10 LPM hospital-grade oxygen concentrators in Delhi NCR, Faridabad, Noida & Gurugram. Same-day 30-60 min delivery, 100% sanitized, starting at ₹3,500/mo.";
$short_desc = "Continuous 93%-96% pure medical oxygen supply at home. Free doorstep delivery, demonstration, complimentary cannula kit, and 24/7 technical support.";
$category_name = "Medical Equipment";
$full_page_override = true;
$hide_page_banner = true;

// Oxygen Concentrator Inventory Models
$oxygen_models = [
    [
        'id' => 'oc-5lpm-std',
        'capacity' => '5 LPM',
        'title' => '5 Litre Home Oxygen Concentrator',
        'badge' => 'Most Prescribed',
        'badge_class' => 'bg-danger',
        'rent_price' => '₹3,500',
        'rent_period' => '/ month',
        'buy_price' => '₹38,000',
        'image' => 'assets/images/pages/oxygen_concentrator_5l.jpg',
        'features' => ['Continuous 0.5 - 5 LPM flow rate (93% ± 3% purity)', 'Ultra-quiet operation (<45 dB) for night sleep', 'Built-in oxygen purity sensor & low-flow alarms', 'Lightweight with castor wheels for easy room movement'],
        'ideal_for' => 'COPD, Asthma, post-COVID & mild-to-moderate respiratory support'
    ],
    [
        'id' => 'oc-10lpm-dual',
        'capacity' => '10 LPM',
        'title' => '10 Litre High-Flow Dual Oxygen Concentrator',
        'badge' => 'ICU & High Flow',
        'badge_class' => 'bg-primary',
        'rent_price' => '₹6,500',
        'rent_period' => '/ month',
        'buy_price' => '₹68,000',
        'image' => 'assets/images/pages/oxygen_concentrator_10l.jpg',
        'features' => ['Heavy-duty 1 - 10 LPM continuous high-pressure output', 'Dual flowmeter ports (can support 2 patients simultaneously)', 'Compatible with BiPAP, CPAP & High-Flow nasal cannulas', '24/7 continuous non-stop heavy medical operation'],
        'ideal_for' => 'Severe lung fibrosis, critical respiratory distress & ICU setup'
    ],
    [
        'id' => 'oc-5lpm-nebulizer',
        'capacity' => '5 LPM + Neb',
        'title' => '5 Litre Concentrator with Inbuilt Nebulizer',
        'badge' => '2-in-1 Medical',
        'badge_class' => 'bg-success',
        'rent_price' => '₹4,000',
        'rent_period' => '/ month',
        'buy_price' => '₹42,000',
        'image' => 'assets/images/pages/oxygen_concentrator_hero.jpg',
        'features' => ['Dual function: Medical oxygen + Nebulization therapy', 'High-definition digital LCD displaying real-time purity %', 'Self-diagnostic safety alarms & digital timer function', 'Includes complimentary humidifier & nasal tubing kit'],
        'ideal_for' => 'Patients requiring frequent bronchodilator nebulizer treatments'
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

    .oc-product-card {
        transition: transform 0.25s ease, box-shadow 0.25s ease;
        border: 1px solid #e2e8f0;
    }
    .oc-product-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 24px rgba(15, 23, 42, 0.08) !important;
        border-color: #cbd5e1;
    }
    .oc-product-img {
        height: 165px;
        object-fit: cover;
        background-color: #f1f5f9;
    }
    .oc-feature-list li {
        font-size: 0.78rem;
        line-height: 1.35;
    }
</style>

<!-- 1. Hero Section -->
<section class="py-4 py-lg-5 bg-white border-bottom">
    <div class="container py-lg-2">
        <div class="row align-items-center g-4">
            <div class="col-lg-7">
                <span class="badge bg-danger bg-opacity-10 text-danger px-3 py-1 rounded-pill fw-semibold mb-2 border border-danger border-opacity-25 small">
                    <i class="fa-solid fa-truck-medical me-1"></i> 30-60 Mins Emergency Delivery Across Delhi NCR
                </span>
                <h1 class="display-6 fw-bold text-dark lh-sm mb-2">
                    Medical-Grade <span class="text-dm-red">Oxygen Concentrators</span> on Rent & Sale
                </h1>
                <p class="text-muted fs-6 mb-3">
                    Ensure continuous 93%–96% pure oxygen supply right at your home without the hassle of cylinder refills. Hospital-tested, sanitized machines delivered with complimentary nasal cannula and on-site demonstration in Faridabad, Noida, Delhi & Gurugram.
                </p>

                <div class="d-flex flex-wrap gap-2 mb-3">
                    <a href="tel:+918860600423" class="btn btn-dm-red rounded-pill px-3 py-2 fw-bold shadow-sm d-inline-flex align-items-center gap-2 small">
                        <i class="fa-solid fa-phone"></i> Call +91 88606 00423
                    </a>
                    <a href="https://wa.me/918860600423?text=Hello%20DM%20Healthcare,%20I%20urgently%20need%20an%20Oxygen%20Concentrator%20for%20home." target="_blank" class="btn btn-outline-success rounded-pill px-3 py-2 fw-bold d-inline-flex align-items-center gap-2 small">
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
                        <span class="small text-secondary fw-semibold">30-60 Mins Setup</span>
                    </div>
                    <div class="col-6 col-sm-4 d-flex align-items-center gap-2">
                        <i class="fa-solid fa-shield-virus text-success"></i>
                        <span class="small text-secondary fw-semibold">100% Sanitized</span>
                    </div>
                    <div class="col-6 col-sm-4 d-flex align-items-center gap-2">
                        <i class="fa-solid fa-indian-rupee-sign text-primary"></i>
                        <span class="small text-secondary fw-semibold">From ₹3,500/Mo</span>
                    </div>
                </div>
            </div>

            <!-- Right Hero Image -->
            <div class="col-lg-5">
                <div class="position-relative">
                    <img src="assets/images/pages/oxygen_concentrator_hero.jpg" alt="Oxygen Concentrator Machine DM Healthcare" class="img-fluid rounded-4 shadow-sm border border-2 border-white w-100" style="max-height: 330px; object-fit: cover;">
                    <div class="position-absolute bottom-0 start-0 m-2 p-2 px-3 bg-white bg-opacity-95 rounded-3 shadow-sm border">
                        <div class="d-flex align-items-center gap-2">
                            <i class="fa-solid fa-lungs text-dm-red fs-5"></i>
                            <div>
                                <h6 class="mb-0 fw-bold text-dark small">95% ± 3% Purity</h6>
                                <small class="text-muted" style="font-size: 0.72rem;">Zero Cylinder Refill Needed</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. Product Catalog Section (Bootstrap 5 Cards) -->
<section class="py-4 py-lg-5 bg-light" id="catalog">
    <div class="container">
        <div class="text-center max-w-700 mx-auto mb-3">
            <span class="badge bg-secondary bg-opacity-10 text-secondary px-3 py-1 rounded-pill fw-semibold mb-1 small">Our Machines</span>
            <h3 class="fw-bold text-dark mb-1">Select Oxygen Concentrator Model</h3>
            <p class="text-muted small mb-0">Choose the ideal LPM flow rate based on your physician's prescription.</p>
        </div>

        <!-- Products Grid -->
        <div class="row g-3 pt-2 justify-content-center" id="concentrator-grid">
            <?php foreach($oxygen_models as $oc): ?>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 rounded-3 shadow-sm oc-product-card bg-white overflow-hidden">
                    <div class="position-relative">
                        <img src="<?= $oc['image'] ?>" alt="<?= htmlspecialchars($oc['title']) ?>" class="card-img-top oc-product-img">
                        <span class="position-absolute top-0 start-0 m-2 badge <?= $oc['badge_class'] ?> rounded-pill px-2 py-1 shadow-sm" style="font-size: 0.72rem;">
                            <?= $oc['badge'] ?>
                        </span>
                        <span class="position-absolute top-0 end-0 m-2 badge bg-dark bg-opacity-75 rounded-pill px-2 py-1 small">
                            <?= $oc['capacity'] ?>
                        </span>
                    </div>
                    <div class="card-body d-flex flex-column p-3">
                        <h6 class="card-title fw-bold text-dark mb-1 text-truncate" title="<?= htmlspecialchars($oc['title']) ?>"><?= htmlspecialchars($oc['title']) ?></h6>
                        <p class="text-muted mb-2 text-truncate" style="font-size: 0.76rem;" title="<?= htmlspecialchars($oc['ideal_for']) ?>">
                            <i class="fa-solid fa-circle-info me-1 text-dm-red"></i><?= htmlspecialchars($oc['ideal_for']) ?>
                        </p>
                        
                        <!-- Features (Compact 3 Items) -->
                        <ul class="list-unstyled oc-feature-list mb-2 flex-grow-1">
                            <?php foreach(array_slice($oc['features'], 0, 3) as $f): ?>
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
                                <span class="fw-bold text-dm-red fs-6"><?= $oc['rent_price'] ?></span>
                            </div>
                            <div class="text-end border-start ps-2">
                                <span class="d-block text-muted" style="font-size: 0.7rem; line-height: 1;">Buy New</span>
                                <span class="fw-bold text-dark small"><?= $oc['buy_price'] ?></span>
                            </div>
                        </div>

                        <!-- Actions (Side by Side Compact) -->
                        <div class="d-flex gap-2">
                            <a href="https://wa.me/918860600423?text=<?= urlencode('Hi DM Healthcare, I need ' . $oc['title'] . ' (' . $oc['rent_price'] . '/mo) urgently. Please share availability.') ?>" target="_blank" class="btn btn-outline-success btn-sm rounded-pill fw-bold px-2 py-1 flex-fill d-flex align-items-center justify-content-center gap-1" style="font-size: 0.78rem;">
                                <i class="fa-brands fa-whatsapp"></i> Chat
                            </a>
                            <a href="#booking-form" onclick="selectOcModel('<?= addslashes($oc['title']) ?>')" class="btn btn-dm-red btn-sm rounded-pill fw-bold px-2 py-1 flex-fill d-flex align-items-center justify-content-center gap-1" style="font-size: 0.78rem;">
                                <i class="fa-solid fa-calendar-check"></i> Book Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 3. Comparison Guide (Concentrator vs Cylinder) -->
<section class="py-4 py-lg-5 bg-white border-top border-bottom">
    <div class="container">
        <div class="text-center max-w-700 mx-auto mb-3">
            <span class="badge bg-danger bg-opacity-10 text-danger px-3 py-1 rounded-pill fw-semibold mb-1 small">Comparison Guide</span>
            <h3 class="fw-bold text-dark mb-1">5 LPM vs 10 LPM vs Oxygen Cylinder</h3>
            <p class="text-muted small">Understand the key differences to make the most reliable choice for your patient's recovery.</p>
        </div>

        <div class="table-responsive shadow-sm rounded-4 border bg-white max-w-900 mx-auto">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr class="small fw-bold text-secondary">
                        <th class="py-2 px-3">Feature</th>
                        <th class="py-2 px-3">5 LPM Concentrator</th>
                        <th class="py-2 px-3">10 LPM Concentrator</th>
                        <th class="py-2 px-3">Oxygen Cylinder (B/D)</th>
                    </tr>
                </thead>
                <tbody class="divide-y small text-muted">
                    <tr>
                        <td class="py-2 px-3 fw-bold text-dark">Oxygen Generation</td>
                        <td class="py-2 px-3 text-success fw-semibold">Continuous from air</td>
                        <td class="py-2 px-3 text-success fw-semibold">Continuous from air</td>
                        <td class="py-2 px-3 text-danger">Fixed volume (needs refill)</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-3 fw-bold text-dark">Flow Rate Capacity</td>
                        <td class="py-2 px-3">0.5 to 5 Litres/min</td>
                        <td class="py-2 px-3 fw-bold text-primary">1 to 10 Litres/min</td>
                        <td class="py-2 px-3">Up to 15 Litres/min</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-3 fw-bold text-dark">Oxygen Purity</td>
                        <td class="py-2 px-3">93% ± 3% (Stable)</td>
                        <td class="py-2 px-3">93% ± 3% (Stable)</td>
                        <td class="py-2 px-3">99% (Compressed gas)</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-3 fw-bold text-dark">Continuous Run Time</td>
                        <td class="py-2 px-3 text-success">24/7 Unlimited Hours</td>
                        <td class="py-2 px-3 text-success">24/7 Unlimited Hours</td>
                        <td class="py-2 px-3 text-danger">4 - 8 Hours per cylinder</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-3 fw-bold text-dark">Operating Noise</td>
                        <td class="py-2 px-3">< 45 dB (Whisper quiet)</td>
                        <td class="py-2 px-3">< 52 dB (Low hum)</td>
                        <td class="py-2 px-3 text-success">Silent (No motor)</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-3 fw-bold text-dark">Monthly Rent</td>
                        <td class="py-2 px-3 fw-bold text-dm-red">₹3,500 / month</td>
                        <td class="py-2 px-3 fw-bold text-dm-red">₹6,500 / month</td>
                        <td class="py-2 px-3 text-dark">₹1,500 + Refills</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- 4. Why Rent from DM Healthcare -->
<section class="py-4 py-lg-5 bg-light border-bottom">
    <div class="container">
        <div class="text-center max-w-700 mx-auto mb-4">
            <span class="badge bg-secondary bg-opacity-10 text-secondary px-3 py-1 rounded-pill fw-semibold mb-1 small">Our Assurance</span>
            <h3 class="fw-bold text-dark mb-1">Why Rent from DM Healthcare?</h3>
        </div>

        <div class="row g-3">
            <div class="col-sm-6 col-lg-3">
                <div class="card h-100 rounded-3 p-3 bg-white border shadow-sm">
                    <div class="rounded-circle bg-danger bg-opacity-10 text-dm-red d-inline-flex align-items-center justify-content-center mb-2" style="width: 44px; height: 44px;">
                        <i class="fa-solid fa-truck-fast fs-5"></i>
                    </div>
                    <h6 class="fw-bold text-dark mb-1">30-60 Mins Delivery</h6>
                    <p class="small text-muted mb-0">Rapid response emergency dispatch teams stationed across Faridabad, Noida, and South Delhi.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card h-100 rounded-3 p-3 bg-white border shadow-sm">
                    <div class="rounded-circle bg-success bg-opacity-10 text-success d-inline-flex align-items-center justify-content-center mb-2" style="width: 44px; height: 44px;">
                        <i class="fa-solid fa-shield-virus fs-5"></i>
                    </div>
                    <h6 class="fw-bold text-dark mb-1">Fresh Accessory Kit</h6>
                    <p class="small text-muted mb-0">Free brand-new sealed nasal cannula, humidifier bottle, and tubing provided with every machine.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card h-100 rounded-3 p-3 bg-white border shadow-sm">
                    <div class="rounded-circle bg-primary bg-opacity-10 text-primary d-inline-flex align-items-center justify-content-center mb-2" style="width: 44px; height: 44px;">
                        <i class="fa-solid fa-gauge-simple-high fs-5"></i>
                    </div>
                    <h6 class="fw-bold text-dark mb-1">Purity Tested & Calibrated</h6>
                    <p class="small text-muted mb-0">Every machine undergoes digital oxygen purity analyzer verification before bedside handover.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card h-100 rounded-3 p-3 bg-white border shadow-sm">
                    <div class="rounded-circle bg-warning bg-opacity-10 text-dark d-inline-flex align-items-center justify-content-center mb-2" style="width: 44px; height: 44px;">
                        <i class="fa-solid fa-rotate fs-5"></i>
                    </div>
                    <h6 class="fw-bold text-dark mb-1">Free 24/7 Replacement</h6>
                    <p class="small text-muted mb-0">If any machine shows an error, our technician will visit within 2 hours to provide an immediate swap.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. Instant Booking / Delivery Request Form -->
<section class="py-5 bg-white" id="booking-form">
    <div class="container">
        <div class="row g-4 align-items-center">
            <!-- Left Info -->
            <div class="col-lg-5">
                <span class="badge bg-danger bg-opacity-10 text-danger px-3 py-1 rounded-pill fw-semibold mb-2">Instant Setup</span>
                <h3 class="fw-bold text-dark mb-2">Book Oxygen Machine Delivery</h3>
                <p class="text-muted small mb-3">Get hospital-grade oxygen setup in under 60 minutes. Our care coordinator will call immediately to confirm your address and required LPM flow.</p>
                
                <div class="card bg-light border-0 rounded-3 p-3 mb-3">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <div class="rounded-circle bg-dm-red text-white d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                            <i class="fa-solid fa-phone-volume fs-5"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-0 text-dark small">Emergency Oxygen Helpline</h6>
                            <small class="text-muted" style="font-size: 0.72rem;">Available 24 hours / 7 days</small>
                        </div>
                    </div>
                    <a href="tel:+918860600423" class="btn btn-dm-red rounded-pill fw-bold py-2 mb-2 btn-sm">
                        <i class="fa-solid fa-phone me-1"></i> Call +91 88606 00423
                    </a>
                    <a href="https://wa.me/918860600423?text=Hi%20DM%20Healthcare,%20I%20urgently%20need%20an%20oxygen%20concentrator." target="_blank" class="btn btn-outline-success rounded-pill fw-bold py-2 btn-sm">
                        <i class="fa-brands fa-whatsapp me-1"></i> Chat on WhatsApp
                    </a>
                </div>
            </div>

            <!-- Right Form -->
            <div class="col-lg-7">
                <div class="card border-0 shadow-lg rounded-4 p-4 p-md-4 bg-white border">
                    <h5 class="fw-bold text-dark mb-3">Request Oxygen Concentrator</h5>
                    
                    <form action="backend/submit_appointment.php" method="POST">
                        <input type="hidden" name="service" value="Oxygen Concentrator Rental">
                        
                        <div class="row g-2">
                            <div class="col-md-6">
                                <label class="form-label small fw-semibold text-secondary mb-1">Patient Name *</label>
                                <input type="text" name="name" class="form-control form-control-sm rounded-2" placeholder="Patient / Guardian name" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-semibold text-secondary mb-1">Mobile Number *</label>
                                <input type="tel" name="phone" class="form-control form-control-sm rounded-2" placeholder="10-digit mobile number" pattern="[0-9]{10}" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-semibold text-secondary mb-1">Select Oxygen Model *</label>
                                <select name="model" id="ocModelSelect" class="form-select form-select-sm rounded-2" required>
                                    <option value="5 Litre Oxygen Concentrator (₹3,500/mo)">5 Litre Standard (₹3,500/mo)</option>
                                    <option value="10 Litre High-Flow Dual Machine (₹6,500/mo)">10 Litre High-Flow Dual (₹6,500/mo)</option>
                                    <option value="5 Litre with Inbuilt Nebulizer (₹4,000/mo)">5 Litre + Nebulizer (₹4,000/mo)</option>
                                    <option value="Oxygen Cylinder Backup Kit">Oxygen Cylinder Backup Kit</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-semibold text-secondary mb-1">City / Location *</label>
                                <select name="city" class="form-select form-select-sm rounded-2" required>
                                    <option value="Faridabad">Faridabad (30-min delivery)</option>
                                    <option value="Noida & Greater Noida">Noida & Greater Noida</option>
                                    <option value="South Delhi & Central Delhi">South Delhi & Central Delhi</option>
                                    <option value="Gurugram (Gurgaon)">Gurugram (Gurgaon)</option>
                                    <option value="Ghaziabad & East Delhi">Ghaziabad & East Delhi</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label small fw-semibold text-secondary mb-1">Delivery Address</label>
                                <textarea name="message" rows="2" class="form-control form-control-sm rounded-2" placeholder="House no., floor, landmark, street..."></textarea>
                            </div>
                            <div class="col-12 mt-2">
                                <button type="submit" class="btn btn-dm-red w-100 rounded-pill fw-bold py-2 shadow-sm">
                                    <i class="fa-solid fa-paper-plane me-1"></i> Submit Oxygen Delivery Request
                                </button>
                                <small class="text-center d-block text-muted mt-1" style="font-size: 0.72rem;">
                                    <i class="fa-solid fa-lock text-success me-1"></i> Pay upon successful home installation and live demonstration.
                                </small>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 6. FAQs Section -->
<section class="py-4 py-lg-5 bg-light border-top">
    <div class="container max-w-800">
        <div class="text-center mb-3">
            <span class="badge bg-secondary bg-opacity-10 text-secondary px-3 py-1 rounded-pill fw-semibold mb-1 small">FAQs</span>
            <h3 class="fw-bold text-dark">Frequently Asked Questions</h3>
        </div>

        <div class="accordion accordion-flush shadow-sm rounded-3 overflow-hidden border bg-white" id="ocFaqAccordion">
            <div class="accordion-item border-bottom">
                <h2 class="accordion-header" id="faqOcOne">
                    <button class="accordion-button fw-bold text-dark py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOcOne">
                        How does an oxygen concentrator work compared to a cylinder?
                    </button>
                </h2>
                <div id="collapseOcOne" class="accordion-collapse collapse show" data-bs-parent="#ocFaqAccordion">
                    <div class="accordion-body text-muted small lh-base">
                        An oxygen concentrator extracts ambient room air (which contains ~21% oxygen and 78% nitrogen), filters out nitrogen using medical zeolite molecular sieves, and delivers continuous 93%-96% pure oxygen. Unlike cylinders, it never runs empty as long as it has power.
                    </div>
                </div>
            </div>

            <div class="accordion-item border-bottom">
                <h2 class="accordion-header" id="faqOcTwo">
                    <button class="accordion-button collapsed fw-bold text-dark py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOcTwo">
                        What should I do during a power cut?
                    </button>
                </h2>
                <div id="collapseOcTwo" class="accordion-collapse collapse" data-bs-parent="#ocFaqAccordion">
                    <div class="accordion-body text-muted small lh-base">
                        Oxygen concentrators can easily run on home inverters (at least 800VA–1000VA). For critical patients who cannot be without oxygen for even a minute, we also recommend keeping a small standby B-type emergency oxygen cylinder.
                    </div>
                </div>
            </div>

            <div class="accordion-item border-bottom">
                <h2 class="accordion-header" id="faqOcThree">
                    <button class="accordion-button collapsed fw-bold text-dark py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOcThree">
                        How do I know whether to rent a 5 LPM or 10 LPM machine?
                    </button>
                </h2>
                <div id="collapseOcThree" class="accordion-collapse collapse" data-bs-parent="#ocFaqAccordion">
                    <div class="accordion-body text-muted small lh-base">
                        If your doctor prescribed 1 to 4 litres per minute, a 5 LPM machine is ideal. If the prescription requires 5 litres or above, or if the patient is using a BiPAP machine or high-flow mask, a 10 LPM concentrator is required.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="faqOcFour">
                    <button class="accordion-button collapsed fw-bold text-dark py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOcFour">
                        Are new consumables (cannula, water bottle) provided?
                    </button>
                </h2>
                <div id="collapseOcFour" class="accordion-collapse collapse" data-bs-parent="#ocFaqAccordion">
                    <div class="accordion-body text-muted small lh-base">
                        Yes, 100%. We provide a brand-new sealed adult/paediatric nasal cannula, clean oxygen tubing, and a sterilized humidifier bottle at zero extra charge with every rental dispatch.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 7. Related Respiratory & Medical Equipment -->
<section class="py-4 py-lg-5 bg-white border-top">
    <div class="container">
        <h5 class="fw-bold text-dark mb-3 text-center">Related Respiratory Care Equipment</h5>
        <div class="row g-3 justify-content-center text-center">
            <div class="col-6 col-md-3">
                <a href="page.php?title=bipap-cpap" class="card border rounded-3 p-3 text-decoration-none shadow-sm h-100 bg-light oc-product-card">
                    <i class="fa-solid fa-mask-ventilator text-dm-red fs-4 mb-2"></i>
                    <span class="fw-bold text-dark small d-block">BiPAP & CPAP Machines</span>
                    <small class="text-muted" style="font-size: 0.72rem;">From ₹4,500/mo</small>
                </a>
            </div>
            <div class="col-6 col-md-3">
                <a href="page.php?title=oxygen-cylinder" class="card border rounded-3 p-3 text-decoration-none shadow-sm h-100 bg-light oc-product-card">
                    <i class="fa-solid fa-bottle-droplet text-primary fs-4 mb-2"></i>
                    <span class="fw-bold text-dark small d-block">Oxygen Cylinders</span>
                    <small class="text-muted" style="font-size: 0.72rem;">Emergency Backup</small>
                </a>
            </div>
            <div class="col-6 col-md-3">
                <a href="page.php?title=hospital-beds" class="card border rounded-3 p-3 text-decoration-none shadow-sm h-100 bg-light oc-product-card">
                    <i class="fa-solid fa-bed-pulse text-success fs-4 mb-2"></i>
                    <span class="fw-bold text-dark small d-block">ICU Hospital Beds</span>
                    <small class="text-muted" style="font-size: 0.72rem;">Motorized 3-Function</small>
                </a>
            </div>
            <div class="col-6 col-md-3">
                <a href="page.php?title=icu-care---critical-care" class="card border rounded-3 p-3 text-decoration-none shadow-sm h-100 bg-light oc-product-card">
                    <i class="fa-solid fa-heart-pulse text-warning fs-4 mb-2"></i>
                    <span class="fw-bold text-dark small d-block">ICU Setup at Home</span>
                    <small class="text-muted" style="font-size: 0.72rem;">Critical Care Nursing</small>
                </a>
            </div>
        </div>
    </div>
</section>

<script>
function selectOcModel(modelName) {
    const select = document.getElementById("ocModelSelect");
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
