<?php
session_start();
// Include all controllers
require "controler/adminControler.php";
require "controler/shiftEndControler.php";
require "controler/todoListControler.php";
require "controler/drugControler.php";
if (isset($_POST["semaine"])){
    $semaine=$_POST["semaine"];
}
if (isset($_POST["site"])){
    $_SESSION["Selectsite"]=$_POST["site"];
}
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['base'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $base = $_POST['base'];
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
    case 'disconnect':
        disconnect();
        break;
    case 'login':
        login();
        break;
    case 'todolist':
        todoListHomePage();
        break;
    case 'edittod':
        edittodopage();
        break;
    case 'drugs':
        drugbase($Site);
        break;
    case "drugSiteTable":
        drugSiteTable($semaine,$Site);
        break;
    case "trylogin":
        trylogin($username, $password, $base);
        break;
    case "DrugTest":
        Teste();
        break;
    case "drugHomePage":
        drugHomePage($Site);
        break;
    default: // unknown action
        require_once 'view/login.php';
        break;
}

?>
