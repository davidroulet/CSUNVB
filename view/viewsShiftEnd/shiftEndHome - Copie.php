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
                    <div id="lbl_Info_Traf">Centrale Propre</div>
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
                    <div id="lbl_Report_Info_Traf">Tâches du jour effectuées</div>
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
                    <div id="lbl_Acc_Stage">Dimanche Fiches stupéfiants et tableau tâches scannées</div>
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


</script>
<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>
