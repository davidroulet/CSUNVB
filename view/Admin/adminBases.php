<?php
/**
 * Auteur: Thomas Grossmann / Mounir Fiaux
 * Date: Mars 2020
 **/

ob_start();
$title = "CSU-NVB - Administration - Bases";
?>
<a href="?action=adminHome" class="btn btn-primary">Retour</a>
<table class="table table-bordered" style="text-align: center">
    <thead>
    <th>Nom</th>
    </thead>
    <tbody>
        <?php foreach ($bases as $base) { ?>
        <tr>
            <td><a href="?action=modifBase&modifbase=<?= $base['id'] ?>"><?= $base['name'] ?></a></td>
        </tr><?php } ?>
    </tbody>
</table>
<a href="?action=newBase" class="btn btn-primary" >Créer une base</a>

<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>
