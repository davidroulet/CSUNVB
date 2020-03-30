<?php
/**
 * Auteur: Thomas Grossmann / Mounir Fiaux
 * Date: Mars 2020
 **/

ob_start();
$title = "CSU-NVB - Administration - Secouristes";
?>

<table class="table table-bordered">
    <thead>
    <th>Nom</th>
    <th>Prénom</th>
    <th>Initiales</th>
    <th>Admin</th>
    </thead>
    <tbody>
    <?php foreach ($users as $user){ ?>
    <tr>
        <td><?= $user['lastname'] ?></td>
        <td><?= $user['firstname'] ?></td>
        <td><?= $user['initials'] ?></td>
        <td><?php if ($user['admin'] == 1){?>
            <button class="btn btn-primary">Oui</button><?php } else {?>
            <button class="btn btn-primary">Non</button><?php } ?>
        </td>
    </tr><?php } ?>
    </tbody>
</table>

<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>
