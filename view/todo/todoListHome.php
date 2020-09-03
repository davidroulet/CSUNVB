<?php
/**
 * Title: CSUNVB
 * USER: marwan.alhelo
 * DATE: 13.02.2020
 * Time: 11:29
 **/
/**
 * Title: CSUNVB - View Home
 * USER: Gatien.Jayme
 * DATE: 27.08.2020
 **/
ob_start();
$title = "CSU-NVB - Tâches hebdomadaires";

?>
<h1 class="center p-4"><?= $title ?></h1>


<h2 class="center p-2">Année<?= date("Y") ?> </h2>
<h3 class="center"> Vous êtes connecté(e) <?= getbasebyid($_SESSION["Selectsite"])["name"] ?></h3>


<div class="p-3 d-flex justify-content-end ">
    <FORM action="/index.php?action=todolist" method="post">
        <SELECT onchange="this.form.submit()" name="selectBase">
            <?php foreach ($bases as $base) { ?>

                <option value="<?= $base['id'] ?>" <?php if ($base['id'] == $selectedBase) echo "selected"; ?>><?= $base['name']; ?></option>


            <?php } ?>
        </SELECT>
    </form>
</div>

<div class="container d-flex justify-content-center">

    <div class="weeknumber p-3">

        <?php

        foreach ($todoSheets as $todosheet) {
            ?>
                <div class="day col-lg">
                    <a href="?action=edittod&sheetid=<?= $todosheet['id'] ?>" class="over">
                    <div class="hour">Semaine N° : <?= $todosheet['week'] ?> <br> <?=$todosheet['state'] ?></div>

                    </a>

                </div>
            <?php
        } ?>

    </div>

</div>

<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>

