@extends('layouts.principal')


@section('content')

    <!-- slide area start -->
    @include('layouts.partials.slider-v1')
    <!-- slide area end -->
    

     <!-- about area start -->
 <section class="about-area about-area-2 pt-120 pb-260">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="about-left-side about-left-side-2">
                    <div class="about-thumb-big" data-tilt data-tilt-perspective="3000">
                        <img src="{{asset('assets/images/about/about-2-thumb-1.jpeg')}}" alt="">
                    </div>
                    <div class="about-thumb-mid">
                        <div class="about-thumb-mid-wrap" data-tilt data-tilt-perspective="3000">
                            <img src="{{asset('assets/images/about/about-2-thumb-3.jpeg')}}" alt="">
                        </div>
                        <div class="about-thumb-box">
                            <h2 class="title"><span class="odometer" data-count="{{$data['experiencia']}}">00</span><span class="plus">+</span>
                                <span class="year">Years Of Experience</span></h2>
                        </div>
                    </div>
                    <div class="about-thumb-sml" data-tilt data-tilt-perspective="3000">
                        <img src="{{asset('assets/images/about/about-2-thumb-2.jpeg')}}" alt="">
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
                            <p>Professional Cleaning Services is a company of highly qualified professional cleaning services registered in South Florida, with a consolidated market in our area. We are fully licensed, bonded and insured for your peace of mind. We offer competitive hourly and contratact rates and are also available for event clean-up services. Trust P.C.S for quality janitorial services. Let us clean your commercial location today.</p>
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
                                That's why our experts are always following strict custom-tailored checklists and making sure every household
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

    <!-- service area start 
    <section class="service-area pt-120 bg-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12">
                    <div class="service-heading-box">
                        <div class="row">
                            <div class="col-xl-4 col-lg-5">
                                <div class="section-heading white">
                                    <div class="section-heading-top mb-20">
                                        <img src="assets/images/icons/section-icon-2.png" alt="">
                                        <h5 class="sub-title"><span>02</span> Services</h5>
                                    </div>
                                    <h2 class="section-title">What We Do</h2>
                                </div>
                            </div>
                            <div class="col-xl-6 offset-xl-2 col-lg-7">
                                <div class="service-section-content">
                                    <p>Cleanixer champions professionalism in the cleaning industry by
                                        providing top-quality cleaning and related services that meet
                                        and exceed the expectations of today’s demanding corporate,
                                        office, industrial and warehouse clients…</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="service-box-area pb-50">
            <div class="container">
                <div class="row justify-content-center mt-none-225">
                    <div class="col-xl-4 col-lg-8 col-md-10 mt-30">
                        <div class="single-service-box">
                            <div class="service-thumb">
                                <img src="assets/images/service/service-1-thumb-1.jpeg" alt="">
                            </div>
                            <div class="service-content">
                                <span class="service-price">$500 - $1200</span>
                                <h3 class="service-title"><a href="service-details.html">Office Cleaning</a></h3>
                                <span class="service-icon">
                                    <img src="assets/images/icons/service-icon-1.png" alt="">
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-8 col-md-10 mt-30">
                        <div class="single-service-box">
                            <div class="service-thumb">
                                <img src="assets/images/service/service-1-thumb-2.jpeg" alt="">
                            </div>
                            <div class="service-content">
                                <span class="service-price">$500 - $1200</span>
                                <h3 class="service-title"><a href="service-details.html">Property Cleaning</a></h3>
                                <span class="service-icon">
                                    <img src="assets/images/icons/service-icon-2.png" alt="">
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-8 col-md-10 mt-30">
                        <div class="single-service-box">
                            <div class="service-thumb">
                                <img src="assets/images/service/service-1-thumb-3.jpeg" alt="">
                            </div>
                            <div class="service-content">
                                <span class="service-price">$500 - $1200</span>
                                <h3 class="service-title"><a href="service-details.html">Park & Road Cleaning</a></h3>
                                <span class="service-icon">
                                    <img src="assets/images/icons/service-icon-3.png" alt="">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-7 text-center">
                        <div class="service-note mt-50">
                            <p>Stop wasting time and money on Cleaning. <a href="contact.html">Make An Appointment</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    service area end -->

    <!-- get-quote area start 
    <section class="get-quote-area pt-120 pb-170">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="get-quote-left-side">
                        <div class="get-quote-thumb-big" data-tilt data-tilt-perspective="3000">
                            <img src="assets/images/bg/get-quote-1-big.jpeg" alt="">
                            <div class="get-quote-icon-box">
                                <img src="assets/images/icons/section-icon-4.png" alt="">
                            </div>
                        </div>
                        <div class="get-quote-thumb-small" data-tilt data-tilt-perspective="3000">
                            <img src="assets/images/bg/get-quote-1-small.jpeg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="get-quote-right-side pl-30">
                        <div class="section-heading mb-40">
                            <div class="section-heading-top mb-20">
                                <img src="assets/images/icons/section-icon-3.png" alt="">
                                <h5 class="sub-title"><span>03</span> Get A Quote</h5>
                            </div>
                            <h2 class="section-title">Get Every Answers
                            From Here</h2>
                            <div class="section-content">
                                <p>We provide janitorial and specialized cleaning services for
                                all types and sizes of complexes</p>
                            </div>
                        </div>
                        <p>We provide janitorial and specialized cleaning services for all types and sizes of complexes – from small to large
                        offices and commercial centers to industrial, warehouse, and retail locations. Our client base is comprised of both
                        privately-owned companies and public organizations (e.g., municipalities, police departments, libraries), ranging from
                        facilities of a few hundred square feet to hundreds of thousands of square feet.</p>
                        <div class="get-quote-btns mt-40">
                            <a href="tel:9878768768765" class="site-btn">+987 876 876 87 65 <span class="icon"><i class="fal fa-phone"></i></span></a>
                            <a href="#0" class="site-btn transparent">Make Call &amp; Get Information</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    get-quote area end -->

    <!-- process area start
    <section class="process-area bg-2 pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 text-center">
                    <div class="section-heading mb-65">
                        <div class="section-heading-top justify-content-center mb-20">
                            <img src="assets/images/icons/section-icon-5.png" alt="">
                            <h5 class="sub-title"><span>04</span> Process</h5>
                        </div>
                        <h2 class="section-title">How It Works</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-none-30">
                <div class="col-xl-4 col-lg-6 col-md-10 mt-30 text-center">
                    <div class="single-process-box">
                        <div class="process-box-content">
                            <a href="service.html" class="inline-btn">Get In Touch <i class="fal fa-arrow-right"></i></a>
                            <h2 class="process-box-title">Account & Check In</h2>
                            <p>We provide janitorial and specialized cleaning services for all types and
                                sizes of complexes.</p>
                        </div>
                        <div class="process-box-icon">
                            <img src="assets/images/icons/hiw-icon-1.png" alt="">
                        </div>
                        <span class="count">01</span>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-10 mt-30 text-center">
                    <div class="single-process-box active">
                        <div class="process-box-content">
                            <a href="service.html" class="inline-btn">Get In Touch <i class="fal fa-arrow-right"></i></a>
                            <h2 class="process-box-title">Choose Category</h2>
                            <p>We provide janitorial and specialized cleaning services for all types and
                                sizes of complexes.</p>
                        </div>
                        <div class="process-box-icon">
                            <img src="assets/images/icons/hiw-icon-2.png" alt="">
                        </div>
                        <span class="count">02</span>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-10 mt-30 text-center">
                    <div class="single-process-box">
                        <div class="process-box-content">
                            <a href="service.html" class="inline-btn">Get In Touch <i class="fal fa-arrow-right"></i></a>
                            <h2 class="process-box-title">Get Clean Property</h2>
                            <p>We provide janitorial and specialized cleaning services for all types and
                                sizes of complexes.</p>
                        </div>
                        <div class="process-box-icon">
                            <img src="assets/images/icons/hiw-icon-3.png" alt="">
                        </div>
                        <span class="count">03</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
     process area end -->

    <!-- appointment area start 
    <section class="appointment-area pt-120 pb-120 bg_img" data-overlay="6" data-background="assets/images/bg/contact-1-bg.jpeg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-heading white mb-60">
                        <div class="section-heading-top">
                            <h5 class="sub-title">Make Appointment</h5>
                        </div>
                        <h2 class="section-title">Make An Appointment</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="appointment-form">
                        <form action="index.html">
                            <div class="row mt-none-30">
                                <div class="col-xl-4 col-lg-6 mt-30">
                                    <div class="form-group">
                                        <label for="name"><i class="fal fa-user"></i></label>
                                        <input type="text" id="name" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 mt-30">
                                    <div class="form-group">
                                        <label for="email"><i class="fal fa-envelope"></i></label>
                                        <input type="email" id="email" placeholder="Enter your email">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 mt-30">
                                    <div class="form-group">
                                        <label for="tel"><i class="fal fa-phone"></i></label>
                                        <input type="tel" id="tel" placeholder="Enter your phone">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 mt-30">
                                    <div class="form-group">
                                        <label for="address"><i class="fal fa-map-marker"></i></label>
                                        <input type="text" id="address" placeholder="Office/Property address">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 mt-30">
                                    <div class="form-group">
                                        <label for="cat"><i class="fal fa-arrow-down"></i></label>
                                        <input type="text" id="cat" placeholder="Select Category">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 mt-30">
                                    <div class="form-group">
                                        <label for="date"><i class="fal fa-calendar-alt"></i></label>
                                        <input type="date" id="date">
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-xl-4 col-lg-6 mt-30 text-center">
                                    <button type="submit" class="site-btn">Confirm Appointment <span class="icon yellow"><i class="fal fa-calendar-alt"></i></span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
     appointment area end -->

    <!-- projects area start 
    <section class="project-area pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 text-center">
                    <div class="section-heading mb-80">
                        <div class="section-heading-top mb-20 justify-content-center">
                            <img src="assets/images/icons/section-icon-6.png" alt="">
                            <h5 class="sub-title"><span>05</span> Portfolio</h5>
                        </div>
                        <h2 class="section-title">Introduce Our Projects</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="project-carousel owl-carousel">
            <div class="singel-project-item">
                <div class="project-thumb" data-overlay="5">
                    <img src="assets/images/service/project-1-thumb-2.jpeg" alt="">
                </div>
                <div class="project-content">
                    <h4 class="sub-title">Floor Cleaning</h4>
                    <h2 class="project-title">Romada House Cleaning</h2>
                    <a href="assets/images/service/project-1-thumb-2.jpeg" data-rel="lightcase:myCollection" class="project-icon">
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="singel-project-item">
                <div class="project-thumb" data-overlay="5">
                    <img src="assets/images/service/project-1-thumb-3.jpeg" alt="">
                </div>
                <div class="project-content">
                    <h4 class="sub-title">Floor Cleaning</h4>
                    <h2 class="project-title">Romada House Cleaning</h2>
                    <a href="assets/images/service/project-1-thumb-3.jpeg" data-rel="lightcase:myCollection" class="project-icon">
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="singel-project-item">
                <div class="project-thumb" data-overlay="5">
                    <img src="assets/images/service/project-1-thumb-4.jpeg" alt="">
                </div>
                <div class="project-content">
                    <h4 class="sub-title">Floor Cleaning</h4>
                    <h2 class="project-title">Romada House Cleaning</h2>
                    <a href="assets/images/service/project-1-thumb-4.jpeg" data-rel="lightcase:myCollection" class="project-icon">
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="singel-project-item">
                <div class="project-thumb" data-overlay="5">
                    <img src="assets/images/service/project-1-thumb-2.jpeg" alt="">
                </div>
                <div class="project-content">
                    <h4 class="sub-title">Floor Cleaning</h4>
                    <h2 class="project-title">Romada House Cleaning</h2>
                    <a href="assets/images/service/project-1-thumb-2.jpeg" data-rel="lightcase:myCollection" class="project-icon">
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="singel-project-item">
                <div class="project-thumb" data-overlay="5">
                    <img src="assets/images/service/project-1-thumb-3.jpeg" alt="">
                </div>
                <div class="project-content">
                    <h4 class="sub-title">Floor Cleaning</h4>
                    <h2 class="project-title">Romada House Cleaning</h2>
                    <a href="assets/images/service/project-1-thumb-3.jpeg" data-rel="lightcase:myCollection" class="project-icon">
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
     projects area end -->

    <!-- brand area start
    <div class="sponser-area pb-100">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-12">
                    <div class="brand-carousel owl-carousel">
                        <div class="singel-brand-item">
                            <img src="assets/images/brand/brand-1.png" alt="">
                        </div>
                        <div class="singel-brand-item">
                            <img src="assets/images/brand/brand-2.png" alt="">
                        </div>
                        <div class="singel-brand-item">
                            <img src="assets/images/brand/brand-3.png" alt="">
                        </div>
                        <div class="singel-brand-item">
                            <img src="assets/images/brand/brand-4.png" alt="">
                        </div>
                        <div class="singel-brand-item">
                            <img src="assets/images/brand/brand-5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     brand area end -->

    <!-- newslater area start 
    <section class="newslater-area bg-3 pt-120 pb-120">
        <span class="newslater-shape">
            <img src="assets/images/shapes/newslater-hand-shape.png" alt="">
        </span>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-5">
                    <div class="section-heading white">
                        <div class="section-heading-top">
                            <img src="assets/images/icons/newslater-section-icon.png" alt="">
                        </div>
                        <div class="text">
                            <h5 class="sub-title"><span>06</span> Newsletter</h5>
                            <h2 class="section-title">Get Newsletter</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <div class="newslater-form">
                        <form action="index.html">
                            <input type="email" placeholder="Enter email address....">
                            <button type="submit" class="site-btn boxed">Subscribe Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
     newslater area end -->

    <!-- testimonial area start 
    <section class="testimonial-area pt-120 pb-160 bg_img" data-background="assets/images/bg/testimonial-1-bg-1.jpeg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 text-center">
                    <div class="section-heading mb-80">
                        <div class="section-heading-top mb-20 justify-content-center">
                            <img src="assets/images/icons/section-icon-6.png" alt="">
                            <h5 class="sub-title"><span>07</span> Testimonials</h5>
                        </div>
                        <h2 class="section-title">What Our Customers Say</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testimonial-carousel owl-carousel">
                        <div class="single-testimonial">
                            <div class="thumb">
                                <img src="assets/images/testimonial/testiimonial-1-author-1.png" alt="">
                                <span class="icon"><i class="fal fa-check"></i></span>
                            </div>
                            <div class="content">
                                <span class="author-logo mb-25"><img src="assets/images/testimonial/testiimonial-1-logo-1.png" alt=""></span>
                                <p>“ Clinixer has performed exceptionally well. … Management staff makes frequent site visits to
                                check the veracity of their performance. When additional services (they do much more than
                                just clean, they do maintenance, too) or adjustments to cleaning regimens were needed they
                                were quick to tackle or amend changes with success ”</p>
                                <div class="testimonial-meta mt-20">
                                    <h2 class="name">Rosalina D. William <span class="designation">Founder, Miranda Logistics Co.</span></h2>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial">
                            <div class="thumb">
                                <img src="assets/images/testimonial/testiimonial-1-author-1.png" alt="">
                                <span class="icon"><i class="fal fa-check"></i></span>
                            </div>
                            <div class="content">
                                <span class="author-logo mb-25"><img src="assets/images/testimonial/testiimonial-1-logo-1.png" alt=""></span>
                                <p>“ Clinixer has performed exceptionally well. … Management staff makes frequent site visits to
                                    check the veracity of their performance. When additional services (they do much more than
                                    just clean, they do maintenance, too) or adjustments to cleaning regimens were needed they
                                    were quick to tackle or amend changes with success ”</p>
                                <div class="testimonial-meta mt-20">
                                    <h2 class="name">Rosalina D. William <span class="designation">Founder, Miranda Logistics Co.</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    testimonial area end -->

     <!-- footer-top box start 
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
     footer-top box end -->
@endsection