<?php

namespace App\Providers;

use App\Models\Sport;
use App\Repositories\Contracts\GameRepositoryInterface;
use App\Repositories\Contracts\LeagueRepositoryInterface;
use App\Repositories\Contracts\LeaguesTeamsRepositoryInterface;
use App\Repositories\Contracts\RefereeRepositoryInterface;
use App\Repositories\Contracts\SeasonLeagueRepositoryInterface;
use App\Repositories\Contracts\SeasonRepositoryInterface;
use App\Repositories\Contracts\SportRepositoryInterface;
use App\Repositories\Contracts\TeamPlayerRepositoryInterface;
use App\Repositories\Contracts\TeamRepositoryInterface;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\Repositories\GameRepositoryMysql;
use App\Repositories\LeagueRepository;
use App\Repositories\LeagueRepositoryMysql;
use App\Repositories\LeaguesTeamsRepositoryMysql;
use App\Repositories\RefereeRepositoryMysql;
use App\Repositories\SeasonLeagueRepositoryMysql;
use App\Repositories\SeasonRepositoryMysql;
use App\Repositories\SportRepositoryMysql;
use App\Repositories\TeamPlayerRepositoryMysql;
use App\Repositories\TeamRepositoryMysql;
use App\Repositories\UserRepositoryMysql;
use App\Services\GameService;
use App\Services\LeagueService;
use App\Services\SeasonService;
use App\Services\SportService;
use App\Services\TeamService;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Repository ve interface bağlamaları
        $this->app->bind(SeasonRepositoryInterface::class, SeasonRepositoryMysql::class);
        $this->app->bind(SeasonLeagueRepositoryInterface::class, SeasonLeagueRepositoryMysql::class);
        $this->app->bind(TeamRepositoryInterface::class, TeamRepositoryMysql::class);
        $this->app->bind(LeagueRepositoryInterface::class, LeagueRepositoryMysql::class);
        $this->app->bind(SportRepositoryInterface::class, SportRepositoryMysql::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepositoryMysql::class);
        $this->app->bind(GameRepositoryInterface::class, GameRepositoryMysql::class);
        $this->app->bind(LeaguesTeamsRepositoryInterface::class, LeaguesTeamsRepositoryMysql::class);
        $this->app->bind(TeamPlayerRepositoryInterface::class, TeamPlayerRepositoryMysql::class);
        $this->app->bind(RefereeRepositoryInterface::class, RefereeRepositoryMysql::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $sportRepository = new SportRepositoryMysql(new Sport());
            $sports = $sportRepository->getWithRelation('leagues');

            $view->with([
                'sports' => $sports,
            ]);
        });



    }
}
