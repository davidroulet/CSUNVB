<?php

require 'model/todoListModel.php';

$itemsLists = readTodoListItems();
$item = ['id' => 1,
    'type' => 0,
    'daything' => 1,
    'description' => "Commande mat et commande pharma",
    'display_order' => null
];


updateTodoListItem($item);

echo "Test 1: le même nombre d'items doit exister avant et après l'update";

if(count($itemsLists) == 20){
    echo "-> Test réussie";
} else {
    echo "-> Test échoué";
}

echo "Test 2: La modification existe belle et bien";

$item = readTodoListItem(1);

if($item['id'] == 1 && $item['type'] == 0 && $item['daything'] == 1 && $item['description'] == "Commande mat et commande pharma" && $item['display_order'] == null) {
    echo "-> Test réussie";
} else {
    echo "-> Test échoué";
}



?>






