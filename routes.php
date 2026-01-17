<?php

    use core\Router;

    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
    $method = isset($_POST['_method']) ? $_POST['_method'] : $_SERVER['REQUEST_METHOD'];
    $routeObj = new Router();

    $routeObj->add('/','GET',basePath("controllers/index.php"));
    $routeObj->add('/about','GET',basePath("controllers/about.php"));
    $routeObj->add('/notes','GET',basePath("controllers/notes/index.php"),'auth');
    $routeObj->add('/contact','GET',basePath("controllers/contact.php"));
    $routeObj->add('/note','GET',basePath("controllers/notes/show.php",'auth'));
    $routeObj->add('/note/edit','GET',basePath("controllers/notes/edit.php"),'auth');
    $routeObj->add('/note','DELETE',basePath("controllers/notes/destroy.php"),'auth');
    $routeObj->add('/note','PATCH',basePath("controllers/notes/update.php"),'auth');

    $routeObj->add('/notes/create','GET',basePath("controllers/notes/create.php"),'auth');
    $routeObj->add('/notes/create','POST',basePath("controllers/notes/create.php"),'auth');

    $routeObj->add('/register','GET',basePath("controllers/register/create.php"),'guest');
    $routeObj->add('/register','POST',basePath("controllers/register/store.php"),'guest');

    $routeObj->add('/login','GET',basePath("controllers/sessions/create.php"),'guest');
    $routeObj->add('/login','POST',basePath("controllers/sessions/store.php"),'guest');

    $routeObj->add('/logout','GET',basePath("controllers/sessions/destroy.php"),'auth');
    
    // dd($routeObj);
    $routeObj->route($uri,$method);
?>