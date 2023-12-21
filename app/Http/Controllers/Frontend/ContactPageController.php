<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Routing\Controller as BaseController;

class ContactPageController extends BaseController
{
    public function viewPage()
    {
        return view("frontend.pages.contact-us");
    }
}
