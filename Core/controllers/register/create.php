<?php

use Core\Database;
use Core\App;
use Core\Session;
$username = $_POST["username"];
$password = $_POST["password"];

$form = new \Core\Form();

if($form->formValidation($username, $password)){
    $db = App::resolve(Database::class);

    $user = $db->query("SELECT * FROM users WHERE name = :username",[
        ":username" => $username
    ])->find();

    if(!$user){
        $db->query("INSERT INTO users (name, password) VALUES (:username, :password)",[
            ":username" => $username,
            ":password" => password_hash($password, PASSWORD_DEFAULT)
        ]);
        Session::createSession('success','Your account has been created, now you can log in.');
        redirect('/login');


    }
    $form->error('user','Username already exists');


}
    Session::flashed('errors',$form->getErrors());



redirect('/register');


