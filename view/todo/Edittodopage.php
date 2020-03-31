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

$things = json_decode(file_get_contents("model/dataStorage/todothings.json"), true);

?>


<h1 class="center p-4"><?= $title ?></h1>

<div class="container ">
    <div class="week">
        <div class="week">
            <?php
            for ($ligne = 0; $ligne < count($days); $ligne++) {
                echo "<div class=\"day col-sm\">";
                echo "<div class=\"dayheader\">" . $days[$ligne] . "</div>";
                echo " <div class=\"weekhead\" >semaine N°</div>";
                echo "</div>";
            }
            ?>
            <div class="week">
                <div class="day col-lg">
                    <div class="nuitcolor hour">Journée</div>
                </div>
                <div class="week">

                    <?php
                    // TODO afficher todothings


                        foreach ($things as $thing) {
                            ?>


                            <div class="day col-sm">
                                <a href="?action=Edittodo&<?=$thing['id'] ?> " class="over">
                                    <div class="hour"><?= $thing['description'] ?> </div>
                                </a>


                            </div>


                        <?php }
                     ?>


                    <div class="week">
                        <div class="day col-lg">
                            <div class="nuitcolor hour">NUIT</div>
                        </div>
                        <div class="week">
                            <?php
                            for ($i = 0; $i < count($days); $i++) {
                                echo "<div class=\"day col-sm\">";
                                echo "<a href=\"\" class=\"over\"> <div class=\"hour\">Contrôle stupéfiants Ambulances * Morphine X4 * Sintenyl X6 </div></a>";
                                echo "<div class=\"hour\"> <input type=\"text\" class=\"form-control\" placeholder=\" Nova N°....................\"> </div>";
                                echo "<a href=\"\" class=\"over\"><div class=\"hour\"> Tâches spécifique</div></a>";
                                echo "<a href=\"\" class=\"over\"><div class=\"hour\"> Remise locaux Transmission</div></a>";
                                echo "</div>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>
