@extends('layouts.app')

@section('content')
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
                    style="background-color: #234495; color: white; width: 300px; overflow:auto; border-radius:10px;">THE
                    PROVINCIAL
                    DIRECTOR
                    <span class="fas fa-arrow-right" style="margin-left:38px;"></span></a><br><br>
                <a href="{{ route('/about') }}" type="button" class="btn btn-md"
                    style="background-color: #234495; color: white; width: 300px; overflow:auto; border-radius:10px;">VISION
                    &
                    MISSION <span class="fas fa-arrow-right" style="margin-left: 100px;"></span></a><br><br>
                <a href="{{ url('/latest_issuances') }}" type="button" class="btn btn-md"
                    style="background-color: #234495; color: white; width: 300px; overflow:auto; border-radius:10px;">LATEST
                    ISSUANCES
                    <span class="fas fa-arrow-right" style="margin-left: 100px;"></span></a>

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

    <div class="mt-4 ml-3 mr-3" style=" padding: 7px; background: #234495; color: #FFFFFF; margin-bottom: 5px;">
        <h1 class="text-center" style="font-size: 18px; margin-top: 10px;">NEWS & UPDATES</h1>
    </div>

    <div class="mx-auto mt-3 col-md-11">
        <div class="">
            @csrf
            @foreach ($news_images as $new)
                <div class="card">
                    <div class=" card-body elevation-4">
                        <a href="#" data-toggle="modal" id="news_updates_view_link"
                            data-target="#news_update_id{{ $new->id }}" style="text-decoration:none; color:dimgray">

                            <div class="row d-flex justify-content-center mt-3">
                                <div class="col-md-6 mx-auto mt-5 ">

                                    <h1 style="font-size: 18px; font-weight: 500; color:dimgray;">
                                        Post: {{ \Carbon\Carbon::parse($new->created_at)->format('M j, Y h:i A') }}</h1>
                                    <br>
                                    <p class="text-left" style="font-size: 18px;">{{ $new->title }}</p>
                                    <p class="text-left" style="font-size: 15px; font-weight: 400;">
                                        {{ Illuminate\Support\Str::limit($new->caption, 500) }}</p>
                                </div>
                                <div class="col-md-6">
                                    <div class="" style="height: 360px;">

                                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                                    class="active">
                                                </li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner text-center" style="height:350px;">
                                                @php
                                                    $images = json_decode($new->images, true);
                                                @endphp
                                                @foreach ($images as $key => $image)
                                                    <div class="carousel-item zoom {{ $key == 0 ? 'active' : '' }}">
                                                        <img src="{{ asset('/news_updates/' . $image) }}"
                                                            style="height:350px; width:100%;" />
                                                    </div>
                                                @endforeach

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                </a>

                <div class="modal fade" id="news_update_id{{ $new->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header ">

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body" style="color:dimgray;">

                                <div class="">
                                    <h1 class="text-end" style="font-size: 18px; font-weight: 500; color:dimgray;">
                                        Post: {{ \Carbon\Carbon::parse($new->created_at)->format('M j, Y h:i A') }}</h1>
                                    <br>
                                    <p class="text-left" style="font-size: 18px;">{{ $new->title }}</p>
                                    <p class="text-left" style="font-size: 15px; font-weight: 400;">
                                        {{ $new->caption }}</p>

                                    <div class="" style="height: 365px;">

                                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                                    class="active"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>

                                            </ol>
                                            <div class=" carousel-inner text-center" style="height:350px;">
                                                @php
                                                    $images = json_decode($new->images, true);
                                                @endphp
                                                @foreach ($images as $key => $image)
                                                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                                        <img src="{{ asset('/news_updates/' . $image) }}"
                                                            style="height:350px; width:100%;" />
                                                    </div>
                                                @endforeach

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>
    </div>

    <div class="d-flex justify-content-center mb-5 mt-3">
        <a href="{{ url('/news_update') }}" type="button" class="btn btn-sm"
            style="background-color: #234495; color: white; border-radius: 20px; padding-left: 20px; padding-right: 20px;"
            href="#">See more...</a>
    </div>

    <div class="mt-4 ml-3 mr-3" style=" padding: 7px; background: #234495; color: #FFFFFF; margin-bottom: 5px;">
        <h1 class="text-center" style="font-size: 18px; margin-top: 10px;">LATEST ISSUANCES</h1>
    </div>

    <div class="card-body">
        <table class="table bg-light table-bordered table-hover text-secondary">
            <tbody class="elevation-4">
                @foreach ($latest_issuances as $issuances)
                    <tr>
                        <td class="" style="font-size: 16px;"><a
                                href="{{ url('/latest_issuances/' . $issuances->id) }}">
                                {{ $issuances->title }} </a><br>
                            <p class="mt-2" style="font-size: 12px;">
                                {{ Carbon\Carbon::parse($issuances->date)->format('F d, Y') }}
                            </p>
                            <p class="text-center" style="font-size: 12px;">
                                {{ $issuances->outcome_area }}</p>
                        </td>
                        <td class="" style="background-color:#234495; color:white;  font-size: 12px;">
                            Reference No: <span
                                style="font-size: 15px; font-weight: 350; color:white;">{{ $issuances->reference_num }}</span>
                            <p class="text-center mt-2" style=" font-size: 14px">
                                {{ $issuances->category }}</p>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-center mb-5 mt-3">
        <a href="{{ url('/latest_issuances') }}" type="button" class="btn btn-sm"
            style="background-color: #234495; color: white; border-radius: 20px; padding-left: 20px; padding-right: 20px;"
            href="#">See more...</a>
    </div>

    <div class="col-md-12 mb-5">
        <div class="row">
            <div class="col-md-6">
                <p class="text-center" style="font-size: 25px; font-weight: 500;">Location Map</p>
                <iframe class="col-md-12"
                    src="https://maps.google.com/maps?q=rajah sikatuna tagbilaran&t=k&z=16&ie=UTF8&iwloc=&output=embed"
                    height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" class="rounded"></iframe>
            </div>
            <div class="col-md-6 mb-5">
                <p class="text-justify mt-2" style="font-size: 20px; font-weight: 500;">
                    DILG R7 - Bohol Province</p>

                <div id="Container " class="mx-auto"
                    style="padding-bottom:56.25%; position:relative; display:block; width: 100%">
                    <iframe id="UstreamIframe"
                        src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fdilgboholprovince&tabs=timeline&width=950&height=450&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                        width="100%" height="120%" style="position:absolute; top:0; left: 0" allowfullscreen
                        webkitallowfullscreen frameborder="0" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>

                </div>
            </div>

            <div class="container mx-auto mt-1 col-md-12">
                <iframe src="https://www.youtube.com/embed/NDseKmeNMt8" style="height:550; width:100%;" frameborder="0">

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
        transform: scale(0.9);
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

    /* .card:hover {
        transform: translateY(-5px) scale(1.005) translateZ(0);
        box-shadow: 0 24px 36px silver,
            0 24px 46px var(--box-shadow-color);
    } */

    .card:hover .overlay {
        transform: scale(8) translateZ(0);
    }
</style>
