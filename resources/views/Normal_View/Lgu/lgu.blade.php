@extends('layouts.app')

@section('content')
    <div class="text-center mt-3 mb-4">
        <img src="/img/bohol_seal.png" class="elevation-4" style="border-radius: 50%; height: 200px; width: 200px;"
            alt="">
    </div>

    <livewire:normal.l-g-u.index>
@endsection


<style scoped>
    /* .card {
        --bg-color: #DCE9FF;
        --bg-color-light: #f1f7ff;
        --text-color-hover: whitesmoke;
        --box-shadow-color: silver;
    }

    .card:hover {
        transform: translateY(-5px) scale(1.005) translateZ(0);
        box-shadow: 0 24px 36px silver,
            0 24px 46px var(--box-shadow-color);
    }

    .card:hover .overlay {
        transform: scale(8) translateZ(0);
    } */
</style>
