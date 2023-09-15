<?php
    // $heading = "Notes";
    use core\Database;
    use core\App;
  
    $db=App::resolve(Database::class);

    $notes = $db->executeQuery("select * from Notes where user_id=1")->fetchAll();
   



    // require "views/notes.view.php"

    loadView("notes/index.view.php",[
        'heading' => 'Notes',
        'notes' => $notes
    ]);
?>