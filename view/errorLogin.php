<?php
/*
 * Programme : Exo Php
 * Auteur : Thomas Grossmann
 * Date : 25.02.2020
 */
ob_start();
$title = "CSU-NVB - Erreur";
?>

<div class="row">
    <form action="/?action=trylogin" method="post" class="form form-group">
        <label for="username">Nom d'utilisateur</label>
        <input id="username" type="text" class="form-group form-control" name="username" required>
        <label for="password">Mot de passe</label>
        <input id="password" type="password" class="form-group form-control" name="password" required>
        <label>Quel site ?</label><br>
        <div class="form-check-inline">
            <div class="form-check">
                <input id="yverdon" type="radio" name="site">Yverdon
            </div>
            <div class="form-check">
                <input id="stloup" type="radio" name="site">Saint-Loup
            </div>
            <div class="form-check">
                <input id="stecroix" type="radio" name="site">Sainte-Croix
            </div>
            <div class="form-check">
                <input id="valleejoux" type="radio" name="site">Vallée-de-Joux
            </div>
            <div class="form-check">
                <input id="payerne" type="radio" name="site">Payerne
            </div>
        </div><br><br>
        <button type="submit" id="btnLogin" class="btn btn-primary">Connecter</button>
    </form>
</div>

<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>
