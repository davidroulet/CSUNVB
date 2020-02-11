<?php
/*
 * Programme : Exo Php
 * Auteur : Thomas Grossmann
 * Date : 10.02.2020
 */
ob_start();
$title = "CSU-NVB - Erreur";
?>

<div class="row error">Mot de passe ou nom d'utilisateur incorrect</div>
<a href="index.php?action=login" class="btn btn-primary">Retour au login</a>

<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>
