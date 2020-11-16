<?php
/**
 * Auteur: Thomas Grossmann / Mounir Fiaux
 * Date: Mars 2020
 **/

ob_start();
$title = "CSU-NVB - Administration - Médicaments";
?>
    <a href="?action=newDrugs" class="btn btn-success">Créer un médicament</a>
    <table class="table table-bordered" style="text-align: center">
        <thead>
        <th>Nom</th>
        </thead>
        <tbody>
        <?php foreach ($drugs as $drug) { ?>
            <tr>
            <td><a href="?action=modifDrugs&idDrug=<?= $drug['id'] ?>"><?= $drug['name'] ?></a></td>
            </tr><?php } ?>
        </tbody>
    </table>
<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>