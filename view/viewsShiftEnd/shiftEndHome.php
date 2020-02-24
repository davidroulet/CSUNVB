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

    <div class="offset-1 col-10 offset-1">
        <h3>Matériel & télécom</h3>
        <table class="table-bordered">
            <thead>
            <tr>
                <th></th>
                <th>jour</th>
                <th>nuit</th>
                <th>remarque</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Radios</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Détecteurs CO</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Téléphones</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Gt info avisé</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>annonce 144</td>
                <td></td>
                <td></td>
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
<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>
