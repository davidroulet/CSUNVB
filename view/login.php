<?php
ob_start();
$title = "CSU-NVB - Remise de garde";
?>

<div class="row">
    <form action="/?action=login" method="post" class="form form-group">
        <label for="username">Nom d'utilisateur</label>
        <input type="text" class="form-group form-control" name="username" required>
        <label for="password">Mot de passe</label>
        <input type="password" class="form-group form-control" name="password" required>
        <button type="submit" id="btnLogin" class="btn btn-primary">Connecter</button>
    </form>

</div>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
