<?php
/**
 * Auteur: Thomas Grossmann
 * Date: Mars 2020
 **/

function getFlashMessage()
{
    if (isset($_SESSION['flashmessage'])) {
        $message = $_SESSION['flashmessage'];
        unset($_SESSION['flashmessage']);
        return '<div class="alert alert-info">' . $message . '</div>';
    } else {
        return null;
    }
}

?>