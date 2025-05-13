<?php

namespace App\Repositories\Contracts;

interface SeasonRepositoryInterface extends BaseRepositoryInterface
{
    public function getSeasons();
    public function getSeasonNameById($id);
}
