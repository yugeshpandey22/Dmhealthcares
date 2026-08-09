<?php
// DO NOT set $full_page_override = true;
$hide_default_welcome = true;

$frontend_custom_sections = '

<style>
:root {
    --primary-color: #0A5BFF;
    --dark-bg: #1e293b;
    --light-bg: #f8fafc;
    --border-color: rgba(0,0,0,0.05);
}

body {
    font-family: "Inter", sans-serif;
}

/* Hero Section */
.acc-hero {
    background: linear-gradient(135deg, #ffffff 0%, #f0f4ff 100%);
    border-bottom: 1px solid var(--border-color);
    padding: 80px 0;
    position: relative;
    overflow: hidden;
}

/* Cards & Hover Effects */
.acc-card {
    background: white;
    border: 1px solid var(--border-color);
    border-radius: 16px;
    transition: all 0.3s ease;
    box-shadow: 0 4px 6px rgba(0,0,0,0.02);
    overflow: hidden;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.acc-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.08);
    border-color: rgba(10, 91, 255, 0.2);
}

.acc-img-wrapper {
    height: 180px;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    border-bottom: 1px solid var(--border-color);
    display: flex;
    align-items: center;
    justify-content: center;
}

.feat-card {
    background: white;
    border: 1px solid var(--border-color);
    border-radius: 16px;
    padding: 2rem;
    transition: all 0.3s ease;
    text-align: center;
}

.feat-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.05);
}

/* Categories Badge */
.category-badge {
    background: rgba(10, 91, 255, 0.1);
    color: var(--primary-color);
    font-weight: 600;
    font-size: 12px;
    padding: 4px 12px;
    border-radius: 20px;
    margin-bottom: 15px;
    display: inline-block;
}
</style>

<!-- 1. Hero Section -->
<section class="acc-hero">
    <div class="container position-relative z-1 py-5">
        <div class="row align-items-center">
            <div class="col-lg-7 mb-5 mb-lg-0 pe-lg-5 text-center text-lg-start">
                <span class="badge bg-primary px-3 py-2 rounded-pill mb-4 fw-bold shadow-sm">Medical Consumables</span>
                <h1 class="display-5 fw-bold mb-4 text-dark">High-Quality Medical Accessories & Spares</h1>
                <p class="lead mb-4 text-muted" style="opacity: 0.9;">We stock genuine spare parts, disposable accessories, and medical consumables to ensure your medical equipment runs efficiently without interruption.</p>
                
                <div class="d-flex flex-wrap justify-content-center justify-content-lg-start gap-3 mt-4">
                    <a href="#inventory" class="btn btn-primary btn-lg fw-bold px-5 rounded-pill shadow-sm">
                        Browse Catalog
                    </a>
                    <a href="tel:+918521179540" class="btn btn-outline-dark btn-lg fw-bold px-5 rounded-pill">
                        Order in Bulk
                    </a>
                </div>
            </div>
            
            <div class="col-lg-5 text-center d-none d-lg-block">
                <div class="position-relative">
                    <div class="rounded-4 shadow-lg w-100 d-flex flex-column align-items-center justify-content-center bg-white border border-4 border-light" style="height: 400px;">
                        <div class="mb-4 bg-primary bg-opacity-10 p-5 rounded-circle d-flex align-items-center justify-content-center" style="width: 180px; height: 180px;">
                            <i class="fa-solid fa-box-open text-primary" style="font-size: 80px;"></i>
                        </div>
                        <span class="text-muted fw-bold text-uppercase tracking-wider">Original Spares</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. Accessories Catalog -->
