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
                            <div class="col-sm-4">
                                <div class="pull-right">
                                    <div id="simple-social-icons-3" class="widget simple-social-icons"><ul class="alignleft">
                                            @auth
                                                <p>Bonjour, {{ Auth::user()->name }}</p>
                                                <a href="{{ route('logout') }}" class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                                <a href="{{ route('moncompte') }}">Mon compte</a>
                                            @else
                                                <a href="{{ route('login') }}" class="btn btn-secondary">Se connecter</a>
                                        @endauth
                                    </div>
                                    @if(Auth::check())
                                        <div class="pull-right text-right">
                                            <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
                                        </div>
                                    @endif

                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row main-navigation">
                        <div class="col-md-12">
                            <nav class="navbar navbar-default" role="navigation">
                                <div class="navbar-header">
                                </div>
                            </nav>
                        </div>
                    </div><!--.main-navigation-->
                    <div class="sr-only">
                        <a href="#content" title="Skip to content">Skip to content</a>
                    </div>
                </div>
            </div><!--row .site-branding-->
        </header>
    </div><!--.container-->
</div><!--.header-wrapper-->

@yield('content')
<footer class="text-center text-white mt-4" style="background-color: #607D8B">
    <hr class="text-dark">
    <div class="container">
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
