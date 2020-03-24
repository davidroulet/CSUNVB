<?php
/**
 * Auteur: Thomas Grossmann / Mounir Fiaux
 * Date: Mars 2020
 **/

require_once 'model/shiftEndModel.php';
require_once 'model/loginModel.php';

function shiftEndHomePage()
{
    $Titles = getSectionsTitles();
    $CentralLines = getGuardLines(1);
    $CommunicationLines = getGuardLines(2);
    $TelecomLines = getGuardLines(3);

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
function trylogin($username, $password)
{
    $i = 1;
    $Users = getUsers($username, $password);
    foreach ($Users as $user)
    {
        if ($username == $user['initials'] && password_verify($password, $user['password']))
        {
            $_SESSION['username'] = [$username, $user['firstname'], $user['lastname']];
            $i = 2;
            require_once 'view/home.php';
        }
    }
    if ($i == 1)
    {
        errorLogin();
    }
}

function errorLogin()
{
    require_once 'view/errorLogin.php';
}

function listShiftEnd()
{
    $liste = getRemises();
    require_once 'view/viewsShiftEnd/ListShiftEnd.php';
}
?>
