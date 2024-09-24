<?php

namespace App\Services\Contracts;

interface ServiceInterface{
    function add($data);
    function get($id);
    function all();
    function delete($id);
}
