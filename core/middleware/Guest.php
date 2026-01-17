<?php

namespace core\middleware;

class Guest{
    public function handle(){
        if($_SESSION['logged_in']){
            header('location:/');
            exit();
        };
    }
}
?>