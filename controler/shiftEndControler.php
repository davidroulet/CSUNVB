<?php
/**
 * Auteur: Thomas Grossmann / Mounir Fiaux
 * Date: Mars 2020
 **/

require_once 'model/guardSheetModel.php';
require_once 'model/adminModel.php';

function shiftEndHomePage()
{
    $TitlesLines = getGuardLines();
    $Titles = getSectionsTitles();
    $guardsheets = getGuardsheets();
    require_once 'view/viewsShiftEnd/shiftEndHome.php';
}

function listShiftEnd($base_id)
{
    $Bases = getbases();
    $list = getGuradSheet();

    require_once 'view/viewsShiftEnd/ListShiftEnd.php';
}
function  ShiftEndTable($semaine){


    $GuardSheet = getGuradSheetWeek($semaine, $_SESSION["Selectsite"]); // la feuille de stupéfiants à afficher

}
?>
