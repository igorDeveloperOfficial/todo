<?php

namespace Core\Middleware;
use Exception;

class Middleware
{
    const MAP = [
        'guest'=>Guest::class,
        'auth'=>Auth::class,
    ];

    static function resolve($key){
        if(!$key){
            return false;
        }

        $middleware = self::MAP[$key] ?? false;

        if(!$middleware){
            throw new \Exception("Middleware not found");
        }

        (new $middleware())->handle();

    }

}