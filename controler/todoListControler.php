<?php
/**
 * Title: CSUNVB
 * USER: marwan.alhelo
 * DATE: 13.02.2020
 * Time: 11:29
 *
 **/

require_once 'model/todoListModel.php';
require_once 'model/loginModel.php';

function todoListHomePage($base)
{
    $TodoListItemsread = readTodoListItems();
    $selectedBase = $base;
    require_once 'view/todo/todoListHome.php';
}
//
function edittodopage()
{

    require_once 'view/todo/Edittodopage.php';

}

?>


