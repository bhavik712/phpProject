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
    $errors['password'] = 'please provide valid password';

};

if(!empty($errors)){
    return loadView("sessions/create.view.php",[ 
        'heading' => 'Log In',
        'errors' => $errors,
    ]);
}

$db = APP::resolve(Database::class);

$result = $db->executeQuery("select * from Notesuser where email = :email",[
    'email' => $email
])->fetch();

if(!empty($result)){

    if(password_verify($password, $result['password'])){
        login($email);
        header('location: /');
        exit();
    };

    
};


$errors['password'] = 'Invalid Email Id or Password';

return loadView("sessions/create.view.php",[ 
    'heading' => 'Log In',
    'errors' => $errors,
]);


?>
