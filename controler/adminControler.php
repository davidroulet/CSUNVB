<?php
/**
 * Auteur: Thomas Grossmann
 * Date: Mars 2020
 **/

require_once 'model/adminModel.php';

function trylogin($initials, $password, $baselogin)     //Fonction pour se connecter sur le site
{
    $User = getUserByInitials($initials);
    if (password_verify($password, $User['password'])) {
        $_SESSION['username'] = $User;
        unset($_SESSION['username']['password']);
        $_SESSION['username']['base'] = getbasebyid($baselogin);        //Met la base dans la session
        if ($User['firstconnect'] == true) {
            require 'view/firstLogin.php';
        } else {
            $_SESSION['flashmessage'] = 'Bienvenue ' . $User['firstname'] . ' ' . $User['lastname'] . ' !';
            require 'view/home.php';
        }
    } else {
        $_SESSION['flashmessage'] = 'Identifiants incorrects ...';
        login();
    }
}

function login()            //Pointe sur la page du login
{
    require 'view/login.php';
}

function disconnect()           //Vide la session (déconnecte l'user)
{
    unset($_SESSION['username']);
    require 'view/login.php';
}

function adminHomePage()        //Pointe sur la page admin
{
    require_once 'view/Admin/adminHome.php';
}

function adminCrew()        //Pointe sur la liste d'users
{
    $users = getUsers();
    require_once 'view/Admin/adminCrew.php';
}

function adminBases()       //Pointe sur la liste des bases
{
    $bases = getbases();
    require_once 'view/Admin/adminBases.php';
}

function adminNovas()       //pointe sur la liste des ambulances
{
    $novas = getnovas();
    require_once 'view/Admin/adminNovas.php';
}

function adminDrugs()       //Pointe sur la liste des médicaments
{
    $drugs = getDrugs();
    require_once 'view/Admin/adminDrugs.php';
}

function changeUserAdmin($changeUser)       //Change un user en admin (et inversément)
{
    $Users = getUsers();
    for ($i = 0; $i < count($Users); $i++) {
        if ($Users[$i]['id'] == $changeUser) {
            if ($Users[$i]['admin'] == false) {
                $Users[$i]['admin'] = true;
                $_SESSION['flashmessage'] = $Users[$i]['initials'] . " est désormais un administrateur.";
            } else {
                $Users[$i]['admin'] = false;
                $_SESSION['flashmessage'] = $Users[$i]['initials'] . " est désormais un utilisateur.";
            }
        }
    }
    SaveUser($Users);
    adminCrew();
}

function newUser()      //Pointe sur la page d'ajout d'un user
{
    require_once 'view/Admin/newUser.php';
}

function newBase()      //Pointe sur la page d'ajout d'une base
{
    require_once 'view/Admin/newBase.php';
}

function saveNewUser($prenomUser, $nomUser, $initialesUser, $startPassword)         //Crée un utilisateur
{
    $hash = password_hash($startPassword, PASSWORD_DEFAULT);
    $Users = getUsers();
    $id = count($Users) + 1;
    $admin = 0;
    $firstconnect = 1;
    for ($i = 0; $i < count($Users); $i++) {
        if ($initialesUser != $Users[$i]['initials']) {
            addNewUser($id, $prenomUser, $nomUser, $initialesUser, $hash, $admin, $firstconnect);
            $_SESSION['flashmessage'] = "L'utilisateur a bien été créé.";
            adminCrew();
        } else {
            $_SESSION['flashmessage'] = "L'utilisateur existe déjà ! (initiales déjà éxistantes)";
            adminCrew();
        }
    }
}

function changeFirstPassword($passwordchange, $confirmpassword)         //Oblige le nouvel user à changer son mdp à sa première connection
{
    $Users = getUsers();
    $hash = password_hash($confirmpassword, PASSWORD_DEFAULT);
    if ($passwordchange != $_SESSION['username']['initials']) {
        if ($confirmpassword != $passwordchange) {
            $_SESSION['flashmessage'] = 'Confirmation incorrecte !';
            require_once 'view/firstLogin.php';
        } else {
            for ($i = 0; $i < count($Users); $i++) {
                if ($Users[$i]['id'] == $_SESSION['username']['id']) {
                    $Users[$i]['password'] = $hash;
                    $Users[$i]['firstconnect'] = 0;
                }
            }
            SaveUser($Users);
            disconnect();
        }
    } else {
        $_SESSION['flashmessage'] = "Le nouveau mot de passe doit être différent de l'ancien !";
        require_once 'view/firstLogin.php';
    }
}

function modifBase($modifBase)      //Pointe sur la page de modification d'une base
{
    $base = getbasebyid($modifBase);
    require_once 'view/Admin/modifyBases.php';
}

function createBase($baseName)      //Crée une base
{
    $bases = getbases();
    $id = max(array_keys($bases)) + 1;
    $NewBase = [
        'id' => $id,
        'name' => $baseName
    ];
    $bases[] = $NewBase;
    SaveBase($bases);
    $_SESSION['flashmessage'] = "La base a bien été créée.";
    adminBases();
}

function newDrugs($newDrug_id)
{
    addNewDrug($newDrug_id);
    $dr = $newDrug_id;
    require_once 'view/Admin/newDrugs.php';
}

?>
