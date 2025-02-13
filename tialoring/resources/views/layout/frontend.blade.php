<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>L.A COUTURE</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Marcellus:wght@400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('frontend/TailorCraft/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/TailorCraft/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/TailorCraft/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/TailorCraft/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/TailorCraft/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('frontend/TailorCraft/assets/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: TailorCraft
  * Template URL: https://bootstrapmade.com/TailorCraft-bootstrap-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center position-relative">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <h2><span title="The Perfect Fit">TPF</span></h2>
        <!-- <h1 class="sitename">TailorCraft</h1>  -->
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/" class="active">Home</a></li>
          <li><a href="{{route('about')}}">About Us</a></li>
          <li><a href="{{route('services')}}">Our Services</a></li>
          <li><a href="{{route('contact')}}">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

  @yield('content')

  </main>

<footer id="footer" class="footer dark-background">

  <div class="footer-top">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">TailorCraft</span>
          </a>
          <div class="footer-contact pt-3">
            <p>No 1235, Tukuntawa, Kano municipal, Kano state</p>
            <!-- <p>New York, NY 535022</p> -->
            <p class="mt-3"><strong>Phone:</strong> <span>+234 901 5989 855</span></p>
            <p><strong>Email:</strong> <span>nuruddeens208@gmail.com</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="/">Home</a></li>
            <li><a href="{{route('about')}}">About us</a></li>
            <li><a href="{{route('services')}}">Services</a></li>
            <li><a href="">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        
        <div class="col-lg-2 col-md-3 footer-links">
  <h4>Our Services</h4>
  <ul>
    <li><a href="#">Custom Solutions</a></li>
    <li><a href="#">Business Consulting</a></li>
    <li><a href="#">Customer Support</a></li>
    <li><a href="#">Project Management</a></li>
    <li><a href="#">Technical Assistance</a></li>
  </ul>
</div>


<div class="col-lg-2 col-md-3 footer-links">
  <h4>About Us</h4>
  <ul>
    <li><a href="#">Our Mission</a></li>
    <li><a href="#">Core Values</a></li>
    <li><a href="#">Leadership Team</a></li>
    <li><a href="#">Careers</a></li>
    <li><a href="#">Contact Us</a></li>
  </ul>
</div>


      </div>
    </div>
  </div>

  <div class="copyright text-center">
    <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

      <div class="d-flex flex-column align-items-center align-items-lg-start">
        <div>
          © Copyright <strong><span>MyWebsite</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href="https://themewagon.com">ThemeWagon</a>
        </div>
      </div>

      <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
        <a href=""><i class="bi bi-twitter-x"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </div>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="{{asset('frontend/TailorCraft/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('frontend/TailorCraft/assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('frontend/TailorCraft/assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('frontend/TailorCraft/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('frontend/TailorCraft/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>

<!-- Main JS File -->
<script src="{{asset('frontend/TailorCraft/assets/js/main.js') }}"></script>

</body>

</html>