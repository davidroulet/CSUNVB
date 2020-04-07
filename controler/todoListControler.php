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

function todothingsEditepage()
{
   $todothingsread= readTodoListThings();
    require_once 'view/todo/todoListHome.php';
}


//
function edittodopage()
{
    $dayThingsForMonday = getTodoThingsForDay(1, 0);
    $dayThingsForTuesday = getTodoThingsForDay(1, 1);
    $dayThingsForWednesday = getTodoThingsForDay(1, 2);
    $dayThingsForThursday = getTodoThingsForDay(1, 3);
    $dayThingsForFriday = getTodoThingsForDay(1, 4);
    $dayThingsForSturday = getTodoThingsForDay(1, 5);
    $dayThingsForSunday = getTodoThingsForDay(1, 6);
    $nightThingsForMonday = getTodoThingsForDay(0, 0);
    $nightThingsForTuesday = getTodoThingsForDay(0, 1);
    $nightThingsForWednesday = getTodoThingsForDay(0, 2);
    $nightThingsForThursday = getTodoThingsForDay(0, 3);
    $nightThingsForFriday = getTodoThingsForDay(0, 4);
    $nightThingsForSturday = getTodoThingsForDay(0, 5);
    $nightThingsForSunday = getTodoThingsForDay(0, 6);
    require_once 'view/todo/Edittodopage.php';

}


?>


