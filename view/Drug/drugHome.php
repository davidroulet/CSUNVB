<?php
ob_start();
$title = "CSU-NVB - Stupéfiants";
?>
<div class="row m-2">
    <h1>Stupéfiants</h1>
</div>
    <form action="/index.php?action=drugSiteTable" method="post">
    <button class="btn">Fabien</button>
</form>
<form action="/index.php?action=DrugTest" method="post">
    <button class="btn">Teste</button>
</form>
<form action="/index.php?action=drugSiteTable" method="get">
<div class="row m-2">
    <button class="text-decoration-none card col-4 menutile pl-3 pr-3 pt-5 pb-5 m-1 align-items-center colorblue" name="Payerne">Payerne</button>
    <button class="text-decoration-none card col-4 menutile pl-3 pr-3 pt-5 pb-5 m-1 align-items-center colorblue" name="Yverdon">Yverdon</button>
    <button class="text-decoration-none card col-4 menutile pl-3 pr-3 pt-5 pb-5 m-1 align-items-center colorblue" name="Saint-Loup">Saint-Loup</button>
    <button class="text-decoration-none card col-4 menutile pl-3 pr-3 pt-5 pb-5 m-1 align-items-center colorblue" name="Vallée">La Vallée de joux</button>
</div>
</form>
<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>
