<?php

$router->get('/','index')->only('auth');
$router->get('/login','login/index')->only('guest');
$router->get('/register','register/index')->only('guest');

$router->post('/register','register/create')->only('guest');
$router->post('/login','login/login')->only('guest');