<section id="inventory" class="py-5" style="background-color: var(--light-bg);">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">Our Accessories Catalog</h2>
            <div class="mx-auto mt-3 mb-4" style="width: 60px; height: 4px; background-color: var(--primary-color); border-radius: 2px;"></div>
            <p class="text-muted mx-auto" style="max-width: 600px;">Explore our comprehensive range of original accessories for Respiratory, ICU, and General Home Care equipment.</p>
        </div>

        <div class="row g-4">';

        $accessories = [
            ["category" => "Respiratory", "name" => "CPAP/BiPAP Masks", "desc" => "Full face, nasal, and pillow masks from Philips & ResMed.", "icon" => "fa-mask-ventilator"],
            ["category" => "Respiratory", "name" => "Oxygen Nasal Cannulas", "desc" => "Soft, flexible nasal prongs for comfortable oxygen delivery.", "icon" => "fa-lungs"],
            ["category" => "Respiratory", "name" => "Humidifier Bottles", "desc" => "Replacement humidifier bottles for all standard oxygen concentrators.", "icon" => "fa-bottle-water"],
            ["category" => "ICU Care", "name" => "Suction Catheters & Jars", "desc" => "Sterile suction catheters and heavy-duty collection jars.", "icon" => "fa-pump-medical"],
            ["category" => "ICU Care", "name" => "ECG Electrodes", "desc" => "High-conductivity disposable chest and limb electrodes.", "icon" => "fa-heart-pulse"],
            ["category" => "ICU Care", "name" => "Pulse Oximeter Probes", "desc" => "Adult and pediatric reusable SpO2 finger probes.", "icon" => "fa-plug"],
            ["category" => "General Care", "name" => "Medical Gloves & Masks", "desc" => "Nitrile examination gloves and 3-ply surgical masks.", "icon" => "fa-hands-bubbles"],
            ["category" => "General Care", "name" => "IV Sets & Syringes", "desc" => "Sterile disposable syringes and intravenous fluid sets.", "icon" => "fa-syringe"],
            ["category" => "General Care", "name" => "Bedpan & Urine Pots", "desc" => "Easy-to-clean plastic and stainless steel bedpans.", "icon" => "fa-restroom"]
        ];

        foreach($accessories as $item) {
            $frontend_custom_sections .= '
            <div class="col-lg-4 col-md-6">
                <div class="acc-card">
                    <div class="acc-img-wrapper">
                        <i class="fa-solid '.$item['icon'].' text-primary" style="font-size: 60px; opacity: 0.7;"></i>
                    </div>
                    <div class="p-4 d-flex flex-column flex-grow-1 text-center">
                        <span class="category-badge mx-auto">'.$item['category'].'</span>
                        <h5 class="fw-bold text-dark mb-2">'.$item['name'].'</h5>
                        <p class="text-muted small mb-4 flex-grow-1">'.$item['desc'].'</p>
                        
                        <a href="index.php#appointment" class="btn btn-outline-primary rounded-pill w-100 fw-bold">Order Now</a>
                    </div>
                </div>
            </div>';
        }

$frontend_custom_sections .= '
        </div>
    </div>
</section>

<!-- 3. Why Buy From Us -->
<section class="py-5">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">Why Source Accessories From Us?</h2>
            <div class="mx-auto mt-3 mb-4" style="width: 60px; height: 4px; background-color: var(--primary-color); border-radius: 2px;"></div>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="feat-card h-100">
                    <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fa-solid fa-certificate fs-4"></i>
                    </div>
                    <h6 class="fw-bold mb-2">100% Genuine</h6>
                    <p class="text-muted small mb-0">We only supply OEM approved and genuine branded accessories to ensure safety.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="feat-card h-100">
                    <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fa-solid fa-shield-virus fs-4"></i>
                    </div>
                    <h6 class="fw-bold mb-2">Sterile & Safe</h6>
                    <p class="text-muted small mb-0">All disposable items come in sealed, medically sterile packaging.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="feat-card h-100">
                    <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fa-solid fa-boxes-stacked fs-4"></i>
                    </div>
                    <h6 class="fw-bold mb-2">Bulk Availability</h6>
                    <p class="text-muted small mb-0">We maintain high stock levels to support both retail and wholesale clinic demands.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="feat-card h-100">
                    <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fa-solid fa-truck-fast fs-4"></i>
                    </div>
                    <h6 class="fw-bold mb-2">Fast Dispatch</h6>
                    <p class="text-muted small mb-0">Quick local delivery for emergency requirements directly to your doorstep.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. Contact CTA -->
<section class="py-5" style="background: var(--dark-bg);">
    <div class="container py-5 text-center text-white">
        <h2 class="display-6 fw-bold mb-4">Need Specific Medical Spares?</h2>
        <p class="lead mb-5 opacity-75 mx-auto" style="max-width: 600px;">If you are looking for a specific machine part, filter, or specialized disposable, reach out to us. We will source it for you immediately.</p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
            <a href="tel:+918521179540" class="btn btn-primary btn-lg fw-bold px-5 py-3 rounded-pill shadow-sm">
                <i class="fa-solid fa-phone me-2"></i> +91-8521179540
            </a>
            <a href="https://wa.me/918521179540" target="_blank" class="btn btn-success btn-lg fw-bold px-5 py-3 rounded-pill shadow-sm">
                <i class="fa-brands fa-whatsapp me-2"></i> Message on WhatsApp
            </a>
        </div>
    </div>
</section>

';
?>
