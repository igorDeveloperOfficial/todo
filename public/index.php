<?php

use Core\Router;

const BASE_PATH = __DIR__.'/../';
require BASE_PATH."Core/function.php";
require base_path('vendor/autoload.php');

$router = new Router();
require base_path('routes.php');

$url = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->load($url , $method);

