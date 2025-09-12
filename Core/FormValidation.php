<?php

namespace Core;

class FormValidation
{
    static public function email($email){
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    static public function string($text,$min = 1, $max = 255){
        $text = trim($text);
        return strlen($text) >= $min && strlen($text) <= $max;
    }


}