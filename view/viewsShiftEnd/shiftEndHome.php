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
    <div>
        <table class="table-bordered">
            <thead>
            <tr>
                <th>Matériel & télécom</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td></td>
                <td>jour</td>
                <td>nuit</td>
                <td>remarque</td>
            </tr>
            <tr>
                <td>Radios</td>
            </tr>
            <tr>
                <td>Radios</td>
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
