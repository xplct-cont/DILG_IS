<aside class="main-sidebar bg-secondary">
    <div class="p-2">
        <a href="{{ route('home') }}" style=" text-decoration:none; color:white;">
            <img src="{{ url('/img/dilg-main.png') }}" alt="{{ config('app.name') }} Logo"
                class="brand-image img-circle elevation-3">
            <span class="" style="font-size: 16px; text-decoration:none;">DILG-BOHOL PROVINCE</span>
        </a>
    </div>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                @include('Admin_View.layouts.menu')
            </ul>
        </nav>
    </div>
</aside>
