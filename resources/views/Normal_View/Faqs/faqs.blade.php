@extends('layouts.app')
@section('content')

<div class="col-md-12">

<div class="accordion" id="accordionExample">
    @foreach ($faq as $fq )
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne{{$fq->id}}">
          <button class="accordion-button bg-info" type="button"
          data-bs-toggle="collapse" data-bs-target="#collapseOne{{$fq->id}}" aria-expanded="true" aria-controls="collapseOne">
              <strong>{{$fq->questions}}<strong>
          </button>
        </h2>
        <div id="collapseOne{{$fq->id}}" class="accordion-collapse collapse show"
        aria-labelledby="headingOne{{$fq->id}}" data-bs-parent="#accordionExample">
          <div class="accordion-body text-wrap fw-light">
            {{$fq->answers}}
          </div>
        </div>
      </div>
    @endforeach

</div>
</div>


@endsection
