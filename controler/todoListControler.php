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



function todoListHomePage($selectedBase)
{

    $TodoListItemsread = readTodoSheets();
    $todoSheets=readTodoSheetsForBase($selectedBase);
    $bases= getbases();
$basedefault = $_SESSION['username']["base"]['id'];
    require_once 'view/todo/todoListHome.php';
}

function edittodopage($sheetid)
{
    $dayThingsForMonday = readTodoThingsForDay(1, 0);
    $dayThingsForTuesday = readTodoThingsForDay(1, 1);
    $dayThingsForWednesday = readTodoThingsForDay(1, 2);
    $dayThingsForThursday = readTodoThingsForDay(1, 3);
    $dayThingsForFriday = readTodoThingsForDay(1, 4);
    $dayThingsForSaturday = readTodoThingsForDay(1, 5);
    $dayThingsForSunday = readTodoThingsForDay(1, 6);
    //for  night
    $nightThingsForMonday = readTodoThingsForDay(0, 0);
    $nightThingsForTuesday = readTodoThingsForDay(0, 1);
    $nightThingsForWednesday = readTodoThingsForDay(0, 2);
    $nightThingsForThursday = readTodoThingsForDay(0, 3);
    $nightThingsForFriday = readTodoThingsForDay(0, 4);
    $nightThingsForSaturday = readTodoThingsForDay(0, 5);
    $nightThingsForSunday = readTodoThingsForDay(0, 6);

    $thingsFor[$i][$j] = readTodoThingsForDay($i, $j);

    $datesoftheweek = getDatesOfAWeekBySheetId($sheetid);


    require_once 'view/todo/Edittodopage.php';

}

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




?>


