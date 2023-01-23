@extends('layouts.app')
@section('content')
    <div>
        <img style=" width: 100%; height: auto;" src="{{ asset('/img/facade.png') }}">
        <p></p>
        <div class="header ml-3 mr-3" style=" padding: 7px; background: #002c76; color: #FFFFFF; margin-bottom: 5px;">
            <h1 class="text-center" style="font-size: 18px; margin-top: 10px;">ABOUT US</h1>
        </div>

        <div class="container">
            <h1>Who we are</h1>
            <div class="container">
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

        <div class="container">
            <h1>Powers & Functions</h1>
            <div class="container">
                <ul class="text-justify list-group">
                    <li class="list-group-item"> <span class="fas fa-arrow-right mr-3" style="color:#002c76"></span> Assist
                        the
                        President in the
                        exercise of general supervision over local
                        governments
                    </li>
                    <li class="list-group-item"> <span class="fas fa-arrow-right mr-3" style="color:#002c76"></span> Advise
                        the
                        President in the
                        promulgation of policies, rules, regulations and
                        other issuances on the
                        general supervision over local governments and on public order and safety
                    </li>
                    <li class="list-group-item"> <span class="fas fa-arrow-right mr-3" style="color:#002c76"></span>
                        Establish and prescribe rules, regulations and other issuances implementing laws on public order and
                        safety, the general supervision over local governments and the promotion of local autonomy and
                        community empowerment and monitor compliance thereof;

                    </li>
                    <li class="list-group-item"> <span class="fas fa-arrow-right mr-3" style="color:#002c76"></span> Provide
                        assistance
                        towards
                        legislation regarding local governments, law
                        enforcement and public
                        safety;
                    </li>
                    <li class="list-group-item"> <span class="fas fa-arrow-right mr-3" style="color:#002c76"></span>
                        Establish and
                        prescribe
                        plans, policies, programs and projects to promote
                        peace and order, ensure
                        public safety and further strengthen the administrative, technical and fiscal capabilities of local
                        government offices and personnel;
                    </li>
                    <li class="list-group-item"> <span class="fas fa-arrow-right mr-3" style="color:#002c76"></span>
                        Formulate plans,
                        policies and
                        programs which will meet local emergencies
                        arising from natural and
                        man-made disasters;
                    </li>
                    <li class="list-group-item"> <span class="fas fa-arrow-right mr-3 " style="color: #002c76"></span>
                        Establish a system
                        of
                        coordination and cooperation among the citizenry,
                        local executives and the
                        Department, to ensure effective and efficient delivery of basic services to the public; and
                    </li>
                    <li class="list-group-item"> <span class="fas fa-arrow-right mr-3" style="color: #002c76"></span>
                        Organize, train and
                        equip
                        primarily for the performance of police functions,
                        a police force that is
                        national in scope and civilian in character.
                    </li>
                </ul>
            </div>
        </div>

        <div class="container d-flex align-items-center justify-content-around mt-5">
            <div class="row m-1">

                <a href="#" style="text-decoration: none; color:#030303;">
                    <div class="card elevation-4">
                        <div class="row d-flex justify-content-center mt-3 ml-3 mr-3  ">
                            <div class="col-md-6 ">
                                <h1 style="font-size: 15px;">December 15, 2022</h1><br>
                                <p class="text-left" style="font-size: 16px;">DILG conferred the Seal of Good Local
                                    Governance
                                    (SGLG) Award to LGU Alburquerque </p>
                                <p class="text-left" style="font-size: 13px; font-weight: 300;"> The activity was also
                                    attended by DILG 7 Regional Director Leocadio Trovela, CESO III, Assistant Regional
                                    Director
                                    Maria Loisella Lucino, CESO IV, DILG Bohol Provincial Director Jerome Gonzales, LGMED
                                    Chief
                                    Celerino Magto Jr. and SGLG Regional and Provincial Focal Persons.</p>
                            </div>
                            <div class="col-md-6">
                                <div class="card" style="height: 300px;">
                                    <img src="{{ asset('/img/img3.jpg') }}" alt=""
                                        style="height: 300px; width:auto;">
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" style="text-decoration: none; color:#030303;">
                    <div class="card elevation-4">
                        <div class="row d-flex justify-content-center mt-3 ml-3 mr-3  ">
                            <div class="col-md-6 ">
                                <h1 style="font-size: 15px;">December 15, 2022</h1><br>
                                <p class="text-left" style="font-size: 16px;">DILG conferred the Seal of Good Local
                                    Governance
                                    (SGLG) Award to LGU Alburquerque </p>
                                <p class="text-left" style="font-size: 13px; font-weight: 300;"> The activity was also
                                    attended by DILG 7 Regional Director Leocadio Trovela, CESO III, Assistant Regional
                                    Director
                                    Maria Loisella Lucino, CESO IV, DILG Bohol Provincial Director Jerome Gonzales, LGMED
                                    Chief
                                    Celerino Magto Jr. and SGLG Regional and Provincial Focal Persons.</p>
                            </div>
                            <div class="col-md-6">
                                <div class="card" style="height: 300px;">
                                    <img src="{{ asset('/img/img3.jpg') }}" alt=""
                                        style="height: 300px; width:auto;">
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" style="text-decoration: none; color:#030303;">
                    <div class="card elevation-4">
                        <div class="row d-flex justify-content-center mt-3 ml-3 mr-3  ">
                            <div class="col-md-6 ">
                                <h1 style="font-size: 15px;">December 15, 2022</h1><br>
                                <p class="text-left" style="font-size: 16px;">DILG conferred the Seal of Good Local
                                    Governance
                                    (SGLG) Award to LGU Alburquerque </p>
                                <p class="text-left" style="font-size: 13px; font-weight: 300;"> The activity was also
                                    attended by DILG 7 Regional Director Leocadio Trovela, CESO III, Assistant Regional
                                    Director
                                    Maria Loisella Lucino, CESO IV, DILG Bohol Provincial Director Jerome Gonzales, LGMED
                                    Chief
                                    Celerino Magto Jr. and SGLG Regional and Provincial Focal Persons.</p>
                            </div>
                            <div class="col-md-6">
                                <div class="card" style="height: 300px;">
                                    <img src="{{ asset('/img/img3.jpg') }}" alt=""
                                        style="height: 300px; width:auto;">
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="text-center m-2 mb-4">
            <h4 class="fw-bold">Our Slogan</h4>
            <h5 class="fw-bold">Matino | Mahusay | Maaasahan</h5>
        </div>
    </div>
@endsection
