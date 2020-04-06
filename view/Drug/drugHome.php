<?php
// David Roulet - Fabien Masson
// Projet CSU-NVB A1
// Drugs Section
ob_start();
$title = "CSU-NVB - Stupéfiants";
var_dump($_SESSION["Selectsite"]);
?>

<div class="row m-2">
    <h1>Stupéfiants</h1>
</div>

<FORM action="/index.php?action=drugs" method="post">
    <SELECT name="site" size="1">
<?php
foreach ($bases as $base){ ?>
        <OPTION value="<?=$base["id"]?>" <?php if ($_SESSION["Selectsite"] == $base["id"]) { ?> selected="selected"  <?php } ?> name="site"><?=$base["name"]?>

<?php }
?>
    </SELECT>
    <button type="submit">Recharger</button>
</FORM>

<div class="row m-2">
    <?php
    foreach ($liste as $item) {
        if ($item["base_id"] == $_SESSION["Selectsite"]) {
            $weeks[] = $item;
        }
    } ?>
</div>

<div class="row">
    <table class="table table-bordered">
        <thead>
        <th>Date</th>
        <th>État</th>
        </thead>
        <tbody>
        <?php foreach ($weeks as $week) { ?>
            <tr>
                <form action="/index.php?action=drugSiteTable" method="post">
                    <td>
                        <button class="btn" name="semaine"
                                value="<?= $week["week"] ?>"> <?php echo "Semaine " . $week["week"] ?> </button>
                    </td>
                    <td><?= $week['state'] ?></td>
                </form>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>
