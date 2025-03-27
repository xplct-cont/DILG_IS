<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- ✅ Allow dynamic page titles -->
    <title>@yield('title', 'DILG Bohol Province')</title>

    <!-- ✅ Allow pages to override Open Graph meta tags -->
    @yield('meta')


    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <Link href="{{ asset('fonts/Old-English.ttf') }}">
    <style>
        @font-face {
            font-family: "Old-English";
            src: url('/fonts/Old-English.ttf');
        }

        .old-font {
            font-family: "Old-English";
            color: rgb(53, 53, 53);
            font-size: 22px;
        }

        .calendar {
            height: 400px;
            width: 100%;
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
        }

        .calendar {
            box-shadow: var(--shadow);
        }

        .calendar-header {
            background: #234495;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 700;
            color: var(--white);
        }

        .calendar-week-days {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            font-weight: 600;
            cursor: pointer;
            color: #234495;
        }

        .calendar-week-days div:hover {
            color: black;
            transform: scale(1.2);
            transition: all .2s ease-in-out;
        }

        .calendar-week-days div {
            display: grid;
            place-items: center;
            color: var(--bg-second);
            height: 50px;
        }

        .calendar-days {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 2px;
            color: var(--color-txt);
        }

        .calendar-days div {
            width: auto;
            height: 33px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 5px;
            position: relative;
            cursor: pointer;
            animation: to-top 1s forwards;
        }

        .month-picker {
            padding: 5px 10px;
            border-radius: 10px;
            cursor: pointer;
        }

        .month-picker:hover {
            background-color: var(--color-hover);
        }

        .month-picker:hover {
            color: var(--color-txt);
        }

        .year-picker {
            display: flex;
            align-items: center;
        }

        .year-change {
            height: 30px;
            width: 30px;
            border-radius: 50%;
            display: grid;
            place-items: center;
            margin: 0px 10px;
            cursor: pointer;
        }

        .year-change:hover {
            background-color: var(--light-btn);
            transition: all .2s ease-in-out;
            transform: scale(1.12);
        }

        .year-change:hover pre {
            color: var(--bg-body);
        }

        .calendar-footer {
            padding: 10px;
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        #year:hover {
            cursor: pointer;
            transform: scale(1.2);
            transition: all 0.2 ease-in-out;
        }

        .calendar-days div span {
            position: absolute;
        }

        .calendar-days div:hover {
            transition: width 0.2s ease-in-out, height 0.2s ease-in-out;
            background-color: #888;
            border-radius: 5%;
            color: var(--dark-text);
        }

        .calendar-days div.current-date {
            color: var(--dark-text);
            background-color: var(--light-btn);
            border-radius: 5%;
        }

        .month-list {
            position: relative;
            left: 0;
            top: -50px;
            background-color: #ebebeb;
            color: var(--light-text);
            display: grid;
            grid-template-columns: repeat(3, auto);
            gap: 5px;
            border-radius: 20px;
        }

        .month-list>div {
            display: grid;
            place-content: center;
            margin: 5px 10px;
            transition: all 0.2s ease-in-out;
        }

        .month-list>div>div {
            border-radius: 15px;
            padding: 10px;
            cursor: pointer;
        }

        .month-list>div>div:hover {
            background-color: var(--light-btn);
            color: var(--dark-text);
            transform: scale(0.9);
            transition: all 0.2s ease-in-out;
        }

        .month-list.show {
            visibility: visible;
            pointer-events: visible;
            transition: 0.6s ease-in-out;
            animation: to-left .71s forwards;
        }

        .month-list.hideonce {
            visibility: hidden;
        }

        .month-list.hide {
            animation: to-right 1s forwards;
            visibility: none;
            pointer-events: none;
        }

        .date-time-formate {
            width: max-content;
            height: max-content;
            font-family: Dubai Light, Century Gothic;
            position: relative;
            display: inline;
            top: 50px;
            justify-content: center;
            color: #234495;
        }

        .day-text-formate {
            font-family: Microsoft JhengHei UI;
            font-size: 1.1rem;
            padding: 4%;
            border-right: 3px solid #234495;
            position: absolute;
            left: -1rem;
        }

        .date-time-value {
            display: block;
            height: max-content;
            width: max-content;
            position: relative;
            left: 40%;
            top: -18px;
            text-align: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .time-formate {
            font-size: 1.5rem;
        }

        .time-formate.hideTime {
            animation: hidetime 1.5s forwards;
        }

        .day-text-formate.hidetime {
            animation: hidetime 1.5s forwards;
        }

        .date-formate.hideTime {
            animation: hidetime 1.5s forwards;
        }

        .day-text-formate.showtime {
            animation: showtime 1s forwards;
        }

        .time-formate.showtime {
            animation: showtime 1s forwards;
        }

        .date-formate.showtime {
            animation: showtime 1s forwards;
        }

        @keyframes to-top {
            0% {
                transform: translateY(0);
                opacity: 0;
            }

            100% {
                transform: translateY(100%);
                opacity: 1;
            }
        }

        @keyframes to-left {
            0% {
                transform: translatex(230%);
                opacity: 1;
            }

            100% {
                transform: translatex(0);
                opacity: 1;
            }
        }

        @keyframes to-right {
            10% {
                transform: translatex(0);
                opacity: 1;
            }

            100% {
                transform: translatex(-150%);
                opacity: 1;
            }
        }

        @keyframes showtime {
            0% {
                transform: translatex(250%);
                opacity: 1;
            }

            100% {
                transform: translatex(0%);
                opacity: 1;
            }
        }

        @keyframes hidetime {
            0% {
                transform: translatex(0%);
                opacity: 1;
            }

            100% {
                transform: translatex(-370%);
                opacity: 1;
            }
        }

        @media (max-width:375px) {
            .month-list>div {

                margin: 5px 0px;
            }

        }



        @media (max-width: 576px) {
            select {
                font-size: 16px !important;
            }
        }
    </style>


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />


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
                                <li><a class="dropdown-item" href="{{ url('latest_issuances') }}">Latest
                                        Issuances</a>
                                </li>
                                <li><a class="dropdown-item" target="_blank"
                                        href="https://dilg.gov.ph/issuances-archive/jc/">Joint Circulars</a></li>
                                <li><a class="dropdown-item" target="_blank"
                                        href="https://dilg.gov.ph/issuances-archive/mc/">Memo Circulars</a></li>
                                <li><a class="dropdown-item" href="{{url('presidential_directives')}}">Presidential
                                        Directives</a>
                                </li>
                                <li><a class="dropdown-item" href="{{url('republic_acts')}}">Republic Acts</a></li>
                                <li><a class="dropdown-item" href="{{url('legal_opinions')}}">Legal Opinions</a></li>
                            </ul>
                        </div>

                        <div class="dropdown">
                            <button class="dropdown-toggle btn text-white" style="margin-top: 2px;" id="dropdownMenu1"
                                data-bs-toggle="dropdown" aria-expanded="false">
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
                                <li><a class="dropdown-item" href="{{ url('/contact_information') }}">Contact
                                        Information</a>
                                </li>
                            </ul>
                        </div>
                        <div class="dropdown">
                            <button class="dropdown-toggle btn text-white" style="margin-top: 2px;" id="dropdownMenu1"
                                data-bs-toggle="dropdown" aria-expanded="false">
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
                            <button class="dropdown-toggle btn text-white" style="margin-top: 2px;" id="dropdownMenu1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Transparency at Work
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a class="dropdown-item" href="{{ url('/downloadable_files') }}">Downloadables</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ url('/faqs') }}">FAQ's</a></li>
                                <li><a class="dropdown-item" href="{{ url('/job_vacancies') }}">Job Vacancies</a>
                                </li>
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
            <div class="header"
                style="padding: 20px; background: #e4e1e1; color: #030303; margin-bottom: 10px; display: flex; justify-content: space-between; align-items: center;">
                <a href="/about_us"> <img width="500" height="auto" style="max-width: 100%; height:auto;"
                        src="{{ asset('/img/dilg-bohol.png') }}"></a>
                <button class="btn btn-light ml-auto" style="background-color:transparent; border:none;"
                    data-bs-toggle="modal" data-bs-target="#calendarModal">
                    <div class="date-formate" style="font-size: 15px; font-weight:bold;">dd - mm - yyyy</div>
                    <div class="time-formate" style="font-size: 15px; font-weight:bold;">hh:mm:ss</div>
                </button>

                <div class="modal fade" id="calendarModal" tabindex="-1" aria-labelledby="calendarModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="calendarModalLabel">Calendar</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="calendar">
                                    <div class="calendar-header">
                                        <span class="month-picker" id="month-picker"> May </span>
                                        <div class="year-picker" id="year-picker">
                                            <span class="year-change" id="pre-year">
                                                <pre><</pre>
                                            </span>
                                            <span id="year">2020 </span>
                                            <span class="year-change" id="next-year">
                                                <pre>></pre>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="calendar-body">
                                        <div class="calendar-week-days">
                                            <div>Sun</div>
                                            <div>Mon</div>
                                            <div>Tue</div>
                                            <div>Wed</div>
                                            <div>Thu</div>
                                            <div>Fri</div>
                                            <div>Sat</div>
                                        </div>
                                        <div class="calendar-days">
                                        </div>
                                    </div>

                                    <div class="month-list"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @yield('content')
        </main>

    </div>

    <div class="" style=" padding: 20px; background: #234495; color: #DCDCDC;">
        <footer class="sticky-footer">
            <div class="container">
                <div class="copyright text-center">
                    <a href="/about_us" style="text-decoration:none;">
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
                            <a href="https://pro7.pnp.gov.ph/"> <img src="/img/pnp.png" alt="" style="height: 50px;">
                            </a>
                        </div>
                    </div>
                </div>
                <p class="text-center mt-3" style="color:silver; font-size: 8px;">&copy;DILG-BOHOL PROVINCE 2023</p>
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
                                <p class="text-secondary" style="font-size: 12px; font-weight: 300; margin-top: -15px;">
                                    Office of the Vice
                                    President</p>
                            </a>
                            <a href="http://legacy.senate.gov.ph/" target="_blank">
                                <p class="text-secondary" style="font-size: 12px; font-weight: 300; margin-top: -15px;">
                                    Senate of the
                                    Philippines</p>
                            </a>
                            <a href="https://www.congress.gov.ph/" target="_blank">
                                <p class="text-secondary" style="font-size: 12px; font-weight: 300; margin-top: -15px;">
                                    House of
                                    Representatives</p>
                            </a>
                            <a href="https://sc.judiciary.gov.ph/" target="_blank">
                                <p class="text-secondary" style="font-size: 12px; font-weight: 300; margin-top: -15px;">
                                    Supreme Court</p>
                            </a>
                            <a href="https://ca.judiciary.gov.ph/" target="_blank">
                                <p class="text-secondary" style="font-size: 12px; font-weight: 300; margin-top: -15px;">
                                    Court of Appeals</p>
                            </a>
                            <a href="https://sb.judiciary.gov.ph/" target="_blank">
                                <p class="text-secondary" style="font-size: 12px; font-weight: 300; margin-top: -15px;">
                                    Sandiganbayan</p>
                            </a>
                            </p>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="text-center">
                                <p class="text-secondary" style="font-size: 12px;"><span>Current Date: </span>
                                    {{ date('F d, Y') }}
                                </p>
                            </div>

                            <p class="text-secondary" style="font-size: 12px;"><span> Visitor Counter </span>
                                <a href='http://www.freevisitorcounters.com'>here</a>
                                <script type='text/javascript'
                                    src='https://www.freevisitorcounters.com/auth.php?id=7b6df58795f1b38d7f8e8e7d2214693c40ed1e60'></script>
                                <script type="text/javascript"
                                    src="https://freevisitorcounters.com/en/home/counter/1129813/t/0"></script>
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
                <div class="modal fade bd-example-modal-sm mt-4 mb-5" tabindex="-1" role="dialog"
                    aria-labelledby="mySmallModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg ">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: #234495; display: flex;
                            justify-content: center;
                            align-items: center;">
                                <button type="button" class="close text-end" style="background-color: #234495; position: absolute;
                                top: 0;
                                right: 0;
                                margin-top: -10px;
                                margin-right: 0px;" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h1 class="text-center mx-auto"
                                    style="font-size: 16px; color:white; font-weight: 500; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">
                                    Developed by: <br>
                                    Mater Dei College Information Technology Interns</h1>
                            </div>
                            <div class="modal-body rounded mx-auto">
                                <div class="container">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6 text-center">
                                                <p class="old-font">Mater Dei College</p>
                                                <img src="/img/MDC_LOGO.png" height="200" width="200"
                                                    style="max-height: 75%; max-width:75%; width: auto; height: auto; margin-top:-15px;"
                                                    alt="">
                                            </div>
                                            <div class="col-md-6">
                                                <div>
                                                    <a href="https://github.com/viennarose" target="_blank">
                                                        <img src="/img/vienna.jpg" width="18%" class="rounded" />
                                                        <span style="color:dimgray; font-size: 18px;">&nbsp; Vienna
                                                            Rose Pepito
                                                            &nbsp;&nbsp;</span></a>
                                                </div>
                                                <div class="mt-3">
                                                    <a href="https://github.com/xplct-cont" target="_blank">
                                                        <img src="/img/kenn.jpg" width="18%" class="rounded" />
                                                        <span style="color:dimgray; font-size: 18px;">&nbsp; Kenn
                                                            Secusana
                                                            &nbsp;&nbsp;</span></a>
                                                </div>
                                                <div class="mt-3">
                                                    <a href="https://github.com/chadiegil" target="_blank">
                                                        <img src="/img/chadie.jpg" width="18%" class="rounded" />
                                                        <span style="color:dimgray; font-size: 18px;">&nbsp; Chadie Gil
                                                            Augis
                                                            &nbsp;&nbsp;</span></a>
                                                </div>
                                                <div class="mt-3">
                                                    <a href="https://github.com/dfkhin" target="_blank">
                                                        <img src="/img/franklin.jpg" width="18%" class="rounded" />
                                                        <span style="color:dimgray; font-size: 18px;">&nbsp; Franklin
                                                            Pogoy
                                                            &nbsp;&nbsp;</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <p class="text-center mb-3" style="font-size: 12px; color:dimgray;"> Contact No:
                                    09096027312</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button onclick="topFunction()" id="myBtn" title="Go to top" style="background: #002C76; color:white;"><span
                    class="fas fa-chevron-up"></span></button>

