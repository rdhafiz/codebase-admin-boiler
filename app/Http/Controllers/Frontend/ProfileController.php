<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Course;
use App\Models\CourseApplicants;
use App\Models\CourseCategories;
use App\Models\CourseType;
use App\Models\User;
use App\Services\MediaServices;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ProfileController extends BaseController
{
    public function profile()
    {
        return view("frontend.pages.profile.profile");
    }
}
