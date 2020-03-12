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
    <br><br>
    <div class="row">
        <table>
            <thead>
            <tr>
                <th>véhicules & interventions</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            </tbody>
        </table>

    </div>

</div>
<script>
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
