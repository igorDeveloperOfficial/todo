<?php

function dd($value = "Work"){
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
}

function redirect($url){
    header("Location: {$url} ");
    die();
}

function base_path($path)
{
    return BASE_PATH.$path;
}

function view($url,$data = [])
{
   extract($data);
   require base_path('views/'.$url.'.view.php');
}

function logout()
{
    $_SESSION = [];
    session_destroy();
    redirect('/');
}
function abort($code = \Core\Response::NOT_FOUND)
{
    view($code);
}