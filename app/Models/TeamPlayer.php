<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TeamPlayer extends Model
{
    use HasFactory;

    protected $table = 'team_player';

    public function league_team(): BelongsTo{
        return $this->belongsTo(LeagueTeam::class);
    }
    public function player(): BelongsTo{
        return $this->belongsTo(Player::class);
    }

    public function playerStatistics()
    {
        return $this->hasMany(PlayerStatistic::class, 'team_player_id');
    }
}
