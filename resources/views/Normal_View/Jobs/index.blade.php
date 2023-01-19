@extends('layouts.app')

@section('content')
<div>
    
    <div class="header" style=" padding: 7px; background: #DCDCDC; color: #030303; margin-bottom: 5px;">
        <h1 class="text-center" style="font-size: 18px; margin-top: 10px;">JOB VACANCIES</h1>
    </div>

    <div class="row mx-auto">
        <div class="card border border-0">
            <div class="card-body mx-auto">
                <div class="row">
                    <div class="col-sm-4">
                        <img style="width: 100%; height: auto;" src="{{ asset('/img/hiring.jpg') }}">
                    </div>
                    <div class="col-sm-8 text-center">
                        <h2 class="text-center" style="font-size: 30px;">We are hiring the following positions:</h2>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Planning Officer</li>
                            <li class="list-group-item">Engineers</li>
                            <li class="list-group-item">Developers</li>
                          </ul>
                        <a href="#" class="btn text-white col-sm-2 mx-auto text-center" style="background-color: #C9282D">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mx-auto">
        <div class="card border border-0">
            <div class="card-body mx-auto">
                <div class="row">
                    <div class="col-sm-4">
                        <img style="width: 100%; height: auto;" src="{{ asset('/img/hiring.jpg') }}">
                    </div>
                    <div class="col-sm-8 text-center">
                        <h2 class="text-center" style="font-size: 30px;">We are hiring the following positions:</h2>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Planning Officer</li>
                            <li class="list-group-item">Engineers</li>
                            <li class="list-group-item">Developers</li>
                          </ul>
                        <a href="#" class="btn text-white col-sm-2 mx-auto text-center" style="background-color: #C9282D">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mx-auto">
        <div class="card border border-0">
            <div class="card-body mx-auto">
                <div class="row">
                    <div class="col-sm-4">
                        <img style="width: 100%; height: auto;" src="{{ asset('/img/hiring.jpg') }}">
                    </div>
                    <div class="col-sm-8 text-center">
                        <h2 class="text-center" style="font-size: 30px;">We are hiring the following positions:</h2>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Planning Officer</li>
                            <li class="list-group-item">Engineers</li>
                            <li class="list-group-item">Developers</li>
                          </ul>
                        <a href="#" class="btn text-white col-sm-2 mx-auto text-center" style="background-color: #C9282D">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mx-auto">
        <div class="card border border-0">
            <div class="card-body mx-auto">
                <div class="row">
                    <div class="col-sm-4">
                        <img style="width: 100%; height: auto;" src="{{ asset('/img/hiring.jpg') }}">
                    </div>
                    <div class="col-sm-8 text-center">
                        <h2 class="text-center" style="font-size: 30px;">We are hiring the following positions:</h2>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Planning Officer</li>
                            <li class="list-group-item">Engineers</li>
                            <li class="list-group-item">Developers</li>
                          </ul>
                        <a href="#" class="btn text-white col-sm-2 mx-auto text-center" style="background-color: #C9282D">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- <div class="row mt-2">
        <div class="col-md-12">
          <div class="card border border-0">
            <div class="card-body d-flex">
            <img style=" width: 30%; height: auto;" src="{{ asset('/img/hiring.jpg') }}">
              <h6 style="font-size:3vw;" class="ms-5 text-justify">We are hiring the following positions:</h6>
              <a href="#" class="btn btn-dark text-white">View Details</a>
            </div>

          </div>
        </div>
      </div> --}}
</div>
@endsection
