<?php

namespace App\Http\Controllers\Rcp;

use Illuminate\Routing\Controller as BaseController;

class FrontController extends BaseController
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('rcp.pages.auth.login');
    }
    public function dashboard()
    {
        return view('rcp.pages.dashboard.dashboard');
    }
}
