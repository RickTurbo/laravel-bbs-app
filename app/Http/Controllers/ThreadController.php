<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Thread;
// use App\Models\Comment;
// use App\Models\User;

class ThreadController extends Controller
{
    public function index()
    {
        return view('threads.index');
    }

    public function create()
    {
        return view('threads.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string|max:512',
        ]);

        $thread =  DB::transaction(function () use ($request) {
            $thread = $request->user()->threads()->create([
                'title' => $request->title,
            ]);

            $thread->comments()->create([
                'body' => $request->body,
                'user_id' => $request->user()->id
            ]);

            return $thread;
        });

        return redirect()->route("threads.show", $thread);
    }

    public function show(Thread $thread)
    {
        $comments = $thread->comments()->with(['user'])->paginate(20);

        return view('threads.show', [
            'thread' => $thread,
            'comments' => $comments
        ]);
    }
}
