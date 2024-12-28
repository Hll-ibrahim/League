<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    public function events(){
        return $this->hasMany(Event::class);
    }

    public function home_team(){
        return $this->belongsTo(Team::class, 'home_team_id','id');
    }

    public function away_team(){
        return $this->belongsTo(Team::class, 'away_team_id','id');
    }

    public function seasonLeague()
    {
        return $this->belongsTo(SeasonLeague::class, 'season_league_id');
    }
}
