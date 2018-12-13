<?php
/**
 * Created by PhpStorm.
 * User: niloy
 * Date: 12/11/18
 * Time: 2:19 AM
 */

namespace App\Core;

class App
{
    protected static $registry = [];

    public static function bind($key, $value){
        static::$registry[$key] = $value;
    }

    public static function get($key){
        if (! array_key_exists($key, static::$registry)){
            throw new Exception("No {$key} is bound in the container");
        }

        return static::$registry[$key];
    }
}