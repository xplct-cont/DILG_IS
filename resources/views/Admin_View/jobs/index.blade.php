@extends('Admin_View.layouts.app')
@section('content')
    @if ($message = Session::get('message'))
        <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
            <button type="button" class="close" data-dismiss="alert" style="color:black;">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif


    <div class="search" style="position:relative; top: 5px;">
        <div class="mx-auto" style="width:300px;">
            <form action="{{ url('admin/jobs') }}" method="GET" role="search">

                <div class="input-group">
                    <span class="input-group-btn mr-1 mt-0">
                        <button class="btn btn-secondary text-light" type="submit" title="Search Name">
                            <span class="fas fa-search"></span>
                        </button>
                    </span>
                    <input type="text" class="form-control mr-1" name="admin_jobs" placeholder="Search..."
                        id="admin_jobs">
                    <a href="{{ url('admin/jobs') }}" class=" mt-0">
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
                        <div class="modal-header" style="background-color: #234495; color:white;">
                            <h5 class="modal-title" id="exampleModalLabel">Adding Vacant Position</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form action="{{ url('/add-new-job') }}" method="POST" enctype="multipart/form-data"
                                id="add-form">
                                @csrf

                                <div class="container mx-auto">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="" style="color:dimgray">Position:</label>
                                                <input type="text" class="form-control" name="position" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="" style="color:dimgray">Upload Image: <span
                                                        class="text-danger">(Max: 1)</span></label>
                                                <input type="file" class="form-control" name="hiring_img">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="" style="color:dimgray">Document Link:</label>
                                                <input type="text" class="form-control" name="link" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="" style="color:dimgray">Description:</label>
                                                <textarea id="" type="text" class="form-control" title="" rows="5" required name="details"
                                                    placeholder="Write the description..."></textarea>
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

        <div class="card mt-2">

            <div class="card-header p-2 d-flex justify-content-between">
                <img src="/img/dilg-main.png" style="height: 40px; width: 40px;" alt="">
                <h1 class="" style="font-size: 18px; font-weight: 450;"><a class="dropdown-item"
                        href="{{ url('/job_vacancies') }}"><span class="fas fa-address-book"
                            style="color:#234495;"></span> JOB
                        VACANCIES</a></h1>

            </div>
            <div>
                @role('Super-Admin|Admin')
                    <table class="table table-bordered text-center">
                        <thead class="text-center" style="background-color:#343a40; color:white;">
                            <tr>
                                <th scope="col">Remarks</th>
                                <th scope="col" class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                    style="text-align: center">
                                    Image</th>
                                <th scope="col">Position</th>
                                <th scope="col">Document Link</th>
                                <th scope="col">Edit</th>
                                <th scope="col" class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                    style="text-align: center">Delete</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($admin_jobs as $ad_jobs)
                                <tr>
                                    <td>
                                        @if ($ad_jobs->remarks == 'Filled Up')
                                            <span class=" btn btn-sm btn-danger text-light">Filled Up <span
                                                    class="text-justify fas fa-exclamation"></span></span>
                                        @elseif ($ad_jobs->remarks == 'Available')
                                            <span class="btn btn-sm text-light" style="background-color: #234495;">Available
                                                <span class="text-justify fas fa-check"></span></span>
                                        @endif
                                    </td>
                                    <td scope="col" class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                        style="text-align: center"> <img
                                            src="{{ asset('hiring_images/' . $ad_jobs->hiring_img) }} " alt="Image"
                                            style="border-radius: 5px; height: 70px; width: 80px;"></td>
                                    <td>{{ $ad_jobs->position }}</td>
                                    <td><a class="btn " href="{{ $ad_jobs->link }}"><span
                                                class="btn btn-sm btn-success">Details</span></a></td>

                                    <td><a href="#" data-toggle="modal" id="job_edit_link" class="btn"
                                            data-target="#job_id{{ $ad_jobs->id }}"><span
                                                class="text-warning fas fa-edit"></span></a></td>

                                    <div class="modal fade" id="job_id{{ $ad_jobs->id }}" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #234495; color:white;">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Vacant Position</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">

                                                    <form action="{{ url('update_jobs/' . $ad_jobs->id) }}" method="POST"
                                                        enctype="multipart/form-data" id="update-form">
                                                        @csrf
                                                        @method('PUT')

                                                        <div class="container mx-auto">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for=""
                                                                            style="color:dimgray">Position:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="position" value="{{ $ad_jobs->position }}"
                                                                            required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="" style="color:dimgray">Upload
                                                                            Image: <span class="text-danger">(Max:
                                                                                1)</span></label>
                                                                        <input type="file" class="form-control"
                                                                            name="hiring_img"
                                                                            value="{{ $ad_jobs->hiring_img }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="" style="color:dimgray">Document
                                                                            Link:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="link" value="{{ $ad_jobs->link }}"
                                                                            required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for=""
                                                                            style="color:dimgray">Description:</label>
                                                                        <textarea id="" type="text" class="form-control" title="" rows="5" required name="details"
                                                                            placeholder="Write some description...">{{ $ad_jobs->details }}</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-success"><span
                                                            class="fas fa-save"></span> Save changes</button>
                                                </div>
                                                </form>
                                                <div class="text-start p-3">
                                                    @if ($ad_jobs->remarks == 'Filled Up')
                                                        <span>
                                                            <form action="{{ url('/available/' . $ad_jobs->id) }}"
                                                                method="POST" class="d-inline-block">
                                                                @csrf
                                                                <span style="font-weight: 500; color:dimgray;">Remarks:</span>
                                                                <button type="submit" class="btn btn-sm ml-2"
                                                                    style="background-color: #234495; color:white;">Change to
                                                                    Available ?
                                                                </button>
                                                            </form>
                                                        </span>
                                                    @elseif ($ad_jobs->remarks == 'Available')
                                                        <span>
                                                            <form action="{{ url('/filled_up/' . $ad_jobs->id) }}"
                                                                method="POST" class="d-inline-block">
                                                                @csrf
                                                                <span style="font-weight: 500; color:dimgray;">Remarks:</span>
                                                                <button type="submit" class="btn btn-sm ml-2 btn-danger"
                                                                    style="color:white;">Change to Filled Up ?</button>
                                                        </span>
                                                        </form>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                    </div>



                                    <td class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                        style="text-align: center"><a href="#" data-toggle="modal"
                                            id="job_delete_link" class="btn"
                                            data-target="#delete_job_id{{ $ad_jobs->id }}"><span
                                                class="text-danger fas fa-trash-alt"></span></a></td>

                                    <div class="modal fade" id="delete_job_id{{ $ad_jobs->id }}" tabindex="-1"
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

                                                    <form action="{{ url('delete_jobs/' . $ad_jobs->id) }}" method="GET"
                                                        enctype="multipart/form-data" id="delete-form">
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
                @endrole
                @role('Publisher')
                    <table class="table table-bordered text-center">
                        <thead class="text-center" style="background-color:#343a40; color:white;">
                            <tr>
                                <th scope="col" scope="col"
                                    class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell" style="text-align: center">
                                    Image</th>
                                <th scope="col">Position</th>
                                <th scope="col">Document Link</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($admin_jobs as $ad_jobs)
                                <tr>
                                    <td scope="col" class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                        style="text-align: center"> <img
                                            src="{{ asset('hiring_images/' . $ad_jobs->hiring_img) }} " alt="Image"
                                            style="border-radius: 5px; height: 70px; width: 80px;"></td>
                                    <td>{{ $ad_jobs->position }}</td>
                                    <td><a class="btn " href="{{ $ad_jobs->link }}"><span
                                                class="btn btn-sm btn-success">Details</span></a></td>
                                    @if ($ad_jobs->user_id == auth()->user()->id)
                                        <td><a href="#" data-toggle="modal" id="job_edit_link" class="btn"
                                                data-target="#job_id{{ $ad_jobs->id }}"><span
                                                    class="text-warning fas fa-edit"></span></a></td>

                                        <div class="modal fade" id="job_id{{ $ad_jobs->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header" style="background-color: #234495; color:white;">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Vacant Position
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">

                                                        <form action="{{ url('update_jobs/' . $ad_jobs->id) }}"
                                                            method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')

                                                            <div class="container mx-auto">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for=""
                                                                                style="color:dimgray">Position:</label>
                                                                            <input type="text" class="form-control"
                                                                                name="position"
                                                                                value="{{ $ad_jobs->position }}" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="" style="color:dimgray">Upload
                                                                                Image: <span class="text-danger">(Max:
                                                                                    1)</span></label>
                                                                            <input type="file" class="form-control"
                                                                                name="hiring_img"
                                                                                value="{{ $ad_jobs->hiring_img }}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for=""
                                                                                style="color:dimgray">Document
                                                                                Link:</label>
                                                                            <input type="text" class="form-control"
                                                                                name="link" value="{{ $ad_jobs->link }}"
                                                                                required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for=""
                                                                                style="color:dimgray">Description:</label>
                                                                            <textarea id="" type="text" class="form-control" title="" rows="5" required name="details"
                                                                                placeholder="Write some description...">{{ $ad_jobs->details }}</textarea>
                                                                        </div>
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

                                        <td><a href="#" data-toggle="modal" id="job_delete_link" class="btn"
                                                data-target="#delete_job_id{{ $ad_jobs->id }}"><span
                                                    class="text-danger fas fa-trash-alt"></span></a></td>

                                        <div class="modal fade" id="delete_job_id{{ $ad_jobs->id }}" tabindex="-1"
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

                                                        <form action="{{ url('delete_jobs/' . $ad_jobs->id) }}"
                                                            method="GET" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('GET')

                                                            <div class="container mx-auto">
                                                                Are you sure you want to delete this permanently?
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-danger">Delete
                                                            Permanently</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endrole
            </div>
        </div>
        <div class="text-start" style="color:rgb(83, 82, 82); margin-top: -10px;">
            Showing {{ $admin_jobs->firstItem() }} to {{ $admin_jobs->lastItem() }} of {{ $admin_jobs->total() }} entries
        </div>

        <div class="d-flex justify-content-end mt-2">
            {{ $admin_jobs->onEachSide(1)->links() }}
        </div>

        <!-- Loading GIF image -->
        <div id="loading"
            style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 9999; display: none;">
            <img src="{{ asset('loading_img/load.gif') }}" style="height: 150px; width: 150px;" alt="Loading...">
        </div>

        <script>
            setTimeout(function() {
                $(' .alert-dismissible').fadeOut('slow');
            }, 1000);


            const addform = document.getElementById('add-form');
            const addloading = document.getElementById('loading');

            addform.addEventListener('submit', () => {
                addloading.style.display = 'block';
            });

            addform.addEventListener('load', () => {
                addloading.style.display = 'none';
            });

            addform.addEventListener('error', () => {
                addloading.style.display = 'none';
            });



            const updateform = document.getElementById('update-form');
            const updateloading = document.getElementById('loading');

            updateform.addEventListener('submit', () => {
                updateloading.style.display = 'block';
            });

            updateform.addEventListener('load', () => {
                updateloading.style.display = 'none';
            });

            updateform.addEventListener('error', () => {
                updateloading.style.display = 'none';
            });


            const deleteform = document.getElementById('delete-form');
            const deleteloading = document.getElementById('loading');

            deleteform.addEventListener('submit', () => {
                deleteloading.style.display = 'block';
            });

            deleteform.addEventListener('load', () => {
                deleteloading.style.display = 'none';
            });

            deleteform.addEventListener('error', () => {
                deleteloading.style.display = 'none';
            });
        </script>
    @endsection
