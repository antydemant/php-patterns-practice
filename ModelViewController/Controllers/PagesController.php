<?php

use Models\PostModel;

class PagesController
{

    public function home()
    {
        $hello = PostModel::hello();
        $first_name = 'Jon';
        $last_name = 'Snow';

        View::render('pages/home.tpl', compact('first_name', 'last_name', 'hello'));
    }

    public function posts()
    {
        $posts = PostModel::all();

        View::render('pages/posts.tpl', compact('posts'));
    }

    public function post()
    {
        $post = PostModel::find($_GET['id']);

        View::render('pages/post.tpl', compact('post'));
    }

    public function error()
    {
        View::render('error.tpl');
    }
}

?>
