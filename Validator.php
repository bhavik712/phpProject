<?php
    class Validator{
        public static function validateData($value, $min=1, $max){
            return strlen($value) >= $min && strlen($value) <= $max; 
        }
    }
?>