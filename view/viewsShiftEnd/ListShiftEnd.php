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
<?php if($admin['admin'] == 1){?>
    <a href="?action=NewGuardSheet" class='btn btn-primary m-1 '>Nouvelle Feuille</a>
<?php }?>

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
        <th>Responsable</th>
        <th>Équipage</th>

        <?php if($admin['admin'] == 1){?>
        <th>Action</th><?php } ?>
        </thead>
    <?php  ?>
        <?php foreach($guardsheets as $guardsheet) { ?>



            <tr>
                <td><?= substr($guardsheet['date'],0,10) ?></td>
                <td><?php if ($guardsheet['state'] == 'open') { ?>
                        <?= "Ouvert " ?>
                    <?php }  if($guardsheet['state'] == 'reopen') { ?>
                        <?= "Réouverte " ?>
                    <?php }
                    if($guardsheet['state']== 'closed') { ?>
                        <?= "Férmée " ?>
                    <?php } ?></td>
                <td>Jour : <?= $guardsheet['novaDay'] ?><br>Nuit : <?= $guardsheet['novaNight'] ?></td>
                <td>Jour :<?= $guardsheet['bossDay']?><br>Nuit :<?= $guardsheet['bossNight']?> </td>
                <td>Jour : <?= $guardsheet['teammateDay']?><br>Nuit : <?= $guardsheet['teammateNight']?></td>


                    <?php if($admin['admin'] == 1){ ?>
            <?php if($guardsheet['state'] == 'closed' ) { ?><td><form action="/index.php?action=reopenShift" method="post">
                <button class="btn btn-primary btn-sm" name="reopen" value="<?= $guardsheet['id'] ?>"
                </button>Reopen
            </form> <?php }  if ($guardsheet['state'] == 'open' || $guardsheet['state'] == 'reopen') { ?>
                <form action="/index.php?action=closedShift" method="post">
                    <button class="btn btn-primary btn-sm" name="close" value="<?= $guardsheet['id'] ?>"
                    </button>Close
                </form></td><?php } } ?>
            </tr>
        <?php  } ?>
    </table>


    <?= $baseinfo['name'] ?>

    <?php
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




    <?php

    $content = ob_get_clean();
    require "view/gabarit.php";
    ?>
