@extends('Admin_View.layouts.app')
@section('content')
    @if ($message = Session::get('message'))
        <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
            <button type="button" class="close" data-dismiss="alert" style="color:black;">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif


    <div class="search" style="position:relative; top: 5px;">
        <div class="mx-auto mb-2 ">
            <form action="" method="GET">
                <div class="d-flex justify-content-center">
                    <div class="input-group d-flex col-md-4">
                        <a href="{{ url('admin/news_updates') }}" class=" mt-0">
                            <span class="input-group-btn me-2">
                                <button class="btn btn-danger text-light" type="button" title="Refresh page">
                                    <span class="fas fa-sync-alt"></span>
                                </button>
                            </span>
                        </a>
                        <input type="text" class="form-control mr-1" name="search" placeholder="Search..."
                            id="search" value="{{ Request::get('search') }}">
                        <span class="input-group-btn mr-1 mt-0">
                            <button class="btn btn-secondary text-light" type="submit" title="Search Name">
                                <span class="fas fa-search"></span>
                            </button>
                        </span>
                        {{-- <a href="{{ url('admin/news_updates') }}" class=" mt-0">
                            <span class="input-group-btn mr-1 mt-0">
                                <button class="btn btn-secondary text-light" type="submit" title="Search Name">
                                    <span class="fas fa-search"></span>
                                </button>
                            </span>
                        </a> --}}
                    </div>
                </div>
                <div class="input-group d-flex mx-auto mt-3 col-md-3">
                    <a href="{{ url('admin/news_updates') }}" class=" mt-0">
                        <span class="input-group-btn me-2">
                            <button class="btn btn-danger text-light" type="button" title="Refresh page">
                                <span class="fas fa-sync-alt"></span>
                            </button>
                        </span>
                    </a>
                    <select name="status" id="status" class="form-control">
                        <option value="">Filter by status</option>
                        <option value="1" {{ Request::get('status') == '1' ? 'selected' : '' }}>Approved</option>
                        <option value="0" {{ Request::get('status') == '0' ? 'selected' : '' }}>Pending</option>
                    </select>
                    <span class="input-group-btn mr-1 mt-0 ms-2">
                        <button class="btn btn-secondary text-light" type="submit">
                            Filter
                        </button>
                    </span>
                </div>
            </form>
        </div>


        <div class="d-flex justify-content-between mt-1">
            <!-- Button trigger modal -->

            <div class="d-flex justify-content-start mb-2 ">

                <button type="button" class="btn btn-sm" style="background-color: #343a40; color:white; font-size: 12px;"
                    data-toggle="modal" data-target="#changeModal">
                    <span class="fas fa-plus-circle"></span> Change Cover Images
                </button>

                <div class="modal fade" id="changeModal" tabindex="-1" role="dialog" aria-labelledby="changeModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-md" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <p style="font-size: 14px;"><span class="fas fa-exclamation-triangle text-warning"
                                        style="font-size: 13px;"></span> Note: Please use images with same size.</p>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <table
                                    class=" mx-auto col-md-8 elevation-3 table table-sm table-bordered table-hovered text-center">
                                    <thead class="" style="background-color: #234495; color:white;">


                                        <th scope="col" class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                            style="text-align: center">Images</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($updates_images as $updates_img)
                                            <tr>
                                                <td scope="col"
                                                    class="img d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                                    style="text-align: center"> <?php foreach (json_decode($updates_img->images) as $picture) { ?>
                                                    <img src="{{ asset('updates_images/' . $picture) }}"
                                                        style="height:60px; width:80px" />
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <form action="{{ url('/add_images/' . $updates_img->id) }}" method="POST"
                                    enctype="multipart/form-data" id="upload-form">
                                    @csrf
                                    <div class="container mx-auto">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Upload Images (Max:3)</label>
                                                    <input type="file" name="images[]" class="form-control"
                                                        id="news_cover_images" required multiple>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success" id="news_cover_imagesSubmit-btn"><span
                                        class="fas fa-save"></span> Save
                                    Changes</button>
                            </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="btn" style="background-color: #343a40; color:white;" data-toggle="modal"
                data-target="#exampleModal">
                <span class="fas fa-plus-circle"></span> Add
            </button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color: #234495; color:white;">
                            <h5 class="modal-title" id="exampleModalLabel">Adding News & Updates</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form action="{{ url('/add-updates') }}" method="POST" enctype="multipart/form-data"
                                id="add-form">
                                @csrf

                                <div class="container mx-auto">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="" style="color:dimgray">Title:</label>
                                                <input type="text" class="form-control" name="title">
                                            </div>


                                            <div class="form-group">
                                                <label for="" style="color:dimgray">Caption:</label>
                                                <textarea id="" type="text" class="form-control" title="" rows="5" required name="caption"
                                                    placeholder="Say something..."></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="" style="color:dimgray">Upload Images: <span
                                                        class="text-danger">(Max: 5)</span></label>
                                                <input type="file" class="form-control" name="images[]"
                                                    id="news_updates_images" required multiple>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success" id="news_updates_imagesSubmit-btn"><span
                                    class="fas fa-save"></span>
                                Submit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-2">

            <div class="card-header d-flex justify-content-between">
                <img src="/img/dilg-main.png" style="height: 40px; width: 40px;" alt="">
                <h1 class="" style="font-size: 18px; font-weight: 450;"><a class="dropdown-item"
                        href="{{ url('/news_update') }}"><span class="fas fa-newspaper" style="color:#234495;"></span>
                        NEWS & UPDATES</a></h1>

            </div>
            <div>
                @role('Super-Admin|Admin')
                    <table class="table table-bordered text-center">
                        <thead class="text-center" style="background-color:#343a40; color:white;">
                            <tr>
                                <th>Status</th>
                                <th scope="col" scope="col"
                                    class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell" style="text-align: center">
                                    Images</th>
                                <th scope="col">Title</th>
                                <th scope="col" class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                    style="text-align: center">Caption</th>
                                <th scope="col" class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                    style="text-align: center">Author</th>
                                <th scope="col">Edit</th>
                                <th scope="col" class="img d-none d-md-table-cell d-lg-table-cell d-xl-table-cell">Delete
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($news_images as $news_img)
                                <tr>
                                    <td>
                                        @if ($news_img->status == false)
                                            <span class=" btn btn-sm btn-warning text-light">Pending <span
                                                    class="text-justify fas fa-exclamation"></span></span>
                                        @elseif ($news_img->status == true)
                                            <span class="btn btn-sm text-light" style="background-color: #234495;">Approved
                                                <span class="text-justify fas fa-check"></span></span>
                                        @endif
                                    </td>
                                    <td scope="col" class="img d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                        style="text-align: center"> <?php foreach (json_decode($news_img->images) as $picture) { ?>
                                        <img src="{{ asset('news_updates/' . $picture) }}" style="height:40px; width:60px" />
                                        <?php } ?>
                                    </td>
                                    <td class="text-wrap">{{ $news_img->title }}</td>
                                    <td class="text-wrap d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                        style="text-align: center">{{ Illuminate\Support\Str::limit($news_img->caption, 50) }}
                                    </td>
                                    <td class="text-wrap  d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                        style="text-align: center">{{ $news_img->user->name ?? 'User Removed' }}</td>


                                    <td><a href="#" data-toggle="modal" id="news_edit_link" class="btn"
                                            data-target="#news_id{{ $news_img->id }}"><span
                                                class="text-warning fas fa-edit"></span></a></td>

                                                <div class="modal fade" id="news_id{{ $news_img->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #234495; color:white;">
                <h5 class="modal-title" id="exampleModalLabel">Edit News & Updates</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('edit_updates/' . $news_img->id) }}" method="POST"
                    enctype="multipart/form-data" id="update-form">
                    @csrf
                    @method('PUT')

                    <div class="container mx-auto">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" style="color:dimgray">Title:</label>
                                    <input type="text" class="form-control" name="title"
                                        value="{{ $news_img->title }}">
                                </div>
                                <div class="form-group">
                                    <label for="" style="color:dimgray">Caption:</label>
                                    <textarea id="" type="text" class="form-control" title="" rows="5" required
                                        name="caption" placeholder="Say something...">{{ $news_img->caption }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="" style="color:dimgray">Upload Images: <span class="text-danger">(Max:
                                            5)</span></label>
                                    <input type="file" class="form-control" name="images[]" multiple>
                                    <p class="mt-3 fw-light">Old photo(s):</p>

                                    @foreach (json_decode($news_img->images) as $index => $picture)
                                        <div class="mb-3">
                                            <img src="{{ asset('news_updates/' . $picture) }}"
                                                style="height:50px; width:70px" />
                                            <div class="mt-2">
                                                <label for="editImage{{ $index }}"
                                                    style="color:dimgray">Edit this image:</label>
                                                <!-- Modified file input field -->
                                                <input type="file" class="form-control" id="editImage{{ $index }}"
                                                    name="edit_images[{{ $index }}]" onchange="markAsModified({{ $index }})">
                                                <!-- Include a hidden field to store the existing image filename for reference -->
                                                <input type="hidden" name="old_images[]" value="{{ $picture }}">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success"><span class="fas fa-save"></span> Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>


                                                @role('Super-Admin')
                                                    <div class="text-start mb-3">
                                                        @if ($news_img->status == false)
                                                            <span>
                                                                <form action="{{ url('/approve/' . $news_img->id) }}"
                                                                    method="POST" class="d-inline-block" id="upload-form">
                                                                    @csrf
                                                                    <button type="submit" class="btn btn-sm ml-2"
                                                                        style="background-color: #234495; color:white;">Approve
                                                                        ?</button>
                                                                </form>
                                                            </span>
                                                        @elseif ($news_img->status == true)
                                                            <span>
                                                                <form action="{{ url('/disapprove/' . $news_img->id) }}"
                                                                    method="POST" class="d-inline-block" id="upload-form">
                                                                    @csrf
                                                                    <button type="submit" class="btn btn-sm ml-2 btn-danger"
                                                                        style="color:white;">Discard ?</button>
                                                            </span>
                                                            </form>
                                                        @endif
                                                    </div>
                                                @endrole

                                            </div>
                                        </div>
                                    </div>

                                    <td scope="col" class="img d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"><a
                                            href="#" data-toggle="modal" id="news_updates_delete_link" class="btn"
                                            data-target="#delete_news_updates_id{{ $news_img->id }}"><span
                                                class="text-danger fas fa-trash-alt"></span></a></td>

                                    <div class="modal fade" id="delete_news_updates_id{{ $news_img->id }}" tabindex="-1"
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

                                                    <form action="{{ url('delete_updates/' . $news_img->id) }}"
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
                @endrole

                @role('Publisher')
                    <table class="table table-bordered text-center">
                        <thead class="text-center" style="background-color:#343a40; color:white;">
                            <tr>
                                <th>Status</th>
                                <th scope="col" scope="col"
                                    class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell" style="text-align: center">
                                    Images</th>
                                <th scope="col">Title</th>
                                <th scope="col">Caption</th>
                                <th scope="col">Author</th>
                                <th scope="col">Edit</th>
                                <th scope="col" class="img d-none d-md-table-cell d-lg-table-cell d-xl-table-cell">Delete
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($news_images as $news_img)
                                <tr>

                                    <td>
                                        @if ($news_img->status == false)
                                            <span class=" btn btn-sm btn-warning text-light">Pending <span
                                                    class="text-justify fas fa-exclamation"></span></span>
                                        @elseif ($news_img->status == true)
                                            <span class="btn btn-sm text-light" style="background-color: #234495;">Approved
                                                <span class="text-justify fas fa-check"></span></span>
                                        @endif
                                    </td>

                                    <td scope="col" class="img d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                        style="text-align: center"> <?php foreach (json_decode($news_img->images) as $picture) { ?>
                                        <img src="{{ asset('news_updates/' . $picture) }}" style="height:40px; width:60px" />
                                        <?php } ?>
                                    </td>
                                    <td class="text-wrap">{{ $news_img->title }}</td>
                                    <td class="text-wrap d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                        style="text-align: center">{{ Illuminate\Support\Str::limit($news_img->caption, 50) }}
                                    </td>
                                    <td class="text-wrap">{{ $news_img->user->name ?? 'User Removed' }}</td>
                                    @if ($news_img->user_id == auth()->user()->id)
                                        <td><a href="#" data-toggle="modal" id="news_edit_link" class="btn"
                                                data-target="#news_id{{ $news_img->id }}"><span
                                                    class="text-warning fas fa-edit"></span></a></td>

                                        <div class="modal fade" id="news_id{{ $news_img->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header" style="background-color: #234495; color:white;">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit News</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">

                                                        <form action="{{ url('edit_updates/' . $news_img->id) }}"
                                                            method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')

                                                            <div class="container mx-auto">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for=""
                                                                                style="color:dimgray">Title:</label>
                                                                            <input type="text" class="form-control"
                                                                                name="title"
                                                                                value="{{ $news_img->title }}">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for=""
                                                                                style="color:dimgray">Caption:</label>
                                                                            <textarea id="" type="text" class="form-control" title="" rows="5" required name="caption"
                                                                                placeholder="Say something...">{{ $news_img->caption }}</textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-8">
                                                                        <div class="form-group">
                                                                            <label for="" style="color:dimgray">Upload
                                                                                Images: <span class="text-danger">(Max:
                                                                                    5)</span></label>
                                                                            <input type="file" class="form-control"
                                                                                name="images[]" multiple>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-success"><span
                                                                class="fas fa-save"></span> Savechanges</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <td scope="col" class="img d-none d-md-table-cell d-lg-table-cell d-xl-table-cell">
                                            <a href="#" data-toggle="modal" id="news_updates_delete_link"
                                                class="btn" data-target="#delete_news_updates_id{{ $news_img->id }}"><span
                                                    class="text-danger fas fa-trash-alt"></span></a>
                                        </td>

                                        <div class="modal fade" id="delete_news_updates_id{{ $news_img->id }}"
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

                                                        <form action="{{ url('delete_updates/' . $news_img->id) }}"
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
            Showing {{ $news_images->firstItem() }} to {{ $news_images->lastItem() }} of {{ $news_images->total() }} entries
        </div>

        <div class="d-flex justify-content-end mt-2">
            {{ $news_images->onEachSide(-1)->links() }}
        </div>

        <!-- Loading GIF image -->
        <div id="loading"
            style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 9999; display: none;">
            <img src="{{ asset('loading_img/load.gif') }}" style="height: 150px; width: 150px;" alt="Loading...">
        </div>
        <script>
    // Function to fade out alert messages after a delay
    setTimeout(function() {
        $('.alert-dismissible').fadeOut('slow');
    }, 1000);

    // Function to mark file input fields as modified
    function markAsModified(index) {
        document.getElementById('editImage' + index).setAttribute('data-modified', 'true');
    }

    // Function to check which images are modified before form submission
    function checkModifiedImages() {
        var modifiedImages = [];
        var editImageInputs = document.querySelectorAll('[id^="editImage"]');
        editImageInputs.forEach(function(input) {
            if (input.getAttribute('data-modified') === 'true') {
                modifiedImages.push(input);
            }
        });
        return modifiedImages;
    }

    // Add an event listener to file input fields to mark them as modified when changed
    document.addEventListener('DOMContentLoaded', function() {
        var editImageInputs = document.querySelectorAll('[id^="editImage"]');
        editImageInputs.forEach(function(input, index) {
            input.addEventListener('change', function() {
                markAsModified(index);
            });
        });
    });

    // Get the file input and submit button elements for news cover images
    const newsCoverImagesInput = document.querySelector('#news_cover_images');
    const newsCoverImagesSubmitButton = document.querySelector('#news_cover_imagesSubmit-btn');

    // Disable the news cover images submit button on page load
    newsCoverImagesSubmitButton.disabled = true;

    // Listen for changes to the news cover images file input
    newsCoverImagesInput.addEventListener('change', function() {
        // Check if the news cover images file input has an error
        if (this.files.length > 0 && !this.files[0].name.match(/\.(jpeg|png|jpg|gif|svg)$/i)) {
            // If the file extension is incorrect, disable the news cover images submit button
            newsCoverImagesSubmitButton.disabled = true;
            // Show an error message
            alert('Please select JPEG, PNG, JPG, GIF or SVG file');
        } else {
            // If the file extension is correct, enable the news cover images submit button
            newsCoverImagesSubmitButton.disabled = false;
        }
    });

    // Get the file input and submit button elements for news updates images
    const newsUpdatesImagesInput = document.querySelector('#news_updates_images');
    const newsUpdatesImagesSubmitButton = document.querySelector('#news_updates_imagesSubmit-btn');

    // Disable the news updates images submit button on page load
    newsUpdatesImagesSubmitButton.disabled = true;

    // Listen for changes to the news updates images file input
    newsUpdatesImagesInput.addEventListener('change', function() {
        // Check if the news updates images file input has an error
        if (this.files.length > 0 && !this.files[0].name.match(/\.(jpeg|png|jpg|gif|svg)$/i)) {
            // If the file extension is incorrect, disable the news updates images submit button
            newsUpdatesImagesSubmitButton.disabled = true;
            // Show an error message
            alert('Please select JPEG, PNG, JPG, GIF or SVG file');
        } else {
            // If the file extension is correct, enable the news updates images submit button
            newsUpdatesImagesSubmitButton.disabled = false;
        }
    });

    // Function to handle form submission loading state
    function handleFormSubmission(formId, loadingId) {
        const form = document.getElementById(formId);
        const loading = document.getElementById(loadingId);

        form.addEventListener('submit', () => {
            loading.style.display = 'block';
        });

        form.addEventListener('load', () => {
            loading.style.display = 'none';
        });

        form.addEventListener('error', () => {
            loading.style.display = 'none';
        });
    }

    // Handle form submission loading state for different forms
    handleFormSubmission('upload-form', 'loading');
    handleFormSubmission('add-form', 'add-loading');
    handleFormSubmission('update-form', 'update-loading');
    handleFormSubmission('delete-form', 'delete-loading');
</script>


    @endsection 