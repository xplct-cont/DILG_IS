@extends('layouts.app')

@section('content')
<div>
    <img style=" width: 100%; height: auto;" src="{{ asset('/img/facade.png') }}">
    <p></p>
    <div class="header" style=" padding: 7px; background: #DCDCDC; color: #030303; margin-bottom: 5px;">
        <h1 class="text-center" style="font-size: 18px; margin-top: 10px;">ABOUT US</h1>
    </div>


    <div class="row mt-2">
        <div class="col-md-12">
          <div class="card border border-0">
            <h4 class=" fw-bold text-center mt-5">OUR MISSION</h4>
            <div class="card-body d-flex">
            <img style=" width: 100%; height: auto;" src="{{ asset('/img/goal.png') }}">
              <h4 style="font-size:3vw;" class="ms-5 text-justify">The Department shall promote peace and order, ensure public safety, and strengthen capability of Local Government Units through active people's participation and professionalized corps of civil servants.</h4>
            </div>
          </div>
        </div>
      </div>
    <div class="row mt-2">
        <div class="col-md-12">
          <div class="card border border-0">
            <h4 class="fw-bold text-center mt-5">OUR VISION</h4>
            <div class="card-body d-flex">
                <h4 style="font-size:3vw;" class="text-justify">A strongly determined and highly trusted Department committed to capacitate and nurture local government units, public order and safety institutions to sustain peaceful, progressive, nand resilient communities where people live happily.</h4>
              <img style=" width: 100%; height: auto;" src="{{ asset('/img/lightbulb.png') }}" class="p-4">
            </div>
          </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-12">
          <div class="card border border-0">
            <h4 class="fw-bold text-center mt-5">OUR GOALS</h4>
            <div class="card-body d-flex">
                <img style=" width: 100%; height: auto;" src="{{ asset('/img/star.png') }}" class="p-4">
                <h4 style="font-size:3vw;" class="text-justify">Peaceful, safe, self-reliant and development-dominated communities. Improve performance of local governments in governance, administration, social and economic development and environmental management; Sustain peace and order condition and ensure public safety.​​​​​</h4>
            </div>
          </div>
        </div>
    </div>
    <div class="text-center m-2 mb-4">
        <h4 class="fw-bold">Our Slogan</h4>
        <h5 class="fw-bold">Matino | Mahusay | Maaasahan</h5>
    </div>
</div>
@endsection
