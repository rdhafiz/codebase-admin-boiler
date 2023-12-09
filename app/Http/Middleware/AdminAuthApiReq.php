<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthApiReq
{
    /**
     * @param Request $request
     * @param Closure $next
     * @return \Illuminate\Http\JsonResponse|mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::guard('admin')->check()){
            return $next($request);
        } else {
            return response()->json(['error' => 'Unauthorized Request'], 401);
        }
    }
}
