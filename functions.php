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

?>