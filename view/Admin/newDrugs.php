<?php
/**
 * Auteur: Thomas Grossmann / Mounir Fiaux
 * Date: Mars 2020
 **/

ob_start();
$title = "CSU-NVB - Administration - Médicaments";
?>
<form class="form form-group" action="index.php?action=newDrugs" method="post">
    <label>Nom du Nouveau Médicaments</label>
    <input type="text" class="form-group form-control" name="drugName">
    <input type="submit" class="btn btn-primary">
</form>
 <?php
 $content = ob_get_clean();
 require "view/gabarit.php";
 ?>
