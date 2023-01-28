@extends('layouts.app')
@section('content')
    {{-- <div class="main">
        <div class="main-content m-2">
            <div class="container d-flex text-center">
                <img src="{{asset('img/OrganizationalStructure.png') }}" class="img-fluid" alt="..." style="width: 1100px">
            </div> 
            <div class="text-center">
                <img src="{{asset('img/OrganizationalStructure1.png') }}" class="img-fluid  " alt="..." style="width: 1100px">
              </div>
        </div>
    </div> --}}

        <div class="container">
            <div class="d-flex justify-content-center mb-3">
                <img src="/img/dilg-main.png" style="height: 150px; width: 150px;" alt="">
            </div>
            <h1 class="text-center mb-5" style="font-size: 30px; ">ORGANIZATIONAL STRUCTURE</h1>
        </div>

        @foreach ($orgs as $org_structure)
        <div class="d-flex justify-content-center mb-3">
            <img src="{{ asset('org_profile_images/' . $org_structure->profile_img) }} " alt="Image"
            style="border-radius: 50%; height: 100px; width: 100px;">
        </div>
        <p class="text-center" style="font-size: 18px; font-weight:500;">{{$org_structure->fname}} {{$org_structure->mid_initial}} {{$org_structure->lname}}</p>
        <p class="text-center" style="margin-top: -20px; font-size: 13px;">{{$org_structure->position}}</p>

        @endforeach
@endsection
