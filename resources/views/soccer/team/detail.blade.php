@extends('layouts.index')

@section('content')


    <div class="row">

        <!-- Content -->
        <div class="content col-lg-8">

            <!-- Game Scoreboard -->
            <div class="card">
                <header class="card__header card__header--has-btn">
                    <h4>Last Game Results</h4>
                    <a href="#" class="btn btn-default btn-outline btn-xs card-header__button">Check previous Results</a>
                </header>
                <div class="card__content">

                    <!-- Game Result -->
                    <div class="game-result">
                        <section class="game-result__section pt-0">
                            <header class="game-result__header game-result__header--alt">
                                <span class="game-result__league">West League 2016</span>
                                <h3 class="game-result__title">Madison Cube Stadium</h3>
                                <time class="game-result__date" datetime="2017-03-17">Saturday, March 17th, 2017</time>
                            </header>
                            <div class="game-result__content">

                                <!-- 1st Team -->
                                <div class="game-result__team game-result__team--first">
                                    <figure class="game-result__team-logo">
                                        <img src="assets/images/soccer/logos/alchemists_last_game_results_big.png" alt="">
                                    </figure>
                                    <div class="game-result__team-info">
                                        <h5 class="game-result__team-name">Alchemists</h5>
                                        <div class="game-result__team-desc">Elric Bros School</div>
                                    </div>
                                </div>
                                <!-- 1st Team / End -->

                                <div class="game-result__score-wrap">
                                    <div class="game-result__score game-result__score--lg">
                                        <span class="game-result__score-result game-result__score-result--winner">2</span> <span class="game-result__score-dash">-</span> <span class="game-result__score-result game-result__score-result--loser">0</span>
                                    </div>
                                    <div class="game-result__score-label">Final Score</div>
                                </div>

                                <!-- 2nd Team -->
                                <div class="game-result__team game-result__team--second">
                                    <figure class="game-result__team-logo">
                                        <img src="assets/images/samples/logo-l-clovers--sm.png" alt="">
                                    </figure>
                                    <div class="game-result__team-info">
                                        <h5 class="game-result__team-name">Clovers</h5>
                                        <div class="game-result__team-desc">St Paddy's Institute</div>
                                    </div>
                                </div>
                                <!-- 2nd Team / End -->
                            </div>
                        </section>
                        <div class="spacer"></div>
                        <section class="game-result__section">
                            <header class="game-result__header game-result__header--alt">
                                <span class="game-result__goal">Franklin Stevens (22’) <i class="icon-svg icon-soccer-ball"></i></span>
                                <span class="game-result__goal">Christofer Grass (68’) (P) <i class="icon-svg icon-soccer-ball"></i></span>
                            </header>
                            <div class="game-result__content mb-0">
                                <div class="game-result__stats">
                                    <div class="row">
                                        <div class="col-12 col-md-6 order-md-2">
                                            <div class="game-result__table-stats game-result__table-stats--soccer">
                                                <table class="table table-wrap-bordered table-thead-color">
                                                    <thead>
                                                    <tr>
                                                        <th colspan="3">Game Statistics</th>
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
                                                        <td>7</td>
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
                                                        <span class="circular__label">Shot<br> Accuracy</span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="circular circular--size-70">
                                                        <div class="circular__bar" data-percent="62.3">
                                                            <span class="circular__percents">62.3<small>%</small></span>
                                                        </div>
                                                        <span class="circular__label">Pass<br> Accuracy</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="spacer"></div>

                                            <!-- Progress: Assists -->
                                            <div class="progress-stats">
                                                <div class="progress__label">Sho</div>
                                                <div class="progress">
                                                    <div class="progress__bar progress__bar-width-90" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress__number">25</div>
                                            </div>
                                            <!-- Progress: Assists / End -->

                                            <!-- Progress: Fouls -->
                                            <div class="progress-stats">
                                                <div class="progress__label">Fou</div>
                                                <div class="progress">
                                                    <div class="progress__bar progress__bar-width-40" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress__number">12</div>
                                            </div>
                                            <!-- Progress: Fouls / End -->

                                            <!-- Progress: OFF -->
                                            <div class="progress-stats">
                                                <div class="progress__label">OFF</div>
                                                <div class="progress">
                                                    <div class="progress__bar progress__bar-width-30" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress__number">10</div>
                                            </div>
                                            <!-- Progress: OFF / End -->

                                        </div>
                                        <div class="col-6 col-md-3 order-md-3 game-result__stats-team-2">

                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="circular circular--size-70">
                                                        <div class="circular__bar" data-percent="74.6" data-bar-color="#9fe900">
                                                            <span class="circular__percents">74.6<small>%</small></span>
                                                        </div>
                                                        <span class="circular__label">Shot<br> Accuracy</span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="circular circular--size-70">
                                                        <div class="circular__bar" data-percent="53.9" data-bar-color="#9fe900">
                                                            <span class="circular__percents">53.9<small>%</small></span>
                                                        </div>
                                                        <span class="circular__label">Pass<br> Accuracy</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="spacer"></div>

                                            <!-- Progress: Assists -->
                                            <div class="progress-stats">
                                                <div class="progress__label">Sho</div>
                                                <div class="progress">
                                                    <div class="progress__bar progress__bar--success progress__bar-width-80" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress__number">25</div>
                                            </div>
                                            <!-- Progress: Assists / End -->

                                            <!-- Progress: Fouls -->
                                            <div class="progress-stats">
                                                <div class="progress__label">Fou</div>
                                                <div class="progress">
                                                    <div class="progress__bar progress__bar--success progress__bar-width-60" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress__number">14</div>
                                            </div>
                                            <!-- Progress: Fouls / End -->

                                            <!-- Progress: OFF -->
                                            <div class="progress-stats">
                                                <div class="progress__label">OFF</div>
                                                <div class="progress">
                                                    <div class="progress__bar progress__bar--success progress__bar-width-40" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress__number">12</div>
                                            </div>
                                            <!-- Progress: OFF / End -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!-- Game Timeline / End -->

                </div>
            </div>
            <!-- Game Scoreboard / End -->

            <!-- Team Roster: Table -->
            <div class="card card--has-table">
                <div class="card__header card__header--has-btn">
                    <h4>Main Lineup</h4>
                    <a href="_soccer_team-roster.html" class="btn btn-default btn-outline btn-xs card-header__button">See Complete Roster</a>
                </div>
                <div class="card__content">
                    <div class="table-responsive">
                        <table class="table table--lg team-roster-table">
                            <thead>
                            <tr>
                                <th class="team-roster-table__number">NBR</th>
                                <th class="team-roster-table__position">Pos</th>
                                <th class="team-roster-table__name">Player Name</th>
                                <th class="team-roster-table__foot">Foot</th>
                                <th class="team-roster-table__age">Age</th>
                                <th class="team-roster-table__height">Height</th>
                                <th class="team-roster-table__weight">Weight</th>
                                <th class="team-roster-table__college d-none d-sm-table-cell">College</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <td class="team-roster-table__number">01</td>
                                <td class="team-roster-table__position">GK</td>
                                <td class="team-roster-table__name">Nick Rodgers</td>
                                <td class="team-roster-table__foot">Right</td>
                                <td class="team-roster-table__age">18</td>
                                <td class="team-roster-table__height">6’6’’</td>
                                <td class="team-roster-table__weight">205 lbs</td>
                                <td class="team-roster-table__college d-none d-sm-table-cell">South Beach College</td>
                            </tr>
                            <tr>
                                <td class="team-roster-table__number">04</td>
                                <td class="team-roster-table__position">DF</td>
                                <td class="team-roster-table__name">Mark Ironson</td>
                                <td class="team-roster-table__foot">Right</td>
                                <td class="team-roster-table__age">17</td>
                                <td class="team-roster-table__height">6’1’’</td>
                                <td class="team-roster-table__weight">189 lbs</td>
                                <td class="team-roster-table__college d-none d-sm-table-cell">Green Palm College</td>
                            </tr>
                            <tr>
                                <td class="team-roster-table__number">03</td>
                                <td class="team-roster-table__position">DF</td>
                                <td class="team-roster-table__name">Brian Kingster</td>
                                <td class="team-roster-table__foot">Left</td>
                                <td class="team-roster-table__age">16</td>
                                <td class="team-roster-table__height">5’2’’</td>
                                <td class="team-roster-table__weight">186 lbs</td>
                                <td class="team-roster-table__college d-none d-sm-table-cell">Green Palm College</td>
                            </tr>
                            <tr>
                                <td class="team-roster-table__number">22</td>
                                <td class="team-roster-table__position">DF</td>
                                <td class="team-roster-table__name">James Girobilli</td>
                                <td class="team-roster-table__foot">Right</td>
                                <td class="team-roster-table__age">18</td>
                                <td class="team-roster-table__height">6’2’’</td>
                                <td class="team-roster-table__weight">198 lbs</td>
                                <td class="team-roster-table__college d-none d-sm-table-cell">The Sand Bay Institute</td>
                            </tr>
                            <tr>
                                <td class="team-roster-table__number">05</td>
                                <td class="team-roster-table__position">DF</td>
                                <td class="team-roster-table__name">Thomas Black</td>
                                <td class="team-roster-table__foot">Left</td>
                                <td class="team-roster-table__age">17</td>
                                <td class="team-roster-table__height">5’8’’</td>
                                <td class="team-roster-table__weight">194 lbs</td>
                                <td class="team-roster-table__college d-none d-sm-table-cell">South Beach College</td>
                            </tr>
                            <tr>
                                <td class="team-roster-table__number">08</td>
                                <td class="team-roster-table__position">MF</td>
                                <td class="team-roster-table__name">Christofer Grass</td>
                                <td class="team-roster-table__foot">Left</td>
                                <td class="team-roster-table__age">18</td>
                                <td class="team-roster-table__height">5’6’’</td>
                                <td class="team-roster-table__weight">176 lbs</td>
                                <td class="team-roster-table__college d-none d-sm-table-cell">The Sand Bay Institute</td>
                            </tr>
                            <tr>
                                <td class="team-roster-table__number">02</td>
                                <td class="team-roster-table__position">MF</td>
                                <td class="team-roster-table__name">Spike Arrowhead</td>
                                <td class="team-roster-table__foot">Right</td>
                                <td class="team-roster-table__age">17</td>
                                <td class="team-roster-table__height">5’5’’</td>
                                <td class="team-roster-table__weight">180 lbs</td>
                                <td class="team-roster-table__college d-none d-sm-table-cell">Green Palm College</td>
                            </tr>
                            <tr>
                                <td class="team-roster-table__number">26</td>
                                <td class="team-roster-table__position">MF</td>
                                <td class="team-roster-table__name">Griffin Peterson</td>
                                <td class="team-roster-table__foot">Right</td>
                                <td class="team-roster-table__age">17</td>
                                <td class="team-roster-table__height">6’6’’</td>
                                <td class="team-roster-table__weight">184 lbs</td>
                                <td class="team-roster-table__college d-none d-sm-table-cell">South Beach College</td>
                            </tr>
                            <tr>
                                <td class="team-roster-table__number">07</td>
                                <td class="team-roster-table__position">MF</td>
                                <td class="team-roster-table__name">James Messinal</td>
                                <td class="team-roster-table__foot">Left</td>
                                <td class="team-roster-table__age">18</td>
                                <td class="team-roster-table__height">5’8’’</td>
                                <td class="team-roster-table__weight">176 lbs</td>
                                <td class="team-roster-table__college d-none d-sm-table-cell">Green Palm College</td>
                            </tr>
                            <tr>
                                <td class="team-roster-table__number">09</td>
                                <td class="team-roster-table__position">FD</td>
                                <td class="team-roster-table__name">Franklin Stevens</td>
                                <td class="team-roster-table__foot">Right</td>
                                <td class="team-roster-table__age">16</td>
                                <td class="team-roster-table__height">5’9’’</td>
                                <td class="team-roster-table__weight">196 lbs</td>
                                <td class="team-roster-table__college d-none d-sm-table-cell">The Sand Bay Institute</td>
                            </tr>
                            <tr>
                                <td class="team-roster-table__number">18</td>
                                <td class="team-roster-table__position">FD</td>
                                <td class="team-roster-table__name">David Hawkins</td>
                                <td class="team-roster-table__foot">Right</td>
                                <td class="team-roster-table__age">18</td>
                                <td class="team-roster-table__height">6’3’’</td>
                                <td class="team-roster-table__weight">202 lbs</td>
                                <td class="team-roster-table__college d-none d-sm-table-cell">South Beach College</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Team Roster: Table / End -->

            <div class="row">

                <div class="col-md-6">

                    <!-- Widget: Team Stats -->
                    <aside class="widget widget--sidebar card card--has-table widget-team-stats">
                        <div class="widget__title card__header">
                            <h4>Team Stats</h4>
                        </div>
                        <div class="widget__content card__content">
                            <ul class="team-stats-box">
                                <li class="team-stats__item team-stats__item--clean">
                                    <div class="team-stats__icon team-stats__icon--circle">
                                        <div class="team-stats__icon-primary">
                                            <i class="icon-svg icon-soccer-ball"></i>
                                        </div>
                                    </div>
                                    <div class="team-stats__value">2.54</div>
                                    <div class="team-stats__label">Goals Per Game</div>
                                </li>
                                <li class="team-stats__item team-stats__item--clean">
                                    <div class="team-stats__icon team-stats__icon--circle team-stats__icon--shots-ot">
                                        <div class="team-stats__icon-primary">
                                            <i class="icon-svg icon-soccer-ball"></i>
                                        </div>
                                        <div class="team-stats__icon-secondary">
                                            <i class="icon-svg icon-soccer-gate"></i>
                                        </div>
                                    </div>
                                    <div class="team-stats__value">31.6</div>
                                    <div class="team-stats__label">Shots OT Per Game</div>
                                </li>
                                <li class="team-stats__item team-stats__item--clean">
                                    <div class="team-stats__icon team-stats__icon--circle team-stats__icon--shots">
                                        <div class="team-stats__icon-primary">
                                            <i class="icon-svg icon-soccer-ball"></i>
                                        </div>
                                        <div class="team-stats__icon-secondary">
                                            <i class="icon-svg icon-soccer-shots"></i>
                                        </div>
                                    </div>
                                    <div class="team-stats__value">68.9</div>
                                    <div class="team-stats__label">Total Shots Per Game</div>
                                </li>
                                <li class="team-stats__item team-stats__item--clean">
                                    <div class="team-stats__icon team-stats__icon--circle team-stats__icon--assists">
                                        <div class="team-stats__icon-primary">
                                            <i class="icon-svg icon-soccer-ball"></i>
                                        </div>
                                        <span class="team-stats__icon-secondary">A</span>
                                    </div>
                                    <div class="team-stats__value">1.7</div>
                                    <div class="team-stats__label">Goal Assists Per Game</div>
                                </li>
                            </ul>
                        </div>
                    </aside>
                    <!-- Widget: Team Stats / End -->

                </div>
                <div class="col-md-6">

                    <!-- Widget: Awards -->
                    <aside class="widget card widget--sidebar widget-awards">
                        <div class="widget__title card__header">
                            <h4>Our Awards</h4>
                        </div>
                        <div class="widget__content card__content">
                            <div class="awards awards--slider">

                                <div class="awards__item">
                                    <figure class="awards__figure awards__figure--space">
                                        <img src="assets/images/soccer/trophy-04.svg" alt="">
                                    </figure>
                                    <div class="awards__desc">
                                        <h5 class="awards__name">West League Champions</h5>
                                        <div class="awards__date">December 2009</div>
                                        <div class="awards__stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="awards__item">
                                    <figure class="awards__figure awards__figure--space">
                                        <img src="assets/images/soccer/trophy-04.svg" alt="">
                                    </figure>
                                    <div class="awards__desc">
                                        <h5 class="awards__name">East League Champions</h5>
                                        <div class="awards__date">November 2010</div>
                                        <div class="awards__stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="awards__item">
                                    <figure class="awards__figure awards__figure--space">
                                        <img src="assets/images/soccer/trophy-04.svg" alt="">
                                    </figure>
                                    <div class="awards__desc">
                                        <h5 class="awards__name">Big League Champions</h5>
                                        <div class="awards__date">December 2012</div>
                                        <div class="awards__stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </aside>
                    <!-- Widget: Awards / End -->

                </div>
            </div>

            <!-- Schedule & Tickets -->
            <div class="card card--has-table">
                <div class="card__header card__header--has-btn">
                    <h4>Games Schedule</h4>
                    <a href="_soccer_team-schedule.html" class="btn btn-default btn-outline btn-xs card-header__button">See Complete Schedule</a>
                </div>
                <div class="card__content">
                    <div class="table-responsive">
                        <table class="table table-hover team-schedule">
                            <thead>
                            <tr>
                                <th class="team-schedule__date">Date</th>
                                <th class="team-schedule__versus">Versus</th>
                                <th class="team-schedule__time">Time</th>
                                <th class="team-schedule__venue">Venue</th>
                                <th class="team-schedule__tickets">Tickets</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="team-schedule__date">Saturday, Mar 24</td>
                                <td class="team-schedule__versus">
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
                                <td class="team-schedule__time">9:00PM EST</td>
                                <td class="team-schedule__venue">Madison Cube Stadium</td>
                                <td class="team-schedule__tickets">
                                    <a href="#" class="btn btn-xs btn-default btn-outline btn-block ">
                                        Buy Game Tickets
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="team-schedule__date">Friday, May 31</td>
                                <td class="team-schedule__versus">
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
                                <td class="team-schedule__time">9:30PM EST</td>
                                <td class="team-schedule__venue">Alchemists Stadium</td>
                                <td class="team-schedule__tickets">
                                    <a href="#" class="btn btn-xs btn-default btn-outline btn-block disabled">
                                        Sold Out
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="team-schedule__date">Saturday, May 8</td>
                                <td class="team-schedule__versus">
                                    <div class="team-meta">
                                        <figure class="team-meta__logo">
                                            <img src="assets/images/samples/logos/draconians_shield.png" alt="">
                                        </figure>
                                        <div class="team-meta__info">
                                            <h6 class="team-meta__name">Draconians</h6>
                                            <span class="team-meta__place">Wyvern College</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="team-schedule__time">10:00PM EST</td>
                                <td class="team-schedule__venue">Scalding Rock Stadium</td>
                                <td class="team-schedule__tickets">
                                    <a href="#" class="btn btn-xs btn-default btn-outline btn-block ">
                                        Buy Game Tickets
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="team-schedule__date">Friday, May 14</td>
                                <td class="team-schedule__versus">
                                    <div class="team-meta">
                                        <figure class="team-meta__logo">
                                            <img src="assets/images/samples/logos/aqua_keyes_shield.png" alt="">
                                        </figure>
                                        <div class="team-meta__info">
                                            <h6 class="team-meta__name">Aqua Keyes</h6>
                                            <span class="team-meta__place">Pacific Institute</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="team-schedule__time">10:00PM EST</td>
                                <td class="team-schedule__venue">Alchemists Stadium</td>
                                <td class="team-schedule__tickets">
                                    <a href="#" class="btn btn-xs btn-default btn-outline btn-block ">
                                        Buy Game Tickets
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="team-schedule__date">Saturday, May 22</td>
                                <td class="team-schedule__versus">
                                    <div class="team-meta">
                                        <figure class="team-meta__logo">
                                            <img src="assets/images/samples/logos/icarus_wings_shield.png" alt="">
                                        </figure>
                                        <div class="team-meta__info">
                                            <h6 class="team-meta__name">Icarus Wings</h6>
                                            <span class="team-meta__place">Waxer College</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="team-schedule__time">10:30PM EST</td>
                                <td class="team-schedule__venue">The FireStar Arena</td>
                                <td class="team-schedule__tickets">
                                    <a href="#" class="btn btn-xs btn-default btn-outline btn-block disabled">
                                        Sold Out
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="team-schedule__date">Saturday, May 29</td>
                                <td class="team-schedule__versus">
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
                                <td class="team-schedule__time">9:00PM EST</td>
                                <td class="team-schedule__venue">Alchemists Stadium</td>
                                <td class="team-schedule__tickets">
                                    <a href="#" class="btn btn-xs btn-default btn-outline btn-block ">
                                        Buy Game Tickets
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Schedule & Tickets / End -->

            <!-- Points History -->
            <div class="card">
                <div class="card__header card__header--has-legend">
                    <h4>Points History</h4>
                    <div id="gamesPoinstsLegendSoccer" class="chart-legend"></div>
                </div>
                <div class="card__content">
                    <canvas id="points-history-soccer" class="points-history-chart" height="135"></canvas>
                </div>
            </div>
            <!-- Points History / End -->

        </div>
        <!-- Content / End -->

        <!-- Sidebar -->
        <div class="sidebar col-lg-4">

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

            <!-- Widget: Team Leaders -->
            <aside class="widget widget--sidebar card card--has-table widget-leaders">
                <div class="widget__title card__header">
                    <h4>Team Goalscorers</h4>
                </div>
                <div class="widget__content card__content">

                    <!-- Leader: Points -->
                    <div class="table-responsive">
                        <table class="table team-leader">
                            <thead>
                            <tr>
                                <th class="team-leader__type">West League 2016</th>
                                <th class="team-leader__goals">G</th>
                                <th class="team-leader__gp">P</th>
                                <th class="team-leader__avg">AVG</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <td class="team-leader__player">
                                    <div class="team-leader__player-info">
                                        <figure class="team-leader__player-img team-leader__player-img--sm">
                                            <img src="assets/images/soccer/samples/goalscorer_01.jpg" alt="">
                                        </figure>
                                        <div class="team-leader__player-inner">
                                            <h5 class="team-leader__player-name">James Messinal</h5>
                                            <span class="team-leader__player-position">Forward</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="team-leader__goals">11</td>
                                <td class="team-leader__gp">12</td>
                                <td class="team-leader__avg">
                                    <div class="circular">
                                        <div class="circular__bar" data-percent="91">
                                            <span class="circular__percents">0.91</span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="team-leader__player">
                                    <div class="team-leader__player-info">
                                        <figure class="team-leader__player-img team-leader__player-img--sm">
                                            <img src="assets/images/soccer/samples/goalscorer_02.jpg" alt="">
                                        </figure>
                                        <div class="team-leader__player-inner">
                                            <h5 class="team-leader__player-name">David Hawkins</h5>
                                            <span class="team-leader__player-position">Forward</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="team-leader__goals">10</td>
                                <td class="team-leader__gp">12</td>
                                <td class="team-leader__avg">
                                    <div class="circular">
                                        <div class="circular__bar" data-percent="83">
                                            <span class="circular__percents">0.83</span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="team-leader__player">
                                    <div class="team-leader__player-info">
                                        <figure class="team-leader__player-img team-leader__player-img--sm">
                                            <img src="assets/images/soccer/samples/goalscorer_01.jpg" alt="">
                                        </figure>
                                        <div class="team-leader__player-inner">
                                            <h5 class="team-leader__player-name">Griffin Peterson</h5>
                                            <span class="team-leader__player-position">Midfielder</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="team-leader__goals">8</td>
                                <td class="team-leader__gp">10</td>
                                <td class="team-leader__avg">
                                    <div class="circular">
                                        <div class="circular__bar" data-percent="80">
                                            <span class="circular__percents">0.80</span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="team-leader__player">
                                    <div class="team-leader__player-info">
                                        <figure class="team-leader__player-img team-leader__player-img--sm">
                                            <img src="assets/images/soccer/samples/goalscorer_02.jpg" alt="">
                                        </figure>
                                        <div class="team-leader__player-inner">
                                            <h5 class="team-leader__player-name">Christofer Grass</h5>
                                            <span class="team-leader__player-position">Midfielder</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="team-leader__goals">7</td>
                                <td class="team-leader__gp">10</td>
                                <td class="team-leader__avg">
                                    <div class="circular">
                                        <div class="circular__bar" data-percent="70">
                                            <span class="circular__percents">0.70</span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="team-leader__player">
                                    <div class="team-leader__player-info">
                                        <figure class="team-leader__player-img team-leader__player-img--sm">
                                            <img src="assets/images/soccer/samples/goalscorer_01.jpg" alt="">
                                        </figure>
                                        <div class="team-leader__player-inner">
                                            <h5 class="team-leader__player-name">Mark Ironson</h5>
                                            <span class="team-leader__player-position">Defender</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="team-leader__goals">5</td>
                                <td class="team-leader__gp">10</td>
                                <td class="team-leader__avg">
                                    <div class="circular">
                                        <div class="circular__bar" data-percent="50">
                                            <span class="circular__percents">0.50</span>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                    <!-- Leader: Points / End -->


                </div>
            </aside>
            <!-- Widget: Team Leaders / End -->

            <!-- Widget: Latest Results -->
            <aside class="widget card widget--sidebar widget-results">
                <div class="widget__title card__header card__header--has-btn">
                    <h4>Latest Results</h4>
                    <a href="#" class="btn btn-default btn-outline btn-xs card-header__button">See Full Results</a>
                </div>
                <div class="widget__content card__content">
                    <ul class="widget-results__list">

                        <!-- Game #0 -->
                        <li class="widget-results__item">
                            <div class="widget-results__header justify-content-center">
                                <div class="widget-results__title">Saturday, March 24</div>
                            </div>
                            <div class="widget-results__content">
                                <div class="widget-results__team widget-results__team--first">
                                    <figure class="widget-results__team-logo">
                                        <img src="assets/images/soccer/logos/alchemists_s_shield.png" alt="">
                                    </figure>
                                    <div class="widget-results__team-details">
                                        <h5 class="widget-results__team-name">Alchemists</h5>
                                        <span class="widget-results__team-info">Elric Bros School</span>
                                    </div>
                                </div>
                                <div class="widget-results__result">
                                    <div class="widget-results__score">
                                        <span class="widget-results__score-winner">2</span> - <span class="widget-results__score-loser">0</span>
                                        <div class="widget-results__status">Home</div>
                                    </div>
                                </div>
                                <div class="widget-results__team widget-results__team--second">
                                    <figure class="widget-results__team-logo">
                                        <img src="assets/images/samples/logos/sharks_shield.png" alt="">
                                    </figure>
                                    <div class="widget-results__team-details">
                                        <h5 class="widget-results__team-name">Sharks</h5>
                                        <span class="widget-results__team-info">Marine College</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- Game #0 / End -->
                        <!-- Game #1 -->
                        <li class="widget-results__item">
                            <div class="widget-results__header justify-content-center">
                                <div class="widget-results__title">Friday, March 16</div>
                            </div>
                            <div class="widget-results__content">
                                <div class="widget-results__team widget-results__team--first">
                                    <figure class="widget-results__team-logo">
                                        <img src="assets/images/samples/logos/pirates_shield.png" alt="">
                                    </figure>
                                    <div class="widget-results__team-details">
                                        <h5 class="widget-results__team-name">L.A. Pirates</h5>
                                        <span class="widget-results__team-info">Bebop Institute</span>
                                    </div>
                                </div>
                                <div class="widget-results__result">
                                    <div class="widget-results__score">
                                        <span class="widget-results__score-winner">4</span> - <span class="widget-results__score-loser">2</span>
                                        <div class="widget-results__status">Away</div>
                                    </div>
                                </div>
                                <div class="widget-results__team widget-results__team--second">
                                    <figure class="widget-results__team-logo">
                                        <img src="assets/images/soccer/logos/alchemists_s_shield.png" alt="">
                                    </figure>
                                    <div class="widget-results__team-details">
                                        <h5 class="widget-results__team-name">Alchemists</h5>
                                        <span class="widget-results__team-info">Eric Bros School</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- Game #1 / End -->
                        <!-- Game #2 -->
                        <li class="widget-results__item">
                            <div class="widget-results__header justify-content-center">
                                <div class="widget-results__title">Saturday, March 10</div>
                            </div>
                            <div class="widget-results__content">
                                <div class="widget-results__team widget-results__team--first">
                                    <figure class="widget-results__team-logo">
                                        <img src="assets/images/soccer/logos/alchemists_s_shield.png" alt="">
                                    </figure>
                                    <div class="widget-results__team-details">
                                        <h5 class="widget-results__team-name">Alchemists</h5>
                                        <span class="widget-results__team-info">Eric Bros School</span>
                                    </div>
                                </div>
                                <div class="widget-results__result">
                                    <div class="widget-results__score">
                                        <span class="widget-results__score-loser">0</span> - <span class="widget-results__score-loser">0</span>
                                        <div class="widget-results__status">Home</div>
                                    </div>
                                </div>
                                <div class="widget-results__team widget-results__team--second">
                                    <figure class="widget-results__team-logo">
                                        <img src="assets/images/samples/logos/lucky_clovers_shield.png" alt="">
                                    </figure>
                                    <div class="widget-results__team-details">
                                        <h5 class="widget-results__team-name">Clovers</h5>
                                        <span class="widget-results__team-info">St. Patrick’s Inst</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- Game #2 / End -->
                        <!-- Game #3 -->
                        <li class="widget-results__item">
                            <div class="widget-results__header justify-content-center">
                                <div class="widget-results__title">Friday, March 4</div>
                            </div>
                            <div class="widget-results__content">
                                <div class="widget-results__team widget-results__team--first">
                                    <figure class="widget-results__team-logo">
                                        <img src="assets/images/samples/logos/ocean_kings_shield.png" alt="">
                                    </figure>
                                    <div class="widget-results__team-details">
                                        <h5 class="widget-results__team-name">Ocean Kings</h5>
                                        <span class="widget-results__team-info">Bay College</span>
                                    </div>
                                </div>
                                <div class="widget-results__result">
                                    <div class="widget-results__score">
                                        <span class="widget-results__score-loser">2</span> - <span class="widget-results__score-winner">3</span>
                                        <div class="widget-results__status">Home</div>
                                    </div>
                                </div>
                                <div class="widget-results__team widget-results__team--second">
                                    <figure class="widget-results__team-logo">
                                        <img src="assets/images/soccer/logos/alchemists_s_shield.png" alt="">
                                    </figure>
                                    <div class="widget-results__team-details">
                                        <h5 class="widget-results__team-name">Alchemists</h5>
                                        <span class="widget-results__team-info">Eric Bros School</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- Game #3 / End -->

                    </ul>
                </div>
            </aside>
            <!-- Widget: Latest Results / End -->

            <!-- Widget: Team Newslog -->
            <aside class="widget card widget--sidebar widget-newslog">
                <div class="widget__title card__header">
                    <h4>Team Newslog</h4>
                </div>
                <div class="widget__content card__content">
                    <ul class="newslog">

                        <li class="newslog__item newslog__item--injury">
                            <div class="newslog__item-inner">
                                <div class="newslog__content"><strong>Mark Johnson</strong> has a tibia fracture and he’s gonna be out of the play for <strong>2 months</strong>.</div>
                                <time class="newslog__date" datetime="2016-01-19">September 18, 2016</time>
                            </div>
                        </li>
                        <li class="newslog__item newslog__item--join">
                            <div class="newslog__item-inner">
                                <div class="newslog__content"><strong>Dominick R. Blink</strong>, a new <strong>Shooting Guard</strong> from San Francisco has joined the team!.</div>
                                <time class="newslog__date" datetime="2016-01-19">September 6, 2016</time>
                            </div>
                        </li>
                        <li class="newslog__item newslog__item--join">
                            <div class="newslog__item-inner">
                                <div class="newslog__content"><strong>Christopher Grifin</strong>, a new <strong>Power Forward</strong> from Rockstar Bay College has joined the team!.</div>
                                <time class="newslog__date" datetime="2016-01-19">August 24, 2016</time>
                            </div>
                        </li>
                        <li class="newslog__item newslog__item--injury">
                            <div class="newslog__item-inner">
                                <div class="newslog__content"><strong>Thomas Durry</strong> has a composed hand fracture and he won’t be playing untill <strong>September</strong>.</div>
                                <time class="newslog__date" datetime="2016-01-19">August 17, 2016</time>
                            </div>
                        </li>
                        <li class="newslog__item newslog__item--exit">
                            <div class="newslog__item-inner">
                                <div class="newslog__content"><strong>Jeremy Rittersen</strong> left the team after 2 year in the club and his new house are the <strong>Clovers</strong>.</div>
                                <time class="newslog__date" datetime="2016-01-19">August 12, 2016</time>
                            </div>
                        </li>

                    </ul>
                </div>
            </aside>
            <!-- Widget: Team Newslog / End -->

            <!-- Widget: Games History -->
            <aside class="widget card widget--sidebar widget-games-history">
                <div class="widget__title card__header card__header--has-legend">
                    <h4>Games History</h4>
                    <div id="gamesHistoryLegendSoccer" class="chart-legend chart-legend--games-history"></div>
                </div>
                <div class="widget__content card__content">
                    <canvas id="games-history-soccer" class="games-history-chart" height="230"></canvas>
                </div>
            </aside>
            <!-- Widget: Games History / End -->

        </div>
        <!-- Sidebar / End -->
    </div>
@endsection
