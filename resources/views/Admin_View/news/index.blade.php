@extends('Admin_View.layouts.app')

@section('content')
    <livewire:admin.news.index>
<<<<<<< HEAD
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
=======
    @endsection
>>>>>>> c606b53dd5db9a7f784255c38bc19aa2dfb8cad7

    @section('third_party_scripts')
        <script>
            window.addEventListener('close-modal', event => {
                $('#NewsModal').modal('hide');
                $('#updateNewsModal').modal('hide');
                $('#deleteNewsModal').modal('hide');
            });
        </script>
    @endsection
