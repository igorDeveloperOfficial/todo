<?php
use Core\Session;

$heading = "Login page";
$success = \Core\Session::getSession("success");
$errors = \Core\Session::getSession("errors");


view("login/index", [
    'heading' => $heading,
    'success' => $success,
    'errors' => $errors]);