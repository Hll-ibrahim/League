<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Comment;
use App\Models\Game;
use App\Models\PlayerStatistic;
use App\Services\GameService;
use App\Services\LeaguesTeamsService;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class GameController extends BaseController
{
    protected $leaguesTeamsService;
    public function __construct(GameService $gameService, LeaguesTeamsService $leaguesTeamsService){
        parent::__construct($gameService);
        $this->leaguesTeamsService = $leaguesTeamsService;
    }

    public function getMatches(Request $request){
        $user = $request->user();
        if ($user) {
            return $this->service->getGames($user);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Kullanıcı doğrulama hatası',
            ], 401);  // Unauthorized
        }
    }

    public function setScore(Request $request){

        $match = $this->service->getById($request->match_id);
        if(!$match){
            return response()->json(['success' => false,'error'=>'Match not found'],404);
        }
        $scoring_team = $request->scoring_team;
        $goal = $request->goals;
        switch ($scoring_team) {
            case 'home_team':
                $this->service->addHomeScore($match,$goal);
                break;
            case 'away_team':
                $this->service->addAwayScore($match,$goal);
                break;
        }
        return response()->json(['success' => true,'match' => $match,'scoring_team' => $scoring_team]);
    }

    public function fetch(Request $request){
        $league_id = $request->league_id;
        $season_id = $request->season_id;
        if(isset($league_id) and isset($season_id)){
            $games = $this->service->getGamesFromSeasonLeague($season_id,$league_id);
        }



        return DataTables::of($games)
            ->editColumn('home_team_id', function ($game) {
                return $game->homeTeam->team->name;
            })
            ->editColumn('away_team_id', function ($game) {
                return $game->awayTeam->team->name;
            })
            ->editColumn('referee_id', function ($game) {
                return $game->referee->user->name;
            })
            ->addColumn('detail', function ($game) {
                return '<a href="' . route('sport.league.game.detail', $game->id) . '" class="btn btn-info btn-xs">Detail</a>';
            })
            ->addColumn('date', function ($game) {
                return \Carbon\Carbon::parse($game->date)->translatedFormat('d F Y');
            })
            ->addIndexColumn()
            ->rawColumns(['detail'])->make(true);
    }

    public function detail($id){
        $game = $this->service->getById($id);
        if (!$game) {
            return response()->json(['success' => false, 'error' => 'Match not found'], 404);
        }

        $events = $this->service->getImportantEvents($game);
        $home_team = $game->homeTeam;
        $away_team = $game->awayTeam;

        $home_team_events = $this->service->getTeamEvents($events, $home_team);
        $away_team_events = $this->service->getTeamEvents($events, $away_team);

        $stadium = $game->stadium;
        $referee = $game->referee->user;
        $season_league = $game->seasonLeague;
        $league = $season_league->league;
        $season = $season_league->season;

        $statistics = $this->service->calculateTeamStatistics($game);
        $home_match_count = $this->service->getMatchCount($game, $home_team->id);
        $away_match_count = $this->service->getMatchCount($game, $away_team->id);
        $next_matches = $this->service->getNextMatches($game);

        $league_teams = $this->leaguesTeamsService->getLeagueTeamsBySeasonLeague($league->id, $season->id);

        $standings = $league_teams->map(function ($team) {
            $games = $team->win + $team->lose + $team->draw;
            $points = $this->leaguesTeamsService->getPoint($team);
            return [
                'team' => $team->team,
                'win' => $team->win,
                'lose' => $team->lose,
                'draw' => $team->draw,
                'points' => $points,
                'games' => $games,
                'school' => $team->team->school ?? '-',
                'logo' => $team->team->logo ?? 'default.png',
            ];
        })->sortByDesc('points')->values();

        $top_players = $this->service->getTopPlayers();
        $announcement = $this->service->getLatestAnnouncement([$home_team->id, $away_team->id]);
        $comments = $this->service->getComments($game);

        return view('game.detail', compact(
            'game', 'events', 'home_team', 'away_team',
            'league', 'season', 'statistics',
            'home_team_events', 'away_team_events',
            'stadium', 'referee', 'home_match_count',
            'away_match_count', 'next_matches',
            'standings', 'season_league',
            'top_players', 'announcement', 'comments'
        ));
    }
}
