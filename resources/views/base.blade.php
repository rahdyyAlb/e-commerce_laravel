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
                <div  style="text-align: center;">
                    <h1>DSF_27 E-commerce</h1>
                </div> <!-- Close col sm8-->

                <nav class="navbar navbar-expand-lg navbar-light ">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <img src="{{ asset('images/it-akademy-sanscravate-transp-1585925610-2.png') }}" class="img-responsive home navbar-brand" border="0" >
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('products.index') }}">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/rgpd">RGPD</a>
                            </li>
                        @auth
                            <li class="nav-item">
                                <a href="{{ route('moncompte') }}" class="nav-link">Mon compte</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('products.create') }}" class="nav-link">Create New Product</a>
                            </li>
                                <li class="nav-item">
                                    <a href="{{ route('products.admin') }}" class="nav-link">Gestion des produit</a>
                                </li>
                            <li class="nav-item">
                                <a href="{{ route('logout') }}" id="deconnexion" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                            </li>
                            @else
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link">Se connecter</a>
                            </li>
                            @endauth
                        </ul>
                        <div id="panier">
                           <a href="{{ route('card.index') }}">
                               <img src="{{ asset('images/logo_panier.png') }}" alt="Logo Panier">
                           </a>
                            <span id="nombre-articles">{{ $cartCount }}</span>
                        </div>

                    </div>
                </nav>
            </div><!--row .site-branding-->
        </header>
    </div><!--.container-->
</div><!--.header-wrapper-->
<section class="product">

@yield('content')
</section>
<footer class="text-center text-white mt-4" style="background-color: #607D8B">
    <hr class="text-dark">
    <div class="container">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem corporis doloremque ducimus exercitationem
            molestiae molestias quo, veritatis? Alias at blanditiis delectus molestias quae tenetur totam voluptate
            voluptatibus. Asperiores ea iure minima officiis quidem. In, odio, rem. Aperiam blanditiis consectetur
            consequatur deserunt doloribus dolorum ea earum eius eveniet laudantium libero nemo omnis, perspiciatis
            quisquam reiciendis rerum, sint, vero! Mollitia, quae ullam.</p>
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
