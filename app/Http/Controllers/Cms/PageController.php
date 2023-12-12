<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\WebsitePages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class PageController extends Controller
{
    /**
     * Display a list of website pages in ascending order of creation date.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        // Retrieve all records from the "website_pages" table, ordered by the "created_at" column in ascending order
        $pages = WebsitePages::orderBy('created_at', 'asc')->get();

        // Return the view named 'cms.pages.page.index' and pass the retrieved pages to the view
        return view('cms.pages.page.index', compact('pages'));
    }

    /**
     * Display the form to create a new website page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create(): View
    {
        // Return the view named 'cms.pages.page.create' to display the create page form
        return view('cms.pages.page.create');
    }

    /**
     * Store a newly created website page in the database.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        try {
            // Validate the incoming request data
            $request->validate([
                'slug' => 'required|min:3',
                'meta' => 'required|array',
                'meta.title' => 'nullable|string',
                'meta.keyword' => 'nullable|string',
                'meta.description' => 'nullable|string',
            ]);

            // Handle feature image upload
            $imagePath = '';
            if ($request->feature_image) {
                $imagePath = 'media/page-banner/' . $request->slug . '.png';
                Storage::disk('public')->put($imagePath, file_get_contents($request->feature_image));
            }

            // Prepare the meta data, including the image path
            $meta = $request->meta;
            $meta['image'] = $imagePath;

            // Create a new WebsitePages instance and save it to the database
            $page = new WebsitePages();
            $page->page = $request->slug;
            $page->slug = $request->slug;
            $page->dynamic = 1;
            $page->meta = $meta;
            $page->save();

            // Redirect to the page edit route with a success message
            return redirect()->route('CMS.page.edit', [$page->_id])->withErrors(['success' => ['New Page information has been created successfully']]);
        } catch (\Exception $e) {
            // Redirect back with an error message if an exception occurs
            return redirect()->back()->withErrors(['error' => [$e->getMessage()]]);
        }
    }

    /**
     * Display the details or edit page for a specific website page.
     *
     * @param mixed $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id): View
    {
        // Retrieve the WebsitePages instance with the given ID
        $page = WebsitePages::where('_id', $id)->first();

        // Check if the page is not found and abort with a 404 response if so
        if ($page == null) {
            abort('404');
        }

        // Return the view named 'cms.pages.page.edit' and pass the retrieved page to the view
        return view('cms.pages.page.edit', compact('page'));
    }

    /**
     * Display the edit page for a specific website page.
     *
     * @param  mixed  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id): View
    {
        // Retrieve the WebsitePages instance with the given ID
        $page = WebsitePages::where('_id', $id)->first();

        // Check if the page is not found and abort with a 404 response if so
        if ($page == null) {
            abort('404');
        }

        // Check if the 'image' key exists in the meta data and is not empty
        if (isset($page->meta['image']) && !empty($page->meta['image'])) {
            // If true, prepend the 'storage/' path and convert to an absolute URL
            $meta = $page->meta;
            $meta['image'] = asset('storage/' . $meta['image']);
            $page->meta = $meta;
        }

        // Return the view named 'cms.pages.page.edit' and pass the prepared page data to the view
        return view('cms.pages.page.edit', compact('page'));
    }

    /**
     * Update the information for a specific website page.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        try {
            // Retrieve the WebsitePages instance with the given ID
            $page = WebsitePages::where('_id', $id)->first();

            // Check if the page is not found and abort with a 404 response if so
            if ($page == null) {
                abort('404');
            }

            // Validate the incoming request data
            $request->validate([
                'slug' => $page->page == 'home' ? 'nullable' : 'required|min:3',
                'meta' => 'required|array',
                'meta.title' => 'nullable|string',
                'meta.keyword' => 'nullable|string',
                'meta.description' => 'nullable|string',
            ]);

            // Set the initial value for the image path
            $imagePath = $page->meta['image'] ?? '';

            // Handle feature image upload
            if ($request->feature_image) {
                $imagePath = 'media/page-banner/' . $page->page . '.png';
                Storage::disk('public')->put($imagePath, file_get_contents($request->feature_image));
            }

            // Update meta data with the new image path
            $meta = $page->meta;
            $meta['image'] = $imagePath;

            // Update the page information
            $page->slug = $request->slug ?? '';
            $page->meta = $meta;
            $page->save();

            // Redirect back with a success message
            return redirect()->back()->withErrors(['success' => ['Page information has been updated successfully']]);
        } catch (\Exception $e) {
            // Redirect back with an error message if an exception occurs
            return redirect()->back()->withErrors(['error' => [$e->getMessage()]]);
        }
    }

    /**
     * Delete a specific website page.
     *
     * @param  mixed  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        try {
            // Retrieve the WebsitePages instance with the given ID
            $page = WebsitePages::where('_id', $id)->first();

            // Check if the page is not found and abort with a 404 response if so
            if ($page == null) {
                abort('404');
            }

            // Delete the page
            $page->delete();

            // Redirect back with a success message
            return redirect()->back()->withErrors(['success' => ['Page has been deleted successfully']]);
        } catch (\Exception $e) {
            // Redirect back with an error message if an exception occurs
            return redirect()->back()->withErrors(['error' => [$e->getMessage()]]);
        }
    }

}
