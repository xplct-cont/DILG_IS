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
                        <h5 class="modal-title" id="exampleModalLabel">Adding to Local Government Unit (LGU)</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form action="{{ url('/add-lgu') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="container mx-auto">
                                <div class="text-center">
                                    <img src="/img/bohol_seal.png" style="height: 150px; width: 150px;" alt="">
                                </div>
                                <div class="col-md-4 text-center mt-2 mx-auto">

                                    <div class="form-group">
                                        <label for="municipality_id">Municipality:</label>

                                        <select name="municipality_id" id="municipality_id" class="form-control"
                                            style="color:dimgray;">
                                            <option selected>Select Municipality...</option>
                                            @foreach ($municipalities as $municipality)
                                                <option value="{{ $municipality->id }}">{{ $municipality->municipality }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" style="color:dimgray">Mayor:</label>
                                            <input type="text" class="form-control" name="mayor">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" style="color:dimgray">Vice Mayor:</label>
                                            <input type="text" class="form-control" name="vice_mayor">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" style="color:dimgray">SB Member:</label>
                                            <input type="text" class="form-control" name="sb_member1">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" style="color:dimgray">SB Member:</label>
                                            <input type="text" class="form-control" name="sb_member2">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" style="color:dimgray">SB Member:</label>
                                            <input type="text" class="form-control" name="sb_member3">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" style="color:dimgray">SB Member:</label>
                                            <input type="text" class="form-control" name="sb_member4">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" style="color:dimgray">SB Member:</label>
                                            <input type="text" class="form-control" name="sb_member5">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" style="color:dimgray">SB Member:</label>
                                            <input type="text" class="form-control" name="sb_member6">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" style="color:dimgray">SB Member:</label>
                                            <input type="text" class="form-control" name="sb_member7">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" style="color:dimgray">SB Member:</label>
                                            <input type="text" class="form-control" name="sb_member8">
                                        </div>
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

    <div class="elevation-1 p-3 rounded mt-2">
        <div class="card-header d-flex justify-content-between mb-1">
            <img src="/img/dilg-main.png" style="height: 40px; width: 40px;" alt="">
            <h1 class="" style="font-size: 21px; font-weight: 450;"><span class="fas fa-city"
                    style="color:#C9282D;"></span> Local Government Unit (LGU's)</h1>
        </div>


        <table class="table text-center table-striped elevation-4">
            <thead style="background-color:#343a40; color:white;">
                <tr>
                    <th>View/Edit</th>
                    <th>Mayor</th>
                    <th>Vice Mayor</th>
                    <th>Municipality</th>
                    <th>Delete</th>
                </tr>

            </thead>
            <tbody class=" text-dark">
                @foreach ($lgus as $lgu_member)
                    <tr>
                        <td><a href="#" data-toggle="modal" id="lgu_edit_link" class="btn"
                                data-target="#lgu_id{{ $lgu_member->id }}"><span
                                    class="text-light btn btn-sm btn-success">View</span></a></td>
                        <td>{{ $lgu_member->mayor }}</td>
                        <td>{{ $lgu_member->vice_mayor }}</td>
                        <td>{{ $lgu_member->municipality->municipality }}</td>

                        <!-- Modal -->
                        <div class="modal fade" id="lgu_id{{ $lgu_member->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: #C9282D; color:white;">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ url('update-lgu/' . $lgu_member->id) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                            <div class="container mx-auto">
                                                <div class="text-center">
                                                    <img src="/img/bohol_seal.png" style="height: 150px; width: 150px;"
                                                        alt="">
                                                </div>
                                                <div class="col-md-3 mt-2 mx-auto">
                                                    <div class="form-group text-center">
                                                        <label for="" style="color:dimgray">Municipality:</label>
                                                        <input type="text" class="form-control text-center"
                                                            value="{{ $lgu_member->municipality->municipality }}"
                                                            readonly>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="" style="color:dimgray">Mayor:</label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $lgu_member->mayor }}" name="mayor">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="" style="color:dimgray">Vice
                                                                Mayor:</label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $lgu_member->vice_mayor }}" name="vice_mayor">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="" style="color:dimgray">SB Member:</label>
                                                            <input type="text" class="form-control" name="sb_member1"
                                                                value="{{ $lgu_member->sb_member1 }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="" style="color:dimgray">SB Member:</label>
                                                            <input type="text" class="form-control" name="sb_member2"
                                                                value="{{ $lgu_member->sb_member2 }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="" style="color:dimgray">SB Member:</label>
                                                            <input type="text" class="form-control" name="sb_member3"
                                                                value="{{ $lgu_member->sb_member3 }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="" style="color:dimgray">SB Member:</label>
                                                            <input type="text" class="form-control" name="sb_member4"
                                                                value="{{ $lgu_member->sb_member4 }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="" style="color:dimgray">SB Member:</label>
                                                            <input type="text" class="form-control" name="sb_member5"
                                                                value="{{ $lgu_member->sb_member5 }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="" style="color:dimgray">SB Member:</label>
                                                            <input type="text" class="form-control" name="sb_member6"
                                                                value="{{ $lgu_member->sb_member6 }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="" style="color:dimgray">SB Member:</label>
                                                            <input type="text" class="form-control" name="sb_member7"
                                                                value="{{ $lgu_member->sb_member7 }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="" style="color:dimgray">SB Member:</label>
                                                            <input type="text" class="form-control" name="sb_member8"
                                                                value="{{ $lgu_member->sb_member8 }}">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success"><span class="fas fa-save"></span>
                                            Save changes</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <td><a href="#" data-toggle="modal" id="lgu_delete_link" class="btn"
                                data-target="#delete_lgu_id{{ $lgu_member->id }}"><span
                                    class="text-danger fas fa-trash-alt"></span></a></td>

                        <div class="modal fade" id="delete_lgu_id{{ $lgu_member->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog " role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"><span
                                                class="fas fa-exclamation-circle text-danger"
                                                style="font-size: 30px;"></span> </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <form action="{{ url('delete_lgu/' . $lgu_member->id) }}" method="GET"
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
@endsection
