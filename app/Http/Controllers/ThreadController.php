<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thread;

class ThreadController extends Controller
{

    public function index()
    {
        $threads = Thread::all();

        return view('welcome')
            ->with('threads', $threads);
    }

    public function store(Request $request)
    {
        Thread::create([
            'thread' => $request['content']
        ]);

        return response()->json(['message' => 'Thread Saved']);
    }

}
