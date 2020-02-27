<?php
ob_start();
$title = "CSU-NVB - Stupéfiants";
?>
    <div class="row m-2">
        <h1>Stupéfiants</h1>
    </div>
<?php
//
$date = strtotime("2020-02-24"); ?>
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