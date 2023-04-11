@extends('layouts.app')
@section('content')
    <div class="header mb-5 ml-3 mr-3" style=" padding: 7px; background: #234495; color: #FFFFFF; margin-bottom: 5px;">
        <h1 class="text-center" style="font-size: 18px; margin-top: 10px; ">DOWNLOADABLES</h1>
    </div>

    <div class="ml-3 mr-3">
        <div class="mx-auto mb-2 ">
            <form action="" method="GET">
                <div class="d-flex justify-content-center">
                    <div class="input-group d-flex col-md-4">
                        <a href="{{ url('/downloadable_files') }}" class=" mt-0">
                            <span class="input-group-btn me-2">
                                <button class="btn btn-danger text-light" type="button" title="Refresh page">
                                    <span class="fas fa-sync-alt"></span>
                                </button>
                            </span>
                        </a>
                        <input type="text" class="form-control mr-1" name="search" placeholder="Search..."
                            id="search" value="{{ Request::get('search') }}">
                        <span class="input-group-btn mr-1 mt-0">
                            <button class="btn btn-secondary text-light" type="submit" title="Search Name">
                                <span class="fas fa-search"></span>
                            </button>
                        </span>

                    </div>
                </div>
                <div class="input-group d-flex mx-auto mt-3 col-md-3">
                    <a href="{{ url('/downloadable_files') }}" class=" mt-0">
                        <span class="input-group-btn me-2">
                            <button class="btn btn-danger text-light" type="button" title="Refresh page">
                                <span class="fas fa-sync-alt"></span>
                            </button>
                        </span>
                    </a>

                    <select name="program_id" id="program_id" class="form-control">
                        <option value="all">Search by Program</option>
                        @foreach ($programs as $prog )
                            <option value="{{$prog->id}}" {{ Request::get('program_id') == 'program_id' ? 'selected' : '' }}>{{$prog->title ?? 'None'}}</option>
                        @endforeach

                    </select>
                    <span class="input-group-btn mr-1 mt-0 ms-2">
                        <button class="btn btn-secondary text-light" type="submit">
                            Filter
                        </button>
                    </span>
                </div>
            </form>
        </div>
        <div class="row">
            @foreach ($downloadables as $dw)
                <div class="col-md-6">
                    <div class="card elevation-4">
                        <img src="img/dilg-main.png" class="p-2" style="height: 60px; width: 60px;" alt="">
                        <a href="#" class="btn mx-auto btn-danger" data-toggle="modal"
                            data-target="#downlodableModalPDF{{ $dw->id }}"><span class="fas fa-file-pdf"></span> PDF
                            Preview</a>

                        <!-- Modal -->
                        <div class="modal fade" id="downlodableModalPDF{{ $dw->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="downlodableModalPDFLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: #234495; color:white;">

                                        <a class="btn btn-danger mt-2 ml-2 mr-2" style=""
                                            href="{{ url('/download_downloadables', $dw->file) }}"><span
                                                class="fas fa-file-pdf" style="font-size: 15px;"></span> Download PDF</a>

                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mx-auto text-center">

                                            <object data="{{ asset('downloadables/' . $dw->file) }}#toolbar=0"
                                                type="application/pdf" width="100%" height="700"></object>
                                        </div>

                                        <p class="text-wrap mt-3" style="color:dimgray;">
                                            Note: If plugin is unsupported, kindly<a class=" mt-2 ml-2 mr-2"
                                                style="color:#C9282D;"
                                                href="{{ url('/download_downloadables', $dw->file) }}"><span class=""
                                                    style="font-size: 15px;"></span>Download PDF Here</a>to
                                            view.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <p class="text-wrap" style="font-weight: 400; font-size: 18px;">Program: <span class="text-wrap"
                                    style="font-size: 18px; font-weight: 500;">{{ $dw->program->title ?? 'None' }}</span></p>
                            <p class="text-wrap" style="font-weight: 400; font-size: 18px;">Outcome Area: <span
                                    class="text-wrap"
                                    style="font-size: 18px; font-weight: 500;">{{ $dw->outcome_area }}</span></p>
                            <hr>
                            <p class="text-wrap" style="font-weight: 400; font-size: 16px;">Title: <span class="text-wrap"
                                    style="font-size: 16px; font-weight: 500;">{{ $dw->title }}</span></p>
                        </div>
                        <a href="{{ $dw->link }}" target="_blank" class=" text-center"
                            style="text-decoration:none; padding-top:8px; background-color:#234495;
                         padding-bottom:8px;">
                            <span class="text-light">Link</span></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
