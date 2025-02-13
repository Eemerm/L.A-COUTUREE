@extends('layout.frontend')

@section('content')

<!-- Page Title -->
<div class="page-title dark-background" data-aos="fade" style="background-image: url('{{ asset('frontend/TailorCraft/assets/img/tailor.jpg') }}');">
  <div class="container position-relative">
    <h1>Our Services</h1>
    <p>
      Home / Services
    </p>
    <nav class="breadcrumbs">
      <ol>
        <li><a href="index.html">Home</a></li>
        <li class="current">Services</li>
      </ol>
    </nav>
  </div>
</div><!-- End Page Title -->

<!-- Services Section -->
<section id="services" class="services section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>OUR SERVICES</h2>
    <p>Tailored to Perfection, Stitched with Care</p>
  </div><!-- End Section Title -->

  <div class="content">
    <div class="container">
      <div class="row g-0">
        <div class="col-lg-3 col-md-6">
          <div class="service-item">
            <span class="number">01</span>
            <div class="service-item-icon">
              <i class="bi bi-scissors display-6"></i>
            </div>
            <div class="service-item-content">
              <h3 class="service-heading">Custom Tailoring</h3>
              <p>
                We specialize in creating custom-fit garments tailored to your unique measurements and style preferences. From suits to dresses, we ensure a perfect fit every time.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="service-item">
            <span class="number">02</span>
            <div class="service-item-icon">
              <i class="bi bi-pencil-square display-6"></i>
            </div>
            <div class="service-item-content">
              <h3 class="service-heading">Design Consultation</h3>
              <p>
                Our expert designers work with you to bring your vision to life. Whether it’s a wedding gown or a business suit, we guide you through every step of the design process.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="service-item">
            <span class="number">03</span>
            <div class="service-item-icon">
              <i class="bi bi-heart display-6"></i>
            </div>
            <div class="service-item-content">
              <h3 class="service-heading">Bridal Wear</h3>
              <p>
                Create your dream wedding dress with our bespoke bridal wear service. We use the finest fabrics and intricate detailing to make your special day unforgettable.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="service-item">
            <span class="number">04</span>
            <div class="service-item-icon">
              <i class="bi bi-suitcase-lg display-6"></i>
            </div>
            <div class="service-item-content">
              <h3 class="service-heading">Corporate Wear</h3>
              <p>
                Elevate your professional wardrobe with our corporate tailoring services. We craft sharp, sophisticated suits that make a lasting impression.
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="service-item">
            <span class="number">05</span>
            <div class="service-item-icon">
              <i class="bi bi-palette display-6"></i>
            </div>
            <div class="service-item-content">
              <h3 class="service-heading">Fabric Selection</h3>
              <p>
                Choose from a wide range of premium fabrics, including silk, wool, and linen. Our experts help you select the perfect material for your garment.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="service-item">
            <span class="number">06</span>
            <div class="service-item-icon">
              <i class="bi bi-tools display-6"></i>
            </div>
            <div class="service-item-content">
              <h3 class="service-heading">Alterations</h3>
              <p>
                Need adjustments? Our skilled tailors provide precise alterations to ensure your clothing fits flawlessly, whether it’s a hemline or a sleeve length.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="service-item">
            <span class="number">07</span>
            <div class="service-item-icon">
              <i class="bi bi-calendar-event display-6"></i>
            </div>
            <div class="service-item-content">
              <h3 class="service-heading">Event Wear</h3>
              <p>
                Stand out at your next event with our exclusive event wear collection. From cocktail dresses to tuxedos, we create show-stopping outfits for any occasion.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="service-item">
            <span class="number">08</span>
            <div class="service-item-icon">
              <i class="bi bi-star display-6"></i>
            </div>
            <div class="service-item-content">
              <h3 class="service-heading">Luxury Tailoring</h3>
              <p>
                Indulge in our luxury tailoring service, where every stitch is a testament to craftsmanship. Perfect for those who demand the very best in fashion.
              </p>
            </div>
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
          <img src="{{ asset('frontend/TailorCraft/assets/img/tailor2.jpg') }}" alt="Tailor at Work" class="img-fluid img-overlap" data-aos="zoom-out" style="height: 900px; width: 100%; object-fit: cover; object-position: center;">
        </div>
        <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
          <h3 class="content-subtitle text-white opacity-50">Why Choose Us</h3>
          <h2 class="content-title mb-4">
            Over <strong>15 years of experience</strong> in tailoring and fashion design
          </h2>
          <p class="opacity-50">
            At TailorCraft, we combine traditional craftsmanship with modern techniques to deliver garments that are both stylish and timeless. Our commitment to quality and customer satisfaction sets us apart.
          </p>

          <div class="row my-5">
            <div class="col-lg-12 d-flex align-items-start mb-4">
              <i class="bi bi-rulers me-4 display-6"></i>
              <div>
                <h4 class="m-0 h5 text-white">Precision Fit</h4>
                <p class="text-white opacity-50">
                  Every garment is tailored to your exact measurements, ensuring a flawless fit that enhances your silhouette.
                </p>
              </div>
            </div>
            <div class="col-lg-12 d-flex align-items-start mb-4">
              <i class="bi bi-heart me-4 display-6"></i>
              <div>
                <h4 class="m-0 h5 text-white">Quality Fabrics</h4>
                <p class="text-white opacity-50">
                  We use only the finest materials, sourced from trusted suppliers, to create durable and luxurious garments.
                </p>
              </div>
            </div>
            <div class="col-lg-12 d-flex align-items-start">
              <i class="bi bi-clock me-4 display-6"></i>
              <div>
                <h4 class="m-0 h5 text-white">Timely Delivery</h4>
                <p class="text-white opacity-50">
                  We respect your time. Your garments are delivered on schedule, without compromising on quality.
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section><!-- /About Section -->

