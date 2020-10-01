<?php
/**
 * Auteur: Thomas Grossmann / Mounir Fiaux
 * Date: Mars 2020
 **/

ob_start();
$title = "CSU-NVB - Remise de garde";
?>
    <div class="row m-2">
        <h1>Remise de garde</h1>
    </div>

    <h2>Site de <?= $site ?> , Semaine <?php echo substr($semaine, 0, 10) ?>

    <br>
    <table class="table table-bordered  table-striped" style="text-align: center">
        <thead class="thead-dark">
        <th>Date</th>
        <th>État</th>
        <th>Véhicule</th>
        <th>Résponsable</th>
        <th>Équipage</th>
        <th>Base</th>
        </thead>
        <?php foreach($guardsheets as $guardsheet){?>


        <tr>
            <td><?= $guardsheet['date'] ?></td>
            <td><?php if ($guardsheet['state'] == 'open') { ?>
                    <?= "Ouvert " ?>
                <?php }  if($guardsheet['state'] == 'reopen') { ?>
                    <?= "Réouverte " ?>
                <?php }
                else  { ?>
                <?= "Férmée " ?>
                <?php } ?></td>
            <td>Jour : <?= $novaday['number'] ?><br>Nuit : <?= $novanight['number'] ?></td>
            <td>Jour : <?= $dayBoss['initials'] ?><br>Nuit : <?= $nightBoss['initials'] ?></td>
            <td>Jour : <?= $dayTeam['initials'] ?><br>Nuit : <?= $nightTeam['initials'] ?></td>
            <td><?= $baseinfo['name'] ?></td>
        </tr>
        <?php } ?>
    </table>


<?= $baseinfo['name'] ?>

<?php
/*var_dump($guardsheetinfo);*/
foreach ($guardsections as $guardsection) { ?>
    <table class="table table-active table-bordered table-striped " style="text-align: center">
        <tr class="table-primary text-secondary ">
            <td class="font-weight-bold "><?= $guardsection['title']; ?></td>
            <td class="font-weight-bold">JOUR</td>
            <td class="font-weight-bold">NUIT</td>
            <td><span class="font-weight-bold">REMARQUE</span>(APPAREIL MANQUANT, ÉTAT DE CHARGE,
                DEFECTUOSITÉS)
            </td>
        </tr>
        <?php foreach ($guardlines as $guardline) {
            if ($guardsection['id'] == $guardline['guard_sections_id']) {
                ?>

                <tr>
                    <td><?= $guardline['text'] ?></td>
                    <td></td>
                    <td></td>
                    <td><textarea cols=100% rows="1"></textarea></td>
                </tr>
                <?php
            }
        }
        ?>
    </table>

    <?php /*    foreach ($guardsheets as $guardsheet) {
        if ($guardsheet['id'] == $sheetid) {
            ?>
            <h2><?=$guardsheet['date']?></h2>
            <br>

            <?php
        }
    } */
}
?>
    <a href="ExportPDF" class='btn btn-primary m-1 '>Format PDF</a>
    <?php if($admin['admin'] == 1){?>
    <a href="?action=NewGuardSheet" class='btn btn-primary m-1 '>Nouvelle Feuille</a>
    <?php }?>
<?php

$content = ob_get_clean();
require "view/gabarit.php";
?>