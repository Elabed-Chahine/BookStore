<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class CommentController extends Controller
{
    //
    public function store(Post $post){
       request()->validate([
           'body' => 'required'
       ]);

       $post->comments()->create([
           'user_id'=> request()->user()->id,
           'body'=>request('body'),
           'post_id' =>$post->id

       ]);
       return back()
       ->with('success',"Comment successfully created");
       
    }

}
