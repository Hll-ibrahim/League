<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayerStatistic extends Model
{
    use HasFactory;
    public function events()
    {
        return $this->hasMany(Event::class, 'player_statistic_id');
    }

    public function game()
    {
        return $this->belongsTo(Game::class, 'game_id');
    }
}
