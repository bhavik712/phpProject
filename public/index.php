<?php

    const BASE_PATH = __DIR__.'/../';

    // var_dump(BASE_PATH);

    require BASE_PATH. "core/functions.php";
    spl_autoload_register(function ($class){

        $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
        require basePath("{$class}.php");
    });

    require basePath("core/dbContainer.php");

    require basePath("routes.php");

  
    

   
    





    

    //  example of class 
    
    

    // $config = require('config.php');

    // $db = new Database($config,'root','admin@123',PDO::FETCH_ASSOC);
    // $id = 2;
    // $result1 = $db->executeQuery("select * from posts")->fetchAll();
    // $result2 = $db->executeQuery("select author from posts where id= :id", [ 'id' => $id])->fetch();

    // // echo $result['title'];

    // foreach($result1 as $record){
    //     // echo $record['id']."|".$record['title']."|".$record['author']."|\n";
    //     // echo "<br/>";

    //     echo "<li>". $record['title']."</li>";
    // }
    
    // echo $result2['author'];
    

    
?>