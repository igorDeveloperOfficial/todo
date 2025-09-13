<?php

use Core\Database;
use Core\Tasks;
$db = \Core\App::resolve(Database::class);
$user = $db->query("SELECT * FROM users where name = :user_name",[
    "user_name" => \Core\Session::getSession('logged')
])->find();



$task = $_POST["task"];
$_finish_date = $_POST["finish_date"];
$Task = new Tasks($user);
if($Task->addTask($task, $_finish_date)){
    redirect('/');
}



\Core\Session::flashed('task', 'Task field is required.');
redirect('/');