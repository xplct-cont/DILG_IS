@extends('Admin_View.layouts.app')

@section('content')
    @if ($message = Session::get('message'))
        <div class="alert alert-success alert-block mt-2">
            <button type="button" class="close" data-dismiss="alert" style="color:black;">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <h1 class="text-center mt-2" style="font-size: 30px; color:dimgray; font-weight: 450;">{{ Auth::user()->position }}
        Profile</h1>
    <hr>
    <div class="container">
        <div class="col-md-12">
            <form action="{{ url('/update-profile/' . Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="mx-auto">
                            <div class="d-flex justify-content-center mt-5">
                                <img src={{ '/user_profile_images/' . Auth::user()->profile_image }}
                                    class="img-circle elevation-4" alt="User Image"
                                    style="height: 300px; width: 300px; border-radius: 50%; padding-top:10px; padding-bottom: 10px; padding-left: 10px; padding-right: 10px;">
                            </div>
                            <p class="text-center mt-2 mb-1" style="font-weight: 500;">{{ Auth::user()->name }}</p>
                        </div>
                        <div class="form-group mb-3 col-md-6 mx-auto">
                            <label for="" style="color:dimgray;"></label>
                            <input type="file" name="profile_image" class="form-control">
                        </div>

                    </div>
                    <div class="col-md-6 mt-3">

                        <div class="modal-body">

                            <div class="mb-5">
                                <a href="{{ url('admin/change-password/' . Auth::user()->id) }}" type="btn"
                                    class="btn btn-sm btn-danger "><span class="fas fa-key"></span>
                                    Change Password</a>
                            </div>

                            <div class="input-group mb-3">
                                <label for="" style="color:dimgray;"><span
                                        class="fas fa-user input-group-text bg-secondary"
                                        style="width: 43px;"></span></label>
                                <input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control"
                                    required>
                            </div>
                            <div class="input-group mb-3">
                                <label for="" style="color:dimgray;"><span class="input-group-text bg-secondary"
                                        style="width: 43px;">Ps</span></label>
                                <input type="text" name="position" value="{{ Auth::user()->position }}"
                                    class="form-control" required>
                            </div>
                            <div class="input-group mb-3">
                                <label for="" style="color:dimgray;"><span
                                        class="fas fa-envelope input-group-text bg-secondary"
                                        style="width: 43px;"></span></label>
                                <input type="text" name="email" value="{{ Auth::user()->email }}" class="form-control"
                                    required>
                            </div>
                            <div class="d-flex justify-content-end mb-3">
                                <button class="btn btn-sm btn-success" type="submit"><span class="fas fa-save"></span> Save
                                    Changes</button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    @endsection
