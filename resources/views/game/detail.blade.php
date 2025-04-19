@extends('layouts.index')

@section('content')
    <div class="alc-event-header alc-event-header--layout-2">
        <div class="alc-event-header__top">
            <div class="container">
                <h6 class="title">{{$league->name}} {{$season->name}}</h6>
                <span class="subtitle">{{$game->date}}</span>
            </div>
        </div>
        <div class="alc-event-header__content">
            <div class="container">
                <div class="alc-event-header__content-inner">

                    <!-- Competitors -->
                    <div class="alc-event-competitors">
                        <!-- Team #1 -->
                        <div class="alc-event-competitors__item alc-event-team alc-event-team--winner">
                            <div class="alc-event-team__logo-alt">
                                <div class="alc-event-team__logo-alt-inner">
                                    <img src="assets/images/soccer/logo.png" alt="" class="alc-event-team__logo-alt-img">
                                </div>
                            </div>
                            <div class="alc-event-team__details">
                                <h4 class="alc-event-team__name">{{$home_team->name}}</h4>
                            </div>
                            <figure class="alc-event-team__logo">
                                <img src="assets/images/soccer/logos/alchemists_n.png" alt="">
                            </figure>
                            <div class="alc-event-team__score-wrap">
                                <div class="alc-event-team__score">{{$game->home_score}}</div>
                            </div>
                        </div>
                        <!-- Team #1 / End -->

                        <!-- Team #2 -->
                        <div class="alc-event-competitors__item alc-event-team">
                            <div class="alc-event-team__logo-alt alc-event-team__logo-alt--color-alt">
                                <div class="alc-event-team__logo-alt-inner">
                                    <img src="assets/images/samples/logos/lucky_clovers.png" alt="" class="alc-event-team__logo-alt-img">
                                </div>
                            </div>
                            <div class="alc-event-team__details">
                                <h4 class="alc-event-team__name">{{$away_team->name}}</h4>
                            </div>
                            <figure class="alc-event-team__logo">
                                <img src="assets/images/samples/logos/lucky_clovers_n.png" alt="">
                            </figure>
                            <div class="alc-event-team__score-wrap">
                                <div class="alc-event-team__score">{{$game->away_score}}</div>
                            </div>
                        </div>
                        <!-- Team #2 / End -->

                        <div class="alc-event-competitors__divider"></div>

                    </div>
                    <!-- Competitors / End -->

                </div>
            </div>
        </div>
        <div class="alc-event-header__bottom">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <!-- 1st Team Performances -->
                        <div class="alc-event-header-performances">
                            <span class="alc-event-header__performance">Franklin Stevens (22’) <i class="icon-svg icon-soccer-ball"></i></span>
                            <span class="alc-event-header__performance">Brian Kingster (59’) <i class="icon-svg icon-red-card"></i></span>
                            <span class="alc-event-header__performance">Christofer Grass (68’) (P) <i class="icon-svg icon-soccer-ball"></i></span>
                        </div>
                        <!-- 1st Team Performances / End -->
                    </div>
                    <div class="col-6">
                        <!-- 2nd Team Performances -->

                        <!-- 2nd Team Performances / End -->
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Event Pages Nav -->
    <nav class="content-filter">
        <div class="container">
            <a href="#" class="content-filter__toggle"></a>
            <ul class="content-filter__list">
                <li class="content-filter__item content-filter__item--active"><a href="_soccer_event-overview.html" class="content-filter__link"><small>Match</small>Overview</a></li>
                <li class="content-filter__item "><a href="_soccer_event-box-score.html" class="content-filter__link"><small>Match</small>Box Score</a></li>
                <li class="content-filter__item "><a href="_soccer_event-play-by-play.html" class="content-filter__link"><small>Match</small>Play-by-Play</a></li>
                <li class="content-filter__item "><a href="_soccer_event-team-stats.html" class="content-filter__link"><small>Match</small>Team Stats</a></li>
                <li class="content-filter__item "><a href="_soccer_event-news-recap.html" class="content-filter__link"><small>Match</small>News Recap</a></li>
                <li class="content-filter__item "><a href="_soccer_event-videos.html" class="content-filter__link"><small>Match</small>Videos</a></li>
            </ul>
        </div>
    </nav>
    <!-- Event Pages Nav / End -->

    <!-- Content
    ================================================== -->
    <div class="site-content">
        <div class="container">

            <!-- Timeline -->
            <div class="card">
                <div class="card__header">
                    <h4>Game Timeline</h4>
                </div>
                <div class="card__content card__content--pattern-dotted">

                    <div class="game-timeline-wrapper pt-4 pb-4">
                        <div class="game-timeline game-timeline--adaptive">

                            <div class="game-timeline__event" minute="0">
                                <div class="game-timeline__team-1">
                                    <div class="game-timeline__team-shirt">
                                        <i class="icon-svg icon-shirt"></i>
                                    </div>
                                </div>
                                <div class="game-timeline__time">0’</div>
                                <div class="game-timeline__team-2">
                                    <div class="game-timeline__team-shirt">
                                        <i class="icon-svg icon-shirt-alt"></i>
                                    </div>
                                </div>
                            </div>

                            @foreach($events as $event)

                                <div class="game-timeline__event game-timeline__event--{{$event->minute}}" minute="{{$event->minute}}">
                                    <div class="game-timeline__team-1">
                                        <div class="game-timeline__event-info">
                                            <div class="game-timeline__event-name">{{$event->playerStatistic->TeamPlayer->player->first_name}}</div>
                                            <div class="game-timeline__event-desc">{{$event->playerStatistic->TeamPlayer->leagueTeam->team->name}}</div>
                                        </div>
                                        <i class="icon-svg icon-soccer-ball"></i>
                                    </div>
                                    <div class="game-timeline__time">{{$event->minute}}’</div>
                                </div>

                            @endforeach


                            <div class="game-timeline__event game-timeline__event--ht">
                                <div class="game-timeline__time">HT</div>
                            </div>

                            <div class="game-timeline__event game-timeline__event--ft">
                                <div class="game-timeline__time">FT</div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <!-- Timeline / End -->


            <div class="row">
                <!-- Content -->
                <div class="content col-lg-8">

                    <!-- Video Highlights -->
                    <div class="card card--no-paddings">
                        <header class="card__header">
                            <h4>Video Highlights</h4>
                        </header>
                        <div class="card__content">
                            <div class="alc-embeded-player alc-embeded-player--bg-color-dark " data-id="XE0fU9PCrWE" data-controls="false" data-provider="youtube" data-thumbnail="assets/images/soccer/samples/_soccer_post-img1-xlg.jpg" data-easy-embed>
                                <div class="alc-embeded-player__overlay">
                                    <div class="alc-embeded-player__inner">
                                        <h3 class="alc-embeded-player__title">Check The Alchemists in action in this exclusive clip from last night</h3>
                                        <time datetime="2017-08-28" class="alc-embeded-player__date">January 27th, 2020</time>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Video Highlights / End -->

                    <!-- Game Scoreboard -->
                    <div class="card">
                        <header class="card__header alc-teams-legend">
                            <h4 class="alc-teams-legend__title">Match Statistics</h4>
                            <div class="alc-teams-legend__info">
                                <!-- Teams -->
                                <div class="alc-teams-legend__teams">

                                    <!-- Team #0 -->
                                    <div class="alc-teams-legend__team">
                                        <span class="alc-teams-legend__team-color alc-teams-legend__team-color--color-primary"></span>
                                        <img src="assets/images/soccer/logos/alchemists_s_shield.png" class="alc-teams-legend__team-logo" alt="The Alchemists">
                                    </div>
                                    <!-- Team #0 / End -->
                                    <!-- Team #1 -->
                                    <div class="alc-teams-legend__team">
                                        <span class="alc-teams-legend__team-color alc-teams-legend__team-color--color-4"></span>
                                        <img src="assets/images/samples/logos/lucky_clovers_shield.png" class="alc-teams-legend__team-logo" alt="Lucky Clovers">
                                    </div>
                                    <!-- Team #1 / End -->

                                </div>
                                <!-- Teams / End -->

                                <a href="_soccer_event-team-stats.html" class="btn btn-default btn-outline btn-xs">Full Team Stats</a>
                            </div>
                        </header>
                        <div class="card__content">

                            <!-- Game Result -->
                            <div class="game-result">
                                <section class="game-result__section">
                                    <div class="game-result__content mb-0">
                                        <div class="game-result__stats">
                                            <div class="row">
                                                <div class="col-12 col-md-6 order-md-2">
                                                    <div class="game-result__table-stats game-result__table-stats--soccer">
                                                        <table class="table table-wrap-bordered table-thead-color">
                                                            <thead>
                                                            <tr>
                                                                <th colspan="3">Main Statistics</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td>25(14)</td>
                                                                <td>Shots (on goal)</td>
                                                                <td>16(6)</td>
                                                            </tr>
                                                            <tr>
                                                                <td>9</td>
                                                                <td>Corner Kicks</td>
                                                                <td>11</td>
                                                            </tr>
                                                            <tr>
                                                                <td>8</td>
                                                                <td>Saves</td>
                                                                <td>5</td>
                                                            </tr>
                                                            <tr>
                                                                <td>0</td>
                                                                <td>Yellow Cards</td>
                                                                <td>2</td>
                                                            </tr>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Red Cards</td>
                                                                <td>0</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3 order-md-1 game-result__stats-team-1">

                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="circular circular--size-70">
                                                                <div class="circular__bar" data-percent="84.5">
                                                                    <span class="circular__percents">84.5<small>%</small></span>
                                                                </div>
                                                                <span class="circular__label">Shot Accuracy</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="circular circular--size-70">
                                                                <div class="circular__bar" data-percent="62.3">
                                                                    <span class="circular__percents">62.3<small>%</small></span>
                                                                </div>
                                                                <span class="circular__label">Pass Accuracy</span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="spacer"></div>

                                                    <!-- Progress: Sho -->
                                                    <div class="progress-stats">
                                                        <div class="progress__label">Sho</div>
                                                        <div class="progress">
                                                            <div class="progress__bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%; "></div>
                                                        </div>
                                                        <div class="progress__number">25</div>
                                                    </div>
                                                    <!-- Progress: Sho / End -->
                                                    <!-- Progress: Fou -->
                                                    <div class="progress-stats">
                                                        <div class="progress__label">Fou</div>
                                                        <div class="progress">
                                                            <div class="progress__bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%; "></div>
                                                        </div>
                                                        <div class="progress__number">12</div>
                                                    </div>
                                                    <!-- Progress: Fou / End -->
                                                    <!-- Progress: OFF -->
                                                    <div class="progress-stats">
                                                        <div class="progress__label">OFF</div>
                                                        <div class="progress">
                                                            <div class="progress__bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%; "></div>
                                                        </div>
                                                        <div class="progress__number">10</div>
                                                    </div>
                                                    <!-- Progress: OFF / End -->

                                                </div>
                                                <div class="col-6 col-md-3 order-md-3 game-result__stats-team-2">

                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="circular circular--size-70">
                                                                <div class="circular__bar" data-percent="84.5" data-bar-color="#9fe900">
                                                                    <span class="circular__percents">84.5<small>%</small></span>
                                                                </div>
                                                                <span class="circular__label">Shot Accuracy</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="circular circular--size-70">
                                                                <div class="circular__bar" data-percent="62.3" data-bar-color="#9fe900">
                                                                    <span class="circular__percents">62.3<small>%</small></span>
                                                                </div>
                                                                <span class="circular__label">Pass Accuracy</span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="spacer"></div>

                                                    <!-- Progress: Sho -->
                                                    <div class="progress-stats">
                                                        <div class="progress__label">Sho</div>
                                                        <div class="progress">
                                                            <div class="progress__bar progress__bar--success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                                        </div>
                                                        <div class="progress__number">20</div>
                                                    </div>
                                                    <!-- Progress: Sho / End -->
                                                    <!-- Progress: Fou -->
                                                    <div class="progress-stats">
                                                        <div class="progress__label">Fou</div>
                                                        <div class="progress">
                                                            <div class="progress__bar progress__bar--success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                                        </div>
                                                        <div class="progress__number">14</div>
                                                    </div>
                                                    <!-- Progress: Fou / End -->
                                                    <!-- Progress: OFF -->
                                                    <div class="progress-stats">
                                                        <div class="progress__label">OFF</div>
                                                        <div class="progress">
                                                            <div class="progress__bar progress__bar--success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"></div>
                                                        </div>
                                                        <div class="progress__number">12</div>
                                                    </div>
                                                    <!-- Progress: OFF / End -->

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <!-- Ball Possession -->
                                <section class="game-result__section">
                                    <header class="game-result__subheader card__subheader">
                                        <h5 class="game-result__subtitle">Ball Possession</h5>
                                    </header>
                                    <div class="game-result__content">

                                        <div class="spacer-sm"></div>

                                        <!-- Progress: Ball Possession -->
                                        <div class="progress-double-wrapper">
                                            <div class="progress-inner-holder">
                                                <div class="progress__digit progress__digit--left progress__digit--highlight">62%</div>
                                                <div class="progress__double">
                                                    <div class="progress progress--lg">
                                                        <div class="progress__bar" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%;"></div>
                                                    </div>
                                                    <div class="progress progress--lg">
                                                        <div class="progress__bar progress__bar--success" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100" style="width: 38%;"></div>
                                                    </div>
                                                </div>
                                                <div class="progress__digit progress__digit--right progress__digit--highlight">38%</div>
                                            </div>
                                        </div>
                                        <!-- Progress: Ball Possession / End -->

                                    </div>
                                </section>
                                <!-- Ball Possession / End -->


                            </div>
                            <!-- Game Result / End -->

                        </div>
                    </div>
                    <!-- Game Scoreboard / End -->

                    <div class="row">
                        <div class="col-md-6">
                            <!-- Widget: Lineup Table -->
                            <aside class="widget card card--has-table widget--sidebar widget-lineup-table">
                                <div class="widget__title card__header">
                                    <h4>Alchemists Lineup</h4>
                                </div>
                                <div class="widget__content card__content">

                                    <!-- Lineup Table -->
                                    <div class="table-responsive">
                                        <table class="table lineup-table">
                                            <thead>
                                            <tr>
                                                <th class="lineup__num">NBR</th>
                                                <th class="lineup__pos">POS</th>
                                                <th class="lineup__name">Player Name</th>
                                                <th class="lineup__info"></th>
                                            </tr>
                                            </thead>
                                            <tbody>


                                            <tr>
                                                <td class="lineup__num">01</td>
                                                <td class="lineup__pos">GK</td>
                                                <td class="lineup__name">Nick Rodgers</td>
                                                <td class="lineup__info"><i class="icon-svg "></i></td>
                                            </tr>


                                            <tr>
                                                <td class="lineup__num">04</td>
                                                <td class="lineup__pos">DF</td>
                                                <td class="lineup__name">Mark Ironson</td>
                                                <td class="lineup__info"><i class="icon-svg "></i></td>
                                            </tr>


                                            <tr>
                                                <td class="lineup__num">03</td>
                                                <td class="lineup__pos">DF</td>
                                                <td class="lineup__name">Brian Kingster</td>
                                                <td class="lineup__info"><i class="icon-svg icon-red-card"></i></td>
                                            </tr>


                                            <tr>
                                                <td class="lineup__num">22</td>
                                                <td class="lineup__pos">DF</td>
                                                <td class="lineup__name">James Girobilli</td>
                                                <td class="lineup__info"><i class="icon-svg "></i></td>
                                            </tr>


                                            <tr>
                                                <td class="lineup__num">05</td>
                                                <td class="lineup__pos">DF</td>
                                                <td class="lineup__name">Thomas Black</td>
                                                <td class="lineup__info"><i class="icon-svg "></i></td>
                                            </tr>


                                            <tr>
                                                <td class="lineup__num">08</td>
                                                <td class="lineup__pos">MF</td>
                                                <td class="lineup__name">Christofer Grass</td>
                                                <td class="lineup__info"><i class="icon-svg icon-soccer-ball"></i></td>
                                            </tr>


                                            <tr>
                                                <td class="lineup__num">02</td>
                                                <td class="lineup__pos">MF</td>
                                                <td class="lineup__name">Spike Arrowhead</td>
                                                <td class="lineup__info"><i class="icon-svg "></i></td>
                                            </tr>


                                            <tr>
                                                <td class="lineup__num">26</td>
                                                <td class="lineup__pos">MF</td>
                                                <td class="lineup__name">Griffin Peterson</td>
                                                <td class="lineup__info"><i class="icon-svg "></i></td>
                                            </tr>


                                            <tr>
                                                <td class="lineup__num">07</td>
                                                <td class="lineup__pos">FD</td>
                                                <td class="lineup__name">James Messinal</td>
                                                <td class="lineup__info"><i class="icon-svg "></i></td>
                                            </tr>


                                            <tr>
                                                <td class="lineup__num">09</td>
                                                <td class="lineup__pos">FD</td>
                                                <td class="lineup__name">Franklin Stevens</td>
                                                <td class="lineup__info"><i class="icon-svg icon-soccer-ball"></i></td>
                                            </tr>


                                            <tr>
                                                <td class="lineup__num">18</td>
                                                <td class="lineup__pos">FD</td>
                                                <td class="lineup__name">David Hawkins</td>
                                                <td class="lineup__info"><i class="icon-svg "></i></td>
                                            </tr>


                                            <tr>
                                                <td class="lineup__num" colspan="2">Team Coach</td>
                                                <td class="lineup__name">Robert Frankson</td>
                                                <td class="lineup__info"><i class="icon-svg "></i></td>
                                            </tr>


                                            <tr>
                                                <th colspan="4" class="lineup__subheader">Substitute Players</th>
                                            </tr>

                                            <tr>
                                                <td class="lineup__num">32</td>
                                                <td class="lineup__pos">GK</td>
                                                <td class="lineup__name">Taylor Redner</td>
                                                <td class="lineup__info"><i class="icon-svg "></i></td>
                                            </tr>
                                            <tr>
                                                <td class="lineup__num">27</td>
                                                <td class="lineup__pos">DF</td>
                                                <td class="lineup__name">Christian Netteron</td>
                                                <td class="lineup__info"><i class="icon-svg "></i></td>
                                            </tr>
                                            <tr>
                                                <td class="lineup__num">11</td>
                                                <td class="lineup__pos">MF</td>
                                                <td class="lineup__name">Alex Walterston</td>
                                                <td class="lineup__info"><i class="icon-svg "></i></td>
                                            </tr>
                                            <tr>
                                                <td class="lineup__num">19</td>
                                                <td class="lineup__pos">FD</td>
                                                <td class="lineup__name">Kirk Hetfield</td>
                                                <td class="lineup__info"><i class="icon-svg "></i></td>
                                            </tr>
                                            <tr>
                                                <td class="lineup__num">25</td>
                                                <td class="lineup__pos">FD</td>
                                                <td class="lineup__name">James Hammet</td>
                                                <td class="lineup__info"><i class="icon-svg "></i></td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- Lineup Table / End -->

                                </div>
                            </aside>
                            <!-- Widget: Lineup Table / End -->
                        </div>
                        <div class="col-md-6">
                            <!-- Widget: Lineup Table Alt -->
                            <aside class="widget card card--alt-color card--has-table widget--sidebar widget-lineup-table">
                                <div class="widget__title card__header">
                                    <h4>Clovers Lineup</h4>
                                </div>
                                <div class="widget__content card__content">

                                    <!-- Lineup Table -->
                                    <div class="table-responsive">
                                        <table class="table lineup-table">
                                            <thead>
                                            <tr>
                                                <th class="lineup__num">NBR</th>
                                                <th class="lineup__pos">POS</th>
                                                <th class="lineup__name">Player Name</th>
                                                <th class="lineup__info"></th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            <tr>
                                                <td class="lineup__num">04</td>
                                                <td class="lineup__pos">DF</td>
                                                <td class="lineup__name">Danny Stark</td>
                                                <td class="lineup__info"><i class="icon-svg "></i></td>
                                            </tr>


                                            <tr>
                                                <td class="lineup__num">03</td>
                                                <td class="lineup__pos">DF</td>
                                                <td class="lineup__name">Martin Pierto</td>
                                                <td class="lineup__info"><i class="icon-svg "></i></td>
                                            </tr>


                                            <tr>
                                                <td class="lineup__num">07</td>
                                                <td class="lineup__pos">DF</td>
                                                <td class="lineup__name">Brad Rockers</td>
                                                <td class="lineup__info"><i class="icon-svg "></i></td>
                                            </tr>


                                            <tr>
                                                <td class="lineup__num">05</td>
                                                <td class="lineup__pos">DF</td>
                                                <td class="lineup__name">Johnny Griffin</td>
                                                <td class="lineup__info"><i class="icon-svg icon-yellow-card"></i></td>
                                            </tr>


                                            <tr>
                                                <td class="lineup__num">08</td>
                                                <td class="lineup__pos">MD</td>
                                                <td class="lineup__name">Rick Valentine</td>
                                                <td class="lineup__info"><i class="icon-svg icon-out"></i></td>
                                            </tr>


                                            <tr>
                                                <td class="lineup__num">02</td>
                                                <td class="lineup__pos">MF</td>
                                                <td class="lineup__name">Alphonse Tucker</td>
                                                <td class="lineup__info"><i class="icon-svg "></i></td>
                                            </tr>


                                            <tr>
                                                <td class="lineup__num">26</td>
                                                <td class="lineup__pos">MF</td>
                                                <td class="lineup__name">Wally Christison</td>
                                                <td class="lineup__info"><i class="icon-svg icon-yellow-card"></i></td>
                                            </tr>


                                            <tr>
                                                <td class="lineup__num">22</td>
                                                <td class="lineup__pos">FD</td>
                                                <td class="lineup__name">Adam Howlett</td>
                                                <td class="lineup__info"><i class="icon-svg "></i></td>
                                            </tr>


                                            <tr>
                                                <td class="lineup__num">09</td>
                                                <td class="lineup__pos">FD</td>
                                                <td class="lineup__name">Michael Neter</td>
                                                <td class="lineup__info"><i class="icon-svg "></i></td>
                                            </tr>


                                            <tr>
                                                <td class="lineup__num">18</td>
                                                <td class="lineup__pos">FD</td>
                                                <td class="lineup__name">Chris Balleron</td>
                                                <td class="lineup__info"><i class="icon-svg "></i></td>
                                            </tr>


                                            <tr>
                                                <td class="lineup__num">20</td>
                                                <td class="lineup__pos">FD</td>
                                                <td class="lineup__name">David Hawkins</td>
                                                <td class="lineup__info"><i class="icon-svg "></i></td>
                                            </tr>


                                            <tr>
                                                <td class="lineup__num" colspan="2">Team Coach</td>
                                                <td class="lineup__name">Carter Stevens</td>
                                                <td class="lineup__info"><i class="icon-svg "></i></td>
                                            </tr>


                                            <tr>
                                                <th colspan="4" class="lineup__subheader">Substitute Players</th>
                                            </tr>

                                            <tr>
                                                <td class="lineup__num">32</td>
                                                <td class="lineup__pos">GK</td>
                                                <td class="lineup__name">Joe D’Amico</td>
                                                <td class="lineup__info"><i class="icon-svg "></i></td>
                                            </tr>
                                            <tr>
                                                <td class="lineup__num">27</td>
                                                <td class="lineup__pos">DF</td>
                                                <td class="lineup__name">Thomas Kent</td>
                                                <td class="lineup__info"><i class="icon-svg "></i></td>
                                            </tr>
                                            <tr>
                                                <td class="lineup__num">11</td>
                                                <td class="lineup__pos">MF</td>
                                                <td class="lineup__name">Phillip West</td>
                                                <td class="lineup__info"><i class="icon-svg "></i></td>
                                            </tr>
                                            <tr>
                                                <td class="lineup__num">19</td>
                                                <td class="lineup__pos">FD</td>
                                                <td class="lineup__name">Markus Jackson</td>
                                                <td class="lineup__info"><i class="icon-svg icon-in"></i></td>
                                            </tr>
                                            <tr>
                                                <td class="lineup__num">25</td>
                                                <td class="lineup__pos">FD</td>
                                                <td class="lineup__name">Nicholas Wayne</td>
                                                <td class="lineup__info"><i class="icon-svg "></i></td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- Lineup Table / End -->

                                </div>
                            </aside>
                            <!-- Widget: Lineup Table Alt / End -->
                        </div>
                    </div>

                    <!-- Post Comments -->
                    <div class="post-comments card card--lg">
                        <header class="post-commments__header card__header">
                            <h4>Comments (18)</h4>
                        </header>
                        <div class="post-comments__content card__content">

                            <ul class="comments">
                                <li class="comments__item">
                                    <div class="comments__inner">
                                        <header class="comment__header">
                                            <div class="comment__author">
                                                <figure class="comment__author-avatar">
                                                    <img src="assets/images/samples/avatar-9.jpg" alt="">
                                                </figure>
                                                <div class="comment__author-info">
                                                    <h5 class="comment__author-name">Jake Casspon</h5>
                                                    <time class="comment__post-date" datetime="2016-08-23">2 hours ago</time>
                                                </div>
                                            </div>
                                            <div class="comment__reply">
                                                <a href="#" class="comment__reply-link btn btn-link btn-xs">Reply</a>
                                            </div>
                                        </header>
                                        <div class="comment__body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etolor dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                                        </div>
                                    </div>
                                </li>
                                <li class="comments__item">
                                    <div class="comments__inner">
                                        <header class="comment__header">
                                            <div class="comment__author">
                                                <figure class="comment__author-avatar">
                                                    <img src="assets/images/samples/avatar-10.jpg" alt="">
                                                </figure>
                                                <div class="comment__author-info">
                                                    <h5 class="comment__author-name">Jennifer Stevens</h5>
                                                    <time class="comment__post-date" datetime="2016-08-23">5 hours ago</time>
                                                </div>
                                            </div>
                                            <div class="comment__reply">
                                                <a href="#" class="comment__reply-link btn btn-link btn-xs">Reply</a>
                                            </div>
                                        </header>
                                        <div class="comment__body">
                                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.
                                        </div>
                                    </div>
                                    <ul class="comments--children">
                                        <li class="comments__item">
                                            <div class="comments__inner">
                                                <header class="comment__header">
                                                    <div class="comment__author">
                                                        <figure class="comment__author-avatar">
                                                            <img src="assets/images/samples/avatar-7.jpg" alt="">
                                                        </figure>
                                                        <div class="comment__author-info">
                                                            <h5 class="comment__author-name">The Speedtester</h5>
                                                            <time class="comment__post-date" datetime="2016-08-23">3 hours ago</time>
                                                        </div>
                                                    </div>
                                                    <div class="comment__reply">
                                                        <a href="#" class="comment__reply-link btn btn-link btn-xs">Reply</a>
                                                    </div>
                                                </header>
                                                <div class="comment__body">
                                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="comments__item">
                                    <div class="comments__inner">
                                        <header class="comment__header">
                                            <div class="comment__author">
                                                <figure class="comment__author-avatar">
                                                    <img src="assets/images/samples/avatar-11.jpg" alt="">
                                                </figure>
                                                <div class="comment__author-info">
                                                    <h5 class="comment__author-name">Marina Universe</h5>
                                                    <time class="comment__post-date" datetime="2016-08-23">5 hours ago</time>
                                                </div>
                                            </div>
                                            <div class="comment__reply">
                                                <a href="#" class="comment__reply-link btn btn-link btn-xs">Reply</a>
                                            </div>
                                        </header>
                                        <div class="comment__body">
                                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <!-- Comments Pagination -->
                            <nav aria-label="Comments Pavigation" class="post__comments-pagination" aria-label="Comments navigation">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><span class="page-link">...</span></li>
                                    <li class="page-item"><a class="page-link" href="#">16</a></li>
                                </ul>
                            </nav>
                            <!-- Comments Pagination / End -->

                        </div>
                    </div>
                    <!-- Post Comments / End -->

                </div>
                <!-- Content / End -->

                <!-- Sidebar -->
                <div class="sidebar col-lg-4">

                    <!-- Widget: Team Info -->
                    <div class="widget widget--sidebar card card--no-paddings widget-event-info">
                        <div class="widget__title card__header">
                            <h4>Game Information</h4>
                        </div>
                        <div class="widget__content card__content">
                            <!-- Google Map -->
                            <div class="gm-map gm-map--sm alc-event-gmap" data-map-style="default" data-map-address="" data-map-zoom="15" data-map-type-control="false" data-street-view-control="false" data-fullscreen-control="false" data-zoom-control="false"></div>
                            <!-- Google Map / End -->

                            <ul class="alc-event-info list-unstyled">

                                <li class="alc-event-info__item">
										<span class="alc-event-info__icon">
											<i class="icon-svg icon-map-pin"></i>
										</span>
                                    <span class="alc-event-info__value">Central Park Stadium (New York, USA)</span>
                                </li>
                                <li class="alc-event-info__item">
										<span class="alc-event-info__icon">
											<i class="icon-svg icon-trophy-new"></i>
										</span>
                                    <span class="alc-event-info__value">West League 2016 - Week 9</span>
                                </li>
                                <li class="alc-event-info__item">
										<span class="alc-event-info__icon">
											<i class="icon-svg icon-calendar"></i>
										</span>
                                    <span class="alc-event-info__value">Saturday, March 24th, 2015 - 4:00pm EST</span>
                                </li>
                                <li class="alc-event-info__item">
										<span class="alc-event-info__icon">
											<i class="icon-svg icon-whistle"></i>
										</span>
                                    <span class="alc-event-info__value">M. Refree, T. Addit &amp; J. Swanson</span>
                                </li>
                                <li class="alc-event-info__item">
										<span class="alc-event-info__icon">
											<i class="icon-svg icon-person"></i>
										</span>
                                    <span class="alc-event-info__value">12.700 Attendance (18.000 Capacity)</span>
                                </li>

                                <li class="alc-event-info__item alc-event-info__item--desc">
                                    <span class="alc-event-info__label">Additional Info:</span>
                                    <span class="alc-event-info__desc">Lorem ipsum dolor sit amet, consectetur dere adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</span>
                                </li>

                            </ul>

                        </div>
                    </div>
                    <!-- Widget: Team Info / End -->

                    <!-- Widget: Featured Player -->
                    <aside class="widget card widget--sidebar widget-player widget-player--soccer">
                        <div class="widget__title card__header">
                            <h4>Players Overview</h4>
                        </div>

                        <div class="widget__content card__content">
                            <div class="widget-player__ribbon">
                                <div class="fas fa-star"></div>
                            </div>
                            <figure class="widget-player__photo">
                                <img src="assets/images/soccer/samples/_soccer_widget-featured-player.png" alt="Frank Stevens">
                            </figure>
                            <header class="widget-player__header clearfix">
                                <div class="widget-player__number">07</div>
                                <h4 class="widget-player__name">
                                    <span class="widget-player__first-name">Frank</span>
                                    <span class="widget-player__last-name">Stevens</span>
                                </h4>
                            </header>
                            <div class="widget-player__content">
                                <div class="widget-player__content-inner">
                                    <div class="widget-player__stat widget-player__goals">
                                        <div class="widget-player__stat-number">1</div>
                                        <h6 class="widget-player__stat-label">Goals</h6>
                                    </div>
                                    <div class="widget-player__stat widget-player__shots">
                                        <div class="widget-player__stat-number">2</div>
                                        <h6 class="widget-player__stat-label">Shots</h6>
                                    </div>
                                    <div class="widget-player__stat widget-player__ast">
                                        <div class="widget-player__stat-number">1</div>
                                        <h6 class="widget-player__stat-label">Assists</h6>
                                    </div>
                                    <div class="widget-player__stat widget-player__played">
                                        <div class="widget-player__stat-number">64</div>
                                        <h6 class="widget-player__stat-label">Played</h6>
                                    </div>
                                </div>

                                <div class="widget-player__content-alt">
                                    <!-- Progress: SHOT ACC -->
                                    <div class="progress-stats">
                                        <div class="progress__label">SHOT ACC</div>
                                        <div class="progress">
                                            <div class="progress__bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 96%;"></div>
                                        </div>
                                        <div class="progress__number">96%</div>
                                    </div>
                                    <!-- Progress: SHOT ACC / End -->
                                    <!-- Progress: PASS ACC -->
                                    <div class="progress-stats">
                                        <div class="progress__label">PASS ACC</div>
                                        <div class="progress">
                                            <div class="progress__bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 74%;"></div>
                                        </div>
                                        <div class="progress__number">74%</div>
                                    </div>
                                    <!-- Progress: PASS ACC / End -->
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table alc-table-stats alc-widget-player__table">
                                <thead>
                                <tr>
                                    <th>Player</th>
                                    <th>Team</th>
                                    <th>Stat</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="alc-widget-player__table-player">
                                            <div class="alc-widget-player__table-icon">
                                                <div class="alc-widget-player__table-icon-wrap">
                                                    <i class="icon-svg icon-arrow-board"></i>
                                                </div>
                                            </div>
                                            <div class="alc-widget-player__table-info">
                                                <h5 class="alc-widget-player__table-title">James Messinal</h5>
                                                <span class="alc-widget-player__table-subtitle">Point Guard</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <img src="assets/images/soccer/logos/alchemists_s_shield.png" alt="Alchemists">
                                    </td>
                                    <td>
                                        <div class="alc-widget-player__table-stat">
                                            <div class="alc-widget-player__table-value">89%</div>
                                            <div class="alc-widget-player__table-label">Pass.Acc</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="alc-widget-player__table-player">
                                            <div class="alc-widget-player__table-icon">
                                                <div class="alc-widget-player__table-icon-wrap">
                                                    <i class="icon-svg icon-crosshair"></i>
                                                </div>
                                            </div>
                                            <div class="alc-widget-player__table-info">
                                                <h5 class="alc-widget-player__table-title">Johnny Griffin</h5>
                                                <span class="alc-widget-player__table-subtitle">Shooting guard</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <img src="assets/images/samples/logos/lucky_clovers_shield.png" alt="Lucky Clovers">
                                    </td>
                                    <td>
                                        <div class="alc-widget-player__table-stat">
                                            <div class="alc-widget-player__table-value">34</div>
                                            <div class="alc-widget-player__table-label">Shots</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="alc-widget-player__table-player">
                                            <div class="alc-widget-player__table-icon">
                                                <div class="alc-widget-player__table-icon-wrap">
                                                    <i class="icon-svg icon-smile"></i>
                                                </div>
                                            </div>
                                            <div class="alc-widget-player__table-info">
                                                <h5 class="alc-widget-player__table-title">Christofer Grass</h5>
                                                <span class="alc-widget-player__table-subtitle">Center</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <img src="assets/images/soccer/logos/alchemists_s_shield.png" alt="Alchemists">
                                    </td>
                                    <td>
                                        <div class="alc-widget-player__table-stat">
                                            <div class="alc-widget-player__table-value">8</div>
                                            <div class="alc-widget-player__table-label">BLKS</div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </aside>
                    <!-- Widget: Featured Player / End -->

                    <!-- Widget: Standings -->
                    <aside class="widget card widget--sidebar widget-standings">
                        <div class="widget__title card__header card__header--has-btn">
                            <h4>West League 2018</h4>
                            <a href="#" class="btn btn-default btn-outline btn-xs card-header__button">See All Stats</a>
                        </div>
                        <div class="widget__content card__content">
                            <div class="table-responsive">
                                <table class="table table-hover table-standings">
                                    <thead>
                                    <tr>
                                        <th>Team Positions</th>
                                        <th>W</th>
                                        <th>L</th>
                                        <th>D</th>
                                        <th>PTS</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <td>
                                            <div class="team-meta">
                                                <figure class="team-meta__logo">
                                                    <img src="assets/images/samples/logos/pirates_shield.png" alt="">
                                                </figure>
                                                <div class="team-meta__info">
                                                    <h6 class="team-meta__name">L.A Pirates</h6>
                                                    <span class="team-meta__place">Bebop Institute</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>36</td>
                                        <td>14</td>
                                        <td>10</td>
                                        <td>118</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="team-meta">
                                                <figure class="team-meta__logo">
                                                    <img src="assets/images/samples/logos/sharks_shield.png" alt="">
                                                </figure>
                                                <div class="team-meta__info">
                                                    <h6 class="team-meta__name">Sharks</h6>
                                                    <span class="team-meta__place">Marine College</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>32</td>
                                        <td>20</td>
                                        <td>8</td>
                                        <td>104</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="team-meta">
                                                <figure class="team-meta__logo">
                                                    <img src="assets/images/samples/logos/alchemists_b_shield.png" alt="">
                                                </figure>
                                                <div class="team-meta__info">
                                                    <h6 class="team-meta__name">The Alchemists</h6>
                                                    <span class="team-meta__place">Eric Bros School</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>32</td>
                                        <td>21</td>
                                        <td>7</td>
                                        <td>103</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="team-meta">
                                                <figure class="team-meta__logo">
                                                    <img src="assets/images/samples/logos/ocean_kings_shield.png" alt="">
                                                </figure>
                                                <div class="team-meta__info">
                                                    <h6 class="team-meta__name">Ocean Kings</h6>
                                                    <span class="team-meta__place">Bay College</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>30</td>
                                        <td>20</td>
                                        <td>10</td>
                                        <td>100</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="team-meta">
                                                <figure class="team-meta__logo">
                                                    <img src="assets/images/samples/logos/red_wings_shield.png" alt="">
                                                </figure>
                                                <div class="team-meta__info">
                                                    <h6 class="team-meta__name">Red Wings</h6>
                                                    <span class="team-meta__place">Icarus College</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>28</td>
                                        <td>24</td>
                                        <td>8</td>
                                        <td>92</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="team-meta">
                                                <figure class="team-meta__logo">
                                                    <img src="assets/images/samples/logos/lucky_clovers_shield.png" alt="">
                                                </figure>
                                                <div class="team-meta__info">
                                                    <h6 class="team-meta__name">Lucky Clovers</h6>
                                                    <span class="team-meta__place">St. Patrick’s Institute</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>27</td>
                                        <td>24</td>
                                        <td>9</td>
                                        <td>90</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="team-meta">
                                                <figure class="team-meta__logo">
                                                    <img src="assets/images/samples/logos/draconians_shield.png" alt="">
                                                </figure>
                                                <div class="team-meta__info">
                                                    <h6 class="team-meta__name">Draconians</h6>
                                                    <span class="team-meta__place">High Rock College</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>25</td>
                                        <td>28</td>
                                        <td>7</td>
                                        <td>82</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="team-meta">
                                                <figure class="team-meta__logo">
                                                    <img src="assets/images/samples/logos/bloody_wave_shield.png" alt="">
                                                </figure>
                                                <div class="team-meta__info">
                                                    <h6 class="team-meta__name">Bloody Wave</h6>
                                                    <span class="team-meta__place">Atlantic School</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>24</td>
                                        <td>30</td>
                                        <td>6</td>
                                        <td>78</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </aside>
                    <!-- Widget: Standings / End -->

                    <!-- Event Post -->
                    <div class="posts posts--cards post-list">
                        <div class="posts__item posts__item--card posts__item--category-1 card">
                            <figure class="posts__thumb">
                                <div class="posts__cat">
                                    <span class="label posts__cat-label">The Team</span>
                                </div>
                                <a href="_soccer_event-news-recap.html"><img src="assets/images/soccer/samples/_soccer_post-img1.jpg" alt=""></a>
                            </figure>
                            <div class="posts__inner card__content">
                                <a href="#" class="posts__cta"></a>
                                <time datetime="2016-08-23" class="posts__date">April 26th, 2020</time>
                                <h6 class="posts__title"><a href="#">Frank Stevens shined in the victory 2-0 against The Lucky Clovers</a></h6>
                                <div class="posts__excerpt">
                                    Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini veniam, quis nostrud en derum sum laborem.
                                </div>
                            </div>
                            <footer class="posts__footer card__footer">
                                <div class="post-author">
                                    <figure class="post-author__avatar">
                                        <img src="assets/images/samples/avatar-2.jpg" alt="Post Author Avatar">
                                    </figure>
                                    <div class="post-author__info">
                                        <h4 class="post-author__name">Jessica Hoops</h4>
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
                    <!-- Event Post / End -->

                    <!-- Widget: Event Scheduled -->
                    <div class="widget card card--no-paddings widget--sidebar widget-event-scheduled">
                        <div class="widget__title card__header">
                            <h4>Next Rivals</h4>
                        </div>
                        <div class="widget__content card__content">
                            <ul class="alc-event-scheduled">

                                <!-- Game #0 -->
                                <li class="alc-event-scheduled__item">
                                    <div class="alc-event-scheduled__header justify-content-center">
                                        <div class="alc-event-scheduled__title">Friday, April 5</div>
                                    </div>
                                    <div class="alc-event-scheduled__content">
                                        <div class="alc-event-scheduled__team">
                                            <figure class="alc-event-scheduled__img">
                                                <img src="assets/images/samples/logos/alchemists_buy_tickets_v2.png" alt="Alchemists">
                                            </figure>
                                            <div class="alc-event-scheduled__details">
                                                <h4 class="alc-event-scheduled__team-name">ALC</h4>
                                                <div class="alc-event-scheduled__team-info">Alchemists</div>
                                            </div>
                                        </div>
                                        <div class="alc-event-scheduled__team">
                                            <figure class="alc-event-scheduled__img">
                                                <img src="assets/images/samples/logos/pirates-shield-sm.png" alt="L.A. Pirates">
                                            </figure>
                                            <div class="alc-event-scheduled__details">
                                                <h4 class="alc-event-scheduled__team-name">LAP</h4>
                                                <div class="alc-event-scheduled__team-info">L.A. Pirates</div>
                                            </div>
                                        </div>
                                        <div class="alc-event-scheduled__divider">vs</div>
                                    </div>
                                </li>
                                <!-- Game #0 / End -->
                                <!-- Game #1 -->
                                <li class="alc-event-scheduled__item">
                                    <div class="alc-event-scheduled__header justify-content-center">
                                        <div class="alc-event-scheduled__title">Saturday, April 6</div>
                                    </div>
                                    <div class="alc-event-scheduled__content">
                                        <div class="alc-event-scheduled__team">
                                            <figure class="alc-event-scheduled__img">
                                                <img src="assets/images/samples/logos/lucky_clovers_buy_tickets_v2.png" alt="Lucky Clovers">
                                            </figure>
                                            <div class="alc-event-scheduled__details">
                                                <h4 class="alc-event-scheduled__team-name">CLO</h4>
                                                <div class="alc-event-scheduled__team-info">Lucky Clovers</div>
                                            </div>
                                        </div>
                                        <div class="alc-event-scheduled__team">
                                            <figure class="alc-event-scheduled__img">
                                                <img src="assets/images/samples/logos/sharks-shield-sm.png" alt="Sharks">
                                            </figure>
                                            <div class="alc-event-scheduled__details">
                                                <h4 class="alc-event-scheduled__team-name">SHR</h4>
                                                <div class="alc-event-scheduled__team-info">Sharks</div>
                                            </div>
                                        </div>
                                        <div class="alc-event-scheduled__divider">vs</div>
                                    </div>
                                </li>
                                <!-- Game #1 / End -->

                            </ul>
                        </div>
                    </div>
                    <!-- Widget: Event Scheduled / End -->

                </div>
                <!-- Sidebar / End -->
            </div>

        </div>
    </div>

    <!-- Content / End -->

    <div class="modal fade" id="add_league_modal" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="myModal">
                    <div class="modal-header">
                        <h4 style="color:#3F3F3F">League Information</h4>
                        <i class="fas fa-times modal-close" onclick="closeModal()"></i>
                    </div>
                    <div class="modal-body form-modal">
                        <form id="league_form">
                            <input type="hidden" name="operation_mode" id="operation_mode" value="create"><!--operation -->
                            <div class="row w-100 m-0 mb-3">
                                <div class="col">
                                    <h5 style="color:#3F3F3F">Name</h5>
                                </div>
                                <div class="col">
                                    <div class="inp-group">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                            </div>
                            <div class="row w-100 m-0 mb-3">
                                <div class="col">
                                    <h5 style="color:#3F3F3F">Description</h5>
                                </div>
                                <div class="col">
                                    <div class="inp-group">
                                        <input type="text" name="description" id="description" class="form-control" placeholder="Description">
                                    </div>
                                </div>
                            </div>
                            <div class="row w-100 m-0 mb-3">
                                <div class="col">
                                    <h5 style="color:#3F3F3F">Sport Name</h5>
                                </div>
                                <div class="col">
                                    <div class="inp-group">
                                        <select name="sport_id" id="sport_id" class="form-control">
                                            <option value="">Select Sport</option>
                                            @if(isset($sport_name))
                                                <option value="{{ $sport_id }}" selected>{{ $sport_name }}</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Season Name -->
                            <div class="row w-100 m-0 mb-3">
                                <div class="col">
                                    <h5 style="color:#3F3F3F">Season Name</h5>
                                </div>
                                <div class="col">
                                    <div class="inp-group">
                                        <select name="season_id" id="season_id" class="form-control">
                                            <option value="">Select Season</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- League Type -->
                            <div class="row w-100 m-0 mb-3">
                                <div class="col">
                                    <h5 style="color:#3F3F3F">
                                        League Type
                                    </h5>
                                </div>
                                <div class="col">
                                    <div class="inp-group">
                                        <select name="league_type_id" id="type_id" class="form-control">
                                            <option value="">Select League Type</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" id="update_id" name="id">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button id="createButton" class="btn btn-success" onclick="createPost()">Add</button>
                        <button id="updateButton" class="btn btn-success d-none" onclick="updatePost()">Update</button>
                        <button type="button" class="btn btn-secondary" onclick="closeModal()">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <table id="event_table" class="display nowrap cell-border" style="width:100%">
        <thead>
        <tr>
            <th>#</th>
            <th>League Name</th>
            <th>Description</th>
            <th>Season</th>
            <th>League Type</th>
            <th>Detail</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
    </table>
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            eventsPosition();
            const game_id = '{{ $game->id }}';
            dataTable = $('#event_table').DataTable({
                order: [
                    [0, 'ASC']
                ],
                processing: true,
                serverSide: true,
                scrollX: true,
                scrollY: true,
                ajax: {
                    url: '{{ route('sport.league.fetch') }}',
                    type: 'GET',
                    dataType: 'json',
                    data: function(d) {
                        d.game_id = game_id; // Sport ID'yi gönder
                    },
                    error: function(xhr, error, thrown) {
                        console.error('Ajax error:', error);
                        console.error('XHR Response:', xhr.responseText);
                        alert('An error occurred: ' + xhr.responseText); // Hata mesajını uyarı olarak göster
                    }
                },
                columns: [
                    {data: 'DT_RowIndex', orderable: false, searchable: false},
                    {data: 'name'},
                    {data: 'description', orderable: false},
                    {data: 'season_id', orderable: false},
                    {data: 'league_type_id', orderable: false},
                    {data: 'detail', orderable: false, searchable: false},
                    {data: 'update', orderable: false, searchable: false},
                    {data: 'delete', orderable: false, searchable: false},
                ],
                success: function(data) {
                    console.log('Data fetched successfully:', data);
                }
            });

        });

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape') {
                const topSwal = Swal.getPopup(); // SweetAlert modali varsa bunu alır
                if (topSwal && Swal.isVisible()) { // SweetAlert modali açıkken
                    Swal.close(); // Sadece SweetAlert error modalını kapat
                    event.stopPropagation(); // Diğer modalın kapanmasını engelle
                }
            }
        });
        $(document).ready(function () {
            // Select elements
            var updateButton = $('#updateButton');
            var nameField = $('#name');  // Name field (do not consider for enabling update button)
            var descriptionField = $('#description');
            var sportSelect = $('#sport_id');
            var seasonSelect = $('#season_id');
            var typeSelect = $('#type_id');

            // Disable the update button by default
            updateButton.addClass('disabled');  // Disable the button
            updateButton.attr('onclick', '');  // Remove onclick functionality

            // Function to detect changes and enable/disable the update button
            function checkForChanges() {
                // Check if any of the fields other than name have been modified
                if (descriptionField.val() || sportSelect.val() || seasonSelect.val() || typeSelect.val() || nameField.val())  {
                    // Enable the update button and set the onclick function
                    updateButton.removeClass('disabled');  // Remove 'disabled' class
                    updateButton.attr('onclick', 'updatePost()');  // Set onclick function
                } else {
                    // If no changes, keep the update button disabled
                    updateButton.addClass('disabled');  // Add 'disabled' class
                    updateButton.attr('onclick', '');  // Remove onclick function
                }
            }

            // Bind change event to fields (excluding the name field)
            nameField.on('input',checkForChanges)
            descriptionField.on('input', checkForChanges);
            sportSelect.on('change', checkForChanges);
            seasonSelect.on('change', checkForChanges);
            typeSelect.on('change', checkForChanges);

            // You may want to run the checkForChanges function to initialize the state
            checkForChanges();

            // Initialize the form with the current data when updating (e.g., if you're editing a league)
            function populateForm(data) {
                nameField.val(data.name);
                descriptionField.val(data.description);
                sportSelect.val(data.sport_id);
                seasonSelect.val(data.season_id);
                typeSelect.val(data.league_type_id);

                // Show the update button and hide the add button
                $('#createButton').addClass('d-none');
                updateButton.removeClass('d-none');  // Show the update button

                // Disable the update button initially
                updateButton.addClass('disabled');
                updateButton.attr('onclick', '');  // Remove onclick function for now

                // Run the change check to enable the button if there are any changes
                checkForChanges();

            }
            $(document).keydown(function (e) {
                if (e.key === "Enter") {
                    if ($('#add_league_modal').is(':visible') && !$('#updateButton').hasClass('disabled')) {
                        e.preventDefault();
                        createPost();
                    }else if ($('#update_league_modal').is(':visible') && !$('#updateButton').hasClass('disabled')) {
                        updatePost();
                    }
                }
            });

            // Example of function to populate the form when updating
            function populateFormForUpdate(data) {
                populateForm(data);
            }

            // Optional: Reset the form for a fresh "create" mode
            function resetForm() {
                $('#league_form')[0].reset();  // Reset all fields
                updateButton.addClass('disabled');  // Disable the update button
                updateButton.attr('onclick', '');  // Remove onclick functionality
                $('#createButton').removeClass('d-none');  // Show the create button
                updateButton.addClass('d-none');  // Hide the update button
            }

            // Call this when you open the modal for a new item (for creating)
            resetForm();  // Reset the form on modal open
        });


        function eventsPosition() {
            var events = $('.game-timeline__event'); // Tüm eventleri seçiyoruz
            var minute = 0;

            $(events).each(function () {
                minute = $(this).attr('minute'); // 'minute' atributunu alıyoruz
                addEvent(this, minute); // Mevcut event için konumlandırma
            });
        }

        function addEvent(eventElement, minute) {
            // Toplam maç süresi
            const totalMinutes = 90;

            // Dakikaya göre konum hesaplama (%)
            const leftPosition = (minute / totalMinutes) * 100;

            // Stil atama
            $(eventElement).css({
                position: 'absolute',
                left: `${leftPosition}%`,
                marginLeft: '-30px' // CSS uyumluluğu için
            });
        }

    </script>
@endsection
