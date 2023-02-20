@extends('layouts.app')

@section('content')
    <div class="header ml-3 mr-3" style=" padding: 7px;background: #002c76; color: #FFFFFF; margin-bottom: 5px;">
        <h1 class="text-center" style="font-size: 18px; margin-top: 10px;">NEWS & UPDATES</h1>
    </div>

    <div class="container d-flex justify-content-center">
        <div class="row">
            <div class="col-md-6 mt-5">
                <input style="border-radius: 20px;" type="date" name="" id="" class="form-control">

            </div>
            <div class="col-md-6 mt-5">
                <div class="form-group has-search " style="margin:auto;">
                    <span class="fa fa-search form-control-feedback"></span>
                    <input type="text" style="border-radius: 20px;" class="form-control input" placeholder="Search">
                </div>
            </div>
        </div>
    </div>


    <div class="mx-auto mt-3 col-md-11">
        <div class="">
            @foreach ($news_images as $new)
                <div class="card">
                    <div class=" card-body elevation-4">
                        <a href="#" data-toggle="modal" id="news_updates_view_link"
                            data-target="#news_update_id{{ $new->id }}" style="text-decoration:none; color:dimgray">

                            <div class="row d-flex justify-content-center mt-3">
                                <div class="col-md-6 mx-auto mt-5 ">

                                    <h1 style="font-size: 18px; font-weight: 500; color:dimgray;">
                                        Post: {{ \Carbon\Carbon::parse($new->created_at)->format('M j, Y h:i A') }}</h1><br>
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
                                        Post: {{ \Carbon\Carbon::parse($new->created_at)->format('M j, Y h:i A') }}</h1><br>
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
@endsection
