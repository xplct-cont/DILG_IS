@extends('layouts.app')
@section('content')
    <div class="text-center" style="background-color:#DCDCDC;">
        <h1>NEWS AND UPDATE</h1>
    </div>

    <div class="main">
        <div class="d-flex align-items-center justify-content-around p-4">
            <input type="date" name="" id="" class='rounded form-control datetime-local input-date'
                style="margin-left: 95px;">
            <div class="form-group has-search w-50" style="margin:auto;">
                <span class="fa fa-search form-control-feedback"></span>
                <input type="text" class="form-control input" placeholder="Search">
            </div>
        </div>

        <div class="main-content mt-4">
            <div class="container">

                <div class="row equal">
                    <div class="col-sm-4 d-flex pb-3" href="{{ url('/single-news-update') }}">
                        <div class="card card-inverse card-danger">
                            <div class="card-block">
                                <h3 class="card-title">Danger</h3>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.
                                </p>
                                <a href="#" class="btn btn-outline-secondary">Outline</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 d-flex pb-3">
                        <div class="card card-inverse card-danger">
                            <div class="card-block">
                                <h3 class="card-title">Danger</h3>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.
                                </p>
                                <a href="#" class="btn btn-outline-secondary">Outline</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 d-flex pb-3">
                        <div class="card card-inverse card-danger">
                            <div class="card-block">
                                <h3 class="card-title">Danger</h3>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.
                                </p>
                                <a href="#" class="btn btn-outline-secondary">Outline</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 d-flex pb-3">
                        <div class="card card-inverse card-danger">
                            <div class="card-block">
                                <h3 class="card-title">Danger</h3>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.
                                </p>
                                <a href="#" class="btn btn-outline-secondary">Outline</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 d-flex pb-3">
                        <div class="card card-inverse card-danger">
                            <div class="card-block">
                                <h3 class="card-title">Danger</h3>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.
                                </p>
                                <a href="#" class="btn btn-outline-secondary">Outline</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 d-flex pb-3">
                        <div class="card card-inverse card-danger">
                            <div class="card-block">
                                <h3 class="card-title">Danger</h3>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.
                                </p>
                                <a href="#" class="btn btn-outline-secondary">Outline</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 d-flex pb-3">
                        <div class="card card-inverse card-danger">
                            <div class="card-block">
                                <h3 class="card-title">Danger</h3>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.
                                </p>
                                <a href="#" class="btn btn-outline-secondary">Outline</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 d-flex pb-3">
                        <div class="card card-inverse card-danger">
                            <div class="card-block">
                                <h3 class="card-title">Danger</h3>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.
                                </p>
                                <a href="#" class="btn btn-outline-secondary">Outline</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 d-flex pb-3">
                        <div class="card card-inverse card-danger">
                            <div class="card-block">
                                <h3 class="card-title">Danger</h3>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.
                                </p>
                                <a href="#" class="btn btn-outline-secondary">Outline</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
