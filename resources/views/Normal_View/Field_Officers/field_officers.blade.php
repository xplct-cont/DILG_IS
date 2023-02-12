@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-center mb-3">
            <img src="/img/dilg-main.png" style="height: 150px; width: 150px;" alt="">
        </div>
        <h1 class="text-center " style="font-size: 30px; margin-bottom: 50px;">FIELD OFFICERS</h1>
    </div>
    <div class="">
        <div class="col-md-12 mb-3 mt-3">
            <div class="d-flex row">
                <div class="col-md-12">

                    <div class="row">
                        @foreach ($field_officers as $field_off)
                            <div class="col-md-2 text-center d-flex justify-content-center">
                                <div class="zoom">
                                    <img src="{{ asset('field_off_images/' . $field_off->profile_img) }} " alt="Image"
                                        class="shadow-lg border border-dark"
                                        style="border-radius: 50%; height: 140px; width: 140px;">
                                    <p class="text-center" style=" font-weight:500;">{{ $field_off->fname }}
                                        {{ $field_off->mid_initial }} {{ $field_off->lname }}</p>
                                    <p class="text-center" style="margin-top: -20px;">
                                        {{ $field_off->position }}</p>
                                    <p class="text-center" style="margin-top: -20px;">
                                        {{ $field_off->cluster }}</p>
                                    <p class="text-center" style="margin-top: -20px; font-weight: 500;">
                                        {{ $field_off->municipality->municipality }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
<style scoped>
    .zoom {
        transition: transform .2s;
    }

    .zoom:hover {
        -ms-transform: scale(1.2);
        /* IE 9 */
        -webkit-transform: scale(1.2);
        /* Safari 3-8 */
        transform: scale(1.2);
        text-align: center;
        font-size: 10px;
    }
</style>
