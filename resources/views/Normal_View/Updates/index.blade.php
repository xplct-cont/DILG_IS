@extends('layouts.app')

@section('content')
    <div class="text-center">
        <img src='img/Bohol-Banner-2.jpg' width="1370" style="max-width: 100%; height:auto;">
    </div>
    <div class="header ml-3 mr-3 mt-2" style=" padding: 7px;background: #234495; color: #FFFFFF; margin-bottom: 5px;">
        <h1 class="text-center" style="font-size: 18px; margin-top: 10px;">NEWS & UPDATES</h1>
    </div>
    <livewire:normal.updates.index>

@endsection
