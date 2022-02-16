<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Test1') }}</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><h2 class="text-warning">LogoHere</h2></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mob-navbar" aria-label="Toggle">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mob-navbar">
                    <ul class="navbar-nav mb-2 mb-lg-0 mx-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Our Services</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Web designing</a></li>
                                <li><a class="dropdown-item" href="#">Web Development</a></li>
                                <li><a class="dropdown-item" href="#">SEO Analysis</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#">Explore More</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                    </ul>
                    @auth
                        <form action="{{ route('logout') }}" method="post" class="d-flex">
                            @csrf
                            <button class="btn btn-warning" type="submit">Log out</button>
                        </form>
                    @else
                        <form action="{{ route('login') }}">
                            @csrf
                            <input class="btn btn-warning" type="submit" value="Login" />
                        </form>
                        &nbsp;
                        @if (Route::has('register'))
                            <form action="{{ route('register') }}">
                                @csrf
                                <input class="btn btn-warning" type="submit" value="Register" />
                            </form>
                        @endif
                    @endauth
                </div>
            </div>
        </nav>
    guest
        <main>
            {{ $slot }}
        </main>
    </body>
</html>
