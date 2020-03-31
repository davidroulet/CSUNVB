<?php

echo "Tests unitaires des 'todosheets'\n\n\n";

require 'model/todoListModel.php';

echo "1. Test unitaire de la fonction readTodoListItems\n\n";

echo "\n\nTest 1ère partie - tester que le nombre d'items lus soit le bon\n\n";

$todoItems = readTodoListItems();

if (count($todoItems) ==  22) {
    echo "Test réussie";
} else {
    echo "Test échoué";
}

$i = 0;
$j = 0;

echo "\n\nTest 2ème partie - tester que tous les items aient bien 4 champs\n\n\n";

foreach ($todoItems as $todoItem){
    if(count($todoItem) == 4){
        $i += 1;
    }
}

if(count($todoItems) == $i){
    echo "Test réussie\n\n\n";
} else {
    echo "Test échoué\n\n\n";
}


echo "2. Test unitaire de la fonction readTodoListItem (by Id)\n\n";

echo "Test 1ère partie - tester que les bons champs soient retournés\n\n";

$item = readTodoListItem(2);

if ($item['id'] == 2 && $item['week'] == 2009 && $item['state'] == "closed" && $item['base_id'] == 1) {
    echo "-> Test réussi\n\n";
} else {
    echo "-> Test échoué\n\n";
}

echo "Test 2ème partie - tester que le nombre de champs soit juste \n\n";

$countItem = count($item);

if ($countItem == 4) {
    echo "-> Test réussi\n\n";
} else {
    echo "-> Test échoué\n\n";
}

echo "Test 3ème partie - tester que si on met un autre id, ça ne retourne pas les mêmes champs\n\n";

$item2 = readTodoListItem(3);

if ($item2['id'] == 2 && $item2['week'] == 2009 && $item2['state'] == "closed" && $item2['base_id'] == 1) {
    echo "-> Test échoué\n\n\n";
} else {
    echo "-> Test réussi\n\n\n";
}

echo "3. Test unitaire de la fonction readTodoListItems (By base\n\n";

echo " test 1 et 2ème partie - Vérifier que les items cherchés ont bien la bonne base et qu'il y a un juste nombre d'items\n\n";


$items = readTodoItemsForBase(5);

$count=0;

foreach($items as $item){
    if($item['base_id'] == 5){
        $count+=1;
    }
}

if($count == 3){
    echo "Test réussi\n\n\n";
} else {
    echo "Test échoué\n\n\n";
}

echo "4. Test unitaire de la fonction createTodoListItem\n\n";

echo "\n\nTest 1ère partie - tester que les bons champs ont été crées\n\n";

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
    echo "test réussi\n\n\n";
} else {
    echo "test échoué\n\n\n";
}

echo "5. Test unitaire de la fonction updateTodoListItem\n\n";

echo "Test 1ère partie - avant l'update il ne doit pas y avoir les mêmes champs qu'après l'update\n\n";

$firstItemReaded = readTodoListItem(23);

if ($firstItemReaded['id'] == 23 && $firstItemReaded['week'] == 2  && $firstItemReaded['state'] == "open" && $firstItemReaded['base_id'] == 5) {
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
    echo "-> Test réussi\n\n\n";
} else {
    echo "-> Test échoué\n\n\n";
}

echo "6. Test unitaire de la fonction destroyTodoListItem\n\n";

echo "\n\nTest 1ère partie - test qu'il y a le bon nombre d'item une fois l'item supprimé\n\n";

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
