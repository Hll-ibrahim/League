@extends('layouts.base')
@section('links')

    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">

    <!-- Styles -->
@endsection

@section('base')
    <header class="header ">


        <!-- Header Primary -->
        <div class="header__primary">
            <div class="container">
                <div class="header__primary-inner">

                    <!-- Header Logo -->

                    <!-- Header Logo / End -->

                    <!-- Main Navigation -->
                    <nav class="main-nav clearfix">
                        <ul class="main-nav__list">
                            <li class="{{Request::segment(1) == 'sport' ? 'active' : ''}}"><a href="{{route('sport.index')}}">Sports</a>
                                <ul class="main-nav__sub">
                                    @foreach($sports as $sport)
                                        <li><a href="{{route('sport.detail',$sport->id)}}">{{$sport->name}}</a>
                                            <ul class="main-nav__sub-2">
                                                @foreach($sport->leagues as $league)
                                                    <li><a href="{{route('sport.league.detail',$league->id    )}}">{{$league->name}}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class=""><a href="#">Features</a>
                                <div class="main-nav__megamenu clearfix">
                                    <ul class="col-lg-2 col-md-3 col-12 main-nav__ul">
                                        <li class="main-nav__title">Features</li>
                                        <li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_features-shortcodes.html">Shortcodes</a></li>
                                        <li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_features-typography.html">Typography</a></li>
                                        <li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_features-widgets-blog.html">Widgets - Blog</a></li>
                                        <li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_features-widgets-shop.html">Widgets - Shop</a></li>
                                        <li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_features-widgets-sports.html">Widgets - Sports</a></li>
                                        <li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_features-404.html">404 Error Page</a></li>
                                        <li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_features-search-results.html">Search Results</a></li>
                                        <li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_page-contacts.html">Contact Us</a></li>
                                    </ul>
                                    <ul class="col-lg-2 col-md-3 col-12 main-nav__ul">
                                        <li class="main-nav__title">Other Pages</li>
                                        <li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_page-sponsors.html">Sponsors</a></li>
                                        <li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_page-faqs.html">FAQs</a></li>
                                        <li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_staff-single.html">Staff Member</a></li>
                                        <li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_event-tournament.html">Tournament</a></li>
                                        <li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_shop-list.html">Shop Page</a></li>
                                        <li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_shop-cart.html">Shopping Cart</a></li>
                                        <li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_shop-wishlist.html">Wishlist</a></li>
                                        <li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_shop-checkout.html">Checkout</a></li>
                                    </ul>
                                    <div class="col-lg-4 col-md-3 col-12">

                                        <div class="posts posts--simple-list posts--simple-list--lg">
                                            <div class="posts__item posts__item--category-1">
                                                <div class="posts__inner">
                                                    <div class="posts__cat">
                                                        <span class="label posts__cat-label">The Team</span>
                                                    </div>
                                                    <h6 class="posts__title"><a href="#">The team is starting a new power breakfast regimen</a></h6>
                                                    <time datetime="2017-08-23" class="posts__date">August 23rd, 2017</time>
                                                    <div class="posts__excerpt">
                                                        Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    </div>
                                                </div>
                                                <div class="posts__footer card__footer">
                                                    <div class="post-author">
                                                        <figure class="post-author__avatar">
                                                        </figure>
                                                        <div class="post-author__info">
                                                            <h4 class="post-author__name">James Spiegel</h4>
                                                        </div>
                                                    </div>
                                                    <ul class="post__meta meta">
                                                        <li class="meta__item meta__item--likes"><a href="#"><i class="meta-like meta-like--active icon-heart"></i> 530</a></li>
                                                        <li class="meta__item meta__item--comments"><a href="#">18</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-4 col-md-3 col-12">
                                        <ul class="posts posts--simple-list">
                                            <li class="posts__item posts__item--category-1">
                                                <figure class="posts__thumb">
                                                    <a href="#"></a>
                                                </figure>
                                                <div class="posts__inner">
                                                    <div class="posts__cat">
                                                        <span class="label posts__cat-label">The Team</span>
                                                    </div>
                                                    <h6 class="posts__title"><a href="#">The new eco friendly stadium won a Leafy Award in 2016</a></h6>
                                                    <time datetime="2016-08-21" class="posts__date">August 21st, 2016</time>
                                                </div>
                                            </li>
                                            <li class="posts__item posts__item--category-2">
                                                <figure class="posts__thumb">
                                                </figure>
                                                <div class="posts__inner">
                                                    <div class="posts__cat">
                                                        <span class="label posts__cat-label">Injuries</span>
                                                    </div>
                                                    <h6 class="posts__title"><a href="#">Mark Johnson has a Tibia Fracture and is gonna be out</a></h6>
                                                    <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                                                </div>
                                            </li>
                                            <li class="posts__item posts__item--category-1">
                                                <figure class="posts__thumb">
                                                </figure>
                                                <div class="posts__inner">
                                                    <div class="posts__cat">
                                                        <span class="label posts__cat-label">The Team</span>
                                                    </div>
                                                    <h6 class="posts__title"><a href="#">The team is starting a new power breakfast regimen</a></h6>
                                                    <time datetime="2016-08-21" class="posts__date">August 21st, 2016</time>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class=""><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_team-overview.html">
                                Leagues</a>
                                <ul class="main-nav__sub">
                                    <li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_team-overview.html">Team</a>
                                        <ul class="main-nav__sub-2">
                                            <li><a href="{{route('league.types.index')}}">League Types</a></li>
                                            <li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_team-roster.html">Roster</a>
                                                <ul class="main-nav__sub-2">
                                                    <li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_team-roster.html">Roster - 1</a></li>
                                                    <li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_team-roster-2.html">Roster - 2</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_team-standings.html">Standings</a></li>
                                            <li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_team-last-results.html">Latest Results</a></li>
                                            <li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_team-schedule.html">Schedule</a></li>
                                            <li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_team-gallery.html">Gallery</a>
                                                <ul class="main-nav__sub-2">
                                                    <li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_team-gallery-album.html">Single Album</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_player-overview.html">Player</a>
                                        <ul class="main-nav__sub-2">
                                            <li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_player-overview.html">Overview</a></li>
                                            <li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_player-stats.html">Full Statistics</a></li>
                                            <li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_player-bio.html">Biography</a></li>
                                            <li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_player-news.html">Related News</a></li>
                                            <li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_player-gallery.html">Gallery</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_staff-single.html">Staff Member</a></li>
                                    <li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_event-overview.html">Event</a>
                                        <ul class="main-nav__sub-2">
                                            <li class=""><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_event-overview.html">Overview</a></li>
                                            <li class=""><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_event-box-score.html">Box Score</a></li>
                                            <li class=""><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_event-play-by-play.html">Play-by-Play</a></li>
                                            <li class=""><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_event-team-stats.html">Team Stats</a></li>
                                            <li class=""><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_event-news-recap.html">News Recap</a></li>
                                            <li class=""><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_event-videos.html">Videos</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_game-overview.html">Game Overview</a></li>
                                    <li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_event-tournament.html">Tournament</a></li>
                                </ul>
                            </li>
                            <li class=""><a href="#">News</a>
                                <ul class="main-nav__sub">
                                    <li class="active"><a href="_soccer_blog-1.html">News - version 1</a></li>
                                    <li class=""><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_blog-2.html">News - version 2</a></li>
                                    <li class=""><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_blog-3.html">News - version 3</a></li>
                                    <li class=""><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_blog-4.html">News - version 4</a></li>
                                    <li><a href="#">Post</a>
                                        <ul class="main-nav__sub-2">
                                            <li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_blog-post-1.html">Single Post - version 1</a></li>
                                            <li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_blog-post-2.html">Single Post - version 2</a></li>
                                            <li><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_blog-post-3.html">Single Post - version 3</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            @if(auth()->user() && auth()->user()->hasRole('admin'))
                            <li class=""><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_shop-grid.html">Panel</a>
                                <ul class="main-nav__sub">
                                    <li class=""><a href="{{route('announcement.index')}}">Announcements</a></li>
                                    <li class=""><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_shop-list.html">Shop - List</a></li>
                                    <li class=""><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_shop-product.html">Single Product</a></li>
                                    <li class=""><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_shop-cart.html">Shopping Cart</a></li>
                                    <li class=""><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_shop-checkout.html">Checkout</a></li>
                                    <li class=""><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_shop-wishlist.html">Wishlist</a></li>
                                    <li class=""><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_shop-login.html">Login</a></li>
                                    <li class=""><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/soccer/build/_soccer_shop-account.html">Account</a></li>
                                </ul>
                            </li>
                            @endif
                        </ul>

                        <!-- Social Links -->
                        <ul class="social-links social-links--inline social-links--main-nav">

                            <li>
                                @if(Auth::user())
                                    <form method="post" class="nav-account__item nav-account__item--logout" action="{{route('logout')}}">
                                        @csrf
                                        <button class="btn btn-primary " type="submit">Logout</button>
                                    </form>
                                @else
                                        <a href="{{route('login')}}">Login</a>
                                @endif
                            </li>
                        </ul>
                        <!-- Social Links / End -->

                        <!-- Pushy Panel Toggle -->
                        <a href="#" class="pushy-panel__toggle">
                            <span class="pushy-panel__line"></span>
                        </a>
                        <!-- Pushy Panel Toggle / Eng -->
                    </nav>
                    <!-- Main Navigation / End -->
                </div>
            </div>
        </div>
        <!-- Header Primary / End -->
    </header>

    <aside class="pushy-panel pushy-panel--dark">
        <div class="pushy-panel__inner">
            <header class="pushy-panel__header">
                <div class="pushy-panel__logo">
                </div>
            </header>
            <div class="pushy-panel__content">

                <!-- Widget: Posts -->
                <aside class="widget widget-popular-posts widget--side-panel">
                    <div class="widget__content">

                        <ul class="posts posts--simple-list">

                            <li class="posts__item posts__item--category-1">
                                <figure class="posts__thumb">
                                </figure>
                                <div class="posts__inner">
                                    <div class="posts__cat">
                                        <span class="label posts__cat-label">The Team</span>
                                    </div>
                                    <h6 class="posts__title"><a href="#">The Team will make a small vacation to the Caribbean</a></h6>
                                    <time datetime="2016-08-23" class="posts__date">June 12th, 2018</time>
                                </div>
                                <div class="posts__excerpt">
                                    Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </div>
                            </li>
                            <li class="posts__item posts__item--category-2">
                                <figure class="posts__thumb">
                                </figure>
                                <div class="posts__inner">
                                    <div class="posts__cat">
                                        <span class="label posts__cat-label">Injuries</span>
                                    </div>
                                    <h6 class="posts__title"><a href="#">Jenny Jackson won&#x27;t be able to play the next game</a></h6>
                                    <time datetime="2016-08-23" class="posts__date">May 15th, 2018</time>
                                </div>
                                <div class="posts__excerpt">
                                    Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </div>
                            </li>
                            <li class="posts__item posts__item--category-1">
                                <figure class="posts__thumb">
                                </figure>
                                <div class="posts__inner">
                                    <div class="posts__cat">
                                        <span class="label posts__cat-label">The Team</span>
                                    </div>
                                    <h6 class="posts__title"><a href="#">The team is starting a new power breakfast regimen</a></h6>
                                    <time datetime="2016-08-23" class="posts__date">March 16th, 2018</time>
                                </div>
                                <div class="posts__excerpt">
                                    Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </div>
                            </li>
                            <li class="posts__item posts__item--category-3">
                                <figure class="posts__thumb">
                                </figure>
                                <div class="posts__inner">
                                    <div class="posts__cat">
                                        <span class="label posts__cat-label">The League</span>
                                    </div>
                                    <h6 class="posts__title"><a href="#">The Alchemists need two win the next two games</a></h6>
                                    <time datetime="2016-08-23" class="posts__date">February 8th, 2018</time>
                                </div>
                                <div class="posts__excerpt">
                                    Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </div>
                            </li>

                        </ul>

                    </div>
                </aside>
                <!-- Widget: Posts / End -->

                <!-- Widget: Tag Cloud -->
                <aside class="widget widget--side-panel widget-tagcloud">
                    <div class="widget__title">
                        <h4>Popular Tags</h4>
                    </div>
                    <div class="widget__content">
                        <div class="tagcloud">
                            <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">PLAYOFFS</a>
                            <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">ALCHEMISTS</a>
                            <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">INJURIES</a>
                            <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">TEAM</a>
                            <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">INCORPORATIONS</a>
                            <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">UNIFORMS</a>
                            <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">CHAMPIONS</a>
                            <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">PROFESSIONAL</a>
                            <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">COACH</a>
                            <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">STADIUM</a>
                            <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">NEWS</a>
                            <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">PLAYERS</a>
                            <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">WOMEN DIVISION</a>
                            <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">AWARDS</a>
                        </div>
                    </div>
                </aside>
                <!-- Widget: Tag Cloud / End -->

                <!-- Widget: Banner -->
                <aside class="widget widget--side-panel widget-banner">
                    <div class="widget__content">
                        <figure class="widget-banner__img">
                        </figure>
                    </div>
                </aside>
                <!-- Widget: Banner / End -->

            </div>
            <a href="#" class="pushy-panel__back-btn"></a>
        </div>
    </aside>
    <!-- Pushy Panel - Dark / End -->

    <div class="site-content">
        <div class="container">
            @yield('content')
        </div>
    </div>

    <footer id="footer" class="footer">

        <!-- Footer Info -->
        <div class="footer-info">
            <div class="container">

                <div class="footer-info__inner">
                    <!-- Footer Logo -->
                    <div class="footer-logo footer-logo--has-txt">
                        <a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_index.html">
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

                            <h6 class="info-block__heading">Join Our Team!</h6>
                            <a class="info-block__link" href="mailto:tryouts@alchemists.com">tryouts@alchemists.com</a>
                        </div>
                        <div class="info-block__item">

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
                                <li class="footer-nav__item"><a href="../../../../OneDrive/Desktop/Alchemists-HTML-Package/HTML/football/build/_football_index.html">Home2</a></li>
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

    <script>
        function errorMap(errors){
            errors = Object.values(errors)

            string = '<p>'
            result = errors.map((error)=>{
                error.map((errorMessage)=>{
                    string += errorMessage
                    string += '<br>'
                })
            })
            string += '</p>'
            return string
        }

    </script>
@endsection
