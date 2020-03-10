<?php
/**
 * Title: CSUNVB
 * USER: marwan.alhelo
 * DATE: 13.02.2020
 * Time: 11:29
 **/
ob_start();
$title = "CSU-NVB - Tâches hebdomadaires";
$firstWeek=
$currentWeekNumber = date('W' );
$year = date('y');
?>
<h1 class="center"><?= $title ?></h1>
<div class="container ">
    <div class="week">
        <div class="horizontal"><span style="font-weight: bold"> Année <?php echo date("Y"); ?></span></div>
        <?php
        for($i=0; $i<4; $i++){

                echo "<div class=\"day col-sm\">";
                for($n=0; $n<13; $n++){

                    echo "<a href=\"?action=edittod&id=1\" class=\"over\"><div class=\"hour\">Semaine N° :$currentWeekNumber/$year </div></a>";
                    $currentWeekNumber++;
                }

                echo "</div>";
        }
        ?>

<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>

