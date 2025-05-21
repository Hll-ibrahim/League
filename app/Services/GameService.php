<?php


namespace App\Services;
use App\Models\EventType;
use App\Models\Game;
use App\Models\PlayerStatistic;
use App\Models\Team;
use App\Repositories\Contracts\GameRepositoryInterface;

class GameService extends BaseService {


    function __construct(GameRepositoryInterface $gameRepository) {
        parent::__construct($gameRepository);
    }

    public function getGames($user){
        $games = $user->refereeGames;
        $matches = [];
        foreach ($games as $game) {
            $match = $this->repository->getGamesWithNames($game);
            array_push($matches, $match);
        }
        return response()->json([
            'success' => true,
            'matches' => $matches,
        ]);
    }

    public function addHomeScore($game,$goal){
        return $this->repository->setScore($game,$goal,'home');
    }

    public function addAwayScore($game,$goal){
        return $this->repository->setScore($game,$goal,'away');
    }
    public function getGamesFromSeasonLeague(int $season_id,int $league_id){
        return $this->repository->getGamesFromSeasonLeague($season_id,$league_id);
    }

    public function calculateTeamStatistics(Game $game): array
    {
        $eventTypes = EventType::where('sport_id', $game->seasonLeague->league->sport_id)->pluck('id', 'name');

        $playerStats = PlayerStatistic::with(['events', 'teamPlayer.player'])
            ->where('game_id', $game->id)
            ->get();

        // Takımları ayır
        $teams = $playerStats->groupBy('team_id');

        $response = [];
        foreach ($teams as $teamId => $teamPlayerStats) {
            $team = Team::find($teamId);

            // Varsayılanlar
            $stats = [
                'shots' => ['total' => 0, 'on_goal' => 0],
                'corner_kicks' => 0,
                'saves' => 0,
                'yellow_cards' => 0,
                'red_cards' => 0,
                'fouls' => 0,
                'offsides' => 0,
                'pass_accuracy' => 0,
                'shot_accuracy' => 0,
                'ball_possession' => 0, // yüzdelik olarak hesaplanacak
            ];

            $passCount = 0;
            $accuratePassCount = 0;
            $shotCount = 0;
            $onGoalShotCount = 0;

            foreach ($teamPlayerStats as $stat) {
                foreach ($stat->events as $event) {
                    $eventName = $eventTypes->search($event->event_type_id);

                    switch ($eventName) {
                        case 'pass':
                            $passCount++;
                            break;
                        case 'accurate_pass':
                            $accuratePassCount++;
                            break;
                        case 'shot':
                            $shotCount++;
                            break;
                        case 'shot_on_goal':
                            $onGoalShotCount++;
                            break;
                        case 'corner':
                            $stats['corner_kicks']++;
                            break;
                        case 'save':
                            $stats['saves']++;
                            break;
                        case 'yellow_card':
                            $stats['yellow_cards']++;
                            break;
                        case 'red_card':
                            $stats['red_cards']++;
                            break;
                        case 'foul':
                            $stats['fouls']++;
                            break;
                        case 'offside':
                            $stats['offsides']++;
                            break;
                    }
                }
            }

            $stats['shots']['total'] = $shotCount;
            $stats['shots']['on_goal'] = $onGoalShotCount;

            // Yüzdeleri hesapla
            $stats['pass_accuracy'] = $passCount > 0 ? round(($accuratePassCount / $passCount) * 100, 1) : 0;
            $stats['shot_accuracy'] = $shotCount > 0 ? round(($onGoalShotCount / $shotCount) * 100, 1) : 0;

            $response[] = [
                'team' => [
                    'id' => $team->id,
                    'name' => $team->name,
                    'logo' => $team->logo,
                ],
                'statistics' => $stats,
            ];
        }

        // Topla oynama yüzdesi hesapla
        $team1Pos = rand(50, 70); // örnek veri (gerçek veri yoksa)
        $team2Pos = 100 - $team1Pos;

        if (isset($response[0]['statistics'])) {
            $response[0]['statistics']['ball_possession'] = $team1Pos;
        }
        if (isset($response[1]['statistics'])) {
            $response[1]['statistics']['ball_possession'] = $team2Pos;
        }

        return [
            'team_1' => $response[0] ?? [],
            'team_2' => $response[1] ?? [],
        ];
    }

    public function getStatisticsByEventTypes(Game $game)
    {
        $homeTeamId = $game->home_team_id;
        $awayTeamId = $game->away_team_id;
        $gameId = $game->id;

        $eventTypes = EventType::withCount([
            'events as home_count' => function ($query) use ($homeTeamId, $gameId) {
                $query->where('game_id', $gameId)
                    ->whereHas('playerStatistic', function ($q) use ($homeTeamId) {
                        $q->where('team_id', $homeTeamId);
                    });
            },
            'events as away_count' => function ($query) use ($awayTeamId, $gameId) {
                $query->where('game_id', $gameId)
                    ->whereHas('playerStatistic', function ($q) use ($awayTeamId) {
                        $q->where('team_id', $awayTeamId);
                    });
            },
        ])->get();

        return $eventTypes;
    }

    public function start(int $game_id){
        return $this->repository->start($game_id);
    }


}
