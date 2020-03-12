<?php

require 'model/todoListModel.php';

echo "Test 1: La modification existe belle et bien";

$items = readTodoListItems();
$item = ['id' => 1,
    'type' => 0,
    'daything' => 1,
    'description' => "Commande mat et commande pharmacie",
    'display_order' => null
];

$itemReaded = readTodoListItem(1);

if($itemReaded['id'] == 1 && $itemReaded['type'] == 0 && $itemReaded['daything'] == 1 && $itemReaded['description'] == "Commande mat et commande pharma" && $itemReaded['display_order'] == null) {
    echo "-> Test réussi";
} else {
    echo "-> Test échoué";
}

echo "Test 2: Le nombre de champs est le bon";

if(count($itemReaded) == 4){
    echo "-> Test réussi";
} else {
    echo "-> Test échoué";
}


?>




