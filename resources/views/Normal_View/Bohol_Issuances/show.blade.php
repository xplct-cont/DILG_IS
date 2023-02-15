@extends('layouts.app')
@section('content')
    <div class="mx-auto">
        <div class="mb-2">
            <a class="p-4" style="color:#002C76; text-decoration:none;" href="{{ url('/latest_issuances') }}"><span
                    class="fas fa-arrow-left" style="color:#002C76;"></span> Back</a>
        </div>
        <div class="col-md-12">
            <div class="card elevation-4">

                <div class="card-header-sm" style="background-color: #002C76; color:white;">
                    <p class="ml-2 mt-2" style="font-weight: 450; font-size: 22px;">{{ $b_issuance->category }}</p>
                </div>
                <div class="card-body">

                    <p class="text-wrap text-center" style="font-weight: 500; font-size: 23px; color: rgb(77, 77, 77);">
                        {{ $b_issuance->title }}</p>
                    <p class="text-start" style="font-size: 15px; color:rgb(77, 77, 77);">
                        {{ Carbon\Carbon::parse($b_issuance->date)->format('F d, Y') }}</p>
                    <p class="text-end text-wrap" style="font-size: 15px; font-weight: 500; color:rgb(77, 77, 77);">
                        Reference No: <span
                            style="font-size: 15px; font-weight: 350; color:rgb(77, 77, 77);">{{ $b_issuance->reference_num }}</span>
                    </p>
                    `
                    <iframe class="mb-3" src="/app/public/issuance_files/{{ $b_issuance->file }}" width="100%"
                        height="600px">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
