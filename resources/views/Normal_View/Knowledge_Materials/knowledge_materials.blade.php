@extends('layouts.app')

@section('content')
    <div class="header  ml-3 mr-3" style=" padding: 7px; background: #234495; color: #FFFFFF; margin-bottom: 5px;">
        <h1 class="text-center" style="font-size: 18px; margin-top: 10px; ">KNOWLEDGE MATERIALS</h1>
    </div>


    <div class="col-md-12">
        <div class="card-body col-md-11 text-center mx-auto">
            <table class="table bg-light table-bordered table-hover text-secondary">
                @csrf
                <tbody class="elevation-4">
                    @foreach ($knowledge_materials as $book)
                        <tr>
                            <td class="" style="background-color:#234495; color:white;  font-size: 12px;">
                                <p class="text-center" style="font-size: 12px;">
                                    {{ Carbon\Carbon::parse($book->created_at)->format('F d, Y') }}</p>
                            </td>
                            <td class="" style="font-size: 16px;"><a href="#" data-toggle="modal"
                                    id="knowledge_materials_edit_link"
                                    data-target="#knowledge_materials_id{{ $book->id }}">
                                    {{ $book->title }} </a><br>
                            </td>
                        </tr>
                        <div class="modal fade" id="knowledge_materials_id{{ $book->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-md" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body bg-secondary">

                                        <p class="text-center" style="font-weight: 500; font-size: 22px;">
                                            {{ $book->title }}</p>

                                        <iframe style="width: 100%;height:600px;" src="{{ $book->link }}"
                                            seamless="seamless" scrolling="no" frameborder="0" allowtransparency="true"
                                            allowfullscreen="true"></iframe>

                                    </div>
                                </div>
                            </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
