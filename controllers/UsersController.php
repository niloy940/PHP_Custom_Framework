<?php
/**
 * Created by PhpStorm.
 * User: niloy
 * Date: 12/11/18
 * Time: 9:32 AM
 */

class UsersController
{
    public function index()
    {
        $users = App::get('database')->selectAll('users');

        return view('users', compact('users'));
    }


    public function store()
    {
        App::get('database')->insert('users', [
            'name' => $_POST['name'],
        ]);

        return redirect('users');
    }
}