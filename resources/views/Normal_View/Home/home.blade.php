@extends('layouts.app')

@section('content')
    {{-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>

        </ol>
        <div class="carousel-inner text-center">

            <div class="carousel-item active ">
                <img src="{{ asset('img/img4.jpg') }}" class="responsive" width="1250" height="400" alt="..." />
            </div>
            <div class="carousel-item ">
                <img src="{{ asset('img/img2.jpg') }}" class="responsive" width="1250" height="400" alt="..." />
            </div>
            <div class="carousel-item ">
                <img src="{{ asset('img/img5.jpg') }}" class="responsive" width="1250" height="400" alt="..." />
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
    </div> --}}

    <div class="mx-auto text-center">
        <div class="">
            @foreach ($home_images as $home_img)
                <div>
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>

                        </ol>
                        <div class="carousel-inner responsive">
                            @php
                                $images = json_decode($home_img->images, true);
                            @endphp
                            @foreach ($images as $key => $image)
                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                    <img class="responsive" src="{{ asset('home_images/' . $image) }}" height="650"
                                        width="1250" />
                                </div>
                            @endforeach

                        </div>

                    </div>

                </div>
            @endforeach
        </div>

    </div>











    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-5 mb-5 ">

                <a href="{{ route('/provincial_director') }}" type="button" class="btn btn-md"
                    style="background-color: #C9282D; color: white; width: 300px; overflow:auto; border-radius:10px;">THE
                    PROVINCIAL
                    DIRECTOR
                    <span class="fas fa-arrow-right" style="margin-left:38px;"></span></a><br><br>
                <a href="{{ route('/about') }}" type="button" class="btn btn-md"
                    style="background-color: #C9282D; color: white; width: 300px; overflow:auto; border-radius:10px;">VISION
                    &
                    MISSION <span class="fas fa-arrow-right" style="margin-left: 100px;"></span></a><br><br>
                <a href="{{ url('/project') }}" type="button" class="btn btn-md"
                    style="background-color: #C9282D; color: white; width: 300px; overflow:auto; border-radius:10px;">PROJECTS
                    <span class="fas fa-arrow-right" style="margin-left: 160px;"></span></a>

            </div>
            <div class="col-md-6 mt-5 mb-5">
                <div class="text-center">
                    <img src="/img/dilg-main.png" style="height: 100px; width: 100px;" alt="">
                </div>

                <h1 class="text-left" style="font-size: 22px; font-weight: 500;">
                    Department of the Interior and Local
                    Government</h1>
                <p class="text-left mt-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    The DILG is the executive department of the Philippine government responsible for promoting peace and
                    order, ensuring public safety and strengthening local government capability aimed towards the effective
                    delivery of basic services to the citizenry.</p>
            </div>
        </div>
    </div>



    <div class="header mt-1 ml-3 mr-3" style=" padding: 7px; background: #002c76; color: #FFFFFF; margin-bottom: 5px;">
        <h1 class="text-center" style="font-size: 18px; margin-top: 10px;">PROJECTS</h1>
    </div>


    <div class="mx-auto">
        <div class="col-md-12">
            <div class="row">
                {{-- @foreach ($projectsAll as $proj)
                    <div class="card col-md-5 m-1 mx-auto">
                        <div class="card-body  text-center">
                            <div class="card-header" style="background-color:#C9282D; color:white;">
                                <h1 style="font-size: 20px;" class="text-center">Province of {{ $proj->province }}</h1>
                            </div>
                            <p class=" text-justify mt-3" style="font-weight: 500; font-size: 16px;">Program: <span
                                    style="font-size: 16px; font-weight: 400;"> {{ $proj->program->title }}</span></p>
                            <p class=" text-justify " style="margin-top: -12px; font-weight: 500; font-size: 16px;">Project
                                Code: <span style="font-size: 16px; font-weight: 400;"> {{ $proj->proj_code }}</span></p>
                            <p class=" text-justify " style="margin-top: -12px; font-weight: 500; font-size: 16px;">Title: <span
                                    style="font-size: 16px; font-weight: 400;"> {{ Illuminate\Support\Str::limit($proj->title, 40) }}</span></p>
                            <p class=" text-justify " style="margin-top: -12px; font-weight: 500; font-size: 16px;">
                                Municipality: <span style="font-size: 16px; font-weight: 400;">
                                    {{ $proj->municipality->municipality }}</span>
                            </p>
                            <p class=" text-justify " style="margin-top: -12px; font-weight: 500; font-size: 16px;">Exact
                                Location: <span style="font-size: 16px; font-weight: 400;"> {{ $proj->exact_loc }}</span></p>
                            <p class=" text-justify " style="margin-top: -12px; font-weight: 500; font-size: 16px;">Type: <span
                                    style="font-size: 16px; font-weight: 400;"> {{ $proj->type }}</span></p>
                            <p class=" text-justify " style="margin-top: -12px; font-weight: 500; font-size: 16px;">Year:
                                <span style="font-size: 16px; font-weight: 400;"> {{ $proj->year }}</span>
                            </p>
                            <p class=" text-justify " style="margin-top: -12px; font-weight: 500; font-size: 16px;">Status:
                                <span style="font-size: 16px; font-weight: 400;"> {{ $proj->status }}</span>
                            </p>
                            <p class=" text-justify " style="margin-top: -12px; font-weight: 500; font-size: 16px;">Total
                                Cost:
                                <span style="font-size: 16px; font-weight: 400;"> {{ $proj->total_cost }}</span>
                            </p>
                            <p class=" text-justify " style="margin-top: -12px; font-weight: 500; font-size: 16px;">
                                Description:
                                <span style="font-size: 16px; font-weight: 400;">{{ Illuminate\Support\Str::limit($proj->description, 30) }}</span>
                            </p>
    
                            <iframe class="col-md-12"
                            src="{{ $proj->municipality->gmap_url}}"
                            height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" class="rounded"></iframe>
                        </div>
                    </div>
                @endforeach --}}
                @foreach ($projectsAll as $proj)
                    <div class="card col-md-5 m-1 mx-auto">
                        <div class="card-body ">
                            <a href="#" data-toggle="modal" id="project_view_link"
                                data-target="#project_id{{ $proj->id }}" style="text-decoration:none; color:dimgray">

                                <div class="card-header" style="background-color:#C9282D; color:white;">
                                    <h1 style="font-size: 20px;" class="text-center">Province of {{ $proj->province }}</h1>
                                </div>
                                <p class=" text-justify mt-3" style="font-weight: 500; font-size: 16px;">Program: <span
                                        style="font-size: 16px; font-weight: 400;"> {{ $proj->program->title }}</span></p>
                                <p class=" text-justify " style="margin-top: -12px; font-weight: 500; font-size: 16px;">
                                    Project
                                    Code: <span style="font-size: 16px; font-weight: 400;"> {{ $proj->proj_code }}</span>
                                </p>
                                <p class=" text-justify " style="margin-top: -12px; font-weight: 500; font-size: 16px;">
                                    Title: <span style="font-size: 16px; font-weight: 400;">
                                        {{ Illuminate\Support\Str::limit($proj->title, 40) }}</span></p>
                                <p class=" text-justify " style="margin-top: -12px; font-weight: 500; font-size: 16px;">
                                    Municipality: <span style="font-size: 16px; font-weight: 400;">
                                        {{ $proj->municipality->municipality }}</span>
                                </p>
                                <p class="" style="margin-top: -12px; font-weight: 500; font-size: 16px;">
                                    Exact
                                    Location: <span style="font-size: 16px; font-weight: 400;">
                                        {{ $proj->exact_loc }}</span></p>
                                <p class=" text-justify " style="margin-top: -12px; font-weight: 500; font-size: 16px;">
                                    Type: <span style="font-size: 16px; font-weight: 400;"> {{ $proj->type }}</span></p>
                                <p class=" text-justify " style="margin-top: -12px; font-weight: 500; font-size: 16px;">
                                    Year: <span style="font-size: 16px; font-weight: 400;"> {{ $proj->year }}</span></p>
                                <p class=" text-justify " style="margin-top: -12px; font-weight: 500; font-size: 16px;">
                                    Status:
                                    <span style="font-size: 16px; font-weight: 400;"> {{ $proj->status }}</span>
                                </p>
                                <p class=" text-justify " style="margin-top: -12px; font-weight: 500; font-size: 16px;">
                                    Total Cost:
                                    <span style="font-size: 16px; font-weight: 400;"> {{ $proj->total_cost }}</span>
                                </p>
                                <p class=" text-justify " style="margin-top: -12px; font-weight: 500; font-size: 16px;">
                                    Description:
                                    <span
                                        style="font-size: 16px; font-weight: 400;">{{ Illuminate\Support\Str::limit($proj->description, 30) }}</span>
                                </p>
                                <iframe class="col-md-12" src="{{ $proj->municipality->gmap_url }}" height="450"
                                    style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade" class="rounded"></iframe>
                        </div>
                        </a>
                    </div>

                    <div class="modal fade" id="project_id{{ $proj->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header ">

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" style="color:dimgray;">
                                    <div class="row">
                                        <div class="col-md-4 text-center">
                                            <img src="img/bohol_seal.png" class="mx-auto elevation-4"
                                                style="height: 130px; width: 130px; border-radius: 50%;" alt="">
                                        </div>
                                        <div class="col-md-8">
                                            <h1 style="font-size: 22px;" class="text-center">Province of
                                                {{ $proj->province }}</h1>

                                            <p class=" text-justify mt-3" style="font-weight: 500; font-size: 16px;">
                                                Program: <span style="font-size: 16px; font-weight: 400;">
                                                    {{ $proj->program->title }}</span>
                                            </p>
                                            <p class=" text-justify "
                                                style="margin-top: -12px; font-weight: 500; font-size: 16px;">
                                                Project
                                                Code: <span style="font-size: 16px; font-weight: 400;">
                                                    {{ $proj->proj_code }}</span>
                                            </p>

                                            <p class=" text-justify "
                                                style="margin-top: -12px; font-weight: 500; font-size: 16px;">
                                                Title:
                                                <textarea style=" height: 90px; background-color:white;" id="" type="text" class="form-control"
                                                    placeholder="" title="" readonly>{{ $proj->title }}</textarea>
                                            </p>

                                            <p class=" text-justify "
                                                style="margin-top: 5px; font-weight: 500; font-size: 16px;">
                                                Municipality: <span style="font-size: 16px; font-weight: 400;">
                                                    {{ $proj->municipality->municipality }}</span>
                                            </p>
                                            <p class=""
                                                style="margin-top: -12px; font-weight: 500; font-size: 16px;">
                                                Exact Location: <span style="font-size: 16px; font-weight: 400;">
                                                    {{ $proj->exact_loc }}</span></p>
                                            <p class=" text-justify "
                                                style="margin-top: -12px; font-weight: 500; font-size: 16px;">
                                                Type: <span style="font-size: 16px; font-weight: 400;">
                                                    {{ $proj->type }}</span>
                                            </p>
                                            <p class=" text-justify "
                                                style="margin-top: -12px; font-weight: 500; font-size: 16px;">
                                                Year: <span style="font-size: 16px; font-weight: 400;">
                                                    {{ $proj->year }}</span>
                                            </p>
                                            <p class=" text-justify "
                                                style="margin-top: -12px; font-weight: 500; font-size: 16px;">
                                                Status:
                                                <span style="font-size: 16px; font-weight: 400;">
                                                    {{ $proj->status }}</span>
                                            </p>
                                            <p class=" text-justify "
                                                style="margin-top: -12px; font-weight: 500; font-size: 16px;">
                                                Total Cost:
                                                <span style="font-size: 16px; font-weight: 400;">
                                                    {{ $proj->total_cost }}</span>
                                            </p>


                                        </div>

                                        <p class=" text-justify "
                                            style="margin-top: -12px; font-weight: 500; font-size: 16px;">
                                            Description:
                                            <textarea style=" height: 150px; background-color:white;" id="" type="text" class="form-control"
                                                placeholder="" title="" readonly>{{ $proj->description }}</textarea>
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>

    <div class="d-flex justify-content-center mb-5 mt-3">
        <a href="{{ url('/project') }}" type="button" class="btn btn-sm"
            style="background-color: #C9282D; color: white; border-radius: 20px; padding-left: 20px; padding-right: 20px;"
            href="#">See more...</a>

    </div>

    <div class="mt-4 ml-3 mr-3" style=" padding: 7px; background: #002c76; color: #FFFFFF; margin-bottom: 5px;">
        <h1 class="text-center" style="font-size: 18px; margin-top: 10px;">NEWS & UPDATES</h1>
    </div>

    <div class="mx-auto mt-3 col-md-11">
        <div class="">

            @foreach ($news_images as $new)
                <a href="#" style="text-decoration: none; color:#030303;">
                    <div class=" card elevation-4">
                        <div class="row d-flex justify-content-center mt-3 ml-3 mr-3  ">
                            <div class="col-md-6 mx-auto mt-5 ">

                                <h1 style="font-size: 20px;">
                                    Post: {{ \Carbon\Carbon::parse($new->created_at)->format('M j, Y h:i A') }}</h1><br>
                                <p class="text-left" style="font-size: 18px;">{{ $new->title }}</p>
                                <p class="text-left" style="font-size: 15px; font-weight: 400;">
                                    {{ Illuminate\Support\Str::limit($new->caption, 500) }}</p>
                            </div>
                            <div class="col-md-5">
                                <div class="col-md-12" style="height: 400px;">

                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                                class="active"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>

                                        </ol>
                                        <div class="carousel-inner text-center" style="height:350px;">
                                            @php
                                                $images = json_decode($new->images, true);
                                            @endphp
                                            @foreach ($images as $key => $image)
                                                <div class="carousel-item zoom {{ $key == 0 ? 'active' : '' }}">
                                                    <img src="{{ asset('/news/' . $image) }}"
                                                        style="height:350px; width:auto;" />
                                                </div>
                                            @endforeach

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
    </div>
    </div>

    <div class="d-flex justify-content-center mb-5 mt-3">
        <a href="{{ url('/news-update') }}" type="button" class="btn btn-sm"
            style="background-color: #C9282D; color: white; border-radius: 20px; padding-left: 20px; padding-right: 20px;"
            href="#">See more...</a>
    </div>
    <div class="col-md-12 mb-5">
        <div class="row">
            <div class="col-md-6">
                <p class="text-center" style="font-size: 25px; font-weight: 500;">Location Map</p>
                <iframe class="col-md-12"
                    src="https://maps.google.com/maps?q=rajah sikatuna avenue&t=k&z=11&ie=UTF8&iwloc=&output=embed"
                    height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" class="rounded"></iframe>
            </div>
            <div class="col-md-6 mb-5">
                <p class="text-justify mt-2" style="font-size: 20px; font-weight: 500;">
                    DILG R7 - Bohol Province</p>

                <div id="Container " class="mx-auto"
                    style="padding-bottom:56.25%; position:relative; display:block; width: 100%">
                    <iframe id="UstreamIframe"
                        src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fdilgboholprovince&tabs=timeline&width=900&height=800&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                        width="100%" height="120%" style="position:absolute; top:0; left: 0" allowfullscreen
                        webkitallowfullscreen frameborder="0" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>

                </div>
            </div>

            <div class="container mx-auto mt-3 col-md-11">
                <iframe src="https://www.youtube.com/embed/x4537UShJl4" style="height:400; width:100%;" frameborder="0">

                </iframe>
            </div>
        </div>
        <div class="elevation-4" style="margin-top: 30px;" id="ww_afa40588f70fd" v='1.3' loc='id'
            a='{"t":"responsive","lang":"en","sl_lpl":1,"ids":["wl5320"],"font":"Arial","sl_ics":"one_a","sl_sot":"celsius","cl_bkg":"image","cl_font":"#FFFFFF","cl_cloud":"#FFFFFF","cl_persp":"#81D4FA","cl_sun":"#FFC107","cl_moon":"#FFC107","cl_thund":"#FF5722"}'>
            Weather for the Following Location: <a href="https://2ua.org/phl/tagbilaran/map/" id="ww_afa40588f70fd_u"
                target="_blank">Tagbilaran map, Philippines</a></div>
        <script async src="https://app1.weatherwidget.org/js/?id=ww_afa40588f70fd"></script>
    </div>
@endsection


<style scoped>
    .zoom {
        transition: transform .2s;
    }

    .zoom:hover {
        -ms-transform: scale(1.2);
        /* IE 9 */
        -webkit-transform: scale(1.2);
        /* Safari 3-8 */
        transform: scale(1.2);
        text-align: center;
        font-size: 10px;
    }

    .responsive {
        max-width: 100%;
        height: auto;
    }

    .card {
        --bg-color: #DCE9FF;
        --bg-color-light: #f1f7ff;
        --text-color-hover: whitesmoke;
        --box-shadow-color: silver;
    }

    .card:hover {
        transform: translateY(-5px) scale(1.005) translateZ(0);
        box-shadow: 0 24px 36px silver,
            0 24px 46px var(--box-shadow-color);
    }

    .card:hover .overlay {
        transform: scale(8) translateZ(0);
    }
</style>
