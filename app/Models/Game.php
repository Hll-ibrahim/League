<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = ['season_league_id', 'home_team_id', 'date', 'status','referee_id','away_team_id'];

    public function events(){
        return $this->hasMany(Event::class);
    }

    public function homeTeam(){
        return $this->belongsTo(Team::class, 'home_team_id','id');
    }

    public function awayTeam(){
        return $this->belongsTo(Team::class, 'away_team_id','id');
    }

    public function seasonLeague()
    {
        return $this->belongsTo(SeasonLeague::class, 'season_league_id');
    }

    public function playerStatistics(){
        return $this->hasMany(PlayerStatistic::class);
    }

    public function referee(){
        return $this->belongsTo(Referee::class);
    }
}
