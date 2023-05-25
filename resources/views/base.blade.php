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
                        <a href="http://www.inforest.com/" title="Example Home" rel="home"><img src="http://www.inforest.com/wp-content/uploads/2016/02/generic_logo1.gif" class="img-responsive home" border="0" ></a>
                    </h1>

                </div><!-- Close col sm2-->
                <div class="col-sm-10 page-header-top-right">

                    <div class="site-description">
                        <div class="row">
                            <div class="col-sm-8">
                                <h1>This Is The Site Description</h1><br>
                            </div> <!-- Close col sm8-->
                            <div class="col-sm-4">
                                <div class="pull-right">
                                    <div id="simple-social-icons-3" class="widget simple-social-icons"><ul class="alignleft"><li class="social-facebook"><a href="https://www.facebook.com/" target="_blank">&#xe606;</a></li><li class="social-instagram"><a href="https://www.instagram.com/" target="_blank">&#xe600;</a></li><li class="social-twitter"><a href="https://www.instagram.com/" target="_blank">&#xe607;</a></li><li class="social-youtube"><a href="https://www.youtube.com/" target="_blank">&#xe60f;</a></li></ul></div>
                                </div>
                                <div class="clearfix"></div>

                            </div><!-- Close col sm4-->
                        </div><!-- Close col row-->

                    </div><!-- Close col site description-->


                    <div class="row main-navigation">
                        <div class="col-md-12">

                            <nav class="navbar navbar-default" role="navigation">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-primary-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="collapse navbar-collapse navbar-primary-collapse">
                                    <ul id="menu-main-menu" class="nav navbar-nav"><li id="menu-item-28" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-28"><a href="#">Home</a></li>
                                        <li id="menu-item-29" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-29 dropdown" data-dropdown="dropdown"><a href="#about-us/" class="dropdown-toggle" data-toggle="dropdown">About <span class="caret"></span> </a>
                                            <ul class="sub-menu dropdown-menu">
                                                <li id="menu-item-62" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-62"><a href="#about-us/faqs/">FAQs</a></li>
                                                <li id="menu-item-30" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-30"><a href="#about-us/mission/">Mission</a></li>
                                                <li id="menu-item-31" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-31"><a href="#about-us/company/">Company</a></li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-35" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-15 current_page_item menu-item-35 active active"><a href="#locations/">Locations</a></li>
                                        <li id="menu-item-37" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-37"><a href="#our-menu/">Menu</a></li>
                                        <li id="menu-item-40" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-40"><a href="#category/events/">Events</a></li>

                                        <li id="menu-item-36" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-36"><a href="#news/">News</a></li>

                                        <li id="menu-item-32" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-32"><a href="#contact-f27/">Contact</a></li>
                                    </ul>


                                </div><!--.navbar-collapse-->
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

    <!--Call to action-->
    <div class="pt-4 pb-2">
        <a class="btn btn-outline-white footer-cta mx-2" href="https://mdbootstrap.com/docs/jquery/getting-started/download/" target="_blank" role="button">Download MDB
            <i class="fas fa-download ms-2"></i>
        </a>
        <a class="btn btn-outline-white footer-cta mx-2" href="https://mdbootstrap.com/education/bootstrap/" target="_blank" role="button">Start free tutorial
            <i class="fas fa-graduation-cap ms-2"></i>
        </a>
    </div>
    <!--/.Call to action-->

    <hr class="text-dark">

    <div class="container">
        <!-- Section: Social media -->
        <section class="mb-3">

            <!-- Facebook -->
            <a
                class="btn-link btn-floating btn-lg text-white"
                href="#!"
                role="button"
                data-mdb-ripple-color="dark"
            ><i class="fab fa-facebook-f"></i
                ></a>

            <!-- Twitter -->
            <a
                class="btn-link btn-floating btn-lg text-white"
                href="#!"
                role="button"
                data-mdb-ripple-color="dark"
            ><i class="fab fa-twitter"></i
                ></a>

            <!-- Google -->
            <a
                class="btn-link btn-floating btn-lg text-white"
                href="#!"
                role="button"
                data-mdb-ripple-color="dark"
            ><i class="fab fa-google"></i
                ></a>

            <!-- Instagram -->
            <a
                class="btn-link btn-floating btn-lg text-white"
                href="#!"
                role="button"
                data-mdb-ripple-color="dark"
            ><i class="fab fa-instagram"></i
                ></a>

            <!-- YouTube -->
            <a
                class="btn-link btn-floating btn-lg text-white"
                href="#!"
                role="button"
                data-mdb-ripple-color="dark"
            ><i class="fab fa-youtube"></i
                ></a>
            <!-- Github -->
            <a
                class="btn-link btn-floating btn-lg text-white"
                href="#!"
                role="button"
                data-mdb-ripple-color="dark"
            ><i class="fab fa-github"></i
                ></a>
        </section>
        <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2); text-color: #E0E0E0">
        © 2022 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
</footer>
</body>
</html>
