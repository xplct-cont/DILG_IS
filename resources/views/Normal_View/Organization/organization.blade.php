@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-center mb-3">
            <img src="/img/dilg-main.png" style="height: 150px; width: 150px;" alt="">
        </div>
        <h1 class="text-center mb-5" style="font-size: 30px; ">ORGANIZATIONAL STRUCTURE</h1>
    </div>

    @foreach ($pd as $pdirector)
        <div class="d-flex justify-content-center mb-3">
            <img src="{{ asset('org_profile_images/' . $pdirector->profile_img) }} " alt="Image"
                class="shadow-lg border border-dark" style="border-radius: 50%; height: 300px; width: 300px;">
        </div>
        <p class="text-center" style="font-size: 18px; font-weight:500;">{{ $pdirector->fname }}
            {{ $pdirector->mid_initial }} {{ $pdirector->lname }}</p>
        <p class="text-center" style="margin-top: -20px; font-size: 13px;">{{ $pdirector->position }}</p>
    @endforeach



    <div class="col-md-12 mx-auto mb-3 mt-3">

        <div class="d-flex row">

            @foreach ($head as $heads)
                <div class="col-md-6  d-flex justify-content-center">
                    <div class="">
                        <img src="{{ asset('org_profile_images/' . $heads->profile_img) }} " alt="Image"
                            class="shadow-lg border border-dark" style="border-radius: 50%; height: 250px; width: 250px;">
                        <p class="text-center" style="font-size: 18px; font-weight:500;">{{ $heads->fname }}
                            {{ $heads->mid_initial }} {{ $heads->lname }}</p>
                        <p class="text-center" style="margin-top: -20px; font-size: 13px;">{{ $heads->position }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>



    @foreach ($head_2 as $heads_2)
        <div class="d-flex justify-content-center mb-3">
            <img src="{{ asset('org_profile_images/' . $heads_2->profile_img) }} " alt="Image"
                class="shadow-lg border border-dark elevation-4" style="border-radius: 50%; height: 230px; width: 230px;">
        </div>
        <p class="text-center" style="font-size: 18px; font-weight:500;">{{ $heads_2->fname }}
            {{ $heads_2->mid_initial }} {{ $heads_2->lname }}</p>
        <p class="text-center" style="margin-top: -20px; font-size: 13px;">{{ $heads_2->position }}</p>
    @endforeach




    <div class="">
        <div class="col-md-12 mb-3 mt-3">

            <div class="d-flex row">
                <div class="col-md-6">
                    <div class="d-flex row">


                        <p class="text-center mt-3" style="font-size: 28px; font-weight: 500;">PROGRAM COORDINATORS</p>

                        @foreach ($d_one as $d_ones)
                            <div class="col-md-4 text-center d-flex justify-content-center">
                                <div class="">
                                    <img src="{{ asset('org_profile_images/' . $d_ones->profile_img) }} " alt="Image"
                                        class="shadow-lg border border-dark"
                                        style="border-radius: 50%; height: 150px; width: 150px;">
                                    <p class="text-center" style="font-size: 18px; font-weight:500;">{{ $d_ones->fname }}
                                        {{ $d_ones->mid_initial }} {{ $d_ones->lname }}</p>
                                    <p class="text-center" style="margin-top: -20px; font-size: 13px;">
                                        {{ $d_ones->position }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex row">
                        <p class="text-center mt-3" style="font-size: 28px; font-weight: 500;">ADMIN SERVICES</p>

                        @foreach ($admin_ser as $ad_ser)
                            <div class="col-md-4 text-center d-flex justify-content-center">
                                <div class="">
                                    <img src="{{ asset('org_profile_images/' . $ad_ser->profile_img) }} " alt="Image"
                                        class="shadow-lg border border-dark"
                                        style="border-radius: 50%; height: 150px; width: 150px;">
                                    <p class="text-center" style="font-size: 18px; font-weight:500;">{{ $ad_ser->fname }}
                                        {{ $ad_ser->mid_initial }} {{ $ad_ser->lname }}</p>
                                    <p class="text-center" style="margin-top: -20px; font-size: 13px;">
                                        {{ $ad_ser->position }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endsection
