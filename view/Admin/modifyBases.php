<?php
/**
 * Auteur: Thomas Grossmann / Mounir Fiaux
 * Date: Avril 2020
 **/

ob_start();
$title = "CSU-NVB - Administration - Modifier Base";
?>

<form class="form form-group">
    <label class="form-group form-control">Renommer</label>
</form>

<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>
