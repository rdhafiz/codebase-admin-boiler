<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RcpAuthApiCheck
{
    /**
     * @param Request $request
     * @param Closure $next
     * @return \Illuminate\Http\JsonResponse|mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!Auth::guard('rcp')->check()){
            return $next($request);
        } else {
            return response()->json(['error' => 'You are already logged in'], 200);
        }
    }
}
