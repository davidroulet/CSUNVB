<?php

require 'model/todoListModel.php';

$item = [ "type" => 2, "daything" => 3, "description" => "six", "display_order" => null];
$idgiven = createTodoListitem($item);
$items = getTodoListTasks();
$countTodos = count($items);
$id = $idgiven;
if(readTodoListItem($id) != null) {
    echo " test réussi";
}
else {
    echo"BUG\n";
}

?>




