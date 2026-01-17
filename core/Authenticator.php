<?php
namespace core;
use core\Database;
use core\App;


class Authenticator{

    public function authenticate($email, $password){
        $db = APP::resolve(Database::class);

        $user = $db->executeQuery("select * from Notesuser where email = :email",[
            'email' => $email
        ])->fetch();

        if(password_verify($password, $user['password'])){
            $this->login($email);

            return true;
        };

        return false;
    }

    public function login($email){
        $_SESSION['logged_in'] = true;
    
        $_SESSION['user'] = [
            'email' => $email
        ];
    
        session_regenerate_id(true);
    }
    
    public function logout(){
        $_SESSION = [];
        session_destroy();
    
        $params = session_get_cookie_params();
    
        setcookie('PHPSESSID','',time()-3600, $params['path'],$params['domain'],$params['secure'], $params['httponly']);
    }

}
?>