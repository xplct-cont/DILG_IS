<div class="">
    <div class="col-md-12 mt-5">
        <div class="row">
            <div class="container col-md-4">

              <div class="mx-auto">
                <p class="col-md-4">From:</p>
                <input style="border-radius: 20px;" type="date" name="" id="" wire:model="fromDate"
                    class="form-control ms-2">
                <p class="col-md-4 mt-2 m-2">To:</p>
                <input style="border-radius: 20px;" type="date" name="" id="" wire:model="toDate"
                    class="form-control ms-2">
              </div>
              
            </div>
            <div class="col-md-4 m-2 d-flex">
                <input style="width: 300px;" type="search" style="border-radius: 20px;" wire:model="search" class="form-control input"
                    placeholder="Search">
            </div>
           
        </div>
        
      
        <!-- Button trigger modal -->
        <div class="col-md-2">

        </div>

    </div>


    <div class="mx-auto mt-3 col-md-11">
        <div class="">
            @foreach ($news as $new)
                <a href="#" style="text-decoration: none; color:#030303;">
                    <div class="card elevation-4">
                        <div class="row d-flex justify-content-center mt-3 ml-3 mr-3  ">
                            <div class="col-md-6 mx-auto mt-5 ">

                                <h1 style="font-size: 20px;">
                                    Post: {{ \Carbon\Carbon::parse($new->datetime)->format('M j, Y h:i a') }}</h1><br>
                                <p class="text-left" style="font-size: 18px;">{{ $new->title }}</p>
                                <p class="text-left" style="font-size: 15px; font-weight: 400;"> {{ $new->caption }}</p>
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
                                        {{-- <button class="carousel-control-prev" type="button"
                                            data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button"
                                            data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button> --}}
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="justify-content-between">
            {{ $news->links() }}
        </div>
    </div>
</div>
