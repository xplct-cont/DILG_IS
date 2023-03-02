<div class="container col-md-12">
    <div class="">
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
                    <input type="search" style="border-radius: 20px;" wire:model="search" class="form-control input"
                        placeholder="Search">
                </div>

            </div>
        </div>

    </div>

    <div class="mx-auto mt-3 col-md-11">
        <div class="">
            @foreach ($news as $new)
                <a href="#" style="text-decoration: none; color:#030303;">
                    <div class="card elevation-4">
                        <div class="row d-flex justify-content-center mt-3 ml-3 mr-3  ">
                            <div class="col-md-6 mx-auto mt-5 ">

                                <h1 style="font-size: 18px; font-weight: 500;">
                                    Post: {{ \Carbon\Carbon::parse($new->datetime)->format('M j, Y h:i A') }}</h1><br>
                                <p class="text-left" style="font-size: 18px;">{{ $new->title }}</p>
                                <p class="text-left" style="font-size: 15px; font-weight: 400;">
                                    {{ Illuminate\Support\Str::limit($new->caption, 500) }}</p>
                            </div>
                            <div class="col-md-5">
                                <div class="col-md-12" style="height: 400px;">

                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                                class="active"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>

                                        </ol>
                                        <div class="carousel-inner" style="height:350px;">
                                            @php
                                                $images = json_decode($new->image, true);
                                            @endphp
                                            @foreach ($images as $key => $image)
                                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                                    <img src="{{ asset('/' . $image) }}"
                                                        style="height:350px; width:auto;" />
                                                </div>
                                            @endforeach

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="justify-content-between">
            {{ $news->onEachSide(1)->links() }}
        </div>
    </div>
</div>
