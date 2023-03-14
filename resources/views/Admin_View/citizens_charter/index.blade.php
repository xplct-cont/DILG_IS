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
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #8c0509; color:white;">
                        <h5 class="modal-title" id="exampleModalLabel">Adding to Citizens Charter</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form action="{{ url('/add-citizens_charter') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="container mx-auto">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="" style="color:dimgray">Title:</label>
                                        <input type="text" class="form-control" name="title" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="" style="color:dimgray">Upload Image: </label>
                                        <input type="file" class="form-control" name="images" required>
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
            <h1 class="" style="font-size: 18px; font-weight: 450;"><a class="nav-link" href="{{ url('/citizens_charter') }}"><span class="fas fa-users-slash"
                    style="color:#8c0509;"></span> CITIZENS CHARTER </a> </h1>
        </div>


        <table class="table text-center table-striped elevation-4">
            <thead style="background-color:#343a40; color:white;">
                <tr>
                    <th>Images</th>
                    <th class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell" style="text-align: center">Title</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>

            </thead>
            <tbody class=" text-dark">
                @foreach ($citizens_charter as $cit_chart)
                    <tr>

                        <td><img class="rounded" src="{{ asset('citizens_charter_images/' . $cit_chart->images) }} "
                                alt="Image" style=" height: 80px; width: 90px;"></td>
                        <td class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell" style="text-align: center">
                            {{ $cit_chart->title }}</td>


                        <td><a href="#" data-toggle="modal" id="citizens_charter_edit_link" class="btn"
                                data-target="#citizens_charter_id{{ $cit_chart->id }}"><span
                                    class="text-warning fas fa-edit"></span></a></td>


                        <!-- Modal -->
                        <div class="modal fade" id="citizens_charter_id{{ $cit_chart->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-md" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: #8c0509; color:white;">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Citizens Charter</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ url('update-citizens_charter/' . $cit_chart->id) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                            <div class="container mx-auto">

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="" style="color:dimgray">Title: </label>
                                                        <input type="text" class="form-control" name="title"
                                                            value="{{ $cit_chart->title }}" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 text-center mx-auto">
                                                    <img src="{{ asset('citizens_charter_images/' . $cit_chart->images) }}"
                                                        class="text-center col-md-12" style=" height: 200px; width: 100%;"
                                                        alt="">
                                                    <div class="form-group mt-2">
                                                        <label for="" style="color:dimgray">Upload Image:</label>
                                                        <input type="file" class="form-control" name="images"
                                                            value="{{ $cit_chart->images }}">
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

                        <td>
                            <a href="#" data-toggle="modal" id="citiznes_charter_delete_link" class="btn"
                                data-target="#delete_citiznes_charter_id{{ $cit_chart->id }}"><span
                                    class="text-danger fas fa-trash-alt"></span></a>
                        </td>

                        <div class="modal fade" id="delete_citiznes_charter_id{{ $cit_chart->id }}" tabindex="-1"
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

                                        <form action="{{ url('delete_citizens_charter/' . $cit_chart->id) }}"
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
@endsection
