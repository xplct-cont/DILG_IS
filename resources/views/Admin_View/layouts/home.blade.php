@extends('Admin_View.layouts.app')

@section('content')
    <div class="text-start p-1 ml-1" style="font-size: 25px; font-weight: 500; color:dimgray;">
        DASHBOARD
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
                            <h3>{{ $news }}</h3>

                            <p class="text-secondary">News</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-newspaper text-secondary"></i>
                        </div>
                        <a href="{{ route('admin/news') }}" class="small-box-footer text-light"
                            style="background-color:dimgray;"><span class="text-light">More info</span> <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-light text-secondary elevation-4">
                        <div class="inner">
                            <h3>0</h3>

                            <p class="text-secondary">Projects</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-exclamation text-secondary"></i>
                        </div>
                        <a href="" class="small-box-footer"
                            style="background-color:dimgray;color:whitesmoke;
              "><span class="text-light">More
                                info</span> <i class="fas fa-arrow-circle-right"></i></a>
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
                            <i class="fas fa-address-book text-secondary"></i>
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
                            <i class="fas fa-users text-secondary"></i>
                        </div>
                        <a href="{{ route('admin/pdmu') }}" class="small-box-footer " style="background-color:dimgray;">
                            <span class="text-light">More info</span> <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box text-light bg-info elevation-4">
                        <div class="inner">
                            <h3>{{ $lgus }}</h3>

                            <p class="text-light">LGU's</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-city text-light"></i>
                        </div>
                        <a href="{{ route('admin/lgu') }}" class="small-box-footer "
                            style="background-color:dimgray;color:whitesmoke;"><span class="text-light">More info</span> <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

            </div>

        </div>
    </section>
    </div>
@endsection
