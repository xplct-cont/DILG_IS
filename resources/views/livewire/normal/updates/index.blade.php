<div>
    <div class="container d-flex justify-content-center">
       
        <div class="container">
            <div class="row ">
                <div class="col-md-4 mx-auto">

                    <p class="mt-2 m-2">From:</p>
                    <input style="border-radius: 20px;" type="date" name="" id="" wire:model="fromDate"
                        class="form-control ">
                    <p class="mt-2 m-2">To:</p>
                    <input style="border-radius: 20px;" type="date" name="" id="" wire:model="toDate"
                        class="form-control ">

                </div>
                <div class="col-md-4 mx-auto">
                    <div class="" style="margin-top: 40px;">
                        <input type="search" style="border-radius: 20px;" wire:model.delay.400ms="search"
                            class="form-control input" placeholder="Search">
                            <div wire:loading>
                                Searching...
                            </div>
                    </div>

                </div>
            </div>
        </div>

    </div>


    <div class="mx-auto mt-3 col-md-11">
        <div class="">
            @csrf
            @foreach ($updates as $new)
                <div class="card mx-auto">
                    <div class=" card-body elevation-4">
                        <a href="#" data-toggle="modal" id="news_updates_view_link"
                            data-target="#news_update_id{{ $new->id }}"
                            style="text-decoration:none; color:dimgray">

                            <div class="row d-flex justify-content-center mt-1">
                                <div class="col-md-6 mx-auto mt-2 ">

                                    <h1 style="font-size: 18px; font-weight: 500; color:dimgray;">
                                        Post: {{ \Carbon\Carbon::parse($new->created_at)->format('M j, Y h:i A') }}</h1>
                                    <br>
                                    <p class="text-left" style="font-size: 18px;">{{ $new->title }}</p>
                                    <p class="text-left" style="font-size: 15px; font-weight: 400;">
                                        {{ Illuminate\Support\Str::limit($new->caption, 300) }}</p>
                                </div>
                                <div class="col-md-6 text-center mx-auto">
                                    <div class="">

                                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                                    class="active">
                                                </li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>

                                            </ol>
                                            <div class="carousel-inner text-center mx-auto"
                                                style="height:auto; width: auto;">
                                                @php
                                                    $images = json_decode($new->images, true);
                                                @endphp
                                                @foreach ($images as $key => $image)
                                                    <div class="carousel-item zoom {{ $key == 0 ? 'active' : '' }}">
                                                        <img src="{{ asset('/news_updates/' . $image) }}"
                                                            style="height:auto; max-height:250px; width: auto; max-width: 100%; padding: 3px;
                                                            box-shadow: 2px 2px 5px #888;" />
                                                    </div>
                                                @endforeach

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                </a>

                <div class="modal fade" id="news_update_id{{ $new->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header ">

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body" style="color:dimgray;">

                                <div class="">
                                    <h1 class="text-end" style="font-size: 18px; font-weight: 500; color:dimgray;">
                                        Post: {{ \Carbon\Carbon::parse($new->created_at)->format('M j, Y h:i A') }}</h1>
                                    <br>
                                    <p class="text-left" style="font-size: 18px;">{{ $new->title }}</p>
                                    <p class="text-left" style="font-size: 15px; font-weight: 400;">
                                        {{ $new->caption }}</p>

                                    {{-- <div class="" style="height: 365px;">

                                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                                    class="active"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>

                                            </ol>
                                            <div class=" carousel-inner text-center" style="height:350px;">
                                                @php
                                                    $images = json_decode($new->images, true);
                                                @endphp
                                                @foreach ($images as $key => $image)
                                                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                                        <img src="{{ asset('/news_updates/' . $image) }}"
                                                            style="height:350px; width:100%;" />
                                                    </div>
                                                @endforeach

                                            </div>

                                        </div>
                                    </div> --}}

                                    <div class="image-container">
                                        @php
                                            $images = json_decode($new->images, true);
                                        @endphp
                                        @foreach ($images as $image)
                                            <img src="{{ asset('/news_updates/' . $image) }}" alt="" />
                                        @endforeach
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="d-flex justify-content-center mt-2">
            {{ $updates->onEachSide(-1)->links() }}
        </div>
    </div>
</div>
</div>
</div>


<style scoped>
    .image-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
    }

    .image-container img {
        width: auto;
        height: auto;
        max-width: 100%;
        max-height: 100%;
        margin: 10px;
        padding: 5px;
        box-shadow: 2px 2px 5px #888;
    }
</style>
