<?php
/**
 * Auteur: Thomas Grossmann / Mounir Fiaux
 * Date: Mars 2020
 **/

ob_start();
$title = "CSU-NVB - Administration - Bases";
?>
<a href="?action=newBase" class="btn btn-success">Créer une base</a>
<table class="table table-bordered" style="text-align: center">
    <thead>
    <th>Nom</th>
    </thead>
    <tbody>
    <?php foreach ($bases as $base) { ?>
        <tr>
        <td><a href="?action=modifBases&idBase=<?= $base['id'] ?>"><?= $base['name'] ?></a></td>
        </tr><?php } ?>
    </tbody>
</table>
<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>
