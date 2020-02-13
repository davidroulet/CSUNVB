<?php
session_start();
// Include all controllers
require "controler/adminControler.php";
require "controler/shiftEndControler.php";
require "controler/todoListControler.php";
require "controler/drugControler.php";
if (isset($_POST["Site"])){
    $Site=$_POST["Site"];
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
var_dump($_GET["Site"]);
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
    case 'drugs':
        drugHomePage();
        break;
    case "drugSiteTable":
        drugSiteTable($Site);
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
