<?php
    // $heading = "Notes";
    use core\Database;
    
    $config = require basePath('config.php');
    $db = new Database($config,'root','admin@123',PDO::FETCH_ASSOC);

    $notes = $db->executeQuery("select * from Notes where user_id=1")->fetchAll();
   



    // require "views/notes.view.php"

    loadView("notes/index.view.php",[
        'heading' => 'Notes',
        'notes' => $notes
    ]);
?>