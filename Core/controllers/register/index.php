<?php
$heading = "Create Account";

view('register/index', [
    'heading' => $heading,
    'errors' => \Core\Session::getSession('errors')
]);