@extends('layouts.app')
@section('content')
    <div>
        @csrf
        <div class="text-center">
            <img src='img/Background.png' width="1370" style="max-width: 100%; height:auto;">
        </div>
        <p></p>
        <div class="header ml-3 mr-3" style=" padding: 7px; background: #234495; color: #FFFFFF; margin-bottom: 5px;">
            <h1 class="text-center" style="font-size: 18px; margin-top: 10px;">ABOUT US</h1>
            @php
                $audio = DB::table('audios')->get();
            @endphp

            @foreach ($audio as $aud)
                <audio controls autoplay hidden>
                    <source src="{{ asset('audio/' . $aud->file) }}" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
            @endforeach
        </div>

        <div class="col-md-11 mx-auto mt-3">
           
            <div class="">
                <ul class="text-justify list-group">

                    <li class="list-group-item"> <span class="fas fa-arrow-right mr-3" style="color:#002c76"></span> The
                        Department of
                        the Interior
                        and
                        Local Government is a dynamic government
                        agency mandated by law
                        to assist the President in the exercise of general supervision over local governments (Local
                        Government Code of 1991)</li>
                    <li class="list-group-item"><span class="fas fa-arrow-right mr-3" style="color:#002c76"></span>
                        The Department was created under Republic Act No. 6975, otherwise known as the DILG Act of 1990, in
                        order to promote peace and order, ensure public safety and further strengthen local government
                        capability aimed towards the effective delivery of basic services to the citizenry. The operating
                        offices and bureaus responsible for the peace and order and public safety functions of the
                        Department are the National Police Commission (NAPOLCOM), Philippine National Police (PNP), Bureau
                        of Fire Protection (BFP), Bureau of Jail Management and Penology (BJMP) and the Philippine Public
                        Safety College (PPSC). The Department is headed by the Secretary who is also the ex-officio chairman
                        of the NAPOLCOM. DILG has established regional offices throughout the country to implement the
                        policies and programs of the Department. It continues to work closely with local government units
                        (LGUs), national government agencies (NGAs), and civil society, including non-government
                        organizations (NGOs) and people's organizations (POs).
                    </li>
                </ul>
            </div>
        </div>


        <div class="col-md-12 mx-auto mt-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="d-flex justify-content-center">
                        <div class="col-md-1 mx-auto">
                            <img src="img/goal.png" style="height: 150px;" alt="">
                        </div>
                        <div class="col-md-5 mx-auto">
                            <h1 class="text-center" style="font-size: 22px;">Our Mission</h1>
                            <p class="text-justify">The Department shall ensure peace and order, public safety and security,
                                uphold excellence in local governance and enable resilient and inclusive communities.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">

                    <div class="d-flex justify-content-center">
                        <div class="col-md-1 mx-auto">
                            <img src="img/lightbulb.png" style="height: 150px;" alt="">
                        </div>
                        <div class="col-md-5 mx-auto">
                            <h1 class="text-center" style="font-size: 22px;">Our Vision</h1>
                            <p class="text-justify">A highly trusted Department and Partner in nurturing local governments
                                and sustaining peaceful, safe, progressive, resilient, and inclusive communities towards a
                                comfortable and secure life for Filipinos by 2040.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 mx-auto">

            <div class="d-flex justify-content-center">
                <div class="col-md-10 mx-auto">
                    <div class="text-center">
                        <img class="" src="img/star.png" style="height: 150px;" alt="">
                    </div>
                    <h1 class="text-center" style="font-size: 22px;">Our Shared Values</h1>
                    <p class="text-center">Ang DILG ay Matino, Mahusay, at Maasahan</p>
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
