<?php
/**
 * Created by PhpStorm.
 * User: niloy
 * Date: 12/11/18
 * Time: 9:58 AM
 */

namespace App\Controllers;


use App\Models\Post;

class PostsController
{
    public function show()
    {
        $posts = Post::getPosts();

        return view('index', compact('posts'));
    }
}