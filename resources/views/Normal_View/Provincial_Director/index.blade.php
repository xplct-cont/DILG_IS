@extends('layouts.app')

@section('content')
    <div class="">
        <div class="">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        @csrf
                        <p class="text-center mt-5" style="font-size: 30px; font-weight: 500;">The Provincial Director</p>
                        @foreach ($pd as $pdirector)
                            <div class="d-flex justify-content-center mb-3">
                                <div class="text-center">
                                    <div class="rotate">
                                        <img src="{{ asset('org_profile_images/' . $pdirector->profile_img) }} "
                                            alt="Image" class="shadow-lg border rounded"
                                            style="height: 350px; width: 350px;">
                                    </div>
                                    <p class="text-center mt-2" style="font-size: 25px; font-weight:500;">
                                        {{ $pdirector->fname }}
                                        {{ $pdirector->mid_initial }} {{ $pdirector->lname }}</p>
                                    <p class="text-center" style="margin-top: -20px; font-size: 20px;">
                                        {{ $pdirector->position }}</p>
                                    <p class="text-center" style="margin-top: -20px; font-size: 16px;">
                                        <span> <img src="/img/dilg-main.png" style="height: 40px; width: 40px;"
                                                alt=""> </span> Department of the Interior and Local Government -
                                        Bohol Province
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="col-md-6 mb-5" style="margin-top: 50px;">
                        <p class="text-justify">

                            MESSAGE OF THE PROVINCIAL DIRECTOR <br><br>

                            It has been my great pride and joy to present to you this Accomplishment Report for CY 2022.
                            This
                            is made possible through the joint efforts of the active and dedicated men and women of
                            DILG-Bohol. These accomplishments manifest the department’s aspirations through the
                            collaboration and
                            participation of the different stakeholders. For that, I wholeheartedly laud the men and women
                            of
                            DILG-Bohol for a great job. <br><br>

                            This year marks the second year since COVID-19 strikes which limits some of the activities of
                            the
                            department. However, the men and women of the department work hand in hand and set aside
                            their differences to achieve excellence and proficiency. The accomplishments that DILG-Bohol
                            brought depict the values of a true public servant by being “Matino, Mahusay at Maaasahan”.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="firework"></div>
    <div class="firework"></div>
    <div class="firework"></div>
