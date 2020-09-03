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
    <h1>Remises de garde</h1>

    <FORM action="/index.php?action=listShiftEnd" method="post">
        <SELECT onchange="this.form.submit()" name="site" size="1">
            <?php foreach ($Bases as $base) { ?>
            <OPTION value="<?= $base['id'] ?>" <?php if ($_SESSION["Selectsite"] == $base['id']) { ?> selected="selected"  <?php } ?>
                    name="site"><?= $base['name'] ?>
                <?php } ?>
        </SELECT>
    </FORM>

    <div class="row">
        <table class="table table-bordered">
            <thead>
            <th>Date</th>
            <th>État</th>
            </thead>
            <tbody>

            <?php foreach ($weeks as $week) { ?>
                <tr>
                    <form action="/index.php?action=listShiftEnd" method="post">
                        <td>
                            <button class="btn" name="semaine"
                                    value="<?= var_dump($week) ?>"> <?php echo "Semaine " . $week["week"] ?> </button>
                        </td>
                        <td><?= $week['state'] ?></td>
                    </form>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>


            <table class="table table-bordered  table-striped" style="text-align: center">
                <thead class="thead-dark">
                <th>Date</th>
                <th>État</th>
                <th>Véhicule</th>
                <th>Résponsable</th>
                <th>Équipage</th>
                <th></th>
                </thead>
                <?php

                foreach ($guardsheets as $guardsheet) {


                    ?>

                    <tr>
                        <td><?= $guardsheet['date']; ?><a href="index.php?action=shiftend"><?= $remise['date'] ?></a></td>
                        <?php if ($guardsheet['state'] == "open") { ?>
                            <td class="table-success">
                                <?= "ouvert" ?></td>
                            <?php
                        } else {
                            ?>
                            <td class="table-danger"><?= 'fermé' ?></td><?php
                        } ?>

                        <td>
                            <?= var_dump($novaday['number']) ?>
                            Jour : <?= $guardsheet['novaday'] ?><br>
                            Nuit : <?= $guardsheet['novanight'] ?><br>

                        </td>
                        <td>
                            <?php foreach ($crews as $crew) {
                                if ($guardsheet['id'] == $crew['guardsheet_id']) {
                                    foreach ($users as $user) {
                                        if ($crew['user_id'] == $user['id'] && ($crew['boss'] == 1 && $crew['day'] == 1)) {//affiche le responsable Jour/Nuit
                                            ?><span class="font-weight-bold">Jour : </span><?= $user['initials'] ?>
                                            <br><?php
                                        } else if ($crew['user_id'] == $user['id'] && ($crew['boss'] == 1 && $crew['day'] == 0)) {
                                            ?> <span
                                                    class="font-weight-bold"> Nuit : </span><?= $user['initials'] ?><?php
                                        }
                                    }
                                }
                            } ?>
                        </td>
                        <td>
                            <?php foreach ($crews as $crew) {
                                if ($guardsheet['id'] == $crew['guardsheet_id']) {
                                    foreach ($users as $user) {
                                        if ($crew['user_id'] == $user['id'] && ($crew['boss'] == 0 && $crew['day'] == 1)) {//affiche le responsable Jour/Nuit
                                            ?><span class="font-weight-bold">Jour : </span><?= $user['initials'] ?>
                                            <br><?php
                                        } else if ($crew['user_id'] == $user['id'] && ($crew['boss'] == 0 && $crew['day'] == 0)) {
                                            ?> <span
                                                    class="font-weight-bold"> Nuit : </span><?= $user['initials'] ?><?php
                                        }
                                    }
                                }
                            } ?>
                        </td>
                        <td><a href='?action=shiftEndList&sheetid=<?= $guardsheet['id']; ?>'
                               class='btn btn-primary m-1 '
                               style='bt-align: center'>Vue détaillée</a>
                        </td>
                    </tr>


                    <?php

                } ?>

            </table>


            <?php

            $content = ob_get_clean();
            require "view/gabarit.php";
            ?>
