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
    $todoItemsId[$p['id']] = $p;
}

var_dump($todoItemsId);

?>




