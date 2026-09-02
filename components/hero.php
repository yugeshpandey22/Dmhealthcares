<style>
    .hero-carousel-wrap {
        width: 100%;
        background-color: #0f172a;
        overflow: hidden;
    }
    .hero-banner-img {
        width: 100%;
        height: auto;
        display: block;
        object-fit: cover;
    }
    @media (min-width: 1400px) {
        .hero-banner-img {
            max-height: 600px;
        }
    }
</style>
<section id="home" class="hero-carousel-wrap">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000" data-bs-pause="hover">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/images/banner1.jpg" class="d-block hero-banner-img" alt="DM Healthcare Banner 1" fetchpriority="high">
        </div>
        <div class="carousel-item">
          <img src="assets/images/banner2.jpg" class="d-block hero-banner-img" alt="DM Healthcare Banner 2" loading="lazy" decoding="async">
        </div>
        <div class="carousel-item">
          <img src="assets/images/banner3.jpg" class="d-block hero-banner-img" alt="DM Healthcare Banner 3" loading="lazy" decoding="async">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
</section>