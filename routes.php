<?php

$router->get('/','index')->only('auth');
$router->get('/login','login/index')->only('guest');
$router->get('/register','register/index')->only('guest');
$router->get('/logout','login/logout')->only('auth');
$router->post('/register','register/create')->only('guest');
$router->post('/login','login/login')->only('guest');


$router->post('/create','todo/create')->only('auth');

$router->post('/update','todo/finish');
$router->get('/delete','todo/delete');
$router->put('/update','todo/update');