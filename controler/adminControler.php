<?php
/**
 * Auteur: Thomas Grossmann / Mounir Fiaux
 * Date: Mars 2020
 **/

require_once 'model/adminModel.php';

function trylogin($username, $password)
{
    $User = getUserByUsername($username);
    if (password_verify($password, $User['password'])) {
        $_SESSION['username'] = $User;
        unset($_SESSION['username']['password']);
        if ($User['firstconnect'] == true){
            require_once 'view/firstLogin.php';
        } else {
            $_SESSION['flashmessage'] = 'Bienvenue '.$User['firstname'].' '.$User['lastname'].' !';
            require_once 'view/home.php';
        }
    } else {
        $_SESSION['flashmessage'] = 'Identifiants incorrects ...';
        login();
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
    for ($i = 0; $i < count($Users); $i++) {
        if ($Users[$i]['id'] == $changeUser) {
            if ($Users[$i]['admin'] == false) {
                $Users[$i]['admin'] = true;
                $_SESSION['flashmessage'] = $Users[$i]['initials']." est désormais un administrateur.";
            } else {
                $Users[$i]['admin'] = false;
                $_SESSION['flashmessage'] = $Users[$i]['initials']." est désormais un utilisateur.";
            }
        }
    }
    SaveUser($Users);
    adminCrew();
}

function newUser()
{
    require_once 'view/Admin/newUser.php';
}

function newBase()
{
    require_once 'view/Admin/newBase.php';
}
function saveNewUser($prenomUser, $nomUser, $initialesUser, $adminUser)
{
    $hash = password_hash($initialesUser, PASSWORD_DEFAULT);
    if ($adminUser == 'on') {
        $Admin = true;
    } else {
        $Admin = false;
    }
    $Users = getUsers();
    $id = count($Users) + 1;
    $NewUser = [
        'id' => $id,
        'initials' => $initialesUser,
        'lastname' => $nomUser,
        'password' => $hash,
        'firstname' => $prenomUser,
        'admin' => $Admin,
        'firstconnect' => true
    ];
    $Users[] = $NewUser;
    SaveUser($Users);
    $_SESSION['flashmessage'] = "L'utilisateur a bien été créé.";
    adminCrew();
}

function changeFirstPassword($passwordchange, $confirmpassword)
{
    $Users = getUsers();
    $hash = password_hash($confirmpassword, PASSWORD_DEFAULT);
    if ($passwordchange != $_SESSION['username']['initials']){
        if ($confirmpassword != $passwordchange){
            $_SESSION['flashmessage'] = 'Confirmation incorrecte !';
            require_once 'view/firstLogin.php';
        } else {
            for ($i = 0; $i < count($Users); $i++){
                if ($Users[$i]['id'] == $_SESSION['username']['id']){
                    $Users[$i]['password'] = $hash;
                    $Users[$i]['firstconnect'] = false;
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

function modifBase($modifBase)
{
    $base = getbasebyid($modifBase);
    require_once 'view/Admin/modifyBases.php';
}

function createBase($baseName)
{
    $bases = getbases();
    $id = count($bases) + 1;
    $NewBase = [
        'id' => $id,
        'name' => $baseName
    ];
    $bases[] = $NewBase;
    SaveBase($bases);
    $_SESSION['flashmessage'] = "La base a bien été créée.";
    adminBases();
}
?>
