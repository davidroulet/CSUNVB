<?php
/**
 * Auteur: Thomas Grossmann / Mounir Fiaux
 * Date: Mars 2020
 **/

ob_start();
$title = "CSU-NVB - Administration - Médicaments";
?>
    <a href="?action=adminCrew" class="btn btn-primary">Retour</a>

    <table class="table table-bordered" style="text-align: center">
        <thead>
        <th>Nom</th>
        </thead>
        <tbody>
        <?php foreach ($drugs as $drug) { ?>
            <tr>
            <td><a href=""><?= $drug['name'] ?></a></td>
            </tr><?php } ?>
        </tbody>
    </table>

<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>