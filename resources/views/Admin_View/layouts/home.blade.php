@extends('Admin_View.layouts.app')
@section('content')
    @if ($message = Session::get('message'))
        <div class="alert alert-success alert-block mt-2">
            <button type="button" class="close" data-dismiss="alert" style="color:black;">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <div class="text-start p-1 ml-1" style="font-size: 25px; font-weight: 500; color:dimgray;">
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

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table
                            class=" mx-auto col-md-8 elevation-3 table table-sm table-bordered table-hovered text-center">
                            <thead class="" style="background-color: dimgray; color:white;">


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

                        <form action="{{ url('/add_images/' . $home_img->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="container mx-auto">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Upload Images (Max:3)</label>
                                            <input type="file" name="images[]" class="form-control" multiple>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success"><span class="fas fa-save"></span> Save
                            Changes</button>
                    </div>
                    </form>

                </div>
            </div>
        </div>
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
                            style="background-color:dimgray;"><span class="text-light">More info</span> <i
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
                        <a href="{{ route('admin/jobs') }}" class="small-box-footer "
                            style="background-color:dimgray;color:whitesmoke;"><span class="text-light">More info</span> <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
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
                        <a href="{{ route('admin/organization') }}" class="small-box-footer "
                            style="background-color:dimgray;color:whitesmoke;"><span class="text-light">More info</span> <i
                                class="fas fa-arrow-circle-right"></i></a>
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
                        <a href="{{ route('admin/pdmu') }}" class="small-box-footer " style="background-color:dimgray;">
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
                            style="background-color:dimgray;">
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
                        <a href="{{ route('admin/faqs') }}" class="small-box-footer " style="background-color:dimgray;">
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
                            style="background-color:dimgray;">
                            <span class="text-light">More info</span> <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box text-light elevation-4" style="background-color:#8c0509;">
                        <div class="inner">
                            <h3>{{ $lgus }}</h3>

                            <p class="text-light">LGU's</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-city text-light"></i>
                        </div>
                        <a href="{{ route('admin/lgu') }}" class="small-box-footer "
                            style="background-color:dimgray;color:whitesmoke;"><span class="text-light">More info</span>
                            <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
@endsection

<style scoped>
    .img {
        display: flex;
        justify-content: space-evenly;


    }
</style>
