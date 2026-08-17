<section class="achievements-section py-4" style="background-color: white; border-bottom: 1px solid #eee; position: relative; z-index: 2; margin-top: -30px; border-radius: 20px 20px 0 0; box-shadow: 0 -10px 30px rgba(0,0,0,0.05);">
    <div class="container">
        <div class="row text-center align-items-center g-4 justify-content-center">
            <!-- Stat 1 -->
            <div class="col-6 col-md-3">
                <div class="p-3">
                    <h2 class="fw-bolder display-6 mb-1" style="color: var(--primary-color);"><span class="counter" data-target="10">0</span>+</h2>
                    <p class="fs-6 mb-0 fw-semibold text-secondary">Years Experience</p>
                </div>
            </div>
            <!-- Stat 2 -->
            <div class="col-6 col-md-3">
                <div class="p-3" style="border-left: 1px dashed #ddd;">
                    <h2 class="fw-bolder display-6 mb-1" style="color: var(--primary-color);"><span class="counter" data-target="5000">0</span>+</h2>
                    <p class="fs-6 mb-0 fw-semibold text-secondary">Patients Served</p>
                </div>
            </div>
            <!-- Stat 3 -->
            <div class="col-6 col-md-3">
                <div class="p-3" style="border-left: 1px dashed #ddd;">
                    <h2 class="fw-bolder display-6 mb-1" style="color: var(--primary-color);"><span class="counter" data-target="15">0</span>+</h2>
                    <p class="fs-6 mb-0 fw-semibold text-secondary">Healthcare Experts</p>
                </div>
            </div>
            <!-- Stat 4 -->
            <div class="col-6 col-md-3">
                <div class="p-3" style="border-left: 1px dashed #ddd;">
                    <h2 class="fw-bolder display-6 mb-1" style="color: var(--primary-color);">24<span style="font-size: 0.7em;">x</span>7</h2>
                    <p class="fs-6 mb-0 fw-semibold text-secondary">Care Support</p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// Use an IIFE or window load to ensure it runs even if DOMContentLoaded already fired (sometimes an issue in dynamic includes)
window.addEventListener('load', function() {
    const counters = document.querySelectorAll('.counter');
    const animationDuration = 2000; // 2 seconds

    const animateCounters = () => {
        counters.forEach(counter => {
            const target = +counter.getAttribute('data-target');
            const startTime = performance.now();
            
            const updateCount = (currentTime) => {
                const elapsedTime = currentTime - startTime;
                const progress = Math.min(elapsedTime / animationDuration, 1);
                
                // easeOutQuart easing function
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

    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounters();
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    const achievementsSection = document.querySelector('.achievements-section');
    if (achievementsSection) {
        observer.observe(achievementsSection);
    } else {
        // Fallback if section is somehow not found by observer
        animateCounters();
    }
});
</script>
