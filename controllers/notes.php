<?php
    $heading = "Notes";
    
    $config = require('config.php');
    $db = new Database($config,'root','admin@123',PDO::FETCH_ASSOC);

    $notes = $db->executeQuery("select * from Notes where user_id=1")->fetchAll();
   
 


    require "views/notes.view.php"
?>