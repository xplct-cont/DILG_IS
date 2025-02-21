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
            <form action="{{ url('admin/knowledge_materials') }}" method="GET" role="search">

                <div class="input-group">
                    <span class="input-group-btn mr-1 mt-0">
                        <button class="btn btn-secondary text-light" type="submit" title="Search Name">
                            <span class="fas fa-search"></span>
                        </button>
                    </span>
                    <input type="text" class="form-control mr-1" name="knowledge_materials" placeholder="Search Title..."
                        id="knowledge_materials">
                    <a href="{{ url('admin/knowledge_materials') }}" class=" mt-0">
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
                        <div class="modal-header" style="background-color: #234495; color:white;">
                            <h5 class="modal-title" id="exampleModalLabel">Adding Knowledge Materials</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form action="{{ url('/add-knowledge_materials') }}" method="POST"
                                enctype="multipart/form-data" id="add-form">
                                @csrf

                                <div class="container mx-auto">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" style="color:dimgray">Date:</label>
                                            <input type="date" class="form-control" name="date">
                                        </div>
                                    </div>
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

            <div class="card-header p-2 d-flex justify-content-between">
                <img src="/img/dilg-main.png" style="height: 40px; width: 40px;" alt="">
                <h1 class="" style="font-size: 18px; font-weight: 450;">
                    <a style="text-decoration: none; color: black;" href="{{ url('/knowledge_materials') }}"><span class="fas fa-book-open"
                            style="color:#234495;"></span> KNOWLEDGE MATERIALS </a></h1>

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
                        @foreach ($knowledge_materials as $km)
                            <tr>

                                <td class="text-wrap">{{ $km->title }} <br> <span class="text-wrap"
                                        style="font-size: 12px; color:#234495;">{{ \Carbon\Carbon::parse($km->date)->format('F d, Y') }}</span>
                                </td>

                                <td><a class="btn " href="{{ $km->link }}"><span
                                            class="btn btn-sm btn-success">Details</span></a></td>

                                <td><a href="#" data-toggle="modal" id="knowledge_materials_edit_link"
                                        class="btn" data-target="#knowledge_materials_id{{ $km->id }}"><span
                                            class="text-warning fas fa-edit"></span></a></td>

                                <div class="modal fade" id="knowledge_materials_id{{ $km->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-md" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header" style="background-color: #234495; color:white;">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Knowledge Materials
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                                <form action="{{ url('update-knowledge_materials/' . $km->id) }}"
                                                    method="POST" enctype="multipart/form-data" id="update-form">
                                                    @csrf
                                                    @method('PUT')

                                                    <div class="container mx-auto">


                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="" style="color:dimgray">Date:</label>
                                                                <input type="date" class="form-control" name="date"
                                                                    value="{{ $km->date }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="" style="color:dimgray">Title:</label>
                                                                <input type="text" class="form-control" name="title"
                                                                    value="{{ $km->title }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="" style="color:dimgray">Document
                                                                    Link:</label>
                                                                <input type="text" class="form-control" name="link"
                                                                    value="{{ $km->link }}">
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

                                <td><a href="#" data-toggle="modal" id="knowledge_materials_delete_link"
                                        class="btn"
                                        data-target="#delete_knowledge_materials_id{{ $km->id }}"><span
                                            class="text-danger fas fa-trash-alt"></span></a></td>

                                <div class="modal fade" id="delete_knowledge_materials_id{{ $km->id }}"
                                    tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
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

                                                <form action="{{ url('delete_knowledge_materials/' . $km->id) }}"
                                                    method="GET" enctype="multipart/form-data" id="delete-form">
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
        <div class="text-start" style="color:rgb(83, 82, 82); margin-top: -10px;">
            Showing {{ $knowledge_materials->firstItem() }} to {{ $knowledge_materials->lastItem() }} of {{ $knowledge_materials->total() }} entries
        </div>

        <div class="d-flex justify-content-end mt-2">
            {{ $knowledge_materials->onEachSide(1)->links() }}
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
