<?php

require 'model/todoListModel.php';

$todoItems = readTodoListItems();

echo "Test 1 Lire tous les items\n";

if (count($todoItems) ==  10) {
    echo "Test réussi";
} else {
    echo "Test échoué";
}

$i = 0;
$j = 0;

echo "Test 2 lire tous les items\n";

foreach ($todoItems as $todoItem){

    $todoItemsList = [
    $todoItem['id'],
    $todoItem['date'],
    $todoItem['base'],
    $todoItem['nighjob'],
    $todoItem['description'],
    $todoItem['acknowledged_by'],
    $todoItem['type'],
    $todoItem['value']
    ];

var_dump($todoItemsList);

    if($todoItems[i] == todoItemsList){
        $j=+1;
    }

    $i+= 1;
}

if($j = 10){
    echo "Test Réussi";
} else {
    echo "Test échoué";
}






?>











