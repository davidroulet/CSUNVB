<?php
/**
 * Title: CSUNVB
 * USER: marwan.alhelo
 * DATE: 13.02.2020
 * Time: 11:29
 **/
/**
 * Title: CSUNVB - View Home
 * USER: Gatien.Jayme
 * DATE: 27.08.2020
 **/
ob_start();
$title = "CSU-NVB - Tâches hebdomadaires";

?>
<h1 class="center p-4"><?= $title ?></h1>

<FORM action="/index.php?action=todolist" method="post">
    <SELECT onchange="this.form.submit()" name="site" size="1">
        <?php
        foreach ($bases as $base) { ?>

        <OPTION value="<?= $base["id"] ?>" <?php if ($_SESSION["Selectsite"] == $base["id"]) { ?> selected="selected"  <?php } ?>
                name="site"><?= $base["name"] ?>

            <?php }
            ?>
    </SELECT>
</FORM>




<div class="row">
    <table class="table table-bordered">
        <thead>
        <th>Date</th>
        <th>État</th>
        </thead>
        <tbody>
        <?php foreach ($todoSheets as $todosheet) {
            ?>
            <tr>
                <form action="/index.php?action=edittod&sheetid" method="post">
                    <td>
                        <button class="btn" name="semaine"
                                value="<?= $todosheet['id'] ?>"> <?php echo "Semaine " . $todosheet['week'] ?>  </button>
                    </td>
                    <td><?= $todosheet['state'] ?></td>
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

