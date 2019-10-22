<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * 
     * 
     * @return \Illuminate\Http\Comment
    */

public function __construct()
{
    $this->middleware('auth')->except('index');
}

public function index()
{
    //
}

/**
 * @return \Illuminate\Http\Comment
 */
public function create()
{
    //
}

/**
 * @param \Illuminate\Htpp\Request $request
 * @return \Illuminate\Http\Comment
 */
public function store(Request $request)
{
    $comment = new Comment;
    $comment->user_id = Auth::user()->id;
    $response->content = $request->content;
    $response->collection_id = $request->collection_id;
    $response->save();
    return redirect()->back();
}

/**
 * @param \App\Comment $comment
 * @return \Illuminate\Http\Response
 */
public function show(Comment $comment)
{
    //
}

/**
 * @param \App\Comment $comment
 * @return \Illuminate\Http\Comment
 */
public function edit(Comment $comment)
{
    //
}

/**
 * @param Illuminate\Http\Request $request
 * @param \App\Comment $comment
 * @return \Illuminate\Http\Response
 */
public function update(Request $request, Comment $comment)
{
    $response->update($request->all());
    return redirect()->back();
}
/**
 * @param \App\Comment $comment
 * @return \Illuminate\Http\Comment
 */
public function destroy(Comment $comment)
{
    $comment->delete();
    return redirect()->back();
}
}
