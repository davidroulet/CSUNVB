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
                <th width="50%">remarque</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <div id="lbl_Rad">Radios</div>
                </td>
                <td onclick="fn_Chk_Rad_J()"><input type="checkbox" id="chk_Rad_J"><label for="chk_Rad_J ">Ok</label></td>
                <td onclick="fn_Chk_Rad_N()"><input type="checkbox" id="chk_Rad_N"><label for="chk_Rad_N">Ok</label></td>
                <td><textarea style="resize: none" id="TXT_Area_Rad" cols="100%" rows="3"></textarea></td>
            </tr>
            <tr>
                <td>Détecteurs CO</td>
                <td onclick="fn_Chk_Det_CO_J()"><input type="checkbox" id="chk_Det_CO_J"><label for="chk_Det_CO_J">Ok</label></td>
                <td onclick="fn_Chk_Det_CO_N()"><input type="checkbox" id="chk_Det_CO_N"><label for="chk_Det_CO_N">Ok</label></td>
                <td><textarea style="resize: none" id="TXT_Area_Det_Co" cols="100%" rows="3"></textarea></td>
            </tr>
            <tr>
                <td>Téléphones</td>
                <td onclick="fn_Chk_Tel_J()"><input type="checkbox" id="chk_Tel_J"><label for="chk_Tel_J">Ok</label></td>
                <td onclick="fn_Chk_Tel_N()"><input type="checkbox" id="chk_Tel_N"><label for="chk_Tel_N">Ok</label></td>
                <td><textarea style="resize: none" id="TXT_Area_Tel" cols="100%" rows="3"></textarea></td>
            </tr>
            <tr>
                <td>Gt info avisé</td>
                <td onclick="fn_Chk()"><input type="checkbox" id="chk_GT_J"><label for="chk_GT_J">Ok</label></td>
                <td onclick="fn_Chk()"><input type="checkbox" id="chk_GT_N"><label for="chk_GT_N">Ok</label></td>
                <td><textarea style="resize: none" id="TXT_Area_GT" cols="100%" rows="3"></textarea></td>
            </tr>
            <tr>
                <td>annonce 144</td>
                <td onclick="fn_Chk()"><input type="checkbox" id="chk_ann_J"><label for="chk_ann_J">Ok</label></td>
                <td onclick="fn_Chk()"><input type="checkbox" id="chk_ann_N"><label for="chk_ann_N">Ok</label></td>
                <td><textarea style="resize: none" id="TXT_Area_ann" cols="100%" rows="3"></textarea></td>
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
    function fn_Chk() {
        document.getElementById("chk_Rad_J").checked = 1 - document.getElementById("chk_Rad_J").checked;
        if ((document.getElementById("chk_Rad_J").checked == 1) && (document.getElementById("chk_Rad_N").checked == 1)) {
            document.getElementById("lbl_Rad").style.visibility = 'hidden';
        }
    }
</script>
<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>
