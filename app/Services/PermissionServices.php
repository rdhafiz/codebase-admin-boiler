<?php

namespace App\Services;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PermissionServices
{
    public static function isPermitted($roles)
    {
        $permit = false;
        if (Auth::guard('admin')->check()) {
            foreach ($roles as $role){
                if (Admin::$Permission[$role] == Auth::guard('admin')->user()->user_role) {
                    $permit = true;
                }
            }
        }
        return $permit;
    }
}
