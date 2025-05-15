<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeasonLeague extends Model
{
    use HasFactory;

    protected $table = 'season_league';

    protected $fillable = ['league_id', 'season_id','status'];

    public function league()
    {
        return $this->belongsTo(League::class);
    }

    public function leagueTeams()
    {
        return $this->hasMany(LeagueTeam::class);
    }

    public function season(){
        return $this->belongsTo(Season::class);
    }

    public function games(){
        return $this->hasMany(Game::class);
    }
}
