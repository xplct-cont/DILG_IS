@extends('layouts.app')

@section('content')
    <div class="">
        <div class="">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <p class="text-center mt-5" style="font-size: 30px; font-weight: 500;">The Provincial Director</p>
                        @foreach ($pd as $pdirector)
                            <div class="d-flex justify-content-center mb-3">
                                <div class="text-center">
                                    <img src="{{ asset('org_profile_images/' . $pdirector->profile_img) }} " alt="Image"
                                        class="shadow-lg border rounded" style="height: 450px; width: 450px;">

                                    <p class="text-center mt-2" style="font-size: 25px; font-weight:500;">
                                        {{ $pdirector->fname }}
                                        {{ $pdirector->mid_initial }} {{ $pdirector->lname }}</p>
                                    <p class="text-center" style="margin-top: -20px; font-size: 20px;">
                                        {{ $pdirector->position }}</p>
                                    <p class="text-center" style="margin-top: -20px; font-size: 16px;">
                                     <span> <img src="/img/dilg-main.png" style="height: 40px; width: 40px;" alt=""> </span>  Department of the Interior and Local Government - Bohol Province</p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="col-md-6 mb-5" style="margin-top: 50px;">
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet. In unde similique id ratione rerum aut sequi voluptatibus eum
                            facilis sint in delectus officiis et quam dolores. 33 maiores laboriosam et enim maxime aut odit
                            odio. Qui labore omnis eos voluptatem nemo eos mollitia culpa aut quas obcaecati.

                            Sed quaerat dolores ex libero ullam est laboriosam galisum ut quia consequatur et suscipit
                            architecto id minima reprehenderit est sequi earum. Est veniam odit qui rerum ducimus qui
                            molestias suscipit sed velit laborum qui incidunt dolor ut beatae omnis.

                            Quo explicabo galisum ea quaerat quas non quisquam autem est omnis aliquam et earum
                            voluptatibus. Et Quis sequi rem optio quam aut dignissimos voluptas et minus rerum qui natus
                            ratione.

                            Lorem ipsum dolor sit amet. In unde similique id ratione rerum aut sequi voluptatibus eum
                            facilis sint in delectus officiis et quam dolores. 33 maiores laboriosam et enim maxime aut odit
                            odio. Qui labore omnis eos voluptatem nemo eos mollitia culpa aut quas obcaecati.

                            Sed quaerat dolores ex libero ullam est laboriosam galisum ut quia consequatur et suscipit
                            architecto id minima reprehenderit est sequi earum. Est veniam odit qui rerum ducimus qui
                            molestias suscipit sed velit laborum qui incidunt dolor ut beatae omnis.

                            Quo explicabo galisum ea quaerat quas non quisquam autem est omnis aliquam et earum
                            voluptatibus. Et Quis sequi rem optio quam aut dignissimos voluptas et minus rerum qui natus
                            ratione.

                            <br><br>

                            Lorem ipsum dolor sit amet. In unde similique id ratione rerum aut sequi voluptatibus eum
                            facilis sint in delectus officiis et quam dolores. 33 maiores laboriosam et enim maxime aut odit
                            odio. Qui labore omnis eos voluptatem nemo eos mollitia culpa aut quas obcaecati.

                            Sed quaerat dolores ex libero ullam est laboriosam galisum ut quia consequatur et suscipit
                            architecto id minima reprehenderit est sequi earum. Est veniam odit qui rerum ducimus qui
                            molestias suscipit sed velit laborum qui incidunt dolor ut beatae omnis.

                            Quo explicabo galisum ea quaerat quas non quisquam autem est omnis aliquam et earum
                            voluptatibus. Et Quis sequi rem optio quam aut dignissimos voluptas et minus rerum qui natus
                            ratione.

                            <br><br>
                            Lorem ipsum dolor sit amet. In unde similique id ratione rerum aut sequi voluptatibus eum
                            facilis sint in delectus officiis et quam dolores. 33 maiores laboriosam et enim maxime aut odit
                            odio. Qui labore omnis eos voluptatem nemo eos mollitia culpa aut quas obcaecati.

                            Sed quaerat dolores ex libero ullam est laboriosam galisum ut quia consequatur et suscipit
                            architecto id minima reprehenderit est sequi earum. Est veniam odit qui rerum ducimus qui
                            molestias suscipit sed velit laborum qui incidunt dolor ut beatae omnis.

                            Quo explicabo galisum ea quaerat quas non quisquam autem est omnis aliquam et earum
                            voluptatibus. Et Quis sequi rem optio quam aut dignissimos voluptas et minus rerum qui natus
                            ratione.
                        </p>
                    </div>

                </div>


            </div>

        </div>
    </div>


    <style scoped>
        .zoom {
            transition: transform .2s;
        }

        .zoom:hover {
            -ms-transform: scale(1.5);
            /* IE 9 */
            -webkit-transform: scale(1.5);
            /* Safari 3-8 */
            transform: scale(1.5);
            text-align: center;
            font-size: 10px;
        }
    </style>
@endsection
