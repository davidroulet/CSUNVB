<?php
/**
 * Title: CSUNVB
 * USER: marwan.alhelo
 * DATE: 05.2020
 **/
/**
 * Title: CSUNVB
 * USER: david.roulet
 * DATE: 05.2020
 **/
/**
 * Title: CSUNVB - Model
 * USER: Gatien.Jayme
 * DATE: 27.08.2020
 **/
/**
 * Retourne tous les items dans un tableau indexé de tableaux associatifs
 */

/** ------------------TODOSHEETS---------------------- */
/**
 * Retourne tous les items dans un tableau indexé de tableaux associatifs
 */
function readTodoSheets()
{

    return selectMany("SELECT * FROM todosheets;", []);
}

/**
 * Retourne un item précis, identifié par son id
 * ...
 */

function readTodoSheet($id)
{
    return selectMany("SELECT * FROM todosheets where id='$id';", []);
}

/**
 * Modifie un item précis
 * Le paramètre $item est un item complet (donc un tableau associatif)
 * ...
 */
function updateTodoSheet($item)
{
    return execute("UPDATE todosheets SET
                    base_id=:base_id,
             state=:state,
                    week=:week,
                    WHERE id =:id", $item);
}


/**
 * Détruit un item précis, identifié par son id
 * ...
 */
function destroyTodoSheet($id)
{

    return execute("DELETE FROM todosheet WHERE id=:id", ["id" => $id]);
}


/**
 * Ajoute un nouvel item
 * Le paramètre $item est un item complet (donc un tableau associatif), sauf que la valeur de son id n'est pas valable
 * puisque le modèle ne l'a pas encore traité
 * ...
 */
function readLastWeek($base_id)
{
    return selectOne("SELECT base_id, MAX(week) as 'last_week'  FROM todosheets
where base_id =:base_id
GROUP BY base_id",["base_id" => $base_id]);
}
function createTodoSheet($base_id,$lastWeek)
{
    return insert("INSERT INTO todosheets (base_id,state,week) VALUES (:base_id, 'blank', :lastWeek)", ["base_id" => $base_id, "lastWeek" => $lastWeek+1]);
}

function readTodoSheetsForBase($base_id)
{
    return selectMany("SELECT * FROM todosheets WHERE todosheets.base_id=:base_id", ["base_id" => $base_id]);
}

/** ------------------TODOS---------------------- */

/**
 * Retourne tous les todos
 *
 */
function todos() {
    return selectMany("SELECT * FROM todos", []);
}

function activateTodoSheets($state)
{
    execute("UPDATE todosheets set state = :state", ["state" => $state]);
}
/** ------------------TODOTHINGS---------------------- */

/**
 * Retourne tous les todothings
 *
 */
function readTodoThings()
{
    return selectMany("SELECT * FROM todothings;", []);
}

/**
 * Retourne un item précis, identifié par son id
 * ...
 */
function readTodoThing($id)
{
    return selectMany("SELECT * FROM todothings where id=:id;", ["id" => $id]);
}

/**
 * Modifie un item précis
 * Le paramètre $item est un item complet (donc un tableau associatif)
 * ...
 */
function updateTodoThing($item)
{

    return execute("UPDATE todothings SET
                    daything=:daything,
             description=:description,
                    type=:type,
                    display_order=:display_order
                    WHERE id =:id", $item);
}
/**
 * Détruit un item précis, identifié par son id
 * ...
 */
function destroyTodoThing($id)
{
    return execute("DELETE FROM todothing WHERE id=:id", ["id" => $id]);
}

/**
 * Ajoute un nouvel item
 * Le paramètre $item est un item complet (donc un tableau associatif), sauf que la valeur de son id n'est pas valable
 * puisque le modèle ne l'a pas encore traité
 * ...
 */
function createTodoThing($item)
{
    return insert("INSERT INTO todothing (daything,description,type,display_order) VALUES (:daything,:description,:type,:display_order)", $item);
}

/**
 * Ajoute une nouvelle feuille
 * Les paramètre que je prends
 */
/*function createToDoSheet($week, $state, $base_id) {
    return insert("INSERT INTO todosheets (week, state, base_id) VALUES (:week, :state, :base_id)", ['week' => $week, 'state' => $state, 'base_id' => $base_id]);
}*/

function reopenToDoPage($id)
{
    try {
        $dbh = getPDO();
        $query = "update todosheets
set state='reopen' WHERE id=:id";
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute(["id" => $id]);//execute query
        $queryResult = $statement->fetchAll(PDO::FETCH_ASSOC);//prepare result for client
        $dbh = null;
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }


}

function closeToDoPage($id)
{
    execute("UPDATE todosheets set state='closed' WHERE id=:id", ['id' => $id]);
}



// WIP
function readTodoThingsForDay($sid, $day, $dayOfWeek)
{
    $res = selectMany("SELECT description, type FROM todos INNER JOIN todothings t on todothing_id = t.id where todosheet_id=:sid AND daything = :daything AND day_of_week = :dayofweek",["sid" => $sid, "daything" => $day, "dayofweek" => $dayOfWeek]);
    return $res;
}
