<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stadium extends Model
{
    protected $table = 'stadiums';// default -> stadia ama stadia aşırı teknik ve antik bir kullanım
    public function games(){
        return $this->hasMany(Game::class);
    }
}
