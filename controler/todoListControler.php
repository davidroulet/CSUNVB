<?php
/**
 * Ce cartouche vaudra quelques points en moins au groupe qui osera le laisser là tel quel ...
 * Auteur: X. Carrel
 * Date: Février 2020
 **/

require_once 'model/todoListModel.php';

function todoListHomePage()
{
    $TodoListItemsread = TodoListItems();
    require_once 'view/todo/todoListHome.php';
}
?>


