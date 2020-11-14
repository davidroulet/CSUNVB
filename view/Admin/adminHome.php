<?php
ob_start();
$title = "CSU-NVB - Administration";
?>
<div class="row m-4 d-flex justify-content-center">
    <a class="col-4 bigfont btn btn-primary btn-large p-5 m-5 font-weight-bolder" href="?action=adminCrew">Secouristes</a>
    <a class="col-4 bigfont btn btn-primary btn-large p-5 m-5 font-weight-bolder" href="?action=adminBases">Bases</a>
    <a class="col-4 bigfont btn btn-primary btn-large p-5 m-5 font-weight-bolder" href="?action=adminNovas">Ambulances</a>
    <a class="col-4 bigfont btn btn-primary btn-large p-5 m-5 font-weight-bolder" href="?action=adminDrugs">Médicaments</a>

</div>
<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>
