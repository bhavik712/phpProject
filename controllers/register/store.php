<?php

use core\Validator;
use core\Database;
use core\App;

$errors = [];


$email = trim($_POST['email']);
$password = trim($_POST['password']);

if(!Validator::validateEmail($email)){
    $errors['email'] = 'Please Enter Valid Email';

};

if(!Validator::validateData($password,8,12)){
    $errors['password'] = 'Password should be minimum 8 digit and maximum 12 Digits.';

};

if(!empty($errors)){
    return loadView("register/create.view.php",[ 
        'heading' => 'register',
        'errors' => $errors,
    ]);
}

$db = APP::resolve(Database::class);

$result = $db->executeQuery("select email from Notesuser where email = :email",[
    'email' => $email
])->fetchAll();

if(!empty($result)){
    $errors['email'] = 'Email is already used by another user';
    return loadView("register/create.view.php",[ 
        'heading' => 'register',
        'errors' => $errors,
    ]);
}


$db->executeQuery('insert into Notesuser (email, password) values (:email, :password)', [
    'email'=> $email,
    'password'=> $password
]);

// session_start();
$_SESSION['logged_in'] = true;

// dd($_SESSION);

header('location: /');
exit();




?>