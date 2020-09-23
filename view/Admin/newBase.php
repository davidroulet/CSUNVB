<?php
/**
 * Auteur: Thomas Grossmann / Mounir Fiaux
 * Date: Avril 2020
 **/

ob_start();
$title = "CSU-NVB - Administration - Nouvelle Base";
?>

<form class="form form-group" action="index.php?action=saveNewBase" method="post">
    <label>Nom de la nouvelle base</label>
    <input type="text" class="form-group form-control" name="nameBase">
    <input type="submit" class="btn btn-primary">
</form>

<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>
