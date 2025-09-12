<?php

namespace Core;

class Session
{
    static function hasSession($key){
        return  $_SESSION['flashed'][$key] ?? $_SESSION[$key] ?? false;

    }
    static function createSession($key,$value){
        $_SESSION[$key] = $value;
    }
    static function flashed($key,$value)
    {
        $_SESSION['flashed'][$key] = $value;
    }

    static function getSession($key){
        return $_SESSION['flashed'][$key] ?? $_SESSION[$key] ?? null;
    }

    static function destroySession(){
        logout();
    }



    static function unflashed(){
        unset($_SESSION['flashed']);
        unset($_SESSION['success']);
    }
}