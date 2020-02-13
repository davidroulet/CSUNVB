<?php

require 'model/todoListModel.php';

$todoItems = readTodoListItems();

if (count($todoItems) ==  10) {
    echo "Test réussi";
} else {
    echo "Test échoué";
}


?>











