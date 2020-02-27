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
        <?php
        $weeks=getStupSheets();
        foreach ($weeks as $week) { ?>
            <button class="text-decoration-none card col-4 menutile align-items-center colorblue"
                    name="semaine" value="<?= $week["week"] ?>"> <?php echo $week["week"] ?> </button> <?php } ?>
    </div>
</form>
<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>
