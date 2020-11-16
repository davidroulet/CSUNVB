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

?>
<h1 class="center p-4 font-weight-bold"><?= $title ?></h1>

<div class="week text-center hour p-0">
    <?php foreach ($datesoftheweek as $index => $onedate) : ?>
        <div class='bg-primary text-white col-md font-weight-bold'><?= $days[$index] ?><br><?= date("d.m.Y", $onedate) ?></div>
    <?php endforeach; ?>
</div>
<div class="week text-center hour">
    <div class="col-md font-weight-bold bg-info text-white">Journée</div>
</div>
<div class="row week hour">
    <?php foreach ($datesoftheweek as $index => $onedate) : ?>
        <div class="col p-1">
            <?php foreach ($todoThings[1][$index] as $todothing): ?>
                <div class="todothing mb-1"><?= $todothing['description'] ?></div>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
</div>
<div class="week text-center hour">
    <div class="col-md font-weight-bold bg-info text-white">Nuit</div>
</div>
<div class="row week hour">
    <?php foreach ($datesoftheweek as $index => $onedate) : ?>
        <div class="col p-1">
            <?php foreach ($todoThings[0][$index] as $todothing): ?>
                <div class="todothing mb-1"><?= $todothing['description'] ?></div>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
</div>


<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>
