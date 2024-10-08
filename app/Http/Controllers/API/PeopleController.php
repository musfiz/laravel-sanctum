<?php

namespace App\Http\Controllers\API;

use App\Traits\PeopleTrait;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PeopleController extends BaseController
{
    use PeopleTrait;

    public function list(Request $request): JsonResponse
    {
        $res = PeopleTrait::getAllPeople($request);
        return $this->sendPaginationResponse($res);
    }
}
