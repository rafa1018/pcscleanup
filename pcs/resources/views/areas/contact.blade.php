@extends('layouts.principal')


@section('content')

    <!-- breadcrumb area start -->
    <section class="breadcrumb-area pt-140 pb-140 bg_img" data-overlay="5"
        data-background="assets/images/bg/breadcrumb-bg.jpeg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb-text">
                        <h1 class="breadcrumb-title">Contact Us</h1>
                        <p><span>Welcome</span> to our cleaning company</p>
                    </div>
                </div>
                <div class="col-lg-6 my-auto">
                    <div class="breadcrumb-nav">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>|</li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- feature area start -->
    <section class="feature-area feature-area-2 pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 text-center">
                    <div class="section-heading section-heading-2 mb-70">
                        <h5 class="sub-title mb-22">Features</h5>
                        <h2 class="section-title">Core Features</h2>
                    </div>
                </div>
            </div>
            <div class="row mt-none-30 text-center">
                <div class="col-xl-3 col-lg-6 col-md-6 mt-30">
                    <div class="singel-feature-box singel-feature-box-2">
                        <div class="feature-icon mb-35">
                            <img src="assets/images/icons/contact-info-1.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h3 class="feture-title mb-20">Email Address</h3>
                            <p>
                                <a href="mailto:info@webmail.com">info@webmail.com</a> <br>
                                <a href="mailto:support@webmail.com">support@webmail.com</a> <br>
                                <a href="mailto:jobs.webmail.com">jobs.webmail.com</a>
                            </p>
                            <a href="#0" class="inline-btn mt-10"><i class="fal fa-arrow-right"></i> Mail Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mt-30">
                    <div class="singel-feature-box singel-feature-box-2">
                        <div class="feature-icon mb-35">
                            <img src="assets/images/icons/contact-info-2.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h3 class="feture-title mb-20">Phone Number</h3>
                            <p>
                                <a href="tel:+8767654654656">+876 7654 654 65 6</a> <br>
                                <a href="tel:+87987676546564">+87(987) 676 546 56 4</a> <br>
                                <a href="tel:+87676565458">+876 765 654 58</a>
                            </p>
                            <a href="#0" class="inline-btn mt-10"><i class="fal fa-arrow-right"></i> Make Call</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mt-30">
                    <div class="singel-feature-box singel-feature-box-2">
                        <div class="feature-icon mb-35">
                            <img src="assets/images/icons/contact-info-3.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h3 class="feture-title mb-20">Office Address</h3>
                            <p>
                                Hourse:16/A, Romada pubg house <br>
                                city tower, New York <br>
                                United States
                            </p>
                            <a href="#0" class="inline-btn mt-10"><i class="fal fa-arrow-right"></i> Get Directions</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mt-30">
                    <div class="singel-feature-box singel-feature-box-2">
                        <div class="feature-icon mb-35">
                            <img src="assets/images/icons/contact-info-4.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h3 class="feture-title mb-20">Social Connect</h3>
                            <p>
                                <a href="www.facebook.com/example">www.facebook.com/example</a> <br>
                                <a href="www.twitter.com/example">www.twitter.com/example</a> <br>
                                <a href="www.behance.com/example">www.behance.com/example</a>
                            </p>
                            <a href="#0" class="inline-btn mt-10"><i class="fal fa-arrow-right"></i> Get Connect</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature area end -->

    <!-- cotact form start -->
    <section class="contact-area pb-40">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="contact-wrap">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5">
                                <div id="contact-map" class="contact-map"></div>
                            </div>
                            <div class="col-xl-5 col-lg-6 offset-xl-1">
                                <div class="section-heading section-heading-2 mb-50 mt-120">
                                    <h5 class="sub-title mb-22">Call To Action</h5>
                                    <h2 class="section-title">Get an emergency call
                                        or appoinment.</h2>
                                </div>
                                <form id="contact-form-main" action="mail.php" method="POST">
                                    <div class="cta-form mt-none-10 mb-120">
                                        <div class="form-group mt-10">
                                            <label for="name"><i class="fal fa-user"></i></label>
                                            <input name="name" type="text" id="name" placeholder="Enter your name">
                                        </div>
                                        <div class="form-group mt-10">
                                            <label for="mail"><i class="fal fa-envelope"></i></label>
                                            <input name="email" type="email" id="mail" placeholder="Enter your email">
                                        </div>
                                        <div class="from-group-wrapper mt-10">
                                            <div class="form-group">
                                                <label for="date"><i class="fal fa-calendar-alt"></i></label>
                                                <input name="date" type="date" id="date">
                                            </div>
                                            <div class="form-group">
                                                <select name="subject">
                                                    <option data-display="Subject">Subject</option>
                                                    <option value="1">Services</option>
                                                    <option value="2">Cleaning</option>
                                                    <option value="3">Cleaning</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group mt-10">
                                            <button type="submit" class="site-btn boxed">Submit Request</button>
                                        </div>
                                    </div>
                                    <p class="ajax-response"></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cotact form end -->

@endsection