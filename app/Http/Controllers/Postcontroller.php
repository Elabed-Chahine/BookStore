<?php

namespace App\Http\Controllers;

use App\models\Post;
use App\models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
class Postcontroller extends Controller
{
    //


    public function index()
    {

        return view('welcome', [
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(6),

        ]);
    }


    public function show(Post $post)
    {
        return view('post', [
            'post' => $post
        ]);
    }
    public function create(){
       
        return view('posts.create');
    }


    public function store(){
       $path= request()->file('thumbnail')->store('thumbnails');
      
        $attributes = request()->validate([
            'path'=>'required|max:255|unique:posts,username',
            'Category_id'=> ['required',Rule::exists('categories','id')],
            'title'=>'required|max:255',
            'excerpt'=>'required|max:255',
            'body'=>'required',
            'thumbnail' => 'required|image'
        ]);
        $attributes['user_id']= auth()->id();
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        Post::create($attributes);
        return redirect('/')->with('success', 'New Book Added');
        

    }
}
