<?php
/**
 * Auteur: Thomas Grossmann / Mounir Fiaux
 * Date: Mars 2020
 **/

require_once 'model/adminModel.php';

function trylogin($username, $password)
{
    $User = getUser($username);
    if ($username == $User['initials'] && password_verify($password, $User['password']))
    {
        $_SESSION['username'] = [$username, $User['firstname'], $User['lastname'], $User['admin']];
        require_once 'view/home.php';
    } else
    {
        errorLogin();
    }
}

function login()
{
    require_once 'view/login.php';
}

function disconnect()
{
    unset($_SESSION['username']);
    require_once 'view/login.php';
}

function errorLogin()
{
    require_once 'view/errorLogin.php';
}

function adminHomePage()
{
    require_once 'view/Admin/adminHome.php';
}

function adminCrew()
{
    $users = getUsers();
    require_once 'view/Admin/adminCrew.php';
}

function adminBases()
{
    $bases = getbases();
    require_once 'view/Admin/adminBases.php';
}

function adminNovas()
{
    $novas = getnovas();
    require_once 'view/Admin/adminNovas.php';
}

function adminDrugs()
{
    $drugs = getDrugs();
    require_once 'view/Admin/adminDrugs.php';
}

?>
