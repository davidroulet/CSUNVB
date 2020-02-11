<?php
ob_start();
$title = "CSU-NVB - Tâches hebdomadaires";
?>


<h1 class="center"><?=$title?></h1>

<div class="week">
        <div class="horizontal"> <span style="font-weight: bold">  journée</span> </div>
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
<div class="week">
    <div class="horizontal nuitcolor"> <span style="font-weight: bold">NUIT</span> </div>
    <div class="day">

        <div class="hour">Do something</div>
        <div class="hour">Do something</div>
        <div class="hour">Do something</div>
        <div class="hour">Do something</div>
    </div>
    <div class="day">

        <div class="hour">Do something</div>
        <div class="hour">Do something</div>
        <div class="hour">Do something</div>
        <div class="hour">Do something</div>
    </div>
    <div class="day">

        <div class="hour">Do something</div>
        <div class="hour">Do something</div>
        <div class="hour">Do something</div>
        <div class="hour">Do something</div>
    </div>
    <div class="day">

        <div class="hour">Do something</div>
        <div class="hour">Do something</div>
        <div class="hour">Do something</div>
        <div class="hour">Do something</div>
    </div>
    <div class="day">

        <div class="hour">Do something</div>
        <div class="hour">Do something</div>
        <div class="hour">Do something</div>
        <div class="hour">Do something</div>
    </div>
    <div class="day">

        <div class="hour">Do something</div>
        <div class="hour">Do something</div>
        <div class="hour">Do something</div>
        <div class="hour">Do something</div>
    </div>
    <div class="day">

        <div class="hour">Do something</div>
        <div class="hour">Do something</div>
        <div class="hour">Do something</div>
        <div class="hour">Do something</div>
    </div>
</div>


</div>
<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>
