<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class League extends Model
{
    use HasFactory;

    protected $fillable = ['name','description','sport_id', 'season_id','league_type_id','win_point','draw_point','lose_point','player_count']; // Add the fields you want to be mass-assignable

    public function sport()
    {
        return $this->belongsTo(Sport::class);
    }

    public function leagueType()
    {
        return $this->belongsTo(LeagueType::class);
    }

    public function seasonLeagues()
    {
        return $this->hasMany(SeasonLeague::class);
    }

    public function teams()
    {
        return $this->hasManyThrough(
            Team::class,
            LeagueTeam::class,
            'season_league_id', // Foreign key on the league_team table
            'id',               // Foreign key on the teams table
            'id',               // Local key on the leagues table
            'team_id'           // Local key on the league_team table
        );
    }
}
