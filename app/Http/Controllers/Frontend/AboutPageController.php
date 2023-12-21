<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Routing\Controller as BaseController;

class AboutPageController extends BaseController
{
    public function viewPage()
    {
        return view("frontend.pages.about-us");
    }
}
