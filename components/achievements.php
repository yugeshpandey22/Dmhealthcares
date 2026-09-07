<style>
    .achievements-wrap-modern {
        background: #ffffff;
        border-bottom: 1px solid #edf2f7;
        position: relative;
        z-index: 2;
        margin-top: -30px;
        margin-bottom: 20px;
    }
    .achieve-card-box {
        background: #ffffff;
        border-radius: 24px;
        border: 1px solid rgba(226, 232, 240, 0.9);
        box-shadow: 0 10px 30px rgba(15, 23, 42, 0.05);
        padding: 25px 20px;
    }
    .achieve-stat-item {
        padding: 10px 15px;
        transition: all 0.3s ease;
        border-radius: 16px;
    }
    .achieve-stat-item:hover {
        background: #f8fafc;
        transform: translateY(-3px);
    }
    .achieve-icon-badge {
        width: 48px;
        height: 48px;
        border-radius: 14px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 1.25rem;
        margin-bottom: 10px;
    }
</style>

<section class="achievements-wrap-modern py-2">
    <div class="container">
        <div class="achieve-card-box">
            <div class="row text-center align-items-center g-3 justify-content-center">
                <!-- Stat 1 -->
                <div class="col-6 col-md-3">
                    <div class="achieve-stat-item">
                        <div class="achieve-icon-badge" style="background: rgba(229, 37, 42, 0.1); color: var(--primary-color);">
                            <i class="fa-solid fa-award"></i>
                        </div>
                        <h3 class="fw-bolder display-6 mb-0" style="color: var(--secondary-color); font-size: 2rem;">
                            <span class="counter" data-target="10">0</span>+
                        </h3>
                        <p class="small mb-0 fw-semibold text-muted text-uppercase" style="letter-spacing: 0.5px; font-size: 0.78rem;">Years of Trust</p>
                    </div>
                </div>
                <!-- Stat 2 -->
                <div class="col-6 col-md-3">
                    <div class="achieve-stat-item" style="border-left: 1px dashed #e2e8f0;">
                        <div class="achieve-icon-badge" style="background: rgba(16, 185, 129, 0.1); color: #10b981;">
                            <i class="fa-solid fa-users-line"></i>
                        </div>
                        <h3 class="fw-bolder display-6 mb-0" style="color: var(--secondary-color); font-size: 2rem;">
                            <span class="counter" data-target="5000">0</span>+
                        </h3>
                        <p class="small mb-0 fw-semibold text-muted text-uppercase" style="letter-spacing: 0.5px; font-size: 0.78rem;">Patients Recovered</p>
                    </div>
                </div>
                <!-- Stat 3 -->
                <div class="col-6 col-md-3">
                    <div class="achieve-stat-item" style="border-left: 1px dashed #e2e8f0;">
                        <div class="achieve-icon-badge" style="background: rgba(13, 110, 253, 0.1); color: #0d6efd;">
                            <i class="fa-solid fa-user-nurse"></i>
                        </div>
                        <h3 class="fw-bolder display-6 mb-0" style="color: var(--secondary-color); font-size: 2rem;">
                            <span class="counter" data-target="250">0</span>+
                        </h3>
                        <p class="small mb-0 fw-semibold text-muted text-uppercase" style="letter-spacing: 0.5px; font-size: 0.78rem;">Verified Caregivers</p>
                    </div>
                </div>
                <!-- Stat 4 -->
                <div class="col-6 col-md-3">
                    <div class="achieve-stat-item" style="border-left: 1px dashed #e2e8f0;">
                        <div class="achieve-icon-badge" style="background: rgba(245, 158, 11, 0.1); color: #f59e0b;">
                            <i class="fa-solid fa-clock-rotate-left"></i>
                        </div>
                        <h3 class="fw-bolder display-6 mb-0" style="color: var(--primary-color); font-size: 2rem;">
                            24<span style="font-size: 0.7em;">x</span>7
                        </h3>
                        <p class="small mb-0 fw-semibold text-muted text-uppercase" style="letter-spacing: 0.5px; font-size: 0.78rem;">Round-the-Clock Support</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
window.addEventListener('load', function() {
    const counters = document.querySelectorAll('.counter');
    const animationDuration = 1800;

    const animateCounters = () => {
        counters.forEach(counter => {
            const target = +counter.getAttribute('data-target');
            const startTime = performance.now();
            
            const updateCount = (currentTime) => {
                const elapsedTime = currentTime - startTime;
                const progress = Math.min(elapsedTime / animationDuration, 1);
                const easeOut = 1 - Math.pow(1 - progress, 4);
                const currentCount = Math.floor(easeOut * target);
                counter.innerText = currentCount;

                if (progress < 1) {
                    requestAnimationFrame(updateCount);
                } else {
                    counter.innerText = target;
                }
            };
            requestAnimationFrame(updateCount);
        });
    };

    const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounters();
                obs.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    const achievementsSection = document.querySelector('.achievements-wrap-modern');
    if (achievementsSection) {
        observer.observe(achievementsSection);
    } else {
        animateCounters();
    }
});
</script>
