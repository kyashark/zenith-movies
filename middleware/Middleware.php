<?php

require_once '../core/Session.php';

class Middleware{

    public static function requireAdmin() {
        Session::Start();
        $is_admin = (int) Session::get('is_admin');

        if (!$is_admin) { // If user is not an admin
            header('Location: ' . BASE_URL . '/user/home'); // Redirect to normal user home
            exit;
        }
    }

    public static function redirectIfLoggedIn(){
        if(Session::get('user_id')){
            $is_admin=(int) Session::get('is_admin');
            $redirectMap = [
                1 => '/user/admin',
                0 => '/user/home',
            ];

            if(array_key_exists($is_admin,$redirectMap)){
                header('Location: ' . BASE_URL . $redirectMap[$is_admin]);
            }else{
                Session::destroy();
                header('Location: ' . BASE_URL . '/user/index');
            }
            exit;
        }

    }
}