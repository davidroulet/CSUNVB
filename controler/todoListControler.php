<?php
/**
 * Title: CSUNVB
 * USER: marwan.alhelo
 * DATE: 13.02.2020
 * Time: 11:29
 *
 **/
/**
 * Title: CSUNVB
 * USER: David.Roulet
 * DATE: 12.06.2020
 * Time: 11:15
 **/
/**
 * Title: CSUNVB - Controller
 * USER: Gatien.Jayme
 * DATE: 27.08.2020
 **/
require_once 'model/todoListModel.php';
require_once 'model/adminModel.php';


function createSheetToDo($base_id) {
    // récupérer la valeur de $item puis transférer les valeurs

    $lastWeek = readLastWeek($base_id);
    createTodoSheet($base_id, $lastWeek['last_week']);
    unset($_POST['site']);
    unset($_POST['base']);
    todoListHomePage($base_id);
}

function todoListHomePage($selectedBase)
{

    $TodoListItemsread = readTodoSheets();
    $todoSheets=readTodoSheetsForBase($selectedBase);
    $bases= getbases();
    $basedefault = $_SESSION['username']["base"]['id'];
    require_once 'view/todo/todoHome.php';
}

function activateSheet($state) {
    $activatestatus = activateTodoSheets($state);
}

function edittodopage($sheetid)
{
    for ($daynight=0; $daynight <= 1; $daynight++) {
        for ($dayofweek = 1; $dayofweek <= 7; $dayofweek++) {
            $todoThings[$daynight][$dayofweek] = readTodoThingsForDay($sheetid,$daynight,$dayofweek);
        }
    }
    $datesoftheweek = getDatesOfAWeekBySheetId($sheetid);
    $days = [1 => "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];

    require_once 'view/todo/Edittodopage.php';

}


function reopenToDo($id)
{

    reopenToDoPage($id);
    require_once 'view/home.php';
}
function closeToDo($id)
{

    closeToDoPage($id);
    require_once 'view/home.php';
}


// retourne un tableau contenant les dates en timestamp des jours contenu pour la feuille donnée
function getDatesOfAWeekBySheetId($sheetid)
{
    $thesheet = readTodoSheet($sheetid);

    $year = substr($thesheet['week'], 0, 2) + 2000;
    $weeknb = substr($thesheet['week'], 2);
    //Tests de tous les jours de l'année demandée jusqu'à trouver la date du premier jour de la semaine demandée.
    $datetest = strtotime("$year-01-01");    //on part du 1 janvier de l'année donnée pour la date de test.
    $dateinrun = null;
    if (empty($weeknb) == false) {  //ne pas executer si la semaine n'est pas donnée, sinon boucle infinie !
        while (empty($dateinrun) == true) {
            if (date("W", $datetest) == $weeknb) {  //si la semaine de cette date est la semaine recherchée donc $weeknb
                $dateinrun = $datetest; //on enregistre cette date
                break;  //on sort du while pour arrêter le processus de recherche.
            } else {
                $datetest = strtotime("+1 day", $datetest); //sinon on teste avec le jour suivant.
            }
        }
    }

    //Enregistrer les valeurs dans un tableau avec les numéros des jours comme index
    for ($j = 1; $j <= 7; $j++) {
        $datesoftheweek[$j] = $dateinrun;   //jour de 1 à 7.

        $dateinrun = strtotime("+1 day", $dateinrun);   //Avancer d'un jour pour avoir la date du jour d'après
    }

    return $datesoftheweek;
}

/*function getNbWeekCalcul($sheetid, $selectedBase) {
    $thesheet = readTodoSheet($sheetid);
    $todoSheets=readTodoSheetsForBase($selectedBase);

    $year = substr($thesheet['week'], 0, 2) + 2000;
    $weeknb = substr($thesheet['week'], 2);
    $maxweek = MaxToDoSheetWeek();

    foreach ($todoSheets as $todoSheet) {
        if ($todoSheet['week'] == $maxweek) {
            strtotime("+1" , $maxweek);
        }
    }
}*/

?>


