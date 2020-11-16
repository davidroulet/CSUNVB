<?php
/**
 * Auteur: Thomas Grossmann / Mounir Fiaux
 * Date: Avril 2020
 **/

ob_start();
$title = "CSU-NVB - Administration - Modifier Base";
?>

<form class="form form-group" action="?action=saveModifyBase&idBase=<?= $idBase ?>" method="POST">
    <label class="form-group">Renommer</label>
    <input type="text" class="form-group form-control" name="modifNameBase" required>
    <input type="submit" class="btn btn-primary">
</form>

<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>
