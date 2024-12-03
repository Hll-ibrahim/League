<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class League extends Model
{
    use HasFactory;

    protected $fillable = ['name','description','sport_id', 'season_id','league_type_id']; // Add the fields you want to be mass-assignable

    public function season()
    {
        return $this->belongsTo(Season::class);
    }

    public function teams(): HasMany{
        return $this->hasMany(LeaguesTeams::class);
    }
}
