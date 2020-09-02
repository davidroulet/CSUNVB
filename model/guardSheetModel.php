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
    return execute("UPDATE bases SET date = :date,state=:state,base_id=:base_id where id = :id", [$id]);

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
    return selectMany('SELECT * FROM guardsection', []);
}

function getSectionsTitles()
{
    return selectMany('SELECT * FROM guardsection', []);
}

function getGuardLines()
{
    return selectMany('SELECT * FROM guardlines', []);
}

function getGuardComments()
{
    return selectMany('SELECT * FROM guardcontent', []);
}

function getGuardLinesForSection($section)
{
    // TODO return le lines for one section only
    return selectOne('SELECT * FROM guarlines where section=:section', ['section' => $section]);
    //$section = getGuardLines();
    //for ($guardline = 0;$guardline < $section ; $guardline++){}
}

function getGuardSheetsByBase($base_id)
{
    return selectOne('select * from guardsheets where base_id=:base_id', ['base_id' => $base_id]);
}
function getGuradSheetWeek($week,$base){
    return selectOne('SELECT * FROM guardsheets INNER JOIN bases ON bases.id=base_id WHERE week =:week AND base_id=:base', ['week' => $week, 'base' => $base]);
}

?>
