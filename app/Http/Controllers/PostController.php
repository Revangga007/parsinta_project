<?php

namespace App\Http\Controllers;

use App\models\Post;

class PostController extends Controller
{
    public function show($slug)
    {
        $post = Post::where('slug',$slug)->firstOrFail();
        return view('posts.show',compact('post'));
    }
}
