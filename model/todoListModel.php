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
// ceci à marwan faut de ne pas Crud modifier ou ajouter ou prendre de code S:V:P
function readTodoListItems()
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
function readTodoListItem($id)
{
    $items = readTodoListItems();

    // TODO: coder la recherche de l'item demandé
    $item = $items[$id];

    return $item;

}

/**
 * Sauve l'ensemble des items dans le fichier json
 * ...
 */
function saveTodoListItems($items)
{
    file_put_contents("model/dataStorage/todosheets.json", json_encode($items));
}

/**
 * Modifie un item précis
 * Le paramètre $item est un item complet (donc un tableau associatif)
 * ...
 */
function updateTodoListItem($item)
{

    $itemLists = readTodoListItems();
    // TODO: retrouver l'item donnée en paramètre et le modifier dans le tableau $items


    $itemLists[$item['id']] = $item;
    saveTodoListItems($itemLists);
}

/**
 * Détruit un item précis, identifié par son id
 * ...
 */
function destroyTodoListItem($id)
{
    $items = readTodoListItems();
    // TODO: coder la recherche de l'item demandé et sa destruction dans le tableau
    unset($items[$id]);
    saveTodoListItems($items);
}

/**
 * Ajoute un nouvel item
 * Le paramètre $item est un item complet (donc un tableau associatif), sauf que la valeur de son id n'est pas valable
 * puisque le modèle ne l'a pas encore traité
 * ...
 */
function createTodoListItem($item)
{

    $items = readTodoListItems();
    // TODO: trouver un id libre pour le nouvel id et ajouter le nouvel item dans le tableau
    $nextId = max(array_keys($items)) + 1;
    $item['id'] = $nextId;
    $items[] = $item;
    saveTodoListItems($items);
    return ($nextId);
}

function readTodoItemsForBase($base_id)
{
    // TODO return todosheets for the given base
    $items = readTodoListItems();
    foreach ($items as $item) {
        if ($item['base_id'] == $base_id)
            $itemsByBase[] = $item;
    }

    return $itemsByBase;
}

function getTodothingsForDay($day)
{
    // TODO return the todothings for a specific day (0=monday, ....)


    $items = readTodoListItems();
    foreach ($items as $item) {
        if(($day == 1) && ($item['daything'] == 1)){
            $itemsByType[] = $item;
        } else if(($day == 0) && ($item['daything'] == 0)){
            $itemsByDay[] = $item;
        }
    }
    return $itemsByDay;
}
?>
