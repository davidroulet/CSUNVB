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

<div class="container ">
    <div class="row m-4 d-flex justify-content-center">
        <?php if ($_SESSION['username']['admin'] == true): ?>
            <a class="col-4 bigfont btn btn-primary btn-large p-5 m-5 font-weight-bolder" href="?action=admin">Administration</a>
        <?php endif; ?>
        <a class="col-4 bigfont btn btn-primary btn-large p-5 m-5 font-weight-bolder" href="?action=listShiftEnd">Remise de garde</a>
        <a class="col-4 bigfont btn btn-primary btn-large p-5 m-5 font-weight-bolder" href="?action=todolist">Tâches hebdomadaires</a>
        <a class="col-4 bigfont btn btn-primary btn-large p-5 m-5 font-weight-bolder" href="?action=drugs">Stupéfiants</a>
    </div>

</div>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
