<?php

namespace Core;

class App
{

    static public $controller;

    static public function bind($controller){
        self::$controller = $controller;
}

static  function resolve($key){

        return self::$controller->handle($key);
}

}