<?php
/**
 * Title: CSUNVB
 * USER: marwan.alhelo
 * Reedition: David Roulet
 * DATE: 05.2020
 **/

/**
 * Retourne tous les items dans un tableau indexé de tableaux associatifs
 * Des points seront également retirés au groupe qui osera laisser une des fonctions de ce fichier telle quelle
 * sans l'adapter au niveau de son nom et de son code pour qu'elle dise plus précisément de quelles données elle traite
 */

/** ------------------TODOSHEETS---------------------- */
function destroyData($Table,$id)
{
    try {
        $dbh = getPDO();
        $query = "DELETE FROM csu.'$Table' WHERE id='$id'";
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute();//execute query
        $dbh = null;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return false;
    }
}
function readTodoSheets()
{
    return selectMany("SELECT * FROM csu.todosheets;",[]);
}
/**
 * Retourne un item précis, identifié par son id
 * ...
 */

function readTodoSheet($id)
{
    return selectMany("SELECT * FROM csu.todosheets where id='$id';",[]);
}
/**
 * Modifie un item précis
 * Le paramètre $item est un item complet (donc un tableau associatif)
 * ...
 */
function updateTodoSheet($item)
{
    try {
        $dbh = getPDO();
        $query = "UPDATE todosheets SET
                    base_id=:base_id,
             state=:state,
                    week=:week,
                    WHERE id =:id";
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute($item);//execute query
        $dbh = null;
        return true;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return false;
    }
}


/**
 * Détruit un item précis, identifié par son id
 * ...
 */
function destroyTodoSheet($id)
{
    $data=destroyData("todosheets",$id);
    return $data;
}


/**
 * Ajoute un nouvel item
 * Le paramètre $item est un item complet (donc un tableau associatif), sauf que la valeur de son id n'est pas valable
 * puisque le modèle ne l'a pas encore traité
 * ...
 */
function createTodoSheet($item)
{
    try {
        $dbh = getPDO();
        $query = "INSERT INTO users (base_id,state,week)
VALUES (:base_id,:state,:week)";
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute($item);//execute query
        $dbh = null;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return false;
    }
}
    function readTodoSheetsForBase($base_id)
{
    try {
        $dbh = getPDO();
        $query = "SELECT * FROM csu.todosheets WHERE todosheets.base_id='$base_id'";
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute();//execute query
        $queryResult = $statement->fetchAll(PDO::FETCH_ASSOC);//prepare result for client
        $dbh = null;
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}


/** ------------------TODOTHINGS---------------------- */

/**
 * Retourne tous les items dans un tableau indexé de tableaux associatifs
 * Des points seront également retirés au groupe qui osera laisser une des fonctions de ce fichier telle quelle
 * sans l'adapter au niveau de son nom et de son code pour qu'elle dise plus précisément de quelles données elle traite
 */

function readTodoThings()
{
    return selectMany("SELECT * FROM csu.todothings;",[]);
}

/**
 * Retourne un item précis, identifié par son id
 * ...
 */
function readTodoThing($id)
{
    return selectMany("SELECT * FROM csu.todothings where id='$id';",[]);
}
/**
 * Modifie un item précis
 * Le paramètre $item est un item complet (donc un tableau associatif)
 * ...
 */
function updateTodoThing($item)
{
    try {
        $dbh = getPDO();
        $query = "UPDATE todothings SET
                    daything=:daything,
             description=:description,
                    type=:type,
                    display_order=:display_order
                    WHERE id =:id";
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute($item);//execute query
        $dbh = null;
        return true;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return false;
    }
}

/**
 * Détruit un item précis, identifié par son id
 * ...
 */
function destroyTodoThing($id)
{
        $data=destroyData("todothings",$id);
        return $data;
}
/**
 * Ajoute un nouvel item
 * Le paramètre $item est un item complet (donc un tableau associatif), sauf que la valeur de son id n'est pas valable
 * puisque le modèle ne l'a pas encore traité
 * ...
 */
function createTodoThing($item)
{
    try {
        $dbh = getPDO();
        $query = "INSERT INTO users (daything,description,type,display_order)
VALUES (:daything,:description,:type,:display_order)";
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute($item);//execute query
        $dbh = null;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return false;
    }
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
