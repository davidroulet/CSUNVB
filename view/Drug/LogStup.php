<?php
// David Roulet - Fabien Masson
// Projet CSU-NVB A1
// Drugs Section
ob_start();
$title = "CSU-NVB - Logs";
//permet la definition de l'année a 20xx
$year = 20;
//affiche un tableau avec les données dedans
?>
<table border="1" class="table table-dark">
    <tr>
        <td>Dates et Heures</td>
        <td>Initialles</td>
        <td>Action</td>
    </tr>
    <?php foreach ($LogSheets as $log) { ?>
    <tr>
        <td><?= $log['timestamp'] ?> </td>
        <td> <?= $log['author'] ?></td>
        <td><?= $log['text'] ?></td>
    </tr>
    <?php } ?>
</table>
<?php
$content = ob_get_clean();
require "view/gabarit.php";

?>
