@extends('layouts.principal')


@section('content')
    <!-- slide area start -->
    @include('layouts.partials.slider-v1')
    <!-- slide area end -->


    <!-- about area start -->
    <section class="about-area about-area-2 pt-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="about-left-side about-left-side-2">
                        <div class="about-thumb-big" data-tilt data-tilt-perspective="3000">
                            <img src="{{ asset('assets/images/about/about-2-thumb-1.jpeg') }}" alt="">
                        </div>
                        <div class="about-thumb-mid">
                            <div class="about-thumb-mid-wrap" data-tilt data-tilt-perspective="3000">
                                <img src="{{ asset('assets/images/about/about-2-thumb-3.jpeg') }}" alt="">
                            </div>
                            <div class="about-thumb-box">
                            <h2 class="title"><span class="odometer" data-count="{{$data['experiencia']}}">00</span><span class="plus">+</span>
                                            <span class="year">Years Of Experience</span></h2>
                                </div>
                            </div>
                            <div class="about-thumb-sml" data-tilt data-tilt-perspective="3000">
                                <img src="{{ asset('assets/images/about/about-2-thumb-2.jpeg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="about-right-side about-right-side-2">
                            <div class="section-heading section-heading-2 mb-45">
                                <h5 class="sub-title mb-22">About us</h5>
                                <h2 class="title">Experiences on cleaning
                                    area with successful
                                    project on going.</h2>
                            </div>
                            <div class="about-list-wrapper">
                                <div class="content">
                                    <p>Professional Cleaning Services is a company of highly qualified professional cleaning
                                        services registered in South Florida, with a consolidated market in our area. We are
                                        fully licensed, bonded and insured for your peace of mind. We offer competitive hourly
                                        and contratact rates and are also available for event clean-up services. Trust P.C.S for
                                        quality janitorial services. Let us clean your commercial location today.</p>
                                </div>
                                <div class="about-list about-list-2 mt-none-20">
                                    <div class="single-item d-flex align-items-center mt-20">
                                        <div class="icon">
                                            <i class="fal fa-washer"></i>
                                        </div>
                                        <span>Experienced team</span>
                                    </div>
                                    <div class="single-item d-flex align-items-center mt-20">
                                        <div class="icon">
                                            <i class="fal fa-vacuum-robot"></i>
                                        </div>
                                        <span>Weekly or fortnightly</span>
                                    </div>
                                    <div class="single-item d-flex align-items-center mt-20">
                                        <div class="icon">
                                            <i class="fal fa-vacuum"></i>
                                        </div>
                                        <span>All in all service</span>
                                    </div>
                                    <div class="single-item d-flex align-items-center mt-20">
                                        <div class="icon">
                                            <i class="fal fa-broom"></i>
                                        </div>
                                        <span>Book, manage &amp; pay</span>
                                    </div>
                                </div>
                                <div class="about-list-author mt-40">
                                    <p>We know how important it is to provide the best possible cleaning service.
                                        That's why our experts are always following strict custom-tailored checklists and making
                                        sure every household
                                        receives high quality cleaning at an affordable price!</p>
                                    <h5 class="name">Madid Pedraza <span class="designation">Founder</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about area end -->

        <!-- projects area start -->
        <section class="project-area pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 text-center">
                        <div class="section-heading mb-80">
                            <div class="section-heading-top mb-20 justify-content-center">
                                <img src="assets/images/icons/section-icon-6.png" alt="">
                                <h3 class="sub-title">Services</h3>
                            </div>
                            <h2 class="section-title">What We Do</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-carousel owl-carousel">
                <div class="singel-project-item">
                    <div class="project-thumb" data-overlay="5">
                        <img src="{{ asset('img/services/healthcare-environmental-services.jpg') }}" alt="">
                    </div>
                    <div class="project-content">
                        <h4 class="sub-title">Service</h4>
                        <h2 class="project-title">HEALTHCARE ENVIRONMENTAL SERVICES</h2>
                        <a href="{{ asset('img/services/healthcare-environmental-services.jpg') }}"
                            data-rel="lightcase:myCollection" class="project-icon">
                            <i class="fal fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="singel-project-item">
                    <div class="project-thumb" data-overlay="5">
                        <img src="img/services/industrial-cleaning.jpg" alt="">
                    </div>
                    <div class="project-content">
                        <h4 class="sub-title">Service</h4>
                        <h2 class="project-title">INDUSTRIAL CLEANING</h2>
                        <a href="img/services/industrial-cleaning.jpg" data-rel="lightcase:myCollection" class="project-icon">
                            <i class="fal fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="singel-project-item">
                    <div class="project-thumb" data-overlay="5">
                        <img src="img/services/office-building-cleaning.jpg" alt="">
                    </div>
                    <div class="project-content">
                        <h4 class="sub-title">Service</h4>
                        <h2 class="project-title">OFFICE BUILDING CLEANING</h2>
                        <a href="img/services/office-building-cleaning.jpg" data-rel="lightcase:myCollection"
                            class="project-icon">
                            <i class="fal fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="singel-project-item">
                    <div class="project-thumb" data-overlay="5">
                        <img src="img/services/event-center-cleaning.jpg" alt="">
                    </div>
                    <div class="project-content">
                        <h4 class="sub-title">Service</h4>
                        <h2 class="project-title">EVENT CENTER CLEANING</h2>
                        <a href="img/services/event-center-cleaning.jpg" data-rel="lightcase:myCollection"
                            class="project-icon">
                            <i class="fal fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="singel-project-item">
                    <div class="project-thumb" data-overlay="5">
                        <img src="img/services/education-cleaning.jpg" alt="">
                    </div>
                    <div class="project-content">
                        <h4 class="sub-title">Service</h4>
                        <h2 class="project-title">EDUCATION CLEANING</h2>
                        <a href="img/services/education-cleaning.jpg" data-rel="lightcase:myCollection" class="project-icon">
                            <i class="fal fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="singel-project-item">
                    <div class="project-thumb" data-overlay="5">
                        <img src="img/services/hospitality-cleaning.jpg" alt="">
                    </div>
                    <div class="project-content">
                        <h4 class="sub-title">Service</h4>
                        <h2 class="project-title">HOSPITAL CLEANING</h2>
                        <a href="img/services/hospitality-cleaning.jpg" data-rel="lightcase:myCollection"
                            class="project-icon">
                            <i class="fal fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="singel-project-item">
                    <div class="project-thumb" data-overlay="5">
                        <img src="img/services/residential-floor-cleaning.jpg" alt="">
                    </div>
                    <div class="project-content">
                        <h4 class="sub-title">Service</h4>
                        <h2 class="project-title">COMMERCIAL FLOOR CLEANING</h2>
                        <a href="img/services/residential-floor-cleaning.jpg" data-rel="lightcase:myCollection"
                            class="project-icon">
                            <i class="fal fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="singel-project-item">
                    <div class="project-thumb" data-overlay="5">
                        <img src="img/services/religious-building-cleaning.jpg" alt="">
                    </div>
                    <div class="project-content">
                        <h4 class="sub-title">Service</h4>
                        <h2 class="project-title">RELIGIOS BUILDING CLEANING</h2>
                        <a href="img/services/religious-building-cleaning.jpg" data-rel="lightcase:myCollection"
                            class="project-icon">
                            <i class="fal fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="singel-project-item">
                    <div class="project-thumb" data-overlay="5">
                        <img src="img/services/government-building-cleaning.jpg" alt="">
                    </div>
                    <div class="project-content">
                        <h4 class="sub-title">Service</h4>
                        <h2 class="project-title">GOVERNMENT BUILDING CLEANING</h2>
                        <a href="img/services/government-building-cleaning.jpg" data-rel="lightcase:myCollection"
                            class="project-icon">
                            <i class="fal fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="singel-project-item">
                    <div class="project-thumb" data-overlay="5">
                        <img src="img/services/recreation-and-shopping-cleaning.jpg" alt="">
                    </div>
                    <div class="project-content">
                        <h4 class="sub-title">Service</h4>
                        <h2 class="project-title">RECREATION AND SHOPPING CLEANING</h2>
                        <a href="img/services/recreation-and-shopping-cleaning.jpg" data-rel="lightcase:myCollection"
                            class="project-icon">
                            <i class="fal fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="singel-project-item">
                    <div class="project-thumb" data-overlay="5">
                        <img src="img/services/banks-and-financial-institutions-cleaning.jpg" alt="">
                    </div>
                    <div class="project-content">
                        <h4 class="sub-title">Service</h4>
                        <h2 class="project-title">BANKS AND FINANCIAL INSTITUTIONS CLEANING</h2>
                        <a href="img/services/banks-and-financial-institutions-cleaning.jpg" data-rel="lightcase:myCollection"
                            class="project-icon">
                            <i class="fal fa-arrow-right"></i>
                        </a>
                    </div>
                </div>



            </div>
        </section>
        <!-- projects area end -->

        <!-- wcu-area start -->
        <section class="wcu-area pt-120 pb-165">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="wcu-left mt-70">
                            <div class="section-heading section-heading-2 mb-85 pr-35">
                                <h5 class="sub-title mb-22">Why Choose us</h5>
                                <h2 class="section-title">We Will Make Absolutely
                                    Any Place Clean, Neat.</h2>
                                <div class="content mt-35">
                                    <p>We invest highly in our exceptional cleaning staff which is returned by loyalty,
                                        enthusiasm and the motivation to produce excellent cleaning standards for you, your home
                                        and your business.</p>
                                </div>
                            </div>
                            <div class="wcu-box-wrapper mt-none-40">
                                <div class="wcu-box mt-40 d-flex align-items-center">
                                    <div class="wcu-content-new">
                                        <h4 class="wcu-title">Client service</h4>
                                        <p>We’re committed to delivering an excellent client experience from start to
                                            finish—from our helpful customer service staff and quick
                                            response to our 24/7 availability, quality commercial cleaning service, and client
                                            communication app.</p>
                                    </div>
                                </div>
                                <div class="wcu-box mt-40 d-flex align-items-center">
                                    <div class="wcu-content-new">
                                        <h4 class="wcu-title">Trusted cleaners</h4>
                                        <p>All our cleaners are friendly, experienced and fully trained in cleaning, health,
                                            safety, security and so on. We also screen our cleaners to make sure they meet our
                                            strict employment, safety and security standards. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="wcu-right">
                            <div class="row mt-none-30">
                                <div class="col-md-6 mt-30">
                                    <div class="wcu-thumb-box" data-tilt data-tilt-perspective="3000">
                                        <img src="assets/images/service/wcu-1-thumb-1.jpeg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 mt-60">
                                    <div class="wcu-thumb-box" data-tilt data-tilt-perspective="3000">
                                        <img src="assets/images/service/wcu-1-thumb-2.jpeg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 mt-0">
                                    <div class="wcu-thumb-box" data-tilt data-tilt-perspective="3000">
                                        <img src="assets/images/service/wcu-1-thumb-3.jpeg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 mt-30">
                                    <div class="wcu-thumb-box" data-tilt data-tilt-perspective="3000">
                                        <img src="assets/images/service/wcu-1-thumb-4.jpeg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- wcu-area end -->

        <!-- cta area start -->
        <section class="cta-area cta-area-2 pt-120 pb-120">
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

        <!-- testimonial area start -->
        <section class="testimonial-area pt-120 pb-160 bg_img" data-background="assets/images/bg/testimonial-1-bg-1.jpeg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10 text-center">
                        <div class="section-heading mb-80">

                            <h2 class="section-title">What Our Customers Say</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="testimonial-carousel owl-carousel">
                            <div class="single-testimonial">
                                <div class="thumb">
                                    <img src="assets/images/testimonial/testiimonial-1-author-3.png" alt=""
                                        width="70%">
                                    <span class="icon"><i class="fal fa-check"></i></span>
                                </div>
                                <div class="content">
                                    <p>“ Wonderful experience using PCSCleanup Services; I am extremely happy with the service
                                        they provide.
                                        They service both our commercial and residential facilities and they have been doing a
                                        great job on keeping both facilities spotless. We highly recommend this company.”</p>
                                    <div class="testimonial-meta mt-20">
                                        <h2 class="name">María William.</span></h2>
                                    </div>
                                </div>
                            </div>

                            <div class="single-testimonial">
                                <div class="thumb">
                                    <img src="assets/images/testimonial/testiimonial-1-author-4.png">
                                    <span class="icon"><i class="fal fa-check"></i></span>
                                </div>
                                <div class="content">
                                    <p>“ This proprietorship really uses elbow grease when cleaning…they do so much more than
                                        simple surface cleaning. Moreover, PCS tries to satisfy each particular individual need
                                        and/or desire.”</p>
                                    <div class="testimonial-meta mt-20">
                                        <h2 class="name">Christopher W.</span></h2>
                                    </div>
                                </div>
                            </div>

                            <div class="single-testimonial">
                                <div class="thumb">
                                    <img src="assets/images/testimonial/testiimonial-1-author-2.png" alt="">
                                    <span class="icon"><i class="fal fa-check"></i></span>
                                </div>
                                <div class="content">
                                    <p>“It was wonderful to have our new condo cleaned so thoroughly by truly hard-working and
                                        personable professionals.”</p>
                                    <div class="testimonial-meta mt-20">
                                        <h2 class="name">Rosa Brown</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial area end -->


        <!-- footer-top box start -->
        @include('layouts.partials.footer-top')
        <!-- footer-top box end -->
    @endsection
