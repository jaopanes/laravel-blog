<?php

namespace App\Http\Controllers;

use App\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view("site.blog.index", [
            "posts" => $posts
        ]);
    }

    public function read($id, $url)
    {
        $post = Post::find($id);
        $postUrl = str_replace(' ', '-', strtolower($post->title));

        if($url != $postUrl || !$id || !$url) {
            return redirect()->route('site.error');
        }

        $authorPost = Post::find($id)->user;

        return view("site.blog.read", [
            "post" => $post,
            "authorPost" => $authorPost
        ]);
    }
}
