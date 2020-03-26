<?php

echo "Test unitaire de la fonction readTodoSheetsByType\n\n";

require 'model/todoListModel.php';

echo "test 1 et 2ème partie - Vérifier que les items cherchés ont bien la bonne base et qu'il y a un juste nombre d'items\n\n";


$items = readTodoSheetsByBase(5);

$count=0;

foreach($items as $item){
    if($item['base_id'] == 5){
        $count+=1;
    }
}

if($count == 3){
    echo "Test réussi";
} else {
    echo "Test échoué";
}

?>
