@extends('layouts.app')

@section('content')
   
    <div class="mx-auto text-center">
        <div class="">
            @csrf
            @foreach ($updates_images as $updates_img)
                <div>
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>

                        </ol>
                        <div class="carousel-inner responsive">
                            @php
                                $images = json_decode($updates_img->images, true);
                            @endphp
                            @foreach ($images as $key => $image)
                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                    <img class="responsive" src="{{ asset('updates_images/' . $image) }}" height="500"
                                        width="1250" />
                                </div>
                            @endforeach

                        </div>

                    </div>

                </div>
            @endforeach
        </div>

    </div>
    <div class="header ml-3 mr-3 mt-2" style=" padding: 7px;background: #234495; color: #FFFFFF; margin-bottom: 5px;">
        <h1 class="text-center" style="font-size: 18px; margin-top: 10px;">NEWS & UPDATES</h1>
    </div>
    <livewire:normal.updates.index>

@endsection

<style>
     .responsive {
        max-width: 100%;
        height: auto;
    }
</style>
