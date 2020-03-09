<?php
/*
 * Programme : Exo Php
 * Auteur : Thomas Grossmann
 * Date : 03.03.2020
 */

function getUsers()
{
    return json_decode(file_get_contents("model/dataStorage/Users.json"), true);
}


?>