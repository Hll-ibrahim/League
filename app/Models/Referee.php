<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Referee extends Model
{

    protected $fillable = ['sport_id','user_id'];
    public function games(){
        return $this->hasMany(Game::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
