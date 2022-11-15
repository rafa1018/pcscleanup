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
                            <li><a href="{{route('welcome')}}">Home</a></li>
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
                                <a href="mailto:{{$data['correo_principal']}}">{{$data['correo_principal']}}</a> <br>
                                <a href="mailto:{{$data['correo_secundario']}}">{{$data['correo_secundario']}}</a> <br>
                                <a href="mailto:{{$data['correo_tercero']}}">{{$data['correo_tercero']}}</a>
                            </p>
                            <a href="mailto:{{$data['correo_principal']}}" class="inline-btn mt-10"><i class="fal fa-arrow-right"></i> Mail Us</a>
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
                                <a href="tel:+1{{$data['telefono_principal']}}">+1 {{$data['telefono_principal']}}</a> <br>
                                @if($data['telefono_segundo'] != "")  <a href="tel:+1{{$data['telefono_segundo']}}">+1 {{$data['telefono_segundo']}}</a> <br> @endif
                                @if($data['telefono_tercero'] != "")  <a href="tel:+1{{$data['telefono_tercero']}}">+1 {{$data['telefono_tercero']}}</a> @endif
                            </p>
                            <a href="tel:+1{{$data['telefono_principal']}}" class="inline-btn mt-10"><i class="fal fa-arrow-right"></i> Make Call</a>
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
                                {{$data['ubicacion_principal']}}
                            </p>
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
                                @if($data['facebook'] != "")  <a href="{{$data['facebook']}}">{{$data['facebook']}}</a> <br> @endif
                                @if($data['twitter'] != "")  <a href="{{$data['twitter']}}">{{$data['twitter']}}</a> <br> @endif
                                @if($data['linkedin'] != "")  <a href="{{$data['linkedin']}}">{{$data['linkedin']}}</a> @endif
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature area end -->

    <!-- cotact form start -->
    <section class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="contact-wrap">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5">
<img src="{{asset('assets/images/contacto-img.png')}}" style="height: 500px;margin: 100px 50px 10px;">
                            </div>
                            <div class="col-xl-5 col-lg-5 offset-xl-1">
                                <div class="section-heading section-heading-2 mb-50 mt-120">
                                    <h5 class="sub-title mb-22">Call To Action</h5>
                                    <h2 class="section-title">Get an call
                                        or appoinment.</h2>
                                </div>
                                    <form id="frmEnviarCorreoPcs" method="post">
                                        @csrf <!-- {{ csrf_field() }} -->
                                    <div class="cta-form mt-none-10 mb-120">
                                        <div class="form-group mt-10">
                                            <label for="name"><i class="fal fa-user"></i></label>
                                            <input name="name" type="text" id="name" placeholder="Enter your name" required>
                                        </div>
                                        <div class="form-group mt-10">
                                            <label for="mail"><i class="fal fa-envelope"></i></label>
                                            <input name="email" type="email" id="mail" placeholder="Enter your email" required>
                                        </div>
                                        <div class="form-group mt-10">
                                            <label for="number"><i class="fal fa-phone"></i></label>
                                            <input id="number" tabindex="5" type="tel" name="phone" placeholder="(___) ___-____" required>
                                        </div>
                                        <div class="from-group-wrapper mt-10">
                                            <div class="form-group">
                                                <select name="subject">
                                                    <option data-display="Subject" selected disabled >Subject</option>
                                                    <option value="Services">Services</option>
                                                    <option value="Cleaning">Cleaning</option>
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
        <br>

        <div class="col-xl-12 col-lg-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1419.8842714891284!2d-80.20199132726249!3d26.265431429649652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sco!4v1652158632949!5m2!1ses-419!2sco" width="100%" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <!-- cotact form end -->

    @endsection
    @section('scripts')


    <script>

        $("#frmEnviarCorreoPcs").on("submit", function(e) {
            e.preventDefault();
            var formData = new FormData(document.getElementById("frmEnviarCorreoPcs"));
            var route = "{{ asset('/contact') }}";
            var token = $("#token").val();
            $.ajax({
                    url: route,
                    type: "POST",
                    dataType: "json",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false
                })
                .done(function(resp) {
                    if (resp.tipo == "success") {
                        toastr["success"](resp.mensaje, resp.titulo);
                    }

                })
                .fail(function(data) {
                    if (data.responseJSON) {
                        $.each(data.responseJSON.errors, function(key, value) {
                            $('#' + key + 'Validation').html(value);
                            $('#' + key).addClass("is-invalid")
                            toastr["error"](value, "Error");
                        });
                    }
                    if (data.status == 500) {
                        swal.fire({
                            title: 'Error...',
                            text: 'Error with the message server, please try again later',
                            icon: 'error',
                            buttons: false,
                            timer: 7500,
                            showCancelButton: false,
                            showConfirmButton: false,
                        });
                    }
                });
        });
    </script>

    @endsection



