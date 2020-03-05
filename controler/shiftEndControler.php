<?php
/**
 * Auteur: Thomas Grossmann / Mounir Fiaux
 * Date: Mars 2020
 **/

require_once 'model/shiftEndModel.php';
require_once 'model/loginModel.php';

function shiftEndHomePage()
{
    require_once 'view/viewsShiftEnd/shiftEndHome.php';
}

function disconnect()
{
    unset($_SESSION['username']);
    require_once 'view/login.php';
}

function login()
{
    require_once 'view/login.php';

}
function trylogin($username, $password, $base)
{
    $User = getUser($username, $password);
    if ($username == $User['initials'] && password_verify($password, $User['password']) && $base == true)
    {
        $_SESSION['username'] = [$username, $password, $base];
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
