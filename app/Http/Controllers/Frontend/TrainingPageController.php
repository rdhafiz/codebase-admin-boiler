<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Routing\Controller as BaseController;

class TrainingPageController extends BaseController
{
    public function viewOSCE()
    {
        return view("frontend.pages.osce");
    }

    public function viewPlab()
    {
        return view("frontend.pages.osce");
    }

    public function viewCBT()
    {
        return view("frontend.pages.osce");
    }

    public function viewEnglishLanguage()
    {
        return view("frontend.pages.osce");
    }
}
