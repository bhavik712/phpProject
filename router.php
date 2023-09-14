<?php
    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
   
    // router using if-else

    // if($uri === '/'){
    //     require "controllers/index.php";
    // }else if($uri === '/about'){
    //     require "controllers/about.php";
    // }else if($uri === '/contact'){
    //     require "controllers/contact.php";
    // }

    //router using mapping array (associative array)

    //2 more simple things can be added to look it more good 
    //create a function for all if-else block & abort function with 404 file 
    $routes = [
        '/' => "controllers/index.php",
        '/about' => "controllers/about.php",
        '/notes' => "controllers/notes.php",
        '/contact' => "controllers/contact.php",
        '/note' =>"controllers/note.php",
        '/notes/create' => "controllers/note-create.php"
    ];

    if(array_key_exists($uri, $routes)){
        require $routes[$uri];
    }else{
        http_response_code(404);

        echo "Sorry Page Not Found.";
        die();
    }
?>