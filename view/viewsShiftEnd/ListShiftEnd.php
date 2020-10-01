<?php
/**
 * Auteur: Thomas Grossmann / Mounir Fiaux
 * Date: Mars 2020
 **/


ob_start();
$title = "CSU-NVB - Remise de garde";


?>
<script src="js/shiftEnd.js"></script>
<div class="row m-2">
    <h1>Remise de Garde</h1>
</div>


    <FORM action="/index.php?action=listShiftEnd" method="post">
        <SELECT onchange="this.form.submit()" name="site" size="1">
            <?php foreach ($Bases as $base) { ?>
            <OPTION value="<?= $base['id'] ?>" <?php if ($_SESSION["Selectsite"] == $base['id']) { ?>
                selected="selected"
            <?php } ?>
                    name="site"><?= $base['name'] ?>
                <?php } ?>
        </SELECT>
    </FORM>
    <div class="row m-2">
        <?php
        foreach ($list as $item) {
            if ($item["base_id"] == $_SESSION["Selectsite"]) {
                $weeks[] = $item;

            }
        } ?>
    </div>


<table class="table table-bordered  table-striped" style="text-align: center">
        <thead class="thead-dark">
        <th>Date</th>
        <th>État</th>
        <th>Véhicule</th>
        <th>Résponsable</th>
        <th>Équipage</th>
        <th>Base</th>
        </thead>
    <?php  ?>
        <?php foreach($guardsheets as $guardsheet){
        if ($_SESSION["Selectsite"] == $guardsheet['base_id']) { ?>


            <tr>
                <td><?= substr($guardsheet['date'],0,10) ?></td>
                <td><?php if ($guardsheet['state'] == 'open') { ?>
                        <?= "Ouvert " ?>
                    <?php } else { ?>
                        <?= "Fermé " ?>
                    <?php } ?></td>
                <td>Jour : <?= $novaday['number'] ?><br>Nuit : <?= $novanight['number'] ?></td>
                <td>Jour : <?= $dayBoss['initials'] ?><br>Nuit : <?= $nightBoss['initials'] ?></td>
                <td>Jour : <?= $dayTeam['initials'] ?><br>Nuit : <?= $nightTeam['initials'] ?></td>
                <td><?= $guardsheet['base_id'] ?></td>
            </tr>
        <?php  }}?>
    </table>


    <?= $baseinfo['name'] ?>

    <?php
    var_dump($guardsections);
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
