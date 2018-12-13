<?php
/**
 * Created by PhpStorm.
 * User: niloy
 * Date: 12/13/18
 * Time: 11:59 AM
 */

namespace App\Models;

use App\Core\App;

class User
{
    private $user_id;
    private $user_name;
    private $user_email;

    /**
     * User constructor.
     * @param $user_name
     * @param $user_email
     */
    public function __construct($user_name, $user_email)
    {
        $this->user_name = $user_name;
        $this->user_email = $user_email;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->user_name;
    }

    /**
     * @return mixed
     */
    public function getUserEmail()
    {
        return $this->user_email;
    }

    /**
     * @param mixed $user_name
     */
    public function setUserName($user_name)
    {
        $this->user_name = $user_name;
    }

    /**
     * @param mixed $user_email
     */
    public function setUserEmail($user_email)
    {
        $this->user_email = $user_email;
    }


    public static function getUsers(){
        return App::get('database')->selectAll('users');
    }

    public function insertUsers(){
        App::get('database')->insert('users', [
            'name' => $this->user_name,
            'email' => $this->user_email
        ]);
    }

}