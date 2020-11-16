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


<div class="row">
    <FORM action="/index.php?action=todolist" method="post" class="col">
        <SELECT onchange="this.form.submit()" name="site" size="1">
            <?php
            foreach ($bases as $base) { ?>

            <OPTION value="<?= $base["id"] ?>" <?php if ($selectedBase == $base["id"]) { ?> selected="selected"  <?php } ?>
            ><?= $base["name"] ?>
                <?php }
                ?>
        </SELECT>
    </FORM>

    <div class="col">
        <form action="/index.php?action=todolist" method="post">
            <input type="hidden" name="base" value="<?= $_SESSION['Selectsite'] ?>">
            <?php if ($_SESSION['username']['admin'] == 1) { ?>
                <button type="submit" class='btn btn-primary m-1 float-right'>Nouvelle feuille de tâches</button>
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
        foreach ($todoSheets as $todosheet) { ?>
            <tr>
                <form action="/index.php?action=edittod&sheetid" method="post">
                    <td>
                        <?php
                        //Convert the date string into a unix timestamp.
                        //$unixTimestamp = strtotime($todosheet['week']);
                        //Get the day of the week using PHP's date function.
                        //$dayOfWeek = date("W", $unixTimestamp); ?>
                        <button class="btn" name="semaine"
                                value="<?= $todosheet['id'] ?>">
                            <?php echo "Semaine " . $todosheet['week'] ?>  </button>
                    </td>
                    <td><?= $todosheet['state'] ?></td>
                </form>
                <td>
                    <div class="row">
                    <form action="/index.php?action=reopenToDo" method="post">
                        <button class="btn btn-primary btn-sm ml-3" name="reopen" value="<?= $todosheet['id'] ?>">Reopen</button>
                    </form>
                    <form action="/index.php?action=closedToDo" method="post">
                        <button class="btn btn-primary btn-sm ml-3" name="close" value="<?= $todosheet['id'] ?>">Close</button>
                    </form>
                    </div>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>

