@extends('layouts.principal')


@section('content')
    <!-- breadcrumb area start -->
    <section class="breadcrumb-area pt-140 pb-140 bg_img" data-overlay="5"
        data-background="assets/images/bg/breadcrumb-bg.jpeg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb-text">
                        <h1 class="breadcrumb-title">Our Team</h1>
                        <p><span>Welcome</span> to our cleaning company</p>
                    </div>
                </div>
                <div class="col-lg-6 my-auto">
                    <div class="breadcrumb-nav">
                        <ul>
                            <li><a href="{{route('welcome')}}">Home</a></li>
                            <li>|</li>
                            <li>Team</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- team area start -->
 @include('layouts.partials.teams')
    <!-- team area end -->

    <!-- process area start -->
    <section class="process-area process-area-2 process-area-3 bg-3 pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 text-center">
                    <div class="section-heading section-heading-2 white mb-70">
                        <h5 class="sub-title mb-22">Process</h5>
                        <h2 class="section-title">How It Works</h2>
                    </div>
                </div>
            </div>
            <div class="row mt-none-80 mmt-none-30">
                <div class="col-xl-4 col-lg-6 col-md-12 mt-80 mmt-30 col-md-6 text-center">
                    <div class="single-process-box single-process-box-2 single-process-box-3">
                        <span class="count-big">01</span>
                        <a href="#0" class="inline-btn">Get In Touch <i class="fal fa-arrow-right"></i></a>
                        <div class="process-box-content mt-30">
                            <h2 class="process-box-title">Account &amp; Check In</h2>
                            <p>We provide janitorial and specialized cleaning services for all types and
                                sizes of complexes.</p>
                        </div>
                        <div class="process-box-icon">
                            <img src="assets/images/icons/hiw-icon-1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12 mt-80 mmt-30 text-center">
                    <div class="single-process-box single-process-box-2 single-process-box-3 yellow mt-50 mmt-0">
                        <span class="count-big">02</span>
                        <a href="#0" class="inline-btn">Contact Now <i class="fal fa-arrow-right"></i></a>
                        <div class="process-box-content mt-30">
                            <h2 class="process-box-title">Choose Category</h2>
                            <p>We provide janitorial and specialized cleaning services for all types and
                                sizes of complexes.</p>
                        </div>
                        <div class="process-box-icon">
                            <img src="assets/images/icons/hiw-icon-2.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12 mt-80 mmt-30 text-center">
                    <div class="single-process-box single-process-box-2 single-process-box-3 blue mt-50 mmt-0">
                        <span class="count-big">03</span>
                        <a href="#0" class="inline-btn">Get Support <i class="fal fa-arrow-right"></i></a>
                        <div class="process-box-content mt-30">
                            <h2 class="process-box-title">Get Clean Property</h2>
                            <p>We provide janitorial and specialized cleaning services for all types and
                                sizes of complexes.</p>
                        </div>
                        <div class="process-box-icon">
                            <img src="assets/images/icons/hiw-icon-3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- process area end -->


    @include('layouts.partials.brand')


@endsection
