<?php
ob_start();
$title = "CSU-NVB - Administration";
?>
<div class="row m-4 d-flex justify-content-center">
    <a class="text-decoration-none card col-4 menutile pl-3 pr-3 pt-5 pb-5 m-1 align-items-center" href="?action=adminCrew">Secouristes</a>
    <a class="text-decoration-none card col-4 menutile pl-3 pr-3 pt-5 pb-5 m-1 align-items-center" href="?action=adminBases">Bases</a>
    <a class="text-decoration-none card col-4 menutile pl-3 pr-3 pt-5 pb-5 m-1 align-items-center" href="?action=adminNovas">Ambulances</a>
    <a class="text-decoration-none card col-4 menutile pl-3 pr-3 pt-5 pb-5 m-1 align-items-center" href="?action=adminDrugs">Médicaments</a>
</div>
<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>
