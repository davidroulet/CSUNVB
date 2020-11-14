<?php
/**
 * Auteur: David Roulet / Fabien Masson
 * Date: Aril 2020
 **/

ob_start();
$title = "CSU-NVB - Stupéfiants";

?>

<div class="row m-2">
    <h1>Stupéfiants</h1>
</div>

<div class="row">
    <FORM action="/index.php?action=drugs" method="post" class="col">
        <SELECT onchange="this.form.submit()" name="site" size="1">
            <?php
            foreach ($bases

            as $base){ ?>
            <OPTION value="<?= $base["id"] ?>" <?php if ($_SESSION["Selectsite"] == $base["id"]) { ?> selected="selected"  <?php } ?>
                    name="site"><?= $base["name"] ?>

                <?php }
                ?>
        </SELECT>
    </FORM>

    <div class="row m-2">
        <?php
        foreach ($liste as $item) {
            if ($item["base_id"] == $_SESSION["Selectsite"]) {
                $weeks[] = $item;
            }
        } ?>
    </div>

    <div class="col">
        <form action="?action=addNewStup" method="post">
            <input type="hidden" name="baseStup" value="<?= $_SESSION['Selectsite'] ?>">
            <?php if ($_SESSION['username']['admin'] == 1) { ?>
                <button type="submit" class='btn btn-primary m-1 float-right'>Nouvelle feuille de stupéfiants</button>
            <?php } ?>
        </form>
    </div>
</div>

<div class="row">
    <table class="table table-bordered">
        <thead class="thead-dark">
        <th>Date</th>
        <th>État</th>
        <th>Action</th>
        </thead>
        <tbody>
        <?php
        foreach ($weeks as $week) { ?>
            <tr>
                <form action="/index.php?action=drugSiteTable" method="post">
                    <td>
                        <button class="btn" name="semaine"
                                value="<?= $week["week"] ?>"> <?php echo "Semaine " . $week["week"] ?> </button>
                    </td>
                    <td><?= $week['state'] ?></td>
                </form>
                <?php if ($_SESSION['username']['admin'] == 1) { ?>
                    <td>
                        <a href="?action=LogStup" class="btn">Log</a>
                        <?php if ($week['state'] == "closed") { ?>
                            <form action="/index.php?action=reopenStup" method="post">
                                <button class="btn" name="reopen" value="<?= $week['id'] ?>"
                                </button>Reopen
                            </form>
                        <?php } else if (($week['state'] == "open") || ($week['state'] == "reopen")) { ?>
                            <form action="/index.php?action=closedStup" method="post">
                                <button class="btn" name="close" value="<?= $week['id'] ?>"
                                </button>Close
                            </form>
                        <?php } else if ($week['state'] == "vierge") { ?>
                            <form action="?action=activateStup" method="post">
                                <button class="btn" name="activate" value="<?= $week['id'] ?>"
                                </button>Activate
                            </form>
                        <?php } ?>
                    </td>
                <?php } ?>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>
