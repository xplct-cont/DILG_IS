@extends('layouts.app')

@section('content')
    <div class="text-center mt-3 mb-3">
        <img src="/img/bohol_seal.png" class="elevation-4" style="border-radius: 50%; height: 200px; width: 200px;"
            alt="">
    </div>
    <div class="container col-md-12">
        <div class="col-md-12">
            <div class="row d-flex justify-content-center mb-3">
                @foreach ($lgus as $lgu)
                    <div class="col-md-3 card m-2 p-3 text-justify ">
                        <p class="text-center mb-3" style="font-weight: 600; font-size: 28px; color:#C9282D;">
                            {{ $lgu->municipality->municipality }}</p>
                        <p class="mt-2" style="color:dimgray; margin-top: -10px; font-size: 16px;"><span
                                style="font-weight: 700; color:dimgray ">Mayor: </span> {{ $lgu->mayor }}</p>
                        <p style="color:dimgray; margin-top: -10px; font-size: 16px;"><span
                                style="font-weight: 700; color:dimgray">Vice Mayor: </span> {{ $lgu->vice_mayor }}</p>
                        <p class="mt-2" style="color:dimgray; margin-top: -10px; font-size: 16px;"><span
                                style="font-weight: 700; color:dimgray">SB Member: </span> {{ $lgu->sb_member1 }}</p>
                        <p style="color:dimgray; margin-top: -10px; font-size: 16px;"><span
                                style="font-weight: 700; color:dimgray">SB Member: </span> {{ $lgu->sb_member2 }}</p>
                        <p style="color:dimgray; margin-top: -10px; font-size: 16px;"><span
                                style="font-weight: 700; color:dimgray">SB Member: </span> {{ $lgu->sb_member3 }}</p>
                        <p style="color:dimgray; margin-top: -10px; font-size: 16px;"><span
                                style="font-weight: 700; color:dimgray">SB Member: </span> {{ $lgu->sb_member4 }}</p>
                        <p style="color:dimgray; margin-top: -10px; font-size: 16px;"><span
                                style="font-weight: 700; color:dimgray">SB Member: </span> {{ $lgu->sb_member5 }}</p>
                        <p style="color:dimgray; margin-top: -10px; font-size: 16px;"><span
                                style="font-weight: 700; color:dimgray">SB Member: </span> {{ $lgu->sb_member6 }}</p>
                        <p style="color:dimgray; margin-top: -10px; font-size: 16px;"><span
                                style="font-weight: 700; color:dimgray">SB Member: </span> {{ $lgu->sb_member7 }}</p>
                        <p style="color:dimgray; margin-top: -10px; font-size: 16px;"><span
                                style="font-weight: 700; color:dimgray">SB Member: </span> {{ $lgu->sb_member8 }}</p>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection


<style scoped>
    .card {
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
    }
</style>
