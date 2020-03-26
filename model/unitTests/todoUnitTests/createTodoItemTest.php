<?php

echo "Test unitaire de la fonction createTodoListItem\n\n";

echo "\n\nTest 1ère partie - tester que les bons champs ont été crées\n\n";

require 'model/todoListModel.php';

$item = ["week" => 2, "state" => 3, "base_id" => 5];
$items = readTodoListItems();
$countItems = count($items);

$idgiven = createTodoListItem($item);

if ($idgiven != null) {
    $readback = readTodoListItem($idgiven);
    $item['id'] = $idgiven;
    if (empty(array_diff($readback, $item)) == true) {
        echo "test réussi";
    } else {
        echo "test échoué";
    }
} else {
    echo "test échoué";
}

echo "\n\nTest 2ème partie - tester que qu'un item a été bien ajouté au nombre d'items précédent\n\n";

$itemsAfter = readTodoListItems();

if (count($itemsAfter) == ($countItems + 1)) {
    echo "test réussi";
} else {
    echo "test échoué";
}


?>




