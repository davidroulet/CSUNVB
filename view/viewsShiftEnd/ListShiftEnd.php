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
        <OPTION value="4" <?php if($_SESSION["Selectsite"]==4){?> selected="selected"  <?php }?> name="site">Payerne
        <OPTION value="1" <?php if($_SESSION["Selectsite"]==1){?> selected="selected" <?php }?>name="site">Yverdon
        <OPTION value="3" <?php if($_SESSION["Selectsite"]==3){?> selected="selected" <?php }?>name="site">Saint-Loup
        <OPTION value="2" <?php if($_SESSION["Selectsite"]==2){?> selected="selected" <?php }?>name="site">Sainte-Croix
        <OPTION value="5" <?php if($_SESSION["Selectsite"]==5){?> selected="selected" <?php }?>name="site">Vallée-de-Joux
    </SELECT>
    <button type="submit">Recharger</button>
</FORM>

<?php
$liste = getRemises();
foreach ($liste as $item) {
    if ($item["base_id"] == $_SESSION["Selectsite"]) {
        $weeks[] = $item;
    }
} ?>

<div class="row">
    <table class="table table-bordered">
        <thead>
        <th>Date</th>
        <th>État</th>
        </thead>
        <tbody>
    <?php foreach ($weeks as $week) { ?>
        <tr>
            <td><a href="index.php?action=shiftend"><?=$week['date']?></a></td><td><?=$week['state']?></td>
        </tr>
    <?php } ?>
        </tbody>
    </table>
</div>

<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>