<?php
/**
 * Auteur: David Roulet / Fabien Masson
 * Date: Aril 2020
 **/

$title = "CSU-NVB - Stupéfiants";
ob_start();
var_dump($stupSheet);
$_SESSION["stup"]=$stupSheet;
?>
<div class="row m-2">
    <h1>Stupéfiants</h1>
</div>
<h2>Site de <?= $site ?> , Semaine N° <?= $semaine ?>
    <form action="/index.php?action=LogStup" method="post">
        <button class="btn-dark" name="LogStup" ?>"
        </button>Log
    </form>

    <form action="/index.php?action=reopenStup" method="post">
        <button class="btn-dark" name="reopenStup""
        </button>Reopen
    </form>
    <form action="/index.php?action=closedStup" method="post">
        <button class="btn-dark" name="closedStup""
        </button>Close
    </form>
</h2>


<?php foreach ($jours as $jour) { // vas generé tous les jours de semaine ?>
    <table border="1" class="table table-dark">
        <tr>
            <td colspan="6" <?= (date("Y-m-d", $date) == date("Y-m-d")) ? "class='today'" : "" ?>>
                <?= ($jour . " " . date("j M Y", $date)) ?>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>Pharmacie (matin)</td>
            <?php foreach ($novas as $nova) { ?>
                <td><?= $nova["number"] ?></td>
            <?php } ?>
            <td>Pharmacie (soir)</td>
        </tr>
        <?php foreach ($drugs as $drug) { ?>
            <!-- Une ligne avec le nom du médicament et les novachecks -->
            <tr>
                <td><?= $drug["name"] ?></td>
                <td></td>
                <?php foreach ($novas as $nova) { ?>
                    <td><!--novacheck--></td>
                <?php } ?>
                <td></td>
            </tr>

            <!-- Plusieurs lignes avec les batches nom de ce médicament, les restocks et les pharmachecks -->
            <?php foreach ($batches as $batch) { ?>
                <tr>
                <form action="?action=updatePharmaCheck&batch_id=<?= $batch["id"] ?>&stupsheet_id=<?= $stupSheet["id"] ?>&date=<?= date("Y-m-d", $date) ?>"
                      method="post">
                    <td>
                        <button type="submit" class="btn-dark">  <?= $batch["number"] ?>   </button>
                    </td>
                </form>
                <td><!-- pharmacheck start --></td>
                <?php foreach ($novas as $nova) { ?>
                    <td><!--restock--></td>
                <?php } ?>
                <td><!-- pharmacheck end --></td>
            <?php } ?>
            </tr>
        <?php } ?>

        <tr>
            <td>Signature</td>
            <td colspan="5"></td>
        </tr>
    </table>
    <?php
    $date = strtotime(date("Y-m-d", $date) . " +1 day");

    ?>
<?php }
$content = ob_get_clean();
require "view/gabarit.php";

?>
