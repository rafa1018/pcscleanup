<div class="extra-info">
    <div class="close-icon menu-close">
        <button>
            <i class="far fa-window-close"></i>
        </button>
    </div>
    <div class="logo-side mb-30">
        <a href="{{route('welcome')}}" class="site-logo-2">
            <img src="assets/images/logo/logo-white.jpg" alt="" />
        </a>
    </div>
    <div class="side-info">
        <div class="contact-list mb-40">
            <h4>About Us</h4>
            <p>Professional Cleaning Services is a company of highly qualified professional cleaning services registered in South Florida,
                 with a consolidated market in our area.
                  We are fully licensed, bonded and insured for your peace of mind.
                   We offer competitive hourly and contratact rates and are also available
                    for event clean-up services.
                    Trust P.C.S for quality janitorial services.
                     Let us clean your commercial location today.
                </p>
            <div class="mt-30 mb-30">
                <a href="{{route('contact')}}" class="site-btn white">CONTACT US <span class="icon"><i
                            class="fal fa-calendar-alt"></i></span></a>
            </div>
        </div>
        <div class="contact-list mb-40">
            <h4>Contact Info</h4>
            @if($data['ubicacion_principal'] != "") <p><i class="fal fa-rocket"></i> <span>{{$data['ubicacion_principal']}} </span> @endif
            </p>
            <p><i class="far fa-phone"></i> <span>{{$data['telefono_principal']}}</span> </p>
            <p><i class="far fa-envelope-open"></i><span>{{$data['correo_principal']}}</span></p>
        </div>
    </div>
</div>
<div class="offcanvas-overly"></div>
