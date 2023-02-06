@extends('layouts.app')
@section('content')
    <div class="col-md-12">
        <div class="card-deck">
            @foreach ($projectsAll as $proj)
                <div class="card col-md-4 m-1">
                    <div class="card-body  text-center">
                        <div class="card-header bg-secondary">
                            <h1 style="font-size: 20px;" class="text-center">Province of {{ $proj->province }}</h1>
                        </div>
                        <p class=" text-justify mt-3" style="font-weight: 500; font-size: 16px;">Program: <span
                                style="font-size: 16px; font-weight: 400;"> {{ $proj->program->title }}</span></p>
                        <p class=" text-justify " style="margin-top: -12px; font-weight: 500; font-size: 16px;">Project
                            Code: <span style="font-size: 16px; font-weight: 400;"> {{ $proj->proj_code }}</span></p>
                        <p class=" text-justify " style="margin-top: -12px; font-weight: 500; font-size: 16px;">Title: <span
                                style="font-size: 16px; font-weight: 400;"> {{ $proj->title }}</span></p>
                        <p class=" text-justify " style="margin-top: -12px; font-weight: 500; font-size: 16px;">
                            Municipality: <span style="font-size: 16px; font-weight: 400;">
                                {{ $proj->municipality->municipality }}</span>
                        </p>
                        <p class=" text-justify " style="margin-top: -12px; font-weight: 500; font-size: 16px;">Exact
                            Location: <span style="font-size: 16px; font-weight: 400;"> {{ $proj->exact_loc }}</span></p>
                        <p class=" text-justify " style="margin-top: -12px; font-weight: 500; font-size: 16px;">Type: <span
                                style="font-size: 16px; font-weight: 400;"> {{ $proj->type }}</span></p>
                        <p class=" text-justify " style="margin-top: -12px; font-weight: 500; font-size: 16px;">Year: <span
                                style="font-size: 16px; font-weight: 400;"> {{ $proj->year }}</span></p>
                        <p class=" text-justify " style="margin-top: -12px; font-weight: 500; font-size: 16px;">Status:
                            <span style="font-size: 16px; font-weight: 400;"> {{ $proj->status }}</span>
                        </p>
                        <p class=" text-justify " style="margin-top: -12px; font-weight: 500; font-size: 16px;">Total Cost:
                            <span style="font-size: 16px; font-weight: 400;"> {{ $proj->total_cost }}</span>
                        </p>
                        <p class=" text-justify " style="margin-top: -12px; font-weight: 500; font-size: 16px;">Description:
                            <span style="font-size: 16px; font-weight: 400;">{{ Illuminate\Support\Str::limit($proj->description, 30) }}</span>
                        </p>
                        <iframe class="col-md-12"
                            src="https://maps.google.com/maps?q=Calape Bohol&t=&z=12&ie=UTF8&iwloc=&output=embed"
                            height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" class="rounded"></iframe>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection

<style scoped>
    .responsive {
        max-width: 100%;
        height: auto;
    }
</style>
