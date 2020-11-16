<?php
/**
 * Auteur: Thomas Grossmann / Mounir Fiaux
 * Date: Mars 2020
 **/

ob_start();
$title = "CSU-NVB - Administration - Novas";
?>
<form class="form form-group" action="?action=saveNewNovas" method="POST">
    <label>Numéro de la nouvelle Nova</label>
    <input type="number" min="0" class="form-group form-control" name="nameNova" required>
    <input type="submit" class="btn btn-primary">
</form>
<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>
