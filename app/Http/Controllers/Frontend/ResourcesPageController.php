<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Routing\Controller as BaseController;

class ResourcesPageController extends BaseController
{
    public function viewPage()
    {
        return view("frontend.pages.resources");
    }
}
