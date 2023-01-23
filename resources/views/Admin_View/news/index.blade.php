@extends('Admin_View.layouts.app')

@section('content')
    {{-- <livewire:admin.news.index> --}}
    <h1>Hii</h1>
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

