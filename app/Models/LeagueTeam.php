<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LeagueTeam extends Model
{
    use HasFactory;

    protected $fillable = ['team_id', 'league_id','win','lose','draw','scored_goals','goals_for'];

    public function league(): BelongsTo{
        return $this->belongsTo(League::class);
    }

    public function team(): BelongsTo{
        return $this->belongsTo(Team::class);
    }
}
