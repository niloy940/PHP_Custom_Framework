<?php
/**
 * Created by PhpStorm.
 * User: niloy
 * Date: 12/11/18
 * Time: 8:06 AM
 */

namespace App\Controllers;

class PagesController
{
    public function home()
    {
        return view('index');
    }


    public function about()
    {
        $me = 'Niloy';
        return view('about', compact('me'));
    }


    public function contact()
    {
        return view('contact');
    }
}