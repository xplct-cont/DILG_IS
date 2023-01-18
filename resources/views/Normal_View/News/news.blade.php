@extends('layouts.app')
@section('content')
    <div class="text-center" style="background-color:#DCDCDC;">
        <h1>NEWS AND UPDATE</h1>
    </div>

    <div class="main">
        <div>
            <div class="date d-flex align-items-center justify-content-around">
                <input type="date" name="" id="" class='w-25 rounded'>
                <input type="search" name="" id="" class="w-50 rounded" placeholder="search">
            </div>
        </div>
        <div class="main-content m-2">
            <div class="container d-flex align-items-center justify-content-around">
                <div class="card ">
                    <div class="card-body">
                        <h4 class="card-title">
                            Developer Guy
                        </h4>

                        <p class="card-text">
                            Developer Guy love to develop
                            front-end and back-end
                        </p>
                        <a href="#" class="btn btn-primary">
                            See Profile
                        </a>
                    </div>
                    <div class="image-grid-container">
                        <img src="https://media.geeksforgeeks.org/wp-content/cdn-uploads/20190710102234/download3.png">
                    </div>
                </div>
                <div class="card">
                    <div class="image-grid-container">
                        <img src="https://media.geeksforgeeks.org/wp-content/cdn-uploads/20190710102234/download3.png">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">
                            Developer Guy
                        </h4>

                        <p class="card-text">
                            Developer Guy love to develop
                            front-end and back-end
                        </p>
                        <a href="#" class="btn btn-primary">
                            See Profile
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
