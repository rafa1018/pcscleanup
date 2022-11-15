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

    @yield('headers')

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- notifications css -->
    <link rel="stylesheet" href="{{ asset('assets/notifications/css/lobibox.min.css') }}" />

</head>

<body>


    <!-- preloader  -->
    @include('layouts.partials.loader')
    <!-- preloader end -->

    <!-- header start -->
    @include('layouts.partials.header')
    <!-- header end -->
    @include('layouts.notificacion')
    @yield('content')



    <!-- footer area start -->
    @include('layouts.partials.footer-v1')
    <!-- footer area end -->

    <!-- extra info start -->
    @include('layouts.partials.extraInfo')
    <!-- extra info end -->


        {{-- toastr  funciona --}}
        <link href="{{ asset('assets/libs/toastr/toastr.min.css') }}" rel="stylesheet" />
        <script src="{{ asset('assets/libs/toastr/toastr.min.js') }}"></script>

        <script>
             toastr.options = {
                "progressBar": true,
                "showDuration": "2000",
                "closeButton": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
            }
        </script>

        {{-- sweet alert --}}
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <!--notification js -->
        <script src="{{ asset('assets/notifications/js/lobibox.min.js') }}"></script>
        <script src="{{ asset('assets/notifications/js/notifications.min.js') }}"></script>
        @if (Session::has('sweetAlert_error'))
            <script>
                swal.fire({
                    title: 'Oops...',
                    text: '{{ Session::get('sweetAlert_error') }}',
                    icon: 'error',
                    buttons: false,
                    timer: 3500,
                    showCancelButton: false,
                    showConfirmButton: false,
                });
            </script>
        @endif





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


    @yield('scripts')


</body>

</html>
