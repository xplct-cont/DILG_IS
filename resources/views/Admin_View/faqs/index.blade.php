@extends('Admin_View.layouts.app')
@section('content')
    @if ($message = Session::get('message'))
        <div class="alert alert-success alert-block mt-2">
            <button type="button" class="close" data-dismiss="alert" style="color:black;">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <div class="d-flex justify-content-end mt-5">
        <!-- Button trigger modal -->
        <button type="button" class="btn" style="background-color: #343a40; color:white;" data-toggle="modal"
            data-target="#exampleModal">
            <span class="fas fa-plus-circle"></span> Add
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #C9282D; color:white;">
                        <h5 class="modal-title" id="exampleModalLabel">Adding to FAQ's</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form action="{{ url('/add-faqs') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="container mx-auto">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="" style="color:dimgray">Questions:</label>
                                            <textarea id="" type="text" class="form-control" title="" rows="5" required name="questions"
                                                placeholder="Write some questions..."></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="" style="color:dimgray">Answers:</label>
                                        <textarea id="" type="text" class="form-control" title="" rows="10" required name="answers"
                                            placeholder="Write some answers..."></textarea>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success"><span class="fas fa-save"></span> Submit</button>
                    </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <div class="card mt-2">

        <div class="card-header d-flex justify-content-between">
            <img src="/img/dilg-main.png" style="height: 40px; width: 40px;" alt="">
            <h1 class="" style="font-size: 21px; font-weight: 450;"><span class="fas fa-question-circle"
                    style="color:#C9282D;"></span>FAQ's </h1>

        </div>
        <div>

            <table class="table table-bordered text-center">
                <thead class="text-center" style="background-color:#343a40; color:white;">
                    <tr>
                        <th scope="col">View</th>
                        <th scope="col">Questions</th>
                        <th scope="col">Answers</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($faq as $faqs)
                        <tr>

                            <td><a href="#" data-toggle="modal" id="faq_edit_link" class="btn"
                                    data-target="#faq_id{{ $faqs->id }}"><span
                                        class="text-white btn-success btn-sm">View</span></a></td>
                            <td>{{ $faqs->questions }}</td>
                            <td>{{ $faqs->answers }}</td>

                            <div class="modal fade" id="faq_id{{ $faqs->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #C9282D; color:white;">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit FAQ</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <form action="{{ url('update-faqs/' . $faqs->id) }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')

                                                <div class="container mx-auto">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for=""
                                                                    style="color:dimgray">Questions:</label>
                                                                <textarea id="" type="text" class="form-control" title="" rows="5" required
                                                                    name="questions">{{ $faqs->questions }}</textarea>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="" style="color:dimgray">Answers:</label>
                                                            <textarea id="" type="text" class="form-control" title="" rows="10" required
                                                                name="answers">{{ $faqs->answers }}</textarea>
                                                        </div>



                                                    </div>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success"><span
                                                    class="fas fa-save"></span> Save changes</button>
                                        </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
        </div>

        <td><a href="#" data-toggle="modal" id="faq_delete_link" class="btn"
                data-target="#delete_faq_id{{ $faqs->id }}"><span class="text-danger fas fa-trash-alt"></span></a>
        </td>

        <div class="modal fade" id="delete_faq_id{{ $faqs->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog " role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><span
                                class="fas fa-exclamation-circle text-danger" style="font-size: 30px;"></span> </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form action="{{ url('delete_faqs/' . $faqs->id) }}" method="GET"
                            enctype="multipart/form-data">
                            @csrf
                            @method('GET')

                            <div class="container mx-auto">
                                Are you sure you want to delete this permanently?
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">Delete Permanently</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        </tr>
        @endforeach
        </tbody>
        </table>
    </div>
    </div>
@endsection
