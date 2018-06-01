<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Http\Requests\PostRequest;

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
         * viewの中のpostsフォルダのshow.~.phpにデータを渡す。
         * $postを’post’とういう変数で渡す。
         */
        return view('posts.show')->with('post', $post);
    }

    public function create() {
        return view('posts.create');
    }

    public function store(PostRequest $request) {
        // /**
        //  * エラー判定
        //  * エラーがあれば自動で前の画面に戻す。
        //  * その際エラーログを持っていく。
        //  */
        // $this->validate($request, [
        //     'title' => 'required | min:3',
        //     'body' => 'required'
        // ]);
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return redirect('/');
    }

    public function edit(Post $post) {
        return view('posts.edit')->with('post', $post);
    }

    public function update(PostRequest $request, Post $post) {
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return redirect('/');
    }

    public function destroy(Post $post) {
        $post->delete();
        return redirect('/');
    }
}
