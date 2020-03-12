<?php
// David Roulet - Fabien Masson
// Projet CSU-NVB A1
// Drugs Section
ob_start();
$title = "CSU-NVB - Stupéfiants";
?>
<div class="row m-2">
    <h1>Stupéfiants</h1>
</div>

<form action="/index.php?action=drugHomePage" method="post">
    <button class="text-decoration-none card col-6 menutile pl-3 pr-3 pt-5 pb-5 m-1 align-items-center" name="site" value=4>Payerne</button>
    <button class="text-decoration-none card col-6 menutile pl-3 pr-3 pt-5 pb-5 m-1 align-items-center" name="site" value=1>Yverdon</button>
    <button class="text-decoration-none card col-6 menutile pl-3 pr-3 pt-5 pb-5 m-1 align-items-center" name="site" value=3>Saint-Loup</button>
    <button class="text-decoration-none card col-6 menutile pl-3 pr-3 pt-5 pb-5 m-1 align-items-center" name="site" value=2>Sainte-Croix</button>
    <button class="text-decoration-none card col-6 menutile pl-3 pr-3 pt-5 pb-5 m-1 align-items-center" name="site" value=5>Vallée-de-Joux</button>
</form>
<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>
