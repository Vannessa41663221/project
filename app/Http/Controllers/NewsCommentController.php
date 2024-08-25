<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\NewsComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, News $news)
    {
        $request->validate([
            'comment' => 'required|string|max:500',
        ]);

        NewsComment::create([
            'comment' => $request->comment,
            'news_id' => $news->id,
            'student_id' => Auth::guard('student')->id(),
        ]);

        return redirect()->back()->with('success', 'Comment added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(NewsComment $newsComment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NewsComment $newsComment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NewsComment $newsComment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $nc = NewsComment::find($id);
        if (Auth::guard('student')->id() === $nc->student_id) {
            $nc->delete();
            return redirect()->back()->with('success', 'Comment deleted successfully!');
        }

        return redirect()->back()->with('error', 'You are not authorized to delete this comment.');
    }
}
