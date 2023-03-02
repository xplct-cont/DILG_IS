@extends('layouts.app')
@section('content')
    <h1 class="text-center mt-5 " style="font-size: 30px; margin-bottom: 50px;">CITIZENS CHARTER</h1>

    <div class="container">

        @foreach ($cit_charter as $citizen)
            <div class="bg-secondary p-1 mr-3 ml-3" style="">
                <p class="text-wrap text-center mt-1" style="font-weight: 500; font-size: 18px;">{{ $citizen->title }}</p>
            </div>

            <div class="mb-5 mt-1 col-md-12">
                <img src="{{ asset('citizens_charter_images/' . $citizen->images) }} " alt="Image" class="elevation-4"
                    style=" height: auto; width:100%;">
            </div>
        @endforeach

    </div>
@endsection
