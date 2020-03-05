<?php
/**
 * Title: CSUNVB
 * USER: marwan.alhelo
 * DATE: 13.02.2020
 * Time: 11:29
 **/
ob_start();
$title = "CSU-NVB - Tâches hebdomadaires";

$days = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];


?>


<h1 class="center"><?= $title ?></h1>
<div class="container ">
    <div class="week">
        <div class="horizontal"><span style="font-weight: bold"> Journée</span></div>

            <?php


                for($i=0; $i < count($days); $i++){

                    echo '<div class="day col-sm">';
                    foreach ($days as $day) {
                        echo '<div class="dayheader">'. $day[$ligne] .'</div>';
                    }

                    echo '<div class="weekhead" >'." semaine N°".'</div>';

                    echo '<a href="?action=Edittodo" class="over"><div class="hour">'."Fax 144 Transmission". '</div></a>';
                    echo '<a href="?action=Edittodo" class="over"><div class="hour">'."Check    Ambulance et  Communication". '</div></a>';
                    echo '<a href="?action=Edittodo" class="over"><div class="hour">'."Contrôle stupéfiants  +  Date perf. Chaudes".'</div></a>';
                    echo '<a href="?action=Edittodo" class="over"><div class="hour">'."Check bibliothèque".'</div></a>';
                    echo '<a href="?action=Edittodo" class="over"><div class="hour">'."Changer Bac chariot de nettoyage".'</div></a>';
                    echo '<a href="?action=Edittodo" class="over"><div class="hour">'."Nettoyage centrale et garage".'</div></a>';
                    echo '<a href="?action=Edittodo" class="over"><div class="hour">'."Tâches spécifique".'</div></a>';
                    echo '<a href="?action=Edittodo" class="over"><div class="hour">'."Formation".'</div></a>';
                    echo '<a href="?action=Edittodo" class="over"><div class="hour">'."Remise locaux ambulances".'</div></a>';
                    echo '</div>';
                }

            ?>



        <div class="week">
            <div class="horizontal nuitcolor"><span style="font-weight: bold">NUIT</span></div>
            <div class="day col-sm">
                <a href="" class="over">
                <div class="hour">Contrôle stupéfiants Ambulances
                        * Morphine X4
                        * Sintenyl X6
                </div>
                </a>
                <div class="hour">
                    <input type="text" class="form-control" placeholder=" Nova N°....................">
                </div>
                <a href="" class="over"><div class="hour"> Tâches spécifique </div></a>
                <a href="" class="over"><div class="hour"> Remise locaux Transmission </div></a>

            </div>
            <div class="day col-sm">
                <a href="" class="over">
                    <div class="hour">Contrôle stupéfiants Ambulances
                        * Morphine X4
                        * Sintenyl X6
                    </div>
                </a>
                <div class="hour">
                    <input type="text" class="form-control" placeholder=" Nova N°....................">
                </div>
                <a href="" class="over"><div class="hour"> Tâches spécifique </div></a>
                <a href="" class="over"><div class="hour"> Remise locaux Transmission </div></a>

            </div>
            <div class="day col-sm">
                <a href="" class="over">
                    <div class="hour">Contrôle stupéfiants Ambulances
                        * Morphine X4
                        * Sintenyl X6
                    </div>
                </a>
                <div class="hour">
                    <input type="text" class="form-control" placeholder=" Nova N°....................">
                </div>
                <a href="" class="over"><div class="hour"> Tâches spécifique </div></a>
                <a href="" class="over"><div class="hour"> Remise locaux Transmission </div></a>

            </div>
            <div class="day col-sm">
                <a href="" class="over">
                    <div class="hour">Contrôle stupéfiants Ambulances
                        * Morphine X4
                        * Sintenyl X6
                    </div>
                </a>
                <div class="hour">
                    <input type="text" class="form-control" placeholder=" Nova N°....................">
                </div>
                <a href="" class="over"><div class="hour"> Tâches spécifique </div></a>
                <a href="" class="over"><div class="hour"> Remise locaux Transmission </div></a>

            </div>
            <div class="day col-sm">
                <a href="" class="over">
                    <div class="hour">Contrôle stupéfiants Ambulances
                        * Morphine X4
                        * Sintenyl X6
                    </div>
                </a>
                <div class="hour">
                    <input type="text" class="form-control" placeholder=" Nova N°....................">
                </div>
                <a href="" class="over"><div class="hour"> Tâches spécifique </div></a>
                <a href="" class="over"><div class="hour"> Remise locaux Transmission </div></a>

            </div>
            <div class="day col-sm">
                <a href="" class="over">
                    <div class="hour">Contrôle stupéfiants Ambulances
                        * Morphine X4
                        * Sintenyl X6
                    </div>
                </a>
                <div class="hour">
                    <input type="text" class="form-control" placeholder=" Nova N°....................">
                </div>
                <a href="" class="over"><div class="hour"> Tâches spécifique </div></a>
                <a href="" class="over"><div class="hour"> Remise locaux Transmission </div></a>

            </div>
            <div class="day col-sm">
                <a href="" class="over">
                    <div class="hour">Contrôle stupéfiants Ambulances
                        * Morphine X4
                        * Sintenyl X6
                    </div>
                </a>
                <div class="hour">
                    <input type="text" class="form-control" placeholder=" Nova N°....................">
                </div>
                <a href="" class="over"><div class="hour"> Tâches spécifique </div></a>
                <a href="" class="over"><div class="hour"> Remise locaux Transmission </div></a>

            </div>
        </div>
    </div>
</div>
<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>
