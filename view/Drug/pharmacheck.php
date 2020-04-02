<?php
/**
 * Auteur: David Roulet / Fabien Mason
 * Date: Mars 2020
 **/

ob_start();
$title = "CSU-NVB - pharmacheck";
?>
<table border="1" class="table table-dark">
    <tr>
        <td colspan="6"
    </tr>
    <tr>
        <td>Lot</td>
        <td>Pharmacie</td>
        <td>Pharmacie</td>
    </tr>
    <tr>
        <td>22</td>
        <form action="/index.php?action=PharmaUpdate" method="post">
            <td><input type="number" name="Pharmastart"> </td>
            <td><input type="number" name="Pharmaend"> </td>

        </form>

</table>

<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>
