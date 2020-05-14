<?php
/**
 * Auteur: Thomas Grossmann / Mounir Fiaux
 * Date: Mars 2020
 **/

ob_start();
$title = "CSU-NVB - Remise de garde";
?>
<FORM action="/index.php?action=listShiftEnd" method="post">
    <SELECT name="site" size="1">
        <?php foreach ($Bases as $base) { ?>
            <OPTION value="<?= $base['id'] ?>" <?php if ($_SESSION["Selectsite"] == $base['id']) { ?> selected="selected"  <?php } ?> name="site"><?= $base['name'] ?>
        <?php } ?>
    </SELECT>
    <button type="submit">Recharger</button>
</FORM>

<div class="row">
    <table class="table table-bordered">
        <thead>
        <th>Date</th>
        <th>État</th>
        </thead>
        <tbody>
        <?php foreach ($list as $remise) { ?>
            <tr>
                <td><a href="index.php?action=shiftend"><?= $remise['date'] ?></a></td>
                <td><?= $remise['state'] ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

<?php
$content = ob_get_clean();
require "view/gabarit.php";

?>
