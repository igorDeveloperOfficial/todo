<?php

$router->get('/','index')->only('auth');
$router->get('/login','login/index');
$router->get('/register','register/index');