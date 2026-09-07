<style>
    .emergency-section-modern {
        background: radial-gradient(circle at 10% 20%, #b91c1c 0%, #991b1b 40%, #0f172a 100%);
        color: #ffffff;
        position: relative;
        overflow: hidden;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }
    .emergency-section-modern::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url("data:image/svg+xml,%3Csvg width='20' height='20' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23ffffff' fill-opacity='0.04' fill-rule='evenodd'%3E%3Ccircle cx='3' cy='3' r='1'/%3E%3C/g%3E%3C/svg%3E");
        pointer-events: none;
    }
    .emergency-pulse-ring {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 58px;
        height: 58px;
        border-radius: 18px;
        background: rgba(255, 255, 255, 0.15);
        border: 1px solid rgba(255, 255, 255, 0.3);
        box-shadow: 0 0 20px rgba(229, 37, 42, 0.4);
    }
    .btn-emergency-call {
        background: #ffffff;
        color: #b91c1c !important;
        font-weight: 700;
        padding: 12px 24px;
        border-radius: 50px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.25);
        transition: all 0.3s ease;
        border: 2px solid #ffffff;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }
    .btn-emergency-call:hover {
        background: #f8fafc;
        color: #991b1b !important;
        transform: translateY(-3px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.35);
    }
    .btn-emergency-wa {
        background: rgba(37, 211, 102, 0.2);
        color: #ffffff !important;
        font-weight: 600;
        padding: 12px 22px;
        border-radius: 50px;
        border: 1px solid rgba(37, 211, 102, 0.5);
        backdrop-filter: blur(8px);
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }
    .btn-emergency-wa:hover {
        background: #25D366;
        color: #ffffff !important;
        border-color: #25D366;
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(37, 211, 102, 0.4);
    }
    @media (max-width: 576px) {
        .btn-emergency-call, .btn-emergency-wa {
            width: 100%;
            justify-content: center;
        }
    }
</style>

<section class="emergency-section-modern py-4" id="emergency">
    <div class="container position-relative z-1">
        <div class="row align-items-center g-3 text-center text-md-start">
            <div class="col-lg-7">
                <div class="d-flex align-items-center justify-content-center justify-content-md-start gap-3">
                    <div class="emergency-pulse-ring flex-shrink-0">
                        <i class="fa-solid fa-truck-medical fs-3 text-white"></i>
                    </div>
                    <div>
                        <div class="d-inline-flex align-items-center gap-2 mb-1 px-3 py-1 rounded-pill bg-black bg-opacity-25 border border-white border-opacity-10 text-uppercase fw-bold" style="font-size: 0.72rem; letter-spacing: 1px;">
                            <span class="hero-pulse-dot" style="background-color: #f87171;"></span>
                            <span>Immediate Medical Response</span>
                        </div>
                        <h3 class="fw-bold mb-1 text-white" style="font-size: 1.45rem;">24/7 Emergency & Home Care Helpline</h3>
                        <p class="mb-0 text-white-50 small">Certified nurses, critical ICU care, oxygen cylinders & ambulances on standby across Delhi NCR.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 text-center text-lg-end">
                <div class="d-inline-flex flex-wrap justify-content-center justify-content-lg-end gap-2">
                    <a href="tel:+918860600423" class="btn btn-emergency-call">
                        <i class="fa-solid fa-phone-volume"></i> Call +91 88606 00423
                    </a>
                    <a href="https://wa.me/918860600423?text=Hi%20DM%20Healthcare,%20I%20need%20immediate%20home%20healthcare%20support." target="_blank" class="btn btn-emergency-wa">
                        <i class="fa-brands fa-whatsapp fs-5 text-success"></i> WhatsApp Chat
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
