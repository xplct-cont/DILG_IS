@extends('layouts.app')
@section('content')
    <div class="mt-3 p-3">
        <div class="d-flex justify-content-center">
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
    </div>

    <div class="container col-md-12">
        <div class="col-md-12">
            <div class="row d-flex justify-content-center mb-3">
                @foreach ($projectsAll as $proj)
                    <div class="col-md-4 card m-2 p-3 text-justify ">
                        <p class="text-center mb-3" style="font-weight: 600; font-size: 26px; color:blue;">
                            {{ $proj->program_category }}</p>
                        <p class="text-center mb-3" style="font-weight: 600; font-size: 20px; color:black;">
                            {{ $proj->code }}</p>
                        <p class="text-center mb-3" style="font-weight: 600; font-size: 19px; color:blue;">
                            {{ $proj->title }}</p>
                        <p class="text-center mb-3" style="font-weight: 600; font-size: 19px; color:black;">
                            {{ $proj->exact_loc }}</p>
                        <p class="text-center mb-3" style="font-weight: 600; font-size: 19px; color:black;">
                            {{ $proj->description }}</p>
                        <p class="text-center mb-3" style="font-weight: 600; font-size: 19px; color:black;">
                            {{ $proj->exact_loc }}</p>
                        <img src="{{ asset('img/img4.jpg') }}" alt="project-image">

                    </div>
                @endforeach

            </div>
        </div>
    @endsection
