@extends('layouts.app')

@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>

        </ol>
        <div class="carousel-inner" style="height:600px;">
            <div class="carousel-item active">
                <img src="{{ asset('img/img5.png') }}" class="d-block w-100" style="height: 600px;" alt="..." />
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/img4.jpg') }}" class="d-block w-100" style="height: 600px;" alt="..." />
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/img5.png') }}" class="d-block w-100" style="height: 600px;" alt="..." />
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-5 mb-5 ">

                <a href="#" type="button" class="btn btn-md"
                    style="background-color: #C9282D; color: white; padding-right: 10px; border-radius:10px;">THE DIRECTOR
                    <span class="fas fa-arrow-right" style="margin-left: 131px;"></span></a><br><br>
                <a href="#" type="button" class="btn btn-md"
                    style="background-color: #C9282D; color: white; padding-right: 10px; border-radius:10px;">VISION &
                    MISSION <span class="fas fa-arrow-right" style="margin-left: 100px;"></span></a><br><br>
                <a href="#" type="button" class="btn btn-md"
                    style="background-color: #C9282D; color: white; padding-right: 10px; border-radius:10px;">GOALS &
                    OBJECTIVES <span class="fas fa-arrow-right" style="margin-left: 81px;"></span></a>

            </div>
            <div class="col-md-6 mt-5 mb-5">
                <h1 class="text-left" style="font-size: 22px; font-weight: 500;">Department of the Interior and Local
                    Government</h1>
                <p class="text-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    The DILG is the executive department of the Philippine government responsible for promoting peace and
                    order, ensuring public safety and strengthening local government capability aimed towards the effective
                    delivery of basic services to the citizenry.</p>
            </div>
        </div>
    </div>



    <div class="header mt-4 ml-3 mr-3" style=" padding: 7px; background: #002c76; color: #FFFFFF; margin-bottom: 5px;">
        <h1 class="text-center" style="font-size: 18px; margin-top: 10px;">PROJECTS</h1>
    </div>
    <div>
        <x-projects />
    </div>
    <div class="d-flex justify-content-center mb-5 mt-3">
        <a href="{{ url('/project') }}" type="button" class="btn btn-sm"
            style="background-color: #C9282D; color: white; border-radius: 20px; padding-left: 20px; padding-right: 20px;"
            href="#">See more...</a>

    </div>

    <div class="mt-4" style=" padding: 7px; background: #002c76; color: #FFFFFF; margin-bottom: 5px;">
        <h1 class="text-center" style="font-size: 18px; margin-top: 10px;">NEWS & UPDATES</h1>
    </div>

    <div class="mx-auto col-md-11 d-flex align-items-center justify-content-around mt-5">
        <div class="row m-1">

            @php
                $show = DB::table('news')
                    ->limit(3)
                    ->get();
            @endphp
            @foreach ($show as $new)
                <a href="#" style="text-decoration: none; color:#030303;">
                    <div class="card elevation-4">
                        <div class="row d-flex justify-content-center mt-3 ml-3 mr-3  ">
                            <div class="col-md-6 mx-auto mt-5 ">

                                <h1 style="font-size: 20px;">
                                    Post: {{ \Carbon\Carbon::parse($new->datetime)->format('M j, Y h:i a') }}</h1><br>
                                <p class="text-left" style="font-size: 18px;">{{ $new->title }}</p>
                                <p class="text-left" style="font-size: 15px; font-weight: 400;"> {{ $new->caption }}</p>
                            </div>
                            <div class="col-md-6">
                                <div class=" d-flex flex-row align-items-center justify-content-around "
                                    style="height: 400px;">
                                    @php
                                        $images = json_decode($new->image, true);
                                        $newArray = [];
                                        if (is_array($images) && !empty($images)) {
                                            foreach ($images as $image) {
                                                array_push($newArray, $image);
                                            }
                                        }
                                    @endphp

                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                                class="active"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>

                                        </ol>
                                        <div class="carousel-inner" style="height:300px;">
                                            @foreach ($newArray as $key => $image)
                                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                                    <img src="{{ asset('app/public/' . $image) }}"
                                                        style="height:300px; width:auto;" />
                                                </div>
                                            @endforeach

                                        </div>
                                        <button class="carousel-control-prev" type="button"
                                            data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button"
                                            data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    {{-- <div class="mx-auto col-md-11 d-flex align-items-center justify-content-around mt-5">
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
                                <img src="{{ asset('/img/img3.jpg') }}" alt="" style="height: 300px; width:auto;">
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
    </div> --}}
    </div>
    </div>

    <div class="d-flex justify-content-center mb-5 mt-3">
        <a href="{{ url('/news-update') }}" type="button" class="btn btn-sm"
            style="background-color: #C9282D; color: white; border-radius: 20px; padding-left: 20px; padding-right: 20px;"
            href="#">See more...</a>
    </div>

    <style scoped>
    </style>
@endsection