<?php
    
    use core\Database;
    use core\App;
    $id = $_GET['id'];
    $db = App::resolve(Database::class);


    $result = $db->executeQuery("select user_id from Notes where note_id = :id",[ 'id' => $_POST['id'] ])->fetch();

    if($result['user_id'] === 1){
        $db->executeQuery("delete from Notes where note_id = :id",[
            'id' => $_GET['id']
        ]);
        header('location: /notes');
        exit();
    }else{
        echo "Sorry You can't delete this Note";
    }

?>