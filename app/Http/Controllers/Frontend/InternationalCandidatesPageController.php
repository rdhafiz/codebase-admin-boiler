<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Routing\Controller as BaseController;

class InternationalCandidatesPageController extends BaseController
{
    public function viewPage()
    {
        return view("frontend.pages.international-candidates");
    }
}
