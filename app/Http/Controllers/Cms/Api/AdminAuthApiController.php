<?php

namespace App\Http\Controllers\Cms\Api;

use App\Repositories\Admin\AuthRepository;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class AdminAuthApiController extends BaseController
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
