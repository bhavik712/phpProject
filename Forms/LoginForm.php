<?php

namespace Forms;

use core\Validator;

class LoginForm{
    public $errors = [];

    public function validateForm($email, $password){
        if(!Validator::validateEmail($email)){
            $this->errors['email'] = 'Please Enter Valid Email';
        
        };
        
        if(!Validator::validateData($password,8,12)){
            $this->errors['password'] = 'please provide valid password';
        
        };

        return empty($this->errors);


    }

    public function errors(){
        return $this->errors;
    }

    public function addErrors($field, $message){
        $this->errors[$field] = $message;
    }
    
    
}


?>