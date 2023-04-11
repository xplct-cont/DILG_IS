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
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />

    <title>{{ config('app.name', 'Laravel') }}</title>

  

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
    @livewireStyles()
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-xl navbar-dark shadow-sm fixed-top" style="background-color: #234495;">
            <div class="container">
                <a class="navbar-brand" style="font-size: 16px;" href="{{ url('/') }}">
                    DILG-BOHOL PROVINCE

                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span style="color:silver"></span> <span class="navbar-toggler-icon"></span>
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
                            <a class="nav-link text-white" href="{{ url('/news_update') }}"> &nbsp;News</a>
                        </li>

                        <div class="dropdown">
                            <button class="dropdown-toggle btn text-white" style="margin-top: 2px;" id="dropdownMenu1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Officials
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a class="dropdown-item" href="{{ url('lgus') }}">LGUs</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ url('provincial_officials') }}">Provincial
                                        Officials</a></li>

                            </ul>
                        </div>

                        <div class="dropdown">
                            <button class="dropdown-toggle btn text-white" style="margin-top: 2px;" id="dropdownMenu1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                LGRRC
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a class="dropdown-item" target="_blank" href="https://library.dilg.gov.ph/">DILG
                                        E-Library</a></li>
                                <li><a class="dropdown-item" href="{{ url('/knowledge_materials') }}">Knowledge
                                        Materials</a></li>
                            </ul>
                        </div>
                        <div class="dropdown">
                            <button class="dropdown-toggle btn text-white" style="margin-top: 2px;" id="dropdownMenu1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Issuances
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a class="dropdown-item" href="{{ url('latest_issuances') }}">Latest Issuances</a>
                                </li>
                                <li><a class="dropdown-item" target="_blank"
                                        href="https://dilg.gov.ph/issuances-archive/jc/">Joint Circulars</a></li>
                                <li><a class="dropdown-item" target="_blank"
                                        href="https://dilg.gov.ph/issuances-archive/mc/">Memo Circulars</a></li>
                                <li><a class="dropdown-item" target="_blank"
                                        href="https://dilg.gov.ph/issuances-archive/pd/">Presidential Directives</a>
                                </li>
                                <li><a class="dropdown-item" target="_blank"
                                        href="https://dilg.gov.ph/issuances-archive/draft/">Draft Issuances</a></li>
                                <li><a class="dropdown-item" target="_blank"
                                        href="https://dilg.gov.ph/issuances-archive/ra/">Republic Acts</a></li>
                                <li><a class="dropdown-item" target="_blank"
                                        href="https://dilg.gov.ph/legal-opinions-archive/">Legal Opinions</a></li>
                            </ul>
                        </div>

                        <div class="dropdown">
                            <button class="dropdown-toggle btn text-white" style="margin-top: 2px;"
                                id="dropdownMenu1" data-bs-toggle="dropdown" aria-expanded="false">
                                About
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a class="dropdown-item" href="{{ url('/about_us') }}">About Us</a></li>
                                <li><a class="dropdown-item" href="{{ url('/organization') }}">Organizational
                                        Structure/PDMU</a></li>
                                <li><a class="dropdown-item" href="{{ url('/field_officers') }}">Field Officers</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ url('/citizens_charter') }}">Citizens
                                        Charter</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ url('/dilg_family') }}">DILG FAMILY</a></li>
                                <li><a class="dropdown-item" href="{{ url('/contact_information') }}">Contact Information</a>
                                </li>
                            </ul>
                        </div>
                        <div class="dropdown">
                            <button class="dropdown-toggle btn text-white" style="margin-top: 2px;"
                                id="dropdownMenu1" data-bs-toggle="dropdown" aria-expanded="false">
                                Programs & Services
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a class="dropdown-item" target="_blank"
                                        href="https://subaybayan.dilg.gov.ph/projects/index?ProjectSearch%5BREGION_C%5D=07&ProjectSearch%5BPROVINCE_C%5D=012&ProjectSearch%5BCITYMUN_C%5D=&ProjectSearch%5Bbarangay%5D=&ProjectSearch%5BimageSelection%5D=&ProjectSearch%5BPROGRAM_C%5D=&ProjectSearch%5BPROJECT_TYPE%5D=&ProjectSearch%5BYEAR%5D=&ProjectSearch%5BSTATUS%5D=">Projects
                                    </a></li>
                                <li><a class="dropdown-item" target="_blank"
                                        href="https://fdpp.dilg.gov.ph/fdpp/report/index?_csrf-frontend=RBVssfr9QXZl60bNe0juzDQvRsKtxA-pS7A64znU1ugNUCqAvpV3IVCIFpQYGq38Umd29-isadsTglaWaL7moA%3D%3D&document_filter=&region_filter=07&province_filter=012&lgu_filter=&year_filter=">FDP
                                        Portal
                                    </a></li>

                            </ul>
                        </div>
                        <div class="dropdown">
                            <button class="dropdown-toggle btn text-white" style="margin-top: 2px;"
                                id="dropdownMenu1" data-bs-toggle="dropdown" aria-expanded="false">
                                Transparency at Work
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a class="dropdown-item" href="{{ url('/downloadable_files') }}">Downloadables</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ url('/faqs') }}">FAQ's</a></li>
                                <li><a class="dropdown-item" href="{{ url('/job_vacancies') }}">Job Vacancies</a></li>
                            </ul>
                        </div>

                        @guest
                        @else
                        @endguest

                    </ul>
                </div>
            </div>
        </nav>

        <main class="mt-5">
            <div class="header" style=" padding: 20px; background: #e4e1e1; color: #030303; margin-bottom: 10px;">
                <a href="/about"> <img width="500" height="auto" style="max-width: 100%; height:auto;"
                        src="{{ asset('/img/dilg-bohol.png') }}"></a>
            </div>
            @yield('content')
        </main>

    </div>

    <div class="" style=" padding: 20px; background: #234495; color: #DCDCDC;">
        <footer class="sticky-footer">
            <div class="container">
                <div class="copyright text-center">
                    <a href="/about" style="text-decoration:none;">
                        <p class="text-center" style="font-size: 18px; color:#DCDCDC;">Department of the Interior and
                            Local Government</p>
                        <p class="text-center"
                            style="font-size: 12px; color:#DCDCDC; font-weight: 400; margin-top: -20px;">BOHOL PROVINCE
                        </p>
                    </a>
                </div>


                <p class="text-center" style="font-size: 16px; font-weight: 400;">DILG FAMILY</p>

                <div class="container d-flex justify-content-center">
                    <div class="row ">
                        <div class="col-md-8 d-flex justify-content-between" style="gap:10px;">
                            <a href="https://r7.napolcom.gov.ph/"> <img src="/img/napolcom.png" alt=""
                                    style="height: 50px;"></a>
                            <a href="https://region7.bfp.gov.ph/"> <img src="/img/bfp.png" alt=""
                                    style="height: 50px;"></a>
                            <a href="https://www.bjmp.gov.ph/"> <img src="/img/bjmp.png" alt=""
                                    style="height: 50px;"></a>
                            <a href="https://pro7.pnp.gov.ph/"> <img src="/img/pnp.png" alt=""
                                    style="height: 50px;">
                            </a>
                        </div>
                    </div>
                </div>
                <p class="text-center mt-3" style="color:silver; font-size: 8px;">&copy;DILG-BOHOL PROVINCE</p>
            </div>


            <div class="bg"></div>
            <div class="bg bg2"></div>
            <div class="bg bg3"></div>
        </footer>
    </div>

    <div class="" style=" padding: 20px; background-color:#efefef; color: #DCDCDC;">
        <footer class="sticky-footer">
            <div class="container">
                <div class="col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <p class="text-secondary" style="font-size: 12px; font-weight: 500;">REPUBLIC OF THE
                                PHILIPPINES</p>
                            <img src="/img/govph-seal.jpg" style="height: 100px; width: 100px;" alt="">
                        </div>

                        <div class="col-md-4 text-center">
                            <p class="text-secondary" style="font-size: 12px; font-weight: 500;">
                                GOVERNMENT LINKS</p>
                            <a href="https://president.gov.ph/" target="_blank">
                                <p class="text-secondary" style="font-size: 12px; font-weight: 300; ">Office of the
                                    President</p>
                            </a>
                            <a href="https://ovp.gov.ph/" target="_blank">
                                <p class="text-secondary"
                                    style="font-size: 12px; font-weight: 300; margin-top: -15px;">
                                    Office of the Vice
                                    President</p>
                            </a>
                            <a href="http://legacy.senate.gov.ph/" target="_blank">
                                <p class="text-secondary"
                                    style="font-size: 12px; font-weight: 300; margin-top: -15px;">
                                    Senate of the
                                    Philippines</p>
                            </a>
                            <a href="https://www.congress.gov.ph/" target="_blank">
                                <p class="text-secondary"
                                    style="font-size: 12px; font-weight: 300; margin-top: -15px;">
                                    House of
                                    Representatives</p>
                            </a>
                            <a href="https://sc.judiciary.gov.ph/" target="_blank">
                                <p class="text-secondary"
                                    style="font-size: 12px; font-weight: 300; margin-top: -15px;">
                                    Supereme Court</p>
                            </a>
                            <a href="https://ca.judiciary.gov.ph/" target="_blank">
                                <p class="text-secondary"
                                    style="font-size: 12px; font-weight: 300; margin-top: -15px;">Court of Appeals</p>
                            </a>
                            <a href="https://sb.judiciary.gov.ph/" target="_blank">
                                <p class="text-secondary"
                                    style="font-size: 12px; font-weight: 300; margin-top: -15px;">Sandiganbayan</p>
                            </a>
                            </p>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="text-center">
                                <p class="text-secondary" style="font-size: 12px;"><span>Current Date: </span>
                                    {{ date('F d, Y') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="d-flex justify-content-start mt-5">
                <!-- Button trigger modal -->

                <button type="button" class="btn btn-sm"
                    style="background-color: #dddddd; color:rgb(70, 69, 69); font-size: 7px;" data-toggle="modal"
                    data-target=".bd-example-modal-sm">
                    Developers</button>


                <!-- Modal -->
                <div class="modal fade bd-example-modal-sm mt-5" tabindex="-1" role="dialog"
                    aria-labelledby="mySmallModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm rounded">
                        <div class="modal-content">
                            <div class="modal-header rounded" style="background-color: #234495;">
                                <h1 class=""
                                    style="font-size: 18px; color:white; font-weight: 500; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">
                                    Developers</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body rounded bg-dark mx-auto">

                                <div>
                                    <a href="https://github.com/viennarose" target="_blank">
                                        <img src="/img/vienna.jpg" width="18%" class="rounded" /> <span
                                            style="color:white; font-size: 18px;">&nbsp; Vienna Rose Pepito
                                            &nbsp;&nbsp;</span></a>
                                </div>
                                <div class="mt-3">
                                    <a href="https://github.com/xplct-cont" target="_blank">
                                        <img src="/img/kenn.jpg" width="18%" class="rounded" /> <span
                                            style="color:white; font-size: 18px;">&nbsp; Kenn Secusana
                                            &nbsp;&nbsp;</span></a>
                                </div>
                                <div class="mt-3">
                                    <a href="https://github.com/chadiegil" target="_blank">
                                        <img src="/img/chadie.jpg" width="18%" class="rounded" /> <span
                                            style="color:white; font-size: 18px;">&nbsp; Chadie Gil Augis
                                            &nbsp;&nbsp;</span></a>
                                </div>
                                <div class="mt-3">
                                    <a href="https://github.com/dfkhin" target="_blank">
                                        <img src="/img/franklin.jpg" width="18%" class="rounded" /> <span
                                            style="color:white; font-size: 18px;">&nbsp; Franklin Pogoy
                                            &nbsp;&nbsp;</span></a>
                                </div>

                                <hr>
                                <p class="text-center mt-3" style="font-size: 12px;"> Contact No: 09096027312</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button onclick="topFunction()" id="myBtn" title="Go to top"
                style="background: #002C76; color:white;"><span class="fas fa-chevron-up"></span></button>

</body>
<script></script>
@livewireScripts()

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

    #myBtn {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        font-size: 12px;
        border: none;
        outline: none;
        background-color: red;
        color: white;
        cursor: pointer;
        padding: 10px;
        border-radius: 4px;
    }

    #myBtn:hover {
        background-color: #555;
    }
</style>

<script>
    // Get the button
    let mybutton = document.getElementById("myBtn");

    // When the user scrolls down 50px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 1200 || document.documentElement.scrollTop > 1200) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
