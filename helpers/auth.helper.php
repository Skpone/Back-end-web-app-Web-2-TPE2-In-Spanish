<?php

class AuthHelper
{

    function __construct()
    {
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }
    }

    public function login($user)
    {
        $_SESSION['USER_ID'] = $user->id;
        $_SESSION['USER_EMAIL'] = $user->email;
        $_SESSION['USER_ADMIN'] = $user->admin;
    }
    //si esta logueado, entonces proceda
    public function checkLoggedIn()
    {
        if (empty($_SESSION['USER_ID'])) {
            header("Location: " . LOGIN);
            die();
        }
    }
    //si no esta logueado, entonces proceda
    public function checkLoggedOut()
    {
        if (!empty($_SESSION['USER_ID'])) {
            header("Location: " . BASE_URL);
            die();
        }
    }
    
    public function checkAdminLoggedIn()
    {   //si no es admin entonces se redirecciona
        if ($_SESSION['USER_ADMIN'] == 0) {
            header("Location: " . BASE_URL);
            die();
        }
    }

    public function obtainAdminState()
    {
        $admin = 1;
        if ($_SESSION['USER_ADMIN'] == 0) {
            $admin = null;
        }
        return $admin;
    }

    public function obtainCurrentUser()
    {
        $user = 1;
        if (empty($_SESSION['USER_ID'])) {
            $user = null;
        }
        return $user;
    }

    function logout()
    {
        session_destroy();
        header("Location: " . BASE_URL);
    }
}
