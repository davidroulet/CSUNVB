<?php

require 'model/todoListModel.php';

$todoItems = readTodoListItems();

echo "Test 1 Lire tous les items\n";

if (count($todoItems) ==  22) {
    echo "-> Test réussie";
} else {
    echo "-> Test échoué";
}

$i = 0;
$j = 0;

echo "Test 2 lire tous les items\n";

foreach ($todoItems as $todoItem){
    if(count($todoItem) == 4){
        $i += 1;
    }
}

if(count($todoItems) == $i){
    echo "-> Test réussie";
} else {
    echo "-> Test échoué";
}

?>











