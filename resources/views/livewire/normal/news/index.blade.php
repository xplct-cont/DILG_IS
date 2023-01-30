<div>
    <div class="container d-flex justify-content-center">
        <div class="row">
            <div class="col-md-6 mt-5">
                <input style="border-radius: 20px;" type="date" name="" id="" class="form-control">

            </div>
            <div class="col-md-6 mt-5">
                <div class="form-group has-search " style="margin:auto;">
                    <span class="fa fa-search form-control-feedback"></span>
                    <input type="text" style="border-radius: 20px;" class="form-control input" placeholder="Search">
                </div>
            </div>
        </div>
    </div>


    <div class="mx-auto col-md-11 d-flex align-items-center justify-content-around mt-5">
        <div class="row m-1">
            @foreach ($news as $new)
                <a href="#" style="text-decoration: none; color:#030303;">
                    <div class="card elevation-4">
                        <div class="row d-flex justify-content-center mt-3 ml-3 mr-3  ">
                            <div class="col-md-6 ">

                                <h1 style="font-size: 15px;">
                                    post: {{ \Carbon\Carbon::parse($new->datetime)->format('M j, Y h:i a') }}</h1><br>
                                <p class="text-left" style="font-size: 16px;">{{ $new->title }}</p>
                                <p class="text-left" style="font-size: 13px; font-weight: 300;"> {{ $new->caption }}</p>
                            </div>
                            <div class="col-md-6">
                                <div class="card d-flex flex-row align-items-center justify-content-around "
                                    style="height: 300px;">
                                    @php $images = json_decode($new->image,true); @endphp
                                    @if (is_array($images) && !empty($images))
                                        @foreach ($images as $image)
                                            <img src="{{ asset('app/public/' . $image) }}"
                                                style="height: 130px; width:auto;" />
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>


</div>
