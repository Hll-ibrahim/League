<?php

namespace App\Services;

interface ServiceInterface{
    function add($data);
    function get($id);
    function all();
    function delete($id);
}
