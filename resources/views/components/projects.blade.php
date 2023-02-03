<div class="mt-3 p-3">
    <div class="d-flex justify-content-center">
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

    <div class="mt-4 p-3">
        <div class="row">
            <div class="col-md-6">
                @foreach ($program as $prog)
                    <a href="#" style="text-decoration: none; color:#030303;">
                        <div class="card elevation-4">
                            <div class="row d-flex justify-content-center mt-3 ml-3 mr-3  ">
                                <div class="col-md-6 ">
                                    <h1 style="font-size: 15px;">{{ $prog->created_at }}</h1><br>
                                    <p class="text-left" style="font-size: 16px;">{{ $prog->title }}</p>
                                    <p class="text-left" style="font-size: 13px; font-weight: 300;">
                                        {{ $prog->description }}</p>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="card " style="height: 300px;">
                                        <img src="{{ asset('/img/img3.jpg') }}" alt=""
                                            style="height: 300px; width:auto;">
                                    </div>
                                </div>
                            </div>
                    </a>
                @endforeach

            </div>

        </div>
    </div>
