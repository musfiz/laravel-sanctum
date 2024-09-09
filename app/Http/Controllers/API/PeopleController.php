<?php

namespace App\Http\Controllers\API;

use App\Traits\PeopleTrait;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PeopleController extends BaseController
{
    use PeopleTrait;

    public function list(Request $request): Response
    {
        $data = PeopleTrait::getAllPeople($request);
        return $this->sendResponse($data);
    }
}
