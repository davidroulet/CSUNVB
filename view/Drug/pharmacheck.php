<?php
/**
 * Auteur: David Roulet / Fabien Mason
 * Date: Mars 2020
 **/

ob_start();
$title = "CSU-NVB - pharmacheck";
//TODO deplacer ca dans le controleur
$date=strtotime("$date");
$date=date("j F Y", $date);
?>
<h2> Contrôle de pharmacie, <?= $date ?> <?= $base["name"] ?>
</h2>
<table border="1" class="table table-dark">
    <tr>
        <td colspan="6">
    </tr>
    <tr>
        <td>Lot</td>
        <td>Matin</td>
        <td>Soire</td>
    </tr>
    <tr>
        <td><?=$druguse["name"]?></td>
    </tr>
    <tr>
        <td><?=$batch["number"]?></td>
        <form action="/index.php?action=PharmaUpdate&batchtoupdate=<?=$batch["id"]?>&PharmaUpdateuser=<?=$user["id"]?>&sheetid=<?=$sheet["id"]?>&date=<?=$date?>" method="post">
            <td><input type="number" name="Pharmastart" value="<?=$pharmacheck["start"]?>"> </td>
            <td><input type="number" name="Pharmaend" value="<?=$pharmacheck["end"]?>"> </td>
    <tr>
            <td colspan="6" class=" center" ><input type="submit" class="btn-dark" value="Envoier le Formulaire"></td>

    </tr>
    </form>
</table>

<?php
//TODO faire le gestionnaire d'evenment pour que tout la partie du bas sois un bouton
$content = ob_get_clean();
require "view/gabarit.php";
?>
