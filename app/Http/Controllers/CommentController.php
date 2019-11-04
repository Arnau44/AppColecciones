<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

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
    return Comment::all()->where('user_id', auth()->id());
}

/**
 * @param \Illuminate\Htpp\Request $request
 * @return \Illuminate\Http\Comment
 */
public function store(Request $request)
{
    $comment = new Comment;
    $comment->content = $request->content;
    $comment->user_id = auth()->id();
    $comment->collection_id = 8;
    $comment->save();
    return $comment;
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
public function update(Request $request, $id)
{
    
    $comment = Comment::find($id);
    $comment->content = $request->content;
    $comment->save();
    return $comment;
}
/**
 * @param \App\Comment $comment
 * @return \Illuminate\Http\Comment
 */
public function destroy($id)
{
    $comment = Comment::find($id);
    $comment->delete();
}
}
