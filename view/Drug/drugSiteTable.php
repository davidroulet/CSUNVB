<?php
// David Roulet - Fabien Masson
// Projet CSU-NVB A1
// Drugs Section

ob_start();
$title = "CSU-NVB - Stupéfiants";
?>
    <div class="row m-2">
        <h1>Stupéfiants</h1>
    </div>
<?php
$jourDebutSemaine = getdate2($semaine); // recupere les jours de la semiane en fonction de la date selectioné
$novas = getnovas(); // Obient la liste des ambulance
$drugs = getDrugs(); // Obient la list des Drugs
//$stupSheet=readSheet(2);
$stupSheet=GetSheetbyWeek($semaine,$_SESSION["Selectsite"]);
$date = strtotime($jourDebutSemaine);
$site=getbasebyid($_SESSION["Selectsite"])["name"]
?>
    <h2>Site de <?= $site?> , Semaine N° <?= $semaine ?></h2>

<?php
$jours = array("Lundi", "Mardi", "Mercredi", "Jeudi", "vendredi", "samedi", "dimanche");

foreach ($jours as $jour) { ?>
    <table border="1" class="table table-dark">
        <tr>
            <td colspan="6" <?php if (date("Y-m-d", $date) == date("Y-m-d")){ ?>class="today"
                <?php } ?> > <?php
                echo $jour . " " . date("j M Y", $date) ?></td>
            <?php
            $date = strtotime(date("Y-m-d", $date) . " +1 day");
            ?>
        </tr>
        <tr>
            <td></td>
            <td>Pharmacie</td>
            <?php foreach ($stupSheet["nova"] as $nova) {
                echo "<td>" . $nova . "</td>";
            } ?>
            <td>Pharmacie</td>
        </tr>


        <?php foreach ($drugs as $drug) { ?>
            <tr>
                <td><?= $drug["name"] ?></td>
                <td></td>
                <td></td>

                <?php foreach ($stupSheet["nova"] as $nova) {;
                    echo "<td></td>";
                } ?>
            </tr>
            <?php foreach ($drug["batches"] as $batch) {
                echo "<tr>";
                echo "<td>" . $batch . "</td>"; ?>
                <td></td>
                <td></td>
                <?php foreach ($stupSheet["nova"] as $nova) {
                    echo "<td></td>";
                }
                echo "</tr>";
            } ?>
        <?php } ?>


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