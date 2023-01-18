@extends('layouts.app')

@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner" style="height:450px;">
            <div class="carousel-item active">
                <img src="{{ asset('img/img4.jpg') }}" class="d-block w-100" alt="..." style="height: 450px;" />
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/img5.png') }}" class="d-block w-100" alt="..." style="height: 450px;" />
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/img3.jpg') }}" class="d-block w-100" alt="..." style="height: 450px;"/>
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
                <div class="col-md-6 mt-5 mb-5">

                            <button class="btn btn-md" style="background-color: #C9282D; color: white; padding-right: 10px; border-radius:10px;">THE DIRECTOR <span class="fas fa-arrow-right" style="margin-left: 100px;"></span></button><br><br>
                            <button class="btn btn-md" style="background-color: #C9282D; color: white; padding-right: 60px; border-radius:10px;">THE DIRECTOR <span class="fas fa-arrow-right"></span></button><br><br>
                            <button class="btn btn-md" style="background-color: #C9282D; color: white; padding-right: 60px; border-radius:10px;">THE DIRECTOR <span class="fas fa-arrow-right"></span></button>

                        </div>
                <div class="col-md-6">

                </div>

            </div>
        </div>

@endsection
