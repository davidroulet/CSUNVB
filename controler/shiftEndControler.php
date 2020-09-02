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
    $list = getGuardSheetsByBase($base_id);
    require_once 'view/viewsShiftEnd/ListShiftEnd.php';
}
function  ShiftEndTable($semaine){

    $jourDebutSemaine = getdate2($semaine); // récupère les jours de la semaine en fonction de la date sélectionnée
    $GuardSheet = getGuradSheetWeek($semaine, $_SESSION["Selectsite"]); // la feuille de stupéfiants à afficher
    $novas = getNovasForSheet($GuardSheet["id"]); // Obtient la liste des ambulances utilisées par cette feuille
    $drugs = getDrugs(); // Obtient la liste des drugs
    $BatchesForSheet = getBatchesForSheet($GuardSheet["id"]); // Obtient la liste des batches utilisées par cette feuille

    foreach ($BatchesForSheet as $p) {
        $batches[$p["drug_id"]] = $p;
    }
}
?>
