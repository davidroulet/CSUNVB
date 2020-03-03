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
                <td id="td_Rad_J" onclick="fn_Chk_Rad_J()"><input type="checkbox" id="chk_Rad_J" style="visibility: hidden"><label for="chk_Rad_J" style="visibility: hidden">Ok</label></td>
                <td id="td_Rad_N" onclick="fn_Chk_Rad_N()"><input type="checkbox" id="chk_Rad_N" style="visibility: hidden"><label for="chk_Rad_N" style="visibility: hidden">Ok</label></td>
                <td><textarea style="resize: none" id="TXT_Area_Rad" cols="100%" rows="3"></textarea></td>
                <td></td>
            </tr>
            <tr>
                <td><div id="lbl_Det_Co">Détecteurs CO</div></td>
                <td id="td_Det_Co_J" onclick="fn_Chk_Det_CO_J()"><input type="checkbox" id="chk_Det_CO_J"><label for="chk_Det_CO_J">Ok</label></td>
                <td id="td_Det_Co_N" onclick="fn_Chk_Det_CO_N()"><input type="checkbox" id="chk_Det_CO_N"><label for="chk_Det_CO_N">Ok</label></td>
                <td><textarea style="resize: none" id="TXT_Area_Det_Co" cols="100%" rows="3"></textarea></td>
                <td></td>
            </tr>
            <tr>
                <td><div id="lbl_Tel">Téléphones</div></td>
                <td id="td_Tel_J" onclick="fn_Chk_Tel_J()"><input type="checkbox" id="chk_Tel_J"><label for="chk_Tel_J">Ok</label></td>
                <td id="td_Tel_N" onclick="fn_Chk_Tel_N()"><input type="checkbox" id="chk_Tel_N"><label for="chk_Tel_N">Ok</label></td>
                <td><textarea style="resize: none" id="TXT_Area_Tel" cols="100%" rows="3"></textarea></td>
                <td></td>
            </tr>
            <tr>
                <td><div id="lbl_GT">Gt info avisé</div></td>
                <td id="td_GT_J" onclick="fn_Chk_GT_J()"><input type="checkbox" id="chk_GT_J"><label for="chk_GT_J">Ok</label></td>
                <td id="td_GT_N" onclick="fn_Chk_GT_N()"><input type="checkbox" id="chk_GT_N"><label for="chk_GT_N">Ok</label></td>
                <td><textarea style="resize: none" id="TXT_Area_GT" cols="100%" rows="3"></textarea></td>
                <td></td>
            </tr>
            <tr>
                <td><div id="lbl_Ann">annonce 144</div></td>
                <td id="td_Ann_J" onclick="fn_Chk_Ann_J()"><input type="checkbox" id="chk_ann_J"><label for="chk_ann_J">Ok</label></td>
                <td id="td_Ann_N" onclick="fn_Chk_Ann_N()"><input type="checkbox" id="chk_ann_N"><label for="chk_ann_N">Ok</label></td>
                <td><textarea style="resize: none" id="TXT_Area_ann" cols="100%" rows="3"></textarea></td>
                <td></td>
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
        if ((document.getElementById("chk_Rad_J").checked == 1) && (document.getElementById("chk_Rad_N").checked == 1)) {
            document.getElementById("lbl_Rad").style.visibility = 'hidden';
        }else{
            document.getElementById("lbl_Rad").style.visibility = 'visible';
        }
    }
    function fn_Chk_Det_CO_J() {
        document.getElementById("chk_Det_CO_J").checked = 1 - document.getElementById("chk_Det_CO_J").checked;
        if ((document.getElementById("chk_Det_CO_J").checked == 1) && (document.getElementById("chk_Det_CO_N").checked == 1)) {
            document.getElementById("lbl_Det_Co").style.visibility = 'hidden';
        }else{
            document.getElementById("lbl_Det_Co").style.visibility = 'visible';
        }
    }
    function fn_Chk_Det_CO_N() {
        document.getElementById("chk_Det_CO_N").checked = 1 - document.getElementById("chk_Det_CO_N").checked;
        if ((document.getElementById("chk_Det_CO_J").checked == 1) && (document.getElementById("chk_Det_CO_N").checked == 1)) {
            document.getElementById("lbl_Det_Co").style.visibility = 'hidden';
        }else{
            document.getElementById("lbl_Det_Co").style.visibility = 'visible';
        }
    }
    function fn_Chk_Tel_J() {
        document.getElementById("chk_Tel_J").checked = 1 - document.getElementById("chk_Tel_J").checked;
        if ((document.getElementById("chk_Tel_J").checked == 1) && (document.getElementById("chk_Tel_N").checked == 1)) {
            document.getElementById("lbl_Tel").style.visibility = 'hidden';
        }else{
            document.getElementById("lbl_Tel").style.visibility = 'visible';
        }
    }
    function fn_Chk_Tel_N() {
        document.getElementById("chk_Tel_N").checked = 1 - document.getElementById("chk_Tel_N").checked;
        if ((document.getElementById("chk_Tel_J").checked == 1) && (document.getElementById("chk_Tel_N").checked == 1)) {
            document.getElementById("lbl_Tel").style.visibility = 'hidden';
        }else{
            document.getElementById("lbl_Tel").style.visibility = 'visible';
        }
    }
    function fn_Chk_GT_J() {
        document.getElementById("chk_GT_J").checked = 1 - document.getElementById("chk_GT_J").checked;
        if ((document.getElementById("chk_GT_J").checked == 1) && (document.getElementById("chk_GT_N").checked == 1)) {
            document.getElementById("lbl_GT").style.visibility = 'hidden';
        }else{
            document.getElementById("lbl_GT").style.visibility = 'visible';
        }
    }
    function fn_Chk_GT_N() {
        document.getElementById("chk_GT_N").checked = 1 - document.getElementById("chk_GT_N").checked;
        if ((document.getElementById("chk_GT_J").checked == 1) && (document.getElementById("chk_GT_N").checked == 1)) {
            document.getElementById("lbl_GT").style.visibility = 'hidden';
        }else{
            document.getElementById("lbl_GT").style.visibility = 'visible';
        }
    }
    function fn_Chk_Ann_J() {
        document.getElementById("chk_ann_J").checked = 1 - document.getElementById("chk_ann_J").checked;
        if ((document.getElementById("chk_ann_J").checked == 1) && (document.getElementById("chk_ann_N").checked == 1)) {
            document.getElementById("lbl_Ann").style.visibility = 'hidden';
        }else{
            document.getElementById("lbl_Ann").style.visibility = 'visible';
        }
    }
    function fn_Chk_Ann_N() {
        document.getElementById("chk_ann_N").checked = 1 - document.getElementById("chk_ann_N").checked;
        if ((document.getElementById("chk_ann_J").checked == 1) && (document.getElementById("chk_ann_N").checked == 1)) {
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
