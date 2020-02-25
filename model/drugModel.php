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
function getStupSheets()
{
    $Array= json_decode(file_get_contents("model/dataStorage/stupsheets.json"),true);
    foreach ($Array as $p){
        $SheetsArray[$p["id"]]=$p;
}
    return $SheetsArray;
}

/**
 * Retourne un item précis, identifié par son id
 * ...
 */
function readSheet($id)
{
    $SheetsArray = getStupSheets();
   $Sheet = $SheetsArray[$id];
    return $Sheet;
}

/**
 * Sauve l'ensemble des items dans le fichier json
 * ...
 */
function updateSheets($items)
{
    file_put_contents("model/dataStorage/stupsheets.json",json_encode($items));
}

/**
 * Modifie un item précis
 * Le paramètre $item est un item complet (donc un tableau associatif)
 * ...
 */
function updateSheet($item)
{
    $sheets=getStupSheets();
    foreach ($sheets as $sheet) {
        if($sheet["id"]==$item["id"]){
            $id=$sheet["id"];
            $sheets[$id]=$item;
            updateSheets($sheets);
            return null;
        }

    }
}

/**
 * Détruit un item précis, identifié par son id
 * ...
 */
function destroySheet($id)
{

    $items = getStupSheets();

    unset($items[$id]);
    updateSheets($items);

}

/**
 * Ajoute un nouvel item
 * Le paramètre $item est un item complet (donc un tableau associatif), sauf que la valeur de son id n'est pas valable
 * puisque le modèle ne l'a pas encore traité
 * ...
 */
function createSheet($item)
{
    $items = getStupSheets();
    $idliste[]=0;
    foreach ($items as $p){
        $idliste[]=$p["id"];
    }
    var_dump($idliste);
    foreach ($idliste as $id){
        if ($id!=$idliste){
            $newid=$id;
        }
    }
    $item["id"]=$newid+1;
    $items[]=$item;
    updateSheets($items);
    return $item;
}

?>
