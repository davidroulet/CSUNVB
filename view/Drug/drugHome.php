<?php
ob_start();
$title = "CSU-NVB - Stupéfiants";
?>
<div class="row m-2">
    <h1>Stupéfiants</h1>
    <form action="/index.php?action=drugSiteTable" method="post">
    <button class="btn">Fabien</button>
</form>
</div>
<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>
