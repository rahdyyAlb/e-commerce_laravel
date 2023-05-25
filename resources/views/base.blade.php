<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css"  rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
<div class="header-wrapper">
    <div class="container">
        <header role="banner">
            <div class="row row-with-vspace site-branding">
                <div class="col-sm-2  site-title">
                    <h1 class="site-title-heading">
                        <a href="{{ route('products.index') }} "title="Example Home" rel="home"><img src="{{ asset('images/it-akademy-sanscravate-transp-1585925610-2.png') }}" class="img-responsive home" border="0" ></a>
                    </h1>
                </div><!-- Close col sm2-->
                <div class="col-sm-10 page-header-top-right">
                    <div class="site-description">
                        <div class="row">
                            <div class="col-sm-8" style="text-align: center;">
                                <h1>DSF_27 E-commerce</h1><br>

                            </div> <!-- Close col sm8-->
                                            @auth
                                                <ul>
                                                    <li>Bonjour, {{ Auth::user()->name }}</li>
                                                    <li>
                                                        <a href="{{ route('logout') }}" class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion</a>
                                                    </li>
                                                    <li>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                        <a href="{{ route('moncompte') }}">Mon compte</a>
                                                    </li>
                                                    <li>
                                                        <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
                                                    </li>
                                                </ul>
                                            @else
                                                <a href="{{ route('login') }}" class="btn btn-secondary">Se connecter</a>
                                        @endauth
                        </div>
                    </div>
            </div>
                <nav class="navbar navbar-dark bg-dark">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="#">Navbar</a>

                    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">Disabled</a>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </nav>

        </header>
    </div><!--.container-->
</div><!--.header-wrapper-->

@yield('content')
<footer class="text-center text-white mt-4" style="background-color: #607D8B">
    <hr class="text-dark">
    <div class="container">
        <a href="/rgpd">RGPD</a>
        <section class="mb-3">
            <a
                class="btn-link btn-floating btn-lg text-white"
                href="#!"
                role="button"
                data-mdb-ripple-color="dark"
            ><i class="fab fa-facebook-f"></i
                ></a>
            <a
                class="btn-link btn-floating btn-lg text-white"
                href="#!"
                role="button"
                data-mdb-ripple-color="dark"
            ><i class="fab fa-twitter"></i
                ></a>
            <a
                class="btn-link btn-floating btn-lg text-white"
                href="#!"
                role="button"
                data-mdb-ripple-color="dark"
            ><i class="fab fa-google"></i
                ></a>
            <a
                class="btn-link btn-floating btn-lg text-white"
                href="#!"
                role="button"
                data-mdb-ripple-color="dark"
            ><i class="fab fa-instagram"></i
                ></a>
            <a
                class="btn-link btn-floating btn-lg text-white"
                href="#!"
                role="button"
                data-mdb-ripple-color="dark"
            ><i class="fab fa-youtube"></i
                ></a>
            <a
                class="btn-link btn-floating btn-lg text-white"
                href="#!"
                role="button"
                data-mdb-ripple-color="dark"
            ><i class="fab fa-github"></i
                ></a>
        </section>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2); text-color: #E0E0E0">
        © 2022 Copyright:
        <a class="text-white" href="#">DFS_27</a>
    </div>
    <!-- Copyright -->
</footer>
</body>
</html>
