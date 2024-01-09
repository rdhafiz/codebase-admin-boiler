<?php

namespace App\Http\Controllers\Frontend;

use App\Models\JobApply;
use App\Models\Jobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class JobsPageController extends BaseController
{
    public function viewPage()
    {
        return view("frontend.pages.jobs");
    }
    public function job_details(Request $request, $id)
    {
        $job = Jobs::where('_id', $id)->first();
        if($job == null){
            abort(404);
        }
        return view("frontend.pages.job_details", compact('job'));
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
    public function job_apply(Request $request, $id)
    {
        $job = Jobs::where('_id', $id)->first();
        if($job == null){
            abort(404);
        }

        $check = JobApply::where('user_id', Auth::id())->where('job_id', $id)->first();
        if($check != null){
            return redirect()->back()->withErrors(['error' => ['You have already apply on this job. Thank you!']]);
        }

        JobApply::create([
            'user_id' => Auth::id(),
            'job_id' => $id
        ]);
        return redirect()->back()->withErrors(['success' => ['Your application has been submitted successfully!']]);
    }
}
