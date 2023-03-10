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
            <form action="{{ url('admin/lgu') }}" method="GET" role="search">

                <div class="input-group">
                    <span class="input-group-btn mr-1 mt-0">
                        <button class="btn btn-secondary text-light" type="submit" title="Search Name">
                            <span class="fas fa-search"></span>
                        </button>
                    </span>
                    <input type="text" class="form-control mr-1" name="lgus" placeholder="Search..." id="lgus">
                    <a href="{{ url('admin/lgu') }}" class=" mt-0">
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
                            <h5 class="modal-title" id="exampleModalLabel">Adding to Local Government Unit (LGU)</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form action="{{ url('/add-lgu') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="container mx-auto">

                                    <div class="col-md-4 text-center mt-2 mx-auto">

                                        <div class="form-group">
                                            <label for="municipality_id">Municipality:</label>

                                            <select name="municipality_id" id="municipality_id" class="form-control"
                                                style="color:dimgray;" required>
                                                <option selected>Select Municipality...</option>
                                                @foreach ($municipalities as $municipality)
                                                    <option value="{{ $municipality->id }}">
                                                        {{ $municipality->municipality }}
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
                            <button type="submit" class="btn btn-success"><span class="fas fa-save"></span>
                                Submit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="elevation-1 p-3 rounded mt-2">
            <div class="card-header d-flex justify-content-between mb-1">
                <img src="/img/dilg-main.png" style="height: 40px; width: 40px;" alt="">
                <h1 class="" style="font-size: 18px; font-weight: 450;"><a class="nav-link" href="{{ url('lgu') }}"><span class="fas fa-city"
                        style="color:#8c0509;"></span> LGU's </a></h1>
            </div>


            <table class="table text-center table-striped elevation-4">
                <thead style="background-color:#343a40; color:white;">
                    <tr>
                        <th>View/Edit</th>
                        <th>Mayor</th>
                        <th scope="col" class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                            style="text-align: center">Vice Mayor</th>
                        <th>Municipality</th>
                        <th scope="col" class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                            style="text-align: center">Delete</th>
                    </tr>

                </thead>
                <tbody class=" text-dark">
                    @foreach ($lgus as $lgu_member)
                        <tr>
                            <td><a href="#" data-toggle="modal" id="lgu_edit_link" class="btn"
                                    data-target="#lgu_id{{ $lgu_member->id }}"><span
                                        class="text-light btn btn-sm btn-success">View</span></a></td>
                            <td>{{ $lgu_member->mayor }}</td>
                            <td scope="col" class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                style="text-align: center">{{ $lgu_member->vice_mayor }}</td>
                            <td>{{ $lgu_member->municipality->municipality }}</td>

                            <!-- Modal -->
                            <div class="modal fade" id="lgu_id{{ $lgu_member->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                            <form action="{{ url('update-lgu/' . $lgu_member->id) }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')

                                                <div class="container mx-auto">

                                                    <div class="col-md-3 mt-2 mx-auto">
                                                        <div class="form-group text-center">
                                                            <label for=""
                                                                style="color:dimgray">Municipality:</label>
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
                                                                    value="{{ $lgu_member->vice_mayor }}"
                                                                    name="vice_mayor">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="" style="color:dimgray">SB
                                                                    Member:</label>
                                                                <input type="text" class="form-control"
                                                                    name="sb_member1"
                                                                    value="{{ $lgu_member->sb_member1 }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="" style="color:dimgray">SB
                                                                    Member:</label>
                                                                <input type="text" class="form-control"
                                                                    name="sb_member2"
                                                                    value="{{ $lgu_member->sb_member2 }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="" style="color:dimgray">SB
                                                                    Member:</label>
                                                                <input type="text" class="form-control"
                                                                    name="sb_member3"
                                                                    value="{{ $lgu_member->sb_member3 }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="" style="color:dimgray">SB
                                                                    Member:</label>
                                                                <input type="text" class="form-control"
                                                                    name="sb_member4"
                                                                    value="{{ $lgu_member->sb_member4 }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="" style="color:dimgray">SB
                                                                    Member:</label>
                                                                <input type="text" class="form-control"
                                                                    name="sb_member5"
                                                                    value="{{ $lgu_member->sb_member5 }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="" style="color:dimgray">SB
                                                                    Member:</label>
                                                                <input type="text" class="form-control"
                                                                    name="sb_member6"
                                                                    value="{{ $lgu_member->sb_member6 }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="" style="color:dimgray">SB
                                                                    Member:</label>
                                                                <input type="text" class="form-control"
                                                                    name="sb_member7"
                                                                    value="{{ $lgu_member->sb_member7 }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="" style="color:dimgray">SB
                                                                    Member:</label>
                                                                <input type="text" class="form-control"
                                                                    name="sb_member8"
                                                                    value="{{ $lgu_member->sb_member8 }}">
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
                                <a href="#" data-toggle="modal" id="lgu_delete_link" class="btn"
                                    data-target="#delete_lgu_id{{ $lgu_member->id }}"><span
                                        class="text-danger fas fa-trash-alt"></span></a></td>

                            <div class="modal fade" id="delete_lgu_id{{ $lgu_member->id }}" tabindex="-1"
                                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <div class="d-flex justify-content-end mt-2">
            {{ $lgus->onEachSide(1)->links() }}
        </div>
    @endsection
