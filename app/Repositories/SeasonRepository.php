<?php

namespace App\Repositories;

use App\Models\Season;
use App\Repositories\Contracts\SeasonRepositoryInterface;

class SeasonRepository implements SeasonRepositoryInterface
{
    public function getSeasons(){
        return Season::all();
    }
}
