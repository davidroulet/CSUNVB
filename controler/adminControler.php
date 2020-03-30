<?php
/**
 * Auteur: Thomas Grossmann / Mounir Fiaux
 * Date: Mars 2020
 **/

require_once 'model/adminModel.php';

function adminHomePage()
{
    require_once 'view/Admin/adminHome.php';
}

function crew()
{
    $users = getUsers();
    require_once 'view/Admin/crew.php';
}
?>
