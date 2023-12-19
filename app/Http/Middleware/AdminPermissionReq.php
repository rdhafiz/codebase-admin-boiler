<?php

namespace App\Http\Middleware;

use App\Models\Admin;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminPermissionReq
{
    /**
     * @param Request $request
     * @param Closure $next
     * @return \Illuminate\Http\JsonResponse|mixed
     */
    public function handle(Request $request, Closure $next, $roles)
    {
        $roles = array_slice(func_get_args(), 2);
        if (Auth::guard('admin')->check()) {
            foreach ($roles as $role){
                if (Admin::$Permission[$role] == Auth::guard('admin')->user()->user_role) {
                    return $next($request);
                }
            }
            abort('403');
        } else {
            abort('401');
        }
    }
}
