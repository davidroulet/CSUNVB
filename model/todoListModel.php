<?php
/**
 * Title: CSUNVB
 * USER: marwan.alhelo
 * DATE: 13.02.2020
 * Time: 11:29
 **/

/**
 * Retourne tous les items dans un tableau indexé de tableaux associatifs
 * Des points seront également retirés au groupe qui osera laisser une des fonctions de ce fichier telle quelle
 * sans l'adapter au niveau de son nom et de son code pour qu'elle dise plus précisément de quelles données elle traite
 */

/** ------------------TODOSHEETS---------------------- */


function readTodoSheets()
{
    $items = json_decode(file_get_contents("model/dataStorage/todosheets.json"), true);

    foreach ($items as $item) {
        $items[$item['id']] = $item;
    }

    return $items;
}

/**
 * Retourne un item précis, identifié par son id
 * ...
 */
function readTodoSheet($id)
{
    $items = readTodoSheets();

    // TODO: coder la recherche de l'item demandé
    $item = $items[$id];
    if(isset($item)) {
        return $item;
    } else {
        return null;
    }

}

/**
 * Sauve l'ensemble des items dans le fichier json
 * ...
 */
function saveTodoSheets($items)
{
    file_put_contents("model/dataStorage/todosheets.json", json_encode($items));
}

/**
 * Modifie un item précis
 * Le paramètre $item est un item complet (donc un tableau associatif)
 * ...
 */
function updateTodoSheet($item)
{

    $itemLists = readTodoSheets();
    // TODO: retrouver l'item donnée en paramètre et le modifier dans le tableau $items


    $itemLists[$item['id']] = $item;
    saveTodoSheets($itemLists);
}

/**
 * Détruit un item précis, identifié par son id
 * ...
 */
function destroyTodoSheet($id)
{
    $items = readTodoSheets();
    // TODO: coder la recherche de l'item demandé et sa destruction dans le tableau
    unset($items[$id]);
    saveTodoSheets($items);
}

/**
 * Ajoute un nouvel item
 * Le paramètre $item est un item complet (donc un tableau associatif), sauf que la valeur de son id n'est pas valable
 * puisque le modèle ne l'a pas encore traité
 * ...
 */
function createTodoSheet($item)
{

    $items = readTodoSheets();
    // TODO: trouver un id libre pour le nouvel id et ajouter le nouvel item dans le tableau
    $nextId = max(array_keys($items)) + 1;
    $item['id'] = $nextId;
    $items[] = $item;
    saveTodoSheets($items);
    return ($nextId);
}

function readTodoSheetsForBase($base_id)
{
    // TODO return todosheets for the given base
    $items = readTodoSheets();
    foreach ($items as $item) {
        if ($item['base_id'] == $base_id)
            $itemsByBase[] = $item;
    }

    return $itemsByBase;
}



/** ------------------TODOTHINGS---------------------- */

/**
 * Retourne tous les items dans un tableau indexé de tableaux associatifs
 * Des points seront également retirés au groupe qui osera laisser une des fonctions de ce fichier telle quelle
 * sans l'adapter au niveau de son nom et de son code pour qu'elle dise plus précisément de quelles données elle traite
 */

function readTodoThings()
{
    $things = json_decode(file_get_contents("model/dataStorage/todosheets.json"), true);

    foreach ($things as $thing) {
        $things[$thing['id']] = $thing;
    }

    return $things;
}

/**
 * Retourne un item précis, identifié par son id
 * ...
 */
function readTodoThing($id)
{
    $items = readTodoThings();

    // TODO: coder la recherche de l'item demandé
    $item = $items[$id];
    if(isset($item)) {
        return $item;
    } else {
        return null;
    }

}

/**
 * Sauve l'ensemble des items dans le fichier json
 * ...
 */
function saveTodoThings($items)
{
    file_put_contents("model/dataStorage/todothings.json", json_encode($items));
}

/**
 * Modifie un item précis
 * Le paramètre $item est un item complet (donc un tableau associatif)
 * ...
 */
function updateTodoThing($item)
{

    $itemLists = readTodoThings();
    // TODO: retrouver l'item donnée en paramètre et le modifier dans le tableau $items


    $itemLists[$item['id']] = $item;
    saveTodoThings($itemLists);
}

/**
 * Détruit un item précis, identifié par son id
 * ...
 */
function destroyTodoThing($id)
{
    $items = readTodoThings();
    // TODO: coder la recherche de l'item demandé et sa destruction dans le tableau
    unset($items[$id]);
    saveTodoThings($items);
}

/**
 * Ajoute un nouvel item
 * Le paramètre $item est un item complet (donc un tableau associatif), sauf que la valeur de son id n'est pas valable
 * puisque le modèle ne l'a pas encore traité
 * ...
 */
function createTodoThing($item)
{

    $items = readTodoThings();
    // TODO: trouver un id libre pour le nouvel id et ajouter le nouvel item dans le tableau
    $nextId = max(array_keys($items)) + 1;
    $item['id'] = $nextId;
    $items[] = $item;
    saveTodoThings($items);
    return ($nextId);
}

function readTodoThingsForDay($day, $dayOfWeek)
{
    // TODO return the todothings for a specific day (0=monday, ....)

    $items = readTodoThings();
    foreach ($items as $item) {
        if(($day == 1) && ($item['daything'] == 1)){
            if($item['days'][$dayOfWeek] == true){
                $itemsByDay[] = $item;
            }
        } else if(($day == 0) && ($item['daything'] == 0)){
            if($item['days'][$dayOfWeek] == true){
                $itemsByDay[] = $item;
            }
        }
    }
    return $itemsByDay;
}

