<footer class="site-footer bg-4 site-footer-2 pt-190">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-widget">
                    <h4 class="title">Our Services</h4>
                    <ul>
                        <li><a href="#0"><i class="fal fa-angle-right "></i> Maid Services</a></li>
                        <li><a href="#0"><i class="fal fa-angle-right "></i> Window Cleaning</a></li>
                        <li><a href="#0"><i class="fal fa-angle-right "></i> Domestic Cleaning</a></li>
                        <li><a href="#0"><i class="fal fa-angle-right "></i> House Cleaning</a></li>
                        <li><a href="#0"><i class="fal fa-angle-right "></i> Professional Carwashing</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-widget service-menu">
                    <h4 class="title">Our Services</h4>
                    <ul>
                        <li><a href="about.html"><i class="fal fa-angle-right "></i> About Company</a></li>
                        <li><a href="service.html"><i class="fal fa-angle-right "></i> Services</a></li>
                        <li><a href="pricing.html"><i class="fal fa-angle-right "></i> Pricing</a></li>
                        <li><a href="#0"><i class="fal fa-angle-right "></i> Calculator</a></li>
                        <li><a href="blog.html"><i class="fal fa-angle-right "></i> Our Blog</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-6 offset-xl-1 col-lg-6">
                <div class="footer-widget footer-contact-widget">
                    <h4 class="title">Contact Us</h4>
                    <div class="footer-contact-info">
                        <div class="content">
                            <p>{{$data['ubicacion_principal']}}</p>
                            <a href="#0"><i class="fal fa-angle-right"></i> Get Direction</a>
                        </div>
                        <div class="box">
                            <h2><span>Get Free Estimate</span>
                                {{$data['telefono_principal']}}</h2>
                            <span class="icon"><i class="fal fa-phone"></i></span>
                        </div>
                    </div>
                    <div class="footer-social-info">
                        <div class="content">
                            <a href="tel:{{$data['telefono_principal']}}"><span>T:</span> {{$data['telefono_principal']}}</a>
                            <a href="mailto:{{$data['correo_principal']}}"><span>E:</span> {{$data['correo_principal']}}</a>
                        </div>
                        <div class="social-links">
                            <a href="{{$data['facebook']}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="{{$data['twitter']}}" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="{{$data['linkedin']}}" target="_blank"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="copyright mt-100 pt-30 pb-30 text-center">
                    <p>Copyright By@PCSCleanUp - 2022</p>
                </div>
            </div>
        </div>
    </div>
</footer>