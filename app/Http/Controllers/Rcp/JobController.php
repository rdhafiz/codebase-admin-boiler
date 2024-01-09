<?php

namespace App\Http\Controllers\Rcp;

use App\Http\Controllers\Controller;
use App\Models\JobApply;
use App\Models\Jobs;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class JobController extends Controller
{
    public function index(): View
    {
        $jobs = Jobs::orderBy('created_at', 'asc')->get()->toArray();
        foreach ($jobs as &$job){
            $job['applicants'] = JobApply::where('job_id', $job['_id'])->count();
        }
        return view('rcp.pages.job.index', compact('jobs'));
    }

    public function create(): View
    {
        return view('rcp.pages.job.create');
    }

    public function store(Request $request)
    {
        try {

            $validator = Validator::make($request->all(), [
                'company_name' => 'required|min:5',
                'company_website' => 'nullable|url',
                'job_title' => 'required|min:5',
                'job_type' => 'required|string',
                'salary_min' => 'required|numeric',
                'salary_max' => 'nullable|numeric',
                'location' => 'nullable|string',
                'job_description' => 'required|string'
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withInput($request->input())->withErrors($validator->errors());
            }

            $job = Jobs::create([
                'recruiter' => Auth::guard('rcp')->id(),
                'company_name' => $request->company_name,
                'company_website' => $request->company_website ?? null,
                'job_title' => $request->job_title,
                'job_type' => $request->job_type,
                'salary_min' => $request->salary_min,
                'salary_max' => $request->salary_max ?? null,
                'location' => $request->location ?? null,
                'job_description' => $request->job_description
            ]);

            return redirect()->route('RCP.job.show', [$job->_id])->withErrors(['success' => ['New job information has been created successfully']]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => [$e->getMessage()]]);
        }
    }

    public function show($id): View
    {
        $job = Jobs::where('_id', $id)->first();
        if ($job == null) {
            abort('404');
        }
        return view('rcp.pages.job.show', compact('job'));
    }

    public function edit($id): View
    {
        $job = Jobs::where('_id', $id)->first();
        if ($job == null) {
            abort('404');
        }
        return view('rcp.pages.job.edit', compact('job'));
    }

    public function update(Request $request, $id)
    {
        try {
            $job = Jobs::where('_id', $id)->first();
            if ($job == null) {
                abort('404');
            }
            $validator = Validator::make($request->all(), [
                'company_name' => 'required|min:5',
                'company_website' => 'nullable|url',
                'job_title' => 'required|min:5',
                'job_type' => 'required|string',
                'salary_min' => 'required|numeric',
                'salary_max' => 'nullable|numeric',
                'location' => 'nullable|string',
                'job_description' => 'required|string'
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withInput($request->input())->withErrors($validator->errors());
            }

            Jobs::where('_id', $id)->update([
                'company_name' => $request->company_name,
                'company_website' => $request->company_website ?? null,
                'job_title' => $request->job_title,
                'job_type' => $request->job_type,
                'salary_min' => $request->salary_min,
                'salary_max' => $request->salary_max ?? null,
                'location' => $request->location ?? null,
                'job_description' => $request->job_description
            ]);

            return redirect()->route('RCP.job.show', [$job->_id])->withErrors(['success' => ['Job information has been updated successfully']]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => [$e->getMessage()]]);
        }
    }
    public function destroy($id)
    {
        try {
            $job = Jobs::where('_id', $id)->first();
            if ($job == null) {
                abort('404');
            }
            $job->delete();
            return redirect()->back()->withErrors(['success' => ['Job has been deleted successfully']]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => [$e->getMessage()]]);
        }
    }
    public function applications(Request $request, $id): View
    {
        $job = Jobs::where('_id', $id)->first();
        if ($job == null){
            abort(404);
        }
        $applications = JobApply::where('job_id', $id)->get()->toArray();
        foreach ($applications as &$application){
            $application['user_info'] = User::where('_id', $application['user_id'])->first();
        }
        return view('rcp.pages.job.applications', compact('job','applications'));
    }
}
