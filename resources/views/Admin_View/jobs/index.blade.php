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
            <span class="fas fa-plus-circle"></span> Add Jobs
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #C9282D; color:white;">
                        <h5 class="modal-title" id="exampleModalLabel">Adding Job Vacancy</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form action="{{ url('/add-new-job') }}" method="POST" enctype="multipart/form-data">
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
                                            <label for="" style="color:dimgray">Image:</label>
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
                        <button type="submit" class="btn btn-success"><span class="fas fa-save"></span> Save
                            changes</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-2">

        <div class="card-header d-flex justify-content-between">
            <img src="/img/dilg-main.png" style="height: 40px; width: 40px;" alt="">
            <h1 class="" style="font-size: 21px; font-weight: 450;">JOB VACANCIES</h1>

        </div>

        <div>


            <table class="table table-striped">
                <thead class="text-center" style="background-color:#343a40; color:white;">
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Position</th>
                        <th scope="col">Description</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($admin_jobs as $ad_jobs)
                        <tr>
                            <td> <img src="{{ asset('storage/hiring_images/' . $ad_jobs->hiring_img) }} " alt="Image"
                                    style="border-radius: 5px; height: 70px; width: 80px;"></td>
                            <td>{{ $ad_jobs->position }}</td>
                            <td>{{ $ad_jobs->details }}</td>
                            <td>Edit</td>
                            <td><a href="{{ url('delete_jobs/' . $ad_jobs->id) }}" class="btn btn-xs "><i
                                        class="text-danger fas fa-trash-alt"></i></a></td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
