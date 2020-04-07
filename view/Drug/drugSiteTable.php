<?php
// David Roulet - Fabien Masson
// Projet CSU-NVB A1
// Drugs Section
$title = "CSU-NVB - Stupéfiants";
ob_start();
var_dump($stupSheet);
?>
    <div class="row m-2">
        <h1>Stupéfiants</h1>
    </div>
    <h2>Site de <?= $site ?> , Semaine N° <?= $semaine ?>
        <form action="/index.php?action=LogStup" method="post">
            <button class="btn-dark" name="LogStup" value="<?= $stupSheet["id"] ?>"
            </button>Log
        </form>
    </h2>


<?php
foreach ($jours as $jour) { ?>
    <table border="1" class="table table-dark">
        <tr>
            <td colspan="6" <?php if (date("Y-m-d", $date) == date("Y-m-d")){ ?>class="today"
                <?php } ?> > <?php
                echo $jour . " " . date("j M Y", $date);
                ?></td>

        </tr>
        <tr>
            <td></td>
            <td>Pharmacie</td>
            <?php foreach ($stupSheet["nova"] as $nova) {
                echo "<td>" . $nova["number"] . "</td>";
            } ?>
            <td>Pharmacie</td>
        </tr>

        <?php foreach ($stupSheet["Drug"] as $drug) {
        $Drugname = readDrug($drug["Drug_id"]); ?>
        <tr>
            <td><?= $Drugname["name"] ?></td>
            <td></td>


            <?php foreach ($stupSheet["nova"] as $nova) { ?>
                <td>
                    <!--novachack-->

                </td>
            <?php } ?>
            <td></td>
        </tr>

        <?php

        foreach ($drug["batch_number"]["number"]["number2"] as $batch) {  //met dans $batch les numeros des batch

        ?>
        <tr>
            <form action="?action=updatePharmaCheck&batch_id=<?= $batch["id"] ?>&stupsheet_id=<?= $stupSheet["id"] ?>&date=<?= date("Y-m-d", $date) ?>"
                  method="post">
                <td>
                    <button type="submit" class="btn-dark">  <?= $batch["number"] ?>   </button>
                </td>
            </form>

            <td><?php
                foreach ($stupSheet["Drug"][$drug["Drug_id"]]["batch_number"]["number"][$batch["number"]] as $checkpharma) { //foreach des pharmacheck par batch
                    if ($checkpharma["date"] == (date("Y-m-d", $date))) { //verifie si la date correspond a celle du fichier
                        echo $checkpharma["start"];
                    }
                }

                ?></td>

            <?php foreach ($stupSheet["nova"] as $nova) { ?>
                <td>
<!--resotc-->


                    <?php

                    $nova_id=$nova["id"];
                    $batch_id=$batch["id"];
var_dump($nova_id);
var_dump($batch_id);
                    //echo $batch_id;

                    $restock = getRestocksbyBatchandNovas($batch_id,$nova_id);

                    ?>
                </td>
            <?php } ?>
            <td>

                <?php

                foreach ($stupSheet["Drug"][$drug["Drug_id"]]["batch_number"]["number"][$batch["number"]] as $checkpharma) { //foreach des pharmacheck par batch
                    if ($checkpharma["date"] == (date("Y-m-d", $date))) { //verifie si la date correspond a celle du fichier
                        echo $checkpharma["end"];
                    }
                }
                ?>
            </td>

            <?php }
            } ?>

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