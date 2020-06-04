<?php
/**
 * Auteur: Thomas Grossmann / Mounir Fiaux
 * Date: Mars 2020
 **/



function getGuardsheets(){
    return selectMany('SELECT * FROM guardsheets', []);
}

/**
 * Retourne un item précis, identifié par son id
 * ...
 */

function getGuardsheet($id){
    return selectOne("SELECT * FROM guardsheets where id =:id",['id'=>$id]);
}


function updateGuardsheet($id){
    return execute("UPDATE bases SET date= :date,state=:state,base_id=:base_id where id = :id", [$id]);

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
function destroyGuardsheet($id)
{
    return execute("DELETE * From guardsheets where id = :id", [$id]);

}

/**
 * Ajoute un nouvel item
 * Le paramètre $item est un item complet (donc un tableau associatif), sauf que la valeur de son id n'est pas valable
 * puisque le modèle ne l'a pas encore traité
 * ...
 */
function createShiftEndItem($item)
{
    try {
        $dbh = getPDO();
        $query = "INSERT INTO guardsheets (base_id,state,date)
VALUES (:base_id,:state,:date)";
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute($item);//execute query
        $dbh = null;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return false;
    }
   /* $items = getShiftEndItems();
    // TODO: trouver un id libre pour le nouvel id et ajouter le nouvel item dans le tableau
    saveShiftEndItem($items);
    return ($item); // Pour que l'appelant connaisse l'id qui a été donné
   */
}

function getRemises()
{
    require ".const.php";
    $dbh = getPDO();
    try {
        $query = 'SELECT * FROM guardsection';
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute();//execute query
        $queryResult = $statement->fetchAll(PDO::FETCH_ASSOC);//prepare result for client
        $dbh = null;
        if ($debug) var_dump($queryResult);
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

function getSectionsTitles()
{
    require ".const.php";
    $dbh = getPDO();
    try {
        $query = 'SELECT * FROM guardsection';
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute();//execute query
        $queryResult = $statement->fetchAll(PDO::FETCH_ASSOC);//prepare result for client
        $dbh = null;
        if ($debug) var_dump($queryResult);
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

function getGuardLines()
{
    require ".const.php";
    $dbh = getPDO();
    try {
        $query = 'SELECT * FROM guardlines';
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute();//execute query
        $queryResult = $statement->fetchAll(PDO::FETCH_ASSOC);//prepare result for client
        $dbh = null;
        if ($debug) var_dump($queryResult);
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

function getGuardComments()
{
    require ".const.php";
    $dbh = getPDO();
    try {
        $query = 'SELECT * FROM guardcontent';
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute();//execute query
        $queryResult = $statement->fetchAll(PDO::FETCH_ASSOC);//prepare result for client
        $dbh = null;
        if ($debug) var_dump($queryResult);
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

function getGuardLinesForSection($section)
{
    // TODO return le lines for one section only
    $section = getGuardLines();
    for ($guardline = 0;$guardline < $section ; $guardline++){}
}

function getGuardSheetsByBase($base_id)
{
    require ".const.php";
    $dbh = getPDO();
    try {
        $query = 'select * from guardsheets where base_id=:base_id';
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute(['base_id' => $base_id]);//execute query
        $queryResult = $statement->fetchAll(PDO::FETCH_ASSOC);//prepare result for client
        $dbh = null;
        if ($debug) var_dump($queryResult);
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

?>
