<?php
/*
    Projet:
    Auteur: Altin Zili
    Date: 
    Version:
    Description
*/

require 'model/todoListModel.php';

$todoItems = readTodoListItems();

/*foreach ($todoItems as $item){
    $todoItems[$item['id']] = $item;
}

//var_dump($todoItemsId);*/

/*foreach($todoItemsId as $p => $todoItemId){
    if($todoItemId[$p] == 2 && $todoItemId['id'] == 2 && $todoItemId['week'] == 2009 && $todoItemId['state'] == "closed" && $todoItemId['base_id'] == 1){
        echo "Test réussi";
    }
}*/


echo "Test unitaire de la fonction readTodoListItem (by Id)\n\n";

echo "Test 1ère partie - tester que les bons champs soient retournés\n\n";

$item = readTodoListItem(2);

if ($item['id'] == 2 && $item['week'] == 2009 && $item['state'] == "closed" && $item['base_id'] == 1) {
    echo "-> Test réussi\n\n";
} else {
    echo "-> Test échoué\n\n";
}

echo "Test 2ème partie - tester que le nombre de champs soit juste \n\n";

$items = readTodoListItems();
$countFieldsItems = 0;

foreach ($items as $item) {
    $number = count($item);
    if ($number == 4) {
        $countFieldsItems += 1;
    }
}

if ($countFieldsItems == 22) {
    echo "-> Test réussi\n\n";
} else {
    echo "-> Test échoué\n\n";
}

echo "Test 3ème partie - tester que si on met un autre id, ça ne retourne pas les mêmes champs\n\n";

$item2 = readTodoListItem(3);

if ($item2['id'] == 2 && $item2['week'] == 2009 && $item2['state'] == "closed" && $item2['base_id'] == 1) {
    echo "-> Test échoué\n\n";
} else {
    echo "-> Test réussi\n\n";
}

?>



