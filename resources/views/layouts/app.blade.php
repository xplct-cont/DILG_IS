<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css"
        rel="stylesheet">

    <!-- AdminLTE -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/css/adminlte.min.css"
        integrity="sha512-rVZC4rf0Piwtw/LsgwXxKXzWq3L0P6atiQKBNuXYRbg2FoRbSTIY0k2DxuJcs7dk4e/ShtMzglHKBOJxW8EQyQ=="
        crossorigin="anonymous" />

    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css"
        integrity="sha512-8vq2g5nHE062j3xor4XxPeZiPjmRDh6wlufQlfC6pdQ/9urJkU07NM0tEREeymP++NczacJ/Q59ul+/K2eYvcg=="
        crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"
        integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw=="
        crossorigin="anonymous" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css"
        integrity="sha512-aEe/ZxePawj0+G2R+AaIxgrQuKT68I28qh+wgLrcAJOz3rxCP+TwrK5SPN+E5I+1IQjNtcfvb96HDagwrKRdBw=="
        crossorigin="anonymous" />


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    {{--
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> --}}

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    {{-- slider script --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    {{-- slider script --}}
    <!-- Scripts -->
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark hadow-sm" style="background-color: #C9282D;">
            <div class="container">
                <a class="navbar-brand" style="font-size: 16px;" href="{{ url('/') }}">
                    {{-- {{ config('app. name', 'Laravel') }} --}}
                    &nbsp; DILG-BOHOL PROVINCE

                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">

                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ url('/') }}"> &nbsp;Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ url('/news-update') }}"> &nbsp;News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ url('/') }}"> &nbsp;LGRRC</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ url('/') }}"> &nbsp;Issuances</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ url('/') }}"> &nbsp;LGU's</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ url('/organizations') }}"> &nbsp;Organization</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ url('/contacts') }}"> &nbsp;Contact</a>
                        </li>


                        <div class="dropdown">
                            <button class="dropdown-toggle btn text-white" style="margin-top: 2px;" id="dropdownMenu1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                About
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a class="dropdown-item" href="{{ url('/about') }}">About Us</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                        <div class="dropdown">
                            <button class="dropdown-toggle btn text-white" style="margin-top: 2px;" id="dropdownMenu1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Programs & Services
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a class="dropdown-item" href="{{ url('/project') }}">Projects </a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="{{ url('/jobs') }}">Job Vacancies</a></li>
                            </ul>
                        </div>
                        <div class="dropdown">
                            <button class="dropdown-toggle btn text-white" style="margin-top: 2px;"
                                id="dropdownMenu1" data-bs-toggle="dropdown" aria-expanded="false">
                                Transparency
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>

                        @guest
                            {{-- @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">&nbsp;{{ __('Login') }} <span
                                            class="fas fa-sign-in-alt"></span> </a>
                                </li>
                            @endif --}}

                            {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            <div class="header" style=" padding: 20px; background: #DCDCDC; color: #030303; margin-bottom: 10px;">
                <img style=" width: 50%; margin-left: 10px;
                height: auto;"
                    src="{{ asset('/img/dilg-bohol.png') }}">
            </div>
            @yield('content')
        </main>

    </div>

    <div class="d-flex justify-content-center" style=" padding: 20px; background: #C9282D;; color: #DCDCDC;">
        <footer class="sticky-footer">
            <div class="container">
                <div class="copyright text-center">
                    <p class="text-center" style="font-size: 18px; color:#DCDCDC;">Department of the Interior and
                        Local Government</p>
                    <p class="text-center"
                        style="font-size: 12px; color:#DCDCDC; font-weight: 400; margin-top: -20px;">BOHOL PROVINCE</p>
                </div>



                <form action="">
                    <div class="input-group mx-auto" style="width: 300px;">

                        <input type="text" name="email" style="height: 30px;" class="form-control" required>
                        <label for="" style="color:dimgray;">
                            <button type="submit" class="btn btn-sm bg-dark " style="margin-left:1px;">
                                <span class="" style="font-size: 12px; font-weight: 400;">EMAIL US</span>
                            </button>
                        </label>
                    </div>
                </form>

                <p class="text-center" style="font-size: 16px; font-weight: 400;">Attached Agencies</p>

                <div class="container d-flex justify-content-center">
                    <div class="row ">
                        <div class="col-md-8 d-flex justify-content-between" style="gap:10px;">
                            <img src="/img/lga.png" alt="" style="height: 50px;">
                            <img src="/img/napolcom.png" alt="" style="height: 50px;">
                            <img src="/img/bfp.png" alt="" style="height: 50px;">
                            <img src="/img/bjmp.png" alt="" style="height: 50px;">
                            <img src="/img/ppsc.png" alt="" style="height: 50px;">
                            <img src="/img/pnp.png" alt="" style="height: 50px;">

                        </div>
                    </div>
                </div>
                <p class="text-center mt-3" style="color:silver; font-size: 8px;">&copy;DILG-BOHOL PROVINCE</p>
            </div>
            <div class="bg"></div>
            <div class="bg bg2"></div>
            <div class="bg bg3"></div>
        </footer>
        <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button"><i
                class="fas fa-chevron-up"></i></a>
    </div>



</body>

</html>

<style>
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
