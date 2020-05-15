<?php
/**
 * Title: CSUNVB
 * USER: marwan.alhelo
 * DATE: 13.02.2020
 * Time: 11:29
 **/

require "database.php";

function readAdminItems()
{
    return json_decode(file_get_contents("model/dataStorage/items.json"), true);
}

/**
 * Retourne un item précis, identifié par son id
 * ...
 */
function readAdminItem($id)
{
    $items = readAdminItems();
    // TODO: coder la recherche de l'item demandé
    return $item;
}

/**
 * Sauve l'ensemble des items dans le fichier json
 * ...
 */
function updateAdminItems($items)
{
    file_put_contents("model/dataStorage/items.json", json_encode($items));
}

/**
 * Modifie un item précis
 * Le paramètre $item est un item complet (donc un tableau associatif)
 * ...
 */
function updateAdminItem($item)
{
    $items = readAdminItems();
    // TODO: retrouver l'item donnée en paramètre et le modifier dans le tableau $items
    saveAdminItem($items);
}

/**
 * Détruit un item précis, identifié par son id
 * ...
 */
function destroyAdminItem($id)
{
    $items = readAdminItems();
    // TODO: coder la recherche de l'item demandé et sa destruction dans le tableau
    saveAdminItem($items);
}

/**
 * Ajoute un nouvel item
 * Le paramètre $item est un item complet (donc un tableau associatif), sauf que la valeur de son id n'est pas valable
 * puisque le modèle ne l'a pas encore traité
 * ...
 */
function createAdminItem($item)
{
    $items = readAdminItems();
    // TODO: trouver un id libre pour le nouvel id et ajouter le nouvel item dans le tableau
    saveAdminItem($items);
    return ($item); // Pour que l'appelant connaisse l'id qui a été donné
}

function getbasebyid($id)
{
    $SheetsArray = getbases();
    $base = $SheetsArray[$id];
    return $base;
}

function getbases()
{
    return selectMany("SELECT * FROM bases;",[]);
}

function getUserByUsername($username)
{
    $Users = getUsers();
    foreach ($Users as $item) {
        if ($username == $item['initials']) {
            return $item;
        }
    }
}

function getUsers()
{
    $Array = json_decode(file_get_contents("model/dataStorage/Users.json"), true);
    foreach ($Array as $p) {
        $SheetsArray[$p["id"]] = $p;
    }
    return $SheetsArray;
    try {
        $dbh = getPDO();
        foreach ($Array as $p){
        $query = "SELECT * FROM $table";}
        $statment = $dbh->prepare($query); //Prepare query
        $statment->execute(); //Execute query
        $queryResult = $statment->fetchAll(PDO::FETCH_ASSOC); //Prepare result for client
        return $queryResult;
        $dbh = null;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

function SaveUser($Users)
{
    file_put_contents("model/dataStorage/Users.json", json_encode($Users));
}

function SaveBase($bases)
{
    file_put_contents("model/dataStorage/bases.json", json_encode($bases));
}
?>
