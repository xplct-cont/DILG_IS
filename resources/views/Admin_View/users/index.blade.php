@extends('Admin_View.layouts.app')

@section('content')
    @if ($message = Session::get('message'))
        <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
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
    </div>

    <div class="elevation-1 p-3 rounded mt-2">
        <div class="card-header d-flex justify-content-between mb-1">
            <img src="/img/dilg-main.png" style="height: 40px; width: 40px;" alt="">
            <h1 class="" style="font-size: 18px; font-weight: 450;"><span class="fas fa-user-cog"
                    style="color:#234495;"></span> Users </h1>
        </div>


        <table class="table text-center table-striped elevation-4">
            <thead style="background-color:#343a40; color:white;">
                <tr>
                    <th>Profile Image</th>
                    <th>Name</th>
                    <th scope="col" class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                        style="text-align: center">Email</th>
                    <th scope="col" class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                        style="text-align: center">Position</th>
                    <th>Role</th>
                    <th>Edit</th>
                    <th scope="col" class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                        style="text-align: center">Delete</th>
                </tr>

            </thead>
            <tbody class=" text-dark">
                @foreach ($users as $user)

                    <tr>
                        <td><img src="{{ asset('user_profile_images/' . $user->profile_image) }}"
                                style="border-radius: 50%; height: 50px; width: 50px;"></td>
                        <td>{{ $user->name }}</td>
                        <td scope="col" class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                            style="text-align: center">{{ $user->email }}</td>
                        <td scope="col" class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                            style="text-align: center">{{ $user->position }}</td>
                        <td>
                            @foreach ($user->roles as $user_role)
                                {{ $user_role->name }}
                            @endforeach
                        </td>
                        <td><a href="#" data-toggle="modal" id="user_edit_link" class="btn"
                                data-target="#user_id{{ $user->id }}"><span class="text-warning fas fa-edit"></span></a>
                        </td>

                        <div class="modal fade" id="user_id{{ $user->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-md" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: #234495; color:white;">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ url('update-user/' . $user->id) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                            <div class="container mx-auto">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="" style="color:dimgray">
                                                                Name:</label>
                                                            <input type="text" class="form-control" name="name"
                                                                value="{{ $user->name }}" required>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="" style="color:dimgray">Position</label>
                                                            <input type="text" class="form-control" name="position"
                                                                value="{{ $user->position }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="" style="color:dimgray">Email</label>
                                                            <input type="text" class="form-control" name="email"
                                                                value="{{ $user->email }}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" style="color:dimgray">Password:</label>
                                                            <input type="password" class="form-control" name="password">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="role" style="color:dimgray">User Role</label>
                                                            <select name="role" id="role" class="form-select">
                                                                @foreach ($user->roles as $user_role)
                                                                    <option value="{{ $user_role->id }}"selected>
                                                                        {{ $user_role->name }}</option>
                                                                @endforeach
                                                                @foreach ($roles as $role)
                                                                    <option value="{{ $role->id }}">
                                                                        {{ $role->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
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

                        <td class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell" style="text-align: center">
                            <a href="#" data-toggle="modal" id="user_delete_link" class="btn"
                                data-target="#delete_user_id{{ $user->id }}"><span
                                    class="text-danger fas fa-trash-alt"></span></a>
                        </td>

                        <div class="modal fade" id="delete_user_id{{ $user->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                                        <form action="{{ url('delete_user/' . $user->id) }}" method="GET"
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
                    {{-- @endif --}}
                @endforeach

            </tbody>
        </table>
    </div>


            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #234495; color:white;">
                        <h5 class="modal-title" id="exampleModalLabel">Adding New User </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="container mx-auto">
                               <div class="row">

                               </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success"><span class="fas fa-save"></span> Submit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div> --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #234495; color:white;">
                    <h5 class="modal-title" id="exampleModalLabel">Adding New User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/add-user') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="container mx-auto">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="" style="color:dimgray">Name:</label>
                                        <input type="text" class="form-control" name="name" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="" style="color:dimgray">Position</label>
                                        <input type="text" class="form-control" name="position" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="" style="color:dimgray">Email:</label>
                                        <input type="email" class="form-control" name="email" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="" style="color:dimgray">Password:</label>
                                        <input type="password" class="form-control" name="password" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">

                                        <label for="role" style="color:dimgray">User Role</label>
                                        <select name="role" id="role" class="form-select">
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->name }}">{{ $role->name }}</option>
                                            @endforeach
                                        </select>


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

    <script>
        setTimeout(function() {
            $(' .alert-dismissible').fadeOut('slow');
        }, 1000);
    </script>
@endsection
