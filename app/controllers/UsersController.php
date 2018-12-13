<?php
/**
 * Created by PhpStorm.
 * User: niloy
 * Date: 12/11/18
 * Time: 9:32 AM
 */

namespace App\Controllers;

use App\Models\User;

class UsersController
{
    public function index()
    {
        $users = User::getUsers();

        return view('users', compact('users'));
    }


    public function store()
    {
        /*App::get('database')->insert('users', [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
        ]);*/

        $name = $_POST['name'];
        $email = $_POST['email'];

        $user = new User($name, $email);

        $user->insertUsers();

        return redirect('users');
    }
}