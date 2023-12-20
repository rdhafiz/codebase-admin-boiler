<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Routing\Controller as BaseController;

class HomePageController extends BaseController
{
    public function viewPage()
    {
        return view("frontend.pages.home.index");
    }
}
