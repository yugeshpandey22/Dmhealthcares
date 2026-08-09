<?php
// DO NOT set $full_page_override = true;
// We want to use the exact same layout as Noida (standard CMS layout with Banner, Image, Specs).
// We simply assign our frontend custom design to $frontend_custom_sections so it renders full width!

$frontend_custom_sections = '

<link rel="stylesheet" href="assets/css/elder-care---basic-care.css">

<div class="mt-5 pt-4 border-top">
    <!-- What is Included Section -->
    <div class="text-center mb-5 mt-4">
        <h2 class="fw-bold text-dark mb-3">What Does Basic Elder Care Include?</h2>
        <p class="text-muted mx-auto" style="max-width: 600px;">Our caregivers are meticulously trained to handle all basic requirements of senior citizens, providing a helping hand and a friendly companion.</p>
    </div>
    
    <div class="row g-4 mb-5 pb-4">
        <!-- Service 1 -->
        <div class="col-lg-3 col-md-6">
            <div class="service-card card h-100 p-4 rounded-4 bg-white border-0 shadow-sm text-center transition-hover">
                <div class="icon-box bg-primary bg-opacity-10 mx-auto rounded-circle d-flex align-items-center justify-content-center text-primary mb-3" style="width: 60px; height: 60px; font-size: 1.5rem;">
                    <i class="fa-solid fa-person-cane"></i>
                </div>
                <h5 class="fw-bold text-dark mb-3">Mobility Assistance</h5>
                <p class="text-muted small mb-0">Help with walking, moving from bed to chair, and basic physical exercises prescribed by doctors.</p>
            </div>
        </div>
        <!-- Service 2 -->
        <div class="col-lg-3 col-md-6">
            <div class="service-card card h-100 p-4 rounded-4 bg-white border-0 shadow-sm text-center transition-hover">
                <div class="icon-box bg-primary bg-opacity-10 mx-auto rounded-circle d-flex align-items-center justify-content-center text-primary mb-3" style="width: 60px; height: 60px; font-size: 1.5rem;">
                    <i class="fa-solid fa-utensils"></i>
                </div>
                <h5 class="fw-bold text-dark mb-3">Feeding & Diet</h5>
                <p class="text-muted small mb-0">Assistance with feeding and ensuring they follow their prescribed nutritional diet on time.</p>
            </div>
        </div>
        <!-- Service 3 -->
        <div class="col-lg-3 col-md-6">
            <div class="service-card card h-100 p-4 rounded-4 bg-white border-0 shadow-sm text-center transition-hover">
                <div class="icon-box bg-primary bg-opacity-10 mx-auto rounded-circle d-flex align-items-center justify-content-center text-primary mb-3" style="width: 60px; height: 60px; font-size: 1.5rem;">
                    <i class="fa-solid fa-pills"></i>
                </div>
                <h5 class="fw-bold text-dark mb-3">Medication Management</h5>
                <p class="text-muted small mb-0">Timely administration of medicines and maintaining a daily log of their vitals and health status.</p>
            </div>
        </div>
        <!-- Service 4 -->
        <div class="col-lg-3 col-md-6">
            <div class="service-card card h-100 p-4 rounded-4 bg-white border-0 shadow-sm text-center transition-hover">
                <div class="icon-box bg-primary bg-opacity-10 mx-auto rounded-circle d-flex align-items-center justify-content-center text-primary mb-3" style="width: 60px; height: 60px; font-size: 1.5rem;">
                    <i class="fa-solid fa-bath"></i>
                </div>
                <h5 class="fw-bold text-dark mb-3">Personal Hygiene</h5>
                <p class="text-muted small mb-0">Help with bathing, dressing, toileting, and maintaining overall personal cleanliness.</p>
            </div>
        </div>
    </div>
</div>

<div class="mt-5 pt-4 border-top">
    <!-- Why Choose Us / Plans Section -->
    <div class="row align-items-center mb-5 mt-4">
        <div class="col-lg-6 mb-4 mb-lg-0">
            <h2 class="fw-bold text-dark mb-4">Flexible Care Plans Built for You</h2>
            <p class="text-muted mb-4">Every family has different needs. Whether you need someone for a few hours a day to assist with specific tasks, or 24/7 live-in support, we have a plan for you.</p>
            
            <ul class="list-unstyled mb-4">
                <li class="mb-3 d-flex align-items-center"><i class="fa-solid fa-circle-check text-success me-3 fs-5"></i> <strong>12-Hour Day/Night Care:</strong> Perfect for daytime assistance or night-time monitoring.</li>
                <li class="mb-3 d-flex align-items-center"><i class="fa-solid fa-circle-check text-success me-3 fs-5"></i> <strong>24-Hour Live-in Care:</strong> Round-the-clock support for maximum peace of mind.</li>
                <li class="mb-3 d-flex align-items-center"><i class="fa-solid fa-circle-check text-success me-3 fs-5"></i> <strong>Short-term Respite Care:</strong> Temporary support when primary family caregivers need a break.</li>
            </ul>
            
            <a href="index.php#appointment" class="btn btn-primary rounded-pill px-4 py-2 shadow-sm fw-bold">Discuss Your Needs With Us</a>
        </div>
        <div class="col-lg-6">
            <div class="bg-primary bg-opacity-10 p-5 rounded-4 border border-primary border-opacity-25 text-center">
                <h3 class="fw-bold text-primary mb-4">Why DM Healthcare?</h3>
                <div class="row g-4 text-start">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-start gap-3">
                            <i class="fa-solid fa-shield-halved text-primary fs-4 mt-1"></i>
                            <div>
                                <h6 class="fw-bold mb-1">Police Verified</h6>
                                <p class="small text-muted mb-0">100% background checked staff</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-start gap-3">
                            <i class="fa-solid fa-user-nurse text-primary fs-4 mt-1"></i>
                            <div>
                                <h6 class="fw-bold mb-1">Trained Staff</h6>
                                <p class="small text-muted mb-0">Experienced in geriatric care</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-start gap-3">
                            <i class="fa-solid fa-heart-pulse text-primary fs-4 mt-1"></i>
                            <div>
                                <h6 class="fw-bold mb-1">Compassionate</h6>
                                <p class="small text-muted mb-0">Treated like our own family</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-start gap-3">
                            <i class="fa-solid fa-headset text-primary fs-4 mt-1"></i>
                            <div>
                                <h6 class="fw-bold mb-1">24/7 Support</h6>
                                <p class="small text-muted mb-0">Always here when you need us</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
';
?>
