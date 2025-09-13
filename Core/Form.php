<?php

namespace Core;
class Form
{
    protected $errors = [];

     public function formValidation($task): bool
     {
        if(!FormValidation::string($task)){
            $this->errors['task'] = "Task field is required";

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
