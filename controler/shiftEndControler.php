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

function login()
{
    require_once 'view/login.php';

}
function trylogin($username, $password)
{
    $DefautPasswordHash = password_hash("usermdp", PASSWORD_DEFAULT);
    if ($username == "user" && password_verify($password, $DefautPasswordHash))
    {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        require_once 'view/home.php';
    } else
    {
        errorLogin();
    }
}

function errorLogin()
{
    require_once 'view/errorLogin.php';
}
?>
