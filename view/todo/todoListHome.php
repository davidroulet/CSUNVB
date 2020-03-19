<?php
/**
 * Title: CSUNVB
 * USER: marwan.alhelo
 * DATE: 13.02.2020
 * Time: 11:29
 **/
ob_start();
$title = "CSU-NVB - Tâches hebdomadaires";
$firstWeek =
$currentWeekNumber = date('W');
$year = date('y');
// TODO replacer cette functione par celle de model

$todoSheets = json_decode(file_get_contents("model/dataStorage/todosheets.json"), true);
?>
<h1 class="center"><?= $title  ?></h1>
<h2 class="center">Année <?=  date("Y")." SITE à " .getbasebyid($_SESSION["site"])["name"];?></h2>
<div class="container ">

    <div class="week">
        <?php

        foreach ($todoSheets as $todosheet) {

            if ($_SESSION["site"] == $todosheet['base_id']) {
                echo '<div class=\"day\col-lg">';
                echo "<a href=\"?action=edittod&id=\" class=\"over\"><div class=\"hour\">Semaine N° :" . $todosheet['week'] . "</div></a>";
                echo "<a href=\"?action=edittod&id=1\" class=\"over\"><div class=\"hour\">State :" . $todosheet['state'] . "</div></a>";
                echo '</div>';
            }

        }


        ?>
    </div>
</div>

<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>

