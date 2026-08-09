<section class="achievements-section py-5" style="background: linear-gradient(135deg, #1a2b4c 0%, #0d1627 100%); color: white; position: relative;">
    <div class="container py-4">
        <div class="row text-center g-4">
            <div class="col-6 col-md-3">
                <i class="fa-solid fa-face-smile fs-1 mb-3 text-warning"></i>
                <h2 class="fw-bolder display-5 mb-0"><span class="counter" data-target="5000">0</span>+</h2>
                <p class="fs-5 mb-0 opacity-75">Happy Patients</p>
            </div>
            <div class="col-6 col-md-3">
                <i class="fa-solid fa-user-doctor fs-1 mb-3 text-warning"></i>
                <h2 class="fw-bolder display-5 mb-0"><span class="counter" data-target="50">0</span>+</h2>
                <p class="fs-5 mb-0 opacity-75">Expert Doctors</p>
            </div>
            <div class="col-6 col-md-3">
                <i class="fa-solid fa-hospital fs-1 mb-3 text-warning"></i>
                <h2 class="fw-bolder display-5 mb-0"><span class="counter" data-target="10">0</span>+</h2>
                <p class="fs-5 mb-0 opacity-75">Years Experience</p>
            </div>
            <div class="col-6 col-md-3">
                <i class="fa-solid fa-bed-pulse fs-1 mb-3 text-warning"></i>
                <h2 class="fw-bolder display-5 mb-0"><span class="counter" data-target="150">0</span>+</h2>
                <p class="fs-5 mb-0 opacity-75">ICU Setups</p>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll('.counter');
    const speed = 50;

    const animateCounters = () => {
        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                
                // Calculate increment size
                const increment = target / speed;

                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(updateCount, 30);
                } else {
                    counter.innerText = target;
                }
            };
            updateCount();
        });
    };

    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.3
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
    }
});
</script>
