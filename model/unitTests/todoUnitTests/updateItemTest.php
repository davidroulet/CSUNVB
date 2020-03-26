<?php

echo "Test unitaire de la fonction updateTodoListItem\n\n";

require 'model/todoListModel.php';

echo "Test 1ère partie - avant l'update il ne doit pas y avoir les mêmes champs qu'après l'update\n\n";

$firstItemReaded = readTodoListItem(23);

if ($firstItemReaded['id'] == 23 && $firstItemReaded['week'] == 2  && $firstItemReaded['state'] == 3 && $firstItemReaded['base_id'] == 5) {
    echo "-> Test échoué";
} else {
    echo "-> Test réussi";
}

echo "\n\nTest 2ème partie - la modification existe belle et bien\n\n";

$item = readTodoListItem(23);
$item['state'] = "open";


$itemsBeforeUpdate = readTodoListItems();

updateTodoListItem($item);

$itemsAfterUpdate = readTodoListItems();

$itemReaded = readTodoListItem(23);

if ($itemReaded['id'] == 23 && $itemReaded['week'] == 2 && $itemReaded['state'] == "open" && $itemReaded['base_id'] == 5) {
    echo "-> Test réussi";
} else {
    echo "-> Test échoué";
}

echo "\n\nTest 3ème partie - le nombre de champs est le bon\n\n";

if ($itemReaded != null){
    if(count($itemReaded) == 4) {
    echo "-> Test réussi";
} else {
    echo "-> Test échoué";
}
}else {
    echo "-> Test échoué";
}


echo "\n\nTest 4ème partie - le même nombre d'items doit exister avant et après l'update\n\n";

if (count($itemsBeforeUpdate) == count($itemsAfterUpdate)) {
    echo "-> Test réussie";
} else {
    echo "-> Test échoué";
}


?>