</body>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const isLeapYear = (year) => {
            return (year % 4 === 0 && year % 100 !== 0) || (year % 100 === 0 && year % 400 === 0);
        };

        const getFebDays = (year) => isLeapYear(year) ? 29 : 28;

        const monthNames = [
            'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'
        ];

        const calendar = document.querySelector('.calendar');
        const monthPicker = document.querySelector('#month-picker');
        const dayTextFormate = document.querySelector('.day-text-formate');
        const timeFormate = document.querySelector('.time-formate');
        const dateFormate = document.querySelector('.date-formate');
        const monthList = calendar.querySelector('.month-list');
        const calendarDays = document.querySelector('.calendar-days');
        const calendarHeaderYear = document.querySelector('#year');
        const currentDate = new Date();
        let currentMonth = { value: currentDate.getMonth() };
        let currentYear = { value: currentDate.getFullYear() };

        const generateCalendar = (month, year) => {
            calendarDays.innerHTML = '';
            const daysInMonth = [31, getFebDays(year), 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
            const firstDay = new Date(year, month, 1);
            monthPicker.innerHTML = monthNames[month];
            calendarHeaderYear.innerHTML = year;

            for (let i = 0; i < daysInMonth[month] + firstDay.getDay(); i++) {
                const day = document.createElement('div');
                const dayOfMonth = i - firstDay.getDay() + 1;

                if (i >= firstDay.getDay()) {
                    day.innerHTML = dayOfMonth;
                    if (dayOfMonth === currentDate.getDate() && year === currentDate.getFullYear() && month === currentDate.getMonth()) {
                        day.classList.add('current-date');
                    }
                }

                calendarDays.appendChild(day);
            }
        };

        const updateDateTime = () => {
            const currDate = new Date();
            const dateOptions = { year: 'numeric', month: 'long', day: 'numeric', weekday: 'long' };
            const timeOptions = { hour: 'numeric', minute: 'numeric', second: 'numeric' };

            dateFormate.textContent = new Intl.DateTimeFormat('en-US', dateOptions).format(currDate);

            setInterval(() => {
                const timer = new Date();
                timeFormate.textContent = new Intl.DateTimeFormat('en-us', timeOptions).format(timer);
            }, 1000);
        };

        const handleMonthPickerClick = () => {
            monthList.classList.toggle('show');
            dayTextFormate.classList.toggle('hidetime');
            timeFormate.classList.toggle('hideTime');
            dateFormate.classList.toggle('hideTime');
        };

        const handleMonthSelection = (index) => {
            currentMonth.value = index;
            generateCalendar(currentMonth.value, currentYear.value);
            monthList.classList.replace('show', 'hide');
            dayTextFormate.classList.remove('hidetime');
            dayTextFormate.classList.add('showtime');
            timeFormate.classList.remove('hideTime');
            timeFormate.classList.add('showtime');
            dateFormate.classList.remove('hideTime');
            dateFormate.classList.add('showtime');
        };

        const handleYearChange = (increment) => {
            currentYear.value += increment;
            generateCalendar(currentMonth.value, currentYear.value);
        };

        const initializeMonthList = () => {
            monthNames.forEach((month, index) => {
                const monthElement = document.createElement('div');
                monthElement.innerHTML = `<div>${month}</div>`;
                monthElement.onclick = () => handleMonthSelection(index);
                monthList.appendChild(monthElement);
            });
            monthList.classList.add('hideonce');
        };

        const handleYearNavigation = () => {
            document.querySelector('#pre-year').onclick = () => handleYearChange(-1);
            document.querySelector('#next-year').onclick = () => handleYearChange(1);
        };

        const initCalendar = () => {
            generateCalendar(currentMonth.value, currentYear.value);
            initializeMonthList();
            handleYearNavigation();
            monthPicker.addEventListener('click', handleMonthPickerClick);
            updateDateTime();
        };

        initCalendar();
    });

</script>
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
    window.onscroll = function () {
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