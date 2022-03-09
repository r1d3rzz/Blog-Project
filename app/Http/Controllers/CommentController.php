<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Blog $blog)
    {
        request()->validate([
            'comment' => ['required','min:3']
        ]);
        $blog->comments()->create([
            'body' => request('comment'),
            'user_id' => auth()->id()
        ]);

        return redirect("/blogs/$blog->slug");
    }
}
