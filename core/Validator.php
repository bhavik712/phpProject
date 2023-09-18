<?php
    namespace core;
    class Validator{
        
        public static function validateData($value, $min=1, $max){
            return strlen($value) >= $min && strlen($value) <= $max; 
        }

        public static function validateEmail($email){
            return filter_var($email, FILTER_VALIDATE_EMAIL);
        }
    }
?>