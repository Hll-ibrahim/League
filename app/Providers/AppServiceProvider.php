<?php

namespace App\Providers;

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
use App\Services\Contracts\GameServiceInterface;
use App\Services\Contracts\LeagueServiceInterface;
use App\Services\Contracts\LeaguesTeamsServiceInterface;
use App\Services\Contracts\RequestServiceInterface;
use App\Services\Contracts\SeasonServiceInterface;
use App\Services\Contracts\SportServiceInterface;
use App\Services\Contracts\TeamPlayerServiceInterface;
use App\Services\Contracts\TeamServiceInterface;
use App\Services\Contracts\UserServiceInterface;
use App\Services\GameService;
use App\Services\LeagueService;
use App\Services\LeaguesTeamsService;
use App\Services\RequestService;
use App\Services\SeasonService;
use App\Services\SportService;
use App\Services\TeamPlayerService;
use App\Services\TeamService;
use App\Services\UserService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // RequestService ve interface'i arasında bağ kurma
        $this->app->singleton(RequestServiceInterface::class, function($app) {
            return new RequestService(
                $app->make(TeamServiceInterface::class),
                $app->make(LeagueServiceInterface::class),
                $app->make(SportServiceInterface::class),
                $app->make(SeasonServiceInterface::class),
                $app->make(GameServiceInterface::class)
            );
        });

        // Servis ve interface bağlamaları
        $this->app->bind(RequestServiceInterface::class, RequestService::class);
        $this->app->bind(TeamServiceInterface::class, TeamService::class);
        $this->app->bind(LeagueServiceInterface::class, LeagueService::class);
        $this->app->bind(SportServiceInterface::class, SportService::class);
        $this->app->bind(UserServiceInterface::class, UserService::class);
        $this->app->bind(SeasonServiceInterface::class, SeasonService::class);
        $this->app->bind(GameServiceInterface::class, GameService::class);
        $this->app->bind(LeaguesTeamsServiceInterface::class, LeaguesTeamsService::class);
        $this->app->bind(TeamPlayerServiceInterface::class, TeamPlayerService::class);


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
        //
    }
}
