@extends('layouts.app')
@section('content')
    <div class="mx-auto">
        <div class="mb-2">
            <a class="p-4" style="color:#002C76; text-decoration:none;" href="{{ url('/latest_issuances') }}"><span
                    class="fas fa-arrow-left" style="color:#002C76;"></span> Back</a>
        </div>
        <div class="col-md-11 mx-auto">
            <div class="card elevation-4">

                <div class="card-header-sm" style="background-color: #002C76; color:white;">
                    <p class="ml-2 mt-2" style="font-weight: 450; font-size: 22px;">{{ $b_issuance->category }}</p>
                </div>
                <div class="card-body">

                    <p class="text-wrap text-center" style="font-weight: 500; font-size: 23px; color: rgb(77, 77, 77);">
                        {{ $b_issuance->title }}</p>
                    <p class="text-start" style="font-size: 15px; color:rgb(77, 77, 77);">
                        {{ Carbon\Carbon::parse($b_issuance->date)->format('F d, Y') }}</p>
                    <a class="btn btn-danger mt-2 ml-2 mr-2" style=""
                        href="{{ url('/download', $b_issuance->file) }}"><span class="fas fa-file-pdf"
                            style="font-size: 15px;"></span> Download PDF</a>
                    <p class="text-end text-wrap" style="font-size: 15px; font-weight: 500; color:rgb(77, 77, 77);">
                        Reference No: <span
                            style="font-size: 15px; font-weight: 350; color:rgb(77, 77, 77);">{{ $b_issuance->reference_num }}</span>
                    </p>
                    <div class="mx-auto text-center">

                        <object data="{{ asset('issuance_files/' . $b_issuance->file) }}#toolbar=0" type="application/pdf"
                            width="70%" height="900"></object>
                    </div>

                    <p class="text-wrap mt-3" style="color:dimgray;">
                        Note: If plugin is unsupported, kindly<a class=" mt-2 ml-2 mr-2" style="color:#C9282D;"
                            href="{{ url('/download', $b_issuance->file) }}"><span class=""
                                style="font-size: 15px;"></span>Download PDF Here</a>to view.
                    </p>

                    <hr>

                    <div class="col-md-12 mt-3">
                        <p class="text-center" style="color: #002C76; font-size: 22px; font-weight: 400;">More Issuances</p>
                        <table class="table bg-light table-sm table-bordered table-hover text-secondary">
                            <tbody class="elevation-4">
                                @foreach ($issuances as $latest_issuances)
                                    <tr>
                                        <td class="" style="font-size: 12px;"><a
                                                href="{{ url('/latest_issuances/' . $latest_issuances->id) }}">
                                                {{ $latest_issuances->title }} </a><br>
                                            <p class="mt-2" style="font-size: 10px;">
                                                {{ Carbon\Carbon::parse($latest_issuances->date)->format('F d, Y') }}
                                            </p>
                                        </td>
                                        <td class="" style="background-color:#002C76; color:white;  font-size: 10px;">
                                            Reference No: <span
                                                style="font-size: 12px; font-weight: 350; color:white;">{{ $latest_issuances->reference_num }}</span>
                                            <p class="text-center mt-2" style=" font-size: 10px">
                                                {{ $latest_issuances->category }}</p>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
