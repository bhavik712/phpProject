<?php
// dd($_SESSION['_flash']);

$errors = isset($_SESSION['_flash']) ? $_SESSION['_flash']['errors'] : [];

$email = isset($_SESSION['_flash']['email']) ? $_SESSION['_flash']['email'] : '';

// dd($errors);
loadview('sessions/create.view.php',[
    'heading' => 'Log In',
    'errors' => $errors,
    'email' => $email
]);
?>