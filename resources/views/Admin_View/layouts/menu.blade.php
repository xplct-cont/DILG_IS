
<li class="nav-item mt-4">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home*') ? 'bg-info active' : '' }}">
        <p class="text-white">Dashboard</p>
        <i class="fas fa-tachometer-alt fa-pull-left fa-md text-white"></i>
    </a>
</li>

<li class="nav-item">
    <a href="{{ url('/admin/news') }}" class="nav-link {{ Request::is('users') ? 'bg-info active' : '' }}">
        <p class="text-white">News</p>
        <i class="fas fa-exclamation-circle fa-pull-left fa-md text-white"></i>
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
