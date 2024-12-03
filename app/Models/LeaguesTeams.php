<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LeaguesTeams extends Model
{
    use HasFactory;

    public function league(): BelongsTo{
        return $this->belongsTo(League::class);
    }

    public function team(): BelongsTo{
        return $this->belongsTo(Team::class);
    }
}
