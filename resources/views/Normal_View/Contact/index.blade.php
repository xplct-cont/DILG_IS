@extends('layouts.app')

@section('content')
<div>
    <img style=" width: 100%; height: auto;" src="{{ asset('/img/facade.png') }}">
    <p></p>
    <div class="header" style=" padding: 7px; background: #DCDCDC; color: #030303; margin-bottom: 5px;">
        <h1 class="text-center">CONTACT INFORMATION</h1>
    </div>

    <div class="row mx-auto">
        <div class="card border border-0">
            <div class="card-body mx-auto">
                <div class="row">
                    <div class="col-sm-6">
                        <h2 class=" fw-bold mt-5">Get in touch with us!</h2>
                        <h4 class="ms-5 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab mollitia quibusdam, autem eos doloremque magnam numquam animi enim quaerat eveniet. Aliquam nisi, labore voluptate voluptatibus voluptas rerum cum perspiciatis nemo!</h4>
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 rounded">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1006178.5514274818!2d123.60298033998527!3d9.90185998774785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33aa17de1ba154df%3A0x6bc8bf042118d020!2sBohol!5e0!3m2!1sen!2sph!4v1674019267140!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="rounded"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection
