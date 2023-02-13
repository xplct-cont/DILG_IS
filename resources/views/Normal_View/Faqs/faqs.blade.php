@extends('layouts.app')
@section('content')

<div class="col-md-12 mb-3">
<h3 class="text-center mt-3 mb-5">FREQUENTLY ASKED QUESTIONS (FAQs)</h3>
<div class="accordion" id="accordionExample">
    @foreach ($faq as $fq )
    <div class="accordion-item mb-2" >
        <h2 class="accordion-header" id="headingOne{{$fq->id}}" >
          <button class="accordion-button" type="button"
          data-bs-toggle="collapse" data-bs-target="#collapseOne{{$fq->id}}" aria-expanded="true" aria-controls="collapseOne" style="background-color:#364d74; color:white">
              <strong>{{$fq->questions}}<strong>
          </button>
        </h2>
        <div id="collapseOne{{$fq->id}}" class="accordion-collapse collapse"
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
