<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Routing\Controller as BaseController;

class HomepageController extends BaseController
{
    public function home()
    {
        return view("frontend.pages.home.index");
    }
}
