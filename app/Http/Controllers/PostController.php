<?php

namespace App\Http\Controllers;

use App\models\Post;

class PostController extends Controller
{
    public function show(Post $post)
    {
        return view('posts.show',compact('post'));
    }
}
