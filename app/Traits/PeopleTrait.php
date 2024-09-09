<?php

namespace App\Traits;

use App\Http\Resources\PaginateResource;
use App\Models\People;

trait PeopleTrait
{
    public static function getAllPeople($request)
    {
        $page = $request->page ?? 1;
        $perPage = $request->per_page ?? 20;

        return new PaginateResource(People::orderBy('created_at', 'asc')->paginate($perPage, ['*'], 'people',  $page));
    }
}
