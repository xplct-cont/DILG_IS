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
                        <h5 class="modal-title" id="exampleModalLabel">Adding to PDMU</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('/add-pdmu') }}" method="POST" enctype="multipart/form-data">
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
                                                name="mid_initial" required>
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
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ route('admin/organization') }}" style="text-decoration:none; font-size: 16px;" class="text-dark"><span
            class="text-danger fas fa-arrow-left" style="font-size: 15px;"></span> Back to Organizational Profile</a>
    <div class="elevation-1 p-3 rounded mt-2">
        <div class="card-header d-flex justify-content-between mb-1">
            <img src="/img/dilg-main.png" style="height: 40px; width: 40px;" alt="">
            <h1 class="" style="font-size: 21px; font-weight: 450;"><span class="fas fa-users"
                    style="color:#C9282D;"></span> PDMU PROFILE</h1>
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
                    <th>Position</th>
                    <th>Edit</th>
                    <th scope="col" class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                    style="text-align: center">Delete</th>
                </tr>

            </thead>
            <tbody class="text-dark">
                @foreach ($pdmus as $pdmu_member)
                    <tr>
                        <td><img src="{{ asset('pdmu_profile_images/' . $pdmu_member->profile_img) }} " alt="Image"
                                style="border-radius: 50%; height: 50px; width: 50px;"></td>
                        <td scope="col" class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                            style="text-align: center">{{ $pdmu_member->fname }}</td>
                        <td scope="col" class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                            style="text-align: center">{{ $pdmu_member->mid_initial }}</td>
                        <td>{{ $pdmu_member->lname }}</td>
                        <td>{{ $pdmu_member->position }}</td>
                        <td><a href="#" data-toggle="modal" id="pdmu_edit_link" class="btn"
                                data-target="#pdmu_id{{ $pdmu_member->id }}"><span
                                    class="text-warning fas fa-edit"></span></a></td>

                        <!-- Modal -->
                        <div class="modal fade" id="pdmu_id{{ $pdmu_member->id }}" tabindex="-1" role="dialog"
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
                                        <form action="{{ url('update-pdmu/' . $pdmu_member->id) }}" method="POST"
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
                                                                value="{{ $pdmu_member->fname }}" required>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="" style="color:dimgray">Middle
                                                                Initial:</label>
                                                            <input type="text" class="form-control text-center"
                                                                style="width: 50px;" name="mid_initial"
                                                                value="{{ $pdmu_member->mid_initial }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="" style="color:dimgray">Last Name:</label>
                                                            <input type="text" class="form-control" name="lname"
                                                                value="{{ $pdmu_member->lname }}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" style="color:dimgray">Position:</label>
                                                            <input type="text" class="form-control" name="position"
                                                                value="{{ $pdmu_member->position }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5 mx-auto">
                                                        <img src="{{ asset('pdmu_profile_images/' . $pdmu_member->profile_img) }}"
                                                            class="ml-5"
                                                            style="border-radius: 50%; height: 200px; width: 200px;"
                                                            alt="">
                                                        <div class="form-group">
                                                            <label for="" style="color:dimgray">Profile
                                                                Image:</label>
                                                            <input type="file" class="form-control"
                                                                name="profile_img" value="{{ $pdmu_member->profile_img }}">
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

                        <td  class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                        style="text-align: center"><a href="#" data-toggle="modal" id="pdmu_delete_link" class="btn"
                                data-target="#delete_pdmu_id{{ $pdmu_member->id }}"><span
                                    class="text-danger fas fa-trash-alt"></span></a></td>

                        <div class="modal fade" id="delete_pdmu_id{{ $pdmu_member->id }}" tabindex="-1" role="dialog"
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

                                        <form action="{{ url('delete_pdmu/' . $pdmu_member->id) }}" method="GET"
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
