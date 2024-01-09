<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Jobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class JobsPageController extends BaseController
{
    public function viewPage()
    {
        return view("frontend.pages.jobs");
    }
    public function job_search(Request $request)
    {
        $jobs = Jobs::where(function ($q) use($request){
            if(!empty($request->job_type) && is_array($request->job_type)){
                $q->whereIn('job_type', $request->job_type);
            }
            if(!empty($request->title)){
                $q->where('job_title', 'LIKE', '%'.$request->title.'%');
            }
            if(!empty($request->location)){
                $q->where('location', 'LIKE', '%'.$request->location.'%');
            }
        })->orderBy('created_at', 'desc')->get()->toArray();
        foreach ($jobs as &$job){
            $job['job_description'] = substr(strip_tags($job['job_description']), 0, 275);
        }
        return response()->json($jobs, 200);
    }
}
