@extends('Admin_View.layouts.app')
@section('content')
    @if ($message = Session::get('message'))
        <div class="alert alert-success text-center text-lg alert-dismissible fade show mt-2" role="alert">
            <button type="button" class="close" data-dismiss="alert" style="color:black;">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <div class="text-start p-1 ml-1" style="font-size: 22px; font-weight: 500; color:dimgray;">
        DASHBOARD
    </div>

    <div class="d-flex justify-content-end mb-2 ">

        <button type="button" class="btn btn-sm" style="background-color: #343a40; color:white; font-size: 12px;"
            data-toggle="modal" data-target="#exampleModal">
            <span class="fas fa-plus-circle"></span> Change Home Images
        </button>


        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <p style="font-size: 14px;"><span class="fas fa-exclamation-triangle text-warning"
                                style="font-size: 13px;"></span> Note: Please use images with same size.</p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table
                            class=" mx-auto col-md-8 elevation-3 table table-sm table-bordered table-hovered text-center">
                            <thead class="" style="background-color: #234495; color:white;">


                                <th scope="col" class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                    style="text-align: center">Images</th>
                            </thead>
                            <tbody>
                                @foreach ($home_images as $home_img)
                                    <tr>
                                        <td scope="col"
                                            class="img d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                                            style="text-align: center"> <?php foreach (json_decode($home_img->images) as $picture) { ?>
                                            <img src="{{ asset('home_images/' . $picture) }}"
                                                style="height:60px; width:80px" />
                                            <?php } ?>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <form action="{{ url('/add_images_hm/' . $home_img->id) }}" method="POST"
                            enctype="multipart/form-data" id="image-form">
                            @csrf
                            <div class="container mx-auto">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Upload Images (Max:3)</label>
                                            <input type="file" name="images[]" class="form-control" id="id_home_images"
                                                required multiple>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" id="homeimagesSubmit-btn"><span
                                class="fas fa-save"></span> Save
                            Changes</button>
                    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


    <!-- Audio in About Page -->
    <button type="button" class="btn btn-sm mb-3 ml-3 " style="background-color: #343a40; color:white; font-size: 12px;"
        data-toggle="modal" data-target="#audioModal">
        <span class="fas fa-plus-circle"></span> Change Audio in About Page
    </button>

    <div class="modal fade" id="audioModal" tabindex="-1" role="dialog" aria-labelledby="audioModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p style="font-size: 18px; font-weight: 500;">Change Audio</p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    @foreach ($audio as $aud)
                        <form action="{{ url('/change_audio/' . $aud->id) }}" method="POST" enctype="multipart/form-data"
                            id="audio-form">
                            @csrf
                            @method('PUT')
                            <div class="container mx-auto">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Upload Audio (Max:1 | Type: mp3, wav)</label>
                                            <input type="file" name="file" class="form-control" id="file_audio"
                                                required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                </div>

                <div class="modal-footer">
                    <button type="submit" id="audioSubmit-btn" class="btn btn-success"><span class="fas fa-save"></span>
                        Save
                        Changes</button>

                </div>

                </form>
            </div>
        </div>
    </div>


    <!-- Loading GIF image -->
    <div id="loading"
        style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 9999; display: none;">
        <img src="{{ asset('loading_img/load.gif') }}" style="height: 150px; width: 150px;" alt="Loading...">
    </div>


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-light text-secondary elevation-4">
                        <div class="inner">
                            <h3>{{ $updates }}</h3>

                            <p class="text-secondary">News/Updates</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-newspaper text-secondary"></i>
                        </div>
                        <a href="{{ route('admin/news_updates') }}" class="small-box-footer text-light"
                            style="background-color: #234495;"><span class="text-light">More info</span> <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-light text-secondary elevation-4">
                        <div class="inner">
                            <h3>{{ $jobs }}</h3>

                            <p class="text-secondary">Job Vacancies</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-address-book text-secondary"></i>
                        </div>
                        <a href="{{ route('admin/jobs') }}" class="small-box-footer" style="background-color: #234495;"
                            style="color:whitesmoke;"><span class="text-light">More info</span> <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                @role(['Super-Admin', 'Admin'])
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-light text-secondary elevation-4">
                            <div class="inner">
                                <h3>{{ $orgs }}</h3>

                                <p class="text-secondary">Org. Structure</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users text-secondary"></i>
                            </div>
                            <a href="{{ route('admin/organization') }}" class="small-box-footer"
                                style="background-color: #234495;" style="color:whitesmoke;"><span class="text-light">More
                                    info</span> <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6 ">
                        <!-- small box -->
                        <div class="small-box text-secondary elevation-4">
                            <div class="inner">
                                <h3>{{ $pdmus }}</h3>

                                <p class="text-secondary">PDMU</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user-friends text-secondary"></i>
                            </div>
                            <a href="{{ route('admin/pdmu') }}" class="small-box-footer" style="background-color: #234495;">
                                <span class="text-light">More info</span> <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6 ">
                        <!-- small box -->
                        <div class="small-box text-secondary elevation-4">
                            <div class="inner">
                                <h3>{{ $field_officers }}</h3>

                                <p class="text-secondary">Field Off.</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-people-carry text-secondary"></i>
                            </div>
                            <a href="{{ route('admin/field_officers') }}" class="small-box-footer "
                                style="background-color: #234495;" style="">
                                <span class="text-light">More info</span> <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6 ">
                        <!-- small box -->
                        <div class="small-box text-secondary elevation-4">
                            <div class="inner">
                                <h3>{{ $faqs }}</h3>

                                <p class="text-secondary">FAQ's</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-question-circle text-secondary"></i>
                            </div>
                            <a href="{{ route('admin/faqs') }}" class="small-box-footer " style="background-color: #234495;"
                                style="">
                                <span class="text-light">More info</span> <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6 ">
                        <!-- small box -->
                        <div class="small-box text-secondary elevation-4">
                            <div class="inner">
                                <h3>{{ $b_issuances }}</h3>

                                <p class="text-secondary">Issuances</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-file text-secondary"></i>
                            </div>
                            <a href="{{ route('admin/issuances') }}" class="small-box-footer "
                                style="background-color: #234495;" style="">
                                <span class="text-light">More info</span> <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6 ">
                        <!-- small box -->
                        <div class="small-box text-secondary elevation-4">
                            <div class="inner">
                                <h3>{{ $downloadables }}</h3>

                                <p class="text-secondary">Downloadables</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-download text-secondary"></i>
                            </div>
                            <a href="{{ route('admin/downloadables') }}" class="small-box-footer "
                                style="background-color: #234495;" style="">
                                <span class="text-light">More info</span> <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6 ">
                        <!-- small box -->
                        <div class="small-box text-secondary elevation-4">
                            <div class="inner">
                                <h3>{{ $knowledge_materials }}</h3>

                                <p class="text-secondary">Knowledge Mat.</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-book-open text-secondary"></i>
                            </div>
                            <a href="{{ route('admin/knowledge_materials') }}" class="small-box-footer "
                                style="background-color: #234495;" style="">
                                <span class="text-light">More info</span> <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6 ">
                        <!-- small box -->
                        <div class="small-box text-secondary elevation-4">
                            <div class="inner">
                                <h3>{{ $prov_officials }}</h3>

                                <p class="text-secondary">Prov. Officials</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user-tie text-secondary"></i>
                            </div>
                            <a href="{{ route('admin/provincial_officials') }}" class="small-box-footer "
                                style="background-color: #234495;" style="">
                                <span class="text-light">More info</span> <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box text-secondary elevation-4">
                            <div class="inner">
                                <h3>{{ $lgus }}</h3>
                                <p class="text-secondary">LGU's</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-city text-secondary"></i>
                            </div>
                            <a href="{{ route('admin/lgu') }}" class="small-box-footer " style="background-color: #234495;"
                                style=";color:whitesmoke;"><span class="text-light">More info</span>
                                <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box text-secondary elevation-4">
                            <div class="inner">
                                <h3>{{ $cit_charter }}</h3>
                                <p class="text-secondary">Cit. Charter</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users-slash text-secondary"></i>
                            </div>
                            <a href="{{ route('admin/citizens_charter') }}" class="small-box-footer "
                                style="background-color: #234495;" style="color:whitesmoke;"><span class="text-light">More
                                    info</span>
                                <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box text-secondary elevation-4">
                        <div class="ml-3"   style="width: 40%; height: 55px; display: flex; ">
                        <a href='http://www.freevisitorcounters.com'></a>
                                 <script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=7b6df58795f1b38d7f8e8e7d2214693c40ed1e60'></script>
                                 <script type="text/javascript" src="https://freevisitorcounters.com/en/home/counter/1129813/t/0"></script>
                            </div>
                            <div class="inner">
                                
                                <p class="text-secondary">Visitor Counter</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users text-secondary"></i>
                            </div>
                           
                            <a class="small-box-footer " style="background-color: #234495;"
                                style=";color:whitesmoke;"><span class="text-light">Click the Counter to View Stats</span>
                                    </a>
                        </div>
                    </div> 
                    
                @endrole
                @role('Super-Admin')
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box text-secondary elevation-4">
                            <div class="inner">
                                <h3>{{ $logs }}</h3>
                                <p class="text-secondary">Logs</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-pen text-secondary"></i>
                            </div>
                            <a href="{{ route('admin/logs') }}" class="small-box-footer " style="background-color: #234495;"
                                style=";color:whitesmoke;"><span class="text-light">More info</span>
                                <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                      
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box text-light elevation-4" style="background-color: #234495;">
                            <div class="inner">
                                <h3>{{ $users }}</h3>

                                <p class="text-light">Users</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user-cog text-light"></i>
                            </div>
                            <a href="{{ route('admin/users') }}" class="small-box-footer bg-secondary"
                                style="color:whitesmoke;"><span class="text-light">More info</span>
                                <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                   
                @endrole

            </div>
        </div>
    </section>
    </div>

    <script>
        setTimeout(function() {
            $(' .alert-dismissible').fadeOut('slow');
        }, 1000);


        // Get the file input and submit button elements for audio
        const audioInput = document.querySelector('#file_audio');
        const audioSubmitButton = document.querySelector('#audioSubmit-btn');

        // Disable the audio submit button on page load
        audioSubmitButton.disabled = true;

        // Listen for changes to the audio file input
        audioInput.addEventListener('change', function() {
            // Check if the audio file input has an error
            if (this.files.length > 0 && !this.files[0].name.match(/\.(mp3|wav)$/i)) {
                // If the file extension is incorrect, disable the audio submit button
                audioSubmitButton.disabled = true;
                // Show an error message
                alert('Please select MP3, or WAV file');
            } else {
                // If the file extension is correct, enable the audio submit button
                audioSubmitButton.disabled = false;
            }
        });

        // Get the file input and submit button elements for images
        const imagesInput = document.querySelector('#id_home_images');
        const imagesSubmitButton = document.querySelector('#homeimagesSubmit-btn');

        // Disable the images submit button on page load
        imagesSubmitButton.disabled = true;

        // Listen for changes to the images file input
        imagesInput.addEventListener('change', function() {
            // Check if the images file input has an error
            if (this.files.length > 0 && !this.files[0].name.match(/\.(jpeg|png|jpg|gif|svg)$/i)) {
                // If the file extension is incorrect, disable the images submit button
                imagesSubmitButton.disabled = true;
                // Show an error message
                alert('Please select JPEG, PNG, JPG, GIF or SVG file');
            } else {
                // If the file extension is correct, enable the images submit button
                imagesSubmitButton.disabled = false;
            }
        });


        const imageform = document.getElementById('image-form');
        const imageloading = document.getElementById('loading');

        imageform.addEventListener('submit', () => {
            imageloading.style.display = 'block';
        });

        imageform.addEventListener('load', () => {
            imageloading.style.display = 'none';
        });

        imageform.addEventListener('error', () => {
            imageloading.style.display = 'none';
        });



        const audioform = document.getElementById('audio-form');
        const audioloading = document.getElementById('loading');

        audioform.addEventListener('submit', () => {
            audioloading.style.display = 'block';
        });

        audioform.addEventListener('load', () => {
            audioloading.style.display = 'none';
        });

        audioform.addEventListener('error', () => {
            audioloading.style.display = 'none';
        });
        
    </script>


    @endsection

<style scoped>
    .img {
        display: flex;
        justify-content: space-evenly;

    }
</style>
