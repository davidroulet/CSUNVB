<?php
/**
 * Auteur: Thomas Grossmann / Mounir Fiaux
 * Date: Avril 2020
 **/

ob_start();
$title = "CSU-NVB - Administration - Modifier Nova";
?>

<form class="form form-group" action="?action=saveModifyNova&idNova=<?= $idNova ?>" method="POST">
    <label class="form-group">Changer le numéro</label>
    <input type="number" class="form-group form-control" name="modifNameNova" required>
    <input type="submit" class="btn btn-primary">
</form>

<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>