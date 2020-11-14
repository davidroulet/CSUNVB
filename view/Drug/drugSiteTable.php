<?php
/**
 * Auteur: David Roulet / Fabien Masson
 * Date: Aril 2020
 **/

$title = "CSU-NVB - Stupéfiants";
ob_start();
?>
<div class="row m-2">
    <h1>Stupéfiants</h1>
</div>
<h2>Site de <?= $site ?> , Semaine N° <?= $semaine ?></h2>
<?php if ($_SESSION['username']['admin'] == 1) { if (($stupSheet['state'] == 'open')||($stupSheet['state'] == 'reopen')) { ?>
    <a href="?action=closeStupFromTable&stupBaseId=<?php echo $stupSheet['base_id'] ?>&stupPageWeek=<?php echo $stupSheet['week'] ?>" class="btn btn-primary">Clore</a>
<?php } else { ?>
    <a href="?action=activateStupFromTable&stupBaseId=<?php echo $stupSheet['base_id'] ?>&stupPageWeek=<?php echo $stupSheet['week'] ?>" class="btn btn-primary">Activer</a>
<?php } } ?>

<?php foreach ($jours as $jour) { // vas generé tous les jours de semaine ?>
    <table border="1" class="table table-bordered">
        <thead class="thead-dark">
        <tr>
            <th colspan="6" <?= (date("Y-m-d", $date) == date("Y-m-d")) ? "class='today'" : "" ?>>
                <?= ($jour . " " . date("j M Y", $date)) ?>
            </th>
        </tr>
        <tr>
            <th></th>
            <th>Pharmacie (matin)</th>
            <?php foreach ($novas as $nova) { ?>
                <th><?= $nova["number"] ?></th>
            <?php } ?>
            <th>Pharmacie (soir)</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($drugs as $drug) { ?>
            <tr>
                <td class="font-weight-bold"><?= $drug["name"] ?></td>
                <td></td>
                <?php foreach ($novas as $nova) { ?>
                    <td class="text-center">
                        <?= getnovacheckbydateandbybatch(date("Y-m-d", $date), $drug['id'], $nova['id'], $stupSheetId)['start'] ?> /
                        <?= getnovacheckbydateandbybatch(date("Y-m-d", $date), $drug['id'], $nova['id'], $stupSheetId)['end'] ?>
                    </td>
                <?php } ?>
                <td></td>
            </tr>
            <!-- Plusieurs lignes avec les batches nom de ce médicament, les restocks et les pharmachecks -->
            <?php foreach ($batchesByDrugId[$drug["id"]] as $batch) { ?>
                <?php $pharmacheck = getpharmacheckbydateandbybatch(date("Y-m-d", $date),$batch['batch_id'],$stupSheetId) ?>
                <tr>
                <td class="text-right"><?= $batch['number'] ?></td>
                <td class="text-center"><?= $pharmacheck['start'] ?></td>
                <?php foreach ($novas as $nova) { ?>
                    <td class="text-center"><?= getrestockbydateandbydrug(date("Y-m-d", $date),$batch['batch_id'],$nova['id'])['quantity'] ?></td>
                <?php } ?>
                <td class="text-center"><?= $pharmacheck['end'] ?></td>
            <?php } ?>
            </tr>
        <?php } ?>

        <tr>
            <td>Signature</td>
            <td colspan="5"></td>
        </tr>
        </tbody>
    </table>
    <?php
    $date = strtotime(date("Y-m-d", $date) . " +1 day");

    ?>
<?php }
$content = ob_get_clean();
require "view/gabarit.php";

?>
