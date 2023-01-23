<aside class="main-sidebar sidebar-dark-primary ">
    <a href="{{ route('home') }}" class="brand-link" style="background-color: #C9282D;">
        <img src="{{url('/img/dilg-main.png')}}"
             alt="{{ config('app.name') }} Logo"
             class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light" style="font-size: 18px;">DILG-BOHOL PROVINCE</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('Admin_View.layouts.menu')
            </ul>
        </nav>
    </div>

</aside>