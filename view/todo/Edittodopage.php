<?php
/**
 * Title: CSUNVB
 * USER: marwan.alhelo
 * DATE: 13.02.2020
 * Time: 11:29
 **/
/**
 * Title: CSUNVB - View EditPage
 * USER: Gatien.Jayme
 * DATE: 27.08.2020
 **/
ob_start();
$title = "CSU-NVB - Tâches hebdomadaires";

$days = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
?>
<h1 class="center p-4 font-weight-bold"><?= $title ?></h1>

<?php foreach ($users as $oneuser) { ?>
    <?php if ($oneuser['admin'] == 1) { ?>
        <button name="newtodo">Nouvelle tâche</button>
    <?php } ?>
<?php } ?>


<div class="week text-center hour">


    <?php
    foreach ($datesoftheweek as $index => $onedate) {
        echo "<div class='bg-primary text-white day hour col-md h4 font-weight-bold'>{$days[$index-1]}<br>" . date("Y-m-d", $onedate) . " </div>";
    }
    ?>
</div>
<div class="week text-center hour">
    <div class="day col-md font-weight-bold h4 bg-info text-white"> Journée</div>
</div>
<div class="week hour">


    <div class="day col-md">

        <?php foreach ($dayThingsForMonday as $thing) { ?>
            <a href="?action=Edittodo&<?= $thing['id'] ?> " class="over">
                <div class="hour"><?= $thing['description'] ?></div>
            </a>
        <?php } ?>
    </div>
    <div class="day col-md">
        <?php foreach ($dayThingsForTuesday as $thing) { ?>
            <a href="?action=Edittodo&<?= $thing['id'] ?> " class="over">
                <div class="hour"><?= $thing['description'] ?></div>
            </a>
        <?php } ?>
    </div>
    <div class="day col-md">
        <?php foreach ($dayThingsForWednesday as $thing) { ?>
            <a href="?action=Edittodo&<?= $thing['id'] ?> " class="over">
                <div class="hour"><?= $thing['description'] ?></div>
            </a>
        <?php } ?>
    </div>
    <div class="day col-md">
        <?php foreach ($dayThingsForThursday as $thing) { ?>
            <a href="?action=Edittodo&<?= $thing['id'] ?> " class="over">
                <div class="hour"><?= $thing['description'] ?></div>
            </a>
        <?php } ?>
    </div>
    <div class="day col-md">
        <?php foreach ($dayThingsForFriday as $thing) { ?>
            <a href="?action=Edittodo&<?= $thing['id'] ?> " class="over">
                <div class="hour"><?= $thing['description'] ?></div>
            </a>
        <?php } ?>
    </div>
    <div class="day col-md">
        <?php foreach ($dayThingsForSaturday as $thing) { ?>
            <a href="?action=Edittodo&<?= $thing['id'] ?> " class="over">
                <div class="hour"><?= $thing['description'] ?></div>
            </a>
        <?php } ?>
    </div>
    <div class="day col-md">

        <?php foreach ($dayThingsForSunday as $thing) { ?>
            <a href="?action=Edittodo&<?= $thing['id'] ?> " class="over">
                <div class="hour"><?= $thing['description'] ?></div>
            </a>
        <?php } ?>
    </div>

</div>
<div class="week text-center hour">
    <div class="day col-md font-weight-bold h4 bg-dark text-white"> Nuit</div>
</div>
<div class="week hour">
    <div class="day col-md">

        <?php foreach ($nightThingsForSunday as $thing) { ?>
            <a href="?action=Edittodo&<?= $thing['id'] ?> " class="over">
                <div class="hour"><?= $thing['description'] ?></div>
            </a>
        <?php } ?>
    </div>

    <div class="day col-sm">

        <?php foreach ($nightThingsForMonday as $thing) { ?>
            <a href="?action=Edittodo&<?= $thing['id'] ?> " class="over">
                <div class="hour"><?= $thing['description'] ?></div>
            </a>
        <?php } ?>
    </div>
    <div class="day col-md">
        <?php foreach ($nightThingsForTuesday as $thing) { ?>
            <a href="?action=Edittodo&<?= $thing['id'] ?> " class="over">
                <div class="hour"><?= $thing['description'] ?></div>
            </a>
        <?php } ?>
    </div>
    <div class="day col-md">
        <?php foreach ($nightThingsForWednesday as $thing) { ?>
            <a href="?action=Edittodo&<?= $thing['id'] ?> " class="over">
                <div class="hour"><?= $thing['description'] ?></div>
            </a>
        <?php } ?>
    </div>
    <div class="day col-md">
        <?php foreach ($nightThingsForThursday as $thing) { ?>
            <a href="?action=Edittodo&<?= $thing['id'] ?> " class="over">
                <div class="hour"><?= $thing['description'] ?></div>
            </a>
        <?php } ?>
    </div>
    <div class="day col-md">
        <?php foreach ($nightThingsForFriday as $thing) { ?>
            <a href="?action=Edittodo&<?= $thing['id'] ?> " class="over">
                <div class="hour"><?= $thing['description'] ?></div>
            </a>
        <?php } ?>
    </div>
    <div class="day col-md">
        <?php foreach ($nightThingsForSaturday as $thing) { ?>
            <a href="?action=Edittodo&<?= $thing['id'] ?> " class="over">
                <div class="hour"><?= $thing['description'] ?></div>
            </a>
        <?php } ?>
    </div>
</div>

<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>
