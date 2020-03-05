<?php
/**
 * Auteur: Thomas Grossmann / Mounir Fiaux
 * Date: Février 2020
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
                <th width="20%"></th>
                <th width="15%">jour</th>
                <th width="15%">nuit</th>
                <th width="45%">remarque</th>
                <th width="5%">Validé</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <div id="lbl_Rad">Radios</div>
                </td>
                <td id="td_Rad_J" onclick="fn_Chk_Rad_J()"><input type="checkbox" id="chk_Rad_J" style="visibility: hidden"></td>
                <td id="td_Rad_N" onclick="fn_Chk_Rad_N()"><input type="checkbox" id="chk_Rad_N" style="visibility: hidden"></td>
                <td><textarea style="resize: none" id="TXT_Area_Rad" cols="100%" rows="3"></textarea></td>
                <td id="td_Rad_Val"><span id="span_Rad_Val_Ok" class="glyphicon glyphicon-ok">O</span></td>
            </tr>
            <tr>
                <td><div id="lbl_Det_CO">Détecteurs CO</div></td>
                <td id="td_Det_CO_J" onclick="fn_Chk_Det_CO_J()"><input type="checkbox" id="chk_Det_CO_J" style="visibility: hidden"></td>
                <td id="td_Det_CO_N" onclick="fn_Chk_Det_CO_N()"><input type="checkbox" id="chk_Det_CO_N" style="visibility: hidden"></td>
                <td><textarea style="resize: none" id="TXT_Area_Det_Co" cols="100%" rows="3"></textarea></td>
                <td id="td_Det_CO_Val"><span id="span_Det_CO_Val_Ok" class="glyphicon glyphicon-ok">O</span></td>
            </tr>
            <tr>
                <td><div id="lbl_Tel">Téléphones</div></td>
                <td id="td_Tel_J" onclick="fn_Chk_Tel_J()"><input type="checkbox" id="chk_Tel_J" style="visibility: hidden"></td>
                <td id="td_Tel_N" onclick="fn_Chk_Tel_N()"><input type="checkbox" id="chk_Tel_N" style="visibility: hidden"></td>
                <td><textarea style="resize: none" id="TXT_Area_Tel" cols="100%" rows="3"></textarea></td>
                <td id="td_Tel_Val"><span id="span_Tel_Val_Ok" class="glyphicon glyphicon-ok">O</span></td>
            </tr>
            <tr>
                <td><div id="lbl_GT">Gt info avisé</div></td>
                <td id="td_GT_J" onclick="fn_Chk_GT_J()"><input type="checkbox" id="chk_GT_J" style="visibility: hidden"></td>
                <td id="td_GT_N" onclick="fn_Chk_GT_N()"><input type="checkbox" id="chk_GT_N" style="visibility: hidden"></td>
                <td><textarea style="resize: none" id="TXT_Area_GT" cols="100%" rows="3"></textarea></td>
                <td id="td_GT_Val"><span id="span_Rad_GT_Ok" class="glyphicon glyphicon-ok">O</span></td>
            </tr>
            <tr>
                <td><div id="lbl_Ann">annonce 144</div></td>
                <td id="td_Ann_J" onclick="fn_Chk_Ann_J()"><input type="checkbox" id="chk_Ann_J" style="visibility: hidden"></td>
                <td id="td_Ann_N" onclick="fn_Chk_Ann_N()"><input type="checkbox" id="chk_Ann_N" style="visibility: hidden"></td>
                <td><textarea style="resize: none" id="TXT_Area_Ann" cols="100%" rows="3"></textarea></td>
                <td id="td_Rad_Val"><span id="span_Ann_Val_Ok" class="glyphicon glyphicon-ok">O</span><span id="span_Ann_Val_NO" class="glyphicon glyphicon-ok">X</span></td>
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
    function fn_Chk_Rad_J() {
        document.getElementById("chk_Rad_J").checked = 1 - document.getElementById("chk_Rad_J").checked;
        if (document.getElementById("chk_Rad_J").checked == 1){
            document.getElementById("td_Rad_J").style.backgroundColor = "lightgreen";
        }else{
            document.getElementById("td_Rad_J").style.backgroundColor = "#ff8080";
        }
        if ((document.getElementById("chk_Rad_J").checked == 1) && (document.getElementById("chk_Rad_N").checked == 1)) {
            document.getElementById("lbl_Rad").style.visibility = 'hidden';
        }else{
            document.getElementById("lbl_Rad").style.visibility = 'visible';
        }
    }
    function fn_Chk_Rad_N() {
        document.getElementById("chk_Rad_N").checked = 1 - document.getElementById("chk_Rad_N").checked;
        if (document.getElementById("chk_Rad_N").checked == 1){
            document.getElementById("td_Rad_N").style.backgroundColor = "lightgreen";
        }else{
            document.getElementById("td_Rad_N").style.backgroundColor = "#ff8080";
        }
        if ((document.getElementById("chk_Rad_J").checked == 1) && (document.getElementById("chk_Rad_N").checked == 1)) {
            document.getElementById("lbl_Rad").style.visibility = 'hidden';
        }else{
            document.getElementById("lbl_Rad").style.visibility = 'visible';
        }
    }
    function fn_Chk_Det_CO_J() {
        document.getElementById("chk_Det_CO_J").checked = 1 - document.getElementById("chk_Det_CO_J").checked;
        if (document.getElementById("chk_Det_CO_J").checked == 1){
            document.getElementById("td_Det_CO_J").style.backgroundColor = "lightgreen";
        }else{
            document.getElementById("td_Det_CO_J").style.backgroundColor = "#ff8080";
        }
        if ((document.getElementById("chk_Det_CO_J").checked == 1) && (document.getElementById("chk_Det_CO_N").checked == 1)) {
            document.getElementById("lbl_Det_CO").style.visibility = 'hidden';
        }else{
            document.getElementById("lbl_Det_CO").style.visibility = 'visible';
        }
    }
    function fn_Chk_Det_CO_N() {
        document.getElementById("chk_Det_CO_N").checked = 1 - document.getElementById("chk_Det_CO_N").checked;
        if (document.getElementById("chk_Det_CO_N").checked == 1){
            document.getElementById("td_Det_CO_N").style.backgroundColor = "lightgreen";
        }else{
            document.getElementById("td_Det_CO_N").style.backgroundColor = "#ff8080";
        }
        if ((document.getElementById("chk_Det_CO_J").checked == 1) && (document.getElementById("chk_Det_CO_N").checked == 1)) {
            document.getElementById("lbl_Det_CO").style.visibility = 'hidden';
        }else{
            document.getElementById("lbl_Det_CO").style.visibility = 'visible';
        }
    }
    function fn_Chk_Tel_J() {
        document.getElementById("chk_Tel_J").checked = 1 - document.getElementById("chk_Tel_J").checked;
        if (document.getElementById("chk_Tel_J").checked == 1){
            document.getElementById("td_Tel_J").style.backgroundColor = "lightgreen";
        }else{
            document.getElementById("td_Tel_J").style.backgroundColor = "#ff8080";
        }
        if ((document.getElementById("chk_Tel_J").checked == 1) && (document.getElementById("chk_Tel_N").checked == 1)) {
            document.getElementById("lbl_Tel").style.visibility = 'hidden';
        }else{
            document.getElementById("lbl_Tel").style.visibility = 'visible';
        }
    }
    function fn_Chk_Tel_N() {
        document.getElementById("chk_Tel_N").checked = 1 - document.getElementById("chk_Tel_N").checked;
        if (document.getElementById("chk_Tel_N").checked == 1){
            document.getElementById("td_Tel_N").style.backgroundColor = "lightgreen";
        }else{
            document.getElementById("td_Tel_N").style.backgroundColor = "#ff8080";
        }
        if ((document.getElementById("chk_Tel_J").checked == 1) && (document.getElementById("chk_Tel_N").checked == 1)) {
            document.getElementById("lbl_Tel").style.visibility = 'hidden';
        }else{
            document.getElementById("lbl_Tel").style.visibility = 'visible';
        }
    }
    function fn_Chk_GT_J() {
        document.getElementById("chk_GT_J").checked = 1 - document.getElementById("chk_GT_J").checked;
        if (document.getElementById("chk_GT_J").checked == 1){
            document.getElementById("td_GT_J").style.backgroundColor = "lightgreen";
        }else{
            document.getElementById("td_GT_J").style.backgroundColor = "#ff8080";
        }
        if ((document.getElementById("chk_GT_J").checked == 1) && (document.getElementById("chk_GT_N").checked == 1)) {
            document.getElementById("lbl_GT").style.visibility = 'hidden';
        }else{
            document.getElementById("lbl_GT").style.visibility = 'visible';
        }
    }
    function fn_Chk_GT_N() {
        document.getElementById("chk_GT_N").checked = 1 - document.getElementById("chk_GT_N").checked;
        if (document.getElementById("chk_GT_N").checked == 1){
            document.getElementById("td_GT_N").style.backgroundColor = "lightgreen";
        }else{
            document.getElementById("td_GT_N").style.backgroundColor = "#ff8080";
        }
        if ((document.getElementById("chk_GT_J").checked == 1) && (document.getElementById("chk_GT_N").checked == 1)) {
            document.getElementById("lbl_GT").style.visibility = 'hidden';
        }else{
            document.getElementById("lbl_GT").style.visibility = 'visible';
        }
    }
    function fn_Chk_Ann_J() {
        document.getElementById("chk_Ann_J").checked = 1 - document.getElementById("chk_Ann_J").checked;
        if (document.getElementById("chk_Ann_J").checked == 1){
            document.getElementById("td_Ann_J").style.backgroundColor = "lightgreen";
        }else{
            document.getElementById("td_Ann_J").style.backgroundColor = "#ff8080";
        }
        if ((document.getElementById("chk_Ann_J").checked == 1) && (document.getElementById("chk_ann_N").checked == 1)) {
            document.getElementById("lbl_Ann").style.visibility = 'hidden';
        }else{
            document.getElementById("lbl_Ann").style.visibility = 'visible';
        }
    }
    function fn_Chk_Ann_N() {
        document.getElementById("chk_Ann_N").checked = 1 - document.getElementById("chk_Ann_N").checked;
        if (document.getElementById("chk_Ann_N").checked == 1){
            document.getElementById("td_Ann_N").style.backgroundColor = "lightgreen";
        }else{
            document.getElementById("td_Ann_N").style.backgroundColor = "#ff8080";
        }
        if ((document.getElementById("chk_Ann_J").checked == 1) && (document.getElementById("chk_Ann_N").checked == 1)) {
            document.getElementById("lbl_Ann").style.visibility = 'hidden';
        }else{
            document.getElementById("lbl_Ann").style.visibility = 'visible';
        }
    }
</script>
<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>
