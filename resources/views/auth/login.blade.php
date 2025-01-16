<!DOCTYPE html>
<html lang="zxx">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>American Football &amp; Sports News HTML Template - Login or Register</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sports Club, League and News HTML Template">
    <meta name="author" content="Dan Fisher">
    <meta name="keywords" content="sports club news HTML template">

    <!-- Favicons
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('football/images/football/favicons/favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('football/images/football/favicons/favicon-120.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('football/images/football/favicons/favicon-152.png') }}">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,400;0,700;0,800;1,700&amp;family&#x3D;Roboto:ital@0;1&amp;display&#x3D;swap" rel="stylesheet">

    <!-- CSS -->
    <!-- Vendor CSS -->
    <link href="{{ asset('football/vendor/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('football/fonts/font-awesome/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('football/fonts/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('football/vendor/magnific-popup/dist/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('football/vendor/slick/slick.css') }}" rel="stylesheet">

    <!-- Template CSS -->
    <link href="{{ asset('football/css/style-football.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('football/css/custom.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body data-template="template-football">

<div class="site-wrapper clearfix">
    <div class="site-overlay"></div>

    <!-- Header
    ================================================== -->

    <!-- Header Mobile -->
    <div class="header-mobile clearfix" id="header-mobile">
        <div class="header-mobile__logo">
{{--            <a href="_football_index.html"><img src="assets/images/football/logo.png" srcset="assets/images/football/logo@2x.png 2x" alt="Alchemists" class="header-mobile__logo-img"></a>--}}
        </div>
        <div class="header-mobile__inner">
            <a id="header-mobile__toggle" class="burger-menu-icon"><span class="burger-menu-icon__line"></span></a>
            <span class="header-mobile__search-icon" id="header-mobile__search-icon"></span>
        </div>
    </div>

    <!-- Header Desktop -->
    <header class="header header--layout-2">

        <!-- Header Top Bar -->
        <div class="header__top-bar clearfix">
            <div class="container">
                <div class="header__top-bar-inner">
                    <!-- Account Navigation -->
                    <ul class="nav-account">
                        <li class="nav-account__item">Your Account</li>
                        <li class="nav-account__item"><a href="#">Currency: <span class="highlight">USD</span></a>
                            <ul class="main-nav__sub">
                                <li><a href="#">USD</a></li>
                                <li><a href="#">EUR</a></li>
                                <li><a href="#">GBP</a></li>
                            </ul>
                        </li>
                        <li class="nav-account__item"><a href="#">Language: <span class="highlight">EN</span></a>
                            <ul class="main-nav__sub">
                                <li><a href="#">English</a></li>
                                <li><a href="#">Spanish</a></li>
                                <li><a href="#">French</a></li>
                                <li><a href="#">German</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- Account Navigation / End -->
                </div>
            </div>
        </div>
        <!-- Header Top Bar / End -->

        <!-- Header Secondary -->
        <div class="header__secondary">
            <div class="container">

                <ul class="info-block info-block--header">
                    <li class="info-block__item info-block__item--contact-primary">
                        <svg role="img" class="df-icon df-icon--football-helmet">
                            <use xlink:href="assets/images/football/icons-football.svg#football-helmet"/>
                        </svg>
                        <h6 class="info-block__heading">Join Our Team!</h6>
                        <a class="info-block__link" href="mailto:tryouts@alchemists.com">tryouts@alchemists.com</a>
                    </li>
                    <li class="info-block__item info-block__item--contact-secondary">
                        <svg role="img" class="df-icon df-icon--football-ball">
                            <use xlink:href="assets/images/football/icons-football.svg#football-ball"/>
                        </svg>
                        <h6 class="info-block__heading">Contact Us</h6>
                        <a class="info-block__link" href="mailto:info@alchemists.com">info@alchemists.com</a>
                    </li>
                    <li class="info-block__item info-block__item--shopping-cart js-info-block__item--onhover">
                        <a href="#" class="info-block__link-wrapper">
                            <div class="df-icon-stack df-icon-stack--bag">
                                <svg role="img" class="df-icon df-icon--bag">
                                    <use xlink:href="assets/images/icons-basket.svg#bag"/>
                                </svg>
                                <svg role="img" class="df-icon df-icon--bag-handle">
                                    <use xlink:href="assets/images/icons-basket.svg#bag-handle"/>
                                </svg>
                            </div>
                            <h6 class="info-block__heading">Your Bag (8 items)</h6>
                            <span class="info-block__cart-sum">$256,30</span>
                        </a>

                        <!-- Dropdown Shopping Cart -->
                        <ul class="header-cart">

                            <li class="header-cart__item">
                                <figure class="header-cart__product-thumb">

                                </figure>
                                <div class="header-cart__inner">
                                    <h5 class="header-cart__product-name"><a href="_football_shop-product.html">Sundown Sneaker</a></h5>
                                    <span class="header-cart__product-cat">Sneakers</span>
                                    <div class="header-cart__product-ratings">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star empty"></i>
                                    </div>
                                    <div class="header-cart__product-sum">
                                        <span class="header-cart__product-price">$28.00</span> x <span class="header-cart__product-count">2</span>
                                    </div>
                                    <div class="fas fa-times header-cart__close"></div>
                                </div>
                            </li>
                            <li class="header-cart__item">
                                <figure class="header-cart__product-thumb">
                                    <a href="_football_shop-product.html">
                                        <img src="assets/images/samples/cart-sm-2.jpg" alt="">
                                    </a>
                                </figure>
                                <div class="header-cart__inner">
                                    <h5 class="header-cart__product-name"><a href="_football_shop-product.html">Atlantik Sneaker</a></h5>
                                    <span class="header-cart__product-cat">Sneakers</span>
                                    <div class="header-cart__product-ratings">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="header-cart__product-sum">
                                        <span class="header-cart__product-price">$30.00</span> x <span class="header-cart__product-count">4</span>
                                    </div>
                                    <div class="fas fa-times header-cart__close"></div>
                                </div>
                            </li>
                            <li class="header-cart__item">
                                <figure class="header-cart__product-thumb">
                                    <a href="_football_shop-product.html">
                                        <img src="assets/images/samples/cart-sm-3.jpg" alt="">
                                    </a>
                                </figure>
                                <div class="header-cart__inner">
                                    <h5 class="header-cart__product-name"><a href="_football_shop-product.html">Aquarium Sneaker</a></h5>
                                    <span class="header-cart__product-cat">Sneakers</span>
                                    <div class="header-cart__product-ratings">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star empty"></i>
                                        <i class="fas fa-star empty"></i>
                                    </div>
                                    <div class="header-cart__product-sum">
                                        <span class="header-cart__product-price">$28.00</span> x <span class="header-cart__product-count">1</span>
                                    </div>
                                    <div class="fas fa-times header-cart__close"></div>
                                </div>
                            </li>

                            <li class="header-cart__item header-cart__item--subtotal">
                                <span class="header-cart__subtotal">Cart Subtotal</span>
                                <span class="header-cart__subtotal-sum">$282.00</span>
                            </li>
                            <li class="header-cart__item header-cart__item--action">
                                <a href="_football_shop-cart.html" class="btn btn-default btn-block">Go to Cart</a>
                                <a href="_football_shop-checkout.html" class="btn btn-primary-inverse btn-block">Checkout</a>
                            </li>
                        </ul>
                        <!-- Dropdown Shopping Cart / End -->

                    </li>
                </ul>


                <!-- Banner 420x60 / End -->

            </div>
        </div>
        <!-- Header Secondary / End -->

        <!-- Header Primary -->
        <div class="header__primary">
            <div class="container">
                <div class="header__primary-inner">

                    <!-- Header Logo -->

                    <!-- Header Logo / End -->

                    <!-- Main Navigation -->
                    <nav class="main-nav clearfix">

                        <!-- Header Search Form -->
                        <div class="header-search-form header-search-form--right">
                            <form action="#" id="mobile-search-form" class="search-form">
                                <input type="text" class="form-control header-mobile__search-control" value="" placeholder="Enter your search here...">
                                <button type="submit" class="header-mobile__search-submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                        <!-- Header Search Form / End -->

                    </nav>
                    <!-- Main Navigation / End -->

                </div>
            </div>
        </div>
        <!-- Header Primary / End -->

    </header>
    <!-- Header / End -->

    <!-- Page Heading
    ================================================== -->
    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <h1 class="page-heading__title">Login or <span class="highlight">Register</span></h1>
                    <ol class="page-heading__breadcrumb breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Login or Register</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Heading / End -->


    <!-- Content
    ================================================== -->
    <div class="site-content">
        <div class="container">

            <div class="row">

                <div class="col-lg-6">

                    <!-- Login -->
                    <div class="card">
                        <div class="card__header">
                            <h4>Login to your Account</h4>
                        </div>
                        <div class="card__content">

                            <!-- Login Form -->
                            <form id="login_form">
                                <div class="form-group">
                                    <label for="register-name">Your Email</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email address...">
                                </div>
                                <div class="form-group">
                                    <label for="register-password">Your Password</label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password...">
                                </div>
                            </form>
                            <div class="form-group form-group--submit">
                                <a onclick="loginPost()" class="btn btn-primary-inverse btn-lg btn-block">Sign in to your account</a>
                            </div>
                            <!-- Login Form / End -->

                        </div>
                    </div>
                    <!-- Login / End -->
                </div>

                <div class="col-lg-6">

                    <!-- Register -->
                    <div class="card">
                        <div class="card__header">
                            <h4>Register Now</h4>
                        </div>
                        <div class="card__content">

                            <!-- Register Form -->
                            <form id="register_form" type="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Your Email</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name...">
                                </div>
                                <div class="form-group">
                                    <label for="register-name">Your Email</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email address...">
                                </div>
                                <div class="form-group">
                                    <label for="register-password">Your Password</label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password...">
                                </div>
                                <div class="form-group">
                                    <label for="password_confirmation">Repeat Password</label>
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Repeat your password...">
                                </div>
                            </form>
                            <div class="form-group form-group--submit">
                                <a onclick="registerPost()" class="btn btn-default btn-lg btn-block">Create Your Account</a>
                            </div>
                            <!-- Register Form / End -->

                        </div>
                    </div>
                    <!-- Register / End -->
                </div>

            </div>
        </div>
    </div>

    <!-- Content / End -->


    <!-- Footer
    ================================================== -->
    <footer id="footer" class="footer">

        <!-- Footer Info -->
        <div class="footer-info">
            <div class="container">

                <div class="footer-info__inner">
                    <!-- Footer Logo -->
                    <div class="footer-logo footer-logo--has-txt">
                        <a href="_football_index.html">
                            <img src="assets/images/football/logo-footer.png" srcset="assets/images/football/logo-footer@2x.png 2x" alt="The Alchemists" class="footer-logo__img">
                            <div class="footer-logo__heading">
                                <h5 class="footer-logo__txt">The Alchemists</h5>
                                <span class="footer-logo__tagline">Elric Bros School</span>
                            </div>
                        </a>
                    </div>
                    <!-- Footer Logo / End -->

                    <!-- Info Block -->
                    <div class="info-block info-block--horizontal">
                        <div class="info-block__item info-block__item--helmet">
                            <svg role="img" class="df-icon df-icon--football-helmet">
                                <use xlink:href="assets/images/football/icons-football.svg#football-helmet"/>
                            </svg>
                            <h6 class="info-block__heading">Join Our Team!</h6>
                            <a class="info-block__link" href="mailto:tryouts@alchemists.com">tryouts@alchemists.com</a>
                        </div>
                        <div class="info-block__item">
                            <svg role="img" class="df-icon df-icon--football-ball">
                                <use xlink:href="assets/images/football/icons-football.svg#football-ball"/>
                            </svg>
                            <h6 class="info-block__heading">Contact Us</h6>
                            <a class="info-block__link" href="mailto:info@alchemists.com">info@alchemists.com</a>
                        </div>
                        <div class="info-block__item info-block__item--social">
                            <ul class="social-links social-links--circle">
                                <li class="social-links__item">
                                    <a href="#" class="social-links__link"><i class="fab fa-facebook"></i></a>
                                </li>
                                <li class="social-links__item">
                                    <a href="#" class="social-links__link"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li class="social-links__item">
                                    <a href="#" class="social-links__link"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li class="social-links__item">
                                    <a href="#" class="social-links__link"><i class="fas fa-rss"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Info Block / End -->

                </div>
            </div>
        </div>
        <!-- Footer Info / End -->

        <!-- Footer Widgets -->
        <div class="footer-widgets">
            <div class="footer-widgets__inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="footer-col-inner">

                                <!-- Widget: Popular Posts / End -->
                                <div class="widget widget--footer widget-popular-posts">
                                    <h4 class="widget__title">Popular News</h4>
                                    <div class="widget__content">
                                        <ul class="posts posts--simple-list posts--simple-list-numbered">

                                            <li class="posts__item posts__item--category-1">
                                                <div class="posts__inner">
                                                    <div class="posts__cat">
                                                        <span class="label posts__cat-label">The Team</span>
                                                    </div>
                                                    <h6 class="posts__title posts__title--color-hover"><a href="#">Alchemists Stadium will have a max capacity for 500.000 fans</a></h6>
                                                    <time datetime="2018-09-22" class="posts__date">September 22nd, 2018</time>
                                                </div>
                                            </li>
                                            <li class="posts__item posts__item--category-2">
                                                <div class="posts__inner">
                                                    <div class="posts__cat">
                                                        <span class="label posts__cat-label">Injuries</span>
                                                    </div>
                                                    <h6 class="posts__title posts__title--color-hover"><a href="#">Alchemists coach on Jake Summer&#x27;s injury &quot;It looks really bad&quot;</a></h6>
                                                    <time datetime="2018-09-22" class="posts__date">August 5th, 2018</time>
                                                </div>
                                            </li>
                                            <li class="posts__item posts__item--category-3">
                                                <div class="posts__inner">
                                                    <div class="posts__cat">
                                                        <span class="label posts__cat-label">The League</span>
                                                    </div>
                                                    <h6 class="posts__title posts__title--color-hover"><a href="#">The Clovers defense must reinvent itself without Adam Howlett</a></h6>
                                                    <time datetime="2018-09-22" class="posts__date">September 16th, 2018</time>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <!-- Widget: Popular Posts / End -->

                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="footer-col-inner">

                                <!-- Widget: Most Commented / End -->
                                <div class="widget widget--footer widget-popular-posts">
                                    <h4 class="widget__title">Most Commented</h4>
                                    <div class="widget__content">
                                        <ul class="posts posts--simple-list">

                                            <li class="posts__item posts__item--category-1">
                                                <figure class="posts__thumb posts__thumb--hover">
                                                    <a href="#"><img src="assets/images/samples/post-img8-xxs.jpg" alt=""></a>
                                                </figure>
                                                <div class="posts__inner">
                                                    <div class="posts__cat">
                                                        <span class="label posts__cat-label">The Team</span>
                                                    </div>
                                                    <h6 class="posts__title posts__title--color-hover"><a href="#">The perfect breakfast for the team&#x27;s high intensity</a></h6>
                                                </div>
                                                <span class="posts__comments"><i class="icon-bubble"></i> 39</span> <time datetime="2017-09-22" class="posts__date">October 16th, 2018</time>
                                            </li>
                                            <li class="posts__item posts__item--category-2">
                                                <figure class="posts__thumb posts__thumb--hover">
                                                    <a href="#"><img src="assets/images/football/samples/post-img25-xxs.jpg" alt=""></a>
                                                </figure>
                                                <div class="posts__inner">
                                                    <div class="posts__cat">
                                                        <span class="label posts__cat-label">Injuries</span>
                                                    </div>
                                                    <h6 class="posts__title posts__title--color-hover"><a href="#">Alchemists coach on Summer&#x27;s injury &quot;It looks really bad&quot;</a></h6>
                                                </div>
                                                <span class="posts__comments"><i class="icon-bubble"></i> 26</span> <time datetime="2017-09-22" class="posts__date">September 6th, 2018</time>
                                            </li>
                                            <li class="posts__item posts__item--category-1">
                                                <figure class="posts__thumb posts__thumb--hover">
                                                    <a href="#"><img src="assets/images/samples/post-img10-xxs.jpg" alt=""></a>
                                                </figure>
                                                <div class="posts__inner">
                                                    <div class="posts__cat">
                                                        <span class="label posts__cat-label">The Team</span>
                                                    </div>
                                                    <h6 class="posts__title posts__title--color-hover"><a href="#">The team is gonna a trip to the beach for a samll vacation</a></h6>
                                                </div>
                                                <span class="posts__comments"><i class="icon-bubble"></i> 22</span> <time datetime="2017-09-22" class="posts__date">July 12th, 2018</time>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <!-- Widget: Most Commented / End -->

                            </div>
                        </div>
                        <div class="clearfix visible-sm"></div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="footer-col-inner">

                                <!-- Widget: Twitter -->
                                <div class="widget widget--footer widget-twitter">
                                    <h4 class="widget__title">Twitter</h4>
                                    <div class="widget__content">
                                        <ul class="twitter-feed" data-count="1">
                                            <li>Please wait...</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Widget: Twitter / End -->

                                <!-- Widget: Tagcloud -->
                                <div class="widget widget--footer widget-tagcloud">
                                    <h4 class="widget__title">Tags Cloud</h4>
                                    <div class="widget__content">
                                        <div class="tagcloud">
                                            <a href="#" class="btn btn-default btn-xs btn-outline btn-sm">Results</a>
                                            <a href="#" class="btn btn-default btn-xs btn-outline btn-sm">Incorporations</a>
                                            <a href="#" class="btn btn-default btn-xs btn-outline btn-sm">Finals</a>
                                            <a href="#" class="btn btn-default btn-xs btn-outline btn-sm">Prospects</a>
                                            <a href="#" class="btn btn-default btn-xs btn-outline btn-sm">Tryouts</a>
                                            <a href="#" class="btn btn-default btn-xs btn-outline btn-sm">WMN Divison</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Widget: Tagcloud / End -->

                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="footer-col-inner">

                                <!-- Widget: Contact / End -->
                                <div class="widget widget--footer widget-contact">
                                    <h4 class="widget__title">Quick Contact</h4>
                                    <div class="widget__content">
                                        <form action="#" class="contact-form">
                                            <div class="form-group form-group--xs">
                                                <input type="email" class="form-control input-sm" id="contact-form-email" placeholder="Enter your email here...">
                                            </div>
                                            <div class="form-group form-group--xs">
                                                <textarea class="form-control input-sm" name="contact-form-message" rows="6" placeholder="Your message..."></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary-inverse btn-sm btn-block">Send Your Message</button>
                                        </form>
                                    </div>
                                </div>
                                <!-- Widget: Contact / End -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Footer Widgets / End -->

        <!-- Footer Secondary -->
        <div class="footer-secondary">
            <div class="container">
                <div class="footer-secondary__inner">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="footer-copyright"><a href="_football_index.html">The Alchemists</a> 2020 &nbsp; | &nbsp; All Rights Reserved</div>
                        </div>
                        <div class="col-md-8">
                            <ul class="footer-nav footer-nav--right footer-nav--sm">
                                <li class="footer-nav__item"><a href="_football_index.html">Home</a></li>
                                <li class="footer-nav__item"><a href="_football_features-shortcodes.html">Features</a></li>
                                <li class="footer-nav__item"><a href="_football_team-standings.html">Statistics</a></li>
                                <li class="footer-nav__item"><a href="_football_team-overview.html">The Team</a></li>
                                <li class="footer-nav__item"><a href="_football_blog-3.html">News</a></li>
                                <li class="footer-nav__item"><a href="_football_shop-grid.html">Shop</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Secondary / End -->
    </footer>
    <!-- Footer / End -->

