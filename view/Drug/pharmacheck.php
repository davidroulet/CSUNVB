<?php
/**
 * Auteur: David Roulet / Fabien Mason
 * Date: Mars 2020
 **/

ob_start();
$title = "CSU-NVB - pharmacheck";
?>


<?php
$content = ob_get_clean();
require "gabarit.php";
?>
