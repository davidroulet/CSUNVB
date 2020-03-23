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
// TODO remplacer cette function par celle du model
$todoSheets = json_decode(file_get_contents("model/dataStorage/todosheets.json"), true);
// TODO remplacer cette function par celle du model
$bases = json_decode(file_get_contents("model/dataStorage/bases.json"), true);
?>
<h1 class="center p-4"><?= $title ?></h1>
<h2 class="center p-2">Année <?= date("Y") . " SITE à " . getbasebyid($_SESSION["site"])["name"]; ?></h2>


<div class="p-3 d-flex justify-content-end ">
    <FORM action="/index.php?action=todolist" method="post">
        <SELECT name="selectBase">
            <?php foreach($bases as $base) { ?>
                <option value="<?= $base['id'] ?>" <?php if ($base['id'] == $selectedBase) echo "selected"; ?>><?= $base['name'] ?></option>
            <?php } ?>
        </SELECT>
        <button type="submit" class="btn btn-info">Recharger</button>
    </form>
</div>

<div class="container d-flex justify-content-center">

    <div class="weeknumber p-3">

        <?php

        foreach ($todoSheets as $todosheet) {

            if ($selectedBase == $todosheet['base_id']) {
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

