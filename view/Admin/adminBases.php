<?php
/**
 * Auteur: Thomas Grossmann / Mounir Fiaux
 * Date: Mars 2020
 **/

ob_start();
$title = "CSU-NVB - Administration - Bases";
?>

<table class="table table-bordered" style="text-align: center">
    <thead>
    <th>Nom</th>
    </thead>
    <tbody>
        <?php foreach ($bases as $base) { ?>
        <tr>
            <td><a href=""><?= $base['name'] ?></a></td>
        </tr><?php } ?>
    </tbody>
</table>

<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>
