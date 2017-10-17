<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostsController extends Controller
{
    public function __construct ()
    {

    }

    public function index ()
    {
        $bloqs = Post::all();

        return view('show',compact('bloqs'));
    }

//    public function show (Post $post)
//    {
//        // $post = Post::find($id);
//
//        return view('posts.show',compact('post'));
//    }

    public function create ()
    {

        return view('create');
    }

    public function store ()
    {
        $this->validate(request(),[
            'title' => 'required',
            'body'=>'required'
        ]);

        $post = new Post;
        $post->title = request('title');
        $post->body = request('body');
        $post->save();

        return redirect('/bloq/show');
        //dd(request('title'));
    }
}
