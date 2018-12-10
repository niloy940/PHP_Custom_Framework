<?php
/**
 * Created by PhpStorm.
 * User: niloy
 * Date: 12/4/18
 * Time: 8:17 AM
 */


$app['database']->insert('users', [
    'name' => $_POST['name'],
]);

header('Location: /contact');