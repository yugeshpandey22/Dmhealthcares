<?php
// DO NOT set $full_page_override = true;
$hide_default_welcome = true;

$frontend_custom_sections = '

<style>
:root {
    --primary-color: #E11D48;
    --dark-bg: #1e293b;
    --light-bg: #fff1f2;
    --border-color: rgba(0,0,0,0.08);
}

.celebration-card {
    background: white;
    border: 1px solid var(--border-color);
    border-radius: 16px;
    padding: 2.5rem;
    transition: all 0.3s ease;
    text-align: center;
    height: 100%;
}
.celebration-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(225, 29, 72, 0.1);
    border-color: var(--primary-color);
}
.celebration-icon {
    font-size: 3rem;
    color: var(--primary-color);
    margin-bottom: 1.5rem;
}

.gallery-img {
    border-radius: 12px;
    object-fit: cover;
    width: 100%;
    height: 250px;
    transition: transform 0.3s ease;
}
.gallery-img:hover {
    transform: scale(1.03);
}
</style>

<!-- 1. Hero Section -->
<section class="py-5" style="background: linear-gradient(135deg, #fff1f2 0%, #ffffff 100%);">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0 pe-lg-5">
                <span class="badge px-3 py-2 rounded-pill mb-4 fw-bold shadow-sm" style="background-color: var(--primary-color);"><i class="fa-solid fa-gift me-1"></i> Special Moments</span>
                <h1 class="display-4 fw-bold mb-4 text-dark">Elder Birthday & Anniversary Celebrations</h1>
                <p class="lead text-muted mb-4">Distance should not stop you from celebrating your parents\' special days. We help you make their day unforgettable with our dedicated on-ground team.</p>
                <p class="text-muted mb-5">Surprise your elderly loved ones with cakes, flowers, customized gifts, and a joyful celebration organized by our compassionate care team right at their home in India.</p>
                
                <a href="#book-celebration" class="btn btn-lg fw-bold px-5 py-3 rounded-pill shadow-sm text-white" style="background-color: var(--primary-color);">
                    Plan a Surprise
                </a>
            </div>
            
            <div class="col-lg-6 text-center">
                <div class="position-relative">
                    <img src="<?= htmlspecialchars($display_image) ?>" class="img-fluid rounded-4 shadow-lg border border-4 border-white w-100" style="object-fit: cover; height: 450px;" alt="Elderly Celebration" onerror="this.src=\'assets/images/about.jpg\'">
                    
                    <div class="position-absolute bottom-0 end-0 mb-4 me-4 bg-white p-3 rounded-circle shadow-lg d-flex align-items-center justify-content-center" style="width: 100px; height: 100px;">
                        <i class="fa-solid fa-cake-candles" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. Services Grid -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">How We Make It Special</h2>
            <div class="mx-auto mt-3 mb-4" style="width: 60px; height: 4px; background-color: var(--primary-color); border-radius: 2px;"></div>
        </div>
        
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="celebration-card shadow-sm">
                    <i class="fa-solid fa-cake-candles celebration-icon"></i>
                    <h5 class="fw-bold text-dark mb-3">Cake & Flowers Delivery</h5>
                    <p class="text-muted small mb-0">Freshly baked premium cakes and beautiful flower bouquets delivered right to their doorstep to start the day with a smile.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="celebration-card shadow-sm">
                    <i class="fa-solid fa-users celebration-icon"></i>
                    <h5 class="fw-bold text-dark mb-3">Team Celebration</h5>
                    <p class="text-muted small mb-0">Our care team visits them to cut the cake, sing for them, and celebrate together, ensuring they don\'t feel lonely on their big day.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="celebration-card shadow-sm">
                    <i class="fa-solid fa-video celebration-icon"></i>
                    <h5 class="fw-bold text-dark mb-3">Live Video Connect</h5>
                    <p class="text-muted small mb-0">We arrange and manage a high-quality live video call so you can be a part of the cake cutting and celebration from anywhere in the world.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. Form Section -->
<section class="py-5" id="book-celebration" style="background-color: var(--light-bg);">
    <div class="container py-4">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-5 mb-lg-0 pe-lg-5 text-center text-lg-start">
                <h2 class="fw-bold text-dark mb-4">Let\'s Plan a Beautiful Surprise!</h2>
                <div class="d-none d-lg-block mt-3 mb-4" style="width: 60px; height: 4px; background-color: var(--primary-color); border-radius: 2px;"></div>
                <p class="lead text-muted mb-4">Fill out the form to tell us about the upcoming birthday or anniversary. Our team will get in touch with you to coordinate the perfect surprise.</p>
                <div class="bg-white p-4 rounded-4 shadow-sm border mt-4 text-start">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-solid fa-phone fs-4 me-3" style="color: var(--primary-color);"></i>
                        <div>
                            <h6 class="fw-bold mb-0">Direct Call</h6>
                            <a href="tel:+918725024124" class="text-decoration-none text-muted">+91-8725024124</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fa-brands fa-whatsapp fs-4 me-3 text-success"></i>
                        <div>
                            <h6 class="fw-bold mb-0">WhatsApp Us</h6>
                            <a href="https://wa.me/918725024124" target="_blank" class="text-decoration-none text-muted">Message us for quick setup</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-7">
                <div class="bg-white p-5 rounded-4 shadow-lg border">
                    <h4 class="fw-bold text-dark mb-4 text-center">Book a Celebration</h4>
                    <form action="#" method="POST">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label text-muted small fw-bold">Your Name*</label>
                                <input type="text" class="form-control bg-light" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-muted small fw-bold">Phone Number*</label>
                                <input type="tel" class="form-control bg-light" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-muted small fw-bold">Occasion Type*</label>
                                <select class="form-select bg-light" required>
                                    <option value="" disabled selected>Select</option>
                                    <option value="birthday">Birthday</option>
                                    <option value="anniversary">Anniversary</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-muted small fw-bold">Date of Occasion*</label>
                                <input type="date" class="form-control bg-light" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label text-muted small fw-bold">City in India*</label>
                                <input type="text" class="form-control bg-light" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label text-muted small fw-bold">Special Requests (e.g. Sugar-free cake)</label>
                                <textarea class="form-control bg-light" rows="3"></textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn text-white w-100 fw-bold py-3 rounded-pill shadow-sm" style="background-color: var(--primary-color);">Request Booking</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

';
?>
