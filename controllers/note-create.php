<?php
    $heading = "Create Note";

    require "Validator.php";
    $config = require('config.php');
    $db = new Database($config,'root','admin@123',PDO::FETCH_ASSOC);

   

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $value = trim($_POST['content']);
        // dd($value);
        $errors = [];

        if(!Validator::validateData($value,1,20)){
            $errors['content'] = 'A Note who can have 20 chars is required';

        };

        if(empty($errors)){
            $db->executeQuery("insert into Notes (content, user_id) values (:content, :user_id)",[
                'content' => $value,
                'user_id' => 1
            ]);
            $value = '';

        }
        // dd($_POST);
   


    };
    
    // $config = require('config.php');
    // $db = new Database($config,'root','admin@123',PDO::FETCH_ASSOC);

    // $notes = $db->executeQuery("select * from Notes where user_id=1")->fetchAll();
   
 
    // dd($_SERVER['REQUEST_METHOD']);

    require "views/note-create.view.php"
?>