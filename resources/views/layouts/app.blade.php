<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
  <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
  <title>@yield('title', 'Online Store')</title>
</head>
<body class="d-flex flex-column min-vh-100">
    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home.index') }}">Online Store</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">

                    
                    <a class="nav-link" href="{{ route('home.index') }}">Home</a>
                    <a class="nav-link" href="{{ route('home.about') }}">About</a>
                    <a class="nav-link" href="{{ route('home.contact') }}">Contact</a>
                    <a class="nav-link" href="{{ route('product.index') }}">Product</a>

                    <div class="vr bg-white mx-2 d-none d-lg-block"></div>

                    
                    @guest
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    @endguest

                    
                    @auth
                        <a class="nav-link" href="{{ route('product.create') }}">Create Product</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <a role="button" class="nav-link"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                        </form>
                    @endauth

                </div>
            </div>
        </div>
    </nav>

    <header class="masthead bg-primary text-white text-center py-4">
        <div class="container d-flex align-items-center flex-column">
            <h2>@yield('subtitle', 'A Laravel EAFIT App')</h2>
        </div>
    </header>
    <!-- header -->

    <div class="container my-4 flex-fill">
        @yield('content')
    </div>

    <!-- footer -->
    <footer>
        <div class="copyright py-4 text-center text-white">
            <div class="container">
                <small>
                    Copyright - <a class="text-reset fw-bold text-decoration-none" target="_blank"
                    href="https://twitter.com/danielgarax">
                    Daniel Correa
                    </a>
                </small>
            </div>
        </div>
  <!-- footer -->
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
        </script>
    </footer>
</body>

</html>