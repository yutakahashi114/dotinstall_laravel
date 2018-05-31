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
        /**
         * サーバーからデータを配列で取ってくる
         */
        $posts = Post::latest()->get();
        // $posts = [];
        // dd($posts->toArray()); // dump die
        // return view('posts.index', ['posts' => $posts]);
        return view('posts.index')->with('posts' , $posts);
    }

    // public function show($id) {
    public function show(Post $post) {
        // $post = Post::findOrFail($id);
        /**
         * viewの中のpostsフォルダのindex.~.phpにデータを渡す。
         * $postsを’posts’とういう変数で渡す。
         */
        return view('posts.show')->with('post', $post);
    }

    public function create() {
        return view('posts.create');
    }
}
