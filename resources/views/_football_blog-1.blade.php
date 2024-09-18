<!DOCTYPE html>
<html lang="zxx">
<head>

	<!-- Basic Page Needs
	================================================== -->
	<title>American Football &amp; Sports News HTML Template - News V1</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Sports Club, League and News HTML Template">
	<meta name="author" content="Dan Fisher">
	<meta name="keywords" content="sports club news HTML template">

    <!-- Favicons -->
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


</head>
<body data-template="template-football">
	<div class="site-wrapper clearfix">
		<div class="site-overlay"></div>

		<!-- Header
		================================================== -->

		<!-- Header Mobile -->
		<div class="header-mobile clearfix" id="header-mobile">
			<div class="header-mobile__logo">
				<a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_index.html"><img src="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/assets/images/football/logo.png" srcset="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/assets/images/football/logo@2x.png 2x" alt="Alchemists" class="header-mobile__logo-img"></a>
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
							<li class="nav-account__item"><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_shop-account.html">Your Account</a></li>
							<li class="nav-account__item nav-account__item--wishlist"><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_shop-wishlist.html">Wishlist <span class="highlight">8</span></a></li>
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
							<li class="nav-account__item nav-account__item--logout"><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_shop-login.html">Logout</a></li>
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
										<a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_shop-product.html">
											<img src="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/assets/images/samples/cart-sm-1.jpg" alt="">
										</a>
									</figure>
									<div class="header-cart__inner">
										<h5 class="header-cart__product-name"><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_shop-product.html">Sundown Sneaker</a></h5>
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
										<a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_shop-product.html">
											<img src="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/assets/images/samples/cart-sm-2.jpg" alt="">
										</a>
									</figure>
									<div class="header-cart__inner">
										<h5 class="header-cart__product-name"><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_shop-product.html">Atlantik Sneaker</a></h5>
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
										<a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_shop-product.html">
											<img src="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/assets/images/samples/cart-sm-3.jpg" alt="">
										</a>
									</figure>
									<div class="header-cart__inner">
										<h5 class="header-cart__product-name"><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_shop-product.html">Aquarium Sneaker</a></h5>
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
									<a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_shop-cart.html" class="btn btn-default btn-block">Go to Cart</a>
									<a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_shop-checkout.html" class="btn btn-primary-inverse btn-block">Checkout</a>
								</li>
							</ul>
							<!-- Dropdown Shopping Cart / End -->

						</li>
					</ul>

					<!-- Banner 420x60 -->
					<div class="header-banner">
						<a href="#"><img src="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/assets/images/football/banner-420x60.jpg" alt=""></a>
					</div>
					<!-- Banner 420x60 / End -->

				</div>
			</div>
			<!-- Header Secondary / End -->

			<!-- Header Primary -->
			<div class="header__primary">
				<div class="container">
					<div class="header__primary-inner">

						<!-- Header Logo -->
						<div class="header-logo">
							<a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_index.html"><img src="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/assets/images/football/logo.png" srcset="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/assets/images/football/logo@2x.png 2x" alt="Alchemists" class="header-logo__img"></a>
						</div>
						<!-- Header Logo / End -->

						<!-- Main Navigation -->
						<nav class="main-nav clearfix">
							<ul class="main-nav__list">
								<li class=""><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_index.html">Home</a>
									<ul class="main-nav__sub">
										<li class=""><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_index.html">Home - version 1</a></li>
										<li class=""><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_index-2.html">Home - version 2</a></li>
									</ul>
								</li>
								<li class=""><a href="#">Features</a>
									<div class="main-nav__megamenu clearfix">
										<ul class="col-lg-2 col-md-3 col-12 main-nav__ul">
											<li class="main-nav__title">Features</li>
											<li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_features-shortcodes.html">Shortcodes</a></li>
											<li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_features-typography.html">Typography</a></li>
											<li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_features-widgets-blog.html">Widgets - Blog</a></li>
											<li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_features-widgets-shop.html">Widgets - Shop</a></li>
											<li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_features-widgets-sports.html">Widgets - Sports</a></li>
											<li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_features-404.html">404 Error Page</a></li>
											<li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_features-search-results.html">Search Results</a></li>
											<li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_page-contacts.html">Contact Us</a></li>
										</ul>
										<ul class="col-lg-2 col-md-3 col-12 main-nav__ul">
											<li class="main-nav__title">Other Pages</li>
											<li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_page-sponsors.html">Sponsors</a></li>
											<li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_page-faqs.html">FAQs</a></li>
											<li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_staff-single.html">Staff Member</a></li>
											<li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_shop-list.html">Shop Page</a></li>
											<li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_event-tournament.html">Tournament</a></li>
											<li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_shop-cart.html">Shopping Cart</a></li>
											<li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_shop-wishlist.html">Wishlist</a></li>
											<li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_shop-checkout.html">Checkout</a></li>
										</ul>
										<div class="col-lg-4 col-md-3 col-12">
											<ul class="posts posts--simple-list">
												<li class="posts__item posts__item--category-1">
													<figure class="posts__thumb">
														<a href="#"><img src="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/assets/images/samples/post-img8-xs.jpg" alt=""></a>
													</figure>
													<div class="posts__inner">
														<div class="posts__cat">
															<span class="label posts__cat-label">The Team</span>
														</div>
														<h6 class="posts__title"><a href="#">The perfect breakfast for the team&#x27;s high intensity</a></h6>
														<time datetime="2016-08-21" class="posts__date">October 16th, 2018</time>
													</div>
												</li>
												<li class="posts__item posts__item--category-2">
													<figure class="posts__thumb">
														<a href="#"><img src="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/assets/images/football/samples/post-img25-xs.jpg" alt=""></a>
													</figure>
													<div class="posts__inner">
														<div class="posts__cat">
															<span class="label posts__cat-label">Injuries</span>
														</div>
														<h6 class="posts__title"><a href="#">Alchemists coach on Summer&#x27;s injury &quot;It looks really bad&quot;</a></h6>
														<time datetime="2016-08-21" class="posts__date">September 6th, 2018</time>
													</div>
												</li>
												<li class="posts__item posts__item--category-1">
													<figure class="posts__thumb">
														<a href="#"><img src="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/assets/images/football/samples/post-img10-xs.jpg" alt=""></a>
													</figure>
													<div class="posts__inner">
														<div class="posts__cat">
															<span class="label posts__cat-label">The Team</span>
														</div>
														<h6 class="posts__title"><a href="#">The team is gonna a trip to the beach for a samll vacation</a></h6>
														<time datetime="2016-08-21" class="posts__date">July 12th, 2018</time>
													</div>
												</li>
											</ul>
										</div>
										<div class="col-lg-4 col-md-3 col-12">

											<div class="posts posts--tile">
												<div class="posts__item posts__item--tile posts__item--category-2 card">
													<figure class="posts__thumb effect-duotone effect-duotone--base">
														<img src="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/assets/images/football/samples/post-img2-tile-sm.jpg" alt="">
													</figure>
													<a href="#" class="posts__cta"></a>
													<div class="posts__inner">
														<div class="posts__cat">
															<span class="label posts__cat-label">Injuries</span>
														</div>
														<h6 class="posts__title"><a href="#">Jennifer T. Danvers has a sprained wrist and will be out for eight games</a></h6>
														<time datetime="2017-09-14" class="posts__date">September 14th, 2017</time>
														<footer class="posts__footer card__footer">
															<div class="post-author">
																<figure class="post-author__avatar">
																	<img src="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/assets/images/football/samples/avatar-6-xs.jpg" alt="Post Author Avatar">
																</figure>
																<div class="post-author__info">
																	<h4 class="post-author__name">Ginny Valentine</h4>
																</div>
															</div>
															<ul class="post__meta meta">
																<li class="meta__item meta__item--views">2369</li>
																<li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
																<li class="meta__item meta__item--comments"><a href="#">18</a></li>
															</ul>
														</footer>
													</div>
												</div>
											</div>

										</div>
									</div>
								</li>
								<li class=""><a href="#">The Team</a>
									<ul class="main-nav__sub">
										<li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_team-overview.html">Team</a>
											<ul class="main-nav__sub-2">
												<li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_team-overview.html">Overview</a></li>
												<li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_team-roster.html">Roster</a></li>
												<li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_team-standings.html">Standings</a></li>
												<li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_team-last-results.html">Latest Results</a></li>
												<li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_team-schedule.html">Schedule</a></li>
												<li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_team-gallery.html">Gallery</a>
													<ul class="main-nav__sub-2">
														<li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_team-gallery-album.html">Single Album</a></li>
													</ul>
												</li>
											</ul>
										</li>
										<li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_staff-single.html">Staff Member</a></li>
										<li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_event-overview.html">Event</a>
											<ul class="main-nav__sub-2">
												<li class=""><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_event-overview.html">Overview</a></li>
												<li class=""><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_event-box-score.html">Box Score</a></li>
												<li class=""><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_event-play-by-play.html">Play-by-Play</a></li>
												<li class=""><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_event-team-stats.html">Team Stats</a></li>
												<li class=""><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_event-news-recap.html">News Recap</a></li>
												<li class=""><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_event-videos.html">Videos</a></li>
											</ul>
										</li>
										<li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_event-tournament.html">Tournament</a></li>
									</ul>
								</li>
								<li class=""><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_player-overview.html">Player</a>
									<ul class="main-nav__sub">
										<li class=""><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_player-overview.html">Overview</a></li>
										<li class=""><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_player-stats.html">Full Statistics</a></li>
										<li class=""><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_player-bio.html">Biography</a></li>
										<li class=""><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_player-news.html">Related News</a></li>
										<li class=""><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_player-gallery.html">Gallery</a></li>
									</ul>
								</li>
								<li class="active"><a href="_football_blog-1.html">News</a>
									<ul class="main-nav__sub">
										<li class="active"><a href="_football_blog-1.html">News - version 1</a></li>
										<li class=""><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_blog-2.html">News - version 2</a></li>
										<li class=""><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_blog-3.html">News - version 3</a></li>
										<li class=""><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_blog-4.html">News - version 4</a></li>
										<li class=""><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_blog-5.html">News - version 5</a></li>
										<li><a href="#">Post</a>
											<ul class="main-nav__sub-2">
												<li class=""><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_blog-post-1.html">Single Post - version 1</a></li>
												<li class=""><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_blog-post-2.html">Single Post - version 2</a></li>
												<li class=""><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_blog-post-3.html">Single Post - version 3</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li class=""><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_shop-grid.html">Shop</a>
									<ul class="main-nav__sub">
										<li class=""><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_shop-grid.html">Shop - Grid</a></li>
										<li class=""><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_shop-list.html">Shop - List</a></li>
										<li class=""><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_shop-fullwidth.html">Shop - Full Width</a></li>
										<li class=""><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_shop-product.html">Single Product</a></li>
										<li class=""><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_shop-cart.html">Shopping Cart</a></li>
										<li class=""><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_shop-checkout.html">Checkout</a></li>
										<li class=""><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_shop-wishlist.html">Wishlist</a></li>
										<li class=""><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_shop-login.html">Login</a></li>
										<li class=""><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_shop-account.html">Account</a></li>
									</ul>
								</li>
							</ul>

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
						<h1 class="page-heading__title">News <span class="highlight">V1</span></h1>
						<ol class="page-heading__breadcrumb breadcrumb">
							<li class="breadcrumb-item"><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_index.html">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">News V1</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<!-- Page Heading / End -->


		<!-- Post Filter -->
		<div class="post-filter">
			<div class="container">
				<form action="#" class="post-filter__form clearfix">
					<div class="post-filter__select">
						<label class="post-filter__label">Category</label>
						<select class="cs-select cs-skin-border">
							<option value="" disabled selected>All Articles</option>
							<option value="all">All Articles</option>
							<option value="team">The Team</option>
							<option value="playoffs">Playoffs</option>
							<option value="injuries">Injuries</option>
						</select>
					</div>
					<div class="post-filter__select">
						<label class="post-filter__label">Filter By</label>
						<select class="cs-select cs-skin-border">
							<option value="" disabled selected>Article Date</option>
							<option value="date">Article Date</option>
							<option value="id">Article ID</option>
							<option value="comments">Last Comments</option>
							<option value="random">Random</option>
						</select>
					</div>
					<div class="post-filter__select">
						<label class="post-filter__label">Order</label>
						<select class="cs-select cs-skin-border">
							<option value="" disabled selected>Ascending</option>
							<option value="ascending">Ascending</option>
							<option value="descending">Descending</option>
						</select>
					</div>
					<div class="post-filter__select">
						<label class="post-filter__label">Author</label>
						<select class="cs-select cs-skin-border">
							<option value="" disabled selected>All Authors</option>
							<option value="all">All Authors</option>
							<option value="author1">James Spiegel</option>
							<option value="author2">Jessica Hoops</option>
							<option value="author3">Mark Johnson</option>
						</select>
					</div>
					<div class="post-filter__submit">
						<button type="submit" class="btn btn-primary-inverse btn-lg btn-block">Filter News</button>
					</div>
				</form>
			</div>
		</div>
		<!-- Post Filter / End -->

		<!-- Content
		================================================== -->
		<div class="site-content">
			<div class="container">

				<div class="row">
					<!-- Content -->
					<div class="content col-lg-8">

						<!-- Posts Grid -->
						<div class="posts posts--cards post-grid post-grid--2cols post-grid--fitRows row">

							<div class="post-grid__item col-6">
								<div class="posts__item posts__item--card posts__item--category-1 card">
									<figure class="posts__thumb">
										<div class="posts__cat">
											<span class="label posts__cat-label">The Team</span>
										</div>
										<a href="#"><img src="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/assets/images/football/samples/post-img26.jpg" alt=""></a>
									</figure>
									<div class="posts__inner card__content">
										<a href="#" class="posts__cta"></a>
										<time datetime="2016-08-23" class="posts__date">August 23rd, 2018</time>
										<h6 class="posts__title"><a href="#">The Alchemists player Steven Masterson breaks a new world record</a></h6>
										<div class="posts__excerpt">
											Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini veniam, quis nostrud exercitation ullamco laboris.
										</div>
									</div>
									<footer class="posts__footer card__footer">
										<div class="post-author">
											<figure class="post-author__avatar">
												<img src="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/assets/images/football/samples/avatar-12-xs.jpg" alt="Post Author Avatar">
											</figure>
											<div class="post-author__info">
												<h4 class="post-author__name">Eric Rodgers</h4>
											</div>
										</div>
										<ul class="post__meta meta">
											<li class="meta__item meta__item--views">2369</li>
											<li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
											<li class="meta__item meta__item--comments"><a href="#">18</a></li>
										</ul>
									</footer>
								</div>
							</div>
							<div class="post-grid__item col-6">
								<div class="posts__item posts__item--card posts__item--category-1 card">
									<figure class="posts__thumb">
										<div class="posts__cat">
											<span class="label posts__cat-label">The Team</span>
										</div>
										<a href="#"><img src="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/assets/images/football/samples/post-img25.jpg" alt=""></a>
									</figure>
									<div class="posts__inner card__content">
										<a href="#" class="posts__cta"></a>
										<time datetime="2016-08-23" class="posts__date">August 23rd, 2018</time>
										<h6 class="posts__title"><a href="#">Scott Murdoch has a tibia fracture and will be out for two months</a></h6>
										<div class="posts__excerpt">
											Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini veniam, quis nostrud exercitation ullamco laboris.
										</div>
									</div>
									<footer class="posts__footer card__footer">
										<div class="post-author">
											<figure class="post-author__avatar">
												<img src="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/assets/images/football/samples/avatar-12-xs.jpg" alt="Post Author Avatar">
											</figure>
											<div class="post-author__info">
												<h4 class="post-author__name">Eric Rodgers</h4>
											</div>
										</div>
										<ul class="post__meta meta">
											<li class="meta__item meta__item--views">2369</li>
											<li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
											<li class="meta__item meta__item--comments"><a href="#">18</a></li>
										</ul>
									</footer>
								</div>
							</div>
							<div class="post-grid__item col-6">
								<div class="posts__item posts__item--card posts__item--category-1 card">
									<figure class="posts__thumb">
										<div class="posts__cat">
											<span class="label posts__cat-label">The Team</span>
										</div>
										<a href="#"><img src="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/assets/images/football/samples/post-img27.jpg" alt=""></a>
									</figure>
									<div class="posts__inner card__content">
										<a href="#" class="posts__cta"></a>
										<time datetime="2016-08-23" class="posts__date">September 14th, 2018</time>
										<h6 class="posts__title"><a href="#">Alchemists Stadium will have a max capacity 500.000 fans</a></h6>
										<div class="posts__excerpt">
											Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini veniam, quis nostrud exercitation ullamco laboris.
										</div>
									</div>
									<footer class="posts__footer card__footer">
										<div class="post-author">
											<figure class="post-author__avatar">
												<img src="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/assets/images/football/samples/avatar-6-xs.jpg" alt="Post Author Avatar">
											</figure>
											<div class="post-author__info">
												<h4 class="post-author__name">Ginny Valentine</h4>
											</div>
										</div>
										<ul class="post__meta meta">
											<li class="meta__item meta__item--views">2369</li>
											<li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
											<li class="meta__item meta__item--comments"><a href="#">18</a></li>
										</ul>
									</footer>
								</div>
							</div>
							<div class="post-grid__item col-6">
								<div class="posts__item posts__item--card posts__item--category-3 card">
									<figure class="posts__thumb">
										<div class="posts__cat">
											<span class="label posts__cat-label">The League</span>
										</div>
										<a href="#"><img src="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/assets/images/football/samples/post-img28.jpg" alt=""></a>
									</figure>
									<div class="posts__inner card__content">
										<a href="#" class="posts__cta"></a>
										<time datetime="2016-08-23" class="posts__date">August 23rd, 2018</time>
										<h6 class="posts__title"><a href="#">The Clovers defense must reinvent itselft without Adam Howlett</a></h6>
										<div class="posts__excerpt">
											Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini veniam, quis nostrud exercitation ullamco laboris.
										</div>
									</div>
									<footer class="posts__footer card__footer">
										<div class="post-author">
											<figure class="post-author__avatar">
												<img src="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/assets/images/football/samples/avatar-12-xs.jpg" alt="Post Author Avatar">
											</figure>
											<div class="post-author__info">
												<h4 class="post-author__name">Eric Rogers</h4>
											</div>
										</div>
										<ul class="post__meta meta">
											<li class="meta__item meta__item--views">2369</li>
											<li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
											<li class="meta__item meta__item--comments"><a href="#">18</a></li>
										</ul>
									</footer>
								</div>
							</div>
							<div class="post-grid__item col-6">
								<div class="posts__item posts__item--card posts__item--category-1 card">
									<figure class="posts__thumb">
										<div class="posts__cat">
											<span class="label posts__cat-label">The Team</span>
										</div>
										<a href="#"><img src="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/assets/images/football/samples/post-img29.jpg" alt=""></a>
									</figure>
									<div class="posts__inner card__content">
										<a href="#" class="posts__cta"></a>
										<time datetime="2016-08-23" class="posts__date">August 23rd, 2018</time>
										<h6 class="posts__title"><a href="#">The Alchemists women division started training for next season</a></h6>
										<div class="posts__excerpt">
											Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini veniam, quis nostrud exercitation ullamco laboris.
										</div>
									</div>
									<footer class="posts__footer card__footer">
										<div class="post-author">
											<figure class="post-author__avatar">
												<img src="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/assets/images/football/samples/avatar-12-xs.jpg" alt="Post Author Avatar">
											</figure>
											<div class="post-author__info">
												<h4 class="post-author__name">Eric Rodgers</h4>
											</div>
										</div>
										<ul class="post__meta meta">
											<li class="meta__item meta__item--views">2369</li>
											<li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
											<li class="meta__item meta__item--comments"><a href="#">18</a></li>
										</ul>
									</footer>
								</div>
							</div>
							<div class="post-grid__item col-6">
								<div class="posts__item posts__item--card posts__item--category-1 card">
									<figure class="posts__thumb">
										<div class="posts__cat">
											<span class="label posts__cat-label">The Team</span>
										</div>
										<a href="#"><img src="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/assets/images/samples/post-img8.jpg" alt=""></a>
									</figure>
									<div class="posts__inner card__content">
										<a href="#" class="posts__cta"></a>
										<time datetime="2016-08-23" class="posts__date">August 23rd, 2018</time>
										<h6 class="posts__title"><a href="#">The perfect breakfast for the team&#x27;s high intensity training</a></h6>
										<div class="posts__excerpt">
											Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini veniam, quis nostrud exercitation ullamco laboris.
										</div>
									</div>
									<footer class="posts__footer card__footer">
										<div class="post-author">
											<figure class="post-author__avatar">
												<img src="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/assets/images/football/samples/avatar-6-xs.jpg" alt="Post Author Avatar">
											</figure>
											<div class="post-author__info">
												<h4 class="post-author__name">Ginny Valentine</h4>
											</div>
										</div>
										<ul class="post__meta meta">
											<li class="meta__item meta__item--views">2369</li>
											<li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
											<li class="meta__item meta__item--comments"><a href="#">18</a></li>
										</ul>
									</footer>
								</div>
							</div>
							<div class="post-grid__item col-6">
								<div class="posts__item posts__item--card posts__item--category-2 card">
									<figure class="posts__thumb">
										<div class="posts__cat">
											<span class="label posts__cat-label">Injuries</span>
										</div>
										<a href="#"><img src="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/assets/images/samples/post-img1.jpg" alt=""></a>
									</figure>
									<div class="posts__inner card__content">
										<a href="#" class="posts__cta"></a>
										<time datetime="2016-08-23" class="posts__date">September 14th, 2018</time>
										<h6 class="posts__title"><a href="#">Scott Murdoch has a tibia fracture and will be out for two months</a></h6>
										<div class="posts__excerpt">
											Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini veniam, quis nostrud exercitation ullamco laboris.
										</div>
									</div>
									<footer class="posts__footer card__footer">
										<div class="post-author">
											<figure class="post-author__avatar">
												<img src="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/assets/images/football/samples/avatar-6-xs.jpg" alt="Post Author Avatar">
											</figure>
											<div class="post-author__info">
												<h4 class="post-author__name">Ginny Valentine</h4>
											</div>
										</div>
										<ul class="post__meta meta">
											<li class="meta__item meta__item--views">2369</li>
											<li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
											<li class="meta__item meta__item--comments"><a href="#">18</a></li>
										</ul>
									</footer>
								</div>
							</div>
							<div class="post-grid__item col-6">
								<div class="posts__item posts__item--card posts__item--category-1 card">
									<figure class="posts__thumb">
										<div class="posts__cat">
											<span class="label posts__cat-label">The Team</span>
										</div>
										<a href="#"><img src="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/assets/images/football/samples/post-img30.jpg" alt=""></a>
									</figure>
									<div class="posts__inner card__content">
										<a href="#" class="posts__cta"></a>
										<time datetime="2016-08-23" class="posts__date">July 4th, 2018</time>
										<h6 class="posts__title"><a href="#">The Alchemists will travel to Manhattan to play the Finals</a></h6>
										<div class="posts__excerpt">
											Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini veniam, quis nostrud en derum sum laborem.
										</div>
									</div>
									<footer class="posts__footer card__footer">
										<div class="post-author">
											<figure class="post-author__avatar">
												<img src="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/assets/images/football/samples/avatar-6-xs.jpg" alt="Post Author Avatar">
											</figure>
											<div class="post-author__info">
												<h4 class="post-author__name">Ginny Valentine</h4>
											</div>
										</div>
										<ul class="post__meta meta">
											<li class="meta__item meta__item--views">2369</li>
											<li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
											<li class="meta__item meta__item--comments"><a href="#">18</a></li>
										</ul>
									</footer>
								</div>
							</div>

						</div>
						<!-- Post Grid / End -->

						<!-- Post Pagination -->
						<nav class="post-pagination" aria-label="Blog navigation">
							<ul class="pagination pagination--lg justify-content-center">
								<li class="page-item active"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><span class="page-link">...</span></li>
								<li class="page-item"><a class="page-link" href="#">16</a></li>
							</ul>
						</nav>
						<!-- Post Pagination / End -->

					</div>
					<!-- Content / End -->

					<!-- Sidebar -->
					<div id="sidebar" class="sidebar col-lg-4">

						<!-- Widget: Social Buttons - Grid-->
						<aside class="widget widget--sidebar widget-social widget-social--grid">
							<a href="#" class="btn-social-counter btn-social-counter--facebook" target="_blank">
								<div class="btn-social-counter__icon">
									<i class="fab fa-facebook"></i>
								</div>
								<h6 class="btn-social-counter__title">Like Us!</h6>
								<span class="btn-social-counter__count"><span class="btn-social-counter__count-num"></span> Likes</span>
								<span class="btn-social-counter__add-icon"></span>
							</a>
							<a href="#" class="btn-social-counter btn-social-counter--twitter" target="_blank">
								<div class="btn-social-counter__icon">
									<i class="fab fa-twitter"></i>
								</div>
								<h6 class="btn-social-counter__title">Follow Us!</h6>
								<span class="btn-social-counter__count"><span class="btn-social-counter__count-num"></span> Followers</span>
								<span class="btn-social-counter__add-icon"></span>
							</a>
							<a href="#" class="btn-social-counter btn-social-counter--instagram" target="_blank">
								<div class="btn-social-counter__icon">
									<i class="fab fa-instagram"></i>
								</div>
								<h6 class="btn-social-counter__title">Follow Us!</h6>
								<span class="btn-social-counter__count"><span class="btn-social-counter__count-num"></span> Followers</span>
								<span class="btn-social-counter__add-icon"></span>
							</a>
							<a href="#" class="btn-social-counter btn-social-counter--rss" target="_blank">
								<div class="btn-social-counter__icon">
									<i class="fas fa-rss"></i>
								</div>
								<h6 class="btn-social-counter__title">Subscribe!</h6>
								<span class="btn-social-counter__count"><span class="btn-social-counter__count-num">840</span> Subscribers</span>
								<span class="btn-social-counter__add-icon"></span>
							</a>
						</aside>
						<!-- Widget: Social Buttons - Grid / End -->

						<!-- Widget: Popular News - Numbered -->
						<aside class="widget widget--sidebar card widget-popular-posts">
							<div class="widget__title card__header">
								<h4>Popular News</h4>
							</div>
							<div class="widget__content card__content">
								<ul class="posts posts--simple-list posts--simple-list-numbered">
									<li class="posts__item posts__item--category-1">
										<div class="posts__inner">
											<div class="posts__cat">
												<span class="label posts__cat-label">The Team</span>
											</div>
											<h6 class="posts__title"><a href="#">Alchemists Stadium will have a max capacity for 500.000 fans</a></h6>
											<time datetime="2017-09-22" class="posts__date">September 22nd, 2018</time>
										</div>
									</li>
									<li class="posts__item posts__item--category-2">
										<div class="posts__inner">
											<div class="posts__cat">
												<span class="label posts__cat-label">Injuries</span>
											</div>
											<h6 class="posts__title"><a href="#">Alchemists coach on Jake Summer&#x27;s injury &quot;It looks really bad&quot;</a></h6>
											<time datetime="2017-09-22" class="posts__date">August 5th, 2018</time>
										</div>
									</li>
									<li class="posts__item posts__item--category-3">
										<div class="posts__inner">
											<div class="posts__cat">
												<span class="label posts__cat-label">The League</span>
											</div>
											<h6 class="posts__title"><a href="#">The Clovers defense must reinvent itself without Adam Howlett</a></h6>
											<time datetime="2017-09-22" class="posts__date">September 16th, 2018</time>
										</div>
									</li>
									<li class="posts__item posts__item--category-1">
										<div class="posts__inner">
											<div class="posts__cat">
												<span class="label posts__cat-label">The Team</span>
											</div>
											<h6 class="posts__title"><a href="#">Take a look to the brand new helmets for next season</a></h6>
											<time datetime="2017-09-22" class="posts__date">September 8th, 2017</time>
										</div>
									</li>
									<li class="posts__item posts__item--category-1">
										<div class="posts__inner">
											<div class="posts__cat">
												<span class="label posts__cat-label">The Team</span>
											</div>
											<h6 class="posts__title"><a href="#">The Alchemists women division started training for next season</a></h6>
											<time datetime="2017-09-22" class="posts__date">August 17th, 2017</time>
										</div>
									</li>
								</ul>
							</div>
						</aside>
						<!-- Widget: Popular News - Numbered / End -->

						<!-- Widget: Tag Cloud -->
						<aside class="widget widget--sidebar card widget-tagcloud">
							<div class="widget__title card__header">
								<h4>Tags Widgets</h4>
							</div>
							<div class="widget__content card__content">
								<div class="tagcloud">
									<a href="#" class="btn btn-default btn-xs btn-outline btn-sm">Results</a>
									<a href="#" class="btn btn-default btn-xs btn-outline btn-sm">INCORPORATIONS</a>
									<a href="#" class="btn btn-default btn-xs btn-outline btn-sm">Finals</a>
									<a href="#" class="btn btn-default btn-xs btn-outline btn-sm">Tryouts</a>
									<a href="#" class="btn btn-default btn-xs btn-outline btn-sm">Prospects</a>
									<a href="#" class="btn btn-default btn-xs btn-outline btn-sm">Uniforms</a>
									<a href="#" class="btn btn-default btn-xs btn-outline btn-sm">WMN Division</a>
									<a href="#" class="btn btn-default btn-xs btn-outline btn-sm">MVP</a>
									<a href="#" class="btn btn-default btn-xs btn-outline btn-sm">Offense</a>
									<a href="#" class="btn btn-default btn-xs btn-outline btn-sm">Defense</a>
									<a href="#" class="btn btn-default btn-xs btn-outline btn-sm">Game Tactics</a>
									<a href="#" class="btn btn-default btn-xs btn-outline btn-sm">Coach</a>
									<a href="#" class="btn btn-default btn-xs btn-outline btn-sm">Champions</a>
									<a href="#" class="btn btn-default btn-xs btn-outline btn-sm">Players</a>
									<a href="#" class="btn btn-default btn-xs btn-outline btn-sm">Professional</a>
								</div>
							</div>
						</aside>
						<!-- Widget: Tag Cloud / End -->

						<!-- Widget: Banner -->
						<aside class="widget card widget--sidebar widget-banner">
							<div class="widget__title card__header">
								<h4>300x250 Banner</h4>
							</div>
							<div class="widget__content card__content">
								<figure class="widget-banner__img">
									<a href="https://themeforest.net/item/the-alchemists-sports-news-html-template/19106722?ref=dan_fisher"><img src="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/assets/images/football/banner.jpg" alt="Banner"></a>
								</figure>
							</div>
						</aside>
						<!-- Widget: Banner / End -->

						<!-- Widget: Trending News -->
						<aside class="widget widget--sidebar card widget-tabbed">
							<div class="widget__title card__header">
								<h4>Top Trending News</h4>
							</div>
							<div class="widget__content card__content">
								<div class="widget-tabbed__tabs">
									<!-- Widget Tabs -->
									<ul class="nav nav-tabs nav-justified widget-tabbed__nav" role="tablist">
										<li class="nav-item"><a href="#widget-tabbed-sm-newest" class="nav-link active" aria-controls="widget-tabbed-sm-newest" role="tab" data-toggle="tab">Newest</a></li>
										<li class="nav-item"><a href="#widget-tabbed-sm-commented" class="nav-link" aria-controls="widget-tabbed-sm-commented" role="tab" data-toggle="tab">Most Commented</a></li>
										<li class="nav-item"><a href="#widget-tabbed-sm-popular" class="nav-link" aria-controls="widget-tabbed-sm-popular" role="tab" data-toggle="tab">Popular</a></li>
									</ul>

									<!-- Widget Tab panes -->
									<div class="tab-content widget-tabbed__tab-content">
										<!-- Newest -->
										<div role="tabpanel" class="tab-pane fade show active" id="widget-tabbed-sm-newest">
											<ul class="posts posts--simple-list">

												<li class="posts__item posts__item--category-1">
													<div class="posts__inner">
														<div class="posts__cat">
															<span class="label posts__cat-label">The Team</span>
														</div>
														<h6 class="posts__title"><a href="#">The perfect breakfast for the team&#x27;s high intensity training</a></h6>
														<time datetime="2017-09-27" class="posts__date">September 27th, 2018</time>
														<div class="posts__excerpt">
															Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua en derum lorem.
														</div>
													</div>
												</li>
												<li class="posts__item posts__item--category-2">
													<div class="posts__inner">
														<div class="posts__cat">
															<span class="label posts__cat-label">Injuries</span>
														</div>
														<h6 class="posts__title"><a href="#">Alchemists coach on Jake Summer&#x27;s injury &quot;It looks really bad&quot;</a></h6>
														<time datetime="2017-09-27" class="posts__date">August 5th, 2018</time>
														<div class="posts__excerpt">
															Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua en derum lorem.
														</div>
													</div>
												</li>
												<li class="posts__item posts__item--category-1">
													<div class="posts__inner">
														<div class="posts__cat">
															<span class="label posts__cat-label">The Team</span>
														</div>
														<h6 class="posts__title"><a href="#">The team is gonna make a trip to the beach for a small vacation</a></h6>
														<time datetime="2017-09-27" class="posts__date">September 5th, 2018</time>
														<div class="posts__excerpt">
															Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua en derum lorem.
														</div>
													</div>
												</li>
												<li class="posts__item posts__item--category-3">
													<div class="posts__inner">
														<div class="posts__cat">
															<span class="label posts__cat-label">The League</span>
														</div>
														<h6 class="posts__title"><a href="#">Santa Monica is the place chosen by the league for the Semifinals</a></h6>
														<time datetime="2017-09-27" class="posts__date">August 14th, 2018</time>
														<div class="posts__excerpt">
															Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua en derum lorem.
														</div>
													</div>
												</li>

											</ul>
										</div>
										<!-- Commented -->
										<div role="tabpanel" class="tab-pane fade" id="widget-tabbed-sm-commented">
											<ul class="posts posts--simple-list">
												<li class="posts__item posts__item--category-3">
													<div class="posts__inner">
														<div class="posts__cat">
															<span class="label posts__cat-label">The League</span>
														</div>
														<h6 class="posts__title"><a href="#">Santa Monica is the place chosen by the league for the Semifinals</a></h6>
														<time datetime="2017-09-27" class="posts__date">August 14th, 2018</time>
														<div class="posts__excerpt">
															Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
														</div>
													</div>
												</li>
												<li class="posts__item posts__item--category-3">
													<div class="posts__inner">
														<div class="posts__cat">
															<span class="label posts__cat-label">The League</span>
														</div>
														<h6 class="posts__title"><a href="#">The Clovers defense must reinvent itself without Adam Howlett</a></h6>
														<time datetime="2017-09-27" class="posts__date">August 14th, 2018</time>
														<div class="posts__excerpt">
															Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
														</div>
													</div>
												</li>
												<li class="posts__item posts__item--category-1">
													<div class="posts__inner">
														<div class="posts__cat">
															<span class="label posts__cat-label">The Team</span>
														</div>
														<h6 class="posts__title"><a href="#">The perfect breakfast for the team&#x27;s high intensity training</a></h6>
														<time datetime="2017-09-27" class="posts__date">September 27th, 2018</time>
														<div class="posts__excerpt">
															Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
														</div>
													</div>
												</li>
												<li class="posts__item posts__item--category-2">
													<div class="posts__inner">
														<div class="posts__cat">
															<span class="label posts__cat-label">Injuries</span>
														</div>
														<h6 class="posts__title"><a href="#">Alchemists coach on Jake Summer&#x27;s injury &quot;It looks really bad&quot;</a></h6>
														<time datetime="2017-09-27" class="posts__date">August 5th, 2018</time>
														<div class="posts__excerpt">
															Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua en derum lorem.
														</div>
													</div>
												</li>
											</ul>
										</div>
										<!-- Popular -->
										<div role="tabpanel" class="tab-pane fade" id="widget-tabbed-sm-popular">
											<ul class="posts posts--simple-list">

												<li class="posts__item posts__item--category-2">
													<div class="posts__inner">
														<div class="posts__cat">
															<span class="label posts__cat-label">Injuries</span>
														</div>
														<h6 class="posts__title"><a href="#">Alchemists coach on Jake Summer&#x27;s injury &quot;It looks really bad&quot;</a></h6>
														<time datetime="2017-09-27" class="posts__date">August 5th, 2018</time>
														<div class="posts__excerpt">
															Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
														</div>
													</div>
												</li>
												<li class="posts__item posts__item--category-1">
													<div class="posts__inner">
														<div class="posts__cat">
															<span class="label posts__cat-label">The Team</span>
														</div>
														<h6 class="posts__title"><a href="#">The team is gonna make a trip to the beach for a small vacation</a></h6>
														<time datetime="2017-09-27" class="posts__date">September 5th, 2018</time>
														<div class="posts__excerpt">
															Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
														</div>
													</div>
												</li>
												<li class="posts__item posts__item--category-3">
													<div class="posts__inner">
														<div class="posts__cat">
															<span class="label posts__cat-label">The League</span>
														</div>
														<h6 class="posts__title"><a href="#">Santa Monica is the place chosen by the league for the Semifinals</a></h6>
														<time datetime="2017-09-27" class="posts__date">August 14th, 2018</time>
														<div class="posts__excerpt">
															Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
														</div>
													</div>
												</li>
												<li class="posts__item posts__item--category-3">
													<div class="posts__inner">
														<div class="posts__cat">
															<span class="label posts__cat-label">The League</span>
														</div>
														<h6 class="posts__title"><a href="#">The Clovers defense must reinvent itself without Adam Howlett</a></h6>
														<time datetime="2017-09-27" class="posts__date">August 18th, 2018</time>
														<div class="posts__excerpt">
															Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
														</div>
													</div>
												</li>

											</ul>
										</div>
									</div>

								</div>
							</div>
						</aside>
						<!-- Widget: Trending News / End -->

					</div>
					<!-- Sidebar / End -->
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
							<a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_index.html">
								<img src="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/assets/images/football/logo-footer.png" srcset="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/assets/images/football/logo-footer@2x.png 2x" alt="The Alchemists" class="footer-logo__img">
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
														<a href="#"><img src="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/assets/images/samples/post-img8-xxs.jpg" alt=""></a>
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
														<a href="#"><img src="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/assets/images/football/samples/post-img25-xxs.jpg" alt=""></a>
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
														<a href="#"><img src="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/assets/images/samples/post-img10-xxs.jpg" alt=""></a>
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
								<div class="footer-copyright"><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_index.html">The Alchemists</a> 2020 &nbsp; | &nbsp; All Rights Reserved</div>
							</div>
							<div class="col-md-8">
								<ul class="footer-nav footer-nav--right footer-nav--sm">
									<li class="footer-nav__item"><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_index.html">Home</a></li>
									<li class="footer-nav__item"><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_features-shortcodes.html">Features</a></li>
									<li class="footer-nav__item"><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_team-standings.html">Statistics</a></li>
									<li class="footer-nav__item"><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_team-overview.html">The Team</a></li>
									<li class="footer-nav__item"><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_blog-3.html">News</a></li>
									<li class="footer-nav__item"><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_shop-grid.html">Shop</a></li>
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
    <script src="{{ asset('football/vendor/twitter/jquery.twitter.js') }}"></script>

    <!-- Template JS -->
    <script src="{{ asset('football/js/init.js') }}"></script>
    <script src="{{ asset('football/js/custom.js') }}"></script>

</body>
</html>
