<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'content'=>'required',
            'post_id'=>'required',
        ]);

        $comment = new Comment();
        $comment->name = $request->name;
        $comment->content = $request->content;
        $comment->post_id = $request->post_id;
        $comment->save();

        return redirect('/posts/'.$comment->post_id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        return view('comments.edit', ['comment' => $comment]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        $request->validate([
            'name' => 'required',
            'content' => 'required',
        ]);

        $comment->content = $request->content;
        $comment->name = $request->name;
        $comment->save();

        return redirect()->route('posts.show', $comment->post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        $post_id = $comment->post_id;
        $comment->delete();
        return redirect('/posts/'.$post_id);
    }
}