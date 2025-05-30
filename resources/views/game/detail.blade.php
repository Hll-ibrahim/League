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
                                <h4 class="alc-event-team__name">{{$home_team->team->name}}</h4>
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
                                <h4 class="alc-event-team__name">{{$away_team->team->name}}</h4>
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
                            @foreach($home_team_events as $event)

                                <span class="alc-event-header__performance">{{$event->playerStatistic->TeamPlayer->player->first_name}} {{$event->playerStatistic->TeamPlayer->player->last_name}} ({{$event->minute}}’) <i class="icon-svg {{$event->eventType->image}}"></i></span>

                            @endforeach
                        </div>
                        <!-- 1st Team Performances / End -->
                    </div>
                    <div class="col-6">
                        @foreach($away_team_events as $event)

                            <span class="alc-event-header__performance">{{$event->playerStatistic->TeamPlayer->player->first_name}} {{$event->playerStatistic->TeamPlayer->player->last_name}} ({{$event->minute}}’) <i class="icon-svg {{$event->eventType->image}}"></i></span>

                        @endforeach
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
                                        <i class="icon-svg {{$event->eventType->image}}"></i>
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


                    @if(count($statistics))
                    <div class="card">
                        <header class="card__header alc-teams-legend">
                            <h4 class="alc-teams-legend__title">Match Statistics</h4>
                            <div class="alc-teams-legend__info">
                                <div class="alc-teams-legend__teams">
                                    <div class="alc-teams-legend__team">
                                        <span class="alc-teams-legend__team-color alc-teams-legend__team-color--color-primary"></span>
                                        <img src="{{ $statistics['home']['team']->logo }}" class="alc-teams-legend__team-logo" alt="{{ $statistics['home']['team']->name }}">
                                    </div>
                                    <div class="alc-teams-legend__team">
                                        <span class="alc-teams-legend__team-color alc-teams-legend__team-color--color-4"></span>
                                        <img src="{{ $statistics['away']['team']->logo }}" class="alc-teams-legend__team-logo" alt="{{ $statistics['away']['team']->name }}">
                                    </div>
                                </div>
                                <a href="#" class="btn btn-default btn-outline btn-xs">Full Team Stats</a>
                            </div>
                        </header>
                        <div class="card__content">
                            <div class="game-result">
                                <section class="game-result__section">
                                    <div class="game-result__content mb-0">
                                        <div class="game-result__stats">
                                            <div class="row">
                                                <div class="col-12 col-md-6 order-md-2">
                                                    <div class="game-result__table-stats game-result__table-stats--soccer">
                                                        <table class="table table-wrap-bordered table-thead-color">
                                                            <thead>
                                                            <tr><th colspan="3">Main Statistics</th></tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach ($statistics['main_table'] as $row)
                                                                <tr>
                                                                    <td>{{ $row['home'] }}</td>
                                                                    <td>{{ $row['label'] }}</td>
                                                                    <td>{{ $row['away'] }}</td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                @foreach (['home', 'away'] as $side)
                                                    <div class="col-6 col-md-3 {{ $side === 'home' ? 'order-md-1 game-result__stats-team-1' : 'order-md-3 game-result__stats-team-2' }}">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="circular circular--size-70">
                                                                    <div class="circular__bar" data-percent="{{ $statistics[$side]['shot_accuracy'] }}">
                                                                        <span class="circular__percents">{{ $statistics[$side]['shot_accuracy'] }}<small>%</small></span>
                                                                    </div>
                                                                    <span class="circular__label">Shot Accuracy</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="circular circular--size-70">
                                                                    <div class="circular__bar" data-percent="{{ $statistics[$side]['pass_accuracy'] }}">
                                                                        <span class="circular__percents">{{ $statistics[$side]['pass_accuracy'] }}<small>%</small></span>
                                                                    </div>
                                                                    <span class="circular__label">Pass Accuracy</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="spacer"></div>
                                                        @foreach ($statistics[$side]['stats'] as $label => $value)
                                                            <div class="progress-stats">
                                                                <div class="progress__label">{{ $label }}</div>
                                                                <div class="progress">
                                                                    <div class="progress__bar{{ $side === 'away' ? ' progress__bar--success' : '' }}" style="width: {{ min($value,100) }}%;"></div>
                                                                </div>
                                                                <div class="progress__number">{{ $value }}</div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @endforeach
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
                                        <div class="progress-double-wrapper">
                                            <div class="progress-inner-holder">
                                                <div class="progress__digit progress__digit--left progress__digit--highlight">{{ $statistics['ball_possession']['home'] }}%</div>
                                                <div class="progress__double">
                                                    <div class="progress progress--lg">
                                                        <div class="progress__bar" style="width: {{ $statistics['ball_possession']['home'] }}%;"></div>
                                                    </div>
                                                    <div class="progress progress--lg">
                                                        <div class="progress__bar progress__bar--success" style="width: {{ $statistics['ball_possession']['away'] }}%;"></div>
                                                    </div>
                                                </div>
                                                <div class="progress__digit progress__digit--right progress__digit--highlight">{{ $statistics['ball_possession']['away'] }}%</div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    @endif

                    <!-- Post Comments -->
                    <div class="post-comments card card--lg">
                        <header class="post-commments__header card__header">
                            <h4>Comments ({{ $comments->count() }})</h4>
                        </header>
                        <div class="post-comments__content card__content">

                            @if($comments->isNotEmpty())
                                <ul class="comments">
                                    @foreach($comments as $comment)
                                        <li class="comments__item">
                                            <div class="comments__inner">
                                                <header class="comment__header">
                                                    <div class="comment__author">
                                                        <figure class="comment__author-avatar">
                                                            <img src="{{ asset($comment->user->avatar ?? 'assets/images/default-avatar.jpg') }}" alt="">
                                                        </figure>
                                                        <div class="comment__author-info">
                                                            <h5 class="comment__author-name">{{ $comment->user->name }}</h5>
                                                            <time class="comment__post-date" datetime="{{ $comment->created_at->toDateString() }}">
                                                                {{ $comment->created_at->diffForHumans() }}
                                                            </time>
                                                        </div>
                                                    </div>
                                                    <div class="comment__reply">
                                                        <a href="#" class="comment__reply-link btn btn-link btn-xs">Reply</a>
                                                    </div>
                                                </header>
                                                <div class="comment__body">
                                                    @if($comment->title)
                                                        <strong>{{ $comment->title }}</strong><br>
                                                    @endif
                                                    {{ $comment->description }}
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <p class="text-muted">No comments yet. Be the first to share your thoughts.</p>
                            @endif

                            <!-- Comments Pagination -->
                            {{-- Eğer pagination kullanıyorsan: --}}
                            {{-- {!! $comments->links('pagination::bootstrap-4') !!} --}}
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
                            <div class="gm-map gm-map--sm alc-event-gmap"
                                 data-map-style="default"
                                 data-map-address="{{ $stadium->name ?? '' }}"
                                 data-map-zoom="15"
                                 data-map-type-control="false"
                                 data-street-view-control="false"
                                 data-fullscreen-control="false"
                                 data-zoom-control="false"></div>
                            <!-- Google Map / End -->

                            <ul class="alc-event-info list-unstyled">

                                <!-- STADIUM -->
                                <li class="alc-event-info__item">
                                    <span class="alc-event-info__icon">
                                        <i class="icon-svg icon-map-pin"></i>
                                    </span>
                                    <span class="alc-event-info__value">
                                        {{ $stadium->name ?? 'Unknown Stadium' }}
                                            @if($stadium?->city || $stadium?->country)
                                                ({{ $stadium->city ?? '' }}{{ $stadium->city && $stadium->country ? ', ' : '' }}{{ $stadium->country ?? '' }})
                                            @endif
                                    </span>
                                </li>

                                <!-- LEAGUE & SEASON -->
                                <li class="alc-event-info__item">
                                    <span class="alc-event-info__icon">
                                        <i class="icon-svg icon-trophy-new"></i>
                                    </span>
                                    <span class="alc-event-info__value">
                                        {{ $league->name ?? 'League' }} - {{ $season->name ?? 'Season' }}
                                    </span>
                                </li>

                                <!-- DATE -->
                                <li class="alc-event-info__item">
                                    <span class="alc-event-info__icon">
                                        <i class="icon-svg icon-calendar"></i>
                                    </span>
                                    <span class="alc-event-info__value">
                                        {{ \Carbon\Carbon::parse($game->date)->translatedFormat('l, F jS, Y - g:i A') }}
                                    </span>
                                </li>

                                <!-- REFEREE -->
                                <li class="alc-event-info__item">
                                    <span class="alc-event-info__icon">
                                        <i class="icon-svg icon-whistle"></i>
                                    </span>
                                    <span class="alc-event-info__value">
                                        {{ $referee->name ?? 'Not Assigned' }}
                                    </span>
                                </li>

                                <!-- ATTENDANCE -->
                                <li class="alc-event-info__item">
                                    <span class="alc-event-info__icon">
                                        <i class="icon-svg icon-person"></i>
                                    </span>
                                    <span class="alc-event-info__value">
                                        {{ number_format($game->attendance ?? 0) }} Attendance
                                        ({{ number_format($stadium->capacity ?? 0) }} Capacity)
                                    </span>
                                </li>

                                <!-- MATCH COUNT FOR TEAMS -->
                                <li class="alc-event-info__item">
                                    <span class="alc-event-info__icon">
                                        <i class="icon-svg icon-list-numbered"></i>
                                    </span>
                                    <span class="alc-event-info__value">
                                        {{ $game->homeTeam->team->name }}’s {{ $home_match_count }}. match /
                                        {{ $game->awayTeam->team->name }}’s {{ $away_match_count }}. match
                                    </span>
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

                        @if($top_players->isNotEmpty())
                            @php $featured = $top_players->first(); @endphp

                            <div class="widget__content card__content">
                                <div class="widget-player__ribbon"><div class="fas fa-star"></div></div>
                                <figure class="widget-player__photo">
                                    <img src="{{ asset($featured['player']->image ?? 'assets/images/default-player.png') }}" alt="{{ $featured['player']->full_name }}">
                                </figure>
                                <header class="widget-player__header clearfix">
                                    <div class="widget-player__number">{{ $featured['player']->number ?? '--' }}</div>
                                    <h4 class="widget-player__name">
                                        <span class="widget-player__first-name">{{ $featured['player']->first_name }}</span>
                                        <span class="widget-player__last-name">{{ $featured['player']->last_name }}</span>
                                    </h4>
                                </header>
                                <div class="widget-player__content">
                                    <div class="widget-player__content-inner">
                                        <div class="widget-player__stat widget-player__goals">
                                            <div class="widget-player__stat-number">{{ $featured['goals'] }}</div>
                                            <h6 class="widget-player__stat-label">Goals</h6>
                                        </div>
                                        <div class="widget-player__stat widget-player__shots">
                                            <div class="widget-player__stat-number">{{ $featured['shots'] }}</div>
                                            <h6 class="widget-player__stat-label">Shots</h6>
                                        </div>
                                        <div class="widget-player__stat widget-player__ast">
                                            <div class="widget-player__stat-number">{{ $featured['assists'] }}</div>
                                            <h6 class="widget-player__stat-label">Assists</h6>
                                        </div>
                                        <div class="widget-player__stat widget-player__played">
                                            <div class="widget-player__stat-number">{{ $featured['played'] }}</div>
                                            <h6 class="widget-player__stat-label">Played</h6>
                                        </div>
                                    </div>

                                    <div class="widget-player__content-alt">
                                        <div class="progress-stats">
                                            <div class="progress__label">SHOT ACC</div>
                                            <div class="progress">
                                                <div class="progress__bar" style="width: {{ $featured['shot_accuracy'] }}%;"></div>
                                            </div>
                                            <div class="progress__number">{{ $featured['shot_accuracy'] }}%</div>
                                        </div>
                                        <div class="progress-stats">
                                            <div class="progress__label">PASS ACC</div>
                                            <div class="progress">
                                                <div class="progress__bar" style="width: {{ $featured['pass_accuracy'] }}%;"></div>
                                            </div>
                                            <div class="progress__number">{{ $featured['pass_accuracy'] }}%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

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
                                @foreach($top_players->slice(1) as $player_stat)
                                    <tr>
                                        <td>
                                            <div class="alc-widget-player__table-player">
                                                <div class="alc-widget-player__table-icon">
                                                    <div class="alc-widget-player__table-icon-wrap">
                                                        <i class="icon-svg icon-star"></i>
                                                    </div>
                                                </div>
                                                <div class="alc-widget-player__table-info">
                                                    <h5 class="alc-widget-player__table-title">{{ $player_stat['player']->full_name }}</h5>
                                                    <span class="alc-widget-player__table-subtitle">#{{ $player_stat['player']->number }}</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="{{ asset($player_stat['team']->logo ?? 'assets/images/default-logo.png') }}" alt="{{ $player_stat['team']->name ?? 'Unknown Team' }}">
                                        </td>
                                        <td>
                                            <div class="alc-widget-player__table-stat">
                                                <div class="alc-widget-player__table-value">{{ $player_stat['goals'] }}</div>
                                                <div class="alc-widget-player__table-label">Goals</div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </aside>
                    <!-- Widget: Featured Player / End -->


                    <!-- Widget: Standings -->
                    <aside class="widget card widget--sidebar widget-standings">
                        <div class="widget__title card__header card__header--has-btn">
                            <h4>{{ $league->name }} - {{ $season->name }}</h4>
                            <a href="{{ route('sport.league.detail', [$season_league->id]) }}"
                               class="btn btn-default btn-outline btn-xs card-header__button">See All Stats</a>
                        </div>
                        <div class="widget__content card__content">
                            <div class="table-responsive">
                                <table class="table table-hover table-standings">
                                    <thead>
                                    <tr>
                                        <th>Team</th>
                                        <th>W</th>
                                        <th>L</th>
                                        <th>D</th>
                                        <th>PTS</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($standings as $team_stat)
                                        <tr>
                                            <td>
                                                <div class="team-meta">
                                                    <figure class="team-meta__logo">
                                                        <img src="{{ asset($team_stat['logo']) }}" alt="">
                                                    </figure>
                                                    <div class="team-meta__info">
                                                        <h6 class="team-meta__name">{{ $team_stat['team']->name }}</h6>
                                                        <span class="team-meta__place">{{ $team_stat['school'] }}</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ $team_stat['win'] }}</td>
                                            <td>{{ $team_stat['lose'] }}</td>
                                            <td>{{ $team_stat['draw'] }}</td>
                                            <td>{{ $team_stat['points'] }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </aside>
                    <!-- Widget: Standings / End -->

                    <!-- Widget: Event Scheduled -->
                    <div class="widget card card--no-paddings widget--sidebar widget-event-scheduled">
                        <div class="widget__title card__header">
                            <h4>Next Rivals</h4>
                        </div>
                        <div class="widget__content card__content">
                            <ul class="alc-event-scheduled">

                                @foreach($next_matches as $match)
                                    <li class="alc-event-scheduled__item">
                                        <div class="alc-event-scheduled__header justify-content-center">
                                            <div class="alc-event-scheduled__title">
                                                {{ \Carbon\Carbon::parse($match->date)->translatedFormat('l, F j') }}
                                            </div>
                                        </div>
                                        <div class="alc-event-scheduled__content">
                                            @foreach([$match->homeTeam->team, $match->awayTeam->team] as $team)
                                                <div class="alc-event-scheduled__team">
                                                    <figure class="alc-event-scheduled__img">
                                                        <img src="{{ asset($team->logo ?? 'assets/images/default.png') }}" alt="{{ $team->name }}">
                                                    </figure>
                                                    <div class="alc-event-scheduled__details">
                                                        <h4 class="alc-event-scheduled__team-name">{{ strtoupper(Str::limit($team->name, 3, '')) }}</h4>
                                                        <div class="alc-event-scheduled__team-info">{{ $team->name }}</div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            <div class="alc-event-scheduled__divider">vs</div>
                                        </div>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    <!-- Widget: Event Scheduled / End -->

                    <!-- Event Post -->
                    @if($announcement)
                        <div class="posts posts--cards post-list">
                                <div class="posts__item posts__item--card posts__item--category-1 card">
                                    <figure class="posts__thumb">
                                        <div class="posts__cat">
                                            <span class="label posts__cat-label">Team News</span>
                                        </div>
                                        <a href="{{ route('announcement.index') }}">
                                            <img src="{{ asset('assets/images/soccer/samples/_soccer_post-img1.jpg') }}" alt="Announcement Image">
                                        </a>
                                    </figure>

                                    <div class="posts__inner card__content">
                                        <a href="{{ route('announcement.index') }}" class="posts__cta"></a>
                                        <time datetime="{{ $announcement->created_at->toDateString() }}" class="posts__date">
                                            {{ $announcement->created_at->translatedFormat('F jS, Y') }}
                                        </time>
                                        <h6 class="posts__title">
                                            <a href="{{ route('announcement.index', $announcement->id) }}">
                                                {{ $announcement->title }}
                                            </a>
                                        </h6>
                                        <div class="posts__excerpt">
                                            {{ Str::limit(strip_tags($announcement->description), 150) }}
                                        </div>
                                    </div>

                                    <footer class="posts__footer card__footer">
                                        <div class="post-author">
                                            <figure class="post-author__avatar">
                                                <img src="{{ asset($announcement->user->avatar ?? 'assets/images/default-avatar.jpg') }}" alt="Author Avatar">
                                            </figure>
                                            <div class="post-author__info">
                                                <h4 class="post-author__name">{{ $announcement->user->name }}</h4>
                                            </div>
                                        </div>
                                        <ul class="post__meta meta">
                                            <li class="meta__item meta__item--views">-</li> {{-- Henüz view sayısı tutulmuyorsa --}}
                                            <li class="meta__item meta__item--likes">
                                                <a href="#"><i class="meta-like icon-heart"></i> -</a>
                                            </li>
                                            <li class="meta__item meta__item--comments">
                                                <a href="#">-</a>
                                            </li>
                                        </ul>
                                    </footer>
                                </div>
                        </div>
                    @endif
                    <!-- Event Post / End -->

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
