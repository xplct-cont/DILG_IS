@extends('layouts.app')
@section('content')


<div class="accordion" id="accordionExample">
    @foreach ($faq as $fq )
    <div class="accordion-item">
        <textarea class="accordion-header" id="headingOne{{$fq->id}}">
          <button class="accordion-button bg-info" type="button"
          data-bs-toggle="collapse" data-bs-target="#collapseOne{{$fq->id}}" aria-expanded="true" aria-controls="collapseOne">
              <strong>{{$fq->questions}}<strong>
          </button>
        </textarea>
        <div id="collapseOne{{$fq->id}}" class="accordion-collapse collapse show"
        aria-labelledby="headingOne{{$fq->id}}" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <textarea name="" id="" cols="30" rows="10">{{$fq->answers}}</textarea>
          </div>
        </div>
      </div>
    @endforeach

    {{-- <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed bg-info" type="button"
        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <strong><strong>
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse"
      aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body">

        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed bg-info" type="button"
        data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <strong><strong>
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse"
      aria-labelledby="headingThree" data-bs-parent="#accordionExample">
        <div class="accordion-body">

        </div>
      </div>
    </div> --}}
</div>



@endsection
