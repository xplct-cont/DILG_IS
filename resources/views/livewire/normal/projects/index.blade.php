<div>

    <div class="col-md-3 mt-3 ms-5">
        <select class="form-select mt-1" name="program_id" wire:model="program_id">
            <option value="all">All programs</option>
            @foreach($programs as $program)
                <option value="{{$program->id}}">{{$program->title}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-3 mt-3 ms-5">
        <select class="form-select mt-1" name="municipality_id" wire:model="municipality">
            <option value="all">All municipalities</option>
            @foreach($municipalities as $municipality)
                <option value="{{$municipality->id}}">{{$municipality->municipality}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-4 mx-auto">
        <div class="" style="margin-top: 40px;">
            <input type="search" style="border-radius: 20px;" wire:model="search" class="form-control input"
                placeholder="Search">
        </div>

    </div>
    <div class="mx-auto">
        <div class="col-md-12 mb-5">
            <div class="row ">
                @foreach ($projectsAll as $proj)
                    <div class="card col-md-5 m-1 mx-auto">
                        <div class="card-body">
                            <a href="#" data-toggle="modal" id="project_view_link"
                                data-target="#project_id{{ $proj->id }}" style="text-decoration:none; color:dimgray">

                                <div class="card-header" style="background-color:#C9282D; color:white;">
                                    <h1 style="font-size: 20px;" class="text-center">Province of {{ $proj->province }}</h1>
                                </div>
                                <p class=" text-justify mt-3" style="font-weight: 500; font-size: 16px;">Program: <span
                                        style="font-size: 16px; font-weight: 400;"> {{ $proj->program->title }}</span></p>
                                <p class=" text-justify " style="margin-top: -12px; font-weight: 500; font-size: 16px;">
                                    Project
                                    Code: <span style="font-size: 16px; font-weight: 400;"> {{ $proj->proj_code }}</span>
                                </p>
                                <p class=" text-justify " style="margin-top: -12px; font-weight: 500; font-size: 16px;">
                                    Title: <span style="font-size: 16px; font-weight: 400;">
                                        {{ Illuminate\Support\Str::limit($proj->title, 40) }}</span></p>
                                <p class=" text-justify " style="margin-top: -12px; font-weight: 500; font-size: 16px;">
                                    Municipality: <span style="font-size: 16px; font-weight: 400;">
                                        {{ $proj->municipality->municipality }}</span>
                                </p>
                                <p class="" style="margin-top: -12px; font-weight: 500; font-size: 16px;">
                                    Exact
                                    Location: <span style="font-size: 16px; font-weight: 400;">
                                        {{ $proj->exact_loc }}</span></p>
                                <p class=" text-justify " style="margin-top: -12px; font-weight: 500; font-size: 16px;">
                                    Type: <span style="font-size: 16px; font-weight: 400;"> {{ $proj->type }}</span></p>
                                <p class=" text-justify " style="margin-top: -12px; font-weight: 500; font-size: 16px;">
                                    Year: <span style="font-size: 16px; font-weight: 400;"> {{ $proj->year }}</span></p>
                                <p class=" text-justify " style="margin-top: -12px; font-weight: 500; font-size: 16px;">
                                    Status:
                                    <span style="font-size: 16px; font-weight: 400;"> {{ $proj->status }}</span>
                                </p>
                                <p class=" text-justify " style="margin-top: -12px; font-weight: 500; font-size: 16px;">
                                    Total Cost:
                                    <span style="font-size: 16px; font-weight: 400;"> {{ $proj->total_cost }}</span>
                                </p>
                                <p class=" text-justify " style="margin-top: -12px; font-weight: 500; font-size: 16px;">
                                    Description:
                                    <span
                                        style="font-size: 16px; font-weight: 400;">{{ Illuminate\Support\Str::limit($proj->description, 30) }}</span>
                                </p>
                                <iframe class="col-md-12" src="{{ $proj->municipality->gmap_url }}" height="450"
                                    style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade" class="rounded"></iframe>
                        </div>
                        </a>
                    </div>

                    <div class="modal fade" id="project_id{{ $proj->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header ">

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" style="color:dimgray;">
                                    <div class="row">
                                        <div class="col-md-4 text-center mb-1">
                                            <img src="img/bohol_seal.png" class="mx-auto elevation-4"
                                                style="height: 130px; width: 130px; border-radius: 50%;" alt="">
                                        </div>
                                        <div class="col-md-8">
                                            <h1 style="font-size: 22px;" class="text-center">Province of
                                                {{ $proj->province }}</h1>

                                            <p class=" text-justify mt-3" style="font-weight: 500; font-size: 16px;">
                                                Program: <span style="font-size: 16px; font-weight: 400;">
                                                    {{ $proj->program->title }}</span>
                                            </p>
                                            <p class=" text-justify "
                                                style="margin-top: -12px; font-weight: 500; font-size: 16px;">
                                                Project
                                                Code: <span style="font-size: 16px; font-weight: 400;">
                                                    {{ $proj->proj_code }}</span>
                                            </p>
                                            <p class=" text-justify "
                                                style="margin-top: -12px; font-weight: 500; font-size: 16px;">
                                                Title: <span style="font-size: 16px; font-weight: 400;">
                                                    {{ Illuminate\Support\Str::limit($proj->title, 40) }}</span></p>
                                            <p class=" text-justify "
                                                style="margin-top: -12px; font-weight: 500; font-size: 16px;">
                                                Municipality: <span style="font-size: 16px; font-weight: 400;">
                                                    {{ $proj->municipality->municipality }}</span>
                                            </p>
                                            <p class=""
                                                style="margin-top: -12px; font-weight: 500; font-size: 16px;">
                                                Exact
                                                Location: <span style="font-size: 16px; font-weight: 400;">
                                                    {{ $proj->exact_loc }}</span></p>
                                            <p class=" text-justify "
                                                style="margin-top: -12px; font-weight: 500; font-size: 16px;">
                                                Type: <span style="font-size: 16px; font-weight: 400;">
                                                    {{ $proj->type }}</span>
                                            </p>
                                            <p class=" text-justify "
                                                style="margin-top: -12px; font-weight: 500; font-size: 16px;">
                                                Year: <span style="font-size: 16px; font-weight: 400;">
                                                    {{ $proj->year }}</span>
                                            </p>
                                            <p class=" text-justify "
                                                style="margin-top: -12px; font-weight: 500; font-size: 16px;">
                                                Status:
                                                <span style="font-size: 16px; font-weight: 400;">
                                                    {{ $proj->status }}</span>
                                            </p>
                                            <p class=" text-justify "
                                                style="margin-top: -12px; font-weight: 500; font-size: 16px;">
                                                Total Cost:
                                                <span style="font-size: 16px; font-weight: 400;">
                                                    {{ $proj->total_cost }}</span>
                                            </p>


                                        </div>

                                        <p class=" text-justify "
                                            style="margin-top: -12px; font-weight: 500; font-size: 16px;">
                                            Description:
                                            <textarea style=" height: 150px; background-color:white;" id="" type="text" class="form-control"
                                                placeholder="" title="" readonly>{{ $proj->description }}</textarea>
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</div>
