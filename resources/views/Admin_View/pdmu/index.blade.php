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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
    </div>
  <a href="{{route('admin/organization')}}" style="text-decoration:none; font-size: 16px;" class="text-dark"><span class="text-danger fas fa-arrow-left" style="font-size: 15px;"></span> Back to Organizational Profile</a>
    <div class="card mt-2">
        <div class="card-header d-flex justify-content-between">
            <img src="/img/dilg-main.png" style="height: 40px; width: 40px;" alt="">
            <h1 class="" style="font-size: 21px; font-weight: 450;"><span class="fas fa-users" style="color:#C9282D;"></span> PDMU PROFILE</h1>
        </div>

        <table class="table text-center table-bordered elevation-4">
            <thead style="background-color:#343a40; color:white;">
                <tr>
                    <th>Profile Image</th>
                    <th>Name</th>
                    <th>Position</th>
                </tr>
                
            </thead>
            <tbody class="bg-secondary text-white">
                <tr>
                    <td>test</td>
                    <td>test</td>
                    <td>test</td>
                </tr>
                <tr>
                    <td>test</td>
                    <td>test</td>
                    <td>test</td>
                </tr>
                <tr>
                    <td>test</td>
                    <td>test</td>
                    <td>test</td>
                </tr>
            </tbody>
        </table>
    </div>


@endsection