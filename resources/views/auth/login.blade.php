@extends('auth.layout')

@section('content')
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{{ config('app.name') }}</title>

        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no" name="viewport">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"
            integrity="sha512-0S+nbAYis87iX26mmj/+fWt1MmaKCv80H+Mbo+Ne7ES4I6rxswpfnC6PxmLiw33Ywj2ghbtTw0FkLbMWqh4F7Q=="
            crossorigin="anonymous" />

        <!-- AdminLTE -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/css/adminlte.min.css"
            integrity="sha512-rVZC4rf0Piwtw/LsgwXxKXzWq3L0P6atiQKBNuXYRbg2FoRbSTIY0k2DxuJcs7dk4e/ShtMzglHKBOJxW8EQyQ=="
            crossorigin="anonymous" />

        <!-- iCheck -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css"
            integrity="sha512-8vq2g5nHE062j3xor4XxPeZiPjmRDh6wlufQlfC6pdQ/9urJkU07NM0tEREeymP++NczacJ/Q59ul+/K2eYvcg=="
            crossorigin="anonymous" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
                    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                    <![endif]-->

    </head>

    <body>
        <a href="{{ url('/') }}" class="text-start ml-4" style="color:#234495; font-size: 19px; margin:auto;"><span
                class="fas fa-arrow-left"></span> Back</a>

        <div class="container" style="margin-top: -10px;">
            <div class=" rounded d-flex justify-content-between">
                <img src="/img/dilg-main.png" class=" shadow-lg rounded-circle"
                    style="height: 130px; width:130px; margin:auto;">

            </div>
            <div class="d-flex justify-content-center" style="margin-top: 10px">
                <h3 class="text-center" style="font-size: 22px;">Department of the Interior and Local Government
                    <p class="text-center" style="font-weight:450; font-size: 20px; margin-top: -5px;">Bohol Province</p>
                    <br>
                </h3>
            </div>

            <div class="row justify-content-center" style="margin-top: -45px">
                <div class="col-md-5">
                    <div class="card shadow-lg rounded">
                        <h3 class="text-center p-3"
                            style="font-size: 20px; font-weight: 300; margin:auto;color: dark-grey ">Sign in to your
                            Account<br>
                            <p class="text-center" style="font-size: 15px; color: whitesmoke;"></p>
                        </h3>
                        <div class="card-body" style="margin-top:-20px;">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="row mb-3">
                                    <label for="email" style="font-size: 19px font-weight: 500;"
                                        class="col-md-3 col-form-label text-md-end">{{ __('Email') }}</label>
                                    <div class="col-md-8">
                                        <input id="email" type="email"
                                            class="form-control  @error('email') is-invalid @enderror"
                                            placeholder="Enter your e-mail address" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password" style="font-size: 19px font-weight: 500;"
                                        class="col-md-3 col-form-label">{{ __('Password') }}</label>

                                    <div class="col-md-8">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            placeholder="Enter your password" name="password" required
                                            autocomplete="current-password">
                                        <span class="d-flex justify-content-end mt-1"><i class="fas fa-eye"
                                                style="color: #C9282D;" aria-hidden="true" id="eye"
                                                onclick="toggle()"></i></span>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                                {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" style="font-size: 18px" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>

                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-0 ">
                                    <div class="col-md-6 offset-md-5 d-flex justify-content-end">
                                        <button type="submit" class="btn " style="background: #234495; color:white;">
                                            {{ __('Login') }} <span class="fas fa-sign-in-alt"></span>
                                        </button>
                                    </div>

                                    </p>


                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="sticky-footer">
            <div class="container ">
                <div class="copyright text-center">
                    <span style="color:dimgray;">&copy; DILG-Bohol Province 2023</span>
                </div>
            </div>
        </footer>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/js/adminlte.min.js"
            integrity="sha512-++c7zGcm18AhH83pOIETVReg0dr1Yn8XTRw+0bWSIWAVCAwz1s2PwnSj4z/OOyKlwSXc4RLg3nnjR22q0dhEyA=="
            crossorigin="anonymous"></script>

        <script>
            var state = false;

            function toggle() {
                if (state) {
                    document.getElementById(
                        'password'
                    ).setAttribute("type", "password");
                    state = false;
                } else {
                    document.getElementById(
                        'password'
                    ).setAttribute("type", "text");
                    state = true;
                }
            }
        </script>
    </body>

    </html>

    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>
@endsection

<style scoped>
    html {
        height: 100%;
    }

    body {
        margin: 0;
    }

    .bg {
        animation: slide 3s ease-in-out infinite alternate;
        background-image: linear-gradient(-60deg, rgb(226, 217, 217) 50%, white 50%);
        bottom: 0;
        left: -50%;
        opacity: .5;
        position: fixed;
        right: -50%;
        top: 0;
        z-index: -1;
    }

    .bg2 {
        animation-direction: alternate-reverse;
        animation-duration: 4s;
    }

    .bg3 {
        animation-duration: 5s;
    }

    @keyframes slide {
        0% {
            transform: translateX(-25%);
        }

        100% {
            transform: translateX(25%);
        }
    }
</style>
