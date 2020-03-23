<?php
/**
 * Auteur: Thomas Grossmann / Mounir Fiaux
 * Date: Mars 2020
 **/

function readShiftEndItems()
{
    return json_decode(file_get_contents("model/dataStorage/items.json"),true);
}

/**
 * Retourne un item précis, identifié par son id
 * ...
 */
function readShiftEndItem($id)
{
    $items = getShiftEndItems();
    // TODO: coder la recherche de l'item demandé
    return $item;
}

/**
 * Sauve l'ensemble des items dans le fichier json
 * ...
 */
function updateShiftEndItems($items)
{
    file_put_contents("model/dataStorage/items.json",json_encode($items));
}

/**
 * Modifie un item précis
 * Le paramètre $item est un item complet (donc un tableau associatif)
 * ...
 */
function updateShiftEndItem($item)
{
    $items = getShiftEndItems();
    // TODO: retrouver l'item donnée en paramètre et le modifier dans le tableau $items
    saveShiftEndItem($items);
}

/**
 * Détruit un item précis, identifié par son id
 * ...
 */
function destroyShiftEndItem($id)
{
    $items = getShiftEndItems();
    // TODO: coder la recherche de l'item demandé et sa destruction dans le tableau
    saveShiftEndItem($items);
}

/**
 * Ajoute un nouvel item
 * Le paramètre $item est un item complet (donc un tableau associatif), sauf que la valeur de son id n'est pas valable
 * puisque le modèle ne l'a pas encore traité
 * ...
 */
function createShiftEndItem($item)
{
    $items = getShiftEndItems();
    // TODO: trouver un id libre pour le nouvel id et ajouter le nouvel item dans le tableau
    saveShiftEndItem($items);
    return ($item); // Pour que l'appelant connaisse l'id qui a été donné
}

function getRemises()
{
    return json_decode(file_get_contents("model/dataStorage/guardsheets.json"),true);
}

function getSectionsTitles()
{
    return json_decode(file_get_contents("model/dataStorage/guardsections.json"), true);
}

function getGuardLines()
{
    return json_decode(file_get_contents("model/dataStorage/guardlines.json"), true);
}

function getGuardLinesForSection($section)
{
    // TODO return le lines for one section only
    $section = getGuardLines();
    for ($guardline = 0;$guardline < $section ;){}
}
?>
