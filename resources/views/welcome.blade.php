<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Rekomendasi Karir</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets-new/img/favicon.png') }}"" rel="icon">
  <link href="{{ asset('assets-new/img/apple-touch-icon.png') }}"" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets-new/vendor/aos/aos.css') }}"" rel="stylesheet">
  <link href="{{ asset('assets-new/vendor/bootstrap/css/bootstrap.min.css') }}"" rel="stylesheet">
  <link href="{{ asset('assets-new/vendor/bootstrap-icons/bootstrap-icons.css') }}"" rel="stylesheet">
  <link href="{{ asset('assets-new/vendor/glightbox/css/glightbox.min.css') }}"" rel="stylesheet">
  <link href="{{ asset('assets-new/vendor/remixicon/remixicon.css') }}"" rel="stylesheet">
  <link href="{{ asset('assets-new/vendor/swiper/swiper-bundle.min.css') }}"" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets-new/css/style.css') }}"" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">  
      <a href="#" class="logo d-flex align-items-center">
        <img src="{{ asset('assets-new/img/logo.png') }}" alt="">
        <span>KarirMu</span>
      </a>
       {{-- @if (Route::has('login'))
        <nav id="navbar" class="navbar">
            <ul>
                <li>
                    @auth
                    <a class="nav-link scrollto active" href="{{ url('/dashboard') }}">DASHBOARD</a>
                </li>
                <li>
                    @else
                    <a class="nav-link scrollto" href="{{ route('login') }}">LOGIN</a>
                </li>
                <li>
                    @if (Route::has('register'))
                    <a class="nav-link scrollto" href="{{ route('register') }}">REGISTER</a>
                    @endif
                    @endauth
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
        @endif --}}
        @if (Route::has('login'))
        <nav id="navbar" class="navbar">
            <ul>
              <li>
                @auth
                <a class="nav-link scrollto active" href="{{ url('/dashboard') }}">Dashboard</a></li>
              <li>
                @else
                <a class="nav-link scrollto" href="{{ route('login') }}">Login</a></li>
                <li>
                    @if (Route::has('register'))
                    <a class="getstarted scrollto" href="{{ route('register') }}">Register</a>
                    @endif
                    @endauth
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
          @endif
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">We offer modern solutions for growing your business</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">We are team of talented designers making websites with Bootstrap</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="{{ route('register') }}" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Get Started</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{ asset('assets-new/img/hero-img.png') }}" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

 
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets-new/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets-new/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets-new/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets-new/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets-new/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets-new/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets-new/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets-new/js/main.js') }}"></script>

</body>

</html>