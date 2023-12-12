<?php

namespace App\Repositories\Rcp;

use App\Models\Admin;
use App\Models\Recruiters;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthRepository
{
    public static function login($request)
    {
        try {
            $input = $request->input();
            $validator = Validator::make($input, [
                'email' => 'required|email|exists:recruiters,email',
                'password' => 'required|min:6'
            ]);
            if ($validator->fails()) {
                return ['status' => 500, 'error' => $validator->errors()];
            }

            $rcpInfo = Recruiters::where('email', $input['email'])->first();
            if (Hash::check($request->password, $rcpInfo->password)) {
                $credential = [
                    'email' => $request->email,
                    'password' => $request->password
                ];
                $remember = $request->remember == 1 ? true : false;
                if (Auth::guard('rcp')->attempt($credential, $remember)) {
                    return ['status' => 200, 'msg' => 'Login Successful!'];
                } else {
                    return ['status' => 500, 'error' => ['email' => 'Invalid credentials! Please try again.']];
                }
            } else {
                return ['status' => 500, 'error' => ['password' => ['Invalid credentials! Please try again.']]];
            }
        } catch (\Exception $e) {
            return ['status' => 500, 'error' => $e->getMessage()];
        }
    }

    public static function logout($request)
    {
        try {
            Auth::guard('rcp')->logout();
            return ['status' => 200, 'msg' => 'Logout Successful!'];
        } catch (\Exception $e) {
            return ['status' => 500, 'error' => $e->getMessage()];
        }
    }

}
