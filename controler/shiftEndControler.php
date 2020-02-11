<?php
/**
 * Auteur: Thomas Grossmann / Mounir Fiaux
 * Date: Février 2020
 **/

require_once 'model/shiftEndModel.php';

function shiftEndHomePage()
{
    require_once 'view/viewsShiftEnd/shiftEndHome.php';
}

function disconnect()
{
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    require_once 'view/home.php';
}

function connect($username, $password)
{
    if ($username == "user" && $password == "usermdp")
    {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        require_once 'view/home.php';
    } else
    {
        login();
    }
}

function login()
{
    require_once 'view/login.php';
}

function errorLogin()
{
    require_once 'view/errorLogin.php';
}
?>
