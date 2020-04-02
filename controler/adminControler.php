<?php
/**
 * Auteur: Thomas Grossmann / Mounir Fiaux
 * Date: Mars 2020
 **/

require_once 'model/adminModel.php';

function trylogin($username, $password)
{
    $User = getUserByUsername($username);
    if (password_verify($password, $User['password']))
    {
        $_SESSION['username'] = [$username, $User['firstname'], $User['lastname'], $User['admin'], $User['id']];
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

function changeUserAdmin($changeUser)
{
    $Users = getUsers();
    for ($i = 0; $i < count($Users); $i++)
    {
        if ($Users[$i]['id'] == $changeUser)
        {
            if ($Users[$i]['admin'] == false)
            {
                $Users[$i]['admin'] = true;
            } else
            {
                $Users[$i]['admin'] = false;
            }
        }
    }
    $Changes = $Users;
    file_put_contents("model/dataStorage/Users.json", json_encode($Changes));
    adminCrew();
}

?>
