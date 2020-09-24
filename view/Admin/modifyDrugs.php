<?php
/**
 * Auteur: Thomas Grossmann / Mounir Fiaux
 * Date: Avril 2020
 **/

ob_start();
$title = "CSU-NVB - Administration - Modifier Drugs";
?>

    <form class="form form-group" action="?action=saveModifyDrug" method="POST">
        <label class="form-group form-control">Renommer</label>
        <input type="text" class="form-group form-control" name="modifNameDrug" required>
        <input type="submit" class="btn btn-primary">
    </form>

<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>