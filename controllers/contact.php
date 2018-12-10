<?php

$users = $app['database']->selectAll('users');

require 'views/contact.view.php';