@extends('layout.frontend');

@section('content')

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{asset('frontend/TailorCraft/assets/img/tailor5.jpg')}}'); background-color: #2c3e50; color: #fff; padding: 60px 0;">
        <div class="container position-relative">
            <h1 style="font-family: 'Roboto', sans-serif; font-size: 36px;">About Us</h1>
            <p style="font-family: 'Lora', serif; font-size: 18px;">At TPF, we specialize in custom tailoring services that cater to all your clothing needs, from suits to dresses. Our expert tailors use only the finest materials to ensure that every piece is crafted to perfection. We bring your vision to life with precision and style, offering a seamless fit and exceptional service.</p>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.html" style="color: #e67e22;">Home</a></li>
                    <li class="current" style="color: #e67e22;">About Us</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- About 3 Section -->
    <section id="about-3" class="about-3 section" style="padding: 60px 0; background-color: #f4f4f4;">
        <div class="container">
            <div class="row gy-4 justify-content-between align-items-center">
                <div class="col-lg-6 order-lg-2 position-relative" data-aos="zoom-out">
                    <img src="{{ asset('frontend/TailorCraft/assets/img/tailor3.jpg') }}" alt="Tailoring Image" class="img-fluid">
                    <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn">
                        <span class="play"><i class="bi bi-play-fill"></i></span>
                    </a>
                </div>
                <div class="col-lg-5 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                    <h2 class="content-title mb-4" style="font-family: 'Roboto', sans-serif; color: #2c3e50;">Tailoring Excellence for Every Occasion</h2>
                    <p class="mb-4" style="font-family: 'Lora', serif; font-size: 18px; color: #333;">At [Your Business Name], we specialize in custom tailoring services that cater to all your clothing needs, from suits to dresses. Our expert tailors use only the finest materials to ensure that every piece is crafted to perfection. We bring your vision to life with precision and style, offering a seamless fit and exceptional service.</p>
                    <ul class="list-unstyled list-check" style="font-family: 'Lora', serif; font-size: 18px; color: #333;">
                        <li>Custom-fit suits, dresses, and alterations</li>
                        <li>High-quality fabrics and materials</li>
                        <li>Expert tailoring for every occasion</li>
                    </ul>
                    <p><a href="#" class="btn-cta" style="background-color: #e67e22; color: #fff; padding: 10px 20px; border-radius: 5px; text-decoration: none; font-family: 'Roboto', sans-serif;">Contact Us for a Consultation</a></p>
                </div>
            </div>
        </div>
    </section><!-- /About 3 Section -->

    <!-- Team Section -->
    <section class="team-15 team section" id="team" style="padding: 60px 0;">
        <div class="container section-title" data-aos="fade-up">
            <h2 style="font-family: 'Roboto', sans-serif; color: #2c3e50;">Meet Our Expert Tailors</h2>
            <p style="font-family: 'Lora', serif; font-size: 18px; color: #333;">Our team of skilled professionals is dedicated to bringing your fashion vision to life</p>
        </div>

        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="person" style="text-align: center; border: 1px solid #e67e22; border-radius: 10px; padding: 15px; background-color: #fff;">
                            <figure>
                                <img src="{{ asset('frontend/TailorCraft/assets/img/team/team-2.jpg') }}" alt="Image" class="img-fluid" style="border-radius: 5px; max-width: 100%; height: auto;">
                                <div class="social" style="margin-top: 10px;">
                                    <a href="#" style="color: #e67e22; margin-right: 10px;"><span class="bi bi-facebook"></span></a>
                                    <a href="#" style="color: #e67e22; margin-right: 10px;"><span class="bi bi-twitter-x"></span></a>
                                    <a href="#" style="color: #e67e22;"><span class="bi bi-linkedin"></span></a>
                                </div>
                            </figure>
                            <div class="person-contents">
                                <h3 style="font-family: 'Roboto', sans-serif; color: #2c3e50;">Sarah Johnson</h3>
                                <span class="position" style="font-family: 'Lora', serif; color: #e67e22;">Head Tailor</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="person" style="text-align: center; border: 1px solid #e67e22; border-radius: 10px; padding: 15px; background-color: #fff;">
                            <figure>
                                <img src="{{ asset('frontend/TailorCraft/assets/img/team/team-1.jpg') }}" alt="Image" class="img-fluid" style="border-radius: 5px; max-width: 100%; height: auto;">
                                <div class="social" style="margin-top: 10px;">
                                    <a href="#" style="color: #e67e22; margin-right: 10px;"><span class="bi bi-facebook"></span></a>
                                    <a href="#" style="color: #e67e22; margin-right: 10px;"><span class="bi bi-twitter-x"></span></a>
                                    <a href="#" style="color: #e67e22;"><span class="bi bi-linkedin"></span></a>
                                </div>
                            </figure>
                            <div class="person-contents">
                                <h3 style="font-family: 'Roboto', sans-serif; color: #2c3e50;">James Lee</h3>
                                <span class="position" style="font-family: 'Lora', serif; color: #e67e22;">Master Designer</span>
                            </div>
                        </div>
                    </div>
                    <!-- Add more team members as needed -->

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="person" style="text-align: center; border: 1px solid #e67e22; border-radius: 10px; padding: 15px; background-color: #fff;">
                            <figure>
                                <img src="{{ asset('frontend/TailorCraft/assets/img/team/team-3.jpg') }}" alt="Image" class="img-fluid" style="border-radius: 5px; max-width: 100%; height: auto;">
                                <div class="social" style="margin-top: 10px;">
                                    <a href="#" style="color: #e67e22; margin-right: 10px;"><span class="bi bi-facebook"></span></a>
                                    <a href="#" style="color: #e67e22; margin-right: 10px;"><span class="bi bi-twitter-x"></span></a>
                                    <a href="#" style="color: #e67e22;"><span class="bi bi-linkedin"></span></a>
                                </div>
                            </figure>
                            <div class="person-contents">
                                <h3 style="font-family: 'Roboto', sans-serif; color: #2c3e50;">James Lee</h3>
                                <span class="position" style="font-family: 'Lora', serif; color: #e67e22;">Master Designer</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="person" style="text-align: center; border: 1px solid #e67e22; border-radius: 10px; padding: 15px; background-color: #fff;">
                            <figure>
                                <img src="{{ asset('frontend/TailorCraft/assets/img/team/team-4.jpg') }}" alt="Image" class="img-fluid" style="border-radius: 5px; max-width: 100%; height: auto;">
                                <div class="social" style="margin-top: 10px;">
                                    <a href="#" style="color: #e67e22; margin-right: 10px;"><span class="bi bi-facebook"></span></a>
                                    <a href="#" style="color: #e67e22; margin-right: 10px;"><span class="bi bi-twitter-x"></span></a>
                                    <a href="#" style="color: #e67e22;"><span class="bi bi-linkedin"></span></a>
                                </div>
                            </figure>
                            <div class="person-contents">
                                <h3 style="font-family: 'Roboto', sans-serif; color: #2c3e50;">James Lee</h3>
                                <span class="position" style="font-family: 'Lora', serif; color: #e67e22;">Master Designer</span>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
  </section>


        
  <section id="services" class="services section" style="padding: 50px 0;">
  <div class="container section-title" data-aos="fade-up" style="text-align: center;">
    <h2 style="font-size: 2rem; font-weight: bold;">OUR SERVICES</h2>
    <p style="font-size: 1.2rem; color: #555;">Expert Tailoring for Every Occasion</p>
  </div>

  <div class="content">
    <div class="container">
      <div class="row g-0">
        <div class="col-lg-4 col-md-6" style="padding: 15px;">
          <div class="service-item" style="background-color: #f9f9f9; border-radius: 10px; padding: 20px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);">
            <span class="number" style="font-size: 1.5rem; color: #008C45;">01</span>
            <div class="service-item-icon" style="margin-bottom: 15px;">
              <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="80" height="80" x="0" y="0" viewBox="0 0 509.435 509.435" style="enable-background: new 0 0 512 512" xml:space="preserve">
                <g>
                  <path d="M7.506 347.639c.994 0 2.005-.199 2.976-.619l62.037-26.857a7.5 7.5 0 0 0 3.903-9.862 7.5 7.5 0 0 0-9.862-3.903L4.523 333.255a7.501 7.501 0 0 0 2.983 14.384zM500.883 283.197c-10.953-10.952-28.175-11.423-39.689-1.267l-10.034-13.307c-19.783-26.239-46.1-46.623-76.103-58.948a7.5 7.5 0 0 0-5.699 13.875c11.136 4.575 21.708 10.382 31.567 17.249h-22.621c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h41.188a169.382 169.382 0 0 1 19.691 21.855l11.048 14.652-71.171 67.597h-19.48a35.772 35.772 0 0 0 6.775-20.976c0-19.837-16.139-35.975-35.976-35.975h-75.023l-48.33-15.005a160.871 160.871 0 0 0-37.992-6.934l2.533-3.359a169.852 169.852 0 0 1 19.67-21.855h27.398c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-8.848a165.125 165.125 0 0 1 38.01-19.73c28.992-10.532 60.376-12.89 90.754-6.821a7.498 7.498 0 0 0 8.824-5.885 7.5 7.5 0 0 0-5.885-8.824 184.517 184.517 0 0 0-28.616-3.4v-83.727h64.189c43.49 0 78.872-35.382 78.872-78.872V22.488c0-8.712-7.088-15.801-15.801-15.801h-51.729c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h51.729c.441 0 .801.359.801.801v11.051c0 35.219-28.653 63.872-63.872 63.872h-64.189V85.559c0-28.082 18.793-53.262 45.701-61.234a7.5 7.5 0 1 0-4.261-14.382c-15.972 4.732-30.338 14.681-40.451 28.015-10.46 13.79-15.988 30.25-15.988 47.601v16.416c-9.59-9.839-22.97-15.965-37.762-15.965h-43.432c-6.193 0-11.232 5.039-11.232 11.232v23.629c0 29.093 23.669 52.762 52.763 52.762h39.663v22.475a183.375 183.375 0 0 0-55.199 10.86c-32.974 11.978-62.423 33.47-83.61 61.32l-11.257-13.871c8.329-8.743 12.666-19.472 12.666-30.448 0-23.601-19.178-42.779-42.779-42.779h-6.326c-8.826 0-16.634 7.805-16.634 16.634v76.651c0 6.747-5.482 12.219-12.219 12.219h-48.46c-6.747 0-12.219-5.482-12.219-12.219v-18.722c0-25.345-20.598-45.944-45.944-45.944h-47.83c-25.347 0-45.944 20.598-45.944 45.944v18.722c0 25.345 20.598 45.944 45.944 45.944h47.83c9.655 0 18.043 8.367 18.043 18.043v38.225c0 6.747-5.482 12.219-12.219 12.219-6.747 0-12.219-5.482-12.219-12.219v-38.225c0-9.676-8.357-18.043-18.043-18.043h-47.83c-6.747 0-12.219-5.482-12.219-12.219v-18.722c0-25.345-20.598-45.944-45.944-45.944z"/>
                </g>
              </svg>
            </div>
            <div class="service-item-content">
              <h5 style="font-size: 1.1rem; font-weight: 600;">Custom Tailoring</h5>
              <p style="font-size: 1rem; color: #555;">Get perfectly fitted clothing designed just for you, tailored to your exact measurements.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" style="padding: 15px;">
          <div class="service-item" style="background-color: #f9f9f9; border-radius: 10px; padding: 20px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);">
            <span class="number" style="font-size: 1.5rem; color: #008C45;">02</span>
            <div class="service-item-icon" style="margin-bottom: 15px;">
              <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="80" height="80" x="0" y="0" viewBox="0 0 509.435 509.435" style="enable-background: new 0 0 512 512" xml:space="preserve">
                <g>
                  <path d="M7.506 347.639c.994 0 2.005-.199 2.976-.619l62.037-26.857a7.5 7.5 0 0 0 3.903-9.862 7.5 7.5 0 0 0-9.862-3.903L4.523 333.255a7.501 7.501 0 0 0 2.983 14.384zM500.883 283.197c-10.953-10.952-28.175-11.423-39.689-1.267l-10.034-13.307c-19.783-26.239-46.1-46.623-76.103-58.948a7.5 7.5 0 0 0-5.699 13.875c11.136 4.575 21.708 10.382 31.567 17.249h-22.621c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h41.188a169.382 169.382 0 0 1 19.691 21.855l11.048 14.652-71.171 67.597h-19.48a35.772 35.772 0 0 0 6.775-20.976c0-19.837-16.139-35.975-35.976-35.975h-75.023l-48.33-15.005a160.871 160.871 0 0 0-37.992-6.934l2.533-3.359a169.852 169.852 0 0 1 19.67-21.855h27.398c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-8.848a165.125 165.125 0 0 1 38.01-19.73c28.992-10.532 60.376-12.89 90.754-6.821a7.498 7.498 0 0 0 8.824-5.885 7.5 7.0 0 0 0-5.885-8.824 184.517 184.517 0 0 0-28.616-3.4z"/>
                </g>
              </svg>
            </div>
            <div class="service-item-content">
              <h5 style="font-size: 1.1rem; font-weight: 600;">Alterations & Adjustments</h5>
              <p style="font-size: 1rem; color: #555;">Need a quick alteration? We adjust hems, sleeves, and more to ensure the perfect fit.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" style="padding: 15px;">
          <div class="service-item" style="background-color: #f9f9f9; border-radius: 10px; padding: 20px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);">
            <span class="number" style="font-size: 1.5rem; color: #008C45;">03</span>
            <div class="service-item-icon" style="margin-bottom: 15px;">
              <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="80" height="80" x="0" y="0" viewBox="0 0 509.435 509.435" style="enable-background: new 0 0 512 512" xml:space="preserve">
                <g>
                  <path d="M7.506 347.639c.994 0 2.005-.199 2.976-.619l62.037-26.857a7.5 7.5 0 0 0 3.903-9.862 7.5 7.5 0 0 0-9.862-3.903L4.523 333.255a7.501 7.501 0 0 0 2.983 14.384zM500.883 283.197c-10.953-10.952-28.175-11.423-39.689-1.267l-10.034-13.307c-19.783-26.239-46.1-46.623-76.103-58.948a7.5 7.5 0 0 0-5.699 13.875c11.136 4.575 21.708 10.382 31.567 17.249h-22.621c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h41.188a169.382 169.382 0 0 1 19.691 21.855l11.048 14.652-71.171 67.597h-19.48a35.772 35.772 0 0 0 6.775-20.976c0-19.837-16.139-35.975-35.976-35.975h-75.023l-48.33-15.005a160.871 160.871 0 0 0-37.992-6.934l2.533-3.359a169.852 169.852 0 0 1 19.67-21.855h27.398c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-8.848a165.125 165.125 0 0 1 38.01-19.73c28.992-10.532 60.376-12.89 90.754-6.821a7.498 7.498 0 0 0 8.824-5.885 7.5 7.0 0 0 0-5.885-8.824 184.517 184.517 0 0 0-28.616-3.4z"/>
                </g>
              </svg>
            </div>
            <div class="service-item-content">
              <h5 style="font-size: 1.1rem; font-weight: 600;">Wedding & Special Event Attire</h5>
              <p style="font-size: 1rem; color: #555;">Make your special day perfect with expertly tailored wedding dresses, suits, and gowns.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
      </div>
    </div>
  </div>
</section><!-- /Services Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section light-background">

      <div class="content">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6">
            <h3>Subscribe To Our Newsletter</h3>
<p class="opacity-50">
    Stay connected with the latest updates, tips, and exclusive offers from our farm. Sign up for our newsletter and receive insights on fresh produce, gardening tips, and special promotions delivered straight to your inbox. Join our community and enjoy the benefits of healthy living and farm-fresh products.
</p>


            </div>
            <div class="col-lg-6">
              <form action="forms/newsletter.php" class="form-subscribe php-email-form">
                <div class="form-group d-flex align-items-stretch">
                  <input type="email" name="email" class="form-control h-100" placeholder="Enter your e-mail">
                  <input type="submit" class="btn btn-secondary px-4" value="Subcribe">
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