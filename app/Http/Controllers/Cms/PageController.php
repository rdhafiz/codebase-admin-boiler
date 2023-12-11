<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\WebsitePages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $pages = WebsitePages::orderby('created_at', 'asc')->get();
        return view('cms.pages.page.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('cms.pages.page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        try {
            $request->validate([
                'slug' => 'required|min:3',
                'meta' => 'required|array',
                'meta.title' => 'nullable|string',
                'meta.keyword' => 'nullable|string',
                'meta.description' => 'nullable|string',
            ]);
            $imagePath = '';
            if ($request->feature_image) {
                $imagePath = 'media/page-banner/' . $request->slug . '.png';
                Storage::disk('public')->put($imagePath, file_get_contents($request->feature_image));
            }
            $meta = $request->meta;
            $meta['image'] = $imagePath;
            $page = new WebsitePages();
            $page->page = $request->slug;
            $page->slug = $request->slug;
            $page->dynamic = 1;
            $page->meta = $meta;
            $page->save();
            return redirect()->route('CMS.page.edit', [$page->_id])->withErrors(['success' => ['New Page information has been created successfully']]);
        } catch (\Exception $e) {
            return redirect()->bavk()->withErrors(['error' => [$e->getMessage()]]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $page = WebsitePages::where('_id', $id)->first();
        if ($page == null) {
            abort('404');
        }
        return view('cms.pages.page.edit', compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $page = WebsitePages::where('_id', $id)->first();
        if ($page == null) {
            abort('404');
        }
        if(isset($page->meta['image']) && !empty($page->meta['image'])){
            $meta = $page->meta;
            $meta['image'] = asset('storage/'.$meta['image']);
            $page->meta = $meta;
        }
        return view('cms.pages.page.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {

        try {
            $page = WebsitePages::where('_id', $id)->first();
            if ($page == null) {
                abort('404');
            }
            $request->validate([
                'slug' => $page->page == 'home' ? 'nullable' : 'required|min:3',
                'meta' => 'required|array',
                'meta.title' => 'nullable|string',
                'meta.keyword' => 'nullable|string',
                'meta.description' => 'nullable|string',
            ]);
            $imagePath = $page->meta['image'] ?? '';
            if ($request->feature_image) {
                $imagePath = 'media/page-banner/' . $page->page . '.png';
                Storage::disk('public')->put($imagePath, file_get_contents($request->feature_image));
            }
            $meta = $page->meta;
            $meta['image'] = $imagePath;
            $page->slug = $request->slug ?? '';
            $page->meta = $meta;
            $page->save();
            return redirect()->back()->withErrors(['success' => ['Page information has been updated successfully']]);
        } catch (\Exception $e) {
            return redirect()->bavk()->withErrors(['error' => [$e->getMessage()]]);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {

        try {
            $page = WebsitePages::where('_id', $id)->first();
            if ($page == null) {
                abort('404');
            }
            $page->delete();
            return redirect()->back()->withErrors(['success' => ['Page has been deleted successfully']]);
        } catch (\Exception $e) {
            return redirect()->bavk()->withErrors(['error' => [$e->getMessage()]]);
        }
    }
}
