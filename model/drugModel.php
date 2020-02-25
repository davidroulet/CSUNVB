<?php
/**
 * Ce cartouche vaudra quelques points en plus au groupe qui osera le laisser là tel quel ...
 * Auteur: D . Roulet
 * Date: A quoi bon la noté ca change tout les jours
 **/

/**
 * Retourne tous les items dans un tableau indexé de tableaux associatifs
 * Des points seront également retirés au groupe qui osera laisser une des fonctions de ce fichier telle quelle
 * sans l'adapter au niveau de son nom et de son code pour qu'elle dise plus précisément de quelles données elle traite
 */
function getDrugItems()
{
    $Array= json_decode(file_get_contents("model/dataStorage/stups.json"),true);
    foreach ($Array as $p){
        $DrugArray[$p["id"]]=$p;
}
    return $DrugArray;
}

/**
 * Retourne un item précis, identifié par son id
 * ...
 */
function readDrugItem($id)
{
    $items = getDrugItems();
    $item=$items[$id];
        return $item;
}

/**
 * Sauve l'ensemble des items dans le fichier json
 * ...
 */
function updateDrugItems($items)
{
    file_put_contents("model/dataStorage/stups.json",json_encode($items));
}

/**
 * Modifie un item précis
 * Le paramètre $item est un item complet (donc un tableau associatif)
 * ...
 */
function updateDrugItem($item)
{
    $items = getDrugItems();
    foreach ($items as $p){
        if($p["id"]==$item["id"]){
            $id=$p["id"];
            $items[$id]=$item;
            updateDrugItems($items);
            return null;
        }
    }

}

/**
 * Détruit un item précis, identifié par son id
 * ...
 */
function destroyDrugItem($id)
{
    $items = getDrugItems();
  unset($items[$id]);
    updateDrugItems($items);
}

/**
 * Ajoute un nouvel item
 * Le paramètre $item est un item complet (donc un tableau associatif), sauf que la valeur de son id n'est pas valable
 * puisque le modèle ne l'a pas encore traité
 * ...
 */
function createDrugItem($item)
{
    $items = getDrugItems();
    $i = 0;
    foreach ($items as $p) {
        if ($i != $p["id"]) {
            $item["id"] = $i;
            $items[$i] = $item;
            updateDrugItems($items);
            return ($item); // Pour que l'appelant connaisse l'id qui a été donné
        }
        $i++;
    }
}

?>
