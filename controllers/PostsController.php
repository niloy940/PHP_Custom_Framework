<?php
/**
 * Created by PhpStorm.
 * User: niloy
 * Date: 12/11/18
 * Time: 9:58 AM
 */

class PostsController
{
    public function show()
    {
        $posts = App::get('database')->selectAll('posts');

        return view('index', compact('posts'));
    }
}