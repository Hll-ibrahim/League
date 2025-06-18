<?php

namespace App\Services;

use App\Repositories\Contracts\BaseRepositoryInterface;
use App\Repositories\Contracts\RefereeRepositoryInterface;

class RefereeService extends BaseService
{
    public function __construct(RefereeRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }

    public function getMatches(int $referee_id)
    {
        $referee = $this->repository->getById($referee_id);
        return $referee->games()->with(['homeTeam.team','awayTeam.team','seasonLeague.league','seasonLeague.season'])->get();
    }
}
