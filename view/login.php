<?php
ob_start();
$title = "CSU-NVB - Remise de garde";
?>

<div class="row">
    <form action="/?action=logout" method="post" class="form-group">
        <label for="username">Nom d'utilisateur</label>
        <input type="text" class="form-group form-control" name="username" required>
        <label for="password">Mot de passe</label>
        <input type="password" class="form-group form-control" name="password" required>
        <p>Vous n'avez pas de compte ?<a href="?action=createaccount"> Créer un compte.</a></p><br><br>
        <button type="submit" id="btnLogin" class="btn btn-primary">Connecter</button>
    </form>

</div>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
