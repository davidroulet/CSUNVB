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
    return json_decode(file_get_contents("model/dataStorage/todothings.json"), true);
}

/**
 * Retourne un item précis, identifié par son id
 * ...
 */
function readTodoListItem($id)
{
    $items = readTodoListItems();
    // TODO: coder la recherche de l'item demandé
    foreach ($items as $item)
    {
        if ($item['id'] == $id)
        {
            return $item;
        }
    }

}

/**
 * Sauve l'ensemble des items dans le fichier json
 * ...
 */
function saveTodoListItems($items)
{
    file_put_contents("model/dataStorage/todothings.json", json_encode($items));
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


    foreach ($itemLists as $i => $itemList)
    {
        if ($item['id'] == $itemList['id'])
        {

            var_dump($item);
            var_dump($itemList);
            $itemLists[$i]['id'] = $item['id'];
            $itemLists[$i]['type'] = $item['type'];
            $itemLists[$i]['daything'] = $item['daything'];
            $itemLists[$i]['description'] = $item['description'];
            $itemLists[$i]['display_order'] = $item['display_order'];
        }

    }

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
    foreach ($items as $i => $item)
    {
        if ($id == $item['id'])
        {
            unset($items[$i]);
        }
    }
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
    $id = 0;
    $items = readTodoListItems();
    // TODO: trouver un id libre pour le nouvel id et ajouter le nouvel item dans le tableau
    $nextId = max(array_keys($items)) + 1;
    /*foreach($items as $item){
        if($id  == $item['id']-1){
            $id = $item('id');
        } else if(!($id == $item['id']-1)){
            return $id+1;
            }else{
            $id = $item('id')+1;
            return $id;
        }
    }*/
    $item['id'] = $nextId;
    $items[] = $item;
    saveTodoListItems($items);
    return ($nextId);
}

function readTodoSheetsForBase($base_id)
{
    // TODO return todosheets for the given base
}

function getTodothingsForDay($day)
{
    $items = readTodoListItems();
    // TODO return the todothings for a specific day (0=monday, ....)
}
?>
