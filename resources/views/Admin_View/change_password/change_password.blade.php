@extends('Admin_View.layouts.app')

@section('content')
    @if ($message = Session::get('status'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert" style="color:black;">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <div class="container" style="position:relative; top:70px;">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-dark text-center">CHANGE PASSWORD</div>

                    <div class="card-body">
                        <form method="POST" action="{{ url('/admin/change-password') }}">
                            @csrf

                            @foreach ($errors->all() as $error)
                                <p class="text-danger">{{ $error }}</p>
                            @endforeach

                            <div class="form-group  d-flex justify-content-center">
                                <label for="password"><span class="input-group-text text-light bg-info"
                                        style="width:42px;"><span class="fas fa-lock"
                                            style="font-size: 20px; height: 25px;"></span></span></label>

                                <div class="col-md-7">
                                    <input id="password" type="password" class="form-control" name="current_password"
                                        autocomplete="current-password" placeholder="Current Password">
                                </div>
                            </div>

                            <div class="form-group  d-flex justify-content-center">
                                <label for="password"><span class="input-group-text text-light bg-success"
                                        style="width:42px;"><span class="fas fa-key"
                                            style="font-size: 20px; height: 25px;"></span></span></label>

                                <div class="col-md-7">
                                    <input id="new_password" type="password" class="form-control" name="new_password"
                                        autocomplete="current-password" placeholder="New Password">
                                </div>
                            </div>

                            <div class="form-group  d-flex justify-content-center">
                                <label for="password"><span class="input-group-text text-light bg-success"
                                        style="width:42px;"><span class="fas fa-key"
                                            style="font-size: 20px; height: 25px;"></span></span></label>

                                <div class="col-md-7">
                                    <input id="new_confirm_password" type="password" class="form-control"
                                        name="new_confirm_password" autocomplete="current-password"
                                        placeholder="Confirm New Password">
                                </div>
                            </div>

                            <div class="form-group  mb-0">
                                <div class="col-md-8 offset-md-7">
                                    <button type="submit" class="btn btn-sm btn-success"><span class="fas fa-save"></span>
                                        Update Password</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
