<?php
/**
 * Auteur: Thomas Grossmann / Mounir Fiaux
 * Date: Mars 2020
 **/

require_once 'model/guardSheetModel.php';
require_once 'model/adminModel.php';

function shiftEndHomePage($semaine)

{
    $site = getbasebyid($_SESSION["Selectsite"])["name"];
    $TitlesLines = getGuardLines();
    $Titles = getSectionsTitles();
    $guardsheets = getGuardsheets();
    require_once 'view/viewsShiftEnd/shiftEndHome.php';
}

function listShiftEnd($base_id)
{
    $Bases = getbases();
    $list = Guardsheet();

    require_once 'view/viewsShiftEnd/ListShiftEnd.php';
}
function  ShiftEndTable($semaine){

    $jourDebutSemaine = getdate2($semaine); // récupère les jours de la semaine en fonction de la date sélectio
    $GuardSheet = getGuradSheetWeek($semaine, $_SESSION["Selectsite"]); // la feuille de stupéfiants à afficher
    require_once 'view/viewsShiftEnd/ListShiftEnd.php';
}
?>
