@extends('Admin_View.layouts.app')

@section('content')
    @if ($message = Session::get('message'))
        <div class="alert alert-success alert-block mt-2">
            <button type="button" class="close" data-dismiss="alert" style="color:black;">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif


    <div class="search" style="position:relative; top: 5px;">
        <div class="mx-auto" style="width:300px;">
            <form action="{{ url('admin/provincial_officials') }}" method="GET" role="search">

                <div class="input-group">
                    <span class="input-group-btn mr-1 mt-0">
                        <button class="btn btn-secondary text-light" type="submit" title="Search Name">
                            <span class="fas fa-search"></span>
                        </button>
                    </span>
                    <input type="text" class="form-control mr-1" name="prov_officials" placeholder="Search..."
                        id="prov_officials">
                    <a href="{{ url('admin/provincial_officials') }}" class=" mt-0">
                        <span class="input-group-btn">
                            <button class="btn btn-danger text-light" type="button" title="Refresh page">
                                <span class="fas fa-sync-alt"></span>
                            </button>
                        </span>
                    </a>
                </div>
            </form>
        </div>

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
                        <div class="modal-header" style="background-color: #8c0509; color:white;">
                            <h5 class="modal-title" id="exampleModalLabel">Adding to Provincial Officials</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form action="{{ url('/add-provincial_officials') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="container mx-auto">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="" style="color:dimgray">Name:</label>
                                                <input type="text" class="form-control" name="name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="" style="color:dimgray">Position:</label>
                                                <input type="text" class="form-control" name="position">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="" style="color:dimgray">Profile Image:</label>
                                                <input type="file" class="form-control" name="profile_image">
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <div class="form-group">
                                                <label for="" style="color:dimgray">Message:</label>
                                                <textarea id="" type="text" class="form-control" title="" rows="5" required name="message"
                                                    placeholder="Say something..."></textarea>
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
                <h1 class="" style="font-size: 18px; font-weight: 450;"><span class="fas fa-user-tie"
                        style="color:#8c0509;"></span> PROV. OFFICIALS</h1>
            </div>


            <table class="table text-center table-striped elevation-4">
                <thead style="background-color:#343a40; color:white;">
                    <tr>
                        <th>Profile Image</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th scope="col" class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                            style="text-align: center">Message</th>
                        <th>Edit</th>
                        <th scope="col" class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                            style="text-align: center">Delete</th>
                    </tr>

                </thead>
                <tbody class=" text-dark">
                    @foreach ($prov_officials as $prov_off)
                        <tr>

                            <td><img src="{{ asset('provincial_officials_images/' . $prov_off->profile_image) }} "
                                    alt="Image" style="border-radius: 50%; height: 50px; width: 50px;"></td>
                            <td>{{ $prov_off->name }}</td>
                            <td>{{ $prov_off->position }}</td>
                            <td class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell" style="text-align: center">
                                {{ $prov_off->message }}</td>


                            <td><a href="#" data-toggle="modal" id="provincial_officials_edit_link" class="btn"
                                    data-target="#provincial_officials_id{{ $prov_off->id }}"><span
                                        class="text-warning fas fa-edit"></span></a></td>


                            <!-- Modal -->
                            <div class="modal fade" id="provincial_officials_id{{ $prov_off->id }}" tabindex="-1"
                                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #8c0509; color:white;">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ url('update-provincial_officials/' . $prov_off->id) }}"
                                                method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')

                                                <div class="container mx-auto">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="" style="color:dimgray">Name:</label>
                                                                <input type="text" class="form-control" name="name"
                                                                    value="{{ $prov_off->name }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for=""
                                                                    style="color:dimgray">Position:</label>
                                                                <input type="text" class="form-control"
                                                                    name="position" value="{{ $prov_off->position }}"
                                                                    required>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 mx-auto text-center">
                                                            <img src="{{ asset('provincial_officials_images/' . $prov_off->profile_image) }}"
                                                                class=""
                                                                style="border-radius: 50%; height: 220px; width: 220px;"
                                                                alt="">

                                                            <div class="form-group text-center col-md-12">
                                                                <label for="" style="color:dimgray">Profile
                                                                    Image:</label>
                                                                <input type="file" class="form-control"
                                                                    name="profile_image">
                                                            </div>

                                                        </div>

                                                        <div class="col-md-12 text-center">
                                                            <div class="form-group">
                                                                <label for=""
                                                                    style="color:dimgray">Message:</label>
                                                                <textarea id="" type="text" class="form-control" title="" rows="5" required
                                                                    name="message">{{ $prov_off->message }}"</textarea>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success"><span
                                                    class="fas fa-save"></span>
                                                Save changes</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <td class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell" style="text-align: center">
                                <a href="#" data-toggle="modal" id="provincial_officials_delete_link"
                                    class="btn" data-target="#delete_provincial_officials_id{{ $prov_off->id }}"><span
                                        class="text-danger fas fa-trash-alt"></span></a></td>

                            <div class="modal fade" id="delete_provincial_officials_id{{ $prov_off->id }}"
                                tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog " role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"><span
                                                    class="fas fa-exclamation-circle text-danger"
                                                    style="font-size: 30px;"></span> </h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <form action="{{ url('delete_provincial_officials/' . $prov_off->id) }}"
                                                method="GET" enctype="multipart/form-data">
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

        <div class="d-flex justify-content-end mt-2">
            {{ $prov_officials->links() }}
        </div>
    @endsection
