<?php
/**
 * Auteur: Thomas Grossmann / Mounir Fiaux
 * Date: Février 2020
 **/

require_once 'model/shiftEndModel.php';

function shiftEndHomePage()
{
    require_once 'view/shiftEndHome.php';
}

function shiftEndDeconnect()
{
    unset($_SESSION['username']);
    unset($_SESSION['password']);
}

function connect($username, $password)
{
    if (isset($_POST['username']) && isset($_POST['password']))
    {
        $username = $_SESSION['username'];
        $password = $_SESSION['password'];
        shiftEndHomePage();
    } else
    {
        login();
    }
}

function login()
{
    require_once 'view/login.php';
}
?>
