<?php
namespace App\Middleware;

class AuthMiddleWare{
    public function handle(){
        session_start();


        if(!isset($_SESSION['id'])){
            header('Location: /');
            exit;   

        }
    }
}
