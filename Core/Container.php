<?php

namespace Core;

class Container
{
    protected $bindings = [];

    public function bind($key, $resolve){
        $this->bindings[$key] = $resolve;
    }

    public function handle($key){

        $resolver = $this->bindings[$key];

        return call_user_func($resolver);
    }
}