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

    public function team(): BelongsTo{
        return $this->belongsTo(Team::class);
    }
    public function player(): BelongsTo{
        return $this->belongsTo(Player::class);
    }

    public function player_statistics(): HasMany{
        return $this->hasMany(PlayerStatistic::class);
    }
}
