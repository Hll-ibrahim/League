<?php

namespace App\Services;

use App\Models\SeasonLeague;
use App\Models\User;
use App\Repositories\BaseRepositoryMysql;
use App\Repositories\Contracts\SeasonLeagueRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class SeasonLeagueService extends BaseService
{
    public function __construct(SeasonLeagueRepositoryInterface $seasonLeagueRepository){
        parent::__construct($seasonLeagueRepository);
    }


    public function start(int $league_id, int $season_id)
    {
        $season_league = $this->repository->getByForeign($league_id, $season_id);
        $league_teams = $season_league->leagueTeams->pluck('team');

        $matchups = [];

        for ($i = 0; $i < $league_teams->count(); $i++) {
            for ($j = $i + 1; $j < $league_teams->count(); $j++) {
                $matchups[] = ['home' => $league_teams[$i]->id, 'away' => $league_teams[$j]->id];
                $matchups[] = ['home' => $league_teams[$j]->id, 'away' => $league_teams[$i]->id];
            }
        }

        shuffle($matchups);

        $team_next_available = [];
        $games = [];
        $startDate = Carbon::now()->startOfWeek()->addDay(1); // Pazartesi

        foreach ($matchups as $match) {
            $home = $match['home'];
            $away = $match['away'];

            $minDate = $startDate->copy();

            // Her iki takımın da bir önceki maçından +3 gün sonrası
            foreach ([$home, $away] as $team_id) {
                if (isset($team_next_available[$team_id])) {
                    $team_date = $team_next_available[$team_id];
                    if ($team_date->greaterThan($minDate)) {
                        $minDate = $team_date->copy();
                    }
                }
            }

            // Rastgele gün ekle (hafta içinden)
            $matchDate = $minDate->copy()->addDays(rand(0, 2));
            foreach ([$home, $away] as $team_id) {
                $team_next_available[$team_id] = $matchDate->copy()->addDays(3);
            }

            $games[] = [
                'season_league_id' => $season_league->id,
                'home_team_id' => $home,
                'away_team_id' => $away,
                'referee_id' => User::inRandomOrder()->value('id') ?? 1,
                'date' => $matchDate,
                'status' => 'waiting',
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('games')->insert($games); // toplu insert daha hızlıdır

        return $this->repository->start($season_league->id);
    }



    public function getByForeign(int $league_id, int $season_id){
        return $this->repository->getByForeign($league_id,$season_id);
    }
}
