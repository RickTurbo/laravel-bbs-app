<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        // dd([
        //     $request->title,
        //     $request->body,
        // ]);

        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string|max:512',
        ]);

        DB::transaction(function () use ($request) {
            $thread = $request->user()->threads()->create([
                'title' => $request->title,
            ]);

            $thread->comments()->create([
                'body' => $request->body,
                'user_id' => $request->user()->id
            ]);
        });

        return back();
    }
}
