<?php
/**
 * Auteur: Thomas Grossmann / Mounir Fiaux
 * Date: Mars 2020
 **/

ob_start();
$title = "CSU-NVB - Login";
?>

<div class="row">
    <form action="/?action=trylogin" method="post" class="form form-group">
        <label for="initales">Initiales</label>
        <input id="initiales" type="text" class="form-group form-control" name="username" required>
        <label for="password">Mot de passe</label>
        <input id="password" type="password" class="form-group form-control" name="password" required>
        <label>Quel site ?</label><br>
        <div class="form-check-inline">
            <div class="form-check">
                <input id="yverdon" type="radio" name="base" required>Yverdon
            </div>
            <div class="form-check">
                <input id="stloup" type="radio" name="base" required>Saint-Loup
            </div>
            <div class="form-check">
                <input id="stecroix" type="radio" name="base" required>Sainte-Croix
            </div>
            <div class="form-check">
                <input id="valleejoux" type="radio" name="base" required>Vallée-de-Joux
            </div>
            <div class="form-check">
                <input id="payerne" type="radio" name="base" required>Payerne
            </div>
        </div><br><br>
        <button type="submit" id="btnLogin" class="btn btn-primary">Connecter</button>
    </form>
</div>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
