<?php
/**
 * Title: CSUNVB
 * USER: marwan.alhelo
 * DATE: 13.02.2020
 * Time: 11:29
 *
 **/

require_once 'model/todoListModel.php';

function todoListHomePage()
{
    $TodoListItemsread = readTodoListItems();

    require_once 'view/todo/todoListHome.php';
}
//
function edittodopage()
{

    require_once 'view/todo/edittodopage.php';

}

?>


