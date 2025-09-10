<?php

use Core\Container;
use Core\Database;
use Core\App;
$container = new Container();

$container->bind(Core\Database::class,function(){
    $config = require base_path('Core/config.php');
    return new Database($config['database']);
});

\Core\App::bind($container);