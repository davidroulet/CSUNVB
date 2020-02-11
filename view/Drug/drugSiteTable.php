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
            <div class="dayheader">Jours</div>
            <div class="week">
                <div class="day">
                    <div class="dayheader">N° Ambulance</div>
                    <div class="hour">Pharmacie</div>
                    <div class="hour2">Morphine N°</div>
                    <div class="hour2">Fentanyl N°</div>
                    <div class="hour2">TEMESTA</div>
                </div>
            </div>
        </div>
        <?php
        $jours = array("Lundi", "Mardi", "Mercredi", "Jeudi", "vendredi", "samedi", "dimanche");
        foreach ($jours as $jour) { ?>
            <div class="day">
                <div class="dayheader"> <?= $jour ?> </div>
                <div class="week">
                    <div class="day">
                        <div class="dayheader">Ph</div>
                        <div class="hour">X</div>
                        <div class="hour2">X</div>
                        <div class="hour">X</div>
                        <div class="hour2">X</div>
                    </div>
                    <div class="day">
                        <div class="dayheader">75</div>
                        <div class="hour">X</div>
                        <div class="hour2">X</div>
                        <div class="hour">X</div>
                        <div class="hour2">X</div>
                    </div>
                    <div class="day">
                        <div class="dayheader">76</div>
                        <div class="hour">X</div>
                        <div class="hour2">X</div>
                        <div class="hour">X</div>
                        <div class="hour2">X</div>
                    </div>
                    <div class="day">
                        <div class="dayheader">77</div>
                        <div class="hour">X</div>
                        <div class="hour2">X</div>
                        <div class="hour">X</div>
                        <div class="hour2">X</div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
<?php
$content = ob_get_clean();
require "view/gabarit.php";

?>