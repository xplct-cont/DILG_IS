@extends('layouts.app')
@section('content')
    <div class="header mb-5 ml-3 mr-3" style=" padding: 7px; background: #002c76; color: #FFFFFF; margin-bottom: 5px;">
        <h1 class="text-center" style="font-size: 18px; margin-top: 10px; ">DOWNLOADABLES</h1>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($downloadables as $dw)
                <div class="col-sm-6 col-md-4 col-lg-4 mb-4">
                    <div class="card elevation-4">
                        <img src="img/dilg-main.png" class="p-1" style="height: 50px; width: 50px;" alt="">

                        <div class="card-body" style="height: 130px;">
                            <p class="text-center text-wrap" style="color:rgb(56, 56, 56);">{{ $dw->title }}</p>

                        </div>
                        <a href="{{ $dw->link }}" target="_blank" class="bg-secondary  text-center"
                            style="text-decoration:none; padding-top:8px;
                         padding-bottom:8px;">
                            <span class="text-light">View Details</span></a>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
