<?php
/*
 * Programme : Exo Php
 * Auteur : Thomas Grossmann
 * Date : 10.02.2020
 */
ob_start();
$title = "CSU-NVB - Erreur";
?>

<div class="row error">Mot de passe ou nom d'utilisateur incorrect</div>
<div class="row">
    <form action="/?action=trylogin" method="post" class="form form-group">
        <label for="username">Nom d'utilisateur</label>
        <input id="username" type="text" class="form-group form-control" name="username" required>
        <label for="password">Mot de passe</label>
        <input id="password" type="password" class="form-group form-control" name="password" required>
        <button type="submit" id="btnLogin" class="btn btn-primary">Connecter</button>
    </form>
</div>

<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>
