<?php
/*
 * Programme : Exo Php
 * Auteur : Thomas Grossmann
 * Date : 10.02.2020
 */
ob_start();
$title = "CSU-NVB - Erreur";
?>

<div>

</div>

<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>
