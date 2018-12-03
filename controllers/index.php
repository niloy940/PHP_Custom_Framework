<?php

$posts = $app['database']->selectAll('posts');

require 'views/index.view.php';