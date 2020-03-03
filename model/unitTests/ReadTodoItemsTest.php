<?php

require 'model/todoListModel.php';

$todoItems = readTodoListItems();

echo "Test 1 Lire tous les items\n";

if (count($todoItems) ==  22) {
    echo "1ère partie du test réussie";
} else {
    echo "1ère partie du test réussie échouée";
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
    echo "2ème partie du test réussie";
} else {
    echo "2ème partie du test échouée";
}

?>











