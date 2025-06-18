<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\League;
use App\Models\Player;
use App\Models\Team;
use App\Services\AnnouncementService;
use Illuminate\Http\Request;

class AnnouncementController extends BaseController
{
    public function __construct(AnnouncementService $announcementService){
         parent::__construct($announcementService);
    }
    public function index(){
        $announcements = $this->service->paginate(5);
        return view('announcement.index', compact('announcements'));
    }

    public function create()
    {
        $teams = Team::all();
        $leagues = League::all();
        $players = Player::all();
        return view('announcement.create', compact('teams', 'leagues', 'players'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'team_id' => 'nullable|exists:teams,id',
            'league_id' => 'nullable|exists:leagues,id',
            'player_id' => 'nullable|exists:players,id',
        ]);

        Announcement::create([
            'user_id' => auth()->id(),
            'title' => $request->title,
            'description' => $request->description,
            'team_id' => $request->team_id,
            'league_id' => $request->league_id,
            'player_id' => $request->player_id,
        ]);

        return redirect()->route('announcement.index')->with('success', 'Announcement created successfully!');
    }
}
