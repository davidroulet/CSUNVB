<?php
session_start();
// Include all controllers
require "controler/adminControler.php";
require "controler/shiftEndControler.php";
require "controler/todoListControler.php";
require "controler/drugControler.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $_SESSION["Selectsite"] = $_POST['base'];
    $_SESSION['site']=$_POST['base'];
}


if (isset($_POST["semaine"])) {
    $semaine = $_POST["semaine"];
}
if (isset($_POST["site"])) {
    $_SESSION["Selectsite"] = $_POST["site"];
}

$action = $_GET['action'];
if (isset($_SESSION['username']) || $action == 'trylogin') {
    $action = $_GET['action'];
} else {
    $action = ' ';
}




switch ($action) {
    case 'home' :
        require_once 'view/home.php';
        break;
    case 'admin':
        adminHomePage();
        break;
    case 'shiftend':
        shiftEndHomePage();
        break;
    case 'listShiftEnd':
        listShiftEnd();
        break;
    case 'disconnect':
        disconnect();
        break;
    case 'login':
        login();
        break;
    case 'todolist':
        $selectedBase = $_SESSION['Selectsite'];
        if (isset($_POST['selectBase']))
        {
            $selectedBase = $_POST['selectBase'];
        }
        todoListHomePage($selectedBase);
        break;
    case 'edittod':
        edittodopage();
        break;
    case 'drugs':
        drugHomePage($Site);
        break;
    case "drugSiteTable":
        drugSiteTable($semaine, $Site);
        break;
    case "trylogin":
        trylogin($username, $password, $base);
        break;
    default: // unknown action
        if (isset($_SESSION['username'])) {
            require_once 'view/home.php';
        } else {
            require_once 'view/login.php';
        }
        break;
}

?>
