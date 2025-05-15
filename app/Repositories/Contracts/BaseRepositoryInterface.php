<?php

namespace App\Repositories\Contracts;

interface BaseRepositoryInterface
{
    public function getAll();
    public function getById($id);
    public function create(array $data);
    public function update(array $data, $id);
    public function delete($id);

    public function getWithRelation(string $relation);

}
