<?php

use Core\Database;
use Core\App;
use Core\Session;
$heading = "Home Page";
$user = \Core\Session::getSession('logged');


view('index', ['heading' => $heading,
    'user' => $user]);