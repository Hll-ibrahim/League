<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Team extends Model
{
    use HasFactory;

    public function leagues()
    {
        return $this->belongsToMany(League::class, 'league_team', 'team_id', 'season_league_id');
    }

    public function events(){
        return $this->hasMany(Event::class);
    }

    public function home_games(){
        return $this->hasMany(Game::class, 'home_team_id');
    }

    public function away_games(){
        return $this->hasMany(Game::class, 'away_team_id');
    }
}
