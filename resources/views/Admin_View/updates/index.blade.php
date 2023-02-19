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
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #C9282D; color:white;">
                        <h5 class="modal-title" id="exampleModalLabel">Adding News & Updates</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form action="{{ url('/add-updates') }}" method="POST" enctype="multipart/form-data">
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
                                            <label for="" style="color:dimgray">Upload Images (Max:3)</label>
                                            <input type="file" class="form-control" name="images[]" required multiple>
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

        <div class="card-header d-flex justify-content-between">
            <img src="/img/dilg-main.png" style="height: 40px; width: 40px;" alt="">
            <h1 class="" style="font-size: 21px; font-weight: 450;"><span class="fas fa-newspaper"
                    style="color:#C9282D;"></span> NEWS & UPDATES</h1>

        </div>
        <div>

            <table class="table table-bordered text-center">
                <thead class="text-center" style="background-color:#343a40; color:white;">
                    <tr>
                        <th scope="col" scope="col" class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                            style="text-align: center">Images</th>
                        <th scope="col">Title</th>
                        <th scope="col">Caption</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($news_images as $news_img)
                        <tr>
                            <td scope="col" class="img d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                style="text-align: center"> <?php foreach (json_decode($news_img->images) as $picture) { ?>
                                <img src="{{ asset('news_updates/' . $picture) }}" style="height:40px; width:60px" />
                                <?php } ?>
                            </td>


                            <td class="text-wrap">{{ $news_img->title }}</td>
                            <td class="text-wrap">{{ $news_img->caption }}</td>


                            <td><a href="#" data-toggle="modal" id="news_edit_link" class="btn"
                                    data-target="#news_id{{ $news_img->id }}"><span
                                        class="text-warning fas fa-edit"></span></a></td>

                            {{-- <div class="modal fade" id="job_id{{ $ad_jobs->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #C9282D; color:white;">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Vacant Position</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <form action="{{ url('update_jobs/' . $ad_jobs->id) }}" method="POST"
                                                enctype="multipart/form-data">
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
                                                                <label for="" style="color:dimgray">Image:</label>
                                                                <input type="file" class="form-control"
                                                                    name="hiring_img" value="{{ $ad_jobs->hiring_img }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="" style="color:dimgray">Document
                                                                    Link:</label>
                                                                <input type="text" class="form-control" name="link"
                                                                    value="{{ $ad_jobs->link }}" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for=""
                                                                    style="color:dimgray">Description:</label>
                                                                <textarea style="white-space: pre-wrap;" id="" type="text" class="form-control" rows="5"
                                                                    name="details" required>
                                                        {{ $ad_jobs->details }}
                                                    </textarea>
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
                            </div> --}}

                            <td><a href="#" data-toggle="modal" id="news_updates_delete_link" class="btn"
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

                                            <form action="{{ url('delete_updates/' . $news_img->id) }}" method="GET"
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
    </div>
@endsection
