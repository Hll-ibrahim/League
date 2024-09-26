<?php

namespace App\Repositories\Contracts;

use App\Models\Sport;

interface SportRepositoryInterface
{
    public function createSport($data);
    public function getSports();

    public function getSportById($id);

    public function update(Sport $sport, $data);

    public function delete($id);
}
