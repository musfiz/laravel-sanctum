<?php

namespace App\Traits;

use App\Models\People;

trait PeopleTrait
{
    public static function getAllPeople($request)
    {
        $page = $request->page ?? 1;
        $perPage = $request->per_page ?? 20;


        return People::get();
    }
}
