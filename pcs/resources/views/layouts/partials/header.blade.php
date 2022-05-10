<header class="site-header site-header-2">
    <div class="header-top-area header-top-area-2 bg-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-7 col-lg-7">
                    <div class="header-top-info">
                        <ul>
                            <li><a href="mailto:{{$data['correo_principal']}}">{{$data['correo_principal']}}</a></li>
                            <li><a href="tel:{{$data['telefono_principal']}}">{{$data['telefono_principal']}}</a></li>
                            <li>{{$data['ubicacion']}}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="header-top-menu">
                        <div class="header-top-social-links">
                            <a href="https://www.facebook.com/pcscleanupcorp" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://twitter.com/pcscleanup" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="#0"><i class="fab fa-linkedin"></i></a>
                            <a href="https://www.instagram.com/pcscleanup/" target="_blank"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="nav-area">
        <div class="container-fluid">
            <div class="row align-items-lg-center align-items-start">
                <div class="col-xl-4 col-lg-3 my-auto">
                    <div class="header-info-left-wrap">
                        <div class="header-info-left">
                            <a href="{{route('welcome')}}" class="site-logo">
                                <img src="{{asset('assets/images/logo/logo.png')}}" alt="PCSCLEANUP">
                            </a>
                        </div>
                        <div class="mobile-menu"></div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 d-none d-xl-block d-lg-block">
                    <div class="main-menu">
                        <nav id="mobile-menu">
                            <ul>
                                <li><a href="{{route('welcome')}}">Home</a>
                                </li>
                                <li><a href="#0">About</a></li>
                                <li><a href="#0">Services</a>
                                </li>
                               
                                <li><a href="#0">News +</a></li>
                                <li><a href="#">Team</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                               
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-2 d-none d-xl-block d-lg-block my-auto col-lg-3">
                    <div class="header-info-right">
                        <!--<div class="header-lang">
                            <div class="lang-icon">
                                <a href="#0" class="site-btn">English <span class="icon"><i
                                            class="fal fa-language"></i></span></a>
                            </div>
                            <ul class="header-lang-list">
                                <li><a href="#0">Spanish</a></li>
                            </ul>
                        </div> -->
                        <div class="header-button-list">
                            <button class="btn hamburger-menu-trigger"><i class="fal fa-bars"></i></button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>