<?php


namespace App\Services;
use App\Models\Announcement;
use App\Models\Comment;
use App\Models\EventType;
use App\Models\Game;
use App\Models\Player;
use App\Models\PlayerStatistic;
use App\Models\Team;
use App\Repositories\Contracts\GameRepositoryInterface;
use Illuminate\Support\Facades\DB;

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
        // Event türlerini al (id => name)
        $eventTypes = EventType::where('sport_id', $game->seasonLeague->league->sport_id)
            ->pluck('name', 'id');

        // Oyuncu istatistiklerini çek
        $playerStats = PlayerStatistic::with(['events', 'teamPlayer.leagueTeam.team'])
            ->where('game_id', $game->id)
            ->get();

        // Takımları league_team_id üzerinden grupluyoruz
        $teams = $playerStats->groupBy(function ($stat) {
            return $stat->teamPlayer->leagueTeam->id;
        });

        $response = [];

        foreach ($teams as $leagueTeamId => $teamPlayerStats) {
            // Team modeline ulaşmak için
            $team = $teamPlayerStats->first()->teamPlayer->leagueTeam->team;

            // Varsayılan istatistik şablonu
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
                'ball_possession' => 0,
            ];

            // Sayaçlar
            $passCount = 0;
            $accuratePassCount = 0;
            $shotCount = 0;
            $onGoalShotCount = 0;

            foreach ($teamPlayerStats as $stat) {
                foreach ($stat->events as $event) {
                    $eventName = $eventTypes[$event->event_type_id] ?? null;

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
            $stats['pass_accuracy'] = $passCount > 0 ? round(($accuratePassCount / $passCount) * 100, 1) : 0;
            $stats['shot_accuracy'] = $shotCount > 0 ? round(($onGoalShotCount / $shotCount) * 100, 1) : 0;

            $response[] = [
                'league_team_id' => $leagueTeamId,
                'team' => [
                    'id' => $team->id,
                    'name' => $team->name,
                    'logo' => $team->logo,
                ],
                'statistics' => $stats,
            ];
        }

        // Topa sahip olma yüzdesi için (örnek)
        $team1Pos = rand(50, 70);
        $team2Pos = 100 - $team1Pos;

        if (isset($response[0]['statistics'])) {
            $response[0]['statistics']['ball_possession'] = $team1Pos;
        }
        if (isset($response[1]['statistics'])) {
            $response[1]['statistics']['ball_possession'] = $team2Pos;
        }


        $team1 = $response[0] ?? [];
        $team2 = $response[1] ?? [];

        $team1Stats = $team1['statistics'] ?? [];
        $team2Stats = $team2['statistics'] ?? [];

        return [
            'home' => [
                'team' => (object)($team1['team'] ?? ['logo' => '', 'name' => 'Unknown']),
                'shot_accuracy' => $team1Stats['shot_accuracy'] ?? 0,
                'pass_accuracy' => $team1Stats['pass_accuracy'] ?? 0,
                'stats' => [
                    'Fou' => $team1Stats['fouls'] ?? 0,
                    'OFF' => $team1Stats['offsides'] ?? 0,
                    'Sho' => $team1Stats['shots']['total'] ?? 0,
                ],
            ],
            'away' => [
                'team' => (object)($team2['team'] ?? ['logo' => '', 'name' => 'Unknown']),
                'shot_accuracy' => $team2Stats['shot_accuracy'] ?? 0,
                'pass_accuracy' => $team2Stats['pass_accuracy'] ?? 0,
                'stats' => [
                    'Fou' => $team2Stats['fouls'] ?? 0,
                    'OFF' => $team2Stats['offsides'] ?? 0,
                    'Sho' => $team2Stats['shots']['total'] ?? 0,
                ],
            ],
            'ball_possession' => [
                'home' => $team1Stats['ball_possession'] ?? 50,
                'away' => $team2Stats['ball_possession'] ?? 50,
            ],
            'main_table' => [
                [
                    'label' => 'Shots (on goal)',
                    'home' => ($team1Stats['shots']['total'] ?? 0) . ' (' . ($team1Stats['shots']['on_goal'] ?? 0) . ')',
                    'away' => ($team2Stats['shots']['total'] ?? 0) . ' (' . ($team2Stats['shots']['on_goal'] ?? 0) . ')',
                ],
                [
                    'label' => 'Corner Kicks',
                    'home' => $team1Stats['corner_kicks'] ?? 0,
                    'away' => $team2Stats['corner_kicks'] ?? 0,
                ],
                [
                    'label' => 'Saves',
                    'home' => $team1Stats['saves'] ?? 0,
                    'away' => $team2Stats['saves'] ?? 0,
                ],
                [
                    'label' => 'Yellow Cards',
                    'home' => $team1Stats['yellow_cards'] ?? 0,
                    'away' => $team2Stats['yellow_cards'] ?? 0,
                ],
                [
                    'label' => 'Red Cards',
                    'home' => $team1Stats['red_cards'] ?? 0,
                    'away' => $team2Stats['red_cards'] ?? 0,
                ],
            ],
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

    public function getImportantEvents(Game $game)
    {
        return $game->events()
            ->whereRelation('eventType', 'is_important', true)
            ->with(['playerStatistic.TeamPlayer.player', 'eventType'])
            ->get();
    }

    public function getTeamEvents($events, $team)
    {
        return $events->filter(function ($event) use ($team) {
            return $event->playerStatistic->teamPlayer->leagueTeam->id === $team->id;
        });
    }

    public function getMatchCount(Game $game, $team_id)
    {
        return Game::where(function ($q) use ($team_id) {
            $q->where('home_team_id', $team_id)
                ->orWhere('away_team_id', $team_id);
        })
            ->where('season_league_id', $game->season_league_id)
            ->where('date', '<=', $game->date)
            ->count();
    }

    public function getNextMatches(Game $game)
    {
        $next_matches = collect();

        foreach ([$game->home_team_id, $game->away_team_id] as $team_id) {
            $next_match = Game::where('season_league_id', $game->season_league_id)
                ->where('date', '>', $game->date)
                ->where(function ($query) use ($team_id) {
                    $query->where('home_team_id', $team_id)
                        ->orWhere('away_team_id', $team_id);
                })
                ->orderBy('date')
                ->with(['homeTeam.team', 'awayTeam.team'])
                ->first();

            if ($next_match) {
                $next_matches->push($next_match);
            }
        }

        return $next_matches;
    }

    public function getTopPlayers()
    {
        return PlayerStatistic::with(['teamPlayer.leagueTeam.team', 'teamPlayer.player', 'events.eventType'])
            ->get()
            ->map(function ($statistic) {
                $events = $statistic->events;

                $goals = $events->where('eventType.name', 'goal')->count();
                $assists = $events->where('eventType.name', 'assist')->count();
                $shots = $events->where('eventType.name', 'shot')->count();
                $shots_on_goal = $events->where('eventType.name', 'shot_on_goal')->count();

                $passes = $events->where('eventType.name', 'pass')->count();
                $accurate_passes = $events->where('eventType.name', 'accurate_pass')->count();

                $shot_accuracy = $shots > 0 ? round(($shots_on_goal / $shots) * 100) : 0;
                $pass_accuracy = $passes > 0 ? round(($accurate_passes / $passes) * 100) : 0;

                return [
                    'player' => $statistic->teamPlayer->player,
                    'team' => $statistic->teamPlayer->team,
                    'goals' => $goals,
                    'assists' => $assists,
                    'shots' => $shots,
                    'played' => 1,
                    'shot_accuracy' => $shot_accuracy,
                    'pass_accuracy' => $pass_accuracy,
                ];
            })
            ->sortByDesc('goals')
            ->take(5);
    }

    public function getLatestAnnouncement(array $team_ids)
    {
        return Announcement::whereIn('team_id', $team_ids)
            ->latest()
            ->with('user')
            ->first();
    }

    public function getComments(Game $game)
    {
        return Comment::where('game_id', $game->id)
            ->latest()
            ->with('user')
            ->get();
    }

    public function getPlayersOfGame(Game $game)
    {
        return Player::select('players.id', DB::raw("CONCAT(players.first_name, ' ', players.last_name) as name"))
            ->join('team_player', 'players.id', '=', 'team_player.player_id')
            ->join('player_statistics', 'team_player.id', '=', 'player_statistics.team_player_id')
            ->where('player_statistics.game_id', $game->id)
            ->get();
    }

    public function lastGames($limit = 5){
        return $this->repository->lastGames($limit);
    }


}
