<?php
/**
 * Auteur: Thomas Grossmann / Mounir Fiaux
 * Date: Mars 2020
 **/

ob_start();
$title = "CSU-NVB - Administration - Novas";
?>

<table class="table table-bordered" style="text-align: center">
    <thead>
    <th>Numéro</th>
    </thead>
    <tbody>
    <?php foreach ($novas as $nova) { ?>
        <tr>
        <td><a href="?action=modifNova&idNova=<?= $nova['id'] ?>"><?= $nova['number'] ?></a></td>
        </tr><?php } ?>
    </tbody>
</table>

<a href="?action=newNovas" class="btn btn-primary" >Créer une nova</a>

<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>
