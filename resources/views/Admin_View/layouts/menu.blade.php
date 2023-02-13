<li class="nav-item mt-2">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home*') ? 'bg-secondary active' : '' }}">
        <p class="text-white">Dashboard</p>
        <i class="fas fa-tachometer-alt fa-pull-left fa-md text-white"></i>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin/news') }}" class="nav-link {{ Request::is('admin/news*') ? 'bg-secondary active' : '' }}">
        <p class="text-white">News</p>
        <i class="fas fa-newspaper fa-pull-left fa-md text-white"></i>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin/projects') }}" class="nav-link {{ Request::is('admin/projects*') ? '' : '' }}">
        <p class="text-white">Projects</p>
        <i class="fas fa-project-diagram fa-pull-left fa-md text-white"></i>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin/jobs') }}" class="nav-link {{ Request::is('admin/jobs*') ? 'bg-secondary active' : '' }}">
        <p class="text-white">Job Vacancies</p>
        <i class="fas fa-address-book fa-pull-left fa-md text-white"></i>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin/organization') }}"
        class="nav-link {{ Request::is('admin/organization*') ? 'bg-secondary active' : '' }}">
        <p class="text-white">Organization/PDMU</p>
        <i class="fas fa-users fa-pull-left fa-md text-white"></i>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin/field_officers') }}"
        class="nav-link {{ Request::is('admin/field_officers*') ? 'bg-secondary active' : '' }}">
        <p class="text-white">Field Officers</p>
        <i class="fas fa-people-carry fa-pull-left fa-md text-white"></i>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('admin/lgu') }}" class="nav-link {{ Request::is('admin/lgu*') ? 'bg-secondary active' : '' }}">
        <p class="text-white">LGU's</p>
        <i class="fas fa-city fa-pull-left fa-md text-white"></i>
    </a>
</li>

<style scoped>
    .nav-item p {
        position: relative;
        font-size: 16px;
        left: 3px;
        top: 1px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        text-decoration: none;
        color: gainsboro;

    }

    p:hover {
        color: white;
    }


    i {
        margin-top: 5px;
        margin-left: -1px;
        color: gainsboro;
        font-size: 16px;

    }


    i:hover {
        color: white;
    }


    img {
        height: 45px;
        width: 45px;
    }
</style>
