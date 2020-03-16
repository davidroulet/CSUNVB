<?php
/**
 * Auteur: Thomas Grossmann / Mounir Fiaux
 * Date: Mars 2020
 **/

ob_start();
$title = "CSU-NVB - Remise de garde";
$Titles = getSectionsTitles();
$Lines = getGuardLines();
?><head>
    <script src="js/shiftEnd.js"></script>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <h1>Remises de garde</h1>
    </div>

    <div class="container-fluid row">
        <h4><?=$Titles[0]['title']?></h4>
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
                    <div id="lbl_Rad"><?=$Lines[0]['text']?></div>
                </td>
                <td id="td_Rad_J" ><input type="checkbox" id="chk_Rad_J"
                                                                  style="visibility: hidden"></td>
                <td id="td_Rad_N" ><input type="checkbox" id="chk_Rad_N"
                                                                  style="visibility: hidden"></td>
                <td><textarea style="resize: none" id="TXT_Area_Rad" cols="100%" rows="4"></textarea></td>
                <td id="td_Rad_Val"><span id="span_Rad_Val_Ok" class="glyphicon glyphicon-ok" style="visibility: hidden">O</span><span
                            id="span_Rad_Val_NO" class="glyphicon glyphicon-ok">X</span></td>
            </tr>
            <tr>
                <td>
                    <div id="lbl_Det_CO"><?=$Lines[1]['text']?></div>
                </td>
                <td id="td_Det_CO_J" ><input type="checkbox" id="chk_Det_CO_J"
                                                                        style="visibility: hidden"></td>
                <td id="td_Det_CO_N" ><input type="checkbox" id="chk_Det_CO_N"
                                                                        style="visibility: hidden"></td>
                <td><textarea style="resize: none" id="TXT_Area_Det_Co" cols="100%" rows="4"></textarea></td>
                <td id="td_Det_CO_Val">
                    <span id="span_Det_CO_Val_Ok" class="glyphicon glyphicon-ok" style="visibility: hidden">O</span>
                    <span id="span_Det_CO_Val_NO" class="glyphicon glyphicon-ok">X</span>
                </td>
            </tr>
            <tr>
                <td>
                    <div id="lbl_Tel"><?=$Lines[2]['text']?></div>
                </td>
                <td id="td_Tel_J" ><input type="checkbox" id="chk_Tel_J"
                                                                  style="visibility: hidden"></td>
                <td id="td_Tel_N" ><input type="checkbox" id="chk_Tel_N"
                                                                  style="visibility: hidden"></td>
                <td><textarea style="resize: none" id="TXT_Area_Tel" cols="100%" rows="4"></textarea></td>
                <td id="td_Tel_Val">
                    <span id="span_Tel_Val_Ok" class="glyphicon glyphicon-ok" style="visibility: hidden">O</span>
                    <span id="span_Tel_Val_NO" class="glyphicon glyphicon-ok">X</span>
                </td>
            </tr>
            <tr>
                <td>
                    <div id="lbl_GT_Info"><?=$Lines[3]['text']?></div>
                </td>
                <td id="td_GT_Info_J" ><input type="checkbox" id="chk_GT_Info_J"
                                                                style="visibility: hidden"></td>
                <td id="td_GT_Info_N" ><input type="checkbox" id="chk_GT_Info_N"
                                                                style="visibility: hidden"></td>
                <td><textarea style="resize: none" id="TXT_Area_GT_Info" cols="100%" rows="4"></textarea></td>
                <td id="td_GT_Info_Val"><span id="span_GT_Info_Val_Ok" class="glyphicon glyphicon-ok" style="visibility: hidden">O</span><span
                            id="span_GT_Info_Val_NO" class="glyphicon glyphicon-ok">X</span></td>
            </tr>
            <tr>
                <td>
                    <div id="lbl_Ann"><?=$Lines[4]['text']?></div>
                </td>
                <td id="td_Ann_J" ><input type="checkbox" id="chk_Ann_J"
                                                                  style="visibility: hidden"></td>
                <td id="td_Ann_N" ><input type="checkbox" id="chk_Ann_N"
                                                                  style="visibility: hidden"></td>
                <td><textarea style="resize: none" id="TXT_Area_Ann" cols="100%" rows="4"></textarea></td>
                <td id="td_Ann_Val"><span id="span_Ann_Val_Ok" class="glyphicon glyphicon-ok" style="visibility: hidden">O</span>
                    <span id="span_Ann_Val_NO" class="glyphicon glyphicon-ok">X</span></td>
            </tr>

            </tbody>
        </table>
    </div>
    <br><br>
    <div class="container-fluid row">
        <h4><?=$Titles[1]['title']?></h4>
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
                    <div id="lbl_Ess"><?=$Lines[5]['text']?></div>
                </td>
                <td id="td_Ess_J" ><input type="checkbox" id="chk_Ess_J"
                                                                  style="visibility: hidden"></td>
                <td id="td_Ess_N" ><input type="checkbox" id="chk_Ess_N"
                                                                  style="visibility: hidden"></td>
                <td><textarea style="resize: none" id="TXT_Area_Ess" cols="100%" rows="4"></textarea></td>
                <td id="td_Ess_Val"><span id="span_Ess_Val_Ok" class="glyphicon glyphicon-ok" style="visibility: hidden">O</span><span
                            id="span_Ess_Val_NO" class="glyphicon glyphicon-ok">X</span></td>
            </tr>
            <tr>
                <td>
                    <div id="lbl_Operation_CO"><?=$Lines[6]['text']?></div>
                </td>
                <td id="td_Operation_CO_J" ><input type="checkbox" id="chk_Operation_CO_J"
                                                                                    style="visibility: hidden"></td>
                <td id="td_Operation_CO_N" ><input type="checkbox" id="chk_Operation_CO_N"
                                                                                    style="visibility: hidden"></td>
                <td><textarea style="resize: none" id="TXT_Area_Operation_Co" cols="100%" rows="4"></textarea></td>
                <td id="td_Operation_CO_Val">
                    <span id="span_Operation_CO_Val_Ok" class="glyphicon glyphicon-ok" style="visibility: hidden">O</span>
                    <span id="span_Operation_CO_Val_NO" class="glyphicon glyphicon-ok">X</span>
                </td>
            </tr>
            <tr>
                <td>
                    <div id="lbl_Rdv_G"><?=$Lines[7]['text']?></div>
                </td>
                <td id="td_Rdv_G_J" ><input type="checkbox" id="chk_Rdv_G_J"
                                                                      style="visibility: hidden"></td>
                <td id="td_Rdv_G_N" ><input type="checkbox" id="chk_Rdv_G_N"
                                                                      style="visibility: hidden"></td>
                <td><textarea style="resize: none" id="TXT_Area_Rdv_G" cols="100%" rows="4"></textarea></td>
                <td id="td_Rdv_G_Val">
                    <span id="span_Rdv_G_Val_Ok" class="glyphicon glyphicon-ok" style="visibility: hidden">O</span>
                    <span id="span_Rdv_G_Val_NO" class="glyphicon glyphicon-ok">X</span>
                </td>
            </tr>
            <tr>
                <td>
                    <div id="lbl_GT_Vhc"><?=$Lines[8]['text']?></div>
                </td>
                <td id="td_GT_Vhc_J" ><input type="checkbox" id="chk_GT_Vhc_J"
                                                                        style="visibility: hidden"></td>
                <td id="td_GT_Vhc_N" ><input type="checkbox" id="chk_GT_Vhc_N"
                                                                        style="visibility: hidden"></td>
                <td><textarea style="resize: none" id="TXT_Area_GT_Vhc" cols="100%" rows="4"></textarea></td>
                <td id="td_GT_Vhc_Val"><span id="span_GT_Vhc_Val_Ok" class="glyphicon glyphicon-ok" style="visibility: hidden">O</span><span
                            id="span_GT_Vhc_Val_NO" class="glyphicon glyphicon-ok">X</span></td>
            </tr>
            <tr>
                <td>
                    <div id="lbl_50chf"><?=$Lines[9]['text']?></div>
                </td>
                <td id="td_50chf_J" ><input type="checkbox" id="chk_50chf_J"
                                                                      style="visibility: hidden"></td>
                <td id="td_50chf_N" ><input type="checkbox" id="chk_50chf_N"
                                                                      style="visibility: hidden"></td>
                <td><textarea style="resize: none" id="TXT_Area_50chf" cols="100%" rows="4"></textarea></td>
                <td id="td_50chf_Val"><span id="span_50chf_Val_Ok" class="glyphicon glyphicon-ok" style="visibility: hidden">O</span>
                    <span id="span_50chf_Val_NO" class="glyphicon glyphicon-ok">X</span></td>
            </tr>

            <tr>
                <td>
                    <div id="lbl_PIHV"><?=$Lines[10]['text']?></div>
                </td>
                <td id="td_PIHV_J" ><input type="checkbox" id="chk_PIHV_J"
                                                                    style="visibility: hidden"></td>
                <td id="td_PIHV_N" ><input type="checkbox" id="chk_PIHV_N"
                                                                    style="visibility: hidden"></td>
                <td><textarea style="resize: none" id="TXT_Area_PIHV" cols="100%" rows="4"></textarea></td>
                <td id="td_PIHV_Val"><span id="span_PIHV_Val_Ok" class="glyphicon glyphicon-ok" style="visibility: hidden">O</span>
                    <span id="span_PIHV_Val_NO" class="glyphicon glyphicon-ok">X</span></td>
            </tr>

            </tbody>
        </table>
    </div>
    <br><br>
    <div class="container-fluid row">
        <h4><?=$Titles[2]['title']?></h4>
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
                    <div id="lbl_Info_Traf"><?=$Lines[11]['text']?></div>
                </td>
                <td id="td_Info_Traf_J" ><input type="checkbox" id="chk_Info_Traf_J"
                                                                              style="visibility: hidden"></td>
                <td id="td_Info_Traf_N" ><input type="checkbox" id="chk_Info_Traf_N"
                                                                              style="visibility: hidden"></td>
                <td><textarea style="resize: none" id="TXT_Area_Info_Traf" cols="100%" rows="4"></textarea></td>
                <td id="td_Info_Traf_Val"><span id="span_Info_Traf_Val_Ok" class="glyphicon glyphicon-ok" style="visibility: hidden">O</span><span
                            id="span_Info_Traf_Val_NO" class="glyphicon glyphicon-ok">X</span></td>
            </tr>
            <tr>
                <td>
                    <div id="lbl_Report_Info_Traf"><?=$Lines[12]['text']?></div>
                </td>
                <td id="td_Report_Info_Traf_J" ><input type="checkbox" id="chk_Report_Info_Traf_J"
                                                                                            style="visibility: hidden"></td>
                <td id="td_Report_Info_Traf_N" ><input type="checkbox" id="chk_Report_Info_Traf_N"
                                                                                            style="visibility: hidden"></td>
                <td><textarea style="resize: none" id="TXT_Area_Operation_Co" cols="100%" rows="4"></textarea></td>
                <td id="td_Report_Info_Traf_Val">
                    <span id="span_Report_Info_Traf_Val_Ok" class="glyphicon glyphicon-ok" style="visibility: hidden">O</span>
                    <span id="span_Report_Info_Traf_Val_NO" class="glyphicon glyphicon-ok">X</span>
                </td>
            </tr>
            <tr>
                <td>
                    <div id="lbl_Acc_Stage"><?=$Lines[13]['text']?></div>
                </td>
                <td id="td_Acc_Stage_J" ><input type="checkbox" id="chk_Acc_Stage_J"
                                                                              style="visibility: hidden"></td>
                <td id="td_Acc_Stage_N" ><input type="checkbox" id="chk_Acc_Stage_N"
                                                                              style="visibility: hidden"></td>
                <td><textarea style="resize: none" id="TXT_Area_Acc_Stage" cols="100%" rows="4"></textarea></td>
                <td id="td_Acc_Stage_Val">
                    <span id="span_Acc_Stage_Val_Ok" class="glyphicon glyphicon-ok" style="visibility: hidden">O</span>
                    <span id="span_Acc_Stage_Val_NO" class="glyphicon glyphicon-ok">X</span>
                </td>
            </tr>
            <tr>
                <td>
                    <div id="lbl_Lect_Journal"><?=$Lines[14]['text']?></div>
                </td>
                <td id="td_Lect_Journal_J" ><input type="checkbox" id="chk_Lect_Journal_J"
                                                                                    style="visibility: hidden"></td>
                <td id="td_Lect_Journal_N" ><input type="checkbox" id="chk_Lect_Journal_N"
                                                                                    style="visibility: hidden"></td>
                <td><textarea style="resize: none" id="TXT_Area_Lect_Journal" cols="100%" rows="4"></textarea></td>
                <td id="td_Lect_Journal_Val"><span id="span_Lect_Journal_Val_Ok" class="glyphicon glyphicon-ok" style="visibility: hidden">O</span><span
                            id="span_Lect_Journal_Val_NO" class="glyphicon glyphicon-ok">X</span></td>
            </tr>
            <tr>
                <td>
                    <div id="lbl_Pb_Resp_GT"><?=$Lines[15]['text']?></div>
                </td>
                <td id="td_Pb_Resp_GT_J" ><input type="checkbox" id="chk_Pb_Resp_GT_J"
                                                                                style="visibility: hidden"></td>
                <td id="td_Pb_Resp_GT_N" ><input type="checkbox" id="chk_Pb_Resp_GT_N"
                                                                                style="visibility: hidden"></td>
                <td><textarea style="resize: none" id="TXT_Area_Pb_Resp_GT" cols="100%" rows="4"></textarea></td>
                <td id="td_Pb_Resp_GT_Val"><span id="span_Pb_Resp_GT_Val_Ok" class="glyphicon glyphicon-ok" style="visibility: hidden">O</span>
                    <span id="span_Pb_Resp_GT_Val_NO" class="glyphicon glyphicon-ok">X</span></td>
            </tr>

            </tbody>
        </table>
    </div>
    <br><br>
    <div class="container-fluid row">
        <h4><?=$Titles[3]['title']?></h4>
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
                    <div id="lbl_Central_Propre"><?=$Lines[16]['text']?></div>
                </td>
                <td id="td_Central_Propre_J" ><input type="checkbox" id="chk_Central_Propre_J"
                                                                                        style="visibility: hidden"></td>
                <td id="td_Central_Propre_N" ><input type="checkbox" id="chk_Central_Propre_N"
                                                                                        style="visibility: hidden"></td>
                <td><textarea style="resize: none" id="TXT_Area_Central_Propre" cols="100%" rows="4"></textarea></td>
                <td id="td_Central_Propre_Val"><span id="span_Central_Propre_Val_Ok" class="glyphicon glyphicon-ok" style="visibility: hidden">O</span><span
                            id="span_Central_Propre_Val_NO" class="glyphicon glyphicon-ok">X</span></td>
            </tr>
            <tr>
                <td>
                    <div id="lbl_Tache_J_Eff"><?=$Lines[17]['text']?></div>
                </td>
                <td id="td_Tache_J_Eff_J" ><input type="checkbox" id="chk_Tache_J_Eff_J"
                                                                                  style="visibility: hidden"></td>
                <td id="td_Tache_J_Eff_N" ><input type="checkbox" id="chk_Tache_J_Eff_N"
                                                                                  style="visibility: hidden"></td>
                <td><textarea style="resize: none" id="TXT_Area_Operation_Co" cols="100%" rows="4"></textarea></td>
                <td id="td_Tache_J_Eff_Val">
                    <span id="span_Tache_J_Eff_Val_Ok" class="glyphicon glyphicon-ok" style="visibility: hidden">O</span>
                    <span id="span_Tache_J_Eff_Val_NO" class="glyphicon glyphicon-ok">X</span>
                </td>
            </tr>
            <tr>
                <td>
                    <div id="lbl_Dim_Fiche_Stups"><?=$Lines[18]['text']?></div>
                </td>
                <td id="td_Dim_Fiche_Stups_J" ><input type="checkbox" id="chk_Dim_Fiche_Stups_J"
                                                                                          style="visibility: hidden"></td>
                <td id="td_Dim_Fiche_Stups_N" ><input type="checkbox" id="chk_Dim_Fiche_Stups_N"
                                                                                          style="visibility: hidden"></td>
                <td><textarea style="resize: none" id="TXT_Area_Dim_Fiche_Stups" cols="100%" rows="4"></textarea></td>
                <td id="td_Dim_Fiche_Stups_Val">
                    <span id="span_Dim_Fiche_Stups_Val_Ok" class="glyphicon glyphicon-ok" style="visibility: hidden">O</span>
                    <span id="span_Dim_Fiche_Stups_Val_NO" class="glyphicon glyphicon-ok">X</span>
                </td>
            </tr>

            </tbody>
        </table>
    </div>

</div>
</body>
<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>
