<style>
.doctors-wrap-modern {
    background: #ffffff;
    position: relative;
}
.doctor-card-modern {
    border-radius: 24px;
    background: #ffffff;
    border: 1px solid rgba(226, 232, 240, 0.9);
    box-shadow: 0 8px 25px rgba(15, 23, 42, 0.04);
    transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1);
    position: relative;
    overflow: hidden;
    height: 100%;
    display: flex;
    flex-direction: column;
    padding: 30px 24px 24px 24px;
    text-align: center;
}
.doctor-card-modern:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(229, 37, 42, 0.12);
    border-color: rgba(229, 37, 42, 0.35);
}
.doctor-avatar-box {
    position: relative;
    width: 140px;
    height: 140px;
    margin: 0 auto 20px auto;
}
.doctor-avatar-box img {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    object-fit: cover;
    border: 4px solid #ffffff;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
}
.doctor-verify-check {
    position: absolute;
    bottom: 4px;
    right: 6px;
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background: var(--primary-color);
    color: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 3px solid #ffffff;
    font-size: 0.85rem;
}
</style>

<section class="doctors-wrap-modern py-5" id="doctors">
    <div class="container py-lg-4">
        <div class="text-center mb-5">
            <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill fw-bold mb-2" style="background: rgba(229, 37, 42, 0.08); border: 1px solid rgba(229, 37, 42, 0.2); color: var(--primary-color); font-size: 0.8rem; letter-spacing: 1px;">
                <i class="fa-solid fa-user-doctor"></i>
                <span>CLINICAL LEADERSHIP & EXPERTS</span>
            </div>
            <h2 class="fw-bolder display-6 mb-3" style="color: var(--secondary-color);">
                Meet Our Healthcare <span style="color: var(--primary-color);">Medical Leaders</span>
            </h2>
            <div style="width: 60px; height: 4px; background: var(--primary-color); margin: 0 auto 16px auto; border-radius: 2px;"></div>
            <p class="text-muted fs-6 mx-auto" style="max-width: 640px;">
                Highly qualified medical professionals, clinical specialists, and compassionate directors dedicated to your family's well-being.
            </p>
        </div>

        <div class="row justify-content-center g-4">
            <!-- Director -->
            <div class="col-md-6 col-lg-4">
                <div class="doctor-card-modern">
                    <div class="doctor-avatar-box">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&q=80&w=300" alt="Mr. Sachin Thakur - Director DM Healthcare" loading="lazy">
                        <div class="doctor-verify-check">
                            <i class="fa-solid fa-check"></i>
                        </div>
                    </div>
                    <span class="badge bg-danger bg-opacity-10 text-danger rounded-pill px-3 py-1 mb-2 align-self-center fw-bold" style="font-size: 0.72rem;">Managing Director</span>
                    <h4 class="fw-bold mb-1 text-dark" style="font-size: 1.3rem;">Mr. Sachin Thakur</h4>
                    <p class="text-muted small mb-3">Healthcare Operations & Clinical Leadership</p>
                    
                    <ul class="list-unstyled text-start small text-muted mb-4 px-2 lh-lg">
                        <li><i class="fa-solid fa-certificate me-2 text-danger"></i> 15+ Years Healthcare Management</li>
                        <li><i class="fa-solid fa-users me-2 text-danger"></i> 5,000+ Patient Cases Supervised</li>
                        <li><i class="fa-solid fa-shield-check me-2 text-danger"></i> Strict Quality & Infection Protocol</li>
                    </ul>
                    <a href="#appointment" class="btn btn-outline-primary rounded-pill w-100 fw-bold mt-auto">Contact Office</a>
                </div>
            </div>

            <!-- Doctor 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="doctor-card-modern">
                    <div class="doctor-avatar-box">
                        <img src="https://images.unsplash.com/photo-1537368910025-700350fe46c7?auto=format&fit=crop&q=80&w=300" alt="Dr. Rajesh Sharma" loading="lazy">
                        <div class="doctor-verify-check" style="background: #0d6efd;">
                            <i class="fa-solid fa-stethoscope"></i>
                        </div>
                    </div>
                    <span class="badge bg-primary bg-opacity-10 text-primary rounded-pill px-3 py-1 mb-2 align-self-center fw-bold" style="font-size: 0.72rem;">Chief Medical Officer</span>
                    <h4 class="fw-bold mb-1 text-dark" style="font-size: 1.3rem;">Dr. Rajesh Sharma</h4>
                    <p class="text-muted small mb-3">MBBS, MD (Medicine) &bull; Critical Care Specialist</p>
                    
                    <ul class="list-unstyled text-start small text-muted mb-4 px-2 lh-lg">
                        <li><i class="fa-solid fa-user-md me-2 text-primary"></i> 15+ Years Clinical Experience</li>
                        <li><i class="fa-solid fa-heart-pulse me-2 text-primary"></i> Home ICU & Critical Care Oversight</li>
                        <li><i class="fa-solid fa-clipboard-check me-2 text-primary"></i> Daily Treatment & Vitals Audits</li>
                    </ul>
                    <a href="#appointment" class="btn btn-outline-primary rounded-pill w-100 fw-bold mt-auto">Consult Doctor</a>
                </div>
            </div>
            
            <!-- Doctor 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="doctor-card-modern">
                    <div class="doctor-avatar-box">
                        <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?auto=format&fit=crop&q=80&w=300" alt="Dr. Priya Verma" loading="lazy">
                        <div class="doctor-verify-check" style="background: #10b981;">
                            <i class="fa-solid fa-person-walking"></i>
                        </div>
                    </div>
                    <span class="badge bg-success bg-opacity-10 text-success rounded-pill px-3 py-1 mb-2 align-self-center fw-bold" style="font-size: 0.72rem;">Head Physiotherapist</span>
                    <h4 class="fw-bold mb-1 text-dark" style="font-size: 1.3rem;">Dr. Priya Verma</h4>
                    <p class="text-muted small mb-3">BPT, MPT (Ortho) &bull; Neuro & Joint Rehab</p>
                    
                    <ul class="list-unstyled text-start small text-muted mb-4 px-2 lh-lg">
                        <li><i class="fa-solid fa-bone me-2 text-success"></i> 10+ Years Orthopedic Rehab</li>
                        <li><i class="fa-solid fa-brain me-2 text-success"></i> Post-Stroke Motor Recovery</li>
                        <li><i class="fa-solid fa-house-medical me-2 text-success"></i> Custom In-Home Exercise Regimens</li>
                    </ul>
                    <a href="#appointment" class="btn btn-outline-primary rounded-pill w-100 fw-bold mt-auto">Book Rehab Session</a>
                </div>
            </div>
        </div>
    </div>
</section>
