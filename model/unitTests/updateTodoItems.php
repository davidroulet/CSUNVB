<?php

require 'model/todoListModel.php';


$item = ['id' => 1,
    'type' => 0,
    'daything' => 1,
    'description' => "Commande mat et commande pharmacie",
    'display_order' => null
];

/*"id": 1,
    "type": 0,
    "daything": 1,
    "description": "Commande mat et commande pharma.",
    "display_order": null*/

updateTodoListItem($item);

?>




