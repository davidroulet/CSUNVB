<?php
/**
 * Auteur: Thomas Grossmann / Mounir Fiaux
 * Date: Mars 2020
 **/

ob_start();
$title = "CSU-NVB - Premier Login";
?>

<div class="row">
    <form class="form form-group" action="index.php?action=changeFirstPassword" method="post">
        <label>Mot de passe</label>
        <input type="password" placeholder="Entrez votre nouveau mot de passe" name="password" required class="form-group form-control">
        <label>Confirmation</label>
        <input type="password" placeholder="Répetez votre nouveau mot de passe" name="confirmpassword" required class="form-group form-control">
        <input type="submit" class="btn btn-primary" value="Confirmer">
    </form>
</div>

<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>
