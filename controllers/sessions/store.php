<?php

use core\Validator;
use core\Database;
use core\App;
use Forms\LoginForm;
use core\Authenticator;


$errors = [];


$email = trim($_POST['email']);
$password = trim($_POST['password']);

$form = new LoginForm();

if($form->validateForm($email, $password)){
    $auth = new Authenticator();

    if($auth->authenticate($email, $password)){
        redirects('/');
    };

    // $form->addErrors('password', 'Invalid Email Id or Password'); 
};

return loadView("sessions/create.view.php",[ 
    'heading' => 'Log In',
    'errors' => $form->errors(),
]);


?>