@endsection
<style scoped>
    .rotate img {
        transition: 1s ease;
    }

    .rotate img:hover {
        -webkit-transform: rotateZ(-9deg);
        -ms-transform: rotateZ(-9deg);
        transform: rotateZ(-9deg);
        transition: 1s ease;
    }




    body {
        background:

            margin: 0;
        height: 100vh;

    }

    @keyframes firework {
        0% {
            transform: translate(var(--x), var(--initialY));
            width: var(--initialSize);
            opacity: 1;
        }

        50% {
            width: 0.5vmin;
            opacity: 1;
        }

        100% {
            width: var(--finalSize);
            opacity: 0;
        }
    }



    .firework,
    .firework::before,
    .firework::after {
        --initialSize: 0.5vmin;
        --finalSize: 45vmin;
        --particleSize: 0.2vmin;
        --color1: red;
        --color2: blue;
        --color3: black;
        --color4: violet;
        --color5: green;
        --color6: mediumseagreen;
        --y: -30vmin;
        --x: -50%;
        --initialY: 60vmin;
        content: "";
        animation: firework 2s infinite;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, var(--y));
        width: var(--initialSize);
        aspect-ratio: 1;
        background:
            /*
    radial-gradient(circle, var(--color1) var(--particleSize), #0000 0) 0% 0%,
    radial-gradient(circle, var(--color1) var(--particleSize), #0000 0) 100% 0%,
    radial-gradient(circle, var(--color1) var(--particleSize), #0000 0) 100% 100%,
    radial-gradient(circle, var(--color1) var(--particleSize), #0000 0) 0% 100%,
    */

            radial-gradient(circle, var(--color1) var(--particleSize), #0000 0) 50% 0%,
            radial-gradient(circle, var(--color2) var(--particleSize), #0000 0) 100% 50%,
            radial-gradient(circle, var(--color3) var(--particleSize), #0000 0) 50% 100%,
            radial-gradient(circle, var(--color4) var(--particleSize), #0000 0) 0% 50%,

            /* bottom right */
            radial-gradient(circle, var(--color5) var(--particleSize), #0000 0) 80% 90%,
            radial-gradient(circle, var(--color6) var(--particleSize), #0000 0) 95% 90%,
            radial-gradient(circle, var(--color1) var(--particleSize), #0000 0) 90% 70%,
            radial-gradient(circle, var(--color2) var(--particleSize), #0000 0) 100% 60%,
            radial-gradient(circle, var(--color3) var(--particleSize), #0000 0) 55% 80%,
            radial-gradient(circle, var(--color4) var(--particleSize), #0000 0) 70% 77%,

            /* bottom left */
            radial-gradient(circle, var(--color5) var(--particleSize), #0000 0) 22% 90%,
            radial-gradient(circle, var(--color6) var(--particleSize), #0000 0) 45% 90%,
            radial-gradient(circle, var(--color1) var(--particleSize), #0000 0) 33% 70%,
            radial-gradient(circle, var(--color2) var(--particleSize), #0000 0) 10% 60%,
            radial-gradient(circle, var(--color3) var(--particleSize), #0000 0) 31% 80%,
            radial-gradient(circle, var(--color4) var(--particleSize), #0000 0) 28% 77%,
            radial-gradient(circle, var(--color5) var(--particleSize), #0000 0) 13% 72%,

            /* top left */
            radial-gradient(circle, var(--color6) var(--particleSize), #0000 0) 80% 10%,
            radial-gradient(circle, var(--color1) var(--particleSize), #0000 0) 95% 14%,
            radial-gradient(circle, var(--color2) var(--particleSize), #0000 0) 90% 23%,
            radial-gradient(circle, var(--color3) var(--particleSize), #0000 0) 100% 43%,
            radial-gradient(circle, var(--color4) var(--particleSize), #0000 0) 85% 27%,
            radial-gradient(circle, var(--color5) var(--particleSize), #0000 0) 77% 37%,
            radial-gradient(circle, var(--color6) var(--particleSize), #0000 0) 60% 7%,

            /* top right */
            radial-gradient(circle, var(--color1) var(--particleSize), #0000 0) 22% 14%,
            radial-gradient(circle, var(--color1) var(--particleSize), #0000 0) 45% 20%,
            radial-gradient(circle, var(--color1) var(--particleSize), #0000 0) 33% 34%,
            radial-gradient(circle, var(--color1) var(--particleSize), #0000 0) 10% 29%,
            radial-gradient(circle, var(--color1) var(--particleSize), #0000 0) 31% 37%,
            radial-gradient(circle, var(--color1) var(--particleSize), #0000 0) 28% 7%,
            radial-gradient(circle, var(--color1) var(--particleSize), #0000 0) 13% 42%;
        background-size: var(--initialSize) var(--initialSize);
        background-repeat: no-repeat;
    }

    .firework::before {
        --x: -50%;
        --y: -50%;
        --initialY: -50%;
        /*   transform: translate(-20vmin, -2vmin) rotate(40deg) scale(1.3) rotateY(40deg); */
        transform: translate(-50%, -50%) rotate(40deg) scale(1.3) rotateY(40deg);
        /*   animation: fireworkPseudo 2s infinite; */
    }

    .firework::after {
        --x: -50%;
        --y: -50%;
        --initialY: -50%;
        /*   transform: translate(44vmin, -50%) rotate(170deg) scale(1.15) rotateY(-30deg); */
        transform: translate(-50%, -50%) rotate(170deg) scale(1.15) rotateY(-30deg);
        /*   animation: fireworkPseudo 2s infinite; */
    }

    .firework:nth-child(2) {
        --x: 30vmin;
    }

    .firework:nth-child(2),
    .firework:nth-child(2)::before,
    .firework:nth-child(2)::after {
        --color1: red;
        --color2: blue;
        --color3: violet;
        --color4: orchid;
        --color5: plum;
        --color6: lavender;
        --finalSize: 40vmin;
        left: 30%;
        top: 60%;
        animation-delay: -0.25s;
    }

    .firework:nth-child(3) {
        --x: -30vmin;
        --y: -50vmin;
</style>
