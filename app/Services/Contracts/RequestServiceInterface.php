<?php

namespace App\Services\Contracts;

interface RequestServiceInterface
{
    public function handleRequest($request);
    public function sendToSport();

    public function sendToLeague();

    public function sendToTeam();
}
