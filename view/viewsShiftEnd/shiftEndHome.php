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
            <?php for($line = 0; $line < $TitlesLines[1]['id']; $line++) { ?>
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
    <br><br>
    <div class="container-fluid row">
        <h4><?= $Titles[1]['title'] ?></h4>
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
            <tr>
                <td>
                    <div><?= $Lines[5]['text'] ?></div>
                </td>
                <td id="td_Ess_J"><input type="checkbox" id="chk_Ess_J"
                                         class="hidden"></td>
                <td id="td_Ess_N"><input type="checkbox" id="chk_Ess_N"
                                         class="hidden"></td>
                <td><textarea style="resize: none" id="txt_Area_Ess" cols="100%" rows="4"></textarea></td>
                <td id="td_Ess_Val"><span id="span_Ess_Val_Ok" class="glyphicon hidden">O</span><span
                            id="span_Ess_Val_NO" class="glyphicon glyphicon-ok visible">X</span></td>
            </tr>
            <tr>
                <td>
                    <div><?= $Lines[6]['text'] ?></div>
                </td>
                <td id="td_Operation_CO_J"><input type="checkbox" id="chk_Operation_CO_J"
                                                  class="hidden"></td>
                <td id="td_Operation_CO_N"><input type="checkbox" id="chk_Operation_CO_N"
                                                  class="hidden"></td>
                <td><textarea style="resize: none" id="txt_Area_Operation_Co" cols="100%" rows="4"></textarea></td>
                <td id="td_Operation_CO_Val">
                    <span id="span_Operation_CO_Val_Ok" class="glyphicon hidden">O</span>
                    <span id="span_Operation_CO_Val_NO" class="glyphicon glyphicon-ok visible">X</span>
                </td>
            </tr>
            <tr>
                <td>
                    <div><?= $Lines[7]['text'] ?></div>
                </td>
                <td id="td_Rdv_G_J"><input type="checkbox" id="chk_Rdv_G_J"
                                           class="hidden"></td>
                <td id="td_Rdv_G_N"><input type="checkbox" id="chk_Rdv_G_N"
                                           class="hidden"></td>
                <td><textarea style="resize: none" id="txt_Area_Rdv_G" cols="100%" rows="4"></textarea></td>
                <td id="td_Rdv_G_Val">
                    <span id="span_Rdv_G_Val_Ok" class="glyphicon hidden">O</span>
                    <span id="span_Rdv_G_Val_NO" class="glyphicon glyphicon-ok visible">X</span>
                </td>
            </tr>
            <tr>
                <td>
                    <div><?= $Lines[8]['text'] ?></div>
                </td>
                <td id="td_GT_Vhc_J"><input type="checkbox" id="chk_GT_Vhc_J"
                                            class="hidden"></td>
                <td id="td_GT_Vhc_N"><input type="checkbox" id="chk_GT_Vhc_N"
                                            class="hidden"></td>
                <td><textarea style="resize: none" id="txt_Area_GT_Vhc" cols="100%" rows="4"></textarea></td>
                <td id="td_GT_Vhc_Val"><span id="span_GT_Vhc_Val_Ok" class="glyphicon hidden">O</span><span
                            id="span_GT_Vhc_Val_NO" class="glyphicon glyphicon-ok visible">X</span></td>
            </tr>
            <tr>
                <td>
                    <div><?= $Lines[9]['text'] ?></div>
                </td>
                <td id="td_50chf_J"><input type="checkbox" id="chk_50chf_J"
                                           class="hidden"></td>
                <td id="td_50chf_N"><input type="checkbox" id="chk_50chf_N"
                                           class="hidden"></td>
                <td><textarea style="resize: none" id="txt_Area_50chf" cols="100%" rows="4"></textarea></td>
                <td id="td_50chf_Val"><span id="span_50chf_Val_Ok" class="glyphicon hidden">O</span>
                    <span id="span_50chf_Val_NO" class="glyphicon glyphicon-ok visible">X</span></td>
            </tr>

            <tr>
                <td>
                    <div><?= $Lines[10]['text'] ?></div>
                </td>
                <td id="td_PIHV_J"><input type="checkbox" id="chk_PIHV_J"
                                          class="hidden"></td>
                <td id="td_PIHV_N"><input type="checkbox" id="chk_PIHV_N"
                                          class="hidden"></td>
                <td><textarea style="resize: none" id="txt_Area_PIHV" cols="100%" rows="4"></textarea></td>
                <td id="td_PIHV_Val"><span id="span_PIHV_Val_Ok" class="glyphicon hidden">O</span>
                    <span id="span_PIHV_Val_NO" class="glyphicon glyphicon-ok visible">X</span></td>
            </tr>

            </tbody>
        </table>
    </div>
    <br><br>
    <div class="container-fluid row">
        <h4><?= $Titles[2]['title'] ?></h4>
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
            <tr>
                <td>
                    <div><?= $Lines[11]['text'] ?></div>
                </td>
                <td id="td_Info_Traf_J"><input type="checkbox" id="chk_Info_Traf_J"
                                               class="hidden"></td>
                <td id="td_Info_Traf_N"><input type="checkbox" id="chk_Info_Traf_N"
                                               class="hidden"></td>
                <td><textarea style="resize: none" id="txt_Area_Info_Traf" cols="100%" rows="4"></textarea></td>
                <td id="td_Info_Traf_Val"><span id="span_Info_Traf_Val_Ok" class="glyphicon hidden">O</span><span
                            id="span_Info_Traf_Val_NO" class="glyphicon glyphicon-ok visible">X</span></td>
            </tr>
            <tr>
                <td>
                    <div><?= $Lines[12]['text'] ?></div>
                </td>
                <td id="td_Report_Info_Traf_J"><input type="checkbox" id="chk_Report_Info_Traf_J"
                                                      class="hidden"></td>
                <td id="td_Report_Info_Traf_N"><input type="checkbox" id="chk_Report_Info_Traf_N"
                                                      class="hidden"></td>
                <td><textarea style="resize: none" id="txt_Area_Operation_Co" cols="100%" rows="4"></textarea></td>
                <td id="td_Report_Info_Traf_Val">
                    <span id="span_Report_Info_Traf_Val_Ok" class="glyphicon hidden">O</span>
                    <span id="span_Report_Info_Traf_Val_NO" class="glyphicon glyphicon-ok visible">X</span>
                </td>
            </tr>
            <tr>
                <td>
                    <div><?= $Lines[13]['text'] ?></div>
                </td>
                <td id="td_Acc_Stage_J"><input type="checkbox" id="chk_Acc_Stage_J"
                                               class="hidden"></td>
                <td id="td_Acc_Stage_N"><input type="checkbox" id="chk_Acc_Stage_N"
                                               class="hidden"></td>
                <td><textarea style="resize: none" id="txt_Area_Acc_Stage" cols="100%" rows="4"></textarea></td>
                <td id="td_Acc_Stage_Val">
                    <span id="span_Acc_Stage_Val_Ok" class="glyphicon hidden">O</span>
                    <span id="span_Acc_Stage_Val_NO" class="glyphicon glyphicon-ok visible">X</span>
                </td>
            </tr>
            <tr>
                <td>
                    <div><?= $Lines[14]['text'] ?></div>
                </td>
                <td id="td_Lect_Journal_J"><input type="checkbox" id="chk_Lect_Journal_J"
                                                  class="hidden"></td>
                <td id="td_Lect_Journal_N"><input type="checkbox" id="chk_Lect_Journal_N"
                                                  class="hidden"></td>
                <td><textarea style="resize: none" id="txt_Area_Lect_Journal" cols="100%" rows="4"></textarea></td>
                <td id="td_Lect_Journal_Val"><span id="span_Lect_Journal_Val_Ok" class="glyphicon hidden">O</span><span
                            id="span_Lect_Journal_Val_NO" class="glyphicon glyphicon-ok visible">X</span></td>
            </tr>
            <tr>
                <td>
                    <div><?= $Lines[15]['text'] ?></div>
                </td>
                <td id="td_Pb_Resp_GT_J"><input type="checkbox" id="chk_Pb_Resp_GT_J"
                                                class="hidden"></td>
                <td id="td_Pb_Resp_GT_N"><input type="checkbox" id="chk_Pb_Resp_GT_N"
                                                class="hidden"></td>
                <td><textarea style="resize: none" id="txt_Area_Pb_Resp_GT" cols="100%" rows="4"></textarea></td>
                <td id="td_Pb_Resp_GT_Val"><span id="span_Pb_Resp_GT_Val_Ok" class="glyphicon hidden">O</span>
                    <span id="span_Pb_Resp_GT_Val_NO" class="glyphicon glyphicon-ok visible">X</span></td>
            </tr>

            </tbody>
        </table>
    </div>
    <br><br>
    <div class="container-fluid row">
        <h4><?= $Titles[3]['title'] ?></h4>
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
            <tr>
                <td>
                    <div><?= $Lines[16]['text'] ?></div>
                </td>
                <td id="td_Central_Propre_J"><input type="checkbox" id="chk_Central_Propre_J"
                                                    class="hidden"></td>
                <td id="td_Central_Propre_N"><input type="checkbox" id="chk_Central_Propre_N"
                                                    class="hidden"></td>
                <td><textarea style="resize: none" id="txt_Area_Central_Propre" cols="100%" rows="4"></textarea></td>
                <td id="td_Central_Propre_Val"><span id="span_Central_Propre_Val_Ok"
                                                     class="glyphicon hidden">O</span><span
                            id="span_Central_Propre_Val_NO" class="glyphicon glyphicon-ok visible">X</span></td>
            </tr>
            <tr>
                <td>
                    <div><?= $Lines[17]['text'] ?></div>
                </td>
                <td id="td_Tache_J_Eff_J"><input type="checkbox" id="chk_Tache_J_Eff_J"
                                                 class="hidden"></td>
                <td id="td_Tache_J_Eff_N"><input type="checkbox" id="chk_Tache_J_Eff_N"
                                                 class="hidden"></td>
                <td><textarea style="resize: none" id="txt_Area_Operation_Co" cols="100%" rows="4"></textarea></td>
                <td id="td_Tache_J_Eff_Val">
                    <span id="span_Tache_J_Eff_Val_Ok" class="glyphicon hidden">O</span>
                    <span id="span_Tache_J_Eff_Val_NO" class="glyphicon glyphicon-ok visible">X</span>
                </td>
            </tr>
            <tr>
                <td>
                    <div><?= $Lines[18]['text'] ?></div>
                </td>
                <td id="td_Dim_Fiche_Stups_J"><input type="checkbox" id="chk_Dim_Fiche_Stups_J"
                                                     class="hidden"></td>
                <td id="td_Dim_Fiche_Stups_N"><input type="checkbox" id="chk_Dim_Fiche_Stups_N"
                                                     class="hidden"></td>
                <td><textarea style="resize: none" id="txt_Area_Dim_Fiche_Stups" cols="100%" rows="4"></textarea></td>
                <td id="td_Dim_Fiche_Stups_Val">
                    <span id="span_Dim_Fiche_Stups_Val_Ok" class="glyphicon hidden">O</span>
                    <span id="span_Dim_Fiche_Stups_Val_NO" class="glyphicon glyphicon-ok visible">X</span>
                </td>
            </tr>

            </tbody>
        </table>
    </div>

</div>
</body>
<script src="../../js/shiftEnd.js"></script>
</html>
<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>
