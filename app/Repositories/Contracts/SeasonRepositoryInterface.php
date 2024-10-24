<?php

namespace App\Repositories\Contracts;

interface SeasonRepositoryInterface
{
    public function getSeasons();
    public function getSeasonNameById($id);
}
