    @extends('layouts.principal')


    @section('content')
    <!-- breadcrumb area start -->
    <section class="breadcrumb-area pt-140 pb-140 bg_img" data-overlay="5"
        data-background="assets/images/bg/breadcrumb-bg.jpeg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb-text">
                        <h1 class="breadcrumb-title">Our Services</h1>
                        <p><span>Welcome</span> to our cleaning company</p>
                    </div>
                </div>
                <div class="col-lg-6 my-auto">
                    <div class="breadcrumb-nav">
                        <ul>
                            <li><a href="{{route('welcome')}}">Home</a></li>
                            <li>|</li>
                            <li>Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- Service area start -->
    <div class="service-box-area service-box-area-2 pt-120 pb-120">
        <div class="container">
            <div class="row mt-none-30 justify-content-center">
                <div class="col-xl-4 col-lg-6 col-md-10 mt-30">
                    <div class="single-service-box">
                        <div class="service-thumb">
                            <img src="{{asset('/img/services/healthcare-environmental-services.jpg')}}" alt="">
                        </div>
                        <div class="service-content">
                            <h3 class="service-title"><a href="#">Healthcare Environmental</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-10 mt-30">
                    <div class="single-service-box">
                        <div class="service-thumb">
                            <img src="{{asset('img/services/industrial-cleaning.jpg')}}" alt="">
                        </div>
                        <div class="service-content">
                            <h3 class="service-title"><a href="#">Industrial Cleaning</a></h3>
                            </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-10 mt-30">
                    <div class="single-service-box">
                        <div class="service-thumb">
                            <img src="{{asset('img/services/office-building-cleaning.jpg')}}" alt="">
                        </div>
                        <div class="service-content">
                            <h3 class="service-title"><a href="#">Office Building Cleaning</a></h3>
                            </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-10 mt-30">
                    <div class="single-service-box">
                        <div class="service-thumb">
                            <img src="{{asset('img/services/event-center-cleaning.jpg')}}" alt="">
                        </div>
                        <div class="service-content">
                            <h3 class="service-title"><a href="#">Event Center Cleaning</a></h3>
                            </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-10 mt-30">
                    <div class="single-service-box">
                        <div class="service-thumb">
                            <img src="{{asset('img/services/education-cleaning.jpg')}}" alt="">
                        </div>
                        <div class="service-content">
                            <h3 class="service-title"><a href="#">Education Cleaning</a></h3>
                            </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-10 mt-30">
                    <div class="single-service-box">
                        <div class="service-thumb">
                            <img src="{{asset('img/services/hospitality-cleaning.jpg')}}" alt="">
                        </div>
                        <div class="service-content">
                            <h3 class="service-title"><a href="#">Hospital Cleaning</a></h3>
                            </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-10 mt-30">
                    <div class="single-service-box">
                        <div class="service-thumb">
                            <img src="{{asset('img/services/residential-floor-cleaning.jpg')}}" alt="">
                        </div>
                        <div class="service-content">
                            <h3 class="service-title"><a href="#">Commercial Floor Cleaning</a></h3>
                            </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-10 mt-30">
                    <div class="single-service-box">
                        <div class="service-thumb">
                            <img src="{{asset('img/services/religious-building-cleaning.jpg')}}" alt="">
                        </div>
                        <div class="service-content">
                            <h3 class="service-title"><a href="#">Religious Building Cleaning</a></h3>
                            </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-10 mt-30">
                    <div class="single-service-box">
                        <div class="service-thumb">
                            <img src="{{asset('img/services/government-building-cleaning.jpg')}}" alt="">
                        </div>
                        <div class="service-content">
                            <h3 class="service-title"><a href="#">Government Building Cleaning</a></h3>
                            </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-10 mt-30">
                    <div class="single-service-box">
                        <div class="service-thumb">
                            <img src="{{asset('img/services/recreation-and-shopping-cleaning.jpg')}}" alt="">
                        </div>
                        <div class="service-content">
                            <h3 class="service-title"><a href="#">Recreation And Shooping Cleaning</a></h3>
                            </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-10 mt-30">
                    <div class="single-service-box">
                        <div class="service-thumb">
                            <img src="{{asset('img/services/banks-and-financial-institutions-cleaning.jpg')}}" alt="">
                        </div>
                        <div class="service-content">
                            <h3 class="service-title"><a href="#">Banks and Financial Institutions Cleaning</a></h3>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service area end -->

    <!-- cta area start -->
    <section class="cta-area cta-area-2 cta-area-3 pt-120 pb-120 bg_img" data-background="assets/images/bg/cta-2-bg-1.jpeg">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-5">
                    <div class="cta-wrap">
                        <div class="section-heading section-heading-2 mb-50">
                            <h5 class="sub-title mb-22">Call To Action</h5>
                            <h2 class="section-title">Get an emergency call
                                or appoinment.</h2>
                        </div>

                       @include('layouts.partials.form-correo')


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cta area end -->



    <!-- brand area start -->
   @include('layouts.partials.brand')
    <!-- brand area end -->

    <!-- footer-top box start -->
    @include('layouts.partials.footer-top')
    <!-- footer-top box end -->



@endsection
