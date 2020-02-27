<?php
ob_start();
$title = "CSU-NVB - Stupéfiants";
?>
<div class="row m-2">
    <h1>Stupéfiants</h1>
</div>
<form action="/index.php?action=DrugTest" method="post">
    <button class="btn">Tests</button>
</form>
<form action="/index.php?action=drugHomePage" method="post">
    <button class="text-decoration-none card col-4 menutile pl-3 pr-3 pt-5 pb-5 m-1 align-items-center" name="site" value="Payerne">Payerne</button>
    <button class="text-decoration-none card col-4 menutile pl-3 pr-3 pt-5 pb-5 m-1 align-items-center" name="site" value="Payerne">Yverdon</button>
    <button class="text-decoration-none card col-4 menutile pl-3 pr-3 pt-5 pb-5 m-1 align-items-center" name="site" value="Payerne">Saint-Loup</button>
    <button class="text-decoration-none card col-4 menutile pl-3 pr-3 pt-5 pb-5 m-1 align-items-center" name="site" value="Payerne">Sainte-Croix</button>
    <button class="text-decoration-none card col-4 menutile pl-3 pr-3 pt-5 pb-5 m-1 align-items-center" name="site" value="Payerne">Vallée-de-Joux</button>
</form>
<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>
