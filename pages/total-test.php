<?php
// DO NOT set $full_page_override = true;
// We want to use the exact same layout as Noida (standard CMS layout with Banner, Image, Specs).
// We simply assign our frontend custom design to $frontend_custom_sections so it renders full width!

$frontend_custom_sections = '

<style>
.package-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border-radius: 15px;
    overflow: hidden;
    height: 100%;
    display: flex;
    flex-direction: column;
    border: 1px solid #eaeaea;
}
.package-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.1) !important;
}
.package-header {
    padding: 20px;
    color: #fff;
    position: relative;
}
.test-count {
    position: absolute;
    top: 15px;
    right: 15px;
    background: rgba(255,255,255,0.25);
    padding: 5px 12px;
    border-radius: 20px;
    font-size: 0.9rem;
    font-weight: bold;
    border: 1px solid rgba(255,255,255,0.3);
}
.package-body {
    padding: 20px;
    flex-grow: 1;
    background: #fff;
}
.package-price-section {
    padding: 15px 20px;
    background: #fdfdfd;
    border-top: 1px dashed #ddd;
    text-align: center;
}
.mrp-price {
    text-decoration: line-through;
    color: #888;
    font-size: 0.9rem;
}
.offer-price {
    font-size: 1.8rem;
    font-weight: 800;
    color: #dc3545;
}
.free-consultation {
    font-size: 0.85rem;
    color: #198754;
    font-weight: 600;
    margin-top: 8px;
}
/* Card Colors - Premium gradients */
.bg-bronze { background: linear-gradient(135deg, #c77b38, #8a4321); }
.bg-silver { background: linear-gradient(135deg, #a5a5a5, #6c6c6c); }
.bg-gold { background: linear-gradient(135deg, #f4c20d, #b8860b); color: #333 !important; }
.bg-platinum-m { background: linear-gradient(135deg, #d3d7df, #9ba4b5); color: #333 !important; }
.bg-platinum-f { background: linear-gradient(135deg, #f8a5c2, #e66796); }
.bg-sapphire-m { background: linear-gradient(135deg, #4b7bec, #3867d6); }
.bg-sapphire-f { background: linear-gradient(135deg, #a55eea, #8854d0); }

.test-list {
    font-size: 0.9rem;
    color: #444;
    margin-bottom: 0;
    line-height: 1.6;
}
.total-test-wrapper {
    overflow-x: hidden;
    width: 100%;
    font-family: "Outfit", sans-serif;
}
</style>

<div class="total-test-wrapper mt-5 pt-4 border-top">
    <div class="text-center mb-5 mt-4">
        <h2 class="fw-bold text-dark mb-3">Total Health Checkup Packages</h2>
        <p class="text-muted mx-auto mb-4" style="max-width: 700px;">Comprehensive full-body checkup packages tailored for your health needs. Get tested from the comfort of your home with our free sample collection service.</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <span class="badge bg-danger rounded-pill px-4 py-2 fs-6 shadow-sm"><i class="fa-solid fa-motorcycle me-2"></i> Free Home Collection</span>
            <a href="tel:7575907474" class="badge bg-success rounded-pill px-4 py-2 fs-6 shadow-sm text-decoration-none"><i class="fa-solid fa-phone me-2"></i> Call: 7575907474</a>
        </div>
    </div>
    
    <div class="row g-4 mb-5 pb-4 justify-content-center">
        
        <!-- Bronze -->
        <div class="col-md-6 col-lg-4">
            <div class="package-card shadow-sm">
                <div class="package-header bg-bronze">
                    <h4 class="fw-bold mb-0 text-white">HealthFit Bronze</h4>
                    <div class="test-count text-white">75 Tests</div>
                </div>
                <div class="package-body">
                    <p class="fw-bold text-dark mb-2">Test Includes:</p>
                    <p class="test-list">Sugar Fasting, TSH, Lipid Profile Screening, LFT, KFT, HBA1C, Urine R/E, CBC</p>
                </div>
                <div class="package-price-section">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="mrp-price">MRP: ₹5014</span>
                        <span class="offer-price">₹999</span>
                    </div>
                    <div class="free-consultation"><i class="fa-solid fa-user-doctor me-1"></i> PHC Specialist Doctor Consultation Free*</div>
                </div>
            </div>
        </div>

        <!-- Silver -->
        <div class="col-md-6 col-lg-4">
            <div class="package-card shadow-sm">
                <div class="package-header bg-silver">
                    <h4 class="fw-bold mb-0 text-white">HealthFit Silver</h4>
                    <div class="test-count text-white">86 Tests</div>
                </div>
                <div class="package-body">
                    <p class="fw-bold text-dark mb-2">Test Includes:</p>
                    <p class="test-list">Sugar Fasting, Thyroid Profile, Lipid Profile Screening, LFT, KFT, Calcium, Phosphorus, HBA1C, Vitamin D, Vitamin B12, Urine R/E, Hemogram, Iron Studies</p>
                </div>
                <div class="package-price-section">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="mrp-price">MRP: ₹9499</span>
                        <span class="offer-price">₹1999</span>
                    </div>
                    <div class="free-consultation"><i class="fa-solid fa-user-doctor me-1"></i> PHC Specialist Doctor Consultation Free*</div>
                </div>
            </div>
        </div>

        <!-- Gold -->
        <div class="col-md-6 col-lg-4">
            <div class="package-card shadow-sm">
                <div class="package-header bg-gold">
                    <h4 class="fw-bold mb-0">HealthFit Gold</h4>
                    <div class="test-count" style="color:#333; border-color: rgba(0,0,0,0.1);">92 Tests</div>
                </div>
                <div class="package-body">
                    <p class="fw-bold text-dark mb-2">Test Includes:</p>
                    <p class="test-list">Sugar Fasting, Thyroid Profile, Lipid Profile Screening, LFT, KFT, Calcium, Phosphorus, HBA1C, Vitamin D, Vitamin B12, Urine R/E, Hemogram, Iron Studies, Ferritin, Apo A1, Apo B, Amylase, HS-CRP, RA Factor, Folate (Folic Acid), Lipase</p>
                </div>
                <div class="package-price-section">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="mrp-price">MRP: ₹12788</span>
                        <span class="offer-price">₹2999</span>
                    </div>
                    <div class="free-consultation"><i class="fa-solid fa-user-doctor me-1"></i> PHC Specialist Doctor Consultation Free*</div>
                </div>
            </div>
        </div>

        <!-- Platinum Male -->
        <div class="col-md-6 col-lg-4">
            <div class="package-card shadow-sm">
                <div class="package-header bg-platinum-m">
                    <h4 class="fw-bold mb-0">HealthFit Platinum<br><small class="fw-normal" style="font-size:0.85em; opacity:0.8;">Male</small></h4>
                    <div class="test-count" style="color:#333; border-color: rgba(0,0,0,0.1);">96 Tests</div>
                </div>
                <div class="package-body">
                    <p class="fw-bold text-dark mb-2">Test Includes:</p>
                    <p class="test-list">Sugar Fasting, Thyroid Profile, Lipid Profile Screening, LFT, KFT, Calcium, Phosphorus, HBA1C, Vitamin D, Vitamin B12, Urine R/E, Hemogram, Iron Studies, Ferritin, Apo A1, Apo B, Amylase, HSCRP, RA Factor, Folate (Folic Acid), Lipase, CEA, PSA, Magnesium</p>
                </div>
                <div class="package-price-section">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="mrp-price">MRP: ₹15048</span>
                        <span class="offer-price">₹3999</span>
                    </div>
                    <div class="free-consultation"><i class="fa-solid fa-user-doctor me-1"></i> PHC Specialist Doctor Consultation Free*</div>
                </div>
            </div>
        </div>

        <!-- Platinum Female -->
        <div class="col-md-6 col-lg-4">
            <div class="package-card shadow-sm">
                <div class="package-header bg-platinum-f">
                    <h4 class="fw-bold mb-0 text-white">HealthFit Platinum<br><small class="fw-normal" style="font-size:0.85em; opacity:0.9;">Female</small></h4>
                    <div class="test-count text-white">95 Tests</div>
                </div>
                <div class="package-body">
                    <p class="fw-bold text-dark mb-2">Test Includes:</p>
                    <p class="test-list">Sugar Fasting, Thyroid Profile, Lipid Profile Screening, LFT, KFT, Calcium, Phosphorus, HBA1C, Vitamin D, Vitamin B12, Urine R/E, Hemogram, Iron Studies, Ferritin, Apo A1, Apo B, Amylase, HS-CRP, RA Factor, Folate (Folic Acid), CEA, CA125, Magnesium</p>
                </div>
                <div class="package-price-section">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="mrp-price">MRP: ₹16326</span>
                        <span class="offer-price">₹3999</span>
                    </div>
                    <div class="free-consultation"><i class="fa-solid fa-user-doctor me-1"></i> PHC Specialist Doctor Consultation Free*</div>
                </div>
            </div>
        </div>
        
        <!-- Sapphire Male -->
        <div class="col-md-6 col-lg-4">
            <div class="package-card shadow-sm">
                <div class="package-header bg-sapphire-m">
                    <h4 class="fw-bold mb-0 text-white">HealthFit Sapphire<br><small class="fw-normal" style="font-size:0.85em; opacity:0.9;">Male</small></h4>
                    <div class="test-count text-white">100 Tests</div>
                </div>
                <div class="package-body">
                    <p class="fw-bold text-dark mb-2">Test Includes:</p>
                    <p class="test-list">Sugar Fasting, Thyroid Profile, Lipid Profile Screening, LFT, KFT, Calcium, Phosphorus, HBA1C, Vitamin D, Vitamin B12, Urine R/E, Hemogram, Iron Studies, Ferritin, Apo A1, Apo B, Lp (A), Amylase, HS-CRP, RA Factor, Folate (Folic Acid), Lipase, CEA, PSA, Cortisol, Immunoglobulin IgE, Magnesium</p>
                </div>
                <div class="package-price-section">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="mrp-price">MRP: ₹18559</span>
                        <span class="offer-price">₹4999</span>
                    </div>
                    <div class="free-consultation"><i class="fa-solid fa-user-doctor me-1"></i> PHC Specialist Doctor Consultation Free*</div>
                </div>
            </div>
        </div>

        <!-- Sapphire Female -->
        <div class="col-md-6 col-lg-4">
            <div class="package-card shadow-sm">
                <div class="package-header bg-sapphire-f">
                    <h4 class="fw-bold mb-0 text-white">HealthFit Sapphire<br><small class="fw-normal" style="font-size:0.85em; opacity:0.9;">Female</small></h4>
                    <div class="test-count text-white">100 Tests</div>
                </div>
                <div class="package-body">
                    <p class="fw-bold text-dark mb-2">Test Includes:</p>
                    <p class="test-list">Sugar Fasting, Thyroid Profile, Lipid Profile Screening, LFT, KFT, Calcium, Phosphorus, HBA1C, Vitamin D, Vitamin B12, Urine R/E, Hemogram, Iron Studies, Ferritin, Apo A1, Apo B, Lp (A), Amylase, HS-CRP, RA Factor, Folate (Folic Acid), Lipase, CEA, CA125, Cortisol, Immunoglobulin IgE, Magnesium</p>
                </div>
                <div class="package-price-section">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="mrp-price">MRP: ₹18949</span>
                        <span class="offer-price">₹4999</span>
                    </div>
                    <div class="free-consultation"><i class="fa-solid fa-user-doctor me-1"></i> PHC Specialist Doctor Consultation Free*</div>
                </div>
            </div>
        </div>

    </div>
</div>
';
?>
