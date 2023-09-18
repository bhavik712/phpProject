<?php

function applyNavStyle($value){
    if($_SERVER['REQUEST_URI'] === $value){
        echo "bg-gray-900 text-white";
    }else{
        echo "text-gray-300 hover:bg-gray-700 hover:text-white";

    }
}

function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function basePath($path){
    return BASE_PATH.$path; 
};

function loadView($path, $attributes){
    extract($attributes);
    require basePath("views/".$path);
}

function login($email){
    $_SESSION['logged_in'] = true;

    $_SESSION['user'] = [
        'email' => $email
    ];

    session_regenerate_id(true);
}

function logout(){
    $_SESSION = [];
    session_destroy();

    $params = session_get_cookie_params();

    setcookie('PHPSESSID','',time()-3600, $params['path'],$params['domain'],$params['secure'], $params['httponly']);
}
?>