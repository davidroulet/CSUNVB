<?php
ob_start();
$title = "CSU-NVB - Stupéfiants";
$site = "Payerne";
?>
    <div class="row m-2">
        <h1>Stupéfiants</h1>
    </div>
<?php
$site="Payerne";
$semaine="50";
$date="10.02.20"; ?>
<h2>Site de <?= $site ?> , Semaine N° <?= $semaine ?></h2>

<?php
$jours = array("Lundi", "Mardi", "Mercredi", "Jeudi", "vendredi", "samedi", "dimanche");

foreach ($jours as $jour) { ?>
<table border="1" class="table table-dark">
    <tr>
        <td colspan="5"><?= $jour." ".$date?></td>

    </tr>
    <tr>
        <td></td>
        <td>Pharmacie</td>
        <td>75</td>
        <td>76</td>
        <td>77</td>
    </tr>
    <tr>
        <td>Morphine N°</td>
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
        <td>Fentanyl N°</td>
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
        <td>Temestra</td>
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
        <td colspan="4"></td>

    </tr>
</table>
    <?php } ?>

<?php
$content = ob_get_clean();
require "view/gabarit.php";

?>