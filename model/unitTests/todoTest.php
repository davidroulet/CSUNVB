<?php

require 'todoListModel.php';

$todoItems = readTodoListItems();

?>


<table class="table table-bordered">
    <thead>
        <tr>
            <th>Modèle</th>
            <th>Marque</th>
            <th>Image</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($todoItems as $todoItem) { ?>
        <tr>
            <td><?= $todoItem['id'] ?></td>
            <td><?= $todoItem['date'] ?></td>
            <td><?=$todoItem["base"]?>" </td>
            <td><?= $todoItem['nightjob'] ?></td>
            <td><?= $todoItem['description'] ?></td>
            <td><?=$todoItem["type"]?>" </td>
            <td><?=$todoItem["value"]?>" </td>

        </tr>
    <?php } ?>
    </tbody>
</table>

<?php
var_dump();

?>






