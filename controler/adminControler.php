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
    $Changes = $Users;
    file_put_contents("model/dataStorage/Users.json", json_encode($Changes));
    adminCrew();
}

function newUser()
{
    require_once 'view/Admin/newUser.php';
}

function saveNewUser($prenom, $nom, $initiales, $admin)
{
    $hash = password_hash($initiales, PASSWORD_DEFAULT);
    if ($admin == 'on') {
        $Admin = true;
    } else {
        $Admin = false;
    }
    $Users = getUsers();
    $id = count($Users) + 1;
    $NewUser = [
        'id' => $id,
        'initials' => $initiales,
        'lastname' => $nom,
        'password' => $hash,
        'firstname' => $prenom,
        'admin' => $Admin,
        'firstconnect' => true
    ];
    $Users[] = $NewUser;
    file_put_contents("model/dataStorage/Users.json", json_encode($Users));
    $_SESSION['flashmessage'] = "L'utilisateur a bien été créé.";
    adminCrew();
}

function changeFirstPassword($passwordchange, $confirmpassword, $username)
{
    $User = getUserByUsername($username);
    if ($passwordchange != $User['password']){
        if ($confirmpassword != $passwordchange){
            $_SESSION['flashmessage'] = 'Confirmation incorrecte !';
            require_once 'view/firstLogin.php';
        } else {

        }
    } else {
        $_SESSION['flashmessage'] = "Le nouveau mot de passe doit être différent de l'ancien !";
        require_once 'view/firstLogin.php';
    }
}

?>
