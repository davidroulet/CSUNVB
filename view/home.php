<?php
/**
 * Title: CSUNVB
 * USER: marwan.alhelo
 * DATE: 13.02.2020
 * Time: 11:29
 **/

ob_start();
$title = "CSU-NVB - Accueil";
?>

<div class="container">
    <div class="row m-4 ">
        <a class="text-decoration-none card col-4 menutile pl-3 pr-3 pt-5 pb-5 m-1 align-items-center" href="?action=admin">Administration</a>
        <a class="text-decoration-none card col-4 menutile pl-3 pr-3 pt-5 pb-5 m-1 align-items-center" href="?action=listShiftEnd">Remise de garde</a>
        <a class="text-decoration-none card col-4 menutile pl-3 pr-3 pt-5 pb-5 m-1 align-items-center" href="?action=todolist">Tâches hebdomadaires</a>
        <a class="text-decoration-none card col-4 menutile pl-3 pr-3 pt-5 pb-5 m-1 align-items-center" href="?action=drugs">Stupéfiants</a>
    </div>

</div>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
