<?php

namespace Core\Middleware;

use Core\Session;

class Auth
{
    public function handle(){
        if(!Session::hasSession('logged')){
            redirect('/login');
        }
    }
}