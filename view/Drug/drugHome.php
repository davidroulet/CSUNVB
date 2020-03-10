<?php
// David Roulet - Fabien Masson
// Projet CSU-NVB A1
// Drugs Section
ob_start();
$title = "CSU-NVB - Stupéfiants";
$year = 20;
?>
<div class="row m-2">
    <h1>Stupéfiants</h1>
</div>
<form action="/index.php?action=drugSiteTable" method="post">
    <div class="row m-2">
        <?php
        $liste = getStupSheets();
        foreach ($liste as $item) {
            if ($item["base_id"] == $_SESSION["Selectsite"]) {
                $weeks[] = $item;
            }
        }
        foreach ($weeks as $week) { ?>
            <button class="text-decoration-none card col-4 menutile align-items-center colorblue"
                    name="semaine" value="<?= $week["week"] ?>"> <?php echo $week["week"] ?> </button> <?php } ?>
    </div>
</form>
<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>
