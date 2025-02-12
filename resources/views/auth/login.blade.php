@extends('auth.layout')

@section('content')
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }}</title>
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

    <style>
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

</head>

<body>
    
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('/') }}" class="text-start ml-4" style="color:#234495; font-size: 19px; margin:auto;"><span
                    class="fas fa-arrow-left"></span> Back</a>
            </div>
        </div>
        <div class="row justify-content-center " style="margin-top:125px;">
            <div class="col-md-8">
                <div class="card shadow-lg rounded-md">
                    <div class="row">
                        <div class="col-md-6 p-4" style="background-color:  #e7e7e7;">
                            <div class="rounded d-flex justify-content-between">
                                <img src="/img/dilg-main.png" class="shadow-lg rounded-circle img-fluid"
                                    style="max-height: 200px; width: auto; margin:auto;">
                            </div>
                            <div class="d-flex justify-content-center mt-3">
                                <div class="text-center">
                                    <h6 class="font-weight-bold" style="font-size: 20px; color: black;">Department of
                                        the Interior and Local Government</h6>
                                    <p style="font-weight: 450; font-size: 18px; margin-top: -5px; color: black;">Bohol
                                        Province</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card-body p-4">
                                <h3 class="text-center mb-4" style="font-size: 20px; font-weight: 300; color: dark-grey;"><b>Login to
                                        your Account</b></h3>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-group row">
                                    <label for="email" class="col-md-3 col-form-label text-md-left">{{ __('Email') }}</label>
                                    <div class="col-md-9">
                                       <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter your e-mail address" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                      <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                      </span>
                                    @enderror
                                 </div>
                                </div>

                                <div class="form-group row">
                                <label for="password" class="col-md-3 col-form-label text-md-left">{{ __('Password') }}</label>
                                <div class="col-md-9">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter your password" name="password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
</div>
                                    <div class="form-group row">
                                        <div class="col-md-9 offset-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="remember" style="font-size: 18px;">
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
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="sticky-footer">
        <div class="container text-center">
            <span style="color:dimgray;">&copy; DILG-Bohol Province 2023</span>
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
