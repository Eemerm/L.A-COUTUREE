@extends('layout.frontend')

@section('content')

<!-- Hero Section -->
<section id="hero" class="hero section dark-background">
  <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-item active">
      <img src="{{asset('frontend/TailorCraft/assets/img/tailor4.jpg')}}" alt="Tailoring Services">
      <div class="carousel-container">
        <h2>Tailoring Excellence for Every Occasion</h2>
        <p>We create custom-made outfits that reflect your style and personality. From casual wear to formal attire, we ensure perfection in every stitch.</p>
      </div>
    </div><!-- End Carousel Item -->

    <div class="carousel-item">
      <img src="{{asset('frontend/TailorCraft/assets/img/tailor2.jpg')}}" alt="Custom Tailoring">
      <div class="carousel-container">
        <h2>Custom Tailoring for Men and Women</h2>
        <p>Our expert tailors craft bespoke garments tailored to your measurements, ensuring a perfect fit and timeless elegance.</p>
      </div>
    </div><!-- End Carousel Item -->

    <div class="carousel-item">
      <img src="{{asset('frontend/TailorCraft/assets/img/tailor3.jpg')}}" alt="Fabric Selection">
      <div class="carousel-container">
        <h2>Premium Fabrics for Every Style</h2>
        <p>Choose from a wide range of high-quality fabrics to create the perfect outfit for any occasion.</p>
      </div>
    </div><!-- End Carousel Item -->

    <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>
    <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a>
  </div>
</section><!-- /Hero Section -->

<!-- Services Section -->
<section id="services" class="services section">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>OUR SERVICES</h2>
    <p>We offer a wide range of tailoring services to meet your needs.</p>
  </div><!-- End Section Title -->

  <div class="container">
    <div class="row g-0">
      <div class="col-lg-3 col-md-6">
        <div class="service-item">
          <span class="number">01</span>
          <div class="service-item-icon">
            <i class="bi bi-scissors"></i>
          </div>
          <div class="service-item-content">
            <h3 class="service-heading">Custom Tailoring</h3>
            <p>We create bespoke garments tailored to your measurements, ensuring a perfect fit and unique style.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="service-item">
          <span class="number">02</span>
          <div class="service-item-icon">
            <i class="bi bi-rulers"></i>
          </div>
          <div class="service-item-content">
            <h3 class="service-heading">Alterations</h3>
            <p>From hemming to resizing, we provide expert alterations to make your clothes fit perfectly.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="service-item">
          <span class="number">03</span>
          <div class="service-item-icon">
            <i class="bi bi-suit-heart"></i>
          </div>
          <div class="service-item-content">
            <h3 class="service-heading">Wedding Attire</h3>
            <p>We design and craft stunning wedding dresses and suits for your special day.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="service-item">
          <span class="number">04</span>
          <div class="service-item-icon">
            <i class="bi bi-bag-check"></i>
          </div>
          <div class="service-item-content">
            <h3 class="service-heading">Corporate Wear</h3>
            <p>Elevate your professional look with custom-made suits and office wear.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- /Services Section -->

<!-- About Section -->
<section id="about" class="about section">
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <img src="{{asset('frontend/TailorCraft/assets/img/tailor.jpg')}}" alt="Tailor" class="img-fluid img-overlap" data-aos="zoom-out">
        </div>
        <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
          <h3 class="content-subtitle text-white opacity-50">Why Choose Us</h3>
          <h2 class="content-title mb-4">
            Over <strong>15 years of experience</strong> in tailoring and fashion design.
          </h2>
          <p class="opacity-50">
            Our team of skilled tailors and designers is dedicated to creating garments that reflect your personality and style. We use only the finest fabrics and techniques to ensure the highest quality.
          </p>

          <div class="row my-5">
            <div class="col-lg-12 d-flex align-items-start mb-4">
              <i class="bi bi-scissors me-4 display-6"></i>
              <div>
                <h4 class="m-0 h5 text-white">Custom Designs</h4>
                <p class="text-white opacity-50">We create unique designs tailored to your preferences and measurements.</p>
              </div>
            </div>
            <div class="col-lg-12 d-flex align-items-start mb-4">
              <i class="bi bi-heart me-4 display-6"></i>
              <div>
                <h4 class="m-0 h5 text-white">Premium Fabrics</h4>
                <p class="text-white opacity-50">We source the finest fabrics to ensure comfort and durability.</p>
              </div>
            </div>
            <div class="col-lg-12 d-flex align-items-start">
              <i class="bi bi-clock me-4 display-6"></i>
              <div>
                <h4 class="m-0 h5 text-white">Timely Delivery</h4>
                <p class="text-white opacity-50">We deliver your garments on time, every time.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- /About Section -->

<!-- Testimonials Section -->
<section class="testimonials-12 testimonials section" id="testimonials">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>TESTIMONIALS</h2>
    <p>What our clients say about us</p>
  </div><!-- End Section Title -->

  <div class="testimonial-wrap">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mb-4 mb-md-4">
          <div class="testimonial">
            <img src="{{asset('frontend/TailorCraft/assets/img/testimonials/testimonials-1.jpg')}}" alt="Client">
            <blockquote>
              <p>
                “The tailoring service was exceptional! My suit fit perfectly, and the attention to detail was amazing.”
              </p>
            </blockquote>
            <p class="client-name">John Doe</p>
          </div>
        </div>
        <div class="col-md-6 mb-4 mb-md-4">
          <div class="testimonial">
            <img src="{{asset('frontend/TailorCraft/assets/img/testimonials/testimonials-2.jpg')}}" alt="Client">
            <blockquote>
              <p>
                “I loved my wedding dress! It was exactly what I envisioned, and the team was so professional.”
              </p>
            </blockquote>
            <p class="client-name">Jane Smith</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- /Testimonials Section -->

<!-- Call To Action Section -->
<section id="call-to-action" class="call-to-action section light-background">
  <div class="content">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <h3>Subscribe To Our Newsletter</h3>
          <p class="opacity-50">
            Stay updated with the latest fashion trends, offers, and tips. Subscribe to our newsletter today!
          </p>
        </div>
        <div class="col-lg-6">
          <form action="forms/newsletter.php" class="form-subscribe php-email-form">
            <div class="form-group d-flex align-items-stretch">
              <input type="email" name="email" class="form-control h-100" placeholder="Enter your e-mail">
              <input type="submit" class="btn btn-secondary px-4" value="Subscribe">
            </div>
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">
              Your subscription request has been sent. Thank you!
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section><!-- /Call To Action Section -->

@endsection