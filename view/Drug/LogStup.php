<?php
/**
 * Auteur: David Roulet / Fabien Mason
 * Date: Aril 2020
 **/

ob_start();
$title = "CSU-NVB - Logs";
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