<!-- team Section -->
<section class="team-12 team section" id="team">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>team</h2>
    <p>What our clients say about us</p>
  </div><!-- End Section Title -->

  <div class="testimonial-wrap">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-md-3 mb-4">
          <div class="testimonial">
            <img src="{{ asset('frontend/TailorCraft/assets/img/team/team-1.jpg') }}" alt="Client 1" style="width:50px;height:50px;border-radius:50%;padding-bottom:2px;">
            <blockquote>
              <p>
                “TailorCraft transformed my vision into reality. My wedding dress was beyond perfect!”
              </p>
            </blockquote>
            <p class="client-name">Emily Johnson</p>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="testimonial">
            <img src="{{ asset('frontend/TailorCraft/assets/img/team/team-2.jpg') }}" alt="Client 2" style="width:50px;height:50px;border-radius:50%;padding-bottom:2px;">
            <blockquote>
              <p>
                “The attention to detail is incredible. I’ve never had a suit fit so well.”
              </p>
            </blockquote>
            <p class="client-name">Michael Brown</p>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="testimonial">
            <img src="{{ asset('frontend/TailorCraft/assets/img/team/team-3.jpg') }}" alt="Client 3" style="width:50px;height:50px;border-radius:50%;padding-bottom:2px;">
            <blockquote>
              <p>
                “Professional, timely, and exceptional quality. Highly recommend!”
              </p>
            </blockquote>
            <p class="client-name">Sarah Lee</p>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="testimonial">
            <img src="{{ asset('frontend/TailorCraft/assets/img/team/team-4.jpg') }}" alt="Client 4" style="width:50px;height:50px;border-radius:50%;padding-bottom:2px;">
            <blockquote>
              <p>
                “The team is amazing. They made my event outfit a showstopper!”
              </p>
            </blockquote>
            <p class="client-name">David Wilson</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- /team Section -->

<!-- Call To Action Section -->
<section id="call-to-action" class="call-to-action section light-background">

  <div class="content">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <h3>Subscribe To Our Newsletter</h3>
          <p class="opacity-50">
            Stay updated with the latest fashion trends, exclusive offers, and styling tips from TailorCraft.
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