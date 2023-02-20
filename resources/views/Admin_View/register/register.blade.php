@extends('Admin_View.layouts.app')


@section('content')
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
                        <h5 class="modal-title" id="exampleModalLabel">Adding New Project </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="container mx-auto">
                                <div class="row">

                                    <div class="form-group">
                                        <label for="program_id">Program Categories:</label>

                                        <select name="program_id" id="program_id" class="form-control"
                                            style="color:dimgray;">
                                            <option selected>Select...</option>
                                            {{-- @foreach ($program as $prog)
                                                <option value="{{ $prog->id }}">{{ $prog->title }}
                                                </option>
                                            @endforeach --}}
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="municipality_id">Municipalities:</label>

                                        <select name="municipality_id" id="municipality_id" class="form-control"
                                            style="color:dimgray;">
                                            <option selected>Select...</option>
                                            {{-- @foreach ($municipalities as $municipal)
                                                <option value="{{ $municipal->id }}">{{ $municipal->municipality }}
                                                </option>
                                            @endforeach --}}
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" style="color:dimgray">Project Code:</label>
                                            <input type="text" class="form-control" name="proj_code" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" style="color:dimgray">Title:</label>
                                            <input type="text" class="form-control" name="title" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" style="color:dimgray">Province:</label>
                                            <input type="text" class="form-control" name="province">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" style="color:dimgray;">Description: </label>
                                        <textarea style=" height: 150px;" id="" type="text" class="form-control"
                                            placeholder="Write the description..." title="" name="description"></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" style="color:dimgray">Type:</label>
                                            <input type="text" class="form-control" name="type">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" style="color:dimgray">Status:</label>
                                            <input type="text" class="form-control" name="status">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" style="color:dimgray">Total Cost:</label>
                                            <input type="text" class="form-control" name="total_cost">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="" style="color:dimgray">Exact Location</label>

                                            <input type="text" class="form-control" name="exact_loc">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" style="color:dimgray">Year:</label>
                                        <input type="text" class="form-control" style="width: 100px;" name="year">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" style="color:dimgray">Images (Max:3)</label>
                                        <input type="file" class="form-control" name="images[]" multiple required>
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
@endsection
