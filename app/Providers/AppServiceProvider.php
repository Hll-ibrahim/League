<?php

namespace App\Providers;

use App\Models\Sport;
use App\Repositories\Contracts\GameRepositoryInterface;
use App\Repositories\Contracts\LeagueRepositoryInterface;
use App\Repositories\Contracts\LeaguesTeamsRepositoryInterface;
use App\Repositories\Contracts\SeasonRepositoryInterface;
use App\Repositories\Contracts\SportRepositoryInterface;
use App\Repositories\Contracts\TeamPlayerRepositoryInterface;
use App\Repositories\Contracts\TeamRepositoryInterface;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\Repositories\GameRepositoryMySql;
use App\Repositories\LeagueRepository;
use App\Repositories\LeaguesTeamsRepositoryMysql;
use App\Repositories\SeasonRepository;
use App\Repositories\SportRepository;
use App\Repositories\TeamPlayerRepositoryMysql;
use App\Repositories\TeamRepository;
use App\Repositories\UserRepository;
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
        $this->app->bind(SeasonRepositoryInterface::class, SeasonRepository::class);
        $this->app->bind(TeamRepositoryInterface::class, TeamRepository::class);
        $this->app->bind(LeagueRepositoryInterface::class, LeagueRepository::class);
        $this->app->bind(SportRepositoryInterface::class, SportRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(GameRepositoryInterface::class, GameRepositoryMySql::class);
        $this->app->bind(LeaguesTeamsRepositoryInterface::class, LeaguesTeamsRepositoryMySql::class);
        $this->app->bind(TeamPlayerRepositoryInterface::class, TeamPlayerRepositoryMySql::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $sportRepository = new SportRepository(new Sport());
            $sports = $sportRepository->getWithRelation('leagues');

            $view->with([
                'sports' => $sports,
            ]);
        });



    }
}
