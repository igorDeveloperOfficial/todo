<?php

namespace Core;
class Form
{
    protected $errors = [];

     public function formValidation($username,$password): bool
     {
        if(!FormValidation::string($username)){
            $this->errors['username'] = "Username required";

        }
        if(!FormValidation::string($password)){
            $this->errors['password'] = "Password required";
        }


        return (bool) empty($this->errors);
    }

    function getErrors()
    {
        return $this->errors;
    }

    function error($key,$value)
    {
        $this->errors[$key] = $value;
    }
}
