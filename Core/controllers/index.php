<?php

use Core\Database;
use Core\App;
use Core\Session;
use Core\Tasks;

$heading = "Home page";
$username = \Core\Session::getSession('logged');
$db = \Core\App::resolve(Database::class);
$user = $db->query("SELECT * FROM users where name = :user_name",[
    "user_name" => \Core\Session::getSession('logged')
])->find();

$task = new Tasks($user);
$tasks = $task->getTasks();

view('index', ['heading' => $heading,
    'user' => $user
, 'tasks' => $tasks,
    'username' => $username]);