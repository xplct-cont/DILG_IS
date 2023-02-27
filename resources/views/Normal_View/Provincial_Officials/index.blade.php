@extends('layouts.app')
@section('content')
    <div class="text-center mt-3 mb-4">
        <img src="/img/bohol_seal.png" class="elevation-4" style="border-radius: 50%; height: 200px; width: 200px;"
            alt="">
    </div>
    <hr>
    <p class="text-center mb-5" style="font-weight: 500; font-size: 22px;">PROVINCIAL OFFICIALS</p>


    @foreach ($governor as $gov)
        <div class="d-flex justify-content-center mb-3 text-center">
            <div class="zoom">
                <img src="{{ asset('provincial_officials_images/' . $gov->profile_image) }} " alt="Image"
                    class="shadow-lg border border-dark" style="border-radius: 50%; height: 250px; width: 250px;">
                <p class="text-center" style="font-size: 18px; font-weight:500;">{{ $gov->name }}</p>
                <p class="text-center" style="margin-top: -20px; font-size: 13px;">{{ $gov->position }}</p>
    @endforeach
    </div>
    </div>

    @foreach ($vice_governor as $gov)
        <div class="d-flex justify-content-center mb-3 text-center">
            <div class="zoom">
                <img src="{{ asset('provincial_officials_images/' . $gov->profile_image) }} " alt="Image"
                    class="shadow-lg border border-dark" style="border-radius: 50%; height: 200px; width: 200px;">
                <p class="text-center" style="font-size: 18px; font-weight:500;">{{ $gov->name }}</p>
                <p class="text-center" style="margin-top: -20px; font-size: 13px;">{{ $gov->position }}</p>
    @endforeach
    </div>
    </div>
    <hr>
    <p class="text-center mt-5" style="font-size: 22px; font-weight: 500">1st District Board Member</p>


    <div class="col-md-12 mb-3 mt-3 ">
        <div class="d-flex row">
            <div class="col-md-12">

                <div class="row">
                    @foreach ($first_district as $first_dist)
                        <div class="col-md-4 text-center d-flex justify-content-center">
                            <div class="zoom">
                                <img src="{{ asset('provincial_officials_images/' . $first_dist->profile_image) }} "
                                    alt="Image" class="shadow-lg border border-dark"
                                    style="border-radius: 50%; height: 160px; width: 160px;">
                                <p class="text-center" style=" font-weight:500;">{{ $first_dist->name }}</p>
                                <p class="text-center" style="margin-top: -20px;">
                                    {{ $first_dist->position }}</p>

                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>

    <hr>
    <p class="text-center mt-5" style="font-size: 22px; font-weight: 500">2nd District Board Member</p>

    <div class="col-md-12 mb-3 mt-3 ">
        <div class="d-flex row">
            <div class="col-md-12">

                <div class="row">
                    @foreach ($second_district as $sec_dist)
                        <div class="col-md-4 text-center d-flex justify-content-center">
                            <div class="zoom">
                                <img src="{{ asset('provincial_officials_images/' . $sec_dist->profile_image) }} "
                                    alt="Image" class="shadow-lg border border-dark"
                                    style="border-radius: 50%; height: 160px; width: 160px;">
                                <p class="text-center" style=" font-weight:500;">{{ $sec_dist->name }}</p>
                                <p class="text-center" style="margin-top: -20px;">
                                    {{ $sec_dist->position }}</p>

                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>

    <hr>
    <p class="text-center mt-5" style="font-size: 22px; font-weight: 500">3rd District Board Member</p>

    <div class="col-md-12 mb-3 mt-3 ">
        <div class="d-flex row">
            <div class="col-md-12">

                <div class="row">
                    @foreach ($third_district as $third_dist)
                        <div class="col-md-4 text-center d-flex justify-content-center">
                            <div class="zoom">
                                <img src="{{ asset('provincial_officials_images/' . $third_dist->profile_image) }} "
                                    alt="Image" class="shadow-lg border border-dark"
                                    style="border-radius: 50%; height: 160px; width: 160px;">
                                <p class="text-center" style=" font-weight:500;">{{ $third_dist->name }}</p>
                                <p class="text-center" style="margin-top: -20px;">
                                    {{ $third_dist->position }}</p>

                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>


    <hr>
    <p class="text-center mt-5" style="font-size: 22px; font-weight: 500">Ex-Officio</p>

    @foreach ($ex_officio_1 as $ex_1)
        <div class="d-flex justify-content-center mb-3 text-center">
            <div class="zoom">
                <img src="{{ asset('provincial_officials_images/' . $ex_1->profile_image) }} " alt="Image"
                    class="shadow-lg border border-dark" style="border-radius: 50%; height: 130px; width: 130px;">
                <p class="text-center" style="font-size: 18px; font-weight:500;">{{ $ex_1->name }}</p>
                <p class="text-center" style="margin-top: -20px; font-size: 13px;">{{ $ex_1->position }}</p>
    @endforeach
    </div>
    </div>

    @foreach ($ex_officio_2 as $ex_2)
        <div class="d-flex justify-content-center mb-3 text-center">
            <div class="zoom">
                <img src="{{ asset('provincial_officials_images/' . $ex_2->profile_image) }} " alt="Image"
                    class="shadow-lg border border-dark" style="border-radius: 50%; height: 130px; width: 130px;">
                <p class="text-center" style="font-size: 18px; font-weight:500;">{{ $ex_2->name }}</p>
                <p class="text-center" style="margin-top: -20px; font-size: 13px;">{{ $ex_2->position }}</p>
    @endforeach
    </div>
    </div>

    @foreach ($ex_officio_3 as $ex_3)
        <div class="d-flex justify-content-center mb-3 text-center">
            <div class="zoom">
                <img src="{{ asset('provincial_officials_images/' . $ex_3->profile_image) }} " alt="Image"
                    class="shadow-lg border border-dark" style="border-radius: 50%; height: 130px; width: 130px;">
                <p class="text-center" style="font-size: 18px; font-weight:500;">{{ $ex_3->name }}</p>
                <p class="text-center" style="margin-top: -20px; font-size: 13px;">{{ $ex_3->position }}</p>
    @endforeach
    </div>
    </div>
@endsection
