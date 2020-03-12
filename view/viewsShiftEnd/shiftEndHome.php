<?php
/**
 * Auteur: Thomas Grossmann / Mounir Fiaux
 * Date: Mars 2020
 **/

ob_start();
$title = "CSU-NVB - Remise de garde";
?>
<div class="container-fluid">
    <div class="row">
        <h1>Remises de garde</h1>
    </div>

    <div class="container-fluid row">
        <h4>Matériel & télécom</h4>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th width="30%"></th>
                <th width="13%">jour</th>
                <th width="13%">nuit</th>
                <th width="40%">remarque</th>
                <th width="4%">Validé</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <div id="lbl_Rad">Radios</div>
                </td>
                <td id="td_Rad_J" onclick="fn_Chk_Rad_J()"><input type="checkbox" id="chk_Rad_J"
                                                                  style="visibility: hidden"></td>
                <td id="td_Rad_N" onclick="fn_Chk_Rad_N()"><input type="checkbox" id="chk_Rad_N"
                                                                  style="visibility: hidden"></td>
                <td><textarea style="resize: none" id="TXT_Area_Rad" cols="100%" rows="4"></textarea></td>
                <td id="td_Rad_Val"><span id="span_Rad_Val_Ok" class="glyphicon glyphicon-ok" style="visibility: hidden">O</span><span
                            id="span_Rad_Val_NO" class="glyphicon glyphicon-ok">X</span></td>
            </tr>
            <tr>
                <td>
                    <div id="lbl_Det_CO">Détecteurs CO</div>
                </td>
                <td id="td_Det_CO_J" onclick="fn_Chk_Det_CO_J()"><input type="checkbox" id="chk_Det_CO_J"
                                                                        style="visibility: hidden"></td>
                <td id="td_Det_CO_N" onclick="fn_Chk_Det_CO_N()"><input type="checkbox" id="chk_Det_CO_N"
                                                                        style="visibility: hidden"></td>
                <td><textarea style="resize: none" id="TXT_Area_Det_Co" cols="100%" rows="4"></textarea></td>
                <td id="td_Det_CO_Val">
                    <span id="span_Det_CO_Val_Ok" class="glyphicon glyphicon-ok" style="visibility: hidden">O</span>
                    <span id="span_Det_CO_Val_NO" class="glyphicon glyphicon-ok">X</span>
                </td>
            </tr>
            <tr>
                <td>
                    <div id="lbl_Tel">Téléphones</div>
                </td>
                <td id="td_Tel_J" onclick="fn_Chk_Tel_J()"><input type="checkbox" id="chk_Tel_J"
                                                                  style="visibility: hidden"></td>
                <td id="td_Tel_N" onclick="fn_Chk_Tel_N()"><input type="checkbox" id="chk_Tel_N"
                                                                  style="visibility: hidden"></td>
                <td><textarea style="resize: none" id="TXT_Area_Tel" cols="100%" rows="4"></textarea></td>
                <td id="td_Tel_Val">
                    <span id="span_Tel_Val_Ok" class="glyphicon glyphicon-ok" style="visibility: hidden">O</span>
                    <span id="span_Tel_Val_NO" class="glyphicon glyphicon-ok">X</span>
                </td>
            </tr>
            <tr>
                <td>
                    <div id="lbl_GT_Info">Gt info avisé</div>
                </td>
                <td id="td_GT_Info_J" onclick="fn_Chk_GT_Info_J()"><input type="checkbox" id="chk_GT_Info_J"
                                                                style="visibility: hidden"></td>
                <td id="td_GT_Info_N" onclick="fn_Chk_GT_Info_N()"><input type="checkbox" id="chk_GT_Info_N"
                                                                style="visibility: hidden"></td>
                <td><textarea style="resize: none" id="TXT_Area_GT_Info" cols="100%" rows="4"></textarea></td>
                <td id="td_GT_Info_Val"><span id="span_GT_Info_Val_Ok" class="glyphicon glyphicon-ok" style="visibility: hidden">O</span><span
                            id="span_GT_Info_Val_NO" class="glyphicon glyphicon-ok">X</span></td>
            </tr>
            <tr>
                <td>
                    <div id="lbl_Ann">annonce 144</div>
                </td>
                <td id="td_Ann_J" onclick="fn_Chk_Ann_J()"><input type="checkbox" id="chk_Ann_J"
                                                                  style="visibility: hidden"></td>
                <td id="td_Ann_N" onclick="fn_Chk_Ann_N()"><input type="checkbox" id="chk_Ann_N"
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
        <h4>véhicules & interventions</h4>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th width="30%"></th>
                <th width="13%">jour</th>
                <th width="13%">nuit</th>
                <th width="40%">remarque</th>
                <th width="4%">Validé</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <div id="lbl_Ess">Plein essence</div>
                </td>
                <td id="td_Ess_J" onclick="fn_Chk_Ess_J()"><input type="checkbox" id="chk_Ess_J"
                                                                  style="visibility: hidden"></td>
                <td id="td_Ess_N" onclick="fn_Chk_Ess_N()"><input type="checkbox" id="chk_Ess_N"
                                                                  style="visibility: hidden"></td>
                <td><textarea style="resize: none" id="TXT_Area_Ess" cols="100%" rows="4"></textarea></td>
                <td id="td_Ess_Val"><span id="span_Ess_Val_Ok" class="glyphicon glyphicon-ok" style="visibility: hidden">O</span><span
                            id="span_Ess_Val_NO" class="glyphicon glyphicon-ok">X</span></td>
            </tr>
            <tr>
                <td>
                    <div id="lbl_Operation_CO">Opérationnel</div>
                </td>
                <td id="td_Operation_CO_J" onclick="fn_Chk_Operation_CO_J()"><input type="checkbox" id="chk_Operation_CO_J"
                                                                                    style="visibility: hidden"></td>
                <td id="td_Operation_CO_N" onclick="fn_Chk_Operation_CO_N()"><input type="checkbox" id="chk_Operation_CO_N"
                                                                                    style="visibility: hidden"></td>
                <td><textarea style="resize: none" id="TXT_Area_Operation_Co" cols="100%" rows="4"></textarea></td>
                <td id="td_Operation_CO_Val">
                    <span id="span_Operation_CO_Val_Ok" class="glyphicon glyphicon-ok" style="visibility: hidden">O</span>
                    <span id="span_Operation_CO_Val_NO" class="glyphicon glyphicon-ok">X</span>
                </td>
            </tr>
            <tr>
                <td>
                    <div id="lbl_Rdv_G">Rdv Garage</div>
                </td>
                <td id="td_Rdv_G_J" onclick="fn_Chk_Rdv_G_J()"><input type="checkbox" id="chk_Rdv_G_J"
                                                                      style="visibility: hidden"></td>
                <td id="td_Rdv_G_N" onclick="fn_Chk_Rdv_G_N()"><input type="checkbox" id="chk_Rdv_G_N"
                                                                      style="visibility: hidden"></td>
                <td><textarea style="resize: none" id="TXT_Area_Rdv_G" cols="100%" rows="4"></textarea></td>
                <td id="td_Rdv_G_Val">
                    <span id="span_Rdv_G_Val_Ok" class="glyphicon glyphicon-ok" style="visibility: hidden">O</span>
                    <span id="span_Rdv_G_Val_NO" class="glyphicon glyphicon-ok">X</span>
                </td>
            </tr>
            <tr>
                <td>
                    <div id="lbl_GT_Vhc">Gt vhc avisé</div>
                </td>
                <td id="td_GT_Vhc_J" onclick="fn_Chk_GT_Vhc_J()"><input type="checkbox" id="chk_GT_Vhc_J"
                                                                        style="visibility: hidden"></td>
                <td id="td_GT_Vhc_N" onclick="fn_Chk_GT_Vhc_N()"><input type="checkbox" id="chk_GT_Vhc_N"
                                                                        style="visibility: hidden"></td>
                <td><textarea style="resize: none" id="TXT_Area_GT_Vhc" cols="100%" rows="4"></textarea></td>
                <td id="td_GT_Vhc_Val"><span id="span_GT_Vhc_Val_Ok" class="glyphicon glyphicon-ok" style="visibility: hidden">O</span><span
                            id="span_GT_Vhc_Val_NO" class="glyphicon glyphicon-ok">X</span></td>
            </tr>
            <tr>
                <td>
                    <div id="lbl_50chf">50chf présents</div>
                </td>
                <td id="td_50chf_J" onclick="fn_Chk_50chf_J()"><input type="checkbox" id="chk_50chf_J"
                                                                      style="visibility: hidden"></td>
                <td id="td_50chf_N" onclick="fn_Chk_50chf_N()"><input type="checkbox" id="chk_50chf_N"
                                                                      style="visibility: hidden"></td>
                <td><textarea style="resize: none" id="TXT_Area_50chf" cols="100%" rows="4"></textarea></td>
                <td id="td_50chf_Val"><span id="span_50chf_Val_Ok" class="glyphicon glyphicon-ok" style="visibility: hidden">O</span>
                    <span id="span_50chf_Val_NO" class="glyphicon glyphicon-ok">X</span></td>
            </tr>

            <tr>
                <td>
                    <div id="lbl_PIHV">Problème d'interventions hors véhicules</div>
                </td>
                <td id="td_PIHV_J" onclick="fn_Chk_PIHV_J()"><input type="checkbox" id="chk_PIHV_J"
                                                                    style="visibility: hidden"></td>
                <td id="td_PIHV_N" onclick="fn_Chk_PIHV_N()"><input type="checkbox" id="chk_PIHV_N"
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
        <h4>Ecrans de communication & Trafic</h4>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th width="30%"></th>
                <th width="13%">jour</th>
                <th width="13%">nuit</th>
                <th width="40%">remarque</th>
                <th width="4%">Validé</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <div id="lbl_Info_Traf">Info trafic consulté</div>
                </td>
                <td id="td_Info_Traf_J" onclick="fn_Chk_Info_Traf_J()"><input type="checkbox" id="chk_Info_Traf_J"
                                                                              style="visibility: hidden"></td>
                <td id="td_Info_Traf_N" onclick="fn_Chk_Info_Traf_N()"><input type="checkbox" id="chk_Info_Traf_N"
                                                                              style="visibility: hidden"></td>
                <td><textarea style="resize: none" id="TXT_Area_Info_Traf" cols="100%" rows="4"></textarea></td>
                <td id="td_Info_Traf_Val"><span id="span_Info_Traf_Val_Ok" class="glyphicon glyphicon-ok" style="visibility: hidden">O</span><span
                            id="span_Info_Traf_Val_NO" class="glyphicon glyphicon-ok">X</span></td>
            </tr>
            <tr>
                <td>
                    <div id="lbl_Report_Info_Traf">Report des info trafic sur plan de secteur centrale</div>
                </td>
                <td id="td_Report_Info_Traf_J" onclick="fn_Chk_Report_Info_Traf_J()"><input type="checkbox" id="chk_Report_Info_Traf_J"
                                                                                            style="visibility: hidden"></td>
                <td id="td_Report_Info_Traf_N" onclick="fn_Chk_Report_Info_Traf_N()"><input type="checkbox" id="chk_Report_Info_Traf_N"
                                                                                            style="visibility: hidden"></td>
                <td><textarea style="resize: none" id="TXT_Area_Operation_Co" cols="100%" rows="4"></textarea></td>
                <td id="td_Report_Info_Traf_Val">
                    <span id="span_Report_Info_Traf_Val_Ok" class="glyphicon glyphicon-ok" style="visibility: hidden">O</span>
                    <span id="span_Report_Info_Traf_Val_NO" class="glyphicon glyphicon-ok">X</span>
                </td>
            </tr>
            <tr>
                <td>
                    <div id="lbl_Acc_Stage">Acceuil étudiant ou stagiaire</div>
                </td>
                <td id="td_Acc_Stage_J" onclick="fn_Chk_Acc_Stage_J()"><input type="checkbox" id="chk_Acc_Stage_J"
                                                                              style="visibility: hidden"></td>
                <td id="td_Acc_Stage_N" onclick="fn_Chk_Acc_Stage_N()"><input type="checkbox" id="chk_Acc_Stage_N"
                                                                              style="visibility: hidden"></td>
                <td><textarea style="resize: none" id="TXT_Area_Acc_Stage" cols="100%" rows="4"></textarea></td>
                <td id="td_Acc_Stage_Val">
                    <span id="span_Acc_Stage_Val_Ok" class="glyphicon glyphicon-ok" style="visibility: hidden">O</span>
                    <span id="span_Acc_Stage_Val_NO" class="glyphicon glyphicon-ok">X</span>
                </td>
            </tr>
            <tr>
                <td>
                    <div id="lbl_Lect_Journal">Lecture journal de bord</div>
                </td>
                <td id="td_Lect_Journal_J" onclick="fn_Chk_Lect_Journal_J()"><input type="checkbox" id="chk_Lect_Journal_J"
                                                                                    style="visibility: hidden"></td>
                <td id="td_Lect_Journal_N" onclick="fn_Chk_Lect_Journal_N()"><input type="checkbox" id="chk_Lect_Journal_N"
                                                                                    style="visibility: hidden"></td>
                <td><textarea style="resize: none" id="TXT_Area_Lect_Journal" cols="100%" rows="4"></textarea></td>
                <td id="td_Lect_Journal_Val"><span id="span_Lect_Journal_Val_Ok" class="glyphicon glyphicon-ok" style="visibility: hidden">O</span><span
                            id="span_Lect_Journal_Val_NO" class="glyphicon glyphicon-ok">X</span></td>
            </tr>
            <tr>
                <td>
                    <div id="lbl_Pb_Resp_GT">Problème et responsable GT avisé</div>
                </td>
                <td id="td_Pb_Resp_GT_J" onclick="fn_Chk_Pb_Resp_GT_J()"><input type="checkbox" id="chk_Pb_Resp_GT_J"
                                                                                style="visibility: hidden"></td>
                <td id="td_Pb_Resp_GT_N" onclick="fn_Chk_Pb_Resp_GT_N()"><input type="checkbox" id="chk_Pb_Resp_GT_N"
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
        <h4>Centrale & tâches</h4>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th width="30%"></th>
                <th width="13%">jour</th>
                <th width="13%">nuit</th>
                <th width="40%">remarque</th>
                <th width="4%">Validé</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <div id="lbl_Central_Propre">Centrale Propre</div>
                </td>
                <td id="td_Central_Propre_J" onclick="fn_Chk_Central_Propre_J()"><input type="checkbox" id="chk_Central_Propre_J"
                                                                                        style="visibility: hidden"></td>
                <td id="td_Central_Propre_N" onclick="fn_Chk_Central_Propre_N()"><input type="checkbox" id="chk_Central_Propre_N"
                                                                                        style="visibility: hidden"></td>
                <td><textarea style="resize: none" id="TXT_Area_Central_Propre" cols="100%" rows="4"></textarea></td>
                <td id="td_Central_Propre_Val"><span id="span_Central_Propre_Val_Ok" class="glyphicon glyphicon-ok" style="visibility: hidden">O</span><span
                            id="span_Central_Propre_Val_NO" class="glyphicon glyphicon-ok">X</span></td>
            </tr>
            <tr>
                <td>
                    <div id="lbl_Tache_J_Eff">Tâches du jour effectuées</div>
                </td>
                <td id="td_Tache_J_Eff_J" onclick="fn_Chk_Tache_J_Eff_J()"><input type="checkbox" id="chk_Tache_J_Eff_J"
                                                                                  style="visibility: hidden"></td>
                <td id="td_Tache_J_Eff_N" onclick="fn_Chk_Tache_J_Eff_N()"><input type="checkbox" id="chk_Tache_J_Eff_N"
                                                                                  style="visibility: hidden"></td>
                <td><textarea style="resize: none" id="TXT_Area_Operation_Co" cols="100%" rows="4"></textarea></td>
                <td id="td_Tache_J_Eff_Val">
                    <span id="span_Tache_J_Eff_Val_Ok" class="glyphicon glyphicon-ok" style="visibility: hidden">O</span>
                    <span id="span_Tache_J_Eff_Val_NO" class="glyphicon glyphicon-ok">X</span>
                </td>
            </tr>
            <tr>
                <td>
                    <div id="lbl_Dim_Fiche_Stups">Dimanche Fiches stupéfiants et tableau tâches scannées</div>
                </td>
                <td id="td_Dim_Fiche_Stups_J" onclick="fn_Chk_Dim_Fiche_Stups_J()"><input type="checkbox" id="chk_Dim_Fiche_Stups_J"
                                                                                          style="visibility: hidden"></td>
                <td id="td_Dim_Fiche_Stups_N" onclick="fn_Chk_Dim_Fiche_Stups_N()"><input type="checkbox" id="chk_Dim_Fiche_Stups_N"
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
<script>
    function fn_Chk_Rad_J() {
        document.getElementById("chk_Rad_J").checked = 1 - document.getElementById("chk_Rad_J").checked;
        if (document.getElementById("chk_Rad_J").checked == 1) {
            document.getElementById("td_Rad_J").style.backgroundColor = "lightgreen";
        } else {
            document.getElementById("td_Rad_J").style.backgroundColor = "#ff8080";
        }
        if ((document.getElementById("chk_Rad_J").checked == 1) && (document.getElementById("chk_Rad_N").checked == 1)) {
            document.getElementById("span_Rad_Val_Ok").style.visibility = 'visible';
            document.getElementById("span_Rad_Val_NO").style.visibility = 'hidden';
        } else {
            document.getElementById("span_Rad_Val_Ok").style.visibility = 'hidden';
            document.getElementById("span_Rad_Val_NO").style.visibility = 'visible';
        }
    }

    function fn_Chk_Rad_N() {
        document.getElementById("chk_Rad_N").checked = 1 - document.getElementById("chk_Rad_N").checked;
        if (document.getElementById("chk_Rad_N").checked == 1) {
            document.getElementById("td_Rad_N").style.backgroundColor = "lightgreen";
        } else {
            document.getElementById("td_Rad_N").style.backgroundColor = "#ff8080";
        }
        if ((document.getElementById("chk_Rad_J").checked == 1) && (document.getElementById("chk_Rad_N").checked == 1)) {
            document.getElementById("span_Rad_Val_Ok").style.visibility = 'visible';
            document.getElementById("span_Rad_Val_NO").style.visibility = 'hidden';
        } else {
            document.getElementById("span_Rad_Val_Ok").style.visibility = 'hidden';
            document.getElementById("span_Rad_Val_NO").style.visibility = 'visible';
        }
    }

    function fn_Chk_Det_CO_J() {
        document.getElementById("chk_Det_CO_J").checked = 1 - document.getElementById("chk_Det_CO_J").checked;
        if (document.getElementById("chk_Det_CO_J").checked == 1) {
            document.getElementById("td_Det_CO_J").style.backgroundColor = "lightgreen";
        } else {
            document.getElementById("td_Det_CO_J").style.backgroundColor = "#ff8080";
        }
        if ((document.getElementById("chk_Det_CO_J").checked == 1) && (document.getElementById("chk_Det_CO_N").checked == 1)) {
            document.getElementById("span_Det_CO_Val_Ok").style.visibility = 'visible';
            document.getElementById("span_Det_CO_Val_NO").style.visibility = 'hidden';
        } else {
            document.getElementById("span_Det_CO_Val_Ok").style.visibility = 'hidden';
            document.getElementById("span_Det_CO_Val_NO").style.visibility = 'visible';
        }
    }

    function fn_Chk_Det_CO_N() {
        document.getElementById("chk_Det_CO_N").checked = 1 - document.getElementById("chk_Det_CO_N").checked;
        if (document.getElementById("chk_Det_CO_N").checked == 1) {
            document.getElementById("td_Det_CO_N").style.backgroundColor = "lightgreen";
        } else {
            document.getElementById("td_Det_CO_N").style.backgroundColor = "#ff8080";
        }
        if ((document.getElementById("chk_Det_CO_J").checked == 1) && (document.getElementById("chk_Det_CO_N").checked == 1)) {
            document.getElementById("span_Det_CO_Val_Ok").style.visibility = 'visible';
            document.getElementById("span_Det_CO_Val_NO").style.visibility = 'hidden';
        } else {
            document.getElementById("span_Det_CO_Val_Ok").style.visibility = 'hidden';
            document.getElementById("span_Det_CO_Val_NO").style.visibility = 'visible';
        }
    }

    function fn_Chk_Tel_J() {
        document.getElementById("chk_Tel_J").checked = 1 - document.getElementById("chk_Tel_J").checked;
        if (document.getElementById("chk_Tel_J").checked == 1) {
            document.getElementById("td_Tel_J").style.backgroundColor = "lightgreen";
        } else {
            document.getElementById("td_Tel_J").style.backgroundColor = "#ff8080";
        }
        if ((document.getElementById("chk_Tel_J").checked == 1) && (document.getElementById("chk_Tel_N").checked == 1)) {
            document.getElementById("span_Tel_Val_Ok").style.visibility = 'visible';
            document.getElementById("span_Tel_Val_NO").style.visibility = 'hidden';
        } else {
            document.getElementById("span_Tel_Val_Ok").style.visibility = 'hidden';
            document.getElementById("span_Tel_Val_NO").style.visibility = 'visible';
        }
    }

    function fn_Chk_Tel_N() {
        document.getElementById("chk_Tel_N").checked = 1 - document.getElementById("chk_Tel_N").checked;
        if (document.getElementById("chk_Tel_N").checked == 1) {
            document.getElementById("td_Tel_N").style.backgroundColor = "lightgreen";
        } else {
            document.getElementById("td_Tel_N").style.backgroundColor = "#ff8080";
        }
        if ((document.getElementById("chk_Tel_J").checked == 1) && (document.getElementById("chk_Tel_N").checked == 1)) {
            document.getElementById("span_Tel_Val_Ok").style.visibility = 'visible';
            document.getElementById("span_Tel_Val_NO").style.visibility = 'hidden';
        } else {
            document.getElementById("span_Tel_Val_Ok").style.visibility = 'hidden';
            document.getElementById("span_Tel_Val_NO").style.visibility = 'visible';
        }
    }

    function fn_Chk_GT_Info_J() {
        document.getElementById("chk_GT_Info_J").checked = 1 - document.getElementById("chk_GT_Info_J").checked;
        if (document.getElementById("chk_GT_Info_J").checked == 1) {
            document.getElementById("td_GT_Info_J").style.backgroundColor = "lightgreen";
        } else {
            document.getElementById("td_GT_Info_J").style.backgroundColor = "#ff8080";
        }
        if ((document.getElementById("chk_GT_Info_J").checked == 1) && (document.getElementById("chk_GT_Info_N").checked == 1)) {
            document.getElementById("span_GT_Info_Val_Ok").style.visibility = 'visible';
            document.getElementById("span_GT_Info_Val_NO").style.visibility = 'hidden';
        } else {
            document.getElementById("span_GT_Info_Val_Ok").style.visibility = 'hidden';
            document.getElementById("span_GT_Info_Val_NO").style.visibility = 'visible';
        }
    }

    function fn_Chk_GT_Info_N() {
        document.getElementById("chk_GT_Info_N").checked = 1 - document.getElementById("chk_GT_Info_N").checked;
        if (document.getElementById("chk_GT_Info_N").checked == 1) {
            document.getElementById("td_GT_Info_N").style.backgroundColor = "lightgreen";
        } else {
            document.getElementById("td_GT_Info_N").style.backgroundColor = "#ff8080";
        }
        if ((document.getElementById("chk_GT_Info_J").checked == 1) && (document.getElementById("chk_GT_Info_N").checked == 1)) {
            document.getElementById("span_GT_Info_Val_Ok").style.visibility = 'visible';
            document.getElementById("span_GT_Info_Val_NO").style.visibility = 'hidden';
        } else {
            document.getElementById("span_GT_Info_Val_Ok").style.visibility = 'hidden';
            document.getElementById("span_GT_Info_Val_NO").style.visibility = 'visible';
        }
    }

    function fn_Chk_Ann_J() {
        document.getElementById("chk_Ann_J").checked = 1 - document.getElementById("chk_Ann_J").checked;
        if (document.getElementById("chk_Ann_J").checked == 1) {
            document.getElementById("td_Ann_J").style.backgroundColor = "lightgreen";
        } else {
            document.getElementById("td_Ann_J").style.backgroundColor = "#ff8080";
        }
        if ((document.getElementById("chk_Ann_J").checked == 1) && (document.getElementById("chk_Ann_N").checked == 1)) {
            document.getElementById("span_Ann_Val_Ok").style.visibility = 'visible';
            document.getElementById("span_Ann_Val_NO").style.visibility = 'hidden';
        } else {
            document.getElementById("span_Ann_Val_Ok").style.visibility = 'hidden';
            document.getElementById("span_Ann_Val_NO").style.visibility = 'visible';
        }
    }

    function fn_Chk_Ann_N() {
        document.getElementById("chk_Ann_N").checked = 1 - document.getElementById("chk_Ann_N").checked;
        if (document.getElementById("chk_Ann_N").checked == 1) {
            document.getElementById("td_Ann_N").style.backgroundColor = "lightgreen";
        } else {
            document.getElementById("td_Ann_N").style.backgroundColor = "#ff8080";
        }
        if ((document.getElementById("chk_Ann_J").checked == 1) && (document.getElementById("chk_Ann_N").checked == 1)) {
            document.getElementById("span_Ann_Val_Ok").style.visibility = 'visible';
            document.getElementById("span_Ann_Val_NO").style.visibility = 'hidden';
        } else {
            document.getElementById("span_Ann_Val_Ok").style.visibility = 'hidden';
            document.getElementById("span_Ann_Val_NO").style.visibility = 'visible';
        }
    }
    function fn_Chk_Ess_J() {
        document.getElementById("chk_Ess_J").checked = 1 - document.getElementById("chk_Ess_J").checked;
        if (document.getElementById("chk_Ess_J").checked == 1) {
            document.getElementById("td_Ess_J").style.backgroundColor = "lightgreen";
        } else {
            document.getElementById("td_Ess_J").style.backgroundColor = "#ff8080";
        }
        if ((document.getElementById("chk_Ess_J").checked == 1) && (document.getElementById("chk_Ess_N").checked == 1)) {
            document.getElementById("span_Ess_Val_Ok").style.visibility = 'visible';
            document.getElementById("span_Ess_Val_NO").style.visibility = 'hidden';
        } else {
            document.getElementById("span_Ess_Val_Ok").style.visibility = 'hidden';
            document.getElementById("span_Ess_Val_NO").style.visibility = 'visible';
        }
    }

    function fn_Chk_Ess_N() {
        document.getElementById("chk_Ess_N").checked = 1 - document.getElementById("chk_Ess_N").checked;
        if (document.getElementById("chk_Ess_N").checked == 1) {
            document.getElementById("td_Ess_N").style.backgroundColor = "lightgreen";
        } else {
            document.getElementById("td_Ess_N").style.backgroundColor = "#ff8080";
        }
        if ((document.getElementById("chk_Ess_J").checked == 1) && (document.getElementById("chk_Ess_N").checked == 1)) {
            document.getElementById("span_Ess_Val_Ok").style.visibility = 'visible';
            document.getElementById("span_Ess_Val_NO").style.visibility = 'hidden';
        } else {
            document.getElementById("span_Ess_Val_Ok").style.visibility = 'hidden';
            document.getElementById("span_Ess_Val_NO").style.visibility = 'visible';
        }
    }

    function fn_Chk_Operation_CO_J() {
        document.getElementById("chk_Operation_CO_J").checked = 1 - document.getElementById("chk_Operation_CO_J").checked;
        if (document.getElementById("chk_Operation_CO_J").checked == 1) {
            document.getElementById("td_Operation_CO_J").style.backgroundColor = "lightgreen";
        } else {
            document.getElementById("td_Operation_CO_J").style.backgroundColor = "#ff8080";
        }
        if ((document.getElementById("chk_Operation_CO_J").checked == 1) && (document.getElementById("chk_Operation_CO_N").checked == 1)) {
            document.getElementById("span_Operation_CO_Val_Ok").style.visibility = 'visible';
            document.getElementById("span_Operation_CO_Val_NO").style.visibility = 'hidden';
        } else {
            document.getElementById("span_Operation_CO_Val_Ok").style.visibility = 'hidden';
            document.getElementById("span_Operation_CO_Val_NO").style.visibility = 'visible';
        }
    }

    function fn_Chk_Operation_CO_N() {
        document.getElementById("chk_Operation_CO_N").checked = 1 - document.getElementById("chk_Operation_CO_N").checked;
        if (document.getElementById("chk_Operation_CO_N").checked == 1) {
            document.getElementById("td_Operation_CO_N").style.backgroundColor = "lightgreen";
        } else {
            document.getElementById("td_Operation_CO_N").style.backgroundColor = "#ff8080";
        }
        if ((document.getElementById("chk_Operation_CO_J").checked == 1) && (document.getElementById("chk_Operation_CO_N").checked == 1)) {
            document.getElementById("span_Operation_CO_Val_Ok").style.visibility = 'visible';
            document.getElementById("span_Operation_CO_Val_NO").style.visibility = 'hidden';
        } else {
            document.getElementById("span_Operation_CO_Val_Ok").style.visibility = 'hidden';
            document.getElementById("span_Operation_CO_Val_NO").style.visibility = 'visible';
        }
    }

    function fn_Chk_Rdv_G_J() {
        document.getElementById("chk_Rdv_G_J").checked = 1 - document.getElementById("chk_Rdv_G_J").checked;
        if (document.getElementById("chk_Rdv_G_J").checked == 1) {
            document.getElementById("td_Rdv_G_J").style.backgroundColor = "lightgreen";
        } else {
            document.getElementById("td_Rdv_G_J").style.backgroundColor = "#ff8080";
        }
        if ((document.getElementById("chk_Rdv_G_J").checked == 1) && (document.getElementById("chk_Rdv_G_N").checked == 1)) {
            document.getElementById("span_Rdv_G_Val_Ok").style.visibility = 'visible';
            document.getElementById("span_Rdv_G_Val_NO").style.visibility = 'hidden';
        } else {
            document.getElementById("span_Rdv_G_Val_Ok").style.visibility = 'hidden';
            document.getElementById("span_Rdv_G_Val_NO").style.visibility = 'visible';
        }
    }

    function fn_Chk_Rdv_G_N() {
        document.getElementById("chk_Rdv_G_N").checked = 1 - document.getElementById("chk_Rdv_G_N").checked;
        if (document.getElementById("chk_Rdv_G_N").checked == 1) {
            document.getElementById("td_Rdv_G_N").style.backgroundColor = "lightgreen";
        } else {
            document.getElementById("td_Rdv_G_N").style.backgroundColor = "#ff8080";
        }
        if ((document.getElementById("chk_Rdv_G_J").checked == 1) && (document.getElementById("chk_Rdv_G_N").checked == 1)) {
            document.getElementById("span_Rdv_G_Val_Ok").style.visibility = 'visible';
            document.getElementById("span_Rdv_G_Val_NO").style.visibility = 'hidden';
        } else {
            document.getElementById("span_Rdv_G_Val_Ok").style.visibility = 'hidden';
            document.getElementById("span_Rdv_G_Val_NO").style.visibility = 'visible';
        }
    }

    function fn_Chk_GT_Vhc_J() {
        document.getElementById("chk_GT_Vhc_J").checked = 1 - document.getElementById("chk_GT_Vhc_J").checked;
        if (document.getElementById("chk_GT_Vhc_J").checked == 1) {
            document.getElementById("td_GT_Vhc_J").style.backgroundColor = "lightgreen";
        } else {
            document.getElementById("td_GT_Vhc_J").style.backgroundColor = "#ff8080";
        }
        if ((document.getElementById("chk_GT_Vhc_J").checked == 1) && (document.getElementById("chk_GT_Vhc_N").checked == 1)) {
            document.getElementById("span_GT_Vhc_Val_Ok").style.visibility = 'visible';
            document.getElementById("span_GT_Vhc_Val_NO").style.visibility = 'hidden';
        } else {
            document.getElementById("span_GT_Vhc_Val_Ok").style.visibility = 'hidden';
            document.getElementById("span_GT_Vhc_Val_NO").style.visibility = 'visible';
        }
    }

    function fn_Chk_GT_Vhc_N() {
        document.getElementById("chk_GT_Vhc_N").checked = 1 - document.getElementById("chk_GT_Vhc_N").checked;
        if (document.getElementById("chk_GT_Vhc_N").checked == 1) {
            document.getElementById("td_GT_Vhc_N").style.backgroundColor = "lightgreen";
        } else {
            document.getElementById("td_GT_Vhc_N").style.backgroundColor = "#ff8080";
        }
        if ((document.getElementById("chk_GT_Vhc_J").checked == 1) && (document.getElementById("chk_GT_Vhc_N").checked == 1)) {
            document.getElementById("span_GT_Vhc_Val_Ok").style.visibility = 'visible';
            document.getElementById("span_GT_Vhc_Val_NO").style.visibility = 'hidden';
        } else {
            document.getElementById("span_GT_Vhc_Val_Ok").style.visibility = 'hidden';
            document.getElementById("span_GT_Vhc_Val_NO").style.visibility = 'visible';
        }
    }

    function fn_Chk_50chf_J() {
        document.getElementById("chk_50chf_J").checked = 1 - document.getElementById("chk_50chf_J").checked;
        if (document.getElementById("chk_50chf_J").checked == 1) {
            document.getElementById("td_50chf_J").style.backgroundColor = "lightgreen";
        } else {
            document.getElementById("td_50chf_J").style.backgroundColor = "#ff8080";
        }
        if ((document.getElementById("chk_50chf_J").checked == 1) && (document.getElementById("chk_50chf_N").checked == 1)) {
            document.getElementById("span_50chf_Val_Ok").style.visibility = 'visible';
            document.getElementById("span_50chf_Val_NO").style.visibility = 'hidden';
        } else {
            document.getElementById("span_50chf_Val_Ok").style.visibility = 'hidden';
            document.getElementById("span_50chf_Val_NO").style.visibility = 'visible';
        }
    }

    function fn_Chk_50chf_N() {
        document.getElementById("chk_50chf_N").checked = 1 - document.getElementById("chk_50chf_N").checked;
        if (document.getElementById("chk_50chf_N").checked == 1) {
            document.getElementById("td_50chf_N").style.backgroundColor = "lightgreen";
        } else {
            document.getElementById("td_50chf_N").style.backgroundColor = "#ff8080";
        }
        if ((document.getElementById("chk_50chf_J").checked == 1) && (document.getElementById("chk_50chf_N").checked == 1)) {
            document.getElementById("span_50chf_Val_Ok").style.visibility = 'visible';
            document.getElementById("span_50chf_Val_NO").style.visibility = 'hidden';
        } else {
            document.getElementById("span_50chf_Val_Ok").style.visibility = 'hidden';
            document.getElementById("span_50chf_Val_NO").style.visibility = 'visible';
        }
    }
    function fn_Chk_PIHV_J() {
        document.getElementById("chk_PIHV_J").checked = 1 - document.getElementById("chk_PIHV_J").checked;
        if (document.getElementById("chk_PIHV_J").checked == 1) {
            document.getElementById("td_PIHV_J").style.backgroundColor = "lightgreen";
        } else {
            document.getElementById("td_PIHV_J").style.backgroundColor = "#ff8080";
        }
        if ((document.getElementById("chk_PIHV_J").checked == 1) && (document.getElementById("chk_PIHV_N").checked == 1)) {
            document.getElementById("span_PIHV_Val_Ok").style.visibility = 'visible';
            document.getElementById("span_PIHV_Val_NO").style.visibility = 'hidden';
        } else {
            document.getElementById("span_PIHV_Val_Ok").style.visibility = 'hidden';
            document.getElementById("span_PIHV_Val_NO").style.visibility = 'visible';
        }
    }

    function fn_Chk_PIHV_N() {
        document.getElementById("chk_PIHV_N").checked = 1 - document.getElementById("chk_PIHV_N").checked;
        if (document.getElementById("chk_PIHV_N").checked == 1) {
            document.getElementById("td_PIHV_N").style.backgroundColor = "lightgreen";
        } else {
            document.getElementById("td_PIHV_N").style.backgroundColor = "#ff8080";
        }
        if ((document.getElementById("chk_PIHV_J").checked == 1) && (document.getElementById("chk_PIHV_N").checked == 1)) {
            document.getElementById("span_PIHV_Val_Ok").style.visibility = 'visible';
            document.getElementById("span_PIHV_Val_NO").style.visibility = 'hidden';
        } else {
            document.getElementById("span_PIHV_Val_Ok").style.visibility = 'hidden';
            document.getElementById("span_PIHV_Val_NO").style.visibility = 'visible';
        }
    }
    function fn_Chk_Info_Traf_J() {
        document.getElementById("chk_Info_Traf_J").checked = 1 - document.getElementById("chk_Info_Traf_J").checked;
        if (document.getElementById("chk_Info_Traf_J").checked == 1) {
            document.getElementById("td_Info_Traf_J").style.backgroundColor = "lightgreen";
        } else {
            document.getElementById("td_Info_Traf_J").style.backgroundColor = "#ff8080";
        }
        if ((document.getElementById("chk_Info_Traf_J").checked == 1) && (document.getElementById("chk_Info_Traf_N").checked == 1)) {
            document.getElementById("span_Info_Traf_Val_Ok").style.visibility = 'visible';
            document.getElementById("span_Info_Traf_Val_NO").style.visibility = 'hidden';
        } else {
            document.getElementById("span_Info_Traf_Val_Ok").style.visibility = 'hidden';
            document.getElementById("span_Info_Traf_Val_NO").style.visibility = 'visible';
        }
    }

    function fn_Chk_Info_Traf_N() {
        document.getElementById("chk_Info_Traf_N").checked = 1 - document.getElementById("chk_Info_Traf_N").checked;
        if (document.getElementById("chk_Info_Traf_N").checked == 1) {
            document.getElementById("td_Info_Traf_N").style.backgroundColor = "lightgreen";
        } else {
            document.getElementById("td_Info_Traf_N").style.backgroundColor = "#ff8080";
        }
        if ((document.getElementById("chk_Info_Traf_J").checked == 1) && (document.getElementById("chk_Info_Traf_N").checked == 1)) {
            document.getElementById("span_Info_Traf_Val_Ok").style.visibility = 'visible';
            document.getElementById("span_Info_Traf_Val_NO").style.visibility = 'hidden';
        } else {
            document.getElementById("span_Info_Traf_Val_Ok").style.visibility = 'hidden';
            document.getElementById("span_Info_Traf_Val_NO").style.visibility = 'visible';
        }
    }

    function fn_Chk_Report_Info_Traf_J() {
        document.getElementById("chk_Report_Info_Traf_J").checked = 1 - document.getElementById("chk_Report_Info_Traf_J").checked;
        if (document.getElementById("chk_Report_Info_Traf_J").checked == 1) {
            document.getElementById("td_Report_Info_Traf_J").style.backgroundColor = "lightgreen";
        } else {
            document.getElementById("td_Report_Info_Traf_J").style.backgroundColor = "#ff8080";
        }
        if ((document.getElementById("chk_Report_Info_Traf_J").checked == 1) && (document.getElementById("chk_Report_Info_Traf_N").checked == 1)) {
            document.getElementById("span_Report_Info_Traf_Val_Ok").style.visibility = 'visible';
            document.getElementById("span_Report_Info_Traf_Val_NO").style.visibility = 'hidden';
        } else {
            document.getElementById("span_Report_Info_Traf_Val_Ok").style.visibility = 'hidden';
            document.getElementById("span_Report_Info_Traf_Val_NO").style.visibility = 'visible';
        }
    }

    function fn_Chk_Report_Info_Traf_N() {
        document.getElementById("chk_Report_Info_Traf_N").checked = 1 - document.getElementById("chk_Report_Info_Traf_N").checked;
        if (document.getElementById("chk_Report_Info_Traf_N").checked == 1) {
            document.getElementById("td_Report_Info_Traf_N").style.backgroundColor = "lightgreen";
        } else {
            document.getElementById("td_Report_Info_Traf_N").style.backgroundColor = "#ff8080";
        }
        if ((document.getElementById("chk_Report_Info_Traf_J").checked == 1) && (document.getElementById("chk_Report_Info_Traf_N").checked == 1)) {
            document.getElementById("span_Report_Info_Traf_Val_Ok").style.visibility = 'visible';
            document.getElementById("span_Report_Info_Traf_Val_NO").style.visibility = 'hidden';
        } else {
            document.getElementById("span_Report_Info_Traf_Val_Ok").style.visibility = 'hidden';
            document.getElementById("span_Report_Info_Traf_Val_NO").style.visibility = 'visible';
        }
    }

    function fn_Chk_Acc_Stage_J() {
        document.getElementById("chk_Acc_Stage_J").checked = 1 - document.getElementById("chk_Acc_Stage_J").checked;
        if (document.getElementById("chk_Acc_Stage_J").checked == 1) {
            document.getElementById("td_Acc_Stage_J").style.backgroundColor = "lightgreen";
        } else {
            document.getElementById("td_Acc_Stage_J").style.backgroundColor = "#ff8080";
        }
        if ((document.getElementById("chk_Acc_Stage_J").checked == 1) && (document.getElementById("chk_Acc_Stage_N").checked == 1)) {
            document.getElementById("span_Acc_Stage_Val_Ok").style.visibility = 'visible';
            document.getElementById("span_Acc_Stage_Val_NO").style.visibility = 'hidden';
        } else {
            document.getElementById("span_Acc_Stage_Val_Ok").style.visibility = 'hidden';
            document.getElementById("span_Acc_Stage_Val_NO").style.visibility = 'visible';
        }
    }

    function fn_Chk_Acc_Stage_N() {
        document.getElementById("chk_Acc_Stage_N").checked = 1 - document.getElementById("chk_Acc_Stage_N").checked;
        if (document.getElementById("chk_Acc_Stage_N").checked == 1) {
            document.getElementById("td_Acc_Stage_N").style.backgroundColor = "lightgreen";
        } else {
            document.getElementById("td_Acc_Stage_N").style.backgroundColor = "#ff8080";
        }
        if ((document.getElementById("chk_Acc_Stage_J").checked == 1) && (document.getElementById("chk_Acc_Stage_N").checked == 1)) {
            document.getElementById("span_Acc_Stage_Val_Ok").style.visibility = 'visible';
            document.getElementById("span_Acc_Stage_Val_NO").style.visibility = 'hidden';
        } else {
            document.getElementById("span_Acc_Stage_Val_Ok").style.visibility = 'hidden';
            document.getElementById("span_Acc_Stage_Val_NO").style.visibility = 'visible';
        }
    }

    function fn_Chk_Lect_Journal_J() {
        document.getElementById("chk_Lect_Journal_J").checked = 1 - document.getElementById("chk_Lect_Journal_J").checked;
        if (document.getElementById("chk_Lect_Journal_J").checked == 1) {
            document.getElementById("td_Lect_Journal_J").style.backgroundColor = "lightgreen";
        } else {
            document.getElementById("td_Lect_Journal_J").style.backgroundColor = "#ff8080";
        }
        if ((document.getElementById("chk_Lect_Journal_J").checked == 1) && (document.getElementById("chk_Lect_Journal_N").checked == 1)) {
            document.getElementById("span_Lect_Journal_Val_Ok").style.visibility = 'visible';
            document.getElementById("span_Lect_Journal_Val_NO").style.visibility = 'hidden';
        } else {
            document.getElementById("span_Lect_Journal_Val_Ok").style.visibility = 'hidden';
            document.getElementById("span_Lect_Journal_Val_NO").style.visibility = 'visible';
        }
    }

    function fn_Chk_Lect_Journal_N() {
        document.getElementById("chk_Lect_Journal_N").checked = 1 - document.getElementById("chk_Lect_Journal_N").checked;
        if (document.getElementById("chk_Lect_Journal_N").checked == 1) {
            document.getElementById("td_Lect_Journal_N").style.backgroundColor = "lightgreen";
        } else {
            document.getElementById("td_Lect_Journal_N").style.backgroundColor = "#ff8080";
        }
        if ((document.getElementById("chk_Lect_Journal_J").checked == 1) && (document.getElementById("chk_Lect_Journal_N").checked == 1)) {
            document.getElementById("span_Lect_Journal_Val_Ok").style.visibility = 'visible';
            document.getElementById("span_Lect_Journal_Val_NO").style.visibility = 'hidden';
        } else {
            document.getElementById("span_Lect_Journal_Val_Ok").style.visibility = 'hidden';
            document.getElementById("span_Lect_Journal_Val_NO").style.visibility = 'visible';
        }
    }

    function fn_Chk_Pb_Resp_GT_J() {
        document.getElementById("chk_Pb_Resp_GT_J").checked = 1 - document.getElementById("chk_Pb_Resp_GT_J").checked;
        if (document.getElementById("chk_Pb_Resp_GT_J").checked == 1) {
            document.getElementById("td_Pb_Resp_GT_J").style.backgroundColor = "lightgreen";
        } else {
            document.getElementById("td_Pb_Resp_GT_J").style.backgroundColor = "#ff8080";
        }
        if ((document.getElementById("chk_Pb_Resp_GT_J").checked == 1) && (document.getElementById("chk_Pb_Resp_GT_N").checked == 1)) {
            document.getElementById("span_Pb_Resp_GT_Val_Ok").style.visibility = 'visible';
            document.getElementById("span_Pb_Resp_GT_Val_NO").style.visibility = 'hidden';
        } else {
            document.getElementById("span_Pb_Resp_GT_Val_Ok").style.visibility = 'hidden';
            document.getElementById("span_Pb_Resp_GT_Val_NO").style.visibility = 'visible';
        }
    }

    function fn_Chk_Pb_Resp_GT_N() {
        document.getElementById("chk_Pb_Resp_GT_N").checked = 1 - document.getElementById("chk_Pb_Resp_GT_N").checked;
        if (document.getElementById("chk_Pb_Resp_GT_N").checked == 1) {
            document.getElementById("td_Pb_Resp_GT_N").style.backgroundColor = "lightgreen";
        } else {
            document.getElementById("td_Pb_Resp_GT_N").style.backgroundColor = "#ff8080";
        }
        if ((document.getElementById("chk_Pb_Resp_GT_J").checked == 1) && (document.getElementById("chk_Pb_Resp_GT_N").checked == 1)) {
            document.getElementById("span_Pb_Resp_GT_Val_Ok").style.visibility = 'visible';
            document.getElementById("span_Pb_Resp_GT_Val_NO").style.visibility = 'hidden';
        } else {
            document.getElementById("span_Pb_Resp_GT_Val_Ok").style.visibility = 'hidden';
            document.getElementById("span_Pb_Resp_GT_Val_NO").style.visibility = 'visible';
        }
    }
    function fn_Chk_Central_Propre_J() {
        document.getElementById("chk_Central_Propre_J").checked = 1 - document.getElementById("chk_Central_Propre_J").checked;
        if (document.getElementById("chk_Central_Propre_J").checked == 1) {
            document.getElementById("td_Central_Propre_J").style.backgroundColor = "lightgreen";
        } else {
            document.getElementById("td_Central_Propre_J").style.backgroundColor = "#ff8080";
        }
        if ((document.getElementById("chk_Central_Propre_J").checked == 1) && (document.getElementById("chk_Central_Propre_N").checked == 1)) {
            document.getElementById("span_Central_Propre_Val_Ok").style.visibility = 'visible';
            document.getElementById("span_Central_Propre_Val_NO").style.visibility = 'hidden';
        } else {
            document.getElementById("span_Central_Propre_Val_Ok").style.visibility = 'hidden';
            document.getElementById("span_Central_Propre_Val_NO").style.visibility = 'visible';
        }
    }

    function fn_Chk_Central_Propre_N() {
        document.getElementById("chk_Central_Propre_N").checked = 1 - document.getElementById("chk_Central_Propre_N").checked;
        if (document.getElementById("chk_Central_Propre_N").checked == 1) {
            document.getElementById("td_Central_Propre_N").style.backgroundColor = "lightgreen";
        } else {
            document.getElementById("td_Central_Propre_N").style.backgroundColor = "#ff8080";
        }
        if ((document.getElementById("chk_Central_Propre_J").checked == 1) && (document.getElementById("chk_Central_Propre_N").checked == 1)) {
            document.getElementById("span_Central_Propre_Val_Ok").style.visibility = 'visible';
            document.getElementById("span_Central_Propre_Val_NO").style.visibility = 'hidden';
        } else {
            document.getElementById("span_Central_Propre_Val_Ok").style.visibility = 'hidden';
            document.getElementById("span_Central_Propre_Val_NO").style.visibility = 'visible';
        }
    }

    function fn_Chk_Tache_J_Eff_J() {
        document.getElementById("chk_Tache_J_Eff_J").checked = 1 - document.getElementById("chk_Tache_J_Eff_J").checked;
        if (document.getElementById("chk_Tache_J_Eff_J").checked == 1) {
            document.getElementById("td_Tache_J_Eff_J").style.backgroundColor = "lightgreen";
        } else {
            document.getElementById("td_Tache_J_Eff_J").style.backgroundColor = "#ff8080";
        }
        if ((document.getElementById("chk_Tache_J_Eff_J").checked == 1) && (document.getElementById("chk_Tache_J_Eff_N").checked == 1)) {
            document.getElementById("span_Tache_J_Eff_Val_Ok").style.visibility = 'visible';
            document.getElementById("span_Tache_J_Eff_Val_NO").style.visibility = 'hidden';
        } else {
            document.getElementById("span_Tache_J_Eff_Val_Ok").style.visibility = 'hidden';
            document.getElementById("span_Tache_J_Eff_Val_NO").style.visibility = 'visible';
        }
    }

    function fn_Chk_Tache_J_Eff_N() {
        document.getElementById("chk_Tache_J_Eff_N").checked = 1 - document.getElementById("chk_Tache_J_Eff_N").checked;
        if (document.getElementById("chk_Tache_J_Eff_N").checked == 1) {
            document.getElementById("td_Tache_J_Eff_N").style.backgroundColor = "lightgreen";
        } else {
            document.getElementById("td_Tache_J_Eff_N").style.backgroundColor = "#ff8080";
        }
        if ((document.getElementById("chk_Tache_J_Eff_J").checked == 1) && (document.getElementById("chk_Tache_J_Eff_N").checked == 1)) {
            document.getElementById("span_Tache_J_Eff_Val_Ok").style.visibility = 'visible';
            document.getElementById("span_Tache_J_Eff_Val_NO").style.visibility = 'hidden';
        } else {
            document.getElementById("span_Tache_J_Eff_Val_Ok").style.visibility = 'hidden';
            document.getElementById("span_Tache_J_Eff_Val_NO").style.visibility = 'visible';
        }
    }

    function fn_Chk_Dim_Fiche_Stups_J() {
        document.getElementById("chk_Dim_Fiche_Stups_J").checked = 1 - document.getElementById("chk_Dim_Fiche_Stups_J").checked;
        if (document.getElementById("chk_Dim_Fiche_Stups_J").checked == 1) {
            document.getElementById("td_Dim_Fiche_Stups_J").style.backgroundColor = "lightgreen";
        } else {
            document.getElementById("td_Dim_Fiche_Stups_J").style.backgroundColor = "#ff8080";
        }
        if ((document.getElementById("chk_Dim_Fiche_Stups_J").checked == 1) && (document.getElementById("chk_Dim_Fiche_Stups_N").checked == 1)) {
            document.getElementById("span_Dim_Fiche_Stups_Val_Ok").style.visibility = 'visible';
            document.getElementById("span_Dim_Fiche_Stups_Val_NO").style.visibility = 'hidden';
        } else {
            document.getElementById("span_Dim_Fiche_Stups_Val_Ok").style.visibility = 'hidden';
            document.getElementById("span_Dim_Fiche_Stups_Val_NO").style.visibility = 'visible';
        }
    }

    function fn_Chk_Dim_Fiche_Stups_N() {
        document.getElementById("chk_Dim_Fiche_Stups_N").checked = 1 - document.getElementById("chk_Dim_Fiche_Stups_N").checked;
        if (document.getElementById("chk_Dim_Fiche_Stups_N").checked == 1) {
            document.getElementById("td_Dim_Fiche_Stups_N").style.backgroundColor = "lightgreen";
        } else {
            document.getElementById("td_Dim_Fiche_Stups_N").style.backgroundColor = "#ff8080";
        }
        if ((document.getElementById("chk_Dim_Fiche_Stups_J").checked == 1) && (document.getElementById("chk_Dim_Fiche_Stups_N").checked == 1)) {
            document.getElementById("span_Dim_Fiche_Stups_Val_Ok").style.visibility = 'visible';
            document.getElementById("span_Dim_Fiche_Stups_Val_NO").style.visibility = 'hidden';
        } else {
            document.getElementById("span_Dim_Fiche_Stups_Val_Ok").style.visibility = 'hidden';
            document.getElementById("span_Dim_Fiche_Stups_Val_NO").style.visibility = 'visible';
        }
    }
</script>
<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>
