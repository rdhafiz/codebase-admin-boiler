<?php

namespace App\Http\Controllers\Cms;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class FrontController extends BaseController
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('cms.pages.auth.login');
    }
    public function dashboard()
    {
        return view('cms.pages.dashboard.dashboard');
    }
}
