<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            'blogs'=>Blog::latest()->get()
        ]);
    }

    public function create()
    {
        return view('admin.create');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();

        return back()->with('delete', $blog->title." is Delete Successfully");
    }
}
