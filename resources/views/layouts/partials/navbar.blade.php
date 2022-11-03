<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">SIMA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'home' ? 'active' : '' }}" aria-current="page"
                        href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'about' ? 'active' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'posts' ? 'active' : '' }}" href="/blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'categories' ? 'active' : '' }}" href="/categories">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
            </ul>
            @auth

                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">

                        <a href="#" class="nav-link">Hi..., {{ auth()->user()->name }} ||</a>
                    </li>
                    <li class="nav-item">
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="nav"><i class="bi bi-box-arrow-right"></i>
                                logout</a></button>
                        </form>

                    </li>
                @else
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="/login" class="nav-link {{ $active === 'login' ? 'active' : '' }} "><i
                                    class="bi bi-box-arrow-in-right"></i> login</a>
                        </li>
                        <li class="nav-item">
                            <a href="/register" class="nav-link {{ $active === 'register' ? 'active' : '' }} "><i
                                    class="bi bi-box-arrow-right"></i> Register</a>
                        </li>
                    @endauth
                </ul>
        </div>
    </div>
</nav>
