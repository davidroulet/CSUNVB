<?php
ob_start();
$title = "CSU-NVB - Stupéfiants";
$site = "Payerne";
?>
<div class="row m-2">
    <h1>Stupéfiants</h1>
</div>


<div class="week">
    <div class="day">
        <div class="dayheader">""</div>
        <div class="dayheader">Morphine N°</div>
    </div>

    <div class="day">
        <div class="dayheader">Lundi</div>
        <div class="week">
            <div class="day">
                <div class="dayheader">75</div>
                <div class="hour">75</div>
                <div class="hour">76</div>
                <div class="hour">77</div>
            </div>
            <div class="day">
                <div class="dayheader">76</div>
                <div class="hour">75</div>
                <div class="hour">76</div>
                <div class="hour">77</div>
            </div>
            <div class="day">
                <div class="dayheader">77</div>
                <div class="hour">75</div>
                <div class="hour">76</div>
                <div class="hour">77</div>
            </div>
        </div>
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
