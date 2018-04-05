<?php

class UserController
{

    public function home()
    {
        $first_name = 'Jon';
        $last_name = 'Snow';

        View::render('pages/home.tpl', compact('first_name', 'last_name'));
    }

    public function error()
    {
        View::render('pages/error.tpl');
    }
}

?>
