<?php
/**
 * Created by PhpStorm.
 * User: niloy
 * Date: 12/13/18
 * Time: 8:30 AM
 */

namespace App\Models;

use App\Core\App;

class Post
{
    private $post_id;
    private $post_title;
    private $post_author;
    private $post_content;

    /**
     * Post constructor.
     * @param $post_title
     * @param $post_author
     * @param $post_content
     */
    public function __construct($post_title, $post_author, $post_content)
    {
        $this->post_title = $post_title;
        $this->post_author = $post_author;
        $this->post_content = $post_content;
    }

    /**
     * @return mixed
     */
    public function getPostId()
    {
        return $this->post_id;
    }

    /**
     * @return mixed
     */
    public function getPostTitle()
    {
        return $this->post_title;
    }

    /**
     * @return mixed
     */
    public function getPostAuthor()
    {
        return $this->post_author;
    }

    /**
     * @return mixed
     */
    public function getPostContent()
    {
        return $this->post_content;
    }

    /**
     * @param mixed $post_title
     */
    public function setPostTitle($post_title)
    {
        $this->post_title = $post_title;
    }

    /**
     * @param mixed $post_content
     */
    public function setPostContent($post_content)
    {
        $this->post_content = $post_content;
    }

    public static function getPosts(){
        return App::get('database')->selectAll('posts');
    }


}