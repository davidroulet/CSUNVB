<?php
ob_start();
$title = "CSU-NVB - Tâches hebdomadaires";
?>


<h1><?=$title?></h1>

<div class="week">
    <div>

        <div class="parent horizontal">jour</div>
    </div>
<div class="day">

    <div class="dayheader">Lundi</div>
    <div class="hour">Do something</div>
</div>
<div class="day">
    <div class="dayheader">Mardi</div>
    <div class="hour">Do something</div>
    <div class="hour">Do something</div>
    <div class="hour">Do something</div>
    <div class="hour">Do something</div>
    <div class="hour">Do something</div>
</div>
<div class="day">
    <div class="dayheader">Mercredi</div>
    <div class="hour">Do something</div>
    <div class="hour">Do something</div>
    <div class="hour">Do something</div>
</div>
<div class="day">
    <div class="dayheader">Jeudi</div>
    <div class="hour">Do something</div>
    <div class="hour">Do something</div>
</div>
<div class="day">
    <div class="dayheader">Vendredi</div>
    <div class="hour">Do something</div>
</div>
<div class="day">
    <div class="dayheader">Samedi</div>
    <div class="hour">Do something</div>
    <div class="hour">Do something</div>
    <div class="hour">Do something</div>
</div>
<div class="day">
    <div class="dayheader">Dimanche</div>
    <div class="hour">Do something</div>
    <div class="hour">Do something</div>
    <div class="hour">Do something</div>
    <div class="hour">Do something</div>
</div>
</div>
<div class="row m-2">




</div>
<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>
