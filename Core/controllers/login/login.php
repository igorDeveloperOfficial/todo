<?php

use Core\Database;

$username = $_POST['username'];
$password = $_POST['password'];
$form = new \Core\Form();
if($form->formValidation($username, $password)){
    $db = \Core\App::resolve(Database::class);
    $user = $db->query("SELECT * FROM users WHERE name = :username", ['username' => $username])->find();

    if($user){
        if(password_verify($password, $user['password'])){


            \Core\Session::createSession('logged',$username);
            redirect('/');
        }
    }
}

\Core\Session::flashed('errors',"Invalid username or password");
redirect('/login');