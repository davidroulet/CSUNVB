<?php
/**
 * Auteur: Thomas Grossmann / Mounir Fiaux
 * Date: Mars 2020
 **/

ob_start();
$title = "CSU-NVB - Administration - Secouristes";
?>

<table class="table table-bordered" style="text-align: center">
    <thead>
    <th>Prénom</th>
    <th>Nom</th>
    <th>Initiales</th>
    <th>Admin</th>
    </thead>
    <tbody>
    <?php foreach ($users as $user){ ?>
    <tr>
        <td><?= $user['firstname'] ?></td>
        <td><?= $user['lastname'] ?></td>
        <td><?= $user['initials'] ?></td>
        <td><?php if ($user['id'] != $_SESSION['username'][4]){
            if ($user['admin'] == 1){?>
            <a href="?action=changeUserAdmin&idUser=<?= $user['id']?>" class="btn btn-primary">Oui</a><?php } else {?>
            <a href="?action=changeUserAdmin&idUser=<?= $user['id']?>" class="btn btn-primary">Non</a><?php } } else { ?>
            <p>Vous ne pouvez pas changer votre propre état</p><?php } ?>
        </td>
    </tr><?php } ?>
    </tbody>
</table>

<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>
