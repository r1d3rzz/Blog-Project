<?php

namespace App\Http\Controllers;

use App\Mail\SubscriberMail;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

        $commentWriter = auth()->user();
        $subscribers = $blog->subscribers->filter(fn ($subscriber) =>$subscriber->id !== auth()->id());
        $subscribers->each(function ($subscriber) use ($blog, $commentWriter) {
            Mail::to($subscriber->email)->queue(new SubscriberMail($blog, $commentWriter, $subscriber));
        });

        return redirect("/blogs/$blog->slug");
    }
}
