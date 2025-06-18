<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $fillable = ['title','description','user_id','player_id','team_id','league_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function team(){
        return $this->belongsTo(Team::class);
    }
    public function league(){
        return $this->belongsTo(League::class);
    }
    public function player(){
        return $this->belongsTo(Player::class);
    }
}
