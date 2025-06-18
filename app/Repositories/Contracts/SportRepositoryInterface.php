<?php

namespace App\Repositories\Contracts;

use App\Models\Sport;

interface SportRepositoryInterface extends BaseRepositoryInterface
{
    public function createSport($data);
    public function getSports();

    public function getSportById($id);


    public function delete($id);

    public function getSportName($id);
}
