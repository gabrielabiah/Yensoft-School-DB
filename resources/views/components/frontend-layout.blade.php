<!doctype html>
<html class="no-js" lang="en">

<!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>Yensoft </title>

    <meta name="description" content="School Management System">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/png">

    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}">

    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/LineIcons.css') }}">

    <!--====== Font Awesome CSS ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/font-awesome.min.css') }}">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/default.css') }}">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">

</head>

<body>
    <!--[if IE]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->


    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->

    <header class="header-area">
        <div class="navbar-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img src="{{ asset('images/favicon.png') }}" alt="Logo" style="width:40px">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#features">Features</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#about">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#facts">Why</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#team">Team</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#blog">Blog</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->

                            <div class="navbar-btn d-none d-sm-inline-block">
                                <a class="main-btn" data-scroll-nav="0" href="{{ url('login') }}">Get Started!</a>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->

        <div id="home" class="header-hero bg_cover"
            style="background-image: url(frontend/assets/images/banner-bg.svg)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="header-hero-content text-center">
                            <h3 class="header-sub-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">
                                Best School Management Software</h3>
                            <h2 class="header-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">
                                Manage Multiple Schools</h2>
                            <p class="text wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s"> Most Reliable
                                School Management System in Africa</p>
                            <a href="{{ url('login') }}" class="main-btn wow fadeInUp" data-wow-duration="1.3s"
                                data-wow-delay="1.1s">Get Started</a>
                        </div> <!-- header hero content -->
                    </div>
                </div> <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-hero-image text-center wow fadeIn" data-wow-duration="1.3s"
                            data-wow-delay="1.4s">
                            <img src="{{ asset('frontend/assets/images/header-hero.png') }}" alt="hero">
                        </div> <!-- header hero image -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div id="particles-1" class="particles"></div>
        </div> <!-- header hero -->
    </header>

    <!--====== HEADER PART ENDS ======-->

    {{ $slot }}

    <!--====== FOOTER PART START ======-->

    <footer id="footer" class="footer-area pt-120">
        <div class="container">
            <div class="subscribe-area wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="subscribe-content mt-45">
                            <h2 class="subscribe-title">Subscribe Our Newsletter <span>get reguler updates</span>
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="subscribe-form mt-50">
                            <form action="#">
                                <input type="text" placeholder="Enter eamil">
                                <button class="main-btn">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- subscribe area -->
            <div class="footer-widget pb-100">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="footer-about mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            <a class="logo" href="#">
                                <img src="{{ asset('frontend/assets/images/logo.svg') }}" alt="logo">
                            </a>
                            <p class="text">Lorem ipsum dolor sit amet consetetur sadipscing elitr, sederfs diam
                                nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
                            <ul class="social">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-filled"></i></a></li>
                                <li><a href="#"><i class="lni-instagram-filled"></i></a></li>
                                <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                            </ul>
                        </div> <!-- footer about -->
                    </div>
                    <div class="col-lg-5 col-md-7 col-sm-7">
                        <div class="footer-link d-flex mt-50 justify-content-md-between">
                            <div class="link-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                                <div class="footer-title">
                                    <h4 class="title">Quick Link</h4>
                                </div>
                                <ul class="link">
                                    <li><a href="#">Road Map</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Refund Policy</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Pricing</a></li>
                                </ul>
                            </div> <!-- footer wrapper -->
                            <div class="link-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                                <div class="footer-title">
                                    <h4 class="title">Resources</h4>
                                </div>
                                <ul class="link">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Page</a></li>
                                    <li><a href="#">Portfolio</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div> <!-- footer wrapper -->
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-3 col-md-5 col-sm-5">
                        <div class="footer-contact mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                            <div class="footer-title">
                                <h4 class="title">Contact Us</h4>
                            </div>
                            <ul class="contact">
                                <li>+809272561823</li>
                                <li>info@gmail.com</li>
                                <li>www.yourweb.com</li>
                                <li>123 Stree New York City , United <br> States Of America 750.</li>
                            </ul>
                        </div> <!-- footer contact -->
                    </div>
                </div> <!-- row -->
            </div> <!-- footer widget -->
            <div class="footer-copyright">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright d-sm-flex justify-content-between">
                            <div class="copyright-content">
                                <p class="text">Designed and Developed by <a href="https://uideck.com"
                                        rel="nofollow">UIdeck</a></p>
                            </div> <!-- copyright content -->
                        </div> <!-- copyright -->
                    </div>
                </div> <!-- row -->
            </div> <!-- footer copyright -->
        </div> <!-- container -->
        <div id="particles-2"></div>
    </footer>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== PART START ======-->

    <!--
        <section class="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-"></div>
                </div>
            </div>
        </section>
    -->

    <!--====== PART ENDS ======-->

    <!--====== Jquery js ======-->
    <script src="{{ asset('frontend/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/modernizr-3.7.1.min.js') }}"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>

    <!--====== Plugins js ======-->
    <script src="{{ asset('frontend/assets/js/plugins.js') }}"></script>

    <!--====== Slick js ======-->
    <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>

    <!--====== Ajax Contact js ======-->
    <script src="{{ asset('frontend/assets/js/ajax-contact.js') }}"></script>

    <!--====== Counter Up js ======-->
    <script src="{{ asset('frontend/assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>

    <!--====== Magnific Popup js ======-->
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="{{ asset('frontend/assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/scrolling-nav.js') }}"></script>

    <!--====== wow js ======-->
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>

    <!--====== Particles js ======-->
    <script src="{{ asset('frontend/assets/js/particles.min.js') }}"></script>

    <!--====== Main js ======-->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

</body>

</html>
