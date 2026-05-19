<?php

namespace App\Http\Controllers\Admin;

use App\Models\PageContent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageContentController extends Controller
{
    public function index()
    {
        $contents = PageContent::all();
        return view('admin.page-content.index', compact('contents'));
    }

    public function update(Request $request)
    {
        foreach ($request->except('_token') as $key => $value) {
            if ($value !== null) {
                PageContent::updateOrCreate(['key' => $key], ['value' => $value]);
            }
        }

        return redirect()->back()->with('success', 'Page content updated successfully.');
    }
}
