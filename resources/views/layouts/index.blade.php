<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $title }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    @include('partials.header')
    <link href="{{ URL::asset('/template/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/template/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/template/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/template/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/template/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ URL::asset('/template/assets/css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Impact
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <section id="topbar" class="topbar d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a
                        href="{{ url('mailto:contact@example.com') }}">ermytech@gamil.com</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="{{ url('#') }}" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="{{ url('#') }}" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="{{ url('#') }}" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="{{ url('#') }}" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </section><!-- End Top Bar -->

    <header id="header" class="header d-flex align-items-center">

        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="{{ url('index.html') }}" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1>{{ env('APP_NAME') }}<span>.</span></h1>
            </a>
            <nav id="navbar" class="navbar">
                <ul class="pe-3" style="background-color: var(--color-secondary)">
                    <li><a href="{{ url('#hero') }}">Home</a></li>
                    <li><a href="{{ url('#about') }}">Tentang</a></li>
                    <li><a href="{{ url('#services') }}">Layanan</a></li>
                    <li><a href="{{ url('#portfolio') }}">Portfolio</a></li>
                    <li><a href="{{ url('#team') }}">Tim</a></li>
                    <li><a href="{{ url('#blog') }}">Blog</a></li>
                    <li><a href="{{ url('#contact') }}">Kontak</a></li>
                </ul>
            </nav><!-- .navbar -->

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header><!-- End Header -->
    <!-- End Header -->

    <main id="main">
        @yield('content')
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="{{ url('index.html') }}" class="logo d-flex align-items-center">
                        <span>{{ env('APP_NAME') }}</span>
                    </a>
                    <p>Belajar teknologi bersama kami, ikuti kelas kelas kami secara gratis ataupun eksklusif.</p>
                    <div class="social-links d-flex mt-4">
                        <a href="{{ url('#') }}" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="{{ url('#') }}" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="{{ url('#') }}" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="{{ url('#') }}" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="{{ url('#') }}">Home</a></li>
                        <li><a href="{{ url('#') }}">About us</a></li>
                        <li><a href="{{ url('#') }}">Services</a></li>
                        <li><a href="{{ url('#') }}">Terms of service</a></li>
                        <li><a href="{{ url('#') }}">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="{{ url('#') }}">Web Design</a></li>
                        <li><a href="{{ url('#') }}">Web Development</a></li>
                        <li><a href="{{ url('#') }}">Product Management</a></li>
                        <li><a href="{{ url('#') }}">Marketing</a></li>
                        <li><a href="{{ url('#') }}">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Contact Us</h4>
                    <p>
                        A108 Adam Street <br>
                        New York, NY 535022<br>
                        United States <br><br>
                        <strong>Phone:</strong> +1 5589 55488 55<br>
                        <strong>Email:</strong> info@example.com<br>
                    </p>

                </div>

            </div>
        </div>

        <div class="container mt-4">
            <div class="copyright">
                &copy; Copyright <strong><span>{{ env('APP_NAME') }}</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>

    </footer><!-- End Footer -->
    <!-- End Footer -->

    <a href="{{ url('#') }}" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ URL::asset('/template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::asset('/template/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ URL::asset('/template/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ URL::asset('/template/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ URL::asset('/template/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ URL::asset('/template/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ URL::asset('/template/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ URL::asset('/template/assets/js/main.js') }}"></script>

</body>

</html>
