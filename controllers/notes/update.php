<?php


use core\Database;
use core\Validator;
use core\App;

$db = App::resolve(Database::class);

$note = $db->executeQuery("select * from Notes where note_id = :id",[
    'id' => $_POST['id']
])->fetch();

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
};



$errors = [];

$value = trim($_POST['content']);
    // dd($value);
    
if(!Validator::validateData($value,1,20)){
    $errors['content'] = 'A Note who can have 20 chars is required';
};

if(!empty($errors)){
    return    loadView("notes/edit.view.php",[ 
        'heading' => 'Edit Note',
        'note'=>$note,
        'errors'=>$errors
    ]);
   

};

$db->executeQuery("update Notes set content = :content where note_id = :id", [
    'content' => $value,
    'id' => $_POST['id']
]);
header('location: /notes');
exit();
$value = '';


    // dd($_POST);
?>
 