@extends('layouts.index')
@section('content')
    <div class="site-content">
        <div class="container">

            <div class="row">
                <!-- Content -->
                <div class="content col-lg-8">

                    <div class="alert alert-success">
                        <strong>3 Articles were found for your "<span class="text-success">Alchemists Roster</span>" search</strong>
                    </div>

                    <!-- Search Results -->
                    <ul class="posts posts--simple-list posts--simple-list--search">

                        <li class="posts__item card posts__item--category-2">
                            <div class="posts__inner card__content">
                                <div class="posts__cat">
                                    <span class="label posts__cat-label">Injuries</span>
                                </div>
                                <h6 class="posts__title"><a href="#">Alchemists coach on Jake Summer&#x27;s injury &quot;It looks really bad&quot;</a></h6>
                                <time datetime="2017-08-23" class="posts__date">September 17th, 2018</time>
                                <div class="posts__excerpt">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in enderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </div>
                            </div>
                        </li>
                        <li class="posts__item card posts__item--category-1">
                            <div class="posts__inner card__content">
                                <div class="posts__cat">
                                    <span class="label posts__cat-label">The Team</span>
                                </div>
                                <h6 class="posts__title"><a href="#">The team is gonna make a trip to the beach for a small vacation</a></h6>
                                <time datetime="2017-08-23" class="posts__date">August 12th, 2018</time>
                                <div class="posts__excerpt">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in enderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </div>
                            </div>
                        </li>
                        <li class="posts__item card posts__item--category-1">
                            <div class="posts__inner card__content">
                                <div class="posts__cat">
                                    <span class="label posts__cat-label">The Team</span>
                                </div>
                                <h6 class="posts__title"><a href="#">The perfect breakfast for the team&#x27;s high intensity training</a></h6>
                                <time datetime="2017-08-23" class="posts__date">January 2nd, 2018</time>
                                <div class="posts__excerpt">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in enderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </div>
                            </div>
                        </li>

                    </ul>
                    <!-- Search Results / End -->


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
                                <a href="https://themeforest.net/item/the-alchemists-sports-news-html-template/19106722?ref=dan_fisher"><img src="assets/images/football/banner.jpg" alt="Banner"></a>
                            </figure>
                        </div>
                    </aside>
                    <!-- Widget: Banner / End -->

                </div>
                <!-- Sidebar / End -->
            </div>

        </div>
    </div>

@endsection
