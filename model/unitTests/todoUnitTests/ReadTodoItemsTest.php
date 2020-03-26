<?php

echo "Test unitaire de la fonction readTodoListItems\n\n";

require 'model/todoListModel.php';

$todoItems = readTodoListItems();

echo "\n\nTest 1ère partie - tester que le nombre d'items lus soit le bon\n\n";

if (count($todoItems) ==  22) {
    echo "Test réussie";
} else {
    echo "Test échoué";
}

$i = 0;
$j = 0;

echo "\n\nTest 2ème partie - tester que tous les items aient bien 4 champs\n\n";

foreach ($todoItems as $todoItem){
    if(count($todoItem) == 4){
        $i += 1;
    }
}

if(count($todoItems) == $i){
    echo "Test réussie";
} else {
    echo "Test échoué";
}

?>











