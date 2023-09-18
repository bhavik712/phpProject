<?php

namespace core\middleware;

class Auth{
    public function handle(){
        if(!$_SESSION['logged_in']){
            header('location:/');
            exit();
        };
    }
}
?>