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

    return selectMany("SELECT * FROM csu.todosheets;", []);
}

/**
 * Retourne un item précis, identifié par son id
 * ...
 */

function readTodoSheet($id)
{
    return selectMany("SELECT * FROM csu.todosheets where id='$id';", []);
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

    return execute("DELETE FROM csu.todosheet WHERE id=:id", ["id" => $id]);
}


/**
 * Ajoute un nouvel item
 * Le paramètre $item est un item complet (donc un tableau associatif), sauf que la valeur de son id n'est pas valable
 * puisque le modèle ne l'a pas encore traité
 * ...
 */
function createTodoSheet($item)
{
    return insert("INSERT INTO todosheets (base_id,state,week) VALUES (:base_id,:state,:week)", $item);
}

function readTodoSheetsForBase($base_id)
{
    return selectMany("SELECT * FROM csu.todosheets WHERE todosheets.base_id=:base_id", ["base_id" => $base_id]);
}


/** ------------------TODOTHINGS---------------------- */

/**
 * Retourne tous les items dans un tableau indexé de tableaux associatifs
 */
function readTodoThings()
{
    return selectMany("SELECT * FROM csu.todothings;", []);
}

/**
 * Retourne un item précis, identifié par son id
 * ...
 */
function readTodoThing($id)
{
    return selectMany("SELECT * FROM csu.todothings where id='$id';", []);
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
    return execute("DELETE FROM csu.todothing WHERE id=:id", ["id" => $id]);
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
// WIP
function readTodoThingsForDay($day, $dayOfWeek)
{
    // TODO return the todothings for a specific day (0=monday, ....)
    /*
        $items = readTodoThings();

        foreach ($items as $item) {

            if (($day == 1) && ($item['daything'] == 1)) {
                if ($item['days'][$dayOfWeek] == true) {
                    $itemsByDay[] = $item;

                }
            } else if (($day == 0) && ($item['daything'] == 0)) {
                if ($item['days'][$dayOfWeek] == true) {
                    $itemsByDay[] = $item;
                }
            }
        }
    return $itemsByDay;
      */

    $todothingsData = json_decode(file_get_contents('model/dataStorage\todothings.json'), 1);

// Insérer les données dans la db
    /*foreach ($logsData as $key => $val) {unset ($logsData[$key]['id']);}
    insertBatch("INSERT INTO logs (timestamp, author_id, item_type, item_id, text) VALUES (:timestamp, :author_id, :item_type, :item_id, :text);", $logsData);
    */

//WeekPlan


    foreach ($todothingsData as $todothingsDataWeek) {

        $planweek="";
        foreach ($todothingsDataWeek["days"] as $day) {
            if ($day == false) {
                $datawrite=0;
            }else{
                $datawrite=1;
            }
            $planweek="$planweek"."$datawrite";
        }
        $todothingsDataWeek["days"]=$planweek;
        $todothingsData[$todothingsDataWeek["id"]]=$todothingsDataWeek;

    }
    var_dump($todothingsData);
}
