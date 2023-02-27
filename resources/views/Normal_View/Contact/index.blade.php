@extends('layouts.app')

@section('content')
    @if ($message = Session::get('message'))
        <div class="alert alert-success alert-block mt-2">
            <button type="button" class="close" data-dismiss="alert" style="color:black;">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <div>
        <div class="text-center">
            <img src='img/Background.png' width="1370" style="max-width: 100%; height:auto;">
        </div>
        <p></p>

        <div class="header ml-3 mr-3" style=" padding: 7px; background: #002c76; color: #FFFFFF;  margin-bottom: 5px;">
            <h1 class="text-center" style="font-size: 18px; margin-top: 10px;">CONTACT INFORMATION</h1>
        </div>
        <div class="">
            <div class=" p-3">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="text-left" style="font-size: 28px; font-weight: 700;">Get in touch with us!</h1>
                        <p class="text-justify" style="font-size: 18px;">
                            If you have any inquiries regarding our programs and services, please do not hesitate to contact
                            us.
                            We make every effort to answer any questions you may have and provide assistance with any of
                            your needs as much as possible. Please contact us if you require any further information or
                            would like to discuss anything related to our office.</p>


                        <div class="mx-auto mt-5" style="width: 18rem;">
                            <div class="">
                                <div class="d-flex justify-content-center">
                                    <img src="/img/place.png" style="height: 100px;" alt="">
                                </div>
                                <p class="text-center mt-3" style="font-size: 16px; font-weight: 700;">OFFICE ADDRESS</p>
                                <p class="text-center" style="font-size: 15px; font-weight: 450; margin-top: -15px;">Rajah
                                    Sikatuna Avenue, Dampas, Tagbilaran City 6300</p>

                            </div>
                        </div>


                        <div class=" mx-auto" style="width: 18rem;">
                            <div class="">
                                <div class="d-flex justify-content-center">
                                    <img src="/img/phone.png" style="height: 100px;" alt="">
                                </div>
                                <p class="text-center mt-3" style="font-size: 16px; font-weight: 700;">CONTACT US</p>
                                <p class="text-center" style="font-size: 15px; font-weight: 450; margin-top: -15px;">
                                    Globe - 09178967572 <br>
                                    Smart - 09399302989 <br>
                                    Landline - (038) 422-8038 </p>

                            </div>
                        </div>


                    </div>
                    <div class="col-md-6">
                        <iframe class=""
                            src="https://maps.google.com/maps?q=rajah sikatuna dampas&t=&z=12&ie=UTF8&iwloc=&output=embed"
                            height="400" width="100%" style="border:0;" allowfullscreen="true" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" class="rounded"></iframe>

                        <div class=" p-2 rounded col-md-12 mt-1 mx-auto">
                            <p class="mt-1" style="font-size: 20px; font-weight: 500; color: dimgray"><span> <img
                                        style="height: 30px; width: 40px;" src="img/email_logo.png"
                                        alt=""></span><span class="d-flex justify-content-center"> Email us</span>
                            </p>

                            <form action="{{ url('/send-email') }}" method="POST">
                                @csrf

                                <div class="form-group">
                                    <label for="" style="color:dimgray">To:</label>
                                    <input type="email" class="form-control" name="email"
                                        value="aquarius.pink27@gmail.com" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="" style="color:dimgray">Subject:</label>
                                    <input type="text" class="form-control" name="subject">
                                </div>
                                <div class="form-group">
                                    <label for="" style="color:dimgray;">Content: </label>
                                    <textarea style=" height: 150px;" id="" type="text" class="form-control" placeholder="" title=""
                                        name="content" required></textarea>
                                </div>

                                <button type="submit" class="btn btn-sm btn-success"><span class="fas fa-envelope"></span>
                                    Send Email</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
