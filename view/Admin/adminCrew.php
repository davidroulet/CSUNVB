<?php
/**
 * Auteur: Thomas Grossmann / Mounir Fiaux
 * Date: Mars 2020
 **/

ob_start();
$title = "CSU-NVB - Administration - Secouristes";
?>
<a href="?action=admin" class="btn btn-primary">Retour</a>
<a href="?action=newUser" class="btn btn-success">Créer un utilisateur</a>
<table class="table table-bordered" style="text-align: center">
    <thead>
    <th>Prénom</th>
    <th>Nom</th>
    <th>Initiales</th>
    <th>Admin</th>
    <th>Status</th>
    </thead>
    <tbody>
    <?php foreach ($users as $user) { ?>
        <tr>
        <td><?= $user['firstname'] ?></td>
        <td><?= $user['lastname'] ?></td>
        <td><?= $user['initials'] ?></td>
        <td><?php if ($user['id'] != $_SESSION['username']['id']) {
                if ($user['admin'] == 1) { ?>
        <a href="?action=changeUserAdmin&idUser=<?= $user['id'] ?>" class="btn btn-primary">Changer en utilisateur</a><?php } else { ?>
        <a href="?action=changeUserAdmin&idUser=<?= $user['id'] ?>" class="btn btn-primary">Changer en administrateur</a><?php } } else { ?>
        <p>Vous ne pouvez pas changer votre propre état</p><?php } ?>
        <td><?php if ($user['firstconnect'] == 1) { ?>Mot de passe expiré ! <?php } ?></td>
        </td>
        </tr><?php } ?>
    </tbody>
</table>

<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>
