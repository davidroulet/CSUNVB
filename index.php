<?php
session_start();
// Include all controllers
require "controler/adminControler.php";
require "controler/shiftEndControler.php";
require "controler/todoListControler.php";
require "controler/drugControler.php";
if (isset($_POST["semaine"])){
    $Site=$_POST["semaine"];
}
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
}

switch ($action) {
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
        drugHomePage();
        break;
    case "drugSiteTable":
        drugSiteTable($semaine);
        break;
    case "trylogin":
        trylogin($username, $password);
        break;
    case "DrugTest":
        Teste();
        break;
    default: // unknown action
        require_once 'view/home.php';
        break;
}

?>
