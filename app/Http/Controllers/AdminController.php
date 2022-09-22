<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.posts.index', [
            'posts' => Post::latest()->paginate(50)
        ]);
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'title' => 'required',
            'thumbnail' => 'required|image',
            'path' => ['required', Rule::unique('posts', 'path')],
            'excerpt' => 'required',
            'body' => 'required',
            'Category_id' => 'required',
            'Price'=> 'required'
        ]);

        $attributes['user_id'] = auth()->id();
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');

        Post::create($attributes);

        return redirect('/');
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', ['post' => $post]);
    }

    public function updat(Post $post)
    {
        
        $attributes = request()->validate([
            'path'=>'required|max:255',
            'Category_id'=> ['required',Rule::exists('categories','id')],
            'title'=>'required|max:255',
            'excerpt'=>'required',
            'body'=>'required',
            'thumbnail' => 'image',
            'Price'=>'required'

        ]);

        
        if (isset($attributes['thumbnail'])) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }

        $post->update($attributes);
        return back()->with('success', 'Post Updated!');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return back()->with('success', 'Post Deleted!');
    }
}