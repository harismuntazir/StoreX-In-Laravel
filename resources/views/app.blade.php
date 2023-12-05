<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StoreX</title>
    <!-- Bulma CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.1/css/bulma.min.css">
</head>
<body>
<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item">
            <a class="navbar-item" href="{{ route('home') }}">Home</a>
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarMenu">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarMenu" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item" href="{{ url('/products') }}">
                All Products List
            </a>

            <a class="navbar-item" href="{{ url('/add-product') }}">
                Add New Products
            </a>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    More
                </a>

                <div class="navbar-dropdown">
                    <a href="{{ route('about-us') }}" class="navbar-item">
                        About
                    </a>
                    <hr class="navbar-divider">
                    <a href="{{ route('contact-us') }}" class="navbar-item">
                        Contact
                    </a>
                </div>
            </div>
        </div>

        <div class="navbar-end">
            <div class="navbar-item has-dropdown is-hoverable">
                @auth
                    <a class="navbar-link">
                        {{ Auth::user()->name }}
                    </a>

                    <div class="navbar-dropdown">
                        <a href="{{ route('dashboard') }}" class="navbar-item">
                            Dashboard
                        </a>
                        <hr class="navbar-divider">
                        <a href="{{ route('logout') }}"
                           class="navbar-item"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Sign Out
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                @endauth

                @guest
                    <a class="navbar-item" href="{{ route('register') }}">
                        Register
                    </a>
                    <hr class="navbar-divider">


                    <a class="navbar-item" href="{{ route('login') }}">
                        Log In
                    </a>
                @endguest
            </div>
        </div>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>
<!-- Add your JavaScript files here -->
</body>
</html>
