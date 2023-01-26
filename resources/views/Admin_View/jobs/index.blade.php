@extends('Admin_View.layouts.app')

@section('content')

<div class="d-flex justify-content-end mt-5">
    <!-- Button trigger modal -->
<button type="button" class="btn" style="background-color: #C9282D; color:white;" data-toggle="modal" data-target="#exampleModal">
   <span class="fas fa-plus-circle"></span> Add Jobs
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
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
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="card mt-2">
    <div class="col-md-12">
        @if (session()->has('message'))
            <h5 class="alert alert-sucess text-success">{{ session('message') }}</h5>
        @endif
    </div>
    <div class="card-header d-flex justify-content-between" style="background-color:#343a40; color:white;">
        <img src="/img/dilg-main.png" style="height: 40px; width: 40px;" alt="">
        <h1 class="" style="font-size: 21px; font-weight: 450;">JOB VACANCIES</h1>
      
    </div>
    
<div>
    <table class="table table-striped">
        <thead class="text-center">
          <tr>
            <th scope="col">Image</th>
            <th scope="col">Position</th>
            <th scope="col">Details</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
            <tbody class="text-center">
                <tr>
                    <td>shit</td>
                    <td>shit</td>
                    <td>shit</td>
                    <td>shit</td>
                    <td>shit</td>
                </tr>
            </tbody>
       
      </table>
</div>
</div>




@endsection