<?php
// David Roulet - Fabien Masson
// Projet CSU-NVB A1
// Drugs Section
ob_start();
$title = "CSU-NVB - Stupéfiants";
$year = 20;
var_dump($LogSheets);
?>
<table border="1" class="table table-dark">
    <tr>
        <td>Heurs</td>
        <td>Personne</td>
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
