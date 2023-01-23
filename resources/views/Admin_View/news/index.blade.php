@extends('Admin_View.layouts.app')
@section('content')
@include('Admin_View.news.create')
    <div class="card mt-5">
        <div class="card-header d-flex">
            <h1>News</h1>
            <button type="button" class="btn btn-primary col-md-2 ms-auto" data-bs-toggle="modal" data-bs-target="#NewsModal">
            Add News</button>
        </div>
    <div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Caption</th>
                <th scope="col">Image</th>
                <th scope="col">Date</th>
              </tr>
            </thead>
            <tbody>
              <tr></tr>
              <tr></tr>
              <tr></tr>
            </tbody>
          </table>
    </div>
</div>
@endsection

@section('third_party_scripts')
<script>
    window.addEventListener('close-modal', event => {
        $('#NewsModal').modal('hide');
        $('#updateNewsModal').modal('hide');
        $('#deleteNewsModal').modal('hide');
    });
    </script>
@endsection
{{-- @section('third_party_scripts')
   <script>
        const myModal = document.getElementById('myModal')
        const myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', () => {
        myInput.focus()
        })
   </script>
@endsection --}}
