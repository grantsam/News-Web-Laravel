<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link active" href="/">HOME</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/news">NEWS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/foto-video">FOTO</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/sitemap">SITEMAP</a>
        </li>
    </ul>
    <form class="d-flex" action="{{ route('news.index') }}" method="GET">
        <input class="form-control me-2" type="text" name="search" placeholder="Search..."
            value="{{ request('search') }}">
        <button class="btn btn-outline-light" type="submit">Search</button>
    </form>

    @auth
        <li class="nav-item dropdown">
            <div class="nav-link dropdown-toggle btn-outline-light text-light" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Welcome,{{ auth()->user()->name }}
            </div>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                <li>
                    <form action="/logout" method="post">
                        @csrf
                        <button class="dropdown-item" type='submit'>logout</a>
                    </form>
                </li>
            </ul>
        </li>
    @else
        <a class="btn btn-primary mx-2 " href="/login">Login</a>
    @endauth
</div>

<!-- Offcanvas trigger button -->
<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sideMenu"
    aria-controls="sideMenu">
    <span class="navbar-toggler-icon"></span>
</button>
</div>
</nav>

<!-- Offcanvas Menu -->
<div class="offcanvas offcanvas-end offcanvas-menu bg-dark text-white" tabindex="-1" id="sideMenu"
    aria-labelledby="sideMenuLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title text-white" id="sideMenuLabel">Menu</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body d-flex flex-column justify-content-top align-items-center">
        <ul class="navbar-nav text-center">
            <li class="nav-item">
                <a class="nav-link active" href="index.html">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="news.html">NEWS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="foto-video.html">FOTO</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="sitemap.html">SITEMAP</a>
            </li>
        </ul>

        <hr class="text-white-50">
        <form class="d-flex" action="{{ route('news.index') }}" method="GET">
            <input class="form-control me-2" type="text" name="search" placeholder="Search..."
                value="{{ request('search') }}">
            <button class="btn btn-outline-light" type="submit">Search</button>
        </form>


        @auth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Welcome,{{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Dashboard</a></li>
                    <li><a class="dropdown-item" href="#">logout</a></li>
                </ul>
            </li>
        @else
            <a class="btn btn-primary mx-2 " href="login.html">Login</a>
        @endauth
    </div>
</div>
