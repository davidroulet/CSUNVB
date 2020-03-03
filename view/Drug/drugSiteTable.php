<?php
ob_start();
$title = "CSU-NVB - Stupéfiants";
?>
    <div class="row m-2">
        <h1>Stupéfiants</h1>
    </div>
<?php
$jourDebutSemaine = getdate2($semaine);
$novas = getnovas();
$case=0;
$date = strtotime($jourDebutSemaine); ?>
    <h2>Site de <?= $_SESSION["Selectsite"] ?> , Semaine N° <?= $semaine ?></h2>

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
            <?php foreach ($novas as $nova) {
                echo "<td>" . $nova["number"] . "</td>";
            } ?>
            <td>Pharmacie</td>
        </tr>
        <tr>
            <td>Morphine</td>
            <td></td>
            <td></td>
            <?php foreach ($novas as $nova) {
                echo "<td></td>";
            } ?>
        </tr>
        <tr>
            <td>x</td>
            <td></td>
            <td></td>
            <?php foreach ($novas as $nova) {
                echo "<td></td>";
            } ?>
        </tr>
        <tr>
            <td>Fentanyl</td>
            <td></td>
            <td></td>
            <?php foreach ($novas as $nova) {
                echo "<td></td>";
            } ?>
        </tr>
        <tr>
            <td>x</td>
            <td></td>
            <td></td>
            <?php foreach ($novas as $nova) {
                echo "<td></td>";
            } ?>
        </tr>
        <tr>
            <td>Temestra</td>
            <td></td>
            <td></td>
            <?php foreach ($novas as $nova) {
                echo "<td></td>";
            } ?>
        </tr>
        <tr>
            <td>x</td>
            <td></td>
            <td></td>
            <?php foreach ($novas as $nova) {
                echo "<td></td>";
            } ?>
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