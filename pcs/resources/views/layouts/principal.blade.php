<!doctype html>
<html class="no-js" lang="es">

<head>

    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>PCSCLEANUP - Professional Cleaning Services</title>

    <!--====== Favicon ======-->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}" type="images/x-icon" />

    <!--====== CSS Here ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

</head>

<body>


    <!-- preloader  -->
    @include('layouts.partials.loader')
    <!-- preloader end -->

    <!-- header start -->
    @include('layouts.partials.header')
    <!-- header end -->

    @yield('content')

    <!-- footer-top box start -->
    <section class="footer-top-box-area">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-xl-6">
                    <div class="footer-top-box d-flex align-items-center left">
                        <div class="footer-box-icon">
                            <img src="{{ asset('assets/images/icons/track-icon.png') }}" alt="">
                        </div>
                        <div class="footer-box-content">
                            <h2 class="footer-box-title">Track Your Area</h2>
                            <p>We provide janitorial and specialized cleaning services for all typ es and sizes of
                                complexes from small to large
                                offices.</p>
                            <a href="contact.html" class="inline-btn"><i class="fal fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="footer-top-box d-flex align-items-center right">
                        <div class="footer-box-icon">
                            <img src="{{ asset('assets/images/icons/estimate-icon.png') }}" alt="">
                        </div>
                        <div class="footer-box-content">
                            <h2 class="footer-box-title">Request An Estimate</h2>
                            <p>We provide janitorial and specialized cleaning services for all typ es and sizes of
                                complexes from small to large
                                offices.</p>
                            <a href="contact.html" class="inline-btn"><i class="fal fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer-top box end -->

    <!-- footer area start -->
    @include('layouts.partials.footer-v1')
    <!-- footer area end -->

    <!-- extra info start -->
    @include('layouts.partials.extraInfo')
    <!-- extra info end -->

    <!--========= JS Here =========-->
    <script src="{{ asset('assets/js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('assets/js/lightcase.js') }}"></script>
    <script src="{{ asset('assets/js/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/sticky-header.js') }}"></script>
    <script src="{{ asset('assets/js/waypoint.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/tilt.jquery.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIJ_QKHN-bi6_1C9f5eYE3pZs1zhQIo5o"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
