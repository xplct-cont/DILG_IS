@extends('Admin_View.layouts.app')

@section('content')
    @if ($message = Session::get('status'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert" style="color:black;">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <div class="search" style="position:relative; top: 5px;">
        <div class="mx-auto" style="width:300px;">
            <form action="{{ url('admin/downloadables') }}" method="GET" role="search">

                <div class="input-group">
                    <span class="input-group-btn mr-1 mt-0">
                        <button class="btn btn-secondary text-light" type="submit" title="Search Name">
                            <span class="fas fa-search"></span>
                        </button>
                    </span>
                    <input type="text" class="form-control mr-1" name="downloadables" placeholder="Search Title..."
                        id="downloadables">
                    <a href="{{ url('admin/downloadables') }}" class=" mt-0">
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
                <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color: #8c0509; color:white;">
                            <h5 class="modal-title" id="exampleModalLabel">Adding Downloadables</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form action="{{ url('/add-downloadables') }}" method="POST" enctype="multipart/form-data">
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
                                            <label for="" style="color:dimgray">Document Link:</label>
                                            <input type="text" class="form-control" name="link">
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
                <h1 class="" style="font-size: 18px; font-weight: 450;"><a class="nav-link" href="{{ url('/downloadables') }}"><span class="fas fa-download"
                        style="color:#8c0509;"></span> DOWNLOADABLES </a></h1>

            </div>
            <div>

                <table class="table table-bordered text-center">
                    <thead class="text-center" style="background-color:#343a40; color:white;">
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Document Link</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($downloadables as $dw)
                            <tr>

                                <td>{{ $dw->title }}</td>

                                <td><a class="btn " href="{{ $dw->link }}"><span
                                            class="btn btn-sm btn-success">Details</span></a></td>

                                <td><a href="#" data-toggle="modal" id="downloadables_edit_link" class="btn"
                                        data-target="#downloadables_id{{ $dw->id }}"><span
                                            class="text-warning fas fa-edit"></span></a></td>

                                <div class="modal fade" id="downloadables_id{{ $dw->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-md" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header" style="background-color: #8c0509; color:white;">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Downloadables</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                                <form action="{{ url('update-downloadables/' . $dw->id) }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')

                                                    <div class="container mx-auto">

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="" style="color:dimgray">Title:</label>
                                                                <input type="text" class="form-control" name="title"
                                                                    value="{{ $dw->title }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="" style="color:dimgray">Documen
                                                                    Link:</label>
                                                                <input type="text" class="form-control" name="link"
                                                                    value="{{ $dw->link }}">
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

                                <td><a href="#" data-toggle="modal" id="downloadables_delete_link" class="btn"
                                        data-target="#delete_downloadables_id{{ $dw->id }}"><span
                                            class="text-danger fas fa-trash-alt"></span></a></td>

                                <div class="modal fade" id="delete_downloadables_id{{ $dw->id }}" tabindex="-1"
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

                                                <form action="{{ url('delete_downloadables/' . $dw->id) }}"
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
        </div>
        <div class="d-flex justify-content-end mt-2">
            {{ $downloadables->onEachSide(1)->links() }}
        </div>
    @endsection
