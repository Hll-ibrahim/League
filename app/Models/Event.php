<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    public function eventType()
    {
        return $this->belongsTo(EventType::class, 'event_type_id');
    }

    public function playerStatistic(){
        return $this->belongsTo(PlayerStatistic::class, 'player_statistic_id');
    }
}
