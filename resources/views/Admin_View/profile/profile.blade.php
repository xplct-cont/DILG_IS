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
                            <p class="text-center text-dark mt-2 mb-1" style="font-weight: 500;">{{ Auth::user()->name }}
                            </p>
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









                            <!-- Button trigger modal -->
                            @if (auth()->check() && auth()->user()->position == 'Provincial Director')

                            <button type="button" class="btn btn-primary mb-3" data-toggle="modal"
                                data-target="#exampleModalCenter" style="font-size: 12px;">
                                Change Message ?
                            </button>

                           

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle" style="font-size: 13px;">Provincial Director's Message</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <form action="{{ url('/change_message/' .Auth::user()->id) }}" method="POST">
                                             
                                                @csrf
                                                @method('PUT')


                                                

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="" style="color:dimgray">Message:</label>
                                                        @foreach ($pd_messages as $msg)
                                                        <textarea id="" type="text" class="form-control" placeholder="" title="" rows="8" required
                                                            name="message" placeholder="Write your message..." required>{{$msg->message}}</textarea>
                                                    </div>
                                                </div>
                                                    
                                                @endforeach
                                           

                                          

                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success"><span class="fas fa-save"></span> Save changes</button>
                                        </div>
                                    
                                    </div>
                                </div>
                            </form>
                            </div>
                            @endif













                        </div>
                    </div>
                </div>
        </div>
    @endsection
