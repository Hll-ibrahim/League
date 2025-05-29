<?php

namespace App\Services;

use App\Models\Referee;
use App\Models\SeasonLeague;
use App\Models\User;
use App\Repositories\BaseRepositoryMysql;
use App\Repositories\Contracts\RefereeRepositoryInterface;
use App\Repositories\Contracts\SeasonLeagueRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class SeasonLeagueService extends BaseService
{
    protected $refereeRepository;
    public function __construct(SeasonLeagueRepositoryInterface $seasonLeagueRepository, RefereeRepositoryInterface $refereeRepository){
        parent::__construct($seasonLeagueRepository);
        $this->refereeRepository = $refereeRepository;
    }


    public function start(int $league_id, int $season_id)
    {
        $season_league = $this->repository->getByForeign($league_id, $season_id);
        $league_teams = $season_league->leagueTeams->pluck('team');

        $teams = $season_league->leagueTeams->all(); // league_team modelleri
        $isOdd = count($teams) % 2 !== 0;

        if ($isOdd) {
            $teams[] = null; // bay haftası için
        }

        $team_count = count($teams);
        $rounds = $team_count - 1;
        $half = $team_count / 2;

        $startDate = Carbon::now()->startOfWeek()->addDay(1);
        $games = [];

        for ($round = 0; $round < $rounds * 2; $round++) {
            $weekStartDate = $startDate->copy()->addWeeks($round);
            $current = $round % $rounds;

            $rotated = $teams;
            $fixed = array_shift($rotated);
            $rotated = array_merge(array_slice($rotated, $current), array_slice($rotated, 0, $current));

            for ($i = 0; $i < $half; $i++) {
                $home = $rotated[$i];
                $away = $rotated[$team_count - 2 - $i];

                if ($i == 0) {
                    $home = $fixed;
                }

                if (is_null($home) || is_null($away)) {
                    continue;
                }

                if ($round < $rounds) {
                    $homeTeam = $home;
                    $awayTeam = $away;
                } else {
                    $homeTeam = $away;
                    $awayTeam = $home;
                }

                $matchDate = $weekStartDate->copy()->addDays(rand(0, 6));

                // 2. stadyumu al (yoksa fallback)
                $stadium = $homeTeam->team->stadiums()->skip(1)->first() ?? $homeTeam->team->stadiums()->first();

                $games[] = [
                    'season_league_id' => $season_league->id,
                    'home_team_id' => $homeTeam->id,
                    'away_team_id' => $awayTeam->id,
                    'stadium_id' => $stadium->id,
                    'referee_id' => $this->refereeRepository->in_random_order(),
                    'date' => $matchDate,
                    'status' => 'waiting',
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }


        DB::table('games')->insert($games);

        return $this->repository->start($season_league->id);
    }



    public function getByForeign(int $league_id, int $season_id){
        return $this->repository->getByForeign($league_id,$season_id);
    }
}
