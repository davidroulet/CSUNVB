<?php
ob_start();
$title = "CSU-NVB - Stupéfiants";
?>
<div class="row m-2">
    <h1>Stupéfiants</h1>
</div>


<div class="week">
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



<?php
$content = ob_get_clean();
require "view/gabarit.php";

?>
