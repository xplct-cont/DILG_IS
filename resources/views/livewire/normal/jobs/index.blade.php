<div>
    <div class="col-md-12">
        <div class="">
            <div class="mt-5 col-md-3 mb-3 ms-auto mr-3">
               <input type="search" style="border-radius: 20px;" wire:model.delay.400ms="search"
                    class="form-control input" placeholder="Search">
                    <div wire:loading>
                        Searching...
                    </div>
            </div>
        </div>
    </div>
    <div>
        <div class="header mb-5 ml-3 mr-3"
            style=" padding: 7px; background: #234495; color: #FFFFFF; margin-bottom: 5px;">
            <h1 class="text-center" style="font-size: 18px; margin-top: 10px; ">JOB VACANCIES</h1>
        </div>
        @foreach ($jobs as $job_list)
            <div class="row mx-auto  ">
                <div class="card">
                    <div class="card-body ml-3 mr-3">
                        <div class="row">
                            <div class="col-md-4">

                                <img style="width: 100%; height: 100%; max-width: 100%; max-height:100%;" src="{{ asset('hiring_images/' . $job_list->hiring_img) }} ">
                            </div>
                            <div class="col-md-8">
                                <div>
                                    <p class="" style="color:dimgray; font-size: 16px;">Remarks:

                                        @if ($job_list->remarks == 'Filled Up')
                                            <span class=" btn btn-sm btn-danger text-light">Filled Up <span
                                                    class="text-justify fas fa-exclamation"></span></span>
                                        @elseif ($job_list->remarks == 'Available')
                                            <span class="btn btn-sm text-light btn-success">Available
                                                <span class="text-justify fas fa-check"></span></span>
                                        @endif
                                    </p>
                                </div>


                                <h2 class="text-center" style="font-size: 25px;">We are hiring the following positions:
                                </h2>
                                <h3 class="text-center mt-4" style="font-size: 22px; font-weight: 400;">
                                    {{ $job_list->position }}</h3>
                                <p class="text-center mt-5" style="font-size: 18px; ">Description:</p>
                                <p class="text-center" style="font-size: 16px; font-weight: 300; margin-top: -12px;">
                                    {{ $job_list->details }}</p>
                                <div class="text-center">
                                    <a href="{{ $job_list->link }}"
                                        class=" mt-5 btn btn-sm text-white col-sm-2 mx-auto text-center"
                                        style="background-color: #234495">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center mt-2">
        {{ $jobs->onEachSide(1)->links() }}
    </div>
</div>
</div>
