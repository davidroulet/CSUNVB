<?php

echo "Test unitaire de la fonction destroyTodoListItem\n\n";

echo "\n\nTest 1ère partie - test qu'il y a le bon nombre d'item une fois l'item supprimé\n\n";

require 'model/todoListModel.php';

$items = readTodoListItems();
$countItems = count($items);

destroyTodoListItem(23);

$itemsAfter = readTodoListItems();



if (count($itemsAfter) == ($countItems - 1)) {
    echo "test réussi";
} else {
    echo "test échoué";
}

echo "\n\nTest 2ème partie - test que l'item sous l'id normalement supprimé n'existe plus\n\n";

$item = readTodoListItem(23);

if($item == null){
    echo "test réussi";
}else{
    echo "test échoué";
}

?>
