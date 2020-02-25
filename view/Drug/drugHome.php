<?php
ob_start();
$title = "CSU-NVB - Stupéfiants";
$year = 20;
?>
<div class="row m-2">
    <h1>Stupéfiants</h1>
</div>
<form action="/index.php?action=drugSiteTable" method="post">
</form>
<form action="/index.php?action=DrugTest" method="post">
    <button class="btn">Tests</button>
</form>
<form action="/index.php?action=drugSiteTable" method="post">
    <div class="row m-2">
        <?php for ($i = 0; $i < 52; $i++) { ?>
            <button class="text-decoration-none card col-4 menutile align-items-center colorblue"
                    name="semaine" value="<?= $year . sprintf("%02d", $i + 1) ?>"> <?php echo $year . sprintf("%02d", $i + 1) ?> </button> <?php } ?>
    </div>
</form>
<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>
