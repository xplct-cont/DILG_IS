<aside class="main-sidebar sidebar-dark-primary ">
    <a href="{{ route('home') }}" class="brand-link" style="background-color: #8c0509; text-decoration:none;">
        <img src="{{url('/img/dilg-main.png')}}"
             alt="{{ config('app.name') }} Logo"
             class="brand-image img-circle elevation-3">
        <span class="" style="font-size: 16px; text-decoration:none;">DILG-BOHOL PROVINCE</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('Admin_View.layouts.menu')
            </ul>
        </nav>
    </div>

</aside>