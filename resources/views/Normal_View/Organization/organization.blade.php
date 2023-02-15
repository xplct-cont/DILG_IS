@extends('layouts.app')
@section('content')
    {{-- ORGANIZATIONAL STRUCTURE --}}
    <div class="container">
        <div class="d-flex justify-content-center mb-3">
            <img src="/img/dilg-main.png" style="height: 150px; width: 150px;" alt="">
        </div>
        <h1 class="text-center " style="font-size: 30px; margin-bottom: 50px;">ORGANIZATIONAL STRUCTURE</h1>
    </div>

    @foreach ($pd as $pdirector)
        <div class="d-flex justify-content-center mb-3">
            <div class="zoom">
                <img src="{{ asset('org_profile_images/' . $pdirector->profile_img) }} " alt="Image"
                    class="shadow-lg border border-dark" style="border-radius: 50%; height: 300px; width: 300px;">

                <p class="text-center" style="font-size: 18px; font-weight:500;">{{ $pdirector->fname }}
                    {{ $pdirector->mid_initial }} {{ $pdirector->lname }}</p>
                <p class="text-center" style="margin-top: -20px; font-size: 13px;">{{ $pdirector->position }}</p>
    @endforeach
    </div>
    </div>


    <div class="col-md-12 mx-auto mb-3 mt-3">

        <div class="d-flex row">

            @foreach ($head as $heads)
                <div class="col-md-6  d-flex justify-content-center">
                    <div class="zoom">
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
            <div class="zoom">
                <img src="{{ asset('org_profile_images/' . $heads_2->profile_img) }} " alt="Image"
                    class="shadow-lg border border-dark elevation-4"
                    style="border-radius: 50%; height: 230px; width: 230px;">

                <p class="text-center" style="font-size: 18px; font-weight:500;">{{ $heads_2->fname }}
                    {{ $heads_2->mid_initial }} {{ $heads_2->lname }}</p>
                <p class="text-center" style="margin-top: -20px; font-size: 13px;">{{ $heads_2->position }}</p>
    @endforeach
    </div>
    </div>

    <div class="">
        <div class="col-md-12 mb-3 mt-3">

            <div class="d-flex row">
                <div class="col-md-6">
                    <p class="text-center mt-4" style="font-size: 28px; font-weight: 500;">PROGRAM COORDINATORS</p>
                    <div class="d-flex row">

                        @foreach ($d_one as $d_ones)
                            <div class="col-md-4 text-center d-flex justify-content-center">
                                <div class="zoom">
                                    <img src="{{ asset('org_profile_images/' . $d_ones->profile_img) }} " alt="Image"
                                        class="shadow-lg border border-dark"
                                        style="border-radius: 50%; height: 150px; width: 150px;">
                                    <p class="text-center" style=" font-weight:500;">{{ $d_ones->fname }}
                                        {{ $d_ones->mid_initial }} {{ $d_ones->lname }}</p>
                                    <p class="text-center" style="margin-top: -20px;">
                                        {{ $d_ones->position }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-6">
                    <p class="text-center mt-3" style="font-size: 28px; font-weight: 500;">ADMIN SERVICES</p>
                    <div class="d-flex row">

                        @foreach ($admin_ser as $ad_ser)
                            <div class="col-md-4 text-center d-flex justify-content-center">
                                <div class="zoom">
                                    <img src="{{ asset('org_profile_images/' . $ad_ser->profile_img) }} " alt="Image"
                                        class="shadow-lg border border-dark"
                                        style="border-radius: 50%; height: 150px; width: 150px;">
                                    <p class="text-center" style=" font-weight:500;">{{ $ad_ser->fname }}
                                        {{ $ad_ser->mid_initial }} {{ $ad_ser->lname }}</p>
                                    <p class="text-center" style="margin-top: -20px; ">
                                        {{ $ad_ser->position }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- PDMU --}}
            <hr>
            <div class="container" style="margin-top: 200px;">
                <div class="d-flex justify-content-center mb-3">
                    <img src="/img/dilg-main.png" style="height: 150px; width: 150px;" alt="">
                </div>
                <h1 class="text-center " style="font-size: 30px; margin-bottom: 50px;">PROJECT DEVELOPMENT AND MANAGEMENT
                    UNIT (PDMU)</h1>
            </div>


            @foreach ($pd_pdmu as $pd_pdmudirector)
                <div class="d-flex justify-content-center mb-3">
                    <div class="zoom">
                        <img src="{{ asset('pdmu_profile_images/' . $pd_pdmudirector->profile_img) }} " alt="Image"
                            class="shadow-lg border border-dark" style="border-radius: 50%; height: 300px; width: 300px;">

                        <p class="text-center" style="font-size: 18px; font-weight:500;">{{ $pd_pdmudirector->fname }}
                            {{ $pd_pdmudirector->mid_initial }} {{ $pd_pdmudirector->lname }}</p>
                        <p class="text-center" style="margin-top: -20px; font-size: 13px;">{{ $pd_pdmudirector->position }}
                        </p>
            @endforeach
        </div>
    </div>

    @foreach ($head_pdmus as $head_pdmu)
        <div class="d-flex justify-content-center mb-3">
            <div class="zoom">
                <img src="{{ asset('pdmu_profile_images/' . $head_pdmu->profile_img) }} " alt="Image"
                    class="shadow-lg border border-dark" style="border-radius: 50%; height: 250px; width: 250px;">

                <p class="text-center" style="font-size: 18px; font-weight:500;">{{ $head_pdmu->fname }}
                    {{ $head_pdmu->mid_initial }} {{ $head_pdmu->lname }}</p>
                <p class="text-center" style="margin-top: -20px; font-size: 13px;">{{ $head_pdmu->position }}</p>
    @endforeach
    </div>
    </div>

    <div class="col-md-12 mx-auto mb-3 mt-3">

        <div class="d-flex row">

            @foreach ($member_pdmus as $member_pdmu)
                <div class="col-md-6  d-flex justify-content-center">
                    <div class="zoom">
                        <img src="{{ asset('pdmu_profile_images/' . $member_pdmu->profile_img) }} " alt="Image"
                            class="shadow-lg border border-dark" style="border-radius: 50%; height: 200px; width: 200px;">
                        <p class="text-center" style="font-size: 18px; font-weight:500;">{{ $member_pdmu->fname }}
                            {{ $member_pdmu->mid_initial }} {{ $member_pdmu->lname }}</p>
                        <p class="text-center" style="margin-top: -20px; font-size: 13px;">{{ $member_pdmu->position }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class=" mx-auto mb-3 mt-3">
        <div class="d-flex row">
            @foreach ($member_pdmus_2 as $member_pdmu_2)
                <div class="col-md-3  d-flex justify-content-center">
                    <div class="zoom">
                        <img src="{{ asset('pdmu_profile_images/' . $member_pdmu_2->profile_img) }} " alt="Image"
                            class="shadow-lg border border-dark" style="border-radius: 50%; height: 200px; width: 200px;">
                        <p class="text-center" style="font-size: 18px; font-weight:500;">{{ $member_pdmu_2->fname }}
                            {{ $member_pdmu_2->mid_initial }} {{ $member_pdmu_2->lname }}</p>
                        <p class="text-center" style="margin-top: -20px; font-size: 13px;">{{ $member_pdmu_2->position }}
                        </p>
                    </div>
                </div>
            @endforeach

            @foreach ($member_pdmus_3 as $member_pdmu_3)
                <div class="col-md-6   d-flex justify-content-center">
                    <div class="zoom">
                        <img src="{{ asset('pdmu_profile_images/' . $member_pdmu_3->profile_img) }} " alt="Image"
                            class="shadow-lg border border-dark" style="border-radius: 50%; height: 200px; width: 200px;">
                        <p class="text-center" style="font-size: 18px; font-weight:500;">{{ $member_pdmu_3->fname }}
                            {{ $member_pdmu_3->mid_initial }} {{ $member_pdmu_3->lname }}</p>
                        <p class="text-center" style="margin-top: -20px; font-size: 13px;">{{ $member_pdmu_3->position }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <hr>

    <div class=" col-md-12 mx-auto mb-3 mt-3">

        <div class=" col-md-12">
            <div class="row">

                @foreach ($engrs as $pdmu_engrs)
                    <div class="col-md-2 text-center d-flex justify-content-center">
                        <div class="zoom">
                            <img src="{{ asset('pdmu_profile_images/' . $pdmu_engrs->profile_img) }} " alt="Image"
                                class="shadow-lg border border-dark"
                                style="border-radius: 50%; height: 150px; width: 150px;">
                            <p class="text-center" style=" font-weight:500;">{{ $pdmu_engrs->fname }}
                                {{ $pdmu_engrs->mid_initial }} {{ $pdmu_engrs->lname }}</p>
                            <p class="text-center" style="margin-top: -20px;">
                                {{ $pdmu_engrs->position }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
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
</style>
