<?php
/**
 * Title: CSUNVB
 * USER: marwan.alhelo
 * DATE: 13.02.2020
 * Time: 11:29
 *
 **/

require_once 'model/todoListModel.php';
require_once 'model/adminModel.php';



function todoListHomePage($selectedBase)
{

    $TodoListItemsread = readTodoSheets();
    $todoSheets=readTodoSheetsForBase($selectedBase);
    $bases= getbases();
$basedefault = $_SESSION['username']["base"]['id'];



    require_once 'view/todo/todoListHome.php';
}

function edittodopage()
{
    $dayThingsForMonday = readTodoThingsForDay(1, 0);
    $dayThingsForTuesday = readTodoThingsForDay(1, 1);
    $dayThingsForWednesday = readTodoThingsForDay(1, 2);
    $dayThingsForThursday = readTodoThingsForDay(1, 3);
    $dayThingsForFriday = readTodoThingsForDay(1, 4);
    $dayThingsForSaturday = readTodoThingsForDay(1, 5);
    $dayThingsForSunday = readTodoThingsForDay(1, 6);
    //for  night
    $nightThingsForMonday = readTodoThingsForDay(0, 0);
    $nightThingsForTuesday = readTodoThingsForDay(0, 1);
    $nightThingsForWednesday = readTodoThingsForDay(0, 2);
    $nightThingsForThursday = readTodoThingsForDay(0, 3);
    $nightThingsForFriday = readTodoThingsForDay(0, 4);
    $nightThingsForSaturday = readTodoThingsForDay(0, 5);
    $nightThingsForSunday = readTodoThingsForDay(0, 6);

    $thingsFor[$i][$j] = readTodoThingsForDay($i, $j);
    require_once 'view/todo/Edittodopage.php';

}


?>


