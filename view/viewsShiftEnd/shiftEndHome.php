<?php
/**
 * Auteur: Thomas Grossmann / Mounir Fiaux
 * Date: Mars 2020
 **/

ob_start();
$title = "CSU-NVB - Remise de garde";
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/ShiftEnd.css">

</head>
<body>
<div class="container-fluid">
    <div class="row">
        <h1>Remises de garde</h1>
    </div>
    <div class="container-fluid row">
        <h4><?php for($Title = 0; $Title < $Titles[1]['id']; $Title++) {?></h4>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th width="30%"></th>
                <th width="13%">Jour</th>
                <th width="13%">Nuit</th>
                <th width="40%">Remarque</th>
                <th width="4%">Validé</th>
            </tr>
            </thead>
            <tbody>
            <?php for($line = 0; $line < $TitlesLines[3]['id']; $line++) { ?>
            <tr>
                <td>
                    <div><?= $CentralLines[$line]['text'] ?></div>
                </td>
                <td data-line="<?= $line ?>" data-type="J"></td>
                <td data-line="<?= $line ?>" data-type="N"></td>
                <td>
                    <textarea style="resize: none" id="txt_Area_Rad" cols="100%" rows="4"></textarea></td>
                <td id="td_Rad_Val"><span id="span_Rad_Val_OK" class="glyphicon hidden">O</span>
                    <span id="span_Rad_Val_NO" class="glyphicon glyphicon-ok visible">X</span></td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
        <?php } ?>
    </div>

                    <span id="span_Dim_Fiche_Stups_Val_Ok" class="glyphicon hidden">O</span>
                    <span id="span_Dim_Fiche_Stups_Val_NO" class="glyphicon glyphicon-ok visible">X</span>

</div>
</body>
<script src="../../js/shiftEnd.js"></script>
</html>
<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>
