<?php
/**
 * Auteur: Thomas Grossmann / Mounir Fiaux
 * Date: Mars 2020
 **/

ob_start();
$title = "CSU-NVB - Administration - Nouveau secouriste";
?>

<form method="post" action="?action=saveNewUser">
    <table class="table table-bordered">
        <thead>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Initiales</th>
        <th>Mot de passe de départ</th>
        </thead>
        <tbody>
        <tr>
            <td><input type="text" name="prenomUser" required></td>
            <td><input type="text" name="nomUser" required></td>
            <td><input type="text" name="initialesUser" required></td>
            <td><input type="password" name="startPassword" required></td>
        </tr>
        </tbody>
    </table>
    <button type="submit" class="btn btn-primary">Créer</button>
</form>

<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>