</div>

<!-- Javascript Files
================================================== -->
<!-- Core JS -->
<script src="{{ asset('football/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('football/vendor/jquery/jquery-migrate.min.js') }}"></script>
<script src="{{ asset('football/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('football/js/core.js') }}"></script>

<!-- Vendor JS -->

<!-- Template JS -->
<script src="{{ asset('football/js/init.js') }}"></script>
<script src="{{ asset('football/js/custom.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    function loginPost(){
        var formData = new FormData(document.getElementById('login_form'))
        $.ajax({
            url: '{{route('login')}}',
            type: 'POST',
            headers: {'X-CSRF-TOKEN': "{{csrf_token()}} "},
            processData: false,
            contentType: false,
            data: formData,
            success: () => {
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: 'Successfully logged in',
                    showConfirmButton: true,
                    confirmButtonText: 'Log In',
                }).then((result)=>{
                    if(result.value){
                        window.location.href = '/login'
                    }
                })
            },
            error: (xhr, status, error) => {
                console.error(xhr,status,error);

                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    html: errorMap(xhr.responseJSON.errors),  // Hatanın detaylarını gösterir
                    footer: `An error occurred: ${xhr.status} - ${xhr.statusText}`,
                    showConfirmButton: true,
                    confirmButtonText: "Ok",
                });
            }
        })
    }
</script>
<script>
    function registerPost(){
        var formData = new FormData(document.getElementById('register_form'))
        $.ajax({
            url: '{{route('register')}}',
            type: 'POST',
            headers: {'X-CSRF-TOKEN': "{{csrf_token()}} "},
            processData: false,
            contentType: false,
            data: formData,
            success: () => {
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: 'Successfully registered',
                    showConfirmButton: true,
                    confirmButtonText: 'Log In',
                }).then((result)=>{
                    if(result.value){
                        window.location.href = '/login'
                    }
                })
            },
            error: (xhr, status, error) => {
                console.error(xhr,status,error);

                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    html: errorMap(xhr.responseJSON.errors),  // Hatanın detaylarını gösterir
                    footer: `An error occurred: ${xhr.status} - ${xhr.statusText}`,
                    showConfirmButton: true,
                    confirmButtonText: "Ok",
                });
            }
        })
    }
</script>
</body>
</html>
