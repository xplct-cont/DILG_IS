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
                        <h5 class="modal-title" id="exampleModalLabel">Adding to Field Officers</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form action="{{ url('/add-field_officer') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="container mx-auto">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" style="color:dimgray">First Name:</label>
                                            <input type="text" class="form-control" name="fname" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" style="color:dimgray">Middle Initial:</label>
                                            <input type="text" class="form-control text-center" style="width: 50px;"
                                                name="mid_initial">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" style="color:dimgray">Last Name:</label>
                                            <input type="text" class="form-control" name="lname" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" style="color:dimgray">Profile Image:</label>
                                            <input type="file" class="form-control" name="profile_img">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="municipality_id">Station:</label>

                                            <select name="municipality_id" id="municipality_id" class="form-control"
                                                style="color:dimgray;">
                                                <option selected>Select...</option>
                                                @foreach ($municipalities as $municipal)
                                                    <option value="{{ $municipal->id }}">{{ $municipal->municipality }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" style="color:dimgray">Cluster:</label>
                                            <input type="text" class="form-control" name="cluster">
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <div class="form-group">
                                            <label for="" style="color:dimgray">Position:</label>
                                            <input type="text" class="form-control" name="position" required>
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
            <h1 class="" style="font-size: 21px; font-weight: 450;"><span class="fas fa-people-carry"
                    style="color:#C9282D;"></span> FIELD OFFICERS </h1>
        </div>


        <table class="table text-center table-striped elevation-4">
            <thead style="background-color:#343a40; color:white;">
                <tr>
                    <th>Profile Image</th>
                    <th scope="col" class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                        style="text-align: center">First Name</th>
                    <th scope="col" class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                        style="text-align: center">Middle Initial</th>
                    <th>Last Name</th>
                    <th scope="col" class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                        style="text-align: center">Cluster</th>
                    <th scope="col" class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                        style="text-align: center">Station</th>
                    <th>Position</th>
                    <th>Edit</th>
                    <th scope="col" class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                        style="text-align: center">Delete</th>
                </tr>

            </thead>
            <tbody class=" text-dark">
                @foreach ($field_officers as $field_off)
                    <tr>
                        <td><img src="{{ asset('field_off_images/' . $field_off->profile_img) }} " alt="Image"
                                style="border-radius: 50%; height: 50px; width: 50px;"></td>
                        <td scope="col" class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                            style="text-align: center">{{ $field_off->fname }}</td>
                        <td scope="col" class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                            style="text-align: center">{{ $field_off->mid_initial }}</td>
                        <td>{{ $field_off->lname }}</td>
                        <td scope="col" class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                            style="text-align: center">{{ $field_off->cluster }}</td>
                        <td scope="col" class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                            style="text-align: center">{{ $field_off->municipality->municipality }}</td>
                        <td>{{ $field_off->position }}</td>
                        <td><a href="#" data-toggle="modal" id="field_off_edit_link" class="btn"
                                data-target="#field_off_id{{ $field_off->id }}"><span
                                    class="text-warning fas fa-edit"></span></a></td>


                        <!-- Modal -->
                        <div class="modal fade" id="field_off_id{{ $field_off->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: #C9282D; color:white;">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Field Officer</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ url('update-field_officer/' . $field_off->id) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                            <div class="container mx-auto">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="" style="color:dimgray">First
                                                                Name:</label>
                                                            <input type="text" class="form-control" name="fname"
                                                                value="{{ $field_off->fname }}" required>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="" style="color:dimgray">Middle
                                                                Initial:</label>
                                                            <input type="text" class="form-control text-center"
                                                                style="width: 50px;" name="mid_initial"
                                                                value="{{ $field_off->mid_initial }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="" style="color:dimgray">Last Name:</label>
                                                            <input type="text" class="form-control" name="lname"
                                                                value="{{ $field_off->lname }}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" style="color:dimgray">Position:</label>
                                                            <input type="text" class="form-control" name="position"
                                                                value="{{ $field_off->position }}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" style="color:dimgray">Cluster:</label>
                                                            <input type="text" class="form-control" name="cluster"
                                                                value="{{ $field_off->cluster }}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="municipality_id">Station:</label>

                                                            <select name="municipality_id" id="municipality_id"
                                                                class="form-control" style="color:dimgray;">
                                                                <option selected
                                                                    value="{{ $field_off->municipality->id }}">
                                                                    {{ $field_off->municipality->municipality }}</option>
                                                                @foreach ($municipalities as $municipal)
                                                                    <option value="{{ $municipal->id }}">
                                                                        {{ $municipal->municipality }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5 mx-auto">
                                                        <img src="{{ asset('field_off_images/' . $field_off->profile_img) }}"
                                                            class="ml-5"
                                                            style="border-radius: 50%; height: 200px; width: 200px;"
                                                            alt="">
                                                        <div class="form-group">
                                                            <label for="" style="color:dimgray">Profile
                                                                Image:</label>
                                                            <input type="file" class="form-control"
                                                                name="profile_img" value="{{ $field_off->profile_img }}">
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

                        <td class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell" style="text-align: center"><a
                                href="#" data-toggle="modal" id="field_off_delete_link" class="btn"
                                data-target="#delete_field_off_id{{ $field_off->id }}"><span
                                    class="text-danger fas fa-trash-alt"></span></a></td>

                        <div class="modal fade" id="delete_field_off_id{{ $field_off->id }}" tabindex="-1"
                            role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                                        <form action="{{ url('delete_field_officer/' . $field_off->id) }}" method="GET"
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
