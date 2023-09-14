<?php

    use core\Router;

    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
    $method = isset($_POST['_method']) ? $_POST['_method'] : $_SERVER['REQUEST_METHOD'];
    $routeObj = new Router();

    $routeObj->add('/','GET',basePath("controllers/index.php"));
    $routeObj->add('/about','GET',basePath("controllers/about.php"));
    $routeObj->add('/notes','GET',basePath("controllers/notes/index.php"));
    $routeObj->add('/contact','GET',basePath("controllers/contact.php"));
    $routeObj->add('/note','GET',basePath("controllers/notes/show.php"));
    $routeObj->add('/note','DELETE',basePath("controllers/notes/show.php"));
    $routeObj->add('/notes/create','GET',basePath("controllers/notes/create.php"));
    $routeObj->add('/notes/create','POST',basePath("controllers/notes/create.php"));

    
    
    $routeObj->route($uri,$method);
?>