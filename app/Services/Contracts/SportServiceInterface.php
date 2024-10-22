<?php

namespace App\Services\Contracts;

interface SportServiceInterface
{
    public function processControl($request);
    public function add($data);
    public function get($id);
    public function all();
    public function delete($id);
    public function update($data);
    public function getSportName($id);

}
