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
<h1 class="center"><?= $title ?></h1>
<div class="container ">
    <div class="week">
        <div class="horizontal"><span style="font-weight: bold"> Année <?php echo date("Y"); ?></span></div>

        <?php
        echo '<div class="day ">';

        foreach ($todoSheets as $todosheet) {
            echo "<a href=\"?action=edittod&id=1\" class=\"over\"><div class=\"hour\">Semaine N° :" . $todosheet['week'] . "</div></a>";
            echo "<a href=\"?action=edittod&id=1\" class=\"over\"><div class=\"hour\">Semaine N° :" . $todosheet['state'] . "</div></a>";

        }
        echo '</div>';
        ?>

    </div>
</div>
<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>

