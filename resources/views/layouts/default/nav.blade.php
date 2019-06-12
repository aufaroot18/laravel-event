<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container">
        <a href="{{route('home')}}" class="navbar-brand">
            Event Laravel
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="{{route('home')}}" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Browse Event</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Blog</a>
                </li>
                </li>
            </ul>
            @guest
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{action('EventController@createEvent')}}" class="nav-link">Create Event</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('login')}}" class="nav-link mr-2">Login</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('register')}}" class="btn btn-success">Register</a>
                </li>
            </ul>
            @endguest
            @auth
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="{{action('EventController@createEvent')}}" class="nav-link">Create Event</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('dashboard') }}">Go To Dashboard</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                           Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
            @endauth
        </div>
    </div>
</nav>