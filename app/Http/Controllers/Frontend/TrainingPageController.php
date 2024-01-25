<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Routing\Controller as BaseController;

class TrainingPageController extends BaseController
{
    public function viewOSCE()
    {
        return view("frontend.pages.osce");
    }

    public function viewPlab1()
    {
        return view("frontend.pages.plab-1");
    }

    public function viewPlab2()
    {
        return view("frontend.pages.plab-2");
    }

    public function viewCBT()
    {
        return view("frontend.pages.osce");
    }

    public function viewEnglishLanguage()
    {
        return view("frontend.pages.osce");
    }

    public function viewTrainers()
    {
        return view("frontend.pages.teams");
    }
}
