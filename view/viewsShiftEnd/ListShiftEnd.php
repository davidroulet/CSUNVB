<?php
/**
 * Auteur: Thomas Grossmann / Mounir Fiaux
 * Date: Mars 2020
 **/

ob_start();
$title = "CSU-NVB - Remise de garde";
$remises = getRemises();
?>

<div class="row">
    <table class="table table-bordered">
        <thead>
        <th>Date</th>
        <th>État</th>
        </thead>
        <tbody>
    <?php foreach ($remises as $remise) { ?>
        <tr>
            <td><a href="index.php?action=shiftend"><?=$remise['date']?></a></td><td><?=$remise['state']?></td>
        </tr>
    <?php } ?>
        </tbody>
    </table>
</div>

<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>