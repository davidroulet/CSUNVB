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

<div class="row m-2">

    <FORM action="/index.php?action=listShiftEnd" method="post">
        <SELECT onchange="this.form.submit()" name="site" size="1">
            <?php foreach ($Bases as $base) { ?>
            <OPTION value="<?= $base['id'] ?>" <?php if ($_SESSION["Selectsite"] == $base['id']) { ?> selected="selected"  <?php } ?>
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


    <div class="row">
        <table class="table table-bordered">
            <thead>
            <th>Date</th>
            <th>État</th>
            </thead>
            <tbody>
            <?php
            foreach ($weeks as $week) { ?>
                <tr>
                    <form action="/index.php?action=shiftend" method="post">
                        <td>
                            <button class="btn" name="semaine"
                                    value="<?= $week["date"] ?>"> <?php echo substr($week["date"],0,10) ?> </button>
                        </td>
                        <td><?= $week['state'] ?></td>
                    </form>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>








            <?php

            $content = ob_get_clean();
            require "view/gabarit.php";
            ?>
