<?php

echo "Test delete: ";
$items = getTodoListTasks();
$countItemsFirst = count($items);
$id = 4;
destroyTodoListItem($id);
$itemsdeleteAfter = readTodoListTaskById($id);
$countItemsSecond = count($items);

if ($itemsdeleteAfter == null) {
    echo " OK\n";
} else {
    echo "BUG\n";
}

?>




