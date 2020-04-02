<?php
/**
 * Auteur: David Roulet / Fabien Mason
 * Date: Mars 2020
 **/

ob_start();
$title = "CSU-NVB - pharmacheck";
var_dump($user);
?>
<h2>Site de <?= $base["name"] ?> , Semaine N° <?= $sheet["week"] ?>
</h2>
<table border="1" class="table table-dark">
    <tr>
        <td colspan="6"> <?php echo $date ?>
    </tr>
    <tr>
        <td>Lot</td>
        <td>Pharmacie</td>
        <td>Pharmacie</td>
    </tr>
    <tr>
        <td><?=$druguse["name"]?></td>

    </tr>
    <tr>
        <td><?=$batch["number"]?></td>
        <form action="/index.php?action=PharmaUpdate&batchtoupdate=<?=$batch["id"]?>&PharmaUpdateuser=<?=$user[4]?>" method="post">
            <td><input type="number" name="Pharmastart"> </td>
            <td><input type="number" name="Pharmaend"> </td>
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
