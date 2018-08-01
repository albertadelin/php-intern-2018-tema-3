<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);

    }


    public function index()
    {
        // $posts = Post::orderBy('created_at', 'asc')->get();
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {

        // dd(request()->all());
        // dd(request(['title','body']));

        // create a new post using the request data
        // $post = new Post;

        // $post->title = request('title');
        // $post->body = request('body');
        
        // // save it to the database
        // $post->save();

        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        auth()->user()->publish(
            new Post(request(['title', 'body']))

        );

        


        // and then reirect to the home page.
        return redirect('/');

    }
}
