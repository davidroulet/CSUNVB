<?php
/**
 * Title: CSUNVB
 * USER: marwan.alhelo
 * DATE: 13.02.2020
 * Time: 11:29
 **/
ob_start();
$title = "CSU-NVB - Tâches hebdomadaires";
$currentWeekNumber = date('W');
?>
<h1 class="center"><?= $title ?></h1>
<div class="container ">
    <div class="week">
        <div class="horizontal"><span style="font-weight: bold"> Année</span></div>
        <?php
        for($i=0; $i<4; $i++){
            for ($w=0; $w<$i; $w++){
                echo "<div class=\"day col-sm\">";
                echo "<a href=\"?action=edittod&id=1\" class=\"over\"><div class=\"hour\"> $currentWeekNumber </div></a>";
                echo "<a href=\"?action=edittod&id=1\" class=\"over\"><div class=\"hour\">Semaine N° </div></a>";
                echo "<a href=\"?action=edittod&id=1\" class=\"over\"><div class=\"hour\">Semaine N° </div></a>";
                echo "<a href=\"?action=edittod&id=1\" class=\"over\"><div class=\"hour\">Semaine N° </div></a>";
                echo "<a href=\"?action=edittod&id=1\" class=\"over\"><div class=\"hour\">Semaine N° </div></a>";
                echo "<a href=\"?action=edittod&id=1\" class=\"over\"><div class=\"hour\">Semaine N° </div></a>";
                echo "<a href=\"?action=edittod&id=1\" class=\"over\"><div class=\"hour\">Semaine N° </div></a>";
                echo "<a href=\"?action=edittod&id=1\" class=\"over\"><div class=\"hour\">Semaine N° </div></a>";
                echo "<a href=\"?action=edittod&id=1\" class=\"over\"><div class=\"hour\">Semaine N° </div></a>";
                echo "<a href=\"?action=edittod&id=1\" class=\"over\"><div class=\"hour\">Semaine N° </div></a>";
                echo "<a href=\"?action=edittod&id=1\" class=\"over\"><div class=\"hour\">Semaine N° </div></a>";
                echo "<a href=\"?action=edittod&id=1\" class=\"over\"><div class=\"hour\">Semaine N° </div></a>";
                echo "<a href=\"?action=edittod&id=1\" class=\"over\"><div class=\"hour\">Semaine N° </div></a>";
                echo "<a href=\"?action=edittod&id=1\" class=\"over\"><div class=\"hour\">Semaine N° </div></a>";
                echo "</div>";
            }

        }
        ?>

<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>

