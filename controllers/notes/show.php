<?php
    use core\App;
    use core\Database;
    $id = $_GET['id'];
    
    $db=App::resolve(Database::class);


    $note = $db->executeQuery("select Notes.note_id,Notes.content,Users.name, Users.email, Users.user_id from Notes Join Users ON Notes.user_id = Users.user_id where Notes.note_id = :id ", ['id' => $id])->fetch();
        //we can put here authorization that the notes only created by current user is only can be seen
        // we can create 2 error page:- 404(Note id does not exist) & 403(user is not allowed to see the note)  
    
    if(!$note){
        http_response_code(404);
    
        echo "Sorry Page Not Found";
        die();
    }
    
    if($note['user_id'] !== 1){
    
        //can declare 403 as const in different file as constant of a class and can use by Response::name
        http_response_code(403);
        echo "You are Not allowed to access this request";
        die();
    }
       
    loadView("notes/show.view.php",[
        'heading' => 'Note',
        'note' => $note
    ]);

 


    // require "views/note.view.php"
?>