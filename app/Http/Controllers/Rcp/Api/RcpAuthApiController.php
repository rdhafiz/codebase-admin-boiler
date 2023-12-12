<?php

namespace App\Http\Controllers\Rcp\Api;

use App\Repositories\Rcp\AuthRepository;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class RcpAuthApiController extends BaseController
{
    public function login(Request $request)
    {
        $rv = AuthRepository::login($request);
        return response()->json($rv, 200);
    }
    public function logout(Request $request)
    {
        $rv = AuthRepository::logout($request);
        return response()->json($rv, 200);
    }
}
