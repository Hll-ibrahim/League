<?php

namespace App\Services\Contracts;

interface TeamServiceInterface
{
    public function handleRequest($data): array;
}
