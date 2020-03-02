<?php
ob_start();
$title = "CSU-NVB - Stupéfiants";
?>
    <div class="row m-2">
        <h1>Stupéfiants</h1>
    </div>
<?php
$anneeChoix=2000+substr ($semaine,0,2);

$semChoix=substr ($semaine,2,2);

$timeStampPremierJanvier = strtotime($anneeChoix . '-01-01');
$jourPremierJanvier = date('w', $timeStampPremierJanvier);

//-- recherche du N° de semaine du 1er janvier -------------------
$numSemainePremierJanvier = date('W', $timeStampPremierJanvier);

//-- nombre à ajouter en fonction du numéro précédent ------------
$decallage = ($numSemainePremierJanvier == 1) ? $semChoix - 1 : $semChoix;
//-- timestamp du jour dans la semaine recherchée ----------------
$timeStampDate = strtotime('+' . $decallage . ' weeks', $timeStampPremierJanvier);
//-- recherche du lundi de la semaine en fonction de la ligne précédente ---------
$jourDebutSemaine = ($jourPremierJanvier == 1) ? date('d-m-Y', $timeStampDate) : date('d-m-Y', strtotime('last monday', $timeStampDate));
$jourFinSemaine = ($jourPremierJanvier == 1) ? date('d-m-Y', $timeStampDate) : date('d-m-Y',strtotime('next sunday', $timeStampDate));

echo "Le premier jour de la semaine N° $semChoix est  le $jourDebutSemaine<br>";

$date = strtotime($jourDebutSemaine); ?>
    <h2>Site de <?= $_SESSION["Selectsite"] ?> , Semaine N° <?= $semaine ?></h2>

<?php
$jours = array("Lundi", "Mardi", "Mercredi", "Jeudi", "vendredi", "samedi", "dimanche");

foreach ($jours as $jour) { ?>
    <table border="1" class="table table-dark">
        <tr>
            <td colspan="6" <?php if (date("Y-m-d", $date) == date("Y-m-d")){ ?>class="today"
            <?php } ?> > <?php
            echo $jour . " " . date("Y-m-d", $date) ?></td>
            <?php
            $date = strtotime(date("Y-m-d", $date) . " +1 day");
            ?>
        </tr>
        <tr>
            <td></td>
            <td>Pharmacie</td>
            <td>75</td>
            <td>76</td>
            <td>77</td>
            <td>Pharmacie</td>
        </tr>
        <tr>
            <td>Morphine N°</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>x</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Fentanyl N°</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>x</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Temestra</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>x</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Signature</td>
            <td colspan="5"></td>

        </tr>
    </table>
<?php } ?>

<?php
$content = ob_get_clean();
require "view/gabarit.php";

?>