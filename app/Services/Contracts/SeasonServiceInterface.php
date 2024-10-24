<?php

namespace App\Services\Contracts;

interface SeasonServiceInterface
{
    public function processControl($request);
    public function all();
    public function getSeasonNameById(int $seasonId);
}
