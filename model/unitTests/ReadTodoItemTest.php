<?php
/*
    Projet:
    Auteur: Altin Zili
    Date: 
    Version:
    Description
*/

require 'model/todoListModel.php';

$todoItemsId = readTodoListItems();

foreach ($todoItemsId as $p => $item){
    $todoItemsId[$item['id']] = $item;
}

var_dump($todoItemsId);

?>



