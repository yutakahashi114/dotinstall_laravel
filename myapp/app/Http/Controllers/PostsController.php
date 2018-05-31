<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
class PostsController extends Controller
{
    //
    public function index() {
        // $posts = \App\Post::all();
        // $posts = Post::all();
        // $posts = Post::orderBy('create_at', 'desc')->get();
        $posts = Post::latest()->get();
        // dd($posts->toArray()); // dump die
        return view('posts.index');
    }
}